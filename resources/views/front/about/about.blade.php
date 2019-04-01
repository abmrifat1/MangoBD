@extends('front.master')
@section('title')About page::MangoBD
{{ Session::put('page', 'about') }}
@endsection
@section('css')

@endsection
@section('main-content')

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
                <li>About Us</li>
            </ul>
        </div>
    </div>
</div>
<!-- //page -->
<!-- about page -->
<!-- welcome -->
<div class="welcome">
    <div class="container">
        <!-- tittle heading -->
        <h3 class="tittle-w3l">Welcome to our Site
            <span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
        </h3>
        <!-- //tittle heading -->
        <div class="w3l-welcome-info">
            <div class="col-sm-6 col-xs-6 welcome-grids">
                <div class="welcome-img">
                    <img src="{{ asset('front/images/about.jpg') }}" class="img-responsive zoom-img" alt="">
                </div>
            </div>
            <div class="col-sm-6 col-xs-6 welcome-grids">
                <div class="welcome-img">
                    <img src="{{ asset('front/images/about2.jpg') }}" class="img-responsive zoom-img" alt="">
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="w3l-welcome-text">
            <p style="text-align: center">People like take fruits. Mango is one of them. Mango is one of the most popular fruit in our country. People want to take fresh mango but most of the time they don’t get best mango though pay much money. Now to overcome this problem we will make a mango based online shopping web application. Through this site people can easily purchase best mango mango with legal price. MangoBD Ensure the pure fruit 100%.. </p>
        </div>
    </div>
</div>
<!-- //welcome -->
<!-- video -->
<div class="about">
    <div class="container">
        <!-- tittle heading -->
        <h3 class="tittle-w3l">Our Video
            <span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
        </h3>
        <!-- //tittle heading -->
        <div class="about-tp">
            <div class="col-md-8 about-agileits-w3layouts-left">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/MTVpsLeqIQ0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-md-4 about-agileits-w3layouts-right">
                <div class="img-video-about">
                    <img src="images/videoimg2.png" alt="">
                </div>
                <h4>MangoBD</h4>
                <p>No.1 Leading E-commerce marketplace with over all types of Mango.</p>
            </div>
            <div class="clearfix"></div>
        </div>

    </div>
</div>
<!-- //video-->

    @endsection()