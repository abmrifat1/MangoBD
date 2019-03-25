@extends('front.master')
@section('title')Cart Show page::MangoBD
{{ Session::put('page', 'showcart') }}
@endsection

@section('main-content')

    <div class="page-head_agile_info_w3l">
    </div>
    <!-- page -->
    <div class="services-breadcrumb">
        <div class="agile_inner_breadcrumb">
            <div class="container">
                <ul class="w3_short">
                    <li>
                        <a href="{{ url('/') }}">Home</a>
                        <i>|</i>
                    </li>
                    <li>Show Cart</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- //page -->
    <!-- checkout page -->


    <div class="privacy">
        <div class="container">
            <!-- tittle heading -->
            <h3 class="tittle-w3l">Checkout
                <span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
            </h3>
            <!-- //tittle heading -->
            <div class="checkout-right">
                <h4>Your shopping cart contains:
                    @php
                        $i = 0
                    @endphp
                    @foreach($cartProducts as $count)
                        @php
                            $i += $count->qty
                        @endphp

                        @endforeach()
                    <span>{{ $i }} Products</span>
                </h4>

                <div class="table-responsive">
                    <table class="timetable_sub">
                        <thead>
                        <tr>
                            <th>SL No.</th>
                            <th>Product Id</th>
                            <th>Product Name</th>
                            <th>Product Image</th>
                            <th>Product Price</th>
                            <th>Product Quantity</th>
                            <th>Total Price</th>
                            <th>Remove</th>
                        </tr>
                        </thead>
                        <tbody>

                        @php($sum=0)
                        @foreach($cartProducts as $cartProduct)
                        <tr class="rem1">
                            <td class="invert">1</td>
                            <td>{{ $cartProduct->id }}</td>
                            <td>{{ $cartProduct->name }}</td>
                            <td class="invert-image">
                                <a href="{{ url('/products/'.$cartProduct->unique_id) }}">
                                    <img src="{{ asset($cartProduct->options->image) }}" alt=" " class="img-responsive" style="width:100px; height: 100px; " >
                                </a>
                            </td>
                            <!--<td class="invert">
                                <div class="quantity">
                                    <div class="quantity-select">
                                        <div class="entry value-minus">&nbsp;</div>
                                        <div class="entry value">
                                            <span>1</span>
                                        </div>
                                        <div class="entry value-plus active">&nbsp;</div>
                                    </div>
                                </div>
                            </td>-->
                            <td class="invert">TK.{{ $cartProduct->price }}</td>

                            <td class="invert">
                                <form action="{{ url('/update-cart-product') }}" method="post">
                                    {{ csrf_field() }}
                                    <input style="text-align: center;" class="inputqty" type="number" name="qty" value="{{ $cartProduct->qty }}" min="1"/>
                                    <input type="hidden" name="rowId" value="{{ $cartProduct->rowId }}"/>
                                    <input type="submit" name="btn" value="Update"/>
                                </form>
                            </td>

                            <td class="invert">TK.{{ $total = $cartProduct->price*$cartProduct->qty }}</td>
                            <td class="invert">
                                <a href="{{ url('/delete-cart-product/'.$cartProduct->rowId) }}" class="btn btn-danger btn-xs" onclick="return checkDelete();">
                                    <span class="glyphicon glyphicon-trash"></span>
                                </a>
                            </td>
                        </tr>
                            @php($sum = $sum+$total)
                            @endforeach()

                        </tbody>
                    </table>

                    <div class="table-responsive table table-bordered" style="margin-top: 50px;">
                        <table class="timetable_sub">

                        <tr class="rem1">
                            <td class="invert col-md-6" style="text-transform: uppercase; font-weight: bold;">Sub Total</td>
                            <td class="invert col-md-6" style="text-transform: uppercase; font-weight: bold;">BDT {{ $sum }}</td>
                        </tr>
                        <tr class="rem1">
                                <td class="invert" style="text-transform: uppercase; font-weight: bold;">Discount</td>
                                <td class="invert" style="text-transform: uppercase; font-weight: bold;">BDT {{ $discount=0 }}</td>
                        </tr>
                        <tr class="rem1">
                            <td class="invert" style="text-transform: uppercase; font-weight: bold;">Tax</td>
                            <td class="invert" style="text-transform: uppercase; font-weight: bold;">BDT {{ $tax=0 }}</td>
                        </tr>
                        <tr class="rem1">
                            <td class="invert" style="text-transform: uppercase; font-weight: bold;">Grand Total</td>
                            <td class="invert" style="text-transform: uppercase; font-weight: bold;">BDT {{ $grantTotal=($sum-$discount+$tax) }}</td>
                            {{ Session::put('grant_total', $grantTotal) }}
                        </tr>
                    </table>
                    </div>


                </div>
            </div>


            <div class="checkout-left">
                <div class="address_form_agile">
                    <!--<h4>Add a new Details</h4>
                    <form action="payment.html" method="post" class="creditly-card-form agileinfo_form">
                        <div class="creditly-wrapper wthree, w3_agileits_wrapper">
                            <div class="information-wrapper">
                                <div class="first-row">
                                    <div class="controls">
                                        <input class="billing-address-name" type="text" name="name" placeholder="Full Name" required="">
                                    </div>
                                    <div class="w3_agileits_card_number_grids">
                                        <div class="w3_agileits_card_number_grid_left">
                                            <div class="controls">
                                                <input type="text" placeholder="Mobile Number" name="number" required="">
                                            </div>
                                        </div>
                                        <div class="w3_agileits_card_number_grid_right">
                                            <div class="controls">
                                                <input type="text" placeholder="Landmark" name="landmark" required="">
                                            </div>
                                        </div>
                                        <div class="clear"> </div>
                                    </div>
                                    <div class="controls">
                                        <input type="text" placeholder="Town/City" name="city" required="">
                                    </div>
                                    <div class="controls">
                                        <select class="option-w3ls">
                                            <option>Select Address type</option>
                                            <option>Office</option>
                                            <option>Home</option>
                                            <option>Commercial</option>

                                        </select>
                                    </div>
                                </div>
                                <button class="submit check_out">Delivery to this Address</button>
                            </div>
                        </div>
                    </form>-->
                    <div class="checkout-right-basket">
                        <a href="{{ url('/shop') }}">Continue Shopping
                            <span class="fa fa-hand-o-right" aria-hidden="true"></span>
                        </a>
                        @if(Session::get('customerId') && Session::get('shippingId'))
                            <a href="{{ url('/payment-info') }}">Make a Payment
                                <span class="fa fa-hand-o-right" aria-hidden="true"></span>
                            </a>
                         @elseif(Session::get('customerId'))
                            <a href="{{ url('/shipping-info') }}">Make a Payment
                                <span class="fa fa-hand-o-right" aria-hidden="true"></span>
                            </a>
                        @else
                            <a href="{{ url('/checkout') }}">Make a Payment
                                <span class="fa fa-hand-o-right" aria-hidden="true"></span>
                            </a>
                         @endif

                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //checkout page -->

@endsection