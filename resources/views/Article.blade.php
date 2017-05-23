@extends('layout.FrontLayout')

@section('body')
    <div class="container">
        <div class="box">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="text-info">Send a server request from android mobile app</h4>
                    </div>
                    <div class="panel-body">
                        <p>Most of the android app need to communicate with a server to exchange information, data and etc.
                            For that purpose, android studio has a library called 'Volley' which helps us to make our work easier.
                            Volley library has many build in functions. This tutorial shows how to send information from mobile app to
                            server and vice versa. </p>
                        {{--<a href="{{url('article/android1')}}" class="btn btn-default center-block" style="width: 150px">Learn More</a>--}}
                        <a href="#" class="btn btn-default center-block" style="width: 150px">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="text-info">Create a website with laravel</h4>
                    </div>
                    <div class="panel-body">
                        <p class="col-lg-12">Laravel is a web application framework with expressive, elegant syntax. We believe development must
                            be an enjoyable and creative experience to be truly fulfilling. Laravel attempts to take the pain out
                            of development by easing common tasks used in the majority of web projects, such as:
                        </p>
                        <ul class="list-group col-lg-4 col-lg-offset-4">
                            <li class="list-group-item">Simple, fast routing engine.</li>
                            <li class="list-group-item">Powerful dependency injection container.</li>
                            <li class="list-group-item">Multiple back-ends for session and cache storage.</li>
                            <li class="list-group-item">Expressive, intuitive database ORM.</li>
                            <li class="list-group-item">Database agnostic schema migrations.</li>
                            <li class="list-group-item">Robust background job processing.</li>
                            <li class="list-group-item">Real-time event broadcasting.</li>
                        </ul>
                        <p class="col-lg-12">Laravel is accessible, yet powerful, providing tools needed for large, robust applications.
                            A superb combination of simplicity, elegance, and innovation give you tools you need to build
                            any application with which you are tasked.
                        </p>
                        <div class="col-lg-12">
                        <a href="#" class="btn btn-default center-block" style="width: 150px;">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
            {{--<div class="col-lg-12">--}}
                {{--<div class="panel panel-default">--}}
                    {{--<div class="panel-heading">--}}
                        {{--<h4 class="text-info">SMART DEVICE CONTROLLER</h4>--}}
                    {{--</div>--}}
                    {{--<div class="panel-body">--}}
                        {{--<p></p>--}}
                        {{--<a href="#" class="btn btn-default center-block" style="width: 150px">Learn More</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>
    </div>
@stop