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
                    @foreach ($schedule as $key => $value)
                    {{-- {{var_dump($value[$key]["tgl_mulai"])}} --}}
                    <li class="tab-btn {{$key == 0 ? 'active-btn': '' }} " data-tab="#{{$key}}">
                        <span class="day">Day {{$key + 1}}</span>
                        <span class="date">{{date('d', strtotime($value[0]["tgl_mulai"]))}}</span>
                        <span class="month">{{date('M', strtotime($value[0]["tgl_mulai"]))}}</span> {{date('Y',
                        strtotime($value[0]["tgl_mulai"]))}}
                    </li>
                    @endforeach
                </ul>
            </div>

            <div class="tabs-content">
                @foreach ($schedule as $key => $value)
                <!--Tab-->
                <div class="tab {{$key == 0 ? 'active-tab': '' }} " id="{{$key}}">
                    <div class="schedule-timeline">
                        @foreach ($value as $d)
                        <div class="schedule-block">
                            <div class="inner-box">
                                <div class="inner">
                                    <div class="date">{{date('h:i A', strtotime($d['tgl_mulai']))}}<br>{{date('h:i A',
                                        strtotime($d['tgl_akhir']))}}</div>
                                    @foreach ($d['speaker'] as $s)
                                    <div class="speaker-info mt-3">
                                        <figure class="thumb"><img src="{{ asset('uploads/speaker/'.$s['speakFoto'])}}"
                                                alt="Image">
                                        </figure>
                                        <h5 class="name">{{$s['speakName']}}</h5>
                                        <span class="designation">{{$s['speakJob']}}</span>
                                    </div>
                                    @endforeach
                                    <h4 class="mt-2">{{$d['agenda']}}</h4>
                                    <div class="text">{{strip_tags(Str::limit($d['description'], 300))}}</div>
                                    <div class="btn-box">
                                        <?php $url = url('/detailSchedule/'.$d['id'].'') ?>;
                                        <a href="{{ $url }}" class="theme-btn">Read
                                            More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- schedule Block -->
                        {{-- <div class="schedule-block {{$loop->iteration % 2 == 0 ? 'even': '' }}">
                            <div class="inner-box">
                                <div class="inner">
                                    <div class="date">{{date('h:i A', strtotime($d['tgl_mulai']))}}<br>{{date('h:i A',
                                        strtotime($d['tgl_akhir']))}}</div>
                                    <div class="schedule-carousel owl-carousel owl-theme">
                                        @foreach ($d['speaker'] as $s)
                                        <div class="speaker-info">
                                            <figure class="thumb"><img
                                                    src="{{ asset('uploads/speaker/'.$s['speakFoto'])}}" alt="">
                                            </figure>
                                            <h5 class="name">{{$s['speakName']}}</h5>
                                            <p class="designation jobDesc">{{$s['speakJob']}}</p>
                                        </div>
                                        @endforeach
                                    </div>
                                    <h4><a href="event-detail.html">{{$d['agenda']}}</a></h4>
                                    <div class="text">{!!$d['description']!!}</div>
                                    <div class="btn-box">
                                        <a href="event-detail.html" class="theme-btn">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!--End schedule Section -->

@endsection