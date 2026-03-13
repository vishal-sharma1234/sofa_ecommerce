<?php

namespace App\Http\Controllers\admin\ProductCollection;

use App\Http\Controllers\Controller;
use App\Models\{Category, Product};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;
use Config;


class CategoryController extends Controller
{

    public function index(Request $request)
    {

        if ($request->ajax()) {

            $query = Category::all();
            return Datatables::of($query)
                ->addIndexColumn()
                ->editColumn('status', function ($data) use ($request) {

                    return $data->status ? 'Active' : 'In Active';
                })
                ->editColumn('image', function ($data) use ($request) {

                    $image = '';

                    $img = asset('sofaseller/category/' . $data->image);

                    $image .= '<div class="avatar-list text-center"><span class="avatar d-block avatar-xl rounded bradius cover-image" style="background: url(' . $img . ') center center; background-size: cover;"></span></div>';

                    return $image;
                })
                ->editColumn('action', function ($data) use ($request) {
                    $editUrl = route('admin.add.update.product.category', $data->id);
                    $deleteUrl = route('admin.delete.product.category', $data->id);
                    $buttons = '';
                    $buttons .= '<a href="javascript:;" data-url="' . $editUrl . '" class="text-warning edit-record" data-bs-toggle="modal" data-bs-target="#recordModal"><i class="ti ti-pencil ti-md"></i></a>';
                    $buttons .= '<a href="javascript:;" data-url="' . $deleteUrl . '" data-id="' . $data->id . '" id="delete-record" class="text-danger delete-record"><i class="ti ti-trash ti-md"></i></a>';

                    return $buttons;
                })
                ->rawColumns(['action', 'status', 'image'])
                ->make(true);
        }

        return view('admin.product_collection.category.index');
    }

    public function saveCategpry(Request $request, $id = null)
    {

        if ($request->isMethod('get')) {

            $category = Category::find($id);

            return response()->json($category);
        }
        if ($request->isMethod('post')) {

            $category = Category::findOrNew($request->id);

            $request->validate([
                'name' => 'required|unique:categories,name,' . $request->id,
                'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:600',
            ], [
                'name.required' => 'Category name is required.',
                'name.unique'   => 'This category already exists.',
                'image.max' => 'Image size must be less than 600 KB.',
            ]);


            $fileName = null;
            $publicUserDocPath = public_path('sofaseller/category');

            if (!File::isDirectory($publicUserDocPath)) {
                File::makeDirectory($publicUserDocPath, 0777, true, true);
            }

            if ($request->hasFile('image')) {

                if (!empty($category->image) && file_exists($publicUserDocPath . '/' . $category->image)) {
                    unlink($publicUserDocPath . '/' . $category->image);
                }

                $files = $request->file('image');
                $extension = $files->getClientOriginalExtension();
                $fileName =  Str::random(5) . "-" . date('his') . "-" . Str::slug($request->image, '-') . "." . $extension;
                $files->move($publicUserDocPath, $fileName);
            }

            $category->name = $request->name;
            $category->slug = Str::slug($request->name);
            $category->image = $fileName ?? $category->image;
            $category->description = $request->description;
            $category->status = $request->status;
            $isSave =  $category->save();

            if (!$isSave) {
                return response()->json([
                    'error' => true,
                    'message' => 'Category Saved Successfully!'
                ]);
            }

            return response()->json([
                'success' => true,
                'message' => 'Category Saved Successfully!'
            ]);
        }
    }

    public function deleteCategory($id)
    {

        $data = Category::find($id);

        if (!$data) {
            return response()->json([
                'error' => true,
                'message' => 'Category not found!',
            ]);
        }

        if (!empty($data->image) && file_exists(public_path('sofaseller/category/' . $data->image))) {
            unlink(public_path('sofaseller/category/' . $data->image));
        }

        $isDelete = $data->delete();

        if (!$isDelete) {
            return response()->json([
                'error' => true,
                'message' => 'Something went wrong, Please try again later!',
            ]);
        }

        return response()->json([
            'success' => true,
            'message' => 'Record Deleted Successfully!',
        ]);
    }


    # Front Methods

    public function category($slug)
    {

        // $category = Category::where('slug', $slug)->with(['products', 'subCategories'])->first();

        $category = Category::where('slug', $slug)
            ->with('subCategories')
            ->firstOrFail();

        $products = $category->products()->paginate(10); // 10 per page

        $popularProducts = Product::latest()->take(3)->get();


        $data = [
            'category' => $category,
            'products' => $products,
            'popularProducts' => $popularProducts,
        ];

        return view('front.product_collection.category', $data);
    }

    public function categories(Request $request)
    {

        $categories = Category::whereHas('products')
            ->withCount('products')
            ->paginate(8);

        $data = [
            'categories' => $categories,
        ];

        return view('front.product_collection.categories', $data);
    }
}
