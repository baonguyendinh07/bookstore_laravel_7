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
            $table->string('avatar')->nullable();
            $table->string('password');
            $table->string('email')->unique();
            $table->string('fullname')->nullable();
            $table->date('birthday')->nullable();
            $table->string('phonenumber', 20)->nullable();
            $table->string('address')->nullable();
            $table->dateTime('created_at');
            $table->string('created_by')->nullable();
            $table->dateTime('modified_at');
            $table->string('modified_by')->nullable();
            $table->string('status', 15);
            $table->integer('ordering')->unsigned();
            $table->integer('group_id')->unsigned();
            $table->foreign('group_id')->references('id')->on('groups')->onDelete('cascade');
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
