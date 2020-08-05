@extends('admin.layout.TampilanAdmin')
@section('content')
<!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Penyewaan</h1>
            <ol class="breadcrumb">  
              <li class="breadcrumb-item"><a href="{{url ('DashboardAdmin')}}">Dashboard</a></li>
              <li class="breadcrumb-item active" aria-current="page">Data Penyewaan</li>
            </ol>
          </div>
          <hr>
          @if(\Session::has('alert-success'))
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                        {{Session::get('alert-success')}}
                    </div>
                  @endif
          <!-- DataTable with Hover -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h5 class="m-0 font-weight-bold text-primary">Penyewaan Gedung</h5>
                  <p></p>
                  <p></p>
                  <p></p>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <thead class="thead-light">
                      <tr>
                        <th>
                          No
                        </th>
                        <th>
                            Id Penyewaan
                        </th>
                        <th>
                            Nama Gedung
                        </th>
                        <th>
                            Tanggal Sewa
                        </th>
                        <th>
                            Nama Acara
                        </th>
                        <th>
                            Nama Penyewa
                        </th>
                        <th>
                            Email Penyewa
                        </th>
                        <th>
                            Harga
                        </th>
                        <th>
                            Status Sewa
                        </th>
                        <th style="width: 20%">
                          Aksi
                        </th>
                      </tr>
                  </thead>

                  <tbody>
                      @php
                        $no=1;
                      @endphp
                      @foreach($datas as $tampil)
                      <tr>
                        <td>{{$no++}}</td>
                        <td>{{$tampil->id_penyewaan}}</td>
                        <td>{{$tampil->Gedung->nama_gedung}}</td>
                        <td>{{$tampil->tanggal_sewa}}</td>
                        <td>{{$tampil->nama_acara}}</td>
                        <td>{{$tampil->nama_penyewa}}</td>
                        <td>{{$tampil->email_penyewa}}</td>
                        <td>@currency($tampil->harga)</td>
                        <td>
                          @if ($tampil->status_sewa == 'Menunggu Pembayaran')
                            <span class="badge badge-warning">{{$tampil->status_sewa}}</span>
                          @elseif ($tampil->status_sewa == 'Sedang Dalam Proses')
                            <span class="badge badge-info">{{$tampil->status_sewa}}</span>
                          @elseif ($tampil->status_sewa == 'Disewa')
                            <span class="badge badge-primary">{{$tampil->status_sewa}}</span>
                          @elseif ($tampil->status_sewa == 'Selesai')
                            <span class="badge badge-success">{{$tampil->status_sewa}}</span>
                          @elseif ($tampil->status_sewa == 'Batal')
                            <span class="badge badge-danger">{{$tampil->status_sewa}}</span>
                          @endif
                        </td>
                        
                        <td>
                          <a href="EditPenyewaan{{$tampil->id_penyewaan}}" class="btn btn-warning">
                            <i class="fas fa-pencil-alt"></i>
                          </a>
                          <a href="HapusPenyewaan{{$tampil->id_penyewaan}}" class="btn btn-danger" onclick="return confirm('Anda yakin mau menghapus item ini ?')">
                            <i class="fas fa-trash"></i>
                          </a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

        <!---Container Fluid-->
@endsection