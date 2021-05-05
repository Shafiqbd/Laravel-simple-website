@extends('layouts.app')
@section('title', 'contact')
@section('content')
<!--  cover image section start  -->

    <!-- slide image start -->
    <div class="contact-area">
        <div class="notice-top-area">
            <h4 class="notice-top-area_title">Contact <span>US</span></h4>
            <p class="notice-top-area_desc">want to get in tuch? we'd love to hear from you. Hear's how you can reach
                us...</p>
        </div>
    </div>

    <!--- contact area start-->
    <section class="contact-section section-padding">
        <div class="container">
            <div class="contact-wrapper">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="contact-forms">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="phone">Mobile Number</label>
                                        <input type="text" class="form-control" id="phone">
                                    </div>
                                </div>
                                
                            </div>
                            
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="email" class="form-control" id="email">
                            </div>


                            <div class="form-group">
                                <label for="message">Send Message</label>
                                <div class="message-area">
                                    <textarea class="form-control" id="message" rows="3">
                                    </textarea>
                                    <button class="message-btn">
                                        <i class="fa fa-paper-plane" aria-hidden="true"></i>
                                    </button>
                                </div>
                              
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="contact-address">
                            <h4 class="contact-address_title">Contact Information</h4>
                                <div class="row">
                                    <div class="col-lg-6">
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

                                    <div class="col-lg-6">
					
                                        <div class="footer_address">
                                            <h2 >
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

                                <div class="footer_logo">
                                    <div class="footer_logo_border">
                                        <a href="https://www.facebook.com/GoldenKidsBD/"> <i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="#"> <i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                                        <a href="https://www.linkedin.com/company/golden-kids-bd"> <i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--- contact area end-->

@endsection