<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from themepixels.me/demo/cassie/pages/page-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Oct 2024 23:36:36 GMT -->
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 4 Dashboard and Admin Template">
    <meta name="author" content="ThemePixels">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('backend/img/favicon.png') }}">

    <title>Garco Courier Services </title> 


    <!-- vendor css -->
    <link href="{{ asset('lib/%40fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">

    <!-- template css -->
    <link rel="stylesheet" href="{{ asset('backend/css/cassie.css') }}">

    <style>
        .sett{
            align-items: left !important;
        }

    </style>
  </head>
  <body>

    <div class="sett">
    <div class="signin-panel ">
      <svg-to-inline path="{{ asset('backend/svg/citywalk.svg') }}" class-Name="svg-bg"></svg-to-inline>

      <div class="signin-sidebar">
        <div class="signin-sidebar-body">
          <a href="dashboard-one.html" class="sidebar-logo mg-b-40"><span>DARCO</span></a>
          <h4 class="signin-title">Welcome back!</h4>
          <h5 class="signin-subtitle">Please signin to continue.</h5>

          <div class="signin-form">
            <form action="{{ route('login') }}" method="post">
              @csrf

            <div class="form-group">  
              <label>Email address</label>
              <input type="email" name="email" class="form-control" placeholder="Enter your email address" 
              autocomplete="name" required autofocus> @error('email') <span class="text-danger mt-3"> {{ $message }}</span>  @enderror
            </div>

            <div class="form-group">
              <label class="d-flex justify-content-between">
                <span>Password</span>
                <a href="#" class="tx-13">Forgot password?</a>
              </label>
              <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password"
               autocomplete="correct password" required>
               <span class="toggle-password" onclick="togglePassword()">
                👁️
              </span>
              @error('password') <span class="text-danger mt-3"> {{ $message }}</span>  @enderror
              
      
              
            
            </div>

            <div class="form-group d-flex mg-b-0">
              <button type="submit" class="btn btn-brand-01 btn-uppercase flex-fill">Sign In</button>
              <a href="{{ route('register') }}" class="btn btn-white btn-uppercase flex-fill mg-l-10">Sign Up</a>
            </div>

            <div class="divider-text mg-y-30">Or</div>

            <a href="dashboard-one.html" class="btn btn-facebook btn-uppercase btn-block">Login with Facebook</a>
          </form>
          </div>
       
          <p class="mg-t-auto mg-b-0 tx-sm tx-color-03">By signing in, you agree to our <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a></p>
        
        
        </div><!-- signin-sidebar-body -->
    
      </div><!-- signin-sidebar -->
    </div><!-- signin-panel -->
</div>


    <script src="{{ asset('lib/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('lib/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>

    <script>
      $(function(){

        'use strict'

        feather.replace();

        new PerfectScrollbar('.signin-sidebar', {
          suppressScrollX: true
        });

      })
    </script>
    <script src="{{ asset('backend/js/svg-inline.js') }}"></script>

    <script>
      function togglePassword() {
        const passwordField = document.getElementById("password");
        const icon = document.querySelector(".toggle-password");
        if (passwordField.type === "password") {
          passwordField.type = "text";
          icon.textContent = "🙈"; // Change icon when shown
        } else {
          passwordField.type = "password";
          icon.textContent = "👁️"; // Change icon when hidden
        }
      }
    </script>
  </body>

<!-- Mirrored from themepixels.me/demo/cassie/pages/page-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Oct 2024 23:36:37 GMT -->
</html>
