<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">


</head>
<body>

<?php include "header.php"; ?>

<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="images/image1.jpg" class="d-block w-100 image" data-interval="03" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/image2.jpg" class="d-block w-100 image" data-interval="03" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/image3.jpg" class="d-block w-100 image" data-interval="05" alt="...">
    </div>
  </div>
</div>

<br><br>

<div class="container-fluid">
<center><h2 id="about"><b>About Us</b></h2></center>
<div class="row">
<div class="col-lg-6 col-md-6">
Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam molestiae dolore quidem pariatur alias nulla adipisci neque quas quasi eos laboriosam doloremque, explicabo cupiditate possimus, at numquam, sint itaque. Deserunt!
Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam molestiae dolore quidem pariatur alias nulla adipisci neque quas quasi eos laboriosam doloremque, explicabo cupiditate possimus, at numquam, sint itaque. Deserunt!
Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam molestiae dolore quidem pariatur alias nulla adipisci neque quas quasi eos laboriosam doloremque, explicabo cupiditate possimus, at numquam, sint itaque. Deserunt!
Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam molestiae dolore quidem pariatur alias nulla adipisci neque quas quasi eos laboriosam doloremque, explicabo cupiditate possimus, at numquam, sint itaque. Deserunt!
</div>
<div class="col-lg-6 col-md-6">
<img src="images/about.jpg" style="height:350px;">
</div>
</div>
</div>
    
    <br> <br>


<div class="container">
<center><h2 id="contact"><b>Contact Us</b></h2></center>
<div class="row">
<div class="col-lg-8 col-md-8">
<form action="mailto:contact@yourdomain.com" method="post">
<div class="form-group row">
    </div>
    <div class="form-group">
      <label for="enter name">Name</label>
      <input type="text" class="form-control" id="exampleInputname" name="Inputname" placeholder="Enter Name"  required>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email" required>
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="exampleTextarea">Message</label>
      <textarea class="form-control" id="exampleTextarea" rows="3" style="resize:none;" placeholder="Enter Message" require></textarea>
    </div>
</div>
<div class="col-lg-4 col-md-4">
<img src="images/contact.jpg" style="height:250px;">
</div>  
<button type="reset" class="btn btn-outline-danger" style="margin-left:15px;">Cancel</button>
<button type="submit" class="btn btn-outline-primary"  style="margin-left:2px;"> Submit</button>

</form>
</div>
</div>

<br><br>

<div class="container-fluid" style="background-color:blue;height:71px;">
<br>
<p style="color:white;text-align:center">© Developer Saud</p>


</div>







 
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
