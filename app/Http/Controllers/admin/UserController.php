<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{



    public function index(Request $request)
    {

        // $customers = User::role('customer')->get();

        if ($request->ajax()) {

            // $blags = Blog::where('user_id', Auth::user()->id);
            $query = User::role('customer');


            return Datatables::of($query)
                ->addIndexColumn()
                ->editColumn('email', function ($data) use ($request) {

                    return $data->email ?? 'N/A';
                })
                ->editColumn('is_active', function ($data) use ($request) {

                    return $data->is_active ? 'Active' : 'In Active';
                })
                ->editColumn('action', function ($data) use ($request) {
                    $editUrl = '#';
                    $deleteUrl = route('admin.delete.user', $data->id);
                    $buttons = '';
                    $buttons .= '<a href="javascript:;" data-url="' . $editUrl . '" class="text-warning edit-record" data-bs-toggle="modal" data-bs-target="#recordModal"><i class="ti ti-pencil ti-md"></i></a>';
                    $buttons .= '<a href="javascript:;" data-url="' . $deleteUrl . '" data-id="' . $data->id . '" id="delete-record" class="text-danger delete-record"><i class="ti ti-trash ti-md"></i></a>';

                    return $buttons;
                })
                ->rawColumns(['action', 'email', 'is_active'])
                ->make(true);
        }

        return view('admin.user.users');
    }
    public function deletUser($id)
    {

        $user = User::find($id);

        $isDelete = $user->delete();

        if (!$isDelete) {
            return response()->json([
                'error' => true,
                'message' => 'Somethin went wrong, Please try again later!',
            ]);
        }

        return response()->json([
            'success' => true,
            'message' => 'User Deleted Successfully!',
        ]);
    }
}
