@extends('layouts.main')

@section('title')
Login
@stop

@section('main')
	+@form(['class' => 'row', 'id' => 'register'])
		<div class="col-md-12">
			<h2>Register</h2>

			+@formText('first_name')

			+@formText('last_name')

			+@formText('email')

			+@formPassword('password')

			<small>By signing up for Product, you agree to our <a href="">terms of service</a> and <a href="">privacy policy.</a></small>

			<div class="form-actions text-right">
				+@formSubmit('Register')
			</div>
		</div>
	-@form
@stop