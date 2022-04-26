@extends('layout')
@section('title', 'User')
@section('content')
    <!-- Content -->
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-sm mb-2 mb-sm-0">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-no-gutter">
                            <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Pages</a></li>
                            <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Users</a></li>
                            <li id="overview" class="breadcrumb-item active" aria-current="page">Overview</li>
                        </ol>
                    </nav>

                    <h1 class="page-header-title">Users</h1>
                </div>

                <div class="col-sm-auto">
                    <a class="btn btn-primary" href="users-add-user.html">
                        <i class="tio-user-add mr-1"></i> Add user
                    </a>
                </div>
            </div>
            <!-- End Row -->
        </div>
        <!-- End Page Header -->

        <!-- Stats -->
        <div class="row gx-2 gx-lg-3">
            <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
                <!-- Card -->
                <div class="card h-100">
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2">Total users</h6>

                        <div class="row align-items-center gx-2">
                            <div class="col">
                                <span class="js-counter display-4 text-dark">{{ $count }}</span>
                            </div>
                        </div>
                        <!-- End Row -->
                    </div>
                </div>
                <!-- End Card -->
            </div>

            <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
                <!-- Card -->
                <div class="card h-100">
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2">Active members</h6>

                        <div class="row align-items-center gx-2">
                            <div class="col">
                                <span class="js-counter display-4 text-dark">{{ $countActiveMember }}</span>
                            </div>

                        </div>
                        <!-- End Row -->
                    </div>
                </div>
                <!-- End Card -->
            </div>

        </div>
        <!-- End Stats -->

        <!-- Card -->
        <div class="card">
            <!-- Header -->
            <div class="card-header">
                <div class="row justify-content-between align-items-center flex-grow-1">
                    <div class="col-sm-6 col-md-4 mb-3 mb-sm-0">
                        <form>
                            <!-- Search -->
                            <div class="input-group input-group-merge input-group-flush">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="tio-search"></i>
                                    </div>
                                </div>
                                <input id="datatableSearch" type="search" class="form-control" placeholder="Search users"
                                    aria-label="Search users">
                            </div>
                            <!-- End Search -->
                        </form>
                    </div>

                    <div class="col-sm-6">
                        <div class="d-sm-flex justify-content-sm-end align-items-sm-center">
                            <!-- Datatable Info -->
                            <div id="datatableCounterInfo" class="mr-2 mb-2 mb-sm-0" style="display: none;">
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
                </div>
                <!-- End Row -->
            </div>
            <!-- End Header -->

            <!-- Table -->
            <div class="table-responsive datatable-custom">
                <table id="datatable"
                    class="table table-lg table-borderless table-thead-bordered table-nowrap table-align-middle card-table"
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
                            <th>Status</th>
                            <th>Role</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td class="table-column-pr-0">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="usersDataCheck1">
                                        <label class="custom-control-label" for="usersDataCheck1"></label>
                                    </div>
                                </td>
                                <td class="table-column-pl-0">
                                    <a class="d-flex align-items-center" href="{{ route('user_edit', $user->id) }}">
                                        <div class="avatar avatar-circle">
                                            <img class="avatar-img" src="{{ asset($user->img) }}"
                                                alt="Image Description">
                                        </div>
                                        <div class="ml-3">
                                            <span class="d-block h5 text-hover-primary mb-0">{{ $user->full_name }}<i
                                                    class="tio-verified text-primary" data-toggle="tooltip"
                                                    data-placement="top" title="Top endorsed"></i></span>
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
                                <td>
                                    @if ($user->status == 1)
                                        <span class="legend-indicator bg-success"></span>Active
                                    @else
                                        <span class="legend-indicator bg-danger"></span>In Active
                                    @endif
                                </td>
                                <td>Vendor</td>
                                <td><a class="btn btn-danger" href="{{ route('user_del', $user->id) }}">Delete</a></td>
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
                                <option value="10">10</option>
                                <option value="15" selected="">15</option>
                                <option value="20">20</option>
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
