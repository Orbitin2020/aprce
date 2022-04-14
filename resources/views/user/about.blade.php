@extends('layouts_user.master')
@section('content')
    <!--Page Title-->
    <section class="page-title" style="background-image:url(assets_user/images/background/5.jpg);background-color:#D20000">
        <div class="auto-container">
            <h1 >About Us</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{route('user.index')}}">Home</a></li>
                <li><a href="{{route('user.about')}}">About</a></li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!-- About Section -->
    <section class="about-section">
        <div class="anim-icons full-width">
            <span class="icon icon-circle-blue wow fadeIn"></span>
            {{-- <span class="icon icon-dots wow fadeInleft"></span> --}}
            <span class="icon icon-circle-1 wow zoomIn"></span>
        </div>
        <div class="auto-container">
            <div class="row">
                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="title">ABOUT EVENT</span>
                            <h2>Welcome to the World Digital Conference 2020</h2>
                            <div class="text">Dolor sit amet consectetur elit sed do eiusmod tempor incd idunt labore et dolore magna aliqua enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat.</div>
                        </div>
                        <ul class="list-style-one">
                            <li>Multiple Announcements during the event.</li>
                            <li>Logo & company details on the WordCamp.</li>
                            <li>Dedicated blog post thanking each Gold.</li>
                            <li>Acknowledgment and opening and closing.</li>
                        </ul>
                        <div class="btn-box">
                            <a href="" class="theme-btn btn-style-three" style="background: #D20000">
                                <span class="btn-title">Register Now</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Image Column -->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="image-box">
                        <figure class="image wow fadeIn"><img src="{{asset('assets_user/images/gallery/about-pict.png')}}" alt=""></figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End About Section -->

    <!-- Fun Fact Section -->
    <section class="fun-fact-section style-two" style="background-color:#D20000">
        <div class="auto-container">
            <div class="fact-counter">
                <div class="row clearfix">

                    <!--Column-->
                    <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="count-box">
                            <span class="icon icon_headphones" style="background-color: white;color:#D20000"></span>
                            <span class="count-text" data-speed="3000" data-stop="190">0</span>
                            <h4 class="counter-title" style="color: white">Participants</h4>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                        <div class="count-box">
                            <span class="icon icon_ribbon_alt" style="background-color: white;color:#D20000"></span>
                            <span class="count-text" data-speed="3000" data-stop="62">0</span>
                            <h4 class="counter-title" style="color: white">Awards Win</h4>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                        <div class="count-box">
                            <span class="icon icon_like" style="background-color: white;color:#D20000"></span>
                            <span class="count-text" data-speed="3000" data-stop="54">0</span>
                            <h4 class="counter-title" style="color: white">Certified Teachers</h4>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="1200ms">
                        <div class="count-box">
                            <span class="icon icon_book_alt" style="background-color: white;color:#D20000"></span>
                            <span class="count-text" data-speed="3000" data-stop="38">0</span>
                            <h4 class="counter-title" style="color: white">Courses</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Fun Fact Section -->

    <!--Sponsor Section-->
    <section class="clients-section-three" style="">
        <div class="sec-title text-center">
            <span class="title">Our Sponsor</span>
        </div>
        <div class="auto-container">
            <div class="sponsors-outer">
                <div class="sponsors-carousel owl-carousel owl-theme">
                    <!-- Client Block -->
                    @foreach ($sponsor as $spon)
                    <div class="client-block">
                        <figure class="image-box"><a href="#"><img src="{{asset('uploads/sponsor/'.$spon['gambar'])}}" alt=""></a></figure>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!--End Sponsor Section-->

     <!-- Event Info Section -->
    <section class="event-info-section">
        <div class="auto-container">
            <div class="row">
                <!-- Info Column -->
                <div class="info-column col-lg-6 col-md-12 col-sm-12 order-2">
                    <div class="inner-column">
                        <div class="sec-title style-two">
                            <span class="title">Reach us</span>
                            <h2>Direction for the <br>Event hall</h2>
                        </div>

                        <div class="event-info-tabs tabs-box">
                            <!--Tabs Box-->
                            <ul class="tab-buttons clearfix">
                                <li class="tab-btn active-btn" data-tab="#tab1">Time</li>
                                <li class="tab-btn" data-tab="#tab2">Venue</li>
                                <li class="tab-btn" data-tab="#tab3">How to</li>
                            </ul>

                            <div class="tabs-content">
                                <!--Tab-->
                                <div class="tab active-tab" id="tab1">
                                    <h4><span class="icon far fa-calendar"></span> January 20, 2020</h4>
                                    <div class="text">9.00 AM - 04.00 PM</div>
                                    <ul class="info-list">
                                        <li><span class="icon icon_profile"></span> Dianne Ameter</li>
                                        <li><span class="icon icon_phone"></span> <a href="tel:+690-147-265-345">+123 456 7890</a></li>
                                        <li><span class="icon icon_mail"></span> <a href="mailto:sopport@Eventrox.com">sopport@Eventrox.com</a></li>
                                    </ul>
                                </div>

                                <!--Tab-->
                                <div class="tab" id="tab2">
                                    <h4><span class="icon fa fa-map-marker-alt"></span>Pearl hotel, New york, USA</h4>
                                    <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. Aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</div>
                                </div>

                                <!--Tab-->
                                <div class="tab" id="tab3">
                                    <h4><span class="icon fa fa-directions"></span> How to get there</h4>
                                    <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua. Aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Image Column -->
                <div class="map-column col-lg-6 col-md-12 col-sm-12">
                    <!--Map Outer-->
                    <div class="map-outer">
                        <!--Map Canvas-->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.1592746665556!2d106.84278481435332!3d-6.242729595481177!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3b9259615c5%3A0x1fa5a36bd5f609ec!2sSOHO%20Pancoran!5e0!3m2!1sid!2sid!4v1649906085873!5m2!1sid!2sid" height="435"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Event Info Section -->
@endsection