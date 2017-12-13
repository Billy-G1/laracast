
@extends ('layouts/master')


@section ('content')
<div class="col-sm-8 blog-main">
	<h1 class="blog-post-title">{{ $post->title }}</h1>
	
	<p class="blog-post-meta">{{ $post->created_at->toFormattedDateString() }} <a href="#">Mark</a></p>
	<hr>
	{{ $post->body }}
	</p>
	
	<hr>
	
	<div class="comments">
		<ul class="list-group">
		@foreach ($post->comments as $comment)
			<li class="list-group-item">
			<p>{{ $post->created_at->diffForHumans() }}:</p>
			<p>{{ $comment->body }}</p>
			
		@endforeach
		</ul>
	</div>
	<HR>
	


	
		<div class="card-block">
			<form method="POST" action="/posts/{{ $post->id }}/comments">
			{{ csrf_field() }}
				<div class="form-group">
					<textarea style="width: 100%;" name="body" placeholder="Your comment here"></textarea>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary">Add a comment</button>
				</div>
			</form>
		</div>
		
		@include ('layouts/errors')
		
	</div>
</div>
@endsection

