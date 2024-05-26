<?php
// Koneksi ke database
include 'config/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $username = $_POST['username'];
    $email = $_POST['email'];
    $agama = $_POST['religion'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Enkripsi password
    $full_name = $_POST['full_name'];
    $role_id = $_POST['role'];

    // Masukkan data ke tabel users
    $sql = "INSERT INTO users (username, email, password, full_name, role_id, religion) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $username, $email, $password, $full_name, $role_id, $agama);

    if ($stmt->execute()) {
        echo "Registrasi berhasil. <a href='auth-signin.php'>Login</a>";
    } else {
        echo "Registrasi gagal: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
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
    <meta name="author" content="Phoenixcoded" />
    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- vendor css -->
    <link rel="stylesheet" href="assets/css/style1.css">
</head>

<body>
    <!-- [ auth-signup ] start -->
    <div class="auth-wrapper">
        <div class="auth-content text-center">
            <img src="upload/logo_kemenag.png" alt="" class="img-fluid mb-4">
            <div class="card borderless">
                <div class="row align-items-center text-center">
                    <div class="col-md-12">
                        <div class="card-body">
                            <h4 class="f-w-400">Register Account</h4>
                            <hr>
                            <form action="register.php" method="POST">
                                <div class="form-group mb-3">
                                    <input type="text" class="form-control" name="username" placeholder="Username"
                                        required>
                                </div>
                                <div class="form-group mb-3">
                                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                                </div>
                                <div class="form-group mb-3">
                                    <select class="form-control" name="religion" required>
                                        <option value="" disabled selected>Pilih Agama</option>
                                        <option value="islam">Islam</option>
                                        <option value="kristen">Kristen</option>
                                        <option value="katolik">Katolik</option>
                                        <option value="hindu">Hindu</option>
                                    </select>
                                </div>
                                <div class="form-group mb-4">
                                    <input type="password" class="form-control" name="password" placeholder="Password"
                                        required>
                                </div>
                                <div class="form-group mb-4">
                                    <input type="text" class="form-control" name="full_name" placeholder="Full Name"
                                        required>
                                </div>
                                <div class="form-group mb-4">
                                    <select class="form-control" name="role" required>
                                        <option value="" disabled selected>Select Role</option>
                                        <option value="3">User</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block mb-4">Register</button>
                            </form>
                            <hr>
                            <p class="mb-2">Already have an account? <a href="auth-signin.php"
                                    class="f-w-400">Signin</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- [ auth-signup ] end -->
    <!-- Required Js -->
    <script src="assets/js/vendor-all.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script src="assets/js/pcoded.min.js"></script>
</body>

</html>