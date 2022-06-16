@extends('front.header')
@section('content-a')
  <!-- Breadcrumb Section Begin -->
  <section class="breadcrumb-section set-bg" data-setbg="{{ asset('assets/img/hero/hero-1.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb-text">
                    <h2>Our Blog</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Blog Section Begin -->
<section class="blog-section spad">
    <div class="container">
        <div class="row">
            @foreach ($blogs as $blog)
                <div class="col-lg-12 p-0">
                    <div class="blog-item">
                        <div class="bi-pic">
                            <img src="{{asset('assets/img/hero/hero-1.jpg')}}" alt="">
                        </div>
                        <div class="bi-text">
                            <h5><a href="{{route('post',$blog->id)}}}">{{$blog->title}}</a></h5>
                            <ul>
                                <li>by Admin</li>
                                <li>Aug,15, 2019</li>
                                <li>20 Comment</li>
                            </ul>
                            <p>{{$blog->content}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
</section>
<!-- Footer Section End -->
