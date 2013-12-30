@extends('layouts.admin')

@section('title')
Laravel PHP Framework
@stop

@section('css')
	@parent
	<style>
		.panel-body {
			min-height: 148px;
		}

		.profile-photo {
			position: absolute;
			top: 13px;
			right: 13px;
			border: solid hsl(0, 100%, 100%) 6px;
			box-shadow: 0px 0px 1px hsl(0, 0%, 60%);
			border-radius: 3px;
		}

		tr:first-child td {
			border-top: none !important;
		}

		td:first-child {
			max-width: 40px;
		}
	</style>
@stop

@section('main')
	<div class="panel panel-default">
		<div class="panel-heading">{{ $user->name }}</div>
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
						<td>Created at</td>
						<td>{{ $user->updated_at }}</td>
					</tr>
				</tbody>
			</table>					
		</div>
	</div>
@stop