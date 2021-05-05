@extends('layouts.app')
@section('title', 'About')
@section('content')
<div class="about-area">
        <h4 class="notice-top-area_title">About <span>Us</span></h4>
    </div>
    <!-- side image area end -->
    <!-- special learning start  -->
    <div class="special-learning">
        <h3>A Place for Special Learning for Special Children</h3>
        <div class="radio">
            <div class="radio_content">
                <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                <p>Golden Kids is a specialized education and caring center for Children with Autism Spectrum Disorder
                    (ASD).</p>
            </div>
            <div class="radio_content">
                <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                <p>Our goal is to help students develop the skills to become as independent as possible</p>
            </div>
        </div>
    </div>
    <!-- special learning end -->
    <!-- div area start -->
    <section class="autism-section">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-lg-4">
                    <div class="autism-items wow fadeInDown" data-wow-duration="1s" data-wow-delay=".3s"
                    style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInDown;">
                        <h5 class="autism-tittle"> <span> Our vision</span></h5>
                        <p class="autism-text">To establish as an Autism specific scool to provide quality autism specific education and healthcare to each individual as per their need and extend social supports to develop their optimal personal growth and real life skills for further education or enterprising work.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="autism-items wow fadeInDown" data-wow-duration="1s" data-wow-delay=".4s"
                    style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeInDown;">
                        <h5 class="autism-tittle"> <span> Our Mission</span></h5>
                        <p class="autism-text">To create an environment to celebrate the uniqueness of every child with autism by offering education based on the needs and special abilities of individual learner and empower individual with Autism Spectrum Disorder and their families to fully participate in the community.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- div area end -->
    <!-- board of trustees area start -->
    <section class="chairman-section">
        <div class="container">

            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-lg-12">
                    <h2 class="section-title">
                        <span>Board Of Trustees</span>
                    </h2>
                </div>
            </div>

            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-lg-4">
                    <div class="chairman-area wow fadeInDown" data-wow-duration="1s" data-wow-delay=".3s"
                    style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInDown;">
                        <div class="fast_dr chairman-area_items">
                                <img class="img" src="{{ asset('frontend/img/charman.jpg')}}" alt="">
                                <h5 class="chairman-area_name">Prof. Dr. M. Shamsul Haque</h5>
                                <p>Chairman </p>

                            <div class="social-icon-area">
                                <a href="#"><i class="fa fa-facebook icon-width" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-envelope-o icon-width" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin icon-width" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-youtube-play icon-width" aria-hidden="true"></i></a>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="chairman-area">
                        <div class="fast_dr chairman-area_items">
                                <img class="img" src="{{ asset('frontend/img/ceo.jpg')}}" alt="">
                                <h5 class="chairman-area_name">Prof. Dr. Kazi Shahdat Kabir</h5>
                                <p>Founder & General Secretary </p>

                            <div class="social-icon-area">
                                <a href="#"><i class="fa fa-facebook icon-width" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-envelope-o icon-width" aria-hidden="true"></i></a>
                                 <a href="#"><i class="fa fa-linkedin icon-width" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-youtube-play icon-width" aria-hidden="true"></i></a>

                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="chairman-area">
                        <div class="fast_dr chairman-area_items">
                            <img class="img" src="{{ asset('frontend/img/vice-chair.png')}}" alt="">
                            <h5>Lieutenant Colonel Aqtedar Ahmed Siddiqui(Retd)</h5>
                            <p>Senior Vice Chairman</p>

                            <div class="social-icon-area">
                                <a href="#"><i class="fa fa-facebook icon-width" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-envelope-o icon-width" aria-hidden="true"></i></a>
                                 <a href="#"><i class="fa fa-linkedin icon-width" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-youtube-play icon-width" aria-hidden="true"></i></a>

                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="chairman-area">
                        <div class="fast_dr chairman-area_items">
                            <img class="img" src="{{ asset('frontend/img/trustee/t4.jpeg')}}" alt="">
                            <h5>Dr. Md. Abdul Aziz </h5>
                            <p>Member</p>
                            <div class="social-icon-area">
                                <a href="#"><i class="fa fa-facebook icon-width" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-envelope-o icon-width" aria-hidden="true"></i></a>
                                 <a href="#"><i class="fa fa-linkedin icon-width" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-youtube-play icon-width" aria-hidden="true"></i></a>

                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="chairman-area">
                        <div class="fast_dr chairman-area_items">
                            <img class="img" src="{{ asset('frontend/img/trustee/t5.jpeg')}}" alt="">
                            <h5>Ms. Rosita Haque.</h5>
                            <p>Member</p>

                            <div class="social-icon-area">
                                <a href="#"><i class="fa fa-facebook icon-width" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-envelope-o icon-width" aria-hidden="true"></i></a>
                                 <a href="#"><i class="fa fa-linkedin icon-width" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-youtube-play icon-width" aria-hidden="true"></i></a>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="board_trust">
        <div class="container">
            <div class="row ">
                <div class="col-lg-12">
                    <h2 class="section-title">
                        <span>Patrons</span>
                    </h2>
                </div>
            </div>

            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-lg-4 ">
                    <div class="patrons-area">
                        <div class="blank-div"></div>
                        <div class="patrons-area-wrapper">
                            <img class="img" src="{{ asset('frontend/img/patron/p2.jpg')}}" alt="">
                            <h5> Mr. Momin Ud Dowlah</h5>
                            <h6> Chairman and Managing Director</h6>
                            <p>Eon group of Industries, DHAKA</p>
                            <div class="social-icon-area">
                                <a href="#"><i class="fa fa-facebook icon-width" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram icon-width" aria-hidden="true"></i></a>
                                 <a href="#"><i class="fa fa-linkedin icon-width" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-youtube-play icon-width" aria-hidden="true"></i></a>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 ">
                    <div class="patrons-area">
                        <div class="blank-div"></div>
                        <div class="patrons-area-wrapper">
                            <img class="img" src="{{ asset('frontend/img/patron/p5.jpeg')}}" alt="">
                            <h5> Giasuddin Selim</h5>
                            <h6> Film Director and Screenwriter</h6>
                            
                            <div class="social-icon-area">
                                <a href="#"><i class="fa fa-facebook icon-width" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram icon-width" aria-hidden="true"></i></a>
                                 <a href="#"><i class="fa fa-linkedin icon-width" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-youtube-play icon-width" aria-hidden="true"></i></a>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 ">
                    <div class="patrons-area">
                        <div class="blank-div"></div>
                        <div class="patrons-area-wrapper">
                            <img class="img" src="{{ asset('frontend/img/patron/p1.jpg')}}" alt="">

                            <h5> Mr. Nazim Uddin Ahmed</h5>
                            <h6> Managing Director</h6>
                            <p>Urban Design & Development Ltd.</p>
                            <div class="social-icon-area">
                                <a href="#"><i class="fa fa-facebook icon-width" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram icon-width" aria-hidden="true"></i></a>
                                 <a href="#"><i class="fa fa-linkedin icon-width" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-youtube-play icon-width" aria-hidden="true"></i></a>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 ">
                    <div class="patrons-area">
                        <div class="blank-div"></div>
                        <div class="patrons-area-wrapper">
                            <img class="img" src="{{ asset('frontend/img/patron/p3.jpg')}}" alt="">

                            <h5>Mr. Md. Khalilur Rahman</h5>
                                <h6>Managing Director</h6>
                            <p>National Housing Finance and Investment Ltd.</p>
                            <div class="social-icon-area">
                                <a href="#"><i class="fa fa-facebook icon-width" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram icon-width" aria-hidden="true"></i></a>
                                 <a href="#"><i class="fa fa-linkedin icon-width" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-youtube-play icon-width" aria-hidden="true"></i></a>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 ">
                    <div class="patrons-area">
                        <div class="blank-div"></div>
                        <div class="patrons-area-wrapper">
                            <img class="img" src="{{ asset('frontend/img/patron/p4.jpeg')}}" alt="">

                            <h5>Dr. Mohammad Naveed Ahmed </h5>
                            <h6>Managing Partner</h6>
                            <p>Miyako Appliances Bangladesh.</p>
                            <div class="social-icon-area">
                                <a href="#"><i class="fa fa-facebook icon-width" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram icon-width" aria-hidden="true"></i></a>
                                 <a href="#"><i class="fa fa-linkedin icon-width" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-youtube-play icon-width" aria-hidden="true"></i></a>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- board of trustees area end  -->
    
    <!-- desk area start -->
    <section class="desk_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="section-title">
                        <span> Chairman's desk</span>
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="desk_content">
                        <div class="paragraph">
                            <p>In the words of  Ken Robinson, an authority on education in his book ‘the element: How finding your passion changes everything’ says key to this transformation is not to standardiz education, but to personalize it, to build achievement on discovering the individual talents of each child, to put students in an environment where they want to learn and where they can naturally discover their true passions.’
                                We at Golden Kids Welfare Foundation and Golden Kids School are committed to our priorities which focus on success for all students, improve student engagement in all that contributes to making our students the 21st Century Learners.
                                Our school had a humble beginning and we are proud that the relentless efforts of all the stakeholders during the preceding years have put the school as one of the Excellent and flourishing Schools in Bangladesh.
                                We shall strive to make the education a joyful process. We are proud for the work that has been done in the past and shall endeavor to raise the standards further.
                                We look forward to a future where we will excel and work in unison to provide meaningful learning opportunities for the children. I think the greatest gift we can give to our children is the training to be not the best in the world but to be the best for the world.
                            </p>
                            <p>With Best Wishes <br> Professor Dr.M.Shamsul Haq <br> Chairman <br> Golden Kids Welfare
                                Foundation</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- desk area end -->
	<!-- logo area start -->
	<div class="donate-area donate-bottom">
		<a href="{{ url('donate')}}" class="donate_text" href="">donate now</a>
	</div>
	<!-- logo area end -->

@endsection