<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Client;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Yajra\DataTables\Facades\DataTables;

class BlogController extends Controller
{
    // Index page
    public function index(){
        Session::put('admin_page', 'blog');
        return view ('admin.blog.index');
    }

    // Add page
    public function add(){
        Session::put('admin_page', 'blog');
        $categories = Category::all();
        return view ('admin.blog.add', compact('categories'));
    }

    // Store Blog
    public function store(Request $request){
        $data = $request->all();
        $rules = [
            'blog_title' => 'required|max:255',
            'blog_content' => 'required',
            'image' => 'required',
        ];
        $this->validate($request, $rules);
        $blog = new Blog();
        $blog->blog_title = $data['blog_title'];
        $blog->slug = Str::slug($data['blog_title']);
        $blog->blog_content = $data['blog_content'];
        $blog->category_id = $data['category_id'];
        $random = rand(111, 9999999999);
        if($request->hasFile('image')){
            $image_tmp = $request->file('image');
            if($image_tmp->isValid()){
                $extension = $image_tmp->getClientOriginalExtension();
                $filename = $random.'.'.$extension;
                $image_path = 'public/uploads/blog/' . $filename;
                Image::make($image_tmp)->save($image_path);
                $blog->image = $filename;
            }
        }
        $blog->admin_id = Auth::guard('admin')->user()->id;
        $blog->seo_title = $data['seo_title'];
        $blog->seo_subtitle = $data['seo_subtitle'];
        $blog->seo_keywords = $data['seo_keywords'];
        $blog->seo_description = $data['seo_description'];
        $blog->save();
        Session::flash('info_message', 'Blog has been added successfully');
        return redirect()->back();
    }

    public function dataTable(){
        $model = Blog::latest()->get();
        return DataTables::of($model)
            ->addColumn('action', function ($model){
                return view ('admin.blog._actions', [
                    'model' => $model,
                    'url_edit' => route('blog.edit', $model->id),
                    'url_destroy' => route('blog.delete', $model->id),
                ]);
            })
            ->editColumn('admin_id', function ($model){
                return $model->admin->name;
            })
            ->editColumn('category_id', function ($model){
                return $model->category->category_name;
            })
            ->addIndexColumn()
            ->rawColumns(['actions'])
            ->make(true);
    }


    // Add page
    public function edit($id){
        Session::put('admin_page', 'blog');
        $blog = Blog::findOrFail($id);
        $categories = Category::all();

        return view ('admin.blog.edit', compact('blog', 'categories'));
    }

    // Store Blog
    public function update(Request $request, $id){
        $data = $request->all();
        $rules = [
            'blog_title' => 'required|max:255',
            'blog_content' => 'required',
        ];
        $this->validate($request, $rules);
        $blog = Blog::findOrFail($id);
        $blog->blog_title = $data['blog_title'];
        $blog->slug = Str::slug($data['blog_title']);
        $blog->blog_content = $data['blog_content'];
        $blog->category_id = $data['category_id'];

        $random = rand(111, 9999999999);
        if($request->hasFile('image')){
            $image_tmp = $request->file('image');
            if($image_tmp->isValid()){
                $extension = $image_tmp->getClientOriginalExtension();
                $filename = $random.'.'.$extension;
                $image_path = 'public/uploads/blog/' . $filename;
                Image::make($image_tmp)->save($image_path);
                $blog->image = $filename;
            }
        }

        $blog->admin_id = Auth::guard('admin')->user()->id;

        $blog->seo_title = $data['seo_title'];
        $blog->seo_subtitle = $data['seo_subtitle'];
        $blog->seo_keywords = $data['seo_keywords'];
        $blog->seo_description = $data['seo_description'];
        $blog->save();
        Session::flash('info_message', 'Blog has been updated successfully');
        return redirect()->back();
    }

    public function delete($id){
        $client = Blog::findOrFail($id);
        $client->delete();
        $image_path = 'public/uploads/blog/';
        if(!empty($client->image)){
            unlink($image_path.$client->image);
        }
        Session::flash('info_message', 'Blog Has Been Deleted Successfully');
        return redirect()->back();

    }
}
