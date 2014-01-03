<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<title>@yield('title')</title>

		@section('css')
			@css('main')
			@css('dashboard')
		@show
	</head>

	<body class="@yield('body-class')">
		@include('layouts._header')

		<div class="container">
			@include('layouts._notify')
			
			@section('main')

			@show
		</div>

		@include('layouts._footer')

		@section('js')
			@js('main')
			@js('dashboard')
		@show

	</body>
</html>