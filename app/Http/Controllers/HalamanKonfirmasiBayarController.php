<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\ModelPenyewaan;
use App\ModelGedung;
use App\ModelPembayaran;

class HalamanKonfirmasiBayarController extends Controller
{
    public function index($id_penyewaan) 
    {
        \Carbon\Carbon::setLocale('id');

    	$datas = ModelPenyewaan::find($id_penyewaan);

        $besok = $datas->created_at->addDays(1)->format('l, d F Y H:i');
    	return view('user.halaman.HalamanKonfirmasiBayar',compact('datas','besok'));
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
            'image' => ':attribute harus berupa gambar',
            'jumlah_bayar.digits_between' => ':attribute diisi antara 0 sampai 11 digit',
            'bukti_pembayaran.max' => 'tidak boleh lebih 2 Mb'
        ];

        $this->validate($request, [
            'id_penyewaan' => 'required',
            'bukti_pembayaran' => 'required|image|max:2048',
            'jumlah_bayar' => 'required|numeric|digits_between:0,11',
            ], $messages);


        $ceksewa = ModelPembayaran::where('id_penyewaan', $request->id_penyewaan)->first();

        if(empty($ceksewa)){
            $data = new ModelPembayaran();
            $data->id_penyewaan = $request->id_penyewaan;        
            $data->jumlah_bayar = $request->jumlah_bayar;
            $data->status_bayar = 'Menunggu Validasi';

            $file = $request->file('bukti_pembayaran'); // menyimpan data gambar yang diupload ke variabel $file
            $nama_file = time()."_".$file->getClientOriginalName();
            $file->move('img/bukti_bayar',$nama_file); // isi dengan nama folder tempat kemana file diupload

            $data->bukti_pembayaran = $nama_file;
            $data->save();
        }else {

            $data = ModelPembayaran::where('id_penyewaan', $request->id_penyewaan)->first();
            $data->jumlah_bayar = $request->jumlah_bayar;
            $data->status_bayar = 'Menunggu Validasi';

            unlink('img/bukti_bayar/'.$data->bukti_pembayaran); //menghapus file lama
            $file = $request->file('bukti_pembayaran'); // menyimpan data gambar yang diupload ke variabel $file
            $nama_file = time()."_".$file->getClientOriginalName();
            $file->move('img/bukti_bayar',$nama_file); // isi dengan nama folder tempat kemana file diupload

            $data->bukti_pembayaran = $nama_file;
            $data->update();
        }

        $statusSewa = ModelPenyewaan::find($request->id_penyewaan);
        $statusSewa->status_sewa = 'Sedang Dalam Proses';
        $statusSewa->save();

        return redirect('HalamanSewaGedung')->with('alert-success','Data berhasil disimpan, Menunggu Konfirmasi');
    }
}
