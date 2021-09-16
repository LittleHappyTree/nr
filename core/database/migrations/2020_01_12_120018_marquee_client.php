<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MarqueeClient extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marquee_client', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('marquee')->unsigned();
            $table->integer('m_client')->unsigned();

            $table->foreign('marquee')->references('id')->on('marquee')->onDelete('cascade');
            $table->foreign('m_client')->references('id')->on('m_client')->onDelete('restrict');
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
        Schema::table('marquee_client', function (Blueprint $table) {
            //
        });
    }
}
