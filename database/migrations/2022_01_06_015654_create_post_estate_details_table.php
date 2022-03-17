<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostEstateDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_estate_details', function (Blueprint $table) {
            $table->increments('estate_detail_id',11);
            $table->string('post_id',10)->comment('ID ຂອງ Post');
            $table->tinyInteger('bedroom')->nullable()->comment('ຈຳນວນຫ້ອງນອນ');
            $table->tinyInteger('bathroom')->nullable()->comment('ຈຳນວນຫ້ອງນ້ຳ');
            $table->bigInteger('floor_area')->nullable()->comment('ເນື້ອທີ່ຊັ້ນ m2');
            $table->tinyInteger('floor_level')->nullable()->comment('ຊັ້ນທີ');
            $table->tinyInteger('car_space')->nullable()->comment('ຈຳນວນທີ່ຈອດລົດໄດ້');
            $table->string('land_area')->nullable()->comment('ເນື້ອທີ່ດິນ');
            $table->tinyInteger('total_floor')->nullable()->comment('ຈຳນວນຊັ້ນທັງຫມົດ');
            $table->string('completion_year')->nullable()->comment('ປີປຸກສ້າງ');
            $table->tinyInteger('air_conditioning');
            $table->tinyInteger('hot_water');
            $table->tinyInteger('furniture');
            $table->tinyInteger('security');
            $table->tinyInteger('balcony');
            $table->tinyInteger('gym_center');
            $table->tinyInteger('swimming_pool');
            $table->tinyInteger('lift');
            $table->tinyInteger('on_main_road');
            $table->tinyInteger('garden');
            $table->tinyInteger('ideal_for_investors');
            $table->tinyInteger('expat_friendly');
            $table->tinyInteger('close_to_park');
            $table->tinyInteger('close_to_school');
            $table->tinyInteger('close_to_shop');
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
        Schema::dropIfExists('post_estate_details');
    }
}
