<!DOCTYPE html>
<html>
<head>
    <!-- To ensure proper rendering and touch zooming -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <title>Amir Haghighati</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/customized_bootstrap.css') }}" >

    <!-- setting favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" >

</head>
    <body>
        @section('sidebar')
            This is the master sidebar.
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
