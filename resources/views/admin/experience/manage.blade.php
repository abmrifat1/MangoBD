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
                <h3>Experience Management system</h3>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Experience Information</h2>
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
                                <th>S.L</th>
                                <th>Name</th>
                                <th>Company Name</th>
                                <th>Comment</th>
                                <th>image</th>
                                <th>Status</th>
                                <th>Created at</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php($i=0)
                                @foreach($experiences as $experience)
                                    <tr>
                                        <td>{{++$i}}</td>
                                        <td>{{$experience->position}}</td>
                                        <td>{{$experience->company_name}}</td>
                                        <td>{{$experience->comment}}</td>
                                        <td><img src="{{asset($experience->image)}}" height="100" width="100"/></td>
                                        <td>{{$experience->status==1?'Publish':'UnPublish'}}</td>
                                        <td>{{$experience->created_at}}</td>
                                        <td class="center">
                                            <a href="{{ url('/dashboard/experience/show/'.$experience->unique_id) }}" title="Un Publish" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i></a>
                                        @if($experience->status==1)
                                                <a href="{{ url('/dashboard/experience/unpublish/'.$experience->unique_id) }}" title="Un Publish" class="btn btn-success"><i class="fa fa-long-arrow-up" aria-hidden="true"></i></a>
                                            @else
                                                <a href="{{ url('/dashboard/experience/publish/'.$experience->unique_id) }}" title="Publish" class="btn btn-warning"><i class="fa fa-long-arrow-down" aria-hidden="true"></i></a>
                                            @endif
                                            <a href="{{ url('/dashboard/experience/edit/'.$experience->unique_id) }}" title="Edit" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                            {{--<a href="#" title="Destroy" onclick="event.preventDefault(); document.getElementById('deleteForm').submit()" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></a>--}}
                                            {!! Form::open(['url' => '/dashboard/experience/destroy/'.$experience->unique_id,'method'=>'DELETE','style'=>'display:inline']) !!}
                                            {!! Form::hidden('image',$experience->image) !!}
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
@endsection