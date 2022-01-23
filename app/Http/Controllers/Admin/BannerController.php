<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;
use Yajra\DataTables\Facades\DataTables;


class BannerController extends Controller
{
    // Index page
    public function index(){
        Session::put('admin_page', 'banner');
        return view ('admin.banner.index');
    }

    // Add page
    public function add(){
        Session::put('admin_page', 'banner');
        return view ('admin.banner.add');
    }

    // Store Banner
    public function store(Request $request){
        $data = $request->all();
        $rules = [
            'title' => 'required|max:255',
            'subtitle' => 'required',
            'image' => 'required',
        ];
        $this->validate($request, $rules);
        $banner = new Banner();
        $banner->title = $data['title'];
        $banner->subtitle = $data['subtitle'];
        $banner->link = $data['link'];
        $banner->priority = $data['priority'];
        $random = rand(111, 9999999999);
        if($request->hasFile('image')){
            $image_tmp = $request->file('image');
            if($image_tmp->isValid()){
                $extension = $image_tmp->getClientOriginalExtension();
                $filename = $random.'.'.$extension;
                $image_path = 'public/uploads/banner/' . $filename;
                Image::make($image_tmp)->save($image_path);
                $banner->image = $filename;
            }
        }

        $banner->save();
        Session::flash('info_message', 'Banner has been added successfully');
        return redirect()->back();
    }


    public function dataTable(){
        $model = Banner::orderBy('priority', 'ASC')->get();
        return DataTables::of($model)
            ->addColumn('action', function ($model){
                return view ('admin.banner._actions', [
                    'model' => $model,
                    'url_edit' => route('banner.edit', $model->id),
                    'url_destroy' => route('banner.delete', $model->id),
                ]);
            })
            ->addIndexColumn()
            ->rawColumns(['actions'])
            ->make(true);
    }

    // Edit page
    public function edit($id){
        Session::put('admin_page', 'banner');
        $banner = Banner::findOrFail($id);
        return view ('admin.banner.edit', compact('banner'));
    }


    // Store Banner
    public function update(Request $request, $id){
        $data = $request->all();
        $rules = [
            'title' => 'required|max:255',
            'subtitle' => 'required',
        ];
        $this->validate($request, $rules);
        $banner = Banner::findOrFail($id);
        $banner->title = $data['title'];
        $banner->subtitle = $data['subtitle'];
        $banner->link = $data['link'];
        $banner->priority = $data['priority'];
        $random = rand(111, 9999999999);
        if($request->hasFile('image')){
            $image_tmp = $request->file('image');
            if($image_tmp->isValid()){
                $extension = $image_tmp->getClientOriginalExtension();
                $filename = $random.'.'.$extension;
                $image_path = 'public/uploads/banner/' . $filename;
                Image::make($image_tmp)->save($image_path);
                $banner->image = $filename;
            }
        }

        $banner->save();
        Session::flash('info_message', 'Banner has been updated successfully');
        return redirect()->back();
    }

    public function delete($id){
        $banner = Banner::findOrFail($id);
        $banner->delete();
        $image_path = 'public/uploads/banner/';
        if(!empty($banner->image)){
            unlink($image_path.$banner->image);
        }
        Session::flash('info_message', 'Banner Has Been Deleted Successfully');
        return redirect()->back();

    }
}
