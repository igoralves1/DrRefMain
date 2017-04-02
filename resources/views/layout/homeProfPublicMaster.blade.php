<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<title>Desire | Unify - Responsive Website Template</title>

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
	<!--[if lt IE 9]><link rel="stylesheet" href="{{ asset('assets/plugins/revolution-slider/rs-plugin/css/settings-ie8.css')}}" type="text/css" media="screen"><![endif]-->

	<!-- CSS Theme -->
	<link rel="stylesheet" href="{{ asset('assets/css/theme-colors/default.css" id="style_color')}}">
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
	<div class="wrapper page-option-v1">
		
                @include('header.profPublic')
                
                @yield('content')
                
                @include('footer.profPublic')

		

		
	</div><!--/wrapper-->

        

	<!-- JS Global Compulsory -->
	<script type="text/javascript" src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/plugins/jquery/jquery-migrate.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
	<!-- JS Implementing Plugins -->
	<script type="text/javascript" src="{{asset('assets/plugins/back-to-top.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/plugins/smoothScroll.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/plugins/jquery.parallax.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/plugins/fancybox/source/jquery.fancybox.pack.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/plugins/owl-carousel/owl-carousel/owl.carousel.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/plugins/revolution-slider/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/plugins/revolution-slider/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
	<!-- JS Customization -->
	<script type="text/javascript" src="{{asset('assets/js/custom.js')}}"></script>
	<!-- JS Page Level -->
	<script type="text/javascript" src="{{asset('assets/js/app.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/plugins/fancy-box.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/plugins/owl-carousel.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/plugins/revolution-slider.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/plugins/style-switcher.js')}}"></script>
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
	<script src="{{asset('assets/plugins/respond.js')}}"></script>
	<script src="{{asset('assets/plugins/html5shiv.js')}}"></script>
	<script src="{{asset('assets/plugins/placeholder-IE-fixes.js')}}"></script>
	<![endif]-->
</body>
</html>

