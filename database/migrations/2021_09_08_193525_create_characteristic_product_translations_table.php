<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharacteristicProductTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characteristic_product_translations', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('characteristic_product_id')->unsigned();
            $table->string('locale')->index();
            $table->string('title_character');

//            $table->unique(['characteristic_product_id','cp_id', 'char_prod_id']);
            $table->foreign('characteristic_product_id', 'char_prod_id')
                ->references('id')
                ->on('characteristic_products')
                ->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('characteristic_product_translations');
    }
}
