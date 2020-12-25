<?php session_start(); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="../css/style.css">

<script>
function formvalidation()
{
  var passlen= $('#inputpassword').val().length;
if(passlen < 5)
{
  alert("Enter Min 5 Characters Password !!");
return false;
}
  }
  </script>


</head>

<body>
<?php include "header_admin.php"; ?>
<br>
<div class="container">
<form method="post" onsubmit="return formvalidation()" action="insert_user.php">
  <fieldset>
  <center><legend>Sign Up</legend>
    <img src="../images/signup.png" style="height:80px;"></center>
    <?php
if(isset($_SESSION['success']))
{
  echo $_SESSION['success']; 
  unset ($_SESSION['success']);
}

?>
    <div class="form-group">
     <b><label for="exampleInputEmail1">Name</label></b> 
      <input type="text" class="form-control" name="name" id="inputname"  placeholder="Enter Name" required >
    </div>
    <div class="form-group">
      <b><label for="exampleInputEmail1">Email address</label></b>
      <input type="email" class="form-control" name="email" id="inputemail"  placeholder="Enter email" required >
    </div>
    <div class="form-group">
      <b><label for="exampleInputPassword1">Password</label></b>
      <input type="password" class="form-control" name="password" id="inputpassword" placeholder="Password" required>
    </div>
    <b><label>Designation</label></b>
    <div class="form-check">
        <label class="form-check-label">
          <input class="form-check-input" name="designation" type="checkbox" value="Librarian">
        Librarian
        </label>
        </div>
      <div class="form-check">
        <label class="form-check-label">
          <input class="form-check-input" name="designation" type="checkbox" value="Student" >
          Student
        </label>
      </div>
    </fieldset>
    <br>
    <button type="submit" class="btn btn-outline-success">Submit</button>
    <button type="reset" class="btn btn-outline-primary">Cancel</button>
  </fieldset>
</form></div>






<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>  
</body>
</html>
