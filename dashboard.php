<?php
session_start();
if(!isset($_SESSION['id'])){
    header('location:login.php');
}

?>
hello
<a href="logout.php">Logout</a>