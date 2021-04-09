<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->bigInteger('post_category_id')->unsigned();
            $table->string('artist_name');
            $table->string('title');
            $table->string('desc');
            $table->string('image_url');
            $table->longText('content');
            $table->integer('status')->default(0);
            $table->date('post_date')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('post_category_id')->references('id')->on('post_categories')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
