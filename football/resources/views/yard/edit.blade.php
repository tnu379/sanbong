@extends('layout')
@section('title', 'Yard')
@section('content')
    <!-- Content -->
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-sm mb-2 mb-sm-0">
                    <h1 class="page-header-title">Add Yard</h1>
                </div>
            </div>
            <!-- End Row -->
        </div>
        <!-- End Page Header -->

        <form action="{{ route('yard_update', $yard->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-12">
                    <!-- Card -->
                    <div class="card mb-3 mb-lg-5">
                        <!-- Header -->
                        <div class="card-header">
                            <h4 class="card-header-title">Yard information</h4>
                        </div>
                        <!-- End Header -->

                        <!-- Body -->
                        <div class="card-body">
                            <!-- Form Group -->
                            <div class="form-group">
                                <label for="productNameLabel" class="input-label">Name<i
                                        class="tio-help-outlined text-body ml-1" data-toggle="tooltip" data-placement="top"
                                        title="Products are the goods or services you sell."></i></label>

                                <input type="text" class="form-control" name="name" id="productNameLabel"
                                    value="{{ $yard->name }}" placeholder="Name" aria-label="Shirt, t-shirts, etc.">
                            </div>
                            <!-- End Form Group -->
                        </div>
                        <!-- Body -->
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <!-- Card -->
                            <div class="card mb-3 mb-lg-5">
                                <!-- Header -->
                                <div class="card-header">
                                    <h4 class="card-header-title">Pricing</h4>
                                </div>
                                <!-- End Header -->

                                <!-- Body -->
                                <div class="card-body">
                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label for="priceNameLabel" class="input-label">Price</label>

                                        <div class="input-group">
                                            <input type="text" class="form-control" name="price" id="priceNameLabel"
                                                value="{{ $yard->price }}" placeholder="0.00" aria-label="0.00">

                                            <div class="input-group-append">
                                                <!-- Select -->
                                                <div id="priceSelect" class="select2-custom select2-custom-right">
                                                    <select class="js-select2-custom custom-select" size="1"
                                                        style="opacity: 0;" data-hs-select2-options='{
                                                                                                            "dropdownParent": "#priceSelect",
                                                                                                            "dropdownAutoWidth": true,
                                                                                                            "width": true
                                                                                                        }'>
                                                        <option value="USD" selected="">VND</option>
                                                    </select>
                                                </div>
                                                <!-- End Select -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Body -->
                            </div>
                            <!-- End Card -->
                        </div>
                        <div class="col-4">
                            <div class="card">
                                <!-- Header -->
                                <div class="card-header">
                                    <h4 class="card-header-title">Size</h4>
                                </div>
                                <!-- End Header -->

                                <!-- Body -->
                                <div class="card-body">
                                    <h6 class="text-cap">Options</h6>

                                    <div class="js-add-field" data-hs-add-field-options='{
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
                                                        <select name="size" class="js-select2-custom custom-select" size="1"
                                                            style="opacity: 0;" data-hs-select2-options='{
                                                                                                    "minimumResultsForSearch": "Infinity"
                                                                                                    }'>
                                                            <option selected value="{{ $yard->size }}">
                                                                {{ $sizes[$yard->size] }}</option>
                                                            @foreach ($sizes as $key => $value)
                                                                <option value="{{ $key }}">{{ $value }}
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

                        <div class="col-4">
                            <!-- Toggle Switch -->
                            <div class="card">
                                <!-- Header -->
                                <div class="card-header">
                                    <h4 class="card-header-title">Status</h4>
                                </div>
                                <!-- End Header -->

                                <!-- Body -->
                                <div class="card-body">
                                    <select name="is_active" class="js-select2-custom custom-select" size="1"
                                        style="opacity: 0;" data-hs-select2-options='{
                                                                            "minimumResultsForSearch": "Infinity"
                                                                            }'>
                                        <option selected value="{{ $yard->is_active }}">
                                            {{ $is_active[$yard->is_active] }}</option>
                                        @foreach ($is_active as $key => $value)
                                            <option value="{{ $key }}">{{ $value }}
                                            </option>
                                        @endforeach

                                    </select>
                                    </label>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- End Row -->
                </div>
            </div>
            <input type="submit" value="Sửa" style="width: 110px;" class="btn btn-primary">
        </form>
    </div>
    </div>
@endsection
