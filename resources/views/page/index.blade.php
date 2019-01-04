<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<noscript>
	   <meta http-equiv="refresh" content="0;url={{route('page.noscript')}}">
	</noscript>
	@include('page.style')
</head>
<body>
	@if(isset($configs_data['fb_social']['fb_app_id']) && $configs_data['fb_social']['fb_app_id'] != null)
	<div id="fb-root"></div>
	<script>
		(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.1&appId={{isset($configs_data['fb_social']['fb_app_id'])?$configs_data['fb_social']['fb_app_id']:''}}&autoLogAppEvents=1';
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-121904091-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-121904091-1');
	</script>
	@endif
	@include('page.header')
	@yield('content')
	@include('page.footer')
	@include('page.script')
	@yield('script')
</body>
</html>