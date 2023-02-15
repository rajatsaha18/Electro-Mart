@extends('website.master')

@section('title')
    Show-Cart
@endsection

@section('body')
    <div class="page-head_agile_info_w3l inner-checkout-page">
        <div class="container py-5">
            <h3 class="title-style text-white pt-5"><span>Checkout</span> Page</h3>
            <ul class="w3_short pt-3 pb-5">
                <li>
                    <a href="index.html" class="text-white">Home</a>
                    <i class="fa fa-angle-right mx-2 text-white" aria-hidden="true"></i>
                </li>
                <li class="text-light">Checkout</li>
            </ul>
        </div>
    </div>
    <!-- //banner-2 -->
    <!-- page -->
    <div class="services-breadcrumb">
        <div class="agile_inner_breadcrumb">

        </div>
    </div>
    <!-- //page -->
    <div style="margin: 8px auto; display: block; text-align:center;">

        <!---728x90--->


    </div>
    <!-- checkout page -->
    <div class="privacy py-5">
        <div class="container py-md-5 py-4">
            <div class="checkout-right">
                <h4 class="text-center text-success">{{ Session::get('message') }}</h4>
                <h4 class="mb-sm-4 mb-3">Your shopping cart contains:
                    <span></span>
                </h4>
                <div class="table-responsive">
                    <table class="timetable_sub">
                        <thead>
                            <tr>
                                <th>SL No.</th>
                                <th>Product Info</th>
                                <th>Quantity</th>
                                <th>Product Name</th>

                                <th>Unit Price</th>
                                <th>SubTotal</th>
                                <th>Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php($sum = 0)
                            @foreach ($products as $product )
                            <tr class="rem1">
                                <td class="invert">{{ $loop->iteration }}</td>
                                <td class="invert-image">
                                    <a href="single.html">
                                        <img src="{{ asset($product->attributes->image) }}" alt=" " class="img-responsive">
                                    </a>
                                </td>
                                <td class="invert">
                                    <form action="{{ route('update.cart.product',['id' => $product->id]) }}" method="POST">
                                        @csrf
                                        <div class="input-group mb-3">
                                            <input type="number" name="qty" class="form-control" value="{{$product->quantity}}" min="1"/>
                                            <button class="btn btn-outline-secondary btn-sm" type="submit" >Update</button>
                                        </div>
                                    </form>
                                </td>
                                <td class="invert">{{ $product->name }}</td>
                                <td class="invert">Tk. {{ $product->price }}</td>
                                <td class="invert">Tk.{{ $product->price * $product->quantity }}</td>
                                <td class="invert">
                                    <a href="{{ route('remove.cart.product',['id' => $product->id]) }}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure remove this ?')">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            @php($sum = $sum+($product->price * $product->quantity) )
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
            <section class="py-3">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 mt-5">
                            <div class="mb-3 text-center">
                                <a href="{{ route('home') }}" class=" btn btn-primary" class="form-control text-center">Continue To Basket</a>
                            </div>
                            <div class="card">
                                <div class="card-body">

                                    <ul>
                                        <li>Cart SubTotal(TK)
                                            <span class="px-5">{{ number_format($sum) }}</span>
                                        </li>

                                        <li>Tax Amount(TK)(15%)
                                            @php($tax = round((($sum * 15)/100)))
                                            <span class="px-3">{{ number_format($tax) }}</span>
                                        </li>

                                        <li>Shipping Cost(TK)
                                            @php($shipping = 500)

                                            <span class="px-5">{{ $shipping }}</span>
                                        </li>
                                        <hr>

                                        <li>Total Payable(TK)
                                            @php($grandTotal = $sum + $tax + $shipping)
                                            <span class="px-5">{{ number_format($grandTotal)}}</span>
                                        </li>

                                    </ul>
                                    <?php
                                    Session::put('order_total', $grandTotal);
                                    Session::put('tax_total', $tax);
                                    Session::put('shipping_total', $shipping);

                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="checkout-left">
                                <div class="address_form_agile mt-sm-5 mt-4">
                                    <h4 class="mb-sm-4 mb-3">Add a User Details</h4>
                                    <form action="{{ route('new-order') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="">Full Name</label>
                                            <input type="text" class="form-control" name="name" placeholder="Enter Name"/>
                                        </div>

                                        <div class="form-group">
                                            <label for="">Email Address</label>
                                            <input type="email" class="form-control" name="email" placeholder="Email Address"/>
                                        </div>

                                        <div class="form-group">
                                            <label for="">Mobile</label>
                                            <input type="number" class="form-control" name="mobile" placeholder="Mobile Number"/>
                                        </div>

                                        <div class="form-group">
                                            <label for="">Delivery Address</label>
                                            <textarea class="form-control" name="delivery_address" placeholder="Delivery Address"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for=""><input type="radio" name="payment_method" value="1" checked/>Cash On Delivery</label>
                                            <label for=""><input type="radio" name="payment_method" value="0"/>Online Payment</label>
                                        </div>

                                        <div class="form-group">
                                            <label for=""></label>
                                            <input type="submit" class="btn btn-primary" name="submit" value="Confirm Order"/>
                                        </div>
                                    </form>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
