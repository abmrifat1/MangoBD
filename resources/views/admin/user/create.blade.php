@extends('admin.master')
@section('content')
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Administration Registration Form</h3>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Administration Information</h2>
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
                        {!! Form::open(['url' => 'admin/user','method'=>'POST','files' => true,'class'=>'form-horizontal form-label-left']) !!}


                        <div class="item form-group">
                            {!! Form::label('name','Full Name *',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
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
                            {!! Form::label('email','Email *',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                {!! Form::email('email',null,['class'=>'form-control col-md-7 col-xs-12','id'=>'email','required'=>'required']) !!}
                                @if ($errors->has('email'))
                                    <span class="help-block error">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="item form-group">
                            {!! Form::label('phone','Phone Number *',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                {!! Form::text('phone',null,['class'=>'form-control col-md-7 col-xs-12','id'=>'phone','required'=>'required']) !!}
                                @if ($errors->has('phone'))
                                    <span class="help-block error">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="item form-group">
                            {!! Form::label('address','Address *',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                {!! Form::textarea('address',null,['class'=>'form-control col-md-7 col-xs-12','id'=>'address','required'=>'required']) !!}
                                @if ($errors->has('address'))
                                    <span class="help-block error">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="item form-group">
                            {!! Form::label('image','Image *',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                            <div class="col-md-6 col-sm-6 col-xs-12">

                                {!! Form::file('image',['accept'=>'image/*','class'=>'form-control col-md-7 col-xs-12','id'=>'image']) !!}

                                <span>Image will be 400x300</span>
                                @if ($errors->has('image'))
                                    <span class="help-block error">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="item form-group">
                            {!! Form::label('password','Password *',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                {!! Form::password('password',null,['class'=>'form-control col-md-7 col-xs-12','id'=>'password','required'=>'required']) !!}
                                @if ($errors->has('password'))
                                    <span class="help-block error">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="item form-group">
                            {!! Form::label('con_password','Confirm Password *',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                {!! Form::password('con_password',null,['class'=>'form-control col-md-7 col-xs-12','id'=>'con_password','required'=>'required']) !!}
                                @if ($errors->has('con_password'))
                                    <span class="help-block error">
                                        <strong>{{ $errors->first('con_password') }}</strong>
                                    </span>
                                @endif
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
        </div>
    </div>
@endsection
