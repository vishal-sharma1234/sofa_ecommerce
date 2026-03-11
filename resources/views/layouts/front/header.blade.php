<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="icon" href="{{ asset('images/logos/elite.png') }}" type="image/x-icon" />
    <link rel="stylesheet" type="text/css"
        href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700%7CLato%7CKalam:300,400,700" />
    <link rel="stylesheet" href="{{ asset('front/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/css/fonts.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/css/globle_styles.css') }}" />

    {{-- <link rel="stylesheet" href="{{ asset('front/css/all.min.css') }}" /> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    {{-- <link rel="stylesheet" href="{{ asset('front/css/bootstrap-icons.css') }}" /> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font/css/materialdesignicons.min.css">
    

    <link rel="stylesheet" href="{{ asset('backend/vendor/libs/toastr/toastr.css') }}">


</head>

<body>
    <div class="preloader">
        <div class="preloader-body">
            <div class="cssload-box-loading"></div>
        </div>
    </div>

    <div class="page">
        <!-- Page Header-->
        <header class="section page-header">
            <!-- RD Navbar-->
            <div class="rd-navbar-wrap">
                <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed"
                    data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed"
                    data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed"
                    data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static"
                    data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static"
                    data-lg-stick-up-offset="100px" data-xl-stick-up-offset="100px" data-xxl-stick-up-offset="100px"
                    data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
                    <div class="rd-navbar-main-outer">
                        <div class="rd-navbar-main">
                            <!-- RD Navbar Panel-->
                            <div class="rd-navbar-panel">
                                <!-- RD Navbar Toggle-->
                                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap">
                                    <span></span>
                                </button>
                                <!-- RD Navbar Brand-->
                                <div class="rd-navbar-brand">
                                    <!--Brand--><a class="brand" href="/"><img class="brand-logo-dark"
                                            src="{{ asset('images/logo-default-210x88.png') }}" alt=""
                                            width="105" height="44" /><img class="brand-logo-light"
                                            src="{{ asset('images/logo-inverse-212x88.png') }}" alt=""
                                            width="106" height="44" /></a>
                                </div>
                            </div>
                            <div class="rd-navbar-nav-wrap">
                                <!-- RD Navbar Nav-->
                                <ul class="rd-navbar-nav">
                                    <li class="rd-nav-item {{ request()->is('/') ? 'active' : '' }}">
                                        <a class="rd-nav-link" href="/">Home</a>
                                    </li>

                                    <li class="rd-nav-item {{ Route::is('front.products') ? 'active' : '' }}">
                                        <a class="rd-nav-link" href="{{ route('front.products') }}">Shop</a>
                                    </li>
                                    <li class="rd-nav-item {{ Route::is('front.what.we.offer') ? 'active' : '' }}">
                                        <a class="rd-nav-link" href="{{ route('front.what.we.offer') }}">What We
                                            Offer</a>
                                    </li>
                                    <li class="rd-nav-item {{ Route::is('front.contact.us') ? 'active' : '' }}">
                                        <a class="rd-nav-link" href="{{ route('front.contact.us') }}">Contact Us</a>
                                    </li>
                                    <li
                                        class="rd-nav-item {{ Route::is('front.about.us') || Route::is('front.blogs') || Route::is('front.comming.soon') || Route::is('front.testimonials') || Route::is('front.privacy.policy') ? 'active' : '' }}">
                                        <a class="rd-nav-link" href="#">Explore More</a>
                                        <!-- RD Navbar Dropdown-->
                                        <ul class="rd-menu rd-navbar-dropdown">
                                            <li class="rd-dropdown-item">
                                                <a class="rd-dropdown-link" href="{{ route('front.about.us') }}">
                                                    About Us
                                                </a>
                                            </li>
                                            <li class="rd-dropdown-item">
                                                <a class="rd-dropdown-link" href="{{ route('front.blogs') }}">
                                                    Blog
                                                </a>
                                            </li>
                                            <li class="rd-dropdown-item">
                                                <a class="rd-dropdown-link"
                                                    href="{{ route('front.comming.soon') }}">Comming Soon</a>
                                            </li>
                                            {{-- <li class="rd-dropdown-item">
                                                <a class="rd-dropdown-link"
                                                    href="{{ route('front.testimonials') }}">Testimonials</a>
                                            </li> --}}
                                            <li class="rd-dropdown-item">
                                                <a class="rd-dropdown-link"
                                                    href="{{ route('front.privacy.policy') }}">Privacy Policy</a>
                                            </li>
                                        </ul>
                                    </li>

                                </ul>
                            </div>
                            <div class="rd-navbar-main-element">
                                <!-- RD Navbar Search-->
                                {{-- <div class="rd-navbar-search rd-navbar-search-2">
                                    <button class="rd-navbar-search-toggle rd-navbar-fixed-element-3"
                                        data-rd-navbar-toggle=".rd-navbar-search">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </button>
                                    <form class="rd-search" action="search-results.html"
                                        data-search-live="rd-search-results-live" method="GET">
                                        <div class="form-wrap">
                                            <label class="form-label"
                                                for="rd-navbar-search-form-input">Search...</label>
                                            <input class="rd-navbar-search-form-input form-input"
                                                id="rd-navbar-search-form-input" type="text" name="s"
                                                autocomplete="off" />
                                            <div class="rd-search-results-live" id="rd-search-results-live"></div>
                                            <button class="rd-search-form-submit fl-bigmug-line-search74"
                                                type="submit"></button>
                                        </div>
                                    </form>
                                </div> --}}
                                <!-- RD Navbar Basket-->
                                <div class="rd-navbar-basket-wrap">
                                    <a href="{{ route('front.shopping.cart') }}" style="font-size: x-large;">
                                        {{-- <button class="rd-navbar-basket" data-rd-navbar-toggle=".cart-inline"> --}}
                                            {{-- <span>2</span> --}}
                                            <i class="fa fa-shopping-bag"></i>
                                        {{-- </button> --}}
                                    </a>
                                    {{-- <div class="cart-inline">
                                        <div class="cart-inline-header">
                                            <h5 class="cart-inline-title">
                                                In cart:<span> 2</span> Products
                                            </h5>
                                            <h6 class="cart-inline-title">
                                                Total price:<span> $37</span>
                                            </h6>
                                        </div>
                                        <div class="cart-inline-body">
                                            <div class="cart-inline-item">
                                                <div class="unit unit-spacing-sm align-items-center">
                                                    <div class="unit-left">
                                                        <a class="cart-inline-figure" href="single-product.html"><img
                                                                src="{{ asset('images/product-mini-6-100x90.png') }}"
                                                                alt="" width="100" height="90" /></a>
                                                    </div>
                                                    <div class="unit-body">
                                                        <h6 class="cart-inline-name">
                                                            <a href="single-product.html">WHITE CLUB CHAIR</a>
                                                        </h6>
                                                        <div>
                                                            <div class="group-xs group-middle">
                                                                <div class="table-cart-stepper">
                                                                    <input class="form-input" type="number"
                                                                        data-zeros="true" value="1"
                                                                        min="1" max="1000" />
                                                                </div>
                                                                <h6 class="cart-inline-title">$20.00</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cart-inline-item">
                                                <div class="unit unit-spacing-sm align-items-center">
                                                    <div class="unit-left">
                                                        <a class="cart-inline-figure" href="single-product.html"><img
                                                                src="{{ asset('images/product-mini-7-100x90.png') }}"
                                                                alt="" width="100" height="90" /></a>
                                                    </div>
                                                    <div class="unit-body">
                                                        <h6 class="cart-inline-name">
                                                            <a href="single-product.html">PENDANT LAMP</a>
                                                        </h6>
                                                        <div>
                                                            <div class="group-xs group-middle">
                                                                <div class="table-cart-stepper">
                                                                    <input class="form-input" type="number"
                                                                        data-zeros="true" value="1"
                                                                        min="1" max="1000" />
                                                                </div>
                                                                <h6 class="cart-inline-title">$17.00</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cart-inline-footer">
                                            <div class="group-sm">
                                                <a class="btn btn-default-outline-2 btn-zakaria"
                                                    href="{{ route('front.shopping.cart') }}">Go to cart</a><a
                                                    class="btn btn-primary btn-zakaria"
                                                    href="checkout.html">Checkout</a>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                                <a class="rd-navbar-basket rd-navbar-basket-mobile fl-bigmug-line-shopping202 rd-navbar-fixed-element-2"
                                    href="cart-page.html"><span>2</span></a>
                                <button
                                    class="rd-navbar-project-hamburger rd-navbar-project-hamburger-open rd-navbar-fixed-element-1"
                                    type="button" data-multitoggle=".rd-navbar-main"
                                    data-multitoggle-blur=".rd-navbar-wrap"
                                    data-multitoggle-isolate="data-multitoggle-isolate">
                                    <span class="project-hamburger"><span class="project-hamburger-line"></span><span
                                            class="project-hamburger-line"></span><span
                                            class="project-hamburger-line"></span><span
                                            class="project-hamburger-line"></span></span>
                                </button>
                                <button class="rd-navbar-clear-cache-button border-0 bg-transparent" type="button">
                                    <a title="Clear Website Cache" href="{{ route('front.clear.cache') }}">
                                        <i class="fa fa-refresh"></i>
                                    </a>
                                </button>
                            </div>
                            <div class="rd-navbar-project">
                                <div class="rd-navbar-project-header">
                                    <button class="rd-navbar-project-hamburger rd-navbar-project-hamburger-close"
                                        type="button" data-multitoggle=".rd-navbar-main"
                                        data-multitoggle-blur=".rd-navbar-wrap" data-multitoggle-isolate>
                                        <span class="project-close"><span></span><span></span></span>
                                    </button>
                                    <h5 class="rd-navbar-project-title">Our Contacts</h5>
                                </div>
                                <div class="rd-navbar-project-content">
                                    <div>
                                        <div>
                                            <!-- Owl Carousel-->
                                            <div class="owl-carousel" data-items="1" data-dots="true"
                                                data-autoplay="true">
                                                <img src="{{ asset('images/about-5-350x269.jpg') }}" alt=""
                                                    width="350" height="269" /><img
                                                    src="{{ asset('images/about-6-350x269.jpg') }}" alt=""
                                                    width="350" height="269" /><img
                                                    src="{{ asset('images/about-7-350x269.jpg') }}" alt=""
                                                    width="350" height="269" />
                                            </div>
                                            <ul class="contacts-modern">
                                                <li>
                                                    <a href="#">35, Goving Nagar 3rd Akeda<br />Road no. 19, Jaipur (Raj.) 302013</a>
                                                </li>
                                                <li><a href="tel:+918078649462">+918078649462</a></li>
                                            </ul>
                                        </div>
                                        <div>
                                            <ul class="list-inline list-social list-inline-xl">
                                                <li>
                                                    <a class="icon mdi mdi-facebook" href="#"></a>
                                                </li>
                                                <li><a class="icon mdi mdi-twitter" href="#"></a></li>
                                                <li>
                                                    <a class="icon mdi mdi-instagram" href="#"></a>
                                                </li>
                                                <li>
                                                    <a class="icon mdi mdi-google-plus" href="#"></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <!-- Swiper-->
