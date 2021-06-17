<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Delete Post</title>
</head>
<body>
</body>
</html>
<?php
$x=$_REQUEST['category_id'];
include("connect.php");
$a=mysqli_query($con,"delete from blog where category_id='$x'");
header("location:manage_post.php");
?>