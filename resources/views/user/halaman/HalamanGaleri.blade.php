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
							<h1>Galeri</h1>
							<p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards
								especially in the workplace. That’s why it’s crucial that, as women.</p>
						</div>
						<div class="col-lg-5 col-md-12">
							<div class="page-link-wrap">
								<div class="page_link">
									<a href="{{url('/')}}">Home</a>
									<a href="{{url('HalamanGaleri')}}">Galeri</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End banner bottom -->
		<!--================ End Home Banner Area =================-->

		<!-- Start Align Area -->
		<div class="whole-wrap">
			<div class="container">
				<div class="section-top-border">
					<h3 class="title_color">Image Gallery</h3>
					<div class="row gallery-item">
					@if(isset($datas))
						@foreach($datas as $tampil)
						<div class="col-md-4">
							<a href="{{ url('img/galeri/'.$tampil->gambar_galeri) }}" class="img-gal">
								<div class="single-gallery-image" style="background: url({{ url('img/galeri/'.$tampil->gambar_galeri) }});"></div>
							</a>
						</div>
						@endforeach
					@endif
					
					</div>
				</div>
				
			</div>
		</div>
		<!-- End Align Area -->

@endsection