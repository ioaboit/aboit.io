@extends('layouts.aboit')

@section('title', 'View Post')

@section('main')
<script src="{{ asset('js/aboit_story_app.js') }}" ></script>
<div class="container" ng-app="StoryApp" ng-controller="StoryController">
	<div class="row">
		<div class="col-1">
			<div class="story_activity">
				<ul>
					@if($post->likes)
						<li class="like-story-icon">{{ $post->likes }}<br><i ng-click="likeThisStory('{{$post->unique_id}}')" class="fa fa-heart" aria-hidden="true"></i></li>
					@else
						<li class="like-story-icon"><i ng-click="likeThisStory('{{$post->unique_id}}')" class="fa fa-heart-o" aria-hidden="true"></i></li>
					@endif
					<li class="bookmark-story-icon"><i class="fa fa-bookmark-o" aria-hidden="true"></i></li>
					<li class="facebook-share-icon"><i class="fa fa-facebook" aria-hidden="true"></i></li>
					<li class="twitter-share-icon"><i class="fa fa-twitter" aria-hidden="true"></i></li>
				</ul>
			</div>
			<style type="text/css">
				.story_activity{
					position: fixed;
					top: 200px;
				}
				.story_activity li{
					list-style: none;
					text-align: center;
					font-size: 20px;
				}
				.story_activity li i{
					cursor: pointer;
				}
				.like-story-icon{
					font-size: 25px !important;
					color: green;
				}
				.bookmark-story-icon{
					color: #4492da;
				}
				.facebook-share-icon{
					color: #a5a5a5;
				}
				.twitter-share-icon{
					color: #a5a5a5;
				}
			</style>
		</div>
		<div class="col-10">
			<br>
			<!-- <p><a href="{{ url('story') }}">Return to all posts</a></p> -->
			<div class="author_profile">
				<div class="media">
				  <img class="rounded-circle" src="{{ asset('public/uploads/1507830427-download.jpg') }}" alt="Generic placeholder image" height="50px">
				  <div class="media-body author_profile_body">
				    <h5 class="mt-0 author_profile_name">{{$post->user->name}}</h5>
				    <p class="author_profile_p_tag"><small class="text-muted">Writer</small></p>
				    <p class="author_profile_p_tag"><small class="text-muted">{{$post->created_at->diffForHumans()}}</small></p>
				  </div>
				</div>
			</div>
			<br>
			<div id="hideEditor" style="display:none;"></div>
			<div class="col-12 story-container">
				<div id="post-title" class="title-editable">{!!html_entity_decode($post->title)!!}</div>
				<div id="post-body" class="body-editable">{!!html_entity_decode($post->body)!!}</div>
			</div>
		</div>
		<div class="col-1">
		</div>



	</div><!--row-->

</div>
<style type="text/css">
	.story-container img{
		width: 100%;
	}
	.author_profile_body{
		padding-left:10px;
	}
	.author_profile_name{
	    margin-top: -1px !important;
		margin-bottom: 3px !important;
		padding: 0px !important;
	}
	.author_profile_p_tag{
		margin-bottom: 0px !important;
	    padding: 0px !important;
	    margin-top: -6px;
	    font-size: 14px;
	}
</style>
@stop