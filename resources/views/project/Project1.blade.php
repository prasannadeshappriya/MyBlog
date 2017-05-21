@extends('layout.FrontLayout')

@section('body')
    <div class="container">
        <div class="box">
            <div class="col-lg-12">
                <div class="row">
                    <hr>
                    <h4 class="intro-text text-center">Mobile App Project</h4>
                    <hr>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="col-lg-3">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="{{asset('img/apps/moodleapp1.png')}}" alt="Los Angeles">
                            </div>
                            <div class="item">
                                <img src="{{asset('img/apps/moodleapp2.png')}}" alt="Chicago">
                            </div>
                            <div class="item">
                                <img src="{{asset('img/apps/moodleapp3.png')}}" alt="New York">
                            </div>
                            <div class="item">
                                <img src="{{asset('img/apps/moodleapp4.png')}}" alt="New York">
                            </div>
                            <div class="item">
                                <img src="{{asset('img/apps/moodleapp5.png')}}" alt="New York">
                            </div>
                            <div class="item">
                                <img src="{{asset('img/apps/moodleapp6.png')}}" alt="New York">
                            </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-9">
                    @if($agent->isMobile())
                    <p style="margin-top: 20px">This is a mobile application implemented using android studio.
                        This app provide moodle services such as Submission dates,
                        Calendar, Course Details, etc. Student also can track their
                        attendance with this app. Furthermore, they can store their
                        module credits for semesters so that they can keep track of
                        their semester and overall GPA. App notification about
                        submission deadline will helpful for students to complete
                        them before deadline.</p>
                    @else
                        <p>This is a mobile application implemented using android studio.
                            This app provide moodle services such as Submission dates,
                            Calendar, Course Details, etc. Student also can track their
                            attendance with this app. Furthermore, they can store their
                            module credits for semesters so that they can keep track of
                            their semester and overall GPA. App notification about
                            submission deadline will helpful for students to complete
                            them before deadline.</p>
                    @endif
                    <br>
                </div>
            </div>
            <div class="col-lg-6 col-lg-offset-3 panel panel-default" style="margin-top: 40px">
                <div class="panel-body">
                    <a href="{{url('project/download/download app 1')}}"><p class="text-center">Download Moodle Mobile App</p></a>
                </div>
            </div>
        </div>
    </div>
@stop