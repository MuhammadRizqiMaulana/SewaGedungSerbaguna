@extends('user.layout.tampilanUser')
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
						<div class="col-lg-8 col-md-12">
							<p class="top-text">Sewa Gedung Serbaguna</p>
							<h1>Gedung Serbaguna GSG</h1>
							<p>Dengan Pengelola Gedung Serbaguna  yang telah berpengalaman dalam mengkoordinasikan berbagai jenis acara seperti Pernikahan, Resepsi Perkawinan, wisuda, Seminar, Pameran, Peluncuran Produk, Gathering, Gala Dinner, dan Acara Keagamaan dapat membantu mensukseskan acara yang akan anda laksanakan</p>
						</div>
						<div class="col-lg-4 col-md-12">
							<div class="banner-btn">
								<a class="primary-btn text-uppercase" href="#">Explore Menu</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End banner bottom -->
		<!--================ End Home Banner Area =================-->


		<!--================Blog Area =================-->
        <section class="blog_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog_left_sidebar">
                            <article class="row blog_item">
                                <div class="col-md-2">
                                    
                                </div>
                                <div class="col-md-9">
                                    <div class="blog_post">
                                        <img src="img/blog/main-blog/m-blog-1.jpg" alt="">
                                        <div class="blog_details">
                                            <a href="single-blog.html">
                                                <h2>Sekilas Tentang Gedung Serbaguna</h2>
                                            </a>
											<p>Gedung Serbaguna sudah berdiri sejak tahun 1990 diresmikan pada tanggal 23 Oktober 1990.</p>
											<p>Gedung Serbaguna dilengkapi dengan berbagai sarana dan fasilitas yang menghiasi seluruh ruangan,
											diantaranya Ballroom dengan design interior mewah dengan Full AC dilapisi Karpet Mewah yang membentang diseluruh ruangan serta dengan 5 Lampu Gantung Kristal sehingga memberikan kesan anggun nan mewah.
											Pengelola Gedung Serbaguna telah berpengalaman dalam mengkoordinasikan berbagai jenis acara seperti Pernikahan, Resepsi Perkawinan, wisuda, Seminar, Pameran, Peluncuran Produk, Gathering, Gala Dinner, dan Acara Keagamaan.
											Lokasi Gedung Serbaguna sangat strategis.</p>
											<p>Gedung Serbaguna telah memiliki cabang diberbagai kota, seperti Jakarta, Bandung, Cirebon, Kuningan, Indramayu, dan masih banyak yang lainnya.</p>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>

					<div class="col-lg-4">
                        <div class="blog_right_sidebar">
                            <aside class="single_sidebar_widget popular_post_widget">
                                <h3 class="widget_title">Gedung Serbaguna</h3>
                               
                                <div class="media post_item">
                                    <div class="contact_info">
										<div class="info_item">
											<i class="lnr lnr-map-marker"></i>
											<h6>Lohbener, Kabupaten Indramayu</h6>
											<p>Jl. Lohbener lama no.8</p>
										</div>
										<div class="info_item">
											<i class="lnr lnr-phone-handset"></i>
											<h6><a href="#">( 0123 ) 456789</a></h6>
											<p>Senin s.d Jum'at; pukul 09.00 s.d 16.00</p>
										</div>
										<div class="info_item">
											<i class="lnr lnr-envelope"></i>
											<h6><a href="#">kelompok@d4rpl2b.com</a></h6>
											<p>Send us your query anytime!</p>
										</div>
			                        </div>
			                    </div>
                                <div class="br"></div>
                            </aside>
                          	<aside class="single_sidebar_widget popular_post_widget">
                                <h3 class="widget_title">Hubungi</h3>
                                
                                <div class="media post_item">
                                	<h5><strong>Admin 1</strong></h5>
                                    <div class="contact_info">
										<div class="info_item">
											<a href="https://api.whatsapp.com/send?phone=6285270300731&text=Hallo%20mau%20minta%20tolong"><img src="img/tombolwa.png" alt="post"></a>
											<p>085270300731</p>
										</div>
			                        </div>
			                    </div>
			                    <div class="media post_item">
                                	<h5><strong>Admin 2</strong></h5>
                                    <div class="contact_info">
										<div class="info_item">
											<a href="#"><img src="img/tombolwa.png" alt="post"></a>
											<p>082234567890</p>
										</div>
			                        </div>
			                    </div>
                            </aside>  
                         </div>
                      </div>
				</section>

				<!--================ Start Food Gallery Area =================-->
		<section class="section_gap_top food-gallery-area">
			<div class="container-fluid no-padding">
				<div class="row owl-carousel active-food-gallery">
			@if(isset($galeri))
				@foreach($galeri as $tampil)
					<!-- single gallery item -->
					<div class="col-md-13">
							<a href="{{ url('img/galeri/'.$tampil->gambar_galeri) }}" class="img-gal">
								<div class="single-gallery-image" style="background: url({{ url('img/galeri/'.$tampil->gambar_galeri) }});"></div>
							</a>
						</div>
				@endforeach
			@endif
				
				</div>
			</div>
		</section>
		<!--================ End Food Gallery Area =================-->
@endsection
