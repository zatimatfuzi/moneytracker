<?php
    SESSION_START();
    $id = $_SESSION["sess"];
    $conn = mysqli_connect('localhost', 'root', '', 'mt');

    $sql = "DELETE FROM `user` WHERE `email` = '$id'";
    if ($conn->query($sql) === TRUE){
        $sql = "DELETE FROM `transaction` WHERE `email` = '$id'";
        $conn->query($sql);
        $_SESSION['notify'] = "3";
        header("location: ./../index.php");
    } 
    else { 
        header("location: ./../index.php");
    }         
?>