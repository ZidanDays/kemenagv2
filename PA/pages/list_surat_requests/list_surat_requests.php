<?php
include './config/config.php';
// session_start();

// Pastikan pengguna sudah login dan memiliki role penyuluh agama
if (!isset($_SESSION['user_id']) || !isset($_SESSION['role_id']) || $_SESSION['role_id'] != 2) {
    header("Location: login.php");
    exit();
}

// Ambil agama penyuluh agama dari sesi atau database (disini diasumsikan disimpan di sesi)
$agama_penyuluh = $_SESSION['religion'];

// Ambil data pengajuan surat berdasarkan agama
$sql = "SELECT sr.id, sr.remarks, u.username, u.full_name, sr.request_date, sr.status 
        FROM surat_requests sr 
        JOIN users u ON sr.user_id = u.id 
        WHERE u.religion = ? 
        ORDER BY sr.request_date DESC";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $agama_penyuluh);
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pengajuan Surat</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="container">
        <h2 class="mt-5 pt-3">Daftar Pengajuan Surat - Agama <?php echo htmlspecialchars($agama_penyuluh); ?>
        </h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>Nama Lengkap</th>
                    <th>Request Date</th>
                    <th>Perihal</th>
                    <!-- <th>Perihal</th> -->
                </tr>
            </thead>
            <tbody>
                <?php 
        $i = 1; // Inisialisasi variabel $i di luar loop
        while ($row = $result->fetch_assoc()): 
        ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo htmlspecialchars($row['username']); ?></td>
                    <td><?php echo htmlspecialchars($row['full_name']); ?></td>
                    <td><?php echo htmlspecialchars($row['request_date']); ?></td>
                    <td><?php echo htmlspecialchars($row['remarks']); ?></td>
                    <!-- <td>
                        <a href="view_surat_request.php?id=<?php echo $row['id']; ?>">View</a>
                    </td> -->
                </tr>
                <?php 
        $i++; // Increment variabel $i di dalam loop
        endwhile; 
        ?>
            </tbody>
        </table>

    </div>
</body>

</html>

<?php
$stmt->close();
$conn->close();
?>