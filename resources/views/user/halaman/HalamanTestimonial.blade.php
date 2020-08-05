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
							<h1>Testimonial</h1>
							<p>-</p>
						</div>
						<div class="col-lg-5 col-md-12">
							<div class="page-link-wrap">
								<div class="page_link">
									<a href="{{url('/')}}">Home</a>
									<a href="{{url('fasilitas')}}">Testimonial</a>
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
                @foreach($datas as $tampil)
                    <div class="col-md-2">
                        <div class="blog_info text-right">
                            <ul class="blog_meta list">
                                <li><a href="#">{{$tampil->nama}}<i class="lnr lnr-user"></i></a></li>
                                <li><a href="#">{{$tampil->created_at}}<i class="lnr lnr-calendar-full"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="blog_post">
                            <div class="blog_details" style="text-align:justify">
                                <p>{{$tampil->keterangan}}</span>
							</div>
                        </div>
                    </div>
					@endforeach
				</div>
			</div>
		</section>
		<!--================End Menu Area =================-->
@endsection