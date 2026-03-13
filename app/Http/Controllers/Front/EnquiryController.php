<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Enquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;
use Config;


class EnquiryController extends Controller
{

    public function index(Request $request)
    {

        if ($request->ajax()) {

            $query = Enquiry::all();
            return Datatables::of($query)
                ->addIndexColumn()
                ->editColumn('is_connected', function ($data) use ($request) {

                    $connectedUrl = route('admin.update.connected', $data->id);

                    if ($data->is_connected) {
                        return '<span data-url="' . $connectedUrl . '" data-id="' . $data->id . '" class="badge bg-label-success update-record pointer" style="cursor: pointer"><i class="ti ti-check me-1"></i> Connected</span>';
                    } else {
                        return '<span data-url="' . $connectedUrl . '" data-id="' . $data->id . '" class="badge bg-label-warning update-record" style="cursor: pointer"><i class="ti ti-clock me-1"></i> Pending</span>';
                    }
                })
                ->editColumn('email', function ($data) use ($request) {

                    return $data->email ? $data->email : 'N/A';
                })
                ->rawColumns(['is_connected', 'email'])
                ->make(true);
        }

        return view('admin.website.enquiry.index');
    }


    public function updateConnected(Request $request, Enquiry $enquiry)
    {
        $enquiry->is_connected = !$enquiry->is_connected;
        $isSave = $enquiry->save();

        if ($isSave) {
            return  response()->json([
                "status" => true,
                "message" => $enquiry->is_connected ? "Enquiry set connected successfully!" : "Enquiry set pendding connection successfully!",
            ]);
        } else {
        }
    }


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
}
