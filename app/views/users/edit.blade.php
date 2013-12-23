@extends('layouts.dashboard')

@section('title')
Login
@stop

@section('main')
	<div class="row">
		<div class="col-md-12">
			+@form()
				<h2>Edit your information</h2>

				+@formText('first_name')

				+@formText('last_name')

				+@formText('email')

				+@formPassword('password', 'New password')

				<div class="form-actions text-right">
					+@formSubmit('Save')
				</div>
			-@form
		</div>
	</div>
@stop