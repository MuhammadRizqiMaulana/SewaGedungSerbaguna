<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ModelTestimonial;

class HalamanTestimonialController extends Controller
{
    public function index() {
    	$datas = ModelTestimonial::all();         
    	return view('user.halaman.HalamanTestimonial',compact('datas'));     
    }
}
