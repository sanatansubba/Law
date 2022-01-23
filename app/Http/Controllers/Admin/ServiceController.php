<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class ServiceController extends Controller
{
    // Index page
    public function index(){
        Session::put('admin_page', 'service');
        return view ('admin.service.index');
    }

    // Add page
    public function add(){
        Session::put('admin_page', 'service');
        return view ('admin.service.add');
    }

    // Store Service
    public function store(Request $request){
        $data = $request->all();
        $rules = [
            'title' => 'required|max:255',
            'subtitle' => 'required',
            'service_info' => 'required',
        ];
        $this->validate($request, $rules);
        $service = new Service();
        $service->title = $data['title'];
        $service->subtitle = $data['subtitle'];
        $service->slug = Str::slug($data['title']);
        $service->service_info = $data['service_info'];

        $service->save();
        Session::flash('info_message', 'Service has been added successfully');
        return redirect()->back();
    }

    public function dataTable(){
        $model = Service::latest()->get();
        return DataTables::of($model)
            ->addColumn('action', function ($model){
                return view ('admin.service._actions', [
                    'model' => $model,
                    'url_edit' => route('service.edit', $model->id),
                    'url_destroy' => route('service.delete', $model->id),
                ]);
            })
            ->addColumn('info', function ($model){
                return view ('admin.service.info', [
                    'model' => $model,
                ]);
            })
            ->addIndexColumn()
            ->rawColumns(['actions'])
            ->make(true);
    }

    // Edit page
    public function edit($id){
        Session::put('admin_page', 'service');
        $service = Service::findOrFail($id);
        return view ('admin.service.edit', compact('service'));
    }

    // Update Service
    public function update(Request $request, $id){
        $data = $request->all();
        $rules = [
            'title' => 'required|max:255',
            'subtitle' => 'required',
            'service_info' => 'required',
        ];
        $this->validate($request, $rules);
        $service = Service::findOrFail($id);
        $service->title = $data['title'];
        $service->subtitle = $data['subtitle'];
        $service->slug = Str::slug($data['title']);
        $service->service_info = $data['service_info'];

        $service->save();
        Session::flash('info_message', 'Service has been updated successfully');
        return redirect()->back();
    }

    public function delete($id){
        $service = Service::findOrFail($id);
        $service->delete();
        Session::flash('info_message', 'Service Has Been Deleted Successfully');
        return redirect()->back();

    }


}
