<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8" />
    <title>Dashboard | {{ settings()['website_title'] }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- App favicon -->
    <link rel="shortcut icon" href="/uploads/settings/{{ settings()['website_favicon'] }}">
    <!-- App css -->
    <link href="/assets_admin/css/app-saas.min.css" rel="stylesheet" type="text/css" id="app-style" />
    <!-- Theme Config Js -->
    <script src="/assets_admin/js/hyper-config.js"></script>
    <!-- Icons css -->
    <link href="/assets_admin/css/icons.min.css" rel="stylesheet" type="text/css" />
    @stack('css')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">


</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">


        <!-- ========== Topbar Start ========== -->
        <div class="navbar-custom topnav-navbar">
            <div class="container-fluid detached-nav">

                <!-- Topbar Logo -->
                <div class="logo-topbar">
                    <!-- Logo light -->
                    <a href="#" class="logo-light">
                        <span class="logo-lg">
                            <img src="/uploads/settings/{{ settings()['website_logo'] }}" alt="logo" height="22">
                        </span>
                        <span class="logo-sm">
                            <img src="/uploads/settings/{{ settings()['website_logo'] }}" alt="small logo"
                                height="22">
                        </span>
                    </a>

                    <!-- Logo Dark -->
                    <a href="#" class="logo-dark">
                        <span class="logo-lg">
                            <img src="/uploads/settings/{{ settings()['website_logo'] }}" alt="dark logo"
                                height="22">
                        </span>
                        <span class="logo-sm">
                            <img src="/uploads/settings/{{ settings()['website_logo'] }}" alt="small logo"
                                height="22">
                        </span>
                    </a>
                </div>

                <!-- Sidebar Menu Toggle Button -->
                <button class="button-toggle-menu">
                    <i class="mdi mdi-menu"></i>
                </button>

                <!-- Horizontal Menu Toggle Button -->
                <button class="navbar-toggle" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </button>

                <ul class="list-unstyled topbar-menu float-end mb-0">
                    <li class="dropdown notification-list d-lg-none">
                        <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#"
                            role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="ri-search-line noti-icon"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
                            <form class="p-3">
                                <input type="search" class="form-control" placeholder="Search ..."
                                    aria-label="Recipient's username">
                            </form>
                        </div>
                    </li>





                    <li class="notification-list d-none d-sm-inline-block">
                        <a class="nav-link" data-bs-toggle="offcanvas" href="#theme-settings-offcanvas">
                            <i class="ri-settings-3-line noti-icon"></i>
                        </a>
                    </li>

                    <li class="notification-list d-none d-sm-inline-block">
                        <a class="nav-link" href="javascript:void(0)" id="light-dark-mode">
                            <i class="ri-moon-line noti-icon"></i>
                        </a>
                    </li>

                    <li class="notification-list d-none d-md-inline-block">
                        <a class="nav-link" href="#" data-toggle="fullscreen">
                            <i class="ri-fullscreen-line noti-icon"></i>
                        </a>
                    </li>

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown"
                            href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <span class="account-user-avatar">
                                <img src="/assets_admin/images/users/avatar-1.jpg" alt="user-image"
                                    class="rounded-circle">
                            </span>
                            <span>
                                <span class="account-user-name">{{ auth()->user()->name }}</span>
                                <span class="account-position">Vendor</span>

                            </span>
                        </a>
                        <div
                            class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                            <!-- item-->
                            <div class=" dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Welcome !</h6>
                            </div>

                            <!-- item-->
                            <a href="{{ route('vendor.profile') }}" class="dropdown-item notify-item">
                                <i class="mdi mdi-account-circle me-1"></i>
                                <span>My Account</span>
                            </a>

                            <!-- item-->
                            @if (auth()->user()->admin)
                                <a href="{{ route('settings.index') }}" class="dropdown-item notify-item">
                                    <i class="mdi mdi-account-edit me-1"></i>
                                    <span>Settings</span>
                                </a>
                            @endif

                            <!-- item-->


                            <!-- item-->
                            <a href="/logout" class="dropdown-item notify-item">
                                <i class="mdi mdi-logout me-1"></i>
                                <span>Logout</span>
                            </a>
                        </div>
                    </li>
                </ul>

                <!-- Topbar Search Form -->
                <div class="app-search dropdown">
                    {{-- +
                         --}}

                    {{-- <div class="dropdown-menu dropdown-menu-animated dropdown-lg" id="search-dropdown">
                        <!-- item-->
                        <div class="dropdown-header noti-title">
                            <h5 class="text-overflow mb-2">Found <span class="text-danger">17</span> results</h5>
                        </div>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="uil-notes font-16 me-1"></i>
                            <span>Analytics Report</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="uil-life-ring font-16 me-1"></i>
                            <span>How can I help you?</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="uil-cog font-16 me-1"></i>
                            <span>User profile settings</span>
                        </a>

                        <!-- item-->
                        <div class="dropdown-header noti-title">
                            <h6 class="text-overflow mb-2 text-uppercase">Users</h6>
                        </div>

                        <div class="notification-list">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="d-flex">
                                    <img class="d-flex me-2 rounded-circle"
                                        src="/assets_admin/images/users/avatar-2.jpg" alt="Generic placeholder image"
                                        height="32">
                                    <div class="w-100">
                                        <h5 class="m-0 font-14">Erwin Brown</h5>
                                        <span class="font-12 mb-0">UI Designer</span>
                                    </div>
                                </div>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="d-flex">
                                    <img class="d-flex me-2 rounded-circle"
                                        src="/assets_admin/images/users/avatar-5.jpg" alt="Generic placeholder image"
                                        height="32">
                                    <div class="w-100">
                                        <h5 class="m-0 font-14">Jacob Deo</h5>
                                        <span class="font-12 mb-0">Developer</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
        <!-- ========== Topbar End ========== -->

        <!-- ========== Left Sidebar Start ========== -->
        <div class="leftside-menu">

            <!-- Logo Light -->
            <a href="#" class="logo logo-light">
                <span class="logo-lg">
                    <img src="/uploads/settings/{{ settings()['website_logo'] }}" alt="logo" height="22">
                </span>
                <span class="logo-sm">
                    <img src="/uploads/settings/{{ settings()['website_logo'] }}" alt="small logo" height="22">
                </span>
            </a>

            <!-- Logo Dark -->
            <a href="#" class="logo logo-dark">
                <span class="logo-lg">
                    <img src="/uploads/settings/{{ settings()['website_logo'] }}" alt="dark logo" height="22">
                </span>
                <span class="logo-sm">
                    <img src="/uploads/settings/{{ settings()['website_logo'] }}" alt="small logo" height="22">
                </span>
            </a>

            <!-- Sidebar Hover Menu Toggle Button -->
            <button type="button" class="btn button-sm-hover p-0" data-bs-toggle="tooltip"
                data-bs-placement="right" title="Show Full Sidebar">
                <i class="ri-checkbox-blank-circle-line align-middle"></i>
            </button>

            <!-- Sidebar -left -->
            <div class="h-100" id="leftside-menu-container" data-simplebar>
                <!-- Leftbar User -->
                <div class="leftbar-user">
                    <a href="pages-profile.html">
                        <img src="/assets_admin/images/users/avatar-1.jpg" alt="user-image" height="42"
                            class="rounded-circle shadow-sm">
                        <span class="leftbar-user-name">Dominic Keller</span>
                    </a>
                </div>

                <!--- Sidemenu -->
                <ul class="side-nav">

                    <li class="side-nav-title side-nav-item">Navigation</li>

                    <li class="side-nav-item">
                        <a href="{{ auth()->user()->admin ? route('admin.index') : route('vendor.dashboard') }}"
                            class="side-nav-link">
                            <i class="uil-home-alt"></i>
                            <span> Dashboard </span>
                        </a>

                    </li>

                    <li class="side-nav-title side-nav-item">Apps</li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarProducts" aria-expanded="false"
                            aria-controls="sidebarProducts" class="side-nav-link">
                            <i class="uil-store"></i>
                            <span> Products </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarProducts">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="{{ route('products.index') }}">List Products</a>
                                </li>
                                <li>
                                    <a href="{{ route('products.create') }}">Add Products</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    @if (auth()->user()->admin)
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarCategories" aria-expanded="false"
                                aria-controls="sidebarCategories" class="side-nav-link">
                                <i class="uil-label-alt"></i>
                                <span> Categories </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarCategories">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="{{ route('categories.index') }}">List Categories</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('categories.create') }}">Add Categories</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarSubCategories" aria-expanded="false"
                                aria-controls="sidebarSubCategories" class="side-nav-link">
                                <i class="uil-label-alt"></i>
                                <span>Sub Categories </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarSubCategories">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="{{ route('sub_categories.index') }}">List Sub Categories</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('sub_categories.create') }}">Add Sub Categories</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarSettings" aria-expanded="false"
                                aria-controls="sidebarSettings" class="side-nav-link">
                                <i class="uil-bright"></i>
                                <span> Settings </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarSettings">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="{{ route('settings.index') }}">List Settings</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('settings.create') }}">Add Settings</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarOrders" aria-expanded="false"
                                aria-controls="sidebarOrders" class="side-nav-link">
                                <i class="uil-shopping-cart-alt"></i>
                                <span> Orders </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarOrders">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="{{ route('orders.index') }}">List Orders</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('transactions.index') }}">Payments</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a href="{{ route('users.index') }}" class="side-nav-link">
                                <i class="uil-users-alt"></i>
                                List Users
                            </a>

                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('vendors') }}" class="side-nav-link">
                                <i class="uil-users-alt"></i>
                                List Vendors
                            </a>

                        </li>
                    @endif

                </ul>
                <!--- End Sidemenu -->



                <div class="clearfix"></div>
            </div>
        </div>
        <!-- ========== Left Sidebar End ========== -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                @yield('admin_content')
                <!-- container -->

            </div>
            <!-- content -->

            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © - hamilton Services
                        </div>
                        <div class="col-md-6">
                            <div class="text-md-end footer-links d-none d-md-block">
                                <a href="javascript: void(0);">About</a>
                                <a href="javascript: void(0);">Support</a>
                                <a href="javascript: void(0);">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

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
    @stack('scripts')

    <!-- App js -->
    {{-- <script src="/assets_admin/js/app.js"></script> --}}
    <script src="/assets_admin/js/app.min.js"></script>

    <script src="/assets_admin/js/vendor.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#products-datatable').DataTable();
        });
    </script>

</body>

</html>
