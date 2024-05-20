<?php


// Inisialisasi variabel
$birth_date = '';
$address = '';
$specialization = '';
$religion = '';

// Ambil data user details dari database
$sql = "SELECT birth_date, address, specialization, religion FROM user_details WHERE user_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($birth_date, $address, $specialization, $religion);
$stmt->fetch();
$stmt->close();

// Proses form submit untuk memperbarui data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $birth_date = $_POST['birth_date'];
    $address = $_POST['address'];
    $specialization = $_POST['specialization'];
    $religion = $_POST['religion'];

    // Periksa apakah data user_details sudah ada
    $sql_check = "SELECT id FROM user_details WHERE user_id = ?";
    $stmt_check = $conn->prepare($sql_check);
    $stmt_check->bind_param("i", $user_id);
    $stmt_check->execute();
    $stmt_check->store_result();

    if ($stmt_check->num_rows > 0) {
        // Update data user_details
        $sql_update = "UPDATE user_details SET birth_date = ?, address = ?, specialization = ?, religion = ?, updated_at = NOW() WHERE user_id = ?";
        $stmt_update = $conn->prepare($sql_update);
        $stmt_update->bind_param("ssssi", $birth_date, $address, $specialization, $religion, $user_id);
        $stmt_update->execute();
        $stmt_update->close();
    } else {
        // Insert data baru ke user_details
        $sql_insert = "INSERT INTO user_details (user_id, birth_date, address, specialization, religion) VALUES (?, ?, ?, ?, ?)";
        $stmt_insert = $conn->prepare($sql_insert);
        $stmt_insert->bind_param("issss", $user_id, $birth_date, $address, $specialization, $religion);
        $stmt_insert->execute();
        $stmt_insert->close();
    }

    $stmt_check->close();

    // Redirect ke halaman yang sama untuk menampilkan data terbaru
    // header("Location: view_details.php");
    header("Location: ?q=view_details");
    exit();
}

$conn->close();
?>

<div class="container">
    <h2>View and Update Details</h2>
    <!-- <form action="view_details.php" method="POST"> -->
    <form action="?q=view_details" method="POST">
        <div class="form-group">
            <label for="birth_date">Birth Date</label>
            <input type="date" id="birth_date" name="birth_date" class="form-control"
                value="<?php echo htmlspecialchars($birth_date); ?>" required>
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <textarea id="address" name="address" class="form-control" rows="4"
                required><?php echo htmlspecialchars($address); ?></textarea>
        </div>
        <div class="form-group">
            <label for="specialization">Specialization</label>
            <input type="text" id="specialization" name="specialization" class="form-control"
                value="<?php echo htmlspecialchars($specialization); ?>" required>
        </div>
        <div class="form-group">
            <label for="religion">Religion</label>
            <input type="text" id="religion" name="religion" class="form-control"
                value="<?php echo htmlspecialchars($religion); ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Details</button>
    </form>
</div>