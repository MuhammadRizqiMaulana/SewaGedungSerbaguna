<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelGedung;
use App\ModelPenyewaan;
use App\ModelPembayaran;
use Session;

class CrudPembayaranGedungController extends Controller
{
    public function index(){ 
        if(!Session::get('login')){
                return redirect('LoginAdmin')->with('alert','Anda harus login dulu');
            }
            else{  

            $datas = ModelPenyewaan::orderBy('created_at','DESC')->get();        
            return view('admin.halaman.CrudPembayaranGedung',compact('datas'));     
        }  
    }

    public function validasi($id_penyewaan) {
        $bayar = ModelPembayaran::where('id_penyewaan',$id_penyewaan)->first();
        $sewa = ModelPenyewaan::where('id_penyewaan',$id_penyewaan)->first();
        $idadmin = Session::get('id_admin');

        $bayar->status_bayar = 'Pembayaran Selesai';
        $bayar->save();

        $sewa->status_sewa = 'Disewa';
        $sewa->id_admin = $idadmin;
        $sewa->save();

        return redirect('CrudPembayaranGedung')->with('alert-success','Data berhasil di Validasi!');
    }

    public function bayarSalah($id_penyewaan) {

        $idadmin = Session::get('id_admin');
        
        $salah = ModelPembayaran::where('id_penyewaan',$id_penyewaan)->first();
        $salah->status_bayar = 'Tidak Sesuai';       
        $salah->update();

        $sewa = ModelPenyewaan::find($id_penyewaan);
        $sewa->status_sewa = 'Menunggu Pembayaran';       
        $sewa->save();
        return redirect('CrudPembayaranGedung')->with('alert-success','Data berhasil di Validasi!');
    }

        public function edit($id_penyewaan) {

        if(!Session::get('login')){
            return redirect('LoginAdmin')->with('alert','Anda harus login dulu');
        }
        else{

            $datas = ModelPenyewaan::find($id_penyewaan);
            return view('admin.halaman.edit_data.EditPembayaran',compact('datas'));
        }
    }

    public function update($id_pembayaran, Request $request) {
        
        $messages = [
            'required' => ':attribute masih kosong',
            'min' => ':attribute diisi minimal :min karakter',
            'max' => ':attribute diisi maksimal :max karakter',
            'numeric' => ':attribute harus berupa angka',
            'unique' => ':attribute sudah ada',
            'email' => ':attribute harus berupa email',
            'image' => ':attribute harus berupa gambar',
            'jumlah_bayar.digits_between' => ':attribute diisi antara 0 sampai 11 digit',
            'bukti_pembayaran.max' => 'tidak boleh lebih 2 Mb',
            'jumlah_bayar.min' => ':attribute tidak boleh kurang dari 0'
        ];

        $this->validate($request, [
            'jumlah_bayar' => 'required|numeric|min:0|digits_between:0,11',
            'bukti_pembayaran' => 'nullable|image|max:2048',
            'status_bayar' => 'required|max:50'
        ], $messages);

        $data = ModelPembayaran::find($id_pembayaran);

        $data->jumlah_bayar = $request->jumlah_bayar;
        $data->status_bayar = $request->status_bayar;

        if (empty($request->bukti_pembayaran)){
            $data->bukti_pembayaran = $data->bukti_pembayaran;
        }
        else{
            unlink('img/bukti_bayar/'.$data->bukti_pembayaran); //menghapus file lama
            $file = $request->file('bukti_pembayaran'); // menyimpan data gambar yang diupload ke variabel $file
            $nama_file = time()."_".$file->getClientOriginalName();
            $file->move('img/bukti_bayar',$nama_file); // isi dengan nama folder tempat kemana file diupload
            $data->bukti_pembayaran = $nama_file;

        }

        $data->save();
        return redirect('CrudPembayaranGedung')->with('alert-success','Data berhasil diubah!');
    }

    public function delete($id_pembayaran) {
        $datas = ModelPembayaran::find($id_pembayaran);
        $datas->delete();
        return redirect('CrudPembayaranGedung')->with('alert-success','Data berhasil dihapus!');
    }

}
