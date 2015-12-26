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
            $table->foreign('responsibility_id')->references('id')->on('responsibilities');
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
        Schema::drop('responsibility_langs');
    }
}
