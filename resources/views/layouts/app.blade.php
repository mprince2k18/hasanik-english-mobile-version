<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <title>Hasanik English</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/styles/bootstrap.css') }}">
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    
    {{-- css --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/fonts/css/fontawesome-all.min.css') }}">
    <link rel="manifest" href="_manifest.json" data-pwa-version="set_in_manifest_and_pwa_js">
    <link rel="apple-touch-icon" sizes="180x180" href="app/icons/icon-192x192.png">

    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="theme-light">
    <div id="app">

        {{-- preloader --}}
        <div id="preloader">
            <div class="spinner-border color-highlight" role="status"></div>
        </div>

        <div id="page">

            @yield('content')
            {{-- Vue compo --}}
            <App></App>
            {{-- Vue compo --}}
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('frontend/scripts/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/scripts/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/scripts/custom.js') }}"></script>
</body>
