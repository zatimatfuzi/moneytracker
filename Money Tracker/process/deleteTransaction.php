<?php
    SESSION_START();
    $temp = $_SESSION["sess"];
    $id = $_GET['id'];
    $conn = mysqli_connect('localhost', 'root', '', 'mt');

    $sql = "DELETE FROM `transaction` WHERE `id` = '$id'";
    if ($conn->query($sql) === TRUE){
     $_SESSION['notify'] = "3";
         header("location: ./../dashboard.php");
    } 
    else { 
         header("location: ./../dashboard.php");
    }         
?>