<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelUser extends Model
{
	public $timestamps = false;

    protected $table  = 'user';  //nama tabel
    protected $primaryKey   = 'id_user';  //primary key
    protected $fillable      = ['nama_user', 
    							'email',
    							'password',
    							'no_hp',
    							'alamat']; //field tabel 
}
