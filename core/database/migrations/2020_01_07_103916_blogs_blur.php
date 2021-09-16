<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BlogsBlur extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs_blur', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('blogs');
            $table->text('photo');

            $table->foreign('blogs')->references('id')->on('blogs')->onDelete('cascade');
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('blogs_blur', function (Blueprint $table) {
            //
        });
    }
}
