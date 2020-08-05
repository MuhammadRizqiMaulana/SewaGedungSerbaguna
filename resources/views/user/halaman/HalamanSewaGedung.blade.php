@extends('user.layout.TampilanUser')
@section('content')

<!--================ Start Home Banner Area =================-->
		<section class="home_banner_area common-banner">
			<div class="banner_inner">
				<div class="container-fluid no-padding">
					<div class="row fullscreen">

					</div>
				</div>
			</div>
		</section>
		<!-- Start banner bottom -->
		<div class="row banner-bottom common-bottom-banner align-items-center justify-content-center">
			<div class="col-lg-8 offset-lg-4">
				<div class="banner_content">
					<div class="row d-flex align-items-center">
						<div class="col-lg-7 col-md-12">
							<h1>Sewa Gedung</h1>
							@if(\Session::has('alert-success'))
			                    <div class="alert alert-success alert-dismissible" role="alert">
			                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			                          <span aria-hidden="true">&times;</span>
			                        </button>
			                        {{Session::get('alert-success')}}
			                    </div>
			                  @endif
					
						</div>
						<div class="col-lg-5 col-md-12">
							<div class="page-link-wrap">
								<div class="page_link">
									<a href="{{url('/')}}">Home</a>
									<a href="{{url('sewa')}}">Sewa Gedung</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End banner bottom -->
		<!--================ End Home Banner Area =================-->

<!--================ Menu Area =================-->
		<section class="menu_area section_gap">
			<div class="container">
				<div class="row menu_inner">
				@if(isset($datas))
					@foreach($datas as $tampil)
					<div class="col-lg-4 col-sm-6 mt-sm-30 typo-sec">
						<h1 class="mb-20 title_color text-center">{{$tampil->nama_gedung}}</h1>
						<a href="{{ url('img/gedung/'.$tampil->gambar_gedung) }}" class="img-gal">
								<div class="single-gallery-image" style="background: url({{ url('img/gedung/'.$tampil->gambar_gedung) }});"></div>
							</a>
						<hr>

						<div class="form-group">
							<label><strong>Deskripsi</strong></label>
							<input type="text" class="single-input" value="{{$tampil->deskripsi}}" readonly>
						</div>
						<hr>
						<div class="form-group">
							<label><strong>Alamat</strong></label>
							<textarea class="single-input" readonly>{{$tampil->alamat}}</textarea>
						</div>
						<hr>
						<div class="form-group">
							<label><strong>Harga</strong></label>
							<input type="text" class="single-input" value="@currency($tampil->harga)" readonly>
						</div>
						<hr>
						<div class="text-center">
							<a href="FormulirSewaGedung{{$tampil->id_gedung}}" class="genric-btn primary-border circle arrow">SEWA<span class="lnr lnr-arrow-right"></span></a>
						</div>

					</div>
					@endforeach
				@endif
				</div>
			</div>
		</section>
		<!--================End Menu Area =================-->
@endsection