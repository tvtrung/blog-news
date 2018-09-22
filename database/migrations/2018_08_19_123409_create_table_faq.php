<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableFaq extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_faq', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order');
            $table->string('name')->nullable() ;
            $table->string('email')->nullable() ;
            $table->string('website')->nullable() ;
            $table->string('question');
            $table->text('content');
            $table->integer('status');
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
        Schema::dropIfExists('page_faq');
    }
}
