@extends('admin.layout.TampilanAdmin')
@section('content')
      <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Ubah Data Galeri</h1>
            <ol class="breadcrumb">  
              <li class="breadcrumb-item"><a href="{{url ('DashboardAdmin')}}">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="{{url ('CrudGaleri')}}">Data Galeri</a></li>
              <li class="breadcrumb-item active" aria-current="page">Ubah Data Galeri</li>            
            </ol>
          </div>
          <hr>
          <div class="row justify-content-center">
            <div class="col-lg-6">

              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Ubah Data Galeri</h6>
                </div>
                <div class="card-body">

                  <form enctype="multipart/form-data" class="contact-form-area contact-page-form contact-form text-left" action="AksiEditGaleri{{$datas->id_galeri}}" method="post">

                    {{csrf_field()}}

                    <div class="form-group">
                      <div class="form-select">
                        <label><b>Pilih gedung</b></label>
                        <select name="gedung" class="form-control">
                          <option value="">Pilih gedung</option>
@foreach($gedungs as $gedung)
    <option value="{{$gedung->id_gedung}}" {{ ($datas->id_gedung == $gedung->id_gedung) ? 'selected' : ''}}>

    {{$gedung->nama_gedung}}</option>
@endforeach
                        </select>
                      </div>
                      @if ($errors->has('gedung'))
                        <span class="text-danger"><p class="text-right">* {{ $errors->first('gedung') }}</p></span>
                    @endif
                    </div>

                    <div class="form-group">
                      <label><b>Nama Galeri</b></label>
                      <input type="text" class="form-control" name="nama_galeri" placeholder="Masukkan Nama Gedung" value="{{$datas->nama_galeri}}">

                    @if ($errors->has('nama_galeri'))
                        <span class="text-danger"><p class="text-right">* {{ $errors->first('nama_galeri') }}</p></span>
                    @endif
                    </div>

                    <div class="form-group">
                      <label><b>Gambar Galeri</b></label>
                      <input type="file" class="form-control" name="gambar_galeri">
                        <span class="text-primary"><p class="text-left">- Maksimal Ukuran 2 Mb</p></span>

                    @if ($errors->has('gambar_galeri'))
                        <span class="text-danger"><p class="text-right">* {{ $errors->first('gambar_galeri') }}</p></span>
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
