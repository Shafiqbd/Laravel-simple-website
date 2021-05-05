@extends('layouts.app')
@section('title', 'Gallery')
@section('content')

  <!--  cover image section start  -->
	<div class="donate-bg">
		<h5 class="notice-top-area_title"> <span> MaKE a </span> Donation</h5>
	</div>
	<!-- cover image section end -->
	<section class="donation-top">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h2 class="donation-top_title">Your support can make a world of difference for children, adolescents
						and adults on the autism spectrum and their families.</h2>
					<p class="donation-top_desc">See below for different ways you can donate online, in person, as well
						as to our dedicated fund raising bank account.</p>
				</div>
			</div>
		</div>
	</section>

	<!--donate bank start-->
	<section class="donate-bank section-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h2 class="section-title wow fadeInDown" data-wow-duration="1s" data-wow-delay=".3s"
						style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInDown;">
						Donate to bank account
					</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<div class="donate-bank-1">
						<div class="donate-bank-1-wrap">
							<div class="donate-bank-1-wrap_title">
								<p>Account Name </p>
								<p>Account Number</p>
								<p>Bank Name</p>
								<p>Bank Name</p>
								<p>Bank Address</p>
							</div>
							<div class="donate-bank-1-wrap_info">
								<p>: Golden Kids Trust</p>
								<p>: 401312100025219</p>
								<p>: Shahjalal Islami Bank</p>
								<p>: Shahjalal Islami Bank</p>
								<p class="bank-address">: Shahjalal Islami Bank,
									Banani &nbsp;Branch, Dhaka, Bangladesh</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="donate-bank-1">
						<div class="donate-bank-1-wrap">
							<div class="donate-bank-1-wrap_title">
								<p>Account Name </p>
								<p>Account Number</p>
								<p>Bank Name</p>
								<p>Bank Name</p>
								<p>Bank Address</p>
							</div>
							<div class="donate-bank-1-wrap_info">
								<p>: Golden Kids Welfare Foundation</p>
								<p>: 50314000011</p>
								<p>: Bank Asia (Islamic Banking)</p>
								<p>: Shahjalal Islami Bank</p>
								<p class="bank-address">: Bank Asia, Banani Branch,
									Dhaka, &nbsp;Bangladesh</p>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!--donate bank end-->
	<!--donate bkash start-->
	<section class="donate-bkash">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h2 class="section-title wow fadeInDown" data-wow-duration="1s" data-wow-delay=".3s"
						style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInDown;">
						Donate to bkash number
					</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="donate-bkash-area">
						<img src="{{ asset('frontend/img/bkash.png')}}" alt="">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--donate bkash end-->
	<!--donate Walk donation start-->
	<section class="donation-walk section-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h2 class="section-title wow fadeInDown" data-wow-duration="1s" data-wow-delay=".3s"
						style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInDown;">
						Donate to office 
					</h2>
				</div>
			</div>
			<p class="donation-walk_desc">Contact us (address and telephone numbers are given at the bottom right of the
				Home Page) if you would like to donate in person.</p>
			<div class="row">
				<div class="col-lg-12">
					<div class="donation-walk-wrap">
						<div class="donation-walk-area">
							<h4 class="donation-walk-area_title">contact</h4>
							<p class="donation-walk-area_name">Secretary General & CEO</p>
						</div>
						<div class="donation-walk-area">
							<h4 class="donation-walk-area_title">PHONE</h4>
							<p class="donation-walk-area_name">
								+8801755513156 </p>
								<p class="donation-walk-area_name">+8801841721721</p>
								<p class="donation-walk-area_name">+8801841721722</p>
						</div>
						<div class="donation-walk-area">
							<h4 class="donation-walk-area_title">email</h4>
							<p class="donation-walk-area_name">kazi.rimon@gmail.com</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--donate Walk donation end-->
	<!-- logo area start -->
	<div class="donate-area donate-bottom">
		<a href="{{ url('donate')}}" class="donate_text" href="">donate now</a>
	</div>
	<!-- logo area end -->
	

@endsection