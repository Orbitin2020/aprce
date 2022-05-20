@extends('layouts_user.master')
@section('content')
<!--Page Title-->
<section class="page-title" style="background-image:url(assets_user/images/background/5.jpg); background-color:#D20000">
    <div class="auto-container">
        <h1>About Us</h1>
        <ul class="bread-crumb clearfix">
            <li><a href="index.html">Home</a></li>
            <li>About Us</li>
        </ul>
    </div>
</section>
<!--End Page Title-->

<!-- About Section -->
<section class="about-section">
    <div class="anim-icons full-width">
        <span class="icon icon-circle-blue wow fadeIn"></span>
        <span class="icon icon-dots wow fadeInleft"></span>
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
                        <div class="text">Dolor sit amet consectetur elit sed do eiusmod tempor incd idunt
                            labore et dolore magna aliqua enim ad minim veniam quis nostrud exercitation ullamco
                            laboris nisi ut aliquip exea commodo consequat.</div>
                    </div>
                    <ul class="list-style-one">
                        <li>Multiple Announcements during the event.</li>
                        <li>Logo & company details on the WordCamp.</li>
                        <li>Dedicated blog post thanking each Gold.</li>
                        <li>Acknowledgment and opening and closing.</li>
                    </ul>
                    <div class="btn-box"><a href="contact.html" class="theme-btn btn-style-three"><span
                                class="btn-title">Register Now</span></a></div>
                </div>
            </div>

            <!-- Image Column -->
            <div class="image-column col-lg-6 col-md-12 col-sm-12">
                <div class="image-box">
                    <figure class="image wow fadeIn"><img src="images/resource/about-img-1.jpg" alt=""></figure>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End About Section -->

<!-- Fun Fact Section -->
<section class="fun-fact-section style-two" style="background-image: url(images/background/9.jpg);">
    <div class="auto-container">
        <div class="fact-counter">
            <div class="row clearfix">

                <!--Column-->
                <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="count-box">
                        <span class="icon icon_headphones"></span>
                        <span class="count-text" data-speed="3000" data-stop="190">0</span>
                        <h4 class="counter-title">Participants</h4>
                    </div>
                </div>

                <!--Column-->
                <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                    <div class="count-box">
                        <span class="icon icon_ribbon_alt"></span>
                        <span class="count-text" data-speed="3000" data-stop="62">0</span>
                        <h4 class="counter-title">Awards Win</h4>
                    </div>
                </div>

                <!--Column-->
                <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                    <div class="count-box">
                        <span class="icon icon_like"></span>
                        <span class="count-text" data-speed="3000" data-stop="54">0</span>
                        <h4 class="counter-title">Certified Teachers</h4>
                    </div>
                </div>

                <!--Column-->
                <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="1200ms">
                    <div class="count-box">
                        <span class="icon icon_book_alt"></span>
                        <span class="count-text" data-speed="3000" data-stop="38">0</span>
                        <h4 class="counter-title">Courses</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Fun Fact Section -->
@endsection