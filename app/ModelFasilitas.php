<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelFasilitas extends Model
{
    public $timestamps = false;
	
    protected $table  = 'fasilitas';  //nama tabel
    protected $primaryKey   = 'id_fasilitas';  //primary key
    protected $fillable      = ['id_gedung', 
    							'ruangan_tambahan',
    							'toilet',
                                'perlengkapan_operator',
    							'kursi',
    							'musholah',
    							'fasilitas_tambahan1',
    							'fasilitas_tambahan2',
    							'fasilitas_tambahan3',
    							'fasilitas_tambahan4',
    							'fasilitas_tambahan5']; //field tabel

    public function Gedung() { //gedung dimiliki oleh fasilitas
        return $this->belongsTo(ModelGedung::class,'id_gedung');
    } 
}
