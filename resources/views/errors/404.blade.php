<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
    <title>404 Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="{{ asset('images/logos/elite.png') }}" type="image/x-icon">
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
        <section class="section section-single context-dark bg-image" style="background-image: url({{ asset('images/bg-404.jpg') }});">
            <div class="section-single-inner">
                <header class="section-single-header page-header">
                    <div class="page-head-inner">
                        <!--Brand-->
                        <a class="brand" href="/"><img class="{{ asset('images/logos/elite.png') }}"
                                src="{{ asset('images/logos/elite.png') }}" alt="" width="105" height="44" />
                                {{-- <img
                                class="brand-logo-light" src="{{ asset('images/logos/elite.png') }}" alt=""
                                width="106" height="44" /> --}}
                            </a>
                    </div>
                </header>

                <div class="section-single-main">
                    <div class="container">
                        <div class="title-modern">404</div>
                        <h3 class="fw-light text-spacing-100">Page Not Found</h3><a
                            class="btn btn-lg btn-secondary btn-zakaria" href="/">Go to home page</a>
                    </div>
                </div>
                <div class="section-single-footer">
                    <div class="container text-center">
                        <p class="rights"><span>&copy;&nbsp;</span><span
                                class="copyright-year"></span><span>&nbsp;</span><span>Sofa</span><span>.&nbsp; All
                                rights reserved.</span><span>&nbsp;</span><a href="privacy-policy.html">Privacy
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
