
<footer class="main-footer blue" style="background-image:url({{ asset('assets/images/background/7.png') }})">
    <div class="auto-container">
        <!--Widgets Section-->
        <div class="widgets-section">
            <div class="row clearfix">
                
                <!--Column-->
                <div class="big-column col-lg-6 col-md-12 col-sm-12">
                    <div class="row clearfix">
                    
                        <!--Footer Column-->
                        <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget logo-widget">
                                <h2><span class="icon fa fa-thumbs-o-up"></span>Useful Links</h2>
                                
                                <div class="row clearfix">
                                    <div class="column col-lg-6 col-md-6 col-sm-12">
                                        <ul class="footer-list">
                                            <li><a class="text-decoration-none" href="{{ route('users.about') }}">About us</a></li>
                                            <li><a class="text-decoration-none" href="{{ route('users.services') }}">Services</a></li>
                                            <li><a class="text-decoration-none" href="{{ route('users.blogs') }}">Latest blogs</a></li>
                                            <li><a class="text-decoration-none" href="{{ route('users.track') }}">Track & trace</a></li>
                                            <li><a class="text-decoration-none" href="{{ route('users.contact') }}">Contact us</a></li>
                                           
                                        </ul>
                                    </div>
                                    {{-- <div class="column col-lg-6 col-md-6 col-sm-12">
                                        <ul class="footer-list">
                                            <li><a href="#">Company</a></li>
                                            <li><a href="#">Latest jobs</a></li>
                                            <li><a href="#">Partners</a></li>
                                            <li><a href="#">Services</a></li>
                                            <li><a href="#">Blog post</a></li>
                                            <li><a href="#">Contact us</a></li>
                                        </ul>
                                    </div> --}}
                                </div>
                                
                            </div>
                        </div>
                        
                        <!--Footer Column-->
                        <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget news-widget">
                                <h2><span class="icon fa fa-bullhorn"></span>Recent News</h2>
                                
                                <!--News Widget Block-->
                                @foreach ($blogs as $blog)
                                <div class="news-widget-block">
                                    <div class="widget-inner">
                                        <div class="image">
                                           <a class="text-decoration-none" href="{{route('users.blog.details', encrypt($blog->id))}}"> <img src="{{asset('images/'.$blog->image)}}" alt="" /></a>
                                        </div>
                                        <h3><a class="text-decoration-none" href="{{route('users.blog.details', encrypt($blog->id))}}">{!! $blog->contents !!}</a></h3>
                                        <div class="post-date">{{ $blog->created_at }}</div>
                                    </div>
                                </div>
                                @endforeach
                               
                                
                                <!--News Widget Block-->
                                {{-- <div class="news-widget-block">
                                    <div class="widget-inner">
                                        <div class="image">
                                            <img src="{{ asset('assets/images/resource/news-image-2.jpg') }}" alt="" />
                                        </div>
                                        <h3><a href="blog-detail.html">How Shipments are reaching in record time around world</a></h3>
                                        <div class="post-date">Sept 26, 2018</div>
                                    </div>
                                </div> --}}
                               
                            </div>
                        </div>
                        
                    </div>
                </div>
                
                <!--Column-->
                <div class="big-column col-lg-6 col-md-12 col-sm-12">
                    <div class="row clearfix">
                    
                        <!--Footer Column-->
                        <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget mail-widget">
                                <h2><span class="icon fa fa-envelope-o"></span>Mailing List</h2>
                                <div class="text">Sign up for our mailing list to get latest updates and offers.</div>
                                <!-- Email Form -->
                                <div class="email-form">
                                    <form method="post" action="https://nauthemes.net/html/carga/quote.html">
                                        <div class="form-group clearfix">
                                            <input type="email" name="email" value="" placeholder="Email address">
                                            <button type="submit" class="theme-btn submit-btn"><span class="icon fa fa-check"></span></button>
                                        </div>
                                    </form>
                                </div>
                                <div class="text wid-notice">(No Spam, We Respect Your Privacy)</div>
                            </div>
                        </div>  
                        
                        <!--Footer Column-->
                        <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget about-widget">
                                <h2><span class="icon fa fa-user"></span>About Us</h2>
                                <div class="text">{!! $settings->about !!}</div>
                                <div class="phone-number">{{ $settings->site_phone }}</div>
                                <div class="about-email">{{ $settings->site_email }}</div>
                                <!--Social Box-->
                                <ul class="social-icon-one">
                                    <li><a href="{{ $settings->twitter }}"><span class="fa fa-twitter"></span></a></li>
                                    <li><a href="{{ $settings->facebook }}"><span class="fa fa-facebook"></span></a></li>
                                    <li><a href="{{ $settings->linkedIn }}"><span class="fa fa-linkedin"></span></a></li>
                                    {{-- <li><a href="#"><span class="fa fa-google-plus"></span></a></li> --}}
                                    <li><a href="{{ $settings->instagram }}"><span class="fa fa-instagram"></span></a></li>
                                    {{-- <li><a href="#"><span class="fa fa-youtube"></span></a></li> --}}
                                </ul>
                            </div>
                        </div>
                        
                    </div>
                </div>
                
            </div>
        </div>
    </div>
        
    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="copyright">{{ $settings->site_name }}&copy; 2024 / ALL RIGHTS RESERVED</div>
    </div>
    
</footer>