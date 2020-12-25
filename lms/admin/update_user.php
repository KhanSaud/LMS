<?php

session_start();



$host="localhost";
$username = "root";
$password = "";
$db = "lms";


$conn = mysqli_connect($host,$username,$password,$db);

if(!$conn)
{
    die("Database connection error");
}

if(isset($_REQUEST['email']))
{ 
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $desig = $_POST['designation'];
    
    $query = "update  `signup` set `name`='$name',`email`='$email',`password`='$password',`designation`='$desig' 
    where `id`='$id'";
    

   

    $res=mysqli_query($conn,$query);

    if($res)
    {
        $_SESSION['success']="<center><b>User Updated Successfully !!</b></center>";
        header('Location:edit_user.php');
    }
    else
    {
        echo "Not Updated";

    }


}








?>