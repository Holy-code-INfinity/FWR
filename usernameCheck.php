<?php 
if(!($_SERVER["REQUEST_METHOD"] == "POST")){
	echo 0;
	header('location:dashboard.php');
	die;
}

include('session.php');
include('config.php');  

	$newUsername=$_POST['newUsername'];
	$currId=$_SESSION['id'];
	/* Check UserName Availability */
		$count = mysqli_num_rows(mysqli_query($db,"SELECT id FROM users WHERE username = '$newUsername' and id!='$currId'"));
		if($count==0){
			echo 1;
		}
		else{
			echo 0;
		}

mysqli_close($db);
?>