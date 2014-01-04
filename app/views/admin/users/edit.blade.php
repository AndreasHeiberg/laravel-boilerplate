@extends('layouts.main')

@section('title')
Laravel PHP Framework
@stop

@section('main')
	+@form(['url' => route('users.update', [$user->id]), 'method' => 'PUT', 'id' => 'edit', 'files' => true])
		<div class="panel panel-default">
			<div class="panel-heading">{{ $user->name }}</div>
			<div class="panel-body">
				<img class="profile-photo" src="{{ $user->profilePhoto->link(['preset' => 'profile.medium']) }}" alt="{{{ $user->profilePhoto->description }}}">

				+@formText('first_name', null, $user->first_name)

				+@formText('last_name', null, $user->last_name)
			
				+@formPassword('password')

				+@formFile('profile_photo')
			</div>
		</div>
	-@form
	<div class="text-right">
		+@deleteButton('Delete user', route('users.destroy', [$user->id]))

		<input type="submit" class="btn btn-primary" value="Save" form="edit">
	</div>
@stop