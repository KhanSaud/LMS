<?php
include "../auth/auth.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Issue Book</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="../css/style.css">
</head>

<body>
<?php include "header_student.php"; ?>
<br>
<div class="container">
 <center><legend>Issue Books</legend>
    <img src="../images/addbook.png" style="height:80px;"></center>
  

    <?php

if(isset($_SESSION['issued']))
{
  echo $_SESSION['issued'];
  unset($_SESSION['issued']);
}

?>

<form action="issue_book.php" method="post">


<div class="form-group">
<label>Student Email</label>
<input type="email" class="form-control" name="email" placeholder="Enter Your Email" required>
</div>


<div class="form-group">
      <label >Book Name</label>
      <select class="form-control" name="bkname"  required="">
      <option hidden>Select Book</option>
        <?php
       $query = "select name from `addbook`";
       $res = mysqli_query($conn,$query);
       while ($data = mysqli_fetch_array($res))
       {
       ?>
        <option><?php echo $data['name'];?></option>
        <?php } ?>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleSelect1">Author Name</label>
      <select class="form-control" id="exampleSelect1" name="authname">
      <option hidden>Select Author</option>
        <?php
       $query = "select author from `addbook`";
       $res = mysqli_query($conn,$query);
       while ($data = mysqli_fetch_array($res))
       {
       ?>
        <option><?php echo $data['author']; ?></option>
        <?php }  ?>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleSelect1">Book Version</label>
      <select class="form-control" id="exampleSelect1" name="vname">
      <option hidden>Select Version</option>
        <?php
       $query = "select version from `addbook`";
       $res = mysqli_query($conn,$query);
       while ($data = mysqli_fetch_array($res))
       {
       ?>
        <option><?php echo $data['version'];?></option>
        <?php } ?>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleSelect1">Book Category</label>
      <select class="form-control" id="exampleSelect1" name="cat">
      <option hidden>Select Category</option>
        <?php
       $query = "select book_type from `addbook`";
       $res = mysqli_query($conn,$query);
       while ($data = mysqli_fetch_array($res))
       {
       ?>
        <option><?php echo $data['book_type'];?></option>
        <?php } ?>
      </select>
    </div>
    
<div class="form-group">
<label>Issue Date</label>
<input type="text" class="form-control" name="issue_date" value="<?php echo date("d-m-yy");?>" required>
</div>

    <button type="submit" class="btn btn-outline-success">Issue</button>
    <button type="reset" class="btn btn-outline-primary">Cancel</button>


</form>
</div>
<div style="height:50px;">

</div>





<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>  
</body>
</html>
