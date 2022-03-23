@extends('layouts_user.master')
@section('content')
<!--Page Title-->
<section class="page-title" style="background-image:url(assets_user/images/background/5.jpg);">
    <div class="auto-container">
        <h1>Schedule</h1>
        <ul class="bread-crumb clearfix">
            <li><a href="{{route('user.index')}}">Home</a></li>
            <li><a href="{{route('user.schedule')}}">Schedule</a></li>
        </ul>
    </div>
</section>
<!--End Page Title-->

<!-- schedule Section -->
<section class="schedule-section">
    <div class="anim-icons">
        <span class="icon icon-circle-4 wow zoomIn"></span>
        <span class="icon icon-circle-3 wow zoomIn"></span>
    </div>

    <div class="auto-container">
        <div class="sec-title text-center">
            <span class="title">About Conference</span>
            <h2>Schedule Plan</h2>
        </div>

        <div class="schedule-tabs tabs-box">
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
                </ul>
            </div>

            <div class="tabs-content">

                <!--Tab-->
                <div class="tab active-tab" id="tab-1">
                    <div class="schedule-timeline">
                        <!-- schedule Block -->
                        <div class="schedule-block">
                            <div class="inner-box">
                                <div class="inner">
                                    <div class="date">9.00 AM <br> 10.00 AM</div>
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
                        <div class="schedule-block even">
                            <div class="inner-box">
                                <div class="inner">
                                    <div class="date">10.00 AM <br> 11.00 AM</div>
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
                        <div class="schedule-block">
                            <div class="inner-box">
                                <div class="inner">
                                    <div class="date">11.00 AM <br> 12.00 AM</div>
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
                        <div class="schedule-block even">
                            <div class="inner-box">
                                <div class="inner">
                                    <div class="date">12.00 AM <br> 01.00 PM</div>
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
                    <div class="schedule-timeline">
                        <!-- schedule Block -->
                        <div class="schedule-block">
                            <div class="inner-box">
                                <div class="inner">
                                    <div class="date">9.00 AM <br> 10.00 AM</div>
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
                        <div class="schedule-block even">
                            <div class="inner-box">
                                <div class="inner">
                                    <div class="date">10.00 AM <br> 11.00 AM</div>
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
                        <div class="schedule-block">
                            <div class="inner-box">
                                <div class="inner">
                                    <div class="date">11.00 AM <br> 12.00 AM</div>
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

                    </div>
                </div>

                <!--Tab-->
                <div class="tab" id="tab-3">
                    <div class="schedule-timeline">
                        <!-- schedule Block -->
                        <div class="schedule-block">
                            <div class="inner-box">
                                <div class="inner">
                                    <div class="date">9.00 AM <br> 10.00 AM</div>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End schedule Section -->

@endsection