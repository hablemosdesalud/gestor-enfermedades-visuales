<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLinksTable extends Migration
{
    public function up()
    {
        Schema::create('links', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('app_id')->unsigned();
            $table->foreign('app_id')->references('id')->on('apps')->onUpdate('cascade')->onDelete('cascade');

            $table->string('title');
            $table->string('description');
            $table->string('miniature');
            $table->string('post');

            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::drop('links');
    }
}
