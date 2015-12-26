<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CurrencyLangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('currency_langs', function (Blueprint $table) {
            $table->increments('id');
            $table->foreign('currency_id')->references('id')->on('currencies');
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
        Schema::drop('currency_langs');
    }
}
