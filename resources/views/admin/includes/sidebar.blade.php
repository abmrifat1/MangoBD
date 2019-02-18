<div class="main_container">
    <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
                <a href="{{url('/admin-panel')}}" class="site_title"><i class="fa fa-paw"></i> <span>Mahbubul Soft</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
                <div class="profile_pic">
                    <img src="{{asset('/admin')}}/production/images/img.jpg" alt="..." class="img-circle profile_img">
                </div>
                <div class="profile_info">
                    <span>Welcome,</span>
                    <h2>{{ Auth::user()->name }}</h2>
                </div>
            </div>
            <!-- /menu profile quick info -->

            <br />
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                <div class="menu_section">
                    <h3>General</h3>
                    <ul class="nav side-menu">
                        <li><a href="{{url('/admin-panel')}}"><i class="fa fa-home"></i> Dashboard </a>
                        </li>
                        <li><a><i class="fa fa-address-book"></i> Administrator  <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="{{url('/dashboard/administrator/manage')}}">Manage</a></li>
                                <li><a href="{{url('/dashboard/administrator/create')}}">Add New</a></li>
                            </ul>
                        </li>
                        <li><a><i class="fa fa-sitemap" aria-hidden="true"></i> Our Team <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="{{url('/dashboard/team/manage')}}">Manage</a></li>
                                <li><a href="{{url('/dashboard/team/create')}}">Add New</a></li>
                            </ul>
                        </li>
                        <li><a><i class="fa fa-desktop"></i> Testimonial <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="{{url('/dashboard/testimonial/manage')}}">Manage</a></li>
                                <li><a href="{{url('/dashboard/testimonial/create')}}">Add New</a></li>
                            </ul>
                        </li>
                        <li><a><i class="fa fa-database" aria-hidden="true"></i> Portfolio Category<span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="{{url('/dashboard/portfolio-category/manage')}}">Manage</a></li>
                                <li><a href="{{url('/dashboard/portfolio-category/create')}}">Add New</a></li>
                            </ul>
                        </li>
                        <li><a><i class="fa fa-table"></i> Portfolio <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="{{url('/dashboard/portfolio/manage')}}">Manage</a></li>
                                <li><a href="{{url('/dashboard/portfolio/create')}}">Add New</a></li>
                            </ul>
                        </li>

                        <li><a><i class="fa fa-bar-chart-o"></i> Education <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="{{url('/dashboard/education/manage')}}">Manage</a></li>
                                <li><a href="{{url('/dashboard/education/create')}}">Add New</a></li>
                            </ul>
                        </li>
                        <li><a><i class="fa fa-clone"></i>Experience <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="{{url('/dashboard/experience/manage')}}">Manage</a></li>
                                <li><a href="{{url('/dashboard/experience/create')}}">Add New</a></li>
                            </ul>
                        </li>
                        <li><a><i class="fa fa-retweet" aria-hidden="true"></i> Skill <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="{{url('/dashboard/skill/manage')}}">Manage Skill</a></li>
                                <li><a href="{{url('/dashboard/skill/create')}}">Add New</a></li>
                            </ul>
                        </li>
                        <li><a><i class="fa fa-windows"></i> Blog Post Category<span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="{{url('/dashboard/blog-post-category/manage')}}">Manage Skill</a></li>
                                <li><a href="{{url('/dashboard/blog-post-category/create')}}">Add New</a></li>
                            </ul>
                        </li>
                        <li><a><i class="fa fa-server" aria-hidden="true"></i> Blog <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="{{url('/dashboard/blog-post/manage')}}">Manage Skill</a></li>
                                <li><a href="{{url('/dashboard/blog-post/create')}}">Add New</a></li>
                            </ul>
                        </li>

                        <li><a><i class="fa fa-industry" aria-hidden="true"></i> User <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="{{url('/user/manage')}}">Manage-Administrator</a></li>
                                <li><a href="{{url('/user/create')}}">Add New</a></li>
                            </ul>
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
                            <img src="images/img.jpg" alt="">{{ Auth::user()->name }}
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
                            <span class="badge bg-green">{{$total_messages}}</span>
                        </a>
                        <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                           @foreach($messages as $message)
                            <li>
                                <a href="{{url('/dashboard/contact/view/'.$message->unique_id)}}">
                                    {{--<span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>--}}
                                    <span>
                                      <span>{{$message->name}}</span>
                                      <span class="time">3 mins ago</span>
                                    </span>
                                    <span class="message">
                                      {{substr($message->message,0,40)."..."}}
                                    </span>
                                </a>
                            </li>
                            @endforeach
                            <li>
                                <div class="text-center">
                                    <a href="{{url('/dashboard/contact/manage')}}">
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