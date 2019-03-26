<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Single Product View Page :: MangoBD</title>
{{ Session::put('page', 'singlePage') }}
    <!--/tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Grocery Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!--//tags -->
    <link href="{{ asset('front/shop/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('front/shop/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('front/shop/css/font-awesome.css') }}" rel="stylesheet">
    <!--pop-up-box-->
    <link href="{{ asset('front/shop/css/popuo-box.css') }}" rel="stylesheet" type="text/css" media="all" />
    <!--//pop-up-box-->
    <!-- price range -->
    <link rel="stylesheet" type="text/css" href="{{ asset('front/shop/css/jquery-ui1.css') }}">
    <!-- flexslider -->
    <link rel="stylesheet" href="{{ asset('front/shop/css/flexslider.css') }}" type="text/css" media="screen" />
    <!-- fonts -->
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
</head>

<body>

@include('front.includes.header')

<!-- banner-2 -->
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
                <li>Single Page</li>
            </ul>
        </div>
    </div>
</div>
<!-- //page -->
<!-- Single Page -->
<div class="banner-bootom-w3-agileits">
    <div class="container">
        <!-- tittle heading -->
        <h3 class="tittle-w3l">Single Page
            <span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
        </h3>
        <!-- //tittle heading -->
        <div class="col-md-5 single-right-left ">
            <div class="grid images_3_of_2">
                <div class="flexslider">
                    <ul class="slides">
                        <li data-thumb="/{{ $product->picture_1 }}">
                            <div class="thumb-image">
                                <img src="/{{ $product->picture_1 }}" data-imagezoom="true" class="img-responsive" alt=""> </div>
                        </li>
                        <li data-thumb="/{{ $product->picture_1 }}">
                            <div class="thumb-image">
                                <img src="/{{ $product->picture_1 }}" data-imagezoom="true" class="img-responsive" alt=""> </div>
                        </li>
                        <li data-thumb="/{{ $product->picture_1 }}">
                            <div class="thumb-image">
                                <img src="/{{ $product->picture_1 }}" data-imagezoom="true" class="img-responsive" alt=""> </div>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="col-md-7 single-right-left simpleCart_shelfItem">
            <h3>{{ $product->name }}  {{ $product->quantity }} KG</h3>

            @if($product->discount < 1)
            @else
                <a href="{{ url('/products/'.$product->unique_id) }}" style="font-size: 14px; background-color: firebrick; color: white; padding: 0 2px; border-radius: 2px;">{{$product->discount}}% Discount</a>
            @endif
            <div class="rating1">
					<span class="starRating">
						<input id="rating5" type="radio" name="rating" value="5">
						<label for="rating5">5</label>
						<input id="rating4" type="radio" name="rating" value="4">
						<label for="rating4">4</label>
						<input id="rating3" type="radio" name="rating" value="3" checked="">
						<label for="rating3">3</label>
						<input id="rating2" type="radio" name="rating" value="2">
						<label for="rating2">2</label>
						<input id="rating1" type="radio" name="rating" value="1">
						<label for="rating1">1</label>
					</span>
            </div>
            <p>
                <span class="item_price">{{ $product->sellPrice }}Tk</span>
                <del>{{ $product->regPrice }}</del>
                <label>Free delivery</label>
            </p>
            <div class="single-infoagile">
                <ul>
                    <li>
                        Cash on Delivery Eligible.
                    </li>
                    <li>
                        Shipping Speed to Delivery.
                    </li>
                    <li>
                        Sold and fulfilled by Supple Tek (3.6 out of 5 | 8 ratings).
                    </li>
                    <li>
                        1 offer from
                        <span class="item_price">{{ $product->sellPrice }}Tk</span>
                    </li>
                </ul>
            </div>
            <div class="product-single-w3l">
                <p>
                    <i class="fa fa-hand-o-right" aria-hidden="true"></i>This is a
                    <label>{{$product->name}}</label> Mango.</p>
                <ul>
                    <p>{{ $product->description }}</p>
                </ul>
                <p>
                    <i class="fa fa-refresh" aria-hidden="true"></i>All Mango are
                    <label>non-returnable.</label>
                </p>
            </div>

            <div>
                <form action="{{ url('/add-to-cart') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Quantity </label>
                        <input type="number" name="qty" value="1" min="1" max="{{ $product->quantity }}"/>
                        <input type="hidden" name="id" value="{{ $product->id }}"/>
                        <label> KG</label>
                    </div>
                    <div>
                        <input type="submit" name="btn" value="Add To Cart" class="my-cart-btn item_add btn btn-success">
                    </div>
                </form>
            </div>

           <!-- <div class="occasion-cart">
                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                    <form action="#" method="post">
                        <fieldset>
                            <input type="hidden" name="cmd" value="_cart" />
                            <input type="hidden" name="add" value="1" />
                            <input type="hidden" name="business" value=" " />
                            <input type="hidden" name="item_name" value="Zeeba Premium Basmati Rice - 5 KG" />
                            <input type="hidden" name="amount" value="950.00" />
                            <input type="hidden" name="discount_amount" value="1.00" />
                            <input type="hidden" name="currency_code" value="USD" />
                            <input type="hidden" name="return" value=" " />
                            <input type="hidden" name="cancel_return" value=" " />
                            <input type="submit" name="submit" value="Add to cart" class="button" />
                        </fieldset>
                    </form>
                </div>
            </div> -->

        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!-- //Single Page -->
