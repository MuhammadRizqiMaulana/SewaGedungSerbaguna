<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelGedung extends Model
{
    public $timestamps = false;
	
    protected $table  = 'gedung';  //nama tabel
    protected $primaryKey   = 'id_gedung';  //primary key
    protected $fillable      = ['nama_gedung', 
    							'alamat',
    							'deskripsi',
                                'harga',
    							'gambar_gedung']; //field tabel 

    public function Fasilitas() { //setiap 1 fasilitas memiliki 1 gedung
    	return $this->hasOne(ModelFasilitas::class,'id_gedung');
    	//nama_modelTabelrelasinya,foreignkey di tabel fasilitas
    }

    public function Penyewaan() { //banyak produk memiliki 1 seni tari
        return $this->hasMany(ModelPenyewaan::class);
    }
}
