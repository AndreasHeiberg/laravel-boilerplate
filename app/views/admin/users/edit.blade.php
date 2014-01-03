@extends('layouts.admin')

@section('title')
Laravel PHP Framework
@stop

@section('main')
	+@form(['url' => route('admin.users.update', [$user->id]), 'method' => 'PUT'])
		<div class="panel panel-default">
			<div class="panel-heading">{{ $user->name }}</div>
			<div class="panel-body">
				<img class="profile-photo" src="{{ $user->profilePhoto->link(['preset' => 'profile.medium']) }}" alt="{{{ $user->profilePhoto->description }}}">
				<table class="table">
					<tbody>
						<tr>
							<td>First name</td>
							<td>{{ Form::text('first_name', $user->first_name, ['class' => 'form-control']) }}</td>
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
		<div class="text-right">
			+@formSubmit('Save')
		</div>
	-@form
@stop