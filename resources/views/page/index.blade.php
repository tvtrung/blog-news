<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<noscript>
	   <meta http-equiv="refresh" content="0;url={{route('page.noscript')}}">
	</noscript>
	@include('page.style')
</head>
<body>
	@include('page.header')
	@yield('content')
	@include('page.footer')
	@include('page.script')
	@yield('script')
</body>
</html>