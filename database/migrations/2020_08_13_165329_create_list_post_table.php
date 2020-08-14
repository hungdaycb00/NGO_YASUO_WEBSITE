<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListPostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_post', function (Blueprint $table) {
            $table->increments('post_id');
            $table->string('post_title');
            $table->string('post_summary');
            $table->text('post_content');
            $table->string('post_imageName');
            $table->integer('post_highlights');
            $table->integer('post_status');
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('category_id')->on('category_post');
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
        Schema::dropIfExists('list_post');
    }
}
