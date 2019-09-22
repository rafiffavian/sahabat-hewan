<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateReport10Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('report', function (Blueprint $table) {
           
            $table->double('latitude', 9, 6)->nullable()->change();
            $table->double('longtitude', 9, 6)->nullable()->change();
    
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
           
            $table->decimal('latitude', 10, 10)->nullable();
            $table->decimal('longtitude', 10, 10)->nullable();
         });
    }
}
