<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="for user registration">
    <meta name="author" content="gaurav">
    
    <title>Registration</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/registration.css" rel="stylesheet">

  
  </head>

  <body>
    <div class="topright">
      <FORM METHOD="LINK" ACTION="login.php">
        <button type="submit" class="login">Log In</button>
      </FORM> 
    </div>

    <div class="container">
      
      <form class="form-signup">
        <h2 class="form-signup-heading">Register Here</h2>
        <h4>Your Name</h4>
        <label for="inputEmail" class="sr-only">Name</label>
        <input type="text" id="inputname" class="form-control" placeholder="Enter your Name" required autofocus>
        <h4>Your Email</h4>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Enter your Email" required autofocus>
        <h4>Your username</h4>
        <label for="inputUsername" class="sr-only">Username</label>
        <input type="text" id="inputUsername" class="form-control" placeholder="Enter your Username" required autofocus>
        <h4>Password</h4>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Enter your Password" required>
        <h4>Confirm Password</h4>
        <label for="inputPassword" class="sr-only">Confirm Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Confirm your Password" required>
        <button class="signup" type="submit">Register</button>
      
      </form>

    </div> <!-- /container -->
      <br><br>
    <div class="back">
      <a href="https://www.google.co.in/"><h3 id="back">
  <!-- NOT linked to home page -->
   Back to HOME</h3></a>
    </div>

  </body>
</html>