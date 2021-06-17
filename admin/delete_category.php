<?php

include("connect.php");
if(isset($_REQUEST['id'])){
	
	$w=$_REQUEST['id'];

$d=mysqli_query($con,"delete from blog_category where id='$w'");
header("location:newmanage_category.php");
}
if(isset($_REQUEST['id'])){
	
	$x=$_REQUEST['id'];

$a=mysqli_query($con,"delete from user where id='$x'");
header("location:manageuser.php");
}
if(isset($_REQUEST['priority_id'])){
	
	$y=$_REQUEST['priority_id'];
include("connect.php");
$b=mysqli_query($con,"update blog_category set priority='1' where id='$y'");
header("location:newmanage_category.php");
}
if(isset($_REQUEST['deselect_id'])){
	
	$y=$_REQUEST['deselect_id'];

$b=mysqli_query($con,"update blog_category set priority='0' where id='$y'");
header("location:newmanage_category.php");
}
if(isset($_REQUEST['approve_id'])){
	
	$z=$_REQUEST['approve_id'];
include("connect.php");
$c=mysqli_query($con,"update user set status='1' where id='$z'");
header("location:manageuser.php");
}
if(isset($_REQUEST['reject_id'])){
	
	$z=$_REQUEST['reject_id'];

$c=mysqli_query($con,"update user set status='0' where id='$z'");
header("location:manageuser.php");
}
?>