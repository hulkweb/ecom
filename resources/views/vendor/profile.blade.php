@extends('layouts.admin')
@push('css')
    <!-- Daterangepicker css -->
    <link rel="stylesheet" href="/assets_admin/vendor/daterangepicker/daterangepicker.css">

    <!-- Vector Map css -->
    <link rel="stylesheet" href="/assets_admin/vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css">

    <!-- Theme Config Js -->
    <script src="/assets_admin/js/hyper-config.js"></script>
@endpush
@push('scripts')
    <!-- Daterangepicker js -->
    <script src="/assets_admin/vendor/daterangepicker/moment.min.js"></script>
    <script src="/assets_admin/vendor/daterangepicker/daterangepicker.js"></script>
    <!-- Apex Charts js -->
    <script src="/assets_admin/vendor/apexcharts/apexcharts.min.js"></script>
    <!-- Vector Map js -->
    <script src="/assets_admin/vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="/assets_admin/vendor/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js"></script>
@endpush
@section('admin_content')
    <div class="container-fluid">


        <!-- end row -->
        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                                <li class="breadcrumb-item active">Profile </li>
                            </ol>
                        </div>
                        <h4 class="page-title">Profile </h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">

                <div class="col-xl-8 col-lg-7 m-auto">
                    <div class="card">
                        <div class="card-body">




                            <div class="tab-pane" id="settings">
                                <form action="{{ route('vendor._profile') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i> Personal
                                        Info</h5>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="firstname" class="form-label">Store Name</label>
                                                <input type="text" class="form-control"
                                                    value="{{ auth()->user()->name }}" name="name" id="firstname"
                                                    placeholder="Enter first name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="phone" class="form-label">Phone</label>
                                                <input type="text" class="form-control" name="phone" id="phone"
                                                    value="{{ auth()->user()->phone }}" placeholder="Phone">
                                            </div>
                                        </div> <!-- end col -->
                                    </div> <!-- end row -->



                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="useremail" class="form-label">Email Address</label>
                                                <input type="email" class="form-control" name="email"
                                                    value="{{ auth()->user()->email }}" id="useremail"
                                                    placeholder="Enter email">
                                                <span class="form-text text-muted"><small>If you want to change email
                                                        please <a href="javascript: void(0);">click</a>
                                                        here.</small></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="userpassword" class="form-label">Password</label>
                                                <input type="password" class="form-control" id="userpassword"
                                                    placeholder="Enter password">
                                                <span class="form-text text-muted"><small>If you want to change password
                                                        please <a href="javascript: void(0);">click</a>
                                                        here.</small></span>
                                            </div>
                                        </div> <!-- end col -->
                                    </div> <!-- end row -->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                @if (auth()->user()->profile)
                                                    <img src="{{ asset('uploads/profiles/' . auth()->user()->profile) }}"
                                                        style="height:50px" alt="">
                                                @else
                                                    <div class="badge badge-primary">NO Image</div>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="profile" class="form-label">Store Logo</label>
                                                <input type="file" class="form-control" name="profile" id="profile"
                                                    placeholder="Enter password">

                                            </div>
                                        </div> <!-- end col -->
                                    </div> <!-- end row -->



                                    <div class="text-end">
                                        <button type="submit" class="btn btn-success mt-2"><i
                                                class="mdi mdi-content-save"></i> Save</button>
                                    </div>
                                </form>
                            </div>
                            <!-- end settings content-->

                            <!-- end tab-content -->
                        </div> <!-- end card body -->
                    </div> <!-- end card -->
                </div> <!-- end col -->
            </div>
            <!-- end row-->

        </div>
        <!-- container -->

        <!-- end row -->

    </div>
@endsection
