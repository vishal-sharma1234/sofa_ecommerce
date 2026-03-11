<?php

namespace App\Http\Controllers\admin;


use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Yajra\DataTables\Facades\DataTables;

class TeamController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $query = Team::all();
            return Datatables::of($query)
                ->addIndexColumn()
                ->editColumn('status', function ($data) use ($request) {
                    return $data->status ? 'Active' : 'In Active';
                })
                ->editColumn('image', function ($data) use ($request) {

                    $image = '';

                    $img = asset('sofaseller/teams/' . $data->image);

                    $image .= '<div class="avatar-list text-center"><span class="avatar d-block avatar-xl rounded bradius cover-image" style="background: url(' . $img . ') center center; background-size: cover;"></span></div>';

                    return $image;
                })
                ->editColumn('action', function ($data) use ($request) {
                    $editUrl = route('admin.add.update.team', $data->id);
                    $deleteUrl = route('admin.delete.team', $data->id);
                    $buttons = '';
                    $buttons .= '<a href="' . $editUrl . '" data-url="' . $editUrl . '" class="text-warning"><i class="ti ti-pencil ti-md"></i></a>';
                    $buttons .= '<a href="javascript:;" data-url="' . $deleteUrl . '" data-id="' . $data->id . '" id="delete-record" class="text-danger delete-record"><i class="ti ti-trash ti-md"></i></a>';

                    return $buttons;
                })
                ->rawColumns(['action', 'status', 'image'])
                ->make(true);
        }
        return view('admin.team.index');
    }

    public function saveRecord(Request $request, $id = null)
    {

        $team = Team::findOrNew($id);

        // $categories = BlogCategory::all();

        if ($request->isMethod('post')) {

            $team = Team::findOrNew($request->id);

            $id = $request->id ?? null;


            $rules = [
                'name'               => 'required|string|max:255',
                'designation'               => 'required',
                'phone'               => 'required|numeric|digits:10|regex:/^[0-9]{10}$/',
                'email'               => 'nullable|email',
                'image'        =>  'nullable|image|mimes:jpg,jpeg,png,webp|max:600',
            ];
            $messages = [
                'name.required'          => 'Name is required.',
                'image.max'         => 'Image must be less than 600KB.',
            ];

            $request->validate($rules, $messages);

            // 3️⃣ Assign basic fields
            $team->name              = $request->name;
            $team->phone              = $request->phone;
            $team->email              = $request->email;
            $team->designation       = $request->designation;
            $team->summary       = $request->summary;
            $team->status            = $request->status;

            $team->save();


            // ---------------------------------------------------------
            // 4️⃣ Upload Main Image
            // ---------------------------------------------------------

            $publicUserDocPath = public_path('sofaseller/teams');

            if (!File::isDirectory($publicUserDocPath)) {
                File::makeDirectory($publicUserDocPath, 0777, true, true);
            }

            if ($request->hasFile('image')) {

                // Delete old image only in update case
                if ($team->image && file_exists($publicUserDocPath . '/' . $team->image)) {
                    unlink($publicUserDocPath . '/' . $team->image);
                }

                $file      = $request->file('image');
                $filename  = time() . '_main_' . uniqid() . '.' . $file->getClientOriginalExtension();
                $file->move($publicUserDocPath, $filename);
                $team->image = $filename;
            }


            $team->save();

            if ($request->id) {
                return response()->json(['success' => true, 'message' => 'Team Updated Successfully!']);
            } else {
                return response()->json(['success' => true, 'message' => 'Team Added Successfully!']);
            }
        }

        $data = [
            'team' => $team,
        ];


        return view('admin.team.save_team', $data);
    }


    public function deleteRecord($id)
    {

        $data = Team::find($id);

        if (!$data) {
            return response()->json([
                'error' => true,
                'message' => 'Team not found!',
            ]);
        }

        if (!empty($data->image) && file_exists(public_path('sofaseller/teams/' . $data->image))) {
            unlink(public_path('sofaseller/teams/' . $data->image));
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
