<!DOCTYPE html>
<html lang="en">
	<head>
<?php include 'templates/commonHead.php'; ?>
		<title>F.W.R.</title>
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
	<style type="text/css">

				/* Center the loader */
			/* Add animation to "page content" */
			.animate-bottom {
			  position: relative;
			  -webkit-animation-name: animatebottom;
			  -webkit-animation-duration: 1s;
			  animation-name: animatebottom;
			  animation-duration: 1s
			}

			@-webkit-keyframes animatebottom {
			  from { bottom:-100px; opacity:0 } 
			  to { bottom:0px; opacity:1 }
			}

			@keyframes animatebottom { 
			  from{ bottom:-100px; opacity:0 } 
			  to{ bottom:0; opacity:1 }
			}

			#myDiv {
			  display: none;
			  text-align: center;
			  
			}

		    .container{
		    	
		    	width :350px;
		    }

            .panel,.panel-default{
            	background: #d7e3fa ;
            	
            }
		</style>

			</head>	

	<body onload="myFunction()" style="margin:0;">
<?php include 'templates/base1.php'; ?>
		
          <h1 class="page-header">Settings</h1>
          <div style="display:none;" id="myDiv" class="animate-bottom">

			 <div class="panel-group" id="accordion">
			    <div class="panel panel-primary">
			      <div class="panel-heading">
			        <h4 class="panel-title">
			          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Change Name</a>
			        </h4>
			      </div>
			      <div id="collapse1" class="panel-collapse collapse in">
			        <div class="panel-body">
			        <div class="container">
                  	  <h4>New Name</h4>
                      <label for="name" class="sr-only">New Name</label>
                      <input type="text" name="name" class="form-control" value='<?php if(isset($_POST['name']))echo $_POST['name']?>' placeholder="Enter your New Name" required autofocus>
                      <br>
                      <button type="button" class="btn btn-success">Save Changes</button>

                    </div>
			        </div>
			      </div>
			    </div>
			    <div class="panel panel-primary">
			      <div class="panel-heading">
			        <h4 class="panel-title">
			          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Change Username</a>
			        </h4>
			      </div>
			      <div id="collapse2" class="panel-collapse collapse">
			        <div class="panel-body">
                       <div class="container">
	                  	  <h4>New UserName</h4>
	                      <label for="userName" class="sr-only">UserName</label>
	                      <input type="text" name="userName" class="form-control" value='<?php if(isset($_POST['userName']))echo $_POST['userName']?>' placeholder="Enter your New UserName" required autofocus>
	                      <br>
                     <button type="button" class="btn btn-success">Save Changes</button> 
                    </div>
			        </div>
			      </div>
			    </div>
			    <div class="panel panel-primary">
			      <div class="panel-heading">
			        <h4 class="panel-title">
			          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Change Password</a>
			        </h4>
			      </div>
			      <div id="collapse3" class="panel-collapse collapse">
			        <div class="panel-body">
						<div class="container">
		                  <label for="password" class="sr-only">Current Password</label>
		                  <h4>Current Password</h4>
		                      <input type="password" name="password1" id="password1" class="form-control" value='<?php if(isset($_POST['password1']))echo $_POST['password1']?>' placeholder="Enter your Current Password" required>

		                    <label for="password" class="sr-only">New Password</label>
		                    <h4>New Password</h4>
		                      <input type="password" name="password2" id="password1" class="form-control" value='<?php if(isset($_POST['password2']))echo $_POST['password2']?>' placeholder="Enter your New Password" required>

		                      <h4>Confirm New Password</h4>
		                      <label for="inputPassword" class="sr-only">Confirm New Password</label>
		                      <input type="password" name="password3" class="form-control" value='<?php if(isset($_POST['password3']))echo $_POST['password3']?>' placeholder="Confirm your New Password" required>
		                      <br>
		                     <button type="button" class="btn btn-success">Change Password</button> 
		                  </div>
			        </div>
			      </div>
			    </div>
			  </div> 	
				 	
		  </div>

       
		<script>
			var myVar;

			function myFunction() {
			    myVar = setTimeout(showPage, 2000);
			}

			function showPage() {
			  document.getElementById("myDiv").style.display = "block";
			}
            
            
			</script>

  		
<?php include 'templates/base2.php';?>

	</body>
</html>