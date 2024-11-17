@extends('layouts.base')
@section('content')

<!--Page Title-->
<section class="page-title" style="background-image:url({{ asset('assets/images/background/12.jpg') }});">
    <div class="auto-container">
        <h2>Blog Posts</h2>
        <div class="separater"></div>
    </div>
</section>

<!--Breadcrumb-->
<div class="breadcrumb-outer">
    <div class="auto-container">
        <ul class="bread-crumb text-center">
            <li><a href="{{ route('users.index') }}">Home</a> <span>/</span></li>
            <li>Blog Grid</li>
        </ul>
    </div>
</div>
<!--End Page Title-->


<div class="container my-5">
    <!-- Blog Header -->
    <div class="text-center mb-4">
        <h1 class="display-4">{{ $blog->title }}</h1>
        <p class="text-muted">by <strong>{{ $blog->posted_by}}</strong> | {{ $blog->created_at }}</p>
    </div>
    
    <!-- Blog Image -->
    <div class="mb-4 text-center">
        <img style="height: 400px; width: 800px" src="{{asset('images/'.$blog->image)}}" class="img-fluid rounded" alt="Blog Image">
    </div>

    <!-- Blog Content -->
    <div class="content">
        <p>{{ $blog->contents }}</p>
    </div>

    <!-- Comment Section -->
    <div class="mt-5">
        <h4>Comments</h4>
        
        <!-- Single Comment -->
        <div class="mb-3">
            <strong>John Doe</strong> <span class="text-muted">| Oct 15, 2023</span>
            <p>This is a sample comment. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>

        <!-- Comment Form -->
        <form>
            <div class="mb-3">
                <label for="comment" class="form-label">Leave a Comment</label>
                <textarea id="comment" class="form-control" rows="4" placeholder="Write your comment here..."></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit Comment</button>
        </form>
    </div>
</div>

@endsection