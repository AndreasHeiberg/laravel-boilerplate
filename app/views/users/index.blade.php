@extends('layouts.main')

@section('title')
Laravel PHP Framework
@stop

@section('main')
	<div class="row">
		<div class="col-md-12">
			<div class="list-group">
				@foreach($users as $u)
					<a href="{{ route('users.show', [$u->id]) }}" class="list-group-item">{{ $u->name }}</a>
				@endforeach
			</div>
		</div>
	</div>
@stop