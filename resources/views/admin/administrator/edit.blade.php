@extends('admin.master')
@section('content')
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Administrator Update Registration Form</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Administrator Information</h2>
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
                        {!! Form::open(['url' => 'dashboard/administrator/update/'.$administrator->unique_id,'method'=>'PATCH','files' => true,'class'=>'form-horizontal form-label-left']) !!}


                        <div class="item form-group">
                            {!! Form::label('name','Name *',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                {!! Form::text('name',$administrator->name,['class'=>'form-control col-md-7 col-xs-12','id'=>'name','required'=>'required']) !!}
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
                                {!! Form::text('position',$administrator->position,['class'=>'form-control col-md-7 col-xs-12','id'=>'position','required'=>'required']) !!}
                                @if ($errors->has('position'))
                                    <span class="help-block error">
                                        <strong>{{ $errors->first('position') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="item form-group">
                            {!! Form::label('age','Age *',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                {!! Form::number('age',$administrator->age,['min'=>1,'class'=>'form-control col-md-7 col-xs-12','id'=>'age','required'=>'required']) !!}
                                @if ($errors->has('age'))
                                    <span class="help-block error">
                                        <strong>{{ $errors->first('age') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="item form-group">
                            {!! Form::label('email','Email *',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                {!! Form::text('email',$administrator->email,['class'=>'form-control col-md-7 col-xs-12','id'=>'email','required'=>'required']) !!}
                                @if ($errors->has('email'))
                                    <span class="help-block error">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="item form-group">
                            {!! Form::label('phone','Main Phone Number*',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                {!! Form::text('phone',$administrator->phone,['class'=>'form-control col-md-7 col-xs-12','id'=>'phone','required'=>'required']) !!}
                                @if ($errors->has('phone'))
                                    <span class="help-block error">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="item form-group">
                            {!! Form::label('phone_two','Contact Phone Number*',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                {!! Form::text('phone_two',$administrator->phone_two,['class'=>'form-control col-md-7 col-xs-12','id'=>'phone_two','required'=>'required']) !!}
                                @if ($errors->has('phone_two'))
                                    <span class="help-block error">
                                        <strong>{{ $errors->first('phone_two') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="item form-group">
                            {!! Form::label('city','City *',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                {!! Form::text('city',$administrator->city,['class'=>'form-control col-md-7 col-xs-12','id'=>'city','required'=>'required']) !!}
                                @if ($errors->has('city'))
                                    <span class="help-block error">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="item form-group">
                            {!! Form::label('country','Country Name *',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                {!! Form::text('country',$administrator->country,['class'=>'form-control col-md-7 col-xs-12','id'=>'country','required'=>'required']) !!}
                                @if ($errors->has('country'))
                                    <span class="help-block error">
                                        <strong>{{ $errors->first('country') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="item form-group">
                            {!! Form::label('address','Address *',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                {!! Form::text('address',$administrator->address,['class'=>'form-control col-md-7 col-xs-12','id'=>'address','required'=>'required']) !!}
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
                                {!! Form::hidden('previousImageUrl',$administrator->image) !!}
                                {!! Form::file('image',['accept'=>'image/*','class'=>'form-control col-md-7 col-xs-12','id'=>'designation']) !!}
                                <span>Image will be 360x360</span>
                                @if ($errors->has('image'))
                                    <span class="help-block error">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="item form-group">
                            {!! Form::label('resume','Resume *',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                {!! Form::hidden('previousResumeUrl',$administrator->resume) !!}
                                {!! Form::file('resume',['class'=>'form-control col-md-7 col-xs-12','id'=>'resume']) !!}
                                @if ($errors->has('resume'))
                                    <span class="help-block error">
                                        <strong>{{ $errors->first('resume') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="item form-group">
                            {!! Form::label('story_content','Story Content *',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                {!! Form::textarea('story_content',$administrator->story_content,['class'=>'form-control col-md-7 col-xs-12','id'=>'story_content','required'=>'required']) !!}
                                @if ($errors->has('story_content'))
                                    <span class="help-block error">
                                        <strong>{{ $errors->first('story_content') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="item form-group">
                            {!! Form::label('skill_content','Skill Content *',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                {!! Form::textarea('skill_content',$administrator->skill_content,['class'=>'form-control col-md-7 col-xs-12','id'=>'skill_content','required'=>'required']) !!}
                                @if ($errors->has('skill_content'))
                                    <span class="help-block error">
                                        <strong>{{ $errors->first('skill_content') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="item form-group">
                            {!! Form::label('experience_content','Experience Content *',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                {!! Form::textarea('experience_content',$administrator->experience_content,['class'=>'form-control col-md-7 col-xs-12','id'=>'experience_content','required'=>'required']) !!}
                                @if ($errors->has('experience_content'))
                                    <span class="help-block error">
                                        <strong>{{ $errors->first('experience_content') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="item form-group">
                            {!! Form::label('education_content','Education Content *',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                {!! Form::textarea('education_content',$administrator->education_content,['class'=>'form-control col-md-7 col-xs-12','id'=>'education_content','required'=>'required']) !!}
                                @if ($errors->has('education_content'))
                                    <span class="help-block error">
                                        <strong>{{ $errors->first('education_content') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="item form-group">
                            {!! Form::label('our_team_content','Our Team Content *',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                {!! Form::textarea('our_team_content',$administrator->our_team_content,['class'=>'form-control col-md-7 col-xs-12','id'=>'our_team_content','required'=>'required']) !!}
                                @if ($errors->has('our_team_content'))
                                    <span class="help-block error">
                                        <strong>{{ $errors->first('our_team_content') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="item form-group">
                            {!! Form::label('testimonial_content','Testimonial Content *',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                {!! Form::textarea('testimonial_content',$administrator->testimonial_content,['class'=>'form-control col-md-7 col-xs-12','id'=>'testimonial_content','required'=>'required']) !!}
                                @if ($errors->has('testimonial_content'))
                                    <span class="help-block error">
                                        <strong>{{ $errors->first('testimonial_content') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="item form-group">
                            {!! Form::label('blog_content','Blog Content *',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                {!! Form::textarea('blog_content',$administrator->blog_content,['class'=>'form-control col-md-7 col-xs-12','id'=>'blog_content','required'=>'required']) !!}
                                @if ($errors->has('blog_content'))
                                    <span class="help-block error">
                                        <strong>{{ $errors->first('blog_content') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="item form-group">
                            {!! Form::label('website_link','Website Link *',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                {!! Form::text('website_link',$administrator->website_link,['class'=>'form-control col-md-7 col-xs-12','id'=>'website_link','required'=>'required']) !!}
                                @if ($errors->has('website_link'))
                                    <span class="help-block error">
                                        <strong>{{ $errors->first('website_link') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="item form-group">
                            {!! Form::label('facebook_link','Facebook Link',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                {!! Form::text('facebook_link',$administrator->facebook_link,['class'=>'form-control col-md-7 col-xs-12','id'=>'facebook_link']) !!}
                                @if ($errors->has('facebook_link'))
                                    <span class="help-block error">
                                        <strong>{{ $errors->first('facebook_link') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="item form-group">
                            {!! Form::label('twitter_link','Twitter Link ',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                {!! Form::text('twitter_link',$administrator->twitter_link,['class'=>'form-control col-md-7 col-xs-12','id'=>'twitter_link']) !!}
                                @if ($errors->has('twitter_link'))
                                    <span class="help-block error">
                                        <strong>{{ $errors->first('twitter_link') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="item form-group">
                            {!! Form::label('google_plus_link','Google Plus Link',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                {!! Form::text('google_plus_link',$administrator->google_plus_link,['class'=>'form-control col-md-7 col-xs-12','id'=>'google_plus_link']) !!}
                                @if ($errors->has('google_plus_link'))
                                    <span class="help-block error">
                                        <strong>{{ $errors->first('google_plus_link') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="item form-group">
                            {!! Form::label('linkedin_link','Linkedin Link',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                {!! Form::text('linkedin_link',$administrator->linkedin_link,['class'=>'form-control col-md-7 col-xs-12','id'=>'linkedin_link']) !!}
                                @if ($errors->has('linkedin_link'))
                                    <span class="help-block error">
                                        <strong>{{ $errors->first('linkedin_link') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="item form-group">
                            {!! Form::label('pinterest_link','Pinterest Link',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                {!! Form::text('pinterest_link',$administrator->pinterest_link,['class'=>'form-control col-md-7 col-xs-12','id'=>'pinterest_link']) !!}
                                @if ($errors->has('pinterest_link'))
                                    <span class="help-block error">
                                        <strong>{{ $errors->first('pinterest_link') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="item form-group">
                            {!! Form::label('dribble_link','Dribble Link',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                {!! Form::text('dribble_link',$administrator->dribble_link,['class'=>'form-control col-md-7 col-xs-12','id'=>'dribble_link']) !!}
                                @if ($errors->has('dribble_link'))
                                    <span class="help-block error">
                                        <strong>{{ $errors->first('dribble_link') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="item form-group">
                            {!! Form::label('behance_link','Behance Link',['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                {!! Form::text('behance_link',$administrator->behance_link,['class'=>'form-control col-md-7 col-xs-12','id'=>'behance_link']) !!}
                                @if ($errors->has('behance_link'))
                                    <span class="help-block error">
                                        <strong>{{ $errors->first('behance_link') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-3">
                                {!! Form::submit('Submit',['class'=>'btn btn-warning','id'=>'send']) !!}
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