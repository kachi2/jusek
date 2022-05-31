<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Jusek Schools') }}</title>

       	<!-- GOOGLE FONTS -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet">		
		<link href="https://fonts.googleapis.com/css?family=Muli:400,600,700,800,900&amp;display=swap" rel="stylesheet">

		<!-- BOOTSTRAP CSS -->
		<link href="{{asset('/frontend/css/bootstrap.min.css')}}" rel="stylesheet">
				
		{{-- <!-- FONT ICONS -->
		<link href="../../../../../use.fontawesome.com/releases/v5.11.0/{{asset('/frontend/css/all.css')}}" rel="stylesheet" crossorigin="anonymous">		
		<link href="{{asset('/frontend/css/flaticon.css')}}" rel="stylesheet"> --}}

		<!-- PLUGINS STYLESHEET -->
		<link href="{{asset('/frontend/css/menu.css')}}" rel="stylesheet">	
		<link id="effect" href="{{asset('/frontend/css/dropdown-effects/fade-down.css')}}" media="all" rel="stylesheet">
		<link href="{{asset('/frontend/css/magnific-popup.css')}}" rel="stylesheet">	
		<link href="{{asset('/frontend/css/flexslider.css')}}" rel="stylesheet">
		<link href="{{asset('/frontend/css/owl.carousel.min.css')}}" rel="stylesheet">
		<link href="{{asset('/frontend/css/owl.theme.default.min.css')}}" rel="stylesheet">

		<!-- ON SCROLL ANIMATION -->
		<link href="{{asset('/frontend/css/animate.css')}}" rel="stylesheet">
	
		<!-- TEMPLATE CSS -->
		<link href="{{asset('/frontend/css/style.css')}}" rel="stylesheet">

        <!-- RESPONSIVE CSS -->
		<link href="{{asset('/frontend/css/responsive.css')}}" rel="stylesheet"> 
    </head>


@include('partials.nav')
@yield('content')
@include('partials.footer')

    
		<!-- EXTERNAL SCRIPTS
		============================================= -->	
		<script src="{{asset('/frontend/js/jquery-3.3.1.min.js')}}"></script>
		<script src="{{asset('/frontend/js/bootstrap.min.js')}}"></script>	
		<script src="{{asset('/frontend/js/modernizr.custom.js')}}"></script>
		<script src="{{asset('/frontend/js/jquery.easing.js')}}"></script>
		<script src="{{asset('/frontend/js/jquery.appear.js')}}"></script>
		<script src="{{asset('/frontend/js/menu.js')}}"></script>
		<script src="{{asset('/frontend/js/materialize.js')}}"></script>	
		<script src="{{asset('/frontend/js/jquery.scrollto.js')}}"></script>
		<script src="{{asset('/frontend/js/jquery.countdown.min.js')}}"></script>
		<script src="{{asset('/frontend/js/imagesloaded.pkgd.min.js')}}"></script>
		<script src="{{asset('/frontend/js/isotope.pkgd.min.js')}}"></script>
		<script src="{{asset('/frontend/js/jquery.flexslider.js')}}"></script>
		<script src="{{asset('/frontend/js/owl.carousel.min.js')}}"></script>
		<script src="{{asset('/frontend/js/jquery.magnific-popup.min.js')}}"></script>	
		<script src="{{asset('/frontend/js/register-form.js')}}"></script>	
		<script src="{{asset('/frontend/js/comment-form.js')}}"></script>	
		<script src="{{asset('/frontend/js/jquery.validate.min.js')}}"></script>	
		<script src="{{asset('/frontend/js/jquery.ajaxchimp.min.js')}}"></script>		
		<script src="{{asset('/frontend/js/custom.js')}}"></script>
	</body>
</html>	

