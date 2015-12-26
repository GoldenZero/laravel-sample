<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->string('voucher');
            $table->integer('first_time_profile_edit');
            $table->integer('last_seen');
            $table->integer('user_type');
            $table->integer('account_type');
            $table->integer('expiry_date');
            $table->integer('remaining_contacts');
            $table->integer('earned_points');
            $table->string('subscribe_to_newsletter');
            $table->string('longitude_value');
            $table->string('latitude_value');
            $table->integer('verified');
            $table->string('token');
            $table->integer('active');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
