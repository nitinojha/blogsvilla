<!DOCTYPE html>
<html lang="en">
<head>
<title>Post Blog</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<script src="ckeditor/ckeditor.js"></script>
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
	 include("connect.php");
if(isset($_REQUEST['blog_btn']))
{
	 $category_id=$_REQUEST['cat_selected'];
	 $blog_content=$_REQUEST['blog_content'];
	 $title=$_REQUEST['title'];
	$posted_by=$_REQUEST['postedby'];
mysqli_query($con,"insert into blog (category_id,blog_content,title,posted_by) values('$category_id','$blog_content','$title','$posted_by')");
	?>
<script>
alert("BLOG POSTED");
	window.location="newpost_blog.php" ;
</script>
<?php
		}
			?>
<div class="row-fluid">
    <div class="span12">
            <?php
echo "<h1>"."<center>"."Post Blog"."</center>"."</h1>";	
?>
<div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Post Blog Content</h5>
        </div>
                <div class="widget-content nopadding">
          <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
         <div class="control-group">
              <label class="control-label">Category</label>
              <div class="controls">
               <select name="cat_selected" required>
	<option value="" selected>select category</option>
		<?php
$b=mysqli_query($con,"select * from blog_category");
while($w=mysqli_fetch_assoc($b)){ ?>
<option value="<?php echo $w['id'] ; ?>"><?php echo $w['category'] ; ?></option>
<?php } ?>
				  </select></div>
			  </div>
            <div class="control-group">
              <label class="control-label">Title</label>
              <div class="controls">
               <textarea name='title'></textarea>
                  </div>
            </div>
                                 <div class="control-group">
              <label class="control-label">Blog </label>
              <div class="controls">
                <textarea name="blog_content" required></textarea>
              </div>
            </div>
             <div class="control-group">
              <label class="control-label">POSTED BY</label>
              <div class="controls">
               <textarea name='postedby'></textarea>
                  </div>
            </div>
            
            <div class="form-actions">
             <button name="blog_btn" class="btn btn-info">Post</button>
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
<script>
	CKEDITOR.replace('blog_content');
	CKEDITOR.replace('title');
	</script>
</body>
</html>

