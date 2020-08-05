@extends('admin.layout.TampilanAdmin')
@section('content')
      <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Ubah Data Akun User</h1>
            <ol class="breadcrumb">  
              <li class="breadcrumb-item"><a href="{{url ('DashboardAdmin')}}">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="{{url ('CrudAkunUser')}}">Data Akun User</a></li>
              <li class="breadcrumb-item active" aria-current="page">Ubah Data Akun User</li>            
            </ol>
          </div>
          <hr>
          <div class="row justify-content-center">
            <div class="col-lg-6">

              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Ubah Data Akun User</h6>
                </div>
                <div class="card-body">

                  <form enctype="multipart/form-data" class="contact-form-area contact-page-form contact-form text-left" action="AksiEditAkunUser{{$datas->id_user}}" method="post">

                    {{csrf_field()}}

                    <table>
                      <tr>
                        <td><label><b>Nama User Lama</b></label></td>
                        <td width="250"><label><b>Nama User Baru</b></label></td>
                      </tr>
                      <tr>
                        <td><input type="text" class="form-control" placeholder="kosongkan jika tidak dirubah" value="{{$datas->nama_user}}" readonly></td>
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
                        <td><label><b>Email Lama</b></label></td>
                        <td width="250"><label><b>Email Baru</b></label></td>
                      </tr>
                      <tr>
                        <td><input type="text" class="form-control" value="{{$datas->email}}" readonly></td>
                        <td><input type="text" class="form-control" name="email" placeholder="Kosongkan jika tidak dirubah"></td>
                      </tr>
                    </table>
                    @if ($errors->has('email'))
                        <span class="text-danger"><p class="text-right">* {{ $errors->first('email') }}</p></span>
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
                        <td><label><b>No Handphone Lama</b></label></td>
                        <td width="250"><label><b>No Handphone Baru</b></label></td>
                      </tr>
                      <tr>
                        <td><input type="text" class="form-control" value="{{$datas->no_hp}}" readonly></td>
                        <td><input type="text" class="form-control" name="no_hp" placeholder="kosongkan jika tidak dirubah"></td>
                      </tr>
                    </table>
                    @if ($errors->has('no_hp'))
                        <span class="text-danger"><p class="text-right">* {{ $errors->first('no_hp') }}</p></span>
                    @endif
                    <hr>
                    
                    <table>
                      <tr>
                        <td><label><b>Alamat Lama</b></label></td>
                        <td width="250"><label><b>Alamat Baru</b></label></td>
                      </tr>
                      <tr>
                        <td>
                          <textarea class="form-control" readonly>{{$datas->alamat}}</textarea>
                        </td>
                        <td>
                          <textarea class="form-control" name="alamat"placeholder="kosongkan jika tidak dirubah"></textarea>
                        </td>
                      </tr>
                    </table>
                   @if ($errors->has('alamat'))
                        <span class="text-danger"><p class="text-right">* {{ $errors->first('alamat') }}</p></span>
                    @endif
                    <hr>

                    <div class="form-group"> 
                        <input type="reset" class="btn btn-secondary"  value="Batal">
                        <input type="submit" class="btn btn-primary" value="Simpan">
                    </div>
                </form>
              </div>
            </div>

          </div>
        </div>
      <!---Container Fluid-->
@endsection
