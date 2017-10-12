@extends('layouts.app')

@section('content')
<script src="{{ asset('js/blog/app.js') }}" ></script>
<style>
    .panel-body{height:200px;padding:15px}
</style>
<div class="container" ng-app="blogApp" ng-controller="blogController">
    <div class="row">
        <div class="col-md-4" ng-repeat="blog in blogs">
            <div class="panel panel-default">
                <a href="posts/[[blog.id]]" class="post_link">
                <div class="panel-heading" ng-bind-html="blog.title | trust"></div>
                </a>

                <div class="panel-body custom_body" ng-bind-html="blog.body | trust" >
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
