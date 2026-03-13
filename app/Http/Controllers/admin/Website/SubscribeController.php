<?php

namespace App\Http\Controllers\admin\Website;

use App\Http\Controllers\Controller;
use App\Models\Subscribe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;

class SubscribeController extends Controller
{
    public function index(Request $request)
    {

        if ($request->ajax()) {

            $query = Subscribe::all();
            return Datatables::of($query)
                ->addIndexColumn()
                // ->editColumn('is_connected', function ($data) use ($request) {

                //     $connectedUrl = route('admin.update.connected', $data->id);

                //     if ($data->is_connected) {
                //         return '<span data-url="' . $connectedUrl . '" data-id="' . $data->id . '" class="badge bg-label-success update-record pointer" style="cursor: pointer"><i class="ti ti-check me-1"></i> Connected</span>';
                //     } else {
                //         return '<span data-url="' . $connectedUrl . '" data-id="' . $data->id . '" class="badge bg-label-warning update-record" style="cursor: pointer"><i class="ti ti-clock me-1"></i> Pending</span>';
                //     }
                // })
                ->editColumn('email', function ($data) use ($request) {

                    return $data->email ? $data->email : 'N/A';
                })
                ->editColumn('created_at', function ($data) use ($request) {

                    return $data->created_at->format('M d Y');
                })
                ->rawColumns(['is_connected', 'email'])
                ->make(true);
        }

        return view('admin.website.subscribe.index');
    }

    // public function saveRecord(Request $request, $id = null)
    // {

    //     if ($request->isMethod('get')) {

    //         $data = Banner::find($id);

    //         return response()->json($data);
    //     }
    //     if ($request->isMethod('post')) {

    //         $data = Banner::findOrNew($request->id);

    //         $request->validate([
    //             'title' => 'required|unique:website_banners,title,' . $request->id,
    //             'sub_title' => 'required',
    //             'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:600',
    //         ], [
    //             'title.required' => 'Title is required.',
    //             'title.unique'   => 'Title is already exists.',
    //             'sub_title.required' => 'Sub Title is required.',
    //             'image.max' => 'Image size must be less than 600 KB.',
    //         ]);


    //         $fileName = null;
    //         $publicUserDocPath = public_path('sofaseller/banner');

    //         if (!File::isDirectory($publicUserDocPath)) {
    //             File::makeDirectory($publicUserDocPath, 0777, true, true);
    //         }

    //         if ($request->hasFile('image')) {

    //             if (!empty($data->image) && file_exists($publicUserDocPath . '/' . $data->image)) {
    //                 unlink($publicUserDocPath . '/' . $data->image);
    //             }

    //             $files = $request->file('image');
    //             $extension = $files->getClientOriginalExtension();
    //             $fileName =  Str::random(5) . "-" . date('his') . "-" . Str::slug($request->image, '-') . "." . $extension;
    //             $files->move($publicUserDocPath, $fileName);
    //         }

    //         $data->title = $request->title;
    //         $data->sub_title = $request->sub_title;
    //         $data->image = $fileName ?? $data->image;
    //         $isSave =  $data->save();

    //         if (!$isSave) {
    //             return response()->json([
    //                 'error' => true,
    //                 'message' => 'Please try again later!'
    //             ]);
    //         }

    //         return response()->json([
    //             'success' => true,
    //             'message' => 'Banner Saved Successfully!'
    //         ]);
    //     }
    // }

    // public function deleteRecord($id)
    // {

    //     $data = Banner::find($id);

    //     if (!$data) {
    //         return response()->json([
    //             'error' => true,
    //             'message' => 'Banner not found!',
    //         ]);
    //     }

    //     if (!empty($data->image) && file_exists(public_path('sofaseller/banner/' . $data->image))) {
    //         unlink(public_path('sofaseller/banner/' . $data->image));
    //     }

    //     $isDelete = $data->delete();

    //     if (!$isDelete) {
    //         return response()->json([
    //             'error' => true,
    //             'message' => 'Something went wrong, Please try again later!',
    //         ]);
    //     }

    //     return response()->json([
    //         'success' => true,
    //         'message' => 'Record Deleted Successfully!',
    //     ]);
    // }
}
