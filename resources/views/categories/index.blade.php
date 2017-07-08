@extends('/layouts/main')
@section('title','|Your Posts')
@section('content')
  <div class="col-md-8 col-md-offset-2">
    <h1>{{$category->category}}<small>  category</small></h1>
    <br/><br/>
    <div class="row">
      <div class="col-md-12">
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
                <td>{{$post->title}}</td>
                <td>{{substr(strip_tags($post->body),0,150)}}{{strlen(strip_tags($post->body))>150?"...":""}}</td>
                <td>{{date('M j,Y h:ia',strtotime($post->created_at))}}</td>
                <td>
                  <a href="{{route('posts.show',[$post->id])}}" class="btn btn-default btn-sm">View Post</a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
