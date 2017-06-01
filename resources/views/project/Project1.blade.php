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
                            <li data-target="#myCarousel" data-slide-to="3"></li>
                            <li data-target="#myCarousel" data-slide-to="4"></li>
                            <li data-target="#myCarousel" data-slide-to="5"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="{{asset('img/apps/moodleapp1.png')}}" alt="">
                            </div>
                            <div class="item">
                                <img src="{{asset('img/apps/moodleapp2.png')}}" alt="">
                            </div>
                            <div class="item">
                                <img src="{{asset('img/apps/moodleapp3.png')}}" alt="">
                            </div>
                            <div class="item">
                                <img src="{{asset('img/apps/moodleapp4.png')}}" alt="">
                            </div>
                            <div class="item">
                                <img src="{{asset('img/apps/moodleapp5.png')}}" alt="">
                            </div>
                            <div class="item">
                                <img src="{{asset('img/apps/moodleapp6.png')}}" alt="">
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
                        <p> User have to log in to the app using their moodle login details of University
                            of Moratuwa. Passwords are highly encrypted within the app.
                            Some data (except passwords) will be sync with a server for
                            statistical purposes. Some guide about the app is follows.
                            Course section contain all the courses
                            related to user up to now. Under GPA section, user can
                            store their course credits and calculate semester gpa. Then
                            GPA will be calculated automatically. There are two options to calculate
                            GPA. Those options are available on the settings section. Under calender section,
                            user can see all the events per given month. App will be display notifications
                            whenever user has an event. For some of the courses 80% attendance is
                            required by the lecturer. Attendance section helps user to track their
                            attendance information. They can store reasons for absent as well.</p>
                        <pre>Github Link: <a href="https://github.com/prasannadeshappriya/MobileAPP">https://github.com/prasannadeshappriya/MobileAPP</a> </pre>

                    @else
                        <p>This is a mobile application implemented using android studio.
                            This app provide moodle services such as Submission dates,
                            Calendar, Course Details, etc. Student also can track their
                            attendance with this app. Furthermore, they can store their
                            module credits for semesters so that they can keep track of
                            their semester and overall GPA. App notification about
                            submission deadline will helpful for students to complete
                            them before deadline.</p>
                        <p> User have to log in to the app using their moodle login details of University
                            of Moratuwa. Passwords are highly encrypted within the app.
                            Some data (except passwords) will be sync with a server for
                            statistical purposes. Some guide about the app is follows.
                            Course section contain all the courses
                            related to user up to now. Under GPA section, user can
                            store their course credits and calculate semester gpa. Then
                            GPA will be calculated automatically. There are two options to calculate
                            GPA. Those options are available on the settings section. Under calender section,
                            user can see all the events per given month. App will be display notifications
                            whenever user has an event. For some of the courses 80% attendance is
                            required by the lecturer. Attendance section helps user to track their
                            attendance information. They can store reasons for absent as well.</p>
                        <pre>Github Link: <a href="https://github.com/prasannadeshappriya/MobileAPP">https://github.com/prasannadeshappriya/MobileAPP</a> </pre>
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