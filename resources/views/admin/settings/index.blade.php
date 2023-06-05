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
    {{-- <script src="/assets_admin/js/pages/demo.products.js"></script> --}}
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
                            <li class="breadcrumb-item active">Settings</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Settings</h4>
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
                                <a href="{{ route('settings.create') }}" class="btn btn-danger mb-2"><i
                                        class="mdi mdi-plus-circle me-2"></i> Add Settings</a>
                            </div>
                            {{-- <div class="col-sm-7">
                                <div class="text-sm-end">
                                    <button type="button" class="btn btn-success mb-2 me-1"><i
                                            class="mdi mdi-cog-outline"></i></button>
                                    <button type="button" class="btn btn-light mb-2 me-1">Import</button>
                                    <button type="button" class="btn btn-light mb-2">Export</button>
                                </div>
                            </div><!-- end col--> --}}
                        </div>

                        <div class="table-responsive">
                            <table class="table table-centered w-100 dt-responsive nowrap" >
                                <thead class="table-light">
                                   
                                        <th >
                                          Sr No.
                                            
                                        </th>

                                        <th>Name</th>
                                        <th>Value</th>

                                        <th style="width: 85px;">Action</th>
                                    
                                </thead>
                                <tbody>
                                    @foreach ($settings as $i => $blog)
                                        <tr>
                                            <td>
                                                {{ $i + 1 }}
                                            </td>

                                            <td>
                                                {{ $blog->name }}
                                            </td>

                                            <td>
                                                {{ $blog->value }}
                                            </td>


                                            <td class="table-action">
                                                {{-- <a href="javascript:void(0);" class="action-icon"> <i
                                                    class="mdi mdi-eye"></i></a> --}}
                                            <a href="{{route("settings.edit",$blog)}}" class="action-icon"> <i
                                                    class="mdi mdi-square-edit-outline"></i></a>

                                                <form action="{{ route('categories.destroy', $blog->id) }}" method="POST"
                                                    style="display: inline">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" class="action-icon btn btn-danger "><i class="mdi mdi-delete text-light"
                                                            aria-hidden="true"></i></button>
                                                </form>
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
