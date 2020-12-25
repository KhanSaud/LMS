<?php session_start(); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Books</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="../css/style.css">
<script>
function formvalidation()
{
  var passlen= $('#isbn').val().length;
if(passlen < 13)
{
  alert("Enter Min 13 Digits of ISBN !!");
return false;
}
  }
  </script>
</head>

<body>
<?php include "header_admin.php"; ?>
<br>
<div class="container">
<form method="post" onsubmit="return formvalidation()"  action="insert_book.php">
  <fieldset>
  <center><legend>Add Books</legend>
    <img src="../images/addbook.png" style="height:80px;"></center>
    <?php
if(isset($_SESSION['added']))
{
  echo $_SESSION['added']; 
  unset ($_SESSION['added']);
}

?>
    <div class="form-group">
     <b><label>ISBN Number</label></b> 
      <input type="text" class="form-control" name="isbn" id="isbn"  placeholder="Enter Number" required >
    </div>
    <div class="form-group">
     <b><label>Name</label></b> 
      <input type="text" class="form-control" name="name" id="name"  placeholder="Enter Name" required >
    </div>
    <div class="form-group">
     <b><label>Author</label></b> 
      <input type="text" class="form-control" name="author" id="author"  placeholder="Enter Author's Name" required >
    </div>
    <div class="form-group">
     <b><label>Version</label></b> 
      <input type="text" class="form-control" name="version" id="version"  placeholder="Enter Book Version" required >
    </div>
    <b><label>Category</label></b>
    <div class="form-check">
        <label class="form-check-label">
          <input class="form-check-input" name="category" type="checkbox" value="Science">
          Computer Science
        </label>
        </div>
      <div class="form-check">
        <label class="form-check-label">
          <input class="form-check-input" name="category" type="checkbox" value="Commerce" >
          Commerce
        </label>
      </div>
      <div class="form-check">
        <label class="form-check-label">
          <input class="form-check-input" name="category" type="checkbox" value="English" >
          English
        </label>
      </div>
    </fieldset>
    <br>
    <button type="submit" class="btn btn-outline-success">Submit</button>
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
