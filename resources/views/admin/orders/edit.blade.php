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
                        <div class="row">
                            <div class="col-sm-5">
                                <h4>User Details</h4>
                                <table class="table">
                                    <tr>
                                        <td class="text-capitalize">name</td>
                                        <td>{{ $order->user->name }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-capitalize">email</td>
                                        <td>{{ $order->user->email }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-capitalize">mobile</td>
                                        <td>{{ $order->user->mobile }}</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-sm-5 offset-sm-1">
                                <h4>Billing Details</h4>
                                <table class="table">
                                    <tr>
                                        <td>Name</td>
                                        <td>{{ $order->billing->name }}</td>
                                    </tr>
                                    <tr>
                                        <td>Phone</td>
                                        <td>{{ $order->billing->phone }}</td>
                                    </tr>
                                    <tr>
                                        <td>Date & Time</td>
                                        <td>{{ date("d M Y",strtotime($order->billing->date_of_delivery)) }} {{ $order->billing->time_of_delivery }}</td>
                                    </tr>
                                    <tr>
                                        <td>address</td>
                                        <td>{{ $order->billing->address }}</td>
                                    </tr>
                                    <tr>
                                        <td>city</td>
                                        <td>{{ $order->billing->city }}</td>
                                    </tr>
                                    <tr>
                                        <td>pincode</td>
                                        <td>{{ $order->billing->pincode }}</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-sm-5">
                                <h4>Order Details</h4>
                                <table class="table">

                                    @foreach ($order->orderItems as $item)
                                        <tr>
                                            <td>{{ $item->product->name }}</td>
                                            <td>₹{{ $item->product->price }}</td>
                                        </tr>
                                    @endforeach

                                </table>
                                <h5>Total : ₹{{ $order->amount }}</h5>
                            </div>
                            <div class="col-sm-5 offset-sm-1 ">
                                <h4>Update Order Details</h4>
                                <form action="{{ route('orders.update', $order) }}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <h5 class="alert alert-warning">{{$order->status}}</h5>
                                    <br>
                                    <div class="form-group">
                                        <label for="">Change Order Status</label>
                                        <select name="status" class="form-control" id="">
                                            <option value="pending">pending</option>
                                            <option value="completed">completed</option>
                                            <option value="processing">processing</option>
                                            <option value="delivered">delivered</option>
                                            <option value="shipped">shipped</option>

                                        </select>
                                    </div>
                                    <br>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </form>
                            </div>
                        </div>
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col -->
        </div>
        <!-- end row -->

    </div> <!-- container -->
@endsection
