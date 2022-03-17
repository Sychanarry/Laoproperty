<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostEstateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_estate_images', function (Blueprint $table) {
            $table->id();
            $table->string('post_id',10)->comment('ID ຂອງ Post');
            $table->longText('image')->comment('path ຂອງຮູບພາບ');
            $table->string('video_link')->nullable();
            $table->string('video_description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_estate_images');
    }
}
