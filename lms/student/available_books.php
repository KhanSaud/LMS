<?php
include "../auth/auth.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Available Books</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="../css/style.css">
</head>

<body>
<?php include "header_student.php"; ?>
<br>
<div class="container-fluid">
  <center><legend>Available Books</legend>
  <p>This is the list of available books in the Library</p>
    <img src="../images/list.png" style="height:80px;"></center>
<br>


<!-- table -->
<table class="table table-hover table-primary">
  <thead>
    <tr>
      <th scope="col">Book Id</th>
      <th scope="col">ISBN No.</th>
      <th scope="col">Name</th>
      <th scope="col">Author Name</th>
      <th scope="col">Version</th>
      <th scope="col">Category</th>

    </tr>
  </thead>
  <tbody>
    <?php
    $i=1;
        $query = "Select * from addbook";
        $res = mysqli_query($conn,$query);
        $count = mysqli_num_rows($res);
        if($count>0)
        {
           while($row = mysqli_fetch_array($res))
           { 
    ?>
    <tr class="table-light">
      <th scope="row"><?php echo $i;?></th>
      <td><?php echo $row['isbn'];?></td>
      <td><?php echo $row['name'];?></td>
      <td><?php echo $row['author'];?></td>
      <td><?php echo $row['version'];?></td>
      <td><?php echo $row['book_type'];?></td>
      <td>
</td>

    </tr>
    <?php
        $i++;
           } //end of while
    }
    else{
echo "No Record Found";
    }
    ?>
  </tbody>
</table>

</form>
<!-- table end -->


</div>



<div style="height:50px;">

</div>




<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>  
</body>
</html>
