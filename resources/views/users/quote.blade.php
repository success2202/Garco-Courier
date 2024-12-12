@extends('layouts.base')
@section('content')

<!--Page Title-->
<section class="page-title" style="background-image:url(images/background/12.jpg);">
    <div class="auto-container">
        <h2>Quote Request</h2>
        <div class="separater"></div>
    </div>
</section>

<!--Breadcrumb-->
<div class="breadcrumb-outer">
    <div class="auto-container">
        <ul class="bread-crumb text-center">
            <li><a href="index.html">Home</a> <span>/</span></li>
            <li>Request a Quote</li>
        </ul>
    </div>
</div>
<!--End Page Title-->
<!-- Quote Section -->
<section class="quote-section">
    <div class="auto-container">
        
        <div class="quote-form-box">
            
            <!--Login Form-->
            <form method="post" action="https://nauthemes.net/html/carga/contact.html">
                <div class="row clearfix">
                    
                    <!-- Form Group -->
                    <div class="form-group option-box col-lg-12 col-md-12 col-sm-12">
                        <div class="radio-box">
                            <input type="radio" name="gender" id="male">&nbsp; 
                            <label for="male">Ocean Freight</label>
                        </div>
                        <div class="radio-box">
                            <input type="radio" name="gender" id="female">&nbsp; 
                            <label for="female">Air Freight</label>
                        </div>
                        <div class="radio-box">
                            <input type="radio" name="gender" id="other">&nbsp; 
                            <label for="other">Raod Freight</label>
                        </div>
                    </div>
                    
                    <div class="form-group col-lg-4 col-md-6 col-sm-12">
                        <label>Name</label>
                        <input type="text" name="firstname" placeholder="Enter Your Name" required>
                    </div>
                    
                    <div class="form-group col-lg-4 col-md-6 col-sm-12">
                        <label>Email</label>
                        <input type="email" name="email" placeholder="Your Email ID" required>
                    </div>
                    
                    <div class="form-group col-lg-4 col-md-6 col-sm-12">
                        <label>Phone</label>
                        <input type="text" name="phone" placeholder="Your Contact" required>
                    </div>
                    
                    <div class="form-group col-lg-4 col-md-6 col-sm-12">
                        <label>Transport From</label>
                        <select class="custom-select-box">
                            <option>Dallas</option>
                            <option>New York</option>
                            <option>Sydney</option>
                            <option>Other</option>
                        </select>
                    </div>
                    
                    <div class="form-group col-lg-4 col-md-6 col-sm-12">
                        <label>Transport To</label>
                        <select class="custom-select-box">
                            <option>Berlin</option>
                            <option>Chicago</option>
                            <option>Melbourne</option>
                            <option>Other</option>
                        </select>
                    </div>
                    
                    <div class="form-group col-lg-4 col-md-6 col-sm-12">
                        <label>Transport Type</label>
                        <select class="custom-select-box">
                            <option>Air Freight</option>
                            <option>Sea Freight</option>
                            <option>Train Freight</option>
                            <option>Truck Freight</option>
                        </select>
                    </div>
                    
                    <div class="form-group col-lg-4 col-md-6 col-sm-12">
                        <label>Package Type</label>
                        <select class="custom-select-box">
                            <option>Parcel</option>
                            <option>Cargo</option>
                            <option>Shipment</option>
                        </select>
                    </div>
                    
                    <div class="form-group col-lg-2 col-md-6 col-sm-12">
                        <label>Weight</label>
                        <select class="custom-select-box">
                            <option>0KG - 10KG+</option>
                            <option>11KG - 100KG+</option>
                            <option>101KG - 1000KG+</option>
                            <option>More than 1000KG+</option>
                        </select>
                    </div>
                    
                    <div class="form-group col-lg-2 col-md-6 col-sm-12">
                        <label>Length</label>
                        <select class="custom-select-box">
                            <option>Normal Range</option>
                            <option>Medium Range</option>
                            <option>Extended Range</option>
                        </select>
                    </div>
                    
                    <div class="form-group col-lg-2 col-md-6 col-sm-12">
                        <label>Width</label>
                        <select class="custom-select-box">
                            <option>Normal Range</option>
                            <option>Medium Range</option>
                            <option>Extended Range</option>
                        </select>
                    </div>
                    
                    <div class="form-group col-lg-2 col-md-6 col-sm-12">
                        <label>Length</label>
                        <select class="custom-select-box">
                            <option>Normal Range</option>
                            <option>Medium Range</option>
                            <option>Extended Range</option>
                        </select>
                    </div>
                    
                    <div class="form-group col-lg-4 col-md-6 col-sm-12">
                        <label>Tracking ID</label>
                        <select class="custom-select-box">
                            <option>Yes, Exact Location</option>
                            <option>Yes, Minimum Info</option>
                            <option>No, Don't Track</option>
                        </select>
                    </div>
                    
                    <div class="form-group col-lg-4 col-md-6 col-sm-12">
                        <label>Packing Type</label>
                        <select class="custom-select-box">
                            <option>Solid Package</option>
                            <option>Liquid Items</option>
                            <option>Gas or Anyother</option>
                        </select>
                    </div>
                    
                    <div class="form-group col-lg-4 col-md-6 col-sm-12">
                        <label>Assessed Value</label>
                        <input type="text" name="value" placeholder="In Dollars (USD)" required>
                    </div>
                    
                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                        <button type="submit" class="theme-btn btn-style-one">Request a Quote</button>
                    </div>
                    
                </div>
            </form>
            
        </div>
    </div>
