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
                <h3>Users Management system</h3>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Users Information</h2>
                        <a href="{{ url('/admin/user/create') }}"><h2 style="float: right; margin-left: 10px; padding: 7px; margin-bottom: 20px; border-radius: 6px;" class="btn-success">Add New<i class="fa fa-plus" style="margin-left: 10px; margin-right: 2px;"></i></h2></a>
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
                        @if((Auth::user()->type) == 'Author' || ((Auth::user()->type) == 'Admin'))
                        <table id="datatable-buttons" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>S.L</th>
                                <th>User Name</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th>Address</th>
                                <th>Profile_image</th>
                                <th>Role As</th>
                                <th>Created at</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php($i=0)
                            @foreach($users as $user)
                                @if((Auth::user()->id) == $user->id || Auth::user()->type == 'Author')
                                    <tr>
                                    <td>{{++$i}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->phone}}</td>
                                    <td>{{$user->address}}</td>
                                    <td><img src="{{asset($user->image)}}" height="100" width="100"/></td>
                                    <td>{{$user->type}}</td>
                                    <td>{{$user->created_at}}</td>

                                    <td class="center">

                                        <a href="{{ url('/admin/user/'.$user->unique_id.'/edit') }}" title="Edit" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>

                                        {!! Form::open(['url' => '/admin/user/'.$user->unique_id,'method'=>'DELETE','style'=>'display:inline','id'=>'deleteForm']) !!}
                                        {!! Form::hidden('image',$user->picture_1) !!}

                                        {!! Form::close() !!}

                                        <button class="btn btn-danger" title="Delete" id="deleteFormSubmit"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                                    @endif
                            @endforeach
                            </tbody>
                        </table>
                            @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function(){
            $('#deleteFormSubmit').click(function(){
                swal({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                }).then((result) => {
                    if(result){
                        $("#deleteForm").submit();
                        swal(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        )
                    }else{
                        swal("Your information is safe!");
                    }

                })
            });
        });
    </script>
@endsection
