<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductBannerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_banner', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id');
            $table->integer('service_id')->nullable();
            $table->dateTime('valid_start_date');
            $table->dateTime('valid_end_date');
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
        Schema::dropIfExists('product_banner');
    }
}
