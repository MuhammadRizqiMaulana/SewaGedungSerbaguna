<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*------------Halaman User -----------------*/

Route::get('/','HalamanDashboardUserController@index');

Route::get('HalamanLoginUser','HalamanLoginUserController@index');
Route::post('loginPostUser','HalamanLoginUserController@loginPostUser');
Route::get('HalamanRegisterUser','HalamanLoginUserController@register');
Route::post('registerPost','HalamanLoginUserController@registerPost');
Route::get('logoutUser','HalamanLoginUserController@logoutUser');

Route::get('HalamanProfilUser','HalamanLoginUserController@profilUser');
Route::get('HalamanEditProfilUser{id_user}','HalamanLoginUserController@editProfilUser');
Route::post('AksiEditProfilUser{id_user}','HalamanLoginUserController@update');

Route::get('HalamanFasilitas','HalamanFasilitasController@index');

/*---<<Route halaman Informasi belum dibuat>>-------*/
Route::get('HalamanTestimonial','HalamanTestimonialController@index');

Route::get('HalamanSewaGedung','HalamanSewaGedungController@index');

Route::get('FormulirSewaGedung{id_gedung}','FormulirSewaGedungController@tampil');
Route::post('AksiSewa','FormulirSewaGedungController@store');

Route::get('HalamanGaleri','HalamanGaleriController@index');

Route::get('HalamanKonfirmasiBayar{id_penyewaan}','HalamanKonfirmasiBayarController@index');
Route::post('AksiKonfirmasiBayar','HalamanKonfirmasiBayarController@store');

Route::get('HalamanKonfirmasiBayar', function () {
    return view('user.halaman.HalamanKonfirmasiBayar');
});
Route::get('CariHalamanKonfirmasiBayar','CariHalamanKonfirmasiBayarController@cari');

/*------End Halaman User------------*/

/*--------Halaman Admin-------------*/

Route::get('LoginAdmin','LoginAdminController@login');
Route::get('DashboardAdmin','LoginAdminController@index');
Route::post('loginPost', 'LoginAdminController@loginPost');
Route::get('logout', 'LoginAdminController@logout');

Route::get('ProfilAdmin{id_admin}','LoginAdminController@profilAdmin');
Route::get('ProfilAdmin/editProfilAdmin{id_admin}','LoginAdminController@editProfilAdmin');
Route::post('ProfilAdmin/AksiEditProfilAdmin{id_admin}','LoginAdminController@update');

Route::get('CrudAkunUser', function () {
    return view('admin.halaman.CrudAkunUser');
});

Route::get('CrudAkunAdmin','CrudAkunAdminController@index');
Route::get('TambahAkunAdmin','CrudAkunAdminController@tambah');
Route::post('AksiTambahAkunAdmin','CrudAkunAdminController@store');
Route::get('EditAkunAdmin{id_admin}','CrudAkunAdminController@edit');
Route::post('AksiEditAkunAdmin{id_admin}','CrudAkunAdminController@update');
Route::get('HapusAkunAdmin{id_admin}','CrudAkunAdminController@delete');

Route::get('CrudAkunUser','CrudAkunUserController@index');
Route::get('TambahAkunUser','CrudAkunUserController@tambah');
Route::post('AksiTambahAkunUser','CrudAkunUserController@store');
Route::get('EditAkunUser{id_user}','CrudAkunUserController@edit');
Route::post('AksiEditAkunUser{id_user}','CrudAkunUserController@update');
Route::get('HapusAkunUser{id_user}','CrudAkunUserController@delete');

Route::get('CrudGedung','CrudGedungController@index');
Route::get('TambahGedung','CrudGedungController@tambah');
Route::post('AksiTambahGedung','CrudGedungController@store');
Route::get('EditGedung{id_gedung}','CrudGedungController@edit');
Route::post('AksiEditGedung{id_gedung}','CrudGedungController@update');
Route::get('HapusGedung{id_gedung}','CrudGedungController@delete');

Route::get('LihatFasilitasGedung{id_gedung}','CrudGedungController@lihatFasilitas');


Route::get('CrudFasilitas','CrudFasilitasController@index');
Route::get('TambahFasilitas','CrudFasilitasController@tambah');
Route::post('AksiTambahFasilitas','CrudFasilitasController@store');
Route::get('EditFasilitas{id_fasilitas}','CrudFasilitasController@edit');
Route::post('AksiEditFasilitas{id_fasilitas}','CrudFasilitasController@update');
Route::get('HapusFasilitas{id_fasilitas}','CrudFasilitasController@delete');

Route::get('CrudPenyewaanGedung','CrudPenyewaanGedungController@index');
Route::get('EditPenyewaan{id_penyewaan}','CrudPenyewaanGedungController@edit');
Route::post('AksiEditPenyewaan{id_penyewaan}','CrudPenyewaanGedungController@update');
Route::get('HapusPenyewaan{id_penyewaan}','CrudPenyewaanGedungController@delete');

Route::get('CrudPembayaranGedung','CrudPembayaranGedungController@index');
Route::get('AksiValidasi{id_penyewaan}','CrudPembayaranGedungController@validasi');
Route::get('AksiBayarSalah{id_penyewaan}','CrudPembayaranGedungController@bayarSalah');
Route::get('EditPembayaran{id_penyewaan}','CrudPembayaranGedungController@edit');
Route::post('AksiEditPembayaran{id_pembayaran}','CrudPembayaranGedungController@update');
Route::get('HapusPembayaran{id_pembayaran}','CrudPembayaranGedungController@delete');

/*-----<<Halaman Crud Kalender Acara belum dibuat>>-------*/

Route::get('CrudGaleri','CrudGaleriController@index');
Route::get('TambahGaleri','CrudGaleriController@tambah');
Route::post('AksiTambahGaleri','CrudGaleriController@store');
Route::get('EditGaleri{id_galeri}','CrudGaleriController@edit');
Route::post('AksiEditGaleri{id_galeri}','CrudGaleriController@update');
Route::get('HapusGaleri{id_galeri}','CrudGaleriController@delete');


Route::get('LaporanPenyewaan','CetakLaporanController@index');
Route::get('CetakPdf','CetakLaporanController@cetak_pdf');

/*------End Halaman Admin------------*/

/*--------Halaman Pemilik-------------*/
Route::get('DashboardPemilik', function () {
    return view('pemilik.DashboardPemilik');
});




Route::get('LaporanPenyewaan', function () {
    return view('pemilik.halaman.LaporanPenyewaan');
});

Route::get('LihatKalender', function () {
    return view('pemilik.halaman.LihatKalender');
});
Route::get('LihatGaleri', function () {
    return view('pemilik.halaman.LihatGaleri');
});