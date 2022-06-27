<?php
    SESSION_START();
    $id = $_SESSION['sess'];
    $password = $_POST['password'];
    $conn = mysqli_connect('localhost', 'root', '', 'mt');

    $sql = "UPDATE `user` SET `password` ='$password' WHERE `email` = '$id'";
    if ($conn->query($sql) === TRUE){
        $_SESSION['notify'] = "6";
        header("location: ./../profile.php");
    } 
    else { 
        header("location: ./../profile.php");
    }         
?>