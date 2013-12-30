<!DOCTYPE html>
<html lang="en">
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

			<div class="row">
				<div class="col-md-3">
					<ul class="nav nav-pills nav-stacked">
						<li><a href="{{ route('admin.users.index') }}">Users</a></li>
						<li><a href="">Pages</a></li>
					</ul>
				</div>
				<div class="col-md-9">
					@include('layouts._breadcrums')
					
					@section('main')

					@show
				</div>
			</div>
		</div>

		@include('layouts._footer')

		@section('js')
			@js('main')
			@js('dashboard')
		@show

	</body>
</html>