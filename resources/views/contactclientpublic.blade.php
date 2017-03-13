<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<title>Dr.Reference | Dr.Raqueline Bruno de Sousa</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Favicon -->
	<link rel="shortcut icon" href="{{ asset('favicon.ico')}}">

	<!-- Web Fonts -->
	<link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>

	<!-- CSS Global Compulsory -->
	<link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">

	<!-- CSS Header and Footer -->
	<link rel="stylesheet" href="{{ asset('assets/css/headers/header-default.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/css/footers/footer-v1.css')}}">

	<!-- CSS Implementing Plugins -->
	<link rel="stylesheet" href="{{ asset('assets/plugins/animate.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/plugins/line-icons/line-icons.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/plugins/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/plugins/owl-carousel/owl-carousel/owl.carousel.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/plugins/sky-forms-pro/skyforms/css/sky-forms.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css')}}">
	<!--[if lt IE 9]><link rel="stylesheet" href="{{ asset('assets/plugins/sky-forms-pro/skyforms/css/sky-forms-ie8.css')}}"><![endif]-->

	<!-- CSS Page Style -->
	<link rel="stylesheet" href="{{ asset('assets/css/pages/page_contact.css')}}">

	<!-- CSS Theme -->
	<link rel="stylesheet" href="{{ asset('assets/css/theme-colors/default.css')}}" id="style_color">
	<link rel="stylesheet" href="{{ asset('assets/css/theme-skins/dark.css')}}">

	<!-- CSS Customization -->
	<link rel="stylesheet" href="{{ asset('assets/css/custom.css')}}">
</head>

