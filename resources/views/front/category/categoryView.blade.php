@extends('front.master')
@section('title')Category Product View Page::MangoBD
    {{ Session::put('page', 'categoryDetail') }}
@endsection
@section('css')

@endsection
@section('main-content')
    <div class="page-head_agile_info_w3l">

    </div>
    <!-- //banner-2 -->
    <!-- page -->
    <div class="services-breadcrumb">
        <div class="agile_inner_breadcrumb">
            <div class="container">
                <ul class="w3_short">
                    <li>
                        <a href="{{ url('/') }}">Home</a>
                        <i>|</i>
                    </li>
                    <li>Category Product</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- //page -->

    <!-- top Products -->
    <div class="ads-grid">
        <div class="container">
            <!-- tittle heading -->
            <h3 class="tittle-w3l">{{ \App\Category::where('unique_id', $unique_id)->first()->name }}
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
                {{--<!-- price range -->
                <div class="range">
                    <h3 class="agileits-sear-head">Price range</h3>
                    <ul class="dropdown-menu6">
                        <li>

                            <div id="slider-range"></div>
                            <input type="text" id="amount" style="border: 0; color: #ffffff; font-weight: normal;" />
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
                {{--<!-- reviews -->
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
                    </ul>
                </div>
                <!-- //reviews -->--}}
               {{-- <!-- cuisine -->
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

            </div>
            <!-- //product left -->
            <!-- product right -->
            <div class="agileinfo-ads-display col-md-9">
                <div class="wrapper">

                    <!-- first section (nuts) -->
                    <div class="product-sec1">

                        @foreach($products as $product)
                        <div class="col-md-4 product-men">
                            <div class="men-pro-item simpleCart_shelfItem">
                                <div class="men-thumb-item">
                                    <img src="/{{ $product->picture_1 }}" alt="" style="height: 118px; width: 150px;">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="{{ url('/products/'.$product->unique_id) }}" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                    <a href="{{ url('/seller-info/'.$product->user_id) }}"><span class="product-new-top">Seller Info</span></a>
                                </div>
                                <div class="item-info-product ">
                                    <h4 style="margin-bottom: 5px;">
                                        <a href="{{ url('/products/'.$product->unique_id) }}">{{$product->name}}, {{ $product->quantity }} kg</a>
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

                                    <div style="margin-bottom: 20px;">
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
                            <div style="float: left; margin-left: 50px;">
                                {{ $products->links() }}
                            </div>

                        <div class="clearfix"></div>
                    </div>
                    <!-- //first section (nuts) -->

                </div>
            </div>
            <!-- //product right -->
        </div>
    </div>
    <!-- //top products -->

@endsection


@section('script')

@endsection
