<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenyewaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penyewaan', function (Blueprint $table) {
            $table->string('id_penyewaan', 100)->primary();
            $table->unsignedBigInteger('id_user')->nullable();     
            $table->foreign('id_user')->references('id_user')->on('user');
            $table->unsignedBigInteger('id_gedung');     
            $table->foreign('id_gedung')->references('id_gedung')->on('gedung');
            $table->unsignedBigInteger('id_admin')->nullable();     
            $table->foreign('id_admin')->references('id_admin')->on('admin');
            $table->date('tanggal_sewa');
            $table->string('nama_acara', 100);
            $table->string('nama_penyewa', 50);
            $table->string('email_penyewa', 50);
            $table->BigInteger('harga')->unsigned();
            $table->string('status_sewa', 20);
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
        Schema::dropIfExists('penyewaan');
    }
}
