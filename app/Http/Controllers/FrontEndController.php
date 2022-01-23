<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\AboutUsPage;
use App\Models\Admin;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\Category;
use App\Models\ContactMessage;
use App\Models\Documents;
use App\Models\LawyerMessage;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class FrontEndController extends Controller
{
    // Index Page
    public function index(){
        $about = AboutUsPage::first();
        $services = Service::latest()->take(6)->get();
        $testimonials = Testimonial::latest()->get();
        Session::put('front_page', 'index');
        return view ('front.index', compact('about', 'services', 'testimonials'));
    }

    // About Us
    public function aboutUs(){
        Session::put('front_page', 'about');
        $about = AboutUsPage::first();

        return view ('front.aboutUs', compact('about'));
    }

    // About Us
    public function lawyers(){
        Session::put('front_page', 'lawyer');
        $lawyers = Admin::where('role_id', 2)->latest()->get();
        return view ('front.lawyers', compact('lawyers'));
    }

    // Services
    public function services(){
        $services = Service::latest()->get();
        Session::put('front_page', 'services');

        return view ('front.services', compact( 'services'));
    }

    // Nepal Law
    public function nepalLaw(){
        $docs = Documents::latest()->get();
        Session::put('front_page', 'law');

        return view ('front.nepalLaw', compact('docs'));
    }

    // Contact us
    public function contact(){
        $setting = Setting::first();
        Session::put('front_page', 'contact');

        return view ('front.contact', compact('setting'));
    }

    // Blog
    public function blog(){
        $blogs = Blog::latest()->get();
        Session::put('front_page', 'blog');

        return view ('front.blog', compact('blogs'));
    }

    // Blog Category
    public function blogCategory($slug){
        $category = Category::where('slug', $slug)->first();
        $blogs = Blog::where('category_id', $category->id)->latest()->get();
        return view ('front.blogCategory', compact('blogs', 'category'));
    }


    // Blog Single
    public function blogSingle($slug){
        $blog = Blog::where('slug', $slug)->first();
        return view ('front.blogSingle', compact('blog'));
    }


    public function contactMessage(Request $request){
        $data = $request->all();
        $rules = [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required',
        ];
        $customMessages = [
            'name.required' => 'Please provide your Name',
            'email.required' => 'Please provide your Email',
            'message.required' => 'Please provide your Message',
        ];
        $this->validate($request, $rules, $customMessages);
        $message = new ContactMessage();
        $message->name = $data['name'];
        $message->email = $data['email'];
        $message->phone = $data['phone'];
        $message->message = $data['message'];
        $message->save();


        $email = Setting::first()->email;
        $messageData = ['email' => $data['email'], 'name' => $data['name'], 'contact_message' => $data['message'], 'phone' => $data['phone']];
        Mail::send('emails.contact', $messageData, function($message) use ($email){
            $message->to($email)->subject('New Message from Contact Us');
        });



        Session::flash('info_message', 'Message has been sent successfully');
        return redirect()->back();
    }







    public function contactMessageLawyer(Request $request){
        $data = $request->all();
        $rules = [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required',
        ];
        $customMessages = [
            'name.required' => 'Please provide your Name',
            'email.required' => 'Please provide your Email',
            'message.required' => 'Please provide your Message',
        ];
        $this->validate($request, $rules, $customMessages);
        $message = new LawyerMessage();
        $message->name = $data['name'];
        $message->admin_id = $data['admin_id'];
        $message->email = $data['email'];
        $message->phone = $data['phone'];
        $message->message = $data['message'];
        $message->save();


        $email = $data['admin_email'];
        $messageData = ['email' => $data['email'], 'name' => $data['name'], 'contact_message' => $data['message'], 'phone' => $data['phone']];
        Mail::send('emails.message', $messageData, function($message) use ($email){
            $message->to($email)->subject('New Message from Client');
        });



        Session::flash('info_message', 'Message has been sent successfully');
        return redirect()->back();
    }



    // Services
    public function search(Request $request){

        $data = $request->all();
        $query = $data['query'];
        $lawyers = Admin::query()
            ->where('speciality', 'LIKE' , "%$query%")
             ->get();
        Session::put('front_page', 'lawyers');
        return view ('front.search', compact( 'lawyers', 'query'));
    }
}
