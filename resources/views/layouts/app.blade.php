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
    {{-- mix --}}
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="theme-light">
    <div id="app">

        {{-- preloader --}}
        <div id="preloader">
            <div class="spinner-border color-highlight" role="status"></div>
        </div>

        <div id="page">

          <div class="header header-fixed header-logo-center header-auto-show">
              <a href="{{ route('homepage') }}" class="header-title">Hasanik English</a>
              <a href="#" data-back-button class="header-icon header-icon-1"><i class="fas fa-chevron-left"></i></a>
              <a href="#" data-menu="menu-main" class="header-icon header-icon-4"><i class="fas fa-bars"></i></a>
              <a href="#" data-toggle-theme class="header-icon header-icon-3 show-on-theme-dark"><i class="fas fa-sun"></i></a>
              <a href="#" data-toggle-theme class="header-icon header-icon-3 show-on-theme-light"><i class="fas fa-moon"></i></a>
          </div>
          <div id="footer-bar" class="footer-bar-6">
              <router-link :to="{ name : 'courses' }"><i class="fa fa-layer-group"></i><span>Courses</span></router-link>
              <a href="index-pages.html" class=""><i class="fa fa-file"></i><span>Blogs</span></a>
              <a href="index.html" class="circle-nav active-nav"><i class="fa fa-home"></i><span>Welcome</span></a>
              <a href="index-projects.html"><i class="fa fa-camera"></i><span>Enrollment</span></a>
              <a href="#" data-menu="menu-main"><i class="fa fa-bars"></i><span>Menu</span></a>
          </div>
          <div class="page-title page-title-fixed">
              <h1>Hasanik English</h1>
              <a href="#" class="page-title-icon shadow-xl bg-theme color-theme" data-menu="menu-share"><i
                      class="fa fa-share-alt"></i></a>
              <a href="#" class="page-title-icon shadow-xl bg-theme color-theme show-on-theme-light" data-toggle-theme><i
                      class="fa fa-moon"></i></a>
              <a href="#" class="page-title-icon shadow-xl bg-theme color-theme show-on-theme-dark" data-toggle-theme><i
                      class="fa fa-lightbulb color-yellow-dark"></i></a>
              <a href="#" class="page-title-icon shadow-xl bg-theme color-theme" data-menu="menu-main"><i
                      class="fa fa-bars"></i></a>
          </div>

          <div class="page-title-clear"></div>


            @yield('content')
            {{-- Vue compo --}}
            <App></App>
            {{-- Vue compo --}}
        </div>
    </div>

    {{-- js --}}
    <script type="text/javascript" src="{{ asset('frontend/scripts/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/scripts/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/scripts/custom.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/scripts/main.js') }}"></script>
</body>
