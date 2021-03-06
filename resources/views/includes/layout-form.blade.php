<!DOCTYPE html>
<html>
	<head>
		<title>@yield('title')</title>
		<meta name="description" content="@yield('description')">
		@include('includes.head')
		<link href="{{ URL::asset('css/dmaterialize.min.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
		<link href="{{ URL::asset('css/dstyle.min.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
		<link href="{{ URL::asset('css/agen.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
		<link href="{{ URL::asset('js/plugins/perfect-scrollbar/perfect-scrollbar.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
		<link href="{{ URL::asset('css/layouts/page-center.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
		<link href="{{ URL::asset('js/plugins/jvectormap/jquery-jvectormap.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
		<link href="{{ URL::asset('js/plugins/chartist-js/chartist.min.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
		<link href="{{ URL::asset('js/plugins/sweetalert/sweetalert.css"') }}" type="text/css" rel="stylesheet" media="screen,projection">
	</head>
	<body class="cyan montserrat">
		@yield('content')
		@include('includes.djs')
		@yield('js')
	</body>
</html>