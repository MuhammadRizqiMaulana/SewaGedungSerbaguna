@extends('admin.layout.TampilanAdmin')
@section('content')
<!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Fasilitas</h1>
            <ol class="breadcrumb">  
              <li class="breadcrumb-item"><a href="{{url ('DashboardAdmin')}}">Dashboard</a></li>
              <li class="breadcrumb-item active" aria-current="page">Data Fasilitas</li>
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
                  <a href="{{ url('TambahFasilitas') }}" class="btn btn-success">Tambah data</a>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <thead class="thead-light">
                      <tr>
                        <th>
                            No
                        </th>
                        <th>
                            Nama Gedung
                        </th>
                        <th>
                            Ruangan Tambahan
                        </th>
                        <th>
                            Toilet
                        </th>
                        <th>
                            Perlengkapan Operator
                        </th>
                        <th>
                            Kursi
                        </th>
                        <th>
                            Mushola
                        </th>
                        <th>
                            Fasilitas Tambahan 1
                        </th>
                        <th>
                            Fasilitas Tambahan 2
                        </th>
                        <th>
                            Fasilitas Tambahan 3
                        </th>
                        <th>
                            Fasilitas Tambahan 4
                        </th>
                        <th>
                            Fasilitas Tambahan 5
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
                        <td>{{$tampil->Gedung->nama_gedung}}</td>
                        <td>{{$tampil->ruangan_tambahan}}</td>
                        <td>{{$tampil->toilet}}</td>
                        <td>{{$tampil->perlengkapan_operator}}</td>
                        <td>{{$tampil->kursi}}</td>
                        <td>{{$tampil->musholah}}</td>
                        <td>{{$tampil->fasilitas_tambahan1}}</td>
                        <td>{{$tampil->fasilitas_tambahan2}}</td>
                        <td>{{$tampil->fasilitas_tambahan3}}</td>
                        <td>{{$tampil->fasilitas_tambahan4}}</td>
                        <td>{{$tampil->fasilitas_tambahan5}}</td>                        
                        <td>
                          <a href="EditFasilitas{{$tampil->id_fasilitas}}" class="btn btn-warning">
                            <i class="fas fa-pencil-alt"></i>
                          </a>
                          <a href="HapusFasilitas{{$tampil->id_fasilitas}}" class="btn btn-danger" onclick="return confirm('Anda yakin mau menghapus item ini ?')">
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