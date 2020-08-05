<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ModelFasilitas;

class HalamanFasilitasController extends Controller
{
    public function index() {
    	$datas = ModelFasilitas::all();         
    	return view('user.halaman.HalamanFasilitas',compact('datas'));     
    }
}
