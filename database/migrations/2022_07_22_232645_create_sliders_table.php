<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sliders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->longText('description');
            $table->string('picture');
            $table->string('link');
            $table->string('status', 15);
            $table->integer('ordering')->unsigned();
            $table->dateTime('created_at');
            $table->string('created_by');
            $table->dateTime('modified_at');
            $table->string('modified_by');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sliders');
    }
}
