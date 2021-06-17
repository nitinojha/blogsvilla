<!DOCTYPE html>
<html lang="en">
<head>
<title>Add Blog</title>
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
	  </hr>
	  <?php			
if(isset($_REQUEST['category_btn']))
{
$category=$_REQUEST['category'];
	$tagline=$_REQUEST['tagline'];
			include("connect.php");
			mysqli_query($con,"insert into blog_category (category,tagline) values('$category','$tagline')");
	?>
<script>
alert("CATEGIORY ADDED");
	window.location="newadd_blog_category.php" ;

</script>
<?php
	
	}
			?>
<div class="row-fluid">
    <div class="span12">
            <?php
echo "<h1>"."<center>"."Add Blog Category"."</center>"."</h1>";

?>
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Add Blog Category</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="" method="post" class="form-horizontal">
            <div class="control-group">
              <label class="text-center" style="font-size: 20px;">Create New Category</label>
            </div>
            <div class="control-group">
              <label class="control-label">Category To Be Added :</label>
              <div class="controls">
                <input type="text" name="category" required>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Tagline :</label>
              <div class="controls">
                <input type="text" name="tagline">
              </div>
            </div>
            <div class="form-actions">
             <button name="category_btn" class="btn btn-info">Add</button>
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
