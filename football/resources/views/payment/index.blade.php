@extends('layout')
@section('title', 'Yard')
@section('content')
    <div class="content container-fluid">
    <?php
    function formatDollars($dollars)
    {
        return 'đ' . sprintf('%0.0f', $dollars);
    } ?>
    <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center mb-3">
                <div class="col-sm">
                    <h1 class="page-header-title">Orders <span class="badge badge-soft-dark ml-2">{{ $countPayment }}</span>
                    </h1>
                </div>
            </div>
            <!-- End Row -->

            <!-- Nav Scroller -->
            <div class="js-nav-scroller hs-nav-scroller-horizontal">
                <span class="hs-nav-scroller-arrow-prev" style="display: none;">
                    <a class="hs-nav-scroller-arrow-link" href="javascript:;">
                        <i class="tio-chevron-left"></i>
                    </a>
                </span>

                <span class="hs-nav-scroller-arrow-next" style="display: none;">
                    <a class="hs-nav-scroller-arrow-link" href="javascript:;">
                        <i class="tio-chevron-right"></i>
                    </a>
                </span>

                <!-- Nav -->
                <ul class="nav nav-tabs page-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">All products</a>
                    </li>
                </ul>
                <!-- End Nav -->
            </div>
            <!-- End Nav Scroller -->
        </div>
        <!-- End Page Header -->

        <!-- Card -->
        <div class="card">
            <!-- Header -->
            <div class="card-header">
                <div class="row justify-content-between align-items-center flex-grow-1">
                    <div class="col-lg-6 mb-3 mb-lg-0">
                        <form>
                            <!-- Search -->
                            <div class="input-group input-group-merge input-group-flush">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="tio-search"></i>
                                    </div>
                                </div>
                                <input id="datatableSearch" type="search" class="form-control" placeholder="Search orders"
                                       aria-label="Search orders">
                            </div>
                            <!-- End Search -->
                        </form>
                    </div>
                </div>
                <!-- End Row -->
            </div>
            <!-- End Header -->

            <!-- Table -->
            <div class="table-responsive datatable-custom">
                <table id="datatable"
                       class="table table-hover table-borderless table-thead-bordered table-nowrap table-align-middle card-table"
                       style="width: 100%" data-hs-datatables-options='{
                           "columnDefs": [{
                              "targets": [0],
                              "orderable": false
                            }],
                           "order": [],
                           "info": {
                             "totalQty": "#datatableWithPaginationInfoTotalQty"
                           },
                           "search": "#datatableSearch",
                           "entries": "#datatableEntries",
                           "pageLength": 12,
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
                        <th class="table-column-pl-0">Order</th>
                        <th>Date</th>
                        <th>Customer</th>
                        <th>Payment status</th>
                        <th>Payment</th>
                        <th>Total</th>
                        <th>Actions</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach ($data as $payment)
                        <tr>
                            <td class="table-column-pr-0">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="ordersCheck1">
                                    <label class="custom-control-label" for="ordersCheck1"></label>
                                </div>
                            </td>
                            <td class="table-column-pl-0">
                                <a href="ecommerce-order-details.html">#{{$payment->id}}</a>
                            </td>
                            <td>{{date($payment->created_at)}}</td>
                            <td>
                                <a class="text-body" href="">{{$payment->title}}</a>
                            </td>
                            <td>
                                @if ($payment->status == 1)
                                    <span class="badge badge-soft-info">
                                        <span class="legend-indicator bg-success"></span>
                                        Paid
                                    </span>
                                @else
                                    <span class="badge badge-soft-info">
                                        <span class="legend-indicator bg-warning"></span>
                                        pending
                                    </span>
                                @endif

                            </td>
                            <td>
                               @if($payment->type == 2)
                                    <div class="d-flex align-items-center">
                                        <img class="avatar avatar-xss avatar-4by3 mr-2"
                                             src="assets\svg\brands\mastercard.svg" alt="Image Description">
                                        <span class="text-dark">VN Pay</span>
                                    </div>
                                @else
                                    <div class="d-flex align-items-center">
                                        <img class="avatar avatar-xss avatar-4by3 mr-2"
                                             src="assets\svg\brands\mastercard.svg" alt="Image Description">
                                        <span class="text-dark">Tại Quầy</span>
                                    </div>
                                @endif
                            </td>
                            <td>{{formatDollars($payment->amount)}}</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a class="btn btn-sm btn-white" href="{{route('payment_change_status',$payment->id)}}">
                                        <i class="tio-visible-outlined"></i> Change status
                                    </a>

                                </div>
                            </td>
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
                                <option value="12" selected="">12</option>
                                <option value="14">14</option>
                                <option value="16">16</option>
                                <option value="18">18</option>
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

    <!-- Footer -->

    <div class="footer">
        <div class="row justify-content-between align-items-center">
            <div class="col">
            </div>
            <div class="col-auto">
                <div class="d-flex justify-content-end">
                    <!-- List Dot -->
                    <ul class="list-inline list-separator">
                        <li class="list-inline-item">
                            <a class="list-separator-link" href="#">FAQ</a>
                        </li>

                        <li class="list-inline-item">
                            <a class="list-separator-link" href="#">License</a>
                        </li>

                        <li class="list-inline-item">
                            <!-- Keyboard Shortcuts Toggle -->
                            <div class="hs-unfold">
                                <a class="js-hs-unfold-invoker btn btn-icon btn-ghost-secondary rounded-circle"
                                   href="javascript:;" data-hs-unfold-options='{
                                    "target": "#keyboardShortcutsSidebar",
                                    "type": "css-animation",
                                    "animationIn": "fadeInRight",
                                    "animationOut": "fadeOutRight",
                                    "hasOverlay": true,
                                    "smartPositionOff": true
                                   }'>
                                    <i class="tio-command-key"></i>
                                </a>
                            </div>
                            <!-- End Keyboard Shortcuts Toggle -->
                        </li>
                    </ul>
                    <!-- End List Dot -->
                </div>
            </div>
        </div>
    </div>
@endsection
