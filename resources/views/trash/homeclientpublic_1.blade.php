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
	<link rel="stylesheet" href="{{ asset('assets/plugins/fancybox/source/jquery.fancybox.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/plugins/owl-carousel/owl-carousel/owl.carousel.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/plugins/revolution-slider/rs-plugin/css/settings.css')}}" type="text/css" media="screen">
	<!--[if lt IE 9]><link rel="stylesheet" href="{{ asset('assets/plugins/revolution-slider/rs-plugin/css/settings-ie8.css" type="text/css')}}" media="screen"><![endif]-->

	<!-- CSS Theme -->
	<link rel="stylesheet" href="{{ asset('assets/css/theme-colors/default.css" id="style_color')}}">
	<link rel="stylesheet" href="{{ asset('assets/css/theme-skins/dark.css')}}">

	<!-- CSS Customization -->
	<link rel="stylesheet" href="{{ asset('assets/css/custom.css')}}">
</head>

<body>
	<div class="wrapper page-option-v1">
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
							<i class="fa fa-clock-o"></i>
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

		<!--=== Slider ===-->
		<div class="tp-banner-container">
			<div class="tp-banner">
				<ul>
					<!-- SLIDE -->
					<li class="revolution-mch-1" data-transition="fade" data-slotamount="5" data-masterspeed="1000"		data-title="Slide 1">
						<!-- MAIN IMAGE -->
						<img src="assets/img/sliders/4.jpg"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">

						<div class="tp-caption revolution-ch1 sft start"
						data-x="center"
						data-hoffset="0"
						data-y="100"
						data-speed="1500"
						data-start="500"
						data-easing="Back.easeInOut"
						data-endeasing="Power1.easeIn"
						data-endspeed="300">
						Introducing Unify Template
						</div>

						<!-- LAYER -->
						<div class="tp-caption revolution-ch2 sft"
						data-x="center"
						data-hoffset="0"
						data-y="190"
						data-speed="1400"
						data-start="2000"
						data-easing="Power4.easeOut"
						data-endspeed="300"
						data-endeasing="Power1.easeIn"
						data-captionhidden="off"
						style="z-index: 6">
						FreeCST provides students with Free Computer Security Training.<br/>
						We will teach you at an entry level position in Computer Security.
						</div>

						<!-- LAYER -->
						<div class="tp-caption sft"
						data-x="center"
						data-hoffset="0"
						data-y="310"
						data-speed="1600"
						data-start="2800"
						data-easing="Power4.easeOut"
						data-endspeed="300"
						data-endeasing="Power1.easeIn"
						data-captionhidden="off"
						style="z-index: 6">
						<a href="#" class="btn-u btn-brd btn-brd-hover btn-u-light">Learn More</a>
						<a href="#" class="btn-u">Our Work</a>
						</div>
					</li>
					<!-- END SLIDE -->

					<!-- SLIDE -->
					<li class="revolution-mch-1" data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="Slide 2">
						<!-- MAIN IMAGE -->
						<img src="assets/img/sliders/2.jpg"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">

						<div class="tp-caption revolution-ch1 sft start"
						data-x="center"
						data-hoffset="0"
						data-y="100"
						data-speed="1500"
						data-start="500"
						data-easing="Back.easeInOut"
						data-endeasing="Power1.easeIn"
						data-endspeed="300">
						Includes 300+ Template Pages
						</div>

						<!-- LAYER -->
						<div class="tp-caption revolution-ch2 sft"
						data-x="center"
						data-hoffset="0"
						data-y="190"
						data-speed="1400"
						data-start="2000"
						data-easing="Power4.easeOut"
						data-endspeed="300"
						data-endeasing="Power1.easeIn"
						data-captionhidden="off"
						style="z-index: 6">
						We are creative technology company providing <br/>
						key digital services on web and mobile.
						</div>

						<!-- LAYER -->
						<div class="tp-caption sft"
						data-x="center"
						data-hoffset="0"
						data-y="310"
						data-speed="1600"
						data-start="2800"
						data-easing="Power4.easeOut"
						data-endspeed="300"
						data-endeasing="Power1.easeIn"
						data-captionhidden="off"
						style="z-index: 6">
						<a href="#" class="btn-u btn-brd btn-brd-hover btn-u-light">Learn More</a>
						<a href="#" class="btn-u btn-brd btn-brd-hover btn-u-light">Our Work</a>
						</div>
					</li>
					<!-- END SLIDE -->

					<!-- SLIDE -->
					<li class="revolution-mch-1" data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="Slide 3">
						<!-- MAIN IMAGE -->
						<img src="assets/img/sliders/3.jpg"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">

						<div class="tp-caption revolution-ch1 sft start"
						data-x="center"
						data-hoffset="0"
						data-y="100"
						data-speed="1500"
						data-start="500"
						data-easing="Back.easeInOut"
						data-endeasing="Power1.easeIn"
						data-endspeed="300">
						Over 25000+ Satisfied Users
						</div>

						<!-- LAYER -->
						<div class="tp-caption revolution-ch2 sft"
						data-x="center"
						data-hoffset="0"
						data-y="190"
						data-speed="1400"
						data-start="2000"
						data-easing="Power4.easeOut"
						data-endspeed="300"
						data-endeasing="Power1.easeIn"
						data-captionhidden="off"
						style="z-index: 6">
						We are creative technology company providing <br/>
						key digital services on web and mobile.
						</div>

						<!-- LAYER -->
						<div class="tp-caption sft"
						data-x="center"
						data-hoffset="0"
						data-y="310"
						data-speed="1600"
						data-start="2800"
						data-easing="Power4.easeOut"
						data-endspeed="300"
						data-endeasing="Power1.easeIn"
						data-captionhidden="off"
						style="z-index: 6">
						<a href="#" class="btn-u btn-brd btn-brd-hover btn-u-light">Learn More</a>
						<a href="#" class="btn-u btn-brd btn-brd-hover btn-u-light">Our Work</a>
						</div>
					</li>
					<!-- END SLIDE -->
				</ul>
				<div class="tp-bannertimer tp-bottom"></div>
			</div>
		</div>
		<!--=== End Slider ===-->

		<!--=== Service Block ===-->
		<div class="container content-sm">
			<div class="row">
				<div class="col-md-4 content-boxes-v6 md-margin-bottom-50">
					<i class="rounded-x icon-link"></i>
					<h1 class="title-v3-md text-uppercase margin-bottom-10">Fully responsive</h1>
					<p>At vero eos et accusato odio dignissimos ducimus qui blanditiis praesentium voluptatum.</p>
				</div>
				<div class="col-md-4 content-boxes-v6 md-margin-bottom-50">
					<i class="rounded-x icon-paper-plane"></i>
					<h2 class="title-v3-md text-uppercase margin-bottom-10">Modern design</h2>
					<p>At vero eos et accusato odio dignissimos ducimus qui blanditiis praesentium voluptatum.</p>
				</div>
				<div class="col-md-4 content-boxes-v6">
					<i class="rounded-x icon-refresh"></i>
					<h2 class="title-v3-md text-uppercase margin-bottom-10">Powerful slides</h2>
					<p>At vero eos et accusato odio dignissimos ducimus qui blanditiis praesentium voluptatum.</p>
				</div>
			</div><!--/row-->
		</div><!--/container-->
		<!--=== End Service Block ===-->

		<!--=== Intro Block ===-->
		<div class="bg-color-light">
			<div class="container content-sm">
				<div class="headline-center-v2 headline-center-v2-dark margin-bottom-60">
					<h2>About Us</h2>
					<span class="bordered-icon"><i class="fa fa-th-large"></i></span>
					<p>Phasellus vitae ipsum ex. Etiam eu vestibulum ante. <br>
						Lorem ipsum <strong>dolor</strong> sit amet, consectetur adipiscing elit. Morbi libero libero, imperdiet fringilla </p>
				</div><!--/Headline Center v2-->

				<div class="row">
					<div class="col-md-6 md-margin-bottom-50">
						<img class="img-responsive" src="assets/img/mockup/4.png" alt="">
					</div>
					<div class="col-md-6">
						<p>Phasellus feugiat elit quam, nec tincidunt leo imperdiet nec. Aliquam et orci orci. In finibus lorem eget sapien mollis finibus. Cras ultrices mollis justo.</p><br>
						<div class="row">
							<ul class="col-xs-6 list-unstyled lists-v1">
								<li><i class="fa fa-angle-right"></i>Curabitur porttitor sapien</li>
								<li><i class="fa fa-angle-right"></i>Donec vitae quam neque</li>
								<li><i class="fa fa-angle-right"></i>Cum sociis natoque</li>
								<li><i class="fa fa-angle-right"></i>Aliquam et orci orci</li>
							</ul>
							<ul class="col-xs-6 list-unstyled lists-v1">
								<li><i class="fa fa-angle-right"></i>Curabitur porttitor sapien</li>
								<li><i class="fa fa-angle-right"></i>Donec vitae quam neque</li>
								<li><i class="fa fa-angle-right"></i>Cum sociis natoque</li>
								<li><i class="fa fa-angle-right"></i>Aliquam et orci orci</li>
							</ul>
						</div>
					</div>
				</div><!--/end row-->
			</div>
		</div>
		<!--=== End Intro Block ===-->

		<!--=== Recent Posts ===-->
		<div class="container content-sm">
			<div class="headline-center-v2 headline-center-v2-dark margin-bottom-60">
				<h2>Recent Posts</h2>
				<span class="bordered-icon"><i class="fa fa-th-large"></i></span>
				<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et qua s molestias excepturi vehicula sem ut volutpat. Ut non libero magna fusce co.</p>
			</div><!--/Headline Center V2-->

			<div class="row">
				<div class="col-sm-4">
					<div class="thumbnails-v1">
						<div class="thumbnail-img">
							<img class="img-responsive" src="assets/img/masonry/blog2.jpg" alt="">
						</div>
						<div class="caption">
							<h3><a href="#">Business Opportunities</a></h3>
							<p>Donec id elit non mi porta gravida at eget metsit us. Fusce dapibus, justo sit amet risus etiam portapsum generators on the Internet tend to repeat predefined.</p>
							<p><a class="read-more" href="#">See More</a></p>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="thumbnails-v1">
						<div class="thumbnail-img">
							<img class="img-responsive" src="assets/img/masonry/blog3.jpg" alt="">
						</div>
						<div class="caption">
							<h3><a href="#">Engage Customers With Unify</a></h3>
							<p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text, all the  ipsum generators.</p>
							<p><a class="read-more" href="#">See More</a></p>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="thumbnails-v1">
						<div class="thumbnail-img">
							<img class="img-responsive" src="assets/img/masonry/blog4.jpg" alt="">
						</div>
						<div class="caption">
							<h3><a href="#">Empower People, HCM</a></h3>
							<p>Donec id elit non mi porta gravida at eget metsit us. Fusce dapibus, justo sit amet risus etiam portapsum generators on the Internet tend to repeat predefined.</p>
							<p><a class="read-more" href="#">See More</a></p>
						</div>
					</div>
				</div>
			</div>
		</div><!--/container-->
		<!--=== End Recent Posts ===-->

		<!--=== Service Info ===-->
		<div class="service-info margin-bottom-60">
			<div class="container">
				<div class="headline-center-v2 headline-center-v2-dark margin-bottom-60">
					<h2>Features</h2>
					<span class="bordered-icon"><i class="fa fa-th-large"></i></span>
					<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et qua s molestias excepturi vehicula sem ut volutpat. Ut non libero magna fusce co.</p>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="margin-bottom-30">
							<i class="service-info-icon rounded-x icon-wrench"></i>
							<div class="info-description">
								<h3 class="title-v3-md text-uppercase">HTML5 + CSS3</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id nisi augue. Maecenas eu risus ex. Pellentesque laoreet eros at erat lacinia tempus.</p>
							</div>
						</div>
						<div class="margin-bottom-30">
							<i class="service-info-icon rounded-x icon-power"></i>
							<div class="info-description">
								<h3 class="title-v3-md text-uppercase">Launch Ready</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id nisi augue. Maecenas eu risus ex. Pellentesque laoreet eros at erat lacinia tempus.</p>
							</div>
						</div>
						<div class="md-margin-bottom-30">
							<i class="service-info-icon rounded-x icon-bell"></i>
							<div class="info-description">
								<h3 class="title-v3-md text-uppercase">Fully Responsive</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id nisi augue. Maecenas eu risus ex. Pellentesque laoreet eros at erat lacinia tempus.</p>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="responsive-video">
							<iframe src="//player.vimeo.com/video/78451097?title=0&amp;byline=0&amp;portrait=0&amp;badge=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
						</div>
					</div>
				</div><!--/row-->
			</div><!--/container-->
		</div>
		<!--=== End Service Info ===-->

		<!--=== Portfolio Box c2 ===-->
		<div class="container">
			<div class="headline-center-v2 headline-center-v2-dark margin-bottom-60">
				<h2>Portfolio</h2>
				<span class="bordered-icon"><i class="fa fa-th-large"></i></span>
				<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et qua s molestias excepturi vehicula sem ut volutpat. Ut non libero magna fusce co.</p>
			</div>
		</div><!--/container-->

		<ul class="list-unstyled row portfolio-box-v2 no-margin-bottom">
			<li class="col-sm-3">
				<a class="fancybox" data-rel="gallery" title="Project One" href="assets/img/main/img12.jpg">
					<img class="img-responsive" src="assets/img/main/img12.jpg" alt="">
					<span class="portfolio-box-v2-in">
						<i class="rounded-x icon-magnifier-add"></i>
					</span>
				</a>
			</li>
			<li class="col-sm-3">
				<a class="fancybox" data-rel="gallery" title="Project Two" href="assets/img/main/img6.jpg">
					<img class="img-responsive" src="assets/img/main/img6.jpg" alt="">
					<span class="portfolio-box-v2-in">
						<i class="rounded-x icon-magnifier-add"></i>
					</span>
				</a>
			</li>
			<li class="col-sm-3">
				<a class="fancybox" data-rel="gallery" title="Project Three" href="assets/img/main/img17.jpg">
					<img class="img-responsive" src="assets/img/main/img17.jpg" alt="">
					<span class="portfolio-box-v2-in">
						<i class="rounded-x icon-magnifier-add"></i>
					</span>
				</a>
			</li>
			<li class="col-sm-3">
				<a class="fancybox" data-rel="gallery" title="Project Four" href="assets/img/main/img25.jpg">
					<img class="img-responsive" src="assets/img/main/img25.jpg" alt="">
					<span class="portfolio-box-v2-in">
						<i class="rounded-x icon-magnifier-add"></i>
					</span>
				</a>
			</li>
		</ul>
		<!--=== End Portfolio Box c2 ===-->

		<!--=== Call To Action ===-->
		<div class="call-action-v1 bg-color-light margin-bottom-60">
			<div class="container">
				<div class="call-action-v1-box">
					<div class="call-action-v1-in">
						<p>Unify creative technology company providing key digital services and focused on helping our clients to build a successful business on web and mobile.</p>
					</div>
					<div class="call-action-v1-in inner-btn page-scroll">
						<a href="#" class="btn-u btn-brd btn-brd-hover btn-u-dark btn-u-block">View Our Portfolio</a>
					</div>
				</div>
			</div>
		</div>
		<!--=== End Call To Action ===-->

		<!--=== Service Block ===-->
		<div class="container">
			<div class="headline-center-v2 headline-center-v2-dark margin-bottom-60">
				<h2>Our Services</h2>
				<span class="bordered-icon"><i class="fa fa-th-large"></i></span>
				<p>Phasellus vitae ipsum ex. Etiam eu vestibulum ante. <br>
					Lorem ipsum <strong>dolor</strong> sit amet, consectetur adipiscing elit. Morbi libero libero, imperdiet fringilla </p>
			</div><!--/Headline Center v2-->

			<div class="row margin-bottom-60">
				<div class="col-sm-4">
					<div class="service-block-v1 md-margin-bottom-50">
						<i class="rounded-x icon-energy"></i>
						<h3 class="title-v3-bg text-uppercase">Retina ready</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse non tincidunt neque.</p>
						<a class="text-uppercase" href="#">Read More</a>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="service-block-v1 md-margin-bottom-50">
						<i class="rounded-x icon-badge"></i>
						<h3 class="title-v3-bg text-uppercase">User friendly</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse non tincidunt neque.</p>
						<a class="text-uppercase" href="#">Read More</a>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="service-block-v1 md-margin-bottom-50">
						<i class="rounded-x icon-diamond"></i>
						<h3 class="title-v3-bg text-uppercase">Powerful Plugins</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse non tincidunt neque.</p>
						<a class="text-uppercase" href="#">Read More</a>
					</div>
				</div>
			</div><!--/row-->

			<div class="row margin-bottom-60">
				<div class="col-sm-4">
					<div class="service-block-v1 md-margin-bottom-50">
						<i class="rounded-x icon-fire"></i>
						<h3 class="title-v3-bg text-uppercase">Stunning Features</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse non tincidunt neque.</p>
						<a class="text-uppercase" href="#">Read More</a>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="service-block-v1 md-margin-bottom-50">
						<i class="rounded-x icon-trophy"></i>
						<h3 class="title-v3-bg text-uppercase">Most Wanted</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse non tincidunt neque.</p>
						<a class="text-uppercase" href="#">Read More</a>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="service-block-v1 md-margin-bottom-50">
						<i class="rounded-x icon-chemistry"></i>
						<h3 class="title-v3-bg text-uppercase">Ready to use</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse non tincidunt neque.</p>
						<a class="text-uppercase" href="#">Read More</a>
					</div>
				</div>
			</div><!--/row-->
		</div><!--/container-->
		<!--=== End Service Block ===-->

		<!--=== Testimonials Section ===-->
		<div class="bg-color-light margin-bottom-60">
			<div class="container content-md">
				<div class="headline-center-v2 headline-center-v2-dark margin-bottom-60">
					<h2>Referencia</h2>
					<span class="bordered-icon"><i class="fa fa-th-large"></i></span>
					<p>Phasellus vitae ipsum ex. Etiam eu vestibulum ante. <br>
						Lorem ipsum <strong>dolor</strong> sit amet, consectetur adipiscing elit. Morbi libero libero, imperdiet fringilla </p>
				</div><!--/Headline Center v2-->

				<div class="row">	
					<div class="col-sm-12">
						<div class="testimonials-v4">
							<div class="testimonials-v4-in">
								<p>We see a lot of feature-driven product design in which the cost of features is not properly accounted. Features can have a negative value to customers because they make the products more difficult to understand and use. We are finding that people like products that just work.</p>
							</div>
							<img class="rounded-x" src="assets/img/testimonials/img4.jpg" alt="thumb">
							<span class="testimonials-author">
								John Davenport<br>
								<em>UX/UI Designer, <a href="#">Apple Inc.</a></em>
							</span>
						</div>
					</div>
				</div>
			</div><!--/end container-->
		</div>
		<!--=== End Section ===-->

		<!--=== Owl Carousel v6 ===-->
		<div class="container">
			<div class="headline-center-v2 headline-center-v2-dark">
				<h2>Our Clients</h2>
				<span class="bordered-icon"><i class="fa fa-th-large"></i></span>
			</div><!--/Headline Center v2-->

			<ul class="list-inline owl-carousel-v6 owl-slider-v6 margin-bottom-50">
				<li class="owl-carousel-item">
					<img src="assets/img/clients3/1.png" alt="">
				</li>
				<li class="owl-carousel-item">
					<img src="assets/img/clients3/2.png" alt="">
				</li>
				<li class="owl-carousel-item">
					<img src="assets/img/clients3/3.png" alt="">
				</li>
				<li class="owl-carousel-item">
					<img src="assets/img/clients3/4.png" alt="">
				</li>
				<li class="owl-carousel-item">
					<img src="assets/img/clients3/5.png" alt="">
				</li>
				<li class="owl-carousel-item">
					<img src="assets/img/clients3/6.png" alt="">
				</li>
				<li class="owl-carousel-item">
					<img src="assets/img/clients3/6.png" alt="">
				</li>
				<li class="owl-carousel-item">
					<img src="assets/img/clients3/5.png" alt="">
				</li>
				<li class="owl-carousel-item">
					<img src="assets/img/clients3/4.png" alt="">
				</li>
				<li class="owl-carousel-item">
					<img src="assets/img/clients3/1.png" alt="">
				</li>
				<li class="owl-carousel-item">
					<img src="assets/img/clients3/2.png" alt="">
				</li>
				<li class="owl-carousel-item">
					<img src="assets/img/clients3/3.png" alt="">
				</li>
			</ul>
		</div><!--/container-->
		<!--=== End Owl Carousel v6 ===-->

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
	<script type="text/javascript" src="{{ asset('assets/plugins/jquery/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('assets/plugins/jquery/jquery-migrate.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
	<!-- JS Implementing Plugins -->
	<script type="text/javascript" src="{{ asset('assets/plugins/back-to-top.js')}}"></script>
	<script type="text/javascript" src="{{ asset('assets/plugins/smoothScroll.js')}}"></script>
	<script type="text/javascript" src="{{ asset('assets/plugins/jquery.parallax.js')}}"></script>
	<script type="text/javascript" src="{{ asset('assets/plugins/fancybox/source/jquery.fancybox.pack.js')}}"></script>
	<script type="text/javascript" src="{{ asset('assets/plugins/owl-carousel/owl-carousel/owl.carousel.js')}}"></script>
	<script type="text/javascript" src="{{ asset('assets/plugins/revolution-slider/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('assets/plugins/revolution-slider/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
	<!-- JS Customization -->
	<script type="text/javascript" src="{{ asset('assets/js/custom.js')}}"></script>
	<!-- JS Page Level -->
	<script type="text/javascript" src="{{ asset('assets/js/app.js')}}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/plugins/fancy-box.js')}}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/plugins/owl-carousel.js')}}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/plugins/revolution-slider.js')}}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/plugins/style-switcher.js')}}"></script>
	<script type="text/javascript">
		jQuery(document).ready(function() {
			App.init();
			App.initParallaxBg();
			FancyBox.initFancybox();
			OwlCarousel.initOwlCarousel();
			StyleSwitcher.initStyleSwitcher();
			RevolutionSlider.initRSfullWidth();
		});
	</script>
	<!--[if lt IE 9]>
	<script src="{{ asset('assets/plugins/respond.js')}}"></script>
	<script src="{{ asset('assets/plugins/html5shiv.js')}}"></script>
	<script src="{{ asset('assets/plugins/placeholder-IE-fixes.js')}}"></script>
	<![endif]-->
</body>
</html>

