@php use Illuminate\Support\Facades\Route;use Illuminate\Support\Facades\Storage;use Illuminate\Support\Str;@endphp
    <!DOCTYPE html>
<html lang="{{ Str::replace('-', '_', App::getLocale()) }}">
<head>
    <meta charset="UTF-8"/>
    <meta name="author" content="{{ $settings->author }}"/>
    <meta name="description" content="{{ $settings->description }}"/>
    <meta name="keywords" content="{{ $settings->keywords }}"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>
        @yield('title') | Innovat
    </title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset(Storage::url($settings->favicon)) }}"/>
    @vite([
    "public/front/css/plugins/fontawesome-6.css",
"public/front/css/plugins/swiper.min.css",
"public/front/css/vendor/magnific-popup.css",
"public/front/css/vendor/bootstrap.min.css",
"public/front/css/vendor/metismenu.css",
"public/front/css/style.css"
])
    <style>
        .single-working-prcess-one::after, .single-working-prcess-one::before, .separetor-process-top::after {
            display: none;
        }
    </style>
    @yield('css')
</head>
<body class="index-five">
<!-- header three area start -->
<header class="header-three five header--sticky" style="position: relative;">
    <a href="{{ route('home') }}" class="logo-area d-inline-block" style="width: 10%">
        <img src="{{ asset(Storage::url($settings->logo)) }}" alt="logo" class="w-100"/>
    </a>
    <div class="header-right">
        <div class="nav-area-center">
            <nav class="navigation">
                <ul class="parent-ul">
                    <li class="has-dropdown with-megamenu">
                        <a class="nav-link" href="{{ route('home') }}">
                            Home
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ route('about') }}">
                            About Us
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ route('services') }}">
                            Services
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ route('team') }}">
                            Our Team
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ route('contact') }}">
                            Contact
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ route('privacy') }}">
                            Privacy Policy
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="action-area" id="menu-btn">
            <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="16" viewBox="0 0 24 16" fill="none">
                    <rect x="6" width="18" height="2" fill="#D9D9D9"></rect>
                    <rect x="10" y="14" width="14" height="2" fill="#D9D9D9"></rect>
                    <rect y="7" width="24" height="2" fill="#D9D9D9"></rect>
                </svg>
            </div>
            <span>Menu</span>
        </div>
    </div>
</header>
<!-- header three area end -->
@yield('content')
<!-- rts footer area start -->
<div class="rts-footer-area bg-light social-jumpanimation">
    <div class="container">
        <div class="ptb--100 ptb_md--60 ptb_sm--50">
            <!-- footer-two wrapper -->
            <div class="footer-two-main-wrapper">
                <a href="{{ route('home') }}" class="logo d-inline-block mb--30" style="width: 10%">
                    <img src="{{ asset(Storage::url($settings->logo)) }}" alt="{{ $settings->title }}" class="w-100"/>
                </a>
                <div class="footer-two-main-wrapper-right">
                    <!-- single footer two wozed -->
                    <div class="single-footer-wized">
                        <div class="location-information">
                            <div class="location">
                                <p>
                                    {{ $contact->address }}
                                </p>
                            </div>
                            <div class="contact-call">
                                <a href="tel:{{ preg_replace('/\s+/','', $contact->phone) }}">
                                    {{ $contact->phone }}
                                </a>
                            </div>
                            <div class="contact-call">
                                <a href="mailto:{{ $contact->email }}">
                                    {{ $contact->email }}
                                </a>
                            </div>
                            @unless(Route::is('contact'))
                                <a href="{{ route('contact') }}" class="btn btn-secondary btn-lg rounded-pill fs-2 p-3">
                                    Bizimlə Əlaqə
                                </a>
                            @endunless
                        </div>
                    </div>
                    <!-- single footer two wozed -->
                </div>
            </div>
            <!-- footer-two wrapper end -->
        </div>
    </div>
    <div class="rts-copyright-area-two">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copy-right-area-inner-two">
                        <p class="disc">
                            &copy; <a href="{{ route('home') }}">
                                {{ $settings->title }}
                            </a> {{ date('Y') == 2024 ? 2024 : '2024 -' . date('Y') }}. Bütün hüquqlarımız qorunur.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- rts footer area end -->


