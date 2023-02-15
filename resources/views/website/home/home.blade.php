@extends('website/master')

@section('title')
Home Page
@endsection

@section('body')
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <!-- Indicators-->
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item item1 active">
            <div class="banner-style d-flex align-items-center">
                <div class="container">
                    <div class="w3l-space-banner">
                        <div class="carousel-caption-banner" style="max-width:500px">
                            <p>Get flat
                                <span>10%</span> Cashback</p>
                            <h3 class="mt-2">Exciting Deals on Televisions</h3>
                            <a class="btn btn-style mt-4" href="product.html">Shop Now </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item item2">
            <div class="banner-style d-flex align-items-center">
                <div class="container">
                    <div class="w3l-space-banner">
                        <div class="carousel-caption-banner" style="max-width:500px">
                            <p>Top
                                <span>Brands</span> lowest <span>Prices</span></p>
                            <h3 class="mt-2">Wide Range of Mobile Phones!</h3>
                            <a class="btn btn-style mt-4" href="product.html">Shop Now </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item item3">
            <div class="banner-style d-flex align-items-center">
                <div class="container">
                    <div class="w3l-space-banner">
                        <div class="carousel-caption-banner" style="max-width:500px">
                            <p>Get up to
                                <span>25%</span> Off</p>
                            <h3 class="mt-2">Smart Watches New Collection!</h3>
                            <a class="btn btn-style mt-4" href="product.html">Shop Now </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item item4">
            <div class="banner-style d-flex align-items-center">
                <div class="container">
                    <div class="w3l-space-banner">
                        <div class="carousel-caption-banner" style="max-width:500px">
                            <p>Top
                                <span>Sale</span> Best <span>Deals</span></p>
                            <h3 class="mt-2">Fresh, Healthy Air Everywhere!</h3>
                            <a class="btn btn-style mt-4" href="product.html">Shop Now </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- //banner -->
<div style="margin: 8px auto; display: block; text-align:center;">

<!---728x90--->


