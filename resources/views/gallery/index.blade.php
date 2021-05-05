@extends('layouts.app')
@section('title', 'Gallery')
@section('content')
	<!--  cover image section start  -->
	<div class="notice-top-area class-room-area">
		<h4 class="notice-top-area_title">Photo <span>gallery</span></h4>
	</div>
	<!-- cover image section end -->
	<!-- content section start -->
	<div class="content-section">
		<div class="container">
			<!-- Portfolio -->
			<div class="row gallery-grids justify-content-center align-items-center">
				<div class="col-md-4 col-sm-4 gallery-top">
					<a href="{{url('gallery/class')}}">
						<figure class="effect-bubba">
							<img src="{{ asset('frontend/img/class/c1.jpg')}}" alt="" class="img-responsive gallery-img ">
							<figcaption>
								<h4>Class Rooms</h4>
							</figcaption>
						</figure>
					</a>
				</div>
				<div class="col-md-4 col-sm-4 gallery-top">
					<a href="{{url('gallery/assembly')}}">
						<figure class="effect-bubba">
							<img src="{{ asset('frontend/img/assembly/a1.jpg')}}" alt="" class="img-responsive gallery-img ">
							<figcaption>
								<h4>Assembly</h4>
							</figcaption>
						</figure>
					</a>
				</div>

				<div class="col-md-4 col-sm-4 gallery-top">
					<a href="{{url('gallery/tour')}}">
						<figure class="effect-bubba">
							<img src="{{ asset('frontend/img/tour/t2.jpg')}}" alt="" class="gallery-img img-responsive">
							<figcaption>
								<h4>Study Tour</h4>
							</figcaption>
						</figure>

					</a>
				</div>
				<div class="col-md-4 col-sm-4 gallery-top">
					<a href="{{ url('gallery/ifter')}}">
						<figure class="effect-bubba">
							<img src="{{ asset('frontend/img/iftar/t1.jpg')}}" alt="" class="gallery-img img-responsive">
							<figcaption>
								<h4>Ifter Mahfil</h4>
							</figcaption>
						</figure>
					</a>
				</div>

				<div class="col-md-4 col-sm-4 gallery-top">
					<a href="{{ url('gallery/therapy')}}">
						<figure class="effect-bubba">
							<img src="{{ asset('frontend/img/therapy/t1.jpg')}}" alt="" class="gallery-img img-responsive">
							<figcaption>
								<h4>Therapy</h4>
							</figcaption>
						</figure>
					</a>
				</div>

				<div class="col-md-4 col-sm-4 gallery-top">
					<a href="{{ url('gallery/play')}}">
						<figure class="effect-bubba">
							<img src="{{ asset('frontend/img/play/p1.jpg')}}" alt="" class="gallery-img img-responsive">
							<figcaption>
								<h4>Play Activities</h4>
							</figcaption>
						</figure>
					</a>
				</div>
				<div class="col-md-4 col-sm-4 gallery-top">
					<a href="{{ url('gallery/prize')}}">
						<figure class="effect-bubba">
							<img src="{{ asset('frontend/img/prize/p1.jpg')}}" alt="" class="gallery-img img-responsive">
							<figcaption>
								<h4>Prize Giving</h4>
							</figcaption>
						</figure>
					</a>
				</div>

				<div class="col-md-4 col-sm-4 gallery-top">
					<a href="{{ url('gallery/outing')}}">
						<figure class="effect-bubba">
							<img src="{{ asset('frontend/img/outing/o1.jpeg')}}" alt="" class="gallery-img img-responsive">
							<figcaption>
								<h4>Outing</h4>
							</figcaption>
						</figure>
					</a>
				</div>

				<div class="col-md-4 col-sm-4 gallery-top">
					<a href="{{ url('gallery/sport')}}">
						<figure class="effect-bubba">
							<img src="{{ asset('frontend/img/sports/s1.jpeg')}}" alt="" class="gallery-img img-responsive">
							<figcaption>
								<h4>Sports</h4>
							</figcaption>
						</figure>
					</a>
				</div>


				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- logo area start -->
	<div class="donate-area donate-bottom">
		<a href="{{ url('donate')}}" class="donate_text" href="">donate now</a>
	</div>
	<!-- logo area end -->
    @endsection