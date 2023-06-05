@extends('layouts.admin')
@push('css')
    <!-- Daterangepicker css -->

    <link href="/assets_admin/vendor/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets_admin/vendor/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet"
        type="text/css" />

    <!-- Theme Config Js -->
    <script src="/assets_admin/js/hyper-config.js"></script>
@endpush
@push('scripts')
    <!-- Vendor js -->
    <!-- Vendor js -->
    <script src="/assets_admin/js/vendor.min.js"></script>

    <!-- Datatable js -->
    <script src="/assets_admin/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="/assets_admin/vendor/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
    <script src="/assets_admin/vendor/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="/assets_admin/vendor/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js"></script>
    <script src="/assets_admin/vendor/jquery-datatables-checkboxes/js/dataTables.checkboxes.min.js"></script>

    <!-- Product Demo App js -->
    
@endpush
@section('admin_content')
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">eCommerce</a></li>
                            <li class="breadcrumb-item active">Products</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Products</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row mb-2">
                            <div class="col-sm-5">
                                <a href="{{ route('products.create') }}" class="btn btn-danger mb-2"><i
                                        class="mdi mdi-plus-circle me-2"></i> Add Products</a>
                            </div>
                            <!-- <div class="col-sm-7">
                                                        <div class="text-sm-end">
                                                            <button type="button" class="btn btn-success mb-2 me-1"><i
                                                                    class="mdi mdi-cog-outline"></i></button>
                                                            <button type="button" class="btn btn-light mb-2 me-1">Import</button>
                                                            <button type="button" class="btn btn-light mb-2">Export</button>
                                                        </div>
                                                    </div> end col-->
                        </div>

                        <div class="table-responsive">
                            <table class="table table-centered w-100 dt-responsive nowrap" id="products-datatable">
                                <thead class="table-light">
                                    <tr>
                                        <th class="all" style="width: 20px;">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck1">
                                                <label class="form-check-label" for="customCheck1">&nbsp;</label>
                                            </div>
                                        </th>
                                        <th class="all">Product</th>
                                        <th>Category</th>
                                        <th></th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Featured</th>
                                        <th>Status</th>
                                        <th style="width: 85px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $i => $product)
                                        <tr>



                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" name="products" class="form-check-input"
                                                        id="customCheck2" value="{{ $product->id }}">
                                                    <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                                </div>
                                            </td>
                                            <td>
                                                <img src="/uploads/products/{{ $product->image }}" alt="contact-img"
                                                    title="contact-img" class="rounded me-3" height="48" />
                                                <p class="m-0 d-inline-block align-middle font-16">
                                                    <a href="{{ route('products.show', $product->id) }}"
                                                        class="text-body">{{ substr($product->name, 0, 30) }}</a>
                                                    <br />
                                                    <span class="text-warning mdi mdi-star"></span>
                                                    <span class="text-warning mdi mdi-star"></span>
                                                    <span class="text-warning mdi mdi-star"></span>
                                                    <span class="text-warning mdi mdi-star"></span>
                                                    <span class="text-warning mdi mdi-star"></span>
                                                </p>
                                            </td>
                                            <td>
                                                {{ $product->category->title }}
                                            </td>
                                            <td>
                                                {{ $product->created }}
                                            </td>
                                            <td>
                                                ₹{{ $product->price }}
                                            </td>

                                            <td>
                                                {{ $product->qty }}
                                            </td>
                                            <td> {!! $product->featured
                                                ? "   <a href='/product/featured/$product->id?featured=0'> <span class='text-warning mdi mdi-star'></span></a>"
                                                : "<a href='/product/featured/$product->id?featured=1'> <span class='text-secondary mdi mdi-star'></span></a>" !!}
                                            </td>


                                            <td>
                                                <span class="badge bg-success">Active</span>
                                            </td>

                                            <td class="table-action">
                                                <a href="{{ route('products.show', $product->id) }}" class="action-icon"> <i
                                                        class="mdi mdi-eye"></i></a>
                                                <a href="{{ route('products.edit', $product->id) }}" class="action-icon">
                                                    <i class="mdi mdi-square-edit-outline"></i></a>
                                                <form action="{{ route('products.destroy', $product->id) }}" method="POST"
                                                    style="display: inline">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" class="action-icon btn btn-danger text-light"><i
                                                            class="mdi mdi-delete" aria-hidden="true"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                        </div>
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col -->
        </div>
        <!-- end row -->

    </div> <!-- container -->
   
@endsection
