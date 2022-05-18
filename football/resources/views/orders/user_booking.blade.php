@extends('layout')
@section('title', 'Yard')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <!-- Header -->
                <div class="card-header">
                    <h4 class="card-header-title">Vendor</h4>
                </div>
                <!-- End Header -->

                <!-- Body -->
                <div class="card-body">
                    <h6 class="text-cap">Options</h6>

                    <div class="js-add-field"
                        data-hs-add-field-options='{
                                                                                                                                            "template": "#addAnotherOptionFieldTemplate",
                                                                                                                                            "container": "#addAnotherOptionFieldContainer",
                                                                                                                                            "defaultCreated": 0
                                                                                                                                        }'>
                        <!-- Form Group -->
                        <div class="form-group">
                            <div class="row">
                                <div class="col-4">
                                    <div class="input-group-prepend">
                                        <!-- Select -->
                                        <select name="size" id="user_filter" class="js-select2-custom custom-select"
                                            size="1" style="opacity: 0;"
                                            data-hs-select2-options='{
                                                                                                                                                        "minimumResultsForSearch": "Infinity"
                                                                                                                                                        }'>
                                            @foreach ($users as $user)
                                                <option value="{{ $user->id }}">{{ $user->full_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <!-- End Select -->
                                    </div>
                                </div>
                            </div>
                            <!-- End Form Group -->
                        </div>
                    </div>
                    <!-- Body -->
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="table-responsive datatable-custom">
            <table id="datatable example"
                class="table table-lg table-borderless table-thead-bordered table-nowrap table-align-middle card-table display"
                data-hs-datatables-options='{
                                                                                                      "columnDefs": [{
                                                                                                          "targets": [0, 7],
                                                                                                          "orderable": false
                                                                                                        }],
                                                                                                      "order": [],
                                                                                                      "info": {
                                                                                                        "totalQty": "#datatableWithPaginationInfoTotalQty"
                                                                                                      },
                                                                                                      "search": "#datatableSearch",
                                                                                                      "entries": "#datatableEntries",
                                                                                                      "pageLength": 15,
                                                                                                      "isResponsive": false,
                                                                                                      "isShowPaging": false,
                                                                                                      "pagination": "datatablePagination"
                                                                                                    }'>
                <thead class="thead-light">
                    <tr>
                        <th class="table-column-pr-0">
                            <div class="custom-control custom-checkbox">
                                <input id="datatableCheckAll" type="checkbox" class="custom-control-input">
                                <label class="custom-control-label" for="datatableCheckAll"></label>
                            </div>
                        </th>
                        <th class="table-column-pl-0">Name</th>
                        <th>Address</th>
                        <th>District</th>
                        <th>Role</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td class="table-column-pr-0 ">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="usersDataCheck1">
                                    <label class="custom-control-label" for="usersDataCheck1"></label>
                                </div>
                            </td>
                            <td class="table-column-pl-0 showhr">
                                <a class="d-flex align-items-center">
                                    <div class="avatar avatar-circle">
                                        <img class="avatar-img" src="{{ asset($user->img) }}" alt="Image Description">
                                    </div>
                                    <div class="ml-3">
                                        <span class="d-block h5 text-hover-primary mb-0">{{ $user->full_name }}<i
                                                class="tio-verified text-primary" data-toggle="tooltip" data-placement="top"
                                                title="Top endorsed"></i></span>
                                        <span class="d-block font-size-sm text-body">{{ $user->email }}</span>
                                    </div>
                                </a>
                            </td>
                            <td>
                                <span class="d-block font-size-sm">address: {{ $user->address }}</span>
                                <span class="d-block font-size-sm">ward: {{ $user->ward }}</span>
                                <span class="d-block font-size-sm">street: {{ $user->street }}</span>
                            </td>
                            <td>{{ $district[$user->district] }}<span class="text-hide">Code: GB</span></td>
                            <td>Vendor</td>
                        </tr>
                        <tr class="aser bg-soft-dark" style="display: none">
                            <td colspan="1"></td>
                            <td>Name</td>
                            <td>Size</td>
                            <td>Active</td>
                            <td>Current Price</td>
                            <td></td>
                            <td></td>
                        </tr>
                        @foreach ($user->yards as $yard)
                            <tr class="aser bg-soft-primary" style="display: none">
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
                                <td>đ{{$prices[date('H')] ?? 90000}}</td>
                                <td><a class="btn btn-primary" href="{{ route('orders_booking', $yard->id) }}">Orders</a></td>
                                <td></td>
                            </tr>
                        @endforeach
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