</section>
<!-- End Quote Section -->

<!-- Counter Section -->
<section class="counter-section" style="background-image:url(images/background/3.jpg)">
    <div class="auto-container">
        <div class="row clearfix">
            
            <!-- Order Column -->
            <div class="order-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column" style="background-image:url(images/background/4.png)">
                    <div class="icon-box">
                        <span class="icon flaticon-fast-delivery"></span>
                    </div>
                    <h2>Track Your Order</h2>
                    <div class="text">Enter your Track Id For Instant Search</div>
                    
                    <!--Track Form-->
                    <div class="track-form">
                        <form method="post" action="{{ route('users.courier.index') }}">
                            <div class="form-group">
                                <input type="text" name="trackID" value="" placeholder="Track ID" required="">
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
                        <div class="row clearfix">
                            <!--Column-->
                            <div class="column counter-column col-lg-6 col-md-6 col-sm-12">
                                <div class="inner">
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
                                <div class="inner">
                                    <div class="content">
                                        <div class="count-outer count-box alternate">
                                            <span class="count-text" data-speed="3500" data-stop="2585">0</span>+
                                        </div>
                                        <h4 class="counter-title">Professional Workers</h4>
                                    </div>
                                </div>
                            </div>

                            <!--Column-->
                            <div class="column counter-column col-lg-6 col-md-6 col-sm-12">
                                <div class="inner">
                                    <div class="content">
                                        <div class="count-outer count-box">
                                            <span class="count-text" data-speed="2500" data-stop="207">0</span>+
                                        </div>
                                        <h4 class="counter-title">Countries Covered</h4>
                                    </div>
                                </div>
                            </div>
                            
                            <!--Column-->
                            <div class="column counter-column col-lg-6 col-md-6 col-sm-12">
                                <div class="inner">
                                    <div class="content">
                                        <div class="count-outer count-box">
                                            <span class="count-text" data-speed="2000" data-stop="79">0</span>%
                                        </div>
                                        <h4 class="counter-title">Regions Covered</h4>
                                    </div>
                                </div>
                            </div>
                            
                            <!--Column-->
                            <div class="column counter-column col-lg-6 col-md-6 col-sm-12">
                                <div class="inner">
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
                                <div class="inner">
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

<!-- Price Section -->
<section class="price-section style-two">
    <div class="auto-container">
        
        <div class="sec-title-two centered sec-title">
            <h2>Choose Your <span>Pricing Plan</span></h2>
            <div class="separater"></div>
        </div>
        
        <div class="clearfix">
            
            <!-- Price Block -->
            <div class="price-block style-two col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="title">Silver</div>
                    <div class="price-box">
                        <div class="price">$50.0</div>
                        <div class="months">/KM Distance</div>
                    </div>
                    <ul class="price-list">
                        <li>1x Storage Unit</li>
                        <li>10x Weeks</li>
                        <li>Double Covered Truck</li>
                        <li>100% Insurance</li>
                        <li>Timely Delivery</li>
                    </ul>
                    <div class="btn-box">
                        <a href="#" class="theme-btn choose-btn">Choose Now</a>
                    </div>
                </div>
            </div>
            
            <!-- Price Block -->
            <div class="price-block style-two active col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="title">Platinum</div>
                    <div class="price-box">
                        <div class="price">$80.25</div>
                        <div class="months">/KG Package</div>
                    </div>
                    <ul class="price-list">
                        <li>Additional Single Truck</li>
                        <li>200 x Weeks</li>
                        <li>Adminstrator Access</li>
                        <li>Sponsored Promotion</li>
                        <li>Premium Company Account</li>
                        <li>ID Tracking Location</li>
                    </ul>
                    <div class="btn-box">
                        <a href="#" class="theme-btn choose-btn">Choose Now</a>
                    </div>
                </div>
            </div>
            
            <!-- Price Block -->
            <div class="price-block style-two col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="title">Gold</div>
                    <div class="price-box">
                        <div class="price">$75.0</div>
                        <div class="months">/Mile Distance</div>
                    </div>
                    <ul class="price-list">
                        <li>1 x Storage Unit</li>
                        <li>10 x Weeks</li>
                        <li>Double Covered Truck</li>
                        <li>Sponsored Promotion</li>
                        <li>Monthly Gift Voucher</li>
                    </ul>
                    <div class="btn-box">
                        <a href="#" class="theme-btn choose-btn">Choose Now</a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>
<!-- End Price Section -->
    
@endsection