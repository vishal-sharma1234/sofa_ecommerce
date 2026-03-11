<?php

namespace App\Http\Controllers\admin;


use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class FaqController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $query = Faq::all();
            return Datatables::of($query)
                ->addIndexColumn()
                ->editColumn('status', function ($data) use ($request) {
                    return $data->status ? 'Active' : 'In Active';
                })
                ->editColumn('action', function ($data) use ($request) {
                    $editUrl = route('admin.add.update.faq', $data->id);
                    $deleteUrl = route('admin.delete.faq', $data->id);
                    $buttons = '';
                    $buttons .= '<a href="' . $editUrl . '" data-url="' . $editUrl . '" class="text-warning"><i class="ti ti-pencil ti-md"></i></a>';
                    $buttons .= '<a href="javascript:;" data-url="' . $deleteUrl . '" data-id="' . $data->id . '" id="delete-record" class="text-danger delete-record"><i class="ti ti-trash ti-md"></i></a>';

                    return $buttons;
                })
                ->rawColumns(['action', 'status'])
                ->make(true);
        }
        return view('admin.faq.index');
    }

    public function saveRecord(Request $request, $id = null)
    {

        $faq = Faq::findOrNew($id);

        if ($request->isMethod('post')) {

            $faq = Faq::findOrNew($request->id);

            $id = $request->id ?? null;


            $rules = [
                'question'               => 'required|string|max:255|unique:categories,name,' . $request->id,
                'answer'          => 'required',
            ];
            $messages = [
                'question.required'          => 'Answer is required.',
                'answer.required'          => 'Answer is required.',
            ];

            $request->validate($rules, $messages);

            // 3️⃣ Assign basic fields
            $faq->question = $request->question;
            $faq->answer = $request->answer;
            $faq->status = $request->status;

            $faq->save();

            if ($request->id) {
                return response()->json(['success' => true, 'message' => 'Faq Updated Successfully!']);
            } else {
                return response()->json(['success' => true, 'message' => 'Faq Added Successfully!']);
            }
        }

        $data = [
            'faq' => $faq,
        ];


        return view('admin.faq.save_faq', $data);
    }


    public function deleteRecord($id)
    {

        $data = Faq::find($id);

        if (!$data) {
            return response()->json([
                'error' => true,
                'message' => 'Faq not found!',
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


    /* Front */

    // public function blogs()
    // {

    //     $blogs = Blog::latest()->paginate(6);

    //     return view('front.module.blog.blogs', compact('blogs'));
    // }

    // public function detail($slug)
    // {

    //     $blog = Blog::where('slug', $slug)->first();
    //     $latestBlogs = Blog::latest()->take(2)->get();
    //     $categories = BlogCategory::with('blogs')->get();



    //     return view('front.module.blog.detail', compact('blog', 'latestBlogs', 'categories'));
    // }

    // public function postComment(Request $request)
    // {

    //     // dd($request->all());
    //     $validated = $request->validate([
    //         'blog_id' => 'required|exists:blogs,id',
    //         'name'    => 'required|string|max:255',
    //         'email'   => 'required|email|max:255',
    //         'comment' => 'required|string|min:5',
    //     ]);

    //     // ✅ Save comment
    //     $comment = Comment::create([
    //         'blog_id'   => $validated['blog_id'],
    //         'name'      => $validated['name'],
    //         'email'     => $validated['email'],
    //         'comment'   => $validated['comment'],
    //     ]);

    //     // ✅ JSON success response
    //     return response()->json([
    //         'status'  => true,
    //         'message' => 'Comment submitted successfully. Awaiting approval.',
    //     ]);
    // }
}
