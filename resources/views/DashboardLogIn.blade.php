@extends('layout.FrontLayout')

@section('body')
    <div class="container">
        <div class="box">
            {!! Form::open(['url'=>'dashboard/login', 'method'=>'post', 'role'=>'form']) !!}
                <div class="row">
                {!! Form::control('text','6 col-lg-offset-3','username',$errors, trans('front/dashboard.username')) !!}
                {!! Form::control('password','6 col-lg-offset-3','password',$errors, trans('front/dashboard.password')) !!}
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-12">
                        @if(session()->has('error'))
                            <p class="text-info text-center">{{session('error')}}</p>
                        @endif
                        <input type="submit" value="{{trans('front/dashboard.signin')}}" class="center-block btn btn-default" style="width: 150px"/>
                    </div>
                </div>
            {!! Form::close() !!}

        </div>
    </div>
@stop