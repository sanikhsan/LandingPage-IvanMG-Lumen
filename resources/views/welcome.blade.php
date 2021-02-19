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

					<!-- .Content Carousel-->
						<div class="container-fluid">
							<!-- Banner-section-->
								@include('content.carousel')
							<!-- End Of Banner-section-->
						</div>
					<!-- .End of Content Carousel-->

					<!-- .Content About-->
						<div class="container">
							<div class="row">
								<div class="col-md-12">
									<!-- Welcome-section-->
										@include('content.about')
									<!-- End Of Welcome-section-->
								</div>
								<!-- .col-md-12-->
							</div>
							<!-- .row-->
						</div>
					<!-- End of Content About-->


					<!--Service-->
						<div class="container">
							<div class="row">
								<!-- Service-section-->
									@include('content.service')
								<!-- End of Service-section-->						
							</div>
							<!-- .row-->
						</div>
					<!--End of Service-->

					<!-- Content Service-->
						<div class="container">
							<!-- Service-activity-->
								@include('content.services-act')
							<!-- End of Service-activity-->
						</div>
					<!-- End of Content Service-->

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
			<!-- offcanvas-pusher -->
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