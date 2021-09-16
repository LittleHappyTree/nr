<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ParentSubMenu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parent_sub_menu', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('menu')->unsigned();
            $table->string('nama',115);

            $table->foreign('menu')->references('id')->on('menu')->onDelete('restrict');

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
        Schema::table('parent_sub_menu', function (Blueprint $table) {
            //
        });
    }
}
