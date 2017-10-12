@extends('layouts.layout_editor')
 
@section('title', 'View Post')
 
@section('main')
 	
    <!-- <p> link_to_route('posts.index', 'Return to all posts') </p> -->
    <p><a href="{{ url('posts') }}">Return to all posts</a></p>
    <div id="hideEditor" style="display:none;"></div>
    <div id="post-title" class="title-editable">{!!html_entity_decode($post->title)!!}</div>
 
    <div id="post-body" class="body-editable">{!!html_entity_decode($post->body)!!}</div>
 
@stop