<div class="row" style="padding-bottom: 10px">
  <div class="post p-t-10">
    <div class="post-category col-xs-5 col-xs-offset-7 text-center">
      <h4>Technology</h4>
    </div>
    <div class="post-photo m-l-10 ">
      <img class="img-responsive"src="{{ asset('images/profile.jpg') }}"alt="">
      <span class="photo-caption">{{ $post->user->name }}</span>
    </div>
    <div class="post-head">
      <a href="{{route('posts.show',[$post->id])}}"><h3>{{ $post->title }}</h3></a>
    </div>
    <div class="post-date">
      <h6 class="m-b-5">Last updated 2 hrs ago...</h6>
    </div>
    <div class="post-body">
      <span class="post-desc">
        <small>{{substr(strip_tags($post->body),0,250)}}{{(strlen(strip_tags($post->body))>250)?"...":""}}</small>
      </span>
    </div>
    <div class="row m-t-25">
      <div class="col-xs-12 col-sm-5">
        <div class="post-status p-t-5">
          <ul class="flex-container">
            <li class="flex-item"><span class="fa fa-eye ">{{$post->views}}</span></li>
            <li class="flex-item"><span class="fa fa-thumbs-o-up ">{{$post->likes}}</span></li>
            <li class="flex-item"><span class="fa fa-comments ">{{$comments->where('post_id',$post->id)->count()}}</span></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
