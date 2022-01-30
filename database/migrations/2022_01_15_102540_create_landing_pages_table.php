<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLandingPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('landing_pages', function (Blueprint $table) {
            $table->id();
            $table->string('logo');
            $table->string('home_image');
            $table->string('about_image');
            $table->string('how_it_works_image');
            $table->string('location_image');
            $table->string('email_image');
            $table->string('mobile_image');
            $table->string('phone_image');
            $table->string('full_name_image');
            $table->string('email_value');
            $table->string('mobile_value');
            $table->string('phone_value');
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
        Schema::dropIfExists('landing_pages');
    }
}
