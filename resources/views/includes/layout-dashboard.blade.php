<!DOCTYPE html>
<html>
	<head>
		<title>@yield('title')</title>
		<meta name="description" content="@yield('description')">
		@include('includes.head')
		<link href="{{URL::asset('css/dmaterialize.min.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
		<link href="{{URL::asset('css/dstyle.min.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
		<link href="{{URL::asset('js/plugins/perfect-scrollbar/perfect-scrollbar.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
		<link href="{{URL::asset('js/plugins/jvectormap/jquery-jvectormap.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
		<link href="{{URL::asset('js/plugins/chartist-js/chartist.min.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
		<link href="{{URL::asset('js/plugins/sweetalert/sweetalert.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
	</head>
	<body>
		@include('includes.dnavbar')
		<div id="main">
			<div class="wrapper">
				@include('includes.dsidebar')
				<section id="content">
					<div class="container">
						@yield('content')
					</div>
				</section>
				@include('includes.dfooter')
				@include('includes.djs')
				@yield('js')
			</div>
		</div>
	</body>
</html>