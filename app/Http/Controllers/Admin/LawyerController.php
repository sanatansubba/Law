<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;
use Yajra\DataTables\Facades\DataTables;
use DB;

class LawyerController extends Controller
{
    // Index page
    public function index(){
        Session::put('admin_page', 'lawyer');
        return view ('admin.lawyer.index');
    }

    // Add Page
    public function add(){
        Session::put('admin_page', 'lawyer');
        return view ('admin.lawyer.add');
    }

    // Store
    public function store(Request $request){
        $data = $request->all();
        $rules = [
            'name' => 'required|max:255',
            'email' => 'required',
            'image' => 'required',
            'speciality' => 'required',
        ];
        $this->validate($request, $rules);
        $lawyer = new Admin();

        $userCount = Admin::where('email', $data['email'])->count();
        if($userCount > 0){
            Session::flash('error_message', 'Email Already Exits in Our Database');
            return redirect()->back();
        }


        $lawyer->name = $data['name'];
        $lawyer->email = $data['email'];
        $lawyer->mobile = $data['mobile'];
        $lawyer->address = $data['address'];
        $lawyer->info = $data['info'];
        $lawyer->speciality = $data['speciality'];
        $lawyer->role_id = 2;
        $lawyer->password = bcrypt('password');
        $random = rand(111, 9999999999);
        if($request->hasFile('image')){
            $image_tmp = $request->file('image');
            if($image_tmp->isValid()){
                $extension = $image_tmp->getClientOriginalExtension();
                $filename = $random.'.'.$extension;
                $image_path = 'public/uploads/admin/' . $filename;
                Image::make($image_tmp)->save($image_path);
                $lawyer->image = $filename;
            }
        }
        $lawyer->save();
        Session::flash('info_message', 'Lawyer has been added successfully');
        return redirect()->back();
    }

    public function dataTable(){
        $model = Admin::where('role_id', 2)->latest()->get();
        return DataTables::of($model)
            ->addColumn('action', function ($model){
                return view ('admin.lawyer._actions', [
                    'model' => $model,
                    'url_edit' => route('lawyer.edit', $model->id),
                    'url_destroy' => route('lawyer.delete', $model->id),
                ]);
            })
            ->editColumn('created_at', function ($model){
                return $model->created_at->diffForHumans();
            })
            ->addIndexColumn()
            ->rawColumns(['actions'])
            ->make(true);
    }


    // edit Page
    public function edit($id){
        Session::put('admin_page', 'lawyer');
        $lawyer = Admin::findOrFail($id);
        return view ('admin.lawyer.edit', compact('lawyer'));
    }

    // Store
    public function update(Request $request, $id){
        $data = $request->all();
        $rules = [
            'name' => 'required|max:255',
            'email' => 'required',
            'speciality' => 'required',
        ];
        $this->validate($request, $rules);

        $userCount = Admin::where('email', $data['email'])->where('id', '!=', $id)->count();
        if($userCount > 0){
            Session::flash('error_message', 'Email Already Exits in Our Database');
            return redirect()->back();
        }

        $lawyer = Admin::findOrFail($id);
        $lawyer->name = $data['name'];
        $lawyer->email = $data['email'];
        $lawyer->mobile = $data['mobile'];
        $lawyer->address = $data['address'];
        $lawyer->info = $data['info'];
        $lawyer->speciality = $data['speciality'];
        $lawyer->role_id = 2;
        $lawyer->password = bcrypt('password');
        $random = rand(111, 9999999999);
        if($request->hasFile('image')){
            $image_tmp = $request->file('image');
            if($image_tmp->isValid()){
                $extension = $image_tmp->getClientOriginalExtension();
                $filename = $random.'.'.$extension;
                $image_path = 'public/uploads/admin/' . $filename;
                Image::make($image_tmp)->save($image_path);
                $lawyer->image = $filename;
            }
        }
        $lawyer->save();
        Session::flash('info_message', 'Lawyer has been updated successfully');
        return redirect()->back();
    }

    public function delete($id){
        $lawyer = Admin::findOrFail($id);
        $lawyer->delete();
        DB::table('blogs')->where('admin_id', $id)->delete();
        $image_path = 'public/uploads/admin/';
        if(!empty($lawyer->image)){
            unlink($image_path.$lawyer->image);
        }
        Session::flash('info_message', 'Lawyer Has Been Deleted Successfully');
        return redirect()->back();

    }
}
