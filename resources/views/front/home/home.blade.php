@extends('front.master')
@section('title')Home page :: MangoBD
    {{ Session::put('page', 'home') }}
@endsection
@section('css')
    <link href="{{ asset('front/css/style2.css') }}" rel="stylesheet" type="text/css" media="all" />
@endsection

@section('main-content')
@include('front.includes.banner');

    <!-- banner -->
    <div class="banner_bottom_agile_info">
        <div class="container">
            <div class="banner_bottom_agile_info_inner_w3ls">
                <div class="col-md-6 wthree_banner_bottom_grid_three_left1 grid">
                    <figure class="effect-roxy">
                        <img src="{{asset('front/images/bottom1.jpg')}}" alt=" " class="img-responsive" />
                        <figcaption>
                           {{-- <h3><span></span>all Ahead</h3>
                            <p>New Arrivals</p>--}}
                        </figcaption>
                    </figure>
                </div>
                <div class="col-md-6 wthree_banner_bottom_grid_three_left1 grid">
                    <figure class="effect-roxy">
                        <img src="{{asset('front/images/bottom2.jpg')}}" alt=" " class="img-responsive" />
                        <figcaption>
                            {{--<h3><span>F</span>all Ahead</h3>
                            <p>New Arrivals</p>--}}
                        </figcaption>
                    </figure>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- //banner -->
    <!-- schedule-bottom -->
    <div class="schedule-bottom">
        <div class="col-md-6 agileinfo_schedule_bottom_left">
            <img src="{{asset('front/images/mid.jpg')}}" alt=" " class="img-responsive" />
        </div>
        <div class="col-md-6 agileits_schedule_bottom_right">
            <div class="w3ls_schedule_bottom_right_grid">
                <h3>Save up to <span>50%</span> in this week</h3>
                <p>Suspendisse varius turpis efficitur erat laoreet dapibus.
                    Mauris sollicitudin scelerisque commodo.Nunc dapibus mauris sed metus finibus posuere.</p>
                <div class="col-md-12 w3l_schedule_bottom_right_grid1">
                    <i class="fa fa-user-o" aria-hidden="true"></i>
                    <h4>Customers</h4>
                    <h5 class="counter">653</h5>
                </div>
                {{--<div class="col-md-4 w3l_schedule_bottom_right_grid1">
                    <i class="fa fa-calendar-o" aria-hidden="true"></i>
                    <h4>Events</h4>
                    <h5 class="counter">823</h5>
                </div>
                <div class="col-md-4 w3l_schedule_bottom_right_grid1">
                    <i class="fa fa-shield" aria-hidden="true"></i>
                    <h4>Awards</h4>
                    <h5 class="counter">45</h5>
                </div>--}}
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
    <!-- //schedule-bottom -->
    <!-- banner-bootom-w3-agileits -->
    <div class="banner-bootom-w3-agileits">
        <div class="container">
            <h3 class="wthree_text_info">Pure <span>Mango</span></h3>

            <div class="col-md-5 bb-grids bb-left-agileits-w3layouts">
                <a href="womens.html">
                    <div class="bb-left-agileits-w3layouts-inner grid">
                        <figure class="effect-roxy">
                            <img src="{{asset('front/images/bb1.jpg')}}" alt=" " class="img-responsive" />
                            <figcaption>
                                {{--<h3><span>S</span>ale </h3>
                                <p>Upto 55%</p>--}}
                            </figcaption>
                        </figure>
                    </div>
                </a>
            </div>
            <div class="col-md-7 bb-grids bb-middle-agileits-w3layouts">
                <a href="mens.html">
                    <div class="bb-middle-agileits-w3layouts grid">
                        <figure class="effect-roxy">
                            <img src="{{asset('front/images/bottom3.jpg')}}" alt=" " class="img-responsive" />
                            <figcaption>
                                {{--<h3><span>S</span>ale </h3>
                                <p>Upto 55%</p>--}}
                            </figcaption>
                        </figure>
                    </div>
                </a>
                <a href="mens.html">
                    <div class="bb-middle-agileits-w3layouts forth grid">
                        <figure class="effect-roxy">
                            <img src="{{asset('front/images/bottom4.jpg')}}" alt=" " class="img-responsive">
                            <figcaption>
                                {{--<h3><span>S</span>ale </h3>
                                <p>Upto 65%</p>--}}
                            </figcaption>
                        </figure>
                    </div>
                </a>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!--/grids-->
    <div class="agile_last_double_sectionw3ls">
        <div class="col-md-6 multi-gd-img multi-gd-text ">
            <a href="{{ url('/shop') }}"><img src="{{asset('front/images/bot_1.jpg')}}" alt=" "><{{--h4>We Give You <span>50%</span> offer</h4>--}}</a>

        </div>
        <div class="col-md-6 multi-gd-img multi-gd-text ">
            <a href="{{ url('/shop') }}"><img src="{{asset('front/images/bot_2.jpg')}}" alt=" "><h4>We Give You <span>50%</span> offer</h4></a>
        </div>
        <div class="clearfix"></div>
    </div>
    <!--/grids-->

    <!-- /new_arrivals -->
    <div class="new_arrivals_agile_w3ls_info">
        <div class="container">
            <h3 class="wthree_text_info">New <span>Arrivals</span></h3>

            <!--/tab_one-->
            <div class="tab1">
            @foreach($products as $product)
                <div class="col-md-3 product-men">
                    <div class="men-pro-item simpleCart_shelfItem">
                        <div class="men-thumb-item">
                            <img src="{{ $product->picture_1 }}" alt="" style="height: 200px;">
                            <div class="men-cart-pro">
                                <div class="inner-men-cart-pro">
                                    <a href="{{ url('/products/'.$product->unique_id) }}" class="link-product-add-cart">Quick View</a>
                                </div>
                            </div>
                            <span class="product-new-top">Fresh</span>
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
                @endforeach


                <div class="clearfix"></div>
            </div>
            <!--//tab_one-->
        </div>
    </div>
    <!-- //new_arrivals -->


