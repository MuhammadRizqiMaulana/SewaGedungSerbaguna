<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelGaleri extends Model
{
    public $timestamps = false;
	
    protected $table  = 'galeri';  //nama tabel
    protected $primaryKey   = 'id_galeri';  //primary key
    protected $fillable      = ['id_gedung', 
    							'nama_galeri',
    							'gambar_galeri']; //field tabel

    public function Gedung() { //jenis produk dimiliki oleh produk
        return $this->belongsTo(ModelGedung::class,'id_gedung');
        //nama_modelTabelrelasinya,foreignkey di tabel produk
    }
}
