<!DOCTYPE html>
<?php
    SESSION_START();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Money Tracker | Register</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="css/animate.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="js/jquery.3.2.1.min.js"></script>
    <script src="js/bootstrap-notify.js"></script>
    <script src="js/app.js"></script>
</head>
<body>
    <div class="container">
        <div class="mt-5">
            <div class="text-center w-100 d-flex justify-content-center">
                <form class="card w-25 py-5 px-3" action="./process/registerUser.php" method="post" onsubmit="return matchPw()">
                    <h1 class="h4 mb-3 fw-normal">Fill in your details here.</h1>

                    <div class="form-floating my-2">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                        <label for="floatingInput">Name</label>
                    </div>

                    <div class="form-floating my-2">
                        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required>
                        <label for="floatingInput">Email address</label>
                    </div>
                    
                    <div class="form-floating my-2">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                        <label for="floatingPassword">Password</label>
                    </div>

                    <div class="form-floating my-2">
                        <input type="password" class="form-control" id="confirm-password" name="confirm-password" placeholder="Confirm Password" required>
                        <label for="floatingPassword">Confirm Password</label>
                    </div>

                    <p class="mt-2 mb-2 text-danger" id="message"></p>

                    <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
                    <a class="my-2 text-success" href="login.php">Already have account? Login here</a>
                    <p class="mt-4 mb-2 text-muted">&copy; 2021</p>
                </form>
            </div>
        </div>
    </div>
    <script>
         if( <?php echo $_SESSION['notify'] ?> == "8"){
            $.notify({
                message: '<b>Failed To Register !!</b>',
            },{
                type: 'danger',
                allow_dismiss: false
            });
         } 

         <?php $_SESSION['notify'] =  "0"; ?>
    </script>
</body>
</html>