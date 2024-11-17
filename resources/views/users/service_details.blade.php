@extends('layouts.base')
@section('content')

<!--Page Title-->
<section class="page-title" style="background-image:url({{ asset('assets/images/background/12.jpg') }});">
    <div class="auto-container">
        <h2>Services Posts</h2>
        <div class="separater"></div>
    </div>
</section>

<!--Breadcrumb-->
<div class="breadcrumb-outer">
    <div class="auto-container">
        <ul class="bread-crumb text-center">
            <li><a href="{{ route('users.index') }}">Home</a> <span>/</span></li>
            <li>Offered Services</li>
        </ul>
    </div>
</div>
<!--End Page Title-->


<div class="container my-5">
    <!-- Blog Header -->
  
    <div class="text-center mb-4">
        <h1 class="display-4">{{ $service->title }}</h1>
        <p class="text-muted"> {{ $service->created_at }}</p>
    </div>
    
    <!-- Blog Image -->
    <div class="mb-4 text-center">
        <img style="height: 400px; width: 800px" src="{{asset('images/'.$service->images)}}" class="img-fluid rounded" alt="Blog Image">
    </div>

    <!-- Blog Content -->
    <div class="content">
        <p>{{ $service->contents }}</p>
    </div>
  


    

@endsection