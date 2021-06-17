<!DOCTYPE html>
<html lang="en">
<head>
<title>Admin Dashboard</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<?php
	include("links.php");
	?>
</head>
<body>
<!--Header-part-->
<?php
	include "header.php";
?>
	<!--close-Header-part--> 
<!--top-Header-menu-->
<?php
	include("topheader.php");
	?>
<!--close-top-Header-menu-->
<!--sidebar-menu-->
<?php
	include("sidebar.php");
	?>
<!-- close-sidebar-menu-->
<div id="content">
<!--Action boxes--> 
 <div class="container-fluid">
<!--main-container-part-->
<?php
	 include("actionboxes.php");
	 ?>
<!--End-Action boxes-->
         <hr/>
          <div class="widget-box">
          <div class="widget-title">
            <ul class="nav nav-tabs">
              <li class="active"><a data-toggle="tab" href="#tab1">Beginning</a></li>
              <li><a data-toggle="tab" href="#tab2">Tab2</a></li>
              <li><a data-toggle="tab" href="#tab3">Tab3</a></li>
            </ul>
          </div>
          <div class="widget-content tab-content">
            <div id="tab1" class="tab-pane active">
              <p>This is the era where we have freedom to <span style="background-color: #62961D"> #explore,#invent,#discover,#create</span>.Let's go ahead with this and showcase to this world what we can imagine.Move forward to go beyond imagination and make it true and Successful.</p>
              <img src="img/demo/demo-image1.jpg" alt="blog1"/></div>
            <div id="tab2" class="tab-pane">
              <p>And is full of waffle to It has multiple paragraphs and is full of waffle to pad out the comment. Usually, you just wish these sorts of comments would come to an end.multiple paragraphs and is full of waffle to pad out the comment.</p>
               <img src="img/demo/demo-image2.jpg" alt="demo-image"/>
            </div>
            <div id="tab3" class="tab-pane">
              <p>And is full of waffle to It has multiple paragraphs and is full of waffle to pad out the comment. Usually, you just wish these sorts of comments would come to an end.multiple paragraphs and is full of waffle to pad out the comment. </p>
              <img src="img/demo/demo-image3.jpg" alt="demo-image"/></div>
          </div>
        </div>
      </div>
    </div>
<!--end-main-container-part-->
<!--Footer-part-->
<?php
	include("footer.php");
	?>
<!--end-Footer-part-->
<?php
	include("script.php");
	?>
</body>
</html>