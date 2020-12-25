<?php

session_start();

$host = "localhost";
$username = "root";
$password = "";
$db = "lms";

$conn = mysqli_connect($host,$username,$password,$db);

if(!$conn)
{
    die("Database Connection Error");
}

if(isset($_POST['email']))
{
    $email = $_POST['email'];
    $pass = md5($_POST['password']);
    $query = "Select * from signup where email='$email' AND password='$pass'";
    $res = mysqli_query($conn,$query);
    $count = mysqli_num_rows($res);
    $row = mysqli_fetch_array($res);
    // $_SESSION['user'] = $row['name'];


    if($count==1)
    {
        $session_id = session_id();
        $_SESSION['auth']=$session_id; //passing value to auth and chechk whther the id s created or not
    $desig = $row['designation'];
    if($desig == 'Librarian')
    {
        header('Location:admin/admin_home.php');
    }
    else if($desig == 'Student')
    {
        header('Location:student/student_home.php');  
    }
    else{
        $_SESSION['failed']="You Have enetered wrong Information !!";
        header('Location:login.php');
    }
}
else{
    echo "Log in failed";
}

}





?>