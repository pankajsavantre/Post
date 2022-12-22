<?php 
session_start();
require('config.php');
$email=$_SESSION['email'];

$id=$_POST['id'];
$title=$_POST['title'];
$post=$_POST['post'];
$updated_at=date("Y-m-d H:i:s"); 


$sql="UPDATE user_posts set title='$title', post='$post', updated_at='$updated_at' WHERE id='$id'";
$in=mysqli_query($con,$sql);
if($in){
	echo "updated";
	header("Location:http://localhost/Restapp/post.php");
}
else{
echo "failed";
}



 ?>