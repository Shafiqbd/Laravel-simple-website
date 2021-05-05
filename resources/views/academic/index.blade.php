@extends('layouts.app')
@section('title', 'Academic')
@section('content')
<!--  cover image section start  -->
<div class="academic-area">
    <div class="notice-top-area ">
        <h4 class="notice-top-area_title">Our Admission <span> & academic</span></h4>
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
                            
                        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home"
                                    role="tab" aria-controls="v-pills-home" aria-selected="true">Admission Fees
                                </a>
                                <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill"
                                    href="#v-pills-messages" role="tab" aria-controls="v-pills-messages"
                                    aria-selected="false">Admission Form</a>
                                <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill"
                                    href="#v-pills-settings" role="tab" aria-controls="v-pills-settings"
                                    aria-selected="false">Daily Class Routine</a>
                                <a class="nav-link" id="v-pills-Calendar-tab" data-toggle="pill"
                                    href="#v-pills-Calendar" role="tab" aria-controls="v-pills-Calendar"
                                    aria-selected="false">Academic Calendar</a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="tab-content" id="v-pills-tabContent">
                    <!--tab-1 start-->
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <!-- laboratory tab page -->
                        <div class="laboratory-wrapper wow fadeInDown" data-wow-duration="1s" data-wow-delay=".3s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInDown;">
                        <img class="school-fee_img" src="{{ asset('frontend/img/come.jpeg')}}" alt="">
                        </div>
                    </div>
                    <!--tab-1 end-->

                    <!--tab-2 start-->
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                         <!--admission section start-->
                         <div class="admission wow fadeInDown" data-wow-duration="1s" data-wow-delay=".3s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInDown;">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h2 class="section-title">
                                            <span class="section-title-color-change">Admission Form</span>
                                        </h2>
                                    </div>
                                </div>
                                <div class="admission-form">
                                    <form>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="inputCity" placeholder="Full Name">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="inputZip" placeholder="Age">
                                            </div>
                                            <div class="form-group ">
                                                <select id="inputState" class="form-control">
                                                    <option selected>Corse</option>
                                                    <option>math</option>
                                                    <option>math</option>
                                                    <option>math</option>
                                                </select>
                                            </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <textarea class="form-control admission-form-textarea" name="" id="" cols="30" rows="10"></textarea>
                                            </div>
                                        </div>
                                        
                                        <button class="admission-form-button" type="submit" >Submit</button>
                                    </form>
                                </div>
                            </div>
                            <!-- admission section end -->
                    </div>

                    <!--tab-2 end-->

                    <!--tab-3 start-->
                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                        <div class="laboratory-wrapper">
                          <img src="{{ asset('frontend/img/come.jpeg')}}" class="laboratory-wrapper_img" alt="...">
                        </div>
                           
                    </div>
                    <!--tab-3 end-->
                    <!--tab-5 start-->
                    <div class="tab-pane fade" id="v-pills-Calendar" role="tabpanel" aria-labelledby="v-pills-Calendar-tab">
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