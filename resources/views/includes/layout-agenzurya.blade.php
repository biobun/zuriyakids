<!DOCTYPE html>
<html>
<head>
<title>@yield('title')</title>
<meta name="description" content="@yield('description')">
<meta charset="UTF-8">
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
@include('includes.head')
   <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="{{ URL::asset('css/font-awesome.min.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="{{ URL::asset('css/materialize.min.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="{{ URL::asset('css/agen.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body class="white">
@yield('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="{{ URL::asset('js/materialize.min.js') }}"></script>
<script src="{{ URL::asset('js/init.js') }}"></script>
@yield('js')
</body>
</html>
