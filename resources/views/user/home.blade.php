@extends('layouts_user.master')
@push('css')
<script type="text/javascript" src="https://app.midtrans.com/snap/snap.js"
    data-client-key="Mid-client-M8haSFVE-_Y9aWW1">
    // <script type="text/javascript" src="https://app.midtrans.com/snap/snap.js"
//     data-client-key="Mid-client-M8haSFVE-_Y9aWW1">
</script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
@endpush
@section('content')
<!-- Banner Conference Two -->
<section class="banner-conference-two image-banner" style="">
    <div class="color-overlay"></div>
    <div class="images-outer">
        {{-- <figure class="speaker-img"><img src="{{asset('assets_user/images/main-slider/banner_img.png')}}" alt="">
        </figure> --}}
    </div>

    <div class="auto-container">
        <div class="content-box">
            <h2 style="margin-bottom: 0px;margin-top:10px;">Asia Pacific Retailers<br>Convention & Exhibition</h2>
            <span style="margin-bottom: 40px;margin-top: 40px" class="title">Lorem ipsum dolor sit amet consectetur
                adipisicing elit.<br> Quaerat illum hic aperiam temporibus nostrum veniam aut, debitis ab dolorum magni
                commodi rem atque numquam voluptates eius consectetur error! Neque, error.</span>
            <div class="time-counter">
                <div class="time-countdown clearfix" data-countdown="11/11/2022"></div>
            </div>
            <div class="btn-box"><a href="#tiket" class="theme-btn btn-style-two"><span class="btn-title">Booking
                        Now</span></a></div>
        </div>
    </div>
</section>
<!--End Banner Conference Two -->

