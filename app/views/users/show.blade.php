@extends('layouts.main')

@section('title')
Laravel PHP Framework
@stop

@section('main')
	<div class="panel panel-default">
		<div class="panel-heading">{{ $user->name }} {{ $user->isDeactivated() ? '(deactivated)' : '' }}</div>
		<div class="panel-body">
			<img class="profile-photo" src="{{ $user->profilePhoto->link('medium') }}" alt="{{{ $user->profilePhoto->description }}}">
			<table class="table">
				<tbody>
					<tr>
						<td>Email</td>
						<td>{{ $user->email }} {{ $user->auth_email_verified ? '' : '(unverified)' }}</td>
					</tr>
					<tr>
						<td>Created at</td>
						<td>{{ $user->created_at }}</td>
					</tr>
					<tr>
						<td>Last updated at</td>
						<td>{{ $user->updated_at }}</td>
					</tr>
				</tbody>
			</table>					
		</div>
	</div>

	@if ($canEdit)	
		<a href="{{ route('users.edit', [$user->id]) }}" class="btn btn-primary">Edit profile</a>
	@endif
@stop