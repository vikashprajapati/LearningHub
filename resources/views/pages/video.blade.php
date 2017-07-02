@extends('/layouts/main')
@section('title','|post')
@section('content')
@endsection
<!--styles for videos  -->
<link rel="stylesheet" href="{{ URL::asset('css/video.css') }}" />
<!--styles for videos ends  -->
<div class="container header-space">
  <div class="page-header">
    <h2>Videos Gallery</h2>
  </div>
  <div class="row p-t-10">
    @foreach($subjects as $subject)
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 card">
      <a href="#">
        <div class="thumbnail" >
          <img src="{{ $subject['image'] }}" alt="#">
          <div class="caption">
            <h2>
              {{ $subject['name'] }}
            </h2>
            <hr>
            <p>
              {{$subject['desc']}}
            </p>
            <button class="btn btn-default" role="button">click here</button>
          </div>
        </div>
      </a>
    </div>
    @endforeach
  </div>
</div>
