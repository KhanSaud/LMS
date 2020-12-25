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
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $desig = $_POST['designation'];

    $query = "insert into signup(`id`,`name`,`email`,`password`,`designation`)values('','$name','$email','$password','$desig')";

    $res=mysqli_query($conn,$query);

    if($res)
    {
        $_SESSION['success']="<center><b>You Have Signed Up Successfully !!</b></center>";
        header('Location:signup.php');
    }
    else
    {
        echo "Not Inserted";

    }


}








?>