
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">RestApp</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
       
        <?php 
          if (isset($_SESSION['email'])) {
          ?>
           <li class="nav-item">
          <a class="nav-link" href="http://localhost/Restapp/post.php">Post</a>
        </li>
            <li class="nav-item ">
          <a class="nav-link" href="http://localhost/Restapp/logout.php"><button type="submit" class="btn btn-danger">Logout</button></a>
        </li>
          <?php
          }
         ?>
       
       
      </ul>
    </div>
  </div>
</nav>