@extends('user.layout.TampilanUser')
@section('content')
		<br>
        <!--================Blog Area =================-->
        <section class="blog_area">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8">
                        <div class="blog_left_sidebar">
                            <article class="row blog_item">
                                <div class="col-md-12">
                                    <h1>Selamat Datang, {{Session::get('nama')}}</h1>                               
                                </div>
                            </article>
                            <hr>
                
                            <article class="row blog_item">
                                <div class="col-md-12">
                                    <h3>History Penyewaan</h3><br>
                                    <table class="table align-items-center table-flush table-hover">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>No</th>
                                                <th>Id Penyewaan</th>
                                                <th>Gedung</th>
                                                <th>Tanggal Sewa</th>
                                                <th>Acara</th>
                                                <th>Nama</th>
                                                <th>Harga</th>
                                                <th>Status Sewa</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $no=1;
                                              @endphp
                                            @if(isset($datas))
                                                @foreach($datas as $tampil)
                                                <tr>
                                                    <td>{{$no++}}</td>
                                                    <td>{{$tampil->id_penyewaan}}</td>
                                                    <td>{{$tampil->Gedung->nama_gedung}}</td>
                                                    <td>{{$tampil->tanggal_sewa}}</td>
                                                    <td>{{$tampil->nama_acara}}</td>
                                                    <td>{{$tampil->nama_penyewa}}</td>
                                                    <td>@currency($tampil->harga)</td>
                                                    <td>{{$tampil->status_sewa}}</td>
                                                </tr>
                                                @endforeach

                                            @else
                                            <tr>
                                                <td colspan="8" align="center"><b>Belum ada histori penyewaan</b></td>
                                            </tr>
                                            @endif
                                        </tbody>
                                        
                                    </table>
                                </div>
                            </article>
                        </div>
                    </div>

					<div class="col-lg-4">
                        <div class="blog_right_sidebar">
                            <aside class="single_sidebar_widget popular_post_widget">
                                <h3 class="widget_title">Profil</h3>
										<div class="info_item">
                                            <div class="form-group row">
                                                <label for="nama" class="col-sm-3 col-form-label"><b>Nama</b></label>
                                                <div class="col-sm-9">
                                                <input type="text" class="single-input" id="nama" value="{{Session::get('nama')}}" disabled>
                                              </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="email" class="col-sm-3 col-form-label"><b>Email</b></label>
                                                <div class="col-sm-9">
                                                <input type="text" class="single-input" id="email" value="{{Session::get('email')}}" disabled>
                                              </div>
                                            </div><div class="form-group row">
                                                <label for="no_hp" class="col-sm-3 col-form-label"><b>No HP</b></label>
                                                <div class="col-sm-9">
                                                <input type="text" class="single-input" id="no_hp" value="{{Session::get('no_hp')}}" disabled>
                                              </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="alamat" class="col-sm-3 col-form-label"><b>Alamat</b></label>
                                                <div class="col-sm-9">
                                                    <textarea class="single-textarea" id="alamat" disabled>{{Session::get('alamat')}}</textarea>
                                              </div>
                                            </div>
                                            <div class="text-center">
                                                <hr>
                                                <a href="HalamanEditProfilUser{{Session::get('id_user')}}" class="genric-btn danger-border circle arrow text-uppercase">Ubah</a>
                                                
			                             </div>
			                    </div>  
                         </div>
                      </div>
				</section>
@endsection


