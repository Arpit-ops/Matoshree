<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\User;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('phone_number')->unique;
            $table->string('email');
            $table->string('password');
            $table->string('otp')->nullable();
            $table->string('is_verify')->nullable();
            $table->string('role')->default(2);
            $table->integer('is_active')->default(1);
            $table->timestamps();
        });
        $data=array('name'=>'admin','role'=>1,'phone_number'=>'7350162604','email'=>'admin@gmail.com','password'=>'$2y$10$esSxMW6nP.GxooOXdM/uROyIEwwgSyYIZmX2MGEf14qYJyOEVJy2.');
        User::Insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}


