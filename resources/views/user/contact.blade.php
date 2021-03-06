@extends('layouts_user.master')
@section('content')
<!--Page Title-->
{{-- url(assets_user/images/background/5.jpg) --}}
<section class="page-title backgroundMerah"
    style="background-image:url(assets_user/images/background/semi-banner.jpg);">
    <div class="auto-container">
        <h1>Contact Us</h1>
        <ul class="bread-crumb clearfix">
            <li><a href="{{route('user.index')}}">Home</a></li>
            <li><a href="{{route('user.contact')}}">Contact</a></li>
        </ul>
    </div>
</section>
<!--End Page Title-->

<!-- Contact Page Section -->
<section class="contact-page-section">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="contact-column col-lg-4 col-md-12 col-sm-12 order-2">
                <div class="inner-column">
                    <div class="sec-title">
                        <h2>Contact Info</h2>
                    </div>
                    <ul class="contact-info">
                        <li>
                            <span class="icon fa fa-map-marker-alt"></span>
                            <p><strong>32, Breaking Street,</strong></p>
                            <p>2nd cros, Newyork ,USA 10002</p>
                        </li>

                        <li>
                            <span class="icon fa fa-phone-volume"></span>
                            <p><strong>Call Us</strong></p>
                            <p>+321 4567 89 012 & 79 023</p>
                        </li>

                        <li>
                            <span class="icon fa fa-envelope"></span>
                            <p><strong>Mail Us</strong></p>
                            <p><a href="mailto:support@example.com">Support@example.com</a></p>
                        </li>

                        <li>
                            <span class="icon fa fa-clock"></span>
                            <p><strong>Opening Time</strong></p>
                            <p>Mon - Sat: 09.00am to 18.00pm</p>
                        </li>
                    </ul>

                    <ul class="social-icon-two social-icon-colored">
                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-google"></i></a></li>
                        {{-- <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fab fa-pinterest"></i></a></li> --}}
                    </ul>
                </div>
            </div>

            <!-- Form Column -->
            <div class="form-column col-lg-8 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="contact-form">
                        <div class="sec-title">
                            <h2>Get in Touch</h2>
                        </div>
                        <form method="post" id="frm_contact">
                            {{ csrf_field() }}
                            <input type="hidden" name="_captcha" value="false">
                            <input type="hidden" name="_template" value="box">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="text" name="username" placeholder="Name" required="">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="text" name="phone" placeholder="Phone" required="">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="email" name="email" placeholder="Email" required="">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="text" name="subject" placeholder="Subject" required="">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <textarea name="message" placeholder="Message"></textarea>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <button onclick="contact()" class="theme-btn btn-style-one" type="button"
                                        name="submit-form"><span class="btn-title">Submit Now</span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Contact Page Section -->

<!-- Map Section -->
<section class="map-section">
    <div class="auto-container">
        <div class="map-outer">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25216.765666144616!2d144.9456413371385!3d-37.8112271492458!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642b8c21cb29b%3A0x1c045678462e3510!2sMelbourne%20VIC%203000%2C%20Australia!5e0!3m2!1sen!2s!4v1599237324751!5m2!1sen!2s"
                height="540"></iframe>
        </div>
    </div>
</section>
<!-- End Map Section -->
@endsection
@push('scripts')
<script>
    function contact() {
        $.ajax({
            // headers : {
            //     'X-CSRF-TOKEN' : "{{csrf_token()}}"
            // },
            method: 'POST',
            url: 'https://formsubmit.co/ajax/fikrihaidar24@gmail.com',
            data: $('#frm_contact').serialize(),
            beforeSend: function() {
                Swal.fire({
                    title: 'Please Wait...',
                    text: 'Your data is being processed!',
                    timer: 2000,
                    timerProgressBar: true,
                    didOpen: () => {
                        Swal.showLoading()
                    },
                })
            },
            success: function(res) {
                $('#frm_contact').trigger("reset");
                Swal.fire({
                    title: 'Action Success!',
                    icon: 'success',
                    text: 'Your Message Has Been Sent',
                    showConfirmButton: true
                })
            },
            error: function(xhr, ajaxOptions, thrownError) {
                $('#frm_contact').trigger("reset");
                Swal.fire({
                    title: 'Whoopsss....',
                    icon: 'error',
                    text: 'Your Message Has Not Been Sent',
                    showConfirmButton: true
                })
            }
        });
    }
</script>
@endpush