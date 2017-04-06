<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<title>Dr.Reference | @yield('TitleDrName') </title>

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
        
@php
  
  
  
@endphp

        @yield('cssLink00')
        @yield('cssLink01')
        @yield('cssLink02')
        @yield('cssLink03')
        @yield('cssLink04')
        @yield('cssLink05')
        @yield('cssLink06')
        @yield('cssLink07')
        @yield('cssLink08')
        @yield('cssLink09')
        @yield('cssLink10')
        
</head>

<body>
	<div class="wrapper">
		

                @include('header.profPublic')
              
                @yield('content')
                
                @include('footer.profPublic')
		
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
		function initMap() {
			GoogleMap.initGoogleMap();
		}
	</script>
        
        @yield('jsLink00')
        @yield('jsLink01')
        @yield('jsLink02')
        @yield('jsLink03')
        @yield('jsLink04')
        @yield('jsLink05')
        @yield('jsLink06')
        @yield('jsLink07')
        @yield('jsLink08')
        @yield('jsLink09')
        @yield('jsLink10')
        
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
