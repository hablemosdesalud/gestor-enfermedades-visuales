<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('app_id')->unsigned();
            $table->foreign('app_id')->references('id')->on('apps')
            ->onUpdate('cascade')->onDelete('cascade');

            $table->string('title');
            $table->string('slug');
            $table->text('description');
            $table->text('post');
            $table->string('miniature');
            $table->string('pdf');

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
        Schema::drop('news');
    }
}
