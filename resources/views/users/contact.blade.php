@extends('layouts.base')
@section('content')

<section class="page-title" style="background-image:url({{ asset('assets/images/background/12.jpg') }});">
    <div class="auto-container">
        <h2>Contact Us</h2>
        <div class="separater"></div>
    </div>
</section>

<!--Breadcrumb-->
<div class="breadcrumb-outer">
    <div class="auto-container">
        <ul class="bread-crumb text-center">
            <li><a href="{{ route('users.index') }}">Home</a> <span>/</span></li>
            <li>Contact Us</li>
        </ul>
    </div>
</div>
<!--End Page Title-->

<!-- Contact Section -->
<section class="quote-section">
    <div class="auto-container">
        <div class="quote-form-box contact-page">
            <div class="sec-title centered">
                <h3>Give Us <span>Your Feedback</span></h3>
                <div class="separater"></div>
                <div class="text">We Value Your Feedback Comments & Queries</div>
            </div>
            <!-- Form-->
            <form method="post" action="https://nauthemes.net/html/carga/contact.html">
                <div class="row clearfix">
                    <div class="form-group col-lg-4 col-md-6 col-sm-12">
                        <input type="text" name="firstname" placeholder="Enter Your Name" required>
                    </div>
                    
                    <div class="form-group col-lg-4 col-md-6 col-sm-12">
                        <input type="email" name="email" placeholder="Your Email ID" required>
                    </div>
                    
                    <div class="form-group col-lg-4 col-md-6 col-sm-12">
                        <input type="text" name="phone" placeholder="Your Contact" required>
                    </div>
                    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-lg-12">
                        <textarea placeholder="Your Message"></textarea>
                    </div>
                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                        <button type="submit" class="theme-btn btn-style-one">Request a Quote / Give Feedback</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- End contact Section -->
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

@endsection