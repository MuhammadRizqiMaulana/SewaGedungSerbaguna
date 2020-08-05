<?php

namespace App\Http\Controllers;

use App\ModelUser;
use App\ModelPenyewaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class HalamanLoginUserController extends Controller
{
    public  function index(){

        if(Session::get('loginUser')){
            return redirect('HalamanProfilUser')->with('alert','Tidak bisa membuka halaman, Anda sudah login');
        } else {
            return view('user.halaman.HalamanLoginUser');
        }
    }

    public function login(){
        return view('user.halaman.HalamanLoginUser');
    }

    public function loginPostUser(Request $request){

        $messages = [
            'required' => ':attribute masih kosong',
            'email' => ':attribute harus berupa email'
        ];

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ], $messages);

        $email = $request->email;
        $password = $request->password;

        $data = ModelUser::where('email',$email)->first();
        if($data){ //apakah email tersebut ada atau tidak
            if(Hash::check($password,$data->password)){
                Session::put('nama',$data->nama_user);
                Session::put('email',$data->email);
                Session::put('no_hp',$data->no_hp);
                Session::put('alamat',$data->alamat);
                Session::put('id_user',$data->id_user);
                Session::put('loginUser',TRUE);
                return redirect('HalamanProfilUser')->with('alert-success','Terimakasih, Anda berhasil login');
            }
            else{
                return redirect('HalamanLoginUser')->with('alert','Username atau Password salah !');
            }
        } else {
                return redirect('HalamanLoginUser')->with('alert','Username atau Password salah !');
        }
    }

    public function logoutUser(){
        Session::flush();
        return redirect('HalamanLoginUser')->with('alert-success','Anda berhasil logout');
    }

    public function register(){
        if(Session::get('loginUser')){
            return redirect('HalamanProfilUser')->with('alert','Tidak bisa membuka halaman, Anda sudah login');
        } else {
            return view('user.halaman.HalamanRegisterUser');
        }
        
    }

    public function registerPost(Request $request){

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
            'no_hp.digits_between' => ':attribute diisi antara 1 sampai 15 digit',
            'no_hp.min' => ':attribute diisi minimal :min',
        ];

        $this->validate($request, [
            'nama' => 'required|max:50',
            'email' => 'required|max:50|email|unique:user',
            'password' => 'required|min:8|max:50',
            'confirmation' => 'required|same:password', 
            'no_hp' => 'required|numeric|min:1|digits_between:1,15',
            'alamat' => 'required|max:255'
        ], $messages);

        $data = new ModelUser();
        $data->nama_user = $request->nama;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->no_hp = $request->no_hp;
        $data->alamat = $request->alamat;
        $data->save();
        return redirect('HalamanLoginUser')->with('alert-success','Berhasil Register, Silahkan Login');
    }

    public function profilUser(){

        if(!Session::get('loginUser')){
            return redirect('HalamanLoginUser')->with('alert','Tidak bisa membuka halaman, Anda harus login');
        } else {

        $id_user = Session::get('id_user');

        $datas = ModelPenyewaan::where('id_user',$id_user)->get();   

        return view('user.halaman.HalamanProfilUser',compact('datas'));   
        }
    }

    public function editProfilUser($id_user){
        if(!Session::get('loginUser')){
            return redirect('HalamanLoginUser')->with('alert','Tidak bisa membuka halaman, Anda harus login');
        } else {

            $datas = ModelUser::find($id_user);

            return view('user.halaman.HalamanEditProfilUser',compact('datas')); 


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
            'no_hp.min' => ':attribute diisi minimal :min',
        ];

        $this->validate($request, [
            'nama_user' => 'nullable|max:50',
            'email' => 'nullable|max:50|email|unique:user',
            'password' => 'nullable|min:8|max:50',
            'no_hp' => 'nullable|numeric|min:1|digits_between:1,15',
            'alamat' => 'nullable|max:255'
        ], $messages);

        $data = ModelUser::find($id_user);

        if (empty($request->nama_user)){
            $data->nama_user = $data->nama_user;
        }
        else {
            $data->nama_user = $request->nama_user;
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

        Session::flush();
        return redirect('HalamanLoginUser')->with('alert-success','Data berhasil diubah, Silahkan Login Ulang!');
    }

}
