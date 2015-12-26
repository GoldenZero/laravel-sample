<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CountryLangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('country_langs', function (Blueprint $table) {
            $table->increments('id');
            $table->foreign('country_id')->references('id')->on('countries');
            $table->string('lang');
            $table->string('label');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('country_langs');
    }
}
