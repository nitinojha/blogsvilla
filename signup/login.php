<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Login</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Frequent Sign In Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<!-- css files -->
<link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
<!-- //css files -->
<!-- web-fonts -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700" rel="stylesheet">
<!-- //web-fonts -->
</head>
<body>
	<?php
	if(isset($_REQUEST['userlogin']))
	{
	include("connect.php");
	$email=$_REQUEST['email'];
	$password=$_REQUEST['password'];
	$a=mysqli_query($con,"select * from user where email='$email' and password='$password' and status='1' ");
	$b=mysqli_num_rows($a);
	if($b>0)
	{
                session_start();
		$_SESSION['useremail']=$email;
		//$c=mysqli_fetch_assoc($a);
		//echo $c['id'];
//$_SESSION['userpassword']=$password;
		header("location:../index.php");
		//echo $_SESSION['useremail'];
		}
else
{
header("location:login.php?msg='wrong_input'");
}
	}
	?>
<div class="banner-overlay-agileinfo">
		<!--header-->
		<div class="header-w3l">
			<h1>BLOGS VILLA</h1>
		</div>
		<!--//header-->
		<!--main-->
		<div class="main-w3layouts-agileinfo">
	           <!--form-stars-here-->
						<div class="wthree-form">
							<h2>Sign in to your account</h2>
							<form action="" method="post">
								<div class="form-sub-w3">
									<input type="text" name="email" placeholder="email" required="" />
									<?php 
			if(isset($_REQUEST['msg'])){
				echo $_REQUEST['msg'];
			}
									?>
								<div class="icon-w3">
									<i class="fa fa-user" aria-hidden="true"></i>
								</div>
								</div>
								<div class="form-sub-w3">
									<input type="password" name="password" placeholder="Password" required="" />
																		<?php 
			if(isset($_REQUEST['msg'])){
				echo $_REQUEST['msg'];
			}
									?>
								<div class="icon-w3">
									<i class="fa fa-unlock-alt" aria-hidden="true"></i>
								</div>
								</div>
								<p class="forgot-w3ls">Forgot Password?<a class href="#">  Click here</a></p>
								<p class="forgot-w3ls1">New User?<a class href="register.php">  Register here</a></p>
								<div class="clear"></div>
								<div class="submit-agileits">
									<input type="submit" name="userlogin">
								</div>
							</form>

						</div>
				<!--//form-ends-here-->

		</div>
		<!--//main-->
		<!--footer-->
		<div class="footer">
			<p>&copy; <?php echo "20".date("y"); ?> BLOGS VILLA.All rights reserved. Brought to you by <a href="http://iideas.tech">lldeas.tech</a></p>
		</div>
		<!--//footer-->
	</div>
</body>
</html>