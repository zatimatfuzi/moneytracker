<form action="./process/changePassword.php" method="post" onsubmit="return matchPw()">
    <div class="input-group my-3 p-2">
        <span class="input-group-text" id="basic-addon3">New Password</span>
        <input type="password" class="form-control" id="password" name="password" aria-describedby="basic-addon3" required>
    </div>
    <div class="input-group my-3 p-2">
        <span class="input-group-text" id="basic-addon3">Confirm New Password</span>
        <input type="password" class="form-control" id="confirm-password" name="confirm-password" aria-describedby="basic-addon3" required>
    </div>
    <p class="my-3 px-2 mt-2 mb-2 text-danger" id="message"></p>
    <div class="d-grid gap-2 my-3 p-2">
        <button type="submit" class="btn btn-primary" type="button">Change Password</button>
    </div>
</form>