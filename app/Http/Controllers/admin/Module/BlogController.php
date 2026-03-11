<?php

namespace App\Http\Controllers\admin\Module;


use App\Http\Controllers\Controller;
use App\Models\admin\Module\Blog;
use App\Models\Comment;
use App\Models\admin\Module\BlogCategory;
use App\Models\admin\Module\Color;
use App\Models\admin\ProductCollection\{Product, Category, SubCategory};
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\File;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;


class BlogController extends Controller
{
    public function index(Request $request)
    {
        $categories = BlogCategory::all();

        if ($request->ajax()) {

            $query = Blog::all();
            return Datatables::of($query)
                ->addIndexColumn()
                ->editColumn('status', function ($data) use ($request) {
                    return $data->status ? 'Active' : 'In Active';
                })
                ->editColumn('category', function ($data) use ($request) {
                    return $data->category->name ?? '-';
                })
                ->editColumn('image', function ($data) use ($request) {

                    $image = '';

                    $img = asset('sofaseller/module/blogs/' . $data->image);

                    $image .= '<div class="avatar-list text-center"><span class="avatar d-block avatar-xl rounded bradius cover-image" style="background: url(' . $img . ') center center; background-size: cover;"></span></div>';

                    return $image;
                })
                ->editColumn('action', function ($data) use ($request) {
                    $editUrl = route('admin.add.update.blog', $data->id);
                    $deleteUrl = route('admin.delete.blog', $data->id);
                    $buttons = '';
                    $buttons .= '<a href="' . $editUrl . '" data-url="' . $editUrl . '" class="text-warning"><i class="ti ti-pencil ti-md"></i></a>';
                    $buttons .= '<a href="javascript:;" data-url="' . $deleteUrl . '" data-id="' . $data->id . '" id="delete-record" class="text-danger delete-record"><i class="ti ti-trash ti-md"></i></a>';

                    return $buttons;
                })
                ->rawColumns(['action', 'status', 'image', 'categpry'])
                ->make(true);
        }

        $data = [
            'categories' => $categories,
        ];

        return view('admin.module.blog.index', $data);
    }

    public function saveRecord(Request $request, $id = null)
    {

        $blog = Blog::findOrNew($id);

        $categories = BlogCategory::all();

        if ($request->isMethod('post')) {

            $blog = Blog::findOrNew($request->id);

            $id = $request->id ?? null;


            $rules = [
                'title'               => 'required|string|max:255|unique:blogs,title,' . $id,
                'sub_title'               => 'required|string|max:255|unique:blogs,sub_title,' . $id,
                'category_id'       => 'required|exists:blog_categories,id',
                'image'        => $id ? 'nullable|image|mimes:jpg,jpeg,png,webp|max:600' : 'required|image|mimes:jpg,jpeg,png,webp|max:600',
            ];
            $messages = [
                'title.required'          => 'Blog title is required.',
                'sub_title.required'          => 'Blog sub title is required.',
                'category_id.required'   => 'Category is required.',
                'image.required'    => 'Image is required for new blog.',
                'image.max'         => 'Image must be less than 600KB.',
            ];

            $request->validate($rules, $messages);

            // 3️⃣ Assign basic fields
            $blog->title              = $request->title;
            $blog->sub_title              = $request->sub_title;
            $blog->slug              = Str::slug($request->title);
            $blog->category_id       = $request->category_id;
            $blog->description       = $request->description;
            $blog->status            = $request->status;

            $blog->save();


            // ---------------------------------------------------------
            // 4️⃣ Upload Main Image
            // ---------------------------------------------------------

            $publicUserDocPath = public_path('sofaseller/module/blogs');

            if (!File::isDirectory($publicUserDocPath)) {
                File::makeDirectory($publicUserDocPath, 0777, true, true);
            }

            if ($request->hasFile('image')) {

                // Delete old image only in update case
                if ($blog->image && file_exists($publicUserDocPath . '/' . $blog->image)) {
                    unlink($publicUserDocPath . '/' . $blog->image);
                }

                $file      = $request->file('image');
                $filename  = time() . '_main_' . uniqid() . '.' . $file->getClientOriginalExtension();
                $file->move($publicUserDocPath, $filename);

                $blog->image = $filename;
            }


            $blog->save();

            // 7️⃣ Response
            if ($request->id) {
                return response()->json(['success' => true, 'message' => 'Blog Updated Successfully!']);
            } else {
                return response()->json(['success' => true, 'message' => 'Blog Added Successfully!']);
            }
        }

        $data = [
            'blog' => $blog,
            'categories' => $categories,
        ];


        return view('admin.module.blog.save_blog', $data);
    }


    public function deleteRecord($id)
    {

        $data = Blog::find($id);

        if (!$data) {
            return response()->json([
                'error' => true,
                'message' => 'Blog not found!',
            ]);
        }

        if (!empty($data->image) && file_exists(public_path('sofaseller/module/blogs/' . $data->image))) {
            unlink(public_path('sofaseller/module/blogs/' . $data->image));
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

    public function blogs()
    {

        $blogs = Blog::latest()->paginate(6);

        return view('front.module.blog.blogs', compact('blogs'));
    }

    public function detail($slug)
    {

        $blog = Blog::where('slug', $slug)->firstOrFail();
        $latestBlogs = Blog::latest()->take(2)->get();
        $categories = BlogCategory::with('blogs')->get();
        return view('front.module.blog.detail', compact('blog', 'latestBlogs', 'categories'));
    }

    public function postComment(Request $request)
    {

        // dd($request->all());
        $validated = $request->validate([
            'blog_id' => 'required|exists:blogs,id',
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'comment' => 'required|string|min:5',
        ]);

        // ✅ Save comment
        $comment = Comment::create([
            'blog_id'   => $validated['blog_id'],
            'name'      => $validated['name'],
            'email'     => $validated['email'],
            'comment'   => $validated['comment'],
        ]);

        // ✅ JSON success response
        return response()->json([
            'status'  => true,
            'message' => 'Comment submitted successfully. Awaiting approval.',
        ]);
    }
}
