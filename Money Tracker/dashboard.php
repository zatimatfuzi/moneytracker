<?php

    include_once 'layouts/header.php';
    include_once 'layouts/navbar.php';

    SESSION_START();
    $temp = $_SESSION['sess'];
    $conn = mysqli_connect('localhost', 'root', '', 'mt');
    $sql = "SELECT * FROM `transaction` WHERE `email` = '$temp'";
    $income = 0.00;
    $expense = 0.00;
    $balance = 0.00;
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            if($row["type"] == "income"){
                $income += $row["amount"];
            } else {
                $expense += $row["amount"];
            }
        }
    } else {
    }
    $balance =  number_format($income - $expense, 2, '.', '');
    $conn->close();
?>   
<div class="container flex-column d-flex justify-content-center align-items-center">
    <?php
        include_once 'components/addTrx.php';
    ?>    

    <div class="text-center">
        <h1><b>Cash Balance: <?php echo  $balance; ?> </b> </h1>
    </div>

    <?php
        include_once 'components/list.php';
    ?>
</div>
<?php
    include_once 'layouts/footer.php';
?>

