<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelGedung;


class HalamanSewaGedungController extends Controller
{
    

    public function index() {
        $datas = ModelGedung::all();         
        return view('user.halaman.HalamanSewaGedung',compact('datas'));     
    } 

    
}
