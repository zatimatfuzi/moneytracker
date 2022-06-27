<?php
session_start();
//unset($_SESSION['sess']);
//unset($_SESSION['notify']);
$_SESSION['notify'] = "99";
header("Location: ./../login.php");
?>