@section('title', $blog->title ?? '')
@extends('layouts.front.master')
@section('content')
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <section class="breadcrumbs-custom">
        <div class="parallax-container" data-parallax-img="{{ asset('images/bg-blog.jpg') }}">
            <div class="breadcrumbs-custom-body parallax-content context-dark">
                <div class="container">
                    <h2 class="breadcrumbs-custom-title">{{ $blog->title ?? '' }}</h2>
                </div>
            </div>
        </div>
        <div class="breadcrumbs-custom-footer">
            <div class="container">
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="grid-blog.html">Blog</a></li>
                    <li class="active">{{ $blog->title ?? '' }}</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Section Shop-->
    <section class="section section-xl bg-default text-md-start">
        <div class="container">
            <div class="row row-50 row-md-60">
                <div class="col-lg-8 col-xl-9">
                    <div class="inset-xl-right-100">
                        <div class="row row-50 row-md-60 row-lg-80">
                            <div class="col-12">
                                <article class="post post-modern box-xxl">
                                    <div class="post-modern-panel">
                                        <div><a class="post-modern-tag" href="#">News</a></div>
                                        <div>
                                            <time class="post-modern-time"
                                                datetime="{{ $blog->created_at->format('F j, Y') }}">{{ $blog->created_at->format('F j, Y') }}</time>
                                        </div>
                                    </div>
                                    <h3 class="post-modern-title">
                                        {{ $blog->title ?? '' }}
                                    </h3>
                                    <div class="post-modern-figure">
                                        <img src="{{ asset('sofaseller/module/blogs/' . $blog->image) }}" alt=""
                                            width="800" height="394" />
                                    </div>
                                    <p class="post-modern-text">
                                        {!! $blog->description ?? '' !!}
                                    </p>
                                    {{-- <p class="post-modern-text">
                                        At vero eos et accusam et justo duo dolores et ea rebum.
                                        Stet clita kasd gubergren, no sea takimata sanctus est
                                        Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet,
                                        consetetur sadipscing elitr, sed diam nonumy eirmod
                                        tempor invidunt ut labore et dolore magna aliquyam erat,
                                        sed diam voluptua. At vero eos et accusam et justo duo
                                        dolores et ea rebum. Stet clita kasd gubergren, no sea
                                        takimata sanctus est Lorem ipsum dolor sit amet. Stet
                                        clita kasd gubergren, no sea takimata sanctus est
                                    </p> --}}
                                </article>
                                <!-- Quote Classic-->
                                {{-- <article class="quote-classic quote-classic-2">
                                    <div class="quote-classic-text">
                                        <div class="q">
                                            With a new year come new decorating patterns, stylish,
                                            timeless pieces, and fresh takes on old styles.
                                        </div>
                                    </div>
                                </article>
                                <p>
                                    Phasellus sit amet consequat ante. Nulla mattis magna at
                                    mi ultrices vulputate. Phasellus ac diam sit amet justo
                                    tincidunt lacinia eu nec magna. Curabitur dapibus
                                    pellentesque ex, quis mattis sapien. Curabitur orci lorem,
                                    porttitor sed enim non, varius volutpat felis. Vestibulum
                                    euismod ex quis ultricies rhoncus. Phasellus eget egestas
                                    ipsum.
                                </p> --}}
                                <div class="single-post-bottom-panel">
                                    <div class="group-sm group-justify">
                                        <div>
                                            <div class="group-sm group-tags">
                                                <a class="link-tag" href="#">News</a><a class="link-tag"
                                                    href="#">Interior</a><a class="link-tag" href="#">Tips</a>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="group-xs group-middle">
                                                <span class="list-social-title">Share</span>
                                                <div>
                                                    <ul class="list-inline list-social list-inline-sm">
                                                        <li>
                                                            <a class="icon mdi mdi-facebook" href="#"></a>
                                                        </li>
                                                        <li>
                                                            <a class="icon mdi mdi-twitter" href="#"></a>
                                                        </li>
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
                            @if ($latestBlogs->count())
                                <div class="col-12">
                                    <h6 class="single-post-title">Related Posts</h6>
                                    <div class="row row-30">
                                        @foreach ($latestBlogs as $item)
                                            <div class="col-sm-6">
                                                <!-- Post Classic-->
                                                <article class="post post-classic box-md">
                                                    <a class="post-classic-figure"
                                                        href="{{ route('front.blog.detail', $item->slug) }}"><img
                                                            src="{{ asset('sofaseller/module/blogs/' . $item->image) }}"
                                                            alt="" width="370" height="239" /></a>
                                                    <div class="post-classic-content">
                                                        <div class="post-classic-time">
                                                            <time
                                                                datetime="{{ $item->created_at->diffForHumans() }}">{{ $item->created_at->diffForHumans() }}</time>
                                                        </div>
                                                        <h5 class="post-classic-title">
                                                            <a
                                                                href="{{ route('front.blog.detail', $item->slug) }}">{{ $item->title ?? '' }}</a>
                                                        </h5>
                                                        <p class="post-classic-text">
                                                            Est velox nuptia, cesaris. Est dexter turpis,
                                                            cesaris. Cum nixus persuadere, omnes fluctuies
                                                            promissio flavum
                                                        </p>
                                                    </div>
                                                </article>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endif

                            <div class="col-12">
                                <h6 class="single-post-title">{{ $blog?->comments->count() ?? 0 }} Comments</h6>

                                @if ($blog?->comments->count())
                                    @foreach ($blog->comments()->latest()->take(3)->get() as $comment)
                                        <div class="box-comment">
                                            <div class="unit flex-column flex-sm-row unit-spacing-md">
                                                <div class="unit-left"><a class="box-comment-figure" href="#"><img
                                                            src="{{ asset('images/user.jpg') }}" alt=""
                                                            width="119" height="119"></a></div>
                                                <div class="unit-body">
                                                    <div class="group-sm group-justify">
                                                        <div>
                                                            <div class="group-xs group-middle">
                                                                <h5 class="box-comment-author"><a
                                                                        href="#">{{ $comment->name ?? '' }}</a>
                                                            </div>
                                                        </div>
                                                        <div class="box-comment-time">
                                                            <time
                                                                datetime="2021-08-30">{{ $comment->created_at->format('M d, Y') ?? '' }}
                                                            </time>
                                                        </div>
                                                    </div>
                                                    <p class="box-comment-text">{{ $comment->comment ?? '' }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                            <div class="col-12">
                                <h6 class="single-post-title">Leave a comment</h6>
                                <form method="post" id="comment-form" action="{{ route('front.post.comment') }}">
                                    @csrf
                                    <input type="hidden" value="{{ $blog?->id ?? '' }}" name="blog_id">
                                    <div class="row row-20 row-md-30">
                                        <div class="col-sm-6">
                                            <div class="form-wrap">
                                                <input class="form-input" id="contact-first-name-2" type="text"
                                                    name="name" />
                                                <label class="form-label" for="contact-first-name-2">Full Name</label>
                                                <small class="text-danger error-name"></small>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-wrap">
                                                <input class="form-input" id="contact-last-name-2" type="email"
                                                    name="email" />
                                                <label class="form-label" for="contact-last-name-2">Email</label>
                                                <small class="text-danger error-email"></small>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-wrap">
                                                <label class="form-label" for="contact-message-2">Comment</label>
                                                <textarea class="form-input textarea-lg" id="contact-message-2" name="comment"></textarea>
                                                <small class="text-danger error-comment"></small>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-lg btn-secondary" type="submit">
                                        Submit
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3">
                    <div class="aside row row-30 row-md-50 justify-content-md-between">
                        <div class="aside-item col-12">
                            {{-- <div class="team-info box-sm">
                                <a class="team-info-figure" href="#"><img
                                        src="{{ asset('images/team-2-370x334.jpg') }}" alt="" width="123"
                                        height="123" /></a>
                                <h6 class="team-info-title">
                                    <a href="#">Rebecca Harison</a>
                                </h6>
                                <p class="team-info-text">
                                    Sed eleifend, lacus nec bibendum pulvinar, nibh
                                </p>
                            </div> --}}
                            <!-- RD Search Form-->
                            <form class="rd-search form-search" action="search-results.html" method="GET">
                                <div class="form-wrap">
                                    <label class="form-label" for="search-form">Search blog...</label>
                                    <input class="form-input" id="search-form" type="text" name="s"
                                        autocomplete="off" />
                                    <button class="btn-search fl-bigmug-line-search74" type="submit"></button>
                                </div>
                            </form>
                        </div>
                        @if ($categories->count())
                            <div class="aside-item col-sm-6 col-md-5 col-lg-12">
                                <h6 class="aside-title">Categories</h6>
                                <ul class="list-categories">
                                    <li>
                                        <a href="#">All</a><span
                                            class="list-categories-number">({{ $categories->count() }})</span>
                                    </li>
                                    @foreach ($categories as $item)
                                        <li>
                                            <a href="#">{{ $item->name }}</a><span
                                                class="list-categories-number">({{ $item->blogs->count() }})</span>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @if ($latestBlogs->count())
                            <div class="aside-item col-sm-6 col-lg-12">
                                <h6 class="aside-title">Latest Posts</h6>
                                <div class="row row-20 row-lg-30 gutters-10">

                                    @foreach ($latestBlogs as $item)
                                        <div class="col-6 col-lg-12">
                                            <!-- Post Minimal-->
                                            <article class="post post-minimal">
                                                <div
                                                    class="unit unit-spacing-sm flex-column flex-lg-row align-items-lg-center">
                                                    <div class="unit-left">
                                                        <a class="post-minimal-figure"
                                                            href="{{ route('front.blog.detail', $item->slug) }}"><img
                                                                src="{{ asset('sofaseller/module/blogs/' . $item->image) }}"
                                                                alt="" width="106" height="104" /></a>
                                                    </div>
                                                    <div class="unit-body">
                                                        <p class="post-minimal-title">
                                                            <a
                                                                href="{{ route('front.blog.detail', $item->slug) }}">{{ $item->title ?? '' }}</a>
                                                        </p>
                                                        <div class="post-minimal-time">
                                                            <time
                                                                datetime="{{ $item->created_at->diffForHumans() }}">{{ $item->created_at->diffForHumans() }}</time>
                                                        </div>
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
            </div>
        </div>
    </section>
@endsection
@section('script')
    <script>
        $(document).ready(function() {

            $('#comment-form').on('submit', function(e) {
                e.preventDefault();

                let form = $(this);
                let formData = new FormData(this);

                // clear previous errors
                $('.text-danger').text('');
                $('.form-input, textarea').removeClass('is-invalid');

                $.ajax({
                    url: form.attr('action'),
                    method: "POST",
                    data: formData,
                    processData: false,
                    contentType: false,

                    beforeSend: function() {
                        form.find('button[type=submit]')
                            .prop('disabled', true)
                            .text('Submitting...');
                    },

                    success: function(response) {
                        if (response.status) {
                            form[0].reset();
                            toastr.success(response.message);
                            setTimeout(function() {
                                location.reload();
                            }, 2500); // 2 seconds
                        }
                    },

                    error: function(xhr) {
                        if (xhr.status === 422) {
                            let errors = xhr.responseJSON.errors;

                            $.each(errors, function(field, messages) {
                                $('.error-' + field).text(messages[0]);
                                $('[name="' + field + '"]').addClass('is-invalid');
                            });
                        }
                    },

                    complete: function() {
                        form.find('button[type=submit]')
                            .prop('disabled', false)
                            .text('Submit');
                    }
                });

            });

        });
    </script>
@endsection
