@extends('layouts_user.master')
@section('content')
<!--Page Title-->
<section class="page-title backgroundMerah"
    style="background-image:url(../assets_user/images/background/semi-banner.jpg)">
    <div class=" auto-container">
        <h1>Detail Schedule</h1>
        <ul class="bread-crumb clearfix">
            <li><a href="{{ route('user.index') }}">Home</a></li>
            <li>Detail Schedule</li>
        </ul>
    </div>
</section>
<!--End Page Title-->

<!-- Event Detail -->
<section class="event-detail">
    @foreach($schedule as $key => $value)
    <div class="auto-container">
        {{-- {{ var_dump($value[0]['image']) }} --}}
        <div class="image-box">
            {{-- asset('assets_user/images/resource/event-detail.jpg') --}}
            <figure class="image wow fadeIn"><a href="{{ asset('assets_user/images/resource/event-detail.jpg') }}"
                    class="lightbox-image"><img src="{{ asset('uploads/schedule/' . $value[0]['image']) }}" alt=""></a>
            </figure>
        </div>

        <div class="content-box">
            @foreach($value as $d)
            <div class="row">

                @if($hasil == 3)
                @foreach($d['speaker'] as $s)
                <div class="col-md-4">
                    <div class="speaker-info">
                        <figure class="thumb"><img src="{{ asset('uploads/speaker/'.$s['speakFoto'])}}" alt="">
                        </figure>
                        <h5 class="name">{{ $s['speakName'] }}</h5>
                        <span class="designation">{{ $s['speakJob'] }}</span>
                    </div>
                </div>
                @endforeach
                @else
                @foreach($d['speaker'] as $s)
                <div class="col-md-6">
                    <div class="speaker-info">
                        <figure class="thumb"><img src="{{ asset('uploads/speaker/'.$s['speakFoto'])}}" alt="">
                        </figure>
                        <h5 class="name">{{ $s['speakName'] }}</h5>
                        <span class="designation">{{ $s['speakJob'] }}</span>
                    </div>
                </div>
                @endforeach
                @endif

            </div>
            <ul class="upper-info">
                <li class="mt-2"><span class="icon far fa-clock"></span> {{date('h:i A', strtotime($d['tgl_mulai']))}} -
                    {{date('h:i
                    A', strtotime($d['tgl_akhir']))}}
                </li>
                <li><span class="icon fa fa-map-marker-alt"></span>Online</li>
            </ul>
            <h2>{{$d['agenda']}}</h2>
            <p>{{ strip_tags($d['description']) }}</p>
            @endforeach
        </div>
    </div>
    @endforeach
</section>
<!--End Event Detail -->

@endsection