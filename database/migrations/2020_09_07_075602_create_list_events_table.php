<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_events', function (Blueprint $table) {
            $table->increments('events_id');
            $table->string('events_title');
            $table->text('events_content');
            $table->string('events_imageName');
            $table->string('total_donate');
            $table->integer('post_status');
            $table->integer('category_id')->unsigned();
            $table->date('end_time');
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
        Schema::dropIfExists('list_events');
    }
}
