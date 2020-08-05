<?php

namespace App\Http\Controllers;

use App\ModelAdmin;
use Illuminate\Http\Request;
use Session;


class CrudAkunAdminController extends Controller
{
    public function index(){

        if(!Session::get('login')){
            return redirect('LoginAdmin')->with('alert','Anda harus login dulu');
        }
        else{

        	$datas = ModelAdmin::get();         
        	return view('admin.halaman.CrudAkunAdmin',compact('datas'));     
        } 
    } 

    public function tambah() {
        if(!Session::get('login')){
            return redirect('LoginAdmin')->with('alert','Anda harus login dulu');
        }
        else{

        	return view('admin.halaman.tambah_data.TambahAkunAdmin');
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
            'alpha' => ':attribute harus berupa huruf',
            'no_hp.digits_between' => ':attribute diisi antara 1 sampai 15 digit',
            'no_hp.min' => ':attribute tidak boleh kurang dari 1',
            'foto.max' => 'tidak boleh lebih 2 Mb'
        ];

    	$this->validate($request, [
    		'nama' => 'required|max:50',
    		'username' => 'required|max:50|unique:admin',
    		'password' => 'required|min:8|max:50',
            'email' => 'required|max:50|email|unique:admin',
    		'no_hp' => 'required|numeric|min:1|digits_between:1,15',
    		'foto' => 'required|image|max:2048',
    		'level' => 'required|max:10', 
    	], $messages);

        $file = $request->file('foto'); // menyimpan data gambar yang diupload ke variabel $file
        $nama_file = time()."_".$file->getClientOriginalName();
        $file->move('img/profil_admin',$nama_file); // isi dengan nama folder tempat kemana file diupload


    	$data = new ModelAdmin();
    	$data->nama_admin = $request->nama;
    	$data->username = $request->username;
    	$data->password = bcrypt($request->password);
        $data->email = $request->email;
    	$data->no_hp = $request->no_hp;
    	$data->level = $request->level;
        $data->foto = $nama_file;

    	$data->save();
    	return redirect('CrudAkunAdmin')->with('alert-success','Data berhasil ditambah!');
    }

   	public function edit($id_admin) {

        if(!Session::get('login')){
            return redirect('LoginAdmin')->with('alert','Anda harus login dulu');
        }
        else{

        	$datas = ModelAdmin::find($id_admin);
        	return view('admin.halaman.edit_data.EditAkunAdmin',compact('datas'));
        }
    }

    public function update($id_admin, Request $request) {
    	$messages = [
            'required' => ':attribute masih kosong',
            'min' => ':attribute diisi minimal :min karakter',
            'max' => ':attribute diisi maksimal :max karakter',
            'numeric' => ':attribute harus berupa angka',
            'unique' => ':attribute sudah ada',
            'email' => ':attribute harus berupa email',
            'alpha' => ':attribute harus berupa huruf',
            'image' => ':attribute harus berupa gambar',
            'no_hp.digits_between' => ':attribute diisi antara 1 sampai 15 digit',
            'no_hp.min' => ':attribute tidak boleh kurang dari 1',
            'foto.max' => 'tidak boleh lebih 2 Mb'
        ];

        $this->validate($request, [
            'nama' => 'nullable|max:50',
            'username' => 'nullable|max:50|unique:admin',
            'password' => 'nullable|min:8|max:50',
            'email' => 'nullable|max:50|email|unique:admin',
            'no_hp' => 'nullable|numeric|min:1|digits_between:1,15',
            'foto' => 'nullable|image|max:2048',
            'level' => 'nullable|max:10', 
        ], $messages);

        $data = ModelAdmin::find($id_admin);

        if (empty($request->nama)){
            $data->nama_admin = $data->nama_admin;
        }
        else {
            $data->nama_admin = $request->nama;
        }

        if (empty($request->username)){
            $data->username = $data->username;
        }
        else {
            $data->username = $request->username;
        }

        if (empty($request->email)){
            $data->email = $data->email;
        }
        else {
            $data->email = $request->email;
        }

        if (empty($request->password)){
            $data->password = $data->password;
        }
        else{
            $data->password = bcrypt($request->password);
        }

        if (empty($request->level)){
            $data->level = $data->level;
        }
        else {
            $data->level = $request->level;
        }

        if (empty($request->no_hp)){
            $data->no_hp = $data->no_hp;
        }
        else {
            $data->no_hp = $request->no_hp;
        }

        if (empty($request->foto)){
            $data->foto = $data->foto;
        }
        else{
            unlink('img/profil_admin/'.$data->foto); //menghapus file lama
            $file = $request->file('foto'); // menyimpan data gambar yang diupload ke variabel $file
            $nama_file = time()."_".$file->getClientOriginalName();
            $file->move('img/profil_admin',$nama_file); // isi dengan nama folder tempat kemana file diupload
            $data->foto = $nama_file;

        }
    	$data->save();
    	return redirect('CrudAkunAdmin')->with('alert-success','Data berhasil diubah!');
    }

    public function delete($id_admin) {
    	$datas = ModelAdmin::find($id_admin);
    	$datas->delete();
    	return redirect('CrudAkunAdmin')->with('alert-success','Data berhasil dihapus!');
    }

}

