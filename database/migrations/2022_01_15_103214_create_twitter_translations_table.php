<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTwitterTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('twitter_translations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('twitter_id')->unsigned();
            $table->string('locale')->index();
            $table->string('title');
            $table->string('content');
            $table->unique(['landing_page_id', 'locale']);
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
        Schema::dropIfExists('twitter_translations');
    }
}
