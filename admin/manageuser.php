<!DOCTYPE html>
<html lang="en">
<head>
<title>Manage User</title>
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
    <table border="1" align="center" class="table table-bordered">
<tr>
    <td>id</td>
	<td>Name</td>
	<td>Email</td>
	<td>Password</td>
	<td colspan="3">Action</td>
</tr>
<?php
include "connect.php";
$a=mysqli_query($con,"select * from user");
while($z=mysqli_fetch_assoc($a))
{?>

	<tr>
	    <td><?php echo $z['id']; ?></td>
		<td><?php echo $z['first_name']; ?></td>
		<td><?php echo $z['email']; ?></td>
		<td><?php echo $z['password']; ?></td>
		<td><a href="delete_category.php?id=<?php echo $z['id']; ?>">Delete</a></td>
		<td>
		<?php
 			if($z['status']==0){?>
				<a href="delete_category.php?approve_id=<?php echo $z['id'];?>">Approve</a>
			<?php }else{ ?>
				<a href="delete_category.php?reject_id=<?php echo $z['id'];?>">Reject</a>
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
<script>
CKEDITOR.replace('editor2');
</script>
</body>
</html>
