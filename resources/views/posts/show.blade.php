
@extends ('layouts/master')


@section ('content')
<div class="col-sm-8 blog-main">
	<h1 class="blog-post-title">{{ $post->title }}</h1>
	
	<p class="blog-post-meta">{{ $post->created_at->toFormattedDateString() }} <a href="#">Mark</a></p>
	<hr>
	{{ $post->body }}
	</p>
</div>
@endsection

