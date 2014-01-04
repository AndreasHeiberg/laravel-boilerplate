@extends('layouts.admin')

@section('title')
Laravel PHP Framework
@stop

@section('main')
	<div class="panel panel-default">
		<div class="panel-heading">{{ $user->name }} {{ $user->isDeactivated() ? '(deactivated)' : '' }}</div>
		<div class="panel-body">
			<img class="profile-photo" src="{{ $user->profilePhoto->link(['preset' => 'profile.medium']) }}" alt="{{{ $user->profilePhoto->description }}}">
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
	
	<a href="{{ route('admin.users.edit', [$user->id]) }}" class="btn btn-primary">Edit info</a>
	<button type="button" class="btn btn-default">Send email</button>
	@if ($user->isDeactivated())
		+@formInline(['url' => route('admin.users.activate', [$user->id])])
			<input type="submit" class="btn btn-primary" value="Activate user">
		-@form
	@else
		+@formInline(['url' => route('admin.users.deactivate', [$user->id])])
			<input type="submit" class="btn btn-warning" value="Deactivate user">
		-@form
	@endif
	+@deleteButton('Delete user')
@stop