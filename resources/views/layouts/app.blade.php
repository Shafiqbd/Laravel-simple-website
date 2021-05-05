<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
	<!-- Google fonts -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <!-- Owl Carousel CSS-->
	<link type="text/css" rel="stylesheet" href="{{ asset('frontend/libs/owl.carousel.min.css')}}" />
	<!-- animate CSS-->
	<link type="text/css" rel="stylesheet" href="{{ asset('frontend/libs/animate.css')}}" />

	<script src="{{ asset('frontend/js/jquery-3.3.1.min.js')}}"></script>
	<!--fevicon-->
	<link rel="shortcut icon" href="{{ asset('frontend/img/favicon.ico')}}" type="image/x-icon" />
	<!-- Custom CSs-->
	<link rel="stylesheet" href="{{ asset('frontend/css/style.css')}}">

</head>
<body>
    <!--top nav start-->
	<div class="top-nav">
		<div class="container">
			<div class="top-nav-wrapper">
				<div class="top-nav-wrapper_about">
					<h1 class="top-nav-wrapper_title">golden kids welfare foundation(GKWF)</h1>
					<p class="top-nav-wrapper_desc">Registered by Joint Stock Companies and firms, Bangladesh; (Registration # S-12900/2018)</p>
				</div>

				<div class="contact-area">
					<div class="contact-area_icon">
						<i class="fa fa-phone contact-icon-size" aria-hidden="true"></i>
						<p>+880 1323578802-3</p>
					</div>
					<div class="contact-area_icon">
						<i class="fa fa-envelope-o contact-icon-size" aria-hidden="true"></i>
						<p>goldenkidsbd2016@gmail.com</p>
					</div>
				</div>
			</div>
		</div>

	</div>
	<!--top nav end-->
	<!-- nav area start -->
	<div class="container">

		<div class="nav-area">
			<a href="{{url('/')}}">
				<img class="nav_logo" src="{{ asset('frontend/img/logo2.png')}}" alt="">
			</a>
			<div class="nav_section">
				<input type="checkbox" id="check">
				<label for="check" class="checkbtn">
					<i class="fa fa-bars" aria-hidden="true"></i>
				</label>
				<ul class="nav">
					<li class="nav-item">
						<a class="nav-link {{request()->is('/') ? 'active' : ''}}" aria-current="page" href="{{url('/')}}">home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link {{request()->is('about') ? 'active' : ''}}" href="{{url('about')}}">about us</a>
					</li>
					<li class="nav-item">
						<a class="nav-link {{request()->is('facilities') ? 'active' : ''}}" href="{{url('facilities')}}">facilities</a>
					</li>
					<li class="nav-item">
						<a class="nav-link {{request()->is('staffs') ? 'active' : ''}}" href="{{url('staffs')}}">our staffs</a>
					</li>
					<li class="nav-item ">
						<a class="nav-link {{request()->is('academic') ? 'active' : ''}}" href="{{url('academic')}}">Admission & academic</a>
					</li>
					<li class="nav-item ">
						<a class="nav-link {{request()->is('gallery') ? 'active' : ''}}" href="{{url('gallery')}}">gallery</a>
					</li>

					<li class="nav-item">
						<a class="nav-link {{request()->is('contact') ? 'active' : ''}}" href="{{url('contact')}}">contact</a>
					</li>
				</ul>

			</div>
			<!-- nav logo -->
			<!-- logo area start -->
			<div class="donate-area wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s"
				style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInRight;">
				<a class="donate_text" href="{{ url('donate')}}">donate now</a>
			</div>
			<!-- logo area end -->


		</div>
		<!-- nav area end -->
	</div>

    @yield('content')


	<!-- footer area start -->
	<div class="footer_section">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="footer_content wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s"
					style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInRight;">
						
						<p>© All rights reserved Golden Kids 2021</p>
						<a href="https://www.facebook.com/shafiqulcse/" target="_blank">Design & Developed By: Md. Shafiqul Islam</a>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="footer_address">
						<h2 class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s"
							style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInRight;">
							Correspondence Address</h2>
						<div class="footer_address_content">
							<i class="fa fa-map-marker icon-size" aria-hidden="true"></i>
							<address> House 🏘️ 40, Road 🛣️ 22, Rupnagar Abasik Area, Mirpur
								DHAKA
							</address>
						</div>
						<div>
							<i class="fa fa-phone icon-size" aria-hidden="true"></i>
							<p>+880 1323578802-3</p>
						</div>
						<div>
							<i class="fa fa-envelope-o icon-size" aria-hidden="true"></i>
							<p>goldenkidsbd2016@gmail.com</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					
					<div class="footer_address">
						<h2 class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s"
							style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInRight;">
							Campus Address</h2>
						<div class="footer_address_content">
							<i class="fa fa-map-marker icon-size" aria-hidden="true"></i>
							<address> House 🏘️ 13, Road 🛣️ 01, Block-F, Section-01, Mirpur, Dhaka-1216
							</address>
						</div>
						<div>
							<i class="fa fa-phone icon-size" aria-hidden="true"></i>
							<p>+880 1323578802-3</p>
						</div>
						<div>
							<i class="fa fa-envelope-o icon-size" aria-hidden="true"></i>
							<p>goldenkidsbd2016@gmail.com</p>
						</div>
					</div>
				</div>
			</div>
			<!-- footer logo div -->
			<div class="footer_logo wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s"
				style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInRight;">
				<div class="footer_logo_border">
					<a href="https://www.facebook.com/GoldenKidsBD/"> <i class="fa fa-facebook" aria-hidden="true"></i></a>
					<a href="https://youtube.com/channel/UCamyP56M8bJVedjRX6h3hDg"> <i class="fa fa-youtube-play" aria-hidden="true"></i></a>
					<a href="https://www.linkedin.com/company/golden-kids-bd"> <i class="fa fa-linkedin" aria-hidden="true"></i></a>
					


				</div>
			</div>
		</div>
	</div>
	<!-- footer area end -->



   <!-- Core scripts -->
    <script>
        let base_url = "{{ url('/')}}"
    </script>

<script src="{{ asset('frontend/js/owl.carousel.min.js')}}"></script>
<script src="{{ asset('frontend/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('frontend/js/wow.min.js')}}"></script>
<script src="{{ asset('frontend/js/custom.js')}}"></script>


@yield('js')

</body>
</html>