<!DOCTYPE HTML>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Top longevity experts">
	<meta name="keywords" content="">
	<title>@yield('title')</title>
	<meta property="og:title" content="LIForum" />
	<meta property="og:description" content="Longevity Impact Forum" />
	<meta property="og:image" content="http://liforum.org/lif/img/logo.png" />
	<meta property="og:url" content="" />
	<meta property="og:site_name" content="http://liforum.org" />
	<meta property="og:type" content="LIForum" />
	@include('partials.head')
</head>
@yield('style')
<!--<![endif]-->
<!--Start TEMPLATE-->
<body>
	<div style="display: none; position: fixed; top: 100px; right: 70px; z-index: 99999999" class="mainAlert alert @if(session('status')==1) alert-success @elseif(session('status')==2) alert-danger @endif ">
  		<strong>@if(session('status')==1) Success! @elseif(session('status')==2) Error! @endif</strong> {{session('statusText')}}
	</div>
	@include('partials.menu')
	@yield('content')
	@include('partials.footer')
	@include('partials.footer_scripts')
	@yield('add_scripts')
	<script type="text/javascript">
		@if(session('status'))
			$(document).ready(function(){
				$('.mainAlert').fadeIn();
				setTimeout(function(){
					$('.mainAlert').fadeOut();
				},5000);
			});
		@endif
	</script>
</body>
</html>