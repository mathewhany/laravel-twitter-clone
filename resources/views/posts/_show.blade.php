<article>
	<div class="details">
		<div class="user">{{ $post->user->name }}</div>
		@if ($post->isShared())
			shared
			<div class="user">{{ $post->original->user->name }}</div>
			post.
		@endif
	</div>
	@if (Auth::check())
		@if ($post->isShared())
			@include('posts._shared-control-buttons')
		@else
			@include('posts._control-buttons')
		@endif
	@endif
	<div class="clearfix"></div>
	<div class="body">
		@if ($post->isShared())
			{{ $post->original->content }}
		@else
			{{ $post->content }}
		@endif
	</div>
	<div class="comments">
		@foreach ($post->comments as $comment)
			@include('comments._show')
		@endforeach
		@if (Auth::check())
			<hr>
			@include('comments._create-form')
		@endif
	</div>
</article>