@extends('layout.FrontLayout')

@section('body')
    <div class="container">
        <div class="box">
            <div class="col-lg-12">
                <div class="row">
                    <hr>
                    <h4 class="intro-text text-center">Train Schedule App</h4>
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
                            <li data-target="#myCarousel" data-slide-to="3"></li>
                            <li data-target="#myCarousel" data-slide-to="4"></li>
                            <li data-target="#myCarousel" data-slide-to="5"></li>
                            <li data-target="#myCarousel" data-slide-to="6"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="{{asset('img/apps/trainscheduleapp1.png')}}" alt="">
                            </div>
                            <div class="item">
                                <img src="{{asset('img/apps/trainscheduleapp2.png')}}" alt="">
                            </div>
                            <div class="item">
                                <img src="{{asset('img/apps/trainscheduleapp3.png')}}" alt="">
                            </div>
                            <div class="item">
                                <img src="{{asset('img/apps/trainscheduleapp4.png')}}" alt="">
                            </div>
                            <div class="item">
                                <img src="{{asset('img/apps/trainscheduleapp5.png')}}" alt="">
                            </div>
                            <div class="item">
                                <img src="{{asset('img/apps/trainscheduleapp6.png')}}" alt="">
                            </div>
                            <div class="item">
                                <img src="{{asset('img/apps/trainscheduleapp7.png')}}" alt="">
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
                            This app can provide services such as searching for train times,
                            searching for train rates, etc. Lanka gateway server is on maintenance for
                            most of the time, so users face problems for searching train times.
                            Hence, using this kind of app will make those problem solved easily.
                            Furthermore, this app will capable of giving offline results as well. Offline
                            results will be update whenever app has internet access.
                        </p>
                        <p> When user searching for a train schedule for the first time, App need internet
                            access to get the results from the server. Then those results will be stored
                            within the app and will be available when user searching again for same schedule
                            without internet connection. When the app has internet access, it will update
                            it's database for the latest results. This will increase the correctness of the
                            offline results. There are two options for search; next train and daily schedule.
                            Next train option will give next available train. Under train rates section,
                            user can get the information about
                            train ticket prices for various classes. Train rates section need internet access
                            to get the information. All the search history will be listed under history section.
                            User can view their search results without internet access. This app is still
                            under development. User can send a feedback at anytime about the functionality,
                            new ideas, etc. Feedback section need internet access.</p>
                        <pre>Github Link: <a href="https://github.com/prasannadeshappriya/TrainScheduleApp">https://github.com/prasannadeshappriya/TrainScheduleApp</a> </pre>

                    @else
                        <p>This is a mobile application implemented using android studio.
                            This app provide moodle services such as Submission dates,
                            Calendar, Course Details, etc. Student also can track their
                            attendance with this app. Furthermore, they can store their
                            module credits for semesters so that they can keep track of
                            their semester and overall GPA. App notification about
                            submission deadline will helpful for students to complete
                            them before deadline.</p>
                        <p> When user searching for a train schedule for the first time, App need internet
                            access to get the results from the server. Then those results will be stored
                            within the app and will be available when user searching again for same schedule
                            without internet connection. When the app has internet access, it will update
                            it's database for the latest results. This will increase the correctness of the
                            offline results. There are two options for search; next train and daily schedule.
                            Next train option will give next available train. Under train rates section,
                            user can get the information about
                            train ticket prices for various classes. Train rates section need internet access
                            to get the information. All the search history will be listed under history section.
                            User can view their search results without internet access. This app is still
                            under development. User can send a feedback at anytime about the functionality,
                            new ideas, etc. Feedback section need internet access.</p>
                        <pre>Github Link: <a href="https://github.com/prasannadeshappriya/TrainScheduleApp">https://github.com/prasannadeshappriya/TrainScheduleApp</a> </pre>
                    @endif
                    <br>
                </div>
            </div>
            <div class="col-lg-6 col-lg-offset-3 panel panel-default" style="margin-top: 40px">
                <div class="panel-body">
                    <a href="{{url('project/download/download app 2')}}"><p class="text-center">Download Train Schedule App</p></a>
                </div>
            </div>
        </div>
    </div>
@stop