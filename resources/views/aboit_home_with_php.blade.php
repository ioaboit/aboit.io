@extends('layouts.aboit')

@section('dynamic_content')
<div class="container">
    <div class="row">
        
        <?php $count = 1; ?>
        @foreach ($stories as $key=>$story)
            @if($key==0)
            <a>
                <div class="col-md-12" style="margin-bottom:10px;">
                    <a href="story/{{$story->url_id}}">
                        <div class="card bg-dark text-white" id="latest-story-card">
                          <img class="card-img no-border-radius" src="https://crowdfavorite.com/wp-content/uploads/2015/11/Beyond-blog-1116x496.jpg" alt="No Image">
                          <div class="card-img-overlay gray-transparent">
                            <h4 class="card-title">{{{ strip_tags($story->title) }}}</h4>
                            <p class="card-text">{{{ strip_tags(Str::words($story->body, 25)) }}}</p>
                            <p class="card-text">{{$story->created_at->diffForHumans()}}</p>
                          </div>
                        </div>
                    </a>
                </div>
            </a>
            @else
            <div class="col-md-4">
                <a href="story/{{$story->url_id}}" class="card-link-a">
                    <div class="card mb-3">
                      <img class="card-img-top" src="https://crowdfavorite.com/wp-content/uploads/2015/11/Beyond-blog-1116x496.jpg" alt="No Image">
                      <div class="card-body">
                        <h4 class="card-title">{{{ strip_tags($story->title) }}}</h4>
                        <p class="card-text">{{{ strip_tags(Str::words($story->body, 10)) }}}</p>
                        <p class="card-text"><small class="text-muted">{{$story->created_at->diffForHumans()}}</small></p>
                      </div>
                    </div>
                </a>
            </div>
            @endif

        @endforeach
        

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