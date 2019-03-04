@extends('admin.master')
@section('content')
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Blog Post Update Registration Form</h3>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Post Information</h2>
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
                        {!! Form::open(['url' => 'dashboard/blog-post/update/'.$blogPost->unique_id,'method'=>'PATCH','files' => true,'class'=>'form-horizontal form-label-left']) !!}



                        <div class="item form-group">
                            {!! Form::label('post_title','Post Title *',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                {!! Form::text('post_title',$blogPost->post_title,['class'=>'form-control col-md-7 col-xs-12','id'=>'post_title','required'=>'required']) !!}
                                @if ($errors->has('post_title'))
                                    <span class="help-block error">
                                        <strong>{{ $errors->first('post_title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="item form-group">
                            {!! Form::label('image','Small Image *',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                {!! Form::hidden('previousImageUrl',$blogPost->image) !!}
                                {!! Form::file('image',['accept'=>'image/*','class'=>'form-control col-md-7 col-xs-12','id'=>'image']) !!}
                                <span>Image will be 350x200</span>
                                @if ($errors->has('image'))
                                    <span class="help-block error">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="item form-group">
                            {!! Form::label('image_two','Big Image *',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                {!! Form::hidden('previousImageUrl_two',$blogPost->image_two) !!}
                                {!! Form::file('image_two',['accept'=>'image/*','class'=>'form-control col-md-7 col-xs-12','id'=>'image_two']) !!}
                                {{--<span>Image will be 750x400</span>--}}
                                @if ($errors->has('image_two'))
                                    <span class="help-block error">
                                        <strong>{{ $errors->first('image_two') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="item form-group">
                            {!! Form::label('post_content','Post Content *',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                {!! Form::textarea('post_content',$blogPost->post_content,['class'=>'form-control col-md-7 col-xs-12','id'=>'post_content','required'=>'required']) !!}
                                @if ($errors->has('post_content'))
                                    <span class="help-block error">
                                        <strong>{{ $errors->first('post_content') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="item form-group">
                            {!! Form::label('category_id','Select Category *',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}

                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select name="category_id" id="category_id" class="form-control col-md-7 col-xs-12">
                                    @foreach($blogPost_categories as $blogPostCategory)
                                        <option value="{{$blogPostCategory->unique_id}}" {{$blogPost==$blogPostCategory? 'selected':''}}>{{$blogPostCategory->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="item form-group">
                            {{--<label class="control-label col-md-3 col-sm-3 col-xs-12" for="status">Publication Status <span class="required">*</span>
                            </label>--}}
                            {!! Form::label('status','Publication Status ',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                {!!  Form::select('status', ['1' => 'Publish', '0' => 'UnPublish'], $blogPost->status, ['class'=>'form-control','id'=>'status'])!!}
                            </div>
                        </div>


                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-3">
                                {!! Form::submit('Submit',['class'=>'btn btn-success','id'=>'send']) !!}

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