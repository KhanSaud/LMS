<?php
session_start();


$host = "localhost";
$username = "root";
$password = "";
$db = "lms";

$conn = mysqli_connect($host,$username,$password,$db);

if(!$conn)
{
    die ("Database Connection Error !!");
}
if(isset($_REQUEST['isbn']))
{
    $isbn = $_POST['isbn'];
    $name = $_POST['name'];
    $author = $_POST['author'];
    $version = $_POST['version'];
    $category = $_POST['category'];

    $query = "insert into addbook (`id`,`isbn`,`name`,`author`,`version`,`book_type`)values('','$isbn','$name','$author','$version','$category')";

    $res = mysqli_query($conn,$query);
    if($res)
    {
        $_SESSION['added']="<center><b>Book Added Successfully !!</b></center>";
        header('Location:add_books.php');

    }
    else
    {
        echo "Book not Added !!";
    }

}


?>