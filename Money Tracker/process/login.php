<html>
<body>
    <?php
    SESSION_START();
    $email = $_POST["email"];
    $pass = $_POST["password"];
    $conn = mysqli_connect('localhost', 'root', '', 'mt');
    // Check connection
    if (!$conn) {
        die("Connection failed !");
    }
    else {
        $sql = "SELECT * FROM `user` WHERE `email` = '$email' AND `password` = '$pass'";
        $query = mysqli_query($conn, $sql);
        $row = mysqli_num_rows($query);
         if ($row == 1) {
           
            $_SESSION['sess'] = $email;
            $_SESSION['notify'] = "1";
            header("location: ./../dashboard.php");
         
        }
        else {
            $_SESSION['notify'] = "2";
            header("location: ./../login.php");
        }     
    } 
    ?>
</body>

</html>