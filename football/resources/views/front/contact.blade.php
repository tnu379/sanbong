@extends('front.header')
@section('content-a')
<header class="header-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <div class="logo">
                    <a href="./index.html">
                        <img src="{{ asset('assets/img/logo.png') }}" alt="">
                    </a>
                </div>
            </div>
            <div class="col-lg-6">
                <nav class="nav-menu">
                    <ul>
                        <li class="active"><a href="#">Home</a></li>
                        {{-- <li><a href="#about-us">About Us</a></li> --}}
                        <li><a href="{{ route('about-us') }}">About Us</a></li>

                        <li><a href="#about-us">Services</a></li>
                        <li><a href="#order">Order</a></li>
                        <li><a href='{{ route('blogs') }}'>Blog</a>
                        </li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3">
                <div class="top-option">
                    <div class="to-search search-switch">
                        <i class="fa fa-search"></i>
                    </div>
                    <div class="to-social">
                        {{-- <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a> --}}
                        <a href="{{ route('login') }}">Đăng Nhập<i class="fa fa-sign-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="canvas-open">
            <i class="fa fa-bars"></i>
        </div>
    </div>
</header>
<!-- Header End -->

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="{{ asset('assets/img/hero/hero-1.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb-text">
                    <h2>Contact Us</h2>
                    <div class="bt-option">
                        <a href="./index.html">Home</a>
                        <a href="#">Pages</a>
                        <span>Contact us</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->
<section class="contact-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-title contact-title">
                    <span>Contact Us</span>
                    <h2>GET IN TOUCH</h2>
                </div>
                <div class="contact-widget">
                    <div class="cw-text">
                        <i class="fa fa-map-marker"></i>
                        <p>475A Điện Biên Phủ, Phường 25, Bình Thạnh, Thành phố Hồ Chí Minh</p>
                    </div>
                    <div class="cw-text">
                        <i class="fa fa-mobile"></i>
                        <ul>
                            <li>089999999</li>
                        </ul>
                    </div>
                    <div class="cw-text email">
                        <i class="fa fa-envelope"></i>
                        <p>nguyenthanhcong02101999@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="leave-comment">
                    <form action="{{ route('mail-for-admin') }}" method="POST">
                        @csrf
                        <input type="text" name="name" placeholder="Name">
                        <input type="text" name="phone" placeholder="Phone">
                        <input type="text" name="email" placeholder="Email">
                        <textarea name="content" placeholder="Content"></textarea>
                        <button type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12087.069761554938!2d-74.2175599360452!3d40.767139456514954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c254b5958982c3%3A0xb6ab3931055a2612!2sEast%20Orange%2C%20NJ%2C%20USA!5e0!3m2!1sen!2sbd!4v1581710470843!5m2!1sen!2sbd"
                height="550" style="border:0;" allowfullscreen=""></iframe>
        </div>
    </div>
</section>
<!-- Contact Section End -->
@endsection
