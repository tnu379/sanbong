@extends('front.header')
@section('content-a')
<section class="blog-details-hero set-bg" data-setbg="{{ asset('assets/img/hero/hero-1.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 p-0 m-auto">
                <div class="bh-text">
                    <h3>{{$blog->title}}</h3>
                    <ul>
                        <li>by Admin</li>
                        <li>Aug,15, 2019</li>
                        <li>20 Comment</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Details Hero Section End -->

<!-- Blog Details Section Begin -->
<section class="blog-details-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 p-0 m-auto">
                <div class="blog-details-text">
                    <div class="blog-details-desc">
                        <p>
                            {{$blog->content}}
                        </p>
                    </div>
                    <div class="blog-details-quote">
                        <div class="quote-icon">
                            <img src="{{asset('assets/img/hero/hero-1.jpg')}}" alt="">
                        </div>
                        <h5>KINGSPORT là một sân chơi thể thao lành mạnh vui chơi giải trí khắp TP.HCM . Quy tụ khắp mọi quận đều có sân chơi 5vs5 ,7vs7 cho anh em .Hãy đặt sân ngay bây giờ qua " đường link đăng ký"</span>
                    </div>
                    <div class="blog-details-author">
                        <div class="ba-pic">
                            <img src="{{asset('assets/img/hero/hero-1.jpg')}}" alt="">
                        </div>
                        <div class="ba-text">
                            <h5>Nguyễn Thành Công</h5>
                            <p>KINGSPORT là một sân chơi thể thao lành mạnh vui chơi giải trí khắp TP.HCM . Quy tụ khắp mọi quận đều có sân chơi 5vs5 ,7vs7 cho anh em .Hãy đặt sân ngay bây giờ qua " đường link đăng ký"</p>
                            <div class="bp-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Details Section End -->
<!-- Get In Touch Section Begin -->
   <div class="gettouch-section" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="gt-text">
                    <i class="fa fa-map-marker"></i>
                    <p>475A Điện Biên Phủ, Phường 25,<br> Bình Thạnh, Thành phố Hồ Chí Minh<br /></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="gt-text">
                    <i class="fa fa-mobile"></i>
                    <ul>
                        <li>089999999</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="gt-text email">
                    <i class="fa fa-envelope"></i>
                    <p>nguyenthanhcong02101999@gmail.com</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

