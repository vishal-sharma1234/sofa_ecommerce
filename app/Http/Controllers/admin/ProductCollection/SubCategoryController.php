<?php

namespace App\Http\Controllers\admin\ProductCollection;


use App\Http\Controllers\Controller;
use App\Models\{SubCategory, Category};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;
use Config;


class SubCategoryController extends Controller
{

    public function index(Request $request)
    {

        $categories = Category::all();

        if ($request->ajax()) {

            $query = SubCategory::all();
            return Datatables::of($query)
                ->addIndexColumn()
                ->editColumn('status', function ($data) use ($request) {

                    return $data->status ? 'Active' : 'In Active';
                })
                ->editColumn('category', function ($data) use ($request) {

                    return $data->category->name ?? 'N/A';

                })
                ->editColumn('image', function ($data) use ($request) {

                    $image = '';

                    $img = asset('sofaseller/sub_category/' . $data->image);

                    $image .= '<div class="avatar-list text-center"><span class="avatar d-block avatar-xl rounded bradius cover-image" style="background: url(' . $img . ') center center; background-size: cover;"></span></div>';

                    return $image;
                })
                ->editColumn('action', function ($data) use ($request) {
                    $editUrl = route('admin.add.update.product.subcategory', $data->id);
                    $deleteUrl = route('admin.delete.product.subcategory', $data->id);
                    $buttons = '';
                    $buttons .= '<a href="javascript:;" data-url="' . $editUrl . '" class="text-warning edit-record" data-bs-toggle="modal" data-bs-target="#recordModal"><i class="ti ti-pencil ti-md"></i></a>';
                    $buttons .= '<a href="javascript:;" data-url="' . $deleteUrl . '" data-id="' . $data->id . '" id="delete-record" class="text-danger delete-record"><i class="ti ti-trash ti-md"></i></a>';

                    return $buttons;
                })
                ->rawColumns(['action', 'status', 'image','category'])
                ->make(true);
        }

        return view('admin.product_collection.sub_category.index', compact('categories'));
    }

    public function saveRecord(Request $request, $id = null)
    {

        if ($request->isMethod('get')) {

            $data = SubCategory::find($id);

            return response()->json($data);
        }
        if ($request->isMethod('post')) {

            $data = SubCategory::findOrNew($request->id);

            $request->validate([
                'name' => 'required|unique:sub_categories,name,' . $request->id,
                'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:600',
                'category' => 'required',
            ], [
                'name.required' => 'Sub Category name is required.',
                'name.unique'   => 'This category already exists.',
                'image.max' => 'Image size must be less than 600 KB.',
                'category.required' => 'Please select a Category.',
            ]);


            $fileName = null;
            $publicUserDocPath = public_path('sofaseller/sub_category');

            if (!File::isDirectory($publicUserDocPath)) {
                File::makeDirectory($publicUserDocPath, 0777, true, true);
            }

            if ($request->hasFile('image')) {

                if (!empty($data->image) && file_exists($publicUserDocPath . '/' . $data->image)) {
                    unlink($publicUserDocPath . '/' . $data->image);
                }

                $files = $request->file('image');
                $extension = $files->getClientOriginalExtension();
                $fileName =  Str::random(5) . "-" . date('his') . "-" . Str::slug($request->image, '-') . "." . $extension;
                $files->move($publicUserDocPath, $fileName);
            }

            $data->name = $request->name;
            $data->slug = Str::slug($request->name);
            $data->category_id = $request->category;
            $data->image = $fileName ?? $data->image;
            $data->description = $request->description;
            $data->status = $request->status;
            $isSave =  $data->save();

            if (!$isSave) {
                return response()->json([
                    'error' => true,
                    'message' => 'Please try again later!'
                ]);
            }

            return response()->json([
                'success' => true,
                'message' => 'Sub Category Saved Successfully!'
            ]);
        }
    }

    public function deleteRecord($id)
    {

        $data = SubCategory::find($id);

        if (!$data) {
            return response()->json([
                'error' => true,
                'message' => 'Sub Category not found!',
            ]);
        }

        if (!empty($data->image) && file_exists(public_path('sofaseller/sub_category/' . $data->image))) {
            unlink(public_path('sofaseller/sub_category/' . $data->image));
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
}
