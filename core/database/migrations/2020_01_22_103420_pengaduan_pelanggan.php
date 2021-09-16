<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PengaduanPelanggan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengaduan_pelanggan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_perusahaan',115);
            $table->string('bagian',115);
            $table->string('jabatan',115);
            $table->string('email',115);
            $table->string('tertuju',115);
            $table->text('komentar');
            $table->text('saran');
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
        Schema::table('pengaduan_pelanggan', function (Blueprint $table) {
            //
        });
    }
}
