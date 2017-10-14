@extends('layouts.app')

@section('content')
<script src="{{ asset('js/blog/app.js') }}" ></script>
<style>
    .panel-body{height:200px;padding:15px}
</style>
<div class="container" ng-app="blogApp" ng-controller="blogController">
    <div class="row">
        <div class="card story-card" style="width: 22rem;" ng-repeat="blog in blogs">
          <div class="card-body">
            <h4 class="card-title" ng-bind-html="blog.title | trust"></h4>
            <!-- <h6 class="card-subtitle mb-2 text-muted" ng-bind-html="blog.title | trust"></h6> -->
            <p class="card-text" ng-bind-html="blog.body | trust"></p>
            <a href="posts/[[blog.id]]" class="card-link">view</a>
            <!-- <a href="#" class="card-link">Another link</a> -->
          </div>
        </div>

        <!-- <div class="col-4" ng-repeat="blog in blogs">
            <div class="panel panel-default">
                <a href="posts/[[blog.id]]" class="post_link">
                <div class="panel-heading" ng-bind-html="blog.title | trust"></div>
                </a>

                <div class="panel-body custom_body" ng-bind-html="blog.body | trust" >
                </div>
            </div>
        </div> -->
    </div>
</div>

<style type="text/css">
    .story-card{
        margin: 10px;
    }
</style>

@endsection
