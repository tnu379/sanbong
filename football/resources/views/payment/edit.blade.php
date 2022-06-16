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
            <div class="col-lg-8 mb-5 mb-lg-0">
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

            <div class="col-lg-4">
                <!-- Card -->
                <div class="card d-print-none">
                    <!-- Header -->
                    <div class="card-header">
                        <h5 class="card-header-title">History</h5>
                        <!-- End Unfold -->
                    </div>
                    <!-- End Header -->

                    <!-- Body -->
                    <div class="card-body">
                        <span class="h1 d-block mb-3">175 <span class="h4 text-body">Payments</span></span>
                    </div>
                    <hr class="my-0">

                    <!-- Body -->
                    <div class="card-body">
                        <!-- Nav -->
                        <ul class="nav nav-segment nav-fill nav-sm-down-break" id="invoicesStatusTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="paid-tab" data-toggle="tab" href="#paid" role="tab"
                                    aria-controls="paid" aria-selected="true">
                                    <span class="legend-indicator bg-primary"></span>Paid (162)
                                </a>
                            </li>
                        </ul>
                        <!-- End Nav -->
                    </div>
                    <!-- End Body -->

                    <hr class="my-0">

                    <!-- Body -->
                    <div class="card-body card-body-height">
                        <!-- Tab Content -->
                        <div class="tab-content" id="invoicesStatusTabContent">
                            <div class="tab-pane fade show active" id="paid" role="tabpanel" aria-labelledby="paid-tab">
                                <!-- List Group -->
                                <ul class="list-group list-group-flush list-group-no-gutters">
                                    <!-- List Item -->
                                    <li class="list-group-item">
                                        <div class="mb-1">
                                            <h5 class="mb-0">Update subscription method</h5>
                                            <span class="font-size-sm">Rocket Science Group</span>
                                        </div>

                                        <div class="d-flex justify-content-between">
                                            <span class="h4 text-primary">$530.00 USD</span>
                                            <span class="font-size-sm">25 May, 2020</span>
                                        </div>
                                    </li>
                                    <!-- End List Item -->

                                    <!-- List Item -->
                                    <li class="list-group-item">
                                        <div class="mb-1">
                                            <h5 class="mb-0">Develop Slack mobile app</h5>
                                            <span class="font-size-sm">Slack Technologies</span>
                                        </div>

                                        <div class="d-flex justify-content-between">
                                            <span class="h4 text-primary">$2500.00 USD</span>
                                            <span class="font-size-sm">25 May, 2020</span>
                                        </div>
                                    </li>
                                    <!-- End List Item -->

                                    <!-- List Item -->
                                    <li class="list-group-item">
                                        <div class="mb-1">
                                            <h5 class="mb-0">Create a new database for Webdev</h5>
                                            <span class="font-size-sm">Google LLC</span>
                                        </div>

                                        <div class="d-flex justify-content-between">
                                            <span class="h4 text-primary">$7000.00 USD</span>
                                            <span class="font-size-sm">10 May, 2020</span>
                                        </div>
                                    </li>
                                    <!-- End List Item -->
                                </ul>
                                <!-- End List Group -->
                            </div>
                        </div>
                        <!-- End Tab Content -->
                    </div>
                    <!-- End Body -->

                </div>
                <!-- End Card -->
            </div>
        </div>
    </div>
    <!-- End Content -->

@endsection
