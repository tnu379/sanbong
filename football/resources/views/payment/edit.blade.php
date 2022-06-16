@extends('layout')
@section('title', 'Yard')
@section('content')
    <!-- Content -->
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header d-print-none">
            <div class="row align-items-end">
                <div class="col-sm mb-2 mb-sm-0">
                    <h1 class="page-header-title">Payments</h1>
                </div>
            </div>
            <!-- End Row -->
        </div>
        <!-- End Page Header -->

        <div class="row">
            <div class="col-lg-10 mb-5 mb-lg-0">
                <!-- Card -->
                <a class="btn btn-primary" href="{{route('pdf_payment',$order->id)}}">
                    <i class="tio-print mr-1"></i> Pdf
                </a>

                <div class="card card-lg mb-5">
                    <div class="card-body">
                        <div class="row justify-content-lg-between">
                            <div class="col-sm order-2 order-sm-1 mb-3">
                                <h1 class="text-primary">Front Inc.</h1>
                            </div>

                            <div class="col-sm-auto order-1 order-sm-2 text-sm-right mb-3">
                                <div class="mb-3">
                                    <h2>Payment #</h2>
                                    <span class="d-block">{{$count}}</span>
                                </div>

                                <address class="text-dark">
                                    {{$order->yard()->first()->name}}<br>
                                    {{$order->yard()->first()->user()->first()->address}},<br>
                                    Phường  {{$order->yard()->first()->user()->first()->ward}},<br>
                                   Quận {{$order->yard()->first()->user()->first()->district}}<br>

                                </address>
                            </div>
                        </div>
                        <!-- End Row -->

                        <!-- Bill To -->
                        <div class="row justify-content-md-between mb-3">
                            <div class="col-md text-md-right">
                                <dl class="row">
                                    <dt class="col-sm-4 col-md">Payment date:</dt>
                                    <dd class="col-sm-8 col-md-auto">{{date('d-m-Y')}}</dd>
                                </dl>
                            </div>
                        </div>
                        <!-- End Bill To -->

                        <!-- Table -->
                        <div class="table-responsive">
                            <table
                                class="table table-borderless table-thead-bordered table-nowrap table-align-middle card-table">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Sân</th>
                                        <th>Thời Gian</th>
                                        <th>Khung giờ</th>
                                        <th class="table-column-right-aligned">Giá</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <th>{{$order->yard()->first()->name}}</th>
                                        <td>{{date('d-m-Y',strtotime($order->start))}}</td>
                                        <td>{{date('H:i',strtotime($order->start))}}h  - {{date('H:i',strtotime($order->end))}}h</td>
                                        <td class="table-column-right-aligned">đ{{$order->amount}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- End Table -->

                        <hr class="my-5">

                        <div class="row justify-content-md-end mb-3">
                            <div class="col-md-8 col-lg-7">
                                <dl class="row text-sm-right">
                                    <dt class="col-sm-6">Total:</dt>
                                    <dd class="col-sm-6">đ{{$order->amount}}</dd>
                                </dl>
                                <!-- End Row -->
                            </div>
                        </div>
                        <!-- End Row -->

                        <!-- Contacts -->

                    </div>
                </div>
                <!-- End Card -->

                <!-- Footer -->
                <div class="d-flex justify-content-end d-print-none">
                    <form action="{{route('vn_payment')}}" method="POST">
                        @csrf
                        <input type="hidden" name="order-id" value="{{$order->id}}">
                        <button type="submit" class="btn btn-default" name="redirect">Thanh Toán VNPay</button>
                    </form>

                    <a class="btn btn-primary" href="{{route('payment_store',$order->id)}}">
                        <i class="tio-print mr-1"></i> Trả tại quầy
                    </a>
                </div>
                <!-- End Footer -->
            </div>
        </div>
    </div>
    <!-- End Content -->

@endsection
