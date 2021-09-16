<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterMarquee extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('marquee', function (Blueprint $table) {
            $table->datetime('dari')->after('keterangan');
            $table->datetime('sampai')->after('dari');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('marquee', function (Blueprint $table) {
            //
        });
    }
}
