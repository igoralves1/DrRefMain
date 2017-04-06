<!--=== Header ===-->
<div class="header">
    <div class="container">
        <!-- Logo -->
        <a class="logo" href="#">
            <img src="{{ asset('assets/img/logodrreference.png')}}" alt="Logo">
        </a>
        <!-- End Logo -->

        <!-- Topbar -->
        <div class="topbar">
            <!--            
            <ul class="loginbar pull-left">
                <li class="hoverSelector">
                    <i class="fa fa-calendar-check-o"></i>
                    <a href="#">@yield('HeaderOpenHours')<i class="fa fa-check"></i></a>
                </li>	
                <li class="topbar-devider"></li>
                <li>
                    <i class="fa fa-fax"></i>
                    <a href="page_faq.html">@yield('HeaderTelsContact')</a>
                </li>
            </ul>
            -->
            <ul class="loginbar pull-right">
                <li class="hoverSelector">
                    <i class="fa fa-globe"></i>
                    <a href="{{ url($account.'/'.$locale.'_en/'.$active) }}">En<i class="@if($lang == 'en') fa fa-check @endif"></i></a>
                    <a href="{{ url($account.'/'.$locale.'_fr/'.$active) }}">Fr<i class="@if($lang == 'fr') fa  fa-check @endif"></i></a>
                    <a href="{{ url($account.'/'.$locale.'_pt/'.$active) }}">Pt<i class="@if($lang == 'pt') fa  fa-check @endif"></i></a>
                    <a href="{{ url($account.'/'.$locale.'_es/'.$active) }}">Sp<i class="@if($lang == 'es') fa  fa-check @endif"></i></a>
                </li>
                <li class="topbar-devider"></li>

                <li>
                    <i class="fa fa-recycle"></i>
                    <a href="#">{{ __('header.green') }}</a>
                </li>

            </ul>
        </div>
        <!-- End Topbar -->

        <!-- Toggle get grouped for better mobile display -->
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="fa fa-bars"></span>
        </button>
        <!-- End Toggle -->
    </div><!--/end container-->

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse mega-menu navbar-responsive-collapse">
        <div class="container">
            <ul class="nav navbar-nav">
                <!-- Home -->
                <li class="@if($active == 'home') active @endif">
                    <a href="{{ url($account.'/'.$locale.'_'.$lang) }}">
                        <i class="fa  fa-home"></i>
                        {{ __('header.home') }}
                    </a>							
                </li>
                <!-- End Home -->

                <!-- Patiente Zone -->
                <li class="dropdown @if($active == 'patientezone') active @endif">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-child"></i>
                        {{ __('header.patienteZone') }}
                    </a>
                    <ul class="dropdown-menu">								
                        <li><a href="{{ url($account.'/'.$locale.'_'.$lang.'/patientezone/postopinstructions') }}"><i class="fa  fa-info"></i>{{ __('header.postOpInstructions') }}</a></li>
                        <li><a href="{{ url($account.'/'.$locale.'_'.$lang.'/patientezone/articles') }}"><i class="fa  fa-file-text-o"></i>{{ __('header.articles') }}</a></a></li>
                        <li><a href="{{ url($account.'/'.$locale.'_'.$lang.'/patientezone/videos') }}"><i class="fa  fa-video-camera"></i>{{ __('header.videos') }}</a></a></li>
                    </ul>
                </li>
                <!-- End Patiente Zone -->
                
                <!-- SERVICES -->
                <li class="@if($active == 'services') active @endif">
                    <a href="{{ url($account.'/'.$locale.'_'.$lang.'/services') }}" >
                        <i class="fa fa-handshake-o"></i>
                        {{ __('header.services') }}
                    </a>
                </li>
                <!-- End SERVICES -->
                
                <!-- Latest News -->
                <li class="@if($active == 'latestnews') active @endif">
                    <a href="{{ url($account.'/'.$locale.'_'.$lang.'/latestnews') }}" >
<!--                        <i class="fa fa-newspaper-o"></i>-->
                        <i class="fa fa-bullhorn"></i>
                        {{ __('header.latestNews') }}
                    </a>
                </li>
                <!-- End Latest News -->

                <!-- Contact -->
                <li class="@if($active == 'contact') active @endif">
                    <a href="{{ url($account.'/'.$locale.'_'.$lang.'/contact') }}" >
                        <i class="fa fa-map-marker"></i>
                        {{ __('header.contacts') }}
                    </a>
                </li>
                <!-- End Patiente Zone -->

                <!-- Search Block -->
                <li>
                    <i class="search fa fa-search search-btn"></i>
                    <div class="search-open">
                        <div class="input-group animated fadeInDown">
                            <input type="text" class="form-control" placeholder="Search">
                            <span class="input-group-btn">
                                <button class="btn-u" type="button">Go</button>
                            </span>
                        </div>
                    </div>
                </li>
                <!-- End Search Block -->
            </ul>
        </div><!--/end container-->
    </div>
    <!--/navbar-collapse-->
</div>
<!--=== End Header ===-->