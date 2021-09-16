<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterMDireksi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('m_direksi', function (Blueprint $table) {
            $table->string('jabatan_en',255)->after('jabatan')->nullable();
            $table->text('keterangan_en')->after('keterangan')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('m_direksi', function (Blueprint $table) {
            //
        });
    }
}
