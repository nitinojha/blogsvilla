<!DOCTYPE HTML>
<html>
<head>
<title>BLOGS VILLA</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Trendy Blog Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all" />
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
	<div class="banner">
		<div class="banner-info">
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
							<a class="navbar-brand" href="index.php"><span>B</span>Blogs Villa</a>
						</div>
					</div>
<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav cl-effect-18" id="cl-effect-18">
							<li class="act"><a href="index.php" class="effect1 active">Home</a></li>
							<li><a href="about_us.php">About Us</a></li>
							<li><a href="blogs.php">Blogs</a></li>
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
								@session_start();
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
				<!--banner-Slider-->
					<script src="js/responsiveslides.min.js"></script>
						<script>
							// You can also use "$(window).load(function() {"
							$(function () {
							  // Slideshow 4
							  $("#slider3").responsiveSlides({
							auto: true,
							pager: true,
							nav:true,
							speed: 500,
							namespace: "callbacks",
							before: function () {
							  $('.events').append("<li>before event fired.</li>");
							},
							after: function () {
							  $('.events').append("<li>after event fired.</li>");
							}
							  });

							});	
						</script>
					<div  id="top" class="callbacks_container">
						<ul class="rslides" id="slider3" >
								<?php
								$a=mysqli_query($con,"select * from blog_category where id<=4");
											$c=mysqli_query($con,"select * from blog");
											$d=mysqli_fetch_assoc($c);
								while($b=mysqli_fetch_assoc($a))
								{ ?>
								<div class="banner-info-slider">
									<ul>
										<li>
<li><a href="category_blog.php"?category=<?php echo $b['id']; ?>"><?php echo $b['category']; ?></a></li>
										<li><?php echo date("Y-m-d"); ?></li>
									</ul>
									<h3><?php echo $b['category']; ?></h3>
									<p>Blogging<span>By <i>MODERN ERA</i> </span></p>
									<div class="more">
<a href="category_blog.php?category=<?php echo $b['id']; ?>" class="type-1">
											<span> Read More </span>
											<span> Read More </span>
										</a>
									</div>
								</div>
							<?php } ?>
							</li>
						</ul>
					</div>
			</div>
		</div>
	</div>
<!-- banner -->
<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="container">
			<div class="banner-bottom-grids">
												<?php
				$e=mysqli_query($con,"select * from blog_category where id<=4");
											$g=mysqli_query($con,"select * from blog");
											$h=mysqli_fetch_assoc($g);
									while($f=mysqli_fetch_assoc($e)){?>
				<div class="col-md-3 banner-bottom-grid-left">
					<div class="br-bm-gd-lt">
						<div class="overlay">
							<div class="arrow-left"></div>
							<div class="rectangle"></div>
						</div>
						<div class="health-pos">
							<div class="health">
								<ul>
										<li>
<li><a href="category_blog.php?category=<?php echo $f['id']; ?>"><?php echo $f['category']; ?></a></li>
									</ul>
							</div>
							<h3><?php echo $f['tagline']; ?></h3>
						</div>
					</div>
				</div>
																<?php } ?>
<div class="clearfix"> </div>
			</div>
<div class="move-text">
				<div class="breaking_news">
					<h2>Latest Posts</h2>
				</div>
				<div class="marquee">
					<div class="marquee1"><a class="breaking" href="single.html">technology booming all round</a></div>
					<div class="marquee2"><a class="breaking" href="single.html">Ups And Downs</a></div>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
				<script type="text/javascript" src="js/jquery.marquee.js"></script>
				<script>
				  $('.marquee').marquee({ pauseOnHover: true });
				  //@ sourceURL=pen.js
				</script>
			</div>
			<div class="clearfix"></div>
			<!-- video-bottom-grids -->
				<div class="video-bottom-grids">
					<div class="video-bottom-grids1">
					<?php
						$i=mysqli_query($con,"select * from blog_category where priority=1 order by id");
						while($j=mysqli_fetch_assoc($i))
						{ 
							$a=$j['id'];
					 $k=mysqli_query($con,"select * from blog where category_id='$a'");
							?>
						<div class="col-md-3 video-bottom-grid">
							<div class="video-bottom-grid1">
								<div class="video-bottom-grid1-before">
									<img src="<?php echo $j['cat_image']; ?>" alt=" " class="img-responsive" />
									<div class="video-bottom-grid1-pos">
										<p><?php echo $j['tagline']; ?></p>
									</div>
								</div>
								<?php while($l=mysqli_fetch_assoc($k))
									
					{ ?>
								<ul>
	<li><a href="blog_description.php?idb=<?php echo $l['idb']; ?>"><?php echo substr($l['title'],0,25); ?></a></li>
								</ul>
								<?php } ?>
								<div class="read-more">
			<a href="category_blog.php?id=<?php echo $j['id']; ?>">READ MORE IN <?php echo $j['category']; ?></a>
								</div>
							</div>
						</div>
						<?php } ?>
						</div>
						<div class="clearfix"> </div>
					   </div>
					</div>
				</div>
			<!-- //video-bottom-grids -->
<?php
	include("footer.php");
	?>
</body>
</html>