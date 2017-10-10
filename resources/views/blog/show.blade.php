@extends('layouts.app')

@section('content')
<script src="{{ asset('js/blog/app.js') }}" ></script>
<div class="container" ng-app="blogApp" ng-controller="blogController">
    <div class="row">
        <div class="col-md-4" ng-repeat="blog in blogs">
            <div class="panel panel-default">
                <div class="panel-heading">[[ blog.title ]]</div>

                <div class="panel-body">
                    [[ blog.body ]]
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
