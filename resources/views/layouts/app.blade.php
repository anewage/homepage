<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-109836446-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-109836446-1');
    </script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Amir Haghighati Maleki Homepage">
    <meta name="author" content="Amir Haghighati Maleki">
    <meta property="og:title" content="Amir H. M." />
    <meta property="og:title" content="Amir Haghighati Maleki's homepage and personal blog" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://amirhmaleki.ir" />
    <meta property="og:image" content="http://amirhmaleki.ir/favicon.svg" />

    <title>Amir H. M. Homepage @yield('title-extension')</title>

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('manifest.json') }}">
    <link rel="mask-icon" href="{{ asset('safari-pinned-tab.svg') }}" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" media="none" onload="if(media!='all')media='all'">
</head>
<body id="page-top">
    @include('includes.sidebar')
    <div class="container-fluid p-0" style="width: 100%">
        @yield('sections')
    </div>
{{--    @include('includes.footer')--}}
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        if ('serviceWorker' in navigator) {
            window.addEventListener('load', function() {
                navigator.serviceWorker.register('/service-worker.js');
            });
        }
    </script>
</body>
</html>
