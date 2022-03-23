<div class="main-box">
    <div class="auto-container clearfix">
        <div class="logo-box">
            <div class="logo"><a href="index.html"><img src="{{asset('assets_user/images/logo-2.png')}}" alt="" title=""></a></div>
        </div>

        <!--Nav Box-->
        <div class="nav-outer clearfix">
            <!--Mobile Navigation Toggler-->
            <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
            <!-- Main Menu -->
            <nav class="main-menu navbar-expand-md navbar-light">
                <div class="navbar-header">
                    <!-- Togg le Button -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon flaticon-menu-button"></span>
                    </button>
                </div>

                <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                    <ul class="navigation clearfix">
                        <li class="dropdown"><a href="{{route('user.index')}}">Home</a></li>
                        <li class="dropdown"><a href="{{route('user.about')}}">About</a></li>
                        <li class="dropdown"><a href="{{route('user.speaker')}}">Speakers</a></li>
                        <li class="dropdown"><a href="{{route('user.schedule')}}">Schedule</a></li>
                        <li><a href="{{route('user.contact')}}">Contact</a></li>
                    </ul>
                </div>
            </nav>
            <!-- Main Menu End-->

            <!-- Outer box -->
            <div class="outer-box">
                <!-- Button Box -->
                <div class="btn-box">
                    <a href="buy-ticket.html" class="theme-btn btn-style-one"><span class="btn-title">Get Tickets</span></a>
                </div>
            </div>
        </div>
    </div>
</div>