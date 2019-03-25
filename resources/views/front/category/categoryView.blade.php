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
            <h3 class="tittle-w3l">Our Top Products
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
                    <form action="#" method="post">
                        <input type="search" placeholder="Mango or Seller name..." name="search" required="">
                        <input type="submit" value=" ">
                    </form>
                </div>
                <!-- price range -->
                <div class="range">
                    <h3 class="agileits-sear-head">Price range</h3>
                    <ul class="dropdown-menu6">
                        <li>

                            <div id="slider-range"></div>
                            <input type="text" id="amount" style="border: 0; color: #ffffff; font-weight: normal;" />
                        </li>
                    </ul>
                </div>
                <!-- //price range -->
                <!-- food preference -->
                <div class="left-side">
                    <h3 class="agileits-sear-head">Raw | Ripe</h3>
                    <ul>
                        <li>
                            <input type="checkbox" class="checked">
                            <span class="span">Raw Mango</span>
                        </li>
                        <li>
                            <input type="checkbox" class="checked">
                            <span class="span">Ripe Mango</span>
                        </li>
                    </ul>
                </div>
                <!-- //food preference -->
                <!-- discounts -->
                <div class="left-side">
                    <h3 class="agileits-sear-head">Discount</h3>
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
                <!-- reviews -->
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
                <!-- //cuisine -->
                <!-- deals -->
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
                <!-- //deals -->
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
                                    <img src="/{{ $product->picture_1 }}" alt="" style="height: 200px; width: 200px;">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="{{ url('/products/'.$product->unique_id) }}" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                    <span class="product-new-top">Fresh</span>
                                </div>
                                <div class="item-info-product ">
                                    <h4>
                                        <a href="{{ url('/products/'.$product->unique_id) }}">{{$product->name}}, {{ $product->quantity }} kg</a>
                                    </h4>
                                    <div class="info-product-price">
                                        <span class="item_price">{{ $product->sellPrice }}Tk</span>
                                        <del>{{ $product->regPrice }}Tk</del>
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
            <h3 class="tittle-w3l">Special Offers
                <span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
            </h3>
            <!-- //tittle heading -->
            <div class="content-bottom-in">
                <ul id="flexiselDemo1">
                    <li>
                        <div class="w3l-specilamk">
                            <div class="speioffer-agile">
                                <a href="single.php">
                                    <img src="{{ asset('front/images/m1.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="product-name-w3l">
                                <h4>
                                    <a href="single.php">Fajli, 5g</a>
                                </h4>
                                <div class="w3l-pricehkj">
                                    <h6>$220.00</h6>
                                    <p>Save $40.00</p>
                                </div>
                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                    <form action="#" method="post">
                                        <fieldset>
                                            <input type="hidden" name="cmd" value="_cart" />
                                            <input type="hidden" name="add" value="1" />
                                            <input type="hidden" name="business" value=" " />
                                            <input type="hidden" name="item_name" value="Aashirvaad, 5g" />
                                            <input type="hidden" name="amount" value="220.00" />
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
                    </li>
                    <li>
                        <div class="w3l-specilamk">
                            <div class="speioffer-agile">
                                <a href="single.php">
                                    <img src="{{ asset('front/images/m1.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="product-name-w3l">
                                <h4>
                                    <a href="single.php">Asina, 5kg</a>
                                </h4>
                                <div class="w3l-pricehkj">
                                    <h6>$99.00</h6>
                                    <p>Save $20.00</p>
                                </div>
                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                    <form action="#" method="post">
                                        <fieldset>
                                            <input type="hidden" name="cmd" value="_cart" />
                                            <input type="hidden" name="add" value="1" />
                                            <input type="hidden" name="business" value=" " />
                                            <input type="hidden" name="item_name" value="Kissan Tomato Ketchup, 950g" />
                                            <input type="hidden" name="amount" value="99.00" />
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
                    </li>
                    <li>
                        <div class="w3l-specilamk">
                            <div class="speioffer-agile">
                                <a href="single.php">
                                    <img src="{{ asset('front/images/m1.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="product-name-w3l">
                                <h4>
                                    <a href="single.php">Langra, 1g</a>
                                </h4>
                                <div class="w3l-pricehkj">
                                    <h6>$69.00</h6>
                                    <p>Save $20.00</p>
                                </div>
                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                    <form action="#" method="post">
                                        <fieldset>
                                            <input type="hidden" name="cmd" value="_cart" />
                                            <input type="hidden" name="add" value="1" />
                                            <input type="hidden" name="business" value=" " />
                                            <input type="hidden" name="item_name" value="Madhur Pure Sugar, 1g" />
                                            <input type="hidden" name="amount" value="69.00" />
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
                    </li>
                    <li>
                        <div class="w3l-specilamk">
                            <div class="speioffer-agile">
                                <a href="single2.php">
                                    <img src="{{ asset('front/images/m1.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="product-name-w3l">
                                <h4>
                                    <a href="single2.php">Himsagor, 5kg</a>
                                </h4>
                                <div class="w3l-pricehkj">
                                    <h6>$187.00</h6>
                                    <p>Save $30.00</p>
                                </div>
                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                    <form action="#" method="post">
                                        <fieldset>
                                            <input type="hidden" name="cmd" value="_cart" />
                                            <input type="hidden" name="add" value="1" />
                                            <input type="hidden" name="business" value=" " />
                                            <input type="hidden" name="item_name" value="Surf Excel Liquid, 1.02L" />
                                            <input type="hidden" name="amount" value="187.00" />
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
                    </li>
                    <li>
                        <div class="w3l-specilamk">
                            <div class="speioffer-agile">
                                <a href="single.php">
                                    <img src="{{ asset('front/images/m1.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="product-name-w3l">
                                <h4>
                                    <a href="single.php">Amropali, 5kg</a>
                                </h4>
                                <div class="w3l-pricehkj">
                                    <h6>$160.00</h6>
                                    <p>Save $60.00</p>
                                </div>
                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                    <form action="#" method="post">
                                        <fieldset>
                                            <input type="hidden" name="cmd" value="_cart" />
                                            <input type="hidden" name="add" value="1" />
                                            <input type="hidden" name="business" value=" " />
                                            <input type="hidden" name="item_name" value="Cadbury Choclairs, 655.5g" />
                                            <input type="hidden" name="amount" value="160.00" />
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
                    </li>
                    <li>
                        <div class="w3l-specilamk">
                            <div class="speioffer-agile">
                                <a href="single2.php">
                                    <img src="{{ asset('front/images/m1.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="product-name-w3l">
                                <h4>
                                    <a href="single2.php">Rupali, 5kg</a>
                                </h4>
                                <div class="w3l-pricehkj">
                                    <h6>$121.60</h6>
                                    <p>Save $30.00</p>
                                </div>
                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                    <form action="#" method="post">
                                        <fieldset>
                                            <input type="hidden" name="cmd" value="_cart" />
                                            <input type="hidden" name="add" value="1" />
                                            <input type="hidden" name="business" value=" " />
                                            <input type="hidden" name="item_name" value="Fair & Lovely, 80 g" />
                                            <input type="hidden" name="amount" value="121.60" />
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
                    </li>
                    <li>
                        <div class="w3l-specilamk">
                            <div class="speioffer-agile">
                                <a href="single.php">
                                    <img src="{{ asset('front/images/m1.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="product-name-w3l">
                                <h4>
                                    <a href="single.php">Fajli, 5kg</a>
                                </h4>
                                <div class="w3l-pricehkj">
                                    <h6>$180.00</h6>
                                    <p>Save $30.00</p>
                                </div>
                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                    <form action="#" method="post">
                                        <fieldset>
                                            <input type="hidden" name="cmd" value="_cart" />
                                            <input type="hidden" name="add" value="1" />
                                            <input type="hidden" name="business" value=" " />
                                            <input type="hidden" name="item_name" value="Sprite, 2.25L (Pack of 2)" />
                                            <input type="hidden" name="amount" value="180.00" />
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
                    </li>
                    <li>
                        <div class="w3l-specilamk">
                            <div class="speioffer-agile">
                                <a href="single2.php">
                                    <img src="{{ asset('front/images/m1.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="product-name-w3l">
                                <h4>
                                    <a href="single2.php">Amropali, 5kg</a>
                                </h4>
                                <div class="w3l-pricehkj">
                                    <h6>$153.00</h6>
                                    <p>Save $40.00</p>
                                </div>
                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                    <form action="#" method="post">
                                        <fieldset>
                                            <input type="hidden" name="cmd" value="_cart" />
                                            <input type="hidden" name="add" value="1" />
                                            <input type="hidden" name="business" value=" " />
                                            <input type="hidden" name="item_name" value="Lakme Eyeconic Kajal, 0.35 g" />
                                            <input type="hidden" name="amount" value="153.00" />
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
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- //special offers -->
@endsection


@section('script')

@endsection
