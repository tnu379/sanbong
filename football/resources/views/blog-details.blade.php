@extends('front.header')
@section('content-a')
<section class="blog-details-hero set-bg" data-setbg="{{ asset('assets/img/hero/hero-1.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 p-0 m-auto">
                <div class="bh-text">
                    <h3>GIỚI THIỆU VỀ KING SPORT</h3>
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
                        <p>Sự hồi sinh của làng túc cầu tại Việt Nam có thể nhận thấy rõ rệt từ những tháng cuối năm 2017. Thành tích vang dội của đội tuyển Việt Nam trên đấu trường quốc tế, trở thành Á Quân VCK U23 Châu Á 2018 như thổi bùng lại ngọn lửa trong lòng người hâm mộ nước nhà.
                            Giờ đây, trong những trận bóng, người ta có thể thấy hình ảnh khán đài được lấp kín khán giả. Các cầu thủ ra sân trong tiếng reo hò của hàng vạn người hâm mộ cùng sự theo dõi của hàng triệu khán giả qua màn ảnh nhỏ. Không chỉ thế, ngay cả báo chí cùng cổ động viên khu vực, cùng nhiều khán giả quốc tế cũng dành tặng những lời khen ngợi không ngớt và sự quan tâm cho bóng đá Việt Nam.
                            Với tất cả những tín hiệu lạc quan đó, thị trường quảng cáo sân bóng đá thật sự sục sôi trở lại. Với mục đích quảng cáo, quản lý các sân bóng trở nên tiện dụng chúng tôi xin giới thiệu hệ thống quản lý sân bóng KINGSPORT
                        </p>
                    </div>
                    <div class="blog-details-quote">
                        <div class="quote-icon">
                            <img src="{{asset('assets/img/hero/hero-1.jpg')}}" alt="">
                        </div>
                        <h5>KINGSPORT là một sân chơi thể thao lành mạnh vui chơi giải trí khắp TP.HCM . Quy tụ khắp mọi quận đều có sân chơi 5vs5 ,7vs7 cho anh em </span>
                    </div>
                    <div class="blog-details-author">
                        <div class="ba-pic">
                            <img src="{{asset('assets/img/hero/hero-1.jpg')}}" alt="">
                        </div>
                        <div class="ba-text">
                            <h5>Nguyễn Thành Công</h5>
                            <p>KINGSPORT là một sân chơi thể thao lành mạnh vui chơi giải trí khắp TP.HCM . Quy tụ khắp mọi quận đều có sân chơi 5vs5 ,7vs7 cho anh em </p>
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
