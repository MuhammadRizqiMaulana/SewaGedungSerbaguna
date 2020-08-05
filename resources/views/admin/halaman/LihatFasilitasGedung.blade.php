@extends('admin.layout.TampilanAdmin')
@section('content')
<!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Gedung</h1>
            <ol class="breadcrumb">  
              <li class="breadcrumb-item"><a href="{{url ('DashboardAdmin')}}">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="{{url ('CrudGedung')}}">Data Gedung</a></li>
              <li class="breadcrumb-item active" aria-current="page">Fasilitas Gedung</li>
            </ol>
          </div>
          <hr>

        <!--Row-->
        <div class="row">  
          <div class="col-lg-6">
            <!--Card-->
              <div class="card mb-4">
                <div class="card-header text-center">
                    <h4 class="m-0 font-weight-bold text-primary">Fasilitas</h4>
                    <hr>
                </div>
                <div class="card-body">
                    <div class="form-group row">
                      <label for="fasilitas1" class="col-sm-3 col-form-label"><b>Ruang Tambahan</b></label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="fasilitas1" value="{{$datas->Fasilitas->ruangan_tambahan}}" disabled>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="fasilitas2" class="col-sm-3 col-form-label"><b>Toilet</b></label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="fasilitas2" value="{{$datas->Fasilitas->toilet}}" disabled>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="fasilitas3" class="col-sm-3 col-form-label"><b>Perlengkapan Operator</b></label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="fasilitas3" value="{{$datas->Fasilitas->perlengkapan_operator}}" disabled>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="fasilitas4" class="col-sm-3 col-form-label"><b>Kursi</b></label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="fasilitas4" value="{{$datas->Fasilitas->kursi}}" disabled>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="fasilitas5" class="col-sm-3 col-form-label"><b>Musholah</b></label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="fasilitas5" value="{{$datas->Fasilitas->musholah}}" disabled>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="fasilitas6" class="col-sm-3 col-form-label"><b>Fasilitas Tambahan 1</b></label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="fasilitas6" value="{{$datas->Fasilitas->fasilitas_tambahan1}}" disabled>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="fasilitas7" class="col-sm-3 col-form-label"><b>Fasilitas Tambahan 2</b></label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="fasilitas7" value="{{$datas->Fasilitas->fasilitas_tambahan2}}" disabled>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="fasilitas8" class="col-sm-3 col-form-label"><b>Fasilitas Tambahan 3</b></label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="fasilitas8" value="{{$datas->Fasilitas->fasilitas_tambahan3}}" disabled>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="fasilitas9" class="col-sm-3 col-form-label"><b>Fasilitas Tambahan 4</b></label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="fasilitas9" value="{{$datas->Fasilitas->fasilitas_tambahan4}}" disabled>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="fasilitas10" class="col-sm-3 col-form-label"><b>Fasilitas Tambahan 5</b></label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="fasilitas10" value="{{$datas->Fasilitas->fasilitas_tambahan5}}" disabled>
                      </div>
                    </div>
                </div>
              </div>
            <!--End Card-->
          </div>

          <div class="col-lg-6">
            <!--Card-->
            <div class="card mb-4">
                <div class="card-header text-center justify-content-between">
                    <h4 class="m-0 font-weight-bold text-primary">{{$datas->nama_gedung}}</h4>
                    <hr>
                    <img width="400" src="{{ url('img/gedung/'.$datas->gambar_gedung) }}">
                    <hr>
                </div>
                
                <div class="card-body">
                  <div class="form-group">
                      <label><b>Deskripsi</b></label>
                      <input type="text" class="form-control" value="{{$datas->deskripsi}}" disabled>
                  </div>
                  <div class="form-group">
                      <label><b>Harga</b></label>
                      <input type="text" class="form-control" value="@currency($datas->harga)" disabled>
                  </div>
                  <div class="form-group">
                      <label><b>Alamat</b></label>
                      <textarea class="form-control" disabled>{{$datas->alamat}}</textarea>
                  </div>



                </div>
            </div>
            <!--End Card-->
          </div>

        </div>
        <!--End Row-->


<!---Container Fluid-->
@endsection