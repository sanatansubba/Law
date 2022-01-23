<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutUsPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_us_pages', function (Blueprint $table) {
            $table->id();
            $table->string('page_name');
            $table->string('title');
            $table->string('subtitle');
            $table->string('image');
            $table->longText('page_info');
            $table->longText('our_mission');
            $table->longText('our_vision');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('about_us_pages');
    }
}
