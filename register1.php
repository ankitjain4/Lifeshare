<!DOCTYPE HTML>
<html>
<head>
<title>Life Share</title>


<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Photo-Hub Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="css/style1.css" rel='stylesheet' type='text/css' />

<style type="text/css">
	body
	{
		background-image: url(images/bac1.jpg);
		background-size: cover;
		background-attachment: fixed;
	}


</style>
<!-- Custom Theme files -->
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Quicksand:300,400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script src="js/menu_jquery.js"></script> 
</head>
<body>
		<?php

    $serverName="localhost";
    $userName="root";
    $password="";
    $db="lifeshare";
    
    $conn=mysqli_connect($serverName,$userName,$password,$db);
    
     if(!$conn){
      echo "connection is not done";
     }
     else{
     	echo "done";
     }
     
    ?>
    <?php
    
    
     extract($_POST);
    
      if(isset($submit)){
          $SQL="INSERT INTO register(firstname, lastname, email, password1, password2) VALUES ('$firstname','$lastname','$email','$password1','$password2')";
           
    
          $temp=mysqli_query($conn,$SQL);
          
          if($temp > 0){
            echo '<script type="text/javascript">alert("Your registration has been done")</script>';
          header('Location: log1.php');
    
          }
          else{
            echo '<script type="text/javascript">alert("Somthing Goes Wrong")</script>';
          }
      }
      
     ?>
	<!--header-->
	<div class="header-top">
		<div class="header-bar">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<h1><a class="navbar-brand" href="index.php">Life Share</a></h1>
					<br><br><br>
					<h3> Bring a Life Back To Power </h3>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav>
						<ul class="nav navbar-nav">
							<li class="active"><a href="index.php">Home</a></li>
							<li><a href="index.php" class="scroll">About</a></li>
							<li><a href="index.php" class="scroll">Services</a></li>
							
							<li><a href="index.php" class="scroll">Team</a></li>
							<li><a href="index.php" class="scroll">Contact</a></li>
						</ul>

					</nav>
				</div>
			</nav>
		</div>
		<div class="clearfix"> </div>
	</div>
	<!--//header-->
	<div class="register">
		<div class="container">
		   <form method="post" action="register1.php"> 
				 <div class="register-top-grid">
					<h1 style="color:white;">PERSONAL INFORMATION</h1>
					 <div>
						<span>First Name<label>*</label></span>
						<input type="text" name="firstname" required="required"> 
					 </div>
					 <div>
						<span>Last Name<label>*</label></span>
						<input type="text" name="lastname" required="required"> 
					 </div>
					 <div>
						 <span>Email Address<label>*</label></span>
						 <input type="text" name="email" required="required"> 
					 </div>
					 <div class="clearfix"> </div>
					   <a class="news-letter" href="#">
						 <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Sign Up for Newsletter</label>
					   </a>
					 </div>
				     <div class="register-bottom-grid">
						    <h4 style="color:white;">LOGIN INFORMATION</h4>
							 <div>
								<span>Password<label>*</label></span>
								<input type="Password" name="password1" required="required">
							 </div>
							 <div>
								<span>Confirm Password<label>*</label></span>
								<input type="Password" name="password2" required="required">
							 </div>
							 <div class="clearfix"> </div>
					 </div>
					 <div class="clearfix"> </div>
				<div class="register-but">
				   
					   <input type="submit" value="submit" name="submit">
					   <div class="clearfix"> </div>
				   
				</div>
				</form>
				
		   </div>
	</div>
	
        <p style="color:white;">  
        &nbsp &nbsp &nbsp &nbsp &nbsp 
        &nbsp &nbsp &nbsp &nbsp &nbsp 
        &nbsp &nbsp &nbsp &nbsp &nbsp 
        &nbsp &nbsp &nbsp &nbsp &nbsp 
        &nbsp &nbsp &nbsp &nbsp &nbsp
        &nbsp &nbsp &nbsp &nbsp &nbsp
        &nbsp &nbsp &nbsp &nbsp &nbsp 
        &nbsp &nbsp &nbsp &nbsp &nbsp 
        &nbsp &nbsp &nbsp &nbsp &nbsp 
        &nbsp &nbsp &nbsp &nbsp &nbsp 
        &nbsp &nbsp &nbsp &nbsp &nbsp
        &nbsp &nbsp &nbsp &nbsp &nbsp
         Copyright © 2019-LifeShare All Rights Reserved</p>
	  </div>
	</div>
	


</body>

</html>		