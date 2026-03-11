<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
    <title>Coming Soon</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css"
        href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700%7CLato%7CKalam:300,400,700">
    <link rel="stylesheet" href="{{ asset('front/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/css/fonts.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/css/globle_styles.css') }}" />
</head>

<body>
    <div class="preloader">
        <div class="preloader-body">
            <div class="cssload-box-loading"></div>
        </div>
    </div>
    <div class="page">
        <section class="section section-single context-dark bg-image"
            style="background-image: url({{ asset('images/bg-soon.jpg') }});">
            <div class="section-single-inner">
                <header class="section-single-header page-header">
                    <div class="page-head-inner">
                        <!--Brand--><a class="brand" href="/"><img class="brand-logo-dark"
                                src="{{ asset('images/logo-default-210x88.png') }}" alt="" width="105"
                                height="44" /><img class="brand-logo-light"
                                src="{{ asset('images/logo-inverse-212x88.png') }}" alt="" width="106"
                                height="44" /></a>
                    </div>
                </header>

                <div class="section-single-main">
                    <div class="container">
                        <h3>We’re Getting Ready To Launch In</h3>
                        <!-- TimeCircles-->
                        <div class="countdown" data-countdown="data-countdown" data-to="2022-09-16">
                            <div class="countdown-block countdown-block-days">
                                <div class="countdown-body">
                                    <svg class="countdown-circle" x="0" y="0" width="200" height="200"
                                        viewbox="0 0 200 200" data-progress-days="">
                                        <circle class="countdown-circle-bg" cx="100" cy="100" r="77">
                                        </circle>
                                        <circle class="countdown-circle-fg clipped" cx="100" cy="100" r="90"
                                            stroke="url(#gradient-0)"></circle>
                                        <defs>
                                            <linearGradient x1="0%" y1="0%" x2="0%" y2="100%"
                                                id="gradient-0">
                                                <stop offset="0%" stop-color="#92c5d9"></stop>
                                                <stop offset="100%" stop-color="#92c5d9"></stop>
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                    <div class="countdown-wrap">
                                        <div class="heading-3 countdown-counter" data-counter-days="">00</div>
                                    </div>
                                </div>
                                <div class="heading-5 countdown-title">days</div>
                            </div>
                            <div class="countdown-block countdown-block-hours">
                                <div class="countdown-body">
                                    <svg class="countdown-circle" x="0" y="0" width="200" height="200"
                                        viewbox="0 0 200 200" data-progress-hours="">
                                        <circle class="countdown-circle-bg" cx="100" cy="100" r="77">
                                        </circle>
                                        <circle class="countdown-circle-fg clipped" cx="100" cy="100" r="90"
                                            stroke="url(#gradient-1)"></circle>
                                        <defs>
                                            <linearGradient x1="0%" y1="0%" x2="0%" y2="100%"
                                                id="gradient-1">
                                                <stop offset="0%" stop-color="#92c5d9"></stop>
                                                <stop offset="100%" stop-color="#92c5d9"></stop>
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                    <div class="countdown-wrap">
                                        <div class="heading-3 countdown-counter" data-counter-hours="">00</div>
                                    </div>
                                </div>
                                <div class="heading-5 countdown-title">hours</div>
                            </div>
                            <div class="countdown-block countdown-block-minutes">
                                <div class="countdown-body">
                                    <svg class="countdown-circle" x="0" y="0" width="200" height="200"
                                        viewbox="0 0 200 200" data-progress-minutes="">
                                        <circle class="countdown-circle-bg" cx="100" cy="100" r="77">
                                        </circle>
                                        <circle class="countdown-circle-fg clipped" cx="100" cy="100"
                                            r="90" stroke="url(#gradient-2)"></circle>
                                        <defs>
                                            <linearGradient x1="0%" y1="0%" x2="0%"
                                                y2="100%" id="gradient-2">
                                                <stop offset="0%" stop-color="#92c5d9"></stop>
                                                <stop offset="100%" stop-color="#92c5d9"></stop>
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                    <div class="countdown-wrap">
                                        <div class="heading-3 countdown-counter" data-counter-minutes="">00</div>
                                    </div>
                                </div>
                                <div class="heading-5 countdown-title">minutes</div>
                            </div>
                            <div class="countdown-block countdown-block-seconds">
                                <div class="countdown-body">
                                    <svg class="countdown-circle" x="0" y="0" width="200" height="200"
                                        viewbox="0 0 200 200" data-progress-seconds="">
                                        <circle class="countdown-circle-bg" cx="100" cy="100" r="77">
                                        </circle>
                                        <circle class="countdown-circle-fg clipped" cx="100" cy="100"
                                            r="90" stroke="url(#gradient-3)"></circle>
                                        <defs>
                                            <linearGradient x1="0%" y1="0%" x2="0%"
                                                y2="100%" id="gradient-3">
                                                <stop offset="0%" stop-color="#92c5d9"></stop>
                                                <stop offset="100%" stop-color="#92c5d9"></stop>
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                    <div class="countdown-wrap">
                                        <div class="heading-3 countdown-counter" data-counter-seconds="">00</div>
                                    </div>
                                </div>
                                <div class="heading-5 countdown-title">seconds</div>
                            </div>
                        </div>
                        <div class="rd-mailform-wrap">
                            <!-- RD Mailform-->
                            <form class="rd-form-inline form-lg" data-form-output="form-output-global"
                                data-form-type="subscribe" method="post" action="{{ route('front.subscribe') }}">
                                @csrf
                                <div class="form-wrap wow fadeInUp">
                                    <input class="form-input" id="subscribe-form-0-email" type="email"
                                        name="email" data-constraints="@Email" />
                                    <label class="form-label" for="subscribe-form-0-email">Enter your e-mail
                                        address</label>
                                    @if ($errors->has('email'))
                                        <small class="text-danger error-text"
                                            style="color: red; text-align: end; padding-top: 2px;">{{ $errors->first('email') }}</small>
                                    @endif
                                </div>
                                <div class="form-button wow fadeInRight">
                                    <button class="btn btn-shadow-2 btn-zakaria btn-lg btn-secondary"
                                        type="submit">Subscribe</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="section-single-footer">

                    <div class="container text-center">
                        <a href="/"  class="btn btn-shadow-2 btn-zakaria btn-lg btn-secondary"
                            type="submit">← Back to home</a>

                        <p class="rights"><span>&copy;&nbsp;</span><span
                                class="copyright-year"></span><span>&nbsp;</span><span>Sofa</span><span>.&nbsp; All
                                rights reserved.</span><span>&nbsp;</span><a
                                href="{{ route('front.privacy.policy') }}">Privacy
                                Policy</a><span>.</span></p>
                    </div>
                </div>

            </div>
        </section>
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="{{ asset('front/js/core.min.js') }}"></script>
    <script src="{{ asset('front/js/script.js') }}"></script>
</body>

</html>
