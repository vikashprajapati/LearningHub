@extends('/layouts/main')
@section('title','|post')
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
      <div class="alert alert-info alert-dismissable">
        <a class="panel-close close" data-dismiss="alert">×</a>
        <i class="fa fa-coffee"></i>
        After typing your question, click on <strong> Ask </strong> to help finalize things for us.
      </div>
      <form method="post" action="{{ route('question.store') }}">
        {{ csrf_field() }}
      <div class="form-group m-t-30">
        <div class="wrap">
          <textarea class="form-control" name="ques"  rows="5" id="ques" placeholder="Type your question here.."></textarea>
        </div>
      </div>
      <span id="text_counter"></span>
      <button type="submit" class="btn btn-danger" data-toggle="modal">Ask</button>
    </form>
      <div class="modal fade ask" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="alert alert-success" role="alert"> Just one step away. State a few details more for us to submit your question.</div>

            <div class="panel panel-danger">
              <div class="panel-heading" >
                <h3 class="panel-title">Ask Question</h3>
              </div>
              <div class="panel-body">

                <form class="form-horizontal" role="form">
                  <div class="form-group" id="form2">
                    <label class="col-lg-3 control-label" margin-bottom:"-100px">Question Title:</label>
                    <div class="col-lg-8">
                      <input class="form-control" value="Write a suitable title of your question." type="text">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-lg-3 control-label">General Category(for tags):</label>
                    <div class="col-lg-8">
                      <div class="ui-select">
                        <select id="category1" class="form-control">
                          <option value="Maths">Mathematics</option>
                          <option value="Tech" selected="selected">Technology</option>
                          <option value="Biology">Biology</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-lg-3 control-label">Category(Specific):</label>
                    <div class="col-lg-8">
                      <div class="ui-select">
                        <select id="category2" class="form-control">
                          <option value="pro">Programming</option>
                          <option value="announce">Product and Service Announcements</option>
                          <option value="Prototypes" selected="selected">Prototypes</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label"></label>
                    <div class="col-md-8">
                      <input class="btn btn-primary" value="Publish your question" type="button">
                      <span></span>
                      <input class="btn btn-default" value="Cancel" type="reset">
                    </div>
                  </div>

                </form>

              </div>
            </div>
          </div>
        </div>
      </div>

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
            <li>
              <a href="#tab_default_3" data-toggle="tab">
                Most Followed </a>
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
