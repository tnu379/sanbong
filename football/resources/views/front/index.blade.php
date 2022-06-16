@extends('front.header')
@section('content-a')
<section class="hero-section">
    <div class="hs-slider owl-carousel">
        <div class="hs-item set-bg" data-setbg="{{ asset('assets/img/hero/hero-1.jpg') }}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-6">
                        <div class="hi-text">
                            <span>Shape your body</span>
                            <h1>Be <strong>strong</strong> traning hard</h1>
                            <a href="#" class="primary-btn">Get info</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hs-item set-bg" data-setbg="{{ asset('assets/img/hero/hero-2.jpg') }}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-6">
                        <div class="hi-text">
                            <span>Shape your body</span>
                            <h1>Be <strong>strong</strong> traning hard</h1>
                            <a href="#" class="primary-btn">Get info</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- ChoseUs Section Begin -->
{{-- <section class="choseus-section spad" id="about-us">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span>Why chose us?</span>
                    <h2>PUSH YOUR LIMITS FORWARD</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="cs-item">
                    <span class="flaticon-034-stationary-bike"></span>
                    <h4>Modern equipment</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        dolore facilisis.</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="cs-item">
                    <span class="flaticon-033-juice"></span>
                    <h4>Healthy nutrition plan</h4>
                    <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel
                        facilisis.</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="cs-item">
                    <span class="flaticon-002-dumbell"></span>
                    <h4>Proffesponal training plan</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        dolore facilisis.</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="cs-item">
                    <span class="flaticon-014-heart-beat"></span>
                    <h4>Unique to your needs</h4>
                    <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel
                        facilisis.</p>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- ChoseUs Section End -->

<!-- Classes Section Begin -->
<section class="classes-section spad" id="order">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span>Our Classes</span>
                    <h2>WHAT WE CAN OFFER</h2>
                </div>
            </div>
            <div class="col-4">
                <form id="target" action="/" method="get">
                    <select name="district" class="form-control" id="district">
                        <option value="">Choose</option>
                        @foreach ($districts as $key => $district)
                            <option value="{{ $key }}">{{ $district }}</option>
                        @endforeach
                    </select>
                </form>
            </div>
        </div>
        <div class="row" style="padding-top:20px">
            <?php
            $i = 0;
            ?>

            <div class="col-12">
                <table class="table table-hover">
                    <thead class="thead-light bg-light">
                        <tr class="">
                            <th scope="col">#</th>
                            <th class="table-column-pl-0">Name</th>
                            <th>Address</th>
                            <th>District</th>
                            <th>Role</th>
                            <th></th>
                        </tr>
                    </thead>
                    @if (isset($vendors[0]))
                        @foreach ($vendors as $vendor)
                            <tbody class="tbody-light"
                                style="color:white !important;     background-color: saddlebrown !important;">
                                <tr>
                                    <td class="showhr" scope="row"><a>{{ ++$i }}</a></td>
                                    <td>
                                        <div class="ml-3">
                                            <span
                                                class="d-block h5 text-hover-primary mb-0">{{ $vendor->full_name }}<i
                                                    class="tio-verified text-primary" data-toggle="tooltip"
                                                    data-placement="top" title="Top endorsed"></i></span>
                                            <span
                                                class="d-block font-size-sm text-body">{{ $vendor->email }}</span>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="d-block font-size-sm">address: {{ $vendor->address }}</span>
                                        <span class="d-block font-size-sm">ward: {{ $vendor->ward }}</span>
                                        <span class="d-block font-size-sm">street: {{ $vendor->street }}</span>
                                    </td>
                                    <td>{{ $districts[$vendor->district] }}<span class="text-hide">Code:
                                            GB</span></td>
                                    <td>Vendor</td>
                                    <td></td>
                                </tr>
                                <tr class="aser"
                                    style="display: none;background-color: darkslateblue !important">
                                    <td colspan="1"></td>
                                    <td>Name</td>
                                    <td>Size</td>
                                    <td>Active</td>
                                    <td>Current Price</td>
                                    <td></td>
                                </tr>
                                @foreach ($vendor->yards as $yard)
                                    <tr class="aser"
                                        style="display: none;background-color: darkslateblue !important">
                                        <td colspan="1"></td>
                                        <td>{{ $yard->name }}</td>
                                        <td>{{ $sizes[$yard->size] }}</td>
                                        <td>
                                            @if ($yard->is_active == 1)
                                                <span class="legend-indicator bg-success"></span>Active
                                            @else
                                                <span class="legend-indicator bg-danger"></span>In Active
                                            @endif
                                        </td>
                                        <td>đ{{ $prices[date('H')] ?? 90000 }}</td>
                                        <td><a class="btn btn-primary"
                                                href="{{ route('customer-booking', $yard->id) }}">Đặt sân</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        @endforeach
                    @else
                        <tbody class="tbody-light">
                            <tr>
                                <p style="color: aliceblue"> NO DATA TO DISPLAY </p>
                            </tr>
                        </tbody>
                    @endif

                </table>
            </div>
            {{-- <div class="col-lg-3 col-md-6">
                    <div class="class-item">
                        <div class="ci-pic">
                            <img src="{{ asset('assets/img/classes/class-1.jpg') }}" alt="">
                        </div>
                        <div class="ci-text">
                            <span>{{ $vendor->full_name }}</span>
                            <h5>{{ $vendor->address }}, {{ $vendor->ward }}, {{ $vendor->street }},
                                {{ $districts[$vendor->district] }}
                            </h5>
                            <a href="#"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div> --}}
        </div>
</section>
<!-- ChoseUs Section End -->

<!-- Banner Section Begin -->
<section class="banner-section set-bg" data-setbg="assets/img/hero/hero-2.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="bs-text">
                    <h2>registration now to get more deals</h2>
                    <div class="bt-tips">Where health, beauty and fitness meet.</div>
                    <a href="{{route('register')}}" class="primary-btn  btn-normal">Appointment</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End -->

<!-- Pricing Section Begin -->
{{-- <section class="pricing-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span>Our Plan</span>
                    <h2>Choose your pricing plan</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-8">
                <div class="ps-item">
                    <h3>Class drop-in</h3>
                    <div class="pi-price">
                        <h2>$ 39.0</h2>
                        <span>SINGLE CLASS</span>
                    </div>
                    <ul>
                        <li>Free riding</li>
                        <li>Unlimited equipments</li>
                        <li>Personal trainer</li>
                        <li>Weight losing classes</li>
                        <li>Month to mouth</li>
                        <li>No time restriction</li>
                    </ul>
                    <a href="#" class="primary-btn pricing-btn">Enroll now</a>
                    <a href="#" class="thumb-icon"><i class="fa fa-picture-o"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-8">
                <div class="ps-item">
                    <h3>12 Month unlimited</h3>
                    <div class="pi-price">
                        <h2>$ 99.0</h2>
                        <span>SINGLE CLASS</span>
                    </div>
                    <ul>
                        <li>Free riding</li>
                        <li>Unlimited equipments</li>
                        <li>Personal trainer</li>
                        <li>Weight losing classes</li>
                        <li>Month to mouth</li>
                        <li>No time restriction</li>
                    </ul>
                    <a href="#" class="primary-btn pricing-btn">Enroll now</a>
                    <a href="#" class="thumb-icon"><i class="fa fa-picture-o"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-8">
                <div class="ps-item">
                    <h3>6 Month unlimited</h3>
                    <div class="pi-price">
                        <h2>$ 59.0</h2>
                        <span>SINGLE CLASS</span>
                    </div>
                    <ul>
                        <li>Free riding</li>
                        <li>Unlimited equipments</li>
                        <li>Personal trainer</li>
                        <li>Weight losing classes</li>
                        <li>Month to mouth</li>
                        <li>No time restriction</li>
                    </ul>
                    <a href="#" class="primary-btn pricing-btn">Enroll now</a>
                    <a href="#" class="thumb-icon"><i class="fa fa-picture-o"></i></a>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- Pricing Section End -->

<!-- Gallery Section Begin -->
{{-- <div class="gallery-section">
    <div class="gallery">
        <div class="grid-sizer"></div>
        <div class="gs-item grid-wide set-bg" data-setbg="assets/img/gallery/gallery-1.jpg">
            <a href="assets/img/gallery/gallery-1.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
        </div>
        <div class="gs-item set-bg" data-setbg="assets/img/gallery/gallery-2.jpg">
            <a href="assets/img/gallery/gallery-2.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
        </div>
        <div class="gs-item set-bg" data-setbg="assets/img/gallery/gallery-3.jpg">
            <a href="assets/img/gallery/gallery-3.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
        </div>
        <div class="gs-item set-bg" data-setbg="assets/img/gallery/gallery-4.jpg">
            <a href="assets/img/gallery/gallery-4.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
        </div>
        <div class="gs-item set-bg" data-setbg="assets/img/gallery/gallery-5.jpg">
            <a href="assets/img/gallery/gallery-5.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
        </div>
        <div class="gs-item grid-wide set-bg" data-setbg="assets/img/gallery/gallery-6.jpg">
            <a href="assets/img/gallery/gallery-6.jpg" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
        </div>
    </div>
</div> --}}
<!-- Gallery Section End -->

<!-- Team Section Begin -->
{{-- <section class="team-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="team-title">
                    <div class="section-title">
                        <span>Our Team</span>
                        <h2>TRAIN WITH EXPERTS</h2>
                    </div>
                    <a href="#" class="primary-btn btn-normal appoinment-btn">appointment</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="ts-slider owl-carousel">
                <div class="col-lg-4">
                    <div class="ts-item set-bg" data-setbg="assets/img/team/team-1.jpg">
                        <div class="ts_text">
                            <h4>Athart Rachel</h4>
                            <span>Gym Trainer</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ts-item set-bg" data-setbg="assets/img/team/team-2.jpg">
                        <div class="ts_text">
                            <h4>Athart Rachel</h4>
                            <span>Gym Trainer</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ts-item set-bg" data-setbg="assets/img/team/team-3.jpg">
                        <div class="ts_text">
                            <h4>Athart Rachel</h4>
                            <span>Gym Trainer</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ts-item set-bg" data-setbg="assets/img/team/team-4.jpg">
                        <div class="ts_text">
                            <h4>Athart Rachel</h4>
                            <span>Gym Trainer</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ts-item set-bg" data-setbg="assets/img/team/team-5.jpg">
                        <div class="ts_text">
                            <h4>Athart Rachel</h4>
                            <span>Gym Trainer</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ts-item set-bg" data-setbg="assets/img/team/team-6.jpg">
                        <div class="ts_text">
                            <h4>Athart Rachel</h4>
                            <span>Gym Trainer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- Team Section End -->

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
<!-- Get In Touch Section End -->
@endsection
