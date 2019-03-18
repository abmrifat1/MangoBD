<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Single Product :: MangoBD</title>
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
<!-- top-header -->
<div class="header-most-top">
    <p>Best Online Shop For Fruits</p>
</div>
<!-- //top-header -->
<!-- header-bot-->
<div class="header-bot">
    <div class="header-bot_inner_wthreeinfo_header_mid">
        <!-- header-bot-->
        <div class="col-md-4 logo_agile">
            <h1>
                <a href="{{url('/')}}">
                    <span>M</span>ango
                    <span>BD</span>
                    <img style="height: 100px; width: 100px;" src="{{asset('front/images/logo2.png')}}" alt=" ">
                </a>
            </h1>
        </div>
        <!-- header-bot -->
        <div class="col-md-8 header">
            <!-- header lists -->
            <ul>
                <li>
                    <a class="play-icon popup-with-zoom-anim" href="#small-dialog1">
                        <span class="fa fa-map-marker" aria-hidden="true"></span> Shop Locator</a>
                </li>
                <li>
                    <a href="#" data-toggle="modal" data-target="#myModal1">
                        <span class="fa fa-truck" aria-hidden="true"></span>Track Order</a>
                </li>
                <li>
                    <span class="fa fa-phone" aria-hidden="true"></span> +01777-822162
                </li>
                <li>
                    <a href="#" data-toggle="modal" data-target="#myModal1">
                        <span class="fa fa-unlock-alt" aria-hidden="true"></span> Sign In </a>
                </li>
                <li>
                    <a href="#" data-toggle="modal" data-target="#myModal2">
                        <span class="fa fa-pencil-square-o" aria-hidden="true"></span> Sign Up </a>
                </li>
            </ul>
            <!-- //header lists -->
            <!-- search -->
            <div class="agileits_search">
                <form action="#" method="post">
                    <input name="Search" type="search" placeholder="How can we help you today?" required="">
                    <button type="submit" class="btn btn-default" aria-label="Left Align">
                        <span class="fa fa-search" aria-hidden="true"> </span>
                    </button>
                </form>
            </div>
            <!-- //search -->
            <!-- cart details -->
            <div class="top_nav_right">
                <div class="wthreecartaits wthreecartaits2 cart cart box_1">
                    <form action="#" method="post" class="last">
                        <input type="hidden" name="cmd" value="_cart">
                        <input type="hidden" name="display" value="1">
                        <button class="w3view-cart" type="submit" name="submit" value="">
                            <i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
                        </button>
                    </form>
                </div>
            </div>
            <!-- //cart details -->
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- shop locator (popup) -->
<!-- Button trigger modal(shop-locator) -->
<div id="small-dialog1" class="mfp-hide">
    <div class="select-city">
        <h3>Please Select Your Location</h3>
        <select class="list_of_cities">
            <optgroup label="Popular Cities">
                <option selected style="display:none;color:#eee;">Select City</option>
                <option>Rajshahi</option>
                <option>Dhaka</option>
                <option>Khulna</option>
                <option>Chittagong</option>
                <option>Barishal</option>
                <option>Noyakhali</option>
            </optgroup>
            <optgroup label="Alabama">
                <option>Birmingham</option>
                <option>Montgomery</option>
                <option>Mobile</option>
                <option>Huntsville</option>
                <option>Tuscaloosa</option>
            </optgroup>
        </select>
        <div class="clearfix"></div>
    </div>
