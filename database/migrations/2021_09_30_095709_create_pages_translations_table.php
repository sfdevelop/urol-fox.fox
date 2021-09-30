<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages_translations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('pages_id')->unsigned();
            $table->string('locale')->index();
            $table->string('title');
            $table->text('description')->nullable();

            $table->string('seo_title')->nullable();
            $table->string('seo_key')->nullable();
            $table->string('seo_description')->nullable();

            $table->unique(['pages_id', 'locale']);
            $table->foreign('pages_id')->references('id')->on('pages')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pages_translations');
    }
}
