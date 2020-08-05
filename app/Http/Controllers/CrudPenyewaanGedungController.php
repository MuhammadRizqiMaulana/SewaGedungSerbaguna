<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

use App\ModelGedung;
use App\ModelPenyewaan;
use App\ModelPembayaran;

class CrudPenyewaanGedungController extends Controller
{

    public function index(){

        if(!Session::get('login')){
            return redirect('LoginAdmin')->with('alert','Anda harus login dulu');
        }
        else{

            	$now = Carbon::now()->format('y-m-d');
            	$tanggalwaktu = Carbon::now();

                $datas = ModelPenyewaan::orderBy('created_at','DESC')->get(); 

                $selesai = ModelPenyewaan::all();

                foreach ($selesai as $updet) {
                	if ($updet->tanggal_sewa < $now && $updet->status_sewa == 'Disewa') {

                		$tglsewa = ModelPenyewaan::find($updet->id_penyewaan);
                		$tglsewa->status_sewa = 'Selesai';
                		$tglsewa->save();
                	}
                }

                foreach ($selesai as $batal) {
        			$selisihHari = $batal->created_at->diffInDays($tanggalwaktu);

                	if ($selisihHari >= 1  && $batal->status_sewa == 'Menunggu Pembayaran') {

                		$updetbatal = ModelPenyewaan::find($updet->id_penyewaan);
                		$updetbatal->status_sewa = 'Batal';
                		$updetbatal->save();
                	}
                }


                return view('admin.halaman.CrudPenyewaanGedung',compact('datas'));     
        }
    }  

    public function edit($id_penyewaan) {

        if(!Session::get('login')){
            return redirect('LoginAdmin')->with('alert','Anda harus login dulu');
        }
        else{

            $datas = ModelPenyewaan::find($id_penyewaan);
            $gedungs = ModelGedung::all(); 
            return view('admin.halaman.edit_data.EditPenyewaan',compact('datas', 'gedungs'));
        }
    }

    public function update($id_penyewaan, Request $request) {
        
        $messages = [
            'required' => ':attribute masih kosong',
            'min' => ':attribute diisi minimal :min karakter',
            'max' => ':attribute diisi maksimal :max karakter',
            'numeric' => ':attribute harus berupa angka',
            'unique' => ':attribute sudah ada',
            'email' => ':attribute harus berupa email',
            'image' => ':attribute harus berupa gambar',
            'harga.digits_between' => ':attribute diisi antara 0 sampai 11 digit',
            'harga.min' => ':attribute tidak boleh kurang dari 0',
        ];

        $this->validate($request, [
            'tanggal_sewa' => 'required',
            'nama_acara' => 'required|max:100',
            'nama_penyewa' => 'required|max:50',
            'email_penyewa' => 'required|max:50',
            'harga' => 'required|numeric|min:0|digits_between:0,11',
            'status_sewa' => 'required|max:20'
        ], $messages);

        $data = ModelPenyewaan::find($id_penyewaan);
        $idadmin = Session::get('id_admin');

        $data->tanggal_sewa = $request->tanggal_sewa;
        $data->nama_acara = $request->nama_acara;
        $data->nama_penyewa = $request->nama_penyewa;
        $data->email_penyewa = $request->email_penyewa;
        $data->harga = $request->harga;
        $data->status_sewa = $request->status_sewa;
        $data->id_admin = $idadmin;
        $data->save();
        return redirect('CrudPenyewaanGedung')->with('alert-success','Data berhasil diubah!');
    }

    public function delete($id_penyewaan) {
        $datas = ModelPenyewaan::find($id_penyewaan);
        $datas->delete();
        return redirect('CrudPenyewaanGedung')->with('alert-success','Data berhasil dihapus!');
    }

}
