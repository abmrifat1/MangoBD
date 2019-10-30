@extends('front.master')
@section('title')Shop Page::MangoBD
{{ Session::put('page', 'shop') }}
@endsection
@section('css')

@endsection
@section('main-content')
@include('front.includes.banner');

<!-- page -->
<div class="services-breadcrumb">
    <div class="agile_inner_breadcrumb">
        <div class="container">
            <ul class="w3_short">
                <li>
                    <a href="{{ url('/') }}">Home</a>
                    <i>|</i>
                </li>
                <li>Search Result Page</li>
            </ul>
        </div>
    </div>
</div>
<!-- //page -->

    <!-- top Products -->
    <div class="ads-grid">
        <div class="container">
            <!-- tittle heading -->
            <h3 class="tittle-w3l">Mango : {{ $searchName }}
                <span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
            </h3>
            <!-- //tittle heading -->
            <!-- product left -->
            <div class="side-bar col-md-3">

                <div class="search-hotel">
                    <h3 class="agileits-sear-head">Search Here..</h3>
                    <form action="{{ url('/search-mango') }}" method="get">
                        <input value="{{ request()->input('query') }}" type="search" placeholder="Mango or Seller name..." name="search" required="">
                        <button style="height: 40px;" type="submit" class="btn btn-default" aria-label="Left Align">
                            <span class="fa fa-search" aria-hidden="true"> </span>
                        </button>
                    </form>
                </div>


                <!-- price range -->
                <form action="{{ url('/filter-products') }}" method="post">
                {{ csrf_field()  }}
                {{--<!-- price range -->
                    <div class="range">
                        <h3 class="agileits-sear-head">Price range</h3>
                        <ul class="dropdown-menu6">
                            <li>
                                <div id="slider-range"></div>
                                <input type="text" name="priceRange" id="amount" style="border: 0; color: #ffffff; font-weight: normal;" />
                            </li>
                        </ul>
                    </div>
                    <!-- //price range -->--}}
                    <!-- food preference -->
                    <div class="left-side">
                        <h3 class="agileits-sear-head">Mango | Type</h3>
                        <ul>
                            <li>
                                <input type="checkbox" name="mangoType" value="raw" class="checked">
                                <span class="span">Raw Mango</span>
                            </li>
                            <li>
                                <input type="checkbox" name="mangoType" value="ripe" class="checked">
                                <span class="span">Ripe Mango</span>
                            </li>
                        </ul>
                    </div>
                    <!-- //food preference -->
                    <!-- discounts -->
                    <div class="left-side">
                        <h3 class="agileits-sear-head">Discount</h3>
                        {{--<ul>
                            @foreach($productsDiscounts as $productsDiscount)
                                <li>
                                    <input type="checkbox" name="productDiscount" class="checked discountId" value="{{ $productsDiscount->discount }}">
                                    <span class="span">{{ $productsDiscount->discount }}% Discount</span>
                                </li>
                            @endforeach
                        </ul>--}}
                        <ul>
                            <li>
                                <input name="productDiscount" type="checkbox" class="checked" value="1">
                                <span class="span">1% or More</span>
                            </li>
                            <li>
                                <input name="productDiscount" type="checkbox" class="checked" value="5">
                                <span class="span">5% or More</span>
                            </li>
                            <li>
                                <input name="productDiscount" type="checkbox" class="checked" value="10">
                                <span class="span">10% or More</span>
                            </li>
                            <li>
                                <input name="productDiscount" type="checkbox" class="checked" value="15">
                                <span class="span">15% or More</span>
                            </li>
                            <li>
                                <input name="productDiscount" type="checkbox" class="checked" value="20">
                                <span class="span">20% or More</span>
                            </li>
                            <li>
                                <input name="productDiscount" type="checkbox" class="checked" value="25">
                                <span class="span">25% or More</span>
                            </li>
                            <li>
                                <input name="productDiscount" type="checkbox" class="checked" value="30">
                                <span class="span">30% or More</span>
                            </li>
                        </ul>
                        <button type="submit" class="btn btn-success">Filter Now</button>
                    </div>
                </form>
                <!-- //discounts -->
                <!-- //discounts -->
              {{--  <!-- reviews -->
                <div class="customer-rev left-side">
                    <h3 class="agileits-sear-head">Customer Review</h3>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <span>5.0</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <span>4.0</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <span>3.5</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <span>3.0</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <span>2.5</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- //reviews -->
                <!-- cuisine -->
                <div class="left-side">
                    <h3 class="agileits-sear-head">Cuisine</h3>
                    <ul>
                        <li>
                            <input type="checkbox" class="checked">
                            <span class="span">South American</span>
                        </li>
                    </ul>
                </div>
                <!-- //cuisine -->--}}
               {{-- <!-- deals -->
                <div class="deal-leftmk left-side">
                    <h3 class="agileits-sear-head">Special Deals</h3>
                    <div class="special-sec1">
                        <div class="col-xs-4 img-deals">
                            <img src="images/sd1.jpg" alt="">
                        </div>
                        <div class="col-xs-8 img-deal1">
                            <h3>Fajli</h3>
                            <a href="">$18.00</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="special-sec1">
                        <div class="col-xs-4 img-deals">
                            <img src="images/sd2.jpg" alt="">
                        </div>
                        <div class="col-xs-8 img-deal1">
                            <h3>Asina</h3>
                            <a href="">$9.00</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="special-sec1">
                        <div class="col-xs-4 img-deals">
                            <img src="images/sd3.jpg" alt="">
                        </div>
                        <div class="col-xs-8 img-deal1">
                            <h3>Langra</h3>
                            <a href="">$15.00</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="special-sec1">
                        <div class="col-xs-4 img-deals">
                            <img src="images/sd4.jpg" alt="">
                        </div>
                        <div class="col-xs-8 img-deal1">
                            <h3>Himsagor</h3>
                            <a href="">$525.00</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="special-sec1">
                        <div class="col-xs-4 img-deals">
                            <img src="images/sd5.jpg" alt="">
                        </div>
                        <div class="col-xs-8 img-deal1">
                            <h3>Amropali</h3>
                            <a href="">$149.00</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <!-- //deals -->--}}
            </div>
            <!-- //product left -->
            <!-- product right -->
            <div class="agileinfo-ads-display col-md-9">
                <div class="wrapper">
                    <!-- first section (nuts) -->
                    <div class="product-sec1">
                        <h3 class="heading-tittle">Mango</h3>
                        @if($products == '')
                            <h1>No Products Founds</h1>
                        @endif
                        @foreach($products as $product)
                            <div class="col-md-4 product-men">
                                <div class="men-pro-item simpleCart_shelfItem">
                                    <div class="men-thumb-item">
                                        <img src="{{ $product->picture_1 }}" alt="" style="height: 118px; width: 150px;">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="{{ url('/products/'.$product->unique_id) }}" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        <a href="{{ url('/seller-info/'.$product->user_id) }}"><span class="product-new-top">Seller Info</span></a>
                                    </div>
                                    <div class="item-info-product ">
                                        <h4 style="margin-bottom: 5px;">
                                            <a href="{{ url('/products/'.$product->unique_id) }}">{{$product->name}}, {{ $product->quantity }}kg</a>
                                        </h4>
                                        <h4>
                                            @if($product->discount < 1)
                                                <a href="{{ url('/products/'.$product->unique_id) }}" style="font-size: 14px; background-color: #ffffff; color: white; padding: 0 2px; border-radius: 2px;"></a>
                                            @else
                                                <a href="{{ url('/products/'.$product->unique_id) }}" style="font-size: 14px; background-color: #b2a50b; color: white; padding: 0 2px; border-radius: 2px;">{{$product->discount}}% Discount</a>
                                            @endif
                                        </h4>
                                        <div class="info-product-price">
                                            <span class="item_price">{{ $product->sellPrice }}tk Per Kg</span>
                                            <del>{{ $product->regPrice }}tk</del>
                                        </div>

                                        <div>
                                            <form action="{{ url('/add-to-cart') }}" method="post">
                                                {{ csrf_field() }}
                                                <div class="form-group">
                                                    <input type="hidden" name="qty" value="1" min="1">
                                                    <input type="hidden" name="id" value="{{ $product->id }}">
                                                </div>
                                                <div>
                                                    <input type="submit" name="btn" value="Add To Cart" class="my-cart-btn item_add button">
                                                </div>
                                            </form>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        @endforeach()

                        <div class="clearfix"></div>
                    </div>
                    <!-- //first section (nuts) -->
                    <!-- second section (nuts special) -->
                    <!--<div class="product-sec1 product-sec2">
                            <div class="col-xs-7 effect-bg">
                                <h3 class="">Pure Energy</h3>
                                <h6>Enjoy our all healthy Fruits</h6>
                                <p>Get Extra 10% Off</p>
                            </div>
                            <h3 class="w3l-nut-middle">Mango</h3>
                            <div class="col-xs-1 effect-bg">

                            </div>
                            <div class="col-xs-4 bg-right-nut">
                                <img src="images/mangolitchi.jpg" alt="">
                            </div>
                            <div class="clearfix"></div>
                        </div>-->
                    <!-- //second section (nuts special) -->
                <!-- third section (oils)
					<div class="product-sec1">
						<h3 class="heading-tittle">Mango</h3>


                        @foreach($products as $product)
                    <div class="col-md-4 product-men">
                        <div class="men-pro-item simpleCart_shelfItem">
                            <div class="men-thumb-item">
                                <img src="{{ $product->picture_1 }}" alt="" style="height: 150px; width: 150px;">
                                        <div class="men-cart-pro">
                                            <div class="inner-men-cart-pro">
                                                <a href="{{ url('/products/'.$product->unique_id) }}" class="link-product-add-cart">Quick View</a>
                                            </div>
                                        </div>
                                        <span class="product-new-top">Fresh</span>
                                    </div>
                                    <div class="item-info-product ">
                                        <h4>
                                            <a href="{{ url('/products/'.$product->unique_id) }}">{{$product->name}}, {{ $product->quantity }}kg</a>
                                        </h4>
                                        <div class="info-product-price">
                                            <span class="item_price">{{ $product->sellPrice }}tk</span>
                                            <del>{{ $product->regPrice }}tk</del>
                                        </div>

                                        <div>
                                            <form action="{{ url('/add-to-cart') }}" method="post">
                                                {{ csrf_field() }}
                            <div class="form-group">
                                <input type="hidden" name="qty" value="1" min="1">
                                <input type="hidden" name="id" value="{{ $product->id }}">
                                                </div>
                                                <div>
                                                    <input type="submit" name="btn" value="Add To Cart" class="my-cart-btn item_add button">
                                                </div>
                                            </form>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        @endforeach()

                        <div class="clearfix"></div>
                    </div>
                    third section (oils) -->

                </div>
            </div>
            <!-- //product right -->
        </div>
    </div>
    <!-- //top products -->
    <!-- special offers -->
    <div class="featured-section" id="projects">
        <div class="container">
            <!-- tittle heading -->
            <h3 class="tittle-w3l">Most Selling Products
                <span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
            </h3>
            <!-- //tittle heading -->
            <div class="content-bottom-in">
                <ul id="flexiselDemo1">
                    @foreach($productsMostSells as $productsMostSell)
                        <div class="col-md-3 product-men" >
                            <div class="men-pro-item simpleCart_shelfItem" style="height: 350px; width: 250px;">
                                <div class="men-thumb-item">
                                    <img src="{{ $productsMostSell->picture_1 }}" alt="" style="height: 150px; width: 200px;">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="{{ url('/products/'.$productsMostSell->unique_id) }}" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                    <a href="{{ url('/seller-info/'.$product->user_id) }}"><span class="product-new-top">Seller Info</span></a>
                                </div>
                                <div class="item-info-product ">
                                    <h4 style="margin-bottom: 5px;">
                                        <a href="{{ url('/products/'.$productsMostSell->unique_id) }}">{{$productsMostSell->name}}, {{ $productsMostSell->quantity }}kg</a>
                                    </h4>
                                    <h4>
                                        @if($productsMostSell->discount < 1)
                                            <a href="{{ url('/products/'.$productsMostSell->unique_id) }}" style="font-size: 14px; background-color: #ffffff; color: white; padding: 0 2px; border-radius: 2px;"></a>
                                        @else
                                            <a href="{{ url('/products/'.$productsMostSell->unique_id) }}" style="font-size: 14px; background-color: #b2a50b; color: white; padding: 0 2px; border-radius: 2px;">{{$productsMostSell->discount}}% Discount</a>
                                        @endif
                                    </h4>
                                    <div class="info-product-price">
                                        <span class="item_price">{{ $productsMostSell->sellPrice }}tk Per Kg</span>
                                        <del>{{ $productsMostSell->regPrice }}tk</del>
                                    </div>

                                    <div>
                                        <form action="{{ url('/add-to-cart') }}" method="post">
                                            {{ csrf_field() }}
                                            <div class="form-group">
                                                <input type="hidden" name="qty" value="1" min="1">
                                                <input type="hidden" name="id" value="{{ $productsMostSell->id }}">
                                            </div>
                                            <div>
                                                <input type="submit" name="btn" value="Add To Cart" class="my-cart-btn item_add button">
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach()
                </ul>
            </div>
        </div>
    </div>
    <!-- //special offers -->
@endsection


@section('script')

@endsection
