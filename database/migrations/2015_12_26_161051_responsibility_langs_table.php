<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ResponsibilityLangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('responsibility_langs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('responsibility_id')->unsigned();
            $table->string('lang');
            $table->string('label');
        });

        Schema::table('responsibility_langs', function (Blueprint $table) {
            $table->foreign('responsibility_id')->references('id')->on('responsibilities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('responsibility_langs');
    }
}
