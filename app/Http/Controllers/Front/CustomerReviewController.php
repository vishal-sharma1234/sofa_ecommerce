<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\front\CustomerRreview;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;
use Config;


class CustomerReviewController extends Controller
{

    public function index(Request $request)
    {

        if ($request->ajax()) {

            $query = CustomerRreview::all();
            return Datatables::of($query)
                ->addIndexColumn()
                ->editColumn('status', function ($data) use ($request) {

                    return $data->status ? 'Publish' : 'In Active';
                })
                ->editColumn('image', function ($data) use ($request) {

                    $image = '';

                    $img = asset('sofaseller/website/review/' . $data->image);

                    $image .= '<div class="avatar-list text-center"><span class="avatar d-block avatar-xl rounded bradius cover-image" style="background: url(' . $img . ') center center; background-size: cover;"></span></div>';

                    return $image;
                })
                ->editColumn('action', function ($data) use ($request) {
                    $deleteUrl = route('admin.delete.review', $data->id);
                    $buttons = '';
                    $buttons .= '<a href="javascript:;" data-url="' . $deleteUrl . '" data-id="' . $data->id . '" id="delete-record" class="text-danger delete-record"><i class="ti ti-trash ti-md"></i></a>';
                    return $buttons;
                })
                ->rawColumns(['action', 'status', 'image'])
                ->make(true);
        }

        return view('admin.website.customer_review.index');
    }


    public function saveRecord(Request $request)
    {

        // dd($request->all());
        $review = new CustomerRreview();
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'message' => 'required',
        ], [
            'name.required' => 'Name is required.',
            'phone.required' => 'Phone is required.',
            'message.required' => 'Message is required.',
        ]);

        $fileName = null;
        $publicUserDocPath = public_path('sofaseller/website/review');

        if (!File::isDirectory($publicUserDocPath)) {
            File::makeDirectory($publicUserDocPath, 0777, true, true);
        }

        if ($request->hasFile('image')) {
            $files = $request->file('image');
            $extension = $files->getClientOriginalExtension();
            $fileName =  Str::random(5) . "-" . date('his') . "-" . Str::slug($request->image, '-') . "." . $extension;
            $files->move($publicUserDocPath, $fileName);
        }

        $review->name = $request->name;
        $review->product_id = $request->product_id;
        $review->user_id = auth()->id() ?? null;
        $review->phone = $request->phone;
        $review->email = $request->email;
        $review->message = $request->message;
        $review->image = $fileName;
        $isSave =  $review->save();

        if (!$isSave) {
            return response()->json([
                'error' => true,
                'message' => 'Please try again later!'
            ]);
        }

        return response()->json([
            'success' => true,
            'message' => 'Review Send Successfully!'
        ]);
    }


    public function deleteRecord($id)
    {

        $data = CustomerRreview::find($id);

        if (!$data) {
            return response()->json([
                'error' => true,
                'message' => 'Review not found!',
            ]);
        }

        if (!empty($data->image) && file_exists(public_path('sofaseller/website/review/' . $data->image))) {
            unlink(public_path('sofaseller/website/review/' . $data->image));
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
