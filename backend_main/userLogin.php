<?php 
session_start();
require('config.php');
if(isset($_POST['email'],$_POST['password'])){
$email=$_POST['email'];
$password=$_POST['password'];

$s="SELECT * FROM posts WHERE email='$email' AND password='$password'";
$in=mysqli_query($con,$s);

if(mysqli_num_rows($in)>0){

while($row=mysqli_fetch_assoc($in))
{
	$_SESSION['name']=$row['name'];
	$_SESSION['email']=$row['email'];
	$_SESSION['phone']=$row['phone'];
	$_SESSION['role']=$row['role'];
}
	
	header('Location:../Profile.php');
}
else{
	echo "invalid";
}

}
 ?>
