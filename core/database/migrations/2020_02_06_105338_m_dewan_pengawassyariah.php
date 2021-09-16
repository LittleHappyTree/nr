<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MDewanPengawassyariah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_dewan_pengawas_syariah', function (Blueprint $table) {
            $table->increments('id');
            $table->text('nama');
            $table->string('jabatan',255);
            $table->string('jabatan_en',255);
            $table->text('keterangan');
            $table->text('keterangan_en');
            $table->text('photo');
            $table->timestamps();

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
        Schema::table('m_dewan_pengawas_syariah', function (Blueprint $table) {
            //
        });
    }
}
