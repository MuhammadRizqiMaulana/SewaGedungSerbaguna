<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use PDF;

use App\ModelGedung;
use App\ModelPenyewaan;
use App\ModelPembayaran;

class CetakLaporanController extends Controller
{
	public function index(){
		$laporan = Penyewaan::get('status_sewa','Selesai');
    	return view('admin.halaman.LaporanPenyewaan',compact('laporan'));  
	}

	public function cetak_pdf()
    {
    	$laporan = Penyewaan::get('status_sewa','Selesai');
 
    	$pdf = PDF::loadview('PenyewaanPdf',['laporan'=>$laporan]);
    	return $pdf->download('laporan-Penyewaan-pdf');
    }
}