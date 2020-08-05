<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use Illuminate\Http\UploadedFile;
use File;
use App\ModelGedung;

class GedungControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testStore()
    {
        $path           = storage_path('gambar/sewagedung.jpg');
        $originalName   = "sewagedung.png";
        $mime           = 'img/png';
        $file           = new UploadedFile($path, $originalName, 0, null, true);
        $nama_file      = time()."_".$file->getClientOriginalName();

        $data = new ModelGedung();
        $data->nama_gedung = 'Gedung Serbaguna';
        $data->alamat = 'Indramayu';
        $data->deskripsi = 'Fasilitas bintang 5';
        $data->harga = 5000000;        
        $data->gambar_gedung = $nama_file;

        $data->save();

        //copy file to destination
        $toCopy     = public_path('/img/gedung/'.$nama_file);
        File::copy($path, $toCopy);

        $this->assertDatabaseHas('gedung', [
            'nama_gedung' => 'Gedung Serbaguna',
            'alamat' => 'Indramayu',
            'deskripsi' => 'Fasilitas bintang 5',
            'harga' => 5000000,
        ]);
    }
}
