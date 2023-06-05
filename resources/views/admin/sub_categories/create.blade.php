@extends('layouts.admin')
@push('css')
    <!-- Daterangepicker css -->
    <link rel="stylesheet" href="/assets_admin/vendor/daterangepicker/daterangepicker.css">
    <!-- Select2 Plugins css -->
    <link href="/assets_admin/vendor/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <!-- Vector Map css -->
@endpush
@push('scripts')
    <!-- Vendor js -->
    <script src="/assets_admin/js/vendor.min.js"></script>
    <!-- Daterangepicker js -->
    <script src="/assets_admin/vendor/daterangepicker/moment.min.js"></script>
    <script src="/assets_admin/vendor/select2/js/select2.min.js"></script>

    <!-- Dropzone File Upload js -->
    <script src="/assets_admin/vendor/dropzone/min/dropzone.min.js"></script>
    <!-- Bootstrap Datepicker Plugin js -->
    <script src="/assets_admin/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <!-- init js -->
    <script src="/assets_admin/js/ui/component.fileupload.js"></script>
@endpush
@section('admin_content')
    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Categories</a></li>
                            <li class="breadcrumb-item active">Create Sub Categories</li>
                        </ol>
                    </div>
                    <h4 class="page-title"> SUB Categories</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-xl-6">
                                <form action="{{ route('sub_categories.store') }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="projectname" class="form-label">Category Name</label>
                                        <input type="text" id="projectname" class="form-control"
                                            placeholder="Enter category name" name="title">
                                    </div>

                                    <div class="mb-3">
                                        <label for="project-overview" class="form-label">Overview</label>
                                        <textarea class="form-control" name="details" id="project-overview" rows="5"
                                            placeholder="Enter some brief about categories.."></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="product-overview" class="form-label">Select category</label>

                                        <select class="form-control select2" name="category_id" data-toggle="select2"
                                            required>
                                            <option value="">Select</option>
                                            @foreach ($categories as $i => $item)
                                                <option value="{{ $item->id }}">{{ $item->title }}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                    <div class="mb-3 text-center">
                                        <button type="submit" class="btn btn-primary ">Submit</button>
                                    </div>

                                </form>



                            </div> <!-- end col-->


                        </div>
                        <!-- end row -->

                    </div> <!-- end card-body -->
                </div> <!-- end card-->
            </div> <!-- end col-->
        </div>
        <!-- end row-->

    </div> <!-- container -->
@endsection
