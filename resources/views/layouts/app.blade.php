<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Amir Haghighati Maleki Homepage">
    <meta name="author" content="Amir Haghighati Maleki">

    <title>Amir H. M. Homepage @yield('title-extension')</title>

    <link rel="shortcut icon" href="favicon.ico">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body id="page-top">
    @include('includes.sidebar')
    <div class="container-fluid p-0">
        @yield('sections')
    </div>
    @include('includes.footer')
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
