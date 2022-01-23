<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Setting;
use App\Models\Social;
use App\Models\Theme;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;


class ThemeController extends Controller
{
    // Theme Settings
    public function theme(){
        Session::put('admin_page', 'theme');
        $theme = Theme::first();
        return view ('admin.theme.theme', compact('theme'));
    }

    // Update Theme Settings
    public function updateTheme(Request $request){
        $data = $request->all();
        $theme = Theme::first();
        $theme->website_name = $data['website_name'];
        $slug = Str::slug($data['website_name']);
        $currentDate = Carbon::now()->toDateString();
        if ($request->hasFile('logo')) {
            $image_tmp = $request->file('logo');
            if ($image_tmp->isValid()) {
                $extension = $image_tmp->getClientOriginalExtension();
                $filename = $slug . '-' . $currentDate . '.' . $extension;
                $image_path = 'public/uploads/' . $filename;
                // Resize Image Code
                Image::make($image_tmp)->save($image_path);
                // Store image name in products table
                $theme->logo = $filename;
            }
        }
        $slug2 = "favicon";
        if ($request->hasFile('favicon')) {
            $image_tmp = $request->file('favicon');
            if ($image_tmp->isValid()) {
                $extension = $image_tmp->getClientOriginalExtension();
                $filename = $slug2 . '-' . $currentDate . '.' . $extension;
                $image_path = 'public/uploads/' . $filename;
                // Resize Image Code
                Image::make($image_tmp)->save($image_path);
                // Store image name in products table
                $theme->favicon = $filename;
            }
        }
        $theme->save();
        Session::flash('success_message', 'Theme Settings has been saved successfully');
        return redirect()->back();
    }



    // Social Settings
    public function social(){
        Session::put('admin_page', 'social');
        $social = Social::first();
        return view ('admin.theme.social', compact('social'));
    }

    // Social Updates
    public function socialUpdate(Request $request){
        $data = $request->all();
        $social = Social::first();
        $social->facebook = $data['facebook'];
        $social->instagram = $data['instagram'];
        $social->linkedin = $data['linkedin'];
        $social->youtube = $data['youtube'];
        $social->save();
        Session::flash('info_message', 'Social Media Settings has been updated successfully');
        return redirect()->back();
    }

    public function setting(){
        Session::put('admin_page', 'setting');
        $setting = Setting::first();
        return view ('admin.theme.setting', compact('setting'));
    }

    public function udpateSetting(Request $request){
        $data = $request->all();
        $setting = Setting::first();
        $setting->site_title = $data['site_title'];
        $setting->site_subtitle = $data['site_subtitle'];
        $setting->address = $data['address'];
        $setting->phone = $data['phone'];
        $setting->alt_phone = $data['alt_phone'];
        $setting->email = $data['email'];
        $setting->footer_info = $data['footer_info'];
        $setting->map = $data['map'];
        $setting->save();
        Session::flash('info_message', 'Site Settings has been updated successfully');
        return redirect()->back();
    }
}
