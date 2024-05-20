<?php
session_start();

// Periksa apakah pengguna sudah login
if (isset($_SESSION["user_id"])) {
    // Redirect berdasarkan role_id
    if ($_SESSION["role_id"] == 3) {
        header("Location: index.php");
    } elseif ($_SESSION["role_id"] == 2) {
        header("Location: PA/index.php");
    }
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Kemenag - Tondano</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <!-- <meta name="author" content="Phoenixcoded" /> -->
    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/kemenag.png" type="image/x-icon">
    <!-- vendor css -->
    <link rel="stylesheet" href="assets/css/style1.css">
</head>

<body>
    <!-- [ auth-signin ] start -->
    <div class="auth-wrapper">
        <div class="auth-content text-center">
            <img src="upload/logo_kemenag.png" alt="" class="img-fluid mb-4">
            <div class="card borderless">
                <div class="row align-items-center text-center">
                    <div class="col-md-12">
                        <div class="card-body">
                            <h4 class="f-w-400">Login</h4>
                            <hr>
                            <form action="auth-process.php" method="POST">
                                <div class="form-group mb-3">
                                    <input type="text" class="form-control" name="username" placeholder="Username"
                                        required>
                                </div>
                                <div class="form-group mb-4">
                                    <input type="password" class="form-control" name="password" placeholder="Password"
                                        required>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block mb-4">Login</button>
                            </form>
                            <hr>
                            <p class="mb-2">Belum Punya Akun? <a href="register.php" class="f-w-400">Daftar!</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- [ auth-signin ] end -->
    <!-- Required Js -->
    <script src="assets/js/vendor-all.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script src="assets/js/pcoded.min.js"></script>
</body>

</html>