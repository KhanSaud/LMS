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
 
$book_id = $_GET['id'];

$query = "delete from `addbook` where `id`='$book_id'";
$res = mysqli_query($conn,$query);

    if($res)
    {
        $_SESSION['deleted']="<center><b>Book Deleted Successfully !!</b></center>";
        header('Location:available_book.php');
    }
    else
    {
        echo "Book Not Deleted";

    }

?>