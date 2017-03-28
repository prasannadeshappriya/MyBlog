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
        </div>
    </div>
@stop