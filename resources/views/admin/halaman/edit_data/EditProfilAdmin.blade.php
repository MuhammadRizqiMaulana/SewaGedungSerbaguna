@extends('admin.layout.TampilanAdmin')
@section('content')

     
      <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper"> 
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Profil Admin</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="{{url ('ProfilAdmin')}}{{$datas->id_admin}}">Profil Admin</a>
              </li>

              <li class="breadcrumb-item active" aria-current="page">Edit Profil Admin</li>
            </ol>
          </div>
          <hr>
          <!-- Documentation Link -->
          

          <div class="row mb-3 justify-content-center">
            <!-- New User Card Example -->
              <div class="col-lg-7">
              <!-- Form Basic -->
              <div class="card mb-5">
                
                <div class="card-body">
                  
                  <div class="col-lg-12">
                <div class="login-form">
                  <div class="text-center">
                    <div class="text-center">             
                      <img class="img-profile rounded-circle" src="{{ url('img/profil_admin/'.$datas->foto) }}" style="max-width: 150px">
                  </div>
                    <hr>
                  </div>

                  <form enctype="multipart/form-data" class="contact-form-area contact-page-form contact-form text-left" action="AksiEditProfilAdmin{{$datas->id_admin}}" method="post">

                    {{csrf_field()}}
                    
                    <table>
                      <tr>
                        <td><label><b>Nama Admin Lama</b></label></td>
                        <td width="250"><label><b>Nama Admin Baru</b></label></td>
                      </tr>
                      <tr>
                        <td><input type="text" class="form-control" placeholder="kosongkan jika tidak dirubah" value="{{$datas->nama_admin}}" readonly></td>
                        <td><input type="text" class="form-control" name="nama" placeholder="kosongkan jika tidak dirubah"></td>
                        <td></td>
                      </tr>
                    </table>
                    @if ($errors->has('nama'))
                        <span class="text-danger"><p class="text-right">* {{ $errors->first('nama') }}</p></span>
                    @endif
                    <hr>
                    <table>
                      <tr>
                        <td><label><b>Username Lama</b></label></td>
                        <td width="250"><label><b>Username Baru</b></label></td>
                      </tr>
                      <tr>
                        <td><input type="text" class="form-control" value="{{$datas->username}}" readonly></td>
                        <td><input type="text" class="form-control" name="username" placeholder="Kosongkan jika tidak dirubah"></td>
                      </tr>
                    </table>
                    @if ($errors->has('username'))
                        <span class="text-danger"><p class="text-right">* {{ $errors->first('username') }}</p></span>
                    @endif
                    <hr>
                    <table>
                      <tr>
                        <td><label><b>Password Lama</b></label></td>
                        <td width="250"><label><b>Password Baru</b></label></td>
                      </tr>
                      <tr>
                        <td><input type="password" class="form-control" value="{{$datas->password}}" readonly></td>
                        <td><input type="password" class="form-control" name="password" placeholder="kosongkan jika tidak dirubah"></td>
                      </tr>
                    </table>
                    @if ($errors->has('password'))
                        <span class="text-danger"><p class="text-right">* {{ $errors->first('password') }}</p></span>
                    @endif
                    <hr>
                    <table>
                      <tr>
                        <td><label><b>Email Lama</b></label></td>
                        <td width="250"><label><b>Email Baru</b></label></td>
                      </tr>
                      <tr>
                        <td><input type="email" class="form-control" value="{{$datas->email}}" readonly></td>
                        <td><input type="text" class="form-control" name="email" placeholder="kosongkan jika tidak dirubah"></td>
                      </tr>
                    </table>
                    @if ($errors->has('email'))
                        <span class="text-danger"><p class="text-right">* {{ $errors->first('email') }}</p></span>
                    @endif
                    <hr>
                    
                    <table>
                      <tr>
                        <td><label><b>No Handphone Lama</b></label></td>
                        <td width="250"><label><b>No Handphone Baru</b></label></td>
                      </tr>
                      <tr>
                        <td><input type="number" class="form-control" value="{{$datas->no_hp}}" readonly></td>
                        <td><input type="text" class="form-control" name="no_hp" placeholder="kosongkan jika tidak dirubah"></td>
                      </tr>
                    </table>
                    @if ($errors->has('no_hp'))
                        <span class="text-danger"><p class="text-right">* {{ $errors->first('no_hp') }}</p></span>
                    @endif
                    <hr>
                    <table>
                      <tr>
                        <td><label><b>Foto Lama</b></label></td>
                        <td width="250"><label><b>Foto Baru</b></label></td>
                      </tr>
                      <tr>
                        <td>
                          <img src="{{ url('img/profil_admin/'.$datas->foto) }}" style="max-width: 100px">
                        </td>
                        <td><input type="file" class="form-control" name="foto" ></td>
                        <td></td>
                      </tr>
                    </table>
                    <span class="text-info"><p class="text-right">* Maksimal Ukuran 2 Mb</p></span>
                    @if ($errors->has('foto'))
                        <span class="text-danger"><p class="text-right">* {{ $errors->first('foto') }}</p></span>
                    @endif
                    <hr>
                    <table>
                      <tr>
                        <td><label><b>Level Lama</b></label></td>
                        <td width="250"><label><b>Level Baru</b></label></td>
                      </tr>
                      <tr>
                        <td><input type="text" class="form-control" value="{{$datas->level}}" readonly></td>
                        <td>
                          <select name="level" class="form-control">
                            <option value="">Pilih Level</option>
                            <option value="Pemilik" {{ ($datas->level == 'Pemilik')? "":"disabled"}}>Pemilik</option>
                            <option value="Admin" {{ ($datas->level == 'Pemilik')? "disabled":""}}>Admin</option>
                          </select>
                        </td>
                      </tr>
                    </table>
                    @if ($datas->level == 'Pemilik')
                        <span class="text-info"><p class="text-right">* Level Pemilik tidak bisa dirubah</p></span>
                    @endif
                    @if ($errors->has('level'))
                        <span class="text-danger"><p class="text-right">* {{ $errors->first('level') }}</p></span>
                    @endif
                    <hr>
                    
                    <div class="form-group text-right"> 
                        <input type="submit" class="btn btn-primary" value="Ubah">
                        <input type="reset" class="btn btn-secondary"  value="Batal">
                        
                    </div>
                </form>

                </div>
              </div>

                </div>
              </div>
            </div>

        </div>
        @endsection
      <!---Container Fluid-->
