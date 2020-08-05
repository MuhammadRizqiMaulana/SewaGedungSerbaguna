<?php

namespace App\Http\Controllers;

use App\ModelUser;
use Illuminate\Http\Request;
use Session;


class CrudAkunUserController extends Controller
{
    public function index(){

        if(!Session::get('login')){
            return redirect('LoginAdmin')->with('alert','Anda harus login dulu');
        }
        else{

        	$datas = ModelUser::get();         
        	return view('admin.halaman.CrudAkunUser',compact('datas'));     
        } 
    } 

    public function tambah() {
        if(!Session::get('login')){
            return redirect('LoginAdmin')->with('alert','Anda harus login dulu');
        }
        else{

        	return view('admin.halaman.tambah_data.TambahAkunUser');
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
            'no_hp.min' => ':attribute tidak boleh kurang dari 1'
        ];

    	$this->validate($request, [
    		'nama' => 'required|max:50',
    		'password' => 'required|min:8|max:50',
            'email' => 'required|max:50|email|unique:user',
    		'no_hp' => 'required|numeric|min:1|digits_between:1,15',
            'alamat' => 'required|max:255',

    	], $messages);

    	$data = new ModelUser();
    	$data->nama_user = $request->nama;
    	$data->email = $request->email;
    	$data->password = bcrypt($request->password);
    	$data->no_hp = $request->no_hp;
    	$data->alamat = $request->alamat;

    	$data->save();
    	return redirect('CrudAkunUser')->with('alert-success','Data berhasil ditambah!');
    }

   	public function edit($id_user) {

        if(!Session::get('login')){
            return redirect('LoginAdmin')->with('alert','Anda harus login dulu');
        }
        else{

        	$datas = ModelUser::find($id_user);
        	return view('admin.halaman.edit_data.EditAkunUser',compact('datas'));
        }
    }

    public function update($id_user, Request $request) {
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
            'no_hp.min' => ':attribute tidak boleh kurang dari 1'
        ];

        $this->validate($request, [
            'nama' => 'nullable|max:50',
            'password' => 'nullable|min:8|max:50',
            'email' => 'nullable|max:50|email|unique:user',
            'no_hp' => 'nullable|numeric|min:1|digits_between:1,15',
            'alamat' => 'nullable|max:255',
        ], $messages);

        $data = ModelUser::find($id_user);

        if (empty($request->nama)){
            $data->nama_user = $data->nama_user;
        }
        else {
            $data->nama_user = $request->nama;
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

        if (empty($request->no_hp)){
            $data->no_hp = $data->no_hp;
        }
        else {
            $data->no_hp = $request->no_hp;
        }

        if (empty($request->alamat)){
            $data->alamat = $data->alamat;
        }
        else {
            $data->alamat = $request->alamat;
        }

        
    	$data->save();
    	return redirect('CrudAkunUser')->with('alert-success','Data berhasil diubah!');
    }

    public function delete($id_user) {
    	$datas = ModelUser::find($id_user);
    	$datas->delete();
    	return redirect('CrudAkunUser')->with('alert-success','Data berhasil dihapus!');
    }

}

