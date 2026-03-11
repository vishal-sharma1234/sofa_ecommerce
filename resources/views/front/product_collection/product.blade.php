@extends('layouts.front.master')
@section('title', $product->name)
@section('content')
    <section class="breadcrumbs-custom">
        <div class="breadcrumbs-custom-footer">
            <div class="container">
                <ul class="breadcrumbs-custom-path">
                    <li><a href="/">Home</a></li>
                    <li><a href="/shop">Shop</a></li>
                    <li class="active">{{ $product->name }}</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="section section-sm section-first bg-default">
        <div class="container">
            <div class="row row-30">

                <div class="col-lg-6">
                    <div class="slick-vertical slick-product">
                        <!-- Slick Carousel-->
                        <div class="slick-slider carousel-parent" id="carousel-parent" data-items="1" data-swipe="true"
                            data-child="#child-carousel" data-for="#child-carousel">

                            @if ($product->images)
                                @foreach (json_decode($product->images) as $key => $image)
                                    <div class="item">
                                        <div class="slick-product-figure"><img
                                                src="{{ asset('sofaseller/product/' . $product->id . '/' . $image) }}"
                                                alt="" width="530" height="480" />
                                        </div>
                                    </div>
                                @endforeach
                            @endif

                            {{-- <div class="item">
                                <div class="slick-product-figure"><img src="images/single-product-2-530x480.png"
                                        alt="" width="530" height="480" />
                                </div>
                            </div>
                            <div class="item">
                                <div class="slick-product-figure"><img src="images/single-product-3-530x480.png"
                                        alt="" width="530" height="480" />
                                </div>
                            </div> --}}

                        </div>
                        <div class="slick-slider child-carousel slick-nav-1" id="child-carousel" data-arrows="true"
                            data-items="3" data-sm-items="3" data-md-items="3" data-lg-items="3" data-xl-items="3"
                            data-xxl-items="3" data-md-vertical="true" data-for="#carousel-parent">

                            @if ($product->images)
                                @foreach (json_decode($product->images) as $key => $image)
                                    <div class="item">
                                        <div class="slick-product-figure"><img
                                                src="{{ asset('sofaseller/product/' . $product->id . '/' . $image) }}"
                                                alt="" width="530" height="480" />
                                        </div>
                                    </div>
                                @endforeach
                            @endif

                            {{-- <div class="item">
                                <div class="slick-product-figure"><img src="images/single-product-2-530x480.png"
                                        alt="" width="530" height="480" />
                                </div>
                            </div>

                            <div class="item">
                                <div class="slick-product-figure"><img src="images/single-product-3-530x480.png"
                                        alt="" width="530" height="480" />
                                </div>
                            </div> --}}

                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-product">
                        <h3 class="text-transform-none fw-medium">{{ $product->name }}</h3>
                        <div class="group-md group-middle">
                            {{-- <div class="single-product-price">₹{{ $product->current_price }}</div> --}}
                            {{-- <div class="single-product-price"><a class="fa fa-whatsapp" href="https://wa.me/8078649462?text=Hello%20I%20need%20help">Enquiry Now</a></div> --}}
                            <div class="single-product-price"><a class="fa fa-whatsapp"
                                    href="https://wa.me/8078649462?text=Is%20this%20product%20available%3F%20{{ urlencode(url()->current()) }}"
                                    target="_blank" style="font-size: xxx-large;"></a></div>
                            <div class="single-product-rating">
                                <span class="icon mdi mdi-star" style="font-size: xx-large;"></span>
                                <span class="icon mdi mdi-star" style="font-size: xx-large;"></span>
                                <span class="icon mdi mdi-star" style="font-size: xx-large;"></span>
                                <span class="icon mdi mdi-star" style="font-size: xx-large;"></span>
                                <span class="icon mdi mdi-star-half" style="font-size: xx-large;"></span>
                            </div>
                        </div>
                        <p>{{ $product->description ?? '' }}</p>
                        <hr class="hr-gray-100">
                        <ul class="list list-description">
                            <li><span>Category:</span><span>{{ $product->category->name ?? '' }}</span></li>
                            <li><span>Weight:</span><span>1 lbs</span></li>
                            <li><span>Dimensions:</span><span>60 x 60 x 90 cm</span></li>
                        </ul>
                        <div class="group-xs group-middle">
                            {{-- <div class="product-stepper">
                                <div class="stepper "><input class="form-input stepper-input" type="number"
                                        data-zeros="true" value="1" min="1" max="1000"
                                        fdprocessedid="3zj2hs"><span class="stepper-arrow up"></span><span
                                        class="stepper-arrow down"></span></div>
                            </div> --}}
                            <div><a class="btn btn-lg btn-secondary btn-zakaria" href="javascript:void(0)" id="addToCart"
                                    data-product-id="{{ $product->id }}">Add to cart</a>
                            </div>
                            <div><a class="btn btn-lg btn-secondary btn-zakaria"
                                    href="https://wa.me/8078649462?text=Is%20this%20product%20available%3F%20{{ urlencode(url()->current()) }}"
                                    target="_blank">Enquiry
                                    Now</a>
                            </div>
                        </div>
                        <hr class="hr-gray-100">
                        <div class="group-xs group-middle"><span class="list-social-title">Share</span>
                            <div>
                                <ul class="list-inline list-social list-inline-sm">
                                    <li><a class="icon mdi mdi-facebook" href="#"></a>
                                    </li>
                                    <li><a class="icon mdi mdi-twitter" href="#"></a>
                                    </li>
                                    <li><a class="icon mdi mdi-instagram" href="#"></i></a>
                                    </li>
                                    <li><a class="icon mdi mdi-google-plus" href="#"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Bootstrap tabs-->
            <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-1">
                <!-- Nav tabs-->
                <div class="nav-tabs-wrap">
                    <ul class="nav nav-tabs nav-tabs-1">
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-1-1"
                                data-bs-toggle="tab">Reviews</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-2"
                                data-bs-toggle="tab">Additional information</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-3"
                                data-bs-toggle="tab">Delivery and payment</a></li>
                    </ul>
                </div>
                <!-- Tab panes-->
                <div class="tab-content tab-content-1">
                    <div class="tab-pane fade show active" id="tabs-1-1">
                        @if ($product->reviews->count())
                            @foreach ($product->reviews as $review)
                                <div class="box-comment">
                                    <div class="unit flex-column flex-sm-row unit-spacing-md">
                                        <div class="unit-left"><a class="box-comment-figure" href="#">
                                                <img src="{{ asset('sofaseller/website/review/' . $review->image) }}"
                                                    alt="" width="119" height="119"></a>
                                        </div>
                                        <div class="unit-body">
                                            <div class="group-sm group-justify">
                                                <div>
                                                    <div class="group-xs group-middle">
                                                        <h5 class="box-comment-author"><a
                                                                href="#">{{ $review->name ?? '' }}</a></h5>
                                                        <div class="box-rating"><span
                                                                class="icon mdi mdi-star"></span><span
                                                                class="icon mdi mdi-star"></span><span
                                                                class="icon mdi mdi-star"></span><span
                                                                class="icon mdi mdi-star"></span><span
                                                                class="icon mdi mdi-star-half"></span></div>
                                                    </div>
                                                </div>
                                                <div class="box-comment-time">
                                                    <time
                                                        datetime="{{ $review->created_at->diffForHumans() }}">{{ $review->created_at->diffForHumans() }}</time>
                                                </div>
                                            </div>
                                            <p class="box-comment-text">{{ $review->message ?? '' }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                        <h4 class="text-transform-none fw-medium">Leave a Review</h4>
                        <form class="rd-form rd-mailform" id="reviewForm" data-form-output="form-output-global"
                            data-form-type="contact" method="post" action="#" novalidate="novalidate"
                            enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" name="product_id" value="{{ $product->id ?? '' }}">
                            <div class="row row-20 row-md-30">
                                <div class="col-lg-12">
                                    <div class="row row-20 row-md-30">
                                        <div class="col-sm-3">
                                            <div class="form-wrap">
                                                <input class="form-input form-control-has-validation"
                                                    id="contact-first-name-2" type="text" name="name"
                                                    fdprocessedid="yiiyll"><span class="form-validation"></span>
                                                <label class="form-label rd-input-label" for="contact-first-name-2">Full
                                                    Name</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-wrap">
                                                <input class="form-input form-control-has-validation" id="contact-email-2"
                                                    type="email" name="email" fdprocessedid="clys5"><span
                                                    class="form-validation"></span>
                                                <label class="form-label rd-input-label"
                                                    for="contact-email-2">E-mail</label>
                                            </div>
                                        </div>

                                        <div class="col-sm-3">
                                            <div class="form-wrap">
                                                <input class="form-input form-control-has-validation" id="contact-phone-2"
                                                    type="text" name="phone" data-constraints="@Numeric"
                                                    fdprocessedid="6iu68"><span class="form-validation"></span>
                                                <label class="form-label rd-input-label"
                                                    for="contact-phone-2">Phone</label>
                                            </div>
                                        </div>

                                        <div class="col-sm-2">
                                            <div class="form-wrap">
                                                <input class="form-input form-control-has-validation" id="image"
                                                    type="file" name="image" fdprocessedid="clys5"
                                                    style="padding: revert;"><span class="form-validation"></span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-wrap">
                                        <label class="form-label rd-input-label" for="message">Message</label>
                                        <textarea class="form-input textarea-lg form-control-has-validation form-control-last-child" id="message"
                                            name="message" style="resize: none;"></textarea><span class="form-validation"></span>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-lg btn-secondary btn-zakaria" type="submit"
                                fdprocessedid="kdxtvq">Send Message</button>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="tabs-1-2">
                        <div class="single-product-info">
                            <div class="unit unit-spacing-md flex-column flex-sm-row align-items-sm-center">
                                <div class="unit-left"><span class="icon icon-80 mdi mdi-information-outline"></span>
                                </div>
                                <div class="unit-body">
                                    <p>In aliquet varius leo, ut convallis ligula consectetur quis. Quisque eu metus est.
                                        Praesent tristique mauris urna, sed mattis urna varius quis. Vestibulum fermentum,
                                        metus sed eleifend viverra, magna ipsum feugiat sem, id rutrum magna nulla a turpis.
                                        Maecenas laoreet, nibh at mattis mattis, nunc ligula scelerisque dolor, ac posuere
                                        lorem tellus vel purus. Interdum et malesuada fames ac ante ipsum primis in
                                        faucibus. Cras imperdiet ex et risus elementum pretium.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tabs-1-3">
                        <div class="single-product-info">
                            <div class="unit unit-spacing-md flex-column flex-sm-row align-items-sm-center">
                                <div class="unit-left"><span class="icon icon-80 mdi mdi-truck-delivery"></span></div>
                                <div class="unit-body">
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                        tempor invidunt ut labore et dolore magna aliquyam erat . At vero eos et accusam et
                                        justo duo dolores et ea rebum. Stet clita kasd gubergren.Aenean ultrices, metus at
                                        placerat venenatis, mi nibh convallis nulla, ut tempor massa risus mollis odio.
                                        Donec gravida ante ac ex faucibus auctor.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if ($relatedProducts->count())
        <section class="section section-sm section-last bg-default">
            <div class="container">
                <h4 class="fw-sbold">Related Products</h4>
                <div class="row row-lg row-30 row-lg-50 justify-content-center">

                    @foreach ($relatedProducts as $key => $item)
                        <div class="col-sm-6 col-md-5 col-lg-3">
                            <!-- Product-->
                            <article class="product">
                                <div class="product-body">
                                    <div class="product-figure"><img
                                            src="{{ asset('sofaseller/product/' . $item->id . '/' . $item->main_image) }}"
                                            alt="" width="129" height="172">
                                    </div>
                                    <h5 class="product-title"><a
                                            href="{{ route('product.detail', $product->slug) }}">{{ $item->name ?? '' }}</a>
                                    </h5>
                                </div><span class="product-badge product-badge-sale">Sale</span>
                                <div class="product-button-wrap">
                                    <div class="product-button"><a
                                            class="btn btn-secondary btn-zakaria fl-bigmug-line-search74"
                                            href="{{ route('product.detail', $item->slug) }}"><i
                                                class="fa fa-eye"></i></a></div>
                                    <div class="product-button">
                                        <a class="btn btn-primary btn-zakaria"
                                            href="https://wa.me/8078649462?text=Is%20this%20product%20available%3F%20{{ $item->name }}"
                                            target="_blank"><i class="fa fa-whatsapp"></i>
                                        </a>
                                    </div>
                                </div>
                            </article>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

@endsection
@section('script')
    <script>
        $(document).ready(function() {

            let productId = "{{ $product->id }}";

            $.post("{{ route('store.recent.product') }}", {
                product_id: productId,
                _token: "{{ csrf_token() }}"
            });



            /* Form Submit */
            $('#reviewForm').on('submit', function(e) {
                e.preventDefault();

                let formData = new FormData(this);

                // $.ajax({
                // url: $(this).attr('action'),
                $.ajax({
                    url: "{{ route('front.add.review') }}",
                    method: "POST",
                    data: formData,
                    processData: false, // important for file upload
                    contentType: false, // important for file upload
                    beforeSend: function() {
                        $('.form-validation').html('');
                    },
                    success: function(response) {
                        setTimeout(function() {
                            window.location.reload(true);
                            // window.location.href = "{{ route('admin.blogs') }}";
                        }, 2000);


                        // alert('Review submitted successfully!');
                        $('#reviewForm')[0].reset();



                    },
                    error: function(xhr) {
                        if (xhr.status === 422) {
                            let errors = xhr.responseJSON.errors;
                            $.each(errors, function(key, value) {
                                $('[name="' + key + '"]')
                                    .closest('.form-wrap')
                                    .find('.form-validation')
                                    .html(value[0]);
                            });
                        } else {
                            alert('Something went wrong. Please try again.');
                        }
                    }
                });
            });


        });

        /* Add To Cart */
        $('#addToCart').on('click', function(e) {
            e.preventDefault();
            $.ajax({
                url: "{{ route('front.add.to.cart') }}",
                type: "post",
                data: {
                    _token: "{{ csrf_token() }}",
                    id: "{{ $product->id }}",
                    name: "{{ $product->name }}",
                    slug: "{{ $product->slug }}",
                    image: "{{ $product->main_image }}"
                },
                success: function(res) {
                    toastr.success(res.message);
                },
                error: function(xhr) {
                    alert(xhr.responseText || 'Request failed');
                }
            });
        });

        let phone = "8078649462";
        let message = "Is this product available? " + window.location.href;
        let url = "https://wa.me/" + phone + "?text=" + encodeURIComponent(message);

        document.getElementById("whatsappLink").href = url;
    </script>
@endsection
