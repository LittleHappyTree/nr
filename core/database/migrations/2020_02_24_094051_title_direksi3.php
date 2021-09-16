<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TitleDireksi3 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('m_dewan_pengawas_syariah', function (Blueprint $table) {
            $table->string('title',155)->nullable()->after('id');
            $table->string('title_en',155)->nullable()->after('title');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('m_dewan_pengawas_syariah', function (Blueprint $table) {
            //
        });
    }
}
