@extends('layout.FrontLayout')

@section('body')
    <div class="container">
        <div class="box">
            <div class="col-lg-12">
                <div class="row">
                    <hr>
                    <h4 class="intro-text text-center">Slt Usage [ADSL]</h4>
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
                                <img src="{{asset('img/apps/sltusageapp1.png')}}" alt="">
                            </div>
                            <div class="item">
                                <img src="{{asset('img/apps/sltusageapp2.png')}}" alt="">
                            </div>
                            <div class="item">
                                <img src="{{asset('img/apps/sltusageapp3.png')}}" alt="">
                            </div>
                            <div class="item">
                                <img src="{{asset('img/apps/sltusageapp4.png')}}" alt="">
                            </div>
                            <div class="item">
                                <img src="{{asset('img/apps/sltusageapp5.png')}}" alt="">
                            </div>
                            <div class="item">
                                <img src="{{asset('img/apps/sltusageapp6.png')}}" alt="">
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
                        <p style="margin-top: 20px">
                            This is a mobile application implemented using android studio.
                            This app can be used to view SLT Broadband data usage in Srilanka.
                            This is very user friendly app so users can used it easily. App will be
                            saved usage at each time user log in and those data will be available
                            for user to get statistical idea about the monthly usage. however, this
                            history feature is not yet implemented yet and will be available in future
                            updates.
                        </p>
                        <p> Multiple users can log into the app at different times. The login information
                            are stored in the phone and will not share with outside. Furthermore, login
                            credentials are highly encrypted before insert them to the database. Once user
                            log in to the app, user can log in again without password later. User id text is
                            a auto complete input field and it helps user to select past login details
                            easily.
                            This app works only when it has an internet connection available
                            When user login to the app, usage details of SLT Data will be displayed under
                            three different categories; peak usage, off-peak usage, total usage. All the
                            definitions and details about the app will be available under help option.
                            Usage data will be accurate more than 95% as they are calculated with a custom
                            algorithm. App will be store usage information to give statistical details.
                            And there will be a graphical representation of the usage data as well. However,
                            Those two options are still developing and will be available with future
                            updates.
                            </p>
                        <pre>Github Link: <a href="https://github.com/prasannadeshappriya/SLT-Usage-App">https://github.com/prasannadeshappriya/SLT-Usage-App</a> </pre>

                    @else
                        <p>This is a mobile application implemented using android studio.
                            This app can be used to view SLT Broadband data usage in Srilanka.
                            This is very user friendly app so users can used it easily. App will be
                            saved usage at each time user log in and those data will be available
                            for user to get statistical idea about the monthly usage. however, this
                            history feature is not yet implemented yet and will be available in future
                            updates.</p>
                        <p> Multiple users can log into the app at different times. The login information
                            are stored in the phone and will not share with outside. Furthermore, login
                            credentials are highly encrypted before insert them to the database. Once user
                            log in to the app, user can log in again without password later. User id text is
                            a auto complete input field and it helps user to select past login details
                            easily.
                            This app works only when it has an internet connection available
                            When user login to the app, usage details of SLT Data will be displayed under
                            three different categories; peak usage, off-peak usage, total usage. All the
                            definitions and details about the app will be available under help option.
                            Usage data will be accurate more than 95% as they are calculated with a custom
                            algorithm. App will be store usage information to give statistical details.
                            And there will be a graphical representation of the usage data as well. However,
                            Those two options are still developing and will be available with future
                            updates.</p>
                        <pre>Github Link: <a href="https://github.com/prasannadeshappriya/SLT-Usage-App">https://github.com/prasannadeshappriya/SLT-Usage-App</a> </pre>
                    @endif
                    <br>
                </div>
            </div>
            <div class="col-lg-6 col-lg-offset-3 panel panel-default" style="margin-top: 40px">
                <div class="panel-body">
                    <a href="{{url('project/download/download app 3')}}"><p class="text-center">Download SLT Usage App</p></a>
                </div>
            </div>
        </div>
    </div>
@stop