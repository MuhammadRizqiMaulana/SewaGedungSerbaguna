@extends('admin.layout.TampilanAdmin')
@section('content')
      <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Ubah Data Gedung</h1>
            <ol class="breadcrumb">  
              <li class="breadcrumb-item"><a href="{{url ('DashboardAdmin')}}">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="{{url ('CrudGedung')}}">Data Gedung</a></li>
              <li class="breadcrumb-item active" aria-current="page">Ubah Data Gedung</li>            
            </ol>
          </div>
          <hr>
          <div class="row justify-content-center">
            <div class="col-lg-6">

              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Ubah Data Gedung</h6>
                </div>
                <div class="card-body">

                  <form enctype="multipart/form-data" class="contact-form-area contact-page-form contact-form text-left" action="AksiEditGedung{{$datas->id_gedung}}" method="post">

                    {{csrf_field()}}

                    <div class="form-group">

                      <table>
                        <tr>
                          <td><label><b>Nama Gedung</b></label></td>
                          <td width="300"><label><b>Nama Gedung Baru</b></label></td>
                        </tr>
                        <tr>
                          <td>
                              <input type="text" class="form-control" value="{{$datas->nama_gedung}}" readonly>
                          </td>
                          <td>
                              <input type="text" class="form-control" name="nama_gedung" placeholder="Kosongkan jika tidak dirubah">
                          </td>
                        </tr>
                      </table>     

                    @if ($errors->has('nama_gedung'))
                        <span class="text-danger"><p class="text-right">* {{ $errors->first('nama_gedung') }}</p></span>
                    @endif
                    </div>

                    <div class="form-group">
                      <label><b>Harga</b></label>
                      <input type="text" class="form-control" name="harga" placeholder="Masukkan Harga (tanpa titik koma)" value="{{$datas->harga}}">

                    @if ($errors->has('harga'))
                        <span class="text-danger"><p class="text-right">* {{ $errors->first('harga') }}</p></span>
                    @endif
                    </div>

                    <div class="form-group">
                      <label><b>Deskripsi</b></label>
                      <input type="deskripsi" class="form-control" name="deskripsi"placeholder="Masukkan Deskripsi" value="{{$datas->deskripsi}}">

                    @if ($errors->has('deskripsi'))
                        <span class="text-danger"><p class="text-right">* {{ $errors->first('deskripsi') }}</p></span>
                    @endif
                    </div>

                    <div class="form-group">
                      <label><b>Alamat</b></label>
                      <textarea class="form-control" name="alamat" placeholder="Masukkan Alamat">{{$datas->alamat}}</textarea>

                    @if ($errors->has('alamat'))
                        <span class="text-danger"><p class="text-right">* {{ $errors->first('alamat') }}</p></span>
                    @endif
                    </div>

                    <div class="form-group">
                      <label><b>Gambar Gedung</b></label>
                      <input type="file" class="form-control" name="gambar_gedung">
                      <span class="text-info">
                        <p class="text-left">- Ukuran Maksimal gambar 2 Mb</p>
                      </span>

                    @if ($errors->has('gambar_gedung'))
                        <span class="text-danger"><p class="text-right">* {{ $errors->first('gambar_gedung') }}</p></span>
                    @endif
                    </div>

                    <div class="form-group"> 
                        <input type="reset" class="btn btn-secondary"  value="Batal">
                        <input type="submit" class="btn btn-primary" value="Ubah">
                    </div>
                </form>
              </div>
            </div>

          </div>
        </div>
      <!---Container Fluid-->
@endsection
