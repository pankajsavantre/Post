<?php 
require('config.php');

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$password=$_POST['password'];
$confpassword=$_POST['confpassword'];
$role='writer';
$created_at=date("Y-m-d H:i:s"); 
$updated_at=date("Y-m-d H:i:s"); 

$s="SELECT * FROM posts WHERE email='$email' AND phone='$phone'";
$in=mysqli_query($con,$s);
if(mysqli_num_rows($in)>0){
	echo "User already exists";
}else{

$sql="INSERT into posts(name,email,phone,password,confpassword,role,created_at,updated_at) values('$name','$email','$phone','$password','$confpassword','$role','$created_at','$updated_at')";
$in=mysqli_query($con,$sql);
if($in){
	echo "Inserted";
}else{
echo "failed";
}
}


 ?>