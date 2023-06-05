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

        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <form class="d-flex">
                            <div class="input-group">
                                <input type="text" class="form-control form-control-light" id="dash-daterange">
                                <span class="input-group-text bg-primary border-primary text-white">
                                    <i class="mdi mdi-calendar-range font-13"></i>
                                </span>
                            </div>
                            <a href="javascript: void(0);" class="btn btn-primary ms-2">
                                <i class="mdi mdi-autorenew"></i>
                            </a>
                            <a href="javascript: void(0);" class="btn btn-primary ms-1">
                                <i class="mdi mdi-filter-variant"></i>
                            </a>
                        </form>
                    </div>
                    <h4 class="page-title">Dashboard</h4>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-10 col-lg-10 m-auto">

                <div class="row">
                    <div class="col-sm-4">
                        <div class="card widget-flat">
                            <div class="card-body">
                                <div class="float-end">
                                    <i class="mdi mdi-account-multiple widget-icon"></i>
                                </div>
                                <h5 class="text-muted fw-normal mt-0" title="Number of Customers">Customers
                                </h5>
                                <h3 class="mt-3 mb-3">{{ $users }}</h3>
                                {{-- <p class="mb-0 text-muted">
                                    <span class="text-success me-2"><i class="mdi mdi-arrow-up-bold"></i>
                                        5.27%</span>
                                    <span class="text-nowrap">Since last month</span>
                                </p> --}}
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->

                    <div class="col-sm-4">
                        <div class="card widget-flat">
                            <div class="card-body">
                                <div class="float-end">
                                    <i class="mdi mdi-cart-plus widget-icon"></i>
                                </div>
                                <h5 class="text-muted fw-normal mt-0" title="Number of Orders">Orders</h5>
                                <h3 class="mt-3 mb-3">{{ $orders }}</h3>
                                {{-- <p class="mb-0 text-muted">
                                    <span class="text-danger me-2"><i class="mdi mdi-arrow-down-bold"></i>
                                        1.08%</span>
                                    <span class="text-nowrap">Since last month</span>
                                </p> --}}
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->
                </div> <!-- end row -->

                <div class="row">
                    <div class="col-sm-4">
                        <div class="card widget-flat">
                            <div class="card-body">
                                <div class="float-end">
                                    <i class="mdi mdi-currency-usd widget-icon"></i>
                                </div>
                                <h5 class="text-muted fw-normal mt-0" title="Average Revenue">Revenue</h5>
                                <h3 class="mt-3 mb-3">₹ {{ $revenue }}</h3>
                                {{-- <p class="mb-0 text-muted">
                                    <span class="text-danger me-2"><i class="mdi mdi-arrow-down-bold"></i>
                                        7.00%</span>
                                    <span class="text-nowrap">Since last month</span>
                                </p> --}}
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->

                    <div class="col-sm-4">
                        <div class="card widget-flat">
                            <div class="card-body">
                                <div class="float-end">
                                    <i class="mdi mdi-pulse widget-icon"></i>
                                </div>
                                <h5 class="text-muted fw-normal mt-0" title="Growth">Products</h5>
                                <h3 class="mt-3 mb-3">{{ $products }}</h3>
                                {{-- <p class="mb-0 text-muted">
                                    <span class="text-success me-2"><i class="mdi mdi-arrow-up-bold"></i>
                                        4.87%</span>
                                    <span class="text-nowrap">Since last month</span>
                                </p> --}}
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->
                    <div class="col-sm-4">
                        <div class="card widget-flat">
                            <div class="card-body">
                                <div class="float-end">
                                    <i class="mdi mdi-account-multiple widget-icon"></i>
                                </div>
                                <h5 class="text-muted fw-normal mt-0" title="Number of Customers">vendors
                                </h5>
                                <h3 class="mt-3 mb-3">{{ $vendors }}</h3>
                                {{-- <p class="mb-0 text-muted">
                                    <span class="text-success me-2"><i class="mdi mdi-arrow-up-bold"></i>
                                        5.27%</span>
                                    <span class="text-nowrap">Since last month</span>
                                </p> --}}
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->

                </div> <!-- end row -->

            </div> <!-- end col -->

          <!-- end col -->
        </div>
        <!-- end row -->


        <!-- end row -->

    </div>
@endsection
