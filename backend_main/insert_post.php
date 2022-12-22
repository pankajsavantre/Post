<?php 
session_start();
require('config.php');
$email=$_SESSION['email'];

$title=$_POST['title'];
$post=$_POST['post'];
$created_at=date("Y-m-d H:i:s"); 
$updated_at=date("Y-m-d H:i:s"); 


$sql="INSERT into user_posts(title,post,email,created_at,updated_at) values('$title','$post','$email','$created_at','$updated_at')";
$in=mysqli_query($con,$sql);
if($in){
	echo "Inserted";
	header("Location:http://localhost/Restapp/post.php");
}
else{
echo "failed";
}



 ?>