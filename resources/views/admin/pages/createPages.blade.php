@extends('admin.layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <form action='{{ route('admin.PagesStore') }}' method='post', enctype='multipart/form-data'>
        @csrf

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
      
      <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Create Product</h6>
                    <div class="row">
                        <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" name="title"  value="{{old('title')}}" class="form-control @error('title') is-invalid @enderror" id="exampleInputEmail1"
                                           aria-describedby="emailHelp" placeholder="Page Title">
                                    <small id="emailHelp" class="form-text text-muted">Enter page title
                                    </small>
                                    @error('title')
                                    <span class="invalid-feedback"> <small> * </small> </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12">
                              <div class="form-group">
                                <input class="@error('brief') is-invalid @enderror" name="brief" value="{{old('brief')}}">
                                 <small id="emailHelp" class="form-text text-muted">Page Summary
                                        </small>
                                        @error('brief')
                                        <span class="invalid-feedback"> <small> *</small> </span>
                                        @enderror
                                </div>
                                     </div>
                                
                                 <div class="col-md-12">
                          <div class="form-group">
                            
                            <textarea id="summernote" class="@error('contents') is-invalid @enderror" name="contents">{{old('contents')}}</textarea>
                             <small id="emailHelp" class="form-text text-muted">Page Contents
                                    </small>
                                    @error('contents')
                                    <span class="invalid-feedback"> <small> *</small> </span>
                                    @enderror
                            </div>


                                 </div>


                                  <div class="col-md-6 pt-4">
                                      <div class="custom-file">
                                    <input type="file" name="image" class="custom-file-input  @error('image') is-invalid @enderror">
                                        <label class="custom-file-label" for="customFile">Choose Page Cover Image</label>
                                    </div>
                                    <small id="emailHelp" class="form-text text-muted"> Choose a cover image 
                                    </small>
                                      @error('image')
                                    <span class="invalid-feedback"> <small> *</small> </span>
                                    @enderror
                                 </div>
                                    
                    </div> 
                </div>
                 
            </div>
                  
                 <div class="card">
                <div class="card-body">
                <div class="row">
                  <div class="col-md-4">
                  </div>
                  <div class="col-md-4">
                <div class="p-5">
                     <button type="submit" class="btn btn-primary p-3">Add Service</button>
                   </div>
                   </div>
                   </div>
                </div>
                </div>
            </form>

</div>
                </div>
            </div>
@endsection

@section('script')

  <script>
document.addEventListener("DOMContentLoaded", function() {
  const toastElement = document.getElementById('successToast');
  const toast = new bootstrap.Toast(toastElement);
  toast.show();
});
  </script>

@endsection