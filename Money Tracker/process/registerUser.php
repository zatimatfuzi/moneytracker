<?php
    SESSION_START();
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $conn = mysqli_connect('localhost', 'root', '', 'mt');

    $sql = "INSERT INTO `user` (`email`,`password`, `name`) VALUES ('$email', '$password', '$name')";
    if ($conn->query($sql) === TRUE){
        $_SESSION['sess'] = $email;
        $_SESSION['notify'] = "7";
        header("location: ./../dashboard.php");
    } 
    else { 
        $_SESSION['notify'] = "8";
        header("location: ./../register.php");
    }         
?>