<!-- /new_arrivals -->
<div class="new_arrivals_agile_w3ls_info" style="padding:0 0 4cm 0;">
    <div class="container">
        <h3 class="wthree_text_info">Our Top Views <span>Products</span></h3>

        <!--/tab_Two-->
        <div class="tab2">
            @foreach($mostViewProducts as $mvProducts)
                <div class="col-md-3 product-men">
                    <div class="men-pro-item simpleCart_shelfItem">
                        <div class="men-thumb-item">
                            <img src="{{ $mvProducts->picture_1 }}" alt="" style="height: 200px;">
                            <div class="men-cart-pro">
                                <div class="inner-men-cart-pro">
                                    <a href="{{ url('/products/'.$mvProducts->unique_id) }}" class="link-product-add-cart">Quick View</a>
                                </div>
                            </div>
                            <span class="product-new-top">Fresh</span>
                        </div>
                        <div class="item-info-product ">
                            <h4 style="margin-bottom: 5px;">
                                <a href="{{ url('/products/'.$mvProducts->unique_id) }}">{{$mvProducts->name}}, {{ $mvProducts->quantity }}kg</a>
                            </h4>
                            <h4>
                                @if($mvProducts->discount < 1)
                                    <a href="{{ url('/products/'.$mvProducts->unique_id) }}" style="font-size: 14px; background-color: #ffffff; color: white; padding: 0 2px; border-radius: 2px;"></a>
                                @else
                                    <a href="{{ url('/products/'.$mvProducts->unique_id) }}" style="font-size: 14px; background-color: #b2a50b; color: white; padding: 0 2px; border-radius: 2px;">{{$mvProducts->discount}}% Discount</a>
                                @endif
                            </h4>
                            <div class="info-product-price">
                                <span class="item_price">{{ $mvProducts->sellPrice }}tk Per Kg</span>
                                <del>{{ $mvProducts->regPrice }}tk</del>
                            </div>

                            <div>
                                <form action="{{ url('/add-to-cart') }}" method="post">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <input type="hidden" name="qty" value="1" min="1">
                                        <input type="hidden" name="id" value="{{ $mvProducts->id }}">
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
        <!--//tab_one-->
    </div>
</div>
<!-- //new_arrivals -->

    <!-- /we-offer -->
    <div class="sale-w3ls">
        <div class="container">
            <h6>We Ensure  {{--<span>100%</span>--}} Pure Mango</h6>

            <a class="hvr-outline-out button2" href="{{ url('/shop') }}">Shop Now </a>
        </div>
    </div>
    <!-- //we-offer -->


    <!--/grids-->
@endsection
