<?php session_start();
if (isset($_SESSION['email'])) {
	header("Location:http://localhost/Restapp/Profile.php");
}
 ?>
<?php include('layout/header.php'); ?>

<?php include('main/signup.php'); ?>

<?php include('layout/footer.php'); ?>