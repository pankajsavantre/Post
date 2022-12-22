<?php 
session_start();
if (isset($_SESSION['email'])) {
	header("Location:http://localhost/Restapp/Profile.php");
}
 ?>
<?php include('layout/header.php'); ?>

<div class="container w-25">
	<h2>Home Page</h2>
	<a href="signup.php"><button type="submit" class="btn btn-primary">Signup</button></a>

	<a href="login.php"><button type="submit" class="btn btn-success">Login</button></a>
</div>

<?php include('layout/footer.php'); ?>


