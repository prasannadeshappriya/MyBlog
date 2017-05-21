<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    <nav class="navbar navbar-default" role="navigation">
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
                <li {!! classActiveSegment(1,'article') !!}><a href="{{url('article')}}">Articles</a> </li>
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

    <footer class="footer">
        <p class="text-center"><small>Copyright &copy; Prasanna Deshappriya</small></p>
    </footer>

    {{HTML::script('js/app.js')}}
</header>
</body>
</html>
