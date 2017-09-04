<!DOCTYPE html>
<html>
	<head>
		<title>@yield('title')</title>
		<meta name="description" content="@yield('description')">
		@include('includes.head')
		<!-- CSS  -->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link href="{{ URL::asset('css/materialize.min.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
		<link href="{{ URL::asset('css/style.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
		<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	</head>
	<body>
		@include('includes.navbar')
		<main class="grey lighten-3">
		@yield('content')
		</main>
		@include('includes.footer')
		<script src="{{ URL::asset('js/materialize.js') }}"></script>
		<script src="{{ URL::asset('js/init.js') }}"></script>
		@yield('js')
	</body>
</html>