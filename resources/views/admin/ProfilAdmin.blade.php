@extends('admin.layout.TampilanAdmin')
@section('content')

     
      <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper"> 
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Profil Admin</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item active" aria-current="page">Profil Admin</li>
            </ol>
          </div>
          <hr>
          <!-- Documentation Link -->
          

          <div class="row mb-3 justify-content-center">
            <!-- New User Card Example -->
              <div class="col-lg-6">
              <!-- Form Basic -->
              <div class="card mb-4 ">
                
                <div class="card-body">
                  
                  <div class="col-lg-12">
                <div class="login-form">
                  <div class="text-center">             
                      <img class="img-profile rounded-circle" src="{{ url('img/profil_admin/'.$profil->foto) }}" style="max-width: 150px">
                  </div>
                  <hr>
                  
                  <table>
                    <tr>
                      <td width="130"><label>Nama</label></td>
                      <td><label>:&nbsp;&nbsp;</label></td>
                      <td><label><b>{{$profil->nama_admin}}</b></label></td>
                    </tr>
                    <tr>
                      <td><label>Username</label></td>
                      <td><label>:</label></td>
                      <td><label><b>{{$profil->username}}</b></label></td>
                    </tr>
                    <tr>
                      <td><label>Email</label></td>
                      <td><label>:</label></td>
                      <td><label><b>{{$profil->email}}</b></label></td>
                    </tr>
                    <tr>
                      <td><label>No HP</label></td>
                      <td><label>:</label></td>
                      <td><label><b>{{$profil->no_hp}}</b></label></td>
                    </tr>
                    <tr>
                      <td><label>Level</label></td>
                      <td><label>:</label></td>
                      <td><label><b>{{$profil->level}}</b></label></td>
                    </tr>
                  </table>
                  <hr>
                  <div class="text-right">
                      <a href="{{url ('/ProfilAdmin/editProfilAdmin')}}{{$profil->id_admin}}" class="btn btn-outline-dark mb-1">Ubah Data</a>
                  </div>
                  
                </div>
              </div>

                </div>
              </div>
            </div>

        </div>
        @endsection
      <!---Container Fluid-->
