<!DOCTYPE html>
<html lang="en">
<head>
<title>Manage Category</title>
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
	<td>Category id</td>
	<td>Category</td>
	<td>tagline</td>
	<td colspan="3">Action</td>
</tr>
<?php
include "connect.php";
$a=mysqli_query($con,"select * from blog_category");
while($z=mysqli_fetch_array($a))
{?>

	<tr>
		<td><?php echo $z[0]; ?></td>
		<td><?php echo $z[1]; ?></td>
		<td><?php echo $z[2]; ?></td>
		<td><a href="edit_category.php?id=<?php echo $z[0]; ?>">edit</a></td>
		<td><a href="delete_category.php?id=<?php echo $z[0]; ?>">Delete</a></td>
		
		<td>
		<?php
 			if($z[3]==0){?>
				<a href="delete_category.php?priority_id=<?php echo $z[0];?>">select</a>
			<?php }else{ ?>
				<a href="delete_category.php?deselect_id=<?php echo $z[0];?>">Deselect</a>
			<?php }
 
 
 		?>
		
		</td>
		</tr>
<?php } ?>
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