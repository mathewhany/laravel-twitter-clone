@extends('app')

@section('content')
	{!! Form::model($post, ['method' => 'put', 'route' => ['posts.update', $post->id]]) !!}
		@include('posts._form', ['buttonText' => 'Save', 'contentPlaceholder' => 'Edit your post..'])
	{!! Form::close() !!}
@stop