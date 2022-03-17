<?php

use Brick\Math\BigInteger;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostEstatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_estates', function (Blueprint $table) {
            $table->id();
            $table->string('post_id',10)->comment('ID ຂອງ Post');
            $table->string('title',100)->comment('ຫົວຂໍ້ Post');
            $table->longText('detail')->nullable()->comment('ລາຍລະອຽດ');
            $table->double('sale_price')->nullable()->comment('ລາຄາຊື້');
            $table->string('rate_sale_price')->nullable()->comment('USD THB CNY');
            $table->double('rent_price')->nullable()->comment('ລາຄາເຊົ່າ');
            $table->string('rate_rent_price')->nullable()->comment('USD THB CNY');
            $table->bigInteger('district_id')->length(11)->unsigned();
            $table->bigInteger('province_id')->length(11)->unsigned();
            $table->date('post_date')->comment('ມື້ Post');
            $table->string('lat',200)->nullable()->comment('Latitude');
            $table->string('lng',200)->nullable()->comment('Longitude');
            $table->tinyInteger('property_mode')->comment('1 buy, 2 sell, 3 rent ');
            $table->tinyInteger('type_id')->comment('1 apartment, 2 villa, 3 house and land, 4 unit or shop house, 5 residential land, 6 flat or rowhouse, 7 commercial land, 8 farm land, 9 hotel or Tourism, 10 office, 11 Retail or Commercial, 12 warehouse, 13 factory');
            $table->boolean('public_status')->comment('ສະແດງໃນໜ້າເວັບ');
            $table->date('public_date')->nullable()->comment('ມື້ເຜີຍແຜ່');
            $table->string('description_map')->nullable();
            $table->BigInteger('view')->default(0);

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
        Schema::dropIfExists('post_estates');
    }
}
