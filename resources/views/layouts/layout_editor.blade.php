<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>@yield('title') - Laravel Medium editor demo on Codeforest</title>




        <!-- CSS --
        <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

        <link rel="stylesheet" href="{{ url('bower_components/medium-editor.min.css') }}">
        <link rel="stylesheet" href="{{ url('bower_components/default.min.css') }}">
        <link rel="stylesheet" href="{{ url('bower_components/medium-editor-insert-plugin.min.css') }}">

        <script src="{{ url('bower_components/medium-editor.min.js') }} "></script>
        <script src="{{ url('bower_components/handlebars.runtime.min.js') }} "></script>
        <script src="{{ url('bower_components/jquery-sortable-min.js') }} "></script>
        <script src="{{ url('bower_components/jquery.ui.widget.js') }} "></script>
        <script src="{{ url('bower_components/jquery.iframe-transport.js') }} "></script>
        <script src="{{ url('bower_components/jquery.fileupload.js') }} "></script>
        <script src="{{ url('bower_components/medium-editor-insert-plugin.min.js') }} "></script>
        <!-- JS -->



        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ url('css/medium-editor.css') }}">
        <link rel="stylesheet" href="{{ url('css/style.css') }}">
        <link rel="stylesheet" href="{{ url('css/themes/default.css') }}">
        <link rel="stylesheet" href="{{ url('css/medium-editor-insert.css') }}">
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
        <style>
            table form { margin-bottom: 0; }
            form ul { margin-left: 0; list-style: none; }
            .error { color: red; font-style: italic; }
            body { padding-top: 20px; }
        </style>
    </head>
 
    <body>
 
        <div class="container">
            @if (Session::has('message'))
                <div class="flash alert">
                    <p>{{ Session::get('message') }}</p>
                </div>
            @endif
 
            @yield('main')
        </div>
    @include('partials.editor')
    </body>
 
</html>