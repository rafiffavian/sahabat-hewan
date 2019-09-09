<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateAdoption3Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adoption', function (Blueprint $table) {
            
            $table->bigIncrements('id');
            $table->bigInteger('id_user')->unsigned();
            $table->string('image');
            $table->bigInteger('id_animaltype')->unsigned();
            $table->string('animal_name');
            $table->string('animal_kind');
            $table->date('birth');
            $table->string('gender');
            $table->string('agresiv');
            $table->text('alasan');
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
        Schema::dropIfExists('adoption');
    }
}
