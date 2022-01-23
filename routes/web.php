<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [\App\Http\Controllers\FrontEndController::class, 'index'])->name('index');
Route::get('/about-us', [\App\Http\Controllers\FrontEndController::class, 'aboutUs'])->name('aboutUs');
Route::get('/lawyers', [\App\Http\Controllers\FrontEndController::class, 'lawyers'])->name('lawyers');
Route::get('/services/all', [\App\Http\Controllers\FrontEndController::class, 'services'])->name('services');
Route::get('/nepal/law', [\App\Http\Controllers\FrontEndController::class, 'nepalLaw'])->name('nepalLaw');
Route::get('/contact', [\App\Http\Controllers\FrontEndController::class, 'contact'])->name('contact');
Route::get('/blog', [\App\Http\Controllers\FrontEndController::class, 'blog'])->name('blog');
Route::get('/blog/category/{slug}', [\App\Http\Controllers\FrontEndController::class, 'blogCategory'])->name('blogCategory');
Route::get('/blog/{slug}', [\App\Http\Controllers\FrontEndController::class, 'blogSingle'])->name('blogSingle');
Route::post('/contact-us/message', [\App\Http\Controllers\FrontEndController::class, 'contactMessage'])->name('contactMessage');
Route::post('/contact-us/message/lawyer', [\App\Http\Controllers\FrontEndController::class, 'contactMessageLawyer'])->name('contactMessageLawyer');
Route::post('/search', [\App\Http\Controllers\FrontEndController::class, 'search'])->name('search');


