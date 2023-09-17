<?php
session_start();

if (isset($_SESSION['login'])) {
    header("location: index.php");
    exit;
}

include "db.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="style.css">
    <?php include "_css.php" ?>
</head>

<body>
    <div class="auth-wrapper">
        <div class="auth-content text-center">
            <img src="assets/images/logo.png" alt="" class="img-fluid mb-4">
            <div class="card borderless">
                <div class="row align-items-center ">
                    <div class="col-md-12">
                        <div class="card-body">
                            <h4 class="mb-3 f-w-400">Sing in</h4>
                            <?php
                            if (isset($_SESSION['flash'])) {
                                $message = $_SESSION['flash'];
                                unset($_SESSION['flash']);
                                echo $message;
                            }
                            ?>
                            <hr>
                            <form action="crud.php" method="post">
                                <div class="form-group mb-3">
                                    <input type="text" class="form-control" name="nis" id="nis" placeholder="Masukan NIS">
                                </div>
                                <div class="form-group mb-4">
                                    <input type="password" class="form-control" name="password" id="Password" placeholder="Password">
                                </div>
                                <div class="custom-control custom-checkbox text-left mb-4 mt-2">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">Ingat Saya.</label>
                                </div>
                                <button type="submit" class="btn btn-block btn-primary mb-4" name="login">Log in</button>
                                <hr>
                                <p class="mb-2 text-muted">Forgot password? <a href="auth-reset-password.html" class="f-w-400">Reset</a></p>
                                <p class="mb-0 text-muted">Don’t have an account? <a href="" class="f-w-400">Signup</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include "_js.php" ?>
</body>

</html>