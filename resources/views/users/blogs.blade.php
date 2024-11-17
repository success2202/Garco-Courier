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
            <li><a href="index.html">Home</a> <span>/</span></li>
            <li>Blog Grid</li>
        </ul>
    </div>
</div>
<!--End Page Title-->


<section class="news-section news-page red">
    <div class="auto-container">
        <div class="row clearfix">
            <!-- News Block -->
            @forelse ($blogs as $blog)
            <div class="news-block col-lg-6 col-md-12 col-sm-12"> 
               
                    
                <div class="inner-box wow fadeInUp animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                    <div class="row clearfix">
                        <!-- Image Column -->
                        <div class="image-column col-lg-6 col-md-6 col-sm-12">
                            <div class="inner-column">
                                <div class="image">
                                    <a href="{{route('users.blog.details', encrypt($blog->id))}}"> <img alt="" src="{{asset('images/'.$blog->image)}}"> </a>
                                </div>
                            </div>
                        </div>
                        <!-- Content Column -->
                        <div class="content-column col-lg-6 col-md-6 col-sm-12">
                            <div class="inner-column">
                                <ul class="post-meta">
                                    <li><span class="icon flaticon-calendar-1"></span>{{ $blog->created_at }}</li>
                                    <li><span class="icon fa fa-user"></span>{{ $blog->posted_by }}</li>
                                </ul>
                                <h3><a class="text-decoration-none" href="{{route('users.blog.details', encrypt($blog->id))}}">{{$blog->title}}</a></h3>
                                <div class="text">{!! substr($blog->contents,0,200) !!}.. <span style="color:blue">   <a class="title-1" href="{{route('users.blog.details', encrypt($blog->id))}}"></a></span></div>
                                <a href="{{ route('users.blog.details', encrypt($blog->id)) }}" class="read-more">Read more <span class="arrow_right fs-20"></span> </a>
                            </div>
                        </div>
                    </div>
                </div>

               
            </div>
            @empty
                    
            @endforelse
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