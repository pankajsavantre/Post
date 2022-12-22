<?php 
session_start();
require('config.php');
if (isset($_POST['name'])) {

$name=$_POST['name'];
$email=$_SESSION['email'];
$phone=$_SESSION['phone'];

$role=$_POST['role'];

$updated_at=date("Y-m-d H:i:s"); 


$sql="UPDATE posts SET name='$name',role='$role' WHERE email='$email'";
$in=mysqli_query($con,$sql);
	if ($in) {
		echo "updated";
		$_SESSION['name']=$name;
		$_SESSION['role']=$role;


	}else{
		echo "failed";
	}
	header("Location:http://localhost/Restapp/Profile.php");
}

 ?>