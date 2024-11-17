@extends('admin.layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row">
        @forelse ($pages as $page )
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <h5 class="mb-0">
                            <a href="#" class="link-2">{{$page->title}}</a> 
                        </h5>

                        <div class="dropdown ml-auto">
                            <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                
                            </a>
                           
                            <div class="dropdown-menu dropdown-menu-right">
                                
                                <a href="{{route('admin.PagesEdit', encrypt($page->id))}}" class="dropdown-item">Edit</a>
                                <a  onclick="return confirm('Are you sure?')" href="{{route('admin.PagesDelete', encrypt($page->id))}}" class="dropdown-item text-danger">Delete</a>
                            </div>
                        </div>
                    </div>
                    <div class="text-muted small mt-1 mb-3"></div>
                    <div class="progress mb-2" style="height: 5px;">
                        <div class="progress-bar bg-primary"></div>
                        
                    </div>
                 
                    <p>{!! substr($page->contents,0,200) !!}.</p>
                    <div class="row">
                        <div class="col">
                            <div class="text-muted mb-1 small">Created</div>
                            <div>{{$page->created_at->format('d-m-y h:ia')}}</div>
                        </div>
                        <div class="col">
                            <div class="text-muted mb-1 small">Last Updated</div>
                            <div>{{$page->updated_at->format('d-m-y h:ia')}}</div>
                        </div>
                    </div>
                </div>
                <hr class="m-0">
                <div class="card-body">
                    <div class="small mb-2"></div>
                    <div class="avatar-group">
                        <figure class="avatar avatar-sm">
                            <img src="{{asset('images/'.$page->images)}}" > 
                        </figure>
                       
                    </div>
                    
                    <div style="float: right;">
                    </div>
                </div>
            </div>
        </div>
        @empty
        @endforelse
        
    </div>

</div>


@endsection


@push('scripts')
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
@endpush