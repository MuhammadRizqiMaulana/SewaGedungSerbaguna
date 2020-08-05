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
				
			</div>
			<div class="col-lg-8">
				<div class="banner_content">
					<div class="row d-flex align-items-center">
						<div class="col-lg-7 col-md-12">
							<p class="top-text">Sewa Gedung Serbaguna</p>
							<h1>Silahkan Daftar</h1>
							<p>Dengan memiliki akun, akan mempermudah dalam hal penyewaan dan fitur-fitur lainnya</p>
						</div>
						<div class="col-lg-5 col-md-12">
							<div class="banner-btn">
								<a class="primary-btn text-uppercase" href="{{url('HalamanLoginUser')}}">Sudah Punya Akun</a>
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
							<h1>Formulir Register</h1>

							<form class="contact-form-area contact-page-form contact-form text-right" action="{{url('registerPost')}}" method="post">

								{{csrf_field()}}

								<div class="form-group col-md-12">
									<input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Lengkap" onfocus="this.placeholder = ''"
									 onblur="this.placeholder = 'Masukkan Nama Lengkap'">

									 @if ($errors->has('nama'))
		                                <span class="text-danger"><p class="text-right">* {{ $errors->first('nama') }}</p></span>
		                            @endif
								</div>
								<div class="form-group col-md-12">
									<input type="text" class="form-control" id="email" name="email" placeholder="Masukkan Email" onfocus="this.placeholder = ''"
									 onblur="this.placeholder = 'Masukkan Email'">

									@if ($errors->has('email'))
		                                <span class="text-danger"><p class="text-right">* {{ $errors->first('email') }}</p></span>
		                            @endif
								</div>
								<div class="form-group col-md-12">
									<input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password" onfocus="this.placeholder = ''"
									 onblur="this.placeholder = 'Masukkan Password'">

									 @if ($errors->has('password'))
		                                <span class="text-danger"><p class="text-right">* {{ $errors->first('password') }}</p></span>
		                            @endif
								</div>
								<div class="form-group col-md-12">
									<input type="password" class="form-control" id="confirmation" name="confirmation" placeholder="Ulangi Password" onfocus="this.placeholder = ''"
									 onblur="this.placeholder = 'Ulangi Password'">

									 @if ($errors->has('confirmation'))
		                                <span class="text-danger"><p class="text-right">* {{ $errors->first('confirmation') }}</p></span>
		                            @endif
								</div>
								<div class="form-group col-md-12">
									<input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="Masukkan Nomor Hp" onfocus="this.placeholder = ''"
									 onblur="this.placeholder = 'Masukkan Nomor Hp'">

									 @if ($errors->has('no_hp'))
		                                <span class="text-danger"><p class="text-right">* {{ $errors->first('no_hp') }}</p></span>
		                            @endif
								</div>
								<div class="form-group col-md-12">
									<textarea class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat" onfocus="this.placeholder = ''"
									 onblur="this.placeholder = 'Masukkan Alamat'"></textarea>

									 @if ($errors->has('alamat'))
		                                <span class="text-danger"><p class="text-right">* {{ $errors->first('alamat') }}</p></span>
		                            @endif
								</div>
								
								<div class="col-lg-12 text-center">
									<input type="submit" class="primary-btn text-uppercase" value="Daftar">
									<input type="reset" class="btn btn-warning text-uppercase" value="Batal">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--================ End Reservstion Area =================-->

			<br><br><br><br><br><br><br><br>
@endsection