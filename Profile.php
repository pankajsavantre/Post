<?php
session_start();
if (!isset($_SESSION['email'])) {
	header("Location:http://localhost/Restapp/index.php");
}
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

</head>
<body>
	<?php include('layout/nav.php'); ?>

<div class="container w-75 my-3">
	<div class="card w-50">

		<h2 class="card-header">User Profile
			<?php  if($_SESSION['role']=="Write") {
 ?>
		 <button type="button" class="btn btn-warning ml-5" data-toggle="modal" data-target="#myModal1">
 			Add Posts
		</button>
<?php 
}
else{
	?>
	 <button type="button" disabled class="btn btn-warning ml-5" data-toggle="modal" data-target="#myModal1">
 			Add Posts+<span></span>
		</button>

	<?php
}

 ?>		
 </h2>
	  	<div class="card-body">
		     <h5>Name:<span><?php echo $_SESSION['name']; ?></span></h5>
			 <h5>Email:<span><?php echo $_SESSION['email']; ?></span></h5>
			 <h5>Phone:<span><?php echo $_SESSION['phone']; ?></span></h5>
			 <h5>Role:<span><?php echo $_SESSION['role']; ?></span></h5>
			 <!-- Button to Open the Modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
 Update Profile
</button>
	  	</div>
	</div>


		<form  method="post" action="./backend_main/profileUpdate.php" accept-charset="utf-8"> 

			<!-- The Modal -->
			<div class="modal" id="myModal">
			  <div class="modal-dialog">
			    <div class="modal-content">

			      <!-- Modal Header -->
			      <div class="modal-header">
			        <h4 class="modal-title">Update Profile</h4>
			        <button type="button" class="close" data-dismiss="modal">&times;</button>
			      </div>

			      <!-- Modal body -->
			      <div class="modal-body">
			      	<input type="text" name="email" class="form-control my-3" value='<?php echo $_SESSION['email'] ?>' disabled required>
			       		<input type="text" name="name" class="form-control my-3" value='<?php echo $_SESSION['name'] ?>' required>
			       		
	
						<select name="role" class="form-control">
							<option value="Read">Read</option>
							<option value="Write">Write</option>}
							
						</select>

						
			      </div>

			      <!-- Modal footer -->
			      <div class="modal-footer">
			      	<button type="submit" name="submit" class="btn btn-success ">Update</button>
			        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			      </div>

			    </div>
			  </div>
			</div>	
			</div>
		</form>


</div>

<!-- Button to Open the Modal -->


<!-- The Modal -->
<div class="modal" id="myModal1">
  <div class="modal-dialog">
    <div class="modal-content">
 <form action="backend_main/insert_post.php" method="post" accept-charset="utf-8">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Post</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        
        	<input type="text" name="title" class="form-control my-3" placeholder="Post Title">
        	<textarea name="post" class="form-control" placeholder="Post"></textarea>
        
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
      	<button type="submit" class="btn btn-primary">Add Post</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
</form>
    </div>
  </div>
</div>
<div>



<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


