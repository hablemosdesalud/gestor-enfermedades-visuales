<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('app_id')->unsigned();
            $table->foreign('app_id')->references('id')->on('apps')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->integer('menu_id')->unsigned();
            $table->foreign('menu_id')->references('id')->on('menus')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->integer('post_id')->unsigned()->nullable();
            $table->foreign('post_id')->references('id')->on('posts')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->enum('state',['draft','published'])->default('published');
            $table->string('title');
            $table->string('slug');
            $table->text('content');
            $table->boolean('favourite')->nullable();
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
        Schema::drop('posts');
    }
}
