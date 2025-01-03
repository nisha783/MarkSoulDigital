<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{env('APP_NAME')}}</title>
    <meta name="author" content="Asan Webs Development">
    <meta name="description" content="{{ env('APP_DESC') }}">
    <meta name="keywords" content="{{ env('APP_DESC') }}" />
    <meta name="robots" content="INDEX,FOLLOW">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="favi(1).png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('landing/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/layerslider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/magnific-popup.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/slick.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/css/style.css') }}">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-MQRF729Z95"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-MQRF729Z95');
    </script>

    @livewireStyles
    
    
</head>

<body>
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->
    <div class="preloader  ">
        <button class="vs-btn preloaderCls" style="background-color:   #1f6f78;">Cancel Preloader </button>
        <div class="preloader-inner">
            <img src="logo(1).png" alt="{{ env('APP_NAME') }}" width="350">
            <span class="loader" style="color:   #1f6f78;"></span>
        </div>
    </div>
    <div class="vs-menu-wrapper">
        <div class="vs-menu-area text-center">
            <button class="vs-menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo">
                <img src="logo.png" alt="{{ env('APP_NAME') }}" width="350">
            </div>
            <div class="vs-mobile-menu">
                @include('inc.nav')
            </div>
        </div>
    </div>
    <!--==============================
    Header Area
    ==============================-->
    <header class="vs-header header-layout5">
        <div class="header-top">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-sm-auto text-center">
                        <p class="header-text"><i class="fas fa-envelope-open-text" style="color:    #1f6f78;"></i>24 HOURS SERVICE - 7 DAYS A WEEK<span  class="ms-2" style="color: #1f6f78; font-size:15px;">+1 917-740-7612</span>
                        </p>
                    </div>
                    <div class="col-auto d-none d-sm-block">
                        <a href="{{ route('register') }}"
                            class="vs-btn style6" style="background-color:    #1f6f78;">Create Account</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-middle">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col">
                        <div class="header-logo">
                            <img src="logo(1).png" alt="{{ env('APP_NAME') }}" width="250">
                        </div>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <div class="row justify-content-between align-items-center gx-15">
                            <div class="col-auto">
                                <div class="media-style1 has-bg">
                                    <div class="media-icon"><i class="fal fa-map-marked-alt" style="color:   #1f6f78;"></i></div>
                                    <div class="media-body">
                                        <span class="media-label">Office Address</span>
                                        <p class="media-info">{{ env('APP_ADDRESS') }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="media-style1">
                                    <div class="media-icon"><i class="fal fa-at" style="color:   #1f6f78;"></i></div>
                                    <div class="media-body">
                                        <span class="media-label">Send Us Mail</span>
                                        <p class="media-info"><a href="mailto:{{ env('APP_EMAIL') }}"
                                                class="text-inherit">{{ env('APP_EMAIL') }}</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-auto d-block d-lg-none">
                        <button class="vs-menu-toggle"><i class="fal fa-bars"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class=" d-none d-lg-block">
            <div class="container-fluid">
                <div class="row  align-items-center justify-content-between">
                    @include('inc.nav')
                </div>
            </div>
        </div>
    </header>
    @yield('content')

    <footer class="footer-wrapper footer-layout2">
        <div class="footer-top"   style="background-color: #1f6f78;">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-10 col-xl-8">
                        <div class="newsletter-style1" >
                            <h2 class="newsletter-title h1 mt-5">Subscribe Newsletter</h2>
                            <p class="newsletter-text">Subscribe and get latest news and updates.</p>
                            <form action="{{ route('newsletter.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="email" placeholder="Enter your email address...">
                                    <button type="submit" class="vs-btn" style="background-color: #93e4c1;">Subscribe</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="widget-area">
                <div class="row justify-content-between">
                    <div class="col-md-6 col-xl-4">
                        <div class="widget footer-widget">
                            <h3 class="widget_title">Contact Us</h3>
                            <div class="footer-about">
                                <a href="tel:+56923162156" class="footer-number2" style="color: #1f6f78;">+1 917-740-7612</a>
                                <p class="footer-address"></p>
                                <a href="mailto:{{ env('APP_EMAIL') }}"
                                    class="footer-mail" href="info@metastockpair.com" style="color: #1f6f78;">info@metastockpair.com</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4">
                        <div class="  footer-widget">
                            <h3 class="widget_title">Useful Links</h3>
                            <div class="row">
                                <div class="col-auto">
                                    <div class="menu-all-pages-container">
                                        <ul class="list-unstyled">
                                            <li><a href="{{ route('index') }}" style="color: #1f6f78;">Home</a></li>
                                            <li><a href="{{ route('about') }}" style="color: #1f6f78;">About Us</a></li>
                                            <li><a href="{{ route('contact') }}" style="color: #1f6f78;">Contact Us</a></li>
                                            <li><a href="{{ route('register', ['refer' => 'admin', 'position' => 'left']) }}" style="color: #1f6f78;">Create Account</a></li>
                                            <li><a href="{{ route('login') }}" style="color: #1f6f78;">Sign In</a></li>
                                        </ul>

                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="menu-all-pages-container">
                                        @include('inc.footer-nav')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="widget footer-widget">
                            <div class="sidebar-gallery">
                                @for ($i = 1; $i < 10; $i++)
                                    <div class="gallery-thumb">
                                    <a href="#"><img
                                            src="{{ asset('landing/img/gallery/' . $i . '.jpg') }}"
                                            alt="Gallery Image" class="w-100">
                                    </a>
                            </div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="copyright-wrap" style="background-color:  #1f6f78;">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto d-none d-lg-block">
                        <div class="copyright-logo">
                            <a href="{{ route('index') }}">
                                <img src="{{ asset('brands/logo-light(1).png') }}" alt="{{ env('APP_NAME') }}"
                                    width="250">
                            </a>
                        </div>
                    </div>
                    <div class="text-center col-lg-auto">
                        <p class="copyright-text">Copyright <i class="fal fa-copyright"></i> {{ date('Y') }} <a
                                href="{{ route('index') }}">{{env('APP_NAME')}}</a> - All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <a href="#" class="scrollToTop scroll-btn"><i class="far fa-arrow-up"></i></a>

    <script src="{{ asset('landing/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('landing/js/slick.min.js') }}"></script>
    <script src="{{ asset('landing/js/layerslider.utils.js') }}"></script>
    <script src="{{ asset('landing/js/layerslider.transitions.js') }}"></script>
    <script src="{{ asset('landing/js/layerslider.kreaturamedia.jquery.js') }}"></script>
    <script src="{{ asset('landing/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('landing/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('landing/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('landing/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('landing/js/wow.min.js') }}"></script>
    <script src="{{ asset('landing/js/main.js') }}"></script>
    <x-alert />
    @livewireScripts
</body>

</html>