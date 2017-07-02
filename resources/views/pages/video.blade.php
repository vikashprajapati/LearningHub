
@extends('/layouts/main')
@section('title','|post')
@section('content')
@endsection
<<<<<<< HEAD
<<<<<<< HEAD
<!--styles for videos  -->
<link rel="stylesheet" href="{{ URL::asset('css/video.css') }}" />
<!--styles for videos ends  -->
<div class="container header-space">
  <div class="page-header">
    <h2>Videos Gallery</h2>
  </div>
  <div class="row p-t-10">
    @foreach($subjects as $subject)
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 card">
      <a href="#">
        <div class="thumbnail" >
          <img src="{{ $subject['image'] }}" alt="#">
          <div class="caption">
            <h2>
              {{ $subject['name'] }}
            </h2>
            <hr>
=======

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
  integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


  <link rel="stylesheet" href="{{ URL::asset('css/video.css') }}" />
  <link rel="stylesheet" href="{{ asset ('css/font-awesome.css')}}">

  <div class="container">
	<div class="row">
	    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 card">
    		<a href="#">
    		<div class="thumbnail">
    		    <img src="/images/botany.jpg" alt="#">
    			<div class="caption">
    				<h2>
    					Botany
    				</h2>
    				<hr>
    				<p>
    					Contains videos related to Botany.
    				</p>
    				<button class="btn btn-default" role="button">Click here</button>
    			</div>
    		</div>
    		</a>
    	</div>
    	<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 card">
    		<a href="#">
    		<div class="thumbnail">
    		    <img src="/images/maths.jpg" alt="#">
    			<div class="caption">
    				<h2>
    					Mathematics

    				</h2>
    				<hr>
    				<p>
                Contains videos related to Mathematics and it's tutorials.    				</p>
    				<button class="btn btn-default" role="button">View Videos</button>
    			</div>
    		</div>
    		</a>
    	</div>
    	<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 card">
    		<a href="#">
    		<div class="thumbnail">
    		    <img src="/images/tech.jpg" alt="#">
    			<div class="caption">
    				<h2>
    					Computer Science

    				</h2>
    				<hr>
    				<p>
             Contains videos related to Computer Science.    				</p>
    				<button class="btn btn-default" role="button">View Videos</button>
    			</div>
    		</div>
    		</a>
    	</div>
    	<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 card">
    		<a href="#">
    		<div class="thumbnail">
    		    <img src="/images/electro.jpg" alt="#">
    			<div class="caption">
    				<h2>
    					Electronics
    				</h2>
    				<hr>
>>>>>>> parent of 0f97284... connection done
            <p>
Contains videos related to Electronics. 				</p>
    				<button class="btn btn-default" role="button">View Videos</button>
    			</div>
    		</div>
    		</a>
    	</div>
	</div>

  <div class="row">
	    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 card">
    		<a href="#">
    		<div class="thumbnail">
    		    <img src="/images/bio.jpg" alt="#">
    			<div class="caption">
    				<h2>
    					Economics
    				</h2>
    				<hr>
    				<p>
    					Contains videos related to Biology including Botany, Zoology and Life Sciences.
    				</p>
    				<button class="btn btn-default" role="button">Click here</button>
    			</div>
    		</div>
    		</a>
    	</div>

      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 card">
       <a href="#">
       <div class="thumbnail">
           <img src="/images/chemistry.jpg" alt="#">
         <div class="caption">
           <h2>
             Chemistry
           </h2>
           <hr>
           <p>
             Contains videos related to Chemistry
           </p>
           <button class="btn btn-default" role="button">Click here</button>
         </div>
       </div>
       </a>
     </div>

     <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 card">
       <a href="#">
       <div class="thumbnail">
           <img src="/images/physics.jpeg" alt="#">
         <div class="caption">
           <h2>
             Physics
           </h2>
           <hr>
           <p>
             Contains videos related to Physics.
           </p>
           <button class="btn btn-default" role="button">Click here</button>
         </div>
       </div>
       </a>
     </div>

     <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 card">
       <a href="#">
       <div class="thumbnail">
           <img src="/images/zoo.jpeg" alt="#">
         <div class="caption">
           <h2>
             Zoology
           </h2>
           <hr>
           <p>
             Contains videos related to Zoology.
           </p>
           <button class="btn btn-default" role="button">View Video</button>
         </div>
       </div>
       </a>
     </div>


    </div>
