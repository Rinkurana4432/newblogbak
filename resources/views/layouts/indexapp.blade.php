<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<x-csslonk />
	@yield('datatableLinks')
</head>
<body class="sidebar-mini layout-fixed">
   <div class="wrapper">
		<x-topheader />
		<x-sidebar />
		<div class="content-wrapper" style="min-height: 504px;">
			@yield('content')
		</div>
		   <x-footer />
		   
   </div>
   <x-scriptlink />
   @yield('datatableScripts')
</body>
</html>
