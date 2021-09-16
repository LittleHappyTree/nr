<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MarqueePeriode extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marquee_periode', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('marquee')->unsigned();
            $table->datetime('tanggal');

            $table->foreign('marquee')->references('id')->on('marquee')->onDelete('cascade');
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
        Schema::table('marquee_periode', function (Blueprint $table) {
            //
        });
    }
}
