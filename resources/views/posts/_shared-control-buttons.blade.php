<div class="control-buttons">
	@if ($post->user_id == Auth::id())
		{!! Form::open(['method' => 'delete', 'route' => ['posts.destroy', $post->id]]) !!}
			<button class="btn btn-danger">
				<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
			</button>
		{!! Form::close() !!}
	@endif
</div>