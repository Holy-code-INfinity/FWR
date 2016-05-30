<!DOCTYPE html>
<html lang="en">
	<head>
<?php include 'templates/commonHead.php'; ?>
			<title>F.W.R.</title>
		<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">

		<!-- Custom styles for this template -->
		<link href="css/settings.css" rel="stylesheet">

	</head>	

	<body onload="myFunction()" style="margin:0;">
<?php include 'templates/base1.php'; ?>
		
		  <h1 class="page-header">Settings</h1>
  

	<div style="display:none;" id="myDiv" class="animate-bottom">
		<button class="accordion">Change Password</button>
			<div class="panel">
					<label for="password" class="sr-only">Current Password</label>
					<h4>Current Password</h4>
					<input type="password" name="password1" id="password1" class="form-control" value='<?php if(isset($_POST['password1']))echo $_POST['password1']?>' placeholder="Enter your Current Password" required>

					<label for="password" class="sr-only">New Password</label>
					<h4>New Password</h4>
					<input type="password" name="password2" id="password1" class="form-control" value='<?php if(isset($_POST['password2']))echo $_POST['password2']?>' placeholder="Enter your New Password" required>

					<h4>Confirm New Password</h4>
					<label for="inputPassword" class="sr-only">Confirm New Password</label>
					<input type="password" name="password3" class="form-control" value='<?php if(isset($_POST['password3']))echo $_POST['password3']?>' placeholder="Confirm your New Password" required>
			</div>

		<button class="accordion">Change Name</button>
			<div class="panel">
			  <p>Lorem ipsum...</p>
			</div>

		<button class="accordion">Change Username</button>
			<div class="panel">
			  <p>Lorem ipsum...</p>
			</div>

	</div>

<?php include 'templates/base2.php'; ?>
<script>
	var myVar;

	function myFunction() {
		myVar = setTimeout(showPage, 250);
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

	</body>
</html>