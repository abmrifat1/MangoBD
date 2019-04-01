<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Customer Login Page :: MangoBD</title>
{{ Session::put('page', 'checkout') }}
<!--/tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Grocery Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

    <!-- Form Design -->
    <style>
        /* Style all input fields */
        input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
        }

        /* Style the submit button */
        input[type=submit] {
            background-color: #4CAF50;
            color: white;
        }

        /* Style the container for inputs */
        #backcolor {
            background-color: #f1f1f1;
            padding: 20px;
        }

        /* The message box is shown when the user clicks on the password field */
        #message {
            display:none;
            background: #f1f1f1;
            color: #000;
            position: relative;
            padding: 20px;
            margin-top: 10px;
        }

        #message p {
            padding: 10px 35px;
            font-size: 18px;
        }

        /* Add a green text color and a checkmark when the requirements are right */
        .valid {
            color: green;
        }

        .valid:before {
            position: relative;
            left: -35px;
            content: "✔";
        }

        /* Add a red text color and an "x" when the requirements are wrong */
        .invalid {
            color: red;
        }

        .invalid:before {
            position: relative;
            left: -35px;
            content: "✖";
        }
    </style>
    <!-- Form Design -->

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
                <li>Customer Login</li>
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

                <div class="col-md-6">
                    <div class="panel-body">
                        <h1 class="text-success text-center">Seller Information</h1>
                        <hr>

                        <div style="text-align: center; margin-bottom: 20px;">
                            <h1 style="color: #00A000; margin-bottom: 5px;">Name Of Seller</h1>
                            <p><h3>{{ $sellersInfo->name }}</h3></p>
                        </div>

                        <div style="text-align: center; margin-bottom: 20px;">
                            <h1 style="color: #00A000; margin-bottom: 5px;">Email</h1>
                            <p><h3>{{ $sellersInfo->email }}</h3></p>
                        </div>

                        <div style="text-align: center; margin-bottom: 20px;">
                            <h1 style="color: #00A000; margin-bottom: 5px;">Phone</h1>
                            <p><h3>{{ $sellersInfo->phone }}</h3></p>
                        </div>
                        <div style="text-align: center">
                            <h1 style="color: #00A000; margin-bottom: 5px;">Address</h1>
                            <p><h3>{{ $sellersInfo->address }}</h3></p>
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