</div>
<!-- //shop locator (popup) -->
<!-- signin Model -->
<!-- Modal1 -->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body modal-body-sub_agile">
                <div class="main-mailposi">
                    <span class="fa fa-envelope-o" aria-hidden="true"></span>
                </div>
                <div class="modal_body_left modal_body_left1">
                    <h3 class="agileinfo_sign">Sign In </h3>
                    <p>
                        Sign In now, Let's start your Grocery Shopping. Don't have an account?
                        <a href="#" data-toggle="modal" data-target="#myModal2">
                            Sign Up Now</a>
                    </p>
                    <form action="#" method="post">
                        <div class="styled-input agile-styled-input-top">
                            <input type="text" placeholder="User Name" name="Name" required="">
                        </div>
                        <div class="styled-input">
                            <input type="password" placeholder="Password" name="password" required="">
                        </div>
                        <input type="submit" value="Sign In">
                    </form>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- //Modal content-->
    </div>
</div>
<!-- //Modal1 -->
<!-- //signin Model -->
<!-- signup Model -->
<!-- Modal2 -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body modal-body-sub_agile">
                <div class="main-mailposi">
                    <span class="fa fa-envelope-o" aria-hidden="true"></span>
                </div>
                <div class="modal_body_left modal_body_left1">
                    <h3 class="agileinfo_sign">Sign Up</h3>
                    <p>
                        Come join the MangoBD! Let's set up your Account.
                    </p>
                    <form action="{{ url('website/user') }}" method="post" id="add_post">
                        <div class="styled-input agile-styled-input-top">
                            <input type="text" placeholder="Name" name="name" required="">
                            <span class="error">
                                    <strong style="color: red;" id="nameErrorMsg"></strong>
                            </span>
                        </div>

                        <div class="styled-input">
                            <input type="email" placeholder="E-mail" name="email" required="">
                            <span class="error">
                                    <strong style="color: red;" id="nameErrorMsg"></strong>
                            </span>
                        </div>
                        <div class="styled-input">
                            <input type="text" placeholder="Phone" name="phone" required="">
                            <span class="error">
                                    <strong style="color: red;" id="nameErrorMsg"></strong>
                            </span>
                        </div>
                        <div class="styled-input">
                            <input type="text" placeholder="Address" name="address" required="">
                            <span class="error">
                                    <strong style="color: red;" id="nameErrorMsg"></strong>
                            </span>
                        </div>
                        <div class="selet-account-mode">
                            <select class="list_of_cities">
                                <option selected style="display:none;color:#eee;">Select Account Mode</option>
                                <option>Buying</option>
                                <option>Selling</option>
                            </select>
                            <div class="clearfix"></div>
                        </div>
                        <div class="styled-input">
                            <input type="password" placeholder="Password" name="password" id="password1" required="">
                        </div>
                        <div class="styled-input">
                            <input type="password" placeholder="Confirm Password" name="Confirm Password" id="password2" required="">
                        </div>

                        <div class="selet-account-mode">
                            <select class="list_of_cities">
                                <option selected style="display:none;color:#eee;">Select Account Mode</option>
                                <option>Buying</option>
                                <option>Selling</option>
                            </select>
                            <div class="clearfix"></div>
                        </div>
                        <input type="submit" value="Sign Up">
                    </form>
                    <p>
                        <a href="#">By clicking register, I agree to your terms</a>
                    </p>
                </div>
            </div>
        </div>
        <!-- //Modal content-->
    </div>
