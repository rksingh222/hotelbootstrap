<?php
include("../path.php");
include("inc/essentials.php");
include("inc/db_config.php");
include("../controller/login.php");

alreadyLoggedIn();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin panel page</title>
    <?php include("inc/links.php") ?>
    <style>
        .login-form {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 400px;
        }
    </style>
</head>

<body class="bg-light">
    <div class="login-form text-center shadow bg-white rounded overflow-hidden">
        <h4 class="bg-dark text-white py-3">Admin Login Page</h4>
        <form method="POST" action="index.php">
            <div class="p-4">
                <div class="mb-3">
                    <input name="admin_name" type="text" class="form-control shadow-none text-center" placeholder="username">
                </div>
                <div class="mb-3">
                    <input name="admin_pass" type="password" class="form-control shadow-none text-center" placeholder="password">
                </div>
                <button name="login" type="submit" class="btn text-white custom-btn">submit</button>
            </div>
        </form>
    </div>
    <?php include("inc/scripts.php") ?>
</body>

</html>