{!! Form::open(['method' => 'post', 'route' => 'posts.store', 'class' => 'form-inline']) !!}
	{!! Form::hidden('parent_id', $post->id) !!}
	<div class="form-group">
		{!! Form::text('content', null, ['class' => 'form-control', 'placeholder' => 'Write a comment']) !!}
	</div>
	<div class="form-group">
		{!! Form::button('Comment', ['type' => 'submit', 'class' => 'btn btn-primary']) !!}
	</div>
{!! Form::close() !!}