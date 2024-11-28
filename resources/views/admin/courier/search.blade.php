
@extends('admin.layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
             <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h6 class="card-title">Shipping Information</h6>
                        <div>
                            @if (session()->has('message'))
                            <div class="alert alert-danger" style="width: 600px">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                               <p style="text-align: center; font-size: 13px;"> {{ session()->get('message') }} </p> 
                            </div>
                                
                            @endif
                         
                           
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-12" style="overflow:scroll">
                         <div class="table-" >
                                <table id="myTable" class="table table-striped table-bordered">
                                   <thead>
                                    <tr>
                                        <th>product</th>
                                        <th>Images</th>
                                         <th>weight</th>
                                         <th>amount</th>
                                         <th>Fee</th>
                                         <th>size</th>
                                          <th>type</th>
                                          <th>invoice_id</th>
                                          <th>sender name</th>
                                           <th>sender email</th>
                                           <th>sender phone</th>
                                           <th>sender address</th>
                                            <th>receiver name</th>
                                            <th>receiver email</th>
                                            <th>receiver phone</th>
                                             <th>receiver address</th>
                                             <th>Pickup date</th>
                                            <th>departure_date</th>
                                            <th>Origin Address</th>
                                            <th>Destination Address</th>
                                            {{-- <th>mode</th> --}}
                                             <th>qty</th>
                                             <th>frieght</th>
                                             <th>Tracking ID</th>
                                            <th>created_at</th>
                                            <th>Update</th>
                                           
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                          
                                        @if(count($searchDetails) > 0)
                                @foreach ($searchDetails as  $sd)
                                    <tr>
                                    
                                        <td>
                                            {{$sd->product}}
                                        </td>      
                                        <td>
                                             @if(isset($sd->images))
                                             @foreach (json_decode($sd->images) as $ss)
                                             <img src="{{asset('images/'.$ss)}}" width="100px">    
                                             @endforeach
                                             @endif
                                        </td>  

                                        <td>
                                            {{$sd->weight}}
                                        </td>  

                                        <td>
                                            ${{$sd->amount}}
                                        </td>  

                                        <td>
                                            {{$sd->payment}}
                                        </td>

                                        <td>
                                            {{$sd->size}}
                                        </td>  

                                        <td>
                                            {{$sd->type}}
                                        </td>  

                                        <td>
                                            {{$sd->invoice_id}}
                                        </td>  

                                        <td>
                                            {{$sd->sender_name}}
                                        </td>  

                                        <td>
                                            {{$sd->sender_email}}
                                        </td>  

                                        <td>
                                            {{$sd->sender_phone}}
                                        </td>  

                                        <td>
                                            {{$sd->sender_address}}
                                        </td>  

                                        <td>
                                            {{$sd->receiver_name}}
                                        </td>  

                                        <td>
                                            {{$sd->receiver_email}}
                                        </td>  

                                        <td>
                                            {{$sd->receiver_phone}}
                                        </td>  

                                        <td>
                                            {{$sd->receiver_address}}
                                        </td>  

                                        <td>
                                            {{$sd->pick_date}}
                                        </td>  

                                        <td>
                                            {{$sd->departure_date}}
                                        </td>  
                                        <td>
                                            {{$sd->origin}}
                                        </td> 
                                        <td>
                                            {{$sd->destination}}
                                        </td> 
                                        <td>
                                            {{$sd->qty}}
                                        </td> 
                                        <td>
                                            {{$sd->frieght}}
                                        </td> 
                                        <td>
                                            <a><span style="color: purple">  </span>-- </a>
                                        </td>
                                          <td>
                                            <a>{{$sd->created_at}}</a>
                                        </td>
    
                                        <td class="text-center">
                                            <div class="dropdown">
                                                <a href="#" data-toggle="dropdown">
                                                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="{{route('admin.courier.edit', encrypt($sd->id))}}" class="dropdown-item">Edit Courier</a> 
                                                    {{-- <a href="{{route('admin.courier.delete', encrypt($sd->id))}}" onclick="return confirm('Are you sure you want to delete this post ?')" class="dropdown-item">Delete Courier</a>  --}}
                                                    @if(!$sd->TrackingInfo)
                                                    <a href="{{route('admin.courier.tracking', encrypt($sd->id))}}" class="dropdown-item">Create Tracking</a>
                                                    @else 
                                                    <a href="{{route('admin.courier.tracking.details', encrypt($sd->id))}}" class="dropdown-item">Update Tracking Details</a>
                                                    @endif 
                                                    {{-- <a href="{{route('admin.courier.tracking.details', encrypt($sp->id))}}" class="dropdown-item">Resend Email</a> --}}
                                                     </div>
                                            </div>
                                        </td>
                                    </tr>
                                      @endforeach
                                     @else
                                      <tr>
                                      <td> No data available </td>
                                      </tr>
                                     
                                      @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
         </div>
          </div>

@endsection

@section('script')
<script>




$('.clockpicker-example').clockpicker({
    autoclose: true
});

$('input[name="date"]').daterangepicker({
  singleDatePicker: true,
  showDropdowns: true
});

let message = {!! json_encode(Session::get('message')) !!};
let msg = {!! json_encode(Session::get('alert')) !!};
//alert(msg);
toastr.options = {
        timeOut: 8000,
        progressBar: true,
        showMethod: "slideDown",
        hideMethod: "slideUp",
        showDuration: 200,
        hideDuration: 200
    };
if(message != null && msg == 'success'){
toastr.success(message);
}else if(message != null && msg == 'error'){
    toastr.error(message);
}
</script>
@endsection