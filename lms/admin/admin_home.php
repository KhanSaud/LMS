<?php
include "../auth/auth.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home</title>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>


<body>

<?php include "header_admin.php"; ?>

<br><br><br>

<?php 

 ?>

<div class="container-fluid row">
<div class="col-lg-4 col-md-6">
<div class="card" style="width: 18rem;">
 <a href="add_books.php"><img class="card-img-top" src="../images/addbook.png" alt="Card image cap" style="height:150px;"></a>
  <div class="card-body">
    <p class="card-text">Add Books</p>
  </div>
  </div>
  </div>
<div class="col-lg-4 col-md-6">
<div class="card" style="width: 18rem;">
 <a href="manage.php"><img class="card-img-top" src="../images/issuebook.png" alt="Card image cap"></a>
  <div class="card-body">
    <p class="card-text">Manage Books</p>
  </div>
  </div>
  </div>
  <div class="col-lg-4 col-md-6">
<div class="card" style="width: 18rem;">
<a href="users.php"><img class="card-img-top" src="../images/users.png" alt="Card image cap" style="height:150px;"></a>
  <div class="card-body">
  <p class="card-text">Users</p>
  </div>
  </div>
  </div>
  </div>
  <br><br>
  <!-- SECOND ROW -->
  <div class="container-fluid row">
 
  
  <div class="col-lg-4 col-md-6">
<div class="card" style="width: 18rem;">
<a href="admin_issue.php"><img class="card-img-top" src="../images/list.png" alt="Card image cap" style="height:150px;"></a>
  <div class="card-body">
  <p class="card-text">Issued Books</p>
  </div>
  </div>
  </div>
  </div>
  
  <br>

  <?php
  include "../footer.php";
  ?>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
