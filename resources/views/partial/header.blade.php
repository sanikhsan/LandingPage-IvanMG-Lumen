<section class="header">
    <header class="header-wrapper">
        <div class="header-top">
                <div class="col-md-6 col-xs-12 col-sm-6">
                    <div class="logo">
                        <a title="fontanero" href="{{ route('landing') }}">
                            <img src="{{ url('asset_landing/img/logo.png') }}" alt="fontanero">
                        </a>
                    </div>
                </div>
                <div class="col-md-6 hidden-xs col-sm-6">
                    <div class="header-connection">
                        <ul class="header-social social">
                            <li><a href="{{ $sites->facebook }}"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="{{ $sites->twitter }}"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="{{ $sites->LinkedIn }}"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                        <p><strong>Hubungi Kami : Telepon +{{ $sites->no_telp }}<br> Whatsapp +{{ $sites->no_wa }}</strong></p>
                    </div>										
                </div>
        </div>
        <!-- .header-top-->
        <div class="main-nav-bar">
            <div class="col-md-12">
                    <div class="navbar-header navbar-right pull-left">
                        <!-- offcanvas-trigger-effects -->
                        <div id="offcanvas-trigger-effects" class="offcanvas">
                            <button type="button" class="navbar-toggle visible-xs" data-toggle="offcanvas"
                                    data-target=".navbar-collapse" data-placement="left" data-effect="offcanvas-effect">
                                <i class="fa fa-bars"></i>
                            </button>
                        </div>
                        <!-- offcanvas-trigger-effects -->
                    </div>

                    <!-- navbar-collapse -->
                    <nav role="navigation" class="collapse navbar-collapse navbar main-nav">
                       <ul class="nav navbar-nav navbar-left">
                          <li><a href="{{ route('landing') }}">Home</a></li>
                          <li><a href="{{ route('landabout') }}">Tentang Kami</a></li>
                          <li><a href="{{ route('service-interior') }}">Interior Desain</a></li>
                          <li><a href="{{ route('service-ipal') }}">Pengolahan Limbah</a></li>
                          {{-- <li class="dropdown"><a href="service.html">Services</a>
                                  <ul class="dropdown-menu">
                                    <li><a href="article-page.html">Water Heater</a></li>
                                    <li><a href="article-page.html">Bathroom</a></li>
                                    <li><a href="article-page.html">Toilet</a></li>
                                    <li><a href="article-page.html">Tube and Shower</a></li>
                                    <li><a href="article-page.html">Pipes and sweres</a></li>
                                    <li><a href="article-page.html">Drainage</a></li>
                                </ul>
                            </li> --}}
                          
                          <li><a href="{{ route('landcontact') }}">Hubungi Kami</a></li>
                       
                        </ul>
                        <!-- /navbar-nav -->

                        <div class="nav navbar-nav navbar-right" id="header-right">
                            <div class="header-right">
                                <form>
                                   <input type="search" name="search" class="empty" id="iconshow" placeholder=" &#xF002;" disabled>
                                </form>

                            </div>					            
                        </div>
                    </nav>
                    <!-- /navbar-collapse -->
            </div>
        </div>
        <!-- .main-nav-bar -->
    </header>
    <!-- .header-wrapper-->
</section>