<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChildSubMenu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('child_sub_menu', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('menu')->unsigned();
            $table->integer('parent_sub_menu')->unsigned();
            $table->string('nama',115);
            $table->timestamps();

            $table->foreign('menu')->references('id')->on('menu')->onDelete('restrict');
            $table->foreign('parent_sub_menu')->references('id')->on('parent_sub_menu')->onDelete('restrict');

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
        Schema::table('child_sub_menu', function (Blueprint $table) {
            //
        });
    }
}
