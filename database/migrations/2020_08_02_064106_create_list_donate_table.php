<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListDonateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_donate', function (Blueprint $table) {
            $table->increments('donate_id');
            $table->string('member_id');
            $table->string('firstname')->nullable();
            $table->string('lastname');
            $table->string('organization');
            $table->string('email')->nullable()->unique();
            $table->string('address')->nullable();
            $table->string('country');
            $table->string('city');
            $table->string('phone')->nullable()->unique();
            $table->string('comment');
            $table->string('amount')->nullable();
            $table->string('cause')->nullable();
            $table->string('card_type')->nullable();
            $table->string('card_name')->nullable();
            $table->integer('card_number')->nullable();
            $table->integer('expiration_date')->nullable();
            $table->integer('cvv')->nullable();
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
        Schema::dropIfExists('list_donate');
    }
}
