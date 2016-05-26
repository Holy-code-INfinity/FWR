<?php
   include('session.php');
?>
<html>
   
   <head>
      <title>Welcome </title>
   </head>
   
   <body>
      <h1>Welcome 
<?php 
if($isAdmin)
echo "Hi Daddy ,".$user_check."!";
else 
echo "Hi commoner ,".$user_check."!";
?>
	  </h1> 
      <h2><a href = "logout.php">Sign Out</a></h2>
   </body>
   
</html>