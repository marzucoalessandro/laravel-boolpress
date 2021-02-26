<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('posts_tag', function (Blueprint $table) {
          $table->unsignedBigInteger('posts_id');
          $table->unsignedBigInteger('tag_id');

          $table->foreign('posts_id')->references('id')->on('posts');
          $table->foreign('tag_id')->references('id')->on('tags');


      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts_tag');
    }
}
