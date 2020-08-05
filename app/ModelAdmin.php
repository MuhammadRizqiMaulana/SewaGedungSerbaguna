<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelAdmin extends Model
{
	public $timestamps = false;
	
    protected $table  = 'admin';  //nama tabel
    protected $primaryKey   = 'id_admin';  //primary key
    protected $fillable      = ['nama_admin', 
    							'username',
    							'password',
                                'email',
    							'no_hp',
    							'foto',
    							'level']; //field tabel 
}
