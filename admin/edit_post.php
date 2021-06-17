<!DOCTYPE html>
<html lang="en">
<head>
<title>Edit Blog Content</title>
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
    <?php
if(isset($_REQUEST['editblog_btn']))
{
	include("connect.php");
	$y=$_REQUEST['category_id'];
	$edit=$_REQUEST['edit_blog'];
	$d=mysqli_query($con,"update blog set blog_content='$edit' where category_id='$y'");
	?>
	<script>
		alert ("blog updated successfully");
		window.location="manage_blogcontent.php";
</script>
<?php
}
?>
<div class="row-fluid">
    <div class="span12">
            <?php
echo "<h1>"."<center>"."Edit Blog Content"."</center>"."</h1>";	
?>
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Edit Blog Content</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="" method="post" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">Blog Content To Be Edited :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Editable Content" 
               value="<?php
include("connect.php");
$y=$_REQUEST['category_id'];
$b=mysqli_query($con,"select * from blog where category_id='$y'");
	$c=mysqli_fetch_assoc($b);
	echo $c['blog_content'];
				  ?>" readonly />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Edit Blog :</label>
              <div class="controls">
                <textarea name="edit_blog" required></textarea>
              </div>
            </div>
            <div class="form-actions">
             <button name="editblog_btn" class="btn btn-info">Post</button>
             <button type="reset" class="btn btn-primary">Reset</button>
            </div>
          </form>
        </div>
      </div>
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