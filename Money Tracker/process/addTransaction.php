<?php
    SESSION_START();
    $temp = $_SESSION["sess"];
    $type = $_POST['type'];
    $item = $_POST['item'];
    $amount = $_POST['amount'];
    $date = date("y-m-d");
    $conn = mysqli_connect('localhost', 'root', '', 'mt');

    $sql = "INSERT INTO `transaction` (`item`,`amount`, `type`, `email`, `date`) VALUES ('$item', '$amount', '$type', '$temp', '$date')";
    if ($conn->query($sql) === TRUE){
        $_SESSION['notify'] = "2";
        header("location: ./../dashboard.php");
    } 
    else { 
        header("location: ./../dashboard.php");
    }         
?>