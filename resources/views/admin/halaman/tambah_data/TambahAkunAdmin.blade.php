@extends('admin.layout.TampilanAdmin')
@section('content')
      <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Data Akun Admin</h1>
            <ol class="breadcrumb">  
              <li class="breadcrumb-item"><a href="{{url ('DashboardAdmin')}}">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="{{url ('CrudAkunAdmin')}}">Data Akun Admin</a></li>
              <li class="breadcrumb-item active" aria-current="page">Tambah Data Akun Admin</li>            
            </ol>
          </div>
          <hr>
          <div class="row justify-content-center">
            <div class="col-lg-6">

              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Tambah Data Akun Admin</h6>
                </div>
                <div class="card-body">


                  <form enctype="multipart/form-data" class="contact-form-area contact-page-form contact-form text-left" action="{{url('AksiTambahAkunAdmin')}}" method="post">

                    {{csrf_field()}}

                    <div class="form-group">
                      <label>Nama Akun Admin</label>
                      <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Akun">
                      @if ($errors->has('nama'))
                        <span class="text-danger"><p class="text-right">* {{ $errors->first('nama') }}</p></span>
                    @endif
                    </div>
                    <div class="form-group">
                      <label>Username</label>
                      <input type="text" class="form-control" name="username" placeholder="Masukkan Username">
                    @if ($errors->has('username'))
                        <span class="text-danger"><p class="text-right">* {{ $errors->first('username') }}</p></span>
                    @endif
                    </div>
                    <div class="form-group">
                      <label>Password</label>
                      <input type="password" class="form-control" name="password"placeholder="Masukkan Password">
                      @if ($errors->has('password'))
                        <span class="text-danger"><p class="text-right">* {{ $errors->first('password') }}</p></span>
                    @endif
                    </div>
                    <div class="form-group">
                      <label>Email</label>
                      <input type="text" class="form-control" name="email" placeholder="Masukkan Email">
                      @if ($errors->has('email'))
                        <span class="text-danger"><p class="text-right">* {{ $errors->first('email') }}</p></span>
                    @endif
                    </div>
                    <div class="form-group">
                      <label>No Handphone</label>
                      <input type="text" class="form-control" name="no_hp" placeholder="Masukkan Nomer Hp">
                      @if ($errors->has('no_hp'))
                        <span class="text-danger"><p class="text-right">* {{ $errors->first('no_hp') }}</p></span>
                    @endif
                    </div>
                    <div class="form-group">
                      <label>Foto</label>
                      <input type="file" class="form-control" name="foto" >
                      @if ($errors->has('foto'))
                        <span class="text-danger"><p class="text-right">* {{ $errors->first('foto') }}</p></span>
                    @endif
                    </div>
                    <div class="form-group">
                      <label>Level</label>
                          <select name="level" class="form-control form-control-user">
                              <option value="" active>Pilih Level</option>
                              <option value="Admin">Admin</option>
                              <option value="Pemilik">Pemilik</option>
                          </select>
                          @if ($errors->has('level'))
                        <span class="text-danger"><p class="text-right">* {{ $errors->first('level') }}</p></span>
                    @endif
                    </div>
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
