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

			/* Style the buttons that are used to open and close the accordion panel */
			button.accordion {
			    background-color: #eee;
			    color: #444;
			    cursor: pointer;
			    padding: 18px;
			    width: 100%;
			    text-align: left;
			    border: none;
			    outline: none;
			    transition: 0.4s;
			}

			/* Add a background color to the button if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) */
			button.accordion.active, button.accordion:hover {
			    background-color: #ddd;
			}

			/* Style the accordion panel. Note: hidden by default */
			div.panel {
			    padding: 0 18px;
			    background-color: white;
			    display: none;
			}

			/* The "show" class is added to the accordion panel when the user clicks on one of the buttons. This will show the panel content */
			div.panel.show {
			    display: block !important;
			}
            
            div.panel {
		    padding: 0 18px;
		    background-color: white;
		    max-height: 0;
		    overflow: hidden;
		    transition: 0.6s ease-in-out;
		    opacity: 0;
		    }

		    div.panel.show {
		    opacity: 1;
		    max-height: 500px; /* Whatever you like, as long as its more than the height of the content (on all screen sizes) */
		    }

		    button.accordion:after {
		    content: '\02795'; /* Unicode character for "plus" sign (+) */
		    font-size: 13px;
		    color: #777;
		    float: right;
		    margin-left: 5px;
			}

			button.accordion.active:after {
			    content: "\2796"; /* Unicode character for "minus" sign (-) */
			}

			.container{
				width: 350px;
			}
		</style>

			</head>	

		<body onload="myFunction()" style="margin:0;">
<?php include 'templates/base1.php'; ?>
				
		          <h1 class="page-header">Settings</h1>
		          

					<div style="display:none;" id="myDiv" class="animate-bottom">

						<button class="accordion">Change Name</button>
							<div class="panel">
							    <div class="container">
								  <h4>New Name</h4>
							        <label for="name" class="sr-only">New Name</label>
							        <input type="text" name="name" class="form-control" value='<?php if(isset($_POST['name']))echo $_POST['name']?>' placeholder="Enter your New Name" required autofocus>
							        <br>
							        <button type="button" class="btn btn-success">Save Changes</button>

						        </div>
							</div>

						<button class="accordion">Change Username</button>
							<div onload="myfunction()" class="panel">
							    <div class="container">
								  <h4>New UserName</h4>
							        <label for="userName" class="sr-only">UserName</label>
							        <input type="text" name="userName" class="form-control" value='<?php if(isset($_POST['userName']))echo $_POST['userName']?>' placeholder="Enter your New UserName" required autofocus>
							        <br>
							       <button type="button" class="btn btn-success">Save Changes</button> 
						        </div>
							</div>

		  				<button class="accordion">Change Password</button>
							<div class="panel">
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
							       <button type="button" class="btn btn-success">Save Changes</button> 
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

			/* Toggle between adding and removing the "active" and "show" classes when the user clicks on one of the "Section" buttons. The "active" class is used to add a background color to the current button when its belonging panel is open. The "show" class is used to open the specific accordion panel */
			var acc = document.getElementsByClassName("accordion");
			var i;

			for (i = 0; i < acc.length; i++) {
			    acc[i].onclick = function(){
			        this.classList.toggle("active");
			        this.nextElementSibling.classList.toggle("show");
			    }
			}
		</script>

  		
<?php include 'templates/base2.php'; ?>
	</body>
</html>