
<head>
		<!-- Styles -->
		<link rel="stylesheet" type="text/css" href="css/jquery-comments.css">
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{ mix('css/app.css') }}">
		<!-- Data -->
		<script type="text/javascript" src="data/comments-data.js"></script>

		<!-- Libraries -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.textcomplete/1.8.0/jquery.textcomplete.js"></script>
		<script type="text/javascript" src="js/jquery-comments.js"></script>

		<style type="text/css">
			body {
				padding: 20px;
				margin: 0px;
				font-size: 14px;
				font-family: "Arial", Georgia, Serif;
			}
		</style>

		<!-- Init jquery-comments -->
		<script type="text/javascript">
			$(function() {
				var saveComment = function(data) {
					// Convert pings to human readable format
					$(data.pings).each(function(index, id) {
						var user = usersArray.filter(function(user){return user.id == id})[0];
						data.content = data.content.replace('@' + id, '@' + user.fullname);
					});
					return data;
				}
				$('#comments-container').comments({
					profilePictureURL: 'https://viima-app.s3.amazonaws.com/media/user_profiles/user-icon.png',
					currentUserId: 1,
					roundProfilePictures: true,
					textareaRows: 1,
					enableAttachments: true,
					enableHashtags: true,
					enablePinging: true,
					getUsers: function(success, error) {
						setTimeout(function() {
							success(usersArray);
						}, 500);
					},
					getComments: function(success, error) {
						setTimeout(function() {
							success(commentsArray);
						}, 500);
					},
					postComment: function(data, success, error) {
						setTimeout(function() {
							success(saveComment(data));
						}, 500);
					},
					putComment: function(data, success, error) {
						setTimeout(function() {
							success(saveComment(data));
						}, 500);
					},
					deleteComment: function(data, success, error) {
						setTimeout(function() {
							success();
						}, 500);
					},
					upvoteComment: function(data, success, error) {
						setTimeout(function() {
							success(data);
						}, 500);
					},
					uploadAttachments: function(dataArray, success, error) {
						setTimeout(function() {
							success(dataArray);
						}, 500);
					},
				});
			});
		</script>
</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	  <div class="head-cover">
	    <img style="float:left" src="/images/t_hub_logo.png" height= "120px" width="120px">
	    <div class="logo-text">The<br>Learning<br>Hub</div>
	  </div>
	  <div class="container">
	    <div class="nav-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	        <span class="sr-only">Toogle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	    </div>
	    <div class="navbar-collapse collapse">
	      <ul class="nav navbar-nav navbar-left">
	        <li><a class="active" href="/"><span class="glyphicon glyphicon-home"></span></a></li>
	        <li><a href="/forum"><span class="fa fa-pencil-square-o"></span></a></li>
	        <li><a href="/resources"><span class="fa fa-download"></span></a></li>
	        <li><a href="/store"><span class="fa fa-shopping-cart"></span></a></li>
	        <li><a href="/qa"><span class="fa fa-quora"></span></a></li>
	      </ul>
	      <ul class="nav navbar-nav navbar-right">
	        <li><form>
	          <div class="form-group has-feedback">
	            <input id="search" type="text" class="form-control" placeholder="Search" />
	            <button type="submit" class="form-control-feedback"><span class="fa fa-search"></span></a>
	            </div>
	          </form>
	        </li>
	          <li><a href="/create post"><span class="fa fa-plus-circle"></span></a></li>
	          <li><a href="/notifications"><span class="fa fa-bell badge">5</span><!--<span id="ab-pending-notifications" class="pending-count alert">5</span>--></a></li>
	          <li><a href="/profile"><span class="fa fa-user-circle"></span></a></li>
	          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"><span class="glyphicon glyphicon-menu-down"></span></a>
	            <ul class="dropdown-menu">
	              <li><a href="#">Activity Log</a></li>
	              <li><a href="#">settings</a></li>
	              <li><a href="#">blah blah blah</a></li>
	              <li role="separator" class="divider"></li>
	              <li><a href="#">Logout</a></li>
	            </ul>
	          </li>
	        </ul>
	      </div>
	    </div>
	  </div>
	</nav>
<div class="header-space">
	<h1>Question :</h1>
	<h2>What are the important parts of a computer?</h2>
</div>
		<div id="comments-container"></div>

</body>
