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
 
$user_id = $_GET['id'];

$query = "delete from `signup` where `id`='$user_id'";
$res = mysqli_query($conn,$query);

    if($res)
    {
        $_SESSION['success']="<center><b>User Deleted Successfully !!</b></center>";
        header('Location:admin_home.php');
    }
    else
    {
        echo "User Not Deleted";

    }

?>