@extends('layouts_user.master')
@section('content')
<!--Page Title-->
<section class="page-title" style="background-image:url(assets_user/images/background/5.jpg);">
    <div class="auto-container">
        <h1>Speakers</h1>
        <ul class="bread-crumb clearfix">
            <li><a href="{{route('user.index')}}">Home</a></li>
            <li><a href="{{route('user.speaker')}}">Speakers</a></li>
        </ul>
    </div>
</section>
<!--End Page Title-->

<!-- Speakers Section -->
<section class="speakers-section-two">
    <div class="anim-icons">
        <span class="icon icon-circle-4 wow zoomIn"></span>
        <span class="icon icon-circle-3 wow zoomIn"></span>
    </div>

    <div class="auto-container">
        <div class="sec-title text-center">
            <span class="title">Speakers</span>
            <h2>Todays Performers</h2>
        </div>

        <div class="row">

            <!-- Speaker Block -->
            @foreach ($speaker as $d)
            <div class="speaker-block-two col-xl-3 col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                <div class="inner-box">
                    <div class="info-box">
                        <h4 class="name"><a href="speakers-detail.html">{{$d->speakName}}</a></h4>
                        <span class="designation">{{$d->speakJob}}</span>
                    </div>
                    <div class="image-box">
                        <figure class="image"><a href=""><img src="{{ asset('uploads/speaker/'.$d->speakFoto)}}" alt=""></a></figure>
                    </div>
                    {{-- <div class="social-box">
                        <ul class="social-links social-icon-colored">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                        </ul>
                    </div> --}}
                </div>
            </div>
            @endforeach
            

        </div>
    </div>
</section>
<!-- End Speakers Section -->

@endsection
