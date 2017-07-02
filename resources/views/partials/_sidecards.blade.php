@extends('modals.login-signup')
<div class="sidebar hidden-xs col-sm-3 col-sm-offset-1 ">
  <div class="profile">
    <a href="#"><img class="center-block" src="{{ asset('images/profile.jpg') }}" alt=""></a>
    <h4 style="text-align:center"><strong>Username</strong></h4>
  </div>
  <div class="row">
    <div class="captions col-xs-3 col-xs-offset-2">
      <p><span>Rank</span><p>
        <p><span>Points</span><p>
          <p><span>Medals</span><p>
          </div>
          <div class="captions-value col-xs-3 col-xs-offset-2">
            <p><span>#1</span><p>
              <p><span>987</span><p>
                <p><span>5</span><p>
                </div>
              </div>
              <div class="row">
                <div class="log col-xs-offset-1 col-xs-5">
                  <button type="button" class="btn btn-default" data-toggle="modal" data-target="#login-modal">Login</button>
                </div>
                <div class="signup  col-xs-6" style="padding-left:5px">
                  <button type="button" class="btn btn-default" data-toggle="modal" data-target="#signup-modal">Signup</button>
                </div>
              </div>


              {{--button for asking question--}}
              <div class="Q-button col-xs-12 m-t-30 m-b-30">
                <div class="row">
                  <a class="btn btn-primary center-block">Ask Question</a>
                </div>
              </div>
              {{--button for asking question ends here--}}

              {{--code for top members card begins here--}}
                <h4 style="text-align:center">Top-members</h4>
                @for($i=1;$i<=5;$i++)
                <div class="row m-t-5 m-b-5">
                  <div class="member-pic col-xs-4">
                    <img src="{{asset('images/profile.jpg')}}" alt="">
                  </div>
                  <div class="member-name col-xs-4 m-t-15">
                    <p>User{{$i}}</p>
                  </div>
                  <div class="member-points col-xs-4 m-t-15">
                  <p>{{$i*1234}}</p>
                </div>
                </div>
                @endfor
              {{--top-members ends here--}}
            </div>
            @section('form-modal')
            @endsection
