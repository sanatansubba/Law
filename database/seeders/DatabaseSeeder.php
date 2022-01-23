<?php

namespace Database\Seeders;

use App\Models\About;
use App\Models\AboutUsPage;
use App\Models\Admin;
use App\Models\Banner;
use App\Models\Role;
use App\Models\Setting;
use App\Models\Social;
use App\Models\Theme;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Admin::insert([
            'name' => "Law Firm Website",
            'email' => "admin@gmail.com",
            'password' => bcrypt('password'),
            'mobile' => '9803961735',
            'address' => 'Shantinagar, Kathmandu',
            'role_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Theme::insert([
           'website_name' => 'Biz Tech Booster'
        ]);



        Social::insert([
            'facebook' => '',
        ]);



        Setting::insert([
            'site_title' => '',
            'site_subtitle' => '',
            'address' => '',
            'phone' => '',
            'email' => '',
        ]);

        AboutUsPage::insert([
            'page_name' => 'About Us',
            'title' => '',
            'subtitle' => '',
            'image' => '',
            'page_info' => '',
            'our_mission' => '',
            'our_vision' => '',
        ]);

        Role::insert([
            'name' => 'Super Admin',
        ]);

        Role::insert([
            'name' => 'Lawyer',
        ]);
    }
}
