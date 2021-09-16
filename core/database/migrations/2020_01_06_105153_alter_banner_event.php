<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterBannerEvent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('banner_event', function (Blueprint $table) {
            $table->datetime('dari')->after('tanggal')->nullable();
            $table->datetime('sampai')->after('dari')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('banner_event', function (Blueprint $table) {
            //
        });
    }
}
