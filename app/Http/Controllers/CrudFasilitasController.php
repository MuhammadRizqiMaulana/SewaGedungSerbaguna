<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ModelFasilitas;
use App\ModelGedung;
use Session;

class crudfasilitasController extends Controller
{
    public function index() {

        if(!Session::get('login')){
            return redirect('LoginAdmin')->with('alert','Anda harus login dulu');
        }
        else{

            $datas = ModelFasilitas::get();         
            return view('admin.halaman.CrudFasilitas',compact('datas'));     
        }  
    }

    public function tambah() {

        if(!Session::get('login')){
            return redirect('LoginAdmin')->with('alert','Anda harus login dulu');
        }
        else{
            $gedungs = ModelGedung::all();

            return view('admin.halaman.tambah_data.TambahFasilitas',compact('gedungs')); 
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
            'image' => ':attribute harus berupa gambar'
        ];

        $this->validate($request, [
            'id_gedung' => 'required|unique:fasilitas',
            'ruangan_tambahan' => 'nullable|max:255',
            'toilet' => 'nullable|max:255',
            'perlengkapan_operator' => 'nullable|max:255',
            'kursi' => 'nullable|max:255', 
            'musholah' => 'nullable|max:255', 
            'fasilitas_tambahan1' => 'nullable|max:255', 
            'fasilitas_tambahan2' => 'nullable|max:255', 
            'fasilitas_tambahan3' => 'nullable|max:255', 
            'fasilitas_tambahan4' => 'nullable|max:255', 
            'fasilitas_tambahan5' => 'nullable|max:255', 
        ], $messages);

        $data = new ModelFasilitas();
        $data->id_gedung = $request->id_gedung;
        $data->ruangan_tambahan = $request->ruangan_tambahan;
        $data->toilet = $request->toilet;
        $data->perlengkapan_operator = $request->perlengkapan_operator;
        $data->kursi = $request->kursi;
        $data->musholah = $request->musholah;
        $data->fasilitas_tambahan1 = $request->fasilitas_tambahan1;
        $data->fasilitas_tambahan2 = $request->fasilitas_tambahan2;
        $data->fasilitas_tambahan3 = $request->fasilitas_tambahan3;
        $data->fasilitas_tambahan4 = $request->fasilitas_tambahan4;
        $data->fasilitas_tambahan5 = $request->fasilitas_tambahan5;
        $data->save();
        return redirect('CrudFasilitas')->with('alert-success','Data berhasil ditambahkan !');
    }

    public function edit($id_fasilitas) {

        if(!Session::get('login')){
            return redirect('LoginAdmin')->with('alert','Anda harus login dulu');
        }
        else{

            $datas = ModelFasilitas::find($id_fasilitas);
            $gedungs = ModelGedung::all(); 
            return view('admin.halaman.edit_data.EditFasilitas',compact('datas', 'gedungs'));
        }
    }

    public function update($id_fasilitas, Request $request) {
        
        $messages = [
            'required' => ':attribute masih kosong',
            'min' => ':attribute diisi minimal :min karakter',
            'max' => ':attribute diisi maksimal :max karakter',
            'numeric' => ':attribute harus berupa angka',
            'unique' => ':attribute sudah ada',
            'id_gedung.unique' => 'gedung sudah ada',
            'email' => ':attribute harus berupa email',
            'image' => ':attribute harus berupa gambar'
        ];

        $this->validate($request, [
            'id_gedung' => 'nullable|unique:fasilitas',
            'ruangan_tambahan' => 'nullable|max:255',
            'toilet' => 'nullable|max:255',
            'perlengkapan_operator' => 'nullable|max:255',
            'kursi' => 'nullable|max:255', 
            'musholah' => 'nullable|max:255', 
            'fasilitas_tambahan1' => 'nullable|max:255', 
            'fasilitas_tambahan2' => 'nullable|max:255', 
            'fasilitas_tambahan3' => 'nullable|max:255', 
            'fasilitas_tambahan4' => 'nullable|max:255', 
            'fasilitas_tambahan5' => 'nullable|max:255', 
        ], $messages);

        $data = ModelFasilitas::find($id_fasilitas);

        if (empty($request->id_gedung)){
            $data->id_gedung = $data->id_gedung;
        }
        else {
            $data->id_gedung = $request->id_gedung;
        }

        $data->ruangan_tambahan = $request->ruangan_tambahan;
        $data->toilet = $request->toilet;
        $data->perlengkapan_operator = $request->perlengkapan_operator;
        $data->kursi = $request->kursi;
        $data->musholah = $request->musholah;
        $data->fasilitas_tambahan1 = $request->fasilitas_tambahan1;
        $data->fasilitas_tambahan2 = $request->fasilitas_tambahan2;
        $data->fasilitas_tambahan3 = $request->fasilitas_tambahan3;
        $data->fasilitas_tambahan4 = $request->fasilitas_tambahan4;
        $data->fasilitas_tambahan5 = $request->fasilitas_tambahan5;
        $data->save();
        return redirect('CrudFasilitas')->with('alert-success','Data berhasil diubah!');
    }

    public function delete($id_fasilitas) {
        $datas = ModelFasilitas::find($id_fasilitas);
        $datas->delete();
        return redirect('CrudFasilitas')->with('alert-success','Data berhasil dihapus!');
    } 
}
