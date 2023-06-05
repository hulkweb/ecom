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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Settings</a></li>
                            <li class="breadcrumb-item active">Edit Settings</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Edit Settings</h4>
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
                                <form action="{{ route('settings.update', $setting) }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="mb-3">
                                        <label for="projectname" class="form-label">Setting Name</label>
                                        <input type="text" id="projectname" class="form-control"
                                            placeholder="address_on_footer" value="{{ $setting->name }}" name="name"
                                            disabled>
                                    </div>
                                    <div class="mb-3">
                                        <label for="project-overview" class="form-label">Type</label>
                                        <select name="type" id="" class="form-control"
                                            onchange="changeInput(this.value)">
                                            <option value="text">text</option>
                                            <option value="file">file</option>
                                            <option value="textarea">textarea</option>

                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="project-overview" class="form-label">Value</label>

                                        <div id="value_container">
                                            <textarea class="form-control" name="value" id="project-overview" rows="5"
                                                placeholder="Enter some brief about settings..">{{ $setting->value }}</textarea>
                                        </div>
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
    <script>
        function changeInput(val) {
            switch (val) {
                case "text":
                    $("#value_container").html(
                        ` <input type="text" id="type" class="form-control" name="value">`
                    )
                    break;
                case "file":
                    $("#value_container").html(
                        ` <input type="file" id="type" class="form-control" name="value">`
                    )
                    break;
                case "textarea":
                    $("#value_container").html(
                        ` <textarea name="value" id="" cols="30" rows="10" class="form-control"></textarea>`
                    )
                    break;
            }
            $("#type").attr("type", val);
        }
    </script>
@endsection
