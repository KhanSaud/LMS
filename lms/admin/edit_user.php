<?php
include "../auth/auth.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="../css/style.css">

  </script>
</head>

<body>
<?php include "header_admin.php"; ?>
<br>
<div class="container">
<form method="post"   action="update_user.php">
  <fieldset>
  <center><legend>Update User</legend>
    <img src="../images/signup.png" style="height:80px;"></center>
    <?php
if(isset($_SESSION['success']))
{
  echo $_SESSION['success']; 
  unset ($_SESSION['success']);
}
?>

<?php
$id=$_GET['id']; //getting the value which is passed on url
$query = "select * from signup where id = '$id'";
$res = mysqli_query($conn,$query);
$data = mysqli_fetch_array($res);
?>

<input type="hidden" name="id" value="<?php echo $id;?>">

<div class="form-group">
     <b><label for="exampleInputEmail1">Name</label></b> 
      <input type="text" class="form-control" name="name" value="<?php echo $data['name'];?>"  placeholder="Enter Name" required >
    </div>
    <div class="form-group">
      <b><label for="exampleInputEmail1">Email address</label></b>
      <input type="email" class="form-control" name="email"  value="<?php echo $data['email'];?>"  placeholder="Enter email" required >
    </div>
    <div class="form-group">
      <b><label for="exampleInputPassword1">Password</label></b>
      <input type="password" class="form-control" name="password"   placeholder="Password" required>
    </div>
    <b><label>Designation</label></b>
    <div class="form-check">
        <label class="form-check-label">
          <input class="form-check-input" name="designation" type="checkbox" value="Librarian" <?php if($data['designation']=='Librarian'){
              echo "checked";}?>>
        Librarian
        </label>
        </div>
      <div class="form-check">
        <label class="form-check-label">
          <input class="form-check-input" name="designation" type="checkbox" value="Student" <?php if($data['designation']=='Student'){
              echo "checked";}?> >
          Student
        </label>
      </div>
    </fieldset>
    <br>
    <button type="submit" class="btn btn-outline-success">Update</button>
    <button type="reset" class="btn btn-outline-primary">Cancel</button>
  </fieldset>
</form>
</div>

<div style="height:50px;">

</div>




<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>  
</body>
</html>
