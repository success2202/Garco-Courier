@extends('layouts.base')
@section('content')
	<!--Banner Section-->
    <section class="banner-section blue" style="background-image:url({{ asset('assets/images/background/1.jpg') }})">
		<div class="auto-container">
			<div class="row clearfix">
				<!-- Content Column -->
				<div class="content-column col-lg-8 col-md-12 col-sm-12">
					<div class="inner-column wow slideInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<h1>World Best Logistics Services Provider</h1>
						<div class="text">We are a flexible and dedicated Logistics Service Partner. We work with you to design custom solutions.</div>
						{{-- <a href="#" class="theme-btn btn-style-one">Read More</a> --}}
					</div>
				</div>
				
				<!-- Form Column -->
				<div class="form-column col-lg-4 col-md-12 col-sm-12">
					<div class="inner-column wow slideInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
						<h2>Get a Quick  Quote</h2>
						<div class="title">Estimate Cost For Your Shipments</div>
						
						<!-- Banner Form -->
						<div class="banner-form">
							<form method="post" action="https://nauthemes.net/html/carga/index.html">
								
								<div class="form-group">
									<label>Select Shipping Method</label>
									<select class="custom-select-box">
										<option>By Cargo Air</option>
										<option>By Cargo Train</option>
										<option>By Cargo Ship</option>
									</select>
								</div>
								
								<div class="form-group">
									<label>From Country</label>
									<select class="custom-select-box">
										<option>From Country</option>
										<option>USA</option>
										<option>London</option>
										<option>UAE</option>
									</select>
								</div>
								
								<div class="form-group">
									<label>To Country</label>
									<select class="custom-select-box">
										<option>To Country</option>
										<option>Canada</option>
										<option>Germany</option>
										<option>France</option>
									</select>
								</div>
								
								<div class="form-group">
									<label>Estimated Cost:</label>
									<button type="submit" class="theme-btn btn-style-one">Get a Quote</button>
								</div>                                        
								
							</form>
						</div>
						<!-- End Banner Form -->
						
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!--End Banner Section-->
	
	<!-- About Section -->
	<section class="about-section blue">
		<div class="auto-container">
			<div class="sec-title blue centered">
				<h3>About <span>The Garco</span></h3>
				<div class="separater"></div>
				<div class="text">With over 50 years experience in the Cargo and Transport Services</div>
			</div>
			
			<div class="row clearfix">
				
				<!-- Video Column -->
				<div class="video-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						
						<!--Video Box-->
						<div class="video-box">
							<figure class="image">
								<img src="{{ asset('assets/images/resource/video-image.jpg') }}" alt="">
							</figure>
							<a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image overlay-box"><i class="play-now flaticon-play-button-4"></i></a>
						</div>
						
					</div>
				</div>
				
				<!-- Content Column -->
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
						<h3>Reach your destination 100% sure and safe</h3>
						<div class="text">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim venia, quis nostrud exercitation ullamco laboris  .</p>
							<blockquote>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim venia, quis nostrud exercitation ullamco laboris .
							</blockquote>
							<p>ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
						{{-- <a href="#" class="theme-btn btn-style-one">Read More</a> --}}
					</div>
				</div>
				
			</div>
			
			<div class="row clearfix">
				
				<!-- Services Block -->
				<div class="services-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="icon-box">
							<span class="icon flaticon-calendar-1"></span>
						</div>
						<h2><a href="#">80% Time Speed</a></h2>
						<div class="category">Design Packages</div>
						<div class="text">Benenatis mauris. Vestibulum ante ipsum primis in industry, logistics,nance, business orci ultrices.</div>
					</div>
				</div>
				
				<!-- Services Block -->
				<div class="services-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
						<div class="icon-box">
							<span class="icon flaticon-gps"></span>
						</div>
						<h2><a href="#">Track All Your Shippings</a></h2>
						<div class="category">Flexible Movers</div>
						<div class="text">Benenatis mauris. Vestibulum ante ipsum primis in industry, logistics,nance, business orci ultrices.</div>
					</div>
				</div>
				
				<!-- Services Block -->
				<div class="services-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
						<div class="icon-box">
							<span class="icon flaticon-help-operator"></span>
						</div>
						<h2><a href="#">24/7 Support</a></h2>
						<div class="category">Regular Visits</div>
						<div class="text">Benenatis mauris. Vestibulum ante ipsum primis in industry, logistics,nance, business orci ultrices.</div>
					</div>
				</div>
				
			</div>
			
		</div>
	</section>
	<!-- End About Section -->
	
	<!-- Services Section -->
	<section class="services-section" style="background-image:url({{ asset('assets/images/background/2.png') }})">
		<div class="auto-container">
			<div class="sec-title blue centered">
				<h3>Services <span>We Provide </span></h3>
				<div class="separater"></div>
				<div class="text">With over 50 years experience in the Cargo and Transport Services</div>
			</div>
			
			<div class="row clearfix">
				
				<!-- Services Block Two --> 
				@foreach ( $services as $service)
				<div class="services-block-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="icon-box">
							<a href="{{ route('users.service.details', encrypt($service->id)) }}"><img alt="" src="{{asset('images/'.$service->images)}}"> </a>
						</div>
						<h2><a class="text-decoration-none" href="{{ route('users.service.details', encrypt($service->id)) }}">{{ $service->title }}</a></h2>
						<div class="text"> {!! $service->contents !!}</div>
						<a class="text-decoration-none" href="{{ route('users.service.details', encrypt($service->id)) }}" class="read-more">Read more</a>
					</div>
				</div>
				@endforeach
				
				
				<!-- Services Block Two -->
				{{-- <div class="services-block-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="icon-box">
							<span class="icon flaticon-airplane-shape"></span>
						</div>
						<h2><a href="#">Air Freight</a></h2>
						<div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et laboris .</div>
						<a href="#" class="read-more">Read more</a>
					</div>
				</div>
	 --}}
			</div>
			
		</div>
	</section>
	<!-- End Services Section -->
	
	<!-- News Section -->
	<section class="news-section">
		<div class="auto-container">
			<div class="sec-title blue centered">
				<h3>Latest <span>Blog Posts</span></h3>
				<div class="separater"></div>
				<div class="text">With over 50 years experience in the Cargo and Transport Services</div>
			</div>
			
			<div class="row clearfix">
			
				<!-- News Block -->
				@foreach ($blogs as $blog )
				<div class="news-block col-lg-6 col-md-12 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="row clearfix">
							<!-- Image Column -->
							<div class="image-column col-lg-6 col-md-6 col-sm-12">
								<div class="inner-column">
									<div class="image">
										<a href="{{route('users.blog.details', encrypt($blog->id))}}">><img src="{{asset('images/'.$blog->image)}}" alt="" /></a>
									</div>
								</div>
							</div>
							<!-- Content Column --> 
							<div class="content-column col-lg-6 col-md-6 col-sm-12">
								<div class="inner-column">
									<ul class="post-meta">
										<li><span class="icon flaticon-calendar-1"></span>{{ $blog->created_at }}</li>
										<li><span class="icon fa fa-user"></span>{{ $blog->posted_by }}</li>
									</ul>
									<h3><a class="text-decoration-none" href="{{route('users.blog.details', encrypt($blog->id))}}">{{ $blog->title }}</a></h3>
									<div class="text">{!! $blog->contents !!}</div>
									<a class="text-decoration-none" href="{{route('users.blog.details', encrypt($blog->id))}}" class="read-more">Read more</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				@endforeach
				
				
				<!-- News Block -->
				{{-- <div class="news-block col-lg-6 col-md-12 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
						<div class="row clearfix">
							<!-- Image Column -->
							<div class="image-column col-lg-6 col-md-6 col-sm-12">
								<div class="inner-column">
									<div class="image">
										<a href="#"><img src="{{ asset('assets/images/resource/news-2.jpg') }}" alt="" /></a>
									</div>
								</div>
							</div>
							<!-- Content Column -->
							<div class="content-column col-lg-6 col-md-6 col-sm-12">
								<div class="inner-column">
									<ul class="post-meta">
										<li><span class="icon flaticon-calendar-1"></span>Dec 09 ,2018</li>
										<li><span class="icon fa fa-user"></span>Allan Doe</li>
									</ul>
									<h3><a href="#">How Shipments Works?</a></h3>
									<div class="text">Lorem ipsum dolor sit amectetur adipisic ing elit, sed do eiusmod  didunt ut labore .</div>
									<a href="#" class="read-more">Read more</a>
								</div>
							</div>
						</div>
					</div>
				</div> --}}
				
			
			</div>
		</div>	
	</section>
	<!-- End News Section -->
	
	<!-- Counter Section -->
	<section class="counter-section" style="background-image:url({{ asset('assets/images/background/3.jpg') }})">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Order Column -->
				<div class="order-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column blue" style="background-image:url(images/background/4.png)">
						<div class="icon-box">
							<span class="icon flaticon-fast-delivery"></span>
						</div>
						<h2>Track Your Order</h2>
						<div class="text">Enter your Track Id For Instant Search</div>
						
						<!--Track Form-->
						<div class="track-form">
                            <form method="post" action="{{ route('users.courier.index') }}">
								@csrf
                                <div class="form-group">
                                    <input type="text" name="trackID" value="" placeholder="Tracking ID" required="">
                                    <button type="submit" class="theme-btn"><span class="fa fa-search"></span></button>
                                </div>
                            </form>
                        </div>
						
						<!-- Social Box -->
						<div class="social-box">
							<a href="#" class="fa fa-twitter"></a>
							<a href="#" class="fa fa-facebook"></a>
							<a href="#" class="fa fa-linkedin"></a>
							<a href="#" class="fa fa-google-plus"></a>
						</div>
						
					</div>
				</div>
				
				<!-- Counter Column -->
				<div class="counter-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						
						<div class="fact-counter">
							<div class="clearfix">
								<!--Column-->
								<div class="column counter-column col-lg-6 col-md-6 col-sm-12">
									<div class="inner blue">
										<div class="content">
											<div class="count-outer count-box">
												<span class="count-text" data-speed="2000" data-stop="61">0</span>
											</div>
											<h4 class="counter-title">Years of Experience</h4>
										</div>
									</div>
								</div>

								<!--Column-->
								<div class="column counter-column col-lg-6 col-md-6 col-sm-12">
									<div class="inner blue">
										<div class="content">
											<div class="count-outer count-box alternate">
												<span class="count-text" data-speed="2800" data-stop="2585">0</span>+
											</div>
											<h4 class="counter-title">Professional Workers</h4>
										</div>
									</div>
								</div>

								<!--Column-->
								<div class="column counter-column col-lg-6 col-md-6 col-sm-12">
									<div class="inner blue">
										<div class="content">
											<div class="count-outer count-box">
												<span class="count-text" data-speed="2500" data-stop="79">0</span>%
											</div>
											<h4 class="counter-title">Areas Covered</h4>
										</div>
									</div>
								</div>
								
								<!--Column-->
								<div class="column counter-column col-lg-6 col-md-6 col-sm-12">
									<div class="inner blue">
										<div class="content">
											<div class="count-outer count-box">
												<span class="count-text" data-speed="2000" data-stop="207">0</span>+
											</div>
											<h4 class="counter-title">Countries Covered</h4>
										</div>
									</div>
								</div>
								
								<!--Column-->
								<div class="column counter-column col-lg-6 col-md-6 col-sm-12">
									<div class="inner blue">
										<div class="content">
											<div class="count-outer count-box">
												<span class="count-text" data-speed="2000" data-stop="186">0</span>+
											</div>
											<h4 class="counter-title">Corporate Clients</h4>
										</div>
									</div>
								</div>
								
								<!--Column-->
								<div class="column counter-column col-lg-6 col-md-6 col-sm-12">
									<div class="inner blue">
										<div class="content">
											<div class="count-outer count-box">
												<span class="count-text" data-speed="2000" data-stop="450">0</span>+
											</div>
											<h4 class="counter-title">Owned Vehicles</h4>
										</div>
									</div>
								</div>
								
							</div>
						</div>

						
					</div>
				</div>
				
			</div>
		</div>
	</section>
	
	<!-- Testimonial Section -->
	<section class="testimonial-section">
		<div class="auto-container">
			<div class="sec-title centered">
				<h3>Some Words From Clients</h3>
				<div class="separater"></div>
				<div class="text">With over 50 years experience in the Cargo and Transport Services</div>
			</div>
			<div class="two-item-carousel owl-carousel owl-theme">
				
				<!-- Testimonial Block -->
				@foreach ( $testimonials as $testimony )
				<div class="testimonial-block blue">
					<div class="inner-box">
						<div class="quote-icon flaticon-left-quote"></div>
						<div class="text">  {{ $testimony->content }}</div>
						<div class="author-info">
							<div class="info-inner">
								<div class="author-image">
									<img src="{{ asset('assets/images/resource/author-2.jpg') }}" alt=""/>
								</div>
								<h4>{{ $testimony->name }}</h4>
								<div class="designation">Shipment Client</div>
								
								<!-- Social Box -->
								<div class="social-box">
									<a href="{{ $settings->twitter }}" class="fa fa-twitter"></a>
									<a href="{{ $settings->facebook }}" class="fa fa-facebook"></a>
									<a href="{{ $settings->linkedIn }}" class="fa fa-linkedin"></a>
									{{-- <a href="#" class="fa fa-google-plus"></a> --}}
								</div>
								
							</div>
						</div>
					</div>
				</div>
				@endforeach
				
				
				<!-- Testimonial Block -->
				{{-- <div class="testimonial-block blue">
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
	<section class="fullwidth-section blue">
		<div class="outer-container">
			<div class="clearfix">
				
				<!-- Left Column -->
				<div class="left-column" style="background-image:url({{ asset('assets/images/background/5.jpg') }})">
					<div class="inner-column">
						<h3>Are You A Sender?</h3>
						<div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</div>
						<a  href="#" class="theme-btn btn-style-one text-decoration-none">Check Packages</a>
					</div>
				</div>
				
				<!-- Right Column -->
				<div class="right-column" style="background-image:url(images/background/6.jpg)">
					<div class="inner-column">
						<h3>Are You A Shipper?</h3>
						<div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</div>
						<a  href="{{ route('users.contact') }}" class="theme-btn btn-style-two text-decoration-none">Contact us</a>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Fullwidth Section -->
@endsection
