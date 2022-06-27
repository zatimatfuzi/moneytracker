<?php
    include_once 'layouts/header.php';
    include_once 'layouts/navbar.php';
?>

<div class="container flex-column d-flex justify-content-center align-items-center">
    <h1 class="mt-5">My Profile</h1>

    <div class="row w-100 d-flex justify-content-center mt-3">
        <div class="col-sm-5 card mr-2">
            <?php
                include_once 'components/editProfile.php';
            ?>
        </div>
        <div class="col-sm-auto"></div>
        <div class="col-sm-5 card ml-2">
            <?php
                include_once 'components/changePw.php';
            ?>
        </div>
    </div>
    <div class="my-5">
        <a href="./process/deleteUser.php" class="btn btn-danger">Delete Account</a>
    </div>
</div>

<?php
    include_once 'layouts/footer.php';
?>