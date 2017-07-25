@extends('/layouts/main')
@section('title','|post')
@section('stylesheets')
  <link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
@endsection
@section('content')
  <!-- scripts and stylesheets for QA -->
  <script src="js/qa.js"></script>
  <link rel="stylesheet" href="{{ URL::asset('css/qa.css') }}" />
  <!--end of scripts and stylesheets  -->


  <div class="container">
    <!-- Question Box begins here  -->
    <div class="panel panel-danger">
      <div class="panel-heading">
        <h3 class="panel-title">Ask your question</h3>
      </div>
      <div class="panel-body">
        <form method="post" action="{{ route('question.store') }}">
          {{ csrf_field() }}
          <div class="form-group">
            <div class="alert alert-info alert-dismissable">
              <a class="panel-close close" data-dismiss="alert">×</a>
              <i class="fa fa-newspaper-o "></i>
              Choose the appropriate tags for your thread.
            </div>
            <label class="col-lg-3 control-label" for="category">Category:</label>
            <div class="col-lg-8">
              <select id="category" name="category" class="form-control">
                {{dd($categories)}}
                @foreach($categories as $category)
                  <option value="{{$category->id}}">{{$category->category}}</option>
                @endforeach
              </select>
            </div>

            <label for="tags" class="col-lg-3 control-label p-t-10">Tags:</label>
            <div class="col-lg-8">
              <div class="ui-select p-t-10">
                <select id="tags" name="tags[]" multiple class="form-control">
                  @foreach ($tags as $tag)
                    <option value="{{$tag->id}}">{{$tag->title}}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="wrap m-t-30">
              <textarea class="form-control" name="ques"  rows="5" id="ques" placeholder="Type your question here.."></textarea>
            </div>
          </div>
          <span id="text_counter"></span>
          <button type="submit" class="btn btn-danger" data-toggle="modal">Ask</button>
        </form>
      </div>
    </div>
    <!-- Question-box ends here -->

    <!-- tab panel for question category begins -->
    <div class="tabbable-panel m-l-15">
      <div class="tabbable-line">
        <ul class="nav nav-tabs ">
          <li class="active">
            <a href="#tab_default_1" data-toggle="tab">
              Trending </a>
            </li>
            <li>
              <a href="#tab_default_2" data-toggle="tab">
                Recent </a>
              </li>
            </ul>
          </div>
        </div>
        <!-- end of tab panel -->
        {{--@foreach($qatopic as $QA)
        <div class="card">
        <div class="row m-l-15">
        <h4><b>{{$QA['question']}}</b></h4>
        <p>{{$QA['ans']}}</p>
        <span class="fa fa-clock-o">
        last updated {{$QA['posted-on']}}
      </span>
      <span class="fa fa-comments">
      answers {{$QA['answers']}}
    </span>
    <span class="fa fa-mortar-board">
    helped {{$QA['helped']}}
  </span>
  <span class="fa fa-eye">
  views {{$QA['views']}}
</span>

<span class="fa fa-send">
shares {{$QA['shares']}}
</span>
<a href="/vqa" class="next m-b-10">Read full.. &raquo;</a>
</div>
</div>
@endforeach--}}
</div>
@endsection
@section('scripts')
  <script src="{{ asset('js/select2.min.js') }}"></script>
  <script type="text/javascript">
  $("#tags").select2({
    tags: true,
  });
  $("#category").select2({
    tags: true,
  });
  </script>
@endsection
