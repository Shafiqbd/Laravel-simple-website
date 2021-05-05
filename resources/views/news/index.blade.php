@extends('layouts.app')
@section('title', 'News')
@section('content')
<!-- slide image start -->
        <div class="notice-top-area news-top">
            <h4 class="notice-top-area_title">Our <span>News</span></h4>

        </div>

    <!--News details start-->
    <section class="news-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="news-area">
                    </div>
                    <p class="news-area_desc">
                        স্বাধীনতা মানে স্বাধীন ভাবে বলতে পারি লিখতে পারি, স্বাধীনতা মানে লাল সবুজের একখানি পতাকা " মহান স্বাধীনতা দিবস উপলক্ষে Golden Kids Welfare Foundation (GKWF) এর পক্ষ  থেকে অনেক অনেক শুভেচ্ছা ও অভিনন্দন।
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!--News details end-->


	<!-- logo area start -->
	<div class="donate-area donate-bottom">
		<a href="{{ url('donate')}}" class="donate_text" href="">donate now</a>
	</div>
	<!-- logo area end -->

@endsection