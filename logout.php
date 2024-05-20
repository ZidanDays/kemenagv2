<?php
session_start();

// Hapus semua data sesi
$_SESSION = array();

// Jika ingin menghapus sesi sepenuhnya, termasuk cookie sesi
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(
        session_name(),
        '',
        time() - 42000,
        $params["path"],
        $params["domain"],
        $params["secure"],
        $params["httponly"]
    );
}

// Akhir sesi
session_destroy();

// Redirect ke halaman login
header("Location: auth-signin.php");
exit;
