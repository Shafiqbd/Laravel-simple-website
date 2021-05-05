@extends('layouts.app')
@section('title', 'Gallery')
@section('content')

  <!--  cover image section start  -->
  <div class="notice-top-area tour-room-area">
    <h4 class="notice-top-area_title">Tour <span>gallery</span></h4>
  </div>
  <!-- cover image section end -->
  <!-- content section start -->
  <div class="content-section">
    <div class="container">
      <!-- Portfolio -->
      <div class="container">
        <div class="portfolio" id="portfolio">
          <section class="agileits museum">
            <div class="gallery-grids">
              <div class="row justify-content-center align-items-center">
                <div class="col-md-3 col-md-6 gallery-top">
                  <a href="{{ url('frontend/img/tour/t1.jpg')}}" class="swipebox gallery-details-img">
                    <figure class="effect-bubba">
                      <img src="{{ asset('frontend/img/tour/t1.jpg')}}" alt="" class="img-responsive gallery-img ">
                      <figcaption>
                        <h4>View</h4>
                      </figcaption>
                    </figure>
                  </a>
                </div>
                <div class="col-md-3 col-md-6  gallery-top">
                  <a href="{{ url('frontend/img/tour/t2.jpg')}}" class="swipebox gallery-details-img">
                    <figure class="effect-bubba">
                      <img src="{{ asset('frontend/img/tour/t2.jpg')}}" alt="" class="img-responsive gallery-img ">
                      <figcaption>
                        <h4>View</h4>
                      </figcaption>
                    </figure>
                  </a>
                </div>

                <div class="col-md-3 col-md-6 gallery-top">
                  <a href="{{ url('frontend/img/tour/t3.jpg')}}" class="swipebox gallery-details-img">
                    <figure class="effect-bubba">
                      <img src="{{ asset('frontend/img/tour/t3.jpg')}}" alt="" class="img-responsive gallery-img ">
                      <figcaption>
                        <h4>View</h4>
                      </figcaption>
                    </figure>
                  </a>
                </div>

                <div class="col-md-3 col-md-6 gallery-top">
                  <a href="{{ url('frontend/img/tour/t4.jpg')}}" class="swipebox gallery-details-img">
                    <figure class="effect-bubba">
                      <img src="{{ asset('frontend/img/tour/t4.jpg')}}" alt="" class="img-responsive gallery-img ">
                      <figcaption>
                        <h4>View</h4>
                      </figcaption>
                    </figure>
                  </a>
                </div>

                <div class="clearfix"></div>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </div>


	<!-- logo area start -->
	<div class="donate-area donate-bottom">
		<a href="{{ url('donate')}}" class="donate_text" href="">donate now</a>
	</div>
	<!-- logo area end -->
@endsection