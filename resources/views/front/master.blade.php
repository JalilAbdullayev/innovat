@php use Illuminate\Support\Facades\Route;use Illuminate\Support\Facades\Storage;use Illuminate\Support\Str;@endphp
    <!DOCTYPE html>
<html lang="{{ Str::replace('-', '_', App::getLocale()) }}">
<head>
    <meta charset="UTF-8"/>
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <meta name="author" content="{{ $settings->translate->where('lang', session('locale'))->first()->author }}"/>
    <meta name="description" content="@yield('description', $settings->translate->where('lang', session('locale'))->first()->description)"/>
    <meta name="keywords"
          content="@yield('keywords') @unless(Route::is('home_'.session('locale'))) , @endunless {{ $settings->translate->where('lang', session('locale'))->first()->keywords
          }}"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>
        @yield('title', $settings->translate->where('lang', session('locale'))->first()->title)
    </title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset(Storage::url($settings->favicon)) }}"/>
    <link rel="stylesheet" href="{{ asset('front/css/plugins/fontawesome-6.css') }}"/>
    <link rel="stylesheet" href="{{ asset('front/css/plugins/swiper.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('front/css/vendor/magnific-popup.css') }}"/>
    <link rel="stylesheet" href="{{ asset('front/css/vendor/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('front/css/vendor/metismenu.css') }}"/>
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}"/>
    @vite(["public/front/css/custom.scss"])
    @yield('css')
</head>
<body class="index-five">
<!-- header three area start -->
<header class="header-three five header--sticky @unless(Route::is('contact_'.session('locale'))) mb--40 @endunless"
        style="position: relative;">
    <a href="{{ route('home_'.session('locale')) }}" class="logo-area d-inline-block">
        <img src="{{ asset(Storage::url($settings->logo)) }}" alt="logo"/>
    </a>
    <div class="header-right">
        <div class="nav-area-center d-lg-block">
            <nav class="navigation">
                <ul class="parent-ul">
                    <li>
                        <a class="nav-link" href="{{ route('home_'.session('locale')) }}">
                            Home
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ route('about_'.session('locale')) }}">
                            About Us
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ route('services_'.session('locale')) }}">
                            Services
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ route('team_'.session('locale')) }}">
                            Our Team
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ route('contact_'.session('locale')) }}">
                            Contact
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ route('privacy_'.session('locale')) }}">
                            Privacy Policy
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="action-area" id="menu-btn">
            <div class="icon d-lg-none">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="16" viewBox="0 0 24 16" fill="none">
                    <rect x="6" width="18" height="2" fill="#D9D9D9"></rect>
                    <rect x="10" y="14" width="14" height="2" fill="#D9D9D9"></rect>
                    <rect y="7" width="24" height="2" fill="#D9D9D9"></rect>
                </svg>
            </div>
            <span class="d-none">Menu</span>
        </div>
        <nav class="navigation d-sm-none d-lg-block">
            <ul class="parent-ul">
                <li>
                    <form action="{{ route('update-locale') }}">
                        <select name="locale" id="locale" class="text-white" onchange="updateLocale()">
                            <option value="en" @if(session('locale') === 'en') selected @endif class="bg-success">
                                English
                            </option>
                            <option value="az" @if(session('locale') === 'az') selected @endif class="bg-success">
                                Azərbaycanca
                            </option>
                            <option value="ru" @if(session('locale') === 'ru') selected @endif class="bg-success">
                                Русский
                            </option>
                        </select>
                    </form>
                </li>
            </ul>
        </nav>
    </div>
