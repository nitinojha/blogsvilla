<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>categry_blog</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Trendy Blog Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
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
	<div class="banner1" >
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
<!-- //banner -->
<!-- news-and-events -->
	<div class="news-and-events">
		<div class="container">
			<div class="move-text">
				<div class="breaking_news">
					<h2>Breaking News</h2>
				</div>
				<div class="marquee">
					<div class="marquee1"><a class="breaking" href="single.html">A 5-year-old boy who recently returned to the U.S from Ebola-stricken West Africa is under observation after experiencing a fever.</a></div>
					<div class="marquee2"><a class="breaking" href="single.html">The surprisingly successful president of the Philippines and peacemaking in the Philippines: Shaking it all up.</a></div>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
				<script type="text/javascript" src="js/jquery.marquee.js"></script>
				<script>
				  $('.marquee').marquee({ pauseOnHover: true });
				  //@ sourceURL=pen.js
				</script>
			</div>
			<div class="upcoming-events-grids">
								<div class="news">
					<div class="news-grids">
						<div class="col-md-8 news-grid-left">
							<h3>latest news & events</h3>
							<ul>
							<?php
								$cat_id=$_REQUEST['id'];
$c=mysqli_query($con,"select * from blog where category_id='$cat_id'");
while($d=mysqli_fetch_assoc($c)) 
{?>
								<li>
					<div class="news-grid-left1">
										<img src="<?php echo $d['image']; ?>"  height="400px" width="300px" alt=" " class="img-responsive" />
									</div>
									<div class="news-grid-right1">
<h4><a href="blog_description.php?idb=<?php echo $d['idb']; ?>"><?php echo $d['title']; ?></a></h4>
										<h5>By 
										<?php echo $d['posted_by']; ?> <label>|</label>
										 <i><?php echo $d['date']; ?></i></h5>
										<p>
									<?php echo substr($d['blog_content'],0,200); ?>....<a href="blog_description.php?idb=<?php echo $d['idb']; ?>">READ MORE</a></p>
									</div>
									<div class="clearfix"> </div>
									</li>
									<?php } ?>
							</ul>
						</div>
				</div>
				<div class="col-md-4 upcoming-events-right">
				<h3>More News</h3>
					<div class="banner-bottom-video-grid-left">
							<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
						  <?php
$e=mysqli_query($con,"select * from blog  limit 0,12");
while($f=mysqli_fetch_assoc($e)) 
{?>
							  <div class="panel panel-default">
								<div class="panel-heading" role="tab" id="">
								  <h4 class="panel-title">
									<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#<?php echo $f['idb'] ?>" aria-expanded="true" aria-controls="collapseOne">
									  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>
									  <?php echo substr($f['title'],0,50); ?>
																		</a>
								  </h4>
								</div>
								<div id="<?php echo $f['idb'] ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="" style="height: 0px;">
								  <div class="panel-body">
									<p>
									<?php echo substr($f['blog_content'],0,200); ?><b><i>...to be continued </i></b></p>
								  </div>
								</div>
								</div>
				<div class="clearfix"> </div>
								<?php } ?>
									</div>
					</div>
				</div>
		</div>
	</div>
		</div>
	</div>
<!-- //news-and-events -->
<?php
	include("footer.php");
	?>
</body>
</html>