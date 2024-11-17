@extends('layouts.base')
@section('content')

	<!--Page Title-->
    <section class="page-title" style="background-image:url({{ asset('assets/images/background/12.jpg') }});">
    	<div class="auto-container">
        	<h2>Testimonials</h2>
			<div class="separater"></div>
        </div>
    </section>
    
    <!--Breadcrumb-->
    <div class="breadcrumb-outer">
    	<div class="auto-container">
        	<ul class="bread-crumb text-center">
            	<li><a href="{{ route('users.index') }}">Home</a> <span>/</span></li>
                <li>Testimonials</li>
            </ul>
        </div>
    </div>
    <!--End Page Title-->
	
	<!-- Testimonial Section -->
	<section class="testimonial-section testi-page">
		<div class="auto-container">
			<div class="sec-title centered">
				<h3>Some Words <span>From Clients</span></h3>
				<div class="separater"></div>
				<div class="text">With over 50 years experience in the Garco and Transport Services</div>
			</div>
			<div class="two-item-carousel owl-carousel owl-theme">
				
				<!-- Testimonial Block -->
				@foreach ( $testimony as $tes )
				<div class="testimonial-block">
					<div class="inner-box">
						<div class="quote-icon flaticon-left-quote"></div>
						<div class="text"> {{ $tes->content }}</div>
						<div class="author-info">
							<div class="info-inner">
								<div class="author-image">
									<img src="{{ asset('assets/images/resource/author-2.jpg') }}" alt=""/>
								</div>
								<h4>{{ $tes->name }}</h4>
								<div class="designation">Shipment Client</div>
								
								<!-- Social Box -->
								<div class="social-box">
									<a href="#" class="fa fa-twitter"></a>
									<a href="#" class="fa fa-facebook"></a>
									<a href="#" class="fa fa-linkedin"></a>
									<a href="#" class="fa fa-google-plus"></a>
								</div>
								
							</div>
						</div>
					</div>
				</div>
				@endforeach
				
				
				{{-- <!-- Testimonial Block -->
				<div class="testimonial-block">
					<div class="inner-box">
						<div class="quote-icon flaticon-left-quote"></div>
						<div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.Ut enim ad minim veniam, quis nostrud exercitation.</div>
						<div class="author-info">
							<div class="info-inner">
								<div class="author-image">
									<img src="{{ asset('assets/images/resource/author-1.jpg') }}" alt=""/>
								</div>
								<h4>Kristie Hans</h4>
								<div class="designation">Associated Engineer</div>
								
								<!-- Social Box -->
								<div class="social-box">
									<a href="#" class="fa fa-twitter"></a>
									<a href="#" class="fa fa-facebook"></a>
									<a href="#" class="fa fa-linkedin"></a>
									<a href="#" class="fa fa-google-plus"></a>
								</div>
								
							</div>
						</div>
					</div>
				</div>
				
				<!-- Testimonial Block -->
				<div class="testimonial-block">
					<div class="inner-box">
						<div class="quote-icon flaticon-left-quote"></div>
						<div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.Ut enim ad minim veniam, quis nostrud exercitation.</div>
						<div class="author-info">
							<div class="info-inner">
								<div class="author-image">
									<img src="{{ asset('assets/images/resource/author-1.jpg') }}" alt=""/>
								</div>
								<h4>Mylie Joseph</h4>
								<div class="designation">General Manager</div>
								
								<!-- Social Box -->
								<div class="social-box">
									<a href="#" class="fa fa-twitter"></a>
									<a href="#" class="fa fa-facebook"></a>
									<a href="#" class="fa fa-linkedin"></a>
									<a href="#" class="fa fa-google-plus"></a>
								</div>
								
							</div>
						</div>
					</div>
				</div>
				
				<!-- Testimonial Block -->
				<div class="testimonial-block">
					<div class="inner-box">
						<div class="quote-icon flaticon-left-quote"></div>
						<div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.Ut enim ad minim veniam, quis nostrud exercitation.</div>
						<div class="author-info">
							<div class="info-inner">
								<div class="author-image">
									<img src="{{ asset('assets/images/resource/author-2.jpg') }}" alt=""/>
								</div>
								<h4>William Jhone k</h4>
								<div class="designation">General Manager</div>
								
								<!-- Social Box -->
								<div class="social-box">
									<a href="#" class="fa fa-twitter"></a>
									<a href="#" class="fa fa-facebook"></a>
									<a href="#" class="fa fa-linkedin"></a>
									<a href="#" class="fa fa-google-plus"></a>
								</div>
								
							</div>
						</div>
					</div>
				</div> --}}
			
			</div>
		</div>
	</section>
	<!-- End Testimonial Section -->
	
	<!--Sponsors Section-->
	<section class="sponsors-section">
		<div class="auto-container">
			
			<div class="carousel-outer">
                <!--Sponsors Slider-->
                <ul class="sponsors-carousel owl-carousel owl-theme">
                    <li><div class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="images/clients/4.png" alt=""></a></div></li>
					<li><div class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></div></li>
                    <li><div class="image-box"><a href="#"><img src="images/clients/4.png" alt=""></a></div></li>
                </ul>
            </div>
			
		</div>
	</section>
	<!--End Sponsors Section-->
	
	<!-- Fullwidth Section -->
	<section class="fullwidth-section">
		<div class="outer-container">
			<div class="clearfix">
				
				<!-- Left Column -->
				<div class="left-column" style="background-image:url({{ asset('assets/images/background/5.jpg') }})">
					<div class="inner-column">
						<h3>Are You A Sender?</h3>
						<div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</div>
						<a href="#" class="theme-btn btn-style-one">Check Packages</a>
					</div>
				</div>
				
				<!-- Right Column -->
				<div class="right-column" style="background-image:url(images/background/6.jpg)">
					<div class="inner-column">
						<h3>Are You A Shipper?</h3>
						<div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</div>
						<a href="#" class="theme-btn btn-style-two">Contact us</a>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Fullwidth Section -->

@endsection