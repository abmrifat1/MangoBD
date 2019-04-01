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
                    <li>Single Page</li>
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
                    <div class="col-lg-8 blog-left-content">
                        <div class="card">
                            <a href="single.html"> <img class="card-img-top" src="{{ asset('blog/images/banner2.jpg') }}" alt="Card image cap"></a>
                            <div class="card-body">
                                <h6 class="date"><span>
                                     By: Admin</span> Sep 20.2018</h6>
                                <h5 class="card-title"><a class="b-post text-dark" href="single.html">Blog Post One</a></h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Maecenas interdum, metus vitae tincidunt porttitor, magna quam egestas sem, ac scelerisque nisl nibh vel lacus. Proin eget gravida odio.</p>
                                <a class="btn btn-banner text-capitalize my-3" href="{{ url('/single-blog-view') }}">Read More</a>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                        </div>

                        <div class="card my-lg-5">
                            <a href="single.html">  <img class="card-img-top" src="images/banner3.jpg" alt="Card image cap"></a>
                            <div class="card-body">
                                <h6 class="date"><span>
                                     By: Admin</span> Sep 30.2018</h6>
                                <h5 class="card-title"><a class="b-post text-dark" href="single.html">Blog Post One</a></h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Maecenas interdum, metus vitae tincidunt porttitor, magna quam egestas sem, ac scelerisque nisl nibh vel lacus. Proin eget gravida odio.</p>
                                <a class="btn btn-banner text-capitalize my-3" href="single.html">Read More</a>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                        </div>

                        <div class="card">
                            <a href="single.html"> <img class="card-img-top" src="images/banner4.jpg" alt="Card image cap"></a>
                            <div class="card-body">
                                <h6 class="date"><span>
                                     By: Admin</span> Oct 11.2018</h6>
                                <h5 class="card-title"><a class="b-post text-dark" href="single.html">Blog Post One</a></h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Maecenas interdum, metus vitae tincidunt porttitor, magna quam egestas sem, ac scelerisque nisl nibh vel lacus. Proin eget gravida odio.</p>
                                <a class="btn btn-banner text-capitalize my-3" href="single.html">Read More</a>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                        </div>
                        <nav aria-label="Page navigation example mt-5 text-left">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#">Previous</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">3</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
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
                </div>
            </div>
        </div>
    </section>
@endsection