</div>
<!-- top Products -->
<div class="ads-grid py-5">
    <div class="container py-md-5 py-4">
        <!-- tittle heading -->
        <h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
            <span class="font-weight-normal">Our</span> New Products</h3>
        <!-- //tittle heading -->
        <div class="row">
            <!-- product right -->
            <div class="col-lg-3 mt-lg-0 mt-4 p-lg-0 order-lg-first order-last">
                <div class="side-bar p-sm-4 p-3">
                    <!-- reviews -->
                    <div class="customer-rev left-side py-2">
                        <h3 class="agileits-sear-head mb-3">Customer Review</h3>
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span>5.0</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span>4.0</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half"></i>
                                    <span>3.5</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span>3.0</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half"></i>
                                    <span>2.5</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- //reviews -->
                    <!-- price -->
                    <div class="range py-2">
                        <h3 class="agileits-sear-head mb-3">Price</h3>
                        <div class="w3l-range">
                            <ul>
                                <li>
                                    <a href="#">Under $1,000</a>
                                </li>
                                <li class="my-1">
                                    <a href="#">$1,000 - $5,000</a>
                                </li>
                                <li>
                                    <a href="#">$5,000 - $10,000</a>
                                </li>
                                <li class="my-1">
                                    <a href="#">$10,000 - $20,000</a>
                                </li>
                                <li>
                                    <a href="#">$20,000 $30,000</a>
                                </li>
                                <li class="mt-1">
                                    <a href="#">Over $30,000</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- //price -->
                    <!-- discounts -->
                    <div class="left-side py-2">
                        <h3 class="agileits-sear-head mb-3">Discount</h3>
                        <ul>
                            <li>
                                <input type="checkbox" class="checked">
                                <span class="span">5% or More</span>
                            </li>
                            <li>
                                <input type="checkbox" class="checked">
                                <span class="span">10% or More</span>
                            </li>
                            <li>
                                <input type="checkbox" class="checked">
                                <span class="span">20% or More</span>
                            </li>
                            <li>
                                <input type="checkbox" class="checked">
                                <span class="span">30% or More</span>
                            </li>
                            <li>
                                <input type="checkbox" class="checked">
                                <span class="span">50% or More</span>
                            </li>
                            <li>
                                <input type="checkbox" class="checked">
                                <span class="span">60% or More</span>
                            </li>
                        </ul>
                    </div>
                    <!-- //discounts -->
                    <!-- electronics -->
                    <div class="left-side py-2">
                        <h3 class="agileits-sear-head mb-3">Electronics</h3>
                        <ul>
                            <li>
                                <input type="checkbox" class="checked">
                                <span class="span">Accessories</span>
                            </li>
                            <li>
                                <input type="checkbox" class="checked">
                                <span class="span">Cameras & Photography</span>
                            </li>
                            <li>
                                <input type="checkbox" class="checked">
                                <span class="span">Car & Vehicle Electronics</span>
                            </li>
                            <li>
                                <input type="checkbox" class="checked">
                                <span class="span">Computers & Accessories</span>
                            </li>
                            <li>
                                <input type="checkbox" class="checked">
                                <span class="span">GPS & Accessories</span>
                            </li>
                            <li>
                                <input type="checkbox" class="checked">
                                <span class="span">Headphones</span>
                            </li>
                            <li>
                                <input type="checkbox" class="checked">
                                <span class="span">Home Audio</span>
                            </li>
                            <li>
                                <input type="checkbox" class="checked">
                                <span class="span">Home Theater, TV & Video</span>
                            </li>
                            <li>
                                <input type="checkbox" class="checked">
                                <span class="span">Mobiles & Accessories</span>
                            </li>
                            <li>
                                <input type="checkbox" class="checked">
                                <span class="span">Portable Media Players</span>
                            </li>
                            <li>
                                <input type="checkbox" class="checked">
                                <span class="span">Tablets</span>
                            </li>
                            <li>
                                <input type="checkbox" class="checked">
                                <span class="span">Telephones & Accessories</span>
                            </li>
                            <li>
                                <input type="checkbox" class="checked">
                                <span class="span">Wearable Technology</span>
                            </li>
                        </ul>
                    </div>
                    <!-- //electronics -->
                    <!-- delivery -->
                    <div class="left-side py-2">
                        <h3 class="agileits-sear-head mb-3">Cash On Delivery</h3>
                        <ul>
                            <li>
                                <input type="checkbox" class="checked">
                                <span class="span">Eligible for Cash On Delivery</span>
                            </li>
                        </ul>
                    </div>
                    <!-- //delivery -->
                    <!-- arrivals -->
                    <div class="left-side py-2">
                        <h3 class="agileits-sear-head mb-3">New Arrivals</h3>
                        <ul>
                            <li>
                                <input type="checkbox" class="checked">
                                <span class="span">Last 30 days</span>
                            </li>
                            <li>
                                <input type="checkbox" class="checked">
                                <span class="span">Last 90 days</span>
                            </li>
                        </ul>
                    </div>
                    <!-- //arrivals -->
                    <!-- best seller -->
                    <div class="f-grid py-2">
                        <h3 class="agileits-sear-head mb-3">Best Seller</h3>
                        <div class="box-scroll">
                            <div class="scroll">
                                <div class="row">
                                    <div class="col-lg-3 col-sm-2 col-3 left-mar">
                                        <img src="{{ asset('/') }}website/assets/images/k1.png" alt="" class="img-fluid">
                                    </div>
                                    <div class="col-lg-9 col-sm-10 col-9 w3_mvd">
                                        <a href="#">Samsung Galaxy F62 (Laser Grey, 128 GB) (6 GB RAM)</a>
                                        <a href="#" class="price-mar mt-2">$12,990.00</a>
                                    </div>
                                </div>
                                <div class="row my-4">
                                    <div class="col-lg-3 col-sm-2 col-3 left-mar">
                                        <img src="{{ asset('/') }}website/assets/images/k2.png" alt="" class="img-fluid">
                                    </div>
                                    <div class="col-lg-9 col-sm-10 col-9 w3_mvd">
                                        <a href="#">Samsung 192 L Direct Cool Single Door 3 Star (2021)
                                            Refrigerator</a>
                                        <a href="#" class="price-mar mt-2">$12,499.00</a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-sm-2 col-3 left-mar">
                                        <img src="{{ asset('/') }}website/assets/images/k3.png" alt="" class="img-fluid">
                                    </div>
                                    <div class="col-lg-9 col-sm-10 col-9 w3_mvd">
                                        <a href="#">boAt Rockerz 450 Bluetooth Headset (Luscious Black, On the
                                            Ear)</a>
                                        <a href="#" class="price-mar mt-2">$1,199.00 </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- //best seller -->
                </div>
                <!-- //product right -->
            </div>
            <!-- product left -->
            <div class="agileinfo-ads-display col-lg-9 order-lg-last order-first">
                <div class="wrapper">
                    <!-- first section -->
                    <div class="product-sec1 px-lg-4">
                        <div class="row">
                            @foreach ( $products as $product)
                            <div class="col-md-4 product-men">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item text-center">
                                        <img src="{{ asset($product->image) }}" alt="" height="180" width="150" class="img-fluid">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="single.html" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-info-product text-center mt-2">
                                        <h4 class="pt-1">
                                            <a href="{{ route('product-detail',['id' => $product->id]) }}">{{ $product->name }}</a>
                                        </h4>
                                        <div class="info-product-price">
                                            <span class="item_price"><span>&#2547</span> {{ $product->selling_price }}</span>
                                            <del><span>&#2547</span> {{ $product->regular_price }}</del>
                                        </div>
                                        <div
                                            class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                            <form action="{{ route('add-to-cart', ['id' => $product]) }}" method="post">
                                                @csrf
                                                <fieldset>
                                                    <input type="hidden" value="1" name="qty" />
                                                    <input type="submit" name="submit" value="Add to cart"
                                                        class="btn btn-style btn-style-secondary mt-3" />
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach


                        </div>
                    </div>
                    <!-- //first section -->
                    <!-- second section -->
                    <div class="product-sec1 px-lg-4 mb-5">
                        <div class="row">

                        </div>
                    </div>
                    <!-- //second section -->
                    <!-- third section -->
                    <div class="px-lg-4 my-5">
                        <div class="product-sec1 product-sec2">
                            <div class="row p-5">
                                <h3 class="col-md-4 effect-bg">Exciting Deals</h3>
                                <p class="w3l-nut-middle">Up to 40% Off</p>
                                <div class="col-md-8 bg-right-nut">
                                    <img src="images/image1.png" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- //third section -->
                    <!-- fourth section -->
                    <div class="product-sec1 px-lg-4 mt-md-0 mt-5">
                        <div class="row">

                        </div>
                    </div>
                    <!-- //fourth section -->
                    <!-- 5th section -->
                    <div class="product-sec1 px-lg-4 mt-5">
                        <div class="row">

                        </div>
                    </div>
                    <!-- 5th section -->
                </div>
            </div>
            <!-- //product left -->
        </div>
    </div>
</div>
@endsection
