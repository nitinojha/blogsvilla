<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>blog_description</title>
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
<!-- pop-up-script -->
<script src="js/jquery.chocolat.js"></script>
		<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen" charset="utf-8">
		<!--light-box-files -->
		<script type="text/javascript" charset="utf-8">
		$(function() {
			$('.gallery-grid a').Chocolat();
		});
		</script>
<!-- //pop-up-script -->
<!-- sb-slider -->
<script type="text/javascript" src="js/modernizr.custom.46884.js"></script>
	<script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-7243260-2']);
	  _gaq.push(['_trackPageview']);

	  (function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>
<!-- //sb-slider -->
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
<!-- //banner -->
<!-- slicebox-slider -->
	<div class="slicebox-slider">
		<div class="container">
			<div class="slicebox-slider-grid">
				<div class="col-md-8 slicebox-slider-left">
					<?php
					if(isset($_REQUEST['idb']))
					{
							$id=$_REQUEST['idb'];	
										$a=mysqli_query($con,"select * from blog where idb='$id'");
							$b=mysqli_fetch_assoc($a);
					}
					?>
					<div class="albums">
						<h3>News</h3>
						<div class="albums-grids">
							<div class="albums-grid1">
<h4><?php echo $b['title']; ?></h4>
								<p><?php echo $b['blog_content']; ?></p>
								<div class="wrapper1">

							<ul id="sb-slider" class="sb-slider">
								<li>
									<a href="blog_description.php?idb=<?php echo $b['idb']; ?>" target="_blank"><img src="<?php echo $b['image']; ?>" alt="" class="img-responsive" /></a>
									<div class="sb-description">
									<h3>BLOGS VILLA</h3>
									</div>
								</li>
								<li>
									<a href="#" target="_blank"><img src="images/25.jpg" alt="" class="img-responsive" /></a>
									<div class="sb-description">
										<h3>Honest Entertainer</h3>
									</div>
								</li>
								<li>
									<a href="#" target="_blank"><img src="images/26.jpg" alt="" class="img-responsive" /></a>
									<div class="sb-description">
										<h3>Brave Astronaut</h3>
									</div>
								</li>
								<li>
									<a href="#" target="_blank"><img src="images/24.jpg" alt="" class="img-responsive" /></a>
									<div class="sb-description">
										<h3>Affectionate Decision Maker</h3>
									</div>
								</li>
								<li>
									<a href="#" target="_blank"><img src="images/25.jpg" alt="" class="img-responsive" /></a>
									<div class="sb-description">
										<h3>Faithful Investor</h3>
									</div>
								</li>
								<li>
									<a href="#" target="_blank"><img src="images/26.jpg" alt="" class="img-responsive" /></a>
									<div class="sb-description">
										<h3>Groundbreaking Artist</h3>
									</div>
								</li>
								<li>
									<a href="#" target="_blank"><img src="images/25.jpg" alt="" class="img-responsive" /></a>
									<div class="sb-description">
										<h3>Selfless Philanthropist</h3>
									</div>
								</li>
							</ul>

							<div id="shadow" class="shadow"></div>

							<div id="nav-arrows" class="nav-arrows">
								<a href="#">Next</a>
								<a href="#">Previous</a>
							</div>

					</div><!-- /wrapper -->
					<script type="text/javascript" src="js/jquery.slicebox.js"></script>
					<script type="text/javascript">
						$(function() {
							
							var Page = (function() {

								var $navArrows = $( '#nav-arrows' ).hide(),
									$shadow = $( '#shadow' ).hide(),
									slicebox = $( '#sb-slider' ).slicebox( {
										onReady : function() {

											$navArrows.show();
											$shadow.show();

										},
										orientation : 'r',
										cuboidsRandom : true
									} ),
									
									init = function() {

										initEvents();
										
									},
									initEvents = function() {

										// add navigation events
										$navArrows.children( ':first' ).on( 'click', function() {

											slicebox.next();
											return false;

										} );

										$navArrows.children( ':last' ).on( 'click', function() {
											
											slicebox.previous();
											return false;

										} );

									};

									return { init : init };

							})();

							Page.init();

						});
								</script>
							</div>
						</div>
					</div>
					<?php
					if(isset($_REQUEST['signup']))
					{?>
					<script>
					alert("you have to login first to comment");
						window.location="signup/login.php";
					</script>
				<?php	}
					?>
					<form action="" method="">
					<h2>ADD COMMENTS</h2>
					<input type="text" placeholder="login first for comment" name="comments" style="height: 300px; width: 700px; margin-top: 20px; background-color: lightgrey; border-radius: 5px;" ></textarea>
					<button name="signup">submit</button>
					</form>
				</div>
				<div class="col-md-4 breaking-news-grid-right slicebox-slider-right">
					<h3>MORE NEWS</h3>
					<ul>
					<?php
						
						$c=mysqli_query($con,"select * from blog where category_id='$b[category_id]'");
while($d=mysqli_fetch_assoc($c)) 
{?>
						<li>
							<div class="breaking-news-grid-right-grids">
								<div class="breaking-news-grid-right-gridl">
									<img src="<?php echo $d['image']; ?>"  height="400px" width="300px" alt=" " class="img-responsive" />
								</div>
								<div class="breaking-news-grid-right-gridr">
								<h4><a href="blog_description.php?idb=<?php echo $d['idb']; ?>"><?php echo $d['title']; ?></a></h4>
										<h5>By <a href="blog_description.php">
										<?php echo $d['posted_by']; ?></a> <label>|</label>
										 <i><?php echo $d['date']; ?></i></h5>
								</div>
								<div class="clearfix"> </div>
							</div>
						</li>
						<?php } ?>
						<li>
							</ul>
					<div class="news-grid-rght3">
						<img src="images/18.jpg" alt=" " class="img-responsive">
						<div class="story">
							<p>story of the week</p>
							<h3><a href="single.html">US hails west Africa Ebola progress</a></h3>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	
<!-- //slicebox-slider -->
<?php
	include("footer.php");
	?>
</body>
</html>