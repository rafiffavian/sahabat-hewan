<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateEvent6Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('event', function (Blueprint $table) {
            
            $table->string('line');
            $table->string('whatsapp');
            $table->dropColumn('requirement');
            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('event', function (Blueprint $table) {
            
            $table->dropColumn('line');
            $table->dropColumn('whatsapp');
            $table->string('requirement');
            
            
        });
    }
}
