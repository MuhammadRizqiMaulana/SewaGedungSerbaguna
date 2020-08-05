<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestimonialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testimonial', function (Blueprint $table) {
            $table->id('id_testimonial');
            $table->string('id_penyewaan', 100);     
            $table->foreign('id_penyewaan')->references('id_penyewaan')->on('penyewaan');
            $table->unsignedBigInteger('id_gedung');     
            $table->foreign('id_gedung')->references('id_gedung')->on('gedung');
            $table->string('nama', 50);
            $table->string('email', 50);
            $table->longText('keterangan');
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
        Schema::dropIfExists('testimonial');
    }
}
