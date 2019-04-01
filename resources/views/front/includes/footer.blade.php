{{--
<!-- newsletter -->
<div class="footer-top">
    <div class="container-fluid">
        <div class="col-xs-8 agile-leftmk">
            <h2>Get your Mango delivered from local stores</h2>
            <p>Free Delivery on your first order!</p>
            <form action="#" method="post">
                <input type="email" placeholder="E-mail" name="email" required="">
                <input type="submit" value="Subscribe">
            </form>
            <div class="newsform-w3l">
                <span class="fa fa-envelope-o" aria-hidden="true"></span>
            </div>
        </div>
        <div class="col-xs-4 w3l-rightmk">
            <img src="{{ asset('front/images/tab3.png') }}" alt=" ">
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- //newsletter -->
--}}

<!-- //Footer -->
<footer>
    <div class="container">
        <!-- footer first section -->
        <p class="footer-main" style="background: #eeeeee; text-align: center; padding: 10px;">
            <span style="text-align: center"></span> People like take fruits. Mango is one of them. Mango is one of the most popular fruit in our country. People want to take fresh mango but most of the time they don’t get best mango though pay much money. Now to overcome this problem we will make a mango based online shopping web application.  Through this site people can easily purchase best mango mango with legal price. MangoBD Ensure the pure fruit 100%.</p>
        <!-- //footer first section -->
        {{--<!-- footer second section -->
        <div class="w3l-grids-footer">
            <div class="col-xs-4 offer-footer">
                <div class="col-xs-4 icon-fot">
                    <span class="fa fa-map-marker" aria-hidden="true"></span>
                </div>
                <div class="col-xs-8 text-form-footer">
                    <h3>Track Your Order</h3>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-xs-4 offer-footer">
                <div class="col-xs-4 icon-fot">
                    <span class="fa fa-refresh" aria-hidden="true"></span>
                </div>
                <div class="col-xs-8 text-form-footer">
                    <h3>Free & Easy Returns</h3>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-xs-4 offer-footer">
                <div class="col-xs-4 icon-fot">
                    <span class="fa fa-times" aria-hidden="true"></span>
                </div>
                <div class="col-xs-8 text-form-footer">
                    <h3>Online cancellation </h3>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
        <!-- //footer second section -->--}}
        <!-- footer third section -->
        <div class="footer-info w3-agileits-info">
            <!-- footer categories -->
            <div class="col-sm-5 address-right">
                <div class="col-xs-6 footer-grids">
                    <h3>Categories</h3>
                    <ul>
                        @foreach($categories as $category)
                            <li>
                                <a href="{{ url('category-products/'.$category->unique_id) }}">{{$category->name}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
            <!-- //footer categories -->
            <!-- quick links -->
            <div class="col-sm-7 address-right">
                <div class="col-xs-6 footer-grids">
                    <h3>Quick Links</h3>
                    <ul>
                        <li>
                            <a href="{{ url('/shop') }}">Shop</a>
                        </li>
                        <li>
                            <a href="{{ url('/about') }}">About Us</a>
                        </li>
                        <li>
                            <a href="{{ url('/faqs') }}">Faqs</a>
                        </li>
                        <li>
                            <a href="{{ url('/blog') }}">Blog</a>
                        </li>
                        <li>
                            <a href="{{ url('/contact') }}">Contact Us</a>
                        </li>
                    </ul>
                </div>
                <div class="col-xs-6 footer-grids">
                    <h3>Get in Touch</h3>
                    <ul>
                        <li>
                            <i class="fa fa-map-marker"></i> Rajshahi, Bangladesh.</li>
                        <li>
                            <i class="fa fa-mobile"></i> +01777-822162 </li>
                        <li>
                            <i class="fa fa-phone"></i> +111 11 1111 </li>
                        <li>
                            <i class="fa fa-envelope-o"></i>
                            <a href="{{ url('/') }}"> themangobd.com</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- //quick links -->
            <!-- social icons -->
            {{--<div class="col-sm-2 footer-grids  w3l-socialmk" style="float: right;">
                <h3>Follow Us on</h3>
                <div class="social">
                    <ul>
                        <li>
                            <a class="icon fb" href="#">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a class="icon tw" href="#">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a class="icon gp" href="#">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="agileits_app-devices">
                    <h5>Download the App</h5>
                    <a href="#">
                        <img src="{{ asset('front/shop/images/1.png') }}" alt="">
                    </a>
                    <a href="#">
                        <img src="{{ asset('front/shop/images/2.png') }}" alt="">
                    </a>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <!-- //social icons -->--}}
            <div class="clearfix"></div>
        </div>
        <!-- //footer third section -->
        <!-- footer fourth section (text) -->
        {{--<div class="agile-sometext">
            <!-- brands -->
            <div class="sub-some">
                <h5>Popular Mango</h5>
                --}}{{--<ul style="font-size: 25px;">
                    <li>
                        <a href="product2.html">Langra</a>
                    </li>
                    <li>
                        <a href="product2.html">Himsagor</a>
                    </li>
                    <li>
                        <a href="product2.html">Amropali</a>
                    </li>
                    <li>
                        <a href="product2.html">Fazli</a>
                    </li>
                    <li>
                        <a href="product2.html">Gopalvog</a>
                    </li>
                    <li>
                        <a href="product2.html">Asina</a>
                    </li>
                </ul>--}}{{--
                --}}{{--<ul>
                    @foreach($categories as $category)
                        <li style="font-size: 45px;">
                            <a href="{{ url('category-products/'.$category->unique_id) }}">{{$category->name}}</a>
                        </li>
                    @endforeach
                </ul>--}}{{--
            </div>--}}
            <!-- //brands -->
            <!-- payment -->
            <div class="sub-some child-momu">
                <h5>Payment Method</h5>
                <ul>
                    <li>
                        <img src="{{ asset('front/images/cash.jpg') }}" style="width: 50px; height: 50px;" alt="">
                    </li>
                    <li>
                        <img src="{{ asset('front/images/bkash.jpg') }}" style="width: 50px; height: 50px;" alt="">
                    </li>
                    {{--<li>
                        <img src="{{ asset('front/shop/images/pay2.png') }}" alt="">
                    </li>
                    <li>
                        <img src="{{ asset('front/shop/images/pay5.png') }}" alt="">
                    </li>
                    <li>
                        <img src="{{ asset('front/shop/images/pay1.png') }}" alt="">
                    </li>
                    <li>
                        <img src="{{ asset('front/shop/images/pay4.png') }}" alt="">
                    </li>
                    <li>
                        <img src="{{ asset('front/shop/images/pay6.png') }}" alt="">
                    </li>
                    <li>
                        <img src="{{ asset('front/shop/images/pay3.png') }}" alt="">
                    </li>
                    <li>
                        <img src="{{ asset('front/shop/images/pay7.png') }}" alt="">
                    </li>
                    <li>
                        <img src="{{ asset('front/shop/images/pay8.png') }}" alt="">
                    </li>
                    <li>
                        <img src="{{ asset('front/shop/images/pay9.png') }}" alt="">
                    </li>--}}
                </ul>
            </div>
            <!-- //payment -->
        </div>
        <!-- //footer fourth section (text) -->
    </div>
</footer>
<!-- //footer -->
<!-- copyright -->
<div class="copy-right">
    <div class="container">
        <p>© 2018 Best Online Shop For Fruits | Design by
            <a href="http://w3layouts.com"> Md Emamul Murshalin</a>
        </p>
    </div>
</div>
<!-- //copyright -->