<?php

namespace App\Http\Controllers\admin\ProductCollection;

use App\Http\Controllers\Controller;
use App\Models\{Product, Category, SubCategory, Color};
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\File;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;


class ProductController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::all();
        $subCategories = SubCategory::all();

        if ($request->ajax()) {

            $query = Product::all();
            return Datatables::of($query)
                ->addIndexColumn()
                ->editColumn('status', function ($data) use ($request) {
                    return $data->status ? 'Active' : 'In Active';
                })
                ->editColumn('category', function ($data) use ($request) {
                    return $data->category->name ?? '-';
                })
                ->editColumn('current_price', function ($data) use ($request) {
                    return '₹' . $data->current_price;
                })
                ->editColumn('old_price', function ($data) use ($request) {
                    return '₹' . $data->old_price;
                })
                ->editColumn('main_image', function ($data) use ($request) {

                    $image = '';

                    $img = asset('sofaseller/product/' . $data->id  . '/' . $data->main_image);

                    $image .= '<div class="avatar-list text-center"><span class="avatar d-block avatar-xl rounded bradius cover-image" style="background: url(' . $img . ') center center; background-size: cover;"></span></div>';

                    return $image;
                })
                ->editColumn('action', function ($data) use ($request) {
                    $editUrl = route('admin.add.update.product', $data->id);
                    $deleteUrl = route('admin.delete.product.category', $data->id);
                    $buttons = '';
                    $buttons .= '<a href="' . $editUrl . '" data-url="' . $editUrl . '" class="text-warning"><i class="ti ti-pencil ti-md"></i></a>';
                    $buttons .= '<a href="javascript:;" data-url="' . $deleteUrl . '" data-id="' . $data->id . '" id="delete-record" class="text-danger delete-record"><i class="ti ti-trash ti-md"></i></a>';

                    return $buttons;
                })
                ->rawColumns(['action', 'status', 'main_image', 'current_price, old_price', 'categpry'])
                ->make(true);
        }

        $data = [
            'categories' => $categories,
            'subCategories' => $subCategories,
        ];

        return view('admin.product_collection.product.index', $data);
    }

    public function saveRecord(Request $request, $id = null)
    {

        $product = Product::findOrNew($id);
        $categories = Category::all();
        $subCategories = SubCategory::all();
        $colors = Color::all();


        if ($request->isMethod('post')) {

            $product = Product::findOrNew($request->id);

            $id = $request->id ?? null; // null = create, value = update

            // dd($request->all());


            $rules = [
                'name'              => 'required|string|max:255',
                // 'slug'              => 'required|string|max:255|unique:products,slug,' . $id,
                'sku'               => 'nullable|string|max:255|unique:products,sku,' . $id,
                'stock'             => 'required|integer|min:0',

                'category_id'       => 'required|exists:categories,id',
                'sub_category_id'   => 'required|exists:sub_categories,id',

                'current_price'     => 'required|numeric|min:0',
                'old_price'         => 'nullable|numeric|min:0',

                // Main image (600 KB max, optional in update)
                'main_image'        => $id
                    ? 'nullable|image|mimes:jpg,jpeg,png,webp|max:600'   // only constraints in edit
                    : 'required|image|mimes:jpg,jpeg,png,webp|max:600',  // required in create

                // Multiple images – each file max 600kb
                'images.*'          => 'nullable|image|mimes:jpg,jpeg,png,webp|max:600',

                // 'material'          => 'nullable|string|max:255',
                // 'length'            => 'nullable|string|max:255',
                // 'width'             => 'nullable|string|max:255',
                // 'height'            => 'nullable|string|max:255',
                // 'warranty'          => 'nullable|string|max:255',

                // 'meta_title'        => 'nullable|string|max:255',
                // 'meta_keywords'     => 'nullable|string|max:255',
                // 'meta_description'  => 'nullable|string',

                // 'short_description' => 'nullable|string',
                // 'description'       => 'nullable|string',

                // 'status'            => 'required|boolean',
            ];

            $messages = [
                'name.required'          => 'Product name is required.',
                // 'slug.required'          => 'Slug is required.',
                // 'slug.unique'            => 'This slug already exists.',
                'sku.unique'             => 'This SKU already exists.',
                'category_id.required'   => 'Category is required.',
                'sub_category_id.required' => 'Sub-category is required.',
                'main_image.required'    => 'Main image is required for new products.',
                'main_image.max'         => 'Main image must be less than 600KB.',
                'images.*.max'           => 'Each additional image must be less than 600KB.',
            ];

            $request->validate($rules, $messages);



            // 3️⃣ Assign basic fields
            $product->name              = $request->name;
            $product->slug              = Str::slug($request->name);
            $product->sku               = $request->sku ?? null;
            $product->stock             = $request->stock;
            $product->category_id       = $request->category_id;
            $product->sub_category_id   = $request->sub_category_id;
            $product->current_price     = $request->current_price;
            $product->old_price         = $request->old_price;
            $product->material          = $request->material;
            $product->length            = $request->length;
            $product->width             = $request->width;
            $product->height            = $request->height;
            $product->warranty          = $request->warranty;
            $product->meta_title        = $request->meta_title;
            $product->meta_keywords     = $request->meta_keywords;
            $product->meta_description  = $request->meta_description;
            $product->short_description = $request->short_description;
            $product->description       = $request->description;
            $product->status            = $request->status;

            $product->save();

            // if (!$request->id) {
            $product->colors()->sync($request->colors);
            // }


            // ---------------------------------------------------------
            // 4️⃣ Upload Main Image
            // ---------------------------------------------------------

            $publicUserDocPath = public_path('sofaseller/product/' . $product->id);

            if (!File::isDirectory($publicUserDocPath)) {
                File::makeDirectory($publicUserDocPath, 0777, true, true);
            }

            if ($request->hasFile('main_image')) {

                // Delete old image only in update case
                if ($id && $product->main_image && file_exists($publicUserDocPath . '/' . $product->main_image)) {
                    unlink($publicUserDocPath . '/' . $product->main_image);
                }

                $file      = $request->file('main_image');
                $filename  = time() . '_main_' . uniqid() . '.' . $file->getClientOriginalExtension();
                $file->move($publicUserDocPath, $filename);

                $product->main_image = $filename;
            }

            // ---------------------------------------------------------
            // 5️⃣ Upload Multiple Images (images[])
            // ---------------------------------------------------------
            $imagesArray = [];

            // keep old images in update (if no new images uploaded)
            if ($id && $product->images) {
                $imagesArray = json_decode($product->images, true);
            }

            if ($request->hasFile('images')) {

                foreach ($request->file('images') as $img) {
                    $multiName = time() . '_img_' . uniqid() . '.' . $img->getClientOriginalExtension();
                    $img->move($publicUserDocPath, $multiName);
                    $imagesArray[] = $multiName;
                }
            }

            $product->images = !empty($imagesArray) ? json_encode($imagesArray) : null;

            // 6️⃣ Save product
            $product->save();

            // 7️⃣ Response
            if ($request->id) {
                return response()->json(['success' => true, 'message' => 'Product Updated Successfully!']);
            } else {
                return response()->json(['success' => true, 'message' => 'Product Added Successfully!']);
            }
        }

        if ($id) {

            $subCategories = SubCategory::where('category_id', $product->category_id)->get();
        }

        $data = [
            'product' => $product,
            'categories' => $categories,
            'subCategories' => $subCategories,
            'colors' => $colors,
        ];


        // C:\Users\DELL\Desktop\myDesktop\sofa-ecommerce\resources\views\admin\product_collection\product\save_product.blade.php

        return view('admin.product_collection.product.save_product', $data);
    }


    public function getSubCategories($category_id)
    {
        $subCats = SubCategory::where('category_id', $category_id)->get();

        return response()->json($subCats);
    }


    public function shop(Request $request)
    {

        $products = Product::latest()->paginate(8);
        $productsCount = Product::all()->count();

        $popularProducts = Product::latest()->take(3)->get();

        $categpries = Category::with('products')->get();

        // dd($categpries);


        $data = [
            'products' => $products,
            'categpries' => $categpries,
            'productsCount' => $productsCount,
            'popularProducts' => $popularProducts,
        ];

        return view('front.product_collection.products', $data);
    }


    public function detail($slug)
    {

        // $product = Product::with(['colors', 'category', 'subCategory', 'reviews' ])->where('slug', $slug)->first();
        $product = Product::with([
            'colors',
            'category',
            'subCategory',
            'reviews' => function ($query) {
                $query->latest()->limit(2);
            }
        ])->where('slug', $slug)->firstOrFail();


        $relatedProducts = Product::where('category_id', $product->category_id)
            ->where('id', '!=', $product->id) // exclude current product
            ->latest()
            ->take(4)
            ->get();

        // dd($product);

        $recentIds = session()->get('recent_products', []);
        $recentProducts = Product::whereIn('id', $recentIds)->get();


        $data = [
            'product' => $product,
            'relatedProducts' => $relatedProducts,
            'recentProducts' => $recentProducts,
        ];

        return view('front.product_collection.product', $data);
    }

    public function storeRecent(Request $request)
    {
        $id = $request->product_id;

        $recent = session()->get('recent_products', []);

        // remove duplicate
        if (($key = array_search($id, $recent)) !== false) {
            unset($recent[$key]);
        }

        // add at start
        array_unshift($recent, $id);

        // limit 10
        $recent = array_slice($recent, 0, 10);

        session()->put('recent_products', $recent);

        return response()->json(['success' => true]);
    }
}
