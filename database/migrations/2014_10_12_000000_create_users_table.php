<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->string('username')->uniqure();
            $table->string('password');
            $table->string('email')->unique();
            $table->string('fullname');
            $table->date('birthday');
            $table->string('phonenumber', 20);
            $table->string('address');
            $table->dateTime('created_at');
            $table->string('created_by');
            $table->dateTime('modified_at');
            $table->string('modified_by');
            $table->string('status', 15);
            $table->integer('ordering')->unsigned();
            $table->tinyInteger('level');
        });
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
