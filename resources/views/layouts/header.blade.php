<header class="main-header">
    	
    <!--Header Top-->
    <div class="header-top">
        <div class="auto-container">
            <div class="clearfix">
                <!--Top Left-->
                <div class="top-left">
                    
                    <!--Social Box-->
                    <ul class="social-box">
                        <li><a href="{{ $settings->twitter }}"><span class="fa fa-twitter"></span></a></li>
                        <li><a href="{{ $settings->facebook }}"><span class="fa fa-facebook"></span></a></li>
                        <li><a href="{{ $settings->linkedIn }}"><span class="fa fa-linkedin"></span></a></li>
                        <li><a href="{{ $settings->instagram }}"><span class="fa fa-instagram"></span></a></li>
                    </ul>
                    
                </div>
                <!--Top Right-->
                <div class="top-right">
                    <ul class="right-list">
                        <li><span class="icon flaticon-mail"></span>{{ $settings->site_email }}</li>
                        <li><span class="icon flaticon-phone-contact"></span>{{ $settings->site_phone }}</li>
                    </ul>
                    <!--Language-->
                    <div class="language dropdown"><a class="btn btn-default dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" href="#"><span class="globe flaticon-world"></span>United State Office &nbsp;<span class="icon fa fa-angle-down"></span></a>
                        <ul class="dropdown-menu style-one" aria-labelledby="dropdownMenu2">
                            <li><a href="#">New York Office</a></li>
                            <li><a href="#">Berlin Office</a></li>
                            <li><a href="#">Dubai Office</a></li>
                            <li><a href="#">London Office</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!--Header-Upper-->
    <div class="header-upper">
        <div class="auto-container">
            <div class="clearfix">
                <div class="pull-left logo-box">
                    <div class="logo"><a href="{{ route('users.index') }}"><img style="width: 200px; height: 60px" src="{{ asset('assets/images/cck.png') }}" alt="" title=""></a></div>
                </div>
                <div class="pull-right upper-right">
                    
                    <!--Header Lower-->
                    <div class="header-lower">
                        <div class="clearfix">
                            <div class="nav-outer clearfix">
                                <!-- Main Menu -->
                                <nav class="main-menu navbar-expand-md">
                                    <div class="navbar-header">
                                        <!-- Toggle Button -->    	
                                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>
                                    
                                    <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                        <ul class="navigation clearfix">
                                            <li><a class="text-decoration-none" href="{{ route('users.index') }}">Home</a></li>
                                            <li><a class="text-decoration-none" href="{{ route('users.about') }}">About us</a></li>
                                            <li><a class="text-decoration-none" href="{{ route('users.blogs') }}">Blogs</a></li>
                                            <li><a class="text-decoration-none" href="{{ route('users.quote') }}">Quick Quote</a></li>
                                            <li><a class="text-decoration-none" href="{{ route('users.track') }}">Track & Trace</a></li>
                                            <li class="dropdown"><a class="text-decoration-none" href="#">Features</a>
                                                <ul>
                                                    <li><a class="text-decoration-none" href="{{ route('users.fleet') }}">Our Fleet</a></li>
                                                    <li><a  class="text-decoration-none"href="{{ route('users.services') }}">Offered Services</a></li>
                                                    <li><a class="text-decoration-none" href="{{ route('users.testimonials') }}">Testimonials</a></li>
                                                    
                                                </ul>
                                            </li>
                                            <li><a class="text-decoration-none" href="{{ route('users.contact') }}">Contact</a></li>
                                        </ul>
                                    </div>
                                </nav>
                                
                                <!-- Main Menu End-->
                                <div class="outer-box clearfix">
                                
                                    <!--Option Box-->
                                    <div class="option-box">
                                        
                                        <!--Search Box-->
                                        
                                        <div class="search-box-outer">
                                            
                                            <div class="dropdown">
                                                <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" 
                                                aria-haspopup="true" aria-expanded="false"><span class="flaticon-route"> <span style="font-size: 10px">Quick Track</span></span></button>
                                                
                                                <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
                                                    <li class="panel-outer">
                                                        <div class="form-container">
                                                            <form method="post" action="{{route('users.courier.index')}}">
                                                                @csrf
                                                                <div class="form-group">
                                                                    <input type="search" name="trackID" value="" placeholder="Track Your Shipment" required>
                                                                    <button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Header Lower-->
                    
                </div>
                
            </div>
            
        </div>
    </div>
    <!--End Header Upper-->
    
    <!--Sticky Header-->
    <div class="sticky-header">
        <div class="auto-container clearfix">
            <!--Logo-->
            <div class="logo pull-left">
                <a href="{{ route('users.index') }}" class="img-responsive"><img style="width: 200px; height: 60px" src="{{ asset('assets/images/cck.png') }}" alt="" title=""></a>
            </div>
            
            <!--Right Col-->
            <div class="right-col pull-right">
                <!-- Main Menu -->
                <nav class="main-menu navbar-expand-md">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    
                    <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent1">
                        <ul class="navigation clearfix">
                            <li><a class="text-decoration-none" href="{{ route('users.index') }}">Home</a></li>
                            <li><a class="text-decoration-none" href="{{ route('users.about') }}">About us</a></li>
                            <li><a class="text-decoration-none" href="{{ route('users.blogs') }}">Blogs</a></li>
                            <li><a class="text-decoration-none" href="{{ route('users.quote') }}">Quick Quote</a></li>
                            <li><a class="text-decoration-none" href="{{ route('users.track') }}">Track & Trace</a></li>
                            <li class="dropdown"><a class="text-decoration-none" href="#">Features<i class="fa fa-angle-down"></i></a>
                                <ul>
                                    <li><a class="text-decoration-none" href="{{ route('users.fleet') }}">Our Fleet</a></li>
                                    <li><a class="text-decoration-none" href="{{ route('users.services') }}">Offered Services</a></li>
                                    <li><a class="text-decoration-none" href="{{ route('users.testimonials') }}">Testimonials</a></li>
                                    
                                </ul>
                            </li>
                            <li><a class="text-decoration-none" href="{{ route('users.contact') }}">Contact</a></li>
                        </ul>
                    </div>
                </nav><!-- Main Menu End-->
            </div>
            
        </div>
    </div>
    <!--End Sticky Header-->

</header>