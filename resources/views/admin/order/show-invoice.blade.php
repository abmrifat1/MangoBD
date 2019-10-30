@extends('admin.master')
@section('content')
    <div class="row" style="position:relative;right: 20px">
        <div class="col-lg-5 text-center">
            {{--@if(session()->has('message'))--}}
            @if($message = Session::get('message'))
                <p class="alert" style="font-weight: 500;font-size: 16px;background-color: #61d864;padding:12px;color:#fff;margin-top: 1px;position:fixed;right: 50px;z-index: 1">{{ $message }}</p>
            @endif
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Order Invoice</h3>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Orders Invoice Information</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Settings 1</a>
                                    </li>
                                    <li><a href="#">Settings 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <br/>
                    <style>
                        .invoice-box {
                            max-width: 800px;
                            margin: auto;
                            padding: 30px;
                            border: 1px solid #eee;
                            box-shadow: 0 0 10px rgba(0, 0, 0, .15);
                            font-size: 16px;
                            line-height: 24px;
                            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
                            color: #555;
                        }

                        .invoice-box table {
                            width: 100%;
                            line-height: inherit;
                            text-align: left;
                        }

                        .invoice-box table td {
                            padding: 5px;
                            vertical-align: top;
                        }

                        .invoice-box table tr td:nth-child(2) {
                            text-align: right;
                        }

                        .invoice-box table tr.top table td {
                            padding-bottom: 20px;
                        }

                        .invoice-box table tr.top table td.title {
                            font-size: 45px;
                            line-height: 45px;
                            color: #333;
                        }

                        .invoice-box table tr.information table td {
                            padding-bottom: 40px;
                        }

                        .invoice-box table tr.heading td {
                            background: #eee;
                            border-bottom: 1px solid #ddd;
                            font-weight: bold;
                        }

                        .invoice-box table tr.details td {
                            padding-bottom: 20px;
                        }

                        .invoice-box table tr.item td{
                            border-bottom: 1px solid #eee;
                        }

                        .invoice-box table tr.item.last td {
                            border-bottom: none;
                        }

                        .invoice-box table tr.total td:nth-child(2) {
                            border-top: 2px solid #eee;
                            font-weight: bold;
                        }

                        @media only screen and (max-width: 600px) {
                            .invoice-box table tr.top table td {
                                width: 100%;
                                display: block;
                                text-align: center;
                            }

                            .invoice-box table tr.information table td {
                                width: 100%;
                                display: block;
                                text-align: center;
                            }
                        }

                        /** RTL **/
                        .rtl {
                            direction: rtl;
                            font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
                        }

                        .rtl table {
                            text-align: right;
                        }

                        .rtl table tr td:nth-child(2) {
                            text-align: left;
                        }
                    </style>
                    <div class="invoice-box" class="x_content">
                        <table id="datatable-buttons" class="table table-striped table-bordered" cellpadding="0" cellspacing="0" >
                            <tr class="top">
                                <td colspan="6">
                                    <table>
                                        <tr>
                                            <td class="title">
                                                <h1>
                                                    <a href="{{url('/')}}" style="font-style: italic;">
                                                        <span style="color: red; font-style: italic;">M</span>angoBD
                                                        <img style="height: 100px; width: 100px;" src="{{asset('front/images/logo2.png')}}" alt=" ">
                                                    </a>
                                                </h1>
                                            </td>

                                            <td>
                                                Invoice #: 0000{{ $order->id }}<br>
                                                Order Date: {{ $order->created_at }}<br>
                                                Due: May 5, 2019
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>

                            <tr class="information">
                                <td colspan="6">
                                    <table>
                                        <tr>
                                            <td>
                                                <h3>Billing Info</h3>
                                                <hr/>
                                                {{ $customer->first_name.' '.$customer->last_name }}<br>
                                                {{ $customer->email }}<br>
                                                {{ $customer->phone }}<br>
                                                {{ $customer->address }}<br>
                                            </td>

                                            <td>
                                                <h3>Shipping Info</h3>
                                                <hr/>
                                                {{ $shipping->full_name }}<br>
                                                {{ $shipping->email }}<br>
                                                {{ $shipping->phone }}<br>
                                                {{ $shipping->address }}<br>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>

                            <tr class="heading">
                                <td colspan="3">
                                    Payment Method
                                </td>

                                <td colspan="3">
                                    Check #
                                </td>
                            </tr>

                            <tr class="details">
                                <td colspan="3">
                                    Check
                                </td>

                                <td colspan="3">
                                    1000
                                </td>
                            </tr>

                            <tr class="heading">
                                <td>Item</td>
                                <td style="text-align: right;">Price</td>
                                <td style="text-align: center;">Quantity</td>
                                <td style="text-align: center;">Discount</td>
                                <td style="text-align: center;">Total</td>
                            </tr>

                            @php($grandTotal=0)
                            @foreach($products as $product)
                                <tr class="item">
                                    <td>{{ $product->product_name }}</td>
                                    <td style="text-align: right;">Tk. {{ $product->product_price }}</td>
                                    <td style="text-align: center;">{{ $product->product_quantity }}</td>
                                    <td style="text-align: center;">{{ $discount=($product->discount/100)*$product->product_price }}</td>
                                    <td style="text-align: center;">Tk. {{ $total= ($product->product_price * $product->product_quantity)-$discount }}</td>
                                </tr>
                                @php($grandTotal= $grandTotal + $total)
                            @endforeach
                            {{--<table class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th style="text-align: center;">Total Discount</th>
                                    <th style="text-align: center;">Total Tax</th>
                                    <th style="text-align: center;">Grand Total</th>
                                </tr>

                                <tr>
                                    <th style="text-align: center;">Tk. {{ Session::get('discount') }}</th>
                                    <th style="text-align: center;">Tk. {{ Session::get('tax') }}</th>
                                    <th style="text-align: center;">Tk. {{ Session::get('grant_total') }}</th>
                                </tr>
                                </thead>

                                <tbody>
                                </tbody>
                            </table>--}}

                            <tr>
                                <th style="margin-left: 200px;"><h3>Grand Total: Tk.{{ $grandTotal=$grandTotal+(5/100)*$grandTotal }}</h3></th>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function(){
            $('#deleteFormSubmit').click(function(){
                swal({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                }).then((result) => {
                    if(result){
                        $("#deleteForm").submit();
                        swal(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        )
                    }else{
                        swal("Your information is safe!");
                    }

                })
            });
        });
    </script>
@endsection
