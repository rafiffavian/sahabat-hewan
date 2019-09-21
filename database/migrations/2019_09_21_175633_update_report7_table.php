<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateReport7Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('report', function (Blueprint $table) {
           
            
            $table->text('description')->nullable()->change();
            $table->bigInteger('id_katpelaporan')->nullable()->change();
            $table->string('kategori_hewan')->nullable()->change();
            $table->text('description')->nullable()->change();
            $table->decimal('latitude', 10, 10)->nullable()->change();
            $table->decimal('longtitude', 10, 10)->nullable()->change();
            
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
           
            
            $table->text('description');
            $table->bigInteger('id_katpelaporan');
            $table->string('kategori_hewan');
            $table->text('description');
            $table->decimal('latitude', 10, 10);
            $table->decimal('longtitude', 10, 10);
            
         });
    }
}
