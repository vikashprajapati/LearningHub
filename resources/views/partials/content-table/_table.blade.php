<div class="col-sm-9">
  <div class="lefttable">
    <div>
      <ul class="nav nav-tabs ">
        <li role="presentation" class="active"><a data-toogle="tab" href="#">Trending</a></li>
        <li role="presentation"><a href="{{ route('home', ['sortby'=>'featured'])}}">Featured</a></li>
        <li role="presentation"><a href="#">New</a></li>
      </ul>
    </div>
    @foreach($posts as $post)
    <div class="row" style="padding-bottom: 10px">
      <div class="post p-t-10">
        <div class="post-category col-xs-5 col-xs-offset-7 text-center">
          <h4>Technology</h4>
        </div>
        <div class="post-photo m-l-10">
          <img src="{{ asset('images/profile.jpg') }}"alt="">
          <span class="photo-caption">{{ $post->user }}</span>
        </div>
        <div class="post-head">
          <h3>{{ $post->title }}</h3>
        </div>
        <div class="post-date">
          <h6 class="m-b-5">Last updated 2 hrs ago...</h6>
        </div>
        <div class="post-body">
          <span class="post-desc">
            <small>{{strip_tags($post->body)}}</small>
          </span>

        </div>
        <div class="row m-t-25">
          <div class="col-xs-12 col-sm-5">
            <div class="post-status p-t-5">
              <ul class="flex-container">
                <li class="flex-item"><span class="fa fa-eye ">14k</span></li>
                <li class="flex-item"><span class="fa fa-thumbs-o-up ">2k</span></li>
                <li class="flex-item"><span class="fa fa-comments ">1.2k</span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach
    <div class="pager">
      <ul class="pagination">
        <li class="active"><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li><a href="#">last</a></li>
      </ul>
    </div>
  </div>
</div>
