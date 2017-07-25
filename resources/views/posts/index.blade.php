@extends('/layouts/main')
@section('title','|Your Posts')
@section('content')
  <div class="col-md-8 col-md-offset-2">
    <div class="mypost col-sm-12">
        <table class="table">
          <thead>
            <th>#</th>
            <th>Post Title</th>
            <th>Body</th>
            <th>Created At</th>
            <th></th>
          </thead>
          <tbody>
            @foreach ($posts as $post)
              <tr>
                <td>{{$post->id}}</td>
                <td><a href="#">{{$post->title}}</a></td>
                <td>{{substr(strip_tags($post->body),0,200)}}{{strlen(substr(strip_tags($post->body),0,200))?"...":""}}</td>
                <td>{{date('M j,Y h:ia',strtotime($post->created_at))}}</td>
                <td>
                  <a href="{{route('posts.edit',[$post->id])}}" class="btn btn-default btn-sm">Edit</a>
                </td>
                <td>
                  <a href="{{route('posts.destroy',[$post->id])}}" class="btn btn-default btn-sm">Delete</a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
  </div>
@endsection
