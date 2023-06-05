@extends('layouts.user')
@push('css')
    <style>
        .wrapper_container {

            overflow-x: scroll;
            overflow-y: hidden;
            height: 150px;
            white-space: nowrap;
            margin: 20px 10px;


        }

        .wrapper_container img {
            box-shadow: 1px 1px 10px #999;
            margin: 8px;
             height: 130px;
            cursor: pointer;
            display: inline-block;
            *display: inline;

            *zoom: 1;
            border: 4px solid #999;
            vertical-align: top;
            cursor: pointer;
        }

        .wrapper_container img:hover {
            transform: scale(1.05)
        }

        .p-4 {
            padding: 10px;
        }

        .form-group {
            margin: 15px 5px;
        }

        .wrapper_container::-webkit-scrollbar {
            display: none;
        }
        .owl-prev  label,.owl-next label{
            font-size: 25px !important;

        }
    </style>
@endpush
@section('content')
    <div class="page-contain checkout">

        <!-- Main content -->
        <div id="main-content" class="main-content">
            <div class="container sm-margin-top-37px">
                <form action="{{ route('orders.store') }}" name="frm-login" method="post">
                    @csrf
                    <div class="row">

                        <!--checkout progress box-->
                        <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
                            <div class="checkout-progress-wrap">

                                <ul class="steps">
                                    <li class="step 1st">
                                        {{-- Customer information --}}
                                        <div class="checkout-act active">
                                            <h3 class="title-box"><span class="number">1</span>Customer</h3>
                                            @if (auth()->user())
                                                <input type="text" style="opacity: 0" value="{{ auth()->user()->id }}"
                                                    name="user_id">
                                                <div class="box-content">
                                                    <h3> <i class="biolife-icon icon-login"></i> {{ auth()->user()->name }}
                                                    </h3>
                                                </div>
                                            @else
                                                <input type="text" style="opacity: 0" value="0" name="user_id">

                                                <div class="box-content">
                                                    <p class="txt-desc">Checking out as a <a class="pmlink"
                                                            href="#">Guest?</a> You’ll be able to save your details to
                                                        create
                                                        an account with us later.</p>
                                                    <div class="login-on-checkout">

                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <label for="input_email">Email Address</label>
                                                                <input type="email" name="email" class="form-control"
                                                                    value="" placeholder="Your email">
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <label for="input_email">Name</label>
                                                                <input type="text" name="name" value=""
                                                                    class="form-control" placeholder="Your name">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="input_email">Phone</label>
                                                                    <input type="text" name="phone"
                                                                        class="form-control" value=""
                                                                        placeholder="Your phone">
                                                                </div>

                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="input_email">Password</label>
                                                                    <input type="password" name="password"
                                                                        class="form-control" value=""
                                                                        placeholder="Your password">
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <div class=" p-4"
                                                            style="display: flex;padding:15px;justify-content:flex-end">
                                                            <button class="btn checkout" type="button"
                                                                id="register">Register</button>
                                                        </div>
                                                        <p class="msg">Already have an account? <a href="/signin"
                                                                class="link-forward">Sign in now</a></p>

                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                    </li>
                                    {{-- Select Wrapper --}}
                                    <li class="step 2nd" style="display: none">
                                        <div class="checkout-act">
                                            <h3 class="title-box"><span class="number">2</span>Select Gitf Wrapper</h3>
                                            <div class="box-content -4">

                                                <div class="owl-carousel">
                                                    @foreach ($wrappers as $item)
                                                        <img src="/uploads/wrappers/{{ $item->image }}" class="img item"
                                                            data-id="{{ $item->id }}" alt="">
                                                    @endforeach
                                                    @foreach ($wrappers as $item)
                                                        <img src="/uploads/wrappers/{{ $item->image }}" class="img item"
                                                            data-id="{{ $item->id }}" alt="">
                                                    @endforeach


                                                </div>

                                                <input type="text" name="wrapper_id" value="1" style="opacity: 0">
                                            </div>
                                        </div>
                                    </li>
                                    <li class="step 2nd" style="display: none">
                                        <div class="checkout-act">
                                            <h3 class="title-box"><span class="number">3</span>Select Card Text</h3>
                                            <div class="box-content">
                                                <div class="row">
                                                    <div class="col-sm-6 p-4">
                                                        <div class="form-group">
                                                            <label for="input_email">Choose Color</label>
                                                            <input type="color" name="card_color" class="form-control"
                                                                value="" placeholder="card color">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 p-4">
                                                        <div class="form-group">
                                                            <label for="input_email">Write Text For Card</label>
                                                            <textarea name="card_text" id="" cols="30" rows="5" class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="step 3rd">
                                        <div class="checkout-act">
                                            <h3 class="title-box"><span class="number">4</span>Billing</h3>

                                            <div class="box-content">
                                                <p class="txt-desc">This billingis related to the person your are sending
                                                    this
                                                    gift so Please fill this fields accordingly.</p>
                                                <div class="login-on-checkout">

                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="input_email">Phone</label>
                                                                <input type="number" name="billing_phone"
                                                                    class="form-control" value=""
                                                                    placeholder="Your phone" required>
                                                            </div>

                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="input_email">Name</label>
                                                                <input type="text" name="billing_name"
                                                                    class="form-control" placeholder="Your name" required>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="input_email">City</label>
                                                                <input type="text" name="city" class="form-control"
                                                                    value="" placeholder="Your city" required>
                                                            </div>

                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="input_email">Pincode</label>
                                                                <input type="text" name="pincode" value=""
                                                                    class="form-control" placeholder="Your pincode"
                                                                    required>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="input_email">Date of Delivery</label>
                                                                <input type="date" name="date_of_delivery"
                                                                    class="form-control" value=""
                                                                    placeholder="Your" required>
                                                            </div>

                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="input_email">Time of Delivery</label>
                                                                <input type="time" name="time_of_delivery"
                                                                    value="" class="form-control"
                                                                    placeholder="Your pincode" required>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <label for="input_email">Address</label>
                                                                <input type="text" name="address" class="form-control"
                                                                    value="" placeholder="Your address">
                                                            </div>
                                                        </div>

                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="step 4th">
                                        <div class="checkout-act">
                                            <h3 class="title-box"><span class="number">5</span>Payment</h3>
                                            <div class="box-content">
                                                <h5> <input type="radio" name="payment_option" value="razorpay" checked required>&nbsp;
                                                    Razorpay</h5>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!--Order Summary-->
                        <div
                            class="col-lg-5 col-md-5 col-sm-6 col-xs-12 sm-padding-top-48px sm-margin-bottom-0 xs-margin-bottom-15px">
                            <div class="order-summary sm-margin-bottom-80px">
                                <div class="title-block">
                                    <h3 class="title">Order Summary</h3>
                                    <a href="/cart" class="link-forward">Edit cart</a>
                                </div>
                                <div class="cart-list-box short-type">
                                    <span class="number">{{ count($cartItems) }} items</span>
                                    <ul class="cart-list">
                                        @php $subtotal=0 @endphp
                                        @foreach ($cartItems as $item)
                                            @php $subtotal+=$item["qty"]*$item["price"] @endphp
                                            <li class="cart-elem">
                                                <div class="cart-item">
                                                    <div class="product-thumb">
                                                        <a class="prd-thumb" href="#">
                                                            <figure><img src="/uploads/products/{{ $item['image'] }}"
                                                                    width="113" height="113" alt="shop-cart">
                                                            </figure>
                                                        </a>
                                                    </div>
                                                    <div class="info">
                                                        <span class="txt-quantity">{{ $item['qty'] }}X</span>
                                                        <a href="#" class="pr-name">{{ $item['name'] }}</a>
                                                    </div>
                                                    <div class="price price-contain">
                                                        <ins><span class="price-amount"><span
                                                                    class="currencySymbol">₹</span>{{ $item['qty'] * $item['price'] }}.00</span></ins>

                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach


                                    </ul>
                                    <ul class="subtotal">
                                        <li>
                                            <div class="subtotal-line">
                                                <b class="stt-name">Subtotal</b>
                                                @php   @endphp
                                                <span class="stt-price">₹{{ $subtotal }}.00</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="subtotal-line">
                                                <b class="stt-name">Shipping</b>
                                                <span class="stt-price">₹{{ settings()['shipping_charge'] }}.00</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="subtotal-line">
                                                <b class="stt-name">Tax</b>
                                                <span class="stt-price">₹0.00</span>
                                            </div>
                                        </li>
                                        {{-- <li>
                                        <div class="subtotal-line">
                                            <a href="#" class="link-forward">Promo/Gift Certificate</a>
                                        </div>
                                    </li> --}} 
                                        <li>
                                            <div class="subtotal-line">
                                                <b class="stt-name">total:</b>
                                                <span
                                                    class="stt-price">₹{{ $subtotal + settings()['shipping_charge'] }}.00</span>
                                                    <input type="hidden" name="subtotal" value="{{ $subtotal + settings()['shipping_charge'] }}">
                                            </div>
                                        </li>

                                        <li>
                                            <div class="p-4">
                                                <button class="btn btn-primary" type="submit">Proceed for
                                                    payment</button>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        var selected = 0;
        $(".img").click(function() {

            $(this).css("border", "4px solid orange")
            selected = $(this).attr("data-id");
            $("input[name=wrapper_id]").val(selected);
            $(".img").each(function() {
                if ($(this).attr("data-id") != selected) {
                    $(this).css("border", "4px solid #999");
                }
            });
        });
        jQuery(document).ready(function($) {
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                responsive: {
                    0: {
                        items: 2
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                }
            });
            $(".owl-prev").css("font-size","25px");
            $(".owl-next").css("font-size","25px");

        })
        $("#register").click(function() {
            var name = $("input[name=name]").val();
            var email = $("input[name=email]").val();
            var phone = $("input[name=phone]").val();
            var password = $("input[name=password]").val();
            const validateEmail = (email) => {
                return String(email)
                    .toLowerCase()
                    .match(
                        /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
                    );
            };
            if (!validateEmail) {
                swal("Error", "Invalid Email", "error");
                location.refresh();
            } else {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    url: '/register',
                    data: {
                        name: name,
                        email: email,
                        password: password,
                        phone: phone,

                    },
                    type: 'post',
                    success: function(response) {
                        if (response.status == 1) {
                            location.replace("/checkout");
                        } else {
                            swal("Error", response.message, "success");
                            // location.refresh();
                        }

                    },
                    error: function(x, xs, xt) {
                        alert(x);

                    }
                });
            }



        })
    </script>
@endsection
