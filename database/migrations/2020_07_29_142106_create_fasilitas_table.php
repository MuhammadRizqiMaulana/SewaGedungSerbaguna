<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFasilitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fasilitas', function (Blueprint $table) {
            $table->id('id_fasilitas');
            $table->unsignedBigInteger('id_gedung');     
            $table->foreign('id_gedung')->references('id_gedung')->on('gedung');
            $table->string('ruangan_tambahan', 255)->nullable();
            $table->string('toilet', 255)->nullable();
            $table->string('perlengkapan_operator', 255)->nullable();
            $table->string('kursi', 255)->nullable();
            $table->string('musholah', 255)->nullable();
            $table->string('fasilitas_tambahan1', 255)->nullable();
            $table->string('fasilitas_tambahan2', 255)->nullable();
            $table->string('fasilitas_tambahan3', 255)->nullable();
            $table->string('fasilitas_tambahan4', 255)->nullable();
            $table->string('fasilitas_tambahan5', 255)->nullable();
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
        Schema::dropIfExists('fasilitas');
    }
}
