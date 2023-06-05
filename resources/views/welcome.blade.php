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
                        <div class="biolife-vertical-menu height-auto none-box-shadow md-margin-bottom-46 xs-margin-bottom-80px">
                            <div class="vertical-menu vertical-category-block always ">
                                <div class="block-title black-color">
                                    <span class="menu-icon">
                                        <span class="line-1"></span>
                                        <span class="line-2"></span>
                                        <span class="line-3"></span>
                                    </span>
                                    <span class="menu-title">All departments</span>
                                    <span class="angle" data-tgleclass="fa fa-caret-down"><i class="fa fa-caret-up" aria-hidden="true"></i></span>
                                </div>
                                <div class="wrap-menu">
                                    <ul class="menu clone-main-menu" id="vertical-menu-365">
                                        <li class="menu-item menu-item-has-children has-megamenu">
                                            <a href="#" class="menu-name" data-title="Fruit & Nut Gifts"><i class="biolife-icon icon-fruits"></i>Fruit & Nut Gifts</a>
                                            <div class="wrap-megamenu lg-width-900 md-width-750">
                                                <div class="mega-content">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-12 xs-margin-bottom-25 md-margin-bottom-0">
                                                            <div class="wrap-custom-menu vertical-menu">
                                                                <h4 class="menu-title">Fresh Fuits</h4>
                                                                <ul class="menu">
                                                                    <li><a href="#">Fruit & Nut Gifts</a></li>
                                                                    <li><a href="#">Mixed Fruits</a></li>
                                                                    <li><a href="#">Oranges</a></li>
                                                                    <li><a href="#">Bananas & Plantains</a></li>
                                                                    <li><a href="#">Fresh Gala Apples</a></li>
                                                                    <li><a href="#">Berries</a></li>
                                                                    <li><a href="#">Pears</a></li>
                                                                    <li><a href="#">Produce</a></li>
                                                                    <li><a href="#">Snack Foods</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3 col-sm-12 md-padding-left-23 xs-margin-bottom-25 md-margin-bottom-0">
                                                            <div class="wrap-custom-menu vertical-menu">
                                                                <h4 class="menu-title">Nut Gifts</h4>
                                                                <ul class="menu">
                                                                    <li><a href="#">Non-Dairy Coffee Creamers</a></li>
                                                                    <li><a href="#">Coffee Creamers</a></li>
                                                                    <li><a href="#">Mayonnaise</a></li>
                                                                    <li><a href="#">Almond Milk</a></li>
                                                                    <li><a href="#">Ghee</a></li>
                                                                    <li><a href="#">Beverages</a></li>
                                                                    <li><a href="#">Ranch Salad Dressings</a></li>
                                                                    <li><a href="#">Hemp Milk</a></li>
                                                                    <li><a href="#">Nuts & Seeds</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-12 md-padding-left-50 xs-margin-bottom-25 md-margin-bottom-0">
                                                            <div class="biolife-products-block max-width-270">
                                                                <h4 class="menu-title">Bestseller Products</h4>
                                                                <ul class="products-list default-product-style biolife-carousel nav-center" data-slick='{"rows":1,"arrows":true,"dots":false,"infinite":false,"speed":400,"slidesMargin":30,"slidesToShow":1, "responsive":[{"breakpoint":767, "settings":{ "arrows": false}}]}' >
                                                                    <li class="product-item">
                                                                        <div class="contain-product none-overlay">
                                                                            <div class="product-thumb">
                                                                                <a href="#" class="link-to-product">
                                                                                    <img src="assets/images/products/p-08.jpg" alt="dd" width="270" height="270" class="product-thumnail">
                                                                                </a>
                                                                            </div>
                                                                            <div class="info">
                                                                                <b class="categories">Fresh Fruit</b>
                                                                                <h4 class="product-title"><a href="#" class="pr-name">National Fresh Fruit</a></h4>
                                                                                <div class="price">
                                                                                    <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                                                    <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="product-item">
                                                                        <div class="contain-product none-overlay">
                                                                            <div class="product-thumb">
                                                                                <a href="#" class="link-to-product">
                                                                                    <img src="assets/images/products/p-11.jpg" alt="dd" width="270" height="270" class="product-thumnail">
                                                                                </a>
                                                                            </div>
                                                                            <div class="info">
                                                                                <b class="categories">Fresh Fruit</b>
                                                                                <h4 class="product-title"><a href="#" class="pr-name">National Fresh Fruit</a></h4>
                                                                                <div class="price">
                                                                                    <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                                                    <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="product-item">
                                                                        <div class="contain-product none-overlay">
                                                                            <div class="product-thumb">
                                                                                <a href="#" class="link-to-product">
                                                                                    <img src="assets/images/products/p-15.jpg" alt="dd" width="270" height="270" class="product-thumnail">
                                                                                </a>
                                                                            </div>
                                                                            <div class="info">
                                                                                <b class="categories">Fresh Fruit</b>
                                                                                <h4 class="product-title"><a href="#" class="pr-name">National Fresh Fruit</a></h4>
                                                                                <div class="price">
                                                                                    <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                                                    <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 md-margin-top-9">
                                                            <div class="biolife-brand" >
                                                                <ul class="brands">
                                                                    <li><a href="#"><img src="assets/images/megamenu/brand-organic.png" width="161" height="136" alt="organic"></a></li>
                                                                    <li><a href="#"><img src="assets/images/megamenu/brand-explore.png" width="160" height="136" alt="explore"></a></li>
                                                                    <li><a href="#"><img src="assets/images/megamenu/brand-organic-2.png" width="99" height="136" alt="organic 2"></a></li>
                                                                    <li><a href="#"><img src="assets/images/megamenu/brand-eco-teas.png" width="164"  height="136" alt="eco teas"></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="menu-item menu-item-has-children has-megamenu">
                                            <a href="#" class="menu-name" data-title="Vegetables"><i class="biolife-icon icon-broccoli-1"></i>Vegetables</a>
                                            <div class="wrap-megamenu lg-width-900 md-width-750 background-mega-01">
                                                <div class="mega-content">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-12 xs-margin-bottom-25 md-margin-bottom-0">
                                                            <div class="wrap-custom-menu vertical-menu">
                                                                <h4 class="menu-title">Vegetables</h4>
                                                                <ul class="menu">
                                                                    <li><a href="#">Fruit & Nut Gifts</a></li>
                                                                    <li><a href="#">Mixed Fruits</a></li>
                                                                    <li><a href="#">Oranges</a></li>
                                                                    <li><a href="#">Bananas & Plantains</a></li>
                                                                    <li><a href="#">Fresh Gala Apples</a></li>
                                                                    <li><a href="#">Berries</a></li>
                                                                    <li><a href="#">Pears</a></li>
                                                                    <li><a href="#">Produce</a></li>
                                                                    <li><a href="#">Snack Foods</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 md-padding-left-23 xs-margin-bottom-25 md-margin-bottom-0">
                                                            <div class="wrap-custom-menu vertical-menu">
                                                                <h4 class="menu-title">Gifts</h4>
                                                                <ul class="menu">
                                                                    <li><a href="#">Non-Dairy Coffee Creamers</a></li>
                                                                    <li><a href="#">Coffee Creamers</a></li>
                                                                    <li><a href="#">Mayonnaise</a></li>
                                                                    <li><a href="#">Almond Milk</a></li>
                                                                    <li><a href="#">Ghee</a></li>
                                                                    <li><a href="#">Beverages</a></li>
                                                                    <li><a href="#">Ranch Salad Dressings</a></li>
                                                                    <li><a href="#">Hemp Milk</a></li>
                                                                    <li><a href="#">Nuts & Seeds</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-5 col-md-5 col-sm-12 md-padding-left-57 md-margin-bottom-30">
                                                            <div class="biolife-brand vertical md-boder-left-30">
                                                                <h4 class="menu-title">Hot Brand</h4>
                                                                <ul class="brands">
                                                                    <li><a href="#"><img src="assets/images/megamenu/v-brand-organic.png" width="167" height="74" alt="organic"></a></li>
                                                                    <li><a href="#"><img src="assets/images/megamenu/v-brand-explore.png" width="167" height="72" alt="explore"></a></li>
                                                                    <li><a href="#"><img src="assets/images/megamenu/v-brand-organic-2.png" width="167" height="99" alt="organic 2"></a></li>
                                                                    <li><a href="#"><img src="assets/images/megamenu/v-brand-eco-teas.png" width="167" height="67" alt="eco teas"></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="menu-item menu-item-has-children has-megamenu">
                                            <a href="#" class="menu-name" data-title="Fresh Berries"><i class="biolife-icon icon-grape"></i>Fresh Berries</a>
                                            <div class="wrap-megamenu lg-width-900 md-width-750 background-mega-02">
                                                <div class="mega-content">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 sm-col-12 md-margin-bottom-83 xs-margin-bottom-25">
                                                            <div class="wrap-custom-menu vertical-menu">
                                                                <h4 class="menu-title">Fresh Berries</h4>
                                                                <ul class="menu">
                                                                    <li><a href="#">Fruit & Nut Gifts</a></li>
                                                                    <li><a href="#">Mixed Fruits</a></li>
                                                                    <li><a href="#">Oranges</a></li>
                                                                    <li><a href="#">Bananas & Plantains</a></li>
                                                                    <li><a href="#">Fresh Gala Apples</a></li>
                                                                    <li><a href="#">Berries</a></li>
                                                                    <li><a href="#">Pears</a></li>
                                                                    <li><a href="#">Produce</a></li>
                                                                    <li><a href="#">Snack Foods</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3 sm-col-12 md-padding-left-23 xs-margin-bottom-36px md-margin-bottom-0">
                                                            <div class="wrap-custom-menu vertical-menu">
                                                                <h4 class="menu-title">Gifts</h4>
                                                                <ul class="menu">
                                                                    <li><a href="#">Non-Dairy Coffee Creamers</a></li>
                                                                    <li><a href="#">Coffee Creamers</a></li>
                                                                    <li><a href="#">Mayonnaise</a></li>
                                                                    <li><a href="#">Almond Milk</a></li>
                                                                    <li><a href="#">Ghee</a></li>
                                                                    <li><a href="#">Beverages</a></li>
                                                                    <li><a href="#">Ranch Salad Dressings</a></li>
                                                                    <li><a href="#">Hemp Milk</a></li>
                                                                    <li><a href="#">Nuts & Seeds</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 sm-col-12 md-padding-left-25 md-padding-top-55">
                                                            <div class="biolife-banner layout-01">
                                                                <h3 class="top-title">Farm Fresh</h3>
                                                                <p class="content"> All the Lorem Ipsum generators on the Internet tend.</p>
                                                                <b class="bottomm-title">Berries Series</b>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="menu-item"><a href="#" class="menu-name" data-title="Ocean Foods"><i class="biolife-icon icon-fish"></i>Ocean Foods</a></li>
                                        <li class="menu-item menu-item-has-children has-child">
                                            <a href="#" class="menu-name" data-title="Butter & Eggs"><i class="biolife-icon icon-honey"></i>Butter & Eggs</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a href="#">Omelettes</a></li>
                                                <li class="menu-item"><a href="#">Breakfast Scrambles</a></li>
                                                <li class="menu-item menu-item-has-children has-child"><a href="#" class="menu-name" data-title="Eggs & other considerations">Eggs & other considerations</a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item"><a href="#">Classic Breakfast</a></li>
                                                        <li class="menu-item"><a href="#">Huevos Rancheros</a></li>
                                                        <li class="menu-item"><a href="#">Everything Egg Sandwich</a></li>
                                                        <li class="menu-item"><a href="#">Egg Sandwich</a></li>
                                                        <li class="menu-item"><a href="#">Vegan Burrito</a></li>
                                                        <li class="menu-item"><a href="#">Biscuits and Gravy</a></li>
                                                        <li class="menu-item"><a href="#">Bacon Avo Egg Sandwich</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item"><a href="#">Griddle</a></li>
                                                <li class="menu-item menu-item-has-children has-child"><a href="#" class="menu-name" data-title="Sides & Extras">Sides & Extras</a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item"><a href="#">Breakfast Burrito</a></li>
                                                        <li class="menu-item"><a href="#">Crab Cake Benedict</a></li>
                                                        <li class="menu-item"><a href="#">Corned Beef Hash</a></li>
                                                        <li class="menu-item"><a href="#">Steak & Eggs</a></li>
                                                        <li class="menu-item"><a href="#">Oatmeal</a></li>
                                                        <li class="menu-item"><a href="#">Fruit & Yogurt Parfait</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item"><a href="#">Biscuits</a></li>
                                                <li class="menu-item"><a href="#">Seasonal Fruit Plate</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item"><a href="#" class="menu-title"><i class="biolife-icon icon-fast-food"></i>Fastfood</a></li>
                                        <li class="menu-item"><a href="#" class="menu-title"><i class="biolife-icon icon-beef"></i>Fresh Meat</a></li>
                                        <li class="menu-item"><a href="#" class="menu-title"><i class="biolife-icon icon-onions"></i>Fresh Onion</a></li>
                                        <li class="menu-item"><a href="#" class="menu-title"><i class="biolife-icon icon-avocado"></i>Papaya & Crisps</a></li>
                                        <li class="menu-item"><a href="#" class="menu-title"><i class="biolife-icon icon-contain"></i>Oatmeal</a></li>
                                        <li class="menu-item"><a href="#" class="menu-title"><i class="biolife-icon icon-fresh-juice"></i>Fresh Bananas & Plantains</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!--Block 02: Service List-->
                        <div class="biolife-service biolife-service__type02 clone-to-mobile-sidebar md-margin-bottom-46 xs-margin-bottom-80px md-margin-top-0 xs-margin-top-20px">
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
                                <li class="product-item">
                                    <div class="contain-product contain-product__right-info-layout2 wgt-style">
                                        <div class="product-thumb">
                                            <a href="#" class="link-to-product">
                                                <img src="assets/images/home-04/pr-100-01.jpg" alt="Vegetables" width="100" height="100" class="product-thumnail">
                                            </a>
                                        </div>
                                        <div class="info">
                                            <h4 class="product-title"><a href="#" class="pr-name">Pumpkins Fairytale</a></h4>
                                            <div class="price ">
                                                <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                            </div>
                                            <div class="rating">
                                                <p class="star-rating"><span class="width-80percent"></span></p>
                                                <span class="review-count">(05 Reviews)</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item">
                                    <div class="contain-product contain-product__right-info-layout2 wgt-style">
                                        <div class="product-thumb">
                                            <a href="#" class="link-to-product">
                                                <img src="assets/images/home-04/pr-100-02.jpg" alt="Vegetables" width="100" height="100" class="product-thumnail">
                                            </a>
                                        </div>
                                        <div class="info">
                                            <h4 class="product-title"><a href="#" class="pr-name">Pumpkins Fairytale</a></h4>
                                            <div class="price ">
                                                <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                            </div>
                                            <div class="rating">
                                                <p class="star-rating"><span class="width-80percent"></span></p>
                                                <span class="review-count">(05 Reviews)</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item">
                                    <div class="contain-product contain-product__right-info-layout2 wgt-style">
                                        <div class="product-thumb">
                                            <a href="#" class="link-to-product">
                                                <img src="assets/images/home-04/pr-100-03.jpg" alt="Vegetables" width="100" height="100" class="product-thumnail">
                                            </a>
                                        </div>
                                        <div class="info">
                                            <h4 class="product-title"><a href="#" class="pr-name">Pumpkins Fairytale</a></h4>
                                            <div class="price ">
                                                <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                            </div>
                                            <div class="rating">
                                                <p class="star-rating"><span class="width-80percent"></span></p>
                                                <span class="review-count">(05 Reviews)</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <!--Block 04: Banners 01-->
                        <div class="biolife-banner style-05 biolife-banner__style-05 layout-02 clone-to-mobile-sidebar md-margin-bottom-30 xs-margin-bottom-80px">
                            <div class="banner-contain">
                                <div class="media">
                                    <a href="#" class="bn-link"><img src="assets/images/home-05/bn_style05-2.png" width="152" height="230" alt=""></a>
                                </div>
                                <div class="text-content">
                                    <b class="text1">Mid June Royal Lee cherries</b>
                                    <b class="text-pr"><span>Only:</span>£8.00</b>
                                    <a href="#" class="btn btn-shopnow">shop now</a>
                                </div>
                            </div>
                        </div>

                        <!--Block 05: Banners 02-->
                        <div class="biolife-banner style-06 biolife-banner__style-06 layout-02 clone-to-mobile-sidebar md-margin-bottom-50 xs-margin-bottom-80px">
                            <div class="banner-contain">
                                <div class="media">
                                    <a href="#" class="bn-link"><img src="assets/images/home-05/bn_style06-2.png" width="171" height="230" alt=""></a>
                                </div>
                                <div class="text-content">
                                    <b class="text1">California</b>
                                    <b class="text2">Peaches</b>
                                    <b class="text-pr"><span>Only:</span>£8.00</b>
                                    <a href="#" class="btn btn-shopnow">shop now</a>
                                </div>
                            </div>
                        </div>

                        <!--Block 06: Testimonials-->
                        <div class="testimonial-block tsm-no-margin-type clone-to-mobile-sidebar md-margin-bottom-50 xs-margin-bottom-80px">
                            <ul class="biolife-carousel dots_ring_style_2" data-slick='{"arrows":false,"dots":true,"infinite":false,"speed":400,"slidesMargin":30,"slidesToShow":1}'>
                                <li>
                                    <div class="testml-elem-2">
                                        <div class="avata">
                                            <img src="assets/images/home-05/testiminal-01.jpg" alt="" width="83" height="83">
                                        </div>
                                        <b class="name">George Stven</b>
                                        <span class="title">Manage & Director</span>
                                        <p class="comment">Contrary to popular belief, Lorem  is not simply random text. It has roots iapiece of classical Latin literature making i years old.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="testml-elem-2">
                                        <div class="avata">
                                            <img src="assets/images/home-05/testiminal-01.jpg" alt="" width="83" height="83">
                                        </div>
                                        <b class="name">George Stven</b>
                                        <span class="title">Manage & Director</span>
                                        <p class="comment">Contrary to popular belief, Lorem  is not simply random text. It has roots iapiece of classical Latin literature making i years old.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="testml-elem-2">
                                        <div class="avata">
                                            <img src="assets/images/home-05/testiminal-01.jpg" alt="" width="83" height="83">
                                        </div>
                                        <b class="name">George Stven</b>
                                        <span class="title">Manage & Director</span>
                                        <p class="comment">Contrary to popular belief, Lorem  is not simply random text. It has roots iapiece of classical Latin literature making i years old.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <!--Block 07: Posts-->
                        <div class="blog-posts clone-to-mobile-sidebar md-margin-bottom-0 xs-margin-bottom-30px">
                            <div class="biolife-title-box bold-style-02 biolife-title-box__bold-style-02">
                                <h3 class="title">From the Blog</h3>
                            </div>
                            <ul class="biolife-carousel nav-top-right-02" data-slick='{"rows":1,"arrows":true,"dots":false,"infinite":false,"speed":400,"slidesMargin":30,"slidesToShow":1}'>
                                <li>
                                    <div class="post-item style-bottom-info layout-02 align-left">
                                        <div class="thumbnail">
                                            <a href="#" class="link-to-post"><img src="assets/images/our-blog/post-thumb-05.jpg" width="370" height="270" alt=""></a>
                                        </div>
                                        <div class="post-content">
                                            <h4 class="post-name"><a href="#" class="linktopost">Ashwagandha: The #1 Herb in the World for Anxiety?</a></h4>
                                            <div class="post-meta">
                                                <a href="#" class="post-meta__item author"><img src="assets/images/home-03/post-author.png" width="28" height="28" alt=""><span>Admin</span></a>
                                                <a href="#" class="post-meta__item btn liked-count">2<span class="biolife-icon icon-comment"></span></a>
                                                <a href="#" class="post-meta__item btn comment-count">6<span class="biolife-icon icon-like"></span></a>
                                                <div class="post-meta__item post-meta__item-social-box">
                                                    <span class="tbn"><i class="fa fa-share-alt" aria-hidden="true"></i></span>
                                                    <div class="inner-content">
                                                        <ul class="socials">
                                                            <li><a href="#" title="twitter" class="socail-btn"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                            <li><a href="#" title="facebook" class="socail-btn"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                            <li><a href="#" title="pinterest" class="socail-btn"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                                            <li><a href="#" title="youtube" class="socail-btn"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                                            <li><a href="#" title="instagram" class="socail-btn"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="post-item style-bottom-info layout-02 align-left">
                                        <div class="thumbnail">
                                            <a href="#" class="link-to-post"><img src="assets/images/our-blog/post-thumb-06.jpg" width="370" height="270" alt=""></a>
                                        </div>
                                        <div class="post-content">
                                            <h4 class="post-name"><a href="#" class="linktopost">Ashwagandha: The #1 Herb in the World for Anxiety?</a></h4>
                                            <div class="post-meta">
                                                <a href="#" class="post-meta__item author"><img src="assets/images/home-03/post-author.png" width="28" height="28" alt=""><span>Admin</span></a>
                                                <a href="#" class="post-meta__item btn liked-count">2<span class="biolife-icon icon-comment"></span></a>
                                                <a href="#" class="post-meta__item btn comment-count">6<span class="biolife-icon icon-like"></span></a>
                                                <div class="post-meta__item post-meta__item-social-box">
                                                    <span class="tbn"><i class="fa fa-share-alt" aria-hidden="true"></i></span>
                                                    <div class="inner-content">
                                                        <ul class="socials">
                                                            <li><a href="#" title="twitter" class="socail-btn"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                            <li><a href="#" title="facebook" class="socail-btn"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                            <li><a href="#" title="pinterest" class="socail-btn"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                                            <li><a href="#" title="youtube" class="socail-btn"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                                            <li><a href="#" title="instagram" class="socail-btn"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="post-item style-bottom-info layout-02 align-left">
                                        <div class="thumbnail">
                                            <a href="#" class="link-to-post"><img src="assets/images/our-blog/post-thumb-01.jpg" width="370" height="270" alt=""></a>
                                        </div>
                                        <div class="post-content">
                                            <h4 class="post-name"><a href="#" class="linktopost">Ashwagandha: The #1 Herb in the World for Anxiety?</a></h4>
                                            <div class="post-meta">
                                                <a href="#" class="post-meta__item author"><img src="assets/images/home-03/post-author.png" width="28" height="28" alt=""><span>Admin</span></a>
                                                <a href="#" class="post-meta__item btn liked-count">2<span class="biolife-icon icon-comment"></span></a>
                                                <a href="#" class="post-meta__item btn comment-count">6<span class="biolife-icon icon-like"></span></a>
                                                <div class="post-meta__item post-meta__item-social-box">
                                                    <span class="tbn"><i class="fa fa-share-alt" aria-hidden="true"></i></span>
                                                    <div class="inner-content">
                                                        <ul class="socials">
                                                            <li><a href="#" title="twitter" class="socail-btn"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                            <li><a href="#" title="facebook" class="socail-btn"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                            <li><a href="#" title="pinterest" class="socail-btn"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                                            <li><a href="#" title="youtube" class="socail-btn"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                                            <li><a href="#" title="instagram" class="socail-btn"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="post-item style-bottom-info layout-02 align-left">
                                        <div class="thumbnail">
                                            <a href="#" class="link-to-post"><img src="assets/images/our-blog/post-thumb-02.jpg" width="370" height="270" alt=""></a>
                                        </div>
                                        <div class="post-content">
                                            <h4 class="post-name"><a href="#" class="linktopost">Ashwagandha: The #1 Herb in the World for Anxiety?</a></h4>
                                            <div class="post-meta">
                                                <a href="#" class="post-meta__item author"><img src="assets/images/home-03/post-author.png" width="28" height="28" alt=""><span>Admin</span></a>
                                                <a href="#" class="post-meta__item btn liked-count">2<span class="biolife-icon icon-comment"></span></a>
                                                <a href="#" class="post-meta__item btn comment-count">6<span class="biolife-icon icon-like"></span></a>
                                                <div class="post-meta__item post-meta__item-social-box">
                                                    <span class="tbn"><i class="fa fa-share-alt" aria-hidden="true"></i></span>
                                                    <div class="inner-content">
                                                        <ul class="socials">
                                                            <li><a href="#" title="twitter" class="socail-btn"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                            <li><a href="#" title="facebook" class="socail-btn"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                            <li><a href="#" title="pinterest" class="socail-btn"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                                            <li><a href="#" title="youtube" class="socail-btn"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                                            <li><a href="#" title="instagram" class="socail-btn"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>

                    <div class="col-lg-9 col-xs-12">

                        <!--Block 08: Slide And Deal-->
                        <div class="row">

                            <div class="col-md-8 col-sm-7 col-xs-12">
                                <div class="main-slide block-slider nav-change type02">
                                    <ul class="biolife-carousel" data-slick='{"arrows": true, "dots": false, "slidesMargin": 0, "slidesToShow": 1, "infinite": true, "speed": 800}' >
                                        <li>
                                            <div class="slide-contain slider-opt05">
                                                <div class="media">
                                                    <div class="img-moving"><img src="assets/images/home-05/main-slide-child-01.png" width="374" height="372" alt=""></div>
                                                </div>
                                                <div class="text-content">
                                                    <i class="first-line">Summer 2019</i>
                                                    <h3 class="second-line">Fruit Juice 100% Organic</h3>
                                                    <p class="third-line">Cool summer heat</p>
                                                    <p class="buttons">
                                                        <a href="#" class="btn btn-bold">Shop now</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="slide-contain slider-opt05">
                                                <div class="media">
                                                    <div class="img-moving"><img src="assets/images/home-05/main-slide-child-01.png" width="374" height="372" alt=""></div>
                                                </div>
                                                <div class="text-content">
                                                    <i class="first-line">Summer 2019</i>
                                                    <h3 class="second-line">Fruit Juice 100% Organic</h3>
                                                    <p class="third-line">Cool summer heat</p>
                                                    <p class="buttons">
                                                        <a href="#" class="btn btn-bold">Shop now</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="slide-contain slider-opt05">
                                                <div class="media">
                                                    <div class="img-moving"><img src="assets/images/home-05/main-slide-child-01.png" width="374" height="372" alt=""></div>
                                                </div>
                                                <div class="text-content">
                                                    <i class="first-line">Summer 2019</i>
                                                    <h3 class="second-line">Fruit Juice 100% Organic</h3>
                                                    <p class="third-line">Cool summer heat</p>
                                                    <p class="buttons">
                                                        <a href="#" class="btn btn-bold">Shop now</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="slide-contain slider-opt05">
                                                <div class="media">
                                                    <div class="img-moving"><img src="assets/images/home-05/main-slide-child-01.png" width="374" height="372" alt=""></div>
                                                </div>
                                                <div class="text-content">
                                                    <i class="first-line">Summer 2019</i>
                                                    <h3 class="second-line">Fruit Juice 100% Organic</h3>
                                                    <p class="third-line">Cool summer heat</p>
                                                    <p class="buttons">
                                                        <a href="#" class="btn btn-bold">Shop now</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-5 col-xs-12 sm-margin-top-0 xs-margin-top-80px">
                                <div class="advance-product-box countdown advance-product-box_countdown">
                                    <div class="biolife-title-box in-countdown biolife-title-box_in-countdown">
                                        <h3 class="title">Deals Of The Days</h3>
                                    </div>
                                    <ul class="products-list biolife-carousel default-product-style nav-center-03 nav-none-on-mobile" data-slick='{"arrows": true, "dots": false, "slidesMargin": 0, "slidesToShow": 1, "infinite": true, "speed": 800, "responsive":[{"breakpoint":768, "settings":{ "slidesToShow": 2, "slidesMargin":5 }}, {"breakpoint":500, "settings":{ "slidesToShow": 1}}]}'>
                                        <li class="product-item">
                                            <div class="contain-product">
                                                <div class="product-thumb">
                                                    <a href="#" class="link-to-product" tabindex="-1">
                                                        <img src="assets/images/products/p-03.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                    </a>
                                                    <div class="labels">
                                                        <span class="sale-label">-50%</span>
                                                    </div>
                                                </div>
                                                <div class="info">
                                                    <b class="categories">Vegetables</b>
                                                    <h4 class="product-title"><a href="#" class="pr-name" tabindex="-1">Organic Hass Avocado, Large</a></h4>
                                                    <div class="price ">
                                                        <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                        <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                    </div>
                                                    <div class="biolife-countdown" data-datetime="2020-01-18 00:00 +00:00"></div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="product-item">
                                            <div class="contain-product">
                                                <div class="product-thumb">
                                                    <a href="#" class="link-to-product" tabindex="-1">
                                                        <img src="assets/images/products/p-05.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                    </a>
                                                    <div class="labels">
                                                        <span class="sale-label">-50%</span>
                                                    </div>
                                                </div>
                                                <div class="info">
                                                    <b class="categories">Vegetables</b>
                                                    <h4 class="product-title"><a href="#" class="pr-name" tabindex="-1">National Fresh Fruit</a></h4>
                                                    <div class="price ">
                                                        <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                        <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                    </div>
                                                    <div class="biolife-countdown" data-datetime="2020-01-18 00:00 +00:00"></div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="product-item">
                                            <div class="contain-product">
                                                <div class="product-thumb">
                                                    <a href="#" class="link-to-product" tabindex="-1">
                                                        <img src="assets/images/products/p-22.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                    </a>
                                                    <div class="labels">
                                                        <span class="sale-label">-50%</span>
                                                    </div>
                                                </div>
                                                <div class="info">
                                                    <b class="categories">Vegetables</b>
                                                    <h4 class="product-title"><a href="#" class="pr-name" tabindex="-1">National Fresh Fruit</a></h4>
                                                    <div class="price ">
                                                        <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                        <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                    </div>
                                                    <div class="biolife-countdown" data-datetime="2020-01-18 00:00 +00:00"></div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>

                        <!--Block 09: Banners-->
                        <div class="banner-block sm-margin-top-30px xs-margin-top-80px">
                            <ul class="biolife-carousel nav-center-03 nav-none-on-mobile" data-slick='{"rows":1,"arrows":true,"dots":false,"infinite":false,"speed":400,"slidesMargin":30,"slidesToShow":2, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 2}}, {"breakpoint":768, "settings":{ "slidesMargin":15 }}, {"breakpoint":500, "settings":{ "slidesToShow": 1}}]}'>
                                <li>
                                    <div class="biolife-banner style-13 biolife-banner__style-13">
                                        <div class="banner-contain">
                                            <div class="media">
                                                <a href="#" class="bn-link"><img src="assets/images/home-05/bn_style13-child.png" width="205" height="210" alt=""></a>
                                            </div>
                                            <div class="text-content">
                                                <span class="text1">Sumer Fruit</span>
                                                <b class="text2">100% Pure Natural Fruit Juice</b>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="biolife-banner style-13 biolife-banner__style-14">
                                        <div class="banner-contain">
                                            <div class="media">
                                                <a href="#" class="bn-link"><img src="assets/images/home-05/bn_style14-child.png" width="254" height="205" alt=""></a>
                                            </div>
                                            <div class="text-content">
                                                <span class="text1">California</span>
                                                <b class="text2">Fresh Fruit</b>
                                                <span class="text3">Association</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="biolife-banner style-13 biolife-banner__style-13">
                                        <div class="banner-contain">
                                            <div class="media">
                                                <a href="#" class="bn-link"><img src="assets/images/home-05/bn_style13-child.png" width="205" height="210" alt=""></a>
                                            </div>
                                            <div class="text-content">
                                                <span class="text1">Sumer Fruit</span>
                                                <b class="text2">100% Pure Natural Fruit Juice</b>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="biolife-banner style-13 biolife-banner__style-14">
                                        <div class="banner-contain">
                                            <div class="media">
                                                <a href="#" class="bn-link"><img src="assets/images/home-05/bn_style14-child.png" width="254" height="205" alt=""></a>
                                            </div>
                                            <div class="text-content">
                                                <span class="text1">California</span>
                                                <b class="text2">Fresh Fruit</b>
                                                <span class="text3">Association</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
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
                                        <li class="tab-element" >
                                            <a href="#tab01_2nd" class="tab-link">Top Rated</a>
                                        </li>
                                        <li class="tab-element" >
                                            <a href="#tab01_3rd" class="tab-link">On Sale</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content">
                                    <div id="tab01_1st" class="tab-contain active">
                                        <ul class="products-list biolife-carousel nav-center-02 nav-none-on-mobile eq-height-contain" data-slick='{"rows":1 ,"arrows":true,"dots":false,"infinite":true,"speed":400,"slidesMargin":10,"slidesToShow":3, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 4}},{"breakpoint":992, "settings":{ "slidesToShow": 3, "slidesMargin":20 }},{"breakpoint":768, "settings":{ "slidesToShow": 2,"rows":2, "slidesMargin":15}}]}'>
                                            <li class="product-item">
                                                <div class="contain-product layout-default">
                                                    <div class="product-thumb">
                                                        <a href="#" class="link-to-product">
                                                            <img src="assets/images/products/p-05.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                        </a>
                                                        <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                                    </div>
                                                    <div class="info">
                                                        <b class="categories">Vegetables</b>
                                                        <h4 class="product-title"><a href="#" class="pr-name">Organic Hass Avocado, Large</a></h4>
                                                        <div class="price ">
                                                            <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                            <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                        </div>
                                                        <div class="slide-down-box">
                                                            <p class="message">All products are carefully selected to ensure food safety.</p>
                                                            <div class="buttons">
                                                                <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                                <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                                <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="product-item">
                                                <div class="contain-product layout-default">
                                                    <div class="product-thumb">
                                                        <a href="#" class="link-to-product">
                                                            <img src="assets/images/products/p-07.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                        </a>
                                                        <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                                    </div>
                                                    <div class="info">
                                                        <b class="categories">Vegetables</b>
                                                        <h4 class="product-title"><a href="#" class="pr-name">13 Healing Powers of Lemons</a></h4>
                                                        <div class="price ">
                                                            <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                            <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                        </div>
                                                        <div class="slide-down-box">
                                                            <p class="message">All products are carefully selected to ensure food safety.</p>
                                                            <div class="buttons">
                                                                <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                                <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                                <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="product-item">
                                                <div class="contain-product layout-default">
                                                    <div class="product-thumb">
                                                        <a href="#" class="link-to-product">
                                                            <img src="assets/images/products/p-02.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                        </a>
                                                        <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                                    </div>
                                                    <div class="info">
                                                        <b class="categories">Vegetables</b>
                                                        <h4 class="product-title"><a href="#" class="pr-name">Hot Chili Peppers Magnetic Salt</a></h4>
                                                        <div class="price ">
                                                            <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                            <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                        </div>
                                                        <div class="slide-down-box">
                                                            <p class="message">All products are carefully selected to ensure food safety.</p>
                                                            <div class="buttons">
                                                                <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                                <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                                <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="product-item">
                                                <div class="contain-product layout-default">
                                                    <div class="product-thumb">
                                                        <a href="#" class="link-to-product">
                                                            <img src="assets/images/products/p-03.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                        </a>
                                                        <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                                    </div>
                                                    <div class="info">
                                                        <b class="categories">Vegetables</b>
                                                        <h4 class="product-title"><a href="#" class="pr-name">Passover Cauliflower Kugel</a></h4>
                                                        <div class="price ">
                                                            <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                            <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                        </div>
                                                        <div class="slide-down-box">
                                                            <p class="message">All products are carefully selected to ensure food safety.</p>
                                                            <div class="buttons">
                                                                <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                                <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                                <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="product-item">
                                                <div class="contain-product layout-default">
                                                    <div class="product-thumb">
                                                        <a href="#" class="link-to-product">
                                                            <img src="assets/images/products/p-06.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                        </a>
                                                        <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                                    </div>
                                                    <div class="info">
                                                        <b class="categories">Vegetables</b>
                                                        <h4 class="product-title"><a href="#" class="pr-name">Packham's Pears</a></h4>
                                                        <div class="price ">
                                                            <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                            <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                        </div>
                                                        <div class="slide-down-box">
                                                            <p class="message">All products are carefully selected to ensure food safety.</p>
                                                            <div class="buttons">
                                                                <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                                <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                                <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="product-item">
                                                <div class="contain-product layout-default">
                                                    <div class="product-thumb">
                                                        <a href="#" class="link-to-product">
                                                            <img src="assets/images/products/p-20.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                        </a>
                                                        <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                                    </div>
                                                    <div class="info">
                                                        <b class="categories">Vegetables</b>
                                                        <h4 class="product-title"><a href="#" class="pr-name">National Fresh Fruit</a></h4>
                                                        <div class="price ">
                                                            <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                            <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                        </div>
                                                        <div class="slide-down-box">
                                                            <p class="message">All products are carefully selected to ensure food safety.</p>
                                                            <div class="buttons">
                                                                <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                                <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                                <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="product-item">
                                                <div class="contain-product layout-default">
                                                    <div class="product-thumb">
                                                        <a href="#" class="link-to-product">
                                                            <img src="assets/images/products/p-19.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                        </a>
                                                        <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                                    </div>
                                                    <div class="info">
                                                        <b class="categories">Vegetables</b>
                                                        <h4 class="product-title"><a href="#" class="pr-name">Pumpkins Fairytale</a></h4>
                                                        <div class="price ">
                                                            <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                            <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                        </div>
                                                        <div class="slide-down-box">
                                                            <p class="message">All products are carefully selected to ensure food safety.</p>
                                                            <div class="buttons">
                                                                <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                                <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                                <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="product-item">
                                                <div class="contain-product layout-default">
                                                    <div class="product-thumb">
                                                        <a href="#" class="link-to-product">
                                                            <img src="assets/images/products/p-01.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                        </a>
                                                        <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                                    </div>
                                                    <div class="info">
                                                        <b class="categories">Vegetables</b>
                                                        <h4 class="product-title"><a href="#" class="pr-name">Organic Hass Avocado</a></h4>
                                                        <div class="price ">
                                                            <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                            <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                        </div>
                                                        <div class="slide-down-box">
                                                            <p class="message">All products are carefully selected to ensure food safety.</p>
                                                            <div class="buttons">
                                                                <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                                <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                                <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="product-item">
                                                <div class="contain-product layout-default">
                                                    <div class="product-thumb">
                                                        <a href="#" class="link-to-product">
                                                            <img src="assets/images/products/p-22.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                        </a>
                                                        <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                                    </div>
                                                    <div class="info">
                                                        <b class="categories">Vegetables</b>
                                                        <h4 class="product-title"><a href="#" class="pr-name">Cherry Tomato Seeds</a></h4>
                                                        <div class="price ">
                                                            <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                            <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                        </div>
                                                        <div class="slide-down-box">
                                                            <p class="message">All products are carefully selected to ensure food safety.</p>
                                                            <div class="buttons">
                                                                <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                                <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                                <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="product-item">
                                                <div class="contain-product layout-default">
                                                    <div class="product-thumb">
                                                        <a href="#" class="link-to-product">
                                                            <img src="assets/images/products/p-18.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                        </a>
                                                        <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                                    </div>
                                                    <div class="info">
                                                        <b class="categories">Vegetables</b>
                                                        <h4 class="product-title"><a href="#" class="pr-name">National Fresh Fruit</a></h4>
                                                        <div class="price ">
                                                            <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                            <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                        </div>
                                                        <div class="slide-down-box">
                                                            <p class="message">All products are carefully selected to ensure food safety.</p>
                                                            <div class="buttons">
                                                                <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                                <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                                <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div id="tab01_2nd" class="tab-contain ">
                                        <ul class="products-list biolife-carousel nav-center-02 nav-none-on-mobile eq-height-contain" data-slick='{"rows":1 ,"arrows":true,"dots":false,"infinite":true,"speed":400,"slidesMargin":10,"slidesToShow":3, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 4}},{"breakpoint":992, "settings":{ "slidesToShow": 3, "slidesMargin":20}},{"breakpoint":768, "settings":{ "slidesToShow": 2,"rows":2, "slidesMargin":15}}]}'>
                                            <li class="product-item">
                                                <div class="contain-product layout-default">
                                                    <div class="product-thumb">
                                                        <a href="#" class="link-to-product">
                                                            <img src="assets/images/products/p-20.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                        </a>
                                                        <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                                    </div>
                                                    <div class="info">
                                                        <b class="categories">Vegetables</b>
                                                        <h4 class="product-title"><a href="#" class="pr-name">National Fresh Fruit</a></h4>
                                                        <div class="price ">
                                                            <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                            <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                        </div>
                                                        <div class="slide-down-box">
                                                            <p class="message">All products are carefully selected to ensure food safety.</p>
                                                            <div class="buttons">
                                                                <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                                <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                                <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="product-item">
                                                <div class="contain-product layout-default">
                                                    <div class="product-thumb">
                                                        <a href="#" class="link-to-product">
                                                            <img src="assets/images/products/p-02.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                        </a>
                                                        <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                                    </div>
                                                    <div class="info">
                                                        <b class="categories">Vegetables</b>
                                                        <h4 class="product-title"><a href="#" class="pr-name">Hot Chili Peppers Magnetic Salt</a></h4>
                                                        <div class="price ">
                                                            <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                            <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                        </div>
                                                        <div class="slide-down-box">
                                                            <p class="message">All products are carefully selected to ensure food safety.</p>
                                                            <div class="buttons">
                                                                <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                                <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                                <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="product-item">
                                                <div class="contain-product layout-default">
                                                    <div class="product-thumb">
                                                        <a href="#" class="link-to-product">
                                                            <img src="assets/images/products/p-19.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                        </a>
                                                        <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                                    </div>
                                                    <div class="info">
                                                        <b class="categories">Vegetables</b>
                                                        <h4 class="product-title"><a href="#" class="pr-name">Pumpkins Fairytale</a></h4>
                                                        <div class="price ">
                                                            <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                            <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                        </div>
                                                        <div class="slide-down-box">
                                                            <p class="message">All products are carefully selected to ensure food safety.</p>
                                                            <div class="buttons">
                                                                <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                                <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                                <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="product-item">
                                                <div class="contain-product layout-default">
                                                    <div class="product-thumb">
                                                        <a href="#" class="link-to-product">
                                                            <img src="assets/images/products/p-03.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                        </a>
                                                        <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                                    </div>
                                                    <div class="info">
                                                        <b class="categories">Vegetables</b>
                                                        <h4 class="product-title"><a href="#" class="pr-name">Passover Cauliflower Kugel</a></h4>
                                                        <div class="price ">
                                                            <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                            <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                        </div>
                                                        <div class="slide-down-box">
                                                            <p class="message">All products are carefully selected to ensure food safety.</p>
                                                            <div class="buttons">
                                                                <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                                <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                                <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="product-item">
                                                <div class="contain-product layout-default">
                                                    <div class="product-thumb">
                                                        <a href="#" class="link-to-product">
                                                            <img src="assets/images/products/p-07.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                        </a>
                                                        <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                                    </div>
                                                    <div class="info">
                                                        <b class="categories">Vegetables</b>
                                                        <h4 class="product-title"><a href="#" class="pr-name">13 Healing Powers of Lemons</a></h4>
                                                        <div class="price ">
                                                            <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                            <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                        </div>
                                                        <div class="slide-down-box">
                                                            <p class="message">All products are carefully selected to ensure food safety.</p>
                                                            <div class="buttons">
                                                                <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                                <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                                <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="product-item">
                                                <div class="contain-product layout-default">
                                                    <div class="product-thumb">
                                                        <a href="#" class="link-to-product">
                                                            <img src="assets/images/products/p-18.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                        </a>
                                                        <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                                    </div>
                                                    <div class="info">
                                                        <b class="categories">Vegetables</b>
                                                        <h4 class="product-title"><a href="#" class="pr-name">National Fresh Fruit</a></h4>
                                                        <div class="price ">
                                                            <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                            <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                        </div>
                                                        <div class="slide-down-box">
                                                            <p class="message">All products are carefully selected to ensure food safety.</p>
                                                            <div class="buttons">
                                                                <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                                <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                                <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="product-item">
                                                <div class="contain-product layout-default">
                                                    <div class="product-thumb">
                                                        <a href="#" class="link-to-product">
                                                            <img src="assets/images/products/p-05.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                        </a>
                                                        <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                                    </div>
                                                    <div class="info">
                                                        <b class="categories">Vegetables</b>
                                                        <h4 class="product-title"><a href="#" class="pr-name">Organic Hass Avocado, Large</a></h4>
                                                        <div class="price ">
                                                            <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                            <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                        </div>
                                                        <div class="slide-down-box">
                                                            <p class="message">All products are carefully selected to ensure food safety.</p>
                                                            <div class="buttons">
                                                                <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                                <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                                <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="product-item">
                                                <div class="contain-product layout-default">
                                                    <div class="product-thumb">
                                                        <a href="#" class="link-to-product">
                                                            <img src="assets/images/products/p-06.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                        </a>
                                                        <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                                    </div>
                                                    <div class="info">
                                                        <b class="categories">Vegetables</b>
                                                        <h4 class="product-title"><a href="#" class="pr-name">Packham's Pears</a></h4>
                                                        <div class="price ">
                                                            <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                            <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                        </div>
                                                        <div class="slide-down-box">
                                                            <p class="message">All products are carefully selected to ensure food safety.</p>
                                                            <div class="buttons">
                                                                <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                                <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                                <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="product-item">
                                                <div class="contain-product layout-default">
                                                    <div class="product-thumb">
                                                        <a href="#" class="link-to-product">
                                                            <img src="assets/images/products/p-01.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                        </a>
                                                        <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                                    </div>
                                                    <div class="info">
                                                        <b class="categories">Vegetables</b>
                                                        <h4 class="product-title"><a href="#" class="pr-name">Organic Hass Avocado</a></h4>
                                                        <div class="price ">
                                                            <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                            <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                        </div>
                                                        <div class="slide-down-box">
                                                            <p class="message">All products are carefully selected to ensure food safety.</p>
                                                            <div class="buttons">
                                                                <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                                <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                                <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="product-item">
                                                <div class="contain-product layout-default">
                                                    <div class="product-thumb">
                                                        <a href="#" class="link-to-product">
                                                            <img src="assets/images/products/p-22.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                        </a>
                                                        <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                                    </div>
                                                    <div class="info">
                                                        <b class="categories">Vegetables</b>
                                                        <h4 class="product-title"><a href="#" class="pr-name">Cherry Tomato Seeds</a></h4>
                                                        <div class="price ">
                                                            <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                            <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                        </div>
                                                        <div class="slide-down-box">
                                                            <p class="message">All products are carefully selected to ensure food safety.</p>
                                                            <div class="buttons">
                                                                <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                                <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                                <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div id="tab01_3rd" class="tab-contain ">
                                        <ul class="products-list biolife-carousel nav-center-02 nav-none-on-mobile eq-height-contain" data-slick='{"rows":1 ,"arrows":true,"dots":false,"infinite":true,"speed":400,"slidesMargin":10,"slidesToShow":3, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 4}},{"breakpoint":992, "settings":{ "slidesToShow": 3, "slidesMargin":20}},{"breakpoint":768, "settings":{ "slidesToShow": 2,"rows":2,"slidesMargin":15}}]}'>
                                            <li class="product-item">
                                                <div class="contain-product layout-default">
                                                    <div class="product-thumb">
                                                        <a href="#" class="link-to-product">
                                                            <img src="assets/images/products/p-05.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                        </a>
                                                        <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                                    </div>
                                                    <div class="info">
                                                        <b class="categories">Vegetables</b>
                                                        <h4 class="product-title"><a href="#" class="pr-name">Organic Hass Avocado, Large</a></h4>
                                                        <div class="price ">
                                                            <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                            <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                        </div>
                                                        <div class="slide-down-box">
                                                            <p class="message">All products are carefully selected to ensure food safety.</p>
                                                            <div class="buttons">
                                                                <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                                <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                                <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="product-item">
                                                <div class="contain-product layout-default">
                                                    <div class="product-thumb">
                                                        <a href="#" class="link-to-product">
                                                            <img src="assets/images/products/p-02.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                        </a>
                                                        <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                                    </div>
                                                    <div class="info">
                                                        <b class="categories">Vegetables</b>
                                                        <h4 class="product-title"><a href="#" class="pr-name">Hot Chili Peppers Magnetic Salt</a></h4>
                                                        <div class="price ">
                                                            <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                            <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                        </div>
                                                        <div class="slide-down-box">
                                                            <p class="message">All products are carefully selected to ensure food safety.</p>
                                                            <div class="buttons">
                                                                <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                                <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                                <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="product-item">
                                                <div class="contain-product layout-default">
                                                    <div class="product-thumb">
                                                        <a href="#" class="link-to-product">
                                                            <img src="assets/images/products/p-01.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                        </a>
                                                        <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                                    </div>
                                                    <div class="info">
                                                        <b class="categories">Vegetables</b>
                                                        <h4 class="product-title"><a href="#" class="pr-name">Organic Hass Avocado</a></h4>
                                                        <div class="price ">
                                                            <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                            <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                        </div>
                                                        <div class="slide-down-box">
                                                            <p class="message">All products are carefully selected to ensure food safety.</p>
                                                            <div class="buttons">
                                                                <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                                <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                                <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="product-item">
                                                <div class="contain-product layout-default">
                                                    <div class="product-thumb">
                                                        <a href="#" class="link-to-product">
                                                            <img src="assets/images/products/p-06.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                        </a>
                                                        <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                                    </div>
                                                    <div class="info">
                                                        <b class="categories">Vegetables</b>
                                                        <h4 class="product-title"><a href="#" class="pr-name">Packham's Pears</a></h4>
                                                        <div class="price ">
                                                            <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                            <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                        </div>
                                                        <div class="slide-down-box">
                                                            <p class="message">All products are carefully selected to ensure food safety.</p>
                                                            <div class="buttons">
                                                                <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                                <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                                <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="product-item">
                                                <div class="contain-product layout-default">
                                                    <div class="product-thumb">
                                                        <a href="#" class="link-to-product">
                                                            <img src="assets/images/products/p-07.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                        </a>
                                                        <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                                    </div>
                                                    <div class="info">
                                                        <b class="categories">Vegetables</b>
                                                        <h4 class="product-title"><a href="#" class="pr-name">13 Healing Powers of Lemons</a></h4>
                                                        <div class="price ">
                                                            <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                            <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                        </div>
                                                        <div class="slide-down-box">
                                                            <p class="message">All products are carefully selected to ensure food safety.</p>
                                                            <div class="buttons">
                                                                <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                                <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                                <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="product-item">
                                                <div class="contain-product layout-default">
                                                    <div class="product-thumb">
                                                        <a href="#" class="link-to-product">
                                                            <img src="assets/images/products/p-18.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                        </a>
                                                        <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                                    </div>
                                                    <div class="info">
                                                        <b class="categories">Vegetables</b>
                                                        <h4 class="product-title"><a href="#" class="pr-name">National Fresh Fruit</a></h4>
                                                        <div class="price ">
                                                            <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                            <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                        </div>
                                                        <div class="slide-down-box">
                                                            <p class="message">All products are carefully selected to ensure food safety.</p>
                                                            <div class="buttons">
                                                                <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                                <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                                <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="product-item">
                                                <div class="contain-product layout-default">
                                                    <div class="product-thumb">
                                                        <a href="#" class="link-to-product">
                                                            <img src="assets/images/products/p-20.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                        </a>
                                                        <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                                    </div>
                                                    <div class="info">
                                                        <b class="categories">Vegetables</b>
                                                        <h4 class="product-title"><a href="#" class="pr-name">National Fresh Fruit</a></h4>
                                                        <div class="price ">
                                                            <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                            <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                        </div>
                                                        <div class="slide-down-box">
                                                            <p class="message">All products are carefully selected to ensure food safety.</p>
                                                            <div class="buttons">
                                                                <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                                <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                                <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="product-item">
                                                <div class="contain-product layout-default">
                                                    <div class="product-thumb">
                                                        <a href="#" class="link-to-product">
                                                            <img src="assets/images/products/p-22.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                        </a>
                                                        <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                                    </div>
                                                    <div class="info">
                                                        <b class="categories">Vegetables</b>
                                                        <h4 class="product-title"><a href="#" class="pr-name">Cherry Tomato Seeds</a></h4>
                                                        <div class="price ">
                                                            <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                            <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                        </div>
                                                        <div class="slide-down-box">
                                                            <p class="message">All products are carefully selected to ensure food safety.</p>
                                                            <div class="buttons">
                                                                <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                                <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                                <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="product-item">
                                                <div class="contain-product layout-default">
                                                    <div class="product-thumb">
                                                        <a href="#" class="link-to-product">
                                                            <img src="assets/images/products/p-19.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                        </a>
                                                        <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                                    </div>
                                                    <div class="info">
                                                        <b class="categories">Vegetables</b>
                                                        <h4 class="product-title"><a href="#" class="pr-name">Pumpkins Fairytale</a></h4>
                                                        <div class="price ">
                                                            <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                            <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                        </div>
                                                        <div class="slide-down-box">
                                                            <p class="message">All products are carefully selected to ensure food safety.</p>
                                                            <div class="buttons">
                                                                <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                                <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                                <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="product-item">
                                                <div class="contain-product layout-default">
                                                    <div class="product-thumb">
                                                        <a href="#" class="link-to-product">
                                                            <img src="assets/images/products/p-03.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                        </a>
                                                        <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                                    </div>
                                                    <div class="info">
                                                        <b class="categories">Vegetables</b>
                                                        <h4 class="product-title"><a href="#" class="pr-name">Passover Cauliflower Kugel</a></h4>
                                                        <div class="price ">
                                                            <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                            <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                        </div>
                                                        <div class="slide-down-box">
                                                            <p class="message">All products are carefully selected to ensure food safety.</p>
                                                            <div class="buttons">
                                                                <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                                <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                                <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Block 11: Banners-->
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

                        <!--Block 12: Products-->
                        <div class="advance-product-box sm-margin-top-54px">
                            <div class="biolife-title-box bold-style biolife-title-box__bold-style sm-margin-top-0">
                                <h3 class="title">Top Rated Products</h3>
                            </div>
                            <ul class="products biolife-carousel nav-center-03 nav-none-on-mobile row-space-29px" data-slick='{"rows":2,"arrows":true,"dots":false,"infinite":false,"speed":400,"slidesMargin":30,"slidesToShow":2,"responsive":[{"breakpoint":1200,"settings":{ "rows":2, "slidesToShow": 2}},{"breakpoint":992, "settings":{ "rows":2, "slidesToShow": 2}},{"breakpoint":768, "settings":{ "rows":2, "slidesToShow": 2}},{"breakpoint":500, "settings":{ "rows":3, "slidesToShow": 1}}]}'>

                                <li class="product-item">
                                    <div class="contain-product right-info-layout contain-product__right-info-layout">
                                        <div class="product-thumb">
                                            <a href="#" class="link-to-product">
                                                <img src="assets/images/products/p-19.jpg" alt="dd" width="270" height="270" class="product-thumnail">
                                            </a>
                                        </div>
                                        <div class="info">
                                            <b class="categories">Vegetables</b>
                                            <h4 class="product-title"><a href="#" class="pr-name">Pumpkins Fairytale</a></h4>
                                            <div class="price ">
                                                <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                            </div>
                                            <div class="rating">
                                                <p class="star-rating"><span class="width-80percent"></span></p>
                                                <span class="review-count">(05 Reviews)</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item">
                                    <div class="contain-product right-info-layout contain-product__right-info-layout">
                                        <div class="product-thumb">
                                            <a href="#" class="link-to-product">
                                                <img src="assets/images/products/p-03.jpg" alt="dd" width="270" height="270" class="product-thumnail">
                                            </a>
                                        </div>
                                        <div class="info">
                                            <b class="categories">Vegetables</b>
                                            <h4 class="product-title"><a href="#" class="pr-name">Passover Cauliflower</a></h4>
                                            <div class="price ">
                                                <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                            </div>
                                            <div class="rating">
                                                <p class="star-rating"><span class="width-80percent"></span></p>
                                                <span class="review-count">(05 Reviews)</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item">
                                    <div class="contain-product right-info-layout contain-product__right-info-layout">
                                        <div class="product-thumb">
                                            <a href="#" class="link-to-product">
                                                <img src="assets/images/products/p-02.jpg" alt="dd" width="270" height="270" class="product-thumnail">
                                            </a>
                                        </div>
                                        <div class="info">
                                            <b class="categories">Vegetables</b>
                                            <h4 class="product-title"><a href="#" class="pr-name">Hot Chili Peppers</a></h4>
                                            <div class="price ">
                                                <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                            </div>
                                            <div class="rating">
                                                <p class="star-rating"><span class="width-80percent"></span></p>
                                                <span class="review-count">(05 Reviews)</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item">
                                    <div class="contain-product right-info-layout contain-product__right-info-layout">
                                        <div class="product-thumb">
                                            <a href="#" class="link-to-product">
                                                <img src="assets/images/products/p-22.jpg" alt="dd" width="270" height="270" class="product-thumnail">
                                            </a>
                                        </div>
                                        <div class="info">
                                            <b class="categories">Vegetables</b>
                                            <h4 class="product-title"><a href="#" class="pr-name">Cherry Tomato Seeds</a></h4>
                                            <div class="price ">
                                                <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                            </div>
                                            <div class="rating">
                                                <p class="star-rating"><span class="width-80percent"></span></p>
                                                <span class="review-count">(05 Reviews)</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item">
                                    <div class="contain-product right-info-layout contain-product__right-info-layout">
                                        <div class="product-thumb">
                                            <a href="#" class="link-to-product">
                                                <img src="assets/images/products/p-20.jpg" alt="dd" width="270" height="270" class="product-thumnail">
                                            </a>
                                        </div>
                                        <div class="info">
                                            <b class="categories">Vegetables</b>
                                            <h4 class="product-title"><a href="#" class="pr-name">National Fresh Fruit</a></h4>
                                            <div class="price ">
                                                <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                            </div>
                                            <div class="rating">
                                                <p class="star-rating"><span class="width-80percent"></span></p>
                                                <span class="review-count">(05 Reviews)</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item">
                                    <div class="contain-product right-info-layout contain-product__right-info-layout">
                                        <div class="product-thumb">
                                            <a href="#" class="link-to-product">
                                                <img src="assets/images/products/p-05.jpg" alt="dd" width="270" height="270" class="product-thumnail">
                                            </a>
                                        </div>
                                        <div class="info">
                                            <b class="categories">Vegetables</b>
                                            <h4 class="product-title"><a href="#" class="pr-name">Organic Hass Avocado</a></h4>
                                            <div class="price ">
                                                <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                            </div>
                                            <div class="rating">
                                                <p class="star-rating"><span class="width-80percent"></span></p>
                                                <span class="review-count">(05 Reviews)</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item">
                                    <div class="contain-product right-info-layout contain-product__right-info-layout">
                                        <div class="product-thumb">
                                            <a href="#" class="link-to-product">
                                                <img src="assets/images/products/p-06.jpg" alt="dd" width="270" height="270" class="product-thumnail">
                                            </a>
                                        </div>
                                        <div class="info">
                                            <b class="categories">Vegetables</b>
                                            <h4 class="product-title"><a href="#" class="pr-name">Packham's Pears</a></h4>
                                            <div class="price ">
                                                <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                            </div>
                                            <div class="rating">
                                                <p class="star-rating"><span class="width-80percent"></span></p>
                                                <span class="review-count">(05 Reviews)</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item">
                                    <div class="contain-product right-info-layout contain-product__right-info-layout">
                                        <div class="product-thumb">
                                            <a href="#" class="link-to-product">
                                                <img src="assets/images/products/p-20.jpg" alt="dd" width="270" height="270" class="product-thumnail">
                                            </a>
                                        </div>
                                        <div class="info">
                                            <b class="categories">Vegetables</b>
                                            <h4 class="product-title"><a href="#" class="pr-name">National Fresh Fruit</a></h4>
                                            <div class="price ">
                                                <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                            </div>
                                            <div class="rating">
                                                <p class="star-rating"><span class="width-80percent"></span></p>
                                                <span class="review-count">(05 Reviews)</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item">
                                    <div class="contain-product right-info-layout contain-product__right-info-layout">
                                        <div class="product-thumb">
                                            <a href="#" class="link-to-product">
                                                <img src="assets/images/products/p-02.jpg" alt="dd" width="270" height="270" class="product-thumnail">
                                            </a>
                                        </div>
                                        <div class="info">
                                            <b class="categories">Vegetables</b>
                                            <h4 class="product-title"><a href="#" class="pr-name">Hot Chili Peppers</a></h4>
                                            <div class="price ">
                                                <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                            </div>
                                            <div class="rating">
                                                <p class="star-rating"><span class="width-80percent"></span></p>
                                                <span class="review-count">(05 Reviews)</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item">
                                    <div class="contain-product right-info-layout contain-product__right-info-layout">
                                        <div class="product-thumb">
                                            <a href="#" class="link-to-product">
                                                <img src="assets/images/products/p-22.jpg" alt="dd" width="270" height="270" class="product-thumnail">
                                            </a>
                                        </div>
                                        <div class="info">
                                            <b class="categories">Vegetables</b>
                                            <h4 class="product-title"><a href="#" class="pr-name">Cherry Tomato Seeds</a></h4>
                                            <div class="price ">
                                                <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                            </div>
                                            <div class="rating">
                                                <p class="star-rating"><span class="width-80percent"></span></p>
                                                <span class="review-count">(05 Reviews)</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item">
                                    <div class="contain-product right-info-layout contain-product__right-info-layout">
                                        <div class="product-thumb">
                                            <a href="#" class="link-to-product">
                                                <img src="assets/images/products/p-20.jpg" alt="dd" width="270" height="270" class="product-thumnail">
                                            </a>
                                        </div>
                                        <div class="info">
                                            <b class="categories">Vegetables</b>
                                            <h4 class="product-title"><a href="#" class="pr-name">National Fresh Fruit</a></h4>
                                            <div class="price ">
                                                <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                            </div>
                                            <div class="rating">
                                                <p class="star-rating"><span class="width-80percent"></span></p>
                                                <span class="review-count">(05 Reviews)</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item">
                                    <div class="contain-product right-info-layout contain-product__right-info-layout">
                                        <div class="product-thumb">
                                            <a href="#" class="link-to-product">
                                                <img src="assets/images/products/p-05.jpg" alt="dd" width="270" height="270" class="product-thumnail">
                                            </a>
                                        </div>
                                        <div class="info">
                                            <b class="categories">Vegetables</b>
                                            <h4 class="product-title"><a href="#" class="pr-name">Organic Hass Avocado</a></h4>
                                            <div class="price ">
                                                <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                            </div>
                                            <div class="rating">
                                                <p class="star-rating"><span class="width-80percent"></span></p>
                                                <span class="review-count">(05 Reviews)</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>

                        <!--Block 13: Product Category-->
                        <div class="products-category-box biolife-stretch-the-right-background sm-margin-top-60px xs-margin-top-80px">
                            <h4 class="title">Natural Avocado Fruit</h4>
                            <ul class="products-list biolife-carousel nav-center-02 nav-none-on-mobile default-product-style" data-slick='{"rows":1 ,"arrows":true,"dots":false,"infinite":true,"speed":400,"slidesMargin":20,"slidesToShow":3, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 3}},{"breakpoint":992, "settings":{ "slidesToShow": 3}},{"breakpoint":768, "settings":{ "slidesToShow": 2, "rows":2, "slidesMargin": 15}}]}'>
                                <li class="product-item">
                                    <div class="contain-product scale-effect">
                                        <div class="product-thumb">
                                            <a href="#" class="link-to-product">
                                                <img src="assets/images/products/p-01.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                            </a>
                                            <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                        </div>
                                        <div class="info">
                                            <b class="categories">Vegetables</b>
                                            <h4 class="product-title"><a href="#" class="pr-name">Organic Hass Avocado, Large</a></h4>
                                            <div class="price ">
                                                <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item">
                                    <div class="contain-product scale-effect">
                                        <div class="product-thumb">
                                            <a href="#" class="link-to-product">
                                                <img src="assets/images/products/p-25.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                            </a>
                                            <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                        </div>
                                        <div class="info">
                                            <b class="categories">Vegetables</b>
                                            <h4 class="product-title"><a href="#" class="pr-name">Organic Hass Avocado, Large</a></h4>
                                            <div class="price ">
                                                <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item">
                                    <div class="contain-product scale-effect">
                                        <div class="product-thumb">
                                            <a href="#" class="link-to-product">
                                                <img src="assets/images/products/p-05.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                            </a>
                                            <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                        </div>
                                        <div class="info">
                                            <b class="categories">Vegetables</b>
                                            <h4 class="product-title"><a href="#" class="pr-name">Organic Hass Avocado, Large</a></h4>
                                            <div class="price ">
                                                <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item">
                                    <div class="contain-product scale-effect">
                                        <div class="product-thumb">
                                            <a href="#" class="link-to-product">
                                                <img src="assets/images/products/p-03.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                            </a>
                                            <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                        </div>
                                        <div class="info">
                                            <b class="categories">Vegetables</b>
                                            <h4 class="product-title"><a href="#" class="pr-name">Organic Hass Avocado, Large</a></h4>
                                            <div class="price ">
                                                <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item">
                                    <div class="contain-product scale-effect">
                                        <div class="product-thumb">
                                            <a href="#" class="link-to-product">
                                                <img src="assets/images/products/p-26.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                            </a>
                                            <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                        </div>
                                        <div class="info">
                                            <b class="categories">Vegetables</b>
                                            <h4 class="product-title"><a href="#" class="pr-name">Organic Hass Avocado, Large</a></h4>
                                            <div class="price ">
                                                <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item">
                                    <div class="contain-product scale-effect">
                                        <div class="product-thumb">
                                            <a href="#" class="link-to-product">
                                                <img src="assets/images/products/p-05.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                            </a>
                                            <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                        </div>
                                        <div class="info">
                                            <b class="categories">Vegetables</b>
                                            <h4 class="product-title"><a href="#" class="pr-name">Organic Hass Avocado, Large</a></h4>
                                            <div class="price ">
                                                <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item">
                                    <div class="contain-product scale-effect">
                                        <div class="product-thumb">
                                            <a href="#" class="link-to-product">
                                                <img src="assets/images/products/p-01.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                            </a>
                                            <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                        </div>
                                        <div class="info">
                                            <b class="categories">Vegetables</b>
                                            <h4 class="product-title"><a href="#" class="pr-name">Organic Hass Avocado, Large</a></h4>
                                            <div class="price ">
                                                <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item">
                                    <div class="contain-product scale-effect">
                                        <div class="product-thumb">
                                            <a href="#" class="link-to-product">
                                                <img src="assets/images/products/p-26.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                            </a>
                                            <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                        </div>
                                        <div class="info">
                                            <b class="categories">Vegetables</b>
                                            <h4 class="product-title"><a href="#" class="pr-name">Organic Hass Avocado, Large</a></h4>
                                            <div class="price ">
                                                <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="bg_underground" data-src="assets/images/home-05/bg-right-follow.jpg" ></div>
                        </div>

                        <!--Block 14: Products-->
                        <div class="row sm-margin-top-53px">
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 sm-margin-top-0 xs-margin-top-50px">
                                <div class="advance-product-box">
                                    <div class="biolife-title-box bold-style biolife-title-box__bold-style mobile-tiny sm-margin-bottom-36px sm-margin-top-0-im xs-margin-top-30px-im">
                                        <h3 class="title">Bestseller</h3>
                                    </div>
                                    <ul class="products-list vertical-layout products-list__vertical-layout wgt-style">
                                        <li class="product-item">
                                            <div class="contain-product contain-product__right-info-layout2 wgt-style">
                                                <div class="product-thumb">
                                                    <a href="#" class="link-to-product">
                                                        <img src="assets/images/home-04/pr-100-03.jpg" alt="Vegetables" width="100" height="100" class="product-thumnail">
                                                    </a>
                                                </div>
                                                <div class="info">
                                                    <h4 class="product-title"><a href="#" class="pr-name">Pumpkins Fairytale</a></h4>
                                                    <div class="price ">
                                                        <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                        <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="product-item">
                                            <div class="contain-product contain-product__right-info-layout2 wgt-style">
                                                <div class="product-thumb">
                                                    <a href="#" class="link-to-product">
                                                        <img src="assets/images/home-04/pr-100-10.jpg" alt="Vegetables" width="100" height="100" class="product-thumnail">
                                                    </a>
                                                </div>
                                                <div class="info">
                                                    <h4 class="product-title"><a href="#" class="pr-name">Pumpkins Fairytale</a></h4>
                                                    <div class="price ">
                                                        <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                        <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="product-item">
                                            <div class="contain-product contain-product__right-info-layout2 wgt-style">
                                                <div class="product-thumb">
                                                    <a href="#" class="link-to-product">
                                                        <img src="assets/images/home-04/pr-100-05.jpg" alt="Vegetables" width="100" height="100" class="product-thumnail">
                                                    </a>
                                                </div>
                                                <div class="info">
                                                    <h4 class="product-title"><a href="#" class="pr-name">Pumpkins Fairytale</a></h4>
                                                    <div class="price ">
                                                        <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                        <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="advance-product-box">
                                    <div class="biolife-title-box bold-style biolife-title-box__bold-style mobile-tiny">
                                        <h3 class="title">Onsale</h3>
                                    </div>
                                    <ul class="products-list vertical-layout products-list__vertical-layout">
                                        <li class="product-item">
                                            <div class="contain-product contain-product__right-info-layout2 wgt-style">
                                                <div class="product-thumb">
                                                    <a href="#" class="link-to-product">
                                                        <img src="assets/images/home-04/pr-100-06.jpg" alt="Vegetables" width="100" height="100" class="product-thumnail">
                                                    </a>
                                                </div>
                                                <div class="info">
                                                    <h4 class="product-title"><a href="#" class="pr-name">Pumpkins Fairytale</a></h4>
                                                    <div class="price ">
                                                        <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                        <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="product-item">
                                            <div class="contain-product contain-product__right-info-layout2 wgt-style">
                                                <div class="product-thumb">
                                                    <a href="#" class="link-to-product">
                                                        <img src="assets/images/home-04/pr-100-07.jpg" alt="Vegetables" width="100" height="100" class="product-thumnail">
                                                    </a>
                                                </div>
                                                <div class="info">
                                                    <h4 class="product-title"><a href="#" class="pr-name">Pumpkins Fairytale</a></h4>
                                                    <div class="price ">
                                                        <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                        <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="product-item">
                                            <div class="contain-product contain-product__right-info-layout2 wgt-style">
                                                <div class="product-thumb">
                                                    <a href="#" class="link-to-product">
                                                        <img src="assets/images/home-04/pr-100-08.jpg" alt="Vegetables" width="100" height="100" class="product-thumnail">
                                                    </a>
                                                </div>
                                                <div class="info">
                                                    <h4 class="product-title"><a href="#" class="pr-name">Pumpkins Fairytale</a></h4>
                                                    <div class="price ">
                                                        <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                        <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4 hidden-md hidden-sm col-xs-12">
                                <div class="advance-product-box">
                                    <div class="biolife-title-box bold-style biolife-title-box__bold-style mobile-tiny">
                                        <h3 class="title">Toprated</h3>
                                    </div>
                                    <ul class="products-list vertical-layout products-list__vertical-layout">
                                        <li class="product-item">
                                            <div class="contain-product contain-product__right-info-layout2 wgt-style">
                                                <div class="product-thumb">
                                                    <a href="#" class="link-to-product">
                                                        <img src="assets/images/home-04/pr-100-09.jpg" alt="Vegetables" width="100" height="100" class="product-thumnail">
                                                    </a>
                                                </div>
                                                <div class="info">
                                                    <h4 class="product-title"><a href="#" class="pr-name">Pumpkins Fairytale</a></h4>
                                                    <div class="price ">
                                                        <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                        <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                    </div>
                                                    <div class="rating">
                                                        <p class="star-rating"><span class="width-80percent"></span></p>
                                                        <span class="review-count">(05 Reviews)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="product-item">
                                            <div class="contain-product contain-product__right-info-layout2 wgt-style">
                                                <div class="product-thumb">
                                                    <a href="#" class="link-to-product">
                                                        <img src="assets/images/home-04/pr-100-12.jpg" alt="Vegetables" width="100" height="100" class="product-thumnail">
                                                    </a>
                                                </div>
                                                <div class="info">
                                                    <h4 class="product-title"><a href="#" class="pr-name">Pumpkins Fairytale</a></h4>
                                                    <div class="price ">
                                                        <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                        <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                    </div>
                                                    <div class="rating">
                                                        <p class="star-rating"><span class="width-80percent"></span></p>
                                                        <span class="review-count">(05 Reviews)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="product-item">
                                            <div class="contain-product contain-product__right-info-layout2 wgt-style">
                                                <div class="product-thumb">
                                                    <a href="#" class="link-to-product">
                                                        <img src="assets/images/home-04/pr-100-11.jpg" alt="Vegetables" width="100" height="100" class="product-thumnail">
                                                    </a>
                                                </div>
                                                <div class="info">
                                                    <h4 class="product-title"><a href="#" class="pr-name">Pumpkins Fairytale</a></h4>
                                                    <div class="price ">
                                                        <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                        <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                    </div>
                                                    <div class="rating">
                                                        <p class="star-rating"><span class="width-80percent"></span></p>
                                                        <span class="review-count">(05 Reviews)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

            <!--Block 15: Brands-->
            <div class="brand-slide sm-margin-top-44px background-fafafa xs-margin-top-80px">
                <div class="container">
                    <ul class="biolife-carousel nav-center-bold nav-none-on-mobile" data-slick='{"rows":1,"arrows":true,"dots":false,"infinite":false,"speed":400,"slidesMargin":30,"slidesToShow":4, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 4}},{"breakpoint":992, "settings":{ "slidesToShow": 3}},{"breakpoint":768, "settings":{ "slidesToShow": 1}}]}'>
                        <li>
                            <div class="biolife-brd-container">
                                <a href="#" class="link">
                                    <figure><img src="assets/images/home-03/brd-01.jpg" width="214" height="163" alt=""></figure>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="biolife-brd-container">
                                <a href="#" class="link">
                                    <figure><img src="assets/images/home-03/brd-02.jpg" width="214" height="163" alt=""></figure>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="biolife-brd-container">
                                <a href="#" class="link">
                                    <figure><img src="assets/images/home-03/brd-03.jpg" width="153" height="163" alt=""></figure>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="biolife-brd-container">
                                <a href="#" class="link">
                                    <figure><img src="assets/images/home-03/brd-04.jpg" width="224" height="163" alt=""></figure>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="biolife-brd-container">
                                <a href="#" class="link">
                                    <figure><img src="assets/images/home-03/brd-01.jpg" width="214" height="163" alt=""></figure>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="biolife-brd-container">
                                <a href="#" class="link">
                                    <figure><img src="assets/images/home-03/brd-02.jpg" width="214" height="163" alt=""></figure>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="biolife-brd-container">
                                <a href="#" class="link">
                                    <figure><img src="assets/images/home-03/brd-03.jpg" width="153" height="163" alt=""></figure>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="biolife-brd-container">
                                <a href="#" class="link">
                                    <figure><img src="assets/images/home-03/brd-04.jpg" width="224" height="163" alt=""></figure>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!--Block 16: Products-->
            <div class="advance-product-box z-index-20">
                <div class="container">
                    <div class="biolife-title-box bold-style biolife-title-box__bold-style sm-margin-bottom-26px sm-margin-top-54px">
                        <h3 class="title">Most Viewed Products</h3>
                    </div>
                    <ul class="products-list biolife-carousel nav-center-02 nav-none-on-mobile eq-height-contain" data-slick='{"rows":1 ,"arrows":true,"dots":false,"infinite":true,"speed":400,"slidesMargin":0,"slidesToShow":5, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 4}},{"breakpoint":992, "settings":{ "slidesToShow": 3, "slidesMargin":20 }},{"breakpoint":768, "settings":{ "slidesToShow": 2, "slidesMargin":15, "rows":2}}]}'>
                        <li class="product-item">
                            <div class="contain-product layout-default">
                                <div class="product-thumb">
                                    <a href="#" class="link-to-product">
                                        <img src="assets/images/products/p-19.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                    </a>
                                    <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                </div>
                                <div class="info">
                                    <b class="categories">Vegetables</b>
                                    <h4 class="product-title"><a href="#" class="pr-name">Organic Hass Avocado</a></h4>
                                    <div class="price ">
                                        <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                        <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                    </div>
                                    <div class="slide-down-box">
                                        <p class="message">All products are carefully selected to ensure food safety.</p>
                                        <div class="buttons">
                                            <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                            <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                            <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item">
                            <div class="contain-product layout-default">
                                <div class="product-thumb">
                                    <a href="#" class="link-to-product">
                                        <img src="assets/images/products/p-28.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                    </a>
                                    <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                </div>
                                <div class="info">
                                    <b class="categories">Vegetables</b>
                                    <h4 class="product-title"><a href="#" class="pr-name">Organic Hass Avocado</a></h4>
                                    <div class="price ">
                                        <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                        <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                    </div>
                                    <div class="slide-down-box">
                                        <p class="message">All products are carefully selected to ensure food safety.</p>
                                        <div class="buttons">
                                            <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                            <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                            <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item">
                            <div class="contain-product layout-default">
                                <div class="product-thumb">
                                    <a href="#" class="link-to-product">
                                        <img src="assets/images/products/p-03.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                    </a>
                                    <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                </div>
                                <div class="info">
                                    <b class="categories">Vegetables</b>
                                    <h4 class="product-title"><a href="#" class="pr-name">Organic Hass Avocado</a></h4>
                                    <div class="price ">
                                        <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                        <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                    </div>
                                    <div class="slide-down-box">
                                        <p class="message">All products are carefully selected to ensure food safety.</p>
                                        <div class="buttons">
                                            <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                            <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                            <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item">
                            <div class="contain-product layout-default">
                                <div class="product-thumb">
                                    <a href="#" class="link-to-product">
                                        <img src="assets/images/products/p-02.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                    </a>
                                    <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                </div>
                                <div class="info">
                                    <b class="categories">Vegetables</b>
                                    <h4 class="product-title"><a href="#" class="pr-name">Organic Hass Avocado</a></h4>
                                    <div class="price ">
                                        <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                        <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                    </div>
                                    <div class="slide-down-box">
                                        <p class="message">All products are carefully selected to ensure food safety.</p>
                                        <div class="buttons">
                                            <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                            <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                            <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item">
                            <div class="contain-product layout-default">
                                <div class="product-thumb">
                                    <a href="#" class="link-to-product">
                                        <img src="assets/images/products/p-27.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                    </a>
                                    <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                </div>
                                <div class="info">
                                    <b class="categories">Vegetables</b>
                                    <h4 class="product-title"><a href="#" class="pr-name">Organic Hass Avocado</a></h4>
                                    <div class="price ">
                                        <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                        <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                    </div>
                                    <div class="slide-down-box">
                                        <p class="message">All products are carefully selected to ensure food safety.</p>
                                        <div class="buttons">
                                            <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                            <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                            <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item">
                            <div class="contain-product layout-default">
                                <div class="product-thumb">
                                    <a href="#" class="link-to-product">
                                        <img src="assets/images/products/p-05.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                    </a>
                                    <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                </div>
                                <div class="info">
                                    <b class="categories">Vegetables</b>
                                    <h4 class="product-title"><a href="#" class="pr-name">Organic Hass Avocado</a></h4>
                                    <div class="price ">
                                        <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                        <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                    </div>
                                    <div class="slide-down-box">
                                        <p class="message">All products are carefully selected to ensure food safety.</p>
                                        <div class="buttons">
                                            <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                            <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                            <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item">
                            <div class="contain-product layout-default">
                                <div class="product-thumb">
                                    <a href="#" class="link-to-product">
                                        <img src="assets/images/products/p-07.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                    </a>
                                    <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                </div>
                                <div class="info">
                                    <b class="categories">Vegetables</b>
                                    <h4 class="product-title"><a href="#" class="pr-name">Organic Hass Avocado</a></h4>
                                    <div class="price ">
                                        <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                        <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                    </div>
                                    <div class="slide-down-box">
                                        <p class="message">All products are carefully selected to ensure food safety.</p>
                                        <div class="buttons">
                                            <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                            <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                            <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item">
                            <div class="contain-product layout-default">
                                <div class="product-thumb">
                                    <a href="#" class="link-to-product">
                                        <img src="assets/images/products/p-06.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                    </a>
                                    <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                </div>
                                <div class="info">
                                    <b class="categories">Vegetables</b>
                                    <h4 class="product-title"><a href="#" class="pr-name">Organic Hass Avocado</a></h4>
                                    <div class="price ">
                                        <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                        <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                    </div>
                                    <div class="slide-down-box">
                                        <p class="message">All products are carefully selected to ensure food safety.</p>
                                        <div class="buttons">
                                            <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                            <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                            <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!--Block 17: Banners-->
            <div class="banner-block sm-margin-top-30px xs-margin-top-50px">
                <div class="container">
                    <ul class="grid-twice-item">
                        <li>
                            <div class="biolife-banner biolife-banner__style-11">
                                <div class="banner-contain">
                                    <div class="media">
                                        <a href="#" class="bn-link"><img src="assets/images/home-05/media-banner-11.jpg" width="281" height="358" alt=""></a>
                                    </div>
                                    <div class="text-content">
                                        <span class="text1">California</span>
                                        <b class="text2">Fresh Fruit</b>
                                        <span class="text3">Association</span>
                                        <b class="text4">Sale <span>50%</span> Off</b>
                                        <a href="#" class="btn btn-bold">Shop now</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="biolife-banner biolife-banner__style-12">
                                <div class="banner-contain">
                                    <div class="media">
                                        <a href="#" class="bn-link"><img src="assets/images/home-05/media-banner-12.jpg" width="281" height="358" alt=""></a>
                                    </div>
                                    <div class="text-content">
                                        <i class="text1">Sumer Fruit</i>
                                        <b class="text2">100% Pure Natural Fruit Juice</b>
                                        <a href="#" class="btn btn-thin">Shop now</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!--Block 18: Categories-->
            <div class="wrap-category sm-margin-top-54px xs-margin-top-80px sm-margin-bottom-70px xs-margin-bottom-80px">
                <div class="container">
                    <div class="biolife-title-box bold-style biolife-title-box__bold-style xs-margin-bottom-36px xs-margin-top-0">
                        <h3 class="title">Hot Categories</h3>
                    </div>
                    <ul class="biolife-carousel nav-center-bold nav-none-on-mobile" data-slick='{"arrows":true,"dots":false,"infinite":false,"speed":400,"slidesMargin":30,"slidesToShow":4, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 3}},{"breakpoint":992, "settings":{ "slidesToShow": 3}},{"breakpoint":768, "settings":{ "slidesToShow": 2}}, {"breakpoint":500, "settings":{ "slidesToShow": 1}}]}'>
                        <li>
                            <div class="biolife-cat-box-item">
                                <div class="cat-thumb">
                                    <a href="#" class="cat-link">
                                        <img src="assets/images/home-04/cat-thumb01.jpg" width="277" height="185" alt="">
                                    </a>
                                </div>
                                <a class="cat-info" href="#">
                                    <h4 class="cat-name">Fresh Fruit</h4>
                                    <span class="cat-number">(20 items)</span>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="biolife-cat-box-item">
                                <div class="cat-thumb">
                                    <a href="#" class="cat-link">
                                        <img src="assets/images/home-04/cat-thumb02.jpg" width="277" height="185" alt="">
                                    </a>
                                </div>
                                <a class="cat-info" href="#">
                                    <h4 class="cat-name">Drink Fruits</h4>
                                    <span class="cat-number">(220 items)</span>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="biolife-cat-box-item">
                                <div class="cat-thumb">
                                    <a href="#" class="cat-link">
                                        <img src="assets/images/home-04/cat-thumb03.jpg" width="277" height="185" alt="">
                                    </a>
                                </div>
                                <a class="cat-info" href="#">
                                    <h4 class="cat-name">vegetables</h4>
                                    <span class="cat-number">(350 items)</span>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="biolife-cat-box-item">
                                <div class="cat-thumb">
                                    <a href="#" class="cat-link">
                                        <img src="assets/images/home-04/cat-thumb04.jpg" width="277" height="185" alt="">
                                    </a>
                                </div>
                                <a class="cat-info" href="#">
                                    <h4 class="cat-name">Dried Fruits</h4>
                                    <span class="cat-number">(520 items)</span>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="biolife-cat-box-item">
                                <div class="cat-thumb">
                                    <a href="#" class="cat-link">
                                        <img src="assets/images/home-04/cat-thumb01.jpg" width="277" height="185" alt="">
                                    </a>
                                </div>
                                <a class="cat-info" href="#">
                                    <h4 class="cat-name">Fresh Fruit</h4>
                                    <span class="cat-number">(20 items)</span>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="biolife-cat-box-item">
                                <div class="cat-thumb">
                                    <a href="#" class="cat-link">
                                        <img src="assets/images/home-04/cat-thumb02.jpg" width="277" height="185" alt="">
                                    </a>
                                </div>
                                <a class="cat-info" href="#">
                                    <h4 class="cat-name">Drink Fruits</h4>
                                    <span class="cat-number">(220 items)</span>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="biolife-cat-box-item">
                                <div class="cat-thumb">
                                    <a href="#" class="cat-link">
                                        <img src="assets/images/home-04/cat-thumb03.jpg" width="277" height="185" alt="">
                                    </a>
                                </div>
                                <a class="cat-info" href="#">
                                    <h4 class="cat-name">vegetables</h4>
                                    <span class="cat-number">(350 items)</span>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="biolife-cat-box-item">
                                <div class="cat-thumb">
                                    <a href="#" class="cat-link">
                                        <img src="assets/images/home-04/cat-thumb04.jpg" width="277" height="185" alt="">
                                    </a>
                                </div>
                                <a class="cat-info" href="#">
                                    <h4 class="cat-name">Dried Fruits</h4>
                                    <span class="cat-number">(520 items)</span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
@endsection