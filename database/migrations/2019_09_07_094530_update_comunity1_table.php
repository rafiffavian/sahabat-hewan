<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateComunity1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('comunity', function (Blueprint $table) {
            
            $table->bigInteger('id_jakartatype')->unsigned();
            $table->bigInteger('id_animaltype')->unsigned()->change();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('comunity', function (Blueprint $table) {
            
            $table->dropColumn('id_jakartatype')->unsigned();
            $table->bigInteger('id_animaltype')->change();
            
        });
    }
}
