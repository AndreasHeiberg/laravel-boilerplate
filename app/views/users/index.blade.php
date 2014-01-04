@extends('layouts.main')

@section('title')
Laravel PHP Framework
@stop

@section('main')
	<div class="list-group">
		@foreach($users as $u)
			<a href="{{ route('users.show', [$u->id]) }}" class="list-group-item">{{ $u->name }}</a>
		@endforeach
	</div>
	<div class="row">
		<div class="col-md-4">
			
		</div>
		<div class="col-md-4 text-center">
			{{ $users->links() }}
		</div>
		<div class="col-md-4 text-right">
			<div class="btn-group pagination">
				<button type="button" class="btn btn-default">Total:</button>
				<button type="button" class="btn btn-default">{{ $users->getTotal() }}</button>
			</div>
		</div>
	</div>
@stop