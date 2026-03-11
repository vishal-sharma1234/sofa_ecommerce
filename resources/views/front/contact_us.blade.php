@section('title', 'Contact Us')
@extends('layouts.front.master')
@section('content')
{{-- migrate --}}
    <section class="breadcrumbs-custom">
        <div class="parallax-container" data-parallax-img="images/bg-about.jpg">
            <div class="material-parallax parallax"><img src="images/bg-about.jpg" alt=""
                    style="display: block; transform: translate3d(-50%, 202px, 0px);"></div>
            <div class="breadcrumbs-custom-body parallax-content context-dark">
                <div class="container">
                    <h2 class="breadcrumbs-custom-title">Contact Us</h2>
                </div>
            </div>
        </div>
        <div class="breadcrumbs-custom-footer">
            <div class="container">
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Contact Us</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="section section-xl bg-default text-md-start">
        <div class="container">
            <div class="title-classic">
                <h3 class="title-classic-title">Get in touch</h3>
                <p class="title-classic-subtitle">We are available 24/7 by fax, e-mail or by phone. You can also use our <br
                        class="d-none d-lg-block">quick contact form to ask a question about our products.</p>
            </div>
            <form id="enquiry-form" method="post" action="#" novalidate="novalidate">
                @csrf
                <div class="row row-20 row-md-30">
                    <div class="col-md-12 col-lg-12">
                        <div class="row row-20 row-md-30">
                            <div class="col-sm-4">
                                <div class="form-wrap">
                                    <input class="form-input form-control-has-validation" id="contact-full-name-2"
                                        type="text" name="name" fdprocessedid="t34s4"><span
                                        class="form-validation"></span>
                                    <label class="form-label rd-input-label" for="contact-full-name-2">Full Name</label>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-wrap">
                                    <input class="form-input form-control-has-validation" id="contact-email-2"
                                        type="email" name="email" fdprocessedid="93accp"><span
                                        class="form-validation"></span>
                                    <label class="form-label rd-input-label" for="contact-email-2">E-mail</label>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-wrap">
                                    <input class="form-input form-control-has-validation" id="contact-phone-2"
                                        type="text" name="phone" fdprocessedid="27ffd9"><span
                                        class="form-validation"></span>
                                    <label class="form-label rd-input-label" for="contact-phone-2">Phone</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="form-wrap">
                            <label class="form-label rd-input-label" for="contact-message-2">Message</label>
                            <textarea class="form-input textarea-lg form-control-has-validation form-control-last-child" id="contact-message-2"
                                name="message"></textarea><span class="form-validation"></span>
                        </div>
                    </div>
                </div>
                <button class="btn btn-lg btn-secondary btn-zakaria" type="submit" fdprocessedid="5r3b8h">Send
                    Message</button>
            </form>
        </div>
    </section>


    <section class="section section-xl bg-gray-4">
        <div class="container">
            <div class="row row-30 justify-content-center">
                <div class="col-sm-6 col-md-4">
                    <h4>Phones</h4>
                    <ul class="contacts-classic">
                        <li>Office <a href="tel:+918078649462">+918078649462</a>
                        </li>
                        {{-- <li>Fax <a href="tel:#">+1 (409) 987–5874</a>
                        </li> --}}
                    </ul>
                </div>
                <div class="col-sm-6 col-md-4">
                    <h4>Address</h4>
                    <div class="contacts-classic"><a href="#">35, Goving Nagar 3rd Akeda <br>Road no. 19,
                            Jaipur (Raj.) 302013</a></div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <h4>E-mails</h4>
                    <ul class="contacts-classic">
                        <li><a href="mailTo:vishalsharma807864@gmail.com">vishalsharma807864@gmail.com</a></li>
                        <li><a href="mailTo:rkwebvishal@gmail.com">rkwebvishal@gmail.com</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <section class="section">
        <!-- RD Google Map-->
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3378.522899418508!2d75.8090488!3d27.0178013!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396daff98f680e5d%3A0x6118dbfa56df5b2e!2sElite%20Sofa%20Works!5e1!3m2!1sen!2sin!4v1768240012912!5m2!1sen!2sin"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            /* Form Submit */
            $('#enquiry-form').on('submit', function(e) {
                e.preventDefault();

                let formData = new FormData(this);

                // $.ajax({
                // url: $(this).attr('action'),
                $.ajax({
                    url: "{{ route('front.add.enquiry') }}",
                    method: "POST",
                    data: formData,
                    processData: false,
                    contentType: false,
                    beforeSend: function() {
                        $('.form-validation').html('');
                    },
                    success: function(response) {
                        // alert('Review submitted successfully!');
                        if (response.success) {
                            $('#enquiry-form')[0].reset();
                            toastr.success(response.message);
                        }
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
    </script>
@endsection
