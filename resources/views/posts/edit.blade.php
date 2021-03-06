@extends('layouts.layout_editor')
 
@section('title', 'Edit post')
 
@section('main')
 
    <div class="error alert alert-danger" style="display:none;"></div>
    <div class="success alert alert-success" style="display:none;"></div>
 
    {{ Form::open(array('method' => 'PATCH', 'route' => array('posts.update', $post->id))) }}
        <div class="title-editable" id="post-title">{!!html_entity_decode($post->title)!!}</div>
        <div class="body-editable" id="post-body">{!!html_entity_decode($post->body)!!}</div>
        <input type="hidden" id="post-id" value="{{ $post->id }}">
        {{ Form::submit('Update Post', array('class' => 'btn btn-primary', 'id' => 'form-update')) }}
    {{ Form::close() }}
 	
@stop