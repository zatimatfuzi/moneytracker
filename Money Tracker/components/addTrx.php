<h3 class="mt-5" >Fill in the form below to add money transaction</h3>
<form class="row g-3 mt-1" action="./process/addTransaction.php" method="post">
    <div class="col-auto">
        <select class="form-select" name="type" placeholder="test" required>
            <option disabled selected>Select Transaction Type</option>
            <option value="income">Income</option>
            <option value="expense">Expense</option>
        </select>
    </div>
    <div class="col-auto">
        <label for="staticEmail2" class="visually-hidden">Item</label>
        <input type="text" class="form-control" id="item" name="item" placeholder="Item, e.g: Pay bill" required>
    </div>
    <div class="col-auto">
        <label for="amount" class="visually-hidden">Amount</label>
        <input type="number" class="form-control" id="amount" name="amount" placeholder="Amount, e.g: 200.00" required>
    </div>
    <div class="col-auto">
        <button type="submit" class="btn btn-primary mb-3">Add Transaction</button>
    </div>
</form>