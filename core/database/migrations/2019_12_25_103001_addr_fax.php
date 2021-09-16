<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddrFax extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addr_fax', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('addr')->unsigned();
            $table->text('nama');

            $table->foreign('addr')->references('id')->on('addr')->onDelete('restrict');
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
        Schema::table('addr_fax', function (Blueprint $table) {
            //
        });
    }
}
