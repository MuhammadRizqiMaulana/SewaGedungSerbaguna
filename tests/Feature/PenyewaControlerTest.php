<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\ModelUser;

class PenyewaControlerTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $data = new ModelUser();
        $data->nama_user = 'wahid';
        $data->email ='wahid25@gmail.com';
        $data->password = 'abc12345';
        $data->no_hp = '083173658782';
        $data->alamat = 'indramayu barat';
        $data->save();

        $this->assertDatabaseHas('user', [
        'nama_user' => 'wahid',
        'email' => 'wahid25@gmail.com',
        'password' => 'abc12345',
        'no_hp' => '083173658782',
        'alamat' => 'indramayu barat',
        ]);
    }
}
