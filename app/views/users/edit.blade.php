@extends('layouts.main')

@section('title')
Laravel PHP Framework
@stop

@section('main')
	+@form(['url' => route('users.update', [$user->id]), 'method' => 'PUT', 'id' => 'edit', 'files' => true])
		<div class="panel panel-default">
			<div class="panel-heading">{{ $user->name }}</div>
			<div class="panel-body">
				<img class="profile-photo" src="{{ $user->profilePhoto->link('medium') }}" alt="{{{ $user->profilePhoto->description }}}">
				<table class="table">
					<tbody>
						<tr>
							<td><label for="first_name">First name</label></td>
							<td>{{ Form::text('first_name', $user->first_name, ['class' => 'form-control', 'id' => 'fuck']) }}</td>
						</tr>
						<tr>
							<td>Last name</td>
							<td>{{ Form::text('last_name', $user->last_name, ['class' => 'form-control']) }}</td>
						</tr>
						<tr>
							<td>Email</td>
							<td>{{ Form::text('email', $user->email, ['class' => 'form-control']) }}</td>
						</tr>
						<tr>
							<td>Password</td>
							<td>{{ Form::password('password', ['class' => 'form-control']) }}</td>
						</tr>
						<tr>
							<td>Created at</td>
							<td>{{ $user->created_at }}</td>
						</tr>
						<tr>
							<td>Last updated at</td>
							<td>{{ $user->updated_at }}</td>
						</tr>
						<tr>
							<td>Profile photo</td>
							<td>{{ Form::file('profile_photo') }}</td>
						</tr>
					</tbody>
				</table>		
			</div>
		</div>
	-@form
	<div class="text-right">
		+@form(['url' => route('users.destroy', [$user->id]), 'method' => 'DELETE'])
			<input type="submit" class="btn btn-danger" value="Delete user">
		-@form
		<input type="submit" class="btn btn-primary" value="Save" form="edit">
	</div>
@stop