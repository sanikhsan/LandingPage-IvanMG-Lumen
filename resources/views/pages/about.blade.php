	<!DOCTYPE html>
	<!--[if IE 7 ]>
	<html lang="en" class="no-js ie7"> <![endif]-->
	<!--[if IE 8 ]>
	<html lang="en" class="no-js ie8"> <![endif]-->
	<!--[if IE 9 ]>
	<html lang="en" class="no-js ie9"> <![endif]-->
	<!--[if (gt IE 9)|!(IE)]><!-->
	<html lang="en" class="no-js"> <!--<![endif]-->
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
										<h2>Tentang Kami</h2>
										<ul class="breadcrumb">
										   <li><a href="{{ route('landing') }}">Home</a></li>
										   <li class="active">Tentang Kami</li>
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
								<div class="history">
									<h3>History &amp; Resources</h3>
									<div class="history-details">
										<img src="asset_landing/img/about.jpg" alt="">
										{!! $about->deskripsi !!}
									</div>
								</div>
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