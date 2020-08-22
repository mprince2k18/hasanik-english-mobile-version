@extends('layouts.app')

@section('content')
<div class="header header-fixed header-logo-center header-auto-show">
    <a href="index.html" class="header-title">Store</a>
    <a href="#" data-back-button class="header-icon header-icon-1"><i class="fas fa-chevron-left"></i></a>
    <a href="#" data-menu="menu-main" class="header-icon header-icon-4"><i class="fas fa-bars"></i></a>
    <a href="#" data-toggle-theme class="header-icon header-icon-3 show-on-theme-dark"><i class="fas fa-sun"></i></a>
    <a href="#" data-toggle-theme class="header-icon header-icon-3 show-on-theme-light"><i class="fas fa-moon"></i></a>
</div>
<div id="footer-bar" class="footer-bar-6">
    <a href="index-components.html"><i class="fa fa-layer-group"></i><span>Courses</span></a>
    <a href="index-pages.html" class="active-nav"><i class="fa fa-file"></i><span>Blogs</span></a>
    <a href="index.html" class="circle-nav"><i class="fa fa-home"></i><span>Welcome</span></a>
    <a href="index-projects.html"><i class="fa fa-camera"></i><span>Enrollment</span></a>
    <a href="#" data-menu="menu-main"><i class="fa fa-bars"></i><span>Menu</span></a>
</div>
<div class="page-title page-title-fixed">
    <h1>Store</h1>
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
<div class="page-content">
    <div class="single-slider owl-carousel owl-no-dots">

        {{-- TODO COURSE LOOP--}}
        <div class="card card-style bg-19" data-card-height="300">
            <a href="#">
                <div class="card-bottom mb-3 ml-3 mr-3">
                    <h1 class="color-white font-800 mb-n2">iPhone XL</h1>
                    <p class="color-white font-14 mb-2 opacity-60">
                        $1200
                    </p>
                </div>
            </a>
            <div class="card-overlay bg-black opacity-60"></div>
        </div>
        <div class="card card-style bg-18" data-card-height="300">
            <div class="card-top">
                <a href="#" data-menu="menu-heart"
                    class="icon icon-s bg-white color-red-dark rounded-xl mt-3 mr-3 float-right"><i
                        class="fa fa-heart"></i></a>
                <a href="#" data-menu="menu-cart"
                    class="icon icon-s bg-white color-black rounded-xl mt-3 mr-2 float-right"><i
                        class="fa fa-shopping-bag"></i></a>
            </div>
            <div class="card-bottom mb-3 ml-3 mr-3">
                <h1 class="color-white font-800 mb-n2">AirPods Pro</h1>
                <p class="color-white font-14 mb-2 opacity-60">
                    In Ear Headset with Wireless Charging Case
                </p>
            </div>
            <div class="card-overlay bg-black opacity-60"></div>
        </div>
        <div class="card card-style bg-17" data-card-height="300">
            <div class="card-top">
                <a href="#" data-menu="menu-heart"
                    class="icon icon-s bg-white color-red-dark rounded-xl mt-3 mr-3 float-right"><i
                        class="fa fa-heart"></i></a>
                <a href="#" data-menu="menu-cart"
                    class="icon icon-s bg-white color-black rounded-xl mt-3 mr-2 float-right"><i
                        class="fa fa-shopping-bag"></i></a>
            </div>
            <div class="card-bottom mb-3 ml-3 mr-3">
                <h1 class="color-white font-800 mb-n2">Beats Studio Headset</h1>
                <p class="color-white font-14 mb-2 opacity-60">
                    Over the hear high fidelity headphones.
                </p>
            </div>
            <div class="card-overlay bg-black opacity-60"></div>
        </div>
        {{-- TODO --}}
    </div>
    <div class=" mb-3">
        <h1 class="font-17"><a href="javascript:void()" class="px-3 color-theme">Blogs</a></h1>
    </div>
    <div class="double-slider owl-carousel owl-no-dots mb-4">

        {{-- TODO:: BLOG LOOP --}}
        <div>
            <div class="card m-0 card-style bg-20" data-card-height="250"></div>
            <h4>Studio <br>Microphone</h4>
        </div>
        {{-- TODO:: BLOG LOOP --}}
      
    </div>
    <div class="divider divider-margins"></div>

    
{{-- ABOUT --}}

    <div class="row mb-0">
    <div class="col-6 pr-0">
    <div class="card card-style">
    <img src="{{ asset('frontend/images/pictures/21.jpg') }}" class="img-fluid">
    <div class="card-center text-center">
            <a href="#" class="btn btn-border btn-m font-700 mt-4 bg-white color-black">About Us</a>
        </div>
    </div>
    </div>
    <div class="col-6 pl-0">
    <div class="card card-style">
    <img src="{{ asset('frontend/images/pictures/22.jpg') }}" class="img-fluid">
        <div class="card-center text-center">
            <a href="#" class="btn btn-border btn-m font-700 mt-4 bg-white color-black">Our Mission</a>
        </div>
    </div>
    </div>
    </div>


    {{-- TODO:: TEAM --}}
    <div class="single-slider owl-carousel owl-no-dots">

        {{-- TODO COURSE LOOP--}}
        <div class="card card-style bg-19" data-card-height="300">
            <a href="#">
                <div class="card-bottom mb-3 ml-3 mr-3">
                    <h1 class="color-white font-800 mb-n2">Mohammad Prince</h1>
                    <p class="color-white font-14 mb-2 opacity-60">
                        Software Engineer
                    </p>
                </div>
            </a>
            <div class="card-overlay bg-black opacity-60"></div>
        </div>
        <div class="card card-style bg-18" data-card-height="300">
            <div class="card-top">
                <a href="#" data-menu="menu-heart"
                    class="icon icon-s bg-white color-red-dark rounded-xl mt-3 mr-3 float-right"><i
                        class="fa fa-heart"></i></a>
                <a href="#" data-menu="menu-cart"
                    class="icon icon-s bg-white color-black rounded-xl mt-3 mr-2 float-right"><i
                        class="fa fa-shopping-bag"></i></a>
            </div>
            <div class="card-bottom mb-3 ml-3 mr-3">
                <h1 class="color-white font-800 mb-n2">AirPods Pro</h1>
                <p class="color-white font-14 mb-2 opacity-60">
                    In Ear Headset with Wireless Charging Case
                </p>
            </div>
            <div class="card-overlay bg-black opacity-60"></div>
        </div>
        <div class="card card-style bg-17" data-card-height="300">
            <div class="card-top">
                <a href="#" data-menu="menu-heart"
                    class="icon icon-s bg-white color-red-dark rounded-xl mt-3 mr-3 float-right"><i
                        class="fa fa-heart"></i></a>
                <a href="#" data-menu="menu-cart"
                    class="icon icon-s bg-white color-black rounded-xl mt-3 mr-2 float-right"><i
                        class="fa fa-shopping-bag"></i></a>
            </div>
            <div class="card-bottom mb-3 ml-3 mr-3">
                <h1 class="color-white font-800 mb-n2">Beats Studio Headset</h1>
                <p class="color-white font-14 mb-2 opacity-60">
                    Over the hear high fidelity headphones.
                </p>
            </div>
            <div class="card-overlay bg-black opacity-60"></div>
        </div>
        {{-- TODO --}}
    </div>


    {{-- CONTACT --}}

    <div class="card card-fixed mb-n5" data-card-height="350">
        <div class="map-full">
        <iframe src="https://maps.google.com/?ie=UTF8&amp;ll=47.595131,-122.330414&amp;spn=0.006186,0.016512&amp;t=h&amp;z=17&amp;output=embed"></iframe>
        </div>
        </div>

        <div class="card card-clear" data-card-height="350"></div>

