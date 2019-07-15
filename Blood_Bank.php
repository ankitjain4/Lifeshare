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
		background-image: url(images/bb.jpg);
		background-size: cover;
		background-attachment: fixed;
	}
	.bb{
		height: 900px;
		width: 400px;
		border-style: dotted;
		border-width: 1px;
		border-color: #000000;
		opacity: .9;
		margin: auto;
		padding-left: 10px;
		background-color: black;
	}
	.c99{
		background: transparent;
		border-radius: 1px;
		margin-top: 10px;


	}
	.bb1{
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
          $SQL="INSERT INTO blood_bank(name, units_ap, units_an, units_bp, units_bn, units_abp, units_abn, units_op, units_on, email, number1, street, landmark, city, state, price, delivery) VALUES ('$ap','$an','$bp','$bn','$abp','$abn','$op','$on','$email','$number1','$street','$landmark','$city','$state','$price','$delivery')";
           
    
          $temp=mysqli_query($conn,$SQL);
          
          if($temp > 0){
            echo '<script type="text/javascript">alert("Your registration has been done")</script>';
          header('Location: log.php');
    
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

					</nav>
				</div>
			</nav>
		</div>
		<div class="clearfix"> </div>
	</div>

<div class="bb">
	<form method="$_POST" action="Blood_Bank.php">
	<label class="bb1">Name:-</label>
	<input  class="c99" type="text" value="" required="required" style="margin-left: 80px;" > <br>
	<br>
	 
	<label class="bb1">Blood Group Available:-</label>
	&nbsp &nbsp
	<br>
	<label class="bb1">Units of A+ve:-</label>
	<input class="c99" type="Number" value="" name="ap" required="required" style="margin-left: 21px;" >
	<label class="bb1">Units of A-ve:-</label>
	<input class="c99" type="Number" value="" name="an" required="required" style="margin-left: 26px;">
	<label class="bb1">Units of B+ve:-</label>
	<input class="c99" type="Number" value="" name="bp" required="required" style="margin-left: 22px;">
	<label class="bb1">Units of B-ve:-</label>
	<input class="c99" type="Number" value="" name="bn" required="required" style="margin-left: 26px;">
	<label class="bb1">Units of AB+ve:-</label>
	<input class="c99" type="Number" value="" name="abp" required="required" style="margin-left: 12px;">
	<label class="bb1">Units of A-ve:-</label>
	<input class="c99" type="Number" value="" name="an" required="required" style="margin-left: 27px;">
	<label class="bb1">Units of O+ve:-</label>
	<input class="c99" type="Number" value="" name="op" required="required" style="margin-left: 22px;">
	<label class="bb1">Units of O-ve:-</label>
	<input class="c99" type="Number" value="" name="on" required="required" style="margin-left: 30px;">
	
	
	<br>
<label class="bb1">Email Address:-</label>
	<input class="c99" type="Email" value="" name="email" required="required" style="margin-left: 17px;">
	<label class="bb1">Number:-</label>
	<input class="c99" type="Number" value="" name="num" required="required" style="margin-left: 63px;">
	<br><br>
	<label class="bb1">Address:-</label>
	<br>
	<label class="bb1">Street :-</label>
	<input class="c99" type="text" value="" name="street" required="required" style="margin-left: 75px;" >
    <br>
	<label class="bb1">Landmark:-</label>
	<input class="c99" type="text" value="" name= "landmark" required="required" style="margin-left: 45px;" >
	<br>
	<label class="bb1">City:-</label>
	<input class="c99" type="text" value="" name="city" required="required" style="margin-left: 95px;" >
	<br>
	<label class="bb1">State:-</label>
	<input class="c99" type="text" value="" name="state" required="required" style="margin-left: 85px;">
	<br>
	<label class="bb1">Price:-</label>  
	<input class="c99" type="Price" value="" name="price" required="required" style="margin-left: 86px;">
	<br><br>
	<label class="bb1">Delivery Available:-</label>
	&nbsp &nbsp
	<select name="select">
				<option>Yes</option>
		<option>No</option>
	</select>
	<br>
	<br>
	<input style="margin-left: 150px;" type="submit" name="submit" value="Submit" required="required">
</form>
</div>


</div>






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
				<p align="center">© 2019 Life Share. All Rights Reserved</p>
			</div>
			</div>
	</footer>
</center>
</body>
</html>
