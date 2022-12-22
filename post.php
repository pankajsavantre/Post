
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
		<h3>Posts</h3>
			<table class="table table-hover">
			
			
<?php 

require('backend_main/config.php');

$email=$_SESSION['email'];


$s="SELECT * FROM user_posts WHERE email='$email'";
$in=mysqli_query($con,$s);

if(mysqli_num_rows($in)>0){
?>
<thead>
				<tr>
					<th>Title</th>
					<th>Post</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
	while($row=mysqli_fetch_assoc($in))
	{
		?>

				<tr>
					<td><?php echo $row['title'] ?></td>
					<td><?php echo $row['post'] ?></td>

					<td>
						<a href="?id=<?php 	echo $row['id']; ?>" class="btn btn-success" data-toggle="modal" data-target="#myModal">
							Edit
						</a>

				
		<!-- The Modal -->
		<div class="modal" id="myModal">
		  <div class="modal-dialog">
		    <div class="modal-content">
		 <form action="backend_main/update_post.php" method="post" accept-charset="utf-8">
		      <!-- Modal Header -->
		      <div class="modal-header">
		        <h4 class="modal-title">Post</h4>
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		      </div>

		      <!-- Modal body -->
		      <div class="modal-body">
		      	<input type="text" name="id" value="<?php echo $row['id']; ?>" hidden>
		        		Title:
		        	<input type="text" name="title" class="form-control my-3" value="<?php 	echo $row['title']; ?>">
		        	Post:
		        	<textarea name="post" class="form-control" placeholder="Post"><?php 	echo $row['post']; ?></textarea>
		        
		      </div>

		      <!-- Modal footer -->
		      <div class="modal-footer">
		      	<button type="submit" name="update" class="btn btn-primary">Update Post</button>
		        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
		      </div>
		</form>
		    </div>
		  </div>
</div>
	
	<a href="backend_main/delete_post.php?id=<?php 	echo $row['id']; ?>" onclick="return confirm('Are you sure?')">
							<button type="submit" class="btn btn-danger">delete</button>
						</a>
						

					</td>
				</tr>
	
		<?php
	}
	
	
}
else{
	?>
		<h3 class="text-danger">No Records Found</h3>
<?php 
}

 ?>
</tbody>
		</table>

	</div>
	
<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
