@extends('app')

@section('content')
	@if (Auth::check())
		@include('posts._create-form')
		<hr>
	@endif
	@forelse ($posts as $post)
		@include('posts._show')
	@empty
		<div class="alert alert-warning">No posts, yet!</div>
	@endforelse
@stop