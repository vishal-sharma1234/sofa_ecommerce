@section('title', 'Our Blogs')
@extends('layouts.front.master')
@section('content')
    <section class="breadcrumbs-custom">
        <div class="parallax-container" data-parallax-img="{{ asset('images/bg-blog-2.jpg') }}">
            <div class="breadcrumbs-custom-body parallax-content context-dark">
                <div class="container">
                    <h2 class="breadcrumbs-custom-title">Blogs</h2>
                </div>
            </div>
        </div>
        <div class="breadcrumbs-custom-footer">
            <div class="container">
                <ul class="breadcrumbs-custom-path">
                    <li><a href="/">Home</a></li>
                    <li><a href="#">Explore More</a></li>
                    <li class="active">Blogs</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="section section-xl bg-default">
        <div class="container">
            <div class="row row-30">

                @if ($blogs->count())
                    @foreach ($blogs as $blog)
                        <div class="col-sm-6 col-lg-4">
                            <!-- Post Classic-->
                            <article class="post post-classic box-md">
                                <a class="post-classic-figure" href="{{ route('front.blog.detail', $blog->slug) }}"><img
                                        src="{{ asset('sofaseller/module/blogs/' . $blog->image) }}" alt=""
                                        width="370" height="239" /></a>
                                <div class="post-classic-content">
                                    <div class="post-classic-time">
                                        <time
                                            datetime="{{ $blog->created_at->diffForHumans() }}">{{ $blog->created_at->diffForHumans() }}</time>
                                    </div>
                                    <h5 class="post-classic-title">
                                        <a href="{{ route('front.blog.detail', $blog->slug) }}">{{ $blog->title ?? '' }}</a>
                                    </h5>
                                    <p class="post-classic-text">
                                        {{ $blog->short_description ?? '' }}
                                    </p>
                                </div>
                            </article>
                        </div>
                    @endforeach
                @endif

            </div>
            <div class="pagination-wrap">
                <!-- Bootstrap Pagination-->
                {{-- <nav aria-label="Page navigation">
                    <ul class="pagination">
                        <li class="page-item page-item-control disabled">
                            <a class="page-link" href="#" aria-label="Previous"><span class="icon"
                                    aria-hidden="true"></span></a>
                        </li>
                        <li class="page-item active">
                            <span class="page-link">1</span>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item page-item-control">
                            <a class="page-link" href="#" aria-label="Next"><span class="icon"
                                    aria-hidden="true"></span></a>
                        </li>
                    </ul>
                </nav> --}}
                {{ $blogs->links('front.pagination') }}

            </div>
        </div>
    </section>
@endsection
@section('script')
@endsection
