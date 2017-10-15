@extends('layouts.story_editor')

@section('title', 'View Post')

@section('main')

<div class="container">
	<div class="row">
		<div class="col-12">
			<p><a href="{{ url('story') }}">Return to all posts</a></p>
			<div id="hideEditor" style="display:none;"></div>
			<div id="post-title" class="title-editable">{!!html_entity_decode($post->title)!!}</div>
			
			<div id="post-body" class="body-editable">{!!html_entity_decode($post->body)!!}</div>
		</div>
	</div>
</div>

@stop