<body>
	<div class="wrapper">
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
					<ul class="loginbar pull-left">
						<li class="hoverSelector">
							<i class="fa fa-calendar-check-o"></i>
							<a href="#">Monday-Friday 8am-9pm · Saturday 8am-4pm <i class="fa fa-check"></i></a>
						</li>	
                                                <li class="topbar-devider"></li>
                                                <li>
                                                    <i class="fa fa-fax"></i>
                                                    <a href="page_faq.html">(514)550-7500 / (514)550-7500</a>
                                                </li>
                                                
					</ul>
					<ul class="loginbar pull-right">
						<li class="hoverSelector">
							<i class="fa fa-globe"></i>
							<a href="#">En <i class="fa fa-check"></i></a>
                                                        <a href="#">Fr</a>
                                                        <a href="#">Pt</a>
                                                        <a href="#">Sp</a>
						</li>
						<li class="topbar-devider"></li>
						
						<li>
                                                    <i class="fa fa-recycle"></i>
                                                    <a href="page_faq.html">Green</a>
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
						<li class="active">
							<a href="{{ url('kako') }}">
								Home
							</a>							
						</li>
						<!-- End Home -->
						
						<!-- End Patiente Zone -->
                                                
                                                <!-- Patiente Zone -->
						<li class="dropdown">
							<a href="{{ url('kako/patientezone') }}" class="dropdown-toggle" data-toggle="dropdown">
								Patiente Zone
							</a>
							<ul class="dropdown-menu">								
                                                            <li><a href="portfolio_hover_colors.html">Potst OP Instructions</a></li>
                                                            <li><a href="{{ url('kako/articles') }}">Articles</a></li>
                                                            <li><a href="{{ url('kako/videos') }}">Videos</a></li>
							</ul>
						</li>
						<!-- End Patiente Zone -->
                                                
                                                
                                                
                                                <!-- SERVICES -->
						<li>
							<a href="{{ url('kako/services') }}" >
								Services
							</a>
						</li>
						<!-- End SERVICES -->
						
                                                
                                                
                                                
                                                <!-- Latest News -->
						<li>
							<a href="{{ url('kako/latestnews') }}" >
								Latest News
							</a>
						</li>
						<!-- End Latest News -->
                                                
                                                <!-- Contact -->
						<li>
							<a href="{{ url('kako/contact') }}" >
								Contact
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
			</div><!--/navbar-collapse-->
		</div>
		<!--=== End Header ===-->

		<!--=== Content Part ===-->
		<div class="container content">
			<div class="row margin-bottom-30">
				<div class="col-md-9 mb-margin-bottom-30">
					<!-- Google Map -->
					<div id="map" class="map map-box map-box-space margin-bottom-40"></div>
					<!-- End Google Map -->

					<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas feugiat. Et harum quidem rerum facilis est et expedita distinctio lorem ipsum dolor sit amet, consectetur adipiscing elit landitiis.</p><br />

					<form action="assets/php/sky-forms-pro/demo-contacts-process.php" method="post" id="sky-form3" class="sky-form contact-style">
						<fieldset class="no-padding">
							<label>Name <span class="color-red">*</span></label>
							<div class="row sky-space-20">
								<div class="col-md-7 col-md-offset-0">
									<div>
										<input type="text" name="name" id="name" class="form-control">
									</div>
								</div>
							</div>

							<label>Email <span class="color-red">*</span></label>
							<div class="row sky-space-20">
								<div class="col-md-7 col-md-offset-0">
									<div>
										<input type="text" name="email" id="email" class="form-control">
									</div>
								</div>
							</div>

							<label>Message <span class="color-red">*</span></label>
							<div class="row sky-space-20">
								<div class="col-md-11 col-md-offset-0">
									<div>
										<textarea rows="8" name="message" id="message" class="form-control"></textarea>
									</div>
								</div>
							</div>

							<p><button type="submit" class="btn-u">Send Message</button></p>
						</fieldset>

						<div class="message">
							<i class="rounded-x fa fa-check"></i>
							<p>Your message was successfully sent!</p>
						</div>
					</form>
				</div><!--/col-md-9-->

				<div class="col-md-3">
					<!-- Contacts -->
					<div class="headline"><h2>Contacts</h2></div>
					<ul class="list-unstyled who margin-bottom-30">
						<li><a href="#"><i class="fa fa-home"></i>5B Streat, City 50987 New Town US</a></li>
						<li><a href="#"><i class="fa fa-envelope"></i>info@example.com</a></li>
						<li><a href="#"><i class="fa fa-phone"></i>1(222) 5x86 x97x</a></li>
						<li><a href="#"><i class="fa fa-globe"></i>http://www.example.com</a></li>
					</ul>

					<!-- Business Hours -->
					<div class="headline"><h2>Business Hours</h2></div>
					<ul class="list-unstyled margin-bottom-30">
						<li><strong>Monday-Friday:</strong> 10am to 8pm</li>
						<li><strong>Saturday:</strong> 11am to 3pm</li>
						<li><strong>Sunday:</strong> Closed</li>
					</ul>

					<!-- Why we are? -->
					<div class="headline"><h2>Why we are?</h2></div>
					<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum.</p>
					<ul class="list-unstyled">
						<li><i class="fa fa-check color-green"></i> Odio dignissimos ducimus</li>
						<li><i class="fa fa-check color-green"></i> Blanditiis praesentium volup</li>
						<li><i class="fa fa-check color-green"></i> Eos et accusamus</li>
					</ul>
				</div><!--/col-md-3-->
			</div><!--/row-->

			
		</div><!--/container-->
		<!--=== End Content Part ===-->
		<!--=== Content Part ===-->
		<div class="container content">
			<div class="row margin-bottom-30">
				<div class="col-md-9 mb-margin-bottom-30">
					<!-- Google Map -->
					<div id="map2" class="map map-box map-box-space margin-bottom-40"></div>
					<!-- End Google Map -->

					<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas feugiat. Et harum quidem rerum facilis est et expedita distinctio lorem ipsum dolor sit amet, consectetur adipiscing elit landitiis.</p><br />

					<form action="assets/php/sky-forms-pro/demo-contacts-process.php" method="post" id="sky-form3" class="sky-form contact-style">
						<fieldset class="no-padding">
							<label>Name <span class="color-red">*</span></label>
							<div class="row sky-space-20">
								<div class="col-md-7 col-md-offset-0">
									<div>
										<input type="text" name="name" id="name" class="form-control">
									</div>
								</div>
							</div>

							<label>Email <span class="color-red">*</span></label>
							<div class="row sky-space-20">
								<div class="col-md-7 col-md-offset-0">
									<div>
										<input type="text" name="email" id="email" class="form-control">
									</div>
								</div>
							</div>

							<label>Message <span class="color-red">*</span></label>
							<div class="row sky-space-20">
								<div class="col-md-11 col-md-offset-0">
									<div>
										<textarea rows="8" name="message" id="message" class="form-control"></textarea>
									</div>
								</div>
							</div>

							<p><button type="submit" class="btn-u">Send Message</button></p>
						</fieldset>

						<div class="message">
							<i class="rounded-x fa fa-check"></i>
							<p>Your message was successfully sent!</p>
						</div>
					</form>
				</div><!--/col-md-9-->

				<div class="col-md-3">
					<!-- Contacts -->
					<div class="headline"><h2>Contacts</h2></div>
					<ul class="list-unstyled who margin-bottom-30">
						<li><a href="#"><i class="fa fa-home"></i>5B Streat, City 50987 New Town US</a></li>
						<li><a href="#"><i class="fa fa-envelope"></i>info@example.com</a></li>
						<li><a href="#"><i class="fa fa-phone"></i>1(222) 5x86 x97x</a></li>
						<li><a href="#"><i class="fa fa-globe"></i>http://www.example.com</a></li>
					</ul>

					<!-- Business Hours -->
					<div class="headline"><h2>Business Hours</h2></div>
					<ul class="list-unstyled margin-bottom-30">
						<li><strong>Monday-Friday:</strong> 10am to 8pm</li>
						<li><strong>Saturday:</strong> 11am to 3pm</li>
						<li><strong>Sunday:</strong> Closed</li>
					</ul>

					<!-- Why we are? -->
					<div class="headline"><h2>Why we are?</h2></div>
					<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum.</p>
					<ul class="list-unstyled">
						<li><i class="fa fa-check color-green"></i> Odio dignissimos ducimus</li>
						<li><i class="fa fa-check color-green"></i> Blanditiis praesentium volup</li>
						<li><i class="fa fa-check color-green"></i> Eos et accusamus</li>
					</ul>
				</div><!--/col-md-3-->
			</div><!--/row-->

			
		</div><!--/container-->
		<!--=== End Content Part ===-->

		<!--=== Footer Version 1 ===-->
		<div class="footer-v1">
			<div class="footer">
				<div class="container">
					<div class="row">
						<!-- About -->
						<div class="col-md-3 md-margin-bottom-40">
							<a href="index.html"><img id="logo-footer" class="footer-logo" src="assets/img/logo2-default.png" alt=""></a>
							<p>About Unify dolor sit amet, consectetur adipiscing elit. Maecenas eget nisl id libero tincidunt sodales.</p>
							<p>Duis eleifend fermentum ante ut aliquam. Cras mi risus, dignissim sed adipiscing ut, placerat non arcu.</p>
						</div><!--/col-md-3-->
						<!-- End About -->

						<!-- Latest -->
						<div class="col-md-3 md-margin-bottom-40">
							<div class="posts">
								<div class="headline"><h2>Latest Posts</h2></div>
								<ul class="list-unstyled latest-list">
									<li>
										<a href="#">Incredible content</a>
										<small>May 8, 2014</small>
									</li>
									<li>
										<a href="#">Best shoots</a>
										<small>June 23, 2014</small>
									</li>
									<li>
										<a href="#">New Terms and Conditions</a>
										<small>September 15, 2014</small>
									</li>
								</ul>
							</div>
						</div><!--/col-md-3-->
						<!-- End Latest -->

						<!-- Link List -->
						<div class="col-md-3 md-margin-bottom-40">
							<div class="headline"><h2>Useful Links</h2></div>
							<ul class="list-unstyled link-list">
								<li><a href="#">About us</a><i class="fa fa-angle-right"></i></li>
								<li><a href="#">Portfolio</a><i class="fa fa-angle-right"></i></li>
								<li><a href="#">Latest jobs</a><i class="fa fa-angle-right"></i></li>
								<li><a href="#">Community</a><i class="fa fa-angle-right"></i></li>
								<li><a href="#">Contact us</a><i class="fa fa-angle-right"></i></li>
							</ul>
						</div><!--/col-md-3-->
						<!-- End Link List -->

						<!-- Address -->
						<div class="col-md-3 map-img md-margin-bottom-40">
							<div class="headline"><h2>Contact Us</h2></div>
							<address class="md-margin-bottom-40">
								25, Lorem Lis Street, Orange <br />
								California, US <br />
								Phone: 800 123 3456 <br />
								Fax: 800 123 3456 <br />
								Email: <a href="mailto:info@anybiz.com" class="">info@anybiz.com</a>
							</address>
						</div><!--/col-md-3-->
						<!-- End Address -->
					</div>
				</div>
			</div><!--/footer-->

			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<p>
								2015 &copy; All Rights Reserved.
								<a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a>
							</p>
						</div>

						<!-- Social Links -->
						<div class="col-md-6">
							<ul class="footer-socials list-inline">
								<li>
									<a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook">
										<i class="fa fa-facebook"></i>
									</a>
								</li>
								<li>
									<a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Skype">
										<i class="fa fa-skype"></i>
									</a>
								</li>
								<li>
									<a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Google Plus">
										<i class="fa fa-google-plus"></i>
									</a>
								</li>
								<li>
									<a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Linkedin">
										<i class="fa fa-linkedin"></i>
									</a>
								</li>
								<li>
									<a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Pinterest">
										<i class="fa fa-pinterest"></i>
									</a>
								</li>
								<li>
									<a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter">
										<i class="fa fa-twitter"></i>
									</a>
								</li>
								<li>
									<a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Dribbble">
										<i class="fa fa-dribbble"></i>
									</a>
								</li>
							</ul>
						</div>
						<!-- End Social Links -->
					</div>
				</div>
			</div><!--/copyright-->
		</div>
		<!--=== End Footer Version 1 ===-->
	</div><!--/wrapper-->

	

	<!-- JS Global Compulsory -->
	<script src="{{ asset('assets/plugins/jquery/jquery.min.js')}}"></script>
	<script src="{{ asset('assets/plugins/jquery/jquery-migrate.min.js')}}"></script>
	<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
	<!-- JS Implementing Plugins -->
	<script src="{{ asset('assets/plugins/back-to-top.js')}}"></script>
	<script src="{{ asset('assets/plugins/smoothScroll.js')}}"></script>
	<script src="{{ asset('assets/plugins/owl-carousel/owl-carousel/owl.carousel.js')}}"></script>
	<script src="{{ asset('assets/plugins/sky-forms-pro/skyforms/js/jquery.form.min.js')}}"></script>
	<script src="{{ asset('assets/plugins/sky-forms-pro/skyforms/js/jquery.validate.min.js')}}"></script>
	<script src="//maps.googleapis.com/maps/api/js?key=AIzaSyCDSb3wORiw36c9kGhpSVqjkTYtJpVp4l4&callback=initMap" async defer></script>
	<!-- JS Customization -->
	<script src="{{ asset('assets/js/custom.js')}}"></script>
	<!-- JS Page Level -->
	<script src="{{ asset('assets/js/app.js')}}"></script>
	<script src="{{ asset('assets/js/forms/login.js')}}"></script>
	<script src="{{ asset('assets/js/forms/contact.js')}}"></script>
	<script src="{{ asset('assets/js/plugins/google-map.js')}}"></script>
	<script src="{{ asset('assets/js/plugins/owl-carousel.js')}}"></script>
	<script src="{{ asset('assets/js/plugins/style-switcher.js')}}"></script>
	<script>
		jQuery(document).ready(function() {
			App.init();
			LoginForm.initLoginForm();
			ContactForm.initContactForm();
			OwlCarousel.initOwlCarousel();
			StyleSwitcher.initStyleSwitcher();
		});

		// Google Map
                var map;
                var myLatLng = "";
                var marker = "";
                function initMap() {
                  myLatLng = {lat: 45.547469, lng: -73.641937};  
                  map = new google.maps.Map(document.getElementById('map'), {
                    center: myLatLng,
                    zoom: 15
                  });
                  marker = new google.maps.Marker({
                    position: myLatLng,
                    map: map,
                    title: 'Hello World!'
                  });
                  marker.setMap(map);
                  myLatLng = {lat: 45.521073, lng: -73.594364};
                  map = new google.maps.Map(document.getElementById('map2'), {
                    center: myLatLng,
                    zoom: 15
                  });
                  marker = new google.maps.Marker({
                    position: myLatLng,
                    map: map,
                    title: 'Hello World!'
                  });
                  marker.setMap(map);
                }
                
                

	</script>
	<!--[if lt IE 9]>
	<script src="{{ asset('assets/plugins/respond.js')}}"></script>
	<script src="{{ asset('assets/plugins/html5shiv.js')}}"></script>
	<script src="{{ asset('assets/plugins/placeholder-IE-fixes.js')}}"></script>
	<script src="{{ asset('assets/plugins/sky-forms-pro/skyforms/js/sky-forms-ie8.js')}}"></script>
	<![endif]-->
	<!--[if lt IE 10]>
	<script src="{{ asset('assets/plugins/sky-forms-pro/skyforms/js/jquery.placeholder.min.js')}}"></script>
	<![endif]-->
</body>
</html>
