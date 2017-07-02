
@extends('/layouts/main')
@section('title','|post')
@section('content')
@endsection
<<<<<<< HEAD
<<<<<<< HEAD
=======

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
  integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

>>>>>>> parent of 0f97284... connection done
  <div id="particles-js"></div>
  <script src="particles.js"></script>




  <!-- Profile icon header-->

  <link rel="stylesheet" href="{{ URL::asset('css/profile.css') }}" />
<<<<<<< HEAD
=======

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
  integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  <div id="particles-js"></div>
  <script src="particles.js"></script>




  <!-- Profile icon header-->

  <link rel="stylesheet" href="{{ URL::asset('css/profile.css') }}" />
  <link rel="stylesheet" href="{{ asset ('css/font-awesome.css')}}">
>>>>>>> 9b7dc8e8c30750cb9d5b5642b221c22ce236a940
=======
  <link rel="stylesheet" href="{{ asset ('css/font-awesome.css')}}">
>>>>>>> parent of 0f97284... connection done


  <div class="col-lg-12 col-sm-12">
    <div class="card hovercard">
      <div class="card-background">
        <img class="card-bkimg" alt="" src="http://lorempixel.com/100/100/people/9/">
        <!-- http://lorempixel.com/850/280/people/9/ -->
      </div>
      <div class="useravatar">
        <img alt="" src="http://lorempixel.com/100/100/people/9/">
        <span class="label label-danger">#676</span>
      </div>
      <div class="card-info"> <span class="card-title">Emma Watson</span>

      </div>
    </div>

    <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
      <div class="btn-group" role="group">
        <button type="button" id="stars" class="btn btn-primary" href="#tab1" data-toggle="tab" role="tabpanel"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
          <div class="hidden-xs">Profile</div>
        </button>
      </div>
      <div class="btn-group" role="group">
        <button type="button" id="favorites" class="btn btn-default" href="#tab2" data-toggle="tab" role="tabpanel"><span class="glyphicon glyphicon-bell" aria-hidden="true"></span>
          <div class="hidden-xs">Notifications</div>
        </button>
      </div>
      <div class="btn-group" role="group">
        <button type="button" id="following" class="btn btn-default" href="#tab3" data-toggle="tab" role="tabpanel"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>
          <div class="hidden-xs">Settings</div>
        </button>
      </div>
    </div>

    <div class="well">
      <div class="tab-content">
        <div class="tab-pane fade in active" id="tab1" role="tabpanel">
          <h3>Welcome to the Profile Page</h3>

          <!--first profile panel-->

          <div class="panel panel-success">
            <div class="panel-heading">My Activity</div>
            <div class="panel-body">

              <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".point">
                Points <span class="badge">245</span>
              </button>
              <div class="modal fade point" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    You have asked 245 points Congrats!
                  </div>
                </div>
              </div>

              <button class="btn btn-primary" data-toggle="modal" data-target=".medal" type="button">
                Medals <span class="badge">14</span>
              </button>
              <div class="modal fade medal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    You have acquired 14 medals. They are:
                  </div>
                </div>
              </div>


              <!--Questions Asked Button-->
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".ques">Questions Asked</button>

              <div class="modal fade ques" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    You have asked 19 questions till now.
                  </div>
                </div>
              </div>
              <!--Threads Started button-->
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".thread">My Threads</button>
              <div class="modal fade thread" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    You have started 18 threads.
                  </div>
                </div>
              </div>

              <!--My Replies Button-->
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".replies">My Replies</button>
              <div class="modal fade replies" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    You have given 15 replies.
                  </div>
                </div>
              </div>

            </div>

          </div>


          <!--first profile panel ends-->

          <!--second profile panel starts-->

          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">My Account</h3>
            </div>
            <div class="panel-body">


              <div class="container" style="padding-top: 60px;">
                <h1 class="page-header">Edit Profile</h1>
                <div class="row">
                  <!-- left column -->
                  <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="text-center">
                      <img src="http://lorempixel.com/200/200/people/9/" class="avatar img-circle img-thumbnail" alt="avatar">
                      <h6>Upload a different photo...</h6>
                      <input type="file" class="text-center center-block well well-sm">
                    </div>
                  </div>
                  <!-- edit form column -->
                  <div class="col-md-8 col-sm-6 col-xs-12 personal-info">
                    <div class="alert alert-info alert-dismissable">
                      <a class="panel-close close" data-dismiss="alert">×</a>
                      <i class="fa fa-coffee"></i>
                      Make sure to click on <strong> Save changes </strong>.
                    </div>
                    <h3>Personal info</h3>
                    <form class="form-horizontal" role="form">
                      <div class="form-group">
                        <label class="col-lg-3 control-label">First name:</label>
                        <div class="col-lg-8">
                          <input class="form-control" value="Write your first name" type="text">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-lg-3 control-label">Last name:</label>
                        <div class="col-lg-8">
                          <input class="form-control" value="Write your last name" type="text">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-lg-3 control-label">Job(if other than student):</label>
                        <div class="col-lg-8">
                          <input class="form-control" value="" type="text">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-lg-3 control-label">Email:</label>
                        <div class="col-lg-8">
                          <input class="form-control" value="Type your valid email here:" type="text">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-lg-3 control-label">Time Zone:</label>
                        <div class="col-lg-8">
                          <div class="ui-select">
                            <select id="user_time_zone" class="form-control">
                              <option value="Pacific Time (US & Canada)">(GMT-08:00) Pacific Time (US & Canada)</option>
                              <option value="Arizona">(GMT-07:00) Arizona</option>
                              <option value="India" selected="selected">(GMT+05:30) India (Mirzapur)</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-3 control-label">Username:</label>
                        <div class="col-md-8">
                          <input class="form-control" value="" type="text">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-3 control-label">Password:</label>
                        <div class="col-md-8">
                          <input class="form-control" value="11111122333" type="password">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-3 control-label">Confirm password:</label>
                        <div class="col-md-8">
                          <input class="form-control" value="11111122333" type="password">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-3 control-label"></label>
                        <div class="col-md-8">
                          <input class="btn btn-primary" value="Save Changes" type="button">
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



        <div class="tab-pane fade in" id="tab2" role="tabpanel">
          <h3>Welcome to Notifications Page</h3>
        </div>



      <div class="tab-pane fade in" id="tab3" role="tabpanel">
        <h3>Welcome to Settings Page</h3>

        <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title">Privacy Settings</h3>
          </div>
            <div class="panel-body" >
              <div class="container" style="padding-top: 60px;">

              <img src="/images/Capture.png" style="left" height= "120px" width="120px" text-align> We care about your privacy. :) Change here who can see your personal preferences.
              <div class="alert alert-info alert-dismissable">
                <a class="panel-close close" data-dismiss="alert">×</a>
                <i class="fa fa-coffee"></i>
                Make sure to click on <strong> Save changes </strong>.
              </div>
                <form class="form-horizontal" role="form">
              <div class="form-group">
                <label class="col-md-3 control-label">Who do you allow to be able to see your PROFILE:</label>
                  <label class="radio-inline">
                    <input type="radio" name="optradio">Just You
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="optradio">Public
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="optradio">Your followers
                  </label>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Who can ask you to reply to a question:</label>
                  <label class="radio-inline">
                    <input type="radio" name="optradio">Anyone
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="optradio">Your followers
                  </label>
              </div>
             <div class="form-group">
              <label class="col-md-3 control-label">Who can see your threads and questions:</label>
                <label class="radio-inline">
                  <input type="radio" name="optradio">Anyone
                </label>
                <label class="radio-inline">
                  <input type="radio" name="optradio">Your followers
                </label>
            </div>
           <div class="form-group">
              <label class="col-md-3 control-label"></label>
              <div class="col-md-8">
                <input class="btn btn-primary" value="Save Changes" type="button">
                <span></span>
                <input class="btn btn-default" value="Cancel" type="reset">
              </div>
            </div>
          </form>




            </div>
            </div>
            </div>


            <div class="panel panel-danger">
              <div class="panel-heading">
                <h3 class="panel-title">Account Settings</h3>
              </div>
              <div class="panel-body">
                <div class="container" style="padding-top: 60px;">

                <img src="/images/Capture3.png" style="left" height= "120px" width="120px" text-align> Change your Strict Account Settings ,here.
                <div class="alert alert-danger alert-dismissable">
                  <a class="panel-close close" data-dismiss="alert">×</a>
                  <i class="glyphicon glyphicon-exclamation-sign"></i>
                  Make sure to read <strong>Documentation</strong> before clicking on <strong> Delete Account </strong>.
                </div>
                 <form class="form-horizontal" role="form">
                   <div class="form-group">
                      <label class="col-md-3 control-label"></label>
                      <div class="col-md-8">
                        <input class="btn btn-danger" value="Delete Account" type="button">
                        <button class="btn btn-primary" data-toggle="modal" data-target=".docum" type="button" style="left">
                          Documentation
                        </button>
                        <div class="modal fade medal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                          <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                              Don't delete your account.
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
                    <div class="form-group">
                        <div class="col-md-8">
                      <button class="btn btn-warning" data-toggle="modal" data-target=".block" type="button" style="left" >
                        Blocked Users<span class="glyphicon glyphicon-ban-circle" aria-hidden="true"></span><span class="badge">16</span>
                      </button>
                      <div class="modal fade medal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                        <div class="modal-dialog modal-lg" role="document">
                          <div class="modal-content">
                            These are the blocked users:
                          </div>
                        </div>
                      </div>
                      </div>
                    </div>
                  </form>


                </div>
          </div>
          </div>

          <div class="panel panel-success">
            <div class="panel-heading">
              <h3 class="panel-title">Notification Settings</h3>
            </div>
            <div class="panel-body">
              <div class="container" style="padding-top: 60px;">

              <img src="/images/Capture2.png" style="left" height= "120px" width="120px" text-align> Change your Notification Settings ,here.
              <form class="form-horizontal" role="form">
            <div class="form-group">
              <label class="col-md-3 control-label">Who would you like to see notifications from:</label>
                <label class="radio-inline">
                  <input type="radio" name="optradio">Public
                </label>
                <label class="radio-inline">
                  <input type="radio" name="optradio">Your followers
                </label>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label">Do you want to get email alerts?:</label>
                <label class="radio-inline">
                  <input type="radio" name="optradio">Yes
                </label>
                <label class="radio-inline">
                  <input type="radio" name="optradio">No
                </label>
            </div>
            <div class="form-group">
               <label class="col-md-3 control-label"></label>
               <div class="col-md-8">
                 <input class="btn btn-success" value="Save Changes" type="button">
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

<!-- Profile icon header ends-->
