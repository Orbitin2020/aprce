@extends('layouts_user.master')
@section('content')
<!--Page Title-->
{{-- url(assets_user/images/background/5.jpg --}}
<section class="page-title backgroundMerah"
    style="background-image:url(assets_user/images/background/semi-banner.jpg);background-color:#D20000">
    <div class="auto-container">
        <h1>About Us</h1>
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
                        <h2>Welcome to the Asia Pacific Retailers Convention & Exhibition</h2>
                        <div class="text" align="justify">The Asia Pacific Retailers Convention & Exhibition (APRCE) is
                            the major project of the Federation of Asia-Pacific Retailers Associations (FAPRA).
                            Held every two years, the event has become Asia's biggest and longest running retail
                            convention and exhibition since it was first held in 1983 in Tokyo, Japan. The Philippines
                            last played host to the APRCE in 1993.
                            The APRCE's objectives are two-pronged: to discover new approaches to the latest issues
                            facing the region's retailers and highlight innovative solutions that can help retailers
                            differentiate themselves from competitors, to deliver greater value to consumers in Asia and
                            Pacific region.</div>
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
                    <figure class="image wow fadeIn"><img src="{{asset('assets_user/images/gallery/about-pict.png')}}"
                            alt=""></figure>
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
                <div class="counter-column col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="count-box">
                        <span class="icon icon_headphones" style="background-color: white;color:#D20000"></span>
                        <span class="count-text" data-speed="3000" data-stop="190">0</span>
                        <h4 class="counter-title" style="color: white">Speakers</h4>
                    </div>
                </div>

                <!--Column-->
                <div class="counter-column col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                    <div class="count-box">
                        <span class="icon icon_ribbon_alt" style="background-color: white;color:#D20000"></span>
                        <span class="count-text" data-speed="3000" data-stop="62">0</span>
                        <h4 class="counter-title" style="color: white">Participant</h4>
                    </div>
                </div>

                <!--Column-->
                <div class="counter-column col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                    <div class="count-box">
                        <span class="icon icon_like" style="background-color: white;color:#D20000"></span>
                        <span class="count-text" data-speed="3000" data-stop="54">0</span>
                        <h4 class="counter-title" style="color: white">Countries</h4>
                    </div>
                </div>

                <!--Column-->
                {{-- <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="1200ms">
                    <div class="count-box">
                        <span class="icon icon_book_alt" style="background-color: white;color:#D20000"></span>
                        <span class="count-text" data-speed="3000" data-stop="38">0</span>
                        <h4 class="counter-title" style="color: white">Courses</h4>
                    </div>
                </div> --}}
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
                    <figure class="image-box"><a href="#"><img src="{{asset('uploads/sponsor/'.$spon['gambar'])}}"
                                alt=""></a></figure>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!--End Sponsor Section-->

@endsection