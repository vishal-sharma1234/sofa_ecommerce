@extends('layouts.front.master')
@section('content')
    <div class="tf-breadcrumb bg-dark text-white">
        <div class="container text-white">
            <div class="tf-breadcrumb-wrap text-white">
                <div class="tf-breadcrumb-list text-white">
                    <a href="https://glamtiqueshop.com" class="text text-caption-1 text-white">Homepage</a>
                    <i class="icon icon-arrRight"></i>
                    <a class="link text-white" href="#">Women</a>
                    <i class="icon icon-arrRight"></i>
                    <a class="link text-white" href="#">Main Collection</a>
                </div>
            </div>
        </div>
    </div>

    <section class="flat-spacing">
        <div class="container">
            <div class="tf-grid-layout tf-col-2 lg-col-4">

                @if ($categories->count())
                    @foreach ($categories as $idx => $category)
                        <div class="collection-position-2 radius-lg style-3 hover-img">
                            <a href="{{ route('front.category', $category->slug) }}" class="img-style">
                                <img class=" ls-is-cached lazyloaded"
                                    data-src="{{ asset('sofaseller/category/' . $category->image) }}"
                                    src="{{ asset('sofaseller/category/' . $category->image) }}" alt="banner-cls">
                            </a>
                            <div class="content">
                                <a href="{{ route('front.category', $category->slug) }}" class="cls-btn">
                                    <h6 class="text small">{{ $category->name ?? '' }}</h6> <i
                                        class="icon icon-arrowUpRight"></i>
                                </a>
                                {{-- products_count --}}
                            </div>
                            <div class="on-sale-wrap d-flex justify-content-end"><span
                                    class="on-sale-item">{{ $category->products_count ?? '' }}
                                    items</span></div>
                        </div>
                    @endforeach

                    {{ $categories->links('front.pagination') }}
                @endif
                {{-- <ul class="wg-pagination d-flex justify-content-center d-block">
                    <li class="active">
                        <div class="pagination-item text-button">1</div>
                    </li>
                    <li>
                        <a href="https://glamtiqueshop.com/main-collection?page=2" class="pagination-item text-button">2</a>
                    </li>


                    <li>
                        <a href="https://glamtiqueshop.com/main-collection?page=2" class="pagination-item text-button"
                            rel="next">
                            <i class="icon-arrRight"></i>
                        </a>
                    </li>
                </ul> --}}

            </div>
        </div>
    </section>
@endsection
@section('script')
@endsection
