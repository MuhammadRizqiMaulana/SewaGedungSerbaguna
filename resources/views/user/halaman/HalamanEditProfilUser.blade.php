@extends('user.layout.TampilanUser')
@section('content')
		<br>
        <!--================Blog Area =================-->
        <section class="blog_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="blog_left_sidebar">
                            <article class="row blog_item">
                                <div class="col-md-12">
                                    <h1>Selamat Datang, {{Session::get('nama')}}</h1>                               
                                </div>
                            </article>
                            <hr>                            
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h3 class="mb-30 title_color ">Ubah Profil</h3>
                    </div>
                    
                    <div class="col-lg-4">
                        <div class="mt-10">
                            <input type="text" name="nama_user" class="single-input" value="{{$datas->nama_user}}" readonly>
                        </div>
                        <div class="mt-10">
                            <input type="text" name="email" class="single-input" value="{{$datas->email}}" readonly>
                        </div>
                        <div class="mt-10">
                            <input type="password" name="password" class="single-input" value="{{$datas->password}}" readonly>
                        </div>
                        <div class="mt-10">
                            <input type="text" name="no_hp" class="single-input" value="{{$datas->no_hp}}" readonly>
                        </div>
                        <div class="mt-10">
                            <textarea name="alamat" class="single-textarea" readonly>{{$datas->alamat}}</textarea>
                        </div>

                    </div>

                    <div class="col-lg-6">
                        <form action="AksiEditProfilUser{{$datas->id_user}}" method="post">
                            {{csrf_field()}}
                        <div class="mt-10">
                            <input type="text" placeholder="Nama Baru                                 * kosongkan jika tidak dirubah" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama Baru                                 * kosongkan jika tidak dirubah'" name="nama_user" class="single-input" >

                            @if ($errors->has('nama_user'))
                                <span class="text-danger"><p class="text-right">* {{ $errors->first('nama_user') }}</p></span>
                            @endif
                        </div>
                        <div class="mt-10">
                            <input type="text" placeholder="Email Baru                                 * kosongkan jika tidak dirubah" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Baru                                 * kosongkan jika tidak dirubah'" name="email" class="single-input" >

                            @if ($errors->has('email'))
                                <span class="text-danger"><p class="text-right">* {{ $errors->first('email') }}</p></span>
                            @endif
                        </div>
                        <div class="mt-10">
                            <input type="password" placeholder="Password Baru                                 * kosongkan jika tidak dirubah" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password Baru                                 * kosongkan jika tidak dirubah'" name="password" class="single-input" >

                            @if ($errors->has('password'))
                                <span class="text-danger"><p class="text-right">* {{ $errors->first('password') }}</p></span>
                            @endif
                        </div>
                        <div class="mt-10">
                            <input type="text" placeholder="No Hp Baru                                 * kosongkan jika tidak dirubah" onfocus="this.placeholder = ''" onblur="this.placeholder = 'No Hp Baru                                 * kosongkan jika tidak dirubah'" name="no_hp" class="single-input" >

                            @if ($errors->has('no_hp'))
                                <span class="text-danger"><p class="text-right">* {{ $errors->first('no_hp') }}</p></span>
                            @endif
                        </div>
                        <div class="mt-10">
                            <textarea placeholder="Alamat Baru                                 * kosongkan jika tidak dirubah" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Alamat Baru                                 * kosongkan jika tidak dirubah'" name="alamat" class="single-textarea"></textarea>

                            @if ($errors->has('alamat'))
                                <span class="text-danger"><p class="text-right">* {{ $errors->first('alamat') }}</p></span>
                            @endif
                        </div>
                        <div class="mt-10">
                            <button type="Submit" class="genric-btn danger-border circle arrow text-uppercase">Simpan Perubahan<span class="lnr lnr-arrow-right"></span></button>
                        </div>
                    </form>
                    
                    </div>
                </div>



                </div>
            </div>
	    </section>
@endsection


