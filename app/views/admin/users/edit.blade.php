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
						<tr class="row-align-middle">
							<td>First name</td>
							<td>{{ Form::text('first_name', $user->first_name, ['class' => 'form-control', 'id' => 'fuck']) }}</td>
						</tr>
						<tr class="row-align-middle">
							<td>Last name</td>
							<td>{{ Form::text('last_name', $user->last_name, ['class' => 'form-control']) }}</td>
						</tr>
						<tr class="row-align-middle">
							<td>Email</td>
							<td>{{ Form::text('email', $user->email, ['class' => 'form-control']) }}</td>
						</tr>
						<tr class="row-align-middle">
							<td>New Password</td>
							<td>{{ Form::password('password', ['class' => 'form-control']) }}</td>
						</tr>
						<tr class="row-align-middle">
							<td>Profile photo</td>
							<td>
								<div class="fileinput fileinput-new" data-provides="fileinput">
									<span class="btn btn-default btn-file"><span class="fileinput-new">Select file</span>
									<span class="fileinput-exists">Change</span><input type="file" name="profile_photo"></span>
									<span class="fileinput-filename"></span>
									<a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none">&times;</a>
								</div>
							</td>
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