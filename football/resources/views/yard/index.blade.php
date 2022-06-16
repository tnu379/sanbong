@extends('layout')
@section('title', 'User')
@section('content')
    <!-- Content -->
    <?php
    function formatDollars($dollars)
    {
        return 'đ' . sprintf('%0.0f', $dollars);
    } ?>
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center mb-3">
                <div class="col-sm mb-2 mb-sm-0">
                    <h1 class="page-header-title">Yard</h1>
                </div>

                <div class="col-sm-auto">
                    <a class="btn btn-primary" href="{{route('yard_create')}}">Add Yard</a>
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
            </div>
            <!-- End Nav Scroller -->
        </div>
        <!-- End Page Header -->


        <!-- Card -->
        <div class="card">
            <!-- Table -->
            <div class="table-responsive datatable-custom">
                <table id="datatable"
                    class="table table-borderless table-thead-bordered table-nowrap table-align-middle card-table"
                    data-hs-datatables-options='{
                                           "columnDefs": [{
                                              "targets": [0, 4, 9],
                                              "width": "5%",
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
                            <th class="table-column-pl-0">Name</th>
                            <th>Price</th>
                            <th>Status</th>
                            <th>Size</th>
                            <th>Active</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($yards as $yard)
                            <tr>

                                <td class="table-column-pr-0">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="productsCheck1">
                                        <label class="custom-control-label" for="productsCheck1"></label>
                                    </div>
                                </td>
                                <td class="table-column-pl-0">
                                    <a class="media align-items-center" href="{{route('yard_edit',$yard->id)}}">
                                        <h5 class="text-hover-primary mb-0">{{ $yard->name }}</h5>
                                    </a>
                                </td>
                                <td>{{ formatDollars($yard->price) }}</td>
                                <td>
                                    <label class="toggle-switch toggle-switch-sm" for="stocksCheckbox1">
                                        <input disabled='true' type="checkbox" class="toggle-switch-input" id="stocksCheckbox1"
                                            @if ($yard->status == 1) checked=""
                                            @else @endif>
                                        <span class="toggle-switch-label">
                                            <span class="toggle-switch-indicator"></span>
                                        </span>
                                    </label>
                                </td>
                                <td>{{$sizes[$yard->size]}}</td>
                                <td>
                                    <label class="toggle-switch toggle-switch-sm" for="stocksCheckbox1">
                                        <input disabled='true' type="checkbox" class="toggle-switch-input" id="stocksCheckbox1"
                                            @if ($yard->is_active == 1) checked=""
                                            @else @endif>
                                        <span class="toggle-switch-label">
                                            <span class="toggle-switch-indicator"></span>
                                        </span>
                                    </label>
                                </td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a class="btn btn-sm btn-white" href="{{route('yard_del',$yard->id)}}}">
                                            <i class="tio-edit"></i> Delete
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
@endsection
