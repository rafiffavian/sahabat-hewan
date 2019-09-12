<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUser11Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('image')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('gender')->nullable();
            $table->string('no_tlp')->nullable();
            $table->string('email',50)->unique()->nullable();
            $table->string('username')->nullable();
            $table->string('password');
            $table->date('tanggal_lahir')->nullable();
            $table->string('description')->nullable();
            $table->string('provinsi')->nullable();
            $table->string('kota')->nullable();
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
        Schema::drop('user', function (Blueprint $table) {

        });
    }
}
