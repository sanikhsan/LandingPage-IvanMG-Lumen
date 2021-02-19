<!DOCTYPE html>
<!--[if IE 7 ]>
<html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>
<html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>
<html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="id" class="no-js"> <!--<![endif]-->
<!-- =========================================
head
========================================== -->

<head>
    {{-- Path Head --}}
        @include('asset.head')
    {{-- End of Path Head --}}

    {{-- Path Asset CSS --}}
        @include('asset.css')
    {{-- End Of Path Asset CSS --}}
</head>
<!-- /head -->


<body>

    <div class="wrapper" id="wrapper">
          <div class="offcanvas-pusher">
              <div class="content-wrapper">
                <div class="container">
                    <div class="row">

                        <!--Path header -->
                        @include('partial.header')
                        <!--End Path header -->
                        
                    </div>
                    <!-- .row-->
                </div>
                <!-- .container-->

                <div class="breadcrumb-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="page-title">
                                    <h2>Layanan IPAL</h2>
                                    <ul class="breadcrumb">
                                       <li><a href="{{ url('/') }}">Home</a></li>
                                       <li class="active">Interior Desain</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- .row-->
                    </div>
                    <!-- .container-->
                </div>
                <!-- .breadcrumb-area-->

                <div class="container">
                    <div class="row">
                        <div class="residential-plumb">
                            <h2>PORTFOLIO INTERIOR DESAIN</h2>
                        </div>
                        <div class="tab-pane">
                            @foreach ($interior as $item)
                                <div class="col-md-4 col-xs-12 col-sm-6">
                                    <div class="service-item">
                                        <div class="service-thumb">
                                            <img src="{{ url('/data_interior/'.$item->gambar) }}" alt="{{ $item->judul }}">
                                        </div>
                                        <div class="service-description">
                                            <h3>{{ $item->judul }}</h3>
                                            {!! $item->deskripsi !!}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- .row-->
                </div>
                <!-- .container-->

                <!-- Service Client-->
                    @include('content.services-client')
                <!-- End of Service Client-->
                
                <!-- Footer-->
                    @include('partial.footer')
                <!-- End of Footer-->

                <!-- Mobile Navigation-->
                    @include('partial.mobile-nav')
                <!-- End of Mobile Navigation-->

                
            </div>
            <!--content-wrapper-->
        </div>
    </div>
    <!-- #wrapper -->


    <!-- =========================================
    JAVASCRIPT
    ========================================== -->

    @include('asset.js')

    <!-- =========================================
    JAVASCRIPT
    ========================================== -->


    
</body>
</html>