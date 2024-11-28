@extends('layouts.base')
@section('content')

<!--Page Title-->
<section class="page-title" style="background-image:url({{ asset('assets/images/background/12.jpg') }});">
    <div class="auto-container">
        <h2>Offered Services</h2>
        <div class="separater"></div>
    </div>
</section>

<!--Breadcrumb-->
<div class="breadcrumb-outer">
    <div class="auto-container">
        <ul class="bread-crumb text-center">
            <li><a href="{{ route('users.index') }}">Home</a> <span>/</span></li>
            <li>Services</li>
        </ul>
    </div>
</div>
<!--End Page Title-->

<section class="services-section page-view red">
    <div class="auto-container">
        <div class="row clearfix">
            @foreach ( $services as $service )
                   <!-- Services Block Two -->
            <div class="services-block-two col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="icon-box">
                        
                       <a href="{{ route('users.service.details', encrypt($service->id)) }}"> <img alt="" src="{{asset('images/'.$service->images)}}"> </a>
                    </div>
                    <h2><a class="text-decoration-none" href="{{ route('users.service.details', encrypt($service->id)) }}">{{ $service->title }}</a></h2>
                    <div class="text"> {!! $service->contents !!} </div>
                    <a href="{{ route('users.service.details', encrypt($service->id)) }}" class="read-more">Read more</a>
                </div>
            </div>
            
            @endforeach
         
      
            
        </div>
        
        <!--Styled Pagination-->
        {{-- <ul class="styled-pagination text-center">
            <li class="prev"><a href="#"><span class="fa fa-angle-left"></span></a></li>
            <li><a href="#">1</a></li>
            <li><a href="#" class="active">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li class="next"><a href="#"><span class="fa fa-angle-right"></span></a></li>
        </ul>                 --}}
        <!--End Styled Pagination-->
        
    </div>
</section>

@endsection