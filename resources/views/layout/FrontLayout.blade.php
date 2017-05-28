<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="description" content="Personal Website">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Prasanna, Deshappriya, Prasanna Deshappriya, UOM, University of Moratuwa, Moodle, Moodle Mobile App, Mobile App, Android">
    <meta name="author" content="Prasanna Deshappriya">
    <title>Prasanna Deshappriya</title>
    {{HTML::style('css/main.css')}}
    {!! HTML::script('js/vendor/respond.min.js') !!}
    {!! HTML::style('https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js') !!}
    {!! HTML::style('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js') !!}
    <link rel="shortcut icon" href="{{asset('img/icon.png')}}">
</head>
<body>
<header role="banner">
    <div class="brand">Prasanna Deshappriya</div>
    <div class="address-bar">Software Engineer</div>
    <nav class="navbar navbar-default" role="navigation" style="background-color: rgba(229,229,229, 0.70); margin-bottom: 40px">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#CollapseNav1">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="home" class="navbar-brand">Prasanna Deshappriya</a>
        </div>
        <div class="collapse navbar-collapse" id="CollapseNav1">
            <ul class="nav navbar-nav">
                <li {!! classActivePath(['/','home']) !!}><a href="{{url('home')}}">Home</a> </li>
                <li {!! classActiveSegment(1,'article') !!}><a href="{{url('article')}}">Tutorials</a> </li>
                <li {!! classActiveSegment(1,'project') !!}><a href="{{url('project')}}">Projects</a> </li>
                <li {!! classActiveSegment(1,'contact') !!}><a href="{{url('contact/create')}}">Contact</a> </li>
                @if(session()->has('status'))
                    @if(session('status')==='admin')
                        <li {!! classActiveSegment(1,'dashboard') !!}><a href="{{url('dashboard/index')}}">Dashboard</a> </li>
                    @endif
                @endif
            </ul>
        </div>
    </nav>


    @yield('body')
    <footer class="footer" style="background-color: rgba(229,229,229, 0.70); margin-top: 210px">
        <p class="text-center">
            <a href="https://www.facebook.com/prasanna322">
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     width="32px" height="32px" viewBox="0 0 32 32" enable-background="new 0 0 32 32" xml:space="preserve">
                        <path id="White_2_" fill="#444444" d="M30.7,0H1.3C0.6,0,0,0.6,0,1.3v29.3C0,31.4,0.6,32,1.3,32H17V20h-4v-5h4v-4
                            c0-4.1,2.6-6.2,6.3-6.2C25.1,4.8,26.6,5,27,5v4.3l-2.6,0c-2,0-2.5,1-2.5,2.4V15h5l-1,5h-4l0.1,12h8.6c0.7,0,1.3-0.6,1.3-1.3V1.3
                            C32,0.6,31.4,0,30.7,0z"/>
                    </svg>
            </a>
            &nbsp;&nbsp;
            <a href="https://github.com/prasannadeshappriya">
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     width="32px" height="32px" viewBox="0 0 32 32" enable-background="new 0 0 32 32" xml:space="preserve">
                        <path fill-rule="evenodd" clip-rule="evenodd" fill="#444444" d="M16,0.4c-8.8,0-16,7.2-16,16c0,7.1,4.6,13.1,10.9,15.2
                            c0.8,0.1,1.1-0.3,1.1-0.8c0-0.4,0-1.4,0-2.7c-4.5,1-5.4-2.1-5.4-2.1c-0.7-1.8-1.8-2.3-1.8-2.3c-1.5-1,0.1-1,0.1-1
                            c1.6,0.1,2.5,1.6,2.5,1.6c1.4,2.4,3.7,1.7,4.7,1.3c0.1-1,0.6-1.7,1-2.1c-3.6-0.4-7.3-1.8-7.3-7.9c0-1.7,0.6-3.2,1.6-4.3
                            c-0.2-0.4-0.7-2,0.2-4.2c0,0,1.3-0.4,4.4,1.6c1.3-0.4,2.6-0.5,4-0.5c1.4,0,2.7,0.2,4,0.5C23.1,6.6,24.4,7,24.4,7
                            c0.9,2.2,0.3,3.8,0.2,4.2c1,1.1,1.6,2.5,1.6,4.3c0,6.1-3.7,7.5-7.3,7.9c0.6,0.5,1.1,1.5,1.1,3c0,2.1,0,3.9,0,4.4
                            c0,0.4,0.3,0.9,1.1,0.8C27.4,29.5,32,23.5,32,16.4C32,7.6,24.8,0.4,16,0.4z"/>
                    </svg>
            </a>
            &nbsp;&nbsp;
            <a href="https://twitter.com/Prasanna322?lang=en">
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     width="32px" height="32px" viewBox="0 0 32 32" enable-background="new 0 0 32 32" xml:space="preserve">
                        <path fill="#444444" d="M32,6.1c-1.2,0.5-2.4,0.9-3.8,1c1.4-0.8,2.4-2.1,2.9-3.6c-1.3,0.8-2.7,1.3-4.2,1.6C25.7,3.8,24,3,22.2,3
                            c-3.6,0-6.6,2.9-6.6,6.6c0,0.5,0.1,1,0.2,1.5C10.3,10.8,5.5,8.2,2.2,4.2c-0.6,1-0.9,2.1-0.9,3.3c0,2.3,1.2,4.3,2.9,5.5
                            c-1.1,0-2.1-0.3-3-0.8c0,0,0,0.1,0,0.1c0,3.2,2.3,5.8,5.3,6.4c-0.6,0.1-1.1,0.2-1.7,0.2c-0.4,0-0.8,0-1.2-0.1
                            c0.8,2.6,3.3,4.5,6.1,4.6c-2.2,1.8-5.1,2.8-8.2,2.8c-0.5,0-1.1,0-1.6-0.1C2.9,27.9,6.4,29,10.1,29c12.1,0,18.7-10,18.7-18.7
                            c0-0.3,0-0.6,0-0.8C30,8.5,31.1,7.4,32,6.1z"/>
                    </svg>
            </a>
            &nbsp;&nbsp;
            <a href="https://www.linkedin.com/in/prasanna-deshappriya">
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     width="32px" height="32px" viewBox="0 0 32 32" enable-background="new 0 0 32 32" xml:space="preserve">
                        <path fill="#444444" d="M30.7,0H1.3C0.6,0,0,0.6,0,1.3v29.3C0,31.4,0.6,32,1.3,32h29.3c0.7,0,1.3-0.6,1.3-1.3V1.3
                            C32,0.6,31.4,0,30.7,0z M9.5,27.3H4.7V12h4.8V27.3z M7.1,9.9c-1.5,0-2.8-1.2-2.8-2.8c0-1.5,1.2-2.8,2.8-2.8c1.5,0,2.8,1.2,2.8,2.8
                            C9.9,8.7,8.6,9.9,7.1,9.9z M27.3,27.3h-4.7v-7.4c0-1.8,0-4-2.5-4c-2.5,0-2.8,1.9-2.8,3.9v7.6h-4.7V12H17v2.1h0.1
                            c0.6-1.2,2.2-2.5,4.5-2.5c4.8,0,5.7,3.2,5.7,7.3V27.3z"/>
                    </svg>
            </a><br>
        <small>Copyright &copy; Prasanna Deshappriya</small></p>

    </footer>

    {{HTML::script('js/app.js')}}
</header>
</body>
</html>
