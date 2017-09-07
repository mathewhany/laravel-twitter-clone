{!! Form::open(['method' => 'post', 'route' => 'posts.store']) !!}
	@include('posts._form', ['buttonText' => 'Post', 'contentPlaceholder' => 'Share something...'])
{!! Form::close() !!}