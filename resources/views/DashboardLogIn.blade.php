@extends('layout.FrontLayout')

@section('body')
    <div class="container">
        <div class="box" style="height: 545px;">

            <div style="margin-top: 100px">
                <div class="col-lg-12" style="margin-bottom: 20px">
                    <h4 class="text-info text-center">Log in to continue</h4>
                </div>
                {!! Form::open(['url'=>'dashboard/login', 'method'=>'post', 'role'=>'form']) !!}
                <div class="row">
                    @if(isset($_COOKIE['username']))
                        {!! Form::control('text','6 col-lg-offset-3','username',$errors, trans('front/dashboard.username'),$_COOKIE['username']) !!}
                    @else
                        {!! Form::control('text','6 col-lg-offset-3','username',$errors, trans('front/dashboard.username')) !!}
                    @endif
                    {!! Form::control('password','6 col-lg-offset-3','password',$errors, trans('front/dashboard.password')) !!}
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <input type="checkbox" value="1" name="rem" class="checkbox checkbox-inline"> &nbsp; Remember Me
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-12">
                        @if(session()->has('error'))
                            <p class="text-info text-center" style="color: red">{{session('error')}}</p>
                        @endif
                        <input type="submit" value="{{trans('front/dashboard.signin')}}" class="center-block btn btn-default" style="width: 150px"/>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop