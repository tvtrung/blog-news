<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePosts extends Migration
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
            $table->text('title');
            $table->text('slug');
            $table->text('description')->nullable();
            $table->text('content')->nullable();
            $table->text('photo')->nullable();
            $table->integer('status');
            $table->integer('view')->nullable();
            $table->text('seo_keyword')->nullable();
            $table->text('seo_description')->nullable();
            $table->text('seo_content')->nullable();
            $table->integer('cat_id');
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
        Schema::dropIfExists('posts');
    }
}
