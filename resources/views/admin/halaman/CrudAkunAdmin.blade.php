@extends('admin.layout.TampilanAdmin')
@section('content')
<!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Akun Admin</h1>
            <ol class="breadcrumb">  
              <li class="breadcrumb-item"><a href="{{url ('DashboardAdmin')}}">Dashboard</a></li>
              <li class="breadcrumb-item active" aria-current="page">Data Akun Admin</li>
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
                  
                  <a href="{{url ('TambahAkunAdmin')}}" class="btn btn-success" >Tambah data</a>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <thead class="thead-light">
                      <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>No Handphone</th>
                        <th>Foto</th>
                        <th>Level</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                       @php
                        $no=1;
                      @endphp
                      @foreach($datas as $tampil)
                      <tr>
                        <td>{{$no++}}</td>
                        <td>{{$tampil->nama_admin}}</td>
                        <td>{{$tampil->username}}</td>
                        <td>{{$tampil->email}}</td>
                        <td>{{$tampil->no_hp}}</td>
                        <td>
                          <img width="150px" src="{{ url('img/profil_admin/'.$tampil->foto) }}"></td>
                        <td>{{$tampil->level}}</td>
                        <td>
                          <a href="EditAkunAdmin{{$tampil->id_admin}}" class="btn btn-warning">
                            <i class="fas fa-pencil-alt"></i>
                          </a>
                          <a href="HapusAkunAdmin{{$tampil->id_admin}}" class="btn btn-danger" onclick="return confirm('Anda yakin mau menghapus item ini ?')">
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