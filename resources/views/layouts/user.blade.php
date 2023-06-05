<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ settings()['website_title'] }}</title>
    <link href="https://fonts.googleapis.com/css?family=Cairo:400,600,700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400i,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&amp;display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="/uploads/settings/{{ settings()['website_favicon'] }}" />
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/animate.min.css">
    <link rel="stylesheet" href="/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/css/nice-select.css">
    <link rel="stylesheet" href="/assets/css/slick.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/main-color.css">
    <script src="/assets/js/jquery-3.4.1.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.min.css" />

    @stack('css')

</head>

<body class="biolife-body">

    <!-- Preloader -->
    <div id="biof-loading">
        <div class="biof-loading-center">
            <div class="biof-loading-center-absolute">
                <div class="dot dot-one"></div>
                <div class="dot dot-two"></div>
                <div class="dot dot-three"></div>
            </div>
        </div>
    </div>

    <!-- HEADER -->
    <header id="header" class="header-area style-01 layout-03 shadow-sm"
        style="box-shadow: 0px 5px 6px rgba(255,0,0,0.3);margin-bottom:20px">
        <div class="header-top bg-main hidden-xs">
            <div class="container">
                <div class="top-bar left">
                    <ul class="horizontal-menu">
                        <li><a href="#"><i class="fa fa-envelope"
                                    aria-hidden="true"></i>{{ settings()['email_of_footer'] }}</a>
                        </li>
                        <li><a href="#">Free Shipping for all Order of ₹5000</a></li>
                    </ul>
                </div>
                <div class="top-bar right">
                    <ul class="social-list">
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                    </ul>
                    <ul class="horizontal-menu">
                        
                        <li class="horz-menu-item lang">
                            <select name="language">

                                <option value="en" selected>English (USD)</option>
                                <option value="inr">Hindi (INR)</option>

                            </select>
                        </li>
                       
                        @if (auth()->user())
                        
                            <li>

                                <a href="/dashboard" class="login-link"><i
                                        class="biolife-icon icon-login"></i>{{ auth()->user()->name }}</a>
                            </li>
                            <li>

                                <a href="/logout" class="login-link"><i class="biolife-icon icon-login"></i>logout</a>
                            </li>
                        @else
                        <li>

                            <a href="/vendor" class="login-link"><i
                                    class="biolife-icon icon-login"></i>vendor login</a>
                        </li>
                            <a href="/signin" class="login-link"><i
                                    class="biolife-icon icon-login"></i>Login/Register</a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
        <div class="header-middle biolife-sticky-object ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-2 col-md-6 col-xs-6">
                        <a href="/" class="biolife-logo"><img
                                src="/uploads/settings/{{ settings()['website_logo'] }}" alt="biolife logo"
                                style="height:60px"></a>
                    </div>
                    <div class="col-lg-6 col-md-7 hidden-sm hidden-xs">
                        <div class="primary-menu">
                            <ul class="menu biolife-menu clone-main-menu clone-primary-menu" id="primary-menu"
                                data-menuname="main menu">
                                <li class="menu-item"><a href="/">Home</a></li>


                                <li class="menu-item"><a href="/filter">All Products</a></li>
                                <li class="menu-item"><a href="contact">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-md-6 col-xs-6">
                        <div class="biolife-cart-info">
                            <div class="mobile-search">
                                <a href="javascript:void(0)" class="open-searchbox"><i
                                        class="biolife-icon icon-search"></i></a>
                                <div class="mobile-search-content">
                                    <form action="#" class="form-search" name="mobile-seacrh" method="get">
                                        <a href="#" class="btn-close"><span
                                                class="biolife-icon icon-close-menu"></span></a>
                                        <input type="text" name="s" class="input-text" value=""
                                            placeholder="Search here...">
                                        <select name="category">
                                            <option value="-1" selected>All Categories</option>
                                            @foreach (get_categories() as $item)
                                                <option value="vegetables">{{ $item->title }}</option>
                                            @endforeach


                                        </select>
                                        <button type="submit" class="btn-submit">go</button>
                                    </form>
                                </div>
                            </div>

                            <div class="minicart-block">
                                <div class="minicart-contain">
                                    <a href="javascript:void(0)" class="link-to">
                                        <span class="icon-qty-combine">
                                            <i class="icon-cart-mini biolife-icon"></i>
                                            <span class="qty">{{ count(get_cart()) }}</span>
                                        </span>
                                        <span class="title">My Cart -</span>
                                        @php
                                            $total = 0;
                                            foreach (get_cart() as $key => $item) {
                                                $total += $item['qty'] * $item['price'];
                                            }
                                        @endphp
                                        <span class="sub-total">₹{{ $total }}</span>
                                    </a>
                                    <div class="cart-content">
                                        <div class="cart-inner">
                                            <ul class="products">
                                                @foreach (get_cart() as $item)
                                                    <li>
                                                        <div class="minicart-item">
                                                            <div class="thumb">
                                                                <a
                                                                    href="/p/{{ str_replace(' ', '-', $item['name']) }}"><img
                                                                        src="/uploads/products/{{ $item['image'] }}"
                                                                        width="90" height="90"
                                                                        alt="National Fresh"></a>
                                                            </div>
                                                            <div class="left-info">
                                                                <div class="product-title"><a href="#"
                                                                        class="product-name">{{ $item['name'] }}</a>
                                                                </div>
                                                                <div class="price">
                                                                    <ins><span class="price-amount"><span
                                                                                class="currencySymbol">₹</span>{{ $item['price'] }}.00</span></ins>

                                                                </div>
                                                                <div class="qty">
                                                                    <label for="cart[id123][qty]">Qty:</label>
                                                                    <input type="number" class="input-qty"
                                                                        name="cart[id123][qty]" id="cart[id123][qty]"
                                                                        value="{{ $item['qty'] }}" disabled>
                                                                </div>
                                                            </div>
                                                            {{-- <div class="action">
                                                            <a href="#" class="edit"><i class="fa fa-pencil"
                                                                    aria-hidden="true"></i></a>
                                                            <a href="#" class="remove" onclick="()"><i class="fa fa-trash-o"
                                                                    aria-hidden="true"></i></a>
                                                        </div> --}}
                                                        </div>
                                                    </li>
                                                @endforeach


                                            </ul>
                                            <p class="btn-control">
                                                <a href="/cart" class="btn view-cart">view cart</a>
                                                <a href="/checkout" class="btn">checkout</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mobile-menu-toggle">
                                <a class="btn-toggle" data-object="open-mobile-menu" href="javascript:void(0)">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>

    @yield('content')

    <!-- FOOTER -->
    <footer id="footer" class="footer layout-03">
        <div class="footer-content background-footer-03">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-9">
                        <section class="footer-item">
                            <a href="/" class="biolife-logo"><img
                                    src="/uploads/settings/{{ settings()['website_logo'] }}" alt="biolife logo"
                                    style="height:60px"></a>
                            <div class="footer-phone-info">
                                <i class="biolife-icon icon-head-phone"></i>
                                <p class="r-info">
                                    <span>Got Questions ?</span>
                                    <span>{{ settings()['mobile_of_footer'] }}</span>
                                </p>
                            </div>
                            <div class="newsletter-block layout-01">
                                <h4 class="title">Newsletter Signup</h4>
                                <div class="form-content">
                                    <form action="#" name="new-letter-foter">
                                        <input type="email" class="input-text email" value=""
                                            placeholder="Your email here...">
                                        <button type="submit" class="bnt-submit" name="ok">Sign up</button>
                                    </form>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 md-margin-top-5px sm-margin-top-50px xs-margin-top-40px">
                        <section class="footer-item">
                            <h3 class="section-title">Useful Links</h3>
                            <div class="row">
                                <div class="col-lg-6 col-sm-6 col-xs-6">
                                    <div class="wrap-custom-menu vertical-menu-2">
                                        <ul class="menu">
                                            <li><a href="{{ route('about') }}">About Us</a></li>
                                            <li><a href="{{ route('about') }}">About Our Shop</a></li>
                                            <li><a href="{{ route('contact') }}">Contact Us</a></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-xs-6">
                                    <div class="wrap-custom-menu vertical-menu-2">
                                        <ul class="menu">
                                            <li><a href="{{ route('privacy') }}">Privacy Policy</a></li>
                                            <li><a href="{{ route('sitemap') }}">Our Sitemap</a></li>
                                            <li><a href="{{ route('refund') }}">Refund Policy</a></li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 md-margin-top-5px sm-margin-top-50px xs-margin-top-40px">
                        <section class="footer-item">
                            <h3 class="section-title">Transport Offices</h3>
                            <div class="contact-info-block footer-layout xs-padding-top-10px">
                                <ul class="contact-lines">
                                    <li>
                                        <p class="info-item">
                                            <i class="biolife-icon icon-location"></i>
                                            <b class="desc">{{ settings()['address_of_footer'] }} </b>
                                        </p>
                                    </li>
                                    <li>
                                        <p class="info-item">
                                            <i class="biolife-icon icon-phone"></i>
                                            <b class="desc">Phone: {{ settings()['mobile_of_footer'] }}</b>
                                        </p>
                                    </li>
                                    <li>
                                        <p class="info-item">
                                            <i class="biolife-icon icon-letter"></i>
                                            <b class="desc">Email: {{ settings()['email_of_footer'] }}</b>
                                        </p>
                                    </li>
                                    <li>
                                        <p class="info-item">
                                            <i class="biolife-icon icon-clock"></i>
                                            <b class="desc">Hours:{{ settings()['hours_of_footer'] }}</b>
                                        </p>
                                    </li>
                                </ul>
                            </div>
                            <div class="biolife-social inline">
                                <ul class="socials">
                                    <li><a href="#" title="twitter" class="socail-btn"><i
                                                class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#" title="facebook" class="socail-btn"><i
                                                class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#" title="pinterest" class="socail-btn"><i
                                                class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                    <li><a href="#" title="youtube" class="socail-btn"><i
                                                class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                    <li><a href="#" title="instagram" class="socail-btn"><i
                                                class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="separator sm-margin-top-70px xs-margin-top-40px"></div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-xs-12">
                        <div class="copy-right-text">
                            <p>
                            <p>2023 &copy; {{ settings()['website_name'] }}</p>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-xs-12">
                        <div class="payment-methods">
                            <ul>
                                <li><a href="#" class="payment-link"><img src="/assets/images/card1.jpg"
                                            width="51" height="36" alt=""></a></li>
                                <li><a href="#" class="payment-link"><img src="/assets/images/card2.jpg"
                                            width="51" height="36" alt=""></a></li>
                                <li><a href="#" class="payment-link"><img src="/assets/images/card3.jpg"
                                            width="51" height="36" alt=""></a></li>
                                <li><a href="#" class="payment-link"><img src="/assets/images/card4.jpg"
                                            width="51" height="36" alt=""></a></li>
                                <li><a href="#" class="payment-link"><img src="/assets/images/card5.jpg"
                                            width="51" height="36" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!--Footer For Mobile-->
    <div class="mobile-footer">
        <div class="mobile-footer-inner">
            <div class="mobile-block block-menu-main">
                <a class="menu-bar menu-toggle btn-toggle" data-object="open-mobile-menu" href="javascript:void(0)">
                    <span class="fa fa-bars"></span>
                    <span class="text">Menu</span>
                </a>
            </div>
            <div class="mobile-block block-sidebar">
                <a class="menu-bar filter-toggle btn-toggle" data-object="open-mobile-filter"
                    href="javascript:void(0)">
                    <i class="fa fa-sliders" aria-hidden="true"></i>
                    <span class="text">Sidebar</span>
                </a>
            </div>
            <div class="mobile-block block-minicart">
                <a class="link-to-cart" href="/cart">
                    <span class="fa fa-shopping-bag" aria-hidden="true"></span>
                    <span class="text">Cart</span>
                </a>
            </div>
            <div class="mobile-block block-global">
                @if (auth()->user())
                    <a class="menu-bar" href="/dashboard">
                        <span class="fa fa-user"></span>
                        <span class="text">Account</span>
                    </a>
                @else
                    <a class="menu-bar" href="/login">
                        <span class="fa fa-user"></span>
                        <span class="text">Login</span>
                    </a>
                @endif

            </div>
        </div>
    </div>

    {{-- <div class="mobile-block-global">
        <div class="biolife-mobile-panels">
            <span class="biolife-current-panel-title">Global</span>
            <a class="biolife-close-btn" data-object="global-panel-opened" href="#">&times;</a>
        </div>
        <div class="block-global-contain">
            <div class="glb-item my-account">
                <b class="title">My Account</b>
                <ul class="list">
                    <li class="list-item"><a href="#">Login/register</a></li>
                    <li class="list-item"><a href="#">Wishlist <span class="index">(8)</span></a></li>
                    <li class="list-item"><a href="#">Checkout</a></li>
                </ul>
            </div>
            <div class="glb-item currency">
                <b class="title">Currency</b>
                <ul class="list">
                    <li class="list-item"><a href="#">€ EUR (Euro)</a></li>
                    <li class="list-item"><a href="#">₹USD (Dollar)</a></li>
                    <li class="list-item"><a href="#">₹ GBP (Pound)</a></li>
                    <li class="list-item"><a href="#">¥ JPY (Yen)</a></li>
                </ul>
            </div>
            <div class="glb-item languages">
                <b class="title">Language</b>
                <ul class="list inline">
                    <li class="list-item"><a href="#"><img src="/assets/images/languages/us.jpg"
                                alt="flag" width="24" height="18"></a></li>
                    <li class="list-item"><a href="#"><img src="/assets/images/languages/fr.jpg"
                                alt="flag" width="24" height="18"></a></li>
                    <li class="list-item"><a href="#"><img src="/assets/images/languages/ger.jpg"
                                alt="flag" width="24" height="18"></a></li>
                    <li class="list-item"><a href="#"><img src="/assets/images/languages/jap.jpg"
                                alt="flag" width="24" height="18"></a></li>
                </ul>
            </div>
        </div>
    </div> --}}

    <!-- Scroll Top Button -->
    <a class="btn-scroll-top"><i class="biolife-icon icon-left-arrow"></i></a>

    <script src="/assets/js/jquery-3.4.1.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/jquery.countdown.min.js"></script>
    <script src="/assets/js/jquery.nice-select.min.js"></script>
    <script src="/assets/js/jquery.nicescroll.min.js"></script>
    <script src="/assets/js/slick.min.js"></script>
    <script src="/assets/js/biolife.framework.js"></script>
    <script src="/assets/js/functions.js"></script>
    <script>
        function add_to_cart(product_id, qty = 1) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: '/add_to_cart',
                data: {
                    product_id: product_id,
                    cart_item: qty
                },
                type: 'post',
                success: function(response) {
                    alert("Item Added To Cart", response);
                    location.replace("/cart");
                },
                error: function(x, xs, xt) {
                    alert(x);

                }
            });
        }
    </script>
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
</body>

</html>
