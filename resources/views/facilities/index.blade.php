@extends('layouts.app')
@section('title', 'facilities')
@section('content')
<!--  cover image section start  -->
<div class="facilities-top-area">
    <div class="notice-top-area">
        <h4 class="notice-top-area_title">Our <span>Facililties </span> </h4>
    </div>
</div>

<!-- cover image section end -->
<!-- content section start -->
<div class="content-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="facility-tabs">
                    <div class="facility-tabs-list">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            
                            <a class="nav-link active" id="v-pills-nonProfit-tab" data-toggle="pill" href="#v-pills-nonProfit" role="tab" aria-controls="v-pills-nonProfit" aria-selected="true">Well equipped and class rooms and Therapy Rooms</a>
                            <a class="nav-link" id="v-pills-Teacher-tab" data-toggle="pill" href="#v-pills-Teacher" role="tab" aria-controls="v-pills-Teacher" aria-selected="false">Experience and
                                Dedicated Teachers</a>
                            <a class="nav-link" id="v-pills-curricular-tab" data-toggle="pill" href="#v-pills-curricular" role="tab" aria-controls="v-pills-curricular" aria-selected="false">Co-curricular and External Activities</a>
                            <a class="nav-link" id="v-pills-Therapies-tab" data-toggle="pill" href="#v-pills-Therapies" role="tab" aria-controls="v-pills-Therapies" aria-selected="false">Experience Therapists</a>

                            <a class="nav-link" id="v-pills-transport-tab" data-toggle="pill" href="#v-pills-transport" role="tab" aria-controls="v-pills-transport" aria-selected="false">Transport</a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="tab-content" id="v-pills-tabContent">

                    <!--tab-1 start-->
                    <div class="tab-pane fade show active" id="v-pills-nonProfit" role="tabpanel" aria-labelledby="v-pills-nonProfit-tab">
                        <!-- laboratory tab page -->
                        <div class="laboratory-wrapper wow fadeInDown" data-wow-duration="1s" data-wow-delay=".3s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInDown;">
                            <img src="{{ asset('frontend/img/new-pic/c1.jpg')}}" class="laboratory-wrapper_img" alt="...">
                            <h5 class="laboratory-wrapper_text">Non profit organization</h5>
                        </div>

                        <div class="wow fadeInDown" data-wow-duration="1s" data-wow-delay=".3s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInUp;">

                            <div class="gallery-title">
                                <h5>Photo Gallery</h5>
                            </div>
                           

                            <div id="teacher" class="carousel slide" data-ride="carousel">
                                <div class="row justify-content-center">
                                    <div class="col-lg-4 col-md-6">
                                        <img src="{{ asset('frontend/img/new-pic/c2.jpg')}}" class="g-image" alt="">
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <img src="{{ asset('frontend/img/new-pic/c3.jpg')}}" class="g-image" alt="">
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <img src="{{ asset('frontend/img/new-pic/c4.jpg')}}" class="g-image" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--tab-1 end-->

                    <!--tab-2 start-->
                    <div class="tab-pane fade" id="v-pills-Teacher" role="tabpanel" aria-labelledby="v-pills-Teacher-tab">
                        <!-- laboratory tab page -->
                        <div class="laboratory-wrapper wow fadeInDown" data-wow-duration="1s" data-wow-delay=".3s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInDown;">
                            <img src="{{ asset('frontend/img/new-pic/c2.jpg')}}" class="laboratory-wrapper_img" alt="...">
                            <h5 class="laboratory-wrapper_text">Classroom Is The Solution</h5>
                        </div>

                        <div class="wow fadeInDown" data-wow-duration="1s" data-wow-delay=".3s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInUp;">

                            <div class="gallery-title">
                                <h5>Photo Gallery</h5>
                            </div>
                           

                            <div id="teacher" class="carousel slide" data-ride="carousel">
                                <div class="row justify-content-center">
                                    <div class="col-lg-4 col-md-6">
                                        <img src="{{ asset('frontend/img/new-pic/cl2.jpg')}}" class="g-image" alt="">
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <img src="{{ asset('frontend/img/new-pic/cl3.jpg')}}" class="g-image" alt="">
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <img src="{{ asset('frontend/img/new-pic/cl4.jpg')}}" class="g-image" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--tab-2 end-->

                    <!--tab-3 start-->
                    <div class="tab-pane fade" id="v-pills-curricular" role="tabpanel" aria-labelledby="v-pills-curricular-tab">
                        <!-- laboratory tab page -->
                        <div class="laboratory-wrapper wow fadeInDown" data-wow-duration="1s" data-wow-delay=".3s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInDown;">
                            <img src="{{ asset('frontend/img/new-pic/g4.jpg')}}" class="laboratory-wrapper_img" alt="...">
                            <h5 class="laboratory-wrapper_text">co-curricular and external extivities</h5>
                        </div>

                        <div class="wow fadeInDown" data-wow-duration="1s" data-wow-delay=".3s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInUp;">

                            <div class="gallery-title">
                                <h5>Photo Gallery</h5>
                            </div>
                           

                            <div id="teacher" class="carousel slide" data-ride="carousel">
                                <div class="row justify-content-center">
                                    <div class="col-lg-4 col-md-6">
                                        <img src="{{ asset('frontend/img/new-pic/c2.jpg')}}" class="g-image" alt="">
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <img src="{{ asset('frontend/img/new-pic/c3.jpg')}}" class="g-image" alt="">
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <img src="{{ asset('frontend/img/new-pic/c4.jpg')}}" class="g-image" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--tab-3 end-->

                    <!--tab-4 start-->
                    <div class="tab-pane fade" id="v-pills-Therapies" role="tabpanel" aria-labelledby="v-pills-Therapies-tab">
                        <!-- laboratory tab page -->
                        <div class="laboratory-wrapper wow fadeInDown" data-wow-duration="1s" data-wow-delay=".3s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInDown;">
                            <img src="{{ asset('frontend/img/therapy/t6.jpeg')}}" class="laboratory-wrapper_img" alt="...">
                            <h5 class="laboratory-wrapper_text">Experience Therapists</h5>
                        </div>

                        <div class="wow fadeInDown" data-wow-duration="1s" data-wow-delay=".3s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInUp;">

                            <div class="gallery-title">
                                <h5>Photo Gallery</h5>
                            </div>
                           
                            <div id="teacher" class="carousel slide" >
                                <div class="row justify-content-center">
                                    <div class="col-lg-4 col-md-6">
                                        <img src="{{ asset('frontend/img/new-pic/c2.jpg')}}" class="g-image" alt="">
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <img src="{{ asset('frontend/img/new-pic/c3.jpg')}}" class="g-image" alt="">
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <img src="{{ asset('frontend/img/new-pic/c4.jpg')}}" class="g-image" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--tab-4 end-->

                    <!--tab-5 start-->
                    <div class="tab-pane fade" id="v-pills-transport" role="tabpanel" aria-labelledby="v-pills-transport-tab">
                        <!-- laboratory tab page -->
                        <div class="laboratory-wrapper">
                          <img src="{{ asset('frontend/img/come.jpeg')}}" class="laboratory-wrapper_img" alt="...">
                        </div>
                        
                    </div>

                    <!--tab-5 end-->
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection