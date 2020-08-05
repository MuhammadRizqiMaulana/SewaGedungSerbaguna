<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelAnggota extends Model
{
     protected $table  = 'anggota';  //nama tabel
     protected $fillable      = ['nama'];
}
