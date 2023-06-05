@extends('layouts.user')
@section('content')

    <div class="page-contain shopping-cart">

        <!-- Main content -->
        <div id="main-content" class="main-content">
            <div class="container">



                <!--Cart Table-->
                <div class="shopping-cart-container">
                    <div class="row">
                        <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                            <h3 class="box-title">Your cart items</h3>
                            <form class="shopping-cart-form" action="/update_cart" method="post">
                                @csrf
                                <table class="shop_table cart-form">
                                    <thead>
                                        <tr>
                                            <th class="product-name">Product Name</th>
                                            <th class="product-price">Price</th>
                                            <th class="product-quantity">Quantity</th>
                                            <th class="product-subtotal">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (count($cartItems))
                                            @foreach ($cartItems as $key => $item)
                                                <tr class="cart_item">
                                                    <td class="product-thumbnail" data-title="Product Name">
                                                        <a class="prd-thumb" href="#">
                                                            <figure><img width="113" height="113"
                                                                    src="/uploads/products/{{ $item['image'] }}"
                                                                    alt="shipping cart"></figure>
                                                        </a>
                                                        <a class="prd-name" href="#">{{ $item['name'] }}</a>
                                                        <div class="action">
                                                            <a href="#" class="edit" id="edit_from_cart"><i
                                                                    class="fa fa-pencil" aria-hidden="true"></i></a>
                                                            <a href="/remove_from_cart/{{ $key }}" class="remove"
                                                                id="remove_from_cart"><i class="fa fa-trash-o"
                                                                    aria-hidden="true"></i></a>
                                                        </div>
                                                    </td>
                                                    <td class="product-price" data-title="Price">
                                                        <div class="price price-contain">
                                                            <ins><span class="price-amount"><span
                                                                        class="currencySymbol">₹</span>{{ $item['price'] }}.00</span></ins>
                                                        </div>
                                                    </td>
                                                    <td class="product-quantity" data-title="Quantity">
                                                        <div class="quantity-box type1">
                                                            <div class="qty-input">
                                                                <input type="number" name="product_qty_{{ $key }}"
                                                                    class="product_qty_{{ $key }}"
                                                                    value="{{ $item['qty'] }}"
                                                                    onchange="update_cart({{ $key }},this.value)"
                                                                    data-max_value="20" data-min_value="1" data-step="1">


                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="product-subtotal" data-title="Total">
                                                        <div class="price price-contain">
                                                            <ins><span class="price-amount"><span
                                                                        class="currencySymbol">₹</span>{{ $item['qty'] * $item['price'] }}.00</span></ins>

                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif




                                    </tbody>
                                </table>
                                @if (count($cartItems))
                                    <div class="px-3 py-3">
                                        <button class="btn btn-primary" id="update_cart">Update Cart</button>
                                    </div>
                                @endif
                            </form>
                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                            <div class="shpcart-subtotal-block">
                                <div class="subtotal-line">
                                    @php
                                        $total = 0;
                                        foreach (get_cart() as $key => $item) {
                                            $total += $item['qty'] * $item['price'];
                                        }
                                    @endphp
                                    <b class="stt-name">Subtotal <span class="sub">({{ count($cartItems) }}
                                            items)</span></b>
                                    <span class="stt-price">₹{{ $total }} .00</span>
                                </div>
                                <div class="subtotal-line">
                                    <b class="stt-name">Shipping</b>
                                    <span class="stt-price">₹{{ settings()['shipping_charge'] }}.00</span>
                                </div>
                                <div class="tax-fee">
                                    <p class="title">Est. Taxes & Fees</p>
                                    <p class="desc">Based on 56789</p>
                                </div>
                                <div class="btn-checkout">
                                    <a href="/checkout" class="btn checkout">Check out</a>
                                </div>
                                {{-- <div class="biolife-progress-bar">
                                    <table>
                                        <tr>
                                            <td class="first-position">
                                                <span class="index">$0</span>
                                            </td>
                                            <td class="mid-position">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 25%"
                                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td class="last-position">
                                                <span class="index">$99</span>
                                            </td>
                                        </tr>
                                    </table>
                                </div> --}}
                                <p class="pickup-info"><b>Free Pickup</b> is available as soon as today More about shipping
                                    and pickup</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Related Product-->
                {{-- <div class="product-related-box single-layout">
                    <div class="biolife-title-box lg-margin-bottom-26px-im">
                        <span class="biolife-icon icon-organic"></span>
                        <span class="subtitle">All the best item for You</span>
                        <h3 class="main-title">Related Products</h3>
                    </div>
                    <ul class="products-list biolife-carousel nav-center-02 nav-none-on-mobile"
                        data-slick='{"rows":1,"arrows":true,"dots":false,"infinite":false,"speed":400,"slidesMargin":0,"slidesToShow":5, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 4}},{"breakpoint":992, "settings":{ "slidesToShow": 3, "slidesMargin":20}},{"breakpoint":768, "settings":{ "slidesToShow": 2, "slidesMargin":10}}]}'>
                        <li class="product-item">
                            <div class="contain-product layout-default">
                                <div class="product-thumb">
                                    <a href="#" class="link-to-product">
                                        <img src="assets/images/products/p-13.jpg" alt="dd" width="270"
                                            height="270" class="product-thumnail">
                                    </a>
                                </div>
                                <div class="info">
                                    <b class="categories">Fresh Fruit</b>
                                    <h4 class="product-title"><a href="#" class="pr-name">National Fresh Fruit</a>
                                    </h4>
                                    <div class="price ">
                                        <ins><span class="price-amount"><span
                                                    class="currencySymbol">₹</span>85.00</span></ins>
                                        <del><span class="price-amount"><span
                                                    class="currencySymbol">₹</span>95.00</span></del>
                                    </div>
                                    <div class="slide-down-box">
                                        <p class="message">All products are carefully selected to ensure food safety.</p>
                                        <div class="buttons">
                                            <a href="#" class="btn wishlist-btn"><i class="fa fa-heart"
                                                    aria-hidden="true"></i></a>
                                            <a href="#" class="btn add-to-cart-btn"><i
                                                    class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                            <a href="#" class="btn compare-btn"><i class="fa fa-random"
                                                    aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item">
                            <div class="contain-product layout-default">
                                <div class="product-thumb">
                                    <a href="#" class="link-to-product">
                                        <img src="assets/images/products/p-14.jpg" alt="dd" width="270"
                                            height="270" class="product-thumnail">
                                    </a>
                                </div>
                                <div class="info">
                                    <b class="categories">Fresh Fruit</b>
                                    <h4 class="product-title"><a href="#" class="pr-name">National Fresh Fruit</a>
                                    </h4>
                                    <div class="price">
                                        <ins><span class="price-amount"><span
                                                    class="currencySymbol">₹</span>85.00</span></ins>
                                        <del><span class="price-amount"><span
                                                    class="currencySymbol">₹</span>95.00</span></del>
                                    </div>
                                    <div class="slide-down-box">
                                        <p class="message">All products are carefully selected to ensure food safety.</p>
                                        <div class="buttons">
                                            <a href="#" class="btn wishlist-btn"><i class="fa fa-heart"
                                                    aria-hidden="true"></i></a>
                                            <a href="#" class="btn add-to-cart-btn"><i
                                                    class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                            <a href="#" class="btn compare-btn"><i class="fa fa-random"
                                                    aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item">
                            <div class="contain-product layout-default">
                                <div class="product-thumb">
                                    <a href="#" class="link-to-product">
                                        <img src="assets/images/products/p-15.jpg" alt="dd" width="270"
                                            height="270" class="product-thumnail">
                                    </a>
                                </div>
                                <div class="info">
                                    <b class="categories">Fresh Fruit</b>
                                    <h4 class="product-title"><a href="#" class="pr-name">National Fresh Fruit</a>
                                    </h4>
                                    <div class="price">
                                        <ins><span class="price-amount"><span
                                                    class="currencySymbol">₹</span>85.00</span></ins>
                                        <del><span class="price-amount"><span
                                                    class="currencySymbol">₹</span>95.00</span></del>
                                    </div>
                                    <div class="slide-down-box">
                                        <p class="message">All products are carefully selected to ensure food safety.</p>
                                        <div class="buttons">
                                            <a href="#" class="btn wishlist-btn"><i class="fa fa-heart"
                                                    aria-hidden="true"></i></a>
                                            <a href="#" class="btn add-to-cart-btn"><i
                                                    class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                            <a href="#" class="btn compare-btn"><i class="fa fa-random"
                                                    aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item">
                            <div class="contain-product layout-default">
                                <div class="product-thumb">
                                    <a href="#" class="link-to-product">
                                        <img src="assets/images/products/p-10.jpg" alt="dd" width="270"
                                            height="270" class="product-thumnail">
                                    </a>
                                </div>
                                <div class="info">
                                    <b class="categories">Fresh Fruit</b>
                                    <h4 class="product-title"><a href="#" class="pr-name">National Fresh Fruit</a>
                                    </h4>
                                    <div class="price">
                                        <ins><span class="price-amount"><span
                                                    class="currencySymbol">₹</span>85.00</span></ins>
                                        <del><span class="price-amount"><span
                                                    class="currencySymbol">₹</span>95.00</span></del>
                                    </div>
                                    <div class="slide-down-box">
                                        <p class="message">All products are carefully selected to ensure food safety.</p>
                                        <div class="buttons">
                                            <a href="#" class="btn wishlist-btn"><i class="fa fa-heart"
                                                    aria-hidden="true"></i></a>
                                            <a href="#" class="btn add-to-cart-btn"><i
                                                    class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                            <a href="#" class="btn compare-btn"><i class="fa fa-random"
                                                    aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item">
                            <div class="contain-product layout-default">
                                <div class="product-thumb">
                                    <a href="#" class="link-to-product">
                                        <img src="assets/images/products/p-08.jpg" alt="dd" width="270"
                                            height="270" class="product-thumnail">
                                    </a>
                                </div>
                                <div class="info">
                                    <b class="categories">Fresh Fruit</b>
                                    <h4 class="product-title"><a href="#" class="pr-name">National Fresh Fruit</a>
                                    </h4>
                                    <div class="price">
                                        <ins><span class="price-amount"><span
                                                    class="currencySymbol">₹</span>85.00</span></ins>
                                        <del><span class="price-amount"><span
                                                    class="currencySymbol">₹</span>95.00</span></del>
                                    </div>
                                    <div class="slide-down-box">
                                        <p class="message">All products are carefully selected to ensure food safety.</p>
                                        <div class="buttons">
                                            <a href="#" class="btn wishlist-btn"><i class="fa fa-heart"
                                                    aria-hidden="true"></i></a>
                                            <a href="#" class="btn add-to-cart-btn"><i
                                                    class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                            <a href="#" class="btn compare-btn"><i class="fa fa-random"
                                                    aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item">
                            <div class="contain-product layout-default">
                                <div class="product-thumb">
                                    <a href="#" class="link-to-product">
                                        <img src="assets/images/products/p-21.jpg" alt="dd" width="270"
                                            height="270" class="product-thumnail">
                                    </a>
                                </div>
                                <div class="info">
                                    <b class="categories">Fresh Fruit</b>
                                    <h4 class="product-title"><a href="#" class="pr-name">National Fresh Fruit</a>
                                    </h4>
                                    <div class="price">
                                        <ins><span class="price-amount"><span
                                                    class="currencySymbol">₹</span>85.00</span></ins>
                                        <del><span class="price-amount"><span
                                                    class="currencySymbol">₹</span>95.00</span></del>
                                    </div>
                                    <div class="slide-down-box">
                                        <p class="message">All products are carefully selected to ensure food safety.</p>
                                        <div class="buttons">
                                            <a href="#" class="btn wishlist-btn"><i class="fa fa-heart"
                                                    aria-hidden="true"></i></a>
                                            <a href="#" class="btn add-to-cart-btn"><i
                                                    class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                            <a href="#" class="btn compare-btn"><i class="fa fa-random"
                                                    aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item">
                            <div class="contain-product layout-default">
                                <div class="product-thumb">
                                    <a href="#" class="link-to-product">
                                        <img src="assets/images/products/p-18.jpg" alt="dd" width="270"
                                            height="270" class="product-thumnail">
                                    </a>
                                </div>
                                <div class="info">
                                    <b class="categories">Fresh Fruit</b>
                                    <h4 class="product-title"><a href="#" class="pr-name">National Fresh Fruit</a>
                                    </h4>
                                    <div class="price">
                                        <ins><span class="price-amount"><span
                                                    class="currencySymbol">₹</span>85.00</span></ins>
                                        <del><span class="price-amount"><span
                                                    class="currencySymbol">₹</span>95.00</span></del>
                                    </div>
                                    <div class="slide-down-box">
                                        <p class="message">All products are carefully selected to ensure food safety.</p>
                                        <div class="buttons">
                                            <a href="#" class="btn wishlist-btn"><i class="fa fa-heart"
                                                    aria-hidden="true"></i></a>
                                            <a href="#" class="btn add-to-cart-btn"><i
                                                    class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                            <a href="#" class="btn compare-btn"><i class="fa fa-random"
                                                    aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div> --}}

            </div>
        </div>
    </div>
@endsection
