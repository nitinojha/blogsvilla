<!DOCTYPE html>
<html lang="en">
<head>
<title>Manage Blog Content</title>
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
  <table border="1" align="center" class="table table-bordered">
<tr>
<td>s.no.</td>
	<td>Category</td>
	<td>Blog Content</td>
	<td>date</td>
	<td>posted by</td>
	<td colspan="2">Action</td>
</tr>
<?php
include "connect.php";
$a=mysqli_query($con,"select blog.idb,blog_category.id,blog_category.category,blog.blog_content,blog.date,blog.posted_by from blog inner join blog_category on blog.category_id=blog_category.id");
while($z=mysqli_fetch_assoc($a))
{?>

	<tr>
	    <td><?php echo $z['idb']; ?></td>
	    <td><?php echo $z['category']; ?></td>
		<td><?php echo $z['blog_content']; ?></td>
		<td><?php echo $z['date']; ?></td>
	    <td><?php echo $z['posted_by']; ?></td>
		<td><a href="edit_post.php?category_id=<?php echo $z['id']; ?>">edit</a></td>
		<td><a href="delete_post.php?category_id=<?php echo $z['id']; ?>">Delete</a></td>
		</tr>
<?php } 
	 mysqli_close($con); 
	  ?>
</table> 
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