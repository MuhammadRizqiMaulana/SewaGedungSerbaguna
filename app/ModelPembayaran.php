<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelPembayaran extends Model
{
    public $timestamps = false;
	
    protected $table  = 'pembayaran';  //nama tabel
    protected $primaryKey   = 'id_pembayaran';  //primary key
    protected $fillable      = ['id_penyewaan', 
    							'bukti_pembayaran',
    							'jumlah_bayar',
    							'status_bayar']; //field tabel

    public function Penyewaan() { //Penyewaan dimiliki oleh Pembayaran
    	return $this->belongsTo(ModelPenyewaan::class,'id_penyewaan');
    }
}
