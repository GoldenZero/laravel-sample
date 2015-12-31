<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ExchangeRatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exchange_rates', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('source_currency_id')->unsigned();
            $table->integer('dest_currency_id')->unsigned();
            $table->float('rate');
        });

        Schema::table('exchange_rates', function (Blueprint $table) {
            $table->foreign('source_currency_id')->references('id')->on('currencies');
            $table->foreign('dest_currency_id')->references('id')->on('currencies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('exchange_rates');
    }
}
