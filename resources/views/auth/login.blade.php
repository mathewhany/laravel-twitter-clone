@extends('app')

@section('content')
	{!! Form::open(['method' => 'post', 'url' => '/auth/login']) !!}
		<div class="form-group">
			{!! Form::label('email', 'E-mail:') !!}
			{!! Form::email('email', null, ['class' => 'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('password', 'Password:') !!}
			{!! Form::password('password', ['class' => 'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::checkbox('remember') !!} Remeber me
		</div>
		<div class="form-group">
			{!! Form::button('Login', ['class' => 'btn btn-primary', 'type' => 'submit']) !!}
		</div>
	{!! Form::close() !!}
@stop