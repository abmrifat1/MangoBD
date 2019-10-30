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
                    <li>Single Blog View Page</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- //page -->

    <section class="blog py-lg-5 py-md-5 py-3">
        <div class="container">
            <div class="inner-sec-w3layouts py-lg-5 py-3">
                <h3 class="tittle text-center"><span class="sub-tittle">Our Latest </span>Single Page</h3>
                <div class="row mt-lg-5 mt-3">

                    <div class="col-lg-12 blog-left-content">
                        @foreach($blogPosts as $blogPost)
                        <div class="card">
                            <img class="card-img-top" src="/{{$blogPost->image }}" style="height: 650px;" alt="Card image cap">
                            <div class="card-body">
                                <h6 class="date"><span>
                                     By: {{ $blogPost->name }}</span> {{ $blogPost->created_at }}</h6>
                                <h5 class="card-title"><a class="b-post text-dark" href="#">{{ $blogPost->title }}</a></h5>
                                <p class="card-text">{{ $blogPost->description }}</p></div>
                            <div class="card-footer">
                                {{--<small class="text-muted">Last updated 3 mins ago</small>--}}
                            </div>
                        </div>
                        @endforeach

                        <div class="comment-top">
                            <h4>Comments</h4>
                            <div class="media">
                                <img src="images/t1.jpg" alt="" class="img-fluid" />
                                <div class="media-body">
                                    <h5 class="mt-0">Joseph Goh</h5>
                                    <p>Lorem Ipsum convallis diam consequat magna vulputate malesuada. id dignissim sapien velit id felis ac cursus eros. Cras a ornare elit.</p>

                                    <div class="media mt-3">
                                        <a class="d-flex pr-3" href="#">
                                            <img src="images/t1.jpg" alt="" class="img-fluid" />
                                        </a>
                                        <div class="media-body">
                                            <h5 class="mt-0">Richard Spark</h5>
                                            <p>Lorem Ipsum convallis diam consequat magna vulputate malesuada. id dignissim sapien velit id felis ac cursus eros. Cras a ornare elit.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="comment-top contact">
                            <h4>Leave a Comment</h4>
                            <form action="{{ url('/single-blog-view/') }}" method="post">
                                <div class="row main">
                                    <div class="col-md-4 form-left">
                                        <input type="text" class="top-up" name="name" placeholder="Name" required="">
                                    </div>
                                    <div class="col-md-4 form-left">
                                        <input type="email" name="email" placeholder="Email" required="">
                                    </div>
                                    <div class="col-md-4 form-right">
                                        <input type="text" name="phone number" placeholder="Phone Number" required="">
                                    </div>
                                    <div class="col-md-12 form-right">
                                        <textarea placeholder="Write Message Here" required=""></textarea>
                                    </div>
                                    <div class="book col-12 text-left">
                                        <input type="submit" name="book" value="Submit">
                                    </div>
                                </div>
                            </form>
                        </div>


                   {{-- </div>
                    <aside class="col-lg-4 blog-sldebar-right">
                        <div class="single-gd">
                            <img src="images/banner1.jpg" class="img-fluid" alt="">
                            <h4>Sign up to our newsletter</h4>
                            <form action="#" method="post">

                                <input type="email" name="Email" placeholder="Email" required="">
                                <div class="button">

                                    <input type="submit" value="Subscribe">

                                </div>
                            </form>
                        </div>
                        <div class="single-gd" data-aos="fade-up">
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
                        </div>
                       <div class="single-gd tech-btm" data-aos="fade-down">
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

                        </div>
                    </aside>
                </div>--}}
            </div>
        </div>
    </section>
@endsection