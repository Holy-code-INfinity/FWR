<?php 
if(!($_SERVER["REQUEST_METHOD"] == "POST")){
	header('location:dashboard.php');
	die;
}

include('session.php');
include('config.php');  
$userID = $_SESSION['id'];

if($_POST['set']==1){
	$newName=$_POST['newName'];
	$db->query("UPDATE `users` SET `name` = '$newName' WHERE `users`.`id` = $userID;");
}  

else if($_POST['set']==2){
	$newUsername=$_POST['newUsername'];
	
	if(mysqli_num_rows(mysqli_query($db,"SELECT id FROM users WHERE username = '$newUsername' and id!='$userID'"))!=0){
		exit;
	}
	
	$db->query("UPDATE `users` SET `username` = '$newUsername' WHERE `users`.`id` = $userID;");
	$_SESSION['login_user']=$newUsername;
	echo "<span style='color:green;'><i class='fa fa-check' aria-hidden='true'></i>UPDATED! Remember The UserName...You'll need it!</span>";
}

else if($_POST['set']==3){
	$newPassword=$_POST['newPassword'];
	$currPassword=$_POST['currPassword'];
	if(mysqli_num_rows(mysqli_query($db,"SELECT id from users where id='$userID' and password='$currPassword'"))==0){
		echo "<span style='color:darkred'><i class='fa fa-exclamation-triangle' aria-hidden='true'></i>&nbsp;WRONG PASSWORD! Someone is getting a little forgetful,huh?</span>";
		exit;
	}
	$db->query("UPDATE `users` SET `password` = '$newPassword' WHERE `users`.`id` = $userID");
	echo "<span style='color:green'><i class='fa fa-check' aria-hidden='true'></i>&nbsp;PASSWORD CHANGED! Hush...It will be our little secret ;)</span>";
}

mysqli_close($db);
?>