<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from themepixels.me/demo/cassie/pages/page-signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Oct 2024 23:36:37 GMT -->
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 4 Dashboard and Admin Template">
    <meta name="author" content="ThemePixels">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicon.png">

    <title>Garco Courier Services</title>

    <!-- vendor css -->
    <link href="{{ asset('lib/%40fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">

    <!-- template css -->
    <link rel="stylesheet" href="{{ asset('backend/css/cassie.css') }}">

  </head>
  <body>

    <div class="signup-panel">
      <svg-to-inline path="{{ asset('backend/svg/directions.svg') }}" class-Name="svg-bg"></svg-to-inline>

      <div class="signup-sidebar">
        <div class="signup-sidebar-body">
          
          <a href="dashboard-one.html" class="sidebar-logo mg-b-40"><span>Garco</span></a>
          <h4 class="signup-title">Create New Account!</h4>
          <h5 class="signup-subtitle">It's free and only takes a minute.</h5>
          
          <div class="signup-form">
            <form action="{{route('register')}}" method="post">
              @csrf
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                    
                  <label>Full Name</label>
                  <input type="text" class="form-control" name="name"  :value="old('name')"  placeholder="Enter your Name"
                 required="" autofocus=""> @error('name') <span class="text-danger mt-3"> {{ $message }}</span>  @enderror
                </div>
              </div><!-- col -->
            </div><!-- row -->

            <div class="row mg-b-5">
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Email address</label>
                  <input type="email" name="email" :value="old('email')" class="form-control" placeholder="Enter your email" 
                    required=""> @error('email') <span class="text-danger mt-3"> {{ $message }}</span>  @enderror
                </div>
              </div><!-- col -->
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" name="password"  class="form-control" placeholder="Enter your password"
                   required="" autocomplete="new-password"> @error('password') <span class="text-danger mt-3"> {{ $message }}</span>  @enderror
                </div>
              </div><!-- col -->
            </div><!-- row -->

            <div class="form-group mg-b-30">
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="agree">
                <label class="custom-control-label tx-sm" for="agree">I have read and agree to your <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a></label>
              </div>
            </div>
            <div class="form-group d-flex mg-b-0">
              <button type="submit" class="btn btn-brand-01 btn-uppercase btn-block">Create New Account</button>
            </div>
          </form> 

            <div class="divider-text mg-y-30">Or signup with</div>

            <div class="d-flex">
              <a href="dashboard-one.html" class="btn btn-facebook btn-uppercase flex-fill">Facebook</a>
              <a href="dashboard-one.html" class="btn btn-twitter btn-uppercase flex-fill mg-l-10">Twitter</a>
              <a href="dashboard-one.html" class="btn btn-danger btn-uppercase flex-fill mg-l-10">Google</a>
            </div>
          
          </div>

          <p class="mg-t-auto mg-b-0 tx-color-03">Already have an account? <a href="{{ route('login') }}">Signin</a></p>
        
        
        </div><!-- signup-sidebar-body -->
      
      </div><!-- signup-sidebar -->
    </div><!-- signup-panel -->

    <script src="{{ asset('lib/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('lib/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('lib/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>

    <script>
      $(function(){

        'use strict'

        feather.replace();

        new PerfectScrollbar('.signup-sidebar', {
          suppressScrollX: true
        });

      })
    </script>
    <script src="{{ asset('backend/js/svg-inline.js') }}"></script>
  </body>

<!-- Mirrored from themepixels.me/demo/cassie/pages/page-signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Oct 2024 23:36:37 GMT -->
</html>
