@extends('/layouts/main')
@section('title','|post')
@section('content')

<!--stylesheets for texteditor and design  -->
<script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script>
<script src="js/typew.js"></script>
<script type="text/javascript">
bkLib.onDomLoaded(function() {
  new nicEditor({fullPanel : true}).panelInstance('thread');
});
</script>
<!-- end of stylesheets -->

<form method="POST" action="{{ route('posts.store') }}" >
  {{ csrf_field() }}
  <div class="container">
    <div class="panel panel-success">
      <div class="panel-heading">
        <h3 class="panel-title">Start a New Thread</h3>
      </div>

      <div class="panel-body">

        <label class="col-lg-3 control-label" name="title" margin-bottom:"50px">Topic Title:</label>
        <div class="col-lg-9">
          <input class="form-control" name="title" placeholder="Write a suitable title of your query or discussion." type="text">
        </div>


    <div class="wrap m-t-50 m-b-50" style="width:100%">
    <textarea class="form-control" name="body" rows="10" id="thread" placeholder="Type your discussion here.." name="thread" style="width:100%;height:200px;"></textarea>
  </div>
<div class="alert alert-info alert-dismissable">
  <a class="panel-close close" data-dismiss="alert">×</a>
<i class="fa fa-newspaper-o "></i>
Choose the appropriate tags for your thread.
</div>

  <form class="form-horizontal" role="form">

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
<div class="col-lg-8">
<input type="checkbox" name="date" value="date"> Include Date/Time<br>
</div>
<div class="col-lg-8">
  <input type="checkbox" name="notif" value="notif"> Show me Notifications for this thread<br>
  </div>

</form>


<div class="col-md-8" >
  <button class="btn btn-primary" data-toggle="modal" data-target=".publish" style="left" type="submit" >
    Publish<span class="fa fa-paper-plane" aria-hidden="true"></span></button>

  <button class="btn btn-warning" data-toggle="modal" data-target=".preview" type="button" style="left" >
    Preview<span class="fa fa-eye" aria-hidden="true"></span></button>
  <div class="modal fade preview" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        Your preview of the thread is:
      </div>
    </div>
  </div>
  <input class="btn btn-success" value="Save as Draft" type="button">
</div>
</div>
</div>
  </div>
</form>
@endsection
