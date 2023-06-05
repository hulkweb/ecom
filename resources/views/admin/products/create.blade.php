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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Product</a></li>
                            <li class="breadcrumb-item active">Create Product</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Create Product</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="mb-3">
                                        <label for="productname" class="form-label">Name</label>
                                        <input type="text" id="productname" name="name" class="form-control"
                                            placeholder="Enter product name">
                                    </div>
                                    <input type="hidden" name="vendor_id" value="{{ auth()->user()->id }}">
                                    <div class="mb-3">
                                        <label for="productname" class="form-label">Price</label>
                                        <input type="text" id="productname" name="price" class="form-control"
                                            placeholder="Enter product price">
                                    </div>

                                    <div class="mb-3">
                                        <label for="product-overview" class="form-label">Overview</label>
                                        <textarea class="form-control" id="product-overview" name="details" rows="5"
                                            placeholder="Enter some brief about product.."></textarea>
                                    </div>



                                    <div class="mb-3">
                                        <label for="product-overview" class="form-label">Select category</label>

                                        <select class="form-control select2" name="category_id" data-toggle="select2"
                                            onchange="getSubCategory(this.value)" required>
                                            <option value="">Select</option>
                                            @foreach ($categories as $i => $blog)
                                                <option value="{{ $blog->id }}">{{ $blog->title }}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="product-overview" class="form-label">Select Sub category</label>

                                        <div id="subcategory"> <select class="form-control select2" id=""
                                                name="sub_category_id" data-toggle="select2" required>
                                                <option value="">Select</option>


                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="qty" class="form-label">Quantity</label>
                                        <input type="number" id="qty" name="qty" class="form-control"
                                            placeholder="Enter product Quantity">
                                    </div>
                                    <div class="mb-3">
                                        <label for="weight" class="form-label">Weight (kgs)</label>
                                        <input type="number" id="weight" name="weight" class="form-control"
                                            placeholder="Enter product Weight">
                                    </div>


                                </div> <!-- end col-->


                                <div class="col-xl-6">
                                    <div class="mb-3">
                                        <label for="qty" class="form-label">Product Image</label>
                                        <input type="file" id="qty" name="image" class="form-control"
                                            placeholder="Enter product name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="qty" class="form-label">Product Image 1 </label>
                                        <input type="file" id="qty" name="image_1" class="form-control"
                                            placeholder="Enter product name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="qty" class="form-label">Product Image 2 </label>
                                        <input type="file" id="qty" name="image_2" class="form-control"
                                            placeholder="Enter product name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="qty" class="form-label">Product Image 3 </label>
                                        <input type="file" id="qty" name="image_3" class="form-control"
                                            placeholder="Enter product name">
                                    </div>
                                </div>
                                <div class="col-xl-1 m-auto text-center"><button type="submit"
                                        class="btn btn-primary">Submit</button></div>
                                <!-- Date View -->

                            </div>

                        </form><!-- end col-->

                    </div>
                </div> <!-- end card-->
            </div> <!-- end col-->
        </div>
        <!-- end row-->

    </div>
    <script>
        function getSubCategory(val) {
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

            $.ajax({
                /* the route pointing to the post function */
                url: '{{ route('get_sub_categories') }}',
                type: 'POST',
                /* send the csrf-token and the input to the controller */
                data: {
                    _token: CSRF_TOKEN,
                    category_id: val
                },
                dataType: 'JSON',
                /* remind that 'data' is the response of the AjaxController */
                success: function(data) {
                    console.log(data);
                    var content = `
                    <select class="form-control select2" id="" name="sub_category_id" data-toggle="select2"
                                            required>
                                            <option >Select</option>
                                            `;
                    data.map(ele => {
                        content += `<option value='${ele.id}'>${ele.title}</option>`;
                    });
                    content += '</select>'
                    $("#subcategory").html(content);
                }

            });
        }
    </script>
    <!-- container -->
@endsection
