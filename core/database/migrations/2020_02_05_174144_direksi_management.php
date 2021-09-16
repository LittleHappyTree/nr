<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DireksiManagement extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_direksi', function (Blueprint $table) {
            $table->increments('id');
            $table->text('nama');
            $table->string('jabatan',255);
            $table->text('keterangan');
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
        Schema::table('m_direksi', function (Blueprint $table) {
            //
        });
    }
}
