<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nationality');
            $table->string('religion');
            $table->string('city');
            $table->string('photo1');
            $table->string('photo2');
            $table->string('distance');
            $table->string('work_days');
            $table->string('profession');
            $table->string('responsibilities');
            $table->string('availability');
            $table->string('contract_situation');
            $table->string('years_of_experience');
            $table->string('cooking');
            $table->string('gender');
            $table->string('needed_nationality');
            $table->string('age');
            $table->string('needed_religion');
            $table->string('marital_status');
            $table->string('education');
            $table->string('languages');
            $table->string('photo1_approved');
            $table->string('photo2_approved');
            $table->string('app_language');
            $table->integer('country');
            $table->integer('salary');
            $table->integer('salary_type');
            $table->integer('salary_currency');
            $table->integer('job_type');
            $table->integer('accommodation');
            $table->integer('home_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('profiles');
    }
}
