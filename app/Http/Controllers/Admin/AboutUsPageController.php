<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutUsPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;

class AboutUsPageController extends Controller
{
    // Index page
    public function index(){
        Session::put('admin_page', 'about');
        $about = AboutUsPage::first();
        return view ('admin.about.index', compact('about'));
    }

    public function updateAbout(Request $request, $id){
        $data = $request->all();
        $rules = [
            'page_name' => 'required|max:255',
            'title' => 'required|max:255',
            'subtitle' => 'required',
            'page_info' => 'required',
            'our_mission' => 'required',
            'our_vision' => 'required',
        ];
        $this->validate($request, $rules);
        $about = AboutUsPage::findOrFail($id);
        $about->page_name = $data['page_name'];
        $about->title = $data['title'];
        $about->subtitle = $data['subtitle'];
        $about->page_info = $data['page_info'];
        $about->our_mission = $data['our_mission'];
        $about->our_vision = $data['our_vision'];

        $random = rand(111, 9999999999);
        if($request->hasFile('image')){
            $image_tmp = $request->file('image');
            if($image_tmp->isValid()){
                $extension = $image_tmp->getClientOriginalExtension();
                $filename = $random.'.'.$extension;
                $image_path = 'public/uploads/' . $filename;
                Image::make($image_tmp)->save($image_path);
                $about->image = $filename;
            }
        }

        $about->save();
        Session::flash('info_message', 'Page has been updated successfully');
        return redirect()->back();
    }
}
