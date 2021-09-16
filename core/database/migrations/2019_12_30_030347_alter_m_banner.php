<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterMBanner extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('m_banner', function (Blueprint $table) {
            $table->datetime('dari')->nullable()->after('urutan');
            $table->datetime('sampai')->nullable()->after('dari');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('m_banner', function (Blueprint $table) {
            //
        });
    }
}
