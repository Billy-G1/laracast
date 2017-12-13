@extends ('layouts/master')

@section ('content')

	<h1>Create a post</h1>
	<?php //Form Request Data and CSRF  EPISODE 11, 12:24   ?>
	<form method="POST">       
	
	{{ csrf_field() }}
	
		  <div class="form-group">
			<label for="title">Title</label>
			<input type="text" class="form-control" id="title" name="title" required>
		  </div>
		  
		  <div class="form-group">
			<label for="body">Text of the post</label>
			<textarea class="form-control" id="body" name="body" required></textarea>
		  </div>
		  
		 <button type="submit" class="btn btn-primary">Publish</button>
	</form>

@endsection