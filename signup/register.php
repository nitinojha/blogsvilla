<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>SIGN UP</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Frequent Sign In Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<!-- css files -->
<link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<link rel="stylesheet" href="css/register.css" type="text/css" media="all" /> <!-- Style-CSS -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
<!-- //css files -->
<!-- web-fonts -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700" rel="stylesheet">
<!-- //web-fonts -->
</head>
<body>
<?php
	include("connect.php");
if(isset($_REQUEST['user']))
	{
	 $first_name=$_REQUEST['Firstname'];
	 $last_name=$_REQUEST['Lastname'];
	 $email=$_REQUEST['Email'];
	 $phone=$_REQUEST['Phone'];
	 $password=$_REQUEST['password'];
	 $confirm_password=$_REQUEST['confirmpassword'];
	 $a=mysqli_query($con,"select * from user where email='$email' and password='$password' and status='1' ");
	 $b=mysqli_num_rows($a);
	 if($b>0)
	{ ?>
		<script>
	alert("<?php echo $email; ?> has been already registered");
			window.location="login.php";
				</script>
				<?php }
		elseif($confirm_password!=$password)
		{ ?>
		<script>
			alert("both password do not match with each other");
			window.location="register.php";
	</script>
		<?php }
		else
		{
   mysqli_query($con,"insert into user (first_name,last_name,email,phone,password,confirm_password) values ('$first_name','$last_name','$email','$phone','$password','$confirm_password')");
		} ?>
	<script>
	alert("you are registered successfully");
			window.location="login.php";
	</script>
	<?php } ?>
<div class="banner-overlay-agileinfo">
		<!--header-->
		<div class="header-w3l">
			<h1>BLOGS VILLA</h1>
		</div>
		<!--//header-->
		<!--main-->
		<div class="main-w3layouts-agileinfo">
	           <!--form-stars-here-->
						<div class="register-in" style="background-color: lightgoldenrodyellow;">
				<h2>REGISTER HERE</h2>
				<div class="register-form">
					<form action="" method="post">
						<div class="fields-grid">
							<div class="styled-input agile-styled-input-top">
								<input type="text" name="Firstname" required=""> 
								<label>First name</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="text" name="Lastname" required=""> 
								<label>Last name</label>
								<span></span>
							</div> 
							<div class="styled-input">
								<input type="email" name="Email" required="">
								<label>Email</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="tel" name="Phone" required="">
								<label>Phone Number</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="password" name="password" required="">
								<label>Password</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="password" name="confirmpassword" required="">
								<label> Confirm password</label>
								<span></span>
							</div>
							<div class="clear"> </div>
							 <label class="checkbox"><input type="checkbox" name="checkbox" checked required><i></i>I agree to the <a href="#">Terms and Conditions</a></label>
						</div>
						<input type="submit" name="user" value="Register">
					</form>
				</div>
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