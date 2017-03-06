<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>Prasanna Deshappriya</title>
    {{HTML::style('css/main.css')}}
</head>

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
                <li {!! classActivePath(['/','home']) !!}><a href="http://localhost:8000/home">Home</a> </li>
                <li {!! classActiveSegment(1,'project') !!}><a href="http://localhost:8000/project">Projects</a> </li>
                <li {!! classActiveSegment(1,'contact') !!}><a href="http://localhost:8000/contact/create">Contact</a> </li>
            </ul>
        </div>
    </nav>

    @yield('body')

    <footer>
        <p class="text-center"><small>Copyright &copy; Prasanna Deshappriya</small></p>
    </footer>
    {{HTML::script('js/app.js')}}
</header>


</html>
