<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProfessionLangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profession_langs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('profession_id')->unsigned();
            $table->string('lang');
            $table->string('label');
        });

        Schema::table('profession_langs', function (Blueprint $table) {
            $table->foreign('profession_id')->references('id')->on('professions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('profession_langs');
    }
}
