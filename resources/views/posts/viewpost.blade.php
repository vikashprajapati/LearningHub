@extends('/layouts/main')
@section('title','|post')
@section('content')
<div class="viewpost container">
  <div class="row">
    <div class="view-post-col col-xs-9 m-t-35">
      <div class="view-post-title">
        <h2 class="m-t-5 m-l-10">{{ $post->title }}</h2>
        <!-- <span class="fa fa-newspaper-o m-r-5"></span> -->
      </div>
      <div class="view-post-body">
        {!! $post->body !!}
        <div class="view-post-status m-t-30">
          <ul class="flex-container">
            @if (Auth::check())
              <a class="btn btn-default btn-block" {{ Auth::user()->likes->contains('post_id', $post->id) ? "disabled" : '' }} data-action="submit" data-target="like-form"><li class="flex-item fa fa-thumbs-o-up" > {{$post->likes()->count()}}</li></a>
              @else
                <a href="login" class="btn btn-default btn-block"><li class="flex-item fa fa-thumbs-o-up" > {{$post->likes()->count()}}</li></a>
            @endif
            <form class="hide" action="{{ route('post.like') }}" method="post" id="like-form">
              {{ csrf_field() }}
              <input type="hidden" name="post_id" value="{{ $post->id }}">
            </form>
            <a href="#comments" class="btn btn-default btn-block"><span class="flex-item fa  fa-comments" style="border-left:1px solid white"> {{$comments->count()}}</span></a>
             <button class="btn btn-default btn-block"><li class="flex-item fa fa-eye" style="border-left:1px solid white"> {{$post->views}}</li></button>
          </ul>
        </div>
      </div>

      <div class="view-post-tags m-t-20">

        <ul class="flex-container">
          <span class="info-tags fa fa-info p-l-10 p-r-10"></span>
          <li class="flex-item"><span class="category fa fa-user-secret m-r-10">{{$post->user->name}}</span></li>
          <li class="flex-item"><span class="category fa fa-list"> Category:{{$post->category->category}}</span></li>
          <li class="flex-item "><span class="category fa fa-clock-o m-r-5">{{date('M j,Y h:ia',strtotime($post->created_at))}}</span></li>
        </ul>


        <!-- <span class="fa fa-eye">  {{$post->views}}</span> -->
      </div>
      <div class="tags-row m-t-20 p-t-10 m-b-20">
        <span class="fa fa-tags"></span>
        @foreach ($post->tags as $tag)
          <span class="label label-default">{{$tag->title}}</span>
        @endforeach
      </div>
    </div>
  @include('partials._sidecards')
  </div>

  <!-- //comments section starts here -->
    <div class="view-post-comments col-xs-9 m-t-20" id="comments">
      <div class="reply-head">
        <h2 style="display:block">Replies <span class="fa fa-reply"></span><span class="fa fa-pencil" style="float:right;padding-top:8px">{{$comments->count()}}</span></h2>
      </div>
    <form action="{{route('comments.store',$post->id)}}" method="POST">
      {{ csrf_field() }}
      <textarea name="comment" rows="4" cols="100%" placeholder="your comment goes here....." style="width:100%"></textarea>
      <br/>
      <input type="submit" class="btn btn-success m-t-10" name="Comment" value="reply"></input>
    </form>
    @foreach ($comments as $comment)
      <div class="media m-t-100">
        <div class="media-left">
          <a href="#">
            <img class="img-circle"src="/images/profile.jpg" style="width:56px"alt="">
          </a>
        </div>
        <div class="media-body">
          <h4 class="media-heading">{{$comment->user->name}}</h4>
          <p>{{$comment->comment}}</p>
        </div>
      </div>
    @endforeach
  </div>
  </div>
  <!-- //comments section ends here -->
@endsection
