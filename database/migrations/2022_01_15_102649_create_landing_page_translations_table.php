<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLandingPageTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('landing_page_translations', function (Blueprint $table) {
            $table->id();
            $table->integer('landing_page_id')->unsigned();
            $table->string('locale')->index();
            $table->string('home_description');
            $table->string('likes');
            $table->string('communication');
            $table->string('advertising');
            $table->string('users');
            $table->string('about');
            $table->string('about_description');
            $table->string('first_about');
            $table->string('second_about');
            $table->string('third_about');
            $table->string('features');
            $table->string('features_description');
            $table->string('how_works');
            $table->string('how_works_description');
            $table->string('first_step');
            $table->string('first_step_description');
            $table->string('second_step');
            $table->string('second_step_description');
            $table->string('third_step');
            $table->string('third_step_description');
            $table->string('fourth_step');
            $table->string('fourth_step_description');
            $table->string('client_say');
            $table->string('contact_us');
            $table->string('contact_information');
            $table->string('location');
            $table->string('location_value');
            $table->string('mobile');
            $table->string('phone');
            $table->string('full_name');
            $table->string('send');
            $table->string('copy_write');
            $table->string('home_title');
            $table->string('contact_form');
            $table->unique(['landing_page_id', 'locale']);
            $table->timestamps();
//            $table->foreign('landing_page_id')->references('id')->on('landing_pages')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('landing_page_translations');
    }
}
