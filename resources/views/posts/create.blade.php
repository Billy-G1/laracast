@extends ('layouts/master')

@section ('content')

	<div class="col-sm-8 blog-main">
	<h1>Create a post</h1>
	<hr>
	<?php //Form Request Data and CSRF  EPISODE 11, 12:24   ?>
	<form method="POST" action="/posts">       
	
	{{ csrf_field() }}
	
		  <div class="form-group">
			<label for="title">Title</label>
			<input type="text" class="form-control" id="title" name="title">
		  </div>
		  
		  <div class="form-group">
			<label for="body">Text of the post</label>
			<textarea class="form-control" id="body" name="body"></textarea>
		  </div>
		  
		  <div class="form-group">
			<button type="submit" class="btn btn-primary">Publish</button>
		 </div>
		 
	</form>
	@include('layouts/error')
	</div>
	
	

@endsection