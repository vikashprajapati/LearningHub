@entends(layouts.main)
@section('title','| edit Post')
@section('content')
  <div class="viewpost container">
    <!-- //page-header begins here -->
    <div class="page-header text-center">
      <h1>{{ $post->title }}</h1>
      <div class="row">
        <div class="header-profile-img hidden-xs col-sm-1 col-md-1">
          <img src="images/profile.jpg" alt="profile-pic">
        </div>
        <div class="header-profile-name col-sm-1 col-md-1">
          <h4>{{ $post->user }}</h4>
        </div>
        <div class="header-tags m-t-10 col-xs-offset-4 col-sm-offset-5 col-md-offset-6 col-xs-6 col-sm-5 col-md-4">
          <span class="posted" style="position:relative;right:-40 px">Posted-on: {{date('M j,Y h:ia',strtotime($post->created_at))}}</span>
          <span class="fa fa-eye" style="float:right;">  4k</span>
        </div>
      </div>
    </div>
    <!-- //page-header ends -->


    <!-- //post body begins/ -->
    <div class="panel panel-default">
    <div class="panel-body">
      <h5>{!! $post->body !!}</h5>
      <img src="/images/a.jpg" width="50%" alt="">
    </div>
  </div>
  <!-- //post body ends -->
  </div>
  <!-- //post ends -->

  <!-- //suggested posts here -->
  <div class="viewcards container">
    <div class="card-deck">
      <h3 class="text-center">Suggesed posts</h3>
      <div class="row">
        <div class="col-sm-3 col-sm-offset-1">
          <div class="card text-center" >
            <div class="card-header">
              <small class="text-muted">created by:Ayush Varshney</small>
            </div>
            <img class="card-img-top" src="/images/r3.png" alt="">
            <div class="card-block">
              <h4 class="card-title">DIY create a blog</h4>
              <p>here we will teach you how to make your own blog</p>
              <a href="#" class="btn btn-primary">Read more...</a>
            </div>
            <div class="card-footer">
              <small class="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>
        </div>
        <div class="col-sm-3 col-sm-offset-1">
          <div class="card text-center" >
            <div class="card-header">
              <small class="text-muted">created by:Ayush Varshney</small>
            </div>
            <img class="card-img-top" src="/images/r3.png" alt="">
            <div class="card-block">
              <h4 class="card-title">DIY create a blog</h4>
              <p>here we will teach you how to make your own blog</p>
              <a href="#" class="btn btn-primary">Read more...</a>
            </div>
            <div class="card-footer">
              <small class="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>
        </div>
        <div class="col-sm-3 col-sm-offset-1">
          <div class="card text-center" >
            <div class="card-header">
              <small class="text-muted">created by:Ayush Varshney</small>
            </div>
            <img class="card-img-top" src="/images/r3.png" alt="">
            <div class="card-block">
              <h4 class="card-title">DIY create a blog</h4>
              <p>here we will teach you how to make your own blog</p>
              <a href="#" class="btn btn-primary">Read more...</a>
            </div>
            <div class="card-footer">
              <small class="text-muted">Last updated 8 mins ago</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- suggested posts ends -->


  <!-- //comments section starts here -->
  <div class="comments container m-t-20">
        <h2 style="display:block">Comments<span class="fa fa-pencil" style="float:right;padding-top:8px">32</span></h2>
  <div class="media">
    <div class="media-left">
      <a href="#">
        <img src="/images/profile.jpg" style="width:56px"alt="">
      </a>
    </div>
    <div class="media-body">
        <h4 class="media-heading">user1</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  <!--nesting of media object  -->
    <div class="media">
      <div class="media-left">
        <a href="#">
          <img src="/images/profile.jpg" style="width:56px"alt="">
        </a>
      </div>
      <div class="media-body">
          <h4 class="media-heading">user1</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </div>
    </div>
  </div>
  <div class="media">
    <div class="media-left">
      <a href="#">
        <img src="/images/profile.jpg" style="width:56px"alt="">
      </a>
    </div>
    <div class="media-body">
        <h4 class="media-heading">user1</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
  </div>
  </div>
  <!-- //comments section ends here -->
@endsection
