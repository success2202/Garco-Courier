@extends('layouts.base')
@section('content')

<!--Page Title-->
<section class="page-title" style="background-image:url({{ asset('assets/images/background/12.jpg') }});">
    <div class="auto-container">
        <h2>Our Fleet</h2>
        <div class="separater"></div>
    </div>
</section>

<!--Breadcrumb-->
<div class="breadcrumb-outer">
    <div class="auto-container">
        <ul class="bread-crumb text-center">
            <li><a href="{{ route('users.index') }}">Home</a> <span>/</span></li>
            <li>Our Fleet</li>
        </ul>
    </div>
</div>
<!--End Page Title-->

<!-- Fleet Section -->
<section class="fleet-section">
    <div class="auto-container">
        <div class="row clearfix">
            
            <!-- Fleet Block -->
            <div class="fleet-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image">
                        <a href="#"><img src="{{ asset('assets/images/resource/fleet-1.jpg') }}" alt="" /></a>
                    </div>
                    <div class="lower-content">
                        <h3><a href="#">Air Freight Shipment</a></h3>
                        <ul class="fleet-list">
                            <li><span>Capacity:</span>650 Tons</li>
                            <li><span>Avg Duration:</span>02 Days</li>
                            <li><span>Safety:</span>98%</li>
                            <li><span>Model:</span>2017</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Fleet Block -->
            <div class="fleet-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image">
                        <a href="#"><img src="{{ asset('assets/images/resource/fleet-2.jpg') }}" alt="" /></a>
                    </div>
                    <div class="lower-content">
                        <h3><a href="#">Sea Freight Shipment</a></h3>
                        <ul class="fleet-list">
                            <li><span>Capacity:</span>1950 Tons</li>
                            <li><span>Avg Duration:</span>09 Days</li>
                            <li><span>Safety:</span>88%</li>
                            <li><span>Model:</span>2012</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Fleet Block -->
            <div class="fleet-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image">
                        <a href="#"><img src="{{ asset('assets/images/resource/fleet-3.jpg') }}" alt="" /></a>
                    </div>
                    <div class="lower-content">
                        <h3><a href="#">Truck Freight Shipment</a></h3>
                        <ul class="fleet-list">
                            <li><span>Capacity:</span>68 Tons</li>
                            <li><span>Avg Duration:</span>02 Days</li>
                            <li><span>Safety:</span>91%</li>
                            <li><span>Model:</span>2015</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Fleet Block -->
            <div class="fleet-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image">
                        <a href="#"><img src="{{ asset('assets/images/resource/fleet-4.jpg') }}" alt="" /></a>
                    </div>
                    <div class="lower-content">
                        <h3><a href="#">Train Freight Shipment</a></h3>
                        <ul class="fleet-list">
                            <li><span>Capacity:</span>1650 Tons</li>
                            <li><span>Avg Duration:</span>05 Days</li>
                            <li><span>Safety:</span>97%</li>
                            <li><span>Model:</span>2002</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Fleet Block -->
            <div class="fleet-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image">
                        <a href="#"><img src="{{ asset('assets/images/resource/fleet-5.jpg') }}" alt="" /></a>
                    </div>
                    <div class="lower-content">
                        <h3><a href="#">Air Freight Shipment</a></h3>
                        <ul class="fleet-list">
                            <li><span>Capacity:</span>950 Tons</li>
                            <li><span>Avg Duration:</span>2 Days</li>
                            <li><span>Safety:</span>98%</li>
                            <li><span>Model:</span>2011</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Fleet Block -->
            <div class="fleet-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image">
                        <a href="#"><img src="{{ asset('assets/images/resource/fleet-6.jpg') }}" alt="" /></a>
                    </div>
                    <div class="lower-content">
                        <h3><a href="#">Sea Freight Shipment</a></h3>
                        <ul class="fleet-list">
                            <li><span>Capacity:</span>1650 Tons</li>
                            <li><span>Avg Duration:</span>12 Days</li>
                            <li><span>Safety:</span>98%</li>
                            <li><span>Model:</span>2009</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Fleet Block -->
            <div class="fleet-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image">
                        <a href="#"><img src="{{ asset('assets/images/resource/fleet-7.jpg') }}" alt="" /></a>
                    </div>
                    <div class="lower-content">
                        <h3><a href="#">Truck Freight Shipment</a></h3>
                        <ul class="fleet-list">
                            <li><span>Capacity:</span>96 Tons</li>
                            <li><span>Avg Duration:</span>02 Days</li>
                            <li><span>Safety:</span>98%</li>
                            <li><span>Model:</span>2020</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Fleet Block -->
            <div class="fleet-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image">
                        <a href="#"><img src="{{ asset('assets/images/resource/fleet-6.jpg') }}" alt="" /></a>
                    </div>
                    <div class="lower-content">
                        <h3><a href="#">Sea Freight Shipment</a></h3>
                        <ul class="fleet-list">
                            <li><span>Capacity:</span>1950 Tons</li>
                            <li><span>Avg Duration:</span>06 Days</li>
                            <li><span>Safety:</span>86%</li>
                            <li><span>Model:</span>2003</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Fleet Block -->
            <div class="fleet-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image">
                        <a href="#"><img src="{{ asset('assets/images/resource/fleet-8.jpg') }}" alt="" /></a>
                    </div>
                    <div class="lower-content">
                        <h3><a href="#">Truck Freight Shipment</a></h3>
                        <ul class="fleet-list">
                            <li><span>Capacity:</span>89 Tons</li>
                            <li><span>Avg Duration:</span>02 Days</li>
                            <li><span>Safety:</span>98%</li>
                            <li><span>Model:</span>2015</li>
                        </ul>
                    </div>
                </div>
            </div>
            
        </div>
        
        <!--Styled Pagination-->
        <ul class="styled-pagination text-center">
            <li class="prev"><a href="#"><span class="fa fa-angle-left"></span></a></li>
            <li><a href="#">1</a></li>
            <li><a href="#" class="active">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li class="next"><a href="#"><span class="fa fa-angle-right"></span></a></li>
        </ul>                
        <!--End Styled Pagination-->
        
    </div>
</section>
<!-- End Fleet Section -->

@endsection