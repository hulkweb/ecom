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
    <!-- Vendor js -->
    <script src="/assets_admin/js/vendor.min.js"></script>
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
    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">eCommerce</a></li>
                            <li class="breadcrumb-item active">Orders</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Orders</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row mb-2">
                            <div class="col-xl-8">
                                <form
                                    class="row gy-2 gx-2 align-items-center justify-content-xl-start justify-content-between">
                                    <div class="col-auto">
                                        <label for="inputPassword2" class="visually-hidden">Search</label>
                                        <input type="search" class="form-control" id="inputPassword2"
                                            placeholder="Search...">
                                    </div>
                                    <div class="col-auto">
                                        <div class="d-flex align-items-center">
                                            <label for="status-select" class="me-2">Status</label>
                                            <select class="form-select" id="status-select">
                                                <option selected>Choose...</option>
                                                <option value="1">Paid</option>
                                                <option value="2">Awaiting Authorization</option>
                                                <option value="3">Payment failed</option>
                                                <option value="4">Cash On Delivery</option>
                                                <option value="5">Fulfilled</option>
                                                <option value="6">Unfulfilled</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!--   <div class="col-xl-4">
                                    <div class="text-xl-end mt-xl-0 mt-2">
                                        <button type="button" class="btn btn-danger mb-2 me-2"><i class="mdi mdi-basket me-1"></i> Add New Order</button>
                                        <button type="button" class="btn btn-light mb-2">Export</button>
                                    </div>
                                </div> end col-->
                        </div>

                        <div class="table-responsive">
                            <table class="table table-centered table-nowrap mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th style="width: 20px;">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck1">
                                                <label class="form-check-label" for="customCheck1">&nbsp;</label>
                                            </div>
                                        </th>
                                        <th>Order ID</th>
                                        <th>Date</th>
                                        <th>Payment Status</th>
                                        <th>Total</th>
                                        {{-- <th>Payment Method</th> --}}
                                        <th>Order Status</th>
                                        <th style="width: 125px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $item)
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="customCheck2">
                                                    <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                                </div>
                                            </td>
                                            <td><a href="{{ route('orders.edit', $item) }}"
                                                    class="text-body fw-bold">#{{ $item->order_id }}</a> </td>
                                            <td>
                                                {{ date(' M d Y', strtotime($item->created_at)) }} <small
                                                    class="text-muted">
                                                    {{ date('h:s A', strtotime($item->created_at)) }}</small>
                                            </td>
                                            <td>
                                                <h5>
                                                    {!! $item->payment_id != null
                                                        ? ' <span class="badge badge-success-lighten"><i class="mdi mdi-bitcoin"></i> Paid</span>'
                                                        : '<span class="badge badge-danger-lighten"><i class="mdi mdi-cancel"></i> Payment Failed</span>' !!}
                                                </h5>
                                            </td>
                                            <td>
                                                ₹{{ $item->amount }}
                                            </td>
                                            {{-- <td>
                                        Mastercard --}}
                                            </td>
                                            <td>
                                                <h5><span class="badge badge-warning-lighten">{{ $item->status }}</span>
                                                </h5>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" class="action-icon"> <i
                                                        class="mdi mdi-eye"></i></a>
                                                <a href="{{ route('orders.edit', $item) }}" class="action-icon"> <i
                                                        class="mdi mdi-square-edit-outline"></i></a>
                                                <a href="javascript:void(0);" class="action-icon"> <i
                                                        class="mdi mdi-delete"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col -->
        </div>
        <!-- end row -->

    </div> <!-- container -->
@endsection
