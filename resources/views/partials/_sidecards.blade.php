<div class="sidebar hidden-xs col-sm-3 m-t-40">
  <div class="profile">
    <h4 class="card-name text-center">Your Profile</h4>
    <div class="profile-img">
      <a href="#"><img class="center-block" src="{{ asset('images/vk.jpg') }}" alt=""></a>
      <h5 style="text-align:center"><strong>Username</strong></h5>
    </div>
    <div class="row">
      <div class="captions col-xs-3 col-xs-offset-2">
        <h5><span>Rank</span><h5>
          <h5><span>Points</span><h5>
            <h5><span>Medals</span><h5>
            </div>
            <div class="captions-value col-xs-3 col-xs-offset-2">
              <h5><span>#1</span><h5>
                <h5><span>987</span><h5>
                  <h5><span>5</span><h5>
                  </div>
                </div>
              </div>

<div class="topmember m-t-50">
  {{--code for top members card begins here--}}
  <h4 class="card-name text-center">Top members</h4>
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
<div class="hots m-t-50">
<h4 class="card-name text-center">HOT Network Questions</h4>
<div class="questions m-t-10">
  <ul class="p-l-20">
    <li><h5>who is the President of India?</h5></li>
    <li><h5>who is the Founder of Social Campus?</h5></li>
    <li><h5>who is the Founder of The Learning Hub?</h5></li>
    <li><h5>what do you mean?</h5></li>
    <li><h5>why?</h5></li>
  </ul>
</div>
</div>
</div>
