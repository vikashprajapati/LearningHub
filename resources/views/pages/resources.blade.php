@extends('/layouts/main')
@section('title','|Resources')
@section('content')
<div class="forum container header-space">
  <div class="row">
    <div class="page-header">
      <h2>resources</h2>
    </div>
    <div class="resource-box col-sm-9 m-t-40" >
      <div class="row">
        @foreach($resources as $r)
        <div class="resource-item col-sm-3 col-md-4">
          <a href="/video">
          <div class="topic-box thumbnail">
            <img src="{{ asset('images/resources/r.png') }}"alt="">
            <div class="Captions text-center">
              <h4>{{$r}}</h4>
              <h5>This section contains content based on type of resources such as videos,Ebooks,pdf notes,previous year question papers.</h5>
            </div>
          </div>
          </a>
        </div>
        @endforeach
      </div>
    </div>
    @include('partials._sidecards')
  </div>
</div>
