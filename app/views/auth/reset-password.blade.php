@extends('layouts.main')

@section('title')
Login
@stop

@section('main')
	<div class="register-form row">
		<div class="col-md-12">
			+@form()
				<h2>Reset your password</h2>

				+@formHidden('token', $token)

				+@formText('email')->disabled()

				+@formPassword('password', 'New password')

				<div class="form-actions text-right">
					+@formSubmit('Reset password')
				</div>
			-@form
		</div>
	</div>
@stop