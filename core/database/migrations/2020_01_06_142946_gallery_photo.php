<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GalleryPhoto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gallery_photo', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('gallery')->unsigned();
            $table->text('photo');

            $table->foreign('gallery')->references('id')->on('gallery')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('gallery_photo', function (Blueprint $table) {
            //
        });
    }
}
