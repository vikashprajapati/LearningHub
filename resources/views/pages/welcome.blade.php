@extends('/layouts/main')
@section('title','|Homepage')
@section('content')
<div class="container header-space">
  <div class="row">
    <div class="col-md-8">
      @include('partials.content-table._table')
    </div>
    <div class="col-md-2">
      @include('partials._sidecards')
    </div>
  </div>
</div>
@endsection
