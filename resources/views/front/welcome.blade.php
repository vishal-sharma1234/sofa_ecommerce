@section('title', 'Elite Sofa Makers')
@extends('layouts.front.master')
@section('content')
    <!-- Swiper-->
    <section class="section swiper-container swiper-slider swiper-slider-1" data-loop="true">
        <div class="swiper-wrapper text-center text-lg-start">

            @if ($banners->count())
                @foreach ($banners as $banner)
                    <div class="swiper-slide swiper-slide-caption context-dark"
                        data-slide-bg="{{ asset('sofaseller/banner/' . $banner?->image ?? 'no') }}">
                        <div class="swiper-slide-caption section-md text-center">
                            <div class="container">
                                <h1 class="swiper-title-1" data-caption-animate="fadeScale" data-caption-delay="100">
                                    {{ $banner->title ?? '' }}
                                </h1>
                                <p class="biggest text-white-70" data-caption-animate="fadeScale" data-caption-delay="200">
                                    {{ $banner->sub_title ?? '' }}
                                </p>
                                <div class="btn-wrap" data-caption-animate="fadeInUp" data-caption-delay="300">
                                    <a class="btn btn-zachem-tak-delat btn-white btn-zakaria"
                                        href="{{ route('front.products') }}">Shop
                                        now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
        <!-- Swiper Pagination-->
        <div class="swiper-pagination"></div>
        <!-- Swiper Navigation-->
        <div class="swiper-button-prev"><i class="fa fa-chevron-left"></i></div>
        <div class="swiper-button-next"><i class="fa fa-chevron-right"></i></div>
    </section>

    <!-- Icons 2-->
    <section class="section section-xl section-inset-1 bg-brown-2">
        <div class="container">
            <h2 class="fw-regular">Categories</h2>
            <div class="row row-30">

                @if ($categories->count())
                    @foreach ($categories as $category)
                        {{-- @if ($category->products->count()) --}}
                        <div class="col-sm-6 col-lg-4">
                            <article class="box-icon-creative wow fadeInRight" data-wow-delay=".1s">
                                <div
                                    class="unit flex-column flex-md-row flex-lg-column flex-xl-row align-items-md-center align-items-lg-start align-items-xl-center unit-spacing-xs">
                                    <div class="unit-left">
                                        <div class="box-icon-creative-icon linearicons-couch">
                                            {{-- <i class="fa fa-couch"></i> --}}
                                            <img src="{{ asset('sofaseller/category/' . $category?->image ?? 'no') }}"
                                                alt="" style="height: 53.75px; width: 48.8px;">
                                        </div>
                                    </div>
                                    <div class="unit-body">
                                        <h5 class="box-icon-creative-title">
                                            <a
                                                href="{{ route('front.category', $category->slug ?? '') }}">{{ $category->name ?? '' }}</a>
                                        </h5>
                                        <p class="box-icon-creative-text">
                                            {{-- Sofas, coffee tables, couches --}}
                                            {{ $category->subCategories->pluck('name')->implode(', ') ?: 'No sub categories' }}
                                        </p>
                                    </div>
                                </div>
                            </article>
                        </div>
                        {{-- @endif --}}
                    @endforeach
                @endif
            </div>
        </div>
    </section>

    <!-- New Products-->
    <section class="section section-xxl bg-default">
        <div class="container">
            <h2 class="wow fadeScale">Trending Products</h2>
            <div class="row row-30 row-lg-50">

                @if ($products->count())
                    @foreach ($products as $key => $product)
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <!-- Product-->
                            <article class="product wow fadeInRight">
                                <div class="product-body">
                                    <div class="product-figure">
                                        <img src="{{ asset('sofaseller/product/' . $product->id . '/' . $product->main_image) }}"
                                            alt="" width="129" height="172" />
                                    </div>
                                    <h5 class="product-title">
                                        <a
                                            href="{{ route('product.detail', $product->slug) }}">{{ $product->name ?? '' }}</a>
                                    </h5>
                                </div>
                                <span class="product-badge product-badge-sale">On Sale</span>
                                <div class="product-button-wrap">
                                    <div class="product-button">
                                        <a class="btn btn-secondary btn-zakaria fl-bigmug-line-search74"
                                            href="{{ route('product.detail', $product->slug) }}"><i
                                                class="fa fa-eye"></i></a>
                                    </div>
                                    <div class="product-button">
                                        <a class="btn btn-primary btn-zakaria"
                                            href="https://wa.me/8078649462?text=Hello%20is%20this%20product%20available {{ $product->name }}"><i
                                                class="fa fa-whatsapp"></i></a>
                                    </div>
                                </div>
                            </article>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>

    <!-- About Us-->
    <section class="section section-xxl section-inset-1 bg-gradient-ishaaak text-md-start">
        <div class="container">
            <div class="row row-30 align-items-center justify-content-center justify-content-xl-between">
                <div class="col-sm-6 col-md-5 col-lg-7 wow fadeInLeft">
                    <img src="{{ asset('images/about-8-668x330.png') }}" alt="" width="668" height="330" />
                </div>
                <div class="col-md-7 col-lg-6 col-xl-5">
                    <h2 class="wow fadeInRight" data-wow-delay=".1s">
                        providing the best furniture and decor
                    </h2>
                    <p class="big offset-top-md-20 wow fadeInRight" data-wow-delay=".2s">
                        At Sofa, we aim to supply our customers with the first-class
                        furniture & decor products that make their life comfortable.
                    </p>
                    <div class="group-xl group-middle d-md-flex justify-content-sm-start wow fadeInRight"
                        data-wow-delay=".3s">
                        <div>
                            <div class="group-lg group-middle">
                                <a class="btn btn-sm btn-icon-3 btn-primary btn-zakaria" href="about-us.html"><span
                                        class="mdi mdi-arrow-right"></span></a>
                                <div class="team-navy">
                                    <div class="team-navy-name">
                                        <a href="#">Vishal Sharma</a>
                                    </div>
                                    <div class="team-navy-status">CEO & Co-Founder</div>
                                </div>
                            </div>
                        </div>
                        <img src="{{ asset('images/signature.png') }}" alt="" width="160" height="55" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Masonry Gallery-->
    <section class="section section-xxl bg-defaults">
        <div class="container">
            <h2 class="wow fadeScale">Portfolio</h2>
            <div class="isotope-wrap">
                <div class="row row-30 isotope isotope-custom-1" data-lightgallery="group">
                    <div class="col-sm-6 col-lg-4 col-xl-3 isotope-item">
                        <!-- Thumbnail Classic-->
                        <article class="thumbnail-classic">
                            <div class="thumbnail-classic-figure">
                                <img src="{{ asset('images/portfolio-7-270x250.jpg') }}" alt="" width="270"
                                    height="250" />
                            </div>
                            <div class="thumbnail-classic-caption">
                                <div>
                                    <h5 class="thumbnail-classic-title">
                                        <a href="single-product.html">Sunshine Restaurant</a>
                                    </h5>
                                    <div class="thumbnail-classic-price">Decor</div>
                                    <div class="thumbnail-classic-button-wrap">
                                        <div class="thumbnail-classic-button">
                                            <a class="btn btn-white btn-zakaria fl-bigmug-line-search74"
                                                href="{{ asset('images/portfolio-original-7.jpg') }}"
                                                data-lightgallery="item">
                                                <i class="fa fa-eye"></i>
                                                <img src="{{ asset('images/portfolio-7-270x250.jpg') }}" alt=""
                                                    width="270" height="250" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-3 isotope-item">
                        <!-- Thumbnail Classic-->
                        <article class="thumbnail-classic">
                            <div class="thumbnail-classic-figure">
                                <img src="{{ asset('images/portfolio-5-270x530.jpg') }}" alt="" width="270"
                                    height="530" />
                            </div>
                            <div class="thumbnail-classic-caption">
                                <div>
                                    <h5 class="thumbnail-classic-title">
                                        <a href="single-product.html">Quadro hotel</a>
                                    </h5>
                                    <div class="thumbnail-classic-price">Furniture</div>
                                    <div class="thumbnail-classic-button-wrap">
                                        <div class="thumbnail-classic-button">
                                            <a class="btn btn-white btn-zakaria fl-bigmug-line-search74"
                                                href="{{ asset('images/portfolio-original-5.jpg') }}"
                                                data-lightgallery="item"> <i class="fa fa-eye"></i> <img
                                                    src="{{ asset('images/portfolio-5-270x530.jpg') }}" alt=""
                                                    width="270" height="530" /></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-3 isotope-item">
                        <!-- Thumbnail Classic-->
                        <article class="thumbnail-classic">
                            <div class="thumbnail-classic-figure">
                                <img src="{{ asset('images/portfolio-3-270x250.jpg') }}" alt="" width="270"
                                    height="250" />
                            </div>
                            <div class="thumbnail-classic-caption">
                                <div>
                                    <h5 class="thumbnail-classic-title">
                                        <a href="single-product.html">u-Style Fashion House</a>
                                    </h5>
                                    <div class="thumbnail-classic-price">Decor</div>
                                    <div class="thumbnail-classic-button-wrap">
                                        <div class="thumbnail-classic-button">
                                            <a class="btn btn-white btn-zakaria fl-bigmug-line-search74"
                                                href="{{ asset('images/portfolio-original-3.jpg') }}"
                                                data-lightgallery="item"><i class="fa fa-eye"></i><img
                                                    src="{{ asset('images/portfolio-3-270x250.jpg') }}" alt=""
                                                    width="270" height="250" /></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-3 isotope-item">
                        <!-- Thumbnail Classic-->
                        <article class="thumbnail-classic">
                            <div class="thumbnail-classic-figure">
                                <img src="{{ asset('images/portfolio-4-270x250.jpg') }}" alt="" width="270"
                                    height="250" />
                            </div>
                            <div class="thumbnail-classic-caption">
                                <div>
                                    <h5 class="thumbnail-classic-title">
                                        <a href="single-product.html">Flash Cafe</a>
                                    </h5>
                                    <div class="thumbnail-classic-price">Furniture</div>
                                    <div class="thumbnail-classic-button-wrap">
                                        <div class="thumbnail-classic-button">
                                            <a class="btn btn-white btn-zakaria fl-bigmug-line-search74"
                                                href="{{ asset('images/portfolio-original-4.jpg') }}"
                                                data-lightgallery="item"><i class="fa fa-eye"></i><img
                                                    src="{{ asset('images/portfolio-4-270x250.jpg') }}" alt=""
                                                    width="270" height="250" /></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-3 isotope-item">
                        <!-- Thumbnail Classic-->
                        <article class="thumbnail-classic">
                            <div class="thumbnail-classic-figure">
                                <img src="{{ asset('images/portfolio-6-270x250.jpg') }}" alt="" width="270"
                                    height="250" />
                            </div>
                            <div class="thumbnail-classic-caption">
                                <div>
                                    <h5 class="thumbnail-classic-title">
                                        <a href="single-product.html">New York Public Library</a>
                                    </h5>
                                    <div class="thumbnail-classic-price">Decor</div>
                                    <div class="thumbnail-classic-button-wrap">
                                        <div class="thumbnail-classic-button">
                                            <a class="btn btn-white btn-zakaria fl-bigmug-line-search74"
                                                href="{{ asset('images/portfolio-original-6.jpg') }}"
                                                data-lightgallery="item"><i class="fa fa-eye"></i><img
                                                    src="{{ asset('images/portfolio-6-270x250.jpg') }}" alt=""
                                                    width="270" height="250" /></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-6 isotope-item">
                        <!-- Thumbnail Classic-->
                        <article class="thumbnail-classic">
                            <div class="thumbnail-classic-figure">
                                <img src="{{ asset('images/portfolio-1-570x530.jpg') }}" alt="" width="570"
                                    height="530" />
                            </div>
                            <div class="thumbnail-classic-caption">
                                <div>
                                    <h5 class="thumbnail-classic-title">
                                        <a href="single-product.html">Q-Biz Coworking</a>
                                    </h5>
                                    <div class="thumbnail-classic-price">Furniture</div>
                                    <div class="thumbnail-classic-button-wrap">
                                        <div class="thumbnail-classic-button">
                                            <a class="btn btn-white btn-zakaria fl-bigmug-line-search74"
                                                href="{{ asset('images/portfolio-original-1.jpg') }}"
                                                data-lightgallery="item"><i class="fa fa-eye"></i><img
                                                    src="{{ asset('images/portfolio-1-570x530.jpg') }}" alt=""
                                                    width="570" height="530" /></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-sm-6 col-lg-8 col-xl-6 isotope-item">
                        <!-- Thumbnail Classic-->
                        <article class="thumbnail-classic">
                            <div class="thumbnail-classic-figure">
                                <img src="{{ asset('images/portfolio-2-570x250.jpg') }}" alt="" width="570"
                                    height="250" />
                            </div>
                            <div class="thumbnail-classic-caption">
                                <div>
                                    <h5 class="thumbnail-classic-title">
                                        <a href="single-product.html">Monroe’s Bar</a>
                                    </h5>
                                    <div class="thumbnail-classic-price">Decor</div>
                                    <div class="thumbnail-classic-button-wrap">
                                        <div class="thumbnail-classic-button">
                                            <a class="btn btn-white btn-zakaria fl-bigmug-line-search74"
                                                href="{{ asset('images/portfolio-original-2.jpg') }}"
                                                data-lightgallery="item"><i class="fa fa-eye"></i><img
                                                    src="{{ asset('images/portfolio-2-570x250.jpg') }}" alt=""
                                                    width="570" height="250" /></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Blog-->
    <section class="section section-xxl section-last bg-gray-21">
        <div class="container">
            <h2 class="wow fadeScale">Blog</h2>
        </div>
        <!-- Owl Carousel-->
        @if ($blogs->count())
            <div class="owl-carousel owl-style-7" data-items="1" data-sm-items="2" data-xl-items="3" data-xxl-items="4"
                data-nav="true" data-dots="true" data-margin="30" data-autoplay="true">
                <!-- Post Creative-->

                @foreach ($blogs as $blog)
                    <article class="post post-creative">
                        <a class="post-creative-figure" href="{{ route('front.blog.detail', $blog->slug) }}"><img
                                src="{{ asset('sofaseller/module/blogs/' . $blog->image) }}" alt=""
                                width="420" height="368" /></a>
                        <div class="post-creative-content">
                            <h5 class="post-creative-title">
                                <a href="{{ route('front.blog.detail', $blog->slug) }}">{{ $blog->title ?? '' }}</a>
                            </h5>
                            <div class="post-creative-time">
                                <time>{{ $blog->created_at->format('M d, Y') ?? '' }}</time>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        @endif
    </section>
@endsection
@section('script')
@endsection
