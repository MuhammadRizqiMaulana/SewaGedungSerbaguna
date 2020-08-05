<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelGaleri;

class HalamanGaleriController extends Controller
{
    public function index()     {         
    	$datas = ModelGaleri::get();         
    	return view('user.halaman.HalamanGaleri',compact('datas'));     
    }  
}
