@extends('front.master')
@section('title')Home page :: MangoBD
{{ Session::put('page', 'home') }}
@endsection
@section('css')

    <!-- //Meta tag Keywords -->
    <link rel="stylesheet" href="{{ asset('blog/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('blog/css/style.css') }}" type="text/css" media="all" />
    <!-- Style-CSS -->

@endsection

@section('main-content')

    <!-- banner-2 -->
    <div class="page-head_agile_info_w3l">

    </div>
    <!-- //banner-2 -->
    <!-- page -->
    <div class="services-breadcrumb">
        <div class="agile_inner_breadcrumb">
            <div class="container">
                <ul class="w3_short">
                    <li>
                        <a href="{{ url('/') }}">Home</a>
                        <i>|</i>
                    </li>
                    <li>Blog Page</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- //page -->

    <section class="blog py-lg-5 py-md-5 py-3">
        <div class="container">
            <div class="inner-sec-w3layouts py-lg-5 py-3">
                <h3 class="tittle text-center"><span class="sub-tittle">Our Latest </span>Blog Posts</h3>
                <div class="row mt-lg-5 mt-3">
                    @foreach($blogPosts as $blogPost)
                    <div class="col-lg-12 blog-left-content">
                        <div class="card">
                            <a href="{{ url('/single-blog-view') }}"> <img class="card-img-top" style="height: 650px;" src="{{$blogPost->image }}" alt="Card image cap"></a>
                            <div class="card-body">
                                <h6 class="date"><span>
                                     By: {{ $blogPost->name }}</span> {{ $blogPost->created_at }}</h6>
                                <h5 class="card-title"><a class="b-post text-dark" href="{{ url('/single-blog-view') }}">{{ $blogPost->title }}</a></h5>
                                <p class="card-text">{{ substr($blogPost->description, 0, $length = 400) }}</p>
                                <a class="btn btn-banner text-capitalize my-3" href="{{ url('/single-blog-view/'.$blogPost->id) }}">Read More</a>
                            </div>
                            <div class="card-footer">
                                {{--<small class="text-muted">Last updated 3 mins ago</small>--}}
                            </div>
                        </div>
                    </div>

                    @endforeach
                    {{--<div style="float: left; margin-left: 50px;">
                        {{ $blogPost->links() }}
                    </div>--}}
                    <aside class="col-lg-4 blog-sldebar-right">
                        {{--<div class="single-gd">
                            <img src="images/banner1.jpg" class="img-fluid" alt="">
                            <h4>Sign up to our newsletter</h4>
                            <form action="#" method="post">

                                <input type="email" name="Email" placeholder="Email" required="">
                                <div class="button">

                                    <input type="submit" value="Subscribe">

                                </div>
                            </form>
                        </div>--}}
                        {{--<div class="single-gd" data-aos="fade-up">
                            <h4>Our Progress</h4>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>--}}
                        {{--<div class="single-gd tech-btm" data-aos="fade-down">
                            <h4>Top stories of the week </h4>
                            <div class="blog-grids">
                                <div class="blog-grid-left">
                                    <a href="single.html">
                                        <img src="images/b1.jpg" class="img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="blog-grid-right">

                                    <h5>
                                        <a href="single.html">Pellentesque dui, non felis. Maecenas male</a>
                                    </h5>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="blog-grids">
                                <div class="blog-grid-left">
                                    <a href="single.html">
                                        <img src="images/b2.jpg" class="img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="blog-grid-right">

                                    <h5>
                                        <a href="single.html">Pellentesque dui, non felis. Maecenas male</a>
                                    </h5>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="blog-grids">
                                <div class="blog-grid-left">
                                    <a href="single.html">
                                        <img src="images/b3.jpg" class="img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="blog-grid-right">

                                    <h5>
                                        <a href="single.html">Pellentesque dui, non felis. Maecenas male</a>
                                    </h5>
                                </div>
                                <div class="clearfix"> </div>
                            </div>

                        </div>--}}
                    </aside>
                </div>
            </div>
        </div>
    </section>
@endsection