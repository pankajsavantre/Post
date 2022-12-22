<div class="container w-75 my-3">
	<h2>User Resgistration Page</h2>
	<form  method="post" action="./backend_main/userReg.php" accept-charset="utf-8">
	<input type="text" name="name" class="form-control my-3" placeholder="Enter Name" required>
	<input type="text" name="email" class="form-control" placeholder="Enter Email" required>
	<input type="text" name="phone" class="form-control my-3" placeholder="Enter Phone" required>
	<input type="text" name="password" class="form-control" placeholder="Enter Password" required>
	<input type="text" name="confpassword" class="form-control my-3" placeholder="Confirm Password" required>
	<button type="submit" class="btn btn-primary">Signup</button>

	<a href="login.php">Already Have an Account ?</a>
</form>
</div>