<!-- Speaker Section -->
<section class="about-section-two">
    <div class="row">
        <!-- Content Column -->
        <div class="content-column col-lg-6 col-md-12 col-sm-12 order-2">
            {{-- @if ($jokowi !== null)
            <div class="mb-3 ml-4">
                <h4 style="color:#FF0000; font-weight: 700;">Keynote Speech</h4>
                <h2 style="color: #000000; font-weight:bold; line-height: 80%">{{ $jokowi->speakName }}</h2>
                <h4 style="color: #000000; font-weight:400;">{{ $jokowi->speakJob }}</h4>
            </div>
            @else
            @endif --}}
            <div class="row speaker-men">
                @foreach ($speaker as $f)
                <div class="gallery-item col-lg-4 col-md-6 col-sm-12 wow fadeIn">
                    <div class="image-box">
                        <figure class="image"><img class="mx-auto" src="{{ asset('uploads/speaker/'.$f['speakFoto'])}}"
                                alt="" style="height: 150px;width:150px"></figure>
                        <div class="overlay-box"
                            style="left: 0; right: 0;margin-left: auto; margin-right: auto;height: 150px;width:150px">
                            <a href="{{ asset('uploads/speaker/'.$f['speakFoto'])}}" class="lightbox-image"
                                data-fancybox="gallery"><span class="icon fa fa-expand-arrows-alt"></span>
                            </a>
                        </div>
                    </div>
                    <div class="">
                        @if ($f['speakPrioritas'] == 2)
                        {{-- <h6 class="text-center" style="color: #FF0000;">Keynote Speech</h6> --}}
                        <h6 class="text-center mt-2" style="color: #000000;font-weight:bold;">{{$f['speakName']}}</h6>
                        <h6 class="text-center" style="color: #000000; line-height: 100%">{{$f['speakJob']}}</h6>
                        @elseif($f['speakPrioritas'] == 3)
                        {{-- <h6 class="text-center" style="color: #FF0000;">Welcome Remarks</h6> --}}
                        <h6 class="text-center mt-2" style="color: #000000;font-weight:bold; line-height: 80%">
                            {{$f['speakName']}}</h6>
                        <h6 class="text-center" style="color: #000000;">{{$f['speakJob']}}</h6>
                        @elseif($f['speakPrioritas'] == 4)
                        {{-- <h6 class="text-center" style="color: #FF0000;">Opening Remarks</h6> --}}
                        <h6 class="text-center mt-2" style="color: #000000;font-weight:bold;">{{$f['speakName']}}</h6>
                        <h6 class="text-center" style="color: #000000; line-height: 80%">{{$f['speakJob']}}</h6>
                        @else
                        <h6 style="color: yellow;">Speakers</h6>
                        <h6>{{$f['speakName']}}</h6>
                        <h6>{{$f['speakJob']}}</h6>
                        @endif
                    </div>
                </div>
                {{-- <div class="speaker-block col-xl- col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="speakers-detail.html"><img
                                        src="images/resource/speaker-1.jpg" alt=""></a>
                            </figure>
                        </div>
                        <div class="info-box">
                            <div class="inner">
                                <h4 class="name"><a href="speakers-detail.html">Dale Marke</a></h4>
                                <span class="designation">Event Manager</span>
                                <ul class="social-links social-icon-colored">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> --}}


                @endforeach

            </div>
            {{-- <div class="inner-column"> --}}

                {{-- </div> --}}
        </div>

        <!-- Image Column -->
        <div class="image-column col-lg-6 col-md-12 col-sm-12">
            <div class="gallery-item col-lg-12 col-md-12 col-sm-12 wow fadeIn" data-wow-delay="400ms">
                @if ($jokowi !== null)
                <div class="image-box">
                    <figure class="image"><img src="{{ asset('uploads/speaker/'.$jokowi->speakFoto)}}" alt=""></figure>
                    <div class="overlay-box">
                        <a href="{{asset('uploads/speaker/'.$jokowi->speakFoto)}}" class="lightbox-image"
                            data-fancybox="gallery"><span class="icon fa fa-expand-arrows-alt"></span>
                        </a>
                    </div>
                </div>
                <div class="text-center">
                    <h4 style="color:#FF0000; font-weight: 700;">Keynote Speech</h4>
                    <h2 style="color: #000000; font-weight:bold; line-height: 80%">{{ $jokowi->speakName }}</h2>
                    <h4 style="color: #000000; font-weight:400;">{{ $jokowi->speakJob }}</h4>
                </div>
                @else
                @endif
            </div>
        </div>
    </div>
    {{-- <div class="row">
        <div class="content-column col-lg-12 col-md-12 col-sm-12 order-2">
            <div class="gallery-item col-lg-2 col-md-4 col-sm-12 wow fadeIn">
                <div class="image-box">
                    <figure class="image"><img class="mx-auto" src="{{asset('assets_user/images/gallery/1.jpg')}}"
                            alt="" style="height: 150px;width:150px"></figure>
                    <div class="overlay-box"><a href="assets_user/images/gallery/1.jpg" class="lightbox-image"
                            data-fancybox='gallery'><span class="icon fa fa-expand-arrows-alt"></span></a></div>
                </div>
                <div class="text-center">
                    <h5>Test Image</h5>
                    <h6>Test</h6>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="speaker2-carousel owl-carousel owl-theme">
        @for ($i = 0; $i < 20; $i++) <!-- Gallery Item -->
            <div class="gallery-item">
                <div class="image-box">
                    <figure class="image"><img class="mx-auto" src="{{asset('assets_user/images/gallery/1.jpg')}}"
                            alt="" style="height: 150px;width:150px"></figure>
                    <div class="overlay-box"
                        style=" left: 0; right: 0;margin-left: auto; margin-right: auto;height: 150px;width:150px ">
                        <a href="assets_user/images/gallery/1.jpg" class="lightbox-image" data-fancybox='gallery'><span
                                class="icon fa fa-expand-arrows-alt"></span>
                        </a>
                    </div>
                </div>
                <div class="text-center">
                    <h5>Test Image</h5>
                    <h6>Test</h6>
                </div>
            </div>
            @endfor

    </div>
</section>
<!--End Speaker Section -->

<!-- Features Section Three -->
<section class="features-section-three no-pd-top">
    <div class="auto-container">
        <div class="row">
            <!-- Feature Block -->
            <div class="feature-block-three col-lg-6 col-md-12 col-sm-12 wow fadeInUp">
                <div class="inner-box">
                    <div class="icon-box"><span class="icon flaticon-lecture"></span></div>
                    <h4><a href="">Great Speakers</a></h4>
                    <div class="text">Dolor sit amet consectetur elit sed do eiusmod tempor incd idunt.</div>
                    <div class="link-box"><a href="" class="theme-btn"><span class="fa fa-angle-right"></span></a></div>
                </div>
            </div>

            <!-- Feature Block -->
            <div class="feature-block-three col-lg-6 col-md-12 col-sm-12 wow fadeInUp">
                <div class="inner-box">
                    <div class="icon-box"><span class="icon flaticon-search"></span></div>
                    <h4><a href="">Experience</a></h4>
                    <div class="text">Dolor sit amet consectetur elit sed do eiusmod tempor incd idunt.</div>
                    <div class="link-box"><a href="" class="theme-btn"><span class="fa fa-angle-right"></span></a></div>
                </div>
            </div>

            <!-- Feature Block -->
            <div class="feature-block-three col-lg-6 col-md-12 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                <div class="inner-box">
                    <div class="icon-box"><span class="icon flaticon-diamond-1"></span></div>
                    <h4><a href="">Networking</a></h4>
                    <div class="text">Dolor sit amet consectetur elit sed do eiusmod tempor incd idunt.</div>
                    <div class="link-box"><a href="" class="theme-btn"><span class="fa fa-angle-right"></span></a></div>
                </div>
            </div>

            <!-- Feature Block -->
            <div class="feature-block-three col-lg-6 col-md-12 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                <div class="inner-box">
                    <div class="icon-box"><span class="icon flaticon-success"></span></div>
                    <h4><a href="">Party</a></h4>
                    <div class="text">Dolor sit amet consectetur elit sed do eiusmod tempor incd idunt.</div>
                    <div class="link-box"><a href="" class="theme-btn"><span class="fa fa-angle-right"></span></a></div>
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
                <h3>Welcome to the <br> Asia Pacific Retailers Convention & Exhibition</h3>
                <div class="text">Asia's biggest and longest running retail convention and exhibition</div>
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

<!-- Schedule Section Style two -->
<section class="schedule-section style-three">
    <div class="auto-container">
        <div class="sec-title text-center">
            <span class="title" style="background: none">About Conference</span>
            <h2>Schedule Plan</h2>
        </div>

        <div class="schedule-tabs style-three tabs-box">
            <div class="btns-box">
                <!--Tabs Box-->
                <ul class="tab-buttons clearfix">

                    @foreach ($schedule as $key => $value)
                    {{-- {{var_dump($value[0]["tgl_mulai"])}} --}}
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
                <div class="tab {{$key== 0 ? 'active-tab': '' }} " id="{{$key}}">
                    <div class="schedule-timeline row">
                        @foreach ($value as $d)
                        <!-- schedule Block -->
                        <div class="schedule-block">
                            <div class="inner-box">
                                <div class="inner">
                                    <div class="date">{{date('h:i A', strtotime($d['tgl_mulai']))}} - {{date('h:i A',
                                        strtotime($d['tgl_akhir']))}}</div>
                                    @foreach ($d['speaker'] as $s)
                                    <div class="speaker-info">
                                        <figure class="thumb"><img src="{{ asset('uploads/speaker/'.$s['speakFoto'])}}"
                                                alt="Image">
                                        </figure>
                                        <h5 class="name">{{$s['speakName']}}</h5>
                                        <span class="designation">{{$s['speakJob']}}</span>
                                    </div>
                                    @endforeach
                                    <h4 class="mt-2">{{$d['agenda']}}</h4>
                                    <div class="text">{!!$d['description']!!}</div>
                                    <div class="btn-box">
                                        <a href="event-detail.html" class="theme-btn">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- <div class="schedule-block col-lg-6 col-md-12 col-sm-12">
                            <div class="inner-box">
                                <div class="inner">
                                    <div class="date">{{date('h:i A', strtotime($d['tgl_mulai']))}} - {{date('h:i A',
                                        strtotime($d['tgl_akhir']))}}</div>

                                    <div class="schedule-carousel owl-carousel owl-theme">
                                        @foreach ($d['speaker'] as $s)
                                        <div class="speaker-info">
                                            <figure class="thumb"><img
                                                    src="{{ asset('uploads/speaker/'.$s['speakFoto'])}}" alt="">
                                            </figure>
                                            <h5 class="name">{{$s['speakName']}}</h5>
                                            <span class="designation">{{$s['speakJob']}}</span>
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

                        {{-- <div class="schedule-block">
                            <div class="inner-box">
                                <div class="inner">
                                    <div class="date">9.00 AM - 10.00 AM</div>
                                    <div class="speaker-info">
                                        <figure class="thumb"><img src="images/resource/thumb-1.jpg" alt="">
                                        </figure>
                                        <h5 class="name">Ashli Scroggy</h5>
                                        <span class="designation">Founder & CEO</span>
                                    </div>
                                    <h4><a href="event-detail.html">Modern Marketing Summit Sydney 2018</a></h4>
                                    <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                        sed do eiusmtempor incididunt labore et</div>
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



<!-- Call to action -->
<section class="call-to-action" style="background-image: url(assets_user/images/background/semi-banner.jpg);">
    <div class="auto-container">
        <div class="content-box">
            <div class="text" style="color: #ffffff">WE’RE A LEADING MEETUP COMPANY</div>
            <h2>We Are Always at The Forefront <br> of The Business Conference !</h2>
            <div class="btn-box">
                <a href="{{route('user.contact')}}" class="theme-btn btn-style-one"
                    style="background-color: #FDD400;color:#D20000"><span class="btn-title">Contact Us</span></a>
            </div>
        </div>
    </div>
</section>
<!--End Call to action -->

<!-- Pricing Section -->
<section class="pricing-section-three" id="tiket">
    <div class="anim-icons">
        <span class="icon icon-line-1 wow zoomIn"></span>
        <span class="icon icon-circle-1 wow zoomIn"></span>
        <span class="icon icon-dots wow zoomIn"></span>
    </div>
    <div class="sec-title text-center">
        <span class="title">Get Ticket</span>
    </div>

    <div class="auto-container">
        <div class="sec-title text-center">
            <h2>Choose a Tickets</h2>
        </div>

        <div class="outer-box">

            <div class="row">
                @foreach ($tiket as $d)
                <div class="pricing-block-three col-lg-4 col-md-6 col-sm-12 wow fadeInUp centered">
                    <div class="inner-box">
                        <div class="title">{{$d->nama}}</div>
                        <h4 class="price">${{$d->harga}}</h4>
                        <ul class="features">
                            <li>01 Conference Tickets</li>
                            <li>Free Lunch And Coffee</li>
                            <li>Certificate</li>
                        </ul>
                        {{-- <input id="tiket" type="hidden" value="{{$d->id}}"> --}}
                        <button id="userRegist" class="theme-btn btn-style-one" data-id="{{$d->id}}">
                            <span class="btn-title">BUY Ticket</span>
                        </button>
                        {{-- <button id="userRegist" class="theme-btn btn-style-one" type="button" data-id="{{$d->id}}"
                            data-toggle="modal" data-target="#modalRegist">
                            <span class="btn-title">BUY Ticket</span>
                        </button> --}}
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>


</section>
<!--End Pricing Section -->

{{--
<!-- Gallery Section -->
<section class="gallery-section style-two">
    <div class="gallery-carousel owl-carousel owl-theme">
        <!-- Gallery Item -->
        <div class="gallery-item">
            <div class="image-box">
                <figure class="image"><img src="{{asset('assets_user/images/gallery/1.jpg')}}" alt=""></figure>
                <div class="overlay-box"><a href="assets_user/images/gallery/1.jpg" class="lightbox-image"
                        data-fancybox='gallery'><span class="icon fa fa-expand-arrows-alt"></span></a></div>
            </div>
        </div>

        <!-- Gallery Item -->
        <div class="gallery-item">
            <div class="image-box">
                <figure class="image"><img src="{{asset('assets_user/images/gallery/2.jpg')}}" alt=""></figure>
                <div class="overlay-box"><a href="assets_user/images/gallery/2.jpg" class="lightbox-image"
                        data-fancybox='gallery'><span class="icon fa fa-expand-arrows-alt"></span></a></div>
            </div>
        </div>

        <!-- Gallery Item -->
        <div class="gallery-item">
            <div class="image-box">
                <figure class="image"><img src="{{asset('assets_user/images/gallery/3.jpg')}}" alt=""></figure>
                <div class="overlay-box"><a href="assets_user/images/gallery/3.jpg" class="lightbox-image"
                        data-fancybox='gallery'><span class="icon fa fa-expand-arrows-alt"></span></a></div>
            </div>
        </div>

        <!-- Gallery Item -->
        <div class="gallery-item">
            <div class="image-box">
                <figure class="image"><img src="{{asset('assets_user/images/gallery/4.jpg')}}" alt=""></figure>
                <div class="overlay-box"><a href="assets_user/images/gallery/4.jpg" class="lightbox-image"
                        data-fancybox='gallery'><span class="icon fa fa-expand-arrows-alt"></span></a></div>
            </div>
        </div>

        <!-- Gallery Item -->
        <div class="gallery-item">
            <div class="image-box">
                <figure class="image"><img src="{{asset('assets_user/images/gallery/5.jpg')}}" alt=""></figure>
                <div class="overlay-box"><a href="assets_user/images/gallery/5.jpg" class="lightbox-image"
                        data-fancybox='gallery'><span class="icon fa fa-expand-arrows-alt"></span></a></div>
            </div>
        </div>

        <!-- Gallery Item -->
        <div class="gallery-item">
            <div class="image-box">
                <figure class="image"><img src="{{asset('assets_user/images/gallery/6.jpg')}}" alt=""></figure>
                <div class="overlay-box"><a href="assets_user/images/gallery/6.jpg" class="lightbox-image"
                        data-fancybox='gallery'><span class="icon fa fa-expand-arrows-alt"></span></a></div>
            </div>
        </div>
    </div>
</section>
<!--End Gallery Section --> --}}

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

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="modalRegist" tabindex="-1" role="dialog" aria-labelledby="modalRegistLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalRegistLabel">Registrasion Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="inner-column">
                    <div class="ticket-form">
                        <form method="POST" action="{{ url('snapFinish') }}" id="paymentForm">
                            @csrf
                            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                            <input type="hidden" name="result_type" id="result-type" value="">
                            <input type="hidden" name="result_data" id="result-data" value="">
                            <div class="form-group">
                                <input type="text" name="firstName" placeholder="First Name" required="">
                            </div>
                            <div class="form-group">
                                <input type="text" name="lastName" placeholder="Last Name" required="">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" placeholder="Your Email" required="">
                            </div>
                            <div class="form-group">
                                <input type="phone" name="nohp" placeholder="Phone" required="">
                            </div>
                            <div class="form-group">
                                <input type="number" name="quantity" placeholder="Quantity" required="">
                            </div>
                            <div class="form-group">
                                <input type="number" hidden id="tiket_id" name="tiket_id">
                            </div>
                            <div class="form-group">
                                <button id="payBtn" class="theme-btn btn-style-three">
                                    <span class="btn-title">Purchase</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
@push('scripts')

<script>
    $.ajaxSetup({
     headers: {
       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
     }
   });
</script>
<script>
    $(document).ready(function(){
        // Create Modal
        $(document).on("click", "#userRegist", function() {
            let idTiket = $(this).attr('data-id');
            $('.frm_regist').trigger("reset");
            $('#modalRegist').modal('show');

            $('#tiket_id').val(idTiket);
        });

        // Store Pengaduan
        // $('#saveBtn').click(function(e){
        //     e.preventDefault();
        //     $('#tiket_id').val(idTiket);
        //     console.log( $('#tiket_id').val())
        //     var formData = new FormData(document.getElementById("frm_regist"));
        //     var url;
        //     var type;
        //     url = "{{ route('daftar.store') }}"
        //     type = "POST"
        //     $.ajax({
        //         headers : {
        //             'X-CSRF-TOKEN' : "{{csrf_token()}}"
        //         },
        //         data : formData,
        //         url: url,
        //         type: type,
        //         contentType:false,
        //         processData:false,
        //         beforeSend: function() {
        //             Swal.fire({
        //                 title: 'Please Wait...',
        //                 text: 'Your data is being processed!',
        //                 timer: 5000,
        //                 timerProgressBar: true,
        //                 didOpen: () => {
        //                     Swal.showLoading()
        //                 },
        //             });
        //         },
        //         success: function(response){
        //             Swal.fire({
        //                 title : 'Success !',
        //                 icon: 'success',
        //                 text  : 'Success',
        //                 showConfirmButton : true
        //             });
        //             $('#frm_regist').trigger("reset");
        //             $('#modalRegist').modal('hide');
        //             idTiket = 0;
        //         },
        //         error: function(json) {
        //             alert('Error occurs!');
        //             idTiket = 0;
        //         }
        //     })
        // })
        // End Store

    })
</script>
<script type="text/javascript">
    $('#payBtn').click(function(e) {
        e.preventDefault();

        // $(this).attr('disabled', 'disabled');

        let token = $('input[name="_token"]').val();
        let firstName = $('input[name="firstName"]').val();
        let lastName = $('input[name="lastName"]').val();
        let email = $('input[name="email"]').val();
        let noHp = $('input[name="nohp"]').val();
        let quantity = $('input[name="quantity"]').val();
        let tiket_id = $('input[name="tiket_id"]').val();

        $.ajax({
            url: './snaptoken',
            type: 'POST',
            cache: false,
            data: {
                firstName: firstName,
                lastName: lastName,
                email: email,
                noHp: noHp,
                quantity: quantity,
                tiket_id: tiket_id
            },
            success: function(data) {
                console.log('token =' + data);
                var resultType = document.getElementById('result-type');
                var resultData = document.getElementById('result-data');
                // var resultType = document.getElementById('result-type');
                // var resultData = document.getElementById('result-data');

                function changeResult(type, data) {
                    $("#result-type").val(type);
                    $('#result-data').val(JSON.stringify(data));
                }

                snap.pay(data, {
                    onSuccess: function(result) {
                        changeResult('success', result);
                        console.log(result.status_message);
                        console.log(result);
                        $('#paymentForm').submit();
                        Swal.fire(
                            'Good job!',
                            'You clicked the button!',
                            'success'
                        );
                        // setTimeout(() => {
                        //     window.location.href = '/';
                        // }, 5000);
                    },
                    onPending: function(result) {
                        changeResult('pending', result);
                        console.log(result.status_message);
                        $('#paymentForm').submit();
                        Swal.fire(
                            'Good job!',
                            'You clicked the button!',
                            'success'
                        );
                        // setTimeout(() => {
                        //     window.location.href = '/';
                        // }, 5000);
                    },
                    onError: function(result) {
                        changeResult('error', result);
                        console.log(result.status_message);
                        $('#paymentForm').submit();
                        Swal.fire(
                            'Good job!',
                            'You clicked the button!',
                            'success'
                        );
                        // setTimeout(() => {
                        //     window.location.href = '/';
                        // }, 5000);
                    }
                });
            }
        })
    });
</script>
@endpush