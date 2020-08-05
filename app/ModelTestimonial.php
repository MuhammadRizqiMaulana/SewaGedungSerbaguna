<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelTestimonial extends Model
{
    protected $table  = 'testimonial';  //nama tabel
    protected $primaryKey   = 'id_testimonial';  //primary key
    protected $fillable      = ['id_penyewaan','id_gedung','nama','email','keterangan','created_at','updated_at']; //field tabel
} 
