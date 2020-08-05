<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ModelGaleri;

class HalamanDashboardUserController extends Controller
{
    public function index() {
    	$galeri = ModelGaleri::all();         
    	return view('user.Homepage',compact('galeri'));     
    }
}
