<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembayaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id('id_pembayaran');
            $table->string('id_penyewaan', 100);     
            $table->foreign('id_penyewaan')->references('id_penyewaan')->on('penyewaan');
            $table->string('bukti_pembayaran', 255);
            $table->BigInteger('jumlah_bayar')->unsigned();
            $table->string('status_bayar', 50);
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
        Schema::dropIfExists('pembayaran');
    }
}
