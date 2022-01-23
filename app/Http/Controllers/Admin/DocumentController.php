<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Documents;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;
use Yajra\DataTables\Facades\DataTables;

class DocumentController extends Controller
{
    // Index page
    public function index(){
        Session::put('admin_page', 'document');
        return view ('admin.document.index');
    }

    // Add page
    public function add(){
        Session::put('admin_page', 'document');
        return view ('admin.document.add');
    }

    // Store Documnet
    public function store(Request $request){
        $data = $request->all();
        $rules = [
            'title' => 'required|max:255',
            'document' => 'required',
        ];
        $this->validate($request, $rules);
        $document = new Documents();
        $document->title = $data['title'];

        if (request()->hasFile('document')){
            $uploadedImage = $request->file('document');
            $image_tmp = $request->file('document');
            $imageName = time() . '.' . $image_tmp->getClientOriginalExtension();
            $destinationPath = 'public/uploads/document/';
            $uploadedImage->move($destinationPath, $imageName);
            $document->document = $destinationPath . $imageName;
        }

        $document->save();
        Session::flash('info_message', 'Document has been added successfully');
        return redirect()->back();
    }

    public function dataTable(){
        $model = Documents::latest()->get();
        return DataTables::of($model)
            ->addColumn('action', function ($model){
                return view ('admin.document._actions', [
                    'model' => $model,
                    'url_edit' => route('document.edit', $model->id),
                    'url_destroy' => route('document.delete', $model->id),
                ]);
            })
            ->addIndexColumn()
            ->rawColumns(['actions'])
            ->make(true);
    }

    // Edit page
    public function edit($id){
        Session::put('admin_page', 'document');
        $document = Documents::findOrFail($id);
        return view ('admin.document.edit', compact('document'));
    }


    // Store Documnet
    public function update(Request $request, $id){
        $data = $request->all();
        $rules = [
            'title' => 'required|max:255',
        ];
        $this->validate($request, $rules);
        $document = Documents::findOrFail($id);

        $document->title = $data['title'];

        if (request()->hasFile('document')){
            $uploadedImage = $request->file('document');
            $image_tmp = $request->file('document');
            $imageName = time() . '.' . $image_tmp->getClientOriginalExtension();
            $destinationPath = 'public/uploads/document/';
            $uploadedImage->move($destinationPath, $imageName);
            $document->document = $destinationPath . $imageName;
        }

        $document->save();
        Session::flash('info_message', 'Document has been updated successfully');
        return redirect()->back();
    }


    public function delete($id){
        $documnet = Documents::findOrFail($id);
        $documnet->delete();

        Session::flash('info_message', 'Downloads Has Been Deleted Successfully');
        return redirect()->back();

    }
}
