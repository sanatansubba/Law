<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;
use Yajra\DataTables\Facades\DataTables;

class TestimonialController extends Controller
{
    // Index page
    public function index(){
        Session::put('admin_page', 'testimonial');
        return view ('admin.testimonial.index');
    }

    // Add page
    public function add(){
        Session::put('admin_page', 'testimonial');
        return view ('admin.testimonial.add');
    }



    // Store Testimonial
    public function store(Request $request){
        $data = $request->all();
        $rules = [
            'name' => 'required|max:255',
            'position' => 'required',
            'details' => 'required',
            'image' => 'required',
        ];
        $this->validate($request, $rules);
        $testimonial = new Testimonial();
        $testimonial->name = $data['name'];
        $testimonial->details = $data['details'];
        $testimonial->position = $data['position'];
        $random = rand(111, 9999999999);
        if($request->hasFile('image')){
            $image_tmp = $request->file('image');
            if($image_tmp->isValid()){
                $extension = $image_tmp->getClientOriginalExtension();
                $filename = $random.'.'.$extension;
                $image_path = 'public/uploads/testimonial/' . $filename;
                Image::make($image_tmp)->save($image_path);
                $testimonial->image = $filename;
            }
        }

        $testimonial->save();
        Session::flash('info_message', 'Testimonial has been added successfully');
        return redirect()->back();
    }

    public function dataTable(){
        $model = Testimonial::latest()->get();
        return DataTables::of($model)
            ->addColumn('action', function ($model){
                return view ('admin.testimonial._actions', [
                    'model' => $model,
                    'url_edit' => route('testimonial.edit', $model->id),
                    'url_destroy' => route('testimonial.delete', $model->id),
                ]);
            })
            ->addColumn('info', function ($model){
                return view ('admin.testimonial.info',[
                   'model' => $model
                ]);
            })
            ->addIndexColumn()
            ->rawColumns(['actions'])
            ->make(true);
    }

    // Add page
    public function edit($id){
        Session::put('admin_page', 'testimonial');
        $testimonial = Testimonial::findOrFail($id);
        return view ('admin.testimonial.edit', compact('testimonial'));
    }

    // Update testimonial
    public function update(Request $request, $id){
        $data = $request->all();
        $rules = [
            'name' => 'required|max:255',
            'position' => 'required',
            'details' => 'required',
        ];
        $this->validate($request, $rules);
        $testimonial = Testimonial::findOrFail($id);
        $testimonial->name = $data['name'];
        $testimonial->details = $data['details'];
        $testimonial->position = $data['position'];
        $random = rand(111, 9999999999);
        if($request->hasFile('image')){
            $image_tmp = $request->file('image');
            if($image_tmp->isValid()){
                $extension = $image_tmp->getClientOriginalExtension();
                $filename = $random.'.'.$extension;
                $image_path = 'public/uploads/testimonial/' . $filename;
                Image::make($image_tmp)->save($image_path);
                $testimonial->image = $filename;
            }
        }

        $testimonial->save();
        Session::flash('info_message', 'Testimonial has been updated successfully');
        return redirect()->back();
    }


    public function delete($id){
        $testimonail = Testimonial::findOrFail($id);
        $testimonail->delete();
        $image_path = 'public/uploads/testimonial/';
        if(!empty($testimonail->image)){
            unlink($image_path.$testimonail->image);
        }
        Session::flash('info_message', 'Testimonial Has Been Deleted Successfully');
        return redirect()->back();

    }
}
