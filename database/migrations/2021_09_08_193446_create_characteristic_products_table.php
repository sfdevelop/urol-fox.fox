<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharacteristicProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characteristic_products', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('characteristic_id');
            $table->unsignedBigInteger('product_id');

            $table->foreign('characteristic_id')->references('id')->on('characteristics');
            $table->foreign('product_id')->references('id')->on('products');

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
        Schema::dropIfExists('characteristic_products');
    }
}
