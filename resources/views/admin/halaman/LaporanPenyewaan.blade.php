@extends('admin.layout.TampilanAdmin')
@section('content')
<!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Laporan Penyewaan</h1>
            <ol class="breadcrumb">  
              <li class="breadcrumb-item"><a href="{{url ('DashboardAdmin')}}">Dashboard</a></li>
              <li class="breadcrumb-item active" aria-current="page">Data Laporan Penyewaan</li>
            </ol>
          </div>
          <hr>

           @if(\Session::has('alert-success'))
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                        <h6><i class="fas fa-sign-out-alt"></i><b> Success!!</b></h6>
                        {{Session::get('alert-success')}}
                    </div>
                  @endif
                  
          <!-- DataTable with Hover -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <a href="{{url ('CetakPdf')}}" class="btn btn-success">Cetak Pdf</a>
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
                      </tr>
                    </thead>

                    <tbody>
                      @php
                        $no=1;
                      @endphp
                      @foreach($laporan as $tampil)
                      <tr>
                        <td>{{$no++}}</td>
                        <td>{{$tampil->id_penyewaan}}</td>
                        <td>{{$tampil->Gedung->nama_gedung}}</td>
                        <td>{{$tampil->tanggal_sewa}}</td>
                        <td>{{$tampil->nama_acara}}</td>
                        <td>{{$tampil->nama_penyewa}}</td>
                        <td>{{$tampil->email_penyewa}}</td>
                      </tr>
                    </tbody>
                      @endforeach 
                  </table>
                </div>
              </div>
            </div>

        <!---Container Fluid-->
@endsection