@extends('layouts.app')

@section('content')

<div class="page-content">
    <div class="single-slider owl-carousel owl-no-dots">

        {{-- TODO COURSE LOOP--}}
        @foreach ($courses['data'] as $course)
        <div class="card card-style bg-19" data-card-height="300" style="background-image:url('{{ $course['thumbnail'] }}')">
            <a href="#">


                <div class="card-top">
                    <a href="#" data-menu="menu-cart" class="icon icon-s bg-white color-black rounded-xl p-2 mt-3 mr-2 float-right">ENROLL</a>
                </div>


                <div class="card-bottom mb-3 ml-3 mr-3">
                    <h1 class="color-white font-800 mb-n2">{{ $course['name'] }}</h1>
                    <p class="color-white font-14 mb-2 opacity-60">
                        ${{$course['price']}}
                    </p>
                </div>
            </a>
            <div class="card-overlay bg-black opacity-60"></div>
        </div>
        @endforeach
        {{-- TODO --}}
    </div>
    <div class=" mb-3">
        <h1 class="font-17"><a href="javascript:void()" class="px-3 color-theme">Blogs</a></h1>
    </div>
    <div class="double-slider owl-carousel owl-no-dots mb-4">

        {{-- TODO:: BLOG LOOP --}}
        @foreach ($blogs as $blog)
        <div>
            <div class="card m-0 card-style bg-20" style="background-image:url('{{ $blog['thumbnail'] }}')" data-card-height="250"></div>
            <h4>{{ $blog['title'] }}</h4>
            <span>{{ $blog['user']['name'] }}</span>
        </div>
        @endforeach
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
        @foreach ($teams as $team)

        <div class="card card-style bg-19" data-card-height="300">
            <a href="#">
                <div class="card-bottom mb-3 ml-3 mr-3">
                    <h1 class="color-white font-800 mb-n2">{{ $team['name'] }}</h1>
                    <p class="color-white font-14 mb-2 opacity-60">
                        {{ $team['position'] }}
                    </p>
                </div>
            </a>
            <div class="card-overlay bg-black opacity-60"></div>
        </div>
        @endforeach

        {{-- TODO --}}
    </div>

    {{-- CONTACT --}}

    <div class="card mb-n5" data-card-height="350">
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
                    <span>mail
                        @domain.com</span>
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
                    <span>
                        @iEnabled</span>
                        <i class="fa fa-link"></i>
                </a>
                <a href="#" class="border-0">
                    <i class="fab font-14 fa-linkedin color-linkedin"></i>
                    <span>
                        @Enabled</span>
                        <i class="fa fa-link"></i>
                </a>
            </div>
    </div>
</div>

@endsection
