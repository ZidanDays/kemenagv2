<?php
include './config/config.php';

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

// Proses login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Cek data di database
    $sql = "SELECT u.id, u.username, u.password, u.role_id, u.religion 
            FROM users u 
            LEFT JOIN user_details ud ON u.id = ud.user_id 
            WHERE u.username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($id, $username, $hashed_password, $role_id, $religion);
    $stmt->fetch();

    if ($stmt->num_rows > 0 && password_verify($password, $hashed_password)) {
        // Login berhasil
        $_SESSION['user_id'] = $id;
        $_SESSION['username'] = $username;
        $_SESSION['role_id'] = $role_id;
        $_SESSION['religion'] = $religion;

        // Redirect berdasarkan role_id
        if ($role_id == 3) {
            header("Location: index.php");
        } elseif ($role_id == 2) {
            header("Location: PA/index.php");
        }
        exit();
    } else {
        // Login gagal
        echo "Username atau password salah.";
    }

    $stmt->close();
}

$conn->close();
?>
Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus eveniet, explicabo dolorum, nostrum facilis
consectetur quibusdam, quo exercitationem ducimus aperiam corrupti adipisci quas assumenda tenetur unde praesentium
harum hic. Fuga animi, temporibus itaque praesentium ipsum iste tempore quae adipisci. Alias quod id laborum ipsam
facere eaque officiis quasi nulla ex velit perspiciatis molestiae, dolorem quibusdam sunt mollitia soluta blanditiis
aliquam quis sint ullam repellat ipsum. Qui tenetur, repellat animi optio nesciunt modi in maiores exercitationem
quisquam dolore. Sit recusandae nisi ea sint delectus nihil aut. Recusandae laborum voluptate veritatis fugiat ea quis
itaque vero eos, cum iste exercitationem numquam quidem.