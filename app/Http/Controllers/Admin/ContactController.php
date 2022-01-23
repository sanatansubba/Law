<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use DataTables;

class ContactController extends Controller
{
    // Index
    public function index(){
        Session::put('admin_page', 'contact');
        return view ('admin.contact.index');
    }

    public function dataTable(){
        $model = ContactMessage::latest()->get();
        return DataTables::of($model)
            ->addColumn('action', function ($model){
                return view ('admin.contact._actions', [
                    'model' => $model,
                    'url_destroy' => route('contact.delete', $model->id),

                ]);
            })
            ->editColumn('created_at', function ($model){
                return $model->created_at->diffForHumans();
            })
            ->addColumn('detail', function ($model){
                return view ('admin.contact.message', [
                     'model' => $model
                ]);
            })
            ->addIndexColumn()
            ->rawColumns(['actions'])
            ->make(true);
    }

    public function delete($id){
        $category = ContactMessage::findOrFail($id);
        $category->delete();
        Session::flash('info_message', 'Contact Message Has Been Deleted Successfully');
        return redirect()->back();

    }
}