Route::prefix('/admin')->group(function() {
// Admin Login
    Route::get('/login', [\App\Http\Controllers\AdminLoginController::class, 'adminLogin'])->name('adminLogin');
    Route::post('/login', [\App\Http\Controllers\AdminLoginController::class, 'loginAdmin'])->name('loginAdmin');
    Route::group(['middleware' => 'admin'], function () {
        // Admin Dashboard
        Route::get('/dashboard', [\App\Http\Controllers\AdminLoginController::class, 'adminDashboard'])->name('adminDashboard');
        // Admin Profile
        Route::get('/profile', [\App\Http\Controllers\AdminProfileController::class, 'profile'])->name('profile');
        // Profile Update
        Route::post('/profile/update/{id}', [\App\Http\Controllers\AdminProfileController::class, 'updateProfile'])->name('updateProfile');
        // Admin Password
        Route::get('/profile/change-password', [\App\Http\Controllers\AdminProfileController::class, 'changePassword'])->name('changePassword');
        // Checking Admin Password
        Route::post('/profile/check-password', [\App\Http\Controllers\AdminProfileController::class, 'chkUserPassword'])->name('chkUserPassword');
        // Update Password
        Route::post('/profile/update-password/{id}', [\App\Http\Controllers\AdminProfileController::class, 'updatePassword'])->name('updatePassword');


        // Theme Settings
        Route::get('/theme', [\App\Http\Controllers\ThemeController::class, 'theme'])->name('theme');
        Route::post('/theme/update', [\App\Http\Controllers\ThemeController::class, 'updateTheme'])->name('updateTheme');


        // Site Settings
        Route::get('/setting', [\App\Http\Controllers\ThemeController::class, 'setting'])->name('setting');
        Route::post('/setting/update', [\App\Http\Controllers\ThemeController::class, 'udpateSetting'])->name('udpateSetting');



        // Social Media
        Route::get('/social', [\App\Http\Controllers\ThemeController::class, 'social'])->name('social');
        Route::post('/social/update', [\App\Http\Controllers\ThemeController::class, 'socialUpdate'])->name('socialUpdate');


        // Banners
        Route::get('/banners', [\App\Http\Controllers\Admin\BannerController::class, 'index'])->name('banner.index');
        Route::get('/banner/add', [\App\Http\Controllers\Admin\BannerController::class, 'add'])->name('banner.add');
        Route::post('/banner/store', [\App\Http\Controllers\Admin\BannerController::class, 'store'])->name('banner.store');
        Route::get('/table/banner', [\App\Http\Controllers\Admin\BannerController::class, 'dataTable'])->name('table.banner');
        Route::get('/banner/edit/{id}', [\App\Http\Controllers\Admin\BannerController::class, 'edit'])->name('banner.edit');
        Route::post('/banner/update/{id}', [\App\Http\Controllers\Admin\BannerController::class, 'update'])->name('banner.update');
        Route::get('/delete-banner/{id}', [\App\Http\Controllers\Admin\BannerController::class, 'delete'])->name('banner.delete');

        // About Us
        Route::get('/about', [\App\Http\Controllers\Admin\AboutUsPageController::class, 'index'])->name('about.index');
        Route::post('/about/{id}', [\App\Http\Controllers\Admin\AboutUsPageController::class, 'updateAbout'])->name('about.update');


       // Services
        Route::get('/services', [\App\Http\Controllers\Admin\ServiceController::class, 'index'])->name('service.index');
        Route::get('/service/add', [\App\Http\Controllers\Admin\ServiceController::class, 'add'])->name('service.add');
        Route::post('/service/store', [\App\Http\Controllers\Admin\ServiceController::class, 'store'])->name('service.store');
        Route::get('/table/service', [\App\Http\Controllers\Admin\ServiceController::class, 'dataTable'])->name('table.service');
        Route::get('/service/edit/{id}', [\App\Http\Controllers\Admin\ServiceController::class, 'edit'])->name('service.edit');
        Route::post('/service/update/{id}', [\App\Http\Controllers\Admin\ServiceController::class, 'update'])->name('service.update');
        Route::get('/delete-service/{id}', [\App\Http\Controllers\Admin\ServiceController::class, 'delete'])->name('service.delete');


        // Testimonial
        Route::get('/testimonials', [\App\Http\Controllers\Admin\TestimonialController::class, 'index'])->name('testimonial.index');
        Route::get('/testimonial/add', [\App\Http\Controllers\Admin\TestimonialController::class, 'add'])->name('testimonial.add');
        Route::post('/testimonial/store', [\App\Http\Controllers\Admin\TestimonialController::class, 'store'])->name('testimonial.store');
        Route::get('/table/testimonial', [\App\Http\Controllers\Admin\TestimonialController::class, 'dataTable'])->name('table.testimonial');
        Route::get('/testimonial/edit/{id}', [\App\Http\Controllers\Admin\TestimonialController::class, 'edit'])->name('testimonial.edit');
        Route::post('/testimonial/update/{id}', [\App\Http\Controllers\Admin\TestimonialController::class, 'update'])->name('testimonial.update');
        Route::get('/delete-testimonial/{id}', [\App\Http\Controllers\Admin\TestimonialController::class, 'delete'])->name('testimonial.delete');


        // Document
        Route::get('/documents', [\App\Http\Controllers\Admin\DocumentController::class, 'index'])->name('document.index');
        Route::get('/document/add', [\App\Http\Controllers\Admin\DocumentController::class, 'add'])->name('document.add');
        Route::post('/document/store', [\App\Http\Controllers\Admin\DocumentController::class, 'store'])->name('document.store');
        Route::get('/table/document', [\App\Http\Controllers\Admin\DocumentController::class, 'dataTable'])->name('table.document');
        Route::get('/document/edit/{id}', [\App\Http\Controllers\Admin\DocumentController::class, 'edit'])->name('document.edit');
        Route::post('/document/update/{id}', [\App\Http\Controllers\Admin\DocumentController::class, 'update'])->name('document.update');
        Route::get('/delete-document/{id}', [\App\Http\Controllers\Admin\DocumentController::class, 'delete'])->name('document.delete');


        // Blogs

        Route::get('/category', [\App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('category.index');
        Route::post('/category/store', [\App\Http\Controllers\Admin\CategoryController::class, 'store'])->name('category.store');
        Route::post('/category/update/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('category.update');
        Route::get('/table/category', [\App\Http\Controllers\Admin\CategoryController::class, 'dataTable'])->name('table.category');
        Route::get('/delete-category/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'delete'])->name('category.delete');


        Route::get('/blogs', [\App\Http\Controllers\Admin\BlogController::class, 'index'])->name('blog.index');
        Route::get('/blog/add', [\App\Http\Controllers\Admin\BlogController::class, 'add'])->name('blog.add');
        Route::post('/blog/store', [\App\Http\Controllers\Admin\BlogController::class, 'store'])->name('blog.store');
        Route::get('/table/blog', [\App\Http\Controllers\Admin\BlogController::class, 'dataTable'])->name('table.blog');
        Route::get('/blog/edit/{id}', [\App\Http\Controllers\Admin\BlogController::class, 'edit'])->name('blog.edit');
        Route::post('/blog/update/{id}', [\App\Http\Controllers\Admin\BlogController::class, 'update'])->name('blog.update');
        Route::get('/delete-blog/{id}', [\App\Http\Controllers\Admin\BlogController::class, 'delete'])->name('blog.delete');


        Route::get('/contact/message', [\App\Http\Controllers\Admin\ContactController::class, 'index'])->name('contact.index');
        Route::get('/table/contact', [\App\Http\Controllers\Admin\ContactController::class, 'dataTable'])->name('table.contact');
        Route::get('/delete-contact/{id}', [\App\Http\Controllers\Admin\ContactController::class, 'delete'])->name('contact.delete');


        Route::get('/lawyers', [\App\Http\Controllers\Admin\LawyerController::class, 'index'])->name('lawyer.index');
        Route::get('/lawyers/add', [\App\Http\Controllers\Admin\LawyerController::class, 'add'])->name('lawyer.add');
        Route::post('/lawyers/store', [\App\Http\Controllers\Admin\LawyerController::class, 'store'])->name('lawyer.store');
        Route::get('/table/lawyer', [\App\Http\Controllers\Admin\LawyerController::class, 'dataTable'])->name('table.lawyer');
        Route::get('/lawyers/edit/{id}', [\App\Http\Controllers\Admin\LawyerController::class, 'edit'])->name('lawyer.edit');
        Route::post('/lawyers/update/{id}', [\App\Http\Controllers\Admin\LawyerController::class, 'update'])->name('lawyer.update');
        Route::get('/delete-lawyer/{id}', [\App\Http\Controllers\Admin\LawyerController::class, 'delete'])->name('lawyer.delete');


    });
    Route::get('/logout', [\App\Http\Controllers\AdminLoginController::class, 'logout'])->name('adminLogout');
});


// Update Password




