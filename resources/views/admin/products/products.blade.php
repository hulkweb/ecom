@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <!-- Main content -->
            <div id="main-content" class="main-content col-lg-9 col-md-8 col-sm-12 col-xs-12">
                @if (isset($store))
                    <div class="my-3 py-3">
                        <div class="row" style="box-shadow: 0px 6px 8px rgba(218, 89, 38, 0.4);border-radius:10px">
                            <div class="col-sm-4 p-3">
                                <img src="{{ asset('uploads/profiles/' . $store->profile) }}" style="height:60px" alt=""
                                    height="">
                            </div>
                            <div class="col-sm-8 p-3">
                                <h1>{{ $store->name }}</h1>
                            </div>
                        </div>

                    </div>
                @endif

<br>
                <div class="product-category grid-style">

                    <div id="top-functions-area" class="top-functions-area">
                        {{-- <div class="flt-item to-left group-on-mobile">
                            <span class="flt-title">Refine</span>
                            <a href="#" class="icon-for-mobile">
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                            <div class="wrap-selectors">
                                <form action="#" name="frm-refine" method="get">
                                    <span class="title-for-mobile">Refine Products By</span>
                                    <div data-title="Price:" class="selector-item">
                                        <select name="price" class="selector">
                                            <option value="all">Price</option>
                                            <option value="class-1st">Less than 5$</option>
                                            <option value="class-2nd">$5-10$</option>
                                            <option value="class-3rd">$10-20$</option>
                                            <option value="class-4th">$20-45$</option>
                                            <option value="class-5th">$45-100$</option>
                                            <option value="class-6th">$100-150$</option>
                                            <option value="class-7th">More than 150$</option>
                                        </select>
                                    </div>
                                    <div data-title="Brand:" class="selector-item">
                                        <select name="brad" class="selector">
                                            <option value="all">Top brands</option>
                                            <option value="br2">Brand first</option>
                                            <option value="br3">Brand second</option>
                                            <option value="br4">Brand third</option>
                                            <option value="br5">Brand fourth</option>
                                            <option value="br6">Brand fiveth</option>
                                        </select>
                                    </div>
                                    <div data-title="Avalability:" class="selector-item">
                                        <select name="ability" class="selector">
                                            <option value="all">Availability</option>
                                            <option value="vl2">Availability 1</option>
                                            <option value="vl3">Availability 2</option>
                                            <option value="vl4">Availability 3</option>
                                            <option value="vl5">Availability 4</option>
                                            <option value="vl6">Availability 5</option>
                                        </select>
                                    </div>
                                    <p class="btn-for-mobile"><button type="submit" class="btn-submit">Go</button></p>
                                </form>
                            </div>
                        </div> --}}
                        <div class="flt-item to-right">

                            <div class="wrap-selectors">
                                <div class="selector-item orderby-selector">
                                    <select name="orderBy" class="orderby" aria-label="Shop order"
                                        onchange="change(this.value)">
                                        <option value="menu_order" selected="selected"> sorting</option>

                                        <option value="asc">price: low to high</option>
                                        <option value="desc">price: high to low</option>
                                    </select>
                                </div>
                                {{-- <div class="selector-item viewmode-selector">
                                    <a href="category-grid-left-sidebar.html" class="viewmode grid-mode active"><i
                                            class="biolife-icon icon-grid"></i></a>
                                    <a href="category-list-left-sidebar.html" class="viewmode detail-mode"><i
                                            class="biolife-icon icon-list"></i></a>
                                </div> --}}
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        @if(count($products))
                        <ul class="products-list">
                            @foreach ($products as $item)
                                <li class="product-item col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                    <div class="contain-product layout-default">
                                        <div class="product-thumb">
                                            <a href="/p/{{ str_replace(' ', '-', $item->name) }}" class="link-to-product">
                                                <img src="/uploads/products/{{ $item->image }}" alt="dd"
                                                    width="270" height="270" class="product-thumnail">
                                            </a>
                                        </div>
                                        <div class="info">
                                            <b class="categories">{{ $item->category->name }}</b>
                                            <h4 class="product-title"><a href="/p/{{ str_replace(' ', '-', $item->name) }}"
                                                    class="pr-name">{{ $item->name }}</a></h4>
                                            <div class="price">
                                                <ins><span class="price-amount"><span
                                                            class="currencySymbol">₹</span>{{ $item->price }}</span></ins>
                                                <del><span class="price-amount"><span
                                                            class="currencySymbol">₹</span>{{ $item->price + 100 }}.00</span></del>
                                            </div>

                                            <div class="slide-down-box">

                                                <div class="buttons">
                                                    {{-- <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a> --}}
                                                    <form action="/add_to_cart" method="post" style="display: flex">
                                                        @csrf
                                                        <input type="hidden" name="product_id" value="{{ $item->id }}">
                                                        <input type="hidden" name="qty" value="1">

                                                        <button class="btn add-to-cart-btn" style="margin: auto"><i
                                                                class="fa fa-cart-arrow-down" aria-hidden="true"></i>add
                                                            to cart</button>

                                                    </form>
                                                    {{-- <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach


                        </ul>
                        @else
                       <div class="alert alert-warning display-4 font-bold"> No Products </div>
                        @endif
                    </div>

                    <div class="biolife-panigations-block">
                        {{ $products->links() }}
                    </div>

                </div>

            </div>
            <!-- Sidebar -->
            <aside id="sidebar" class="sidebar col-lg-3 col-md-4 col-sm-12 col-xs-12">
                <div class="biolife-mobile-panels">
                    <span class="biolife-current-panel-title">Sidebar</span>
                    <a class="biolife-close-btn" href="#" data-object="open-mobile-filter">&times;</a>
                </div>
                <div class="sidebar-contain">
                    <div class="widget biolife-filter">
                        <h4 class="wgt-title">Categories</h4>
                        <div class="wgt-content">
                            <ul class="cat-list">
                                @foreach ($categories as $item)
                                    <li class="cat-list-item"><a href="?category={{ str_replace(' ', '-', $item->title) }}"
                                            class="cat-link">{{ $item->title }}</a></li>
                                @endforeach

                            </ul>
                        </div>
                    </div>



                    <div class="widget price-filter biolife-filter">
                        <h4 class="wgt-title">Price</h4>
                        <div class="wgt-content">
                            <div class="frm-contain">
                                <form name="price-filter" id="price-filter" method="get">
                                    <p class="f-item">
                                        <label for="pr-from">₹</label>
                                        <input class="input-number" type="number" id="pr-from" value=""
                                            name="price_from">
                                    </p>
                                    <p class="f-item">
                                        <label for="pr-to">to ₹</label>
                                        <input class="input-number" type="number" id="pr-to" value=""
                                            name="price_to">
                                    </p>
                                    <p class="f-item"><button class="btn-submit" type="submit">go</button></p>
                                </form>
                            </div>
                            <ul class="check-list bold single">
                                <li class="check-list-item"><a href="/filter?price_from=0&price_to=500"
                                        class="check-link">₹0 - ₹500</a></li>
                                <li class="check-list-item"><a href="/filter?price_from=500&price_to=1000"
                                        class="check-link">₹500 - ₹1000</a></li>
                                <li class="check-list-item"><a href="/filter?price_from=1000&price_to=10000"
                                        class="check-link">₹ 1000 - ₹10000</a></li>
                            </ul>
                        </div>
                    </div>

                    {{-- <div class="widget biolife-filter">
                    <h4 class="wgt-title">Brand</h4>
                    <div class="wgt-content">
                        <ul class="check-list multiple">
                            <li class="check-list-item"><a href="#" class="check-link">Great Value Organic</a></li>
                            <li class="check-list-item"><a href="#" class="check-link">Plum Organic</a></li>
                            <li class="check-list-item"><a href="#" class="check-link">Shop to Home</a></li>
                        </ul>
                    </div>
                </div>

                <div class="widget biolife-filter">
                    <h4 class="wgt-title">Color</h4>
                    <div class="wgt-content">
                        <ul class="color-list">
                            <li class="color-item"><a href="#" class="c-link"><span class="symbol img-color"></span>Multi</a></li>
                            <li class="color-item"><a href="#" class="c-link"><span class="symbol hex-code color-01"></span>Red</a></li>
                            <li class="color-item"><a href="#" class="c-link"><span class="symbol hex-code color-02"></span>Orrange</a></li>
                            <li class="color-item"><a href="#" class="c-link"><span class="symbol hex-code color-03"></span>Other</a></li>
                        </ul>
                    </div>
                </div>

                <div class="widget biolife-filter">
                    <h4 class="wgt-title">Popular Size</h4>
                    <div class="wgt-content">
                        <ul class="check-list bold multiple">
                            <li class="check-list-item"><a href="#" class="check-link">8oz</a></li>
                            <li class="check-list-item"><a href="#" class="check-link">15oz</a></li>
                            <li class="check-list-item"><a href="#" class="check-link">6oz</a></li>
                            <li class="check-list-item"><a href="#" class="check-link">30oz</a></li>
                        </ul>
                    </div>
                </div>

                <div class="widget biolife-filter">
                    <h4 class="wgt-title">Number of Pieces</h4>
                    <div class="wgt-content">
                        <ul class="check-list bold">
                            <li class="check-list-item"><a href="#" class="check-link">1 to 9</a></li>
                            <li class="check-list-item"><a href="#" class="check-link">10 to 15</a></li>
                        </ul>
                    </div>
                </div>

                <div class="widget biolife-filter">
                    <h4 class="wgt-title">Recently Viewed</h4>
                    <div class="wgt-content">
                        <ul class="products">
                            <li class="pr-item">
                                <div class="contain-product style-widget">
                                    <div class="product-thumb">
                                        <a href="#" class="link-to-product" tabindex="0">
                                            <img src="assets/images/products/p-13.jpg" alt="dd" width="270" height="270" class="product-thumnail">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <b class="categories">Fresh Fruit</b>
                                        <h4 class="product-title"><a href="#" class="pr-name" tabindex="0">National Fresh Fruit</a></h4>
                                        <div class="price">
                                            <ins><span class="price-amount"><span class="currencySymbol">₹</span>{{₹item->price}}</span></ins>
                                            <del><span class="price-amount"><span class="currencySymbol">₹</span>{{$item->price+100}}.00</span></del>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="pr-item">
                                <div class="contain-product style-widget">
                                    <div class="product-thumb">
                                        <a href="#" class="link-to-product" tabindex="0">
                                            <img src="assets/images/products/p-14.jpg" alt="dd" width="270" height="270" class="product-thumnail">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <b class="categories">Fresh Fruit</b>
                                        <h4 class="product-title"><a href="#" class="pr-name" tabindex="0">National Fresh Fruit</a></h4>
                                        <div class="price">
                                            <ins><span class="price-amount"><span class="currencySymbol">₹</span>{{$item->price}}</span></ins>
                                            <del><span class="price-amount"><span class="currencySymbol">₹</span>{{$item->price+100}}.00</span></del>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="pr-item">
                                <div class="contain-product style-widget">
                                    <div class="product-thumb">
                                        <a href="#" class="link-to-product" tabindex="0">
                                            <img src="assets/images/products/p-10.jpg" alt="dd" width="270" height="270" class="product-thumnail">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <b class="categories">Fresh Fruit</b>
                                        <h4 class="product-title"><a href="#" class="pr-name" tabindex="0">National Fresh Fruit</a></h4>
                                        <div class="price">
                                            <ins><span class="price-amount"><span class="currencySymbol">₹</span>{{$item->price}}</span></ins>
                                            <del><span class="price-amount"><span class="currencySymbol">₹</span>{{$item->price+100}}.00</span></del>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div> 

                <div class="widget biolife-filter">
                    <h4 class="wgt-title">Product Tags</h4>
                    <div class="wgt-content">
                        <ul class="tag-cloud">
                            <li class="tag-item"><a href="#" class="tag-link">Fresh Fruit</a></li>
                            <li class="tag-item"><a href="#" class="tag-link">Natural Food</a></li>
                            <li class="tag-item"><a href="#" class="tag-link">Hot</a></li>
                            <li class="tag-item"><a href="#" class="tag-link">Organics</a></li>
                            <li class="tag-item"><a href="#" class="tag-link">Dried Organic</a></li>
                        </ul>
                    </div>
                </div>
                --}}
                </div>

            </aside>
        </div>
    </div>
    <script>
        function change(val) {
            location.replace("/filter?orderBy=" + val)
        }
       
    </script>
@endsection
