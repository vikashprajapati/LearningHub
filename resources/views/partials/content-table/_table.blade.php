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
    <div class="post">
      <div class="post-photo">
          <img src="{{ asset('images/profile.jpg') }}"alt="">
          <span class="photo-caption">{{ $post->user }}</span>
      </div>
      <div class="post-head">
        <h3>{{ $post->title }}</h3>
      </div>
      <div class="post-body">
        <span class="post-desc">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
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
            <span class="fa fa-eye">14k</span>
            <span class="fa fa-thumbs-o-up">2k</span>
            <span class="fa fa-comments">1.2k</span>
            <span class="fa fa-share-alt">250</span>
          </div>
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
