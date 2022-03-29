@extends('layouts_user.master')
@section('content')
    <!-- Banner Conference Two -->
    <section class="banner-conference-two" style="background-image: url(assets_user/images/background/6.jpg)">
        <!-- Icons -->
        {{-- <div class="icons parallax-scene-1">
            <!-- Icon One -->
            <div data-depth="0.20" class="icon-one parallax-layer" style="background-image:url(assets_user/images/icons/icon-1.png)"></div>
            <!-- Icon Two -->
            <div data-depth="0.50" class="icon-two parallax-layer" style="background-image:url(assets_user/images/icons/icon-2.png)"></div>
            <!-- Icon Three -->
            <div data-depth="0.10" class="icon-three parallax-layer" style="background-image:url(assets_user/images/icons/icon-3.png)"></div>
            <!-- Icon Four -->
            <div data-depth="0.30" class="icon-four parallax-layer" style="background-image:url(assets_user/images/icons/icon-4.png)"></div>
            <!-- Icon Five -->
            <div data-depth="0.10" class="icon-five parallax-layer" style="background-image:url(assets_user/images/icons/icon-5.png)"></div>
            <!-- Icon Six -->
            <div data-depth="0.20" class="icon-six parallax-layer" style="background-image:url(assets_user/images/icons/icon-6.png)"></div>
            <!-- Icon Seven -->
            <div data-depth="0.10" class="icon-seven parallax-layer" style="background-image:url(assets_user/images/icons/icon-7.png)"></div>
            <!-- Icon One -->
            <div data-depth="0.20" class="icon-eight parallax-layer" style="background-image:url(assets_user/images/icons/icon-1.png)"></div>
            <!-- Icon Two -->
            <div data-depth="0.50" class="icon-nine parallax-layer" style="background-image:url(assets_user/images/icons/icon-8.png)"></div>
            <!-- Icon Three -->
            <div data-depth="0.10" class="icon-ten parallax-layer" style="background-image:url(assets_user/images/icons/icon-3.png)"></div>
            <!-- Icon Four -->
            <div data-depth="0.30" class="icon-eleven parallax-layer" style="background-image:url(assets_user/images/icons/icon-4.png)"></div>
            <!-- Icon Five -->
            <div data-depth="0.10" class="icon-twelve parallax-layer" style="background-image:url(assets_user/images/icons/icon-5.png)"></div>
            <!-- Icon Six -->
            <div data-depth="0.20" class="icon-thirteen parallax-layer" style="background-image:url(assets_user/images/icons/icon-6.png)"></div>
            <!-- Icon Seven -->
            <div data-depth="0.10" class="icon-fourteen parallax-layer" style="background-image:url(assets_user/images/icons/icon-7.png)"></div>
        </div> --}}
        <div class="images-outer">
            {{-- <figure class="speaker-img"><img src="{{asset('assets_user/images/main-slider/banner_img.png')}}" alt=""></figure> --}}
        </div>

        <div class="auto-container">
            <div class="content-box">
                <span class="title">1st to 10 March 2020, Gold-Land Hotel, Canada</span>
                <h2>World Digital <br>Conference 2020</h2>
                <div class="time-counter"><div class="time-countdown clearfix" data-countdown="09/27/2022"></div></div>
                <div class="btn-box"><a href="buy-ticket.html" class="theme-btn btn-style-two"><span class="btn-title">Booking Now</span></a></div>
            </div>
        </div>
    </section>
    <!--End Banner Conference Two -->

    <!-- About Section -->
    <section class="about-section-two">
        <div class="anim-icons full-width">
            <span class="icon icon-circle-blue wow fadeIn"></span>
            <span class="icon icon-dots wow fadeInleft"></span>
            <span class="icon icon-circle-1 wow zoomIn"></span>
        </div>
        <div class="auto-container">
            <div class="row">
                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12 order-2">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="title">ABOUT MEETUP</span>
                            <h2>Welcome to the World <br>Digital Meetup 2020</h2>
                            <div class="text">Dolor sit amet consectetur elit sed do eiusmod tempor incd idunt labore et dolore magna aliqua enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat.</div>
                        </div>
                        <div class="row">
                            <div class="about-block col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <h4><span class="icon fa fa-map-marker-alt"></span> Where</h4>
                                    <div class="text">Pearl Hotel, New York, USA</div>
                                </div>
                            </div>
                            <div class="about-block col-lg-6 col-md-6 col-sm-12">
                                <div class="inner-box">
                                    <h4><span class="icon fa fa-clock"></span> when</h4>
                                    <div class="text">January 20, 2020 09:00 AM</div>
                                </div>
                            </div>
                        </div>
                        <button type="button" id="addSchedule" data-toggle="modal" data-target="#modalSchedule"
                        class="theme-btn btn-style-three"><span class="btn-title">Register Now</span></button>
                    </div>
                </div>

                <!-- Image Column -->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="image-box">
                        <figure class="image wow fadeIn"><img src="{{asset('assets_user/images/resource/about-img-2.jpg')}}" alt=""></figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End About Section -->

    <!-- Features Section Three -->
    <section class="features-section-three no-pd-top">
        <div class="auto-container">
            <div class="row">
                <!-- Feature Block -->
                <div class="feature-block-three col-lg-6 col-md-12 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="icon-box"><span class="icon flaticon-lecture"></span></div>
                        <h4><a href="about.html">Great Speakers</a></h4>
                        <div class="text">Dolor sit amet consectetur elit sed do eiusmod tempor incd idunt.</div>
                        <div class="link-box"><a href="about.html" class="theme-btn"><span class="fa fa-angle-right"></span></a></div>
                    </div>
                </div>

                <!-- Feature Block -->
                <div class="feature-block-three col-lg-6 col-md-12 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="icon-box"><span class="icon flaticon-search"></span></div>
                        <h4><a href="about.html">Experience</a></h4>
                        <div class="text">Dolor sit amet consectetur elit sed do eiusmod tempor incd idunt.</div>
                        <div class="link-box"><a href="about.html" class="theme-btn"><span class="fa fa-angle-right"></span></a></div>
                    </div>
                </div>

                <!-- Feature Block -->
                <div class="feature-block-three col-lg-6 col-md-12 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                    <div class="inner-box">
                        <div class="icon-box"><span class="icon flaticon-diamond-1"></span></div>
                        <h4><a href="about.html">Networking</a></h4>
                        <div class="text">Dolor sit amet consectetur elit sed do eiusmod tempor incd idunt.</div>
                        <div class="link-box"><a href="about.html" class="theme-btn"><span class="fa fa-angle-right"></span></a></div>
                    </div>
                </div>

                <!-- Feature Block -->
                <div class="feature-block-three col-lg-6 col-md-12 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                    <div class="inner-box">
                        <div class="icon-box"><span class="icon flaticon-success"></span></div>
                        <h4><a href="about.html">Party</a></h4>
                        <div class="text">Dolor sit amet consectetur elit sed do eiusmod tempor incd idunt.</div>
                        <div class="link-box"><a href="about.html" class="theme-btn"><span class="fa fa-angle-right"></span></a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Features Section -->

    <!-- Fluid Section One -->
    <section class="fluid-section-one">
        <div class="outer-box clearfix">

            <!-- Content Column -->
            <div class="content-column">
                <div class="shape-layers">
                    <div class="shape-2"></div>
                    <div class="shape-1"></div>
                </div>
                <div class="inner-column">
                    <h3>Modern Marketing <br>Summit Sydney 2018</h3>
                    <div class="text">Dolor sit amet consectetur elit sed do eiusmod tempor incd idunt labore et dolore magna aliqua enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat</div>
                    <div class="btn-box"><a href="buy-ticket.html" class="theme-btn btn-style-four"><span class="btn-title">Buy Ticket</span></a></div>
                </div>
            </div>

            <!-- Image Column -->
            <div class="image-column" style="background-image: url(assets_user/images/resource//image-1.jpg);">
                <div class="image-box">
                    <figure class="image"><img src="{{asset('assets_user/images/resource/image-1.jpg')}}" alt=""></figure>
                </div>
            </div>
        </div>
    </section>
    <!--End Fluid Section One -->

    <!-- Speakers Section -->
    <section class="speakers-section-three">
        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="title">Speakers</span>
                <h2>Todays Performers</h2>
            </div>

            <div class="row">

                <!-- Speaker Block -->
                <div class="speaker-block-three col-xl-3 col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="speakers-detail.html"><img src="{{asset('assets_user/images/resource/speaker-1.jpg')}}" alt=""></a></figure>
                        </div>
                        <div class="info-box">
                            <h4 class="name"><a href="speakers-detail.html">Dale Marke</a></h4>
                            <span class="designation">Event Manager</span>
                        </div>
                        <div class="social-box">
                            <ul class="social-links social-icon-colored">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Speaker Block -->
                <div class="speaker-block-three col-xl-3 col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="speakers-detail.html"><img src="{{asset('assets_user/images/resource/speaker-2.jpg')}}" alt=""></a></figure>
                        </div>
                        <div class="info-box">
                            <h4 class="name"><a href="speakers-detail.html">Natisha Decoux</a></h4>
                            <span class="designation">Event Manager</span>
                        </div>
                        <div class="social-box">
                            <ul class="social-links social-icon-colored">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Speaker Block -->
                <div class="speaker-block-three col-xl-3 col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="speakers-detail.html"><img src="{{asset('assets_user/images/resource/speaker-4.jpg')}}" alt=""></a></figure>
                        </div>
                        <div class="info-box">
                            <h4 class="name"><a href="speakers-detail.html">Adolfo Plahs</a></h4>
                            <span class="designation">Event Manager</span>
                        </div>
                        <div class="social-box">
                            <ul class="social-links social-icon-colored">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Speaker Block -->
                <div class="speaker-block-three col-xl-3 col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="speakers-detail.html"><img src="{{asset('assets_user/images/resource/speaker-3.jpg')}}" alt=""></a></figure>
                        </div>
                        <div class="info-box">
                            <h4 class="name"><a href="speakers-detail.html">Mitchell Hegg</a></h4>
                            <span class="designation">Event Manager</span>
                        </div>
                        <div class="social-box">
                            <ul class="social-links social-icon-colored">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Speaker Block -->
                <div class="speaker-block-three col-xl-3 col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="speakers-detail.html"><img src="{{asset('assets_user/images/resource/speaker-5.jpg')}}" alt=""></a></figure>
                        </div>
                        <div class="info-box">
                            <h4 class="name"><a href="speakers-detail.html">Kenyetta Lesley</a></h4>
                            <span class="designation">Event Manager</span>
                        </div>
                        <div class="social-box">
                            <ul class="social-links social-icon-colored">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Speaker Block -->
                <div class="speaker-block-three col-xl-3 col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="speakers-detail.html"><img src="{{asset('assets_user/images/resource/speaker-6.jpg')}}" alt=""></a></figure>
                        </div>
                        <div class="info-box">
                            <h4 class="name"><a href="speakers-detail.html">Shelly Verghese</a></h4>
                            <span class="designation">Event Manager</span>
                        </div>
                        <div class="social-box">
                            <ul class="social-links social-icon-colored">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Speaker Block -->
                <div class="speaker-block-three col-xl-3 col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="speakers-detail.html"><img src="{{asset('assets_user/images/resource/speaker-7.jpg')}}" alt=""></a></figure>
                        </div>
                        <div class="info-box">
                            <h4 class="name"><a href="speakers-detail.html">Kenyetta Lesley</a></h4>
                            <span class="designation">Event Manager</span>
                        </div>
                        <div class="social-box">
                            <ul class="social-links social-icon-colored">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Speaker Block -->
                <div class="speaker-block-three col-xl-3 col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="speakers-detail.html"><img src="{{asset('assets_user/images/resource/speaker-8.jpg')}}" alt=""></a></figure>
                        </div>
                        <div class="info-box">
                            <h4 class="name"><a href="speakers-detail.html">Shelly Verghese</a></h4>
                            <span class="designation">Event Manager</span>
                        </div>
                        <div class="social-box">
                            <ul class="social-links social-icon-colored">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Speakers Section -->

    <!-- Schedule Section Style two -->
    <section class="schedule-section style-three">
        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="title">About Conference</span>
                <h2>Schedule Plan</h2>
            </div>

            <div class="schedule-tabs style-three tabs-box">
                <div class="btns-box">
                    <!--Tabs Box-->
                    <ul class="tab-buttons clearfix">
                        <li class="tab-btn active-btn" data-tab="#tab-1">
                            <span class="day">Day 01</span>
                            <span class="date">01</span>
                            <span class="month">Jan</span> 2020
                        </li>

                        <li class="tab-btn" data-tab="#tab-2">
                            <span class="day">Day 02</span>
                            <span class="date">02</span>
                            <span class="month">Jan</span> 2020
                        </li>

                        <li class="tab-btn" data-tab="#tab-3">
                            <span class="day">Day 03</span>
                            <span class="date">03</span>
                            <span class="month">Jan</span> 2020
                        </li>

                        <li class="tab-btn" data-tab="#tab-4">
                            <span class="day">Day 04</span>
                            <span class="date">04</span>
                            <span class="month">Jan</span> 2020
                        </li>
                    </ul>
                </div>

                <div class="tabs-content">

                    <!--Tab-->
                    <div class="tab active-tab" id="tab-1">
                        <div class="schedule-timeline row">
                            <!-- schedule Block -->
                            <div class="schedule-block col-lg-6 col-md-12 col-sm-12">
                                <div class="inner-box">
                                    <div class="inner">
                                        <div class="date">9.00 AM - 10.00 AM</div>
                                        <div class="speaker-info">
                                            <figure class="thumb"><img src="{{asset('assets_user/images/resource/thumb-1.jpg')}}" alt=""></figure>
                                            <h5 class="name">Ashli Scroggy</h5>
                                            <span class="designation">Founder & CEO</span>
                                        </div>
                                        <h4><a href="event-detail.html">Modern Marketing Summit Sydney 2018</a></h4>
                                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmtempor incididunt labore et</div>
                                        <div class="btn-box">
                                            <a href="event-detail.html" class="theme-btn">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- schedule Block -->
                            <div class="schedule-block col-lg-6 col-md-12 col-sm-12">
                                <div class="inner-box">
                                    <div class="inner">
                                        <div class="date">10.00 AM - 11.00 AM</div>
                                        <div class="speaker-info">
                                            <figure class="thumb"><img src="{{asset('assets_user/images/resource/thumb-2.jpg')}}" alt=""></figure>
                                            <h5 class="name">Ashli Scroggy</h5>
                                            <span class="designation">Founder & CEO</span>
                                        </div>
                                        <h4><a href="event-detail.html">Modern Marketing Summit Sydney 2018</a></h4>
                                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmtempor incididunt labore et</div>
                                        <div class="btn-box">
                                            <a href="event-detail.html" class="theme-btn">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- schedule Block -->
                            <div class="schedule-block col-lg-6 col-md-12 col-sm-12">
                                <div class="inner-box">
                                    <div class="inner">
                                        <div class="date">11.00 AM - 12.00 AM</div>
                                        <div class="speaker-info">
                                            <figure class="thumb"><img src="{{asset('assets_user/images/resource/thumb-1.jpg')}}" alt=""></figure>
                                            <h5 class="name">Ashli Scroggy</h5>
                                            <span class="designation">Founder & CEO</span>
                                        </div>
                                        <h4><a href="event-detail.html">Modern Marketing Summit Sydney 2018</a></h4>
                                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmtempor incididunt labore et</div>
                                        <div class="btn-box">
                                            <a href="event-detail.html" class="theme-btn">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- schedule Block -->
                            <div class="schedule-block col-lg-6 col-md-12 col-sm-12">
                                <div class="inner-box">
                                    <div class="inner">
                                        <div class="date">12.00 AM - 01.00 PM</div>
                                        <div class="speaker-info">
                                            <figure class="thumb"><img src="{{asset('assets_user/images/resource/thumb-2.jpg')}}" alt=""></figure>
                                            <h5 class="name">Ashli Scroggy</h5>
                                            <span class="designation">Founder & CEO</span>
                                        </div>
                                        <h4><a href="event-detail.html">Modern Marketing Summit Sydney 2018</a></h4>
                                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmtempor incididunt labore et</div>
                                        <div class="btn-box">
                                            <a href="event-detail.html" class="theme-btn">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Tab-->
                    <div class="tab" id="tab-2">
                        <div class="schedule-timeline row">
                            <!-- schedule Block -->
                            <div class="schedule-block col-lg-6 col-md-12 col-sm-12">
                                <div class="inner-box">
                                    <div class="inner">
                                        <div class="date">9.00 AM - 10.00 AM</div>
                                        <div class="speaker-info">
                                            <figure class="thumb"><img src="{{asset('assets_user/images/resource/thumb-1.jpg')}}" alt=""></figure>
                                            <h5 class="name">Ashli Scroggy</h5>
                                            <span class="designation">Founder & CEO</span>
                                        </div>
                                        <h4><a href="event-detail.html">Modern Marketing Summit Sydney 2018</a></h4>
                                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmtempor incididunt labore et</div>
                                        <div class="btn-box">
                                            <a href="event-detail.html" class="theme-btn">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- schedule Block -->
                            <div class="schedule-block col-lg-6 col-md-12 col-sm-12">
                                <div class="inner-box">
                                    <div class="inner">
                                        <div class="date">10.00 AM - 11.00 AM</div>
                                        <div class="speaker-info">
                                            <figure class="thumb"><img src="{{asset('assets_user/images/resource/thumb-2.jpg')}}" alt=""></figure>
                                            <h5 class="name">Ashli Scroggy</h5>
                                            <span class="designation">Founder & CEO</span>
                                        </div>
                                        <h4><a href="event-detail.html">Modern Marketing Summit Sydney 2018</a></h4>
                                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmtempor incididunt labore et</div>
                                        <div class="btn-box">
                                            <a href="event-detail.html" class="theme-btn">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- schedule Block -->
                            <div class="schedule-block col-lg-6 col-md-12 col-sm-12">
                                <div class="inner-box">
                                    <div class="inner">
                                        <div class="date">11.00 AM - 12.00 AM</div>
                                        <div class="speaker-info">
                                            <figure class="thumb"><img src="{{asset('assets_user/images/resource/thumb-1.jpg')}}" alt=""></figure>
                                            <h5 class="name">Ashli Scroggy</h5>
                                            <span class="designation">Founder & CEO</span>
                                        </div>
                                        <h4><a href="event-detail.html">Modern Marketing Summit Sydney 2018</a></h4>
                                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmtempor incididunt labore et</div>
                                        <div class="btn-box">
                                            <a href="event-detail.html" class="theme-btn">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- schedule Block -->
                            <div class="schedule-block col-lg-6 col-md-12 col-sm-12">
                                <div class="inner-box">
                                    <div class="inner">
                                        <div class="date">12.00 AM - 01.00 PM</div>
                                        <div class="speaker-info">
                                            <figure class="thumb"><img src="{{asset('assets_user/images/resource/thumb-2.jpg')}}" alt=""></figure>
                                            <h5 class="name">Ashli Scroggy</h5>
                                            <span class="designation">Founder & CEO</span>
                                        </div>
                                        <h4><a href="event-detail.html">Modern Marketing Summit Sydney 2018</a></h4>
                                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmtempor incididunt labore et</div>
                                        <div class="btn-box">
                                            <a href="event-detail.html" class="theme-btn">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Tab-->
                    <div class="tab" id="tab-3">
                        <div class="schedule-timeline row">
                            <!-- schedule Block -->
                            <div class="schedule-block col-lg-6 col-md-12 col-sm-12">
                                <div class="inner-box">
                                    <div class="inner">
                                        <div class="date">9.00 AM - 10.00 AM</div>
                                        <div class="speaker-info">
                                            <figure class="thumb"><img src="{{asset('assets_user/images/resource/thumb-1.jpg')}}" alt=""></figure>
                                            <h5 class="name">Ashli Scroggy</h5>
                                            <span class="designation">Founder & CEO</span>
                                        </div>
                                        <h4><a href="event-detail.html">Modern Marketing Summit Sydney 2018</a></h4>
                                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmtempor incididunt labore et</div>
                                        <div class="btn-box">
                                            <a href="event-detail.html" class="theme-btn">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- schedule Block -->
                            <div class="schedule-block col-lg-6 col-md-12 col-sm-12">
                                <div class="inner-box">
                                    <div class="inner">
                                        <div class="date">10.00 AM - 11.00 AM</div>
                                        <div class="speaker-info">
                                            <figure class="thumb"><img src="{{asset('assets_user/images/resource/thumb-2.jpg')}}" alt=""></figure>
                                            <h5 class="name">Ashli Scroggy</h5>
                                            <span class="designation">Founder & CEO</span>
                                        </div>
                                        <h4><a href="event-detail.html">Modern Marketing Summit Sydney 2018</a></h4>
                                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmtempor incididunt labore et</div>
                                        <div class="btn-box">
                                            <a href="event-detail.html" class="theme-btn">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- schedule Block -->
                            <div class="schedule-block col-lg-6 col-md-12 col-sm-12">
                                <div class="inner-box">
                                    <div class="inner">
                                        <div class="date">11.00 AM - 12.00 AM</div>
                                        <div class="speaker-info">
                                            <figure class="thumb"><img src="{{asset('assets_user/images/resource/thumb-1.jpg')}}" alt=""></figure>
                                            <h5 class="name">Ashli Scroggy</h5>
                                            <span class="designation">Founder & CEO</span>
                                        </div>
                                        <h4><a href="event-detail.html">Modern Marketing Summit Sydney 2018</a></h4>
                                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmtempor incididunt labore et</div>
                                        <div class="btn-box">
                                            <a href="event-detail.html" class="theme-btn">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- schedule Block -->
                            <div class="schedule-block col-lg-6 col-md-12 col-sm-12">
                                <div class="inner-box">
                                    <div class="inner">
                                        <div class="date">12.00 AM - 01.00 PM</div>
                                        <div class="speaker-info">
                                            <figure class="thumb"><img src="{{asset('assets_user/images/resource/thumb-2.jpg')}}" alt=""></figure>
                                            <h5 class="name">Ashli Scroggy</h5>
                                            <span class="designation">Founder & CEO</span>
                                        </div>
                                        <h4><a href="event-detail.html">Modern Marketing Summit Sydney 2018</a></h4>
                                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmtempor incididunt labore et</div>
                                        <div class="btn-box">
                                            <a href="event-detail.html" class="theme-btn">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Tab-->
                    <div class="tab" id="tab-4">
                        <div class="schedule-timeline row">
                            <!-- schedule Block -->
                            <div class="schedule-block col-lg-6 col-md-12 col-sm-12">
                                <div class="inner-box">
                                    <div class="inner">
                                        <div class="date">9.00 AM - 10.00 AM</div>
                                        <div class="speaker-info">
                                            <figure class="thumb"><img src="{{asset('assets_user/images/resource/thumb-1.jpg')}}" alt=""></figure>
                                            <h5 class="name">Ashli Scroggy</h5>
                                            <span class="designation">Founder & CEO</span>
                                        </div>
                                        <h4><a href="event-detail.html">Modern Marketing Summit Sydney 2018</a></h4>
                                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmtempor incididunt labore et</div>
                                        <div class="btn-box">
                                            <a href="event-detail.html" class="theme-btn">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- schedule Block -->
                            <div class="schedule-block col-lg-6 col-md-12 col-sm-12">
                                <div class="inner-box">
                                    <div class="inner">
                                        <div class="date">10.00 AM - 11.00 AM</div>
                                        <div class="speaker-info">
                                            <figure class="thumb"><img src="{{asset('assets_user/images/resource/thumb-2.jpg')}}" alt=""></figure>
                                            <h5 class="name">Ashli Scroggy</h5>
                                            <span class="designation">Founder & CEO</span>
                                        </div>
                                        <h4><a href="event-detail.html">Modern Marketing Summit Sydney 2018</a></h4>
                                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmtempor incididunt labore et</div>
                                        <div class="btn-box">
                                            <a href="event-detail.html" class="theme-btn">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- schedule Block -->
                            <div class="schedule-block col-lg-6 col-md-12 col-sm-12">
                                <div class="inner-box">
                                    <div class="inner">
                                        <div class="date">11.00 AM - 12.00 AM</div>
                                        <div class="speaker-info">
                                            <figure class="thumb"><img src="{{asset('assets_user/images/resource/thumb-1.jpg')}}" alt=""></figure>
                                            <h5 class="name">Ashli Scroggy</h5>
                                            <span class="designation">Founder & CEO</span>
                                        </div>
                                        <h4><a href="event-detail.html">Modern Marketing Summit Sydney 2018</a></h4>
                                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmtempor incididunt labore et</div>
                                        <div class="btn-box">
                                            <a href="event-detail.html" class="theme-btn">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- schedule Block -->
                            <div class="schedule-block col-lg-6 col-md-12 col-sm-12">
                                <div class="inner-box">
                                    <div class="inner">
                                        <div class="date">12.00 AM - 01.00 PM</div>
                                        <div class="speaker-info">
                                            <figure class="thumb"><img src="{{asset('assets_user/images/resource/thumb-2.jpg')}}" alt=""></figure>
                                            <h5 class="name">Ashli Scroggy</h5>
                                            <span class="designation">Founder & CEO</span>
                                        </div>
                                        <h4><a href="event-detail.html">Modern Marketing Summit Sydney 2018</a></h4>
                                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmtempor incididunt labore et</div>
                                        <div class="btn-box">
                                            <a href="event-detail.html" class="theme-btn">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End schedule Section -->

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
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25216.765666144616!2d144.9456413371385!3d-37.8112271492458!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642b8c21cb29b%3A0x1c045678462e3510!2sMelbourne%20VIC%203000%2C%20Australia!5e0!3m2!1sen!2s!4v1599237324751!5m2!1sen!2s" height="435"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Event Info Section -->

    <!-- Call to action -->
    <section class="call-to-action" style="background-image: url(assets_user/images/background/11.jpg);">
        <div class="auto-container">
            <div class="content-box">
                <div class="text">WE’RE A LEADING MEETUP COMPANY</div>
                <h2>We Are Always at The Forefront <br> of The Business Conference !</h2>
                <div class="btn-box">
                    <a href="contact.html" class="theme-btn btn-style-one"><span class="btn-title">Contact Us</span></a>
                </div>
            </div>
        </div>
    </section>
    <!--End Call to action -->

    <!-- Pricing Section -->
    <section class="pricing-section-three">
        <div class="anim-icons">
            <span class="icon icon-line-1 wow zoomIn"></span>
            <span class="icon icon-circle-1 wow zoomIn"></span>
            <span class="icon icon-dots wow zoomIn"></span>
        </div>

        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="title">Get Ticket</span>
                <h2>Choose a Ticket</h2>
            </div>

            <div class="outer-box">
                <div class="row">
                    <!-- Pricing Block -->
                    <div class="pricing-block-three col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="inner-box">
                            <div class="title">Parson</div>
                            <h4 class="price">$19</h4>
                            <ul class="features">
                                <li>01 Conference Tickets</li>
                                <li>Free Lunch And Coffee</li>
                                <li>Certificate</li>
                            </ul>
                            <div class="btn-box">
                                <a href="buy-ticket.html" class="theme-btn btn-style-one"><span class="btn-title">BUY Ticket</span></a>
                            </div>
                        </div>
                    </div>

                    <!-- Pricing Block -->
                    <div class="pricing-block-three col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                        <div class="inner-box">
                            <div class="title">Family</div>
                            <h4 class="price">$59</h4>
                            <ul class="features">
                                <li>05 Conference Tickets</li>
                                <li>Free Lunch And Coffee</li>
                                <li>Certificate</li>
                            </ul>
                            <div class="btn-box">
                                <a href="buy-ticket.html" class="theme-btn btn-style-one"><span class="btn-title">BUY Ticket</span></a>
                            </div>
                        </div>
                    </div>

                    <!-- Pricing Block -->
                    <div class="pricing-block-three col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="1200ms">
                        <div class="inner-box">
                            <div class="title">GROUP</div>
                            <h4 class="price">$99</h4>
                            <ul class="features">
                                <li>10 Conference Tickets</li>
                                <li>Free Lunch And Coffee</li>
                                <li>Certificate</li>
                            </ul>
                            <div class="btn-box">
                                <a href="buy-ticket.html" class="theme-btn btn-style-one"><span class="btn-title">BUY Ticket</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Pricing Section -->

    <!-- Gallery Section -->
    <section class="gallery-section style-two">
        <div class="gallery-carousel owl-carousel owl-theme">
            <!-- Gallery Item -->
            <div class="gallery-item">
                <div class="image-box">
                    <figure class="image"><img src="{{asset('assets_user/images/gallery/1.jpg')}}" alt=""></figure>
                    <div class="overlay-box"><a href="assets_user/images/gallery/1.jpg" class="lightbox-image" data-fancybox='gallery'><span class="icon fa fa-expand-arrows-alt"></span></a></div>
                </div>
            </div>

            <!-- Gallery Item -->
            <div class="gallery-item">
                <div class="image-box">
                    <figure class="image"><img src="{{asset('assets_user/images/gallery/2.jpg')}}" alt=""></figure>
                    <div class="overlay-box"><a href="assets_user/images/gallery/2.jpg" class="lightbox-image" data-fancybox='gallery'><span class="icon fa fa-expand-arrows-alt"></span></a></div>
                </div>
            </div>

            <!-- Gallery Item -->
            <div class="gallery-item">
                <div class="image-box">
                    <figure class="image"><img src="{{asset('assets_user/images/gallery/3.jpg')}}" alt=""></figure>
                    <div class="overlay-box"><a href="assets_user/images/gallery/3.jpg" class="lightbox-image" data-fancybox='gallery'><span class="icon fa fa-expand-arrows-alt"></span></a></div>
                </div>
            </div>

            <!-- Gallery Item -->
            <div class="gallery-item">
                <div class="image-box">
                    <figure class="image"><img src="{{asset('assets_user/images/gallery/4.jpg')}}" alt=""></figure>
                    <div class="overlay-box"><a href="assets_user/images/gallery/4.jpg" class="lightbox-image" data-fancybox='gallery'><span class="icon fa fa-expand-arrows-alt"></span></a></div>
                </div>
            </div>

            <!-- Gallery Item -->
            <div class="gallery-item">
                <div class="image-box">
                    <figure class="image"><img src="{{asset('assets_user/images/gallery/5.jpg')}}" alt=""></figure>
                    <div class="overlay-box"><a href="assets_user/images/gallery/5.jpg" class="lightbox-image" data-fancybox='gallery'><span class="icon fa fa-expand-arrows-alt"></span></a></div>
                </div>
            </div>

            <!-- Gallery Item -->
            <div class="gallery-item">
                <div class="image-box">
                    <figure class="image"><img src="{{asset('assets_user/images/gallery/6.jpg')}}" alt=""></figure>
                    <div class="overlay-box"><a href="assets_user/images/gallery/6.jpg" class="lightbox-image" data-fancybox='gallery'><span class="icon fa fa-expand-arrows-alt"></span></a></div>
                </div>
            </div>
        </div>
    </section>
    <!--End Gallery Section -->

    <!--Sponsor Section-->
    <section class="clients-section-three" style="background-image: url(assets_user/images/background/9.jpg);">
        <div class="auto-container">
            <div class="sponsors-outer">
                <div class="sponsors-carousel owl-carousel owl-theme">
                    <!-- Client Block -->
                    <div class="client-block">
                        <figure class="image-box"><a href="#"><img src="{{asset('assets_user/images/clients/2-1.png')}}" alt=""></a></figure>
                    </div>

                    <!-- Client Block -->
                    <div class="client-block">
                        <figure class="image-box"><a href="#"><img src="{{asset('assets_user/images/clients/2-2.png')}}" alt=""></a></figure>
                    </div>

                    <!-- Client Block -->
                    <div class="client-block">
                        <figure class="image-box"><a href="#"><img src="{{asset('assets_user/images/clients/2-3.png')}}" alt=""></a></figure>
                    </div>

                    <!-- Client Block -->
                    <div class="client-block">
                        <figure class="image-box"><a href="#"><img src="{{asset('assets_user/images/clients/2-4.png')}}" alt=""></a></figure>
                    </div>

                    <!-- Client Block -->
                    <div class="client-block">
                        <figure class="image-box"><a href="#"><img src="{{asset('assets_user/images/clients/2-5.png')}}" alt=""></a></figure>
                    </div>

                    <!-- Client Block -->
                    <div class="client-block">
                        <figure class="image-box"><a href="#"><img src="{{asset('assets_user/images/clients/2-6.png')}}" alt=""></a></figure>
                    </div>

                    <!-- Client Block -->
                    <div class="client-block">
                        <figure class="image-box"><a href="#"><img src="{{asset('assets_user/images/clients/2-7.png')}}" alt=""></a></figure>
                    </div>

                    <!-- Client Block -->
                    <div class="client-block">
                        <figure class="image-box"><a href="#"><img src="{{asset('assets_user/images/clients/2-8.png')}}" alt=""></a></figure>
                    </div>

                    <!-- Client Block -->
                    <div class="client-block">
                        <figure class="image-box"><a href="#"><img src="{{asset('assets_user/images/clients/2-9.png')}}" alt=""></a></figure>
                    </div>

                    <!-- Client Block -->
                    <div class="client-block">
                        <figure class="image-box"><a href="#"><img src="{{asset('assets_user/images/clients/2-10.png')}}" alt=""></a></figure>
                    </div>

                    <!-- Client Block -->
                    <div class="client-block">
                        <figure class="image-box"><a href="#"><img src="{{asset('assets_user/images/clients/2-11.png')}}" alt=""></a></figure>
                    </div>

                    <!-- Client Block -->
                    <div class="client-block">
                        <figure class="image-box"><a href="#"><img src="{{asset('assets_user/images/clients/2-12.png')}}" alt=""></a></figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Sponsor Section-->



@endsection
@push('scripts')

@endpush
