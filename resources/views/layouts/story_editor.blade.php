<!doctype html>
<html>
    <script type="text/javascript">
    var APP_URL = {!! json_encode(url('/')) !!}
    </script>
    <head>
        <meta charset="utf-8">
        <title>@yield('title') - Laravel Medium editor demo on Codeforest</title>

        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="{{ asset('css/config.css') }}" rel="stylesheet">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.5/angular.min.js"></script>

        <link rel="stylesheet" href="{{ url('css/medium-editor.css') }}">
        <link rel="stylesheet" href="{{ url('css/themes/default.css') }}">
        <link rel="stylesheet" href="{{ url('css/medium-editor-insert.css') }}">
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
        <style>
            table form { margin-bottom: 0; }
            form ul { margin-left: 0; list-style: none; }
            .error { color: red; font-style: italic; }
        </style>
    </head>
 
    <body>
        @include('layouts.top_menu')
        
        
        <div class="container">
            @if (Session::has('message'))
                <div class="flash alert">
                    <p>{{ Session::get('message') }}</p>
                </div>
            @endif
 
        </div>
    @yield('main')
    </body>
 
    <style type="text/css">
      body{
          background-color: #fff;
          color: #636b6f;
          /*font-family: 'Raleway', sans-serif;*/
          font-family: 'Work Sans', sans-serif;
          font-weight: 100;
          height: 100vh;
          margin: 0px !important;
      }
      .remove-padding{
          padding: 0px !important;
      }
      .logo-header{
          border-bottom: 1px solid var(--menu-border-color);
      }
    </style>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    @include('partials.editor')
</html>