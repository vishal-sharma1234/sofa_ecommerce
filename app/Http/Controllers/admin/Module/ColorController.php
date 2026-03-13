<?php

namespace App\Http\Controllers\admin\Module;


use App\Http\Controllers\Controller;
use App\Models\Color;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;


class ColorController extends Controller
{

    public function index(Request $request)
    {

        // $data = Color::all();

        if ($request->ajax()) {

            $query = Color::all();
            return Datatables::of($query)
                ->addIndexColumn()
                ->editColumn('color', function ($data) {

                    $color = $data->code; 

                    return '<span style="
                                display:inline-block;
                                width:15px;
                                height:15px;
                                border-radius:50%;
                                background:' . $color . ';
                                border:1px solid #ccc;
                            "></span>';
                })
                ->editColumn('action', function ($data) use ($request) {
                    $editUrl = route('admin.add.update.color', $data->id);
                    $deleteUrl = route('admin.delete.color', $data->id);
                    $buttons = '';
                    $buttons .= '<a href="javascript:;" data-url="' . $editUrl . '" class="text-warning edit-record" data-bs-toggle="modal" data-bs-target="#recordModal"><i class="ti ti-pencil ti-md"></i></a>';
                    $buttons .= '<a href="javascript:;" data-url="' . $deleteUrl . '" data-id="' . $data->id . '" id="delete-record" class="text-danger delete-record"><i class="ti ti-trash ti-md"></i></a>';

                    return $buttons;
                })
                ->rawColumns(['action', 'color'])
                ->make(true);
        }

        return view('admin.module.color.index');
    }

    public function saveRecord(Request $request, $id = null)
    {

        if ($request->isMethod('get')) {

            $data = Color::find($id);

            return response()->json($data);
        }
        if ($request->isMethod('post')) {

            $data = Color::findOrNew($request->id);

            $request->validate([
                'name' => 'required|unique:colors,name,' . $request->id,
                'code' => 'required|unique:colors,code,' . $request->id,
            ], [
                'name.required' => 'Color name is required.',
                'name.unique'   => 'This color already exists.',
                'code.required' => 'Color code name is required.',
                'code.unique'   => 'This color code already exists.',
            ]);

            $data->name = $request->name;
            $data->code = $request->code;
            $isSave =  $data->save();

            if (!$isSave) {
                return response()->json([
                    'error' => true,
                    'message' => 'Please try again later!'
                ]);
            }

            return response()->json([
                'success' => true,
                'message' => 'Color Saved Successfully!'
            ]);
        }
    }

    public function deleteRecord($id)
    {

        $data = Color::find($id);

        if (!$data) {
            return response()->json([
                'error' => true,
                'message' => 'Color not found!',
            ]);
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
