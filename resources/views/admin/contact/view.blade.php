@extends('admin.master')
@section('content')
    <div class="">

    <div class="page-title">
        <div class="title_left">
            <h3>Inbox</h3>
        </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
        <div class="col-md-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Message </h2>
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
                    <div class="row">
                        {{--<div class="col-sm-3 mail_list_column">
                            <button id="compose" class="btn btn-sm btn-success btn-block" type="button">COMPOSE</button>
                            <a href="#">
                                <div class="mail_list">
                                    <div class="left">
                                        <i class="fa fa-circle"></i> <i class="fa fa-edit"></i>
                                    </div>
                                    <div class="right">
                                        <h3>Dennis Mugo <small>3.00 PM</small></h3>
                                        <p>Ut enim ad minim veniam, quis nostrud exercitation enim ad minim veniam, quis nostrud exercitation...</p>
                                    </div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="mail_list">
                                    <div class="left">
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="right">
                                        <h3>Jane Nobert <small>4.09 PM</small></h3>
                                        <p><span class="badge">To</span> Ut enim ad minim veniam, quis nostrud exercitation enim ad minim veniam, quis nostrud exercitation...</p>
                                    </div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="mail_list">
                                    <div class="left">
                                        <i class="fa fa-circle-o"></i><i class="fa fa-paperclip"></i>
                                    </div>
                                    <div class="right">
                                        <h3>Musimbi Anne <small>4.09 PM</small></h3>
                                        <p><span class="badge">CC</span> Ut enim ad minim veniam, quis nostrud exercitation enim ad minim veniam, quis nostrud exercitation...</p>
                                    </div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="mail_list">
                                    <div class="left">
                                        <i class="fa fa-paperclip"></i>
                                    </div>
                                    <div class="right">
                                        <h3>Jon Dibbs <small>4.09 PM</small></h3>
                                        <p>Ut enim ad minim veniam, quis nostrud exercitation enim ad minim veniam, quis nostrud exercitation...</p>
                                    </div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="mail_list">
                                    <div class="left">
                                        .
                                    </div>
                                    <div class="right">
                                        <h3>Debbis & Raymond <small>4.09 PM</small></h3>
                                        <p>Ut enim ad minim veniam, quis nostrud exercitation enim ad minim veniam, quis nostrud exercitation...</p>
                                    </div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="mail_list">
                                    <div class="left">
                                        .
                                    </div>
                                    <div class="right">
                                        <h3>Debbis & Raymond <small>4.09 PM</small></h3>
                                        <p>Ut enim ad minim veniam, quis nostrud exercitation enim ad minim veniam, quis nostrud exercitation...</p>
                                    </div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="mail_list">
                                    <div class="left">
                                        <i class="fa fa-circle"></i> <i class="fa fa-edit"></i>
                                    </div>
                                    <div class="right">
                                        <h3>Dennis Mugo <small>3.00 PM</small></h3>
                                        <p>Ut enim ad minim veniam, quis nostrud exercitation enim ad minim veniam, quis nostrud exercitation...</p>
                                    </div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="mail_list">
                                    <div class="left">
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="right">
                                        <h3>Jane Nobert <small>4.09 PM</small></h3>
                                        <p>Ut enim ad minim veniam, quis nostrud exercitation enim ad minim veniam, quis nostrud exercitation...</p>
                                    </div>
                                </div>
                            </a>
                        </div>--}}
                        <!-- /MAIL LIST -->

                        <!-- CONTENT MAIL -->
                        <div class="col-sm-12 mail_view">
                            <div class="inbox-body">
                                <div class="mail_heading row">
                                    <div class="col-md-8">
                                        <div class="btn-group">
                                            <a href="{{url('/dashboard/contact/replay/'.$contact->unique_id)}}" class="btn btn-sm btn-primary" type="button"><i class="fa fa-reply"></i> Reply</a>
                                            {{--<button class="btn btn-sm btn-default" type="button"  data-placement="top" data-toggle="tooltip" data-original-title="Forward"><i class="fa fa-share"></i></button>
                                            <button class="btn btn-sm btn-default" type="button" data-placement="top" data-toggle="tooltip" data-original-title="Print"><i class="fa fa-print"></i></button>--}}
                                            <button class="btn btn-sm btn-default" type="button" data-placement="top" data-toggle="tooltip" data-original-title="Trash"><i class="fa fa-trash-o"></i></button>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-right">
                                        <p class="date"> {{$contact->created_at}}</p>
                                    </div>
                                    <div class="col-md-12">
                                        <h4> {{$contact->subject}}</h4>
                                    </div>
                                </div>
                                <div class="sender-info">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <strong>{{$contact->name}}</strong>
                                            <span>({{$contact->email}})</span> to
                                            <strong>me</strong>
                                            <a class="sender-dropdown"><i class="fa fa-chevron-down"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="view-mail">
                                    {{$contact->message}}
                                </div>
                            </div>

                        </div>



                        <!-- /CONTENT MAIL -->
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <a href="{{url('/dashboard/contact/manage')}}" class="btn btn-primary">All-messages</a>
        </div>
    </div>
    </div>
@endsection