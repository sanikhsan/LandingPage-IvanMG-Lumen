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
										<h2>Contact us</h2>
										<ul class="breadcrumb">
										   <li><a href="{{ route('landing') }}">Home</a></li>
										   <li class="active">contact</li>
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
							<div class="col-md-12">
								<div class="map-head">
						    		<h2>Location map</h2>
						    	</div>
							</div>
							<!-- .col-md-12-->
						</div>
						<!-- .row-->
					</div>
					<!-- .container-->

					<div class="map-area">
						{!! $about->googlemaps !!}
					</div>
					<!-- .map-area-->

					<div class="container">
						<div class="row">
							<div class="form-section">
								<div class="col-md-8 col-xs-12 col-sm-8">
									<div class="main-contact-form">
										<h4>Hubungi Kami</h4>
										{!! $about->kontak !!}
										<form action="">
											<input type="text" id="full-name" name="name" placeholder="Name">
											<input type="email" id="email" name="email" placeholder="Email">
											<input type="text" id="subject" name="subject" placeholder="Subject">
											<textarea name="message" id="message" cols="30" rows="4" placeholder="Message"></textarea>
											<input type="submit" class="btn" value="submit">
										</form>
									</div>
								</div>
								<div class="col-md-4 col-xs-12 col-sm-4">
									<div class="office-location">
										<div class="contact-us head-office">
											<h4>Alamat</h4>
											<address>
												{{ $sites->alamat }}
											</address>
											<address>
											 	<span>Email :</span> 
												<a href="mailto:{{ $sites->email }}">{{ $sites->email }}</a> 
											</address>
											<address>
											 	<span>Panggilan :</span> 
												Telepon : {{ $sites->no_telp }} <br>
												Whatsapp : {{ $sites->no_wa }} <br>
											</address>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

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