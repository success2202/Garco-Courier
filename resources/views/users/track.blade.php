@extends('layouts.base')
@section('content')

<!--Page Title-->
<section class="page-title" style="background-image:url({{ asset('assets/images/background/12.jpg') }});">
    <div class="auto-container">
        <h2>Track & Trace</h2>
        <div class="separater"></div>
    </div>
</section>

<!--Breadcrumb-->
<div class="breadcrumb-outer">
    <div class="auto-container">
        <ul class="bread-crumb text-center">
            <li><a href="{{ route('users.index') }}">Home</a> <span>/</span></li>
            <li>Track & Trace</li>
        </ul>
    </div>
</div>
<!--End Page Title-->

<!--Sidebar Page Container-->
<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">
            
            <!--Content Side-->
            <div class="content-side col-lg-9 col-md-12 col-sm-12">
                <div class="track-section">
                    <!-- Sec Title Two -->
                    <div class="sec-title-two sec-title">
                        <h2>Track & <span>Trace Shipment</span></h2>
                        <div class="separater"></div>
                    </div>
                    
                    <!-- Quote Form Box -->
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
                            </div>
                        </form>
                    </div>
                    
                    <!-- Track Form -->
                    <div class="track-form-two">
                        <form method="post" action="{{route('users.courier.index')}}">
                            @csrf
                            <div class="form-group">
                                <label>Enter Tracking Number Here</label>
                            </div>
                            <div class="form-group">
                                <input type="text" name="trackID" placeholder="Enter your tracking number e.g GAR-11-XXXX">
                                <button type="submit" class="theme-btn submit-btn">Track Your Shipment</button>
                            </div>
                        </form>
                    </div>
                    
                    <!-- Tracking Info -->
                    @if (isset($tracking))
                        
                    
                </article>
                    <section class="pt-50 pb-120 tracking-wrap">    
                        <div class="theme-container container ">                   

                    
                            <div class="position-fixed top-0 end-0 p-3" style="z-index: 11">
                                <div id="successToast" class="toast align-items-center text-bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true">
                                    <div class="d-flex">
                                        <div class="toast-body">
                                            Successfully Retrieved!
                                        </div>
                                        <button type="button" class="btn-close  me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                                    </div>
                                </div>
                            </div>
                            
                            
                       
                    </div>
                    <div style="margin:20px; 0px 40px 0px">
                    <div class="progress-wrap">
                        
                    <div class="container my-5">
                        <div class="progress" style="height: 30px;">
                            @if($tracking->status == 'CREATED')
                            <div class="progress-bar progress-bar-striped bg-secondary" role="progressbar" style="width: 20%; text-align:center" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                Order Placed
                            </div>
                            <div class="progress-bar"  role="progressbar" style="width: 20%; text-align:center; background-color:#eee4e4" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                            </div>
                            <div class="progress-bar"  role="progressbar" style="width: 20%; text-align:center; background-color:#eee4e4" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                            </div>
                            <div class="progress-bar"  role="progressbar" style="width: 20%; text-align:center; background-color:#eee4e4" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                            </div>
                            <div class="progress-bar"  role="progressbar" style="width: 20%; text-align:center; background-color:#eee4e4" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                             </div>

                             @elseif($tracking->status == 'IN_PROCESS') 
                             <div class="progress-bar progress-bar-striped bg-primary" role="progressbar" style="width: 20%; text-align:center" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                 Order Placed
                             </div>
                             <div class="progress-bar progress-bar-striped bg-secondary" role="progressbar" style="width: 30%; text-align:center" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                 Processing
                             </div>
                             <div class="progress-bar"  role="progressbar" style="width: 20%; text-align:center; background-color:#eee4e4" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                            </div>
                             <div class="progress-bar"  role="progressbar" style="width: 20%; text-align:center; background-color:#eee4e4" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                             </div>
                             <div class="progress-bar"  role="progressbar" style="width: 20%; text-align:center; background-color:#eee4e4" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                
                             </div>


                            @elseif($tracking->status == 'SHIPPED') 
                            <div class="progress-bar progress-bar-striped bg-primary" role="progressbar" style="width: 20%; text-align:center" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                Order Placed
                            </div>
                            <div class="progress-bar progress-bar-striped bg-primary" role="progressbar" style="width: 30%; text-align:center" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                Processing
                            </div>
                            <div class="progress-bar progress-bar-striped bg-secondary" role="progressbar" style="width: 20%; text-align:center" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                Shipped
                            </div>
                            <div class="progress-bar"  role="progressbar" style="width: 20%; text-align:center; background-color:#eee4e4" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                               
                            </div>
                            <div class="progress-bar"  role="progressbar" style="width: 20%; text-align:center; background-color:#eee4e4" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                               
                            </div>
                            @elseif($tracking->status == 'IN_TRANSIT') 
                            <div class="progress-bar progress-bar-striped bg-primary" role="progressbar" style="width: 20%; text-align:center" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                Order Placed
                            </div>
                            <div class="progress-bar progress-bar-striped bg-primary" role="progressbar" style="width: 30%; text-align:center" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                Processing
                            </div>
                            <div class="progress-bar progress-bar-striped bg-primary" role="progressbar" style="width: 20%; text-align:center" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                Shipped
                            </div>
                            <div class="progress-bar progress-bar-striped bg-secondary" role="progressbar" style="width: 20%; text-align:center" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                In Transit
                            </div>
                            <div class="progress-bar"  role="progressbar" style="width: 20%; text-align:center; background-color:#eee4e4" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                               
                            </div>
                                @elseif($tracking->status == 'ON_HOLD') 
                                    <div class="progress-bar progress-bar-striped bg-primary" role="progressbar" style="width: 20%; text-align:center" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                        Order Placed
                                    </div>
                                    <div class="progress-bar progress-bar-striped bg-primary" role="progressbar" style="width: 30%; text-align:center" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                        Processing
                                    </div>
                                    <div class="progress-bar progress-bar-striped bg-primary" role="progressbar" style="width: 20%; text-align:center" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                        Shipped
                                    </div>
                                    <div class="progress-bar progress-bar-striped bg-primary" role="progressbar" style="width: 20%; text-align:center" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                        In Transit
                                    </div>
                                    <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 20%; text-align:center" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                        On Hold
                                    </div>
                                    <div class="progress-bar"  role="progressbar" style="width: 20%; text-align:center; background-color:#eee4e4" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                       
                                    </div>
                                @endif
                        </div>
                        <div class="d-flex justify-content-between">
                            <span>Order Placed</span>
                            <span>Processing</span>
                            <span>Shipped</span>
                            <span>In Transit</span>
                            @if ($tracking->status == "ON_HOLD")
                                <span>On Hold</span> 
                            @endif
                           
                            <span>Delivered</span>
                        </div>
                    </div>

                        <div class="row progress-content upper-text">
                            <div class="col-md-2 col-xs-8 col-sm-2">
                                <p class="fs-12 no-margin"> Departed from </p>
                                <h4 class="title-1 no-margin">{{$tracking->courier->origin}}</h4>
                            </div>
                            <div class="col-md-3 col-xs-8 col-sm-3">
                                <p class="fs-12 no-margin"> [ <b class="black-clr">
                                    
                                   Departure Date: {{$tracking->courier->departure_date}}
                                  
                                
                                </b> ] </p>                                
                            </div>
                            <div class="col-md-3 col-xs-8 col-sm-4 text-center">
                                <p class="fs-12 no-margin"> currently city </p>
                                <h4 class="title-1 no-margin">{{$tracking->current_city}}</h2>
                            </div>
                            <div class="col-md-2 col-xs-8 col-sm-1 no-pad">
                                <p class="fs-12 no-margin"> [ <b class="black-clr"> Arrival Date: {{$tracking->courier->pick_date}} </b> ] </p>                                
                            </div>
                            <div class="col-md-2 col-xs-8 col-sm-2 text-right">
                                <p class="fs-12 no-margin"> Destination </p>
                                <h4 class="title-1 no-margin">{{$tracking->courier->destination}}</h4>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="row">
                        <div class="col-md-12 pad-30 wow fadeInRight" data-wow-offset="50" data-wow-delay=".30s"> 
                            <div class="row">
                                <div class="col-md-5">
                                    <h3>Sender Information</h3>
                                    <ul>
                                        <li>
                                        
                                          <span class="fs-16">{{$tracking->courier->sender_name}}</span> <br>
                                           <span class="fs-16">{{$tracking->courier->sender_email}}</span> <br>
                                            <span class="fs-16">{{$tracking->courier->sender_phone}}</span> <br>
                                           <span class="fs-16">{{$tracking->courier->sender_address}}</span> <br>
                                        </li>
                                    </ul>
                                </div>
        
                                <div class="col-md-5">
                                    <h3> Reciever Information</h3>
                                    <ul>
                                        <li>
                                        
                                          <span class="fs-16">{{$tracking->courier->receiver_name}}</span> <br>
                                           <span class="fs-16">{{$tracking->courier->receiver_email}}</span> <br>
                                            <span class="fs-16">{{$tracking->courier->receiver_phone}}</span> <br>
                                           <span class="fs-16">{{$tracking->courier->receiver_address}}</span> <br>
                                        </li>
                                    </ul>
        
                                </div>
                                <div class="col-md-2">
                                    @if(isset($tracking->courier->images))
                                    @foreach (json_decode($tracking->courier->images) as $ss)
                                
                                    <img alt="" src="{{asset('images/'.$ss)}}"  max-height="120px"/>  
                                    @endforeach
                                    @endif
                                </div>
                            </div>
                          
                    <div class="row">
                        {{-- <div class="col-md-4 pad-30 wow fadeInLeft" data-wow-offset="50" data-wow-delay=".30s" style="background:#0000001b"> 
                           
                        </div> --}}
                            <div class="col-11 mt-5 table-responsive-sm">
                                <h5>  <i> SHIPMENT INFORMATION </i></h5>
                            <table class="table table-striped table-hover table-sm">
                            <thead>
                                <tr>
                                <th>Product Name</th>
                                <th>Ref No.</th>
                                <th>Current Status</th>
                                <th>Origin</th>
                                <th>Destination</th>
                                <th>Departure Date</th>
                                <th>Arrival Date</th>
                                <th>Package</th>
                                <th>Weight</th>
                                <th>Delivery Charges</th>
                                <th>Payment</th>
                                <th>Frieght</th>
                            </tr>
                            </thead> 
                            <tbody>
                                
                                <tr>
                                <td>{{$tracking->courier->product}} </td>
                                <td>{{$tracking->courier->invoice_id}} </td>
                                
                                <td style="font-weight: 400; color:black"> @if($tracking->status == 'CREATED') <span class=" bg-primary p-1">CREATED  </span> 
                                    @elseif($tracking->status == 'SHIPPED') <span class=" bg-info p-1">SHIPPED  </span>
                                    @elseif($tracking->status == 'IN_TRANSIT') <span class=" bg-secondary p-1">IN TRANSIT  </span>
                                    @elseif($tracking->status == 'IN_PROCESS') <span class=" bg-info p-1">ON PROCESS  </span>
                                    @elseif($tracking->status == 'ON_HOLD') <span class=" bg-danger p-1">ON HOLD  </span>
                                    @elseif($tracking->status == 'CANCELLED') <span class=" bg-danger p-1">CANCELLED  </span>@endif </td>
                                    <td>{{$tracking->courier->origin}} </td>
                                    <td>{{$tracking->courier->destination}} </td>
                                    <td>{{$tracking->courier->departure_date}} </td>
                                    <td>{{$tracking->courier->pick_date}} </td>
                                    <td>{{$tracking->courier->type}} </td>
                                    <td>{{$tracking->courier->weight}} </td>
                                    <td>{{$tracking->courier->amount}} </td>
                                    <td>{{$tracking->courier->payment}} </td>
                                    <td>{{$tracking->courier->frieght}} </td>
                                
                                </tr>    
                               
                            </tbody> 
                            </table>
                        </div>
                    </div>

                    <div class="row mt-2">
                    {{-- <div class="col-md-4 pad-30 wow fadeInLeft" data-wow-offset="50" data-wow-delay=".30s" style="background:#0000001b"> 
                       
                    </div> --}}
                        <div class="col-12 table-responsive-sm">
                            <h5>  <i> SHIPMENT HISTORY </i></h5>
                        <table class="table table-striped table-hover table-sm">
                        <thead>
                            <tr>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Location</th>
                            <th>Status</th>
                            {{-- <th>Remarks</th> --}}
                        </tr>
                        </thead> 
                        <tbody>
                            @foreach ($tracking->trackHistory as $tracks)
                            <tr>
                            <td>{{$tracks->date}} </td>
                            <td>{{$tracks->time}} </td>
                            <td>{{$tracks->location}} </td>
                            <td>{{$tracks->status}} </td>
                            {{-- <td>{{$tracks->remarks}} </td> --}}
                            </tr>    
                            @endforeach  
                        </tbody> 
                        </table>
                    </div>
                </div>
                </div>
            </div>
                </div>
            </div>
            @endif
            </div>
        </section>
    </article>
            <!--Sidebar Side-->
           
            
        </div>
    </div>
</div>
@endsection

@push('scripts')

<script>

$('#sender').on('click', function() {
    document.getElementById('details').hidden = false;
})
$('#btn').on('click', function(){
    $('#btn').html("<button class=\"btn-1\"> Please wait ....</button>")
});


document.addEventListener("DOMContentLoaded", function() {
    const toastElement = document.getElementById('successToast');
    const toast = new bootstrap.Toast(toastElement);
    toast.show();
});

</script>
@endpush