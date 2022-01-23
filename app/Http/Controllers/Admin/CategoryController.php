<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Yajra\DataTables\Facades\DataTables;

class CategoryController extends Controller
{
    // Index page
    public function index(){
        Session::put('admin_page', 'category');
        $categories = Category::all();
        return view ('admin.category.index', compact('categories'));
    }

    // Store Category
    public function store(Request $request){
        $data = $request->all();
        $rules = [
            'category_name' => 'required|max:255',
        ];
        $this->validate($request, $rules);
        $category = new Category();
        $category->category_name = $data['category_name'];
        $category->slug = Str::slug($data['category_name']);
        $category->save();
        Session::flash('info_message', 'Category has been added successfully');
        return redirect()->back();
    }

    public function dataTable(){
        $model = Category::latest()->get();
        return DataTables::of($model)
            ->addColumn('action', function ($model){
                return view ('admin.category._actions', [
                    'model' => $model,
                    'url_destroy' => route('category.delete', $model->id),
                ]);
            })
            ->addIndexColumn()
            ->rawColumns(['actions'])
            ->make(true);
    }


    // Update Category
    public function update(Request $request, $id){
        $data = $request->all();
        $rules = [
            'category_name' => 'required|max:255',
        ];
        $this->validate($request, $rules);
        $category = Category::findOrFail($id);
        $category->category_name = $data['category_name'];
        $category->slug = Str::slug($data['category_name']);
        $category->save();
        Session::flash('info_message', 'Category has been updated successfully');
        return redirect()->back();
    }


    public function delete($id){
        $category = Category::findOrFail($id);
        $category->delete();
        Session::flash('info_message', 'Category Has Been Deleted Successfully');
        return redirect()->back();

    }
}
