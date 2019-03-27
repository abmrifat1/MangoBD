<div class="main_container">
    <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
                <a href="{{url('/admin-panel')}}" class="site_title"><i class="fa fa-paw"></i> <span>{{ Auth::user()->name }}</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
                <div class="profile_pic">
                    <img src="/{{ Auth::user()->image }}" style="height: 70px; width: 70px" alt="..." class="img-circle profile_img">
                </div>
                <div class="profile_info">
                    <span>Welcome,</span>
                    <h2>@if(!empty(Auth::user()->name)){{ Auth::user()->name }}@endif</h2>
                </div>
            </div>
            <!-- /menu profile quick info -->

            <br />
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                <div class="menu_section">
                    <h3>General</h3>
                    <ul class="nav side-menu">


                        <li><a href="{{url('/home')}}"><i class="fa fa-home"></i> Home </a>
                        </li>
                        <!--
                        <li><a><i class="fa fa-address-book"></i> Administrator  <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="{{url('/admin/administrator/manage')}}">Manage</a></li>
                                <li><a href="{{url('/admin/administrator/create')}}">Add New</a></li>
                            </ul>
                        </li>
                        <li><a><i class="fa fa-sitemap" aria-hidden="true"></i> Our Team <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="{{url('/admin/team/manage')}}">Manage</a></li>
                                <li><a href="{{url('/admin/team/create')}}">Add New</a></li>
                            </ul>
                        </li>
                        <li><a><i class="fa fa-desktop"></i> Testimonial <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="{{url('/admin/testimonial/manage')}}">Manage</a></li>
                                <li><a href="{{url('/admin/testimonial/create')}}">Add New</a></li>
                            </ul>
                        </li>
                        <li><a><i class="fa fa-database" aria-hidden="true"></i> Portfolio Category<span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="{{url('/admin/portfolio-category/manage')}}">Manage</a></li>
                                <li><a href="{{url('/admin/portfolio-category/create')}}">Add New</a></li>
                            </ul>
                        </li>
                        <li><a><i class="fa fa-table"></i> Portfolio <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="{{url('/admin/portfolio/manage')}}">Manage</a></li>
                                <li><a href="{{url('/admin/portfolio/create')}}">Add New</a></li>
                            </ul>
                        </li>-->

                        @if((Auth::user()->type) == 'Admin' || (Auth::user()->type) == 'Author')
                        <li><a><i class="fa fa-bar-chart-o"></i> Category <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="{{url('/admin/category/')}}">Manage</a></li>
                                <li><a href="{{url('/admin/category/create')}}">Add New</a></li>
                            </ul>
                        </li>
                        @endif

                        <li>
                            <a href="{{ url('/order-info') }}"><i class="fa fa-bar-chart-o"></i> Orders</a>
                        </li>

                        <li><a><i class="fa fa-bar-chart-o"></i> Product <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="{{url('/admin/product/')}}">Manage</a></li>
                                <li><a href="{{url('/admin/product/create')}}">Add New</a></li>
                            </ul>
                        </li>


                        <!--<li><a><i class="fa fa-clone"></i>Experience <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="{{url('/admin/experience/manage')}}">Manage</a></li>
                                <li><a href="{{url('/admin/experience/create')}}">Add New</a></li>
                            </ul>
                        </li>
                        <li><a><i class="fa fa-retweet" aria-hidden="true"></i> Skill <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="{{url('/admin/skill/manage')}}">Manage Skill</a></li>
                                <li><a href="{{url('/admin/skill/create')}}">Add New</a></li>
                            </ul>
                        </li>
                        <li><a><i class="fa fa-windows"></i> Blog Post Category<span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="{{url('/admin/blog-post-category/manage')}}">Manage Skill</a></li>
                                <li><a href="{{url('/admin/blog-post-category/create')}}">Add New</a></li>
                            </ul>
                        </li>
                        <li><a><i class="fa fa-server" aria-hidden="true"></i> Blog <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="{{url('/admin/blog-post/manage')}}">Manage Skill</a></li>
                                <li><a href="{{url('/admin/blog-post/create')}}">Add New</a></li>
                            </ul>
                        </li>-->
                        @if((Auth::user()->type) == 'Admin' || (Auth::user()->type) == 'Author')
                        <li><a><i class="fa fa-industry" aria-hidden="true"></i> User <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="{{url('admin/user')}}">Manage-Administrator</a></li>
                                <li><a href="{{url('/admin/user/create')}}">Add New</a></li>
                            </ul>
                        </li>
                        @endif

                        <li>
                            <a href="{{ url('/admin/profile') }}"><i class="fa fa-bar-chart-o"></i> Profile</a>
                        </li>

                    </ul>
                </div>
                <div class="menu_section">
                    <h3>Live On</h3>
                    <ul class="nav side-menu">

                       {{-- <li><a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="#level1_1">Level One</a>
                                <li><a>Level One<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li class="sub_menu"><a href="level2.html">Level Two</a>
                                        </li>
                                        <li><a href="#level2_1">Level Two</a>
                                        </li>
                                        <li><a href="#level2_2">Level Two</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#level1_2">Level One</a>
                                </li>
                            </ul>
                        </li>--}}
                        <li><a href="{{url('/')}}" target="_blank"><i class="fa fa-arrow-up"></i> Live Website</a></li>
                    </ul>
                </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
                <a data-toggle="tooltip" data-placement="top" title="Settings">
                    <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                </a>
                <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                    <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                </a>
                <a data-toggle="tooltip" data-placement="top" title="Lock">
                    <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                </a>
                <a data-toggle="tooltip" data-placement="top" title="Logout" href="#" onclick="event.preventDefault(); document.getElementById('logoutForm').submit()">
                    <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                    {!! Form::open(['route' => 'logout','method'=>'POST','id'=>'logoutForm']) !!}
                    {!! Form::close() !!}
                    {{--<form action="{{ route('logout') }}" method="POST" id="logoutForm">
                        {{ csrf_field() }}
                    </form>--}}
                </a>
            </div>
            <!-- /menu footer buttons -->
        </div>
    </div>

    <!-- top navigation -->
    <div class="top_nav">
        <div class="nav_menu">
            <nav>
                <div class="nav toggle">
                    <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>

                <ul class="nav navbar-nav navbar-right">
                    <li class="">
                        <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            <img src="images/img.jpg" alt="">@if(!empty(Auth::user()->name)){{ Auth::user()->name }}@endif
                            <span class=" fa fa-angle-down"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-usermenu pull-right">
                            <li><a href="javascript:;"> Profile</a></li>
                            <li>
                                <a href="javascript:;">
                                    <span class="badge bg-red pull-right">50%</span>
                                    <span>Settings</span>
                                </a>
                            </li>
                            <li><a href="javascript:;">Help</a></li>
                            <li><a href="#" onclick="event.preventDefault(); document.getElementById('logoutForm').submit()"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                            {!! Form::open(['route' => 'logout','method'=>'POST','id'=>'logoutForm']) !!}
                            {!! Form::close() !!}
                        </ul>
                    </li>

                    <li role="presentation" class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge bg-green">@if(!empty($messageCountss)){{$messageCountss}}@endif</span>
                        </a>
                        <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                            @if(!empty($messageContacts))
                           @foreach($messageContacts as $messageContact)
                            <li>
                                <a href="{{url('/admin/contact/view/'.$messageContact->id)}}">
                                    {{--<span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>--}}
                                    <span>
                                      <span>{{$messageContact->name}}</span>
                                      <span class="time">3 mins ago</span>
                                    </span>
                                    <span class="message">
                                      {{substr($messageContact->message,0,40)."..."}}
                                    </span>
                                </a>
                            </li>
                            @endforeach
                            @endif

                            <li>
                                <div class="text-center">
                                    <a href="{{url('/admin/contact/manage')}}">
                                        <strong>See All Alerts</strong>
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- /top navigation -->
