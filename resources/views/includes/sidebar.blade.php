<?php
$sidebar = [
	"Blog" => route('blog::index') . '#blog',
	"About" => route('front::index') . '#about',
	"Education" => route('front::index') . '#education',
	"Experience" => route('front::index') . '#experience',
	"Interests" => route('front::index') . '#interests',
	"Honors" => route('front::index') . '#honors',
	"Extended C. V." => route('front::index') . '#cv',
]
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
    <a class="navbar-brand js-scroll-trigger" href="{{ route('front::index') }}#page-top">
        <span class="d-block d-lg-none">Amir H. M.</span>
        <span class="d-none d-lg-block">
          <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="{{ asset('img/amir.jpg') }}" alt="">
        </span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
            @if(isset($sidebar))
                @foreach($sidebar as $name => $link)
                    <li class="nav-item">
                        <a class="nav-link @if($name != 'Blog') js-scroll-trigger @endif" href="{{ $link }}">{{$name}}</a>
                    </li>
                @endforeach
            @endif
            @if (!Auth::guest())
                <li class="dropup nav-item">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu bg-dark" role="menu">
                        <li class="nav-item">
                            <a href="{{ route('admin::index') }}" class="nav-link">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('logout') }}" class="nav-link"
                               onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            @endif

        </ul>
    </div>
</nav>