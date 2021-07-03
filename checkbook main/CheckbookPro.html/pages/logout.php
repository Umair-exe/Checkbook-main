<?php
session_start();

if(!isset($_SESSION['loggedIn'])) {
    header('location:login.php?message=Login_first!');
}

session_destroy();
header('location:login.php?message=logged_out');
?>