<?php
include('session.php');

if($_SERVER["REQUEST_METHOD"] == "POST"){
 $feedback = $_POST['tamsg'];
 if($feedback=='')die;
 $fbUserID = $_SESSION['id'];

include('config.php');
	$sql = "INSERT INTO `feedback` (`id`, `message`) VALUES ('$fbUserID','$feedback');";
	$db->query($sql);
mysqli_close($db);	
}
else header('location:dashboard.php');
?>