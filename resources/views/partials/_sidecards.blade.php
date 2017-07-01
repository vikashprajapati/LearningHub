@extends('modals.login-signup')
<div class="sidebar hidden-xs hidden-sm col-md-3 col-md-offset-1">
  <div class="profile">
    <a href="#"><img class="center-block" src="{{ asset('images/profile.jpg') }}" alt=""></a>
    <h4 style="text-align:center"><strong>Username</strong></h4>
  </div>
  <div class="row">
    <div class="captions col-md-3 col-md-offset-2">
      <p><span>Rank</span><p>
        <p><span>Points</span><p>
          <p><span>Medals</span><p>
          </div>
          <div class="captions-value col-md-3 col-md-offset-2">
            <p><span>#1</span><p>
              <p><span>987</span><p>
                <p><span>5</span><p>
                </div>
              </div>
              <div class="row">
                <div class="log col-sm-offset-2 col-sm-4">
                  <button type="button" class="btn btn-default" data-toggle="modal" data-target="#login-modal">Login</button>
                </div>
                <div class="signup  col-sm-4" style="padding-left:5px">
                  <button type="button" class="btn btn-default" data-toggle="modal" data-target="#signup-modal">Signup</button>
                </div>
              </div>
            </div>
              @section('form-modal')
              @endsection
              {{--button for asking question--}}
              <div class="Q-button hidden-xs hidden-sm col-md-3 col-md-offset-1">
                <div class="row">
                  <a class="btn btn-primary center-block">Ask Question</a>
                </div>
              </div>
              {{--button for asking question ends here--}}


              {{--code for top members card begins here--}}
              <div class="sidebar hidden-xs hidden-sm col-md-3 col-md-offset-1" style="float:right;">
                <span><h4 style="text-align:center">Top-members</h4></span>
                @for($i=1;$i<=5;$i++)
                <div class="row">
                  <div class="member-pic col-md-4">
                    <img src="{{asset('images/profile.jpg')}}" alt="">
                  </div>
                  <div class="col-md-4">User{{$i}}</div>
                  <div class="col-md-4">{{$i*1234}}</div>
                </div>
                @endfor
              </div>
              {{--tom-members ends here--}}
