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
							<h1>Fasilitas</h1>
							<p>Gedung Serbaguna kami memiliki beberapa sarana dan fasilitas demi menunjang kenyamanan penggunanya</p>
						</div>
						<div class="col-lg-5 col-md-12">
							<div class="page-link-wrap">
								<div class="page_link">
									<a href="{{url('/')}}">Home</a>
									<a href="{{url('fasilitas')}}">Fasilitas</a>
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
						<h1 class="mb-20 title_color">{{$tampil->Gedung->nama_gedung}}</h1>
						<a href="{{ url('img/gedung/'.$tampil->Gedung->gambar_gedung) }}" class="img-gal">
								<div class="single-gallery-image" style="background: url({{ url('img/gedung/'.$tampil->Gedung->gambar_gedung) }});"></div>
							</a>
						<hr>
							<div class="">
								<ul class="unordered-list">									
									<li>
										<p>{{$tampil->ruangan_tambahan}}</p>
									</li>
									<li>
										<p>{{$tampil->toilet}}</p>
									</li>
									<li>
										<p>{{$tampil->perlengkapan_operator}}</p>
									</li>
									<li>
										<p>{{$tampil->kursi}}</p>
									</li>
									<li>
										<p>{{$tampil->musholah}}</p>
									</li>
									<li>
										<p>{{$tampil->fasilitas_tambahan1}}</p>
									</li>									
									<li>
										<p>{{$tampil->fasilitas_tambahan2}}</p>
									</li>
									<li>
										<p>{{$tampil->fasilitas_tambahan3}}</p>
									</li>
									<li>
										<p>{{$tampil->fasilitas_tambahan4}}</p>
									</li>
									<li>
										<p>{{$tampil->fasilitas_tambahan5}}</p>
									</li>										
								</ul>
							</div>
					</div>
					@endforeach
				@endif
				</div>
			</div>
		</section>
		<!--================End Menu Area =================-->
@endsection