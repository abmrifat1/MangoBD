@extends('front.master')
@section('title')Home page::MangoBD
@endsection
@section('css')
    <link href="{{ asset('front/css/style2.css') }}" rel="stylesheet" type="text/css" media="all" />
@endsection

@section('main-content')
    <!-- banner -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1" class=""></li>
            <li data-target="#myCarousel" data-slide-to="2" class=""></li>
            <li data-target="#myCarousel" data-slide-to="3" class=""></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <div class="container">
                    <div class="carousel-caption">
                        <h3>Big
                            <span>Save</span>
                        </h3>
                        <p>Get flat
                            <span>10%</span> Cashback</p>
                        <a class="button2" href="shop1.blade.php">Shop Now </a>
                    </div>
                </div>
            </div>
            <div class="item item2">
                <div class="container">
                    <div class="carousel-caption">
                        <h3>Healthy
                            <span>Saving</span>
                        </h3>
                        <p>Get Upto
                            <span>30%</span> Off</p>
                        <a class="button2" href="shop1.blade.php">Shop Now </a>
                    </div>
                </div>
            </div>
            <div class="item item3">
                <div class="container">
                    <div class="carousel-caption">
                        <h3>Big
                            <span>Deal</span>
                        </h3>
                        <p>Get Best Offer Upto
                            <span>20%</span>
                        </p>
                        <a class="button2" href="shop1.blade.php">Shop Now </a>
                    </div>
                </div>
            </div>
            <div class="item item4">
                <div class="container">
                    <div class="carousel-caption">
                        <h3>Today
                            <span>Discount</span>
                        </h3>
                        <p>Get Now
                            <span>40%</span> Discount</p>
                        <a class="button2" href="shop1.blade.php">Shop Now </a>
                    </div>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- //banner -->

    <!-- banner -->
    <div class="banner_bottom_agile_info">
        <div class="container">
            <div class="banner_bottom_agile_info_inner_w3ls">
                <div class="col-md-6 wthree_banner_bottom_grid_three_left1 grid">
                    <figure class="effect-roxy">
                        <img src="{{asset('front/images/bottom1.jpg')}}" alt=" " class="img-responsive" />
                        <figcaption>
                            <h3><span>F</span>all Ahead</h3>
                            <p>New Arrivals</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-md-6 wthree_banner_bottom_grid_three_left1 grid">
                    <figure class="effect-roxy">
                        <img src="{{asset('front/images/bottom2.jpg')}}" alt=" " class="img-responsive" />
                        <figcaption>
                            <h3><span>F</span>all Ahead</h3>
                            <p>New Arrivals</p>
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
                <div class="col-md-4 w3l_schedule_bottom_right_grid1">
                    <i class="fa fa-user-o" aria-hidden="true"></i>
                    <h4>Customers</h4>
                    <h5 class="counter">653</h5>
                </div>
                <div class="col-md-4 w3l_schedule_bottom_right_grid1">
                    <i class="fa fa-calendar-o" aria-hidden="true"></i>
                    <h4>Events</h4>
                    <h5 class="counter">823</h5>
                </div>
                <div class="col-md-4 w3l_schedule_bottom_right_grid1">
                    <i class="fa fa-shield" aria-hidden="true"></i>
                    <h4>Awards</h4>
                    <h5 class="counter">45</h5>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
    <!-- //schedule-bottom -->
    <!-- banner-bootom-w3-agileits -->
    <div class="banner-bootom-w3-agileits">
        <div class="container">
            <h3 class="wthree_text_info">What's <span>Trending</span></h3>

            <div class="col-md-5 bb-grids bb-left-agileits-w3layouts">
                <a href="womens.html">
                    <div class="bb-left-agileits-w3layouts-inner grid">
                        <figure class="effect-roxy">
                            <img src="{{asset('front/images/bb1.jpg')}}" alt=" " class="img-responsive" />
                            <figcaption>
                                <h3><span>S</span>ale </h3>
                                <p>Upto 55%</p>
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
                                <h3><span>S</span>ale </h3>
                                <p>Upto 55%</p>
                            </figcaption>
                        </figure>
                    </div>
                </a>
                <a href="mens.html">
                    <div class="bb-middle-agileits-w3layouts forth grid">
                        <figure class="effect-roxy">
                            <img src="{{asset('front/images/bottom4.jpg')}}" alt=" " class="img-responsive">
                            <figcaption>
                                <h3><span>S</span>ale </h3>
                                <p>Upto 65%</p>
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
            <a href="womens.html"><img src="{{asset('front/images/bot_1.jpg')}}" alt=" "><h4>Flat <span>50%</span> offer</h4></a>

        </div>
        <div class="col-md-6 multi-gd-img multi-gd-text ">
            <a href="womens.html"><img src="{{asset('front/images/bot_2.jpg')}}" alt=" "><h4>Flat <span>50%</span> offer</h4></a>
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
                            <img src="{{ $product->picture_1 }}" alt="">
                            <div class="men-cart-pro">
                                <div class="inner-men-cart-pro">
                                    <a href="{{ url('/products/'.$product->unique_id) }}" class="link-product-add-cart">Quick View</a>
                                </div>
                            </div>
                            <span class="product-new-top">Fresh</span>
                        </div>
                        <div class="item-info-product ">
                            <h4>
                                <a href="single.php">{{$product->name}}, {{ $product->quantity }}kg</a>
                            </h4>
                            <div class="info-product-price">
                                <span class="item_price">{{ $product->sellPrice }}tk</span>
                                <del>{{ $product->regPrice }}tk</del>
                            </div>
                            <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                <form action="{{ url('/checkout') }}" method="post">
                                    <fieldset>
                                        <input type="hidden" name="cmd" value="_cart" />
                                        <input type="hidden" name="add" value="1" />
                                        <input type="hidden" name="business" value=" " />
                                        <input type="hidden" name="item_name" value="Almonds, 100g" />
                                        <input type="hidden" name="amount" value="149.00" />
                                        <input type="hidden" name="discount_amount" value="1.00" />
                                        <input type="hidden" name="currency_code" value="USD" />
                                        <input type="hidden" name="return" value=" " />
                                        <input type="hidden" name="cancel_return" value=" " />
                                        <input type="submit" name="submit" value="Add to cart" class="button" />
                                    </fieldset>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                @endforeach


                <div class="clearfix"></div>
            </div>
            <!--//tab_one-->

            <!--/tab_two-->
            <h3 class="wthree_text_info1">Our Top Views<span>Products</span></h3>
            <div class="tab2">


                <div class="col-md-3 product-men">
                    <div class="men-pro-item simpleCart_shelfItem">
                        <div class="men-thumb-item">
                            <img src="{{ asset('front/images/m1.jpg') }}" alt="">
                            <div class="men-cart-pro">
                                <div class="inner-men-cart-pro">
                                    <a href="{{ url('/product/'.$product->unique_id) }}" class="link-product-add-cart">Quick View</a>
                                </div>
                            </div>
                            <span class="product-new-top">Fresh</span>
                        </div>
                        <div class="item-info-product ">
                            <h4>
                                <a href="single.php">Fajli, 1kg</a>
                            </h4>
                            <div class="info-product-price">
                                <span class="item_price">$149.00</span>
                                <del>$280.00</del>
                            </div>
                            <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                <form action="{{ url('/checkout') }}" method="post">
                                    <fieldset>
                                        <input type="hidden" name="cmd" value="_cart" />
                                        <input type="hidden" name="add" value="1" />
                                        <input type="hidden" name="business" value=" " />
                                        <input type="hidden" name="item_name" value="Almonds, 100g" />
                                        <input type="hidden" name="amount" value="149.00" />
                                        <input type="hidden" name="discount_amount" value="1.00" />
                                        <input type="hidden" name="currency_code" value="USD" />
                                        <input type="hidden" name="return" value=" " />
                                        <input type="hidden" name="cancel_return" value=" " />
                                        <input type="submit" name="submit" value="Add to cart" class="button" />
                                    </fieldset>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>


                <div class="clearfix"></div>
            </div>
            <!--//tab_two-->

            <div class="clearfix"></div>
        </div>
    </div>
    </div>
    </div>
    </div>
    <!-- //new_arrivals -->

    <!-- /we-offer -->
    <div class="sale-w3ls">
        <div class="container">
            <h6>We Offer Flat <span>40%</span> Discount</h6>

            <a class="hvr-outline-out button2" href="single.html">Shop Now </a>
        </div>
    </div>
    <!-- //we-offer -->


    <!--/grids-->
@endsection
