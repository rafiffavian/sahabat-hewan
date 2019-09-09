<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateComunity2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('comunity', function (Blueprint $table) {
            
            $table->string('instagram')->null();
            $table->string('whatsapp')->null();
            $table->string('Line')->null();
            
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
            
            $table->dropColumn('instagram')->null();
            $table->dropColumn('whatsapp')->null();
            $table->dropColumn('Line')->null();
            
        });
    }
}
