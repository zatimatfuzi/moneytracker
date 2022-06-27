<?php
    SESSION_START();
    $id = $_SESSION['sess'];
    $conn = mysqli_connect('localhost', 'root', '', 'mt');
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        $sql = "SELECT * FROM user WHERE email = '$id'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                $email = $row["email"];
                $password = $row["password"];
                $name = $row["name"];
            }
        }
    }     
?>
<form action="./process/updateUser.php" method="post">
    <div class="input-group my-3 p-2">
        <span class="input-group-text" id="basic-addon3">Name</span>
        <input type="text" class="form-control" id="name" name="name" value="<?php echo $name ?>" aria-describedby="basic-addon3" required>
    </div>
    <div class="input-group my-3 p-2">
        <span class="input-group-text" id="basic-addon3">Email</span>
        <input type="email" class="form-control" id="email" name="email" value="<?php echo $email ?>" aria-describedby="basic-addon3" required>
    </div>
    <div class="d-grid gap-2 my-3 p-2">
        <button type="submit" class="btn btn-primary" type="button">Save Change</button>
    </div>
</form>