<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->Increments('booking_id');
            $table->Integer('client_id')->unsigned();
            $table->foreign('client_id')->references('id')->on('users');
            $table->Integer('celebrity_id')->unsigned();
            $table->foreign('celebrity_id')->references('id')->on('users');
            $table->integer('amount');
            $table->string('transaction_id');
            $table->Integer('state')->unsigned();
            $table->foreign('state')->references('id')->on('states');
            $table->string('date')->nullable();
            $table->string('time')->nullable();
            $table->string('description')->nullable();
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
        Schema::dropIfExists('bookings');
    }
}
