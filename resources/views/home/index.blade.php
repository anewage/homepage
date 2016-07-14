@extends('layouts.master')


@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <div class="progress">
        <div class="indeterminate"></div>
    </div>

    <div class="container">
        <div class="row pink accent-3">
            <div class="col s1">1</div>
            <div class="col s1">2</div>
            <div class="col s1">3</div>
            <div class="col s1">4</div>
            <div class="col s1">5</div>
            <div class="col s1">6</div>
            <div class="col s1">7</div>
            <div class="col s1">8</div>
            <div class="col s1">9</div>
            <div class="col s1">10</div>
            <div class="col s1">11</div>
            <div class="col s1">12</div>
        </div>
        <div class="row">
            <div class="col s12">
                <p class="flow-text">This is my body content.</p>
                <ul id="dropdown" class="dropdown-content">
                    <li><a href="#!">one<span class="badge">1</span></a></li>
                    <li><a href="#!">two<span class="new badge">1</span></a></li>
                    <li><a href="#!">three</a></li>
                </ul>
                <a class="btn dropdown-button" href="#!" data-activates="dropdown">Dropdown<i class="mdi-navigation-arrow-drop-down right"></i></a>

            </div>
        </div>
    </div>

@endsection