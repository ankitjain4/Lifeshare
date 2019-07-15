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
<link href='http://fonts.googleapis.com/css?family=Quicksand:300,400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script src="js/menu_jquery.js"></script> 
<link rel="stylesheet" type="text/css" href="css/font-awesome.css"> 
<style type="text/css">
#rt{
	border: 0px;
	width: 450px;
	height: 380px;
	margin: auto;
	align-content: center;
	margin-top: 100px;
	padding-top: 20px;
	border-style: solid;
	background: rgba(0%,0%,0%,0.2);


}

body{
	font-family: Arial , Helvetica, sans-serif;
	color: white;
	
	align-content: center;
	background: #30E8BF;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #FF0000, #000000);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #FF0000, #000000); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

}	
.c1{
	width: 85%;
	height: 30px;
	margin: 10px;
	margin-left: 26px;
	color: white;
	font-size: 14px;
	padding: 3px;
	font-weight: bold;
	background: transparent;
	border: 1px solid white;

}

	#c3{
	background-color: #4C993A;
	border: 0px;
	height: 40px;
	width: 40%;
	font-size: 15px;
	color: white;
	margin-left: 26px;

}
#c4{
	background-color: #C1392B;
	border: 0px;
	width: 40%;
	height: 40px;
	font-size: 15px;
	color: white;
	margin-left: 30px
}
i{
	position: relative;
	right: 40px;
}
.c8{
	height: 100px;
	width: 100px;
	
	margin-top: 8px;

}
</style>
</head>
<body>
	<?php
ob_start();
?>
<?php
session_start();
session_destroy();
session_start();

    $serverName="localhost";
    $userName="root";
    $password="";
    $db="lifeshare";
    
    $conn=mysqli_connect($serverName,$userName,$password,$db);
      if(!$conn){
      echo "connection is not done";
     }
     

if (isset($_POST['submit'])) {

	$email = $_POST['email'];
	$pass = $_POST['password'];

	$query = "SELECT * FROM `register` WHERE email= '$email' AND password1='$pass'";
	$result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);

    if($row['password1']==$pass && $row['email']==$email){

    	
    	echo '<script type="text/javascript">alert("Your registration has been done")</script>';
    	header('location: hospital.php');
            
     }
    else echo '<p>'.'Password Incorrect'.'</p>';
	
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
							<li><a href="index.php" class="scroll" style="color:black;">Team</a></li>x
							<li><a href="index.php" class="scroll" style="color:black;">Contact</a></li>
							
						</ul>

					</nav>
				</div>
			</nav>
		</div>
		<div class="clearfix"> </div>
	</div>

<form method="post" action="log2.php">


	<div id="rt">
		<center><img src="images/lifeshare.jpg" class="c8"></center>
		
		<input type="text" name="email" placeholder="Email" class="c1">
		<i class="fa fa-envelope"></i>
		<input type="Password" name="password" placeholder="Password" class="c1">
		<i class="fa fa-lock"></i>
		<center><input type="submit" name="submit"></center>


	</div>
</form>

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
