<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from coderthemes.com/hyper_2/saas/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Oct 2022 10:19:52 GMT -->

<head>
    <meta charset="utf-8" />
    <title>Log In | {{ settings()['website_title'] }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="/uploads/settings/{{settings()['website_favicon']}}">

    <!-- Theme Config Js -->
    <script src="assets_admin/js/hyper-config.js"></script>

    <!-- App css -->
    <link href="assets_admin/css/app-saas.min.css" rel="stylesheet" type="text/css" id="app-style" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Icons css -->
    <link href="assets_admin/css/icons.min.css" rel="stylesheet" type="text/css" />
</head>

<body class="authentication-bg">
    <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-4 col-lg-5">
                    <div class="card">

                        

                        <div class="card-body p-4">

                            <div class="text-center w-75 m-auto">
                                <h4 class="text-dark-50 text-center pb-0 fw-bold">Admin Sign In</h4>
                                <p class="text-muted mb-4">Enter your email address and password to access admin panel.
                                </p>
                            </div>

                            <form action="/admin_login" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="emailaddress" class="form-label">Email address</label>
                                    <input class="form-control" name="email" type="email" id="emailaddress"
                                        required="" placeholder="Enter your email">
                                </div>

                                <div class="mb-3">
                                    <a href="#" class="text-muted float-end"><small>Forgot your
                                            password?</small></a>
                                    <label for="password" class="form-label">Password</label>
                                    <div class="input-group input-group-merge">
                                        <input type="password" name="password" id="password" class="form-control"
                                            placeholder="Enter your password">
                                        <div class="input-group-text" data-password="false">
                                            <span class="password-eye"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3 ">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="checkbox-signin" checked>
                                        <label class="form-check-label" for="checkbox-signin">Remember me</label>
                                    </div>
                                </div>

                                <div class="mb-3  text-center">
                                    <button class="btn btn-primary" type="submit"> Log In </button>
                                </div>

                            </form>
                        </div> <!-- end card-body -->
                    </div>
                    <!-- end card -->

                   
                    <!-- end row -->

                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->

    
    <!-- Vendor js -->
    <script src="assets_admin/js/vendor.min.js"></script>

    <!-- App js -->
    <script src="assets_admin/js/app.min.js"></script>

</body>
@if ($success = Session::get('success'))
<script>
    swal("Success", "{{ $success }}!", "success");
</script>
@endif

@if ($error = Session::get('error'))
<script>
    swal("Error", "{{ $error }}!", "error");
</script>
@endif
<!-- Mirrored from coderthemes.com/hyper_2/saas/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Oct 2022 10:19:52 GMT -->

</html>