</div>
<!-- //Modal2 -->
<!-- //signup Model -->
<!-- //header-bot -->
<!-- navigation -->
<div class="ban-top">
    <div class="container-fluid">
        <div class="agileits-navi_search">
            <form action="#" method="post">
                <select id="agileinfo-nav_search" name="agileinfo_search" required="">
                    <option value="">All Categories</option>
                    @foreach($categories as $category)
                        <option value="{{$category->name}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </form>
        </div>
        <div class="top_nav_left">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                                aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav menu__list">
                            <li class="active">
                                <a class="nav-stylehead" href="{{url('/')}}">HOME
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="">
                                <a class="nav-stylehead" href="{{ url('/about') }}">ABOUT US</a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle nav-stylehead" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">SHOP
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu multi-column columns-3">
                                    <div class="agile_inner_drop_nav_info">
                                        <div class="col-sm-4 multi-gd-img">
                                            <ul class="multi-column-dropdown">
                                                <li>
                                                    <a href="shop1.blade.php">Fajli</a>
                                                </li>
                                                <li>
                                                    <a href="shop1.blade.php">Asina</a>
                                                </li>
                                                <li>
                                                    <a href="shop1.blade.php">Himsagor</a>
                                                </li>
                                                <li>
                                                    <a href="shop1.blade.php">Langra</a>
                                                </li>
                                                <li>
                                                    <a href="shop1.blade.php">Amropali</a>
                                                </li>
                                                <li>
                                                    <a href="shop1.blade.php">Rupali</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-4 multi-gd-img">
                                            <ul class="multi-column-dropdown">
                                                <li>
                                                    <a href="shop1.blade.php">Fajli</a>
                                                </li>
                                                <li>
                                                    <a href="shop1.blade.php">Asina</a>
                                                </li>
                                                <li>
                                                    <a href="shop1.blade.php">Himsagor</a>
                                                </li>
                                                <li>
                                                    <a href="shop1.blade.php">Langra</a>
                                                </li>
                                                <li>
                                                    <a href="shop1.blade.php">Amropali</a>
                                                </li>
                                                <li>
                                                    <a href="shop1.blade.php">Rupali</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-4 multi-gd-img">
                                            <img src="images/nav.jng" alt="">
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle nav-stylehead" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">RECIPES
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu multi-column columns-3">
                                    <div class="agile_inner_drop_nav_info">
                                        <div class="col-sm-6 multi-gd-img">
                                            <ul class="multi-column-dropdown">
                                                <li>
                                                    <a href="shop1.blade.php">Fajli</a>
                                                </li>
                                                <li>
                                                    <a href="shop1.blade.php">Asina</a>
                                                </li>
                                                <li>
                                                    <a href="shop1.blade.php">Himsagor</a>
                                                </li>
                                                <li>
                                                    <a href="shop1.blade.php">Langra</a>
                                                </li>
                                                <li>
                                                    <a href="shop1.blade.php">Amropali</a>
                                                </li>
                                                <li>
                                                    <a href="shop1.blade.php">Rupali</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-4 multi-gd-img">
                                            <ul class="multi-column-dropdown">
                                                <li>
                                                    <a href="shop1.blade.php">Fajli</a>
                                                </li>
                                                <li>
                                                    <a href="shop1.blade.php">Asina</a>
                                                </li>
                                                <li>
                                                    <a href="shop1.blade.php">Himsagor</a>
                                                </li>
                                                <li>
                                                    <a href="shop1.blade.php">Langra</a>
                                                </li>
                                                <li>
                                                    <a href="shop1.blade.php">Amropali</a>
                                                </li>
                                                <li>
                                                    <a href="shop1.blade.php">Rupali</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </ul>
                            </li>
                            <li class="">
                                <a class="nav-stylehead" href="faqs.blade.php">FAQS</a>
                            </li>
                            <li class="dropdown">
                                <a class="nav-stylehead dropdown-toggle" href="#" data-toggle="dropdown">BLOGS
                                    <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu agile_short_dropdown">
                                    <li>
                                        <a href="icons.php">Web Icons</a>
                                    </li>
                                    <li>
                                        <a href="typography.php">Typography</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="">
                                <a class="nav-stylehead" href="contact.php">CONTACT</a>
                            </li>

                            <!-- Profile -->
                            <li class="">
                            <li class="dropdown">
                                <a href="#" style="padding: 0px;" class="dropdown-toggle nav-stylehead" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="{{asset('front/images/profile.png')}}" style="border-radius: 50%; padding-top: 5px;" alt="">
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <div class="agile_inner_drop_nav_info">
                                        <div class="col-sm-12 multi-gd-img">
                                            <ul class="multi-column-dropdown">
                                                <li>
                                                    <a href="shop1.blade.php">Profile</a>
                                                </li>
                                                <li>
                                                    <a href="shop1.blade.php">Setting</a>
                                                </li>
                                                <li>
                                                    <a href="shop1.blade.php">Help</a>
                                                </li>
                                                <li>
                                                    <a href="shop1.blade.php">Switch_Buying</a>
                                                </li>

                                                <!-- Add Post -->
                                                <li>
                                                    <a class="play-icon popup-with-zoom-anim" href="#add_post"><span aria-hidden="true"></span>Add_Post</a>
                                                </li>
                                                <!-- Add Post -->

                                                <li>
                                                    <a href="shop1.blade.php">Logout</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </ul>
                            </li>

                            </a>
                            </li>
                            <!-- Profile -->
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
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
                    <a href="index.html">Home</a>
                    <i>|</i>
                </li>
                <li>Payment</li>
            </ul>
        </div>
    </div>
