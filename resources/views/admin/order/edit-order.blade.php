@extends('admin.master')
@section('content')
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Category Registration Form</h3>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Order Information</h2>
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
                    <div class="x_content">
                        {!! Form::open(['url' => '/update-order-info/','method'=>'POST','files' => true,'class'=>'form-horizontal form-label-left']) !!}
                        <div class="item form-group">
                            {{--<label class="control-label col-md-3 col-sm-3 col-xs-12" for="status">Publication Status <span class="required">*</span>
                            </label>--}}
                            {!! Form::label('paymentStatus','Payment Status ',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                {!!  Form::select('paymentStatus', ['pending' => 'Pending', 'success' => 'Success'], 1, ['class'=>'form-control','id'=>'isActive'])!!}
                            </div>
                        </div>

                        <div class="item form-group">
                            {{--<label class="control-label col-md-3 col-sm-3 col-xs-12" for="status">Publication Status <span class="required">*</span>
                            </label>--}}
                            {!! Form::label('orderStatus','Order Status ',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                            <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                {!!  Form::select('orderStatus', ['pending' => 'Pending', 'success' => 'Success', 'delete' => 'Delete'],1, ['class'=>'form-control','id'=>'isActive'])!!}
                            </div>
                        </div>

                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-3">
                                <input type="hidden" name="id" value="{{ $orders }}"/>
                                {!! Form::submit('Update',['class'=>'btn btn-success','id'=>'send']) !!}

                                {{--<button id="send" type="submit" class="btn btn-success">Submit</button>--}}
                            </div>
                        </div>

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
