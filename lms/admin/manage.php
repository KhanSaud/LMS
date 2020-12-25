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
 
echo $book_id = $_GET['id'];
 $query = "select *from `addbook` where `id`='$book_id'";
$res = mysqli_query($conn,$query);

    if($res)
    {
        $_SESSION['success']="<center><b>Book Deleted Successfully !!</b></center>";
        header('Location:available_book.php');
    }
    else
    {
        echo "Book Not Deleted";

    }

?>