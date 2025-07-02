<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Awaiken">
	<!-- Page Title -->
    <title>Promofix - Imad Jomaa </title>
	<!-- Favicon Icon -->
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
	<!-- Google Fonts Css-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
<link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
	<!-- Bootstrap Css -->
	<link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" media="screen">
	<!-- SlickNav Css -->
	<link href="{{ asset('assets/css/slicknav.min.css')}}" rel="stylesheet">
	<!-- Swiper Css -->
	<link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css')}}">
	<!-- Font Awesome Icon Css-->
	<link href="{{ asset('assets/css/all.min.css')}}" rel="stylesheet" media="screen">
	<!-- Animated Css -->
	<link href="{{ asset('assets/css/animate.css')}}" rel="stylesheet">
    <!-- Magnific Popup Core Css File -->
	<link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css')}}">
	<!-- Mouse Cursor Css File -->
	<link rel="stylesheet" href="{{ asset('assets/css/mousecursor.css')}}">
	<!-- Main Custom Css -->
	<link href="{{ asset('assets/css/custom.css')}}" rel="stylesheet" media="screen">
        <!-- Template Stylesheet -->

        <!-- Scripts -->
        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
        @inertia
    <!-- Jquery Library File -->
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js')}}"></script>
    <!-- Bootstrap js file -->
    <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
    <!-- Validator js file -->
    <script src="{{ asset('assets/js/validator.min.js')}}"></script>
    <!-- SlickNav js file -->
    <script src="{{ asset('assets/js/jquery.slicknav.js')}}"></script>
    <!-- Swiper js file -->
    <script src="{{ asset('assets/js/swiper-bundle.min.js')}}"></script>
    <!-- Counter js file -->
    <script src="{{ asset('assets/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js')}}"></script>
    <!-- Magnific js file -->
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <!-- SmoothScroll -->
    <script src="{{ asset('assets/js/SmoothScroll.js')}}"></script>
    <!-- Parallax js -->
    <script src="{{ asset('assets/js/parallaxie.js')}}"></script>
    <!-- MagicCursor js file -->
    <script src="{{ asset('assets/js/gsap.min.js')}}"></script>
    <script src="{{ asset('assets/js/magiccursor.js')}}"></script>
    <!-- Text Effect js file -->
    <script src="{{ asset('assets/js/SplitText.js')}}"></script>
    <script src="{{ asset('assets/js/ScrollTrigger.min.js')}}"></script>
    <!-- YTPlayer js File -->
    <script src="{{ asset('assets/js/jquery.mb.YTPlayer.min.js')}}"></script>
    <!-- Wow js file -->
    <script src="{{ asset('assets/js/wow.min.js')}}"></script>
    <!-- Main Custom js file -->
    <script src="{{ asset('assets/js/function.js')}}"></script>
    
        <!-- Template Javascript -->
    </body>
</html>
