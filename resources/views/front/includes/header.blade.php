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
                    <span>M</span>angoBD
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

                @if(Session::get('customerId'))
                <li>
                    <a href="#" onclick="event.preventDefault(); document.getElementById('customerLogoutForm').submit();"><span class="fa fa-unlock-alt" aria-hidden="true"></span> Sign Out </a>
                </li>
                    <form action="{{ url('/customer-sign-out') }}" method="POST" id="customerLogoutForm">
                        {{ csrf_field() }}
                    </form>
                @else
                    <li>
                        <a href="{{ url('/customer-signin') }}">
                        <span class="fa fa-unlock-alt" aria-hidden="true"></span> Sign In </a>
                    </li>
                    {{--<li>
                        <a href="#" data-toggle="modal" data-target="#myModal1">
                            <span class="fa fa-unlock-alt" aria-hidden="true"></span> Sign In </a>
                    </li>--}}
                @endif

                @if(Session::get('customerId'))

                @else
                {{--<li>
                    <a href="#" data-toggle="modal" data-target="#myModal2">
                        <span class="fa fa-pencil-square-o" aria-hidden="true"></span> Sign Up </a>
                </li>--}}

                    <li>
                        <a href="{{ url('/customer-signup') }}">
                            <span class="fa fa-pencil-square-o" aria-hidden="true"></span> Sign Up </a>
                    </li>
                @endif
            </ul>
            <!-- //header lists -->
            <!-- search -->
            <div class="agileits_search">
                <form action="{{ url('/search-mango') }}" method="get">
                    <input value="{{ request()->input('query') }}" name="search" type="search" placeholder="How can we help you today?" required="">
                    <button type="submit" class="btn btn-default" aria-label="Left Align">
                        <span class="fa fa-search" aria-hidden="true"> </span>
                    </button>
                </form>
            </div>
            <!-- //search -->
            <!-- cart details -->

            <div class="top_nav_right">
                <div class="wthreecartaits wthreecartaits2 cart cart box_1">
                    <a href="{{ url('/show-cart') }}">
                        <button class="w3view-cart" type="submit" name="submit" value="">
                            <i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
                        </button>
                    </a>
                </div>
            </div>

            <!--
            <div class="top_nav_right">
                <div class="wthreecartaits wthreecartaits2 cart cart box_1">
                    <form action="{{ url('/show-cart') }}" method="post" class="last">
                        <input type="hidden" name="cmd" value="_cart">
                        <input type="hidden" name="display" value="1">
                        <button class="w3view-cart" type="submit" name="submit" value="">
                            <i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
                        </button>
                    </form>
                </div>
            </div>
            -->
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
                    <a href="{{ url('/login') }}"><h3 class="agileinfo_sign">Sign In Form </h3></a>
                    <p>
                        Sign In now, Let's start your Mango Shopping. Don't have an account?
                        <a href="#" data-toggle="modal" data-target="#myModal2">
                            Sign Up Now</a>
                    </p>

                    <form action="{{ url('/customer-login') }}" method="post">
                        {{ csrf_field() }}
                        <div class="styled-input agile-styled-input-top">
                            <input type="email" placeholder="Email" name="email" required>
                            {{ $errors->has('email') ? $errors->first('email') : ''}}
                        </div>
                        <div class="styled-input">
                            <input type="password" placeholder="Password" name="password" required>
                            {{ $errors->has('passord') ? $errors->first('passord') : ''}}
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


                    <form action="{{ url('/new-customer') }}" method="post" id="add_post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                        <div class="styled-input agile-styled-input-top">
                            <input type="text" placeholder="First Name" name="first_name" value="{{old('first_name')}}" class="form-control" required/>
                            {{ $errors->has('first_name') ? $errors->first('first_name') : ' ' }}
                            <span class="error">
                                    <strong style="color: red;" id="nameErrorMsg"></strong>
                            </span>
                        </div>

                        <div class="styled-input agile-styled-input-top">
                            <input type="text" placeholder="Last Name" name="last_name" value="{{old('last_name')}}" class="form-control" required/>
                            {{ $errors->has('last_name') ? $errors->first('last_name') : ' ' }}
                            <span class="error">
                                    <strong style="color: red;" id="nameErrorMsg"></strong>
                            </span>
                        </div>

                        <div class="styled-input">
                            <input type="email" value="{{old('email')}}" placeholder="E-mail" name="email" required="">
                            {{ $errors->has('email') ? $errors->first('email') : ' ' }}
                            <span class="error">
                                    <strong style="color: red;" id="nameErrorMsg"></strong>
                            </span>
                        </div>

                        <div class="styled-input">
                            <input type="number" value="{{old('phone')}}" placeholder="Mobile" name="phone" required="">
                            {{ $errors->has('phone') ? $errors->first('phone') : ' ' }}
                            <span class="error">
                                    <strong style="color: red;" id="nameErrorMsg"></strong>
                            </span>
                        </div>
                        <div class="styled-input">
                            <input type="text" value="{{old('address')}}" placeholder="Address" name="address" required="">
                            {{ $errors->has('address') ? $errors->first('address') : ' ' }}
                            <span class="error">
                                    <strong style="color: red;" id="nameErrorMsg"></strong>
                            </span>
                        </div>

                        <div>
                            <label>Profile Pic</label>
                        </div>
                        <div class="styled-input">
                            <input type="file" name="image" accept="image/*">
                            {{ $errors->has('image') ? $errors->first('image') : ' ' }}
                            <span class="error">
                                    <strong style="color: red;" id="nameErrorMsg"></strong>
                            </span>
                        </div>

                        <!--<div class="selet-account-mode">
                            <select class="list_of_cities">
                                <option selected style="display:none;color:#eee;">Select Account Mode</option>
                                <option>Buying</option>
                                <option>Selling</option>
                            </select>
                            <div class="clearfix"></div>
                        </div>-->
                        <div class="styled-input">
                            <input type="password" value="{{old('password')}}" placeholder="Password" name="password" id="myInput" value="{{old('password')}}" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required="">
                            {{ $errors->has('password') ? $errors->first('password') : ' ' }}
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-3">Show</label>
                            <div class="col-sm-3">
                                <input type="checkbox" onclick="myFunction()">
                            </div>
                        </div>

                        <div class="styled-input">
                            <input type="password" placeholder="Confirm Password" name="password_confirmation" value="{{old('password')}}" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required="">
                            {{ $errors->has('password') ? $errors->first('password') : ' ' }}
                        </div>

                        <input type="submit" value="Sign Up">
                    </form>


                    <p>
                        <a href="#">By clicking register, I agree to your terms and conditions.</a>
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
            <ul class="nav navbar-nav menu__list">
                <li class="dropdown">
                    <a class="nav-stylehead dropdown-toggle" href="#" data-toggle="dropdown">All Categories
                        <b class="caret"></b>
                    </a>
                        <ul class="dropdown-menu agile_short_dropdown">
                            @foreach($categories as $category)
                                <li>
                                    <a href="{{ url('category-products/'.$category->unique_id) }}">{{$category->name}}</a>
                                </li>
                            @endforeach
                    </ul>
                </li>
            </ul>
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
                                <a class="nav-stylehead" href="{{ url('/shop') }}">SHOP</a>
                            </li>
                            <li class="">
                                <a class="nav-stylehead" href="{{ url('/about') }}">ABOUT US</a>
                            </li>

                            <li class="">
                                    <a class="nav-stylehead" href="{{ url('/blog') }}">BLOGS</a>
                            </li>
                            <li class="">
                                <a class="nav-stylehead" href="{{ url('/contact') }}">CONTACT</a>

                            </li>

                            <!-- Profile -->
                            @if(Session::get('customerId'))
                            <li class="">
                            <li class="dropdown">
                                <a href="{{ url('/user/home') }}" style="padding: 0px;" class="dropdown-toggle nav-stylehead" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="/{{Session::get('image')}}" style="border-radius: 50%; padding-top: 5px;" height="50px"; width="50px"; alt="">
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <div class="agile_inner_drop_nav_info">
                                        <div class="col-sm-12 multi-gd-img">
                                            <ul class="multi-column-dropdown">
                                                <li>
                                                    <a href="{{ url('/user/home')  }}">Profile</a>
                                                </li>
                                                @if(Session::get('customerId'))
                                                    <li>
                                                        <a href="#" onclick="event.preventDefault(); document.getElementById('customerLogoutForm').submit();"><span class="fa fa-unlock-alt" aria-hidden="true"></span> Sign Out </a>
                                                    </li>
                                                    <form action="{{ url('/customer-sign-out') }}" method="POST" id="customerLogoutForm">
                                                        {{ csrf_field() }}
                                                    </form>
                                                @endif
                                               {{-- <li>
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
                                                <!-- Add Post -->--}}
                                            </ul>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </ul>
                            </li>

                            </a>
                            </li>

                            @else

                            @endif
                            <!-- Profile -->

                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>