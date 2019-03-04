@extends('admin.master')
@section('content')
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Testimonial Update Form</h3>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Testimonial Information</h2>
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


                        {!! Form::open(['url' => '/dashboard/testimonial/update/'.$testimonial->unique_id,'method'=>'PATCH','files'=>true,'class'=>'form-horizontal form-label-left']) !!}
                        <div class="item form-group">
                            {!! Form::label('name','Name *',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                {!! Form::text('name',$testimonial->name,['class'=>'form-control col-md-7 col-xs-12','id'=>'name','required'=>'required']) !!}
                                @if ($errors->has('name'))
                                    <span class="help-block error">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="item form-group">
                            {!! Form::label('company_name','Company Name *',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                {!! Form::text('company_name',$testimonial->company_name,['class'=>'form-control col-md-7 col-xs-12','id'=>'company_name','required'=>'required']) !!}
                                @if ($errors->has('company_name'))
                                    <span class="help-block error">
                                        <strong>{{ $errors->first('company_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="item form-group">
                            {!! Form::label('designation','Designation *',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                {!! Form::text('designation',$testimonial->designation,['class'=>'form-control col-md-7 col-xs-12','id'=>'designation','required'=>'required']) !!}
                                @if ($errors->has('designation'))
                                    <span class="help-block error">
                                        <strong>{{ $errors->first('designation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="item form-group">
                            {!! Form::label('image','Image',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                {!! Form::hidden('previousImageUrl',$testimonial->image) !!}
                                {!! Form::file('image',['accept'=>'image/*','class'=>'form-control col-md-7 col-xs-12','id'=>'designation']) !!}
                                <span>Image will be 100x100</span>
                            </div>
                        </div>



                        <div class="item form-group">
                            {!! Form::label('comment','Comment *',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                {!! Form::textarea('comment',$testimonial->comment,['class'=>'form-control col-md-7 col-xs-12','id'=>'comment','required'=>'required']) !!}
                                @if ($errors->has('comment'))
                                    <span class="help-block error">
                                        <strong>{{ $errors->first('comment') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="item form-group">
                            {{--<label class="control-label col-md-3 col-sm-3 col-xs-12" for="status">Publication Status <span class="required">*</span>
                            </label>--}}
                            {!! Form::label('status','Publication Status ',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                {!!  Form::select('status', ['1' => 'Publish', '0' => 'UnPublish'], $testimonial->status, ['class'=>'form-control','id'=>'status'])!!}
                            </div>
                        </div>


                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-3">
                                {!! Form::submit('Update',['class'=>'btn btn-success','id'=>'send']) !!}

                                {{--<button id="send" type="submit" class="btn btn-success">Submit</button>--}}
                            </div>
                        </div>
                        </form>
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection