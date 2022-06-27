<?php
    $temp = $_SESSION['sess'];
    $conn = mysqli_connect('localhost', 'root', '', 'mt');
?>
<div class="w-75">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="income-tab" data-bs-toggle="tab" data-bs-target="#income" type="button" role="tab" aria-controls="income" aria-selected="true">Income</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="expense-tab" data-bs-toggle="tab" data-bs-target="#expense" type="button" role="tab" aria-controls="expense" aria-selected="false">Expense</button>
        </li>
    </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active p-2" id="income" role="tabpanel" aria-labelledby="income-tab">
                <table class="table table-success table-striped" style="text-align: center;">
                    <tr>
                        <th width="40%">Items</th>
                        <th width="10%">Amount</th>
                        <th width="20%">Date</th>
                        <th width="30%">Action</th>
                    </tr>
                    <tbody>
                        <?php
                            $result = $conn->query("SELECT * FROM `transaction` WHERE `type` = 'income' AND `email` = '$temp' ORDER BY `date` DESC ");
                            while ($mem = mysqli_fetch_assoc($result)):
                                echo '<tr>';  
                                    echo '<td>'.$mem['item'].'</td>';
                                    echo '<td>'.number_format($mem['amount'], 2, '.', '').'</td>'; 
                                    echo '<td>'.$mem['date'].'</td>';
                                    echo '<td>
                                            <a type="button" href="./process/deleteTransaction.php?id=' . $mem['id'] . '" class="btn btn-danger mb-3">Delete</a>
                                        </td>';
                                echo '</tr>';
                            endwhile;
                            $result->close();
                        ?>                   
                    </tbody>         
                </table>
            </div>
            <div class="tab-pane fade p-2" id="expense" role="tabpanel" aria-labelledby="expense-tab">
                <table class="table table-danger table-striped" style="text-align: center;">
                    <tr>
                        <th width="40%">Items</th>
                        <th width="10%">Amount</th>
                        <th width="20%">Date</th>
                        <th width="30%">Action</th>
                    </tr>
                    <tbody>
                        <?php
                            $result = $conn->query("SELECT * FROM `transaction` WHERE `type` = 'expense'  AND `email` = '$temp' ORDER BY `date` DESC");
                            while ($mem = mysqli_fetch_assoc($result)):
                                echo '<tr>';
                                    echo '<td>'.$mem['item'].'</td>';
                                    echo '<td>'.number_format($mem['amount'], 2, '.', '').'</td>'; 
                                    echo '<td>'.$mem['date'].'</td>';   
                                    echo '<td>
                                            <a type="button" href="./process/deleteTransaction.php?id=' . $mem['id'] . '" class="btn btn-danger mb-3">Delete</a>
                                        </td>';
                                echo '</tr>';
                            endwhile;
                            $result->close();
                        ?>                   
                    </tbody>         
                </table>
            </div>
        </div>
</div>