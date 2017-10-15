@extends('layouts.story_editor')

@section('title', 'Create Post')
 
@section('main')
    
    <link rel="stylesheet" href="{{ url('css/medium-editor.css') }}">
    <!-- <link rel="stylesheet" href="{{ url('css/style.css') }}"> -->
    <link rel="stylesheet" href="{{ url('css/themes/default.css') }}">
    <link rel="stylesheet" href="{{ url('css/medium-editor-insert.css') }}">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
    <style>
        table form { margin-bottom: 0; }
        form ul { margin-left: 0; list-style: none; }
        .error { color: red; font-style: italic; }
        #post-body{
            margin-bottom: 40px;
        }
    </style>
    
    <div class="container">
        <div class="row">

            <div class="col-12">
            <br>
                @if( Auth::check() )
                     {{ Auth::user()->name }}
                @endif
            <br>
            <br>
            </div>
            <div class="col">

                <div class="error alert alert-danger"></div>
                <div class="success alert alert-success"></div>
             
                {{ Form::open(array('route' => 'posts.store')) }}
                    <div class="title-editable" id="post-title"><h1>Enter post title</h1></div>
                    <div class="body-editable" id="post-body"><p>Enter post body</p></div>
                {{ Form::submit('Save', array('class' => 'btn btn-primary', 'id' => 'form-submit')) }}
             
                {{ Form::close() }}

            </div>
        </div>
    </div> 

    <style type="text/css">
        
    </style>
 
    @include('partials.editor')
@stop
