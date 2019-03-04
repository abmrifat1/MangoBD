@extends('admin.master')
@section('content')
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Team Update Registration Form</h3>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Team Information</h2>
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
                        {!! Form::open(['url' => 'dashboard/team/update/'.$team->unique_id,'method'=>'PATCH','files' => true,'class'=>'form-horizontal form-label-left']) !!}


                        <div class="item form-group">
                            {!! Form::label('name','Name *',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                {!! Form::text('name',$team->name,['class'=>'form-control col-md-7 col-xs-12','id'=>'name','required'=>'required']) !!}
                                @if ($errors->has('name'))
                                    <span class="help-block error">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="item form-group">
                            {!! Form::label('position','Position *',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                {!! Form::text('position',$team->position,['class'=>'form-control col-md-7 col-xs-12','id'=>'position','required'=>'required']) !!}
                                @if ($errors->has('position'))
                                    <span class="help-block error">
                                        <strong>{{ $errors->first('position') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="item form-group">
                            {!! Form::label('website_url','Website URL',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                {!! Form::text('website_url',$team->website_url,['placeholder'=>'https://www.facebook.com/','class'=>'form-control col-md-7 col-xs-12','id'=>'website_url']) !!}
                                @if ($errors->has('website_url'))
                                    <span class="help-block error">
                                        <strong>{{ $errors->first('website_url') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="item form-group">
                            {!! Form::label('image','Image *',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                {!! Form::hidden('previousImageUrl',$team->image) !!}
                                {!! Form::file('image',['accept'=>'image/*','class'=>'form-control col-md-7 col-xs-12','id'=>'designation']) !!}
                                <span>Image will be 300x280</span>
                                @if ($errors->has('image'))
                                    <span class="help-block error">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="item form-group">
                            {!! Form::label('comment','Comment *',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                {!! Form::textarea('comment',$team->comment,['class'=>'form-control col-md-7 col-xs-12','id'=>'comment','required'=>'required']) !!}
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
                                {!!  Form::select('status', ['1' => 'Publish', '0' => 'UnPublish'], $team->status, ['class'=>'form-control','id'=>'status'])!!}
                            </div>
                        </div>


                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-3">
                                {!! Form::submit('Update',['class'=>'btn btn-success','id'=>'send']) !!}
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