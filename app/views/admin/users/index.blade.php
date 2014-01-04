@extends('layouts.admin')

@section('title')
Laravel PHP Framework
@stop

@section('main')
	<div class="list-group">
		@foreach($users as $u)
			<a href="{{ route('admin.users.show', [$u->id]) }}" class="list-group-item">{{ $u->name }}</a>
		@endforeach
	</div>
	<div class="row">
		<div class="col-md-4">
			<div class="btn-group pagination">
				<a href="?" class="btn btn-default">All</a>
				<a href="?activated=1" class="btn btn-default">Activated</a>
				<a href="?activated=0" class="btn btn-default">Deactivated</a>
			</div>
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