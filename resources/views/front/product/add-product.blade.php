<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Product Upload Page :: MangoBD</title>
{{ Session::put('page', 'checkout') }}
<!--/tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Grocery Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />


    <script>
        function myFunction1() {
            var x = document.getElementById("myInput1");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>

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
                <li>Add Product</li>
            </ul>
        </div>
    </div>
</div>
<!-- //page -->
<!-- payment page-->
<hr>
<div class="content">
    <div class="new-arrivals-w3agile">
        <div class="container" id="backcolor">
            <!-- tittle heading -->

            <div class="row">

                <div class="col-sm-3">

                </div>

                <div class="col-sm-12">
                    <div class="panel-body">
                        <h1 class="text-success text-center">Product Upload</h1>
                        <hr>
                        <div class="x_content">
                            {!! Form::open(['url' => '/add-product-by-seller','method'=>'POST','files' => true,'class'=>'form-horizontal form-label-left']) !!}


                            <div class="item form-group">
                                {!! Form::label('name','Product Name *',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    {!! Form::text('name',null,['class'=>'form-control col-md-7 col-xs-12','id'=>'name','required'=>'required']) !!}
                                    @if ($errors->has('name'))
                                        <span class="help-block error">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            '""
                            <div class="item form-group">
                                {!! Form::label('sku','SKU *',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    {!! Form::text('sku',null,['class'=>'form-control col-md-7 col-xs-12','id'=>'sku','required'=>'required']) !!}
                                    @if ($errors->has('sku'))
                                        <span class="help-block error">
                                        <strong>{{ $errors->first('sku') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="item form-group">
                                {!! Form::label('regPrice','Regular Price *',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    {!! Form::text('regPrice',null,['class'=>'form-control col-md-7 col-xs-12','id'=>'regPrice','required'=>'required']) !!}
                                    @if ($errors->has('regPrice'))
                                        <span class="help-block error">
                                        <strong>{{ $errors->first('regPrice') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="item form-group" style="width: 80%; margin-left: 50px;">
                                {!! Form::label('discount','Discount *',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    {!! Form::number('discount',null,['class'=>'form-control col-md-7 col-xs-12','id'=>'discount','required'=>'required']) !!}
                                    @if ($errors->has('discount'))
                                        <span class="help-block error">
                                        <strong>{{ $errors->first('discount') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div>
                                    <p style="font-size: 28px; font-weight: bolder;">%</p>
                                </div>
                            </div>

                            <div class="item form-group">
                                {!! Form::label('sellPrice','Sell Price *',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    {!! Form::text('sellPrice',null,['class'=>'form-control col-md-7 col-xs-12','id'=>'sellPrice','required'=>'required']) !!}
                                    @if ($errors->has('sellPrice'))
                                        <span class="help-block error">
                                        <strong>{{ $errors->first('sellPrice') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="item form-group">
                                {!! Form::label('quantity','Quantity *',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    {!! Form::number('quantity',null,['class'=>'form-control col-md-7 col-xs-12','id'=>'quantity','required'=>'required']) !!}
                                    @if ($errors->has('quantity'))
                                        <span class="help-block error">
                                        <strong>{{ $errors->first('quantity') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="item form-group">
                                {{--<label class="control-label col-md-3 col-sm-3 col-xs-12" for="status">Publication Status <span class="required">*</span>
                                </label>--}}
                                {!! Form::label('categoryId','Category ID ',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select name="usrId" id="" class="form-control">
                                        @foreach($users as $user)
                                            <option value="{{$user->id}}">{{$user->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="item form-group">
                                {{--<label class="control-label col-md-3 col-sm-3 col-xs-12" for="status">Publication Status <span class="required">*</span>
                                </label>--}}
                                {!! Form::label('categoryId','Category ID ',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select name="categoryId" id="" class="form-control">
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="item form-group">
                                {{--<label class="control-label col-md-3 col-sm-3 col-xs-12" for="status">Publication Status <span class="required">*</span>
                                </label>--}}
                                {!! Form::label('isStock','Stock Status ',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    {!!  Form::select('isStock', ['Stock' => 'Yes', 'Empty' => 'No'], 1, ['class'=>'form-control','id'=>'isStock'])!!}
                                </div>
                            </div>

                            <div class="item form-group">
                                {!! Form::label('image','Image *',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                                <div class="col-md-6 col-sm-6 col-xs-12">

                                    {!! Form::file('image',['accept'=>'image/*','class'=>'form-control col-md-7 col-xs-12','id'=>'image']) !!}

                                    {!! Form::file('image1',['accept'=>'image/*','class'=>'form-control col-md-7 col-xs-12','id'=>'image1']) !!}

                                    {!! Form::file('image2',['accept'=>'image/*','class'=>'form-control col-md-7 col-xs-12','id'=>'image2']) !!}

                                    <span>Image will be 400x300</span>
                                    @if ($errors->has('image'))
                                        <span class="help-block error">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                    @elseif ($errors->has('image1'))
                                        <span class="help-block error">
                                        <strong>{{ $errors->first('image1') }}</strong>
                                    </span>
                                    @elseif ($errors->has('image2'))
                                        <span class="help-block error">
                                        <strong>{{ $errors->first('image2') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="item form-group">
                                {!! Form::label('description','Description *',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    {!! Form::textarea('description',null,['class'=>'form-control col-md-7 col-xs-12','id'=>'description']) !!}
                                    @if ($errors->has('description'))
                                        <span class="help-block error">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="item form-group">
                                {{--<label class="control-label col-md-3 col-sm-3 col-xs-12" for="status">Publication Status <span class="required">*</span>
                                </label>--}}
                                {!! Form::label('type','Product Type ',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    {!!  Form::select('type', ['Select Type', 'raw' => 'Raw', 'ripe' => 'Ripe'], 1, ['class'=>'form-control','id'=>'type'])!!}
                                </div>
                            </div>

                            <div class="item form-group">
                                {{--<label class="control-label col-md-3 col-sm-3 col-xs-12" for="status">Publication Status <span class="required">*</span>
                                </label>--}}
                                {!! Form::label('isApprove','Approve Status ',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    {!!  Form::select('isApprove', ['Approve' => 'Yes', 'Not_Approved' => 'No'], 1, ['class'=>'form-control','id'=>'isApprove'])!!}
                                </div>
                            </div>


                            <div class="ln_solid"></div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3">
                                    {!! Form::submit('Submit',['class'=>'btn btn-success','id'=>'send']) !!}

                                    {{--<button id="send" type="submit" class="btn btn-success">Submit</button>--}}
                                </div>
                            </div>

                            {!! Form::close() !!}

                        </div>
                    </div>
                </div>

                <div class="col-sm-3">

                </div>

            </div>
        </div>
    </div>
</div>
<!-- //payment page -->
<hr>

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

<!-- Form Design -->
<script>
    var myInput = document.getElementById("psw");
    var letter = document.getElementById("letter");
    var capital = document.getElementById("capital");
    var number = document.getElementById("number");
    var length = document.getElementById("length");

    // When the user clicks on the password field, show the message box
    myInput.onfocus = function() {
        document.getElementById("message").style.display = "block";
    }

    // When the user clicks outside of the password field, hide the message box
    myInput.onblur = function() {
        document.getElementById("message").style.display = "none";
    }

    // When the user starts to type something inside the password field
    myInput.onkeyup = function() {
        // Validate lowercase letters
        var lowerCaseLetters = /[a-z]/g;
        if(myInput.value.match(lowerCaseLetters)) {
            letter.classList.remove("invalid");
            letter.classList.add("valid");
        } else {
            letter.classList.remove("valid");
            letter.classList.add("invalid");
        }

        // Validate capital letters
        var upperCaseLetters = /[A-Z]/g;
        if(myInput.value.match(upperCaseLetters)) {
            capital.classList.remove("invalid");
            capital.classList.add("valid");
        } else {
            capital.classList.remove("valid");
            capital.classList.add("invalid");
        }

        // Validate numbers
        var numbers = /[0-9]/g;
        if(myInput.value.match(numbers)) {
            number.classList.remove("invalid");
            number.classList.add("valid");
        } else {
            number.classList.remove("valid");
            number.classList.add("invalid");
        }

        // Validate length
        if(myInput.value.length >= 8) {
            length.classList.remove("invalid");
            length.classList.add("valid");
        } else {
            length.classList.remove("valid");
            length.classList.add("invalid");
        }
    }
</script>
<!-- Form Design -->

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