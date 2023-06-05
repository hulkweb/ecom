@extends('layouts.user')
@push('css')
    <style>
        .fa-star {
            color: black;
            cursor: pointer;
            font-size: 23px;

        }
       
    </style>
@endpush
@section('content')

    <div class="page-contain shopping-cart">

        <!-- Main content -->
        <div id="main-content" class="main-content">
            <div class="container">



                <!--Cart Table-->
                <div class="shopping-cart-container">
                    <div class="row">
                        <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">

                            <h3 class="box-title">Order items</h3>
                            <form class="shopping-cart-form" action="{{ route('orders.destroy', $order) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <table class="shop_table cart-form">
                                    <thead>
                                        <tr>
                                            <th>Sr No.</th>

                                            <th class="product-quantity">Image</th>
                                            <th class="product-subtotal">Name</th>
                                            <th class="product-subtotal">qty</th>



                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($order->orderItems->count())
                                            @foreach ($order->orderItems as $key => $item)
                                                <tr class="cart_item">
                                                    <td>{{ $key + 1 }}</td>
                                                    <td class="product-price" data-title="Price">
                                                        <img src="/uploads/products/{{ $item->product->image }}"
                                                            style="height: 80px" alt="">
                                                        {{-- <img src="{{ $item->product->image }}" style="height: 80px"
                                                            alt=""> --}}
                                                    </td>

                                                    <td class="product-price" data-title="Price">
                                                     <a href="/p/{{str_replace(" ","-",strtolower($item->product->name))}}">   {{ $item->product->name }}</a>
                                                    </td>

                                                    <td class="product-subtotal" data-title="Total">
                                                        <div class="badge">{{ $item->qty }}</div>
                                                    </td>

                                                </tr>
                                            @endforeach
                                        @endif



                                    </tbody>
                                </table>
                                <div class="p-4">
                                    <h1>Billing Details</h1>
                                    <table class="shop_table cart-form">

                                        <tbody>
                                            <tr>
                                                <td>Status</td>
                                                <td> <span
                                                        class="btn @if ($order->status == 'cancelled') btn-danger @else btn-primary  @endif">
                                                        {{ $order->status }}</span> </td>
                                            </tr>
                                            <tr>
                                                <td>Name</td>
                                                <td>{{ $order->billing->name }}</td>
                                            </tr>
                                            <tr>
                                                <td>Phone</td>
                                                <td>{{ $order->billing->phone }}</td>
                                            </tr>
                                            <tr>
                                                <td>Address</td>
                                                <td>{{ $order->billing->address }} ,{{ $order->billing->city }} -
                                                    {{ $order->billing->pincode }}</td>
                                            </tr>
                                            <tr>
                                                <td>Date & Time of delivery</td>
                                                <td> <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    {{ date('d M Y', strtotime($order->billing->date_of_delivery)) }}
                                                    &nbsp; &nbsp; <i class="fa fa-clock-o" aria-hidden="true"></i>
                                                    {{ $order->billing->time_of_delivery }}
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                                @if ($order->status != 'delivered')
                                    <div class="p-4">
                                        <h3>Cancel Order</h3>
                                        <input type="hidden" name="order_id" value="{{ $order->id }}">
                                        <button class="btn btn-danger">Cancel Order</button>
                                    </div>
                                @endif

                            </form>
                            <hr>
                            @if ($order->status == 'delivered' && $order->review->count()==0 )
                                <div class="p-4">
                                    <form action="{{ route('reviews.store') }}" method="POST">
                                        @csrf
                                        <h1>Write a Review</h1>
                                        <input type="text" style="opacity: 0" name="rating" value="1">
                                        <div class="form-group">
                                            <label>Rating</label>
                                            <p>
                                                <span><i class="fa fa-star" id="1" aria-hidden="true"></i> </span>
                                                <span><i class="fa fa-star" id="2" aria-hidden="true"></i> </span>
                                                <span><i class="fa fa-star" id="3" aria-hidden="true"></i> </span>
                                                <span><i class="fa fa-star" id="4" aria-hidden="true"></i> </span>
                                                <span><i class="fa fa-star" id="5" aria-hidden="true"></i> </span>
                                            </p>
                                        </div>
                                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                        <input type="hidden" name="order_id"
                                            value="{{ $order->id }}">

                                        <div class="form-group">
                                            <label for="review">Review</label>
                                            <textarea name="details" id="review" cols="15" rows="5" class="form-control"></textarea>
                                        </div>
                                        <div class="form-group"> <button class="btn btn-primary">Submit</button></div>
                                    </form>
                                </div>
                            @endif


                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                            <div class="shpcart-subtotal-block">
                                <div style="display: flex;justify-content:center;">

                                    <a href="/dashboard"> <i class="fa fa-user fa-3x"></i></a>
                                </div>
                                <hr>
                                <div class="subtotal-line">
                                    <b class="stt-name">Name</b>
                                    <span class="stt-price">{{ auth()->user()->name }}</span>
                                </div>
                                <div class="subtotal-line">
                                    <b class="stt-name">Email</b>
                                    <span class="stt-price">{{ auth()->user()->email }}</span>
                                </div>
                                <div class="subtotal-line">
                                    <b class="stt-name">Mobile N.</b>
                                    <span class="stt-price">{{ auth()->user()->phone }}</span>
                                </div>
                                <div class="btn-checkout">
                                    <a href="/logout" class="btn checkout">Logout</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <script>
        var selected = 0;
        $(".fa-star").click(function() {


            selected = $(this).attr("id");
            $("input[name=rating]").val(selected);
            console.log(selected);
            for (var i = 1; i <= selected; i++) {
                $(`#${i}`).css("color", "orange")
            }
            for (var j = selected + 1; j <= 5; j++) {
                $(`#${j}`).css("color", "black")
            }
        });
    </script>
@endsection
