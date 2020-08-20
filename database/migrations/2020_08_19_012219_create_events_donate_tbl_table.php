<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsDonateTblTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donate_tbl', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('member_id')->nullable();
            $table->string('name');
            $table->string('email');
            $table->string('address');
            $table->string('phone');
            $table->integer('amount');
            $table->integer('events_id')->nullable();
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('category_id')->on('category_post');
            $table->integer('donator_status');
            $table->integer('money_status');
            $table->string('comment')->nullable();
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
        Schema::dropIfExists('donate_tbl');
    }
}
