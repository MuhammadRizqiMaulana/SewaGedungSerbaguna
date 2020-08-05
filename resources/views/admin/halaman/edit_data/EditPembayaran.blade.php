@extends('admin.layout.TampilanAdmin')
@section('content')
      <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Ubah Data Pembayaran</h1>
            <ol class="breadcrumb">  
              <li class="breadcrumb-item"><a href="{{url ('DashboardAdmin')}}">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="{{url ('CrudPembayaran')}}">Data Pembayaran</a></li>
              <li class="breadcrumb-item active" aria-current="page">Ubah Data Pembayaran</li>            
            </ol>
          </div>
          <hr>
          <div class="row justify-content-center">
            <div class="col-lg-6">

              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Ubah Data Pembayaran</h6>
                </div>
                <div class="card-body">

                  <form enctype="multipart/form-data" class="contact-form-area contact-page-form contact-form text-left" action="AksiEditPembayaran{{$datas->Pembayaran->id_pembayaran}}" method="post">

                    {{csrf_field()}}

                    <div class="form-group">
                      <label><b>Id Pembayaran</b></label>
                      <input type="text" class="form-control" value="{{$datas->id_penyewaan}}" readonly>
                    </div>
                    <div class="form-group">
                      <label><b>Gedung</b></label>
                      <input type="text" class="form-control" value="{{$datas->Gedung->nama_gedung}}" readonly>
                    </div>
                    <div class="form-group">
                      <label><b>Tanggal Sewa</b></label>
                      <input type="text" class="form-control" value="{{$datas->tanggal_sewa}}" readonly>
                    </div>

                    <div class="form-group">
                      <label><b>Jumlah Bayar</b></label>
                      <input type="text" name="jumlah_bayar" class="form-control" value="{{$datas->Pembayaran->jumlah_bayar}}">

                    @if ($errors->has('jumlah_bayar'))
                        <span class="text-danger"><p class="text-right">* {{ $errors->first('jumlah_bayar') }}</p></span>
                    @endif
                    </div>

                    <div class="form-group">
                      <label><b>Bukti Pembayaran</b></label>
                      <input type="file" class="form-control" name="bukti_pembayaran">
                      <span class="text-info">
                        <p class="text-left">- Ukuran Maksimal gambar 2 Mb</p>
                      </span>

                    @if ($errors->has('bukti_pembayaran'))
                        <span class="text-danger"><p class="text-right">* {{ $errors->first('bukti_pembayaran') }}</p></span>
                    @endif
                    </div>

                    <div class="form-group">
                      <div class="form-select">
                        <label><b>Status Bayar</b></label>
                        <select name="status_bayar" class="form-control">
                          <option value="">Pilih Status</option>
                          <option value="Menunggu Validasi" {{ ($datas->Pembayaran->status_bayar == 'Menunggu Validasi') ? 'selected' : ''}}>Menunggu Validasi</option>
                          <option value="Pembayaran Selesai" {{ ($datas->Pembayaran->status_bayar == 'Pembayaran Selesai') ? 'selected' : ''}}>Pembayaran Selesai</option>
                          <option value="Tidak Sesuai" {{ ($datas->Pembayaran->status_bayar =='Tidak Sesuai') ? 'selected' : ''}}>Tidak Sesuai</option>
                        </select>
                      </div>
                      @if ($errors->has('status_bayar'))
                        <span class="text-danger"><p class="text-right">* {{ $errors->first('status_bayar') }}</p></span>
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
