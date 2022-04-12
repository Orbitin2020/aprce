@extends('layouts_user.master')
@section('content')
    <!-- Banner Conference Two -->
    <section class="banner-conference-two image-banner" style="">
        <div class="color-overlay"></div>
        <div class="images-outer">
            {{-- <figure class="speaker-img"><img src="{{asset('assets_user/images/main-slider/banner_img.png')}}" alt=""></figure> --}}
        </div>

        <div class="auto-container">
            <div class="content-box">
                <h2 style="margin-bottom: 0px;margin-top:10px;">World Digital <br>APRCE Indonesia Conference 2022</h2>
                <span style="margin-bottom: 40px" class="title">Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Quaerat illum hic aperiam temporibus nostrum veniam aut, debitis ab dolorum magni commodi rem atque numquam voluptates eius consectetur error! Neque, error.</span>
                <div class="time-counter"><div class="time-countdown clearfix" data-countdown="09/27/2022"></div></div>
                <div class="btn-box"><a href="buy-ticket.html" class="theme-btn btn-style-two"><span class="btn-title">Booking Now</span></a></div>
            </div>
        </div>
    </section>
    <!--End Banner Conference Two -->

    <!-- Speaker Section -->
    <section class="about-section-two">
        <div class="row">
            <!-- Content Column -->
            <div class="content-column col-lg-6 col-md-12 col-sm-12 order-2">
                @if ($jokowi !== null)
                <div class="mb-3">
                    <h2 style="color: #FF0000;line-height: 50px;font-weight: 700;">Keynote Speech</h2>
                    <h1 style="color: #000000;font-weight:bold;line-height: 50px;">{{$jokowi->speakName}}</h1>
                    <h3 style="color: #000000;line-height: 50px;font-weight: 400;font-size: 20px;">{{$jokowi->speakJob}}</h3>
                </div>
                @else
                @endif
                <div class="row">
                    @foreach ($speaker as $f)
                    <div class="gallery-item col-lg-4 col-md-6 col-sm-12 wow fadeIn">
                        <div class="image-box">
                            <figure class="image"><img class="" src="{{ asset('uploads/speaker/'.$f['speakFoto'])}}" alt="" style="height: 150px;width:150px"></figure>
                            <div class="overlay-box" style="left: 0; right: 0;height: 150px;width:150px">
                                <a href="{{ asset('uploads/speaker/'.$f['speakFoto'])}}" class="lightbox-image" data-fancybox="gallery"><span class="icon fa fa-expand-arrows-alt"></span>
                                </a>
                            </div>
                        </div>
                        <div class="">
                            @if ($f['speakPrioritas'] == 2)
                            <h6 style="color: #FF0000;">Keynote Speech</h6>
                            <h6 style="color: #000000;font-weight:bold;">{{$f['speakName']}}</h6>
                            <h6 style="color: #000000;">{{$f['speakJob']}}</h6>
                            @elseif($f['speakPrioritas'] == 3)
                            <h6 style="color: #FF0000;">Welcome Remarks</h6>
                            <h6 style="color: #000000;font-weight:bold;">{{$f['speakName']}}</h6>
                            <h6 style="color: #000000;">{{$f['speakJob']}}</h6>
                            @elseif($f['speakPrioritas'] == 4)
                            <h6 style="color: #FF0000;">Opening Remarks</h6>
                            <h6 style="color: #000000;font-weight:bold;">{{$f['speakName']}}</h6>
                            <h6 style="color: #000000;">{{$f['speakJob']}}</h6>
                            @else
                            <h6 style="color: yellow;">Speakers</h6>
                            <h6>{{$f['speakName']}}</h6>
                            <h6>{{$f['speakJob']}}</h6>
                            @endif
                        </div>
                    </div>
                    
        
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
                            <a href="{{asset('uploads/speaker/'.$jokowi->speakFoto)}}" class="lightbox-image" data-fancybox="gallery"><span class="icon fa fa-expand-arrows-alt"></span>
                            </a>
                        </div>
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
                        <figure class="image"><img class="mx-auto" src="{{asset('assets_user/images/gallery/1.jpg')}}" alt="" style="height: 150px;width:150px"></figure>
                        <div class="overlay-box"><a href="assets_user/images/gallery/1.jpg" class="lightbox-image" data-fancybox='gallery'><span class="icon fa fa-expand-arrows-alt"></span></a></div>
                    </div>
                    <div class="text-center">
                        <h5>Test Image</h5>
                        <h6>Test</h6>
                    </div>
                </div>
            </div>
        </div> --}}
        
        <div class="speaker2-carousel owl-carousel owl-theme">
            @for ($i = 0; $i < 20; $i++)
                <!-- Gallery Item -->
                <div class="gallery-item">
                    <div class="image-box">
                        <figure class="image"><img  class="mx-auto" src="{{asset('assets_user/images/gallery/1.jpg')}}" alt="" style="height: 150px;width:150px"></figure>
                        <div class="overlay-box" style=" left: 0; right: 0;margin-left: auto; margin-right: auto;height: 150px;width:150px ">
                            <a href="assets_user/images/gallery/1.jpg" class="lightbox-image" data-fancybox='gallery'><span class="icon fa fa-expand-arrows-alt"></span>
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
                    <h3>Welcome to the APRCE <br>Indonesia Summit 2022</h3>
                    <div class="text">Dolor sit amet consectetur elit sed do eiusmod tempor incd idunt labore et dolore magna aliqua enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat</div>
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
                <span class="title">About Conference</span>
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
                            <span class="month">{{date('M', strtotime($value[0]["tgl_mulai"]))}}</span> {{date('Y', strtotime($value[0]["tgl_mulai"]))}}
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
                            <div class="schedule-block col-lg-6 col-md-12 col-sm-12">
                                <div class="inner-box">
                                    <div class="inner">
                                        <div class="date">{{date('h:i A', strtotime($d['tgl_mulai']))}} - {{date('h:i A', strtotime($d['tgl_akhir']))}}</div>
                                       
                                        <div class="schedule-carousel owl-carousel owl-theme">
                                            @foreach ($d['speaker'] as $s)
                                            <div class="speaker-info">
                                                <figure class="thumb"><img src="{{ asset('uploads/speaker/'.$s['speakFoto'])}}" alt=""></figure>
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
                            </div>
                            @endforeach
                           
                        </div>
                    </div>
                    @endforeach
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
    <section class="call-to-action" style="background-image: url(assets_user/images/background/semi-banner.jpg);">
        <div class="auto-container">
            <div class="content-box">
                <div class="text" style="color: #ffffff">WE’RE A LEADING MEETUP COMPANY</div>
                <h2>We Are Always at The Forefront <br> of The Business Conference !</h2>
                <div class="btn-box">
                    <a href="{{route('user.contact')}}" class="theme-btn btn-style-one" style="background-color: #FDD400;color:#D20000"><span class="btn-title">Contact Us</span></a>
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
        <div class="sec-title text-center">
            <span class="title">Get Ticket</span>
        </div>
        @if (sizeof($offline))
            <div class="auto-container">
                <div class="sec-title text-center">
                    <h2>Offline Tickets</h2>
                </div>

                <div class="outer-box">
                    <div class="row">
                        @foreach ($offline as $d)
                            <div class="pricing-block-three col-lg-4 col-md-6 col-sm-12 wow fadeInUp centered">
                                <div class="inner-box">
                                    <div class="title">{{$d->nama}}</div>
                                    <h4 class="price">${{$d->harga}}</h4>
                                    <ul class="features">
                                        <li>01 Conference Tickets</li>
                                        <li>Free Lunch And Coffee</li>
                                        <li>Certificate</li>
                                    </ul>
                                    <input id type="hidden" value="{{$d->id}}">
                                    <button id="userRegist" class="theme-btn btn-style-one" type="button" data-id="{{$d->id}}" data-toggle="modal" data-target="#modalRegist">
                                        <span class="btn-title">BUY Ticket</span>
                                    </button>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endif

        @if (sizeof($online))
            <div class="auto-container">
                <div class="sec-title text-center">
                    <h2>Online Tickets</h2>
                </div>

                <div class="outer-box">
                    <div class="row">
                        @foreach ($online as $d)
                            <div class="pricing-block-three col-lg-4 col-md-6 col-sm-12 wow fadeInUp centered">
                                <div class="inner-box">
                                    <div class="title">{{$d->nama}}</div>
                                    <h4 class="price">${{$d->harga}}</h4>
                                    <ul class="features">
                                        <li>01 Conference Tickets</li>
                                        <li>Free Lunch And Coffee</li>
                                        <li>Certificate</li>
                                    </ul>
                                    <input id type="hidden" value="{{$d->id}}">
                                    <button id="userRegist" class="theme-btn btn-style-one" type="button" data-toggle="modal" data-id="{{$d->id}}" data-target="#modalRegist">
                                        <span class="btn-title">Buy Ticket</span>
                                    </button>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endif
    </section>
    <!--End Pricing Section -->

    {{-- <!-- Gallery Section -->
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
                        <figure class="image-box"><a href="#"><img src="{{asset('uploads/sponsor/'.$spon['gambar'])}}" alt=""></a></figure>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!--End Sponsor Section-->

    <!-- Button trigger modal -->

  
  <!-- Modal -->
  <div class="modal fade" id="modalRegist" tabindex="-1" role="dialog" aria-labelledby="modalRegistLabel" aria-hidden="true">
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
                    <form method="post" action="" name="frm_regist" id="frm_regist">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="nama" placeholder="Your Name" required="">
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
                            <input type="hidden" id="tiket" name="tiket">
                        </div>
                        <div class="form-group">
                            <button id="saveBtn" class="theme-btn btn-style-three" type="button" name="submit">
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

        idTiket = 0;
        $(document).on("click", "#userRegist", function() {
            idTiket = $(this).attr('data-id');
            $('#frm_regist').trigger("reset");
            $('#modalRegist').modal('show');

        });

        // Store Pengaduan
        $('#saveBtn').click(function(e){
            e.preventDefault();
            $('#tiket').val(idTiket);
            var formData = new FormData(document.getElementById("frm_regist"));
            var url;
            var type;
            url = "{{ route('daftar.store') }}"
            type = "POST"
            $.ajax({
                headers : {
                    'X-CSRF-TOKEN' : "{{csrf_token()}}"
                },
                data : formData,
                url: url,
                type: type,
                contentType:false,
                processData:false,
                success: function(response){
                    Swal.fire({
                        title : 'Success !',
                        icon: 'success',
                        text  : 'Success',
                        showConfirmButton : true
                    })
                    $('#frm_regist').trigger("reset");
                    $('#modalRegist').modal('hide');
                    idTiket = 0;
                },
                error: function(json) {
                    alert('Error occurs!');
                    idTiket = 0;
                }
            })
        })
        // End Store

    })
</script>
@endpush
