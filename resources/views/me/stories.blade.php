@extends('layouts.aboit')

@section('title', 'Your Stories')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-12">
			<br>
			<h1 class="color-dark-gray">Your Stories</h1>
			<hr>

			@foreach ($posts as $post)
			<div>
				<a href="{{ url('me/'.$post->unique_id.'/edit/') }}" class="decoration-none">
					<span class="medium-text color-dark-gray font-bold">{{ strip_tags($post->title) }} </span>
				</a>
				<div class="small-text">
					<span> Last edited {{ strip_tags($post->updated_at->diffForHumans()) }} </span>
				</div>
			</div>
			<hr>
			@endforeach

		</div>
	</div>
</div>

<style type="text/css">
	.medium-text{
		font-size: 20px;
	}
	.small-text{
		font-size: 12px;
	}
	.color-dark-gray{
		color: #404040;
		/*color: #636c6f;*/
	}
	.font-bold{
		font-weight: bold;
	}
	.decoration-none {
		text-decoration: none !important;
	}
</style>

@stop