@extends('layouts.user')
@section('css')
    <style>
        .input {
            height: 40px;
            border: 2px solid black;
            padding: 10px;
            border-radius: 10px !important;
            width: 100px;

        }
    </style>
@endsection
@section('content')

    <div class="page-contain shopping-cart">

        <!-- Main content -->
        <div id="main-content" class="main-content">
            <div class="container">



                <!--Cart Table-->
                <div class="shopping-cart-container">
                    <div class="row">
                        <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                            <h3 class="box-title">Your Orders</h3>
                            <form class="shopping-cart-form" action="/update_cart" method="post">
                                @csrf
                                <table class="shop_table cart-form">
                                    <thead>
                                        <tr>
                                            <th>Sr No.</th>
                                            <th class="product-price">Order Id</th>

                                            <th class="product-quantity">Subtotal</th>
                                            <th class="product-subtotal">Status</th>
                                            <th class="product-subtotal">Date & Time</th>
                                            <th>Actions</th>
                                            <th>Rating</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (count($orders))
                                            @foreach ($orders as $key => $item)
                                                <tr class="cart_item">
                                                    <td>{{ $key + 1 }}</td>
                                                    <td class="product-price" data-title="Price">
                                                        {{ strtoupper($item->order_id) }}
                                                    </td>

                                                    <td class="product-price" data-title="Price">
                                                        ₹{{ $item->amount }}
                                                    </td>

                                                    <td class="product-subtotal" data-title="Total">
                                                        <div class="badge">{{ $item->status }}</div>
                                                    </td>
                                                    <td class="product-subtotal" data-title="Total">
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        {{ date('d M Y', strtotime($item->billing->date_of_delivery)) }}
                                                        &nbsp; &nbsp; <i class="fa fa-clock-o" aria-hidden="true"></i>
                                                        {{ $item->billing->time_of_delivery }}

                                                    </td>
                                                    <td>

                                                        <a href="/order/view/{{ $item->order_id }}"
                                                            class="btn btn-primary"><i class="fa fa-eye"
                                                                aria-hidden="true"></i></a>
                                                    </td>
                                                    <td>
                                                        @if ($item->status == 'delivered' && $item->review->count() == 0)
                                                            <a href="/order/view/{{ $item->order_id }}#review"
                                                                class="btn btn-primary">write Review</a>
                                                        @endif
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="3">No Orders yet <a href="/filter">Start shopping</a> </td>
                                            </tr>
                                        @endif



                                    </tbody>
                                </table>


                            </form>
                            {{ $orders->links() }}
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                            <form action="{{ route('users.update', auth()->user()) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                @method("PUT")
                                <div class="shpcart-subtotal-block">

                                    <div style="display: flex;justify-content:center;">


                                        <label for="rpfile">
                                            @if (auth()->user()->profile)
                                                <img src="{{ asset('uploads/profiles/' . auth()->user()->profile) }}"
                                                    style="height:50px" alt="">
                                            @else
                                                <i class="fa fa-user fa-3x"></i>
                                            @endif
                                            <div class="badge badge-primary cursor-pointer">change</div>
                                        </label>


                                        <input type="file" name="profile" style="display:none" id="rpfile">
                                    </div>
                                    <hr>
                                    <div class="subtotal-line">
                                        <b class="stt-name">Name</b>
                                        <span class="stt-price"><input type="text" class="form-control" name="name"
                                                value="{{ auth()->user()->name }}"></span>


                                    </div>
                                    <div class="subtotal-line">
                                        <b class="stt-name">Email</b>
                                        <span class="stt-price"><input type="text" class="form-control" name="email"
                                                value="{{ auth()->user()->email }}"></span>
                                    </div>
                                    <div class="subtotal-line">
                                        <b class="stt-name">Mobile N.</b>
                                        <span class="stt-price"><input type="text" class="form-control" name="phone"
                                                value="{{ auth()->user()->phone }}"></span>
                                    </div>
                                    <div class="btn-checkout d-flex">
                                        <button class="btn btn-primary m-auto">Update</button>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection
