<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class User extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        //Tạo bảng
        Schema::create('user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('username', 100);
            $table->string('password', 100);
            $table->string('firstName', 100);
            $table->string('lastName', 100);
            $table->string('Email', 100);
            $table->date('birthDay');
            $table->string('address');
            $table->string('CMND');
            $table->string('Numberphone');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('user');
    }
}