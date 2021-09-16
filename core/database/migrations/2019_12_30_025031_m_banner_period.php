<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MBannerPeriod extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_banner_period', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('m_banner');
            $table->datetime('tanggal');

            $table->foreign('m_banner')->references('id')->on('m_banner')->onDelete('cascade');
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
        Schema::table('m_banner_period', function (Blueprint $table) {
            //
        });
    }
}
