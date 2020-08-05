<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\ModelPenyewaan;
use App\ModelGedung;

class PenyewaanControllerTest extends TestCase
{

    use RefreshDatabase;


    public function testStore()
    {
        $data = new ModelPenyewaan();
        $data->id_penyewaan = 'S-1234567890';
        $data->id_gedung = 1;
        $data->tanggal_sewa = '2020-07-31';
        $data->nama_acara = 'Pengujian';
        $data->id_user = 1;
        $data->id_admin = 2;
        $data->nama_penyewa = 'Maulana';
        $data->email_penyewa = 'maulana@gmail.com';
        $data->harga = '5000000';
        $data->status_sewa = 'Menunggu Pembayaran';
        $data->save();

        $this->assertDatabaseHas('penyewaan', [
            'id_penyewaan' => 'S-1234567890',
            'id_gedung' => 1,
            'tanggal_sewa' => '2020-07-31',
            'nama_acara' => 'Pengujian',
            'id_user' => 1,
            'id_admin' => 2,
            'nama_penyewa' => 'Maulana',
            'email_penyewa' => 'maulana@gmail.com',
            'harga' => '5000000',
            'status_sewa' => 'Menunggu Pembayaran',
        ]);
    }
}
