<div class="control-buttons">
	@if ($post->user_id == Auth::id())
		<a href="{{ route('posts.edit', $post->id) }}" class="btn btn-default">
			<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
		</a>
		{!! Form::open(['method' => 'delete', 'route' => ['posts.destroy', $post->id]]) !!}
			<button class="btn btn-danger">
				<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
			</button>
		{!! Form::close() !!}
	@else
		@if (!$post->isComment())
			{!! Form::open(['method' => 'post', 'route' => ['posts.share', $post->id]]) !!}
				<button class="btn btn-primary">
					Share
				</button>
			{!! Form::close() !!}
		@endif
	@endif	
</div>