<!DOCTYPE html>
<html>

<!-- Mirrored from nauthemes.net/html/carga/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Oct 2024 09:12:16 GMT -->
<head>
<meta charset="utf-8">
<title>Carga HTML Template | Home Page</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<!-- Stylesheets -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

<link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">
<link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
<link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">

<link rel="stylesheet" type="text/css" href="{{asset('/assets/plugins/bootstrap-3.3.6/css/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css"
href="{{asset('assets/plugins/bootstrap-select-1.10.0/dist/css/bootstrap-select.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/font-awesome-4.6.1/css/font-awesome.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/font-elegant/elegant.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/owl.carousel.2/assets/owl.carousel.css')}}">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">


	
  
  
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">


<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->

<style>
	.whatsapp-button {
	  position: fixed;
	  bottom: 15px;
	  right: 65px;
	  background-color: #25D366; /* WhatsApp Green */
	  color: white;
	  padding: 10px 15px;
	  border-radius: 50px;
	  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
	  font-size: 18px;
	  display: flex;
	  align-items: center;
	  text-decoration: none;
	  z-index: 1000;
	}
  
	.whatsapp-button i {
	  margin-right: 10px;
	  font-size: 24px;
	}
  
	.whatsapp-button:hover {
	  background-color: #128C7E; /* Darker WhatsApp Green */
	}
  </style>

@stack('styles')
</head>

<body class="hidden-bar-wrapper">

<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
 	<!-- Main Header-->
   @include('layouts.header')
    <!--End Main Header -->
	
	<!--Banner Section-->
  @yield('content')
	
	<!--Main Footer-->
    @include('layouts.footer')
	<a href="https://wa.me/15551234567" target="_blank" class="whatsapp-button text-decoration-none">
        <i class="fab fa-whatsapp"></i> Chat with us on WhatsApp
      </a>
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>

<script src="{{ asset('assets/js/jquery.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.fancybox.js') }}"></script>
<script src="{{ asset('assets/js/appear.js') }}"></script>
<script src="{{ asset('assets/js/owl.js') }}"></script>
<script src="{{ asset('assets/js/wow.js') }}"></script>
<script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
<script src="{{ asset('assets/js/script.js') }}"></script>


<script src="{{asset('assets/plugins/bootstrap-3.3.6/js/bootstrap.min.js')}}" type="text/javascript"></script>    
	<script src="{{asset('assets/plugins/bootstrap-select-1.10.0/dist/js/bootstrap-select.min.js')}}" type="text/javascript"></script>    
	<script src="{{asset('assets/plugins/owl.carousel.2/owl.carousel.min.js')}}" type="text/javascript"></script>   
	<script src="{{asset('assets/js/jquery.sticky.js')}}"></script>
	<script src="{{asset('assets/plugins/WOW-master/dist/wow.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('assets/plugins/data.binder.js/data.binder.js')}}" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
@stack('scripts')
</body>

<!-- Mirrored from nauthemes.net/html/carga/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Oct 2024 09:12:21 GMT -->
</html>