<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>@yield('title')</title>

		@section('css')
			@css('main')
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
		@show

	</body>
</html>