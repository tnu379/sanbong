@extends('layout')
@section('title', 'Yard')
@section('content')
    <!-- Content -->
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-sm mb-2 mb-sm-0">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-no-gutter">
                            </li>
                        </ol>
                    </nav>
                    <h1 class="page-header-title">Add Blog</h1>
                </div>
            </div>
            <!-- End Row -->
        </div>
        <!-- End Page Header -->

        <div class="row">
            <div class="col-lg-8">
                <form action="{{route('save-update',$blog->id)}}" method="POST">
                    @csrf
                    <!-- Card -->
                    <div class="card mb-3 mb-lg-5">
                        <!-- Header -->
                        <div class="card-header">
                            <h4 class="card-header-title">Blog</h4>
                        </div>
                        <!-- End Header -->

                        <!-- Body -->
                        <div class="card-body">
                            <!-- Form Group -->
                            <div class="form-group">
                                <label for="Title" class="input-label">Title <i class="tio-help-outlined text-body ml-1"
                                        data-toggle="tooltip" data-placement="top"></i></label>

                                <input type="text" class="form-control" name="title" id="Title" value="{{$blog->title}}">
                            </div>
                            <!-- End Form Group -->

                            <div class="row">
                                <div class="col-sm-12">
                                    <!-- Form Group -->
                                    <div class="form-group">
                                        <label for="Content" class="input-label">Content</label>
                                        <input type="text" class="form-control" name="content" id="Content" value="{{$blog->content}}">
                                    </div>
                                    <!-- End Form Group -->
                                </div>
                                <!-- End Quill -->
                            </div>
                            <!-- Body -->
                        </div>
                        <!-- End Card -->

                        <!-- Card -->
                        <div class="card mb-3 mb-lg-5">
                            <!-- Header -->
                            <div class="card-header">
                                <h4 class="card-header-title">Media</h4>
                            </div>
                            <!-- End Header -->

                            <!-- Body -->
                            <div class="card-body">
                                <label for="myfile">Select a file:</label>
                                <input type="file" id="myfile" name="myfile">
                            </div>
                            <!-- Body -->
                        </div>

                        <div class="card mb-3 mb-lg-5">
                            <!-- Body -->
                            <div class="card-body">
                                <input type="submit" class="btn btn-primary" value="Sửa">
                            </div>
                            <!-- Body -->
                        </div>
                        <!-- End Card -->
                    </div>
                </form>
            </div>
            <!-- End Row -->
            <!-- End Footer -->
        @endsection
