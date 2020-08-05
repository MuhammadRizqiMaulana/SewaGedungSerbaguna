@extends('admin.layout.TampilanAdmin')
@section('content')
      <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Data Akun User</h1>
            <ol class="breadcrumb">  
              <li class="breadcrumb-item"><a href="{{url ('DashboardAdmin')}}">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="{{url ('CrudAkunUser')}}">Data Akun User</a></li>
              <li class="breadcrumb-item active" aria-current="page">Tambah Data Akun User</li>            
            </ol>
          </div>
          <hr>
          <div class="row justify-content-center">
            <div class="col-lg-6">

              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Tambah Data Akun User</h6>
                </div>
                <div class="card-body">


                  <form class="contact-form-area contact-page-form contact-form text-left" action="{{url('AksiTambahAkunUser')}}" method="post">

                    {{csrf_field()}}

                    <div class="form-group">
                      <label>Nama Akun User</label>
                      <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Akun">
                      @if ($errors->has('nama'))
                        <span class="text-danger"><p class="text-right">* {{ $errors->first('nama') }}</p></span>
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
                      <label>Password</label>
                      <input type="password" class="form-control" name="password"placeholder="Masukkan Password">
                      @if ($errors->has('password'))
                        <span class="text-danger"><p class="text-right">* {{ $errors->first('password') }}</p></span>
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
                      <label>Alamat</label>
                      <textarea class="form-control" name="alamat" placeholder="Masukkan Alamat"></textarea>
                      @if ($errors->has('alamat'))
                        <span class="text-danger"><p class="text-right">* {{ $errors->first('alamat') }}</p></span>
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
