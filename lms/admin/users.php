<?php
include "../auth/auth.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="../css/style.css">
</head>

<body>
<?php include "header_admin.php"; ?>
<br>
<div class="container-fluid">
  <center><legend>Registered Users</legend>
    <img src="../images/users.png" style="height:80px;"></center>
<br>

<!-- table -->
<table class="table table-hover table-primary">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Designation</th>
      <th scope="col">Date & Time</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    <?php
    $i=1;
        $query = "Select * from signup";
        $res = mysqli_query($conn,$query);
        $count = mysqli_num_rows($res);
        if($count>0)
        {
           while($row = mysqli_fetch_array($res))
           { 
    ?>
    <tr class="table-light">
      <th scope="row"><?php echo $i;?></th>
      <td><?php echo $row['name'];?></td>
      <td><?php echo $row['email'];?></td>
      <td><?php echo $row['designation'];?></td>
      <td><?php echo $row['date_time'];?></td>
      <td>
      <a href="edit_user.php?id=<?php echo $row['id']; ?>"><button type="submit" class="btn btn-outline-success">Edit</button></a>
      <a href="delete_user.php?id=<?php echo $row['id'];?>"><button type="submit" class="btn btn-outline-danger">Delete</button></a>
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


<!-- table end -->


</div>



<div style="height:50px;">

</div>




<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>  
</body>
</html>
