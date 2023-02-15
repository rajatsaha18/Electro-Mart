@extends('website.master')

@section('title')
Product Detail Page
@endsection

@section('body')
<div class="page-head_agile_info_w3l inner-checkout-page">
    <div class="container py-5">
        <h3 class="title-style text-white pt-5"><span>Product</span> Single Page</h3>
        <ul class="w3_short pt-3 pb-5">
            <li>
                <a href="index.html" class="text-white">Home</a>
                <i class="fa fa-angle-right mx-2 text-white" aria-hidden="true"></i>
            </li>
            <li class="text-light">Single Product 2</li>
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
<!-- Single Page -->
<div class="banner-bootom-w3-agileits py-5">
    <div class="container py-md-5 py-4">
        <div class="row">
            <div class="col-lg-5 col-md-8 single-right-left ">
                <div class="grid images_3_of_2">
                    <div class="flexslider">
                        <ul class="slides">
                            <li data-thumb="images/sii1.png">
                                <div class="thumb-image">
                                    <img src="{{ asset($product->image) }}" data-imagezoom="true" class="img-fluid" alt="">
                                </div>
                            </li>
                            {{-- <li data-thumb="images/sii2.png">
                                <div class="thumb-image">
                                    <img src="" data-imagezoom="true" class="img-fluid" alt="">
                                </div>
                            </li>
                            <li data-thumb="images/sii3.png">
                                <div class="thumb-image">
                                    <img src="" data-imagezoom="true" class="img-fluid" alt="">
                                </div>
                            </li> --}}
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <div class="col-lg-7 single-right-left simpleCart_shelfItem">
                <h3 class="mb-3">{{ $product->name }}</h3>
                <p class="mb-3">
                    <span class="item_price"><span>&#2547</span> {{ $product->selling_price }}</span>
                    <del class="mx-2 font-weight-light"><span>&#2547</span> {{ $product->regular_price }}</del>
                    <label>Free delivery</label>
                </p>

                <div class="product-single-w3l">
                    <p class="my-3">
                        {!! $product->long_description !!}
                        <label>48 hours</label> of delivery</p>

                    <p class="my-sm-4 my-3">
                        <i class="far fa-hand-point-right mr-2"></i>Net banking & Credit/ Debit/ ATM card
                    </p>
                </div>
                <div class="occasion-cart">
                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                        <form action="{{ route('add-to-cart', ['id' => $product]) }}" method="post">
                            @csrf
                            <div class="col-lg-12 col-md-6">
                                <div class="form-group quantity">
                                    <label for="color">Quantity</label>
                                    <input type="number" name="qty" class="form-control" value="1" min="1"/>

                                </div>
                            </div>
                            <fieldset>
                                <input type="submit" name="submit" value="Add to cart" class="btn btn-style" />
                            </fieldset>
                        </form>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>

@endsection
