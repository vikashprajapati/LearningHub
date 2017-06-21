@extends('/layouts/main')
@section('title','|Forums')
@section('content')
<div class="container header-space">
  <div class="row">
    <div class="b col-md-8">
      <div class="left-forum-topic">
        <div class="row" style="padding-bottom: 10px">
          @for($i=1;$i<=10;$i++)
          <div class="topic col-sm-2">
            <div class="topic-photo">
              <img src="{{ asset('images/profile.jpg') }}"alt="">
              <span class="topic-name">ABCD</span>
            </div>
          </div>
          @endfor
        </div>
      </div>
    </div>
    @include('partials._sidecards')
  </div>
</div>
<!--<div class="container">
<div class="forum-search col-lg-4  col-md-6  col-sm-6  col-xs-8  " style="padding: 0%">
<form>
<div class="input-group" >
<input type="text" class="form-control" placeholder="type your forum topic..">
<div class="input-group-btn">
<button class="btn btn-default" type="submit">
<i class="glyphicon glyphicon-search"></i>
</button>
</div>
</div>
</form>
</div>
<div class="row">
<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
<div class="row">
<div class="top col-lg-3 col-md-4 col-sm-4 col-xs-5">
<div class="topic">
Topic details
</div>
<p>Topic Name</p>
</div>
<div class="top col-lg-3 col-md-4 col-sm-4 col-xs-5">
<div class="topic">
Topic details
</div>
<p>Topic Name</p>
</div>
<div class="top col-lg-3 col-md-4 col-sm-4 col-xs-5">
<div class="topic">
Topic details
</div>
<p>Topic Name</p>
</div>
<div class="top col-lg-3 col-md-4 col-sm-4 col-xs-5">
<div class="topic">
Topic details
</div>
<p>Topic Name</p>
</div>
<div class="top col-lg-3 col-md-4 col-sm-4 col-xs-5">
<div class="topic">
Topic details
</div>
<p>Topic Name</p>
</div>
<div class="top col-lg-3 col-md-4 col-sm-4 col-xs-5">
<div class="topic">
Topic details
</div>
<p>Topic Name</p>
</div>
<div class="top col-lg-3 col-md-4 col-sm-4 col-xs-5">
<div class="topic">
Topic details
</div>
<p>Topic Name</p>
</div>
<div class="top col-lg-3 col-md-4 col-sm-4 col-xs-5">
<div class="topic">
Topic details
</div>
<p>Topic Name</p>
</div>
</div>

</div>
<div class="row  col-lg-offset-1 col-lg-3 col-md-offset-1 col-md-3 col-sm-offset-1 col-sm-3  col-xs-4">
<div class="sidecard profile" >
<img src="ppv.jpg" class="PP img-responsive center-block" width="200px" height="200px" >
<p class="stat center-block">Username</p>
<p class="stat">Rank:</p>
<p class="data" id="rank">1</p>

<p class="stat">Points:</p>
<p class="data" id="points">1000</p>

<p class="stat">Medals</p>
<p class="data" id="medals">Nope </p>

</div>
<div class="sidecard topmem">
<p class="tpmember ">Top Members</p>
<div class="row">
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-10"> <img src="ppv.jpg" class=" tpmpic img-responsive" width="70px" height="70px"></div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-10"> <p class="memname">Name</p></div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-10" >   <p class="Points">Points</p></div>
</div>
</div>

</div>
</div>
</div>
@endsection-->
