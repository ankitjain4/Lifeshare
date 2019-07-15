<!DOCTYPE HTML>
<html>
<head>
<title>Life Share</title>

<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="css/style1.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<!--webfont-->
<style type="text/css">
	body
	{
		background-image: url(images/log.jpg);
		background-size: cover;
		background-attachment: fixed;
	}
	.do{
		height: 600px;
		width: 400px;
		border-style: dotted;
		border-width: 1px;
		border-color: #000000;
		margin: auto;
		padding-left: 10px;
		background-color: black;
	}
	.c11{
		background: #d9edf7;
		border-radius: 1px;
		margin-top: 10px;


	}
	.do1{
		color: red;
		margin-left: 10px;
	}
</style>

<link href='http://fonts.googleapis.com/css?family=Quicksand:300,400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script src="js/menu_jquery.js"></script> 
<link rel="stylesheet" type="text/css" href="css/font-awesome.css"> 
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
          $SQL="INSERT INTO `donor` (`name`, `date_of _birth`, `blood_group`, `suffering_from`, `email`, `number1`, `flat`, `colony`, `landmark`, `city`, `state`) VALUES ('$name','$dob','$bg','$sf','$email','$num','$flat','$col','$lan','$city','$state')";
           
    
          $temp=mysqli_query($conn,$SQL);
          
          if($temp > 0){
            echo '<script type="text/javascript">alert("Your registration has been done")</script>';
          header('Location: last.html');
    
          }
          else{
            echo '<script type="text/javascript">alert("Somthing Goes Wrong")</script>';
          }
      }
      
     ?>
	<!--header-->
	<div class="header-top" style="">
		<div class="header-bar">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<h1 ><a href="index.php" style="color:black;">Life Share</a></h1><br>
					<h2 style="color:black;" > Bring a Life Back To Power </h2>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav>
						<ul class="nav navbar-nav">
							<li class="active"><a href="index.php" style="color:black;">Home</a></li>
							<li><a href="index.php" class="scroll" style="color:black;">About</a></li>
							<li><a href="index.php" class="scroll" style="color:black;">Services</a></li>
							
							<li><a href="index.php" class="scroll" style="color:black;">Team</a></li>
							<li><a href="index.php" class="scroll" style="color:black;">Contact</a></li>
						</ul>
  <p align="right"><a href="logout.php">Logout</a></p>
					</nav>
				</div>
			</nav>
		</div>
		<div class="clearfix"> </div>
	</div>

<div>

</div>
<div class="do">
	<form action="donor.php" method="post">
	<label class="do1">Name:-</label>
	<input  class="c11" type="text" value="" required="required" name="name" style="margin-left: 68px;" > <br>
	<label class="do1">Date of Birth:-</label>
	<input class="c11" type="Date" placeholder="Date of birth" name="dob" required="required" value=""style="margin-left: 13px;" >
	<br> <br> 
	<label class="do1">Blood Group:-</label>
	&nbsp &nbsp
	<select name="bg">
		
		<option>A+ve</option>
		<option>A-ve</option>
		<option>B+ve</option>
		<option>B-ve</option>
		<option>O+ve</option>
		<option>O-ve</option>
		<option>AB+ve</option>
		<option>AB-ve</option>
	</select>
	<br>
	<label class="do1">Suffering from:-</label>
	<select name="sf">
		<option>Select disease</option>
		<option>Abortion-6 Months</option>
		<option>Blood Transfusion-6 Months</option>
		<option>Surgery-12 Months</option>
		<option>Typhoid-12 Months</option>
		<option>Tatto-6 Months</option>
		<option>Rabies Vaccination-1 Year</option>
		<option>Immunoglobulin-1 Year</option>
		<option>Cancer & Heart Disease</option>
		<option>Tuberculosis</option>
		<option>Diabetes</option>
		<option>Asthama</option>
		<option>Sign and Symptoms of AIDS</option>
		<option>Suffering from none of these</option>
	</select>
	<br>
<label class="do1">Email Address:-</label>
	<input class="c11" type="Email" name="email" value="" required="required" style="margin-left: 3px;">
	<label class="do1">Number:-</label>
	<input class="c11" type="Number" value="" name="num" required="required" style="margin-left: 50px;">
	<br><br>
	<label class="do1">Address:-</label>
	<br>
	<label class="do1">Flat/House No:-</label>
	<input class="c11" type="text" value="" name="flat" required="required" style="margin-left: 5px;">
	
	<label class="do1">Colony/Street :-</label>
	<input class="c11" type="text" name="col" value="" required="required" style="margin-left: 5px;" >
    
	<label class="do1">Landmark:-</label>
	<input class="c11" type="text" value="" name="lan" required="required" style="margin-left: 38px;" >
	<br>
	<label class="do1">City:-</label>
	<input class="c11" type="text" value="" name="city" required="required" style="margin-left: 88px;" >
	<br>
	<label class="do1">State:-</label>
	<input class="c11" type="text" value="" name="state" required="required" style="margin-left: 79px;">
	<br>
	

	<br>
	<br>
	<input style="margin-left: 150px;" type="submit" name="submit" >
</form>

</div>
<br><br>
<br>
<br>
<br><br><br>
<br><br>
<br>
<br>
<br><br><br>
<br><br>
<br>

		<center>
			<footer align="right">
		<div class="container">
			<div class="col-md-3 wls-bottom-head">
			</div>
			<div class="col-md-6 header-side">
				<p align="center" style=color:white;>© 2019 Life Share. All Rights Reserved</p>
			</div>
			</div>
	</footer>
</center>
</body>
</html>
