@extends('layout.FrontLayout')

@section('body')
    <div class="container">
        <div class="box">
            <div class="row">
                <div class="col-lg-6 text-left">
                    @if(session()->has('username'))
                        <p class="text-info text-center">Hello {{session('username')}}, Welcome to the dashboard</p>
                    @endif
                </div>
                <div class="col-lg-6 text-right">
                    <p class="text-info"><a href="logout">Sign Out</a></p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <hr>
                    <h4 class="text-info text-center">Dashboard</h4>
                    <hr>
                </div>
            </div>
            <p class="text-info col-lg-12">Add projects to database</p>

            {!! Form::open(['url'=>'dashboard/index/add', 'method'=>'post', 'role'=>'form']) !!}

            {!! Form::control('text','8 col-lg-offset-2','name',$errors,trans('front/dashboard.name')) !!}
            {!! Form::control('textarea','8 col-lg-offset-2','description',$errors,trans('front/dashboard.description')) !!}
            <div class="col-lg-offset-2 col-lg-8">
                <input type="checkbox" name="option" value="1" class="checkbox checkbox-inline"> &nbsp;{{trans('front/dashboard.details')}}
            </div>
            @if(session()->has('error'))
                <p class="col-lg-8 col-lg-offset-2 text-center" style="color: red">{{session('error')}}</p>
            @endif
            @if(session()->has('success'))
                <p class="col-lg-8 col-lg-offset-2 text-center">{{session('success')}}</p>
            @endif
            {!! Form::submits(trans('front/dashboard.save'),['col-lg-8 col-lg-offset-2 text-right'])  !!}

            {!! Form::close() !!}

            @if(empty($arrUser))
                <div class="col-lg-12">
                <p class="text-info text-center">No statistics data available related to the moodle android application. <br> Details will be displayed as soon as they available.</p>
                </div>
            @else
                <div class="row">
                    <div class="col-lg-12">
                        <hr>
                        <h4 class="text-info text-center">Moodle MobileApp Statistics</h4>
                        <hr>
                    </div>
                </div>

                <div class="col-lg-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Index Number</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Overall GPA</th>
                                <th>Usage</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($arrUser as $item)
                                <tr>
                                    <th scope="row">1</th>
                                    <td><a href="{{url('dashboard/index/view/'.$item['user_index'])}}" >{{$item['user_index']}}</a></td>
                                    <td>{{$item['first_name']}}</td>
                                    <td>{{$item['last_name']}}</td>
                                    <td>{{$item['gpa']}}</td>
                                    <td>{{$item['stat_count']}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </div>
@stop