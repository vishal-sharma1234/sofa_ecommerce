<?php

namespace App\Http\Controllers\admin\Website;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;

class BannerController extends Controller
{
    public function index(Request $request)
    {

        if ($request->ajax()) {
            $query = Banner::all();
            return Datatables::of($query)
                ->addIndexColumn()
                ->editColumn('image', function ($data) use ($request) {

                    $image = '';

                    $img = asset('sofaseller/banner/' . $data->image);

                    $image .= '<div class="avatar-list text-center"><span class="avatar d-block avatar-xl rounded bradius cover-image" style="background: url(' . $img . ') center center; background-size: cover;"></span></div>';

                    return $image;
                })
                ->editColumn('action', function ($data) use ($request) {
                    $editUrl = route('admin.add.update.website.banner', $data->id);
                    $deleteUrl = route('admin.delete.website.banner', $data->id);
                    $buttons = '';
                    $buttons .= '<a href="javascript:;" data-url="' . $editUrl . '" class="text-warning edit-record" data-bs-toggle="modal" data-bs-target="#recordModal"><i class="ti ti-pencil ti-md"></i></a>';
                    $buttons .= '<a href="javascript:;" data-url="' . $deleteUrl . '" data-id="' . $data->id . '" id="delete-record" class="text-danger delete-record"><i class="ti ti-trash ti-md"></i></a>';

                    return $buttons;
                })
                ->rawColumns(['action', 'image'])
                ->make(true);
        }

        return view('admin.website.banner.index');
    }

    public function saveRecord(Request $request, $id = null)
    {

        if ($request->isMethod('get')) {

            $data = Banner::find($id);

            return response()->json($data);
        }
        if ($request->isMethod('post')) {

            $data = Banner::findOrNew($request->id);

            $request->validate([
                'title' => 'required|unique:website_banners,title,' . $request->id,
                'sub_title' => 'required',
                'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:600',
            ], [
                'title.required' => 'Title is required.',
                'title.unique'   => 'Title is already exists.',
                'sub_title.required' => 'Sub Title is required.',
                'image.max' => 'Image size must be less than 600 KB.',
            ]);


            $fileName = null;
            $publicUserDocPath = public_path('sofaseller/banner');

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

            $data->title = $request->title;
            $data->sub_title = $request->sub_title;
            $data->image = $fileName ?? $data->image;
            $isSave =  $data->save();

            if (!$isSave) {
                return response()->json([
                    'error' => true,
                    'message' => 'Please try again later!'
                ]);
            }

            return response()->json([
                'success' => true,
                'message' => 'Banner Saved Successfully!'
            ]);
        }
    }

    public function deleteRecord($id)
    {

        $data = Banner::find($id);

        if (!$data) {
            return response()->json([
                'error' => true,
                'message' => 'Banner not found!',
            ]);
        }

        if (!empty($data->image) && file_exists(public_path('sofaseller/banner/' . $data->image))) {
            unlink(public_path('sofaseller/banner/' . $data->image));
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
