@extends('admin.layout.TampilanAdmin')
@section('content')
      <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Ubah Data Fasilitas</h1>
            <ol class="breadcrumb">  
              <li class="breadcrumb-item"><a href="{{url ('DashboardAdmin')}}">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="{{url ('CrudFasilitas')}}">Data Fasilitas</a></li>
              <li class="breadcrumb-item active" aria-current="page">Ubah Data Fasilitas</li>            
            </ol>
          </div>
          <hr>
          <div class="row justify-content-center">
            <div class="col-lg-6">

              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Ubah Data Fasilitas</h6>
                </div>
                <div class="card-body">

                  <form class="contact-form-area contact-page-form contact-form text-left" action="AksiEditFasilitas{{$datas->id_fasilitas}}" method="post">

                    {{csrf_field()}}

                    <div class="form-group">
                      <table>
                        <tr>
                          <td><label><b>Gedung Lama</b></label></td>
                          <td width="300"><label><b>Gedung Baru</b></label></td>
                        </tr>
                        <tr>
                          <td>
                              <input type="text" class="form-control" value="{{$datas->Gedung->nama_gedung}}" readonly>
                          </td>
                          <td>
                              <select name="id_gedung" class="form-control">
                                <option value="">Pilih gedung</option>
                                @foreach($gedungs as $gedung)
                                <option value="{{$gedung->id_gedung}}">{{$gedung->nama_gedung}}</option>
                                @endforeach
                            </select>
                          </td>
                        </tr>
                      </table>     
                    <span class="text-primary"><p class="text-left">- Biarkan kosong jika tidak dirubah</p></span>

                    @if ($errors->has('id_gedung'))
                        <span class="text-danger"><p class="text-right">* {{ $errors->first('id_gedung') }}</p></span>
                    @endif
                    </div>
                    <div class="form-group">
                      <label><b>Ruangan Tambahan</b></label>
                      <input type="text" class="form-control" name="ruangan_tambahan" placeholder="Masukkan Ruangan Tambahan" value="{{$datas->ruangan_tambahan}}">
                      @if ($errors->has('ruangan_tambahan'))
                        <span class="text-danger"><p class="text-right">* {{ $errors->first('ruangan_tambahan') }}</p></span>
                    @endif
                    </div>
                    <div class="form-group">
                      <label><b>Toilet</b></label>
                      <input type="text" class="form-control" name="toilet" placeholder="Masukkan Toilet" value="{{$datas->toilet}}">
                      @if ($errors->has('toilet'))
                        <span class="text-danger"><p class="text-right">* {{ $errors->first('toilet') }}</p></span>
                    @endif
                    </div>
                    <div class="form-group">
                      <label><b>Perlengkapan Operator</b></label>
                      <input type="text" class="form-control" name="perlengkapan_operator" placeholder="Masukkan Perlengkapan Operator" value="{{$datas->perlengkapan_operator}}">
                      @if ($errors->has('perlengkapan_operator'))
                        <span class="text-danger"><p class="text-right">* {{ $errors->first('perlengkapan_operator') }}</p></span>
                    @endif
                    </div>
                    <div class="form-group">
                      <label><b>Kursi</b></label>
                      <input type="text" class="form-control" name="kursi" placeholder="Masukkan Kursi" value="{{$datas->kursi}}">
                      @if ($errors->has('kursi'))
                        <span class="text-danger"><p class="text-right">* {{ $errors->first('kursi') }}</p></span>
                    @endif
                    </div>
                    <div class="form-group">
                      <label><b>Musholah</b></label>
                      <input type="text" class="form-control" name="musholah" placeholder="Masukkan Musholah" value="{{$datas->musholah}}">
                      @if ($errors->has('musholah'))
                        <span class="text-danger"><p class="text-right">* {{ $errors->first('musholah') }}</p></span>
                    @endif
                    </div>
                    <div class="form-group">
                      <label><b>Fasilitas Tambahan 1</b></label>
                      <input type="text" class="form-control" name="fasilitas_tambahan1" placeholder="Masukkan Fasilitas Tambahan 1" value="{{$datas->fasilitas_tambahan1}}">
                      @if ($errors->has('fasilitas_tambahan1'))
                        <span class="text-danger"><p class="text-right">* {{ $errors->first('fasilitas_tambahan1') }}</p></span>
                    @endif
                    </div>
                    <div class="form-group">
                      <label><b>Fasilitas Tambahan 2</b></label>
                      <input type="text" class="form-control" name="fasilitas_tambahan2" placeholder="Masukkan Fasilitas Tambahan 2" value="{{$datas->fasilitas_tambahan2}}">
                      @if ($errors->has('fasilitas_tambahan2'))
                        <span class="text-danger"><p class="text-right">* {{ $errors->first('fasilitas_tambahan2') }}</p></span>
                    @endif
                    </div>
                    <div class="form-group">
                      <label><b>Fasilitas Tambahan 3</b></label>
                      <input type="text" class="form-control" name="fasilitas_tambahan3" placeholder="Masukkan Fasilitas Tambahan 3" value="{{$datas->fasilitas_tambahan3}}">
                      @if ($errors->has('fasilitas_tambahan3'))
                        <span class="text-danger"><p class="text-right">* {{ $errors->first('fasilitas_tambahan3') }}</p></span>
                    @endif
                    </div>
                    <div class="form-group">
                      <label><b>Fasilitas Tambahan 4</b></label>
                      <input type="text" class="form-control" name="fasilitas_tambahan4" placeholder="Masukkan Fasilitas Tambahan 4" value="{{$datas->fasilitas_tambahan4}}">
                      @if ($errors->has('fasilitas_tambahan4'))
                        <span class="text-danger"><p class="text-right">* {{ $errors->first('fasilitas_tambahan4') }}</p></span>
                    @endif
                    </div>
                    <div class="form-group">
                      <label><b>Fasilitas Tambahan 5</b></label>
                      <input type="text" class="form-control" name="fasilitas_tambahan5" placeholder="Masukkan Fasilitas Tambahan 5" value="{{$datas->fasilitas_tambahan5}}">
                      @if ($errors->has('fasilitas_tambahan5'))
                        <span class="text-danger"><p class="text-right">* {{ $errors->first('fasilitas_tambahan5') }}</p></span>
                    @endif
                    </di>
                    <hr>
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
