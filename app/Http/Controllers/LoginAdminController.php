<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelAdmin;
use App\ModelUser;
use App\ModelFasilitas;
use App\ModelGaleri;
use App\ModelGedung;
use App\ModelPembayaran;
use App\ModelPenyewaan;

use Hash;
use Session;

class LoginAdminController extends Controller
{
    public function index(){
        if(!Session::get('login')){
            return redirect('LoginAdmin')->with('alert','Anda harus login dulu');
        }
        else{


            $admin = ModelAdmin::all();
            $user = ModelUser::all();
            $penyewaan = ModelPenyewaan::all();           
            $pembayaran = ModelPembayaran::all();
            $gedung = ModelGedung::all();
            $galeri = ModelGaleri::all();
            $fasilitas = ModelFasilitas::all();
            
            return view('admin.DashboardAdmin', compact('user','admin','penyewaan','pembayaran','gedung','galeri','fasilitas'));
        }
    }

    public function login(){

        if(Session::get('login')){
            return redirect('DashboardAdmin')->with('alert-success','Anda sudah login');
        }
        else{

            return view('admin.LoginAdmin');
        }
    }

    public function loginPost(Request $request){

        $username = $request->username;
        $password = $request->password;

        $data = ModelAdmin::where('username',$username)->first();
        if($data){ //apakah email tersebut ada atau tidak
            if(Hash::check($password,$data->password)){
                Session::put('id_admin',$data->id_admin);
                Session::put('username',$data->username);
                Session::put('nama_admin',$data->nama_admin);
                Session::put('email',$data->email);
                Session::put('foto',$data->foto);
                Session::put('no_hp',$data->no_hp);
                Session::put('level',$data->level);
                
                Session::put('login',TRUE);
                return redirect('DashboardAdmin');
            }
            else{
                return redirect('LoginAdmin')->with('alert','Password atau Email, Salah !');
            }
        }
        else{
            return redirect('LoginAdmin')->with('alert','Password atau Email, Salah!');
        }
    }

    public function logout(){
        Session::flush();
        return redirect('LoginAdmin')->with('alert-success','Anda sudah logout');
    }

    public function profilAdmin($id_admin) {

        if(!Session::get('login')){
            return redirect('LoginAdmin')->with('alert','Kamu harus login dulu');
        }
        else{

            $profil = ModelAdmin::find($id_admin); 

        return view('admin.ProfilAdmin',compact('profil'));
        
        } 
    }

    public function editProfilAdmin($id_admin) {

        if(!Session::get('login')){
            return redirect('LoginAdmin')->with('alert','Anda harus login dulu');
        }
        else{

        $datas = ModelAdmin::find($id_admin);
        return view('admin.halaman.edit_data.EditProfilAdmin',compact('datas'));
        
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
            'image' => ':attribute harus berupa gambar',
            'foto.max' => 'tidak boleh lebih 2 Mb',
            'no_hp.digits_between' => ':attribute diisi antara 1 sampai 15 digit',
            'no_hp.min' => ':attribute diisi minimal :min',
        ];
        
        $this->validate($request, [
            'nama' => 'nullable|max:50',
            'username' => 'nullable|max:50|unique:admin',
            'password' => 'nullable|max:50|min:8',
            'email' => 'nullable|max:50|email|unique:admin',
            'foto' => 'nullable|image|max:2048',
            'level' => 'nullable|max:10',
            'no_hp' => 'nullable|numeric|min:1|digits_between:1,15'
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

        Session::flush();

        return redirect('LoginAdmin')->with('alert-success','Data Berhasil Diubah, Anda harus login ulang');
    }
}
