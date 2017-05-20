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
                    <h4 class="text-info text-center">Details of user {{$userDetails}}</h4>
                    <hr>
                </div>
            </div>

            @if(empty($sgpaArr))
                <div class="col-lg-12">
                    <p class="text-info text-center" style="margin-bottom: 300px">No statistics data available related to the user. <br> Details will be displayed as soon as they available.</p>
                </div>
            @else
                <div class="col-lg-4 col-lg-offset-4">
                    <table class="table table-bordered table-responsive">
                        <thead>
                        <tr>
                            <th>Semester</th>
                            <th>SGPA</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($sgpaArr as $item)
                            <tr>
                                <td>{{$item['semester']}}</td>
                                <td>{{$item['sgpa']}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                @if(empty($courseDetails))
                    <div class="col-lg-12">
                        <p class="text-info text-center" style="margin-bottom: 300px">No statistics data available related to the user. <br> Details will be displayed as soon as they available.</p>
                    </div>
                @else
                    @foreach($arrSemester as $semester)
                        <h4 class="text-info col-lg-12 text-center"> Semester {{$semester}}</h4>
                        <div class="col-lg-12">
                            <table class="table table-bordered table-responsive" style="margin-bottom: 50px">
                                <thead>
                                <tr>
                                    <th>Code</th>
                                    <th>Module Name</th>
                                    <th>Credit</th>
                                    <th>Grade</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($courseDetails  as $item)
                                    @if($item['semester']==$semester)
                                        <tr>
                                            <td width="150px">{{$item['code']}}</td>
                                            <td width="700px">{{$item['module_name']}}</td>
                                            <td width="80px">{{$item['credits']}}</td>
                                            <td>{{$item['grade']}}</td>
                                        </tr>
                                    @endif
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endforeach
                @endif
            @endif
        </div>
    </div>
@stop