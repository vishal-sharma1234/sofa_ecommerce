@section('title', 'Product Collection')
@extends('layouts.front.master')
@section('content')
    <section class="breadcrumbs-custom">
        <div class="parallax-container" data-parallax-img="images/bg-blog-2.jpg">
            <div class="material-parallax parallax"><img src="images/bg-blog-2.jpg" alt=""
                    style="display: block; transform: translate3d(-50%, 74px, 0px);"></div>
            <div class="breadcrumbs-custom-body parallax-content context-dark">
                <div class="container">
                    <h2 class="breadcrumbs-custom-title">Product Collection</h2>
                </div>
            </div>
        </div>
        <div class="breadcrumbs-custom-footer">
            <div class="container">
                <ul class="breadcrumbs-custom-path">
                    <li><a href="/">Home</a></li>
                    <li><a href="/shop">Shop</a></li>
                    <li class="active">Products</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="section section-xxl bg-default text-md-start">
        <div class="container">
            <div class="row row-50">
                <div class="col-lg-4 col-xl-3">
                    <div class="aside row row-30 row-md-50 justify-content-md-between">
                        <div class="aside-item col-sm-6 col-md-5 col-lg-12">
                            <h6 class="aside-title">Categories</h6>
                            <ul class="list-shop-filter">
                                <li>
                                    <label class="checkbox-inline">
                                        <input name="input-group-radio" value="checkbox-1" type="checkbox"
                                            class="checkbox-custom"><span class="checkbox-custom-dummy"></span>All
                                    </label><span class="list-shop-filter-number">({{ $productsCount ?? 0 }})</span>
                                </li>
                                @if ($categpries->count())
                                    @foreach ($categpries as $idx => $categpry)
                                        @if ($categpry->products->count())
                                            <li>
                                                <label class="checkbox-inline">

                                                    <input name="input-group-radio" value="{{ $categpry->id }}"
                                                        type="checkbox" class="category-filter"><span
                                                        class=""></span>{{ $categpry->name ?? '' }}
                                                </label><span
                                                    class="list-shop-filter-number">({{ $categpry->products->count() ?? 0 }})</span>
                                            </li>
                                        @endif
                                    @endforeach
                                @endif

                            </ul>
                            <!-- RD Search Form-->
                            <form class="rd-search form-search" action="search-results.html" method="GET">
                                <div class="form-wrap">
                                    <label class="form-label rd-input-label" for="search-form">Search...</label>
                                    <input class="form-input" id="search-form" type="text" name="s"
                                        autocomplete="off" fdprocessedid="iarvam">
                                    <button class="btn-search fl-bigmug-line-search74" type="submit"
                                        fdprocessedid="8xeerp"></button>
                                </div>
                            </form>
                        </div>
                        @if ($popularProducts->count())
                            <div class="aside-item col-sm-6 col-lg-12">
                                <h6 class="aside-title">Popular products</h6>
                                <div class="row row-10 row-lg-20 gutters-10">

                                    @foreach ($popularProducts as $key => $popularProduct)
                                        <div class="col-4 col-sm-6 col-md-12">
                                            <!-- Product Minimal-->
                                            <article class="product-minimal">
                                                <div
                                                    class="unit unit-spacing-sm flex-column flex-md-row align-items-center">
                                                    <div class="unit-left"><a class="product-minimal-figure"
                                                            href="{{ route('product.detail', $popularProduct->slug) }}"><img
                                                                src="{{ asset('sofaseller/product/' . $popularProduct->id . '/' . $popularProduct->main_image) }}"
                                                                alt="" width="106" height="104"
                                                                style="height: 78px;"></a></div>
                                                    <div class="unit-body">
                                                        <p class="product-minimal-title"><a
                                                                href="{{ route('product.detail', $popularProduct->slug) }}">{{ $popularProduct->name ?? '' }}</a>
                                                        </p>
                                                        <a href="https://wa.me/8078649462?text=Hello%20is%20this%20product%20available {{ $popularProduct->name }}"
                                                            class=""> <i class="fa fa-whatsapp"
                                                                style="font-size: x-large"></i></a>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="col-lg-8 col-xl-9">
                    <div class="product-top-panel group-md">
                        Showing {{ $products->firstItem() }}–{{ $products->lastItem() }} of {{ $products->total() }}
                        results

                        <div>
                            <div class="group-sm group-middle">
                                <div class="product-top-panel-sorting">
                                    {{-- <select data-minimum-results-for-search="Infinity">
                                        <option value="1">Sort by newness</option>
                                        <option value="2">Sort by popularity</option>
                                        <option value="3">Sort by alphabet</option>
                                    </select> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row row-30 row-lg-50">

                        @if ($products->count())
                            @foreach ($products as $key => $item)
                                <div class="col-sm-6 col-md-4 col-lg-6 col-xl-4 product-item"
                                    data-category="{{ $item->category_id }}">
                                    <article class="product">
                                        <div class="product-body">
                                            <div class="product-figure"><img
                                                    src="{{ asset('sofaseller/product/' . $item->id . '/' . $item->main_image) }}"
                                                    alt="" width="160" height="155">
                                            </div>
                                            <h5 class="product-title"><a
                                                    href="{{ route('product.detail', $item->slug) }}">{{ $item->name ?? '' }}</a>
                                            </h5>
                                            {{-- <div class="product-price-wrap">
                                                <div class="product-price product-price-old">₹{{ $item->old_price ?? '' }}
                                                </div>
                                                <div class="product-price">₹{{ $item->current_price ?? '' }}</div>
                                            </div> --}}
                                        </div><span class="product-badge product-badge-sale">On Sale</span>
                                        <div class="product-button-wrap">
                                            <div class="product-button"><a
                                                    class="btn btn-secondary btn-zakaria fl-bigmug-line-search74"
                                                    href="{{ route('product.detail', $item->slug) }}"><i
                                                        class="fa fa-eye"></i></a></div>
                                            <div class="product-button"><a class="btn btn-primary btn-zakaria"
                                                    href="https://wa.me/8078649462?text=Hello%20is%20this%20product%20available {{ $item->name }}"
                                                    style="font-size: x-large"><i class="fa fa-whatsapp"></i></a></div>
                                        </div>
                                    </article>
                                </div>
                            @endforeach

                            {{ $products->links('front.pagination') }}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
    <script>
        $(document).ready(function() {

            $('.category-filter').on('change', function() {

                let selected = [];

                $('.category-filter:checked').each(function() {
                    selected.push($(this).val());
                });

                if (selected.length === 0) {
                    $('.product-item').show();
                } else {
                    $('.product-item').hide();

                    selected.forEach(function(catId) {
                        $('.product-item[data-category="' + catId + '"]').show();
                    });
                }

            });

        });
    </script>
@endsection
