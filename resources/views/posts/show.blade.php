
@extends ('layouts/master')


@section ('content')
<div class="col-sm-8 blog-main">
	<h1 class="blog-post-title">{{ $post->title }}</h1>
	
	<p class="blog-post-meta">{{ $post->created_at->toFormattedDateString() }} <a href="#">Mark</a></p>
	<hr>
	{{ $post->body }}
	</p>
	
	<hr>
	
	<div class="coments">
		<ul class="list-group">
		@foreach ($post->comments as $comment)
			<li class="list-group-item">
			<p>{{ $post->created_at->diffForHumans() }}:</p>
			<p>{{ $comment->body }}</p>
			
		@endforeach
		</ul>
	</div>
</div>
@endsection

