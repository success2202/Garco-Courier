<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from themepixels.me/demo/cassie/pages/dashboard-one.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Oct 2024 23:35:36 GMT -->
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 4 Dashboard and Admin Template">
    <meta name="author" content="ThemePixels">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('backend/img/favicon.png') }}">

    <title>Cassie Responsive Bootstrap 4 Dashboard and Admin Template</title>

    <!-- vendor css -->
    <link href="{{ asset('lib/%40fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/jqvmap/jqvmap.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('backend/vendors/dataTable/dataTables.min.css')}}" type="text/css">

    <link rel="stylesheet" href="{{asset('backend/vendors/clockpicker/bootstrap-clockpicker.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('backend/vendors/datepicker/daterangepicker.css')}}">
    <link rel="stylesheet" href="{{asset('backend/vendors/slick/slick.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('backend/vendors/slick/slick-theme.css')}}" type="text/css">

    <script src="https://cdn.ckeditor.com/4.22.1/full/ckeditor.js"></script>
    <!-- template css -->
    <link rel="stylesheet" href="{{ asset('backend/css/cassie.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    
    @stack('styles')
  </head>
  <body>

   @include('admin.layouts.sidebar')

    <div class="content content-page">

    @include('admin.layouts.header')

    <div class="main-content">
      <div class="page-header mt-4">
          <div class="container-fluid d-sm-flex justify-content-between">
              <h4></h4>
              <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item">
                          <a href="{{route('admin.index')}}">Dashboard</a>
                      </li>
                      <li class="breadcrumb-item active" aria-current="page">{{$breadcrumb}}</li>
                  </ol>
              </nav>
          </div>
      </div>


    @yield('content') 

    <footer>
      <div class="container-fluid mt-3" style="text-align: center">
          <div>© 2024 GARCO, All Rights Reserved</a></div>
          <div>
              
          </div>
      </div>
  </footer>
      <!-- end::footer -->

  </div>
    </div><!-- content -->

    <script src="{{ asset('lib/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('lib/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('lib/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('lib/js-cookie/js.cookie.js') }}"></script>
    <script src="{{ asset('lib/chart.js/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('lib/jquery.flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('lib/jquery.flot/jquery.flot.stack.js') }}"></script>
    <script src="{{ asset('lib/jquery.flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('lib/jquery.flot/jquery.flot.threshold.js') }}"></script>
    <script src="{{ asset('lib/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('lib/jqvmap/maps/jquery.vmap.world.js') }}"></script>

    <!-- Datepicker -->
    <script src="{{asset('backend/vendors/datepicker/daterangepicker.js')}}"></script>
    <script src="{{asset('backend/vendors/clockpicker/bootstrap-clockpicker.min.js')}}"></script>

    <!-- Circle progress -->
    <script src="{{asset('backend/vendors/circle-progress/circle-progress.min.js')}}"></script>

    <script src="{{ asset('backend/js/cassie.js') }}"></script>
    <script src="{{ asset('backend/js/flot.sampledata.js') }}"></script>
    <script src="{{ asset('backend/js/vmap.sampledata.js') }}"></script>
    <script src="{{ asset('backend/js/dashboard-one.js') }}"></script>


    <script>
        CKEDITOR.replace( 'summernote' );
    </script>

    @yield('script')
  </body>

<!-- Mirrored from themepixels.me/demo/cassie/pages/dashboard-one.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Oct 2024 23:36:06 GMT -->
</html>
