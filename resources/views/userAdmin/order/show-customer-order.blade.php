@extends('userAdmin.master')
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
                    <div class="x_title" style="background: #00a6b2; position: center; text-align: center; margin: 30px 0">
                        <h2>Orders Information</h2>
                    </div>
                    <div class="x_content">
                        <table id="datatable-buttons" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th colspan="1">S.L</th>
                                <th colspan="1">Order ID</th>
                                <th colspan="2">Customer Name</th>
                                <th colspan="1">Order Total</th>
                                <th colspan="1">Order Status</th>
                                <th colspan="1">Payment Type</th>
                                <th colspan="1">Payment Status</th>
                                <th colspan="2">Order Date</th>
                                <th colspan="1">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php($i=0)
                            @foreach($orders as $order)
                                @if(Session::get('customerId') == $order->customer_id)
                                    <tr>
                                        <td colspan="1">{{++$i}}</td>
                                        <td colspan="1">{{ $order->id }}</td>
                                        <td colspan="2">{{$order->first_name.' '.$order->last_name}}</td>
                                        <td colspan="1">TK.{{$order->order_total}}</td>
                                        <td colspan="1">{{$order->order_status}}</td>
                                        <td colspan="1">{{$order->payment_type}}</td>
                                        <td colspan="1">{{$order->payment_status}}</td>
                                        <td colspan="2">{{$order->created_at}}</td>
                                        <td colspan="1">
                                            <a href="{{ url('/view-order-details/'.$order->id) }}" class="btn btn-info btn-xs" title="View Order Details">
                                                <span class="glyphicon glyphicon-zoom-in"></span>
                                            </a>
                                            <a href="{{ url('/view-order-invoice/'.$order->id) }}" class="btn btn-warning btn-xs" title="View Order Invoice">
                                                <span class="glyphicon glyphicon-zoom-out"></span>
                                            </a>
                                            <a href="{{ url('/download-invoice/'.$order->id) }}" class="btn btn-primary btn-xs" title="Download Invoice">
                                                <span class="glyphicon glyphicon-download"></span>
                                            </a>
                                            <a href="{{ url('/edit-order-info/'.$order->id) }}" class="btn btn-success btn-xs" title="Edit Order">
                                                <span class="glyphicon glyphicon-edit"></span>
                                            </a>
                                            <a href="{{ url('') }}" class="btn btn-danger btn-xs" title="Delete Order">
                                                <span class="glyphicon glyphicon-trash"></span>
                                            </a>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
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
