<!DOCTYPE html>
<html lang="en">
	<head>
<?php 
	include 'templates/commonHead.php'; 
	if(!$_SESSION['admin']){
		header("location:dashboard.php");
		exit;
	}
	
	include('config.php');
	
	/* Get all users*/
	$sql = "SELECT * FROM users";
    $result = mysqli_query($db, $sql);
	mysqli_close($db);
?>
		<title>F.W.R. | Feedback</title>
		
    <!-- Custom styles for this template -->

	
	</head>

	<body>
<?php include 'templates/base1.php'; ?>
		
	<h1 class="page-header" style="font-family: 'Amaranth'; text-align: center;">Feedback</h1>
	
	
<?php include 'templates/base2.php'; ?>
	</body>
</html>