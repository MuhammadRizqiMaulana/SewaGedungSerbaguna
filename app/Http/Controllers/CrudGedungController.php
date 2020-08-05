<?php

namespace App\Http\Controllers;

use App\ModelGedung;
use Illuminate\Http\Request;
use Session;

class CrudGedungController extends Controller
{
    public function index()     {  

        if(!Session::get('login')){
            return redirect('LoginAdmin')->with('alert','Anda harus login dulu');
        }
        else{

        	$datas = ModelGedung::get();         
        	return view('admin.halaman.CrudGedung',compact('datas'));     
        }  
    }

    public function tambah() {

        if(!Session::get('login')){
            return redirect('LoginAdmin')->with('alert','Anda harus login dulu');
        }
        else{

        	return view('admin.halaman.tambah_data.TambahGedung');
        }
    }

    public function store( Request $request) {

        $messages = [
            'required' => ':attribute masih kosong',
            'min' => ':attribute diisi minimal :min karakter',
            'max' => ':attribute diisi maksimal :max karakter',
            'numeric' => ':attribute harus berupa angka',
            'unique' => ':attribute sudah ada',
            'email' => ':attribute harus berupa email',
            'image' => ':attribute harus berupa gambar',
            'harga.digits_between' => ':attribute diisi antara 0 sampai 15 digit',
            'harga.min' => ':attribute tidak boleh kurang dari 0',
            'gambar_gedung.max' => 'tidak boleh lebih 2 Mb'
        ];

    	$this->validate($request, [
    		'nama_gedung' => 'required|max:50|unique:gedung',
    		'alamat' => 'required|max:255',
    		'deskripsi' => 'required|max:255',
            'harga' => 'required|numeric|min:0|digits_between:0,15',
    		'gambar_gedung' => 'required|image|max:2048' 
    	], $messages);


        $file = $request->file('gambar_gedung'); // menyimpan data gambar yang diupload ke variabel $file
        $nama_file = time()."_".$file->getClientOriginalName();
        $file->move('img/gedung',$nama_file); // isi dengan nama folder tempat kemana file diupload

        $data = new ModelGedung();
        $data->nama_gedung = $request->nama_gedung;
        $data->alamat = $request->alamat;
        $data->deskripsi = $request->deskripsi;
        $data->harga = $request->harga;        
        $data->gambar_gedung = $nama_file;

    	$data->save();
    	return redirect('CrudGedung')->with('alert-success','Data berhasil ditambahkan!');
    }

   	public function edit($id_gedung) {

        if(!Session::get('login')){
            return redirect('LoginAdmin')->with('alert','Anda harus login dulu');
        }
        else{

        	$datas = ModelGedung::find($id_gedung);
        	return view('admin.halaman.edit_data.EditGedung',compact('datas'));
        }
    }

    public function update($id_gedung, Request $request) {
        $messages = [
            'required' => ':attribute masih kosong',
            'min' => ':attribute diisi minimal :min karakter',
            'max' => ':attribute diisi maksimal :max karakter',
            'numeric' => ':attribute harus berupa angka',
            'unique' => ':attribute sudah ada',
            'email' => ':attribute harus berupa email',
            'image' => ':attribute harus berupa gambar',
            'harga.digits_between' => ':attribute diisi antara 0 sampai 15 digit',
            'harga.min' => ':attribute tidak boleh kurang dari 0',
            'gambar_gedung.max' => 'tidak boleh lebih 2 Mb'
        ];

        $this->validate($request, [
            'nama_gedung' => 'nullable|max:50|unique:gedung',
            'alamat' => 'required|max:255',
            'deskripsi' => 'required|max:255',
            'harga' => 'required|numeric|min:0|digits_between:0,15',
            'gambar_gedung' => 'nullable|image|max:2048' 
        ], $messages);

        $datas = ModelGedung::find($id_gedung);

        if (empty($request->nama_gedung)){
            $datas->nama_gedung = $datas->nama_gedung;
        }
        else {
            $datas->nama_gedung = $request->nama_gedung;
        }

        $datas->alamat = $request->alamat;
        $datas->deskripsi = $request->deskripsi;
        $datas->harga = $request->harga;

        if (empty($request->gambar_gedung)){
            $datas->gambar_gedung = $datas->gambar_gedung;
        }
        else{
            unlink('img/gedung/'.$datas->gambar_gedung); //menghapus file lama
            $file = $request->file('gambar_gedung'); // menyimpan data gambar yang diupload ke variabel $file
            $nama_file = time()."_".$file->getClientOriginalName();
            $file->move('img/gedung',$nama_file); // isi dengan nama folder tempat kemana file diupload
            $datas->gambar_gedung = $nama_file;

        }
        $datas->save();
        return redirect('CrudGedung')->with('alert-success','Data berhasil diubah!');
    }

    public function delete($id_gedung) {
    	$datas = Modelgedung::find($id_gedung);
    	$datas->delete();
    	return redirect('CrudGedung')->with('alert-success','Data berhasil dihapus!');
    }

    public function lihatFasilitas($id_gedung)  {  

        if(!Session::get('login')){
            return redirect('LoginAdmin')->with('alert','Anda harus login dulu');
        }
        else{

            $datas = ModelGedung::find($id_gedung);         
            return view('admin.halaman.lihatFasilitasGedung',compact('datas'));     
        }  
    }

}
