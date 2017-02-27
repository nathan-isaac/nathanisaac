@extends('layouts.app')

@section('content')
    <header class="header">
        <div class="ni">Nathan Isaac</div>
        <div class="hello">
            <h1 class="hello-title">Hello! I'm a <strong>Full Stack Developer</strong> based in College Place, WA.</h1>
            <p class="hello-subtitle">Got a project? <a href="mailto:nathan@nathan-isaac.com" class="hello-link">Contact me</a></p>
        </div>
        <nav class="hello-nav">
            <a href="https://twitter.com/nisaac2fly" class="hello-nav-link is-icon is-twitter" title="Twitter">
                <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="https://github.com/nisaac2fly" class="hello-nav-link is-icon" title="Github">
                <i class="fa fa-github" aria-hidden="true"></i>
            </a>
            <a href="https://www.linkedin.com/in/nathanisaac" class="hello-nav-link is-icon" title="Linkedin">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
            </a>
            <a href="mailto:nathan@nathan-isaac.com" class="hello-nav-link is-icon" title="Email">
                <i class="fa fa-envelope-o" aria-hidden="true"></i>
            </a>

            {{--<a href="#" class="hello-nav-link is-projects">Projects</a>--}}
            {{--<a href="#" class="hello-nav-link is-articles">Articles</a>--}}
            {{--<a href="#" class="hello-nav-link is-favorites">Favorites</a>--}}
        </nav>
    </header>
@endsection