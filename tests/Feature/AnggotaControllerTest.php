<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\ModelAnggota;
class AnggotaControllerTest extends TestCase
{
    use RefreshDatabase;
   
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
       $data = new ModelAnggota();
        $data->nama= 'Maulana';
        $data->save();

        $this->assertDatabaseHas('anggota', [
             'nama'=> 'Maulana'
        ]);
    }
}
