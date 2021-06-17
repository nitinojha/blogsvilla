<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>BLOGS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Trendy Blog Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/blogs.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
</head>
<body>
<?php
					include("connect.php");
	?>
<!-- banner -->
	<div class="banner1">
		<div class="banner-info1">
			<div class="container">
				<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
						<div class="logo">
							<a class="navbar-brand" href="index.php"><span>B</span> Blogs Villa</a>
						</div>
					</div>
					

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav cl-effect-18" id="cl-effect-18">
														<li><a href="index.php" class="effect1">Home</a></li>
							<li><a href="about_us.php">About Us</a></li>
							<li><a href="blogs.php">Blogs</a></li>
							<li role="presentation" class="dropdown">
								<li role="presentation" class="dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" href="?id" role="button" aria-haspopup="true" aria-expanded="false">
								  Categories <span class="caret"></span>
								</a>
								<ul class="dropdown-menu">
									<?php
								$a=mysqli_query($con,"select * from blog_category");
								while($b=mysqli_fetch_assoc($a))
								{ ?>
									<li><a href="category_blog.php?id=<?php echo $b['id']; ?>"><?php echo $b['category']; ?></a></li>
                                 <?php } ?>
								 </ul>
							</li>
							<li>
							<?php 
								session_start();
								if(isset($_SESSION['useremail']))
								{?>
				<li><a href="index.php"><i class="fa fa-user"></i><?php echo $_SESSION['useremail']; ?></a></li>
							<li><a href="logout.php"><i class="fa fa-key"></i>logout</a></li>
								<?php } 
								else{ ?>
								<a href="signup/login.php">Login</a>
							 <?php } ?>
							</li>
							<li><a href="admin/newlogin.php">Admin</a></li>
						</ul>
					</div><!-- /.navbar-collapse -->	
					
				</nav>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
	<!--mainsection-->
	<marquee>under construction</marquee>
	<!--mainsection-->
<?php
	include("footer.php");
	?>
</body>
</html>