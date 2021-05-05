@extends('layouts.app')
@section('title', 'Gallery')
@section('content')

  
 
  <!--  cover image section start  -->
  <div class="notice-top-area therapy-area">
    <h4 class="notice-top-area_title">Therapy <span>gallery</span></h4>
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
                  <a href="{{ asset('frontend/img/therapy/t1.jpg')}}" class="swipebox gallery-details-img">
                    <figure class="effect-bubba">
                      <img src="{{ asset('frontend/img/therapy/t1.jpg')}}" alt="" class="img-responsive gallery-img ">
                      <figcaption>
                        <h4>View</h4>
                      </figcaption>
                    </figure>
                  </a>
                </div>
                <div class="col-md-3 col-md-6  gallery-top">
                  <a href="{{ asset('frontend/img/therapy/t2.jpg')}}" class="swipebox gallery-details-img">
                    <figure class="effect-bubba">
                      <img src="{{ asset('frontend/img/therapy/t2.jpg')}}" alt="" class="img-responsive gallery-img ">
                      <figcaption>
                        <h4>View</h4>
                      </figcaption>
                    </figure>
                  </a>
                </div>

                <div class="col-md-3 col-md-6 gallery-top">
                  <a href="{{ asset('frontend/img/therapy/t3.jpg')}}" class="swipebox gallery-details-img">
                    <figure class="effect-bubba">
                      <img src="{{ asset('frontend/img/therapy/t3.jpg')}}" alt="" class="img-responsive gallery-img ">
                      <figcaption>
                        <h4>View</h4>
                      </figcaption>
                    </figure>
                  </a>
                </div>

                <div class="col-md-3 col-md-6 gallery-top">
                  <a href="{{ asset('frontend/img/therapy/t4.jpg')}}" class="swipebox gallery-details-img">
                    <figure class="effect-bubba">
                      <img src="{{ asset('frontend/img/therapy/t4.jpg')}}" alt="" class="img-responsive gallery-img ">
                      <figcaption>
                        <h4>View</h4>
                      </figcaption>
                    </figure>
                  </a>
                </div>

                <div class="col-md-3 col-md-6 gallery-top">
                  <a href="{{ asset('frontend/img/therapy/t5.jpg')}}" class="swipebox gallery-details-img">
                    <figure class="effect-bubba">
                      <img src="{{ asset('frontend/img/therapy/t5.jpg')}}" alt="" class="img-responsive gallery-img ">
                      <figcaption>
                        <h4>View</h4>
                      </figcaption>
                    </figure>
                  </a>
                </div>

                <div class="col-md-3 col-md-6 gallery-top">
                  <a href="{{ asset('frontend/img/therapy/t6.jpg')}}" class="swipebox gallery-details-img">
                    <figure class="effect-bubba">
                      <img src="{{ asset('frontend/img/therapy/t6.jpg')}}" alt="" class="img-responsive gallery-img ">
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