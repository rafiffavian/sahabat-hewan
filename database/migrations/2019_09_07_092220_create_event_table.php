<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_animaltype')->unsigned();
            $table->bigInteger('id_eventtype')->unsigned();
            $table->string('image');
            $table->string('name');
            $table->bigInteger('price');
            $table->bigInteger('case_finish');
            $table->string('location');
            $table->string('description');
            $table->time('time');
            $table->string('requirement');
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
        Schema::dropIfExists('event');
    }
}
