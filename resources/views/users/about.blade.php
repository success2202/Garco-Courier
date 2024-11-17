@extends('layouts.base')
@section('content')

	<!--Page Title-->
    <section class="page-title" style="background-image:url({{ asset('assets/images/background/12.jpg') }});">
    	<div class="auto-container">
        	<h2>About Us</h2>
			<div class="separater"></div>
        </div>
    </section>
    
    <!--Breadcrumb-->
    <div class="breadcrumb-outer">
    	<div class="auto-container">
        	<ul class="bread-crumb text-center">
            	<li><a href="{{ route('users.index') }}">Home</a> <span>/</span></li>
                <li>About Us</li>
            </ul>
        </div>
    </div>
    <!--End Page Title-->
	
	<!-- Welcome Section -->
	<section class="welcome-section">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Content Column -->
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="sec-title-two sec-title">
							<h2>Welcome <span>To Garco</span></h2>
							<div class="separater"></div>
						</div>
						<ul class="list-style-one">
							<li><span>100% Safe Delivery</span>We have accomplished 100% safe delivery, consectetur adipisicing elit, sed do eiusmod tempor incididunt dolore magna aliqua...</li>
							<li><span>Weather Insurance</span>Any weather any where, we deliver to your commitement consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore...</li>
							<li><span>Fast & On Time Delivery</span>Fast and timly deliver is our motto, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore...</li>
						</ul>
						{{-- <a href="#" class="theme-btn btn-style-four">Read More</a> --}}
					</div>
				</div>
				
				<!-- Image Column -->
				<div class="image-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<img src="images/resource/welcome.jpg" alt=""/>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Welcome Section -->
	
@endsection