<<<<<<< HEAD
    @endforeach
  </div>
=======

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
  integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


  <link rel="stylesheet" href="{{ URL::asset('css/video.css') }}" />
  <link rel="stylesheet" href="{{ asset ('css/font-awesome.css')}}">

  <div class="container">
	<div class="row">
	    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 card">
    		<a href="#">
    		<div class="thumbnail">
    		    <img src="/images/botany.jpg" alt="#">
    			<div class="caption">
    				<h2>
    					Botany
    				</h2>
    				<hr>
    				<p>
    					Contains videos related to Botany.
    				</p>
    				<button class="btn btn-default" role="button">Click here</button>
    			</div>
    		</div>
    		</a>
    	</div>
    	<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 card">
    		<a href="#">
    		<div class="thumbnail">
    		    <img src="/images/maths.jpg" alt="#">
    			<div class="caption">
    				<h2>
    					Mathematics

    				</h2>
    				<hr>
    				<p>
                Contains videos related to Mathematics and it's tutorials.    				</p>
    				<button class="btn btn-default" role="button">View Videos</button>
    			</div>
    		</div>
    		</a>
    	</div>
    	<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 card">
    		<a href="#">
    		<div class="thumbnail">
    		    <img src="/images/tech.jpg" alt="#">
    			<div class="caption">
    				<h2>
    					Computer Science

    				</h2>
    				<hr>
    				<p>
             Contains videos related to Computer Science.    				</p>
    				<button class="btn btn-default" role="button">View Videos</button>
    			</div>
    		</div>
    		</a>
    	</div>
    	<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 card">
    		<a href="#">
    		<div class="thumbnail">
    		    <img src="/images/electro.jpg" alt="#">
    			<div class="caption">
    				<h2>
    					Electronics
    				</h2>
    				<hr>
            <p>
Contains videos related to Electronics. 				</p>
    				<button class="btn btn-default" role="button">View Videos</button>
    			</div>
    		</div>
    		</a>
    	</div>
	</div>

  <div class="row">
	    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 card">
    		<a href="#">
    		<div class="thumbnail">
    		    <img src="/images/bio.jpg" alt="#">
    			<div class="caption">
    				<h2>
    					Economics
    				</h2>
    				<hr>
    				<p>
    					Contains videos related to Biology including Botany, Zoology and Life Sciences.
    				</p>
    				<button class="btn btn-default" role="button">Click here</button>
    			</div>
    		</div>
    		</a>
    	</div>

      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 card">
       <a href="#">
       <div class="thumbnail">
           <img src="/images/chemistry.jpg" alt="#">
         <div class="caption">
           <h2>
             Chemistry
           </h2>
           <hr>
           <p>
             Contains videos related to Chemistry
           </p>
           <button class="btn btn-default" role="button">Click here</button>
         </div>
       </div>
       </a>
     </div>

     <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 card">
       <a href="#">
       <div class="thumbnail">
           <img src="/images/physics.jpeg" alt="#">
         <div class="caption">
           <h2>
             Physics
           </h2>
           <hr>
           <p>
             Contains videos related to Physics.
           </p>
           <button class="btn btn-default" role="button">Click here</button>
         </div>
       </div>
       </a>
     </div>

     <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 card">
       <a href="#">
       <div class="thumbnail">
           <img src="/images/zoo.jpeg" alt="#">
         <div class="caption">
           <h2>
             Zoology
           </h2>
           <hr>
           <p>
             Contains videos related to Zoology.
           </p>
           <button class="btn btn-default" role="button">View Video</button>
         </div>
       </div>
       </a>
     </div>


    </div>
>>>>>>> 9b7dc8e8c30750cb9d5b5642b221c22ce236a940
=======
>>>>>>> parent of 0f97284... connection done
</div>
