@extends('user.layout.TampilanUser')
@section('content')
		<!--================ Start Home Banner Area =================-->
		<section class="home_banner_area">
			<div class="banner_inner">
				<div class="container-fluid no-padding">
					<div class="row fullscreen">

					</div>
				</div>
			</div>
		</section>
		<!-- Start banner bottom -->
		<div class="row banner-bottom align-items-center justify-content-center">
			<div class="col-lg-4">
				<div class="video-popup d-flex align-items-center">
					<a class="play-video video-play-button animate" href="https://www.youtube.com/watch?v=KUln2DXU5VE" data-animate="zoomIn"
					 data-duration="1.5s" data-delay="0.1s">
						<span><img src="img/banner/play-icon.png" alt=""></span>
					</a>
					<div class="watch">
						<h6>Lihat Video</h6>
						<p>You will love our execution</p>
					</div>
				</div>
			</div>
			<div class="col-lg-8">
				<div class="banner_content">
					<div class="row d-flex align-items-center">
						<div class="col-lg-7 col-md-12">
							<p class="top-text">Sewa Gedung Serbaguna</p>
							<h1>Silahkan Login</h1>
							<p>Dengan memiliki akun, akan mempermudah dalam hal penyewaan dan fitur-fitur lainnya</p>
						</div>
						<div class="col-lg-5 col-md-12">
							<div class="banner-btn">
								<a class="primary-btn text-uppercase" href="{{url('HalamanRegisterUser')}}">Tidak Punya Akun</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End banner bottom -->
		<!--================ End Home Banner Area =================-->
		<br><br><br><br>
		<!--================ Start Reservstion Area =================-->
		<section class="reservation-area section_gap_top">
			<div class="container">
				<div class="row align-items-center justify-content-center">
					<div class="col-lg-6 offset-lg-6">
						<div class="contact-form-section">
							<h1>Silahkan Login</h1><br>

							<!------------ Alert----------->

								@if(\Session::has('alert'))
								<div class="alert alert-danger alert-dismissible" role="alert">
				                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				                      <span aria-hidden="true">&times;</span>
				                    </button>
				                    {{Session::get('alert')}}
				                 </div>
				                 @endif
				                 @if(\Session::has('alert-success'))
				                 <div class="alert alert-success alert-dismissible" role="alert">
				                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				                      <span aria-hidden="true">&times;</span>
				                    </button>
				                    {{Session::get('alert-success')}}
				                 </div>
				                 @endif
				            <!------------ End Alert----------->
							<form class="contact-form-area contact-page-form contact-form text-right" action="{{url('loginPostUser')}}" method="post">
								
								{{csrf_field()}}

								<div class="form-group col-md-12">
									<input type="text" class="form-control" id="email" name="email" placeholder="Masukkan email" onfocus="this.placeholder = ''"
									 onblur="this.placeholder = 'Masukkan Email'">
								</div>
								@if ($errors->has('email'))
	                                <span class="text-danger"><p class="text-right">* {{ $errors->first('email') }}</p></span>
	                            @endif

								<div class="form-group col-md-12">
									<input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password" onfocus="this.placeholder = ''"
									 onblur="this.placeholder = 'Masukkan Password'">
								</div>
								@if ($errors->has('password'))
	                                <span class="text-danger"><p class="text-right">* {{ $errors->first('password') }}</p></span>
	                            @endif
								
								<div class="col-lg-12 text-center">
									<input type="submit" class="primary-btn text-uppercase" value="Login">
								</div>
								<div class="col-lg-12 text-center text-primary">
									<strong>atau</strong>
								</div>
								<div class="col-lg-12 text-center">
									<a class="primary-btn text-uppercase" href="{{url('HalamanRegisterUser')}}">Tidak Punya Akun</a>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--================ End Reservstion Area =================-->
		<br>	
	@endsection