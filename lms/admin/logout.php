<?php
session_start();
unset($_SESSION['auth']); //fetching value and unset the session
header('Location:../login.php');

?>