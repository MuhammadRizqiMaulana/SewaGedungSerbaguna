<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use Illuminate\Http\UploadedFile;
use File;
use App\ModelAdmin;

class AdminControllerTest extends TestCase
{

    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testStore()
    {
        $path           = storage_path('gambar/hilya.png');
        $originalName   = "hilya.png";
        $mime           = 'img/png';
        $file           = new UploadedFile($path, $originalName, 0, null, true);
        $nama_file      = time()."_".$file->getClientOriginalName();

        $data = new ModelAdmin();
        $data->nama_admin = 'Hilya';
        $data->username = 'hilya';
        $data->password = '12345678';
        $data->email = 'hilya@gmail.com';
        $data->no_hp = '085270300731';
        $data->level = 'admin';
        $data->foto = $nama_file;
        $data->save();

        //copy file to destination
        $toCopy     = public_path('/img/profil_admin/'.$nama_file);
        File::copy($path, $toCopy);

        $this->assertDatabaseHas('admin', [
            'nama_admin' => 'Hilya',
            'username' => 'hilya',
            'password' => '12345678',
            'email'=> 'hilya@gmail.com',
            'no_hp' => '085270300731',
            'level' => 'admin',
        ]);
    }
}
