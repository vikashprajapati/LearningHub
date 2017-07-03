@extends('/layouts/main')
@section('title','|Resources')
@section('content')



  <!-- store offers carousel -->
<div id="offers-carousel" class="carousel slide" data-ride="carousel"  style="margin-top:180px;">

  <!--indicators of active photo  -->
  <ol class="carousel-indicators">
  <li data-target="offers-carousel" data-slide-to:"0" class="active"></li>
  <li data-target="offers-carousel" data-slide-to:"1"></li>
  <li data-target="offers-carousel" data-slide-to:"2"></li>
  <li data-target="offers-carousel" data-slide-to:"3"></li>
  <li data-target="offers-carousel" data-slide-to:"4"></li>
  </ol>


  <!--carousel content  -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="{{ asset('images/a.jpg') }}" alt="lamborghini">
      <div class="carousel-caption">
        <h3>Lamborghini</h3>
      </div>
    </div>
    <div class="item">
      <img src="{{ asset('images/b.jpg') }}" alt="lamborghini">
      <div class="carousel-caption">
        <h3>Lamborghini</h3>
      </div>
    </div>
    <div class="item">
      <img src="{{ asset('images/c.jpg') }}" alt="lamborghini">
      <div class="carousel-caption">
        <h3>Lamborghini</h3>
      </div>
    </div>
    <div class="item">
      <img src="{{ asset('images/d.jpg') }}" alt="lamborghini">
      <div class="carousel-caption">
        <h3>Lamborghini</h3>
      </div>
    </div>
    <div class="item">
      <img src="{{ asset('images/e.jpg') }}" alt="lamborghini">
      <div class="carousel-caption">
        <h3>Lamborghini</h3>
      </div>
    </div>
  </div>


  <!--carousel controls  -->
  <a href="#offers-carousel" class="left carousel-control" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">prev</span>
  </a>
  <a href="#offers-carousel" class="right carousel-control" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">next</span>
  </a>

</div>

<div class="container" style="padding-right:25px;padding-left:25px;">
<!-- jumbotron for product subject -->
<div class="jumbotron">
  @for($j=1;$j<=3;$j++)
      <div class="row">
        @for($i=1;$i<=3;$i++)
        <div class="col-sm-3 col-md-4">
          <div class="topic-box thumbnail">
            <img src="{{ asset('images/r3.png') }}"alt="">
            <div class="Captions text-center">
              <h4>product{{$i*$j}}</h4>
              <h5>sale sale sale</h5>
            </div>
          </div>
        </div>
        @endfor
      </div>
      @endfor
    </div>
</div>
