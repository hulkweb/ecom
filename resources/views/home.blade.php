@extends('layouts.app')
@section('content')

    <!-- Page Contain -->
    <div class="page-contain">

        <!-- Main content -->
        <div id="main-content" class="main-content">

            <div class="container">

                <div class="row z-index-20">

                    <div class="col-lg-3 hidden-md hidden-sm hidden-xs">

                        <!--Block 01: Vertical Menu-->
                        <div
                            class="biolife-vertical-menu height-auto none-box-shadow md-margin-bottom-46 xs-margin-bottom-80px">
                            <div class="vertical-menu vertical-category-block always ">

                                <div class="wrap-menu">
                                    <ul class="menu clone-main-menu">
                                        @foreach (get_categories() as $item)
                                            <li class="menu-item menu-item-has-children has-megamenu">
                                                <a href="/filter?category={{ str_replace(' ', '-', $item->title) }}" class="menu-name text-capitalize"
                                                    data-title="Fruit & Nut Gifts">
                                                    <img src="/uploads/categories/{{ $item->image }}"
                                                        style="height: 40px !important;display:inline" alt="">
                                                    {{ $item->title }}</a>

                                            </li>
                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!--Block 02: Service List-->
                        <div
                            class="biolife-service biolife-service__type02 clone-to-mobile-sidebar md-margin-bottom-46 xs-margin-bottom-80px md-margin-top-0 xs-margin-top-20px">
                            <ul class="services-list">
                                <li>
                                    <div class="service-inner style-02">
                                        <span class="number">1</span>
                                        <span class="biolife-icon icon-beer"></span>
                                        <a class="srv-name" href="#">full stamped product</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="service-inner style-02">
                                        <span class="number">2</span>
                                        <span class="biolife-icon icon-schedule"></span>
                                        <a class="srv-name" href="#">place and delivery on time</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="service-inner style-02">
                                        <span class="number">3</span>
                                        <span class="biolife-icon icon-car"></span>
                                        <a class="srv-name" href="#">Free shipping in the city</a>
                                    </div>
                                </li>
                            </ul>
                            <div class="foot-area">
                                <span class="biolife-icon icon-suporter"></span>
                                <div class="txt">
                                    <p><b>Support</b> (+900) 246 333 666</p>
                                    <p>E-mail:biolife@company.com</p>
                                </div>
                            </div>
                        </div>

                        <!--Block 03: Products-->
                        <div class="advance-product-box clone-to-mobile-sidebar md-margin-bottom-39 xs-margin-bottom-80px">
                            <div class="biolife-title-box bold-style-02 biolife-title-box__bold-style-02">
                                <h3 class="title">Popular Products</h3>
                            </div>
                            <ul class="products-list vertical-layout products-list__vertical-layout">
                                @foreach ($top_rated as $item)
                                    <li class="product-item">
                                        <div class="contain-product contain-product__right-info-layout2 wgt-style">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="/uploads/products/{{ $item->image }}" alt="Vegetables"
                                                        width="100" height="100" class="product-thumnail">
                                                </a>
                                            </div>
                                            <div class="info">
                                                <h4 class="product-title"><a href="/products/{{ $item->id }}"
                                                        class="pr-name">{{ $item->name }}</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span
                                                                class="currencySymbol">₹</span>{{ $item->price }}.00</span></ins>
                                                    <del><span class="price-amount"><span
                                                                class="currencySymbol">₹</span>{{ $item->price + 100 }}.00</span></del>
                                                </div>
                                                <div class="rating">
                                                    <p class="star-rating"><span class="width-80percent"></span></p>
                                                    <span class="review-count">({{ count($item->reviews) }} Reviews)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach


                            </ul>
                        </div>

                        <!--Block 06: Testimonials-->
                        <div
                            class="testimonial-block tsm-no-margin-type clone-to-mobile-sidebar md-margin-bottom-50 xs-margin-bottom-80px">
                            <ul class="biolife-carousel dots_ring_style_2"
                                data-slick='{"arrows":false,"dots":true,"infinite":false,"speed":400,"slidesMargin":30,"slidesToShow":1}'>
                                <li>
                                    <div class="testml-elem-2">
                                        <div class="avata">
                                            <img src="assets/images/home-05/testiminal-01.jpg" alt="" width="83"
                                                height="83">
                                        </div>
                                        <b class="name">George Stven</b>
                                        <span class="title">Manage & Director</span>
                                        <p class="comment">Contrary to popular belief, Lorem is not simply random text. It
                                            has roots iapiece of classical Latin literature making i years old.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="testml-elem-2">
                                        <div class="avata">
                                            <img src="assets/images/home-05/testiminal-01.jpg" alt="" width="83"
                                                height="83">
                                        </div>
                                        <b class="name">George Stven</b>
                                        <span class="title">Manage & Director</span>
                                        <p class="comment">Contrary to popular belief, Lorem is not simply random text. It
                                            has roots iapiece of classical Latin literature making i years old.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="testml-elem-2">
                                        <div class="avata">
                                            <img src="assets/images/home-05/testiminal-01.jpg" alt="" width="83"
                                                height="83">
                                        </div>
                                        <b class="name">George Stven</b>
                                        <span class="title">Manage & Director</span>
                                        <p class="comment">Contrary to popular belief, Lorem is not simply random text. It
                                            has roots iapiece of classical Latin literature making i years old.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <!--Block 07: Posts-->
                        @if (count($blogs))
                            <div class="blog-posts clone-to-mobile-sidebar md-margin-bottom-0 xs-margin-bottom-30px">
                                <div class="biolife-title-box bold-style-02 biolife-title-box__bold-style-02">
                                    <h3 class="title">From the Blog</h3>
                                </div>
                                <ul class="biolife-carousel nav-top-right-02"
                                    data-slick='{"rows":1,"arrows":true,"dots":false,"infinite":false,"speed":400,"slidesMargin":30,"slidesToShow":1}'>



                                    @foreach ($blogs as $key => $item)
                                        <li>
                                            <div class="post-item style-bottom-info layout-02 align-left">
                                                <div class="thumbnail">
                                                    <a href="#" class="link-to-post"><img
                                                            src="/uploads/blogs/{{ $item->image }}" width="370"
                                                            height="270" alt=""></a>
                                                </div>
                                                <div class="post-content">
                                                    <h4 class="post-name"><a href="/blogs/{{ $item->slug }}"
                                                            class="linktopost">{{ $item->title }}</a></h4>
                                                    <div class="post-meta">
                                                        <a href="#" class="post-meta__item author"><img
                                                                src="assets/images/home-03/post-author.png" width="28"
                                                                height="28" alt=""><span>Admin</span></a>
                                                        <a href="#" class="post-meta__item btn liked-count">2<span
                                                                class="biolife-icon icon-comment"></span></a>
                                                        <a href="#" class="post-meta__item btn comment-count">6<span
                                                                class="biolife-icon icon-like"></span></a>
                                                        <div class="post-meta__item post-meta__item-social-box">
                                                            <span class="tbn"><i class="fa fa-share-alt"
                                                                    aria-hidden="true"></i></span>
                                                            <div class="inner-content">
                                                                <ul class="socials">
                                                                    <li><a href="#" title="twitter"
                                                                            class="socail-btn"><i class="fa fa-twitter"
                                                                                aria-hidden="true"></i></a></li>
                                                                    <li><a href="#" title="facebook"
                                                                            class="socail-btn"><i class="fa fa-facebook"
                                                                                aria-hidden="true"></i></a></li>
                                                                    <li><a href="#" title="pinterest"
                                                                            class="socail-btn"><i class="fa fa-pinterest"
                                                                                aria-hidden="true"></i></a></li>
                                                                    <li><a href="#" title="youtube"
                                                                            class="socail-btn"><i class="fa fa-youtube"
                                                                                aria-hidden="true"></i></a></li>
                                                                    <li><a href="#" title="instagram"
                                                                            class="socail-btn"><i class="fa fa-instagram"
                                                                                aria-hidden="true"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach


                                </ul>
                            </div>
                        @endif
                    </div>

                    <div class="col-lg-9 col-xs-12">

                        <!--Block 08: Slide And Deal-->
                        <div class="row">

                            <div class="col-md-12 col-sm-12col-xs-12">
                                <div class="main-slide block-slider nav-change type02">
                                    <img src="/uploads/settings/{{ settings()['homepage_banner'] }}" alt="">
                                </div>
                            </div>


                        </div>

                   

                        <!--Block 10: Product Tab-->
                        <div class="product-tab z-index-20 sm-margin-top-59px xs-margin-top-80px">
                            <div class="biolife-title-box slim-item">
                                <span class="subtitle">All the best item for You</span>
                                <h3 class="main-title">Our Products</h3>
                            </div>
                            <div class="biolife-tab biolife-tab-contain sm-margin-top-23px">
                                <div class="tab-head tab-head__sample-layout bg-tab-v5">
                                    <ul class="tabs">
                                        <li class="tab-element active">
                                            <a href="#tab01_1st" class="tab-link">Featured</a>
                                        </li>
                                        <li class="tab-element">
                                            <a href="#tab01_2nd" class="tab-link">Top Rated</a>
                                        </li>
                                        <li class="tab-element">
                                            <a href="#tab01_3rd" class="tab-link">On Sale</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content">
                                    <div id="tab01_1st" class="tab-contain active">
                                        <ul class="products-list biolife-carousel nav-center-02 nav-none-on-mobile eq-height-contain"
                                            data-slick='{"rows":1 ,"arrows":true,"dots":false,"infinite":true,"speed":400,"slidesMargin":10,"slidesToShow":3, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 4}},{"breakpoint":992, "settings":{ "slidesToShow": 3, "slidesMargin":20 }},{"breakpoint":768, "settings":{ "slidesToShow": 2,"rows":2, "slidesMargin":15}}]}'>
                                            @foreach ($featured as $item)
                                                <li class="product-item">
                                                    <div class="contain-product layout-default">
                                                        <div class="product-thumb">
                                                            <a href="/p/{{str_replace(" ","-",$item->name)}}" class="link-to-product">
                                                                <img src="/uploads/products/{{ $item->image }}"
                                                                    alt="Vegetables" width="270" height="270"
                                                                    class="product-thumnail">
                                                            </a>
                                                            <a class="lookup btn_call_quickview" href="#"><i
                                                                    class="biolife-icon icon-search"></i></a>
                                                        </div>
                                                        <div class="info">
                                                            <b class="categories">{{ $item->category->title }}</b>
                                                            <h4 class="product-title"><a href="#"
                                                                    class="pr-name">{{ substr($item->name, 0, 25) }}</a>
                                                            </h4>
                                                            <div class="price ">
                                                                <ins><span class="price-amount"><span
                                                                            class="currencySymbol">₹</span>{{ $item->price }}.00</span></ins>
                                                                <del><span class="price-amount"><span
                                                                            class="currencySymbol">₹</span>{{ $item->price + 100 }}.00</span></del>
                                                            </div>
                                                            <div class="slide-down-box">

                                                                <div class="buttons">
                                                                    <a href="#" class="btn wishlist-btn"><i
                                                                            class="fa fa-heart"
                                                                            aria-hidden="true"></i></a>

                                                                    {{-- <a href="#" class="btn add-to-cart-btn" onclick="add_to_cart({{$item->id}},1)"><i
                                                                            class="fa fa-cart-arrow-down"
                                                                            aria-hidden="true"></i>add to cart</a> --}}
                                                                    <form action="/add_to_cart" method="post">
                                                                        @csrf
                                                                        <input type="hidden" name="product_id"
                                                                            value="{{ $item->id }}">
                                                                        <input type="hidden" name="qty"
                                                                            value="1">

                                                                        <button class="btn add-to-cart-btn">add to
                                                                            cart</button>

                                                                    </form>

                                                                    <a href="#" class="btn compare-btn"><i
                                                                            class="fa fa-random"
                                                                            aria-hidden="true"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endforeach

                                        </ul>
                                    </div>
                                    <div id="tab01_2nd" class="tab-contain ">
                                        <ul class="products-list biolife-carousel nav-center-02 nav-none-on-mobile eq-height-contain"
                                            data-slick='{"rows":1 ,"arrows":true,"dots":false,"infinite":true,"speed":400,"slidesMargin":10,"slidesToShow":3, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 4}},{"breakpoint":992, "settings":{ "slidesToShow": 3, "slidesMargin":20 }},{"breakpoint":768, "settings":{ "slidesToShow": 2,"rows":2, "slidesMargin":15}}]}'>
                                            @foreach ($top_rated as $item)
                                                <li class="product-item">
                                                    <div class="contain-product layout-default">
                                                        <div class="product-thumb">
                                                            <a href="#" class="link-to-product">
                                                                <img src="/uploads/products/{{ $item->image }}"
                                                                    alt="Vegetables" width="270" height="270"
                                                                    class="product-thumnail">
                                                            </a>
                                                            <a class="lookup btn_call_quickview" href="#"><i
                                                                    class="biolife-icon icon-search"></i></a>
                                                        </div>
                                                        <div class="info">
                                                            <b class="categories">{{ $item->category->title }}</b>
                                                            <h4 class="product-title"><a href="#"
                                                                    class="pr-name">{{ substr($item->name, 0, 25) }}</a>
                                                            </h4>
                                                            <div class="price ">
                                                                <ins><span class="price-amount"><span
                                                                            class="currencySymbol">₹</span>{{ $item->price }}.00</span></ins>
                                                                <del><span class="price-amount"><span
                                                                            class="currencySymbol">₹</span>{{ $item->price + 100 }}.00</span></del>
                                                            </div>
                                                            <div class="slide-down-box">

                                                                <div class="buttons">
                                                                    <a href="#" class="btn wishlist-btn"><i
                                                                            class="fa fa-heart"
                                                                            aria-hidden="true"></i></a>
                                                                    <form action="/add_to_cart" method="post">
                                                                        @csrf
                                                                        <input type="hidden" name="product_id"
                                                                            value="{{ $item->id }}">
                                                                        <input type="hidden" name="qty"
                                                                            value="1">

                                                                        <button class="btn add-to-cart-btn">add to
                                                                            cart</button>

                                                                    </form>
                                                                    <a href="#" class="btn compare-btn"><i
                                                                            class="fa fa-random"
                                                                            aria-hidden="true"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endforeach

                                        </ul>
                                    </div>
                                    <div id="tab01_3rd" class="tab-contain ">
                                        <ul class="products-list biolife-carousel nav-center-02 nav-none-on-mobile eq-height-contain"
                                            data-slick='{"rows":1 ,"arrows":true,"dots":false,"infinite":true,"speed":400,"slidesMargin":10,"slidesToShow":3, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 4}},{"breakpoint":992, "settings":{ "slidesToShow": 3, "slidesMargin":20 }},{"breakpoint":768, "settings":{ "slidesToShow": 2,"rows":2, "slidesMargin":15}}]}'>
                                            @foreach ($latest as $item)
                                                <li class="product-item">
                                                    <div class="contain-product layout-default">
                                                        <div class="product-thumb">
                                                            <a href="#" class="link-to-product">
                                                                <img src="/uploads/products/{{ $item->image }}"
                                                                    alt="Vegetables" width="270" height="270"
                                                                    class="product-thumnail">
                                                            </a>
                                                            <a class="lookup btn_call_quickview" href="#"><i
                                                                    class="biolife-icon icon-search"></i></a>
                                                        </div>
                                                        <div class="info">
                                                            <b class="categories">{{ $item->category->title }}</b>
                                                            <h4 class="product-title"><a href="#"
                                                                    class="pr-name">{{ substr($item->name, 0, 25) }}</a>
                                                            </h4>
                                                            <div class="price ">
                                                                <ins><span class="price-amount"><span
                                                                            class="currencySymbol">₹</span>{{ $item->price }}.00</span></ins>
                                                                <del><span class="price-amount"><span
                                                                            class="currencySymbol">₹</span>{{ $item->price + 100 }}.00</span></del>
                                                            </div>
                                                            <div class="slide-down-box">

                                                                <div class="buttons">
                                                                    <a href="#" class="btn wishlist-btn"><i
                                                                            class="fa fa-heart"
                                                                            aria-hidden="true"></i></a>
                                                                    <form action="/add_to_cart" method="post">
                                                                        @csrf
                                                                        <input type="hidden" name="product_id"
                                                                            value="{{ $item->id }}">
                                                                        <input type="hidden" name="qty"
                                                                            value="1">

                                                                        <button class="btn add-to-cart-btn">add to
                                                                            cart</button>

                                                                    </form>
                                                                    <a href="#" class="btn compare-btn"><i
                                                                            class="fa fa-random"
                                                                            aria-hidden="true"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endforeach

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Block 11: Banners-
                                <div class="biolife-banner style-15 biolife-banner__style-15 sm-margin-top-30px xs-margin-top-50px">
                                    <div class="banner-contain">
                                        <a href="#" class="bn-link">
                                        </a>
                                        <div class="text-content">
                                            <span class="first-line">Daily Fresh</span>
                                            <b class="second-line">Natural</b>
                                            <i class="third-line">Fresh Food</i>
                                            <span class="fourth-line">Premium Quality</span>
                                        </div>
                                    </div>
                                </div>

                                --Block 12: Products-->
                        <div class="advance-product-box sm-margin-top-54px">
                            <div class="biolife-title-box bold-style biolife-title-box__bold-style sm-margin-top-0">
                                <h3 class="title">Top Rated Products</h3>
                            </div>
                            <ul class="products biolife-carousel nav-center-03 nav-none-on-mobile row-space-29px"
                                data-slick='{"rows":2,"arrows":true,"dots":false,"infinite":false,"speed":400,"slidesMargin":30,"slidesToShow":2,"responsive":[{"breakpoint":1200,"settings":{ "rows":2, "slidesToShow": 2}},{"breakpoint":992, "settings":{ "rows":2, "slidesToShow": 2}},{"breakpoint":768, "settings":{ "rows":2, "slidesToShow": 2}},{"breakpoint":500, "settings":{ "rows":3, "slidesToShow": 1}}]}'>
                                @foreach ($top_rated as $item)
                                    <li class="product-item">
                                        <div class="contain-product right-info-layout contain-product__right-info-layout">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="/uploads/products/{{ $item->image }}" alt="dd"
                                                        width="270" height="270" class="product-thumnail">
                                                </a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">{{ $item->category->title }}</b>
                                                <h4 class="product-title"><a href="#"
                                                        class="pr-name">{{ substr($item->name, 0, 25) }}</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span
                                                                class="currencySymbol">₹</span>{{ $item->price }}.00</span></ins>
                                                    <del><span class="price-amount"><span
                                                                class="currencySymbol">₹</span>{{ $item->price + 100 }}.00</span></del>
                                                </div>
                                                <div class="rating">
                                                    <p class="star-rating"><span class="width-80percent"></span></p>
                                                    <span class="review-count">({{ count($item->reviews) }}
                                                        Reviews)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>





                    </div>

                </div>

            </div>

            <!--Block 15: Brands-->
            <div class="brand-slide sm-margin-top-44px background-fafafa xs-margin-top-80px">
                <div class="container">
                    <ul class="biolife-carousel nav-center-bold nav-none-on-mobile"
                        data-slick='{"rows":1,"arrows":true,"dots":false,"infinite":false,"speed":400,"slidesMargin":30,"slidesToShow":4, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 4}},{"breakpoint":992, "settings":{ "slidesToShow": 3}},{"breakpoint":768, "settings":{ "slidesToShow": 1}}]}'>
                        <li>
                            <div class="biolife-brd-container">
                                <a href="#" class="link">
                                    <figure><img src="assets/images/home-03/brd-01.jpg" width="214" height="163"
                                            alt=""></figure>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="biolife-brd-container">
                                <a href="#" class="link">
                                    <figure><img src="assets/images/home-03/brd-02.jpg" width="214" height="163"
                                            alt=""></figure>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="biolife-brd-container">
                                <a href="#" class="link">
                                    <figure><img src="assets/images/home-03/brd-03.jpg" width="153" height="163"
                                            alt=""></figure>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="biolife-brd-container">
                                <a href="#" class="link">
                                    <figure><img src="assets/images/home-03/brd-04.jpg" width="224" height="163"
                                            alt=""></figure>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="biolife-brd-container">
                                <a href="#" class="link">
                                    <figure><img src="assets/images/home-03/brd-01.jpg" width="214" height="163"
                                            alt=""></figure>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="biolife-brd-container">
                                <a href="#" class="link">
                                    <figure><img src="assets/images/home-03/brd-02.jpg" width="214" height="163"
                                            alt=""></figure>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="biolife-brd-container">
                                <a href="#" class="link">
                                    <figure><img src="assets/images/home-03/brd-03.jpg" width="153" height="163"
                                            alt=""></figure>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="biolife-brd-container">
                                <a href="#" class="link">
                                    <figure><img src="assets/images/home-03/brd-04.jpg" width="224" height="163"
                                            alt=""></figure>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!--Block 16: Products-->
            <div class="advance-product-box z-index-20">
                <div class="container">
                    <div
                        class="biolife-title-box bold-style biolife-title-box__bold-style sm-margin-bottom-26px sm-margin-top-54px">
                        <h3 class="title">Most Viewed Products</h3>
                    </div>
                    <ul class="products-list biolife-carousel nav-center-02 nav-none-on-mobile eq-height-contain"
                        data-slick='{"rows":1 ,"arrows":true,"dots":false,"infinite":true,"speed":400,"slidesMargin":0,"slidesToShow":5, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 4}},{"breakpoint":992, "settings":{ "slidesToShow": 3, "slidesMargin":20 }},{"breakpoint":768, "settings":{ "slidesToShow": 2, "slidesMargin":15, "rows":2}}]}'>
                        @foreach ($latest as $item)
                            <li class="product-item">
                                <div class="contain-product layout-default">
                                    <div class="product-thumb">
                                        <a href="#" class="link-to-product">
                                            <img src="/uploads/products/{{ $item->image }}" alt="Vegetables"
                                                width="270" height="270" class="product-thumnail">
                                        </a>
                                        <a class="lookup btn_call_quickview" href="#"><i
                                                class="biolife-icon icon-search"></i></a>
                                    </div>
                                    <div class="info">
                                        <b class="categories">{{ $item->category->title }}</b>
                                        <h4 class="product-title"><a href="#"
                                                class="pr-name">{{ substr($item->name, 0, 25) }}</a>
                                        </h4>
                                        <div class="price ">
                                            <ins><span class="price-amount"><span
                                                        class="currencySymbol">₹</span>{{ $item->price }}.00</span></ins>
                                            <del><span class="price-amount"><span
                                                        class="currencySymbol">₹</span>{{ $item->price + 100 }}.00</span></del>
                                        </div>
                                        <div class="slide-down-box">

                                            <div class="buttons">
                                                <a href="#" class="btn wishlist-btn"><i class="fa fa-heart"
                                                        aria-hidden="true"></i></a>
                                                <form action="/add_to_cart" method="post">
                                                    @csrf
                                                    <input type="hidden" name="product_id" value="{{ $item->id }}">
                                                    <input type="hidden" name="qty" value="1">

                                                    <button class="btn add-to-cart-btn">add to cart</button>

                                                </form>
                                                <a href="#" class="btn compare-btn"><i class="fa fa-random"
                                                        aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>



            <!--Block 18: Categories-->
            <div class="wrap-category sm-margin-top-54px xs-margin-top-80px sm-margin-bottom-70px xs-margin-bottom-80px">
                <div class="container">
                    <div
                        class="biolife-title-box bold-style biolife-title-box__bold-style xs-margin-bottom-36px xs-margin-top-0">
                        <h3 class="title">Hot Categories</h3>
                    </div>
                    <ul class="biolife-carousel nav-center-bold nav-none-on-mobile"
                        data-slick='{"arrows":true,"dots":false,"infinite":false,"speed":400,"slidesMargin":30,"slidesToShow":4, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 3}},{"breakpoint":992, "settings":{ "slidesToShow": 3}},{"breakpoint":768, "settings":{ "slidesToShow": 2}}, {"breakpoint":500, "settings":{ "slidesToShow": 1}}]}'>
                        @foreach ($categories as $item)
                            <li>
                                <div class="biolife-cat-box-item">
                                    <div class="cat-thumb">
                                        <a href="/filter?category={{ str_replace(' ', '-', $item->title) }}" class="cat-link">
                                            <img src="uploads/categories/{{ $item->image }}" width="277"
                                                height="185" alt="">
                                        </a>
                                    </div>
                                    <a class="cat-info" href="/filter?category={{ str_replace(' ', '-', $item->title) }}">
                                        <h4 class="cat-name">{{ $item->title }}</h4>
                                        <span class="cat-number">({{ count($item->products) }} items)</span>
                                    </a>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

        </div>
    </div>

@endsection
