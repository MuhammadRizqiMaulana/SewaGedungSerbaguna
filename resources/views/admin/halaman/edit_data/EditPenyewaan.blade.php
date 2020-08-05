@extends('admin.layout.TampilanAdmin')
@section('content')
      <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Ubah Data Penyewaan</h1>
            <ol class="breadcrumb">  
              <li class="breadcrumb-item"><a href="{{url ('DashboardAdmin')}}">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="{{url ('CrudPenyewaan')}}">Data Penyewaan</a></li>
              <li class="breadcrumb-item active" aria-current="page">Ubah Data Penyewaan</li>            
            </ol>
          </div>
          <hr>
          <div class="row justify-content-center">
            <div class="col-lg-6">

              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Ubah Data Penyewaan</h6>
                </div>
                <div class="card-body">

                  <form class="contact-form-area contact-page-form contact-form text-left" action="AksiEditPenyewaan{{$datas->id_penyewaan}}" method="post">

                    {{csrf_field()}}

                    <div class="form-group">
                      <label><b>Id Penyewaan</b></label>
                      <input type="text" class="form-control" name="id_penyewaan" placeholder="Masukkan Id Penyewaan" value="{{$datas->id_penyewaan}}" readonly>
                      @if ($errors->has('id_penyewaan'))
                        <span class="text-danger"><p class="text-right">* {{ $errors->first('id_penyewaan') }}</p></span>
                    @endif
                    </div>
                    <div class="form-group">
                      <label><b>Nama Gedung</b></label>
                      <input type="text" class="form-control" name="nama_gedung" placeholder="Masukkan Nama Gedung" value="{{$datas->Gedung->nama_gedung}}" readonly>
                      @if ($errors->has('nama_gedung'))
                        <span class="text-danger"><p class="text-right">* {{ $errors->first('nama_gedung') }}</p></span>
                    @endif
                    </div>
                    <div class="form-group">
                      <label><b>Tanggal Sewa</b></label>
                      <input type="date" class="form-control" name="tanggal_sewa" placeholder="Masukkan Tanggal Sewa" value="{{$datas->tanggal_sewa}}">
                      @if ($errors->has('tanggal_sewa'))
                        <span class="text-danger"><p class="text-right">* {{ $errors->first('tanggal_sewa') }}</p></span>
                    @endif
                    </div>
                    <div class="form-group">
                      <label><b>Nama Acara</b></label>
                      <input type="text" class="form-control" name="nama_acara" placeholder="Masukkan Nama Acara" value="{{$datas->nama_acara}}" >
                      @if ($errors->has('nama_acara'))
                        <span class="text-danger"><p class="text-right">* {{ $errors->first('nama_acara') }}</p></span>
                    @endif
                    </div>
                    <div class="form-group">
                      <label><b>Nama Penyewa</b></label>
                      <input type="text" class="form-control" name="nama_penyewa" placeholder="Masukkan Nama Penyewa" value="{{$datas->nama_penyewa}}" >
                      @if ($errors->has('nama_penyewa'))
                        <span class="text-danger"><p class="text-right">* {{ $errors->first('nama_penyewa') }}</p></span>
                    @endif
                    </div>
                    <div class="form-group">
                      <label><b>Email Penyewa</b></label>
                      <input type="text" class="form-control" name="email_penyewa" placeholder="Masukkan Nama Gedung" value="{{$datas->email_penyewa}}" >
                      @if ($errors->has('email_penyewa'))
                        <span class="text-danger"><p class="text-right">* {{ $errors->first('email_penyewa') }}</p></span>
                    @endif
                    </div>
                    <div class="form-group">
                      <label><b>Harga</b></label>
                      <input type="text" class="form-control" name="harga" placeholder="Masukkan Harga" value="{{$datas->harga}}" >
                      @if ($errors->has('harga'))
                        <span class="text-danger"><p class="text-right">* {{ $errors->first('harga') }}</p></span>
                    @endif
                    </div>
                    <div class="form-group">
                      <div class="form-select">
                        <label><b>Status Sewa</b></label>
                        <select name="status_sewa" class="form-control">
                          <option value="">Pilih Status</option>
                          <option value="Menunggu Pembayaran" {{ ($datas->status_sewa == 'Menunggu Pembayaran') ? 'selected' : ''}}>Menunggu Pembayaran</option>
                          <option value="Sedang Dalam Proses" {{ ($datas->status_sewa == 'Sedang Dalam Proses') ? 'selected' : ''}}>Sedang Dalam Proses</option>
                          <option value="Disewa" {{ ($datas->status_sewa =='Disewa') ? 'selected' : ''}}>Disewa</option>
                          <option value="Selesai" {{ ($datas->status_sewa == 'Selesai') ? 'selected' : ''}}>Selesai</option>
                          <option value="Batal" {{ ($datas->status_sewa == 'Batal') ? 'selected' : ''}}>Batal</option>

                        </select>
                      </div>
                      @if ($errors->has('status_sewa'))
                        <span class="text-danger"><p class="text-right">* {{ $errors->first('status_sewa') }}</p></span>
                    @endif
                    </div>


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
