<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AdminMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin', function (Blueprint $table) {             
            $table->id('id_admin');
            $table->string('nama_admin', 50);             
            $table->string('username', 50);             
            $table->string('password', 255);
            $table->string('email', 50);
            $table->string('no_hp', 15);
            $table->string('foto', 255)->nullable();
            $table->string('level', 10);
                      
        });   
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin'); 
    }
}
