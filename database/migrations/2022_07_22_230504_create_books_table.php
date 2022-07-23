<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->longText('short_description');
            $table->longText('description');
            $table->decimal('price', 10, 0);
            $table->integer('sale_off')->unsigned();
            $table->string('picture');
            $table->dateTime('created_at');
            $table->string('created_by');
            $table->dateTime('modified_at');
            $table->string('modified_by');
            $table->string('status', 15);
            $table->tinyInteger('special');
            $table->integer('ordering')->unsigned();
            $table->integer('cate_id')->unsigned();
            $table->foreign('cate_id')->references('id')->on('cates')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
