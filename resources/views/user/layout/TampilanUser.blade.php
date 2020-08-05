<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/png">
	<title>Gedung Serbaguna</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('vendors/linericon/style.css') }}">
	<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
	<link rel="stylesheet" href="{{ asset('vendors/owl-carousel/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('vendors/lightbox/simpleLightbox.css') }}">
	<link rel="stylesheet" href="{{ asset('vendors/nice-select/css/nice-select.css') }}">
	<link rel="stylesheet" href="{{ asset('vendors/jquery-ui/jquery-ui.css') }}">
	<link rel="stylesheet" href="{{ asset('vendors/animate-css/animate.css') }}">
	<!-- main css -->
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">


</head>

<body>

	<!--================ Start Header Menu Area =================-->
	 @include('user.layout.MenuUser')
	<!--================ End Header Menu Area =================-->

	<div class="site-main">
		@yield('content')
				<br>
	<!--================ Start Footer Area =================-->
		
		@include('user.layout.FooterUser')
	<!--================ Start Footer Area =================-->
	</div>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ asset('js/popper.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/stellar.js') }}"></script>
	<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ asset('vendors/lightbox/simpleLightbox.min.js') }}"></script>
	<script src="{{ asset('vendors/nice-select/js/jquery.nice-select.min.js') }}"></script>
	<script src="{{ asset('vendors/owl-carousel/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('vendors/jquery-ui/jquery-ui.js') }}"></script>
	<script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>
	<script src="{{ asset('vendors/counter-up/jquery.waypoints.min.js') }}"></script>
	<script src="{{ asset('vendors/counter-up/jquery.counterup.js') }}"></script>
	<script src="{{ asset('js/mail-script.js') }}"></script>
	<!--gmaps Js-->
	<script src="{{ asset('js/gmaps.min.js') }}"></script>
	<script src="{{ asset('js/theme.js') }}"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		
		<?php if (isset($tgldisable)): ?>
			var datesToBeDisabled = <?php echo json_encode($tgldisable);  ?>;
			
			$.ajaxSetup({
				headers:{
					'X-CSRF-TOKEN':$('meta[name="_token"]').attr('content')
				}
			})
		<?php endif ?>
		

		$('#tanggalan').datepicker({
			beforeShowDay: function (date) {
              var dateStr = jQuery.datepicker.formatDate('yy-mm-dd', date);
                  return [datesToBeDisabled.indexOf(dateStr) == -1];
          	},

          	dateFormat: 'yy-mm-dd',
	        minDate: '-Infinity +1d',
	        showOn: 'button',
	        buttonImage: 'img/calendar.png',
	        buttonImageOnly: true      

		});		
	});
</script>
</body>

</html>