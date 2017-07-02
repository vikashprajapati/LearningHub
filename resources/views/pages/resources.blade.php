@extends('/layouts/main')
@section('title','|Resources')
@section('content')
<div class="forum container header-space">
  <div class="row">
    <div class="page-header">
      <h2>resources</h2>
    </div>
    <div class="jumbotron col-md-8 col-sm-8" style="padding:15px; margin-top:40px">
      @for($j=1;$j<=2;$j++)
          <div class="row">
            @for($i=1;$i<=3;$i++)
            <div class="col-sm-3 col-md-4">
              <div class="topic-box thumbnail">
                <img src="{{ asset('images/resources/r.png') }}"alt="">
                <div class="Captions text-center">
                  <h4>Resource{{$i*$j}}</h4>
                  <h5>This section contains content based on type of resources such as videos,Ebooks,pdf notes,previous year question papers.</h5>
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
