<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SpecialityLangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('speciality_langs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('speciality_id')->unsigned();
            $table->string('lang');
            $table->string('label');
        });

        Schema::table('speciality_langs', function (Blueprint $table) {
            $table->foreign('speciality_id')->references('id')->on('specialities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('speciality_langs');
    }
}
