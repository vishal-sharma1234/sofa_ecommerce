@section('title', 'What We Offer')
@extends('layouts.front.master')
@section('content')
    <section class="breadcrumbs-custom">
        <div class="parallax-container" data-parallax-img="images/bg-blog-2.jpg">
            <div class="material-parallax parallax"><img src="images/bg-blog-2.jpg" alt=""
                    style="display: block; transform: translate3d(-50%, 135px, 0px);"></div>
            <div class="breadcrumbs-custom-body parallax-content context-dark">
                <div class="container">
                    <h2 class="breadcrumbs-custom-title">What We Offer</h2>
                </div>
            </div>
        </div>
        <div class="breadcrumbs-custom-footer">
            <div class="container">
                <ul class="breadcrumbs-custom-path">
                    <li><a href="/">Home</a></li>
                    <li class="active">What We Offer</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="section section-xl bg-default">
        <div class="container">
            <div class="row row-30 box-ordered">
                <div class="col-sm-6 col-lg-3">
                    <article class="box-icon-modern">
                        <div class="box-icon-modern-header">
                            <div class="box-icon-modern-count box-ordered-item"></div>
                            <div class="box-icon-modern-icon"><i class="fa fa-location"></i></div>
                        </div>
                        <h4 class="box-icon-modern-title"><a href="#">Free shipping</a></h4>
                        <p class="box-icon-modern-text">Cur tantas regiones barbarorum peat dibus obiit, tregiones
                            barbarorum peat dibus obiit, tot mariata</p>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <article class="box-icon-modern">
                        <div class="box-icon-modern-header">
                            <div class="box-icon-modern-count box-ordered-item"></div>
                            <div class="box-icon-modern-icon"><i class="fa fa-chair"></i></div>
                        </div>
                        <h4 class="box-icon-modern-title"><a href="#">Quality furniture</a></h4>
                        <p class="box-icon-modern-text">Pellentesque cursus imperdiet magna quis euismod. Aenean ut aliquet
                            dolor. Integer sodales tortor.</p>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <article class="box-icon-modern">
                        <div class="box-icon-modern-header">
                            <div class="box-icon-modern-count box-ordered-item"></div>
                            <div class="box-icon-modern-icon"><i class="fa fa-heart"></i></div>
                        </div>
                        <h4 class="box-icon-modern-title"><a href="#">Unique Decor</a></h4>
                        <p class="box-icon-modern-text">Nam a congue nibh. Morbi cursus nisi ac ex malesuada, ac pharetra
                            augue sodales. Nullam sit amet.</p>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <article class="box-icon-modern">
                        <div class="box-icon-modern-header">
                            <div class="box-icon-modern-count box-ordered-item"></div>
                            <div class="box-icon-modern-icon"><i class="fa fa-gift"></i></div>
                        </div>
                        <h4 class="box-icon-modern-title"><a href="#">Gifts for clients</a></h4>
                        <p class="box-icon-modern-text">Curabitur orci lorem, porttitor sed enim non, varius volutpat felis.
                            Vestibulum euismod ex quis ultricies.</p>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section class="parallax-container" data-parallax-img="{{ asset('images/parallax-6.jpg') }}">
        <div class="material-parallax parallax"><img src="{{ asset('images/parallax-6.jpg') }}" alt=""
                style="display: block; transform: translate3d(-50%, 83px, 0px);"></div>
        <div class="parallax-content section-xxl context-dark text-md-start">
            <div class="container">
                <div class="row row-30 justify-content-center align-items-center align-items-md-end">
                    <div class="col-lg-3">
                        <h3 class="text-spacing-100 wow fadeInLeft"
                            style="visibility: visible; animation-name: fadeInLeft;">Stay <span
                                class="fw-light">connected</span>
                        </h3>
                        <p class="wow fadeInLeft" data-wow-delay=".1s"
                            style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;">Subscribe to our
                            newsletter</p>
                    </div>
                    <div class="col-lg-8 col-xl-9 inset-lg-bottom-10">
                        <!-- RD Mailform-->
                        <form class="rd-form rd-mailform rd-form-inline form-lg rd-form-text-center"
                            data-form-output="form-output-global" id="subscribe-form" data-form-type="subscribe"
                            method="post" action="#" novalidate="novalidate">
                            @csrf
                            <div class="form-wrap wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                                <input class="form-input form-control-has-validation" id="subscribe-form-0-email"
                                    type="email" name="email" fdprocessedid="q15umb"><span
                                    class="form-validation"></span>
                                <label class="form-label rd-input-label" data-constraints="@Email"
                                    for="subscribe-form-0-email">Enter your e-mail
                                    address</label>
                            </div>
                            <div class="form-button wow fadeInRight"
                                style="visibility: visible; animation-name: fadeInRight;">
                                <button class="btn btn-shadow-2 btn-zakaria btn-lg btn-primary" type="submit"
                                    fdprocessedid="hi4m17">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-sm section-last bg-default">
        <div class="container">
            <!-- Bootstrap collapse-->
            <div class="accordion-group-custom accordion-group-corporate" id="accordion1" role="tablist"
                aria-multiselectable="false">
                <div class="row">
                    @if ($faqs->count())
                        @foreach ($faqs as $faq)
                            <article class="accordion-item accordion-corporate">
                                <h4 class="accordion-heading" id="accordion1-accordion-head-folcjxpj">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#accordion1-accordion-body-nemppaag"
                                        aria-controls="accordion1-accordion-body-nemppaag" aria-expanded="false"
                                        fdprocessedid="vuufkc">{{ $faq->question ?? '' }}<span
                                            class="accordion-arrow"><span class="icon">→</span></span>
                                    </button>
                                </h4>
                                <div class="accordion-collapse collapse" id="accordion1-accordion-body-nemppaag"
                                    aria-labelledby="accordion1-accordion-head-folcjxpj" data-bs-parent="#accordion1">
                                    <div class="accordion-body">
                                        <p>{{ $faq->answer ?? '' }}</p>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    @endif
                    {{-- <article class="accordion-item accordion-corporate">
                        <h4 class="accordion-heading" id="accordion1-accordion-head-oakkejsx">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#accordion1-accordion-body-qmelkjee"
                                aria-controls="accordion1-accordion-body-qmelkjee" aria-expanded="true"
                                fdprocessedid="auk0vb">In what formats are your templates available?<span
                                    class="accordion-arrow"><span class="icon">→</span></span>
                            </button>
                        </h4>
                        <div class="accordion-collapse collapse show" id="accordion1-accordion-body-qmelkjee"
                            aria-labelledby="accordion1-accordion-head-oakkejsx" data-bs-parent="#accordion1">
                            <div class="accordion-body">
                                <p>Website templates are available in Photoshop and HTML formats. Fonts are included
                                    with Photoshop file. In most templates HTML is compatible with Adobe® Dreamweaver®
                                    and Microsoft Frontpage®.</p>
                            </div>
                        </div>
                    </article>
                    <article class="accordion-item accordion-corporate">
                        <h4 class="accordion-heading" id="accordion1-accordion-head-sphkliqv">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#accordion1-accordion-body-bmukykvk"
                                aria-controls="accordion1-accordion-body-bmukykvk" aria-expanded="false"
                                fdprocessedid="se0n6u">Do you provide any scripts with your templates?<span
                                    class="accordion-arrow"><span class="icon">→</span></span>
                            </button>
                        </h4>
                        <div class="accordion-collapse collapse" id="accordion1-accordion-body-bmukykvk"
                            aria-labelledby="accordion1-accordion-head-sphkliqv" data-bs-parent="#accordion1">
                            <div class="accordion-body">
                                <p>Our templates do not include any additional scripts. Newsletter subscriptions, search
                                    fields, forums, image galleries (in HTML versions of Flash products) are inactive.
                                    Basic scripts can be easily added at www.zemez.io If you are not sure that the
                                    element you’re interested in is active please contact our Support Chat for
                                    clarification.</p>
                            </div>
                        </div>
                    </article>
                    <article class="accordion-item accordion-corporate accordion-corporate-2">
                        <h4 class="accordion-heading" id="accordion1-accordion-head-guimgpvk">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#accordion1-accordion-body-wauaiwxl"
                                aria-controls="accordion1-accordion-body-wauaiwxl" aria-expanded="false"
                                fdprocessedid="z2ygfp">What do I receive when I order a template?<span
                                    class="accordion-arrow"><span class="icon">→</span></span>
                            </button>
                        </h4>
                        <div class="accordion-collapse collapse" id="accordion1-accordion-body-wauaiwxl"
                            aria-labelledby="accordion1-accordion-head-guimgpvk" data-bs-parent="#accordion1">
                            <div class="accordion-body">
                                <p>After you complete the payment via our secure form you will receive the instructions
                                    for downloading the product. The source files in the download package can vary based
                                    on the type of the product you have purchased.</p>
                            </div>
                        </div>
                    </article>
                    <article class="accordion-item accordion-corporate">
                        <h4 class="accordion-heading" id="accordion1-accordion-head-folcjxpj">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#accordion1-accordion-body-nemppaag"
                                aria-controls="accordion1-accordion-body-nemppaag" aria-expanded="false"
                                fdprocessedid="vuufkc">What am I allowed to do with the templates?<span
                                    class="accordion-arrow"><span class="icon">→</span></span>
                            </button>
                        </h4>
                        <div class="accordion-collapse collapse" id="accordion1-accordion-body-nemppaag"
                            aria-labelledby="accordion1-accordion-head-folcjxpj" data-bs-parent="#accordion1">
                            <div class="accordion-body">
                                <p>You may build a website using the template in any way you like. You may not resell or
                                    redistribute templates (like we do); claim intellectual or exclusive ownership to
                                    any of our products, modified or unmodified. All products are property of content
                                    providing companies and individuals. You are also not allowed to make more than one
                                    project using the same template (you have to purchase the same template once more in
                                    order to make another project with the same design).</p>
                            </div>
                        </div>
                    </article>
                    <article class="accordion-item accordion-corporate">
                        <h4 class="accordion-heading" id="accordion1-accordion-head-ujmafwyq">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#accordion1-accordion-body-qbmmnyvx"
                                aria-controls="accordion1-accordion-body-qbmmnyvx" aria-expanded="false"
                                fdprocessedid="mbv8lv">What is a unique/non-unique purchase?<span
                                    class="accordion-arrow"><span class="icon">→</span></span>
                            </button>
                        </h4>
                        <div class="accordion-collapse collapse" id="accordion1-accordion-body-qbmmnyvx"
                            aria-labelledby="accordion1-accordion-head-ujmafwyq" data-bs-parent="#accordion1">
                            <div class="accordion-body">
                                <p>Non-exclusive purchase means that other people can buy the template you have chosen
                                    some time later. Exclusive or unique purchase guarantees that you are the last
                                    person to buy this template. After an exclusive purchase occurs the template is
                                    being permanently removed from the sales directory and will never be available to
                                    other customers again. Only you and people who bought the template before you will
                                    own it.</p>
                            </div>
                        </div>
                    </article>
                    <article class="accordion-item accordion-corporate">
                        <h4 class="accordion-heading" id="accordion1-accordion-head-oybfvmgq">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#accordion1-accordion-body-kslkuvdc"
                                aria-controls="accordion1-accordion-body-kslkuvdc" aria-expanded="false"
                                fdprocessedid="wdnycx">How can I pay for my order?<span class="accordion-arrow"><span
                                        class="icon">→</span></span>
                            </button>
                        </h4>
                        <div class="accordion-collapse collapse" id="accordion1-accordion-body-kslkuvdc"
                            aria-labelledby="accordion1-accordion-head-oybfvmgq" data-bs-parent="#accordion1">
                            <div class="accordion-body">
                                <p>We accept Visa, MasterCard, and American Express credit and debit cards for your
                                    convenience.</p>
                            </div>
                        </div>
                    </article> --}}
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
@section('script')
    <script>
        /* Form Submit */
        $('#subscribe-form').on('submit', function(e) {
            e.preventDefault();

            let formData = new FormData(this);

            // $.ajax({
            // url: $(this).attr('action'),
            $.ajax({
                url: "{{ route('front.subscribe') }}",
                method: "POST",
                data: formData,
                processData: false,
                contentType: false,
                beforeSend: function() {
                    $('.form-validation').html('');
                },
                success: function(response) {

                    toastr.success(response.message);

                    setTimeout(function() {
                        window.location.reload(true);
                    }, 2000);

                    $('#subscribe-form')[0].reset();

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
    </script>
@endsection
