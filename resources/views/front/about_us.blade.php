@section('title', 'About Us')
@extends('layouts.front.master')
@section('content')
    <section class="breadcrumbs-custom">
        <div class="parallax-container" data-parallax-img="{{ asset('images/bg-about.jpg') }}">
            <div class="material-parallax parallax"><img src="{{ asset('images/bg-about.jpg') }}" alt=""
                    style="display: block; transform: translate3d(-50%, 87px, 0px);"></div>
            <div class="breadcrumbs-custom-body parallax-content context-dark">
                <div class="container">
                    <h2 class="breadcrumbs-custom-title">About Us</h2>
                    <h5 class="breadcrumbs-custom-text">Quisque ullamcorper nulla magna, vitae tincidunt ipsum interdum nec
                        <br class="d-none d-md-block">sit amet fermentum pellentesque, pulvinar non tellus.
                    </h5>
                </div>
            </div>
        </div>
        <div class="breadcrumbs-custom-footer">
            <div class="container">
                <ul class="breadcrumbs-custom-path">
                    <li><a href="/">Home</a></li>
                    <li><a href="#">Explore More</a></li>
                    <li class="active">About Us</li>
                </ul>
            </div>
        </div>
    </section>


    <section class="section section-xl bg-default text-md-start">
        <div class="container">
            <div class="row row-40 row-md-60 justify-content-center justify-content-lg-between align-items-xl-center">
                <div class="col-md-11 col-lg-5 col-xl-4">
                    <!-- Quote Classic Big-->
                    <article class="quote-classic-big inset-xl-right-30">
                        <div class="heading-3 quote-classic-big-text">
                            <div class="q">A Few Words About Us</div>
                        </div>
                    </article>
                    <!-- Bootstrap tabs-->
                    <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-1">
                        <!-- Nav tabs-->
                        <div class="nav-tabs-wrap">
                            <ul class="nav nav-tabs">
                                <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-1-1"
                                        data-bs-toggle="tab">About</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-2"
                                        data-bs-toggle="tab">Our mission</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-3"
                                        data-bs-toggle="tab">Our goals</a></li>
                            </ul>
                        </div>
                        <!-- Tab panes-->
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tabs-1-1">
                                <p>{{ $aboutUs->content['about'] ?? '' }}</p>
                            </div>
                            <div class="tab-pane fade" id="tabs-1-2">
                                <p>{{ $aboutUs->content['mission'] ?? '' }}</p>
                            </div>
                            <div class="tab-pane fade" id="tabs-1-3">
                                @php
                                    // dd($aboutUs);
                                @endphp
                                @if ($aboutUs && count($aboutUs->content['goals']))
                                    @foreach ($aboutUs->content['goals'] as $goal)
                                        <p>{{ $goal }}</p>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div><a class="btn btn-sm btn-primary btn-zakaria" href="{{ route('front.products') }}">Shop now</a>
                </div>
                <div class="col-md-11 col-lg-6 col-xl-7 text-end"><img src="{{ asset('images/about-1-632x458.jpg') }}"
                        alt="" width="632" height="458">
                </div>
            </div>
        </div>
    </section>

    <!-- Section History-->
    <section class="section section-fluid section-xl section-bottom-0 bg-image-2 section-relative">
        <div class="container-fluid">
            <h2>Our History</h2>
            <div class="slick-history">
                <!-- Slick Carousel-->
                <div class="slick-slider carousel-parent" id="carousel-parent-2" data-items="1" data-sm-items="2"
                    data-md-items="2" data-lg-items="3" data-xl-items="3" data-xxl-items="4" data-autoplay="false"
                    data-loop="false">
                    @if ($aboutUs && count($aboutUs->history['timeline']))
                        @foreach ($aboutUs->history['timeline'] as $item)
                            <div class="item">
                                <div class="box-info-classic">
                                    <h4 class="box-info-classic-title">{{ $item['title'] ?? '' }}</h4>
                                    <p class="box-info-classic-text">{{ $item['description'] ?? '' }}</p>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
                <div class="slick-slider child-carousel" data-items="1" data-sm-items="2" data-md-items="2"
                    data-lg-items="3" data-xl-items="3" data-xxl-items="4" data-arrows="true" data-for="#carousel-parent-2"
                    data-loop="false" data-focus-select="false">

                    @if ($aboutUs && count($aboutUs->history['timeline']))
                        @foreach ($aboutUs->history['timeline'] as $item)
                            <div class="item">
                                <div class="heading-5 box-info-classic-year">{{ $item['year'] ?? '' }}</div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section>

    <section class="section section-xl bg-default">
        <div class="container">
            <h2>Our team</h2>
            <div class="owl-carousel" data-items="1" data-sm-items="2" data-md-items="3" data-margin="30" data-dots="true"
                data-autoplay="true">
                @if ($teams->count())
                    @foreach ($teams as $team)
                        <article class="team-classic"><a class="team-classic-figure" href="#"><img
                                    src="{{ asset('sofaseller/teams/' . $team?->image ?? 'no') }}" alt=""
                                    width="370" height="334" /></a>
                            <h4 class="team-classic-name"><a href="#">{{ $team->name ?? '' }}</a></h4>
                            <p class="team-classic-text">{{ $team->summary ?? '' }}</p>
                        </article>
                    @endforeach
                @endif
            </div>
        </div>
    </section>

    <!-- Counter Modern-->
    <section class="parallax-container" data-parallax-img="images/parallax-2.jpg">
        <div class="parallax-content section-xxl context-dark">
            <div class="container">
                <div class="row row-30 justify-content-center">
                    <div class="col-6 col-sm-3">
                        <div class="counter-modern">
                            <h2 class="counter-modern-number"><span class="counter">245</span>
                            </h2>
                            <div class="counter-modern-decor"></div>
                            <h5 class="counter-modern-title">New furniture<br class="d-none d-sm-block"> Products</h5>
                        </div>
                    </div>
                    <div class="col-6 col-sm-3">
                        <div class="counter-modern">
                            <h2 class="counter-modern-number"><span class="counter">382</span>
                            </h2>
                            <div class="counter-modern-decor"></div>
                            <h5 class="counter-modern-title">Special<br class="d-none d-sm-block"> offers</h5>
                        </div>
                    </div>
                    <div class="col-6 col-sm-3">
                        <div class="counter-modern">
                            <h2 class="counter-modern-number"><span class="counter">1267</span>
                            </h2>
                            <div class="counter-modern-decor"></div>
                            <h5 class="counter-modern-title">Satisfied<br class="d-none d-sm-block"> Clients</h5>
                        </div>
                    </div>
                    <div class="col-6 col-sm-3">
                        <div class="counter-modern">
                            <h2 class="counter-modern-number"><span class="counter">474</span>
                            </h2>
                            <div class="counter-modern-decor"></div>
                            <h5 class="counter-modern-title">partners<br class="d-none d-sm-block"> throughout the USA
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials-->
    <section class="section section-xl bg-gray-21">
        <div class="container">
            <h2>Testimonials</h2>
            <!-- Owl Carousel-->
            <div class="owl-carousel owl-style-1" data-items="1" data-sm-items="2" data-margin="30" data-dots="true"
                data-autoplay="true">
                @if ($testimonials->count())
                    @foreach ($testimonials as $testimonial)
                        <article class="quote-modern">
                            <div class="quote-modern-text">
                                <div class="q">{{ $testimonial->message ?? '' }}</div>
                            </div>
                            <div class="unit unit-spacing-sm flex-column flex-md-row align-items-center">
                                <div class="unit-left">
                                    <div class="quote-modern-figure"><img
                                            src="{{ asset('sofaseller/website/review/' . $testimonial?->image ?? 'no') }}"
                                            alt="" width="62" height="62" />
                                    </div>
                                </div>
                                <div class="unit-body">
                                    <div class="quote-modern-author">{{ $testimonial->name ?? '' }}</div>
                                    <div class="quote-modern-status">Client</div>
                                </div>
                            </div>
                        </article>
                    @endforeach
                @endif
            </div>
        </div>
    </section>

    <!-- Section Clients-->
    <section class="section section-xxl bg-default">
        <div class="container">
            <div class="owl-carousel owl-style-2" data-items="2" data-sm-items="3" data-md-items="4" data-margin="30"
                data-dots="true">

                <a class="clients-classic" href="#">
                    <img src="{{ asset('images/clients-1-197x44.png') }}" alt="" width="197"
                        height="44" />
                </a>
                <a class="clients-classic" href="#">
                    <img src="{{ asset('images/clients-2-139x59.png') }}" alt="" width="139"
                        height="59" />
                </a>
                <a class="clients-classic" href="#">
                    <img src="{{ asset('images/clients-3-114x67.png') }}" alt="" width="114"
                        height="67" />
                </a>
                <a class="clients-classic" href="#">
                    <img src="{{ asset('images/clients-4-140x50.png') }}" alt="" width="140"
                        height="50" />
                </a>

            </div>
        </div>
    </section>


    <section class="section">

        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3378.522899418508!2d75.8090488!3d27.0178013!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396daff98f680e5d%3A0x6118dbfa56df5b2e!2sElite%20Sofa%20Works!5e1!3m2!1sen!2sin!4v1768240012912!5m2!1sen!2sin"
            width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>

    </section>
@endsection
@section('script')
@endsection
