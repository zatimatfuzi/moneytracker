<?php
    SESSION_START();
    $temp = $_SESSION["sess"];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $conn = mysqli_connect('localhost', 'root', '', 'mt');

    $sql = "UPDATE `user` SET `name` ='$name', `email` ='$email' WHERE `email` = '$temp'";
    if ($conn->query($sql) === TRUE){
        $sql = "UPDATE `transaction` SET `email` ='$email' WHERE `email` = '$temp'";
        $conn->query($sql);
        $_SESSION['notify'] = "4";
        $_SESSION['sess'] = $email;
        header("location: ./../profile.php");
    } 
    else { 
        $_SESSION['notify'] = "5";
        header("location: ./../profile.php");
    }         
?>