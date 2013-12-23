@extends('layouts.main')

@section('title')
Laravel PHP Framework
@stop

@section('main')
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">{{ $user->name }}</div>
				<div class="panel-body">
					<img src="{{ $user->profilePhoto->link('medium') }}" alt="{{{ $user->profilePhoto->description }}}">
					{{ $user->email }}
				</div>
			</div>
		</div>
	</div>
@stop