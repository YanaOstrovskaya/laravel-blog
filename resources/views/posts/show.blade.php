@extends('layouts.master')

@section('content')



<div class="blog-post">

	<h2>{{ $post->title }}</h2>
	 <p class="blog-post-meta">{{ $post->created_at->toDayDateTimeString() }}</p>

	<p>{{ $post->body }}</p>

</div>

<hr>

<div class="comments">

	<ul class="list-group">
	
	@foreach($post->comments as $comment)

		<li class="list-group-item">

			<strong>
				
				{{ $comment->created_at->diffForHumans() }}:

			</strong>

			<br>
			
			{{ $comment->body }}

		</li>

	@endforeach

	</ul>	

</div>

<br>

{{-- Add comment --}}

 <div class="card">
 
	<div class="card-block">

		@include('layouts.errors')
		
		<form method="POST" action="/posts/{{ $post->id }}/comments">

			@csrf
			
			<div class="form-group">
				
				<textarea name="body" placeholder="Your comment here" class="form-control"></textarea>

			</div>

			  <div class="form-group">
 	
 				 <button type="submit" class="btn btn-primary">Comment</button>

 			  </div>

		</form>

	</div>

 </div>

@endsection