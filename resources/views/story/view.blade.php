@extends('layouts.story_editor')

@section('title', 'View Post')

@section('main')

<div class="container">
	<div class="row">
		<div class="col-12">
			<br>
			<p><a href="{{ url('story') }}">Return to all posts</a></p>
			<div class="author_profile">
				<div class="media">
				  <img class="rounded-circle" src="{{ asset('public/uploads/1507830427-download.jpg') }}" alt="Generic placeholder image" height="50px">
				  <div class="media-body">
				    <h5 class="mt-0">{{$post->user->name}}</h5>
				    <small class="text-muted">Writer</small> | 
				    <small class="text-muted">{{$post->created_at->diffForHumans()}}</small>
				  </div>
				</div>
			</div>
			<br>
			<div id="hideEditor" style="display:none;"></div>
			<div id="post-title" class="title-editable">{!!html_entity_decode($post->title)!!}</div>
			<div id="post-body" class="body-editable">{!!html_entity_decode($post->body)!!}</div>
		</div>
	</div>
</div>

@stop