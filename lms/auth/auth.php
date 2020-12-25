<!-- This restrict the user to not use admin link directly only logged in user can see dashboard -->

<?php
session_start();


$host = "localhost";
$username = "root";
$pass = "";
$db = "lms";

$conn = mysqli_connect($host,$username,$pass,$db);


if(!$conn)
{
    die("Database connection error");
}


if(!isset($_SESSION['auth'])) //if id is not created it will move back to login page
{
header('Location:../login.php');
}
?>