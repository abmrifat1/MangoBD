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