@extends('/layouts/main')
@section('title','|Your Posts')
@section('content')
  <div class=" category-col col-md-8 col-md-offset-2">
      <div class="category-title ">
        <h1 class="m-t-5 m-l-10">{{$category->category}}<small>  category</small></h1>
      </div>
    <div class="category-post m-t-30">
        @foreach($posts as $post)
          @include('partials.content-table._poststuff')
        @endforeach
    </div>
  </div>
@endsection