<div class="drag-line"></div>
<div class="content">
<h1>Contact Us</h1>
<p>




<div class="divider mt-4"></div>

<h3 class="font-700">Envato Headquarters</h3>
<p class="pb-0 mb-0">121 King Street, Melbourne</p>
<p class="pb-0 mb-0">PO Box 16122 Collins Street West</p>
<p class="pb-0">Victoria 3000 Australia</p>
<div class="list-group list-custom-small">
<a href="tel:+1 234 567 890">
<i class="fa font-14 fa-phone color-phone"></i>
<span>+1 234 567 8900</span>
<span class="badge bg-highlight">TAO TO CALL</span>
<i class="fa fa-angle-right"></i>
</a>
<a href="mailto:mail@domain.com">
<i class="fa font-14 fa-envelope color-mail"></i>
<span>mail@domain.com</span>
<span class="badge bg-highlight">TAO TO MAIL</span>
<i class="fa fa-angle-right"></i>
</a>
<a href="https://www.facebook.com/enabled.labs/">
<i class="fab font-14 fa-facebook color-facebook"></i>
<span>enabled.labs</span>
<i class="fa fa-link"></i>
</a>
<a href="https://twitter.com/iEnabled">
<i class="fab font-14 fa-twitter-square color-twitter"></i>
<span>@iEnabled</span>
<i class="fa fa-link"></i>
</a>
<a href="#" class="border-0">
<i class="fab font-14 fa-linkedin color-linkedin"></i>
<span>@Enabled</span>
<i class="fa fa-link"></i>
</a>
</div>
</div>


@endsection
