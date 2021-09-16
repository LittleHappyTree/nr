<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MLaporanTriwulan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_laporan_triwulan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama',115);
            $table->text('photo')->nullable();
            $table->text('file')->nullable();
            $table->datetime('tahun');
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
        Schema::table('m_laporan_triwulan', function (Blueprint $table) {
            //
        });
    }
}
