@extends('layouts.app')
@section('title', 'Home')
@section('content')
@include('slider')

<div class="container">
		<!-- content area start -->
		<div class="content_section">
			<!-- notice board area start -->
			<div class="notice_board_area section-padding">
				<div class="row">
					<!-- dr area start -->
					<div class="col-lg-7">

						<div id="trust-board" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s"
								style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInLeft;">
								<div class="carousel-item active">
									<div class="row">
										<div class="col-lg-6">

											<div class="fast_dr">
												<a href="{{ url('about')}}">
													<img class="img" src="{{ asset('frontend/img/charman.jpg')}}" alt="">
													<h5>Prof. Dr. M. Shamsul Haque</h5>
													<p>Chairman </p>
													
												</a>
											</div>

										</div>

										<div class="col-lg-6">
											<div class="full_dr">

												<div class="second_dr">
													<p> Prof. Dr. M. Shamsul Haque, Former Vice-Chancellor , Northern
														University Bangladesh, Former Professor and Treasurer of
														University of Dhaka is working with Golden Kids since its
														inception.
														Dr. Haque is a professional of high calibre in the areas of
														finance, organizational development and public policy relating
														to industrial, financial, educational and management development
														& restructuring.
													</p>
												</div>
												<div class="notice-btn">
													<a href="{{ url('about')}}" class="btn btn-info">More...</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="carousel-item">
									<div class="row">
										<div class="col-lg-6">
											<div class="fast_dr">
												<a href="{{ url('about')}}">
													<img class="img" src="{{ asset('frontend/img/ceo.jpg')}}" alt="">
													<h5>Prof. Dr. Kazi Shahdat Kabir</h5>
													<p>Founder & General Secretary </p>
													
												</a>
											</div>
										</div>

										<div class="col-lg-6">
											<div class="full_dr">

												<div class="second_dr">
													<p> Prof. Dr. Kazi Shahdat Kabir, Ph. D, BHSPS & MPS (IIUM, Malaysia),
														Ph.D. (IIUM), post-doctoral fellowship at the Department of
														Public Administration, Incheon National University (INU),
														Republic of Korea (South Korea) is presently the Registrar and
														Director, Institutional Quality Assurance Cell (IQAC) of
														Northern University Bangladesh. He is the founder and current
														General Secretary of the Golden Kids Welfare Foundation.(GKWF).
													</p> 
												</div>
												<div class="notice-btn">
													<a href="{{ url('about')}}" class="btn btn-info">More...</a>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="carousel-item">
									<div class="row">
										<div class="col-lg-6">
											<div class="fast_dr">
												<a href="{{ url('about')}}">
													<img class="img" src="{{ asset('frontend/img/vice-chair.png')}}" alt="">
													<h5>Lt. Col. Aqtedar Ahmed Siddiqui(Retd)</h5>
													<p>Senior Vice Chairman</p>
													
												</a>
											</div>
										</div>

										<div class="col-lg-6">
											<div class="full_dr">

												<div class="second_dr">
													<p> Lieutenant Colonel Aqtedar Ahmed Siddiqui(Retd) served in the
														communication branch of Bangladesh Army for long 29 years. He
														has also completed his Master in Defence Studies (MDS) from
														Defence Services Command and Staff College under National
														University. Later on he completerd Master in Business
														Administration with HRM as major fom the Institute of Business
														Administration & Technology, Dhaka.
													</p>
												</div>
												<div class="notice-btn">
													<a href="{{ url('about')}}" class="btn btn-info">More...</a>
												</div>
											</div>
										</div>
									</div>
								</div>

							</div>
							<a class="carousel-control-prev" href="#trust-board" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#trust-board" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>

					</div>
					<!-- dr area end -->

					<!-- notice start -->
					<div class="col-lg-5">
						<!-- card content -->
						<div class="notice-content-area">
							<h1 class="sub-section-title wow fadeInDown" data-wow-duration="1s" data-wow-delay=".3s"
								style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInDown;">
								notice board</h1>

							<!-- <div class="wrap wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s"
								style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInRight;">
								<a class="notice-content-flex" href="notice.html">
									<h6 class="notice-date">12 <br> FEB</h6>
									<p class="text">This is a wider card with supporting text below as a natural
										lead-in to additional content. This content is a little bit longer.</p>
								</a>
								
								<a class="notice-content-flex" href="notice.html">
									<h6 class="notice-date">13 <br> FEB</h6>
									<p class="text">This is a wider card with supporting text below as a natural
										lead-in to additional content. This content is a little bit longer.</p>
								</a>
								
								<a class="notice-content-flex" href="notice.html">
									<h6 class="notice-date">13 <br> FEB</h6>
									<p class="text">This is a wider card with supporting text below as a natural
										lead-in to additional content. This content is a little bit longer.</p>
								</a>
							</div>
							<div class="notice-btn wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s"
								style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInUp;">
								<a href="notice.html" class="btn btn-info">All Notice</a>
							</div> -->

							<img class="coming-soon-img" src="{{ asset('frontend/img/come.jpeg')}}" alt="">


						</div>
					</div>
					<!-- notice end -->
				</div>
			</div>
			<!-- notice board area end -->
			<!-- why choose area start -->
			<section class="chose-us-section">
				<div class="row">
					<div class="col-lg-12">
						<h2 class="section-title wow fadeInDown" data-wow-duration="1s" data-wow-delay=".3s"
							style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInDown;">
							why choose us
						</h2>
					</div>
				</div>

				<div class="row d-flex justify-content-center">

					<div class="col-lg-3 col-md-6">
						<a href="{{ url('facilities')}}">
							<div class="chose-us-items wow fadeInDown" data-wow-duration="1s" data-wow-delay=".3s"
								style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInDown;">
								<p class="chose-us-items_link">
									<i class="fa fa-users chose-us-items_link-icon" aria-hidden="true"></i>
								</p>
								<h5 class="chose-us-items_title">Non Profit Making and Walefare Organization</h5>
							</div>
						</a>
					</div>

					<div class="col-lg-3 col-md-6">
						<a href="{{ url('facilities')}}">
							<div class="chose-us-items wow fadeInDown" data-wow-duration="1s" data-wow-delay=".5s"
								style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInDown;">
								<p class="chose-us-items_link">

									<i class="fa fa-graduation-cap chose-us-items_link-icon" aria-hidden="true"></i>
								</p>
								<h5 class="chose-us-items_title">Experience and Dedicated Teachers</h5>

							</div>
						</a>
					</div>
					<div class="col-lg-3 col-md-6">
						<a href="{{ url('facilities')}}">
							<div class="chose-us-items wow fadeInDown" data-wow-duration="1s" data-wow-delay=".6s"
								style="visibility: visible; animation-duration: 1s; animation-delay: 0.6s; animation-name: fadeInDown;">
								<p class="chose-us-items_link">
									<i class="fa fa-trophy chose-us-items_link-icon" aria-hidden="true"></i>

								</p>
								<h5 class="chose-us-items_title">Co-curricular and External Activities</h5>
							</div>
						</a>
					</div>

					<div class="col-lg-3 col-md-6">
						<a href="{{ url('facilities')}}">
							<div class="chose-us-items wow fadeInDown" data-wow-duration="1s" data-wow-delay=".6s"
								style="visibility: visible; animation-duration: 1s; animation-delay: 0.6s; animation-name: fadeInDown;">
								<p class="chose-us-items_link">
									<i class="fa fa-wheelchair-alt chose-us-items_link-icon" aria-hidden="true"></i>
								</p>
								<h5 class="chose-us-items_title">Experience <br> Therapists</h5>
							</div>
						</a>
					</div>

					<div class="col-lg-3 col-md-6">
						<a href="{{ url('facilities')}}">
						<div class="chose-us-items wow fadeInDown" data-wow-duration="1s" data-wow-delay=".4s"
							style="visibility: visible; animation-duration: 1s; animation-delay: 0.s; animation-name: fadeInDown;">
							<p class="chose-us-items_link">
								<i class="fa fa-bus chose-us-items_link-icon" aria-hidden="true"></i>
							</p>
							<h5 class="chose-us-items_title">Transport</h5>
							<!-- <p class="chose-us-items_text">Some quick example text to build on the card title and make
								up the bulk of the card's content.
								the bulk of the card's content.
							</p>
							<a href="facilities.html" class="learn-more-btn">Learn More</a> -->
						</div>
					</a>
					</div>
				</div>
			</section>

			<!-- why choose area end -->

			<!-- our curriculam start -->

			<section class="our-curriculam-section section-padding">
				<div class="row">
					<div class="col-lg-12">
						<h2 class="section-title wow fadeInDown" data-wow-duration="1s" data-wow-delay=".3s"
							style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInDown;">
							Our Curriculum
						</h2>
					</div>
				</div>
				<div class="row">

					<div class="col-lg-12">
						<figure class="highcharts-figure wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".4s"
							style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeInLeft;">

							<div id="container-charts"></div>
							<p class="highcharts-description">
								
							</p>
						</figure>
					</div>
				</div>

			</section>
			<!-- our curriculam end -->

			<!-- our news area start -->
			<section class="news-section">
				<div class="row">
					<div class="col-lg-12">
						<h2 class="section-title wow fadeInDown" data-wow-duration="1s" data-wow-delay=".3s"
							style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInDown;">
							Our News
						</h2>
					</div>
				</div>
				<div class="news wow fadeInDown" data-wow-duration="1s" data-wow-delay=".3s"
					style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInDown;">
					<a href="news.html">
						<img class="news_image" src="{{ asset('frontend/img/26march.jpg')}}" alt="">
					</a>
					<div class="news_text">
						<p class="news_text-desc">স্বাধীনতা মানে স্বাধীন ভাবে বলতে পারি লিখতে পারি, স্বাধীনতা মানে লাল
							সবুজের একখানি পতাকা " মহান স্বাধীনতা দিবস উপলক্ষে Golden Kids Welfare Foundation (GKWF) এর
							পক্ষ থেকে অনেক অনেক শুভেচ্ছা ও অভিনন্দন।
						</p>
						<a class="news_text-link" href="{{ url('news')}}">Read more</a>
					</div>
				</div>
				<!-- <div class="news wow fadeInDown" data-wow-duration="1s" data-wow-delay=".3s"
					style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInDown;">
					<div class="news_text">
						<p class="news_text-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.
							Tempora ducimus quia
							doloribus deserunt commodi accusantium mollitia, eaque rerum dignissimos? Soluta
							delectus nulla tenetur beatae dicta voluptatibus molestiae vel, eligendi deleniti.
						</p>
						<a class="news_text-link" href="news.html">Read more</a>
					</div>
					<a href="news.html">
						<img class="news_image" src="assets/img/card1.png" alt="">
					</a>
				</div> -->
			</section>
			<!-- our news area end -->
			<!-- autism area start -->
			<section class="autism-section wow fadeInDown">
				<div class="row" data-wow-duration="1s" data-wow-delay=".3s"
					style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInDown;">
					<div class="col-lg-4">
						<div class="autism-items wow fadeInDown" data-wow-duration="1s" data-wow-delay=".3s"
							style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInDown;">
							<h5 class="autism-tittle">
								<span>Autism</span>
							</h5>
							<p class="autism-text">
								<img class="coming-soon-img" src="{{ asset('frontend/img/come.jpeg')}}" alt="">
							</p>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="autism-items wow fadeInDown" data-wow-duration="1s" data-wow-delay=".4s"
							style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeInDown;">
							<h5 class="autism-tittle">
								<span>Characteristics of Autism</span>
							</h5>
							<p class="autism-text"><img class="coming-soon-img" src="{{ asset('frontend/img/come.jpeg')}}" alt="">
							</p>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="autism-items wow fadeInDown" data-wow-duration="1s" data-wow-delay=".5s"
							style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInDown;">
							<h5 class="autism-tittle">
								<span>Causes of Autism</span>
							</h5>
							<p class="autism-text"><img class="coming-soon-img" src="{{ asset('frontend/img/come.jpeg')}}" alt="">
							</p>
						</div>
					</div>
				</div>
			</section>
			<!-- autism area end -->
			<!-- autism spectrum area start -->
			<section class="autism-spectrum-section">
				<div class="row">
					<div class="col-lg-12">
						<h2 class="section-title wow fadeInDown" data-wow-duration="1s" data-wow-delay=".3s"
							style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInDown;">
							Autism Spectrum Disorder
						</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="sidebar-products-main wow fadeInDown" data-wow-duration="1s" data-wow-delay=".3s"
							style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInDown;">
							<div id="accordion">
							<div class="sidebar-single">
								<div class="sidebar-title">
									<a data-toggle="collapse" class="pointer" aria-expanded="false"
										data-target="#Spectrum" aria-controls="#Spectrum">
										<span class="pull-left title-sidebar"> How do you know whether your child have
											Autism Spectrum Disorder (ASD)?</span>

										<span class="pull-right"><i class="fa fa-plus"></i></span>
										<span class="pull-right"><i class="fa fa-minus"></i></span>
										<div class="clearfix"></div>
									</a>
								</div>
								<!--End Sidebar title div-->

								<div id="Spectrum" class="collapse" data-parent="#accordion">
									<div class="collapse-content">
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
										richardson ad
										squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
										nesciunt
										sapiente ea proident.
									</div>
								</div>
							</div>
							<!--End Single Sidebar-->

							<div class="sidebar-single">
								<div class="sidebar-title">
									<a data-toggle="collapse" class="pointer" aria-expanded="false"
										data-target="#brandPriceCollapse" aria-controls="#brandPriceCollapse">
										<span class="pull-left title-sidebar">Where to go to improve the standard and
											quality of Autism?</span>

										<span class="pull-right"><i class="fa fa-plus"></i></span>
										<span class="pull-right"><i class="fa fa-minus"></i></span>
										<div class="clearfix"></div>
									</a>
								</div>
								<!--End Sidebar title div-->

								<div id="brandPriceCollapse" class="collapse" data-parent="#accordion">
									<div class="collapse-content">
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
										richardson ad
										squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
										nesciunt
										sapiente ea proident.
									</div>
								</div>
							</div>
							<!--End Single Sidebar-->

							<div class="sidebar-single">
								<div class="sidebar-title">
									<a data-toggle="collapse" class="pointer" aria-expanded="false"
										data-target="#goldenKids" aria-controls="#goldenKids">
										<span class="pull-left title-sidebar">What Golden Kids can do?</span>

										<span class="pull-right"><i class="fa fa-plus"></i></span>
										<span class="pull-right"><i class="fa fa-minus"></i></span>
										<div class="clearfix"></div>
									</a>
								</div>
								<!--End Sidebar title div-->

								<div id="goldenKids" class="collapse" data-parent="#accordion">

									<div class="collapse-content" >
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
										richardson ad
										squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
										nesciunt
										sapiente ea proident.
									</div>
								</div>
							</div>
							</div>
							<!--End Single Sidebar-->

						</div>
						<!--End Single Sidebar-->

					</div>
				</div>
				<section>
					<!-- autism area end -->
					<!--Start video section-->
					<section class="video-section section-padding">
						<div class="row">
							<div class="col-lg-12">
								<h2 class="section-title wow fadeInDown" data-wow-duration="1s" data-wow-delay=".3s"
									style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInDown;">
									Our Video
								</h2>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-6">
								<div class="embed-responsive embed-responsive-16by9">
									<iframe width="1278" height="500" src="https://www.youtube.com/embed/4n0uwpjrxSY"
										title="YouTube video player" frameborder="0"
										allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
										allowfullscreen></iframe>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="embed-responsive embed-responsive-16by9">
									<iframe width="1278" height="500" src="https://www.youtube.com/embed/Ahq-S9ztzWY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
								</div>
								
							</div>
						</div>
					</section>
					<!--end video section-->

					<!-- partner organization area start -->
					<section class="partner_org-section">
						<div class="row">
							<div class="col-lg-12">
								<h2 class="section-title wow fadeInDown" data-wow-duration="1s" data-wow-delay=".3s"
									style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInDown;">
									partner organization
								</h2>
							</div>
						</div>
						<div class="row">
						<div class="col-md-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
							<div class="owl-carousel pridesys-carousel leadership-carousel" data-large-items="3" data-medium-items="2" data-small-items="2" data-xsmall-items="2" data-autoplay="true" data-loop="true" data-dots="true" data-nav="true" data-margin="30">
							<div class="team-member">
								<div class="team-member__image-wrapper">
								<img src="{{ asset('frontend/img/p1.png')}}" alt="">
								</div>
							</div><!--/.team-member-->

							<div class="team-member">
								<div class="team-member__image-wrapper">
								<img src="{{ asset('frontend/img/p2.png')}}" alt="">
								</div>
							</div><!--/.team-member-->

							<div class="team-member">
								<div class="team-member__image-wrapper">
								<img src="{{ asset('frontend/img/p.png')}}" alt="">
								</div>
							</div><!--/.team-member-->

							</div>
						</div>
						</div>
					</section>
		<!-- partner organization area end -->

		
	<!-- logo area start -->
	<div class="donate-area donate-bottom">
		<a href="{{ url('donate')}}" class="donate_text" href="">donate now</a>
	</div>
	<!-- logo area end -->

	</div>
	<!-- content section end -->
	</div> <!-- container end-->