</header>
<!-- header three area end -->
@yield('content')
<!-- rts footer area start -->
<div class="rts-footer-area bg-light social-jumpanimation">
    <div class="container">
        <div class="ptb--40 ptb_md--60 ptb_sm--50">
            <!-- footer-two wrapper -->
            <div class="footer-two-main-wrapper">
                <div class="footer-two-main-wrapper-right">
                    <!-- single footer two wozed -->
                    <div class="single-footer-wized">
                        <a href="{{ route('home_'.session('locale')) }}" class="logo d-inline-block mb--30"
                           style="width:
                        10%">
                            <img src="{{ asset(Storage::url($settings->logo)) }}" alt="{{ $settings->title }}"/>
                        </a>
                        <!-- social style two -->
                        <ul class="social-style-two-wrapper social-anim">
                            <li><a class="counter__anim" href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a class="counter__anim" href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a class="counter__anim" href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                        </ul>
                        <!-- social style two end -->
                    </div>
                    <!-- single footer two wozed -->
                    <div class="single-footer-wized">
                        <div class="location-information">
                            <div class="location">
                                <h6 class="title text-white">
                                    Contact Us
                                </h6>
                            </div>
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
                        </div>

                    </div>
                    <div class="single-footer-wized">
                        <div class="location-information">
                            <div class="location">
                                <h6 class="title text-white">
                                    Navigation
                                </h6>
                            </div>
                            <ul>
                                <li>
                                    <a href="{{ route('home_'.session('locale')) }}">
                                        Home
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('about_'.session('locale')) }}">
                                        About Us
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('services_'.session('locale')) }}">
                                        Services
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('team_'.session('locale')) }}">
                                        Our Team
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('contact_'.session('locale')) }}">
                                        Contact
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('privacy_'.session('locale')) }}">
                                        Privacy Policy
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
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
                            &copy; <a href="{{ route('home_'.session('locale')) }}">
                                {{ $settings->translate->where('lang', session('locale'))->first()->title }}
                            </a> {{ date('Y') == 2024 ? 2024 : '2024 -' . date('Y') }}. Bütün hüquqlarımız qorunur.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- rts footer area end -->


<!-- header style two -->
<div id="side-bar" class="side-bar header-two">
    <button class="close-icon-menu"><i class="far fa-times"></i></button>
    <!-- mobile menu area start -->
    <div class="mobile-menu-main">
        <nav class="nav-main mainmenu-nav mt--30">
            <ul class="mainmenu metismenu" id="mobile-menu-active">
                <li>
                    <form action="{{ route('update-locale') }}">
                        <select name="locale" id="locale" onchange="updateLocale()" class="mob-select">
                            <option value="en" @if(session('locale') === 'en') selected @endif>
                                English
                            </option>
                            <option value="az" @if(session('locale') === 'az') selected @endif>
                                Azərbaycanca
                            </option>
                            <option value="ru" @if(session('locale') === 'ru') selected @endif>
                                Русский
                            </option>
                        </select>
                    </form>
                </li>
                <li>
                    <a href="{{ route('home_'.session('locale')) }}" class="main">
                        Home
                    </a>
                </li>
                <li>
                    <a class="main" href="{{ route('about_'.session('locale')) }}">
                        About Us
                    </a>
                </li>
                <li>
                    <a class="main" href="{{ route('services_'.session('locale')) }}">
                        Services
                    </a>
                </li>
                <li>
                    <a class="main" href="{{ route('team_'.session('locale')) }}">
                        Our Team
                    </a>
                </li>
                <li>
                    <a class="main" href="{{ route('contact_'.session('locale')) }}">
                        Contact
                    </a>
                </li>
                <li>
                    <a class="main" href="{{ route('privacy_'.session('locale')) }}">
                        Privacy Policy
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
<script>
    function updateLocale() {
        const locale = document.getElementById('locale').value;
        const csrfToken = document.head.querySelector('meta[name="csrf-token"]').content;

        fetch('{{ route('update-locale') }}?locale=' + locale, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrfToken
            }
        }).then(response => response.json()).then(data => {
            if(data.success) {
                window.location.href = '{{ url('/') }}/' + locale + '/';
            }
        });
    }
</script>
</body>
</html>
