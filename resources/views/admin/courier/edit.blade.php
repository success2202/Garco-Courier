@extends('admin.layouts.admin')
@section('content')
<div>
    @if (session()->has('message'))
    <div class="alert alert-danger" style="width: 1000px">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
       <p style="text-align: center; font-size: 13px;"> {{ session()->get('message') }} </p> 
    </div>
        
    @endif
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <form action='{{route('admin.courier.update', encrypt($shipment->id))}}' method='post', enctype='multipart/form-data'>
        @csrf
      <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Create Shipment Info</h6>
                    <div class="row">
                        <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" name="product"  value="{{$shipment->product}}" class="form-control @error('product') is-invalid @enderror" id="exampleInputEmail1"
                                           aria-describedby="emailHelp" placeholder="" required>
                                    <small id="emailHelp" class="form-text text-muted">Enter Product Name
                                    </small>
                                    @error('product')
                                    <span class="invalid-feedback"> <small> * </small> </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" name="sender_name"  value="{{$shipment->sender_name}}" class="form-control @error('sender_name') is-invalid @enderror" id="exampleInputEmail1"
                                           aria-describedby="emailHelp" placeholder="" required>
                                    <small id="emailHelp" class="form-text text-muted">Sender Name
                                    </small>
                                    @error('sender_name')
                                    <span class="invalid-feedback"> <small> * </small> </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" name="sender_phone"  value="{{$shipment->sender_phone}}" class="form-control @error('sender_phone') is-invalid @enderror" id="exampleInputEmail1"
                                           aria-describedby="emailHelp" placeholder="" required>
                                    <small id="emailHelp" class="form-text text-muted">Sender Phone
                                    </small>
                                    @error('sender_phone')
                                    <span class="invalid-feedback"> <small> * </small> </span>
                                    @enderror
                                </div>
                            </div>
                    </div>
                    <div class="row">
                       
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="email" name="sender_email"  value="{{$shipment->sender_email}}" class="form-control @error('sender_email') is-invalid @enderror" id="exampleInputEmail1"
                                           aria-describedby="emailHelp" placeholder="" required>
                                    <small id="emailHelp" class="form-text text-muted">Sender Email
                                    </small>
                                    @error('sender_email')
                                    <span class="invalid-feedback"> <small> * </small> </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" name="sender_address"  value="{{$shipment->sender_address}}" class="form-control @error('sender_address') is-invalid @enderror" id="exampleInputEmail1"
                                           aria-describedby="emailHelp" placeholder="" required>
                                    <small id="emailHelp" class="form-text text-muted">Sender address
                                    </small>
                                    @error('sender_address')
                                    <span class="invalid-feedback"> <small> * </small> </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" name="receiver_name"  value="{{$shipment->receiver_name}}" class="form-control @error('receiver_name') is-invalid @enderror" id="exampleInputEmail1"
                                           aria-describedby="emailHelp" placeholder="" required>
                                    <small id="emailHelp" class="form-text text-muted">Receiver name
                                    </small>
                                    @error('receiver_name')
                                    <span class="invalid-feedback"> <small> * </small> </span>
                                    @enderror
                                </div>
                            </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" name="receiver_phone"  value="{{$shipment->receiver_phone}}" class="form-control @error('receiver_phone') is-invalid @enderror" id="exampleInputEmail1"
                                       aria-describedby="emailHelp" placeholder="" required>
                                <small id="emailHelp" class="form-text text-muted">Receiver phone
                                </small>
                                @error('receiver_phone')
                                <span class="invalid-feedback"> <small> * </small> </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="email" name="receiver_email"  value="{{$shipment->receiver_email}}" class="form-control @error('receiver_email') is-invalid @enderror" id="exampleInputEmail1"
                                       aria-describedby="emailHelp" placeholder="" required>
                                <small id="emailHelp" class="form-text text-muted">Receiver Email
                                </small>
                                @error('receiver_email')
                                <span class="invalid-feedback"> <small> * </small> </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" name="receiver_address"  value="{{$shipment->receiver_address}}" class="form-control @error('receiver_address') is-invalid @enderror" id="exampleInputEmail1"
                                       aria-describedby="emailHelp" placeholder="" required>
                                <small id="emailHelp" class="form-text text-muted">Receiver Address
                                </small>
                                @error('receiver_address')
                                <span class="invalid-feedback"> <small> * </small> </span>
                                @enderror
                            </div>
                        </div>
                          
                         

                    </div>
                    <div class="row">
                        <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" name="weight"  value="{{$shipment->weight}}" class="form-control @error('weight') is-invalid @enderror" id="exampleInputEmail1"
                                           aria-describedby="emailHelp" placeholder="" required>
                                    <small id="emailHelp" class="form-text text-muted">Enter Weight
                                    </small>
                                    @error('weight')
                                    <span class="invalid-feedback"> <small> * </small> </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" name="amount"  value="{{$shipment->amount}}" class="form-control @error('amount') is-invalid @enderror" id="exampleInputEmail1"
                                           aria-describedby="emailHelp" placeholder="" required>
                                    <small id="emailHelp" class="form-text text-muted">Enter Amount
                                    </small>
                                    @error('amount')
                                    <span class="invalid-feedback"> <small> * </small> </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" name="size"  value="{{$shipment->size}}" class="form-control @error('size') is-invalid @enderror" id="exampleInputEmail1"
                                           aria-describedby="emailHelp" placeholder="" required>
                                    <small id="emailHelp" class="form-text text-muted">Enter size
                                    </small>
                                    @error('size')
                                    <span class="invalid-feedback"> <small> * </small> </span>
                                    @enderror
                                </div>
                            </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" name="type"  value="{{$shipment->type}}" class="form-control @error('type') is-invalid @enderror" id="exampleInputEmail1"
                                           aria-describedby="emailHelp" placeholder="" required>
                                    <small id="emailHelp" class="form-text text-muted">Enter Type eg. Parcel or Sentiments
                                    </small>
                                    @error('type')
                                    <span class="invalid-feedback"> <small> * </small> </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" name="qty"  value="{{$shipment->qty}}" class="form-control @error('qty') is-invalid @enderror" id="exampleInputEmail1"
                                           aria-describedby="emailHelp" placeholder="" required>
                                    <small id="emailHelp" class="form-text text-muted">Enter Product Quantity
                                    </small>
                                    @error('qty')
                                    <span class="invalid-feedback"> <small> * </small> </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" name="frieght"  value="{{$shipment->frieght}}" class="form-control @error('frieght') is-invalid @enderror" id="exampleInputEmail1"
                                           aria-describedby="emailHelp" placeholder="" required>
                                    <small id="emailHelp" class="form-text text-muted">Enter frieght with currency
                                    </small>
                                    @error('frieght')
                                    <span class="invalid-feedback"> <small> * </small> </span>
                                    @enderror
                                </div>
                            </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" name="origin"  value="{{$shipment->origin}}" class="form-control @error('origin') is-invalid @enderror" id="exampleInputEmail1"
                                           aria-describedby="emailHelp" placeholder="" required>
                                    <small id="emailHelp" class="form-text text-muted">Enter Originating Address
                                    </small>
                                    @error('origin')
                                    <span class="invalid-feedback"> <small> * </small> </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" name="destination"  value="{{$shipment->destination}}" class="form-control @error('destination') is-invalid @enderror" id="exampleInputEmail1"
                                           aria-describedby="emailHelp" placeholder="" required>
                                    <small id="emailHelp" class="form-text text-muted">Enter Destination Address
                                    </small>
                                    @error('destination')
                                    <span class="invalid-feedback"> <small> * </small> </span>
                                    @enderror
                                </div>
                            </div>
                    
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" name="departure_date"  value="{{$shipment->departure_date}}" class="form-control @error('departure_date') is-invalid @enderror" id="exampleInputEmail1"
                                       aria-describedby="emailHelp" placeholder="">
                                <small id="emailHelp" class="form-text text-muted">Enter Departure date
                                </small>
                                @error('departure_date')
                                <span class="invalid-feedback"> <small> * </small> </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" name="pick_date" value="{{$shipment->pick_date}}" class="form-control @error('pick_date') is-invalid @enderror" id="exampleInputEmail1"
                                       aria-describedby="emailHelp" placeholder="">
                                <small id="emailHelp" class="form-text text-muted">Enter Pick Date
                                </small>
                                @error('pick_date')
                                <span class="invalid-feedback"> <small> * </small> </span>
                                @enderror
                            </div>
                        </div>
                                  <div class="col-md-6 ">
                                      <div class="custom-file">
                                    <input type="file" name="images[]" alt="images" multiple class="custom-file-input  @error('images') is-invalid @enderror">
                                        <label class="custom-file-label" for="customFile">Select Product Images</label>
                                    </div>
                                    <small id="emailHelp" class="form-text text-muted"> Choose Images
                                    </small>
                                      @error('images')
                                    <span class="invalid-feedback"> <small> *</small> </span>
                                    @enderror
                                 </div>
                                    
                    </div> 

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <select name="payment" class="form-control">
                                    <option value="PAID" {{ $shipment->payment == 'PAID' ? 'selected' : '' }}> Paid</option>
                                    <option value="UNPAID" {{ $shipment->payment  == 'UNPAID' ? 'selected' : '' }}>Not Paid</option>
                                    
                                </select>
                                <small id="emailHelp" class="form-text text-muted">Fee Payment  </small>
                              
                            </div>
                        </div>
                </div>
                 
            </div>
                  
               
                  
                 
                <div class="p-3 mt-1" style="text-align: center;">
                     <button type="submit" class="btn btn-primary p-3">Add Shipping Information</button>
                   </div>
                   
                
            </form>

</div>
</div>
</div>

@endsection


@section('script')
<script>
$('input[name="departure_date"]').daterangepicker({
  singleDatePicker: true,
  showDropdowns: true
});

$('input[name="pick_date"]').daterangepicker({
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