</div>
<!-- //page -->
<!-- payment page-->
<div class="privacy">
    <div class="container">
        <!-- tittle heading -->
        <h3 class="tittle-w3l">Payment
            <span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
        </h3>
        <!-- //tittle heading -->
        <div class="checkout-right">
            <!--Horizontal Tab-->
            <div id="parentHorizontalTab">
                <ul class="resp-tabs-list hor_1">
                    <li>Cash on delivery (COD)</li>
                    <li>Credit/Debit</li>
                    <li>Net Banking</li>
                    <li>Paypal Account</li>
                </ul>
                <div class="resp-tabs-container hor_1">

                    <div>
                        <div class="vertical_post check_box_agile">
                            <h5>COD</h5>
                            <div class="checkbox">
                                <div class="check_box_one cashon_delivery">
                                    <label class="anim">
                                        <input type="checkbox" class="checkbox">
                                        <span> We also accept Credit/Debit card on delivery. Please Check with the agent.</span>
                                    </label>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div>
                        <form action="#" method="post" class="creditly-card-form agileinfo_form">
                            <div class="creditly-wrapper wthree, w3_agileits_wrapper">
                                <div class="credit-card-wrapper">
                                    <div class="first-row form-group">
                                        <div class="controls">
                                            <label class="control-label">Name on Card</label>
                                            <input class="billing-address-name form-control" type="text" name="name" placeholder="John Smith">
                                        </div>
                                        <div class="w3_agileits_card_number_grids">
                                            <div class="w3_agileits_card_number_grid_left">
                                                <div class="controls">
                                                    <label class="control-label">Card Number</label>
                                                    <input class="number credit-card-number form-control" type="text" name="number" inputmode="numeric" autocomplete="cc-number"
                                                           autocompletetype="cc-number" x-autocompletetype="cc-number" placeholder="&#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149;">
                                                </div>
                                            </div>
                                            <div class="w3_agileits_card_number_grid_right">
                                                <div class="controls">
                                                    <label class="control-label">CVV</label>
                                                    <input class="security-code form-control" Â· inputmode="numeric" type="text" name="security-code" placeholder="&#149;&#149;&#149;">
                                                </div>
                                            </div>
                                            <div class="clear"> </div>
                                        </div>
                                        <div class="controls">
                                            <label class="control-label">Expiration Date</label>
                                            <input class="expiration-month-and-year form-control" type="text" name="expiration-month-and-year" placeholder="MM / YY">
                                        </div>
                                    </div>
                                    <button class="submit">
                                        <span>Make a payment </span>
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>
                    <div>
                        <div class="vertical_post">
                            <form action="#" method="post">
                                <h5>Select From Popular Banks</h5>
                                <div class="swit-radio">
                                    <div class="check_box_one">
                                        <div class="radio_one">
                                            <label>
                                                <input type="radio" name="radio" checked="">
                                                <i></i>Syndicate Bank</label>
                                        </div>
                                    </div>
                                    <div class="check_box_one">
                                        <div class="radio_one">
                                            <label>
                                                <input type="radio" name="radio">
                                                <i></i>Bank of Baroda</label>
                                        </div>
                                    </div>
                                    <div class="check_box_one">
                                        <div class="radio_one">
                                            <label>
                                                <input type="radio" name="radio">
                                                <i></i>Canara Bank</label>
                                        </div>
                                    </div>
                                    <div class="check_box_one">
                                        <div class="radio_one">
                                            <label>
                                                <input type="radio" name="radio">
                                                <i></i>ICICI Bank</label>
                                        </div>
                                    </div>
                                    <div class="check_box_one">
                                        <div class="radio_one">
                                            <label>
                                                <input type="radio" name="radio">
                                                <i></i>State Bank Of India</label>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <h5>Or Select Other Bank</h5>
                                <div class="section_room_pay">
                                    <select class="year">
                                        <option value="">=== Other Banks ===</option>
                                        <option value="ALB-NA">Allahabad Bank NetBanking</option>
                                        <option value="ADB-NA">Andhra Bank</option>
                                        <option value="BBK-NA">Bank of Bahrain and Kuwait NetBanking</option>
                                        <option value="BBC-NA">Bank of Baroda Corporate NetBanking</option>
                                        <option value="BBR-NA">Bank of Baroda Retail NetBanking</option>
                                        <option value="BOI-NA">Bank of India NetBanking</option>
                                        <option value="BOM-NA">Bank of Maharashtra NetBanking</option>
                                        <option value="CSB-NA">Catholic Syrian Bank NetBanking</option>
                                        <option value="CBI-NA">Central Bank of India</option>
                                        <option value="CUB-NA">City Union Bank NetBanking</option>
                                        <option value="CRP-NA">Corporation Bank</option>
                                        <option value="DBK-NA">Deutsche Bank NetBanking</option>
                                        <option value="DCB-NA">Development Credit Bank</option>
                                        <option value="DC2-NA">Development Credit Bank - Corporate</option>
                                        <option value="DLB-NA">Dhanlaxmi Bank NetBanking</option>
                                        <option value="FBK-NA">Federal Bank NetBanking</option>
                                        <option value="IDS-NA">Indusind Bank NetBanking</option>
                                        <option value="IOB-NA">Indian Overseas Bank</option>
                                        <option value="ING-NA">ING Vysya Bank (now Kotak)</option>
                                        <option value="JKB-NA">Jammu and Kashmir NetBanking</option>
                                        <option value="JSB-NA">Janata Sahakari Bank Limited</option>
                                        <option value="KBL-NA">Karnataka Bank NetBanking</option>
                                        <option value="KVB-NA">Karur Vysya Bank NetBanking</option>
                                        <option value="LVR-NA">Lakshmi Vilas Bank NetBanking</option>
                                        <option value="OBC-NA">Oriental Bank of Commerce NetBanking</option>
                                        <option value="CPN-NA">PNB Corporate NetBanking</option>
                                        <option value="PNB-NA">PNB NetBanking</option>
                                        <option value="RSD-DIRECT">Rajasthan State Co-operative Bank-Debit Card</option>
                                        <option value="RBS-NA">RBS (The Royal Bank of Scotland)</option>
                                        <option value="SWB-NA">Saraswat Bank NetBanking</option>
                                        <option value="SBJ-NA">SB Bikaner and Jaipur NetBanking</option>
                                        <option value="SBH-NA">SB Hyderabad NetBanking</option>
                                        <option value="SBM-NA">SB Mysore NetBanking</option>
                                        <option value="SBT-NA">SB Travancore NetBanking</option>
                                        <option value="SVC-NA">Shamrao Vitthal Co-operative Bank</option>
                                        <option value="SIB-NA">South Indian Bank NetBanking</option>
                                        <option value="SBP-NA">State Bank of Patiala NetBanking</option>
                                        <option value="SYD-NA">Syndicate Bank NetBanking</option>
                                        <option value="TNC-NA">Tamil Nadu State Co-operative Bank NetBanking</option>
                                        <option value="UCO-NA">UCO Bank NetBanking</option>
                                        <option value="UBI-NA">Union Bank NetBanking</option>
                                        <option value="UNI-NA">United Bank of India NetBanking</option>
                                        <option value="VJB-NA">Vijaya Bank NetBanking</option>
                                    </select>
                                </div>
                                <input type="submit" value="PAY NOW">
                            </form>
                        </div>
                    </div>
                    <div>
                        <div id="tab4" class="tab-grid" style="display: block;">
                            <div class="row">
                                <div class="col-md-6">
                                    <img class="pp-img" src="images/paypal.png" alt="Image Alternative text" title="Image Title">
                                    <p>Important: You will be redirected to PayPal's website to securely complete your payment.</p>
                                    <a class="btn btn-primary">Checkout via Paypal</a>
                                </div>
                                <div class="col-md-6 number-paymk">
                                    <form class="cc-form">
                                        <div class="clearfix">
                                            <div class="form-group form-group-cc-number">
                                                <label>Card Number</label>
                                                <input class="form-control" placeholder="xxxx xxxx xxxx xxxx" type="text">
                                                <span class="cc-card-icon"></span>
                                            </div>
                                            <div class="form-group form-group-cc-cvc">
                                                <label>CVV</label>
                                                <input class="form-control" placeholder="xxxx" type="text">
                                            </div>
                                        </div>
                                        <div class="clearfix">
                                            <div class="form-group form-group-cc-name">
                                                <label>Card Holder Name</label>
                                                <input class="form-control" type="text">
                                            </div>
                                            <div class="form-group form-group-cc-date">
                                                <label>Valid Thru</label>
                                                <input class="form-control" placeholder="mm/yy" type="text">
                                            </div>
                                        </div>
                                        <div class="checkbox checkbox-small">
                                            <label>
                                                <input class="i-check" type="checkbox" checked="">Add to My Cards</label>
                                        </div>
                                        <input type="submit" class="submit" value="Proceed Payment">
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
            <!--Plug-in Initialisation-->
        </div>
    </div>
