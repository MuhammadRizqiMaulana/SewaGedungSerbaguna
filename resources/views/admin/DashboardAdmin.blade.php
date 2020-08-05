@extends('admin.layout.TampilanAdmin')
@section('content')

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
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
                  
          <!-- Documentation Link -->
          <div class="row">
            <div class="col-lg-12">
              <h5>Akun</h5>
            </div>
          </div>

          <div class="row mb-3">
            <!-- New User Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <a href="{{url ('CrudAkunUser')}}" class="card-link">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1 text-gray-800">Data Users</div>
                      <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{count($user)}}</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-2x text-info"></i>
                    </div>
                  </div>
                </div>
              </div>
              </a>
            </div>
            
            <!-- New User Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <a href="{{url ('CrudAkunAdmin')}}" class="card-link">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1 text-gray-800">Data Admin</div>
                      <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{count($admin)}}</div>
                    </div>
                    <div class="col-auto">
                      <i class="far fa-user fa-2x text-info"></i>
                    </div>
                  </div>
                </div>
              </div>
            </a>
            </div>


          </div>
          <!--Row-->

          <hr>
          <!-- Documentation Link -->
          <div class="row">
            <div class="col-lg-12">
              <h5>Master</h5>
            </div>
          </div>

          <div class="row mb-3">
            <!-- New User Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <a href="{{url ('CrudGedung')}}" class="card-link">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1 text-gray-800">Data Gedung</div>
                      <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{count($gedung)}}</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-table fa-2x text-info"></i>
                    </div>
                  </div>
                </div>
              </div>
            </a>
            </div>

            <!-- New User Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <a href="{{url ('CrudFasilitas')}}" class="card-link">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1 text-gray-800">Data Fasilitas</div>
                      <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{count($fasilitas)}}</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-list fa-2x text-warning"></i>
                    </div>
                  </div>
                </div>
              </div>
            </a>
            </div>

          </div>

          <hr>
          <!-- Documentation Link -->
          <div class="row">
            <div class="col-lg-12">
              <h5>Penyewaan Gedung</h5>
            </div>
          </div>

          <div class="row mb-3">
            <!-- New User Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <a href="{{url ('CrudPenyewaanGedung')}}" class="card-link">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1 text-gray-800">Data Penyewaan</div>
                      <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{count($penyewaan)}}</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-info"></i>
                    </div>
                  </div>
                </div>
              </div>
            </a>
            </div>

            <!-- New User Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <a href="{{url ('CrudPembayaranGedung')}}" class="card-link">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1 text-gray-800">Data Pembayaran</div>
                      <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{count($pembayaran)}}</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-donate fa-2x text-info"></i>
                    </div>
                  </div>
                </div>
              </div>
            </a>
            </div>
            
          </div>

        <!---Container Fluid-->
@endsection