<!-- special offers -->
<div class="featured-section" id="projects">
    <div class="container">
        <!-- tittle heading -->
        <h3 class="tittle-w3l">Related Products
            <span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
        </h3>
        <!-- //tittle heading -->
        <div class="content-bottom-in">
            <ul id="flexiselDemo1">

                @foreach($products as $product)
                <li>
                    <div class="w3l-specilamk">
                        <div class="speioffer-agile">
                            <a href="single.html">
                                <img src="/{{ $product->picture_1 }}" alt="" style="height: 255px;">
                            </a>
                        </div>
                        <div class="product-name-w3l">
                            <h4>
                                <a href="single.html">{{ $product->name }}, 5g</a>
                            </h4>
                            <div class="w3l-pricehkj">
                                <h6>Price: {{ $product->sellPrice }}</h6>
                                <p>Save {{ $product->regPrice - $product->sellPrice }}</p>
                            </div>

                            <div>
                                <form action="{{ url('/add-to-cart') }}" method="post">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <input type="hidden" name="qty" value="1" min="1">
                                        <input type="hidden" name="id" value="{{ $product->id }}">
                                    </div>
                                    <div class="text-center">
                                        <input style="width: 120px;" type="submit" name="btn" value="Add To Cart" class="btn btn-success btn-large">
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </li>
                @endforeach()


            </ul>
        </div>


    </div>
</div>
<!-- //special offers -->

@extends('front.includes.footer')

<!-- js-files -->
<!-- jquery -->
<script src="{{ asset('front/shop/js/jquery-2.1.4.min.js') }}"></script>
<!-- //jquery -->

<!-- popup modal (for signin & signup)-->
<script src="{{ asset('front/shop/js/jquery.magnific-popup.js') }}"></script>
<script>
    $(document).ready(function () {
        $('.popup-with-zoom-anim').magnificPopup({
            type: 'inline',
            fixedContentPos: false,
            fixedBgPos: true,
            overflowY: 'auto',
            closeBtnInside: true,
            preloader: false,
            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-zoom-in'
        });

    });
</script>
<!-- Large modal -->
<!-- <script>
    $('#').modal('show');
</script> -->
<!-- //popup modal (for signin & signup)-->

<!-- cart-js -->
<script src="{{ asset('front/shop/js/minicart.js') }}"></script>
<script>
    paypalm.minicartk.render(); //use only unique class names other than paypal1.minicart1.Also Replace same class name in css and minicart.min.js

    paypalm.minicartk.cart.on('checkout', function (evt) {
        var items = this.items(),
            len = items.length,
            total = 0,
            i;

        // Count the number of each item in the cart
        for (i = 0; i < len; i++) {
            total += items[i].get('quantity');
        }

        if (total < 3) {
            alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
            evt.preventDefault();
        }
    });
</script>
<!-- //cart-js -->

<!-- password-script -->
<script>
    window.onload = function () {
        document.getElementById("password1").onchange = validatePassword;
        document.getElementById("password2").onchange = validatePassword;
    }

    function validatePassword() {
        var pass2 = document.getElementById("password2").value;
        var pass1 = document.getElementById("password1").value;
        if (pass1 != pass2)
            document.getElementById("password2").setCustomValidity("Passwords Don't Match");
        else
            document.getElementById("password2").setCustomValidity('');
        //empty string means no validation error
    }
</script>
<!-- //password-script -->

<!-- smoothscroll -->
<script src="{{ asset('front/shop/js/SmoothScroll.min.js') }}"></script>
<!-- //smoothscroll -->

<!-- start-smooth-scrolling -->
<script src="{{ asset('front/shop/js/move-top.js') }}"></script>
<script src="{{ asset('front/shop/js/easing.js') }}"></script>
<script>
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();

            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 1000);
        });
    });
</script>
<!-- //end-smooth-scrolling -->

<!-- smooth-scrolling-of-move-up -->
<script>
    $(document).ready(function () {
        /*
        var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
        };
        */
        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });
</script>
<!-- //smooth-scrolling-of-move-up -->

<!-- imagezoom -->
<script src="{{ asset('front/shop/js/imagezoom.js') }}"></script>
<!-- //imagezoom -->

<!-- FlexSlider -->
<script src="{{ asset('front/shop/js/jquery.flexslider.js') }}"></script>
<script>
    // Can also be used with $(document).ready()
    $(window).load(function () {
        $('.flexslider').flexslider({
            animation: "slide",
            controlNav: "thumbnails"
        });
    });
</script>
<!-- //FlexSlider-->

<!-- flexisel (for special offers) -->
<script src="{{ asset('front/shop/js/jquery.flexisel.js') }}"></script>
<script>
    $(window).load(function () {
        $("#flexiselDemo1").flexisel({
            visibleItems: 3,
            animationSpeed: 1000,
            autoPlay: true,
            autoPlaySpeed: 3000,
            pauseOnHover: true,
            enableResponsiveBreakpoints: true,
            responsiveBreakpoints: {
                portrait: {
                    changePoint: 480,
                    visibleItems: 1
                },
                landscape: {
                    changePoint: 640,
                    visibleItems: 2
                },
                tablet: {
                    changePoint: 768,
                    visibleItems: 2
                }
            }
        });

    });
</script>
<!-- //flexisel (for special offers) -->

<!-- for bootstrap working -->
<script src="{{ asset('front/shop/js/bootstrap.js') }}"></script>
<!-- //for bootstrap working -->
<!-- //js-files -->

</body>

</html>