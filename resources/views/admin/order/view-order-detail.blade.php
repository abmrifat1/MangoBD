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
                <h3>Order Management system</h3>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">

                <div class="x_panel">
                    <div class="x_title">
                        <h2>Customer Info</h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <table class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <td>Customer Name</td>
                                <td>{{ $customer->first_name.' '.$customer->last_name }}</td>
                            </tr>
                            <tr>
                                <td>Customer Email</td>
                                <td>{{ $customer->email }}</td>
                            </tr>
                            <tr>
                                <td>Customer Phone</td>
                                <td>{{ $customer->phone }}</td>
                            </tr>
                            <tr>
                                <td>Customer Address</td>
                                <td>{{ $customer->address }}</td>
                            </tr>
                            </thead>

                            <tbody>
                            </tbody>
                        </table>
                        <hr>
                        <div class="x_title">
                            <h2>Shipping Info</h2>

                            <div class="clearfix"></div>
                        </div>
                        <table class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <td>Shipping Name</td>
                                <td>{{ $shipping->full_name }}</td>
                            </tr>
                            <tr>
                                <td>Shipping Email</td>
                                <td>{{ $shipping->email }}</td>
                            </tr>
                            <tr>
                                <td>Shipping Phone</td>
                                <td>{{ $shipping->phone }}</td>
                            </tr>
                            <tr>
                                <td>Shipping Address</td>
                                <td>{{ $shipping->address }}</td>
                            </tr>
                            </thead>

                            <tbody>
                            </tbody>
                        </table>

                        <hr>

                        <div class="x_title">
                            <h2>Payment Info</h2>

                            <div class="clearfix"></div>
                        </div>
                        <table class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <td>Payment Type</td>
                                <td>{{ $payments->payment_type }}</td>
                            </tr>
                            <tr>
                                <td>Payment Status</td>
                                <td>{{ $payments->payment_status }}</td>
                            </tr>
                            </thead>

                            <tbody>
                            </tbody>
                        </table>

                        <hr>

                        <div class="x_title">
                            <h2>Product Info</h2>

                            <div class="clearfix"></div>
                        </div>
                        <table class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>SL No</th>
                                <th>Product Id</th>
                                <th>Product Name</th>
                                <th>Product Price</th>
                                <th>Product Quantity</th>
                                <th>Total Price</th>
                            </tr>
                            @php($i=1)
                            @foreach($products as $product)
                            <tr>
                                <th>{{ $i++ }}</th>
                                <th>{{ $product->id }}</th>
                                <th>{{ $product->product_name }}</th>
                                <th>Tk.{{ $product->product_price }}</th>
                                <th>{{ $product->product_quantity}}</th>
                                <th>Tk.{{ $product->product_price * $product->product_quantity }}</th>
                            </tr>
                            @endforeach
                            </thead>

                            <tbody>
                            </tbody>
                        </table>

                        <table class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th style="text-align: center;">Total Discount</th>
                                <th style="text-align: center;">Total Tax</th>
                                <th style="text-align: center;">Grand Total</th>
                            </tr>

                                <tr>
                                   <th style="text-align: center;">Tk.{{ Session::get('discount') }}</th>
                                   <th style="text-align: center;">Tk.{{ Session::get('tax') }}</th>
                                   <th style="text-align: center;">Tk.{{ Session::get('grant_total') }}</th>
                                </tr>
                            </thead>

                            <tbody>
                            </tbody>
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
