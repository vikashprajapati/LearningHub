<div class="row" style="padding-bottom: 10px">
  <div class="post">
    <div class="post-photo">
      <img src="{{ asset('images/profile.jpg') }}"alt="">
      <span class="photo-caption">{{ $post->user->name }}</span>
    </div>
    <div class="post-head">
      <h3>{{ $post->title }}</h3>
    </div>
    <div class="post-body">
      <span class="post-desc">
        <small>{{strip_tags($post->body)}}</small>
      </span>
      <div class="post-tags"><!--All tags -->
        @for($j=0;$j<5;$j++)
          <span class="label label-default">Tag</span>
        @endfor
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
