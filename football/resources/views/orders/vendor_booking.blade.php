@extends('layout')
@section('title', 'Yard')
@section('content')
    <div class="row">
        <table
            id="datatable example"
            class="table table-lg table-borderless table-thead-bordered table-nowrap table-align-middle card-table display"
            data-hs-datatables-options='{"columnDefs": [{"targets": [0, 7],"orderable": false}],"order": [], "info": {"totalQty": "#datatableWithPaginationInfoTotalQty"
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
                <th>Name</th>
                <th>Address</th>
                <th>District</th>
                <th>Role</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <?=
                $i = 0;
            ?>
            @foreach($user->yards as $yard)
            <tr>
                <td colspan="1">{{++$i}}</td>
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
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
