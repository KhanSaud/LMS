<?php 
session_start();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css/style.css">

<script>
function formvalidation()
{
  var passlen= $('#InputPassword').val().length;
  if(passlen < 5)
  {
    alert("Enter Min 5 Characters Password !!");
return false;
  }
}

</script>
</head>
<body>
<?php include "header.php"; ?>
<br>

<div class="container"  style="width:50%;">
<form action="account_login.php" method="post" onsubmit="return formvalidation()"> 
  <fieldset>
    <center><legend>Log In</legend>
    <img src="images/login.png" style="height:80px;">
    </center>


    
 <?php
 if(isset($_SESSION['success']))
 {
     echo $_SESSION['success'];
     unset($_SESSION['success']);
 } 
if(isset($_SESSION['failed']))
{
echo $_SESSION['failed'];
unset($_SESSION['failed']);
}
      
   ?>
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" name="email"  placeholder="Enter email" required>
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" name="password" id="InputPassword" placeholder="Password" required>
    </div>
    <button type="submit" class="btn btn-outline-success">Submit</button>
    <button type="reset" class="btn btn-outline-primary">Cancel</button>

  </fieldset>
</form>






<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>  
</body>
</html>
