@extends('admin.master')
@section('content')
    <div class="row" style="position:relative;right: 20px">
        <div class="col-lg-5 text-center">
            {{--@if(session()->has('message'))--}}
            @if($message = Session::get('message'))
                <p class="alert" style="font-weight: 500;font-size: 16px;background-color: #61d864;padding:12px;color:#fff;margin-top: 1px;position:fixed;right: 50px;z-index: 1">{{ $message }}</p>
            @endif
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Message Management</h3>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>All messages</h2>
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
                        <table id="datatable-buttons" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th colspan="1">S.L</th>
                                    <th colspan="2">Sender Name</th>
                                    <th colspan="5">message</th>
                                    <th colspan="2">Time</th>
                                    <th colspan="2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @php($i=0)
                            @foreach($messageContacts as $messageContact)
                                <tr>
                                    <td colspan="1">{{++$i}}</td>
                                    <td colspan="2">{{$messageContact->name}}</td>
                                    <td colspan="5">{{substr($messageContact->message,0,40)."..."}}</td>
                                    <td colspan="2">{{$messageContact->created_at}}</td>
                                    <td class="center" colspan="2">

                                        <a href="{{ url('/dashboard/contact/view/'.$messageContact->id) }}" title="View message" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i></a>

                                       {{-- <a href="{{ url('/dashboard/contact/replay/'.$contact->unique_id) }}" title="Replay message" class="btn btn-primary"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>--}}
                                            {!! Form::open(['url' => '/dashboard/contact/destroy/'.$messageContact->id,'method'=>'DELETE','style'=>'display:inline']) !!}
                                            <button type="submit" class="btn btn-danger" title="Delete"><i class="fa fa-trash"></i></button>
                                            {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>$('#datatable-buttons').DataTable();</script>
    @endsection