@extends('/layouts/main')
@section('title','|Homepage')
@section('content')
<div class="container header-space">
  <div class="row">
    <div class="col-md-8">
      @include('partials.content-table._table')
    </div>
      @include('partials._sidecards')
  </div>
</div>
@endsection
