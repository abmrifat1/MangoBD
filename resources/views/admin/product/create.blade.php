@extends('admin.master')
@section('content')
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Product Information Form</h3>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Product Information</h2>
                        <a href="{{ url('/admin/product') }}"><h2 style="float: right; margin-left: 10px; padding: 7px; margin-bottom: 20px; border-radius: 6px;" class="btn-success">Display Product</h2></a>
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
                        {!! Form::open(['url' => 'admin/product','method'=>'POST','files' => true,'class'=>'form-horizontal form-label-left']) !!}


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
        </div>
    </div>
@endsection
