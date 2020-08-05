<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\ModelPenyewaan;
use App\ModelGedung;
use App\ModelPembayaran;
use App\Http\Controllers\Alert;

class CariHalamanKonfirmasiBayarController extends Controller
{
    public function cari(Request $request)
    {
        \Carbon\Carbon::setLocale('id');

        $query = $request->get('q');
        $datas = ModelPenyewaan::find($query);

        if (empty($datas)) {
            return redirect('HalamanKonfirmasiBayar')->with('alert-danger','Kode Penyewaan tidak ditemukan !');
        }else{

            $besok = $datas->created_at->addDays(1)->format('l, d F Y H:i');
            
            return view('user.halaman.HalamanKonfirmasiBayar', compact('datas','besok'));

        }


    }


}
