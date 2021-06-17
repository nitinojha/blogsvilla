<?php
	session_start();
	include "connect.php";
	$email=$_REQUEST['email'];
	$password=$_REQUEST['password'];

//if(mysqli_fetch_assoc(mysqli_query($con,"select * from session where email='$email' and password='$password'")))
//{
//	$_SESSION['user']=$email;
//	$_SESSION['user1']=$password;
//	header('location:home.php');
//}
//else
//{
//	echo "please enter right values";
//header("location:login.php?msg=wrong input");
//	
//}

$x=mysqli_query($con,"select * from admin where email='$email' and password='$password'");
$y=mysqli_num_rows($x);
if($y>0)
{
	$_SESSION['user']=$email;
	$_SESSION['user1']=$password;
	header('location:newdashboard.php');
}
else
{
		echo "please enter right values";
header("location:newlogin.php?msg=wrong input");
}

?>
