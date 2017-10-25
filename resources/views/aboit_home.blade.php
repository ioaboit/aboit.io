@extends('layouts.aboit')

@section('dynamic_content')
<script src="{{ asset('js/aboit_home_app.js') }}" ></script>
<div class="container" ng-app="HomeStoryApp" ng-controller="HomeStoryController">
    <div class="row">
        
            <div class="col-md-12" style="margin-bottom:10px;">
                <a href="story/[[blogs[0].url_id]]" class="card-link-a">
                    <div class="card bg-dark text-white" id="latest-story-card">
                      <img class="card-img no-border-radius" src="https://crowdfavorite.com/wp-content/uploads/2015/11/Beyond-blog-1116x496.jpg" alt="No Image">
                      <div class="card-img-overlay gray-transparent">
                        <h4 class="card-title" ng-bind-html="blogs[0].title | trust"></h4>
                        <!-- <p class="card-text" ng-bind-html="blogs[0].body | trust"></p> -->
                        <p class="card-text">[[blogs[0].created_at]]</p>
                      </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4" ng-repeat="(key, blog) in blogs" ng-if="key!==0" >
                <a href="story/[[blog.url_id]]" class="card-link-a">
                    <div class="card mb-3">
                      <img class="card-img-top" src="https://crowdfavorite.com/wp-content/uploads/2015/11/Beyond-blog-1116x496.jpg" alt="No Image">
                      <div class="card-body">
                        <h4 class="card-title" ng-bind-html="blog.title | trust"></h4>
                        <!-- <p class="card-text" ng-bind-html="blog.body | trust"></p> -->
                        <p class="card-text"><small class="text-muted">[[blog.created_at]]</small></p>
                      </div>
                    </div>
                </a>
            </div>

    </div>
</div>
<style type="text/css">
    #latest-story-card{
        border: none !important;
        border-radius: 0px !important;
    }
    .no-border-radius{
        border-radius: 0px !important;
    }
    .gray-transparent{
        background-color: rgba(53, 53, 53, 0.52) !important;
    }
    .card-link-a{
        text-decoration: none !important;
        color: #404040 !important;
    }
</style>
@endsection
