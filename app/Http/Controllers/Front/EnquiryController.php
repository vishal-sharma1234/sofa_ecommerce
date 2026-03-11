<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\front\Enquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;
use Config;


class EnquiryController extends Controller
{

    // public function index(Request $request)
    // {

    //     if ($request->ajax()) {

    //         $query = CustomerRreview::all();
    //         return Datatables::of($query)
    //             ->addIndexColumn()
    //             ->editColumn('status', function ($data) use ($request) {

    //                 return $data->status ? 'Publish' : 'In Active';
    //             })
    //             ->editColumn('image', function ($data) use ($request) {

    //                 $image = '';

    //                 $img = asset('sofaseller/website/review/' . $data->image);

    //                 $image .= '<div class="avatar-list text-center"><span class="avatar d-block avatar-xl rounded bradius cover-image" style="background: url(' . $img . ') center center; background-size: cover;"></span></div>';

    //                 return $image;
    //             })
    //             ->editColumn('action', function ($data) use ($request) {
    //                 $deleteUrl = route('admin.delete.review', $data->id);
    //                 $buttons = '';
    //                 $buttons .= '<a href="javascript:;" data-url="' . $deleteUrl . '" data-id="' . $data->id . '" id="delete-record" class="text-danger delete-record"><i class="ti ti-trash ti-md"></i></a>';
    //                 return $buttons;
    //             })
    //             ->rawColumns(['action', 'status', 'image'])
    //             ->make(true);
    //     }

    //     return view('admin.website.customer_review.index');
    // }


    public function saveRecord(Request $request)
    {

    // dd($request->all());
        $enquiry = new Enquiry();
        $request->validate([
            'name' => 'required',
            'phone' => 'required|digits:10',
        ], [
            'name.required' => 'Name is required.',
            'phone.required' => 'Phone is required.',
        ]);

        $enquiry->name = $request->name;
        $enquiry->phone = $request->phone;
        $enquiry->email = $request->email;
        $enquiry->message = $request->message;
        $enquiry->ip_address = $request->ip();
        $isSave =  $enquiry->save();

        if (!$isSave) {
            return response()->json([
                'error' => true,
                'message' => 'Please try again later!'
            ]);
        }

        return response()->json([
            'success' => true,
            'message' => 'Enquiry Send Successfully. We will connect you soon!'
        ]);
    }


    // public function deleteCategory($id)
    // {

    //     $data = CustomerRreview::find($id);

    //     if (!$data) {
    //         return response()->json([
    //             'error' => true,
    //             'message' => 'Review not found!',
    //         ]);
    //     }

    //     if (!empty($data->image) && file_exists(public_path('sofaseller/website/review/' . $data->image))) {
    //         unlink(public_path('sofaseller/website/review/' . $data->image));
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
