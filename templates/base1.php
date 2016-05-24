
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Friends With Ratings&trade;</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
			<li><a href="About.php" class="tabs">About</a></li>
            <li><a href="#" class="tabs" data-toggle="modal" data-target="#myModal">Feedback</a></li>
            <li class="dropdown"><a href="#" class="dropdown-toggle tabs" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Hello, "Name" <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Account</a></li>
                <li><a href="#">Settings</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Fed Up Already ?</li>
                <li><a href="#"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a></li>
              </ul>
            </li>
          </ul>
		  <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>
	
	
			<!-- Modal -->
			<div class="modal fade" id="myModal" role="dialog">
				<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Feedback</h4>
					</div>
					<div class="modal-body">
					<p>&nbsp;Please suggest us ways we can improve this site or point out any bugs you find. We are always learning and happy to help :)</p>
					<textarea rows="4" cols="50" value="Enter your message..."></textarea>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-success" data-toggle="collapse" data-target="#submitted" 
            data-dismiss="modal">Send</button>
					</div>
				</div>
				</div>
			</div>

      <div id="submitted" class="collapse">
        
            <div class="alert alert-success fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <form class="feedback" >Feedback Submitted Successfully</form>
            </div>
      </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 navbar navbar-inverse sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="Dashboard.php"> Dashboard <span class="sr-only">(current)</span></a></li>
          </ul>
          <ul class="nav nav-sidebar">
			<li><h4>MOVIES</h4></li>
            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i>&nbsp;Top Rated</a></li>
            <li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;Recent Additions</a></li>
            <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i>&nbsp;My Favourites</a></li>
            <li><a href="#"><i class="fa fa-share" aria-hidden="true"></i>&nbsp;Submit Movie Requests</a></li>
          </ul>
          <ul class="nav nav-sidebar">
			<li><h4>Admin Privileges</h4></li>		  
            <li><a href="#"><i class="fa fa-plus-square" aria-hidden="true"></i>&nbsp;Add Movies</a></li>
            <li><a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i><i class="fa fa-user-times" aria-hidden="true"></i>&nbsp;Manage Users</a></li>
          </ul>
        </div>
		
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">