@endsection

@section('js')
<!--High charts-->
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/drilldown.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>


<script>
    Highcharts.chart('container-charts', {
    chart: {
      type: 'pie',
      inverted:true,
      options3d: {
        enabled:false,
        alpha: 45
      }
    },
    responsive: {  
        rules: [{  
          condition: {  
            maxWidth: 500, 
          },  
          chartOptions: {  
            legend: {  
              enabled: false  
            }  
          }  
        }]  
      },
    
    title: {
      text: 'Our Curriculam showing with charts'
    },
    credits: {
      enabled: false
  },

  navigation: {
      buttonOptions: {
          enabled: false
      }
  },
  responsive: {
    rules: [{
      condition: {
        maxWidth: 600
      },
      chartOptions: {
        plotOptions: {
          pie: {
            innerSize: 30,
            depth: 30
          }
        },
      }
    }, {
      condition: {
        maxWidth: 400
      },
      chartOptions: {
        plotOptions: {
          pie: {
            innerSize: 30,
            depth: 30
          }
        },
      }
    }]
  },

    plotOptions: {
      pie: {
        innerSize: 30,
        depth: 30
      }
    },
    series: [{
      name: 'Subject Name',
      data: [
        ['Functional Communication Training', 8],
        ['Brushing and Feeding Training', 8],
        ['Sleep disturbance management', 8],
        ['Managing difficult behavior', 8],
        ['Toilet Training', 8],
        ['Adiel activities in general', 8],
        ['ADHD management', 8],
        ['Speech Therapy', 8],
        ['Occupational Therapy', 8],
    
      ]
    }]
  });
</script>

@endsection