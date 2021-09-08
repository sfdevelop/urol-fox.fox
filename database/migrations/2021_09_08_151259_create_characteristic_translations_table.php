<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharacteristicTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characteristic_translations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('characteristic_id')->unsigned();
            $table->string('locale')->index();
            $table->string('title');

            $table->unique(['characteristic_id', 'locale']);
            $table->foreign('characteristic_id')->references('id')->on('characteristics')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('characteristic_translations');
    }
}
