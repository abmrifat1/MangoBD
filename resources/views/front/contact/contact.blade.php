@extends('front.master')
@section('title')Contact page::MangoBD
   {{ Session::put('page', 'contact') }}
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
                <li>contact Us</li>
            </ul>
        </div>
    </div>
</div>
<!-- //page -->
<!-- contact page -->
<div class="contact-w3l">
    <div class="container">
        <!-- tittle heading -->
        <h3 class="tittle-w3l">Contact Us
            <span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
        </h3>
        <!-- //tittle heading -->
        <!-- contact -->
        <div class="contact agileits">
            <div class="contact-agileinfo">
                <div class="contact-form wthree">

                    <form action="{{ url('/contact-info-save') }}" method="post">
                        {{ csrf_field() }}
                        <div class="">
                            <input type="text" name="name" placeholder="Name" required="">
                            {{ $errors->has('name') ? $errors->first('name') : ''}}
                        </div>
                        <div class="">
                            <input class="text" type="text" name="subject" placeholder="Subject" required="">
                            {{ $errors->has('subject') ? $errors->first('subject') : ''}}
                        </div>
                        <div class="">
                            <input class="email" type="email" name="email" placeholder="Email" required="">
                            {{ $errors->has('email') ? $errors->first('email') : ''}}
                        </div>
                        <div class="">
                            <textarea placeholder="Message" name="message" required=""></textarea>
                            {{ $errors->has('message') ? $errors->first('message') : ''}}
                        </div>
                        <input type="submit" value="Submit">
                    </form>


                </div>
                <div class="contact-right wthree">
                    <div class="col-xs-7 contact-text w3-agileits">
                        <h4>GET IN TOUCH :</h4>
                        <p>
                            <i class="fa fa-map-marker"></i> kansat, Shibgoj, Chapai Nawabgoj, Rajshahi.</p>
                        <p>
                            <i class="fa fa-phone"></i> Mobile : 01777-822162</p>
                        <p>
                            <i class="fa fa-fax"></i> FAX : +1 888 888 4444</p>
                        <p>
                            <i class="fa fa-envelope-o"></i> Email :
                            <a href="mailto:example@mail.com">murshalin15-6102@gmail.com</a>
                        </p>
                    </div>
                    <div class="col-xs-5 contact-agile">
                        <img src="{{ asset('front/images/contact2.jpg') }}" alt="">
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <!-- //contact -->
    </div>
</div>
<!-- map -->
<div class="map w3layouts">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7247.917436569422!2d88.16676377301093!3d24.728297481511838!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fbad35b0829c19%3A0x917de8b91166166b!2sKansat!5e0!3m2!1sen!2sbd!4v1553099300832"
            allowfullscreen></iframe>
</div>
<!-- //map -->

@endsection