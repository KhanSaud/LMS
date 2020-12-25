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
if(isset($_REQUEST['email']))
{
    $email =$_POST['email'];
    $bkname = $_POST['bkname'];
    $authname = $_POST['authname'];
    $vname = $_POST['vname'];
    $cat = $_POST['cat'];

     $query = "insert into issuebook (`id`,`email`,`bkname`,`authname`,`vname`,`cat`)values('','$email','$bkname','$authname','$vname','$cat')";
    $res = mysqli_query($conn,$query);
    if($res)
    {
        $_SESSION['issued']="<center><b>Book Issued Successfully !!</b></center>";
        header('Location:issued.php');

    }
    else
    {
        echo "Book not Issued !!";
    }

}


?>