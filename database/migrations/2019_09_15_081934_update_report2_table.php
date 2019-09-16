<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateReport2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('report', function (Blueprint $table) {
           
            $table->decimal('latitude', 10, 10);
            $table->decimal('longtitude', 10, 10);
            $table->dropColumn('location');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('report', function (Blueprint $table) {
           
            $table->dropColumn('longtitude');
            $table->dropColumn('latitude');
            $table->string('location')->nullable();
           
        });
        
    }
}
