@extends('app')

@section('content')
	{!! Form::open(['method' => 'post', 'url' => '/auth/register']) !!}
		<div class="form-group">
			{!! Form::label('name', 'Name:') !!}
			{!! Form::text('name', null, ['class' => 'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('email', 'E-mail:') !!}
			{!! Form::email('email', null, ['class' => 'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('password', 'Password:') !!}
			{!! Form::password('password', ['class' => 'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('password_confirmation', 'Confirm Password:') !!}
			{!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::button('Register', ['class' => 'btn btn-primary', 'type' => 'submit']) !!}
		</div>
	{!! Form::close() !!}
@stop