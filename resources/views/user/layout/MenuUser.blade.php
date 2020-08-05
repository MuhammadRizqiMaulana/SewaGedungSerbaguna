<div class="menu-trigger">
		<span></span>
		<span></span>
		<span></span>
	</div>
	<header class="fixed-menu">
		<span class="menu-close"><i class="fa fa-times"></i></span>
		<div class="menu-header">
			<div class="logo d-flex justify-content-center">
				<img src="img/logo.png" alt="">
			</div>
		</div>
		<div class="nav-wraper">
			<div class="navbar">
				<ul class="navbar-nav">
					<li class="nav-item"><a class="nav-link" href="{{url('/')}}"><img src="img/header/nav-icon1.png" alt=""> home</a></li>
					<li class="nav-item"><a class="nav-link" href="{{url('HalamanFasilitas')}}"><img src="img/header/nav-icon4.png" alt="">Fasilitas</a></li>
					<li class="nav-item"><a class="nav-link" href="{{url('HalamanTestimonial')}}"><img src="img/header/nav-icon3.png" alt="">Testimoni</a></li>
					<li class="nav-item"><a class="nav-link" href="{{url('HalamanSewaGedung')}}"><img src="img/header/nav-icon2.png" alt="">Sewa Gedung</a></li>
					<li class="nav-item"><a class="nav-link" href="{{url('HalamanGaleri')}}"><img src="img/header/nav-icon8.png" alt="">Galeri</a></li>	
					<li class="nav-item"><a class="nav-link" href="{{url('HalamanKonfirmasiBayar')}}"><img src="img/header/nav-icon7.png" alt="">Pembayaran</a></li>	

					@if(Session::get('loginUser'))
					<li class="nav-item submenu dropdown">
						<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="img/header/nav-icon5.png" alt="">{{Session::get('nama')}}</a>
						<ul class="dropdown-menu">
							<li class="nav-item"><a class="nav-link" href="{{ url('HalamanProfilUser')}}">Profil</a>
                          	</li>
							<li class="nav-item"><a class="nav-link" href="{{ url('logoutUser') }}">Logout</a>
                          	</li>
						</ul>
					</li>
			    	@else
			    	<li class="nav-item"><a class="nav-link" href="{{url('HalamanLoginUser')}}"><img src="img/header/nav-icon5.png" alt=""><b>Login</b></a></li>
			    	@endif
					
					
				</ul>
			</div>
		</div>
	</header>