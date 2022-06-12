@extends('layout')
@section('title', 'Admin')
@section('content')
    <!-- Content -->
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-sm mb-2 mb-sm-0">
                    <h1 class="page-header-title">Dashboard</h1>
                </div>
            </div>
        </div>
        <!-- End Page Header -->

        <!-- Stats -->
        <div class="row gx-2 gx-lg-3">
            <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
                <!-- Card -->
                <a class="card card-hover-shadow h-100" href="#">
                    <div class="card-body">
                        <h6 class="card-subtitle">Total</h6>

                        <div class="row align-items-center gx-2 mb-1">
                            <div class="col-6">
                                <span class="card-title h2">đ{{ $user->coin ?? 0 }}</span>
                            </div>

                            {{-- <div class="col-6"> --}}
                            {{-- <!-- Chart --> --}}
                            {{-- <div class="chartjs-custom" style="height: 3rem;"> --}}
                            {{-- <canvas class="js-chart" data-hs-chartjs-options='{ --}}
                            {{-- "type": "line", --}}
                            {{-- "data": { --}}
                            {{-- "labels": ["1 May","2 May","3 May","4 May","5 May","6 May","7 May","8 May","9 May","10 May","11 May","12 May","13 May","14 May","15 May","16 May","17 May","18 May","19 May","20 May","21 May","22 May","23 May","24 May","25 May","26 May","27 May","28 May","29 May","30 May","31 May"], --}}
                            {{-- "datasets": [{ --}}
                            {{-- "data": [21,20,24,20,18,17,15,17,18,30,31,30,30,35,25,35,35,40,60,90,90,90,85,70,75,70,30,30,30,50,72], --}}
                            {{-- "backgroundColor": ["rgba(55, 125, 255, 0)", "rgba(255, 255, 255, 0)"], --}}
                            {{-- "borderColor": "#377dff", --}}
                            {{-- "borderWidth": 2, --}}
                            {{-- "pointRadius": 0, --}}
                            {{-- "pointHoverRadius": 0 --}}
                            {{-- }] --}}
                            {{-- }, --}}
                            {{-- "options": { --}}
                            {{-- "scales": { --}}
                            {{-- "yAxes": [{ --}}
                            {{-- "display": false --}}
                            {{-- }], --}}
                            {{-- "xAxes": [{ --}}
                            {{-- "display": false --}}
                            {{-- }] --}}
                            {{-- }, --}}
                            {{-- "hover": { --}}
                            {{-- "mode": "nearest", --}}
                            {{-- "intersect": false --}}
                            {{-- }, --}}
                            {{-- "tooltips": { --}}
                            {{-- "postfix": "k", --}}
                            {{-- "hasIndicator": true, --}}
                            {{-- "intersect": false --}}
                            {{-- } --}}
                            {{-- } --}}
                            {{-- }'> --}}
                            {{-- </canvas> --}}
                            {{-- </div> --}}
                            {{-- <!-- End Chart --> --}}
                            {{-- </div> --}}
                        </div>
                        <!-- End Row -->

                        {{-- <span class="badge badge-soft-success"> --}}
                        {{-- <i class="tio-trending-up"></i> 12.5% --}}
                        {{-- </span> --}}
                        {{-- <span class="text-body font-size-sm ml-1">from 70,104</span> --}}
                    </div>
                </a>
                <!-- End Card -->
            </div>

            <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
                <!-- Card -->
                <a class="card card-hover-shadow h-100" href="#">
                    <div class="card-body">
                        <h6 class="card-subtitle">Yard</h6>

                        <div class="row align-items-center gx-2 mb-1">
                            <div class="col-6">
                                <span class="card-title h2">{{ $user->yards()->count() }}</span>
                            </div>

                            <div class="col-6">
                                @foreach ($user->yards as $yard)
                                    <li>{{ $yard->name }}</li>
                                @endforeach
                            </div>
                            {{-- <div class="col-6"> --}}
                            {{-- <!-- Chart --> --}}
                            {{-- <div class="chartjs-custom" style="height: 3rem;"> --}}
                            {{-- <canvas class="js-chart" data-hs-chartjs-options='{ --}}
                            {{-- "type": "line", --}}
                            {{-- "data": { --}}
                            {{-- "labels": ["1 May","2 May","3 May","4 May","5 May","6 May","7 May","8 May","9 May","10 May","11 May","12 May","13 May","14 May","15 May","16 May","17 May","18 May","19 May","20 May","21 May","22 May","23 May","24 May","25 May","26 May","27 May","28 May","29 May","30 May","31 May"], --}}
                            {{-- "datasets": [{ --}}
                            {{-- "data": [21,20,24,20,18,17,15,17,30,30,35,25,18,30,31,35,35,90,90,90,85,100,120,120,120,100,90,75,75,75,90], --}}
                            {{-- "backgroundColor": ["rgba(55, 125, 255, 0)", "rgba(255, 255, 255, 0)"], --}}
                            {{-- "borderColor": "#377dff", --}}
                            {{-- "borderWidth": 2, --}}
                            {{-- "pointRadius": 0, --}}
                            {{-- "pointHoverRadius": 0 --}}
                            {{-- }] --}}
                            {{-- }, --}}
                            {{-- "options": { --}}
                            {{-- "scales": { --}}
                            {{-- "yAxes": [{ --}}
                            {{-- "display": false --}}
                            {{-- }], --}}
                            {{-- "xAxes": [{ --}}
                            {{-- "display": false --}}
                            {{-- }] --}}
                            {{-- }, --}}
                            {{-- "hover": { --}}
                            {{-- "mode": "nearest", --}}
                            {{-- "intersect": false --}}
                            {{-- }, --}}
                            {{-- "tooltips": { --}}
                            {{-- "postfix": "%", --}}
                            {{-- "hasIndicator": true, --}}
                            {{-- "intersect": false --}}
                            {{-- } --}}
                            {{-- } --}}
                            {{-- }'> --}}
                            {{-- </canvas> --}}
                            {{-- </div> --}}
                            {{-- <!-- End Chart --> --}}
                            {{-- </div> --}}
                        </div>
                        <!-- End Row -->

                        {{-- <span class="badge badge-soft-success"> --}}
                        {{-- <i class="tio-trending-up"></i> 1.7% --}}
                        {{-- </span> --}}
                        {{-- <span class="text-body font-size-sm ml-1">from 29.1%</span> --}}
                    </div>
                </a>
                <!-- End Card -->
            </div>

            <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
                <!-- Card -->
                <a class="card card-hover-shadow h-100" href="#">
                    <div class="card-body">
                        <h6 class="card-subtitle">Payment</h6>

                        <div class="row align-items-center gx-2 mb-1">
                            <div class="col-4">
                                <span class="card-title h2">{{ $user->payments()->count() }}</span>
                            </div>
                            <div class="col-6">
                                <li style="list-style-type: none;">
                                    <span class="badge badge-soft-info">
                                        <span class="legend-indicator bg-success"></span>
                                        Paid
                                    </span>: {{ $paymentPaid }}
                                </li>
                                <li style="list-style-type: none;">
                                    <span class="badge badge-soft-info">
                                        <span class="legend-indicator bg-warning"></span>
                                        pending
                                    </span>: {{ $paymentPending }}
                                </li>

                            </div>

                            {{-- <div class="col-6"> --}}
                            {{-- <!-- Chart --> --}}
                            {{-- <div class="chartjs-custom" style="height: 3rem;"> --}}
                            {{-- <canvas class="js-chart" data-hs-chartjs-options='{ --}}
                            {{-- "type": "line", --}}
                            {{-- "data": { --}}
                            {{-- "labels": ["1 May","2 May","3 May","4 May","5 May","6 May","7 May","8 May","9 May","10 May","11 May","12 May","13 May","14 May","15 May","16 May","17 May","18 May","19 May","20 May","21 May","22 May","23 May","24 May","25 May","26 May","27 May","28 May","29 May","30 May","31 May"], --}}
                            {{-- "datasets": [{ --}}
                            {{-- "data": [25,18,30,31,35,35,60,60,60,75,21,20,24,20,18,17,15,17,30,120,120,120,100,90,75,90,90,90,75,70,60], --}}
                            {{-- "backgroundColor": ["rgba(55, 125, 255, 0)", "rgba(255, 255, 255, 0)"], --}}
                            {{-- "borderColor": "#377dff", --}}
                            {{-- "borderWidth": 2, --}}
                            {{-- "pointRadius": 0, --}}
                            {{-- "pointHoverRadius": 0 --}}
                            {{-- }] --}}
                            {{-- }, --}}
                            {{-- "options": { --}}
                            {{-- "scales": { --}}
                            {{-- "yAxes": [{ --}}
                            {{-- "display": false --}}
                            {{-- }], --}}
                            {{-- "xAxes": [{ --}}
                            {{-- "display": false --}}
                            {{-- }] --}}
                            {{-- }, --}}
                            {{-- "hover": { --}}
                            {{-- "mode": "nearest", --}}
                            {{-- "intersect": false --}}
                            {{-- }, --}}
                            {{-- "tooltips": { --}}
                            {{-- "postfix": "%", --}}
                            {{-- "hasIndicator": true, --}}
                            {{-- "intersect": false --}}
                            {{-- } --}}
                            {{-- } --}}
                            {{-- }'> --}}
                            {{-- </canvas> --}}
                            {{-- </div> --}}
                            {{-- <!-- End Chart --> --}}
                            {{-- </div> --}}
                        </div>
                        <!-- End Row -->

                        {{-- <span class="badge badge-soft-danger"> --}}
                        {{-- <i class="tio-trending-down"></i> 4.4% --}}
                        {{-- </span> --}}
                        {{-- <span class="text-body font-size-sm ml-1">from 61.2%</span> --}}
                    </div>
                </a>
                <!-- End Card -->
            </div>

            {{-- <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5"> --}}
            {{-- <!-- Card --> --}}
            {{-- <a class="card card-hover-shadow h-100" href="#"> --}}
            {{-- <div class="card-body"> --}}
            {{-- <h6 class="card-subtitle">Pageviews</h6> --}}

            {{-- <div class="row align-items-center gx-2 mb-1"> --}}
            {{-- <div class="col-6"> --}}
            {{-- <span class="card-title h2">92,913</span> --}}
            {{-- </div> --}}

            {{-- <div class="col-6"> --}}
            {{-- <!-- Chart --> --}}
            {{-- <div class="chartjs-custom" style="height: 3rem;"> --}}
            {{-- <canvas class="js-chart" data-hs-chartjs-options='{ --}}
            {{-- "type": "line", --}}
            {{-- "data": { --}}
            {{-- "labels": ["1 May","2 May","3 May","4 May","5 May","6 May","7 May","8 May","9 May","10 May","11 May","12 May","13 May","14 May","15 May","16 May","17 May","18 May","19 May","20 May","21 May","22 May","23 May","24 May","25 May","26 May","27 May","28 May","29 May","30 May","31 May"], --}}
            {{-- "datasets": [{ --}}
            {{-- "data": [21,20,24,15,17,30,30,35,35,35,40,60,12,90,90,85,70,75,43,75,90,22,120,120,90,85,100,92,92,92,92], --}}
            {{-- "backgroundColor": ["rgba(55, 125, 255, 0)", "rgba(255, 255, 255, 0)"], --}}
            {{-- "borderColor": "#377dff", --}}
            {{-- "borderWidth": 2, --}}
            {{-- "pointRadius": 0, --}}
            {{-- "pointHoverRadius": 0 --}}
            {{-- }] --}}
            {{-- }, --}}
            {{-- "options": { --}}
            {{-- "scales": { --}}
            {{-- "yAxes": [{ --}}
            {{-- "display": false --}}
            {{-- }], --}}
            {{-- "xAxes": [{ --}}
            {{-- "display": false --}}
            {{-- }] --}}
            {{-- }, --}}
            {{-- "hover": { --}}
            {{-- "mode": "nearest", --}}
            {{-- "intersect": false --}}
            {{-- }, --}}
            {{-- "tooltips": { --}}
            {{-- "postfix": "k", --}}
            {{-- "hasIndicator": true, --}}
            {{-- "intersect": false --}}
            {{-- } --}}
            {{-- } --}}
            {{-- }'> --}}
            {{-- </canvas> --}}
            {{-- </div> --}}
            {{-- <!-- End Chart --> --}}
            {{-- </div> --}}
            {{-- </div> --}}
            {{-- <!-- End Row --> --}}

            {{-- <span class="badge badge-soft-secondary">0.0%</span> --}}
            {{-- <span class="text-body font-size-sm ml-1">from 2,913</span> --}}
            {{-- </div> --}}
            {{-- </a> --}}
            {{-- <!-- End Card --> --}}
            {{-- </div> --}}
        </div>
        <!-- End Stats -->
        <!-- Card -->
        <div class="row">
            <div class="col-lg-12 mb-3 mb-lg-5">
                <!-- Card -->
                <div class="card h-100">
                    <!-- Header -->
                    <div class="card-header">
                        <h4 class="card-header-title">Tổng thu từng tháng</h4>

                        <!-- Daterangepicker -->
                        <button id="js-daterangepicker-predefined" class="btn btn-sm btn-ghost-secondary dropdown-toggle">
                            <i class="tio-date-range"></i>
                            <span class="js-daterangepicker-predefined-preview ml-1"></span>
                        </button>
                        <!-- End Daterangepicker -->
                    </div>
                    <!-- End Header -->

                    <!-- Body -->
                    <div class="card-body">
                        <!-- Bar Chart -->
                        <div class="chartjs-custom">
                            <canvas class="js-chart" style="height: 15rem;" data-hs-chartjs-options='{
                                      "type": "bar",
                                      "data": {
                                        "labels": ["Jan", "Feb", "March", "Apr", "May", "June", "July", "Aug", "Sep", "Oct", "Nov", "Dec"],
                                        "datasets": [{
                                          "data": [{{implode(",", $dataChart)}}],
                                          "backgroundColor": "#377dff",
                                          "hoverBackgroundColor": "#377dff",
                                          "borderColor": "#377dff"
                                        }]
                                      },
                                      "options": {
                                        "scales": {
                                          "yAxes": [{
                                            "gridLines": {
                                              "color": "#e7eaf3",
                                              "drawBorder": false,
                                              "zeroLineColor": "#e7eaf3"
                                            },
                                            "ticks": {
                                              "beginAtZero": true,
                                              "stepSize": 100,
                                              "fontSize": 12,
                                              "fontColor": "#97a4af",
                                              "fontFamily": "Open Sans, sans-serif",
                                              "padding": 10,
                                              "postfix": "đ"
                                            }
                                          }],
                                          "xAxes": [{
                                            "gridLines": {
                                              "display": false,
                                              "drawBorder": false
                                            },
                                            "ticks": {
                                              "fontSize": 12,
                                              "fontColor": "#97a4af",
                                              "fontFamily": "Open Sans, sans-serif",
                                              "padding": 5
                                            },
                                            "categoryPercentage": 0.5,
                                            "maxBarThickness": "10"
                                          }]
                                        },
                                        "cornerRadius": 2,
                                        "tooltips": {
                                          "prefix": "đ",
                                          "hasIndicator": true,
                                          "mode": "index",
                                          "intersect": false
                                        },
                                        "hover": {
                                          "mode": "nearest",
                                          "intersect": true
                                        }
                                      }
                                    }'></canvas>
                        </div>
                        <!-- End Bar Chart -->
                    </div>
                    <!-- End Body -->
                </div>
                <!-- End Card -->
            </div>

        </div>

        <div class="card mb-3 mb-lg-5">
            <!-- Header -->
            <div class="card-header">
                <div class="row justify-content-between align-items-center flex-grow-1">
                    <div class="col-12 col-md">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="card-header-title">Customer</h5>

                            <!-- Datatable Info -->
                            <div id="datatableCounterInfo" style="display: none;">
                                <div class="d-flex align-items-center">
                                    <span class="font-size-sm mr-3">
                                        <span id="datatableCounter">0</span>
                                        Selected
                                    </span>
                                    <a class="btn btn-sm btn-outline-danger" href="javascript:;">
                                        <i class="tio-delete-outlined"></i> Delete
                                    </a>
                                </div>
                            </div>
                            <!-- End Datatable Info -->
                        </div>
                    </div>

                    <div class="col-auto">
                        <!-- Filter -->
                        <div class="row align-items-sm-center">
                            <div class="col-sm-auto">
                                <div class="d-flex align-items-center mr-2">
                                    <span class="text-secondary mr-2">Status:</span>

                                    <!-- Select -->
                                    <select class="js-select2-custom js-datatable-filter custom-select-sm" size="1"
                                        style="opacity: 0;" data-target-column-index="2" data-hs-select2-options='{
                                    "minimumResultsForSearch": "Infinity",
                                    "customClass": "custom-select custom-select-sm custom-select-borderless",
                                    "dropdownAutoWidth": true,
                                    "width": true
                                  }'>
                                        <option value="">All</option>
                                        <option value="successful">Successful</option>
                                        <option value="overdue">Overdue</option>
                                        <option value="pending">Pending</option>
                                    </select>
                                    <!-- End Select -->
                                </div>
                            </div>

                            <div class="col-sm-auto">
                                <div class="d-flex align-items-center mr-2">
                                    <span class="text-secondary mr-2">Signed up:</span>

                                    <!-- Select -->
                                    <select class="js-select2-custom js-datatable-filter custom-select-sm" size="1"
                                        style="opacity: 0;" data-target-column-index="5" data-hs-select2-options='{
                                    "minimumResultsForSearch": "Infinity",
                                    "customClass": "custom-select custom-select-sm custom-select-borderless",
                                    "dropdownAutoWidth": true,
                                    "width": true
                                  }'>
                                        <option value="">All</option>
                                        <option value="1 year ago">1 year ago</option>
                                        <option value="6 months ago">6 months ago</option>
                                    </select>
                                    <!-- End Select -->
                                </div>
                            </div>

                            <div class="col-md">
                                <form>
                                    <!-- Search -->
                                    <div class="input-group input-group-merge input-group-flush">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="tio-search"></i>
                                            </div>
                                        </div>
                                        <input id="datatableSearch" type="search" class="form-control"
                                            placeholder="Search users" aria-label="Search users">
                                    </div>
                                    <!-- End Search -->
                                </form>
                            </div>
                        </div>
                        <!-- End Filter -->
                    </div>
                </div>
            </div>
            <!-- End Header -->

            <!-- Table -->
            <div class="table-responsive datatable-custom">
                <table id="datatable"
                    class="table table-borderless table-thead-bordered table-nowrap table-align-middle card-table"
                    data-hs-datatables-options='{
                                "columnDefs": [{
                                    "targets": [0, 1, 4],
                                    "orderable": false
                                }],
                                "order": [],
                                "info": {
                                "totalQty": "#datatableWithPaginationInfoTotalQty"
                                },
                                "search": "#datatableSearch",
                                "entries": "#datatableEntries",
                                "pageLength": 8,
                                "isResponsive": false,
                                "isShowPaging": false,
                                "pagination": "datatablePagination"
                            }'>
                    <thead class="thead-light">
                        <tr>
                            <th scope="col" class="table-column-pr-0">
                                <div class="custom-control custom-checkbox">
                                    <input id="datatableCheckAll" type="checkbox" class="custom-control-input">
                                    <label class="custom-control-label" for="datatableCheckAll"></label>
                                </div>
                            </th>
                            <th class="table-column-pl-0">Full name</th>
                            <th>Status</th>
                            <th>Email</th>
                            <th>Signed up</th>
                            <th>User ID</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($customers as $customer)
                            <tr>
                                <td class="table-column-pr-0">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="usersDataCheck2">
                                        <label class="custom-control-label" for="usersDataCheck2"></label>
                                    </div>
                                </td>
                                <td class="table-column-pl-0">
                                    <a class="media align-items-center" href="user-profile.html">
                                        <div class="avatar avatar-sm avatar-circle mr-2">
                                            <img class="avatar-img" src="{{ asset($customer->img) }}"
                                                alt="Image Description">
                                        </div>
                                        <div class="media-body">
                                            <span class="h5 text-hover-primary mb-0">{{ $customer->full_name }} <i
                                                    class="tio-verified text-primary" data-toggle="tooltip"
                                                    data-placement="top" title="Top endorsed"></i></span>
                                        </div>
                                    </a>
                                </td>
                                <td>
                                    @if ($customer->status == 2)
                                        <span class="legend-indicator bg-success"></span>Successful
                                    @else
                                        <span class="legend-indicator bg-danger"></span>fail
                                    @endif
                                </td>
                                <td>{{ $customer->email }}</td>
                                <?php
                                $date = date('Y-m-d');
                                $day = date('d', strtotime($date) - strtotime($customer->created_at));
                                ?>
                                <td>{{ $day }} day ago</td>
                                <td>{{ $customer->id }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- End Table -->

            <!-- Footer -->
            <div class="card-footer">
                <!-- Pagination -->
                <div class="row justify-content-center justify-content-sm-between align-items-sm-center">
                    <div class="col-sm mb-2 mb-sm-0">
                        <div class="d-flex justify-content-center justify-content-sm-start align-items-center">
                            <span class="mr-2">Showing:</span>

                            <!-- Select -->
                            <select id="datatableEntries" class="js-select2-custom" data-hs-select2-options='{
                                "minimumResultsForSearch": "Infinity",
                                "customClass": "custom-select custom-select-sm custom-select-borderless",
                                "dropdownAutoWidth": true,
                                "width": true
                              }'>
                                <option value="4">4</option>
                                <option value="6">6</option>
                                <option value="8" selected="">8</option>
                                <option value="12">12</option>
                            </select>
                            <!-- End Select -->

                            <span class="text-secondary mr-2">of</span>

                            <!-- Pagination Quantity -->
                            <span id="datatableWithPaginationInfoTotalQty"></span>
                        </div>
                    </div>

                    <div class="col-sm-auto">
                        <div class="d-flex justify-content-center justify-content-sm-end">
                            <!-- Pagination -->
                            <nav id="datatablePagination" aria-label="Activity pagination"></nav>
                        </div>
                    </div>
                </div>
                <!-- End Pagination -->
            </div>
            <!-- End Footer -->
        </div>
        <!-- End Card -->
    </div>
    <!-- End Content -->

@endsection
