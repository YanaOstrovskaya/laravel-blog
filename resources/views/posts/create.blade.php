@extends('layouts.master')

@section('content')


<div class="col-md-8 blog-main">
<h1>Publish a Post</h1>

<hr>

@include('layouts.errors')

<form method="POST" action="/posts">
@csrf
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title">
  </div>

  <div class="form-group">
    <label for="body">Body</label>
    <textarea name="body" id="body" cols="30" rows="10" class="form-control" ></textarea>
  </div>

  <div class="form-group">
 	 <button type="submit" class="btn btn-primary">Publish</button>
  </div>
  
</form>
</div>

@endsection