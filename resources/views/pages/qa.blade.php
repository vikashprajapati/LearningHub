@extends('/layouts/main')
@section('title','|post')
@section('content')
@endsection
  


  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
  integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="js/qa.js"></script>


  <link rel="stylesheet" href="{{ URL::asset('css/qa.css') }}" />
  <link rel="stylesheet" href="{{ asset ('css/font-awesome.css')}}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

  <div class="container" style="padding-top: 200px;">
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
    <div class="form-group">
    <div class="wrap">
    <textarea class="form-control" rows="5" id="ques" placeholder="Type your question here.."></textarea>
  </div>
  </div>
    <span id="text_counter"></span>
    <button type="submit" class="btn btn-danger" data-toggle="modal" data-target=".ask">Ask</button>
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

</div>

<div class="container">
<div class="row">
		<div class="col-md-12">


			<div class="tabbable-panel">
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
    <div>
  <div>
    <div class="card">
<div class="container">

<h4><b>What is algae and what are it's functions?</b></h4>
<p>Algae is formed due to the eutrophication..</p>
<span class="fa fa-clock-o">
  6 minutes ago..
</span>
<span class="fa fa-comments">
  36 answers
</span>
<span class="fa fa-mortar-board">
 Helped 97
</span>
<span class="fa fa-eye">
  108 views
</span>

<span class="fa fa-send">
  19 shares
</span>
<a href="#" class="next">Read full.. &raquo;</a>
</div>
</div>

<div class="card">
<div class="container">
<h4><b>How is Python as a programming language??</b></h4>
<p>To be very fair..</p>
<span class="fa fa-clock-o">
  6 minutes ago..
</span>
<span class="fa fa-comments">
  36 answers
</span>
<span class="fa fa-mortar-board">
 Helped 97
</span>
<span class="fa fa-eye">
  108 views
</span>
<span class="fa fa-send">
  19 shares
</span>
<a href="#" class="next">Read full.. &raquo;</a>
</div>
</div>

<div class="card">
<div class="container">
<h4><b>Does anyone know about Col. Heindrich?</b></h4>
<p>Relatively unknown figure ,he was..</p>
<span class="fa fa-clock-o">
  6 minutes ago..
</span>
<span class="fa fa-comments">
  36 answers
</span>
<span class="fa fa-mortar-board">
 Helped 97
</span>
<span class="fa fa-eye">
  108 views
</span>
<span class="fa fa-send">
  19 shares
</span>
<a href="#" class="next">Read full.. &raquo;</a>
</div>
</div>

<div class="card">
<div class="container">
<h4><b>What is Project Ara?</b></h4>
<p>A discontinued project of Google..</p>
<span class="fa fa-clock-o">
  6 minutes ago..
</span>
<span class="fa fa-comments">
  36 answers
</span>
<span class="fa fa-mortar-board">
 Helped 97
</span>
<span class="fa fa-eye">
  108 views
</span>
<span class="fa fa-send">
  19 shares
</span>
<a href="#" class="next">Read full.. &raquo;</a>
</div>
</div>

<div class="card">
<div class="container">
<h4><b>Who was martyred during the Sino war?</b></h4>
<p>A lot of people..</p>
<span class="fa fa-clock-o">
  6 minutes ago..
</span>
<span class="fa fa-comments">
  36 answers
</span>
<span class="fa fa-mortar-board">
 Helped 97
</span>
<span class="fa fa-eye">
  108 views
</span>
<span class="fa fa-send">
  19 shares
</span>
<a href="#" class="next">Read full.. &raquo;</a>
</div>
</div>
