@foreach (Notify::get('success') as $alert)
	<div class="alert alert-success">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		{{ $alert }}
	</div>
@endforeach

@foreach (Notify::get('error') as $alert)
	<div class="alert alert-error">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		{{ $alert }}
	</div>
@endforeach

@foreach (Notify::get('info') as $alert)
	<div class="alert alert-info">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		{{ $alert }}
	</div>
@endforeach

@foreach (Notify::get('warning') as $alert)
	<div class="alert">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		{{ $alert }}
	</div>
@endforeach