<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BannerEventPeriode extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banner_event_periode', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('banner_event')->unsigned();
            $table->datetime('tanggal');

            $table->foreign('banner_event')->references('id')->on('banner_event')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('banner_event_periode', function (Blueprint $table) {
            //
        });
    }
}
