<!DOCTYPE html>
<html>
<head>
	@include ('admin.style')
	@yield('style')
</head>
<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
	@include ('admin.header')
		<div class="page-container">
			@include ('admin.sidebar')
			@yield('content')
		</div>
	@include ('admin.footer')
	@include ('admin.script')
	@yield('script')
</body>
</html>