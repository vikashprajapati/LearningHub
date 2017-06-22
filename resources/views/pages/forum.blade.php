@extends('/layouts/main')
@section('title','|Forums')
@section('content')
<div class="forum container header-space">
  <div class="row">
    <div class="page-header">
      <h1>Forum-Topics</h1>
    </div>
    <div class="jumbotron col-md-8 col-sm-8" style="padding:15px; margin-top:40px">
      @for($j=1;$j<=3;$j++)
          <div class="row">
            @for($i=1;$i<=3;$i++)
            <div class="col-sm-3 col-md-4">
              <div class="topic-box thumbnail">
                <img src="{{ asset('images/forum.png') }}"alt="">
                <div class="Captions text-center">
                  <h4>topic{{$i*$j}}</h4>
                  <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h5>
                </div>
              </div>
            </div>
            @endfor
          </div>
          @endfor
        </div>
        @include('partials._sidecards')
  </div>
</div>
</div>
