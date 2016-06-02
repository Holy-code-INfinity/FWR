<!DOCTYPE html>
<html lang="en">
	<head>
<?php include 'templates/commonHead.php'; ?>
		<title>F.W.R. | Settings</title>
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- Custom styles for this template -->
	<link rel="stylesheet" href="css/settings.css">
        <style type="text/css">
.user-row {
    margin-bottom: 14px;
}

.user-row:last-child {
    margin-bottom: 0;
}

.dropdown-user {
    margin: 13px 0;
    padding: 5px;
    height: 100%;
}

.dropdown-user:hover {
    cursor: pointer;
}

.table-user-information > tbody > tr {
    border-top: 1px solid rgb(221, 221, 221);
}

.table-user-information > tbody > tr:first-child {
    border-top: 0;
}


.table-user-information > tbody > tr > td {
    border-top: 0;
}
.toppad
{margin-top:20px;
}
        </style>

			</head>	

	<body onload="myFunction()" style="margin:0;">
<?php include 'templates/base1.php'; ?>

  <h1 class="page-header">Account Details</h1>
  
  <div id="myDiv" class="animate-bottom">

	    
<div class="container">
      <div class="row">
      <div class="col-md-5  toppad  pull-right col-md-offset-3 ">
           <A href="settings.php" >Edit Profile</A>
       <br>
	</div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title"><?php echo htmlspecialchars($_SESSION['name']) ?></h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="images/user.png" class="img-responsive">
                 <A href="upload.php" >Edit Image</A>
                 </div>
                
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Username:</td>
                        <td>username</td>
                      </tr>
                      <tr>
                        <td>E-mail:</td>
                        <td>email@email.com</td>
                      </tr>
                         <tr>
                             <tr>
                        <td>Gender:</td>
                        <td>Male/female</td>
                      </tr>
                       
                        <td>Phone Number:</td>
                        <td>123-4567-890(Landline)<br><br>555-4567-890(Mobile)
                        </td>
                           
                      </tr>
                     
                    </tbody>
                  </table>
                  
                </div>
              </div>
            </div>
                
            
          </div>
        </div>
      </div>
    </div>
			
	</div>
  		
<?php include 'templates/base2.php';?>

	<script>
		var myVar;

		function myFunction() {
			myVar = setTimeout(showPage, 200);
		}

		function showPage() {
		  document.getElementById("myDiv").style.display = "block";
		}
		
		
	</script>
	
	<script src="js/settings.js"></script>	

</body>
</html>