<!-- search area start -->
<div class="search-input-area">
    <div class="container">
        <div class="search-input-inner">
            <div class="input-div">
                <input id="searchInput1" class="search-input" type="text" placeholder="Search by keyword or #">
                <button><i class="far fa-search"></i></button>
            </div>
        </div>
    </div>
    <div id="close" class="search-close-icon"><i class="far fa-times"></i></div>
</div>
<!-- search area end -->


<!-- back to top start -->
<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
    </svg>
</div>
<!-- back to top end -->


<!-- header style two -->
<div id="side-bar" class="side-bar header-two">
    <button class="close-icon-menu"><i class="far fa-times"></i></button>
    <!-- inner menu area desktop start -->
    <div class="inner-main-wrapper-desk">
        <div class="thumbnail">
            <img src="{{ asset(Storage::url($settings->logo)) }}" alt="Innovate">
        </div>
        <div class="inner-content">
            <div class="contact-information--sidebar">
                <h6 class="title">
                    Əlaqə məlumatları
                </h6>
                <div class="single-info">
                    <a href="tel:{{ preg_replace('/\s+/','', $contact->phone) }}">
                        {{ $contact->phone }}
                    </a>
                </div>
                <div class="single-info">
                    <a href="#">
                        {{ $contact->address }}
                    </a>
                </div>
                <div class="single-info">
                    <a href="mailto:{{ $contact->email }}">
                        {{ $contact->email }}
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- mobile menu area start -->
    <div class="mobile-menu-main">
        <nav class="nav-main mainmenu-nav mt--30">
            <ul class="mainmenu metismenu" id="mobile-menu-active">
                <li>
                    <a href="{{ route('home') }}" class="main">
                        Ana səhifə
                    </a>
                </li>
                <li>
                    <a class="main" href="{{ route('about') }}">
                        Haqqımızda
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="{{ route('services') }}">
                        Xidmətlərimiz
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="{{ route('contact') }}">
                        Əlaqə
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    <!-- mobile menu area end -->
</div>
<!-- header style two End -->
<div class="grid-line">
    <div class="grid-lines">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>
</div>
<!-- start loader -->
<div class="loader-wrapper">
    <div class="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>
<!-- End loader -->
<div id="anywhere-home"></div>
<!-- scripts -->
<script src="{{ asset("front/js/vendor/jquery.min.js")}}"></script>
<script src="{{ asset("front/js/vendor/waw.js")}}"></script>
<!-- gsap plugins -->
<script src="{{ asset("front/js/vendor/gsap.js")}}"></script>
<script src="{{ asset("front/js/vendor/metismenu.js")}}"></script>
<script src="{{ asset("front/js/plugins/scrolltiger.js")}}"></script>
<script src="{{ asset("front/js/plugins/scrolltoplugin.js")}}"></script>
<script src="{{ asset("front/js/plugins/smoothscroll.js")}}"></script>
<script src="{{ asset("front/js/plugins/splittext.js")}}"></script>
<!-- gsap plugins end-->
<script src="{{ asset("front/js/vendor/magnifying-popup.js")}}"></script>
<!-- swiper JS 10.2.0 -->
<script src="{{ asset("front/js/plugins/swiper.js")}}"></script>
<script src="{{ asset("front/js/plugins/counterup.js")}}"></script>
<script src="{{ asset("front/js/vendor/waypoint.js")}}"></script>
<script src="{{ asset("front/js/vendor/chroma.min.js")}}"></script>
<!-- bootstrap 5.0.2 -->
<script src="{{ asset("front/js/plugins/bootstrap.min.js")}}"></script>
<!-- dymanic Contact Form -->
<script src="{{ asset("front/js/plugins/contact.form.js")}}"></script>
<!-- main Js -->
<script src="{{ asset("front/js/main.js")}}"></script>
</body>
</html>