</div>
<!-- //payment page -->

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

<!-- easy-responsive-tabs -->
<link rel="stylesheet" type="text/css" href="{{ asset('front/shop/css/easy-responsive-tabs.css') }} " />
<script src="{{ asset('front/shop/js/easyResponsiveTabs.js') }}"></script>

<script>
    $(document).ready(function () {
        //Horizontal Tab
        $('#parentHorizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true, // 100% fit in a container
            tabidentify: 'hor_1', // The tab groups identifier
            activate: function (event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#nested-tabInfo');
                var $name = $('span', $info);
                $name.text($tab.text());
                $info.show();
            }
        });
    });
</script>
<!-- //easy-responsive-tabs -->

<!-- credit-card -->
<script src="{{ asset('front/shop/js/creditly.js') }}"></script>
<link rel="stylesheet" href="{{ asset('front/shop/css/creditly.css') }}" type="text/css" media="all" />

<script>
    $(function () {
        var creditly = Creditly.initialize(
            '.creditly-wrapper .expiration-month-and-year',
            '.creditly-wrapper .credit-card-number',
            '.creditly-wrapper .security-code',
            '.creditly-wrapper .card-type');

        $(".creditly-card-form .submit").click(function (e) {
            e.preventDefault();
            var output = creditly.validate();
            if (output) {
                // Your validated credit card output
                console.log(output);
            }
        });
    });
</script>
<!-- //credit-card -->

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

<!-- for bootstrap working -->
<script src="{{ asset('front/shop/js/bootstrap.js') }}"></script>
<!-- //for bootstrap working -->
<!-- //js-files -->

</body>

</html>