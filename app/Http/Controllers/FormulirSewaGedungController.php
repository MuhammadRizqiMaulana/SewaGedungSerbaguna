<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelPenyewaan;
use App\ModelGedung;
use DB;

class FormulirSewaGedungController extends Controller
{
	public function tampil($id_gedung) {
    	$datas = ModelGedung::find($id_gedung);

        $tgldisable = DB::table('penyewaan')->where('id_gedung', $id_gedung)->pluck('tanggal_sewa');
    	
        $tgl = array(
    		0=>"2020-06-25",
    		1=>"2020-06-18",
    		2=>"2020-06-30",
    	);

    	
    	return view('user.halaman.FormulirSewaGedung',compact('datas','tgldisable','tgl'));
    }


    public function store( Request $request) {
        $messages = [
            'required' => ':attribute masih kosong',
            'min' => ':attribute diisi minimal :min karakter',
            'max' => ':attribute diisi maksimal :max karakter',
            'numeric' => ':attribute harus berupa angka',
            'unique' => ':attribute sudah ada',
            'email' => ':attribute harus berupa email',
            'alpha' => ':attribute password harus berupa huruf',
            'confirmation.same' => ':attribute dan password harus sama',
            'image' => ':attribute harus berupa gambar',
            'no_telp.digits_between' => ':attribute diisi antara 1 sampai 15 digit',
        ];

        $this->validate($request, [
            'id_penyewaan' => 'required|unique:penyewaan',
            'gedung' => 'required',
            'tanggal_sewa' => 'required|unique:penyewaan',
            'nama_acara' => 'required|max:50',
            'nama_penyewa' => 'required|max:50', 
            'email' => 'required|email|max:50',
            'id_user' => 'nullable'
        ], $messages);

        $data = new ModelPenyewaan();
        $data->id_penyewaan = $request->id_penyewaan;
        $data->id_gedung = $request->gedung;
        $data->tanggal_sewa = $request->tanggal_sewa;
        $data->nama_acara = $request->nama_acara;
        $data->id_user = $request->id_user;
        $data->nama_penyewa = $request->nama_penyewa;
        $data->email_penyewa = $request->email;
        $data->harga = $request->harga;
        $data->status_sewa = 'Menunggu Pembayaran';
        $data->save();

        return redirect('HalamanKonfirmasiBayar'.$request->id_penyewaan.'')->with('alert-success','Data berhasil disimpan, Silahkan Melakukan Pembayaran');
    }
}
