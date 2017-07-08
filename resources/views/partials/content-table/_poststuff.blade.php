<div class="row" style="padding-bottom: 10px">
  <div class="post">
    <div class="post-photo">
      <img src="{{ asset('images/profile.jpg') }}"alt="">
      <span class="photo-caption">{{ $post->user->name }}</span>
    </div>
    <div class="post-head">
      <a href="{{route('posts.show',[$post->id])}}"><h3>{{ $post->title }}</h3></a>
    </div>
    <div class="post-body">
      <span class="post-desc">
        <small>{{substr(strip_tags($post->body),0,250)}}{{(strlen(strip_tags($post->body))>250)?"...":""}}</small>
      </span>
      <div class="post-category"><!--All tags -->
          <span class="label label-default">{{$post->category->category}}</span>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12">
        <div class="post-status">
          <div class="span-right">
            <span class="fa fa-eye">{{$post->views}} |</span>
            <span class="fa fa-thumbs-o-up">{{$post->likes}} |</span>
            <span class="fa fa-comments">{{$comments->where('post_id',$post->id)->count()}} |</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
