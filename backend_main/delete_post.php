<?php 
session_start();
require('config.php');
$email=$_SESSION['email'];



$sql="DELETE FROM user_posts WHERE id='$_GET[id]'";
$in=mysqli_query($con,$sql);

if($in){
	echo "deleted";
}else{
	echo "failed";
}

?>