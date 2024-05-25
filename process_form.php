<?php
session_start();

include 'config/config.php';
$user_id = $_SESSION['user_id'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <!-- link css -->
    <!-- <link rel="stylesheet" href="assets/css/pdf1.css"> -->

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <!-- <link rel="assets/css/pdfdonecss.css" href=""> -->
    <style>
    .isi_surat {
        text-align: justify;
    }

    .text-with-underline {
        text-decoration: underline;
    }

    .ttd {
        text-align: right;
        margin-right: 10px;
    }

    .ttd_foto {
        border-radius: 20px;
        width: 80px;
    }

    .ttd_nama {
        margin-right: 1rem;
    }

    .biodata {
        margin-left: 3rem;
    }

    .biodata-table {
        width: 100%;
        border-collapse: collapse;
    }

    .biodata-label,
    .biodata-colon,
    .biodata-value {
        padding: 5px 10px;
    }

    .biodata-label {
        font-weight: bold;
        width: 200px;
        /* Adjust the width as needed */
        text-align: left;
    }

    .biodata-colon {
        width: 20px;
        /* Adjust the width as needed */
        text-align: center;
    }

    .biodata-value {
        text-align: left;
    }

    .biodata {
        margin-left: 3rem;

        border-spacing: 2px;
    }

    .biodata {
        display: flex;
        flex-direction: column;
    }

    .biodata-item {
        margin-bottom: 10px;
    }

    .biodata-label {
        font-weight: bold;
    }

    .biodata-value {
        margin-left: 10px;
    }

    .biodata {
        margin-left: 3rem;
        border-spacing: 2px;
    }

    .biodata-table {
        width: 100%;
        border-collapse: collapse;
    }

    .biodata-label {
        font-weight: bold;
        width: 200px;
        /* Adjust the width as needed */
    }

    .biodata-value {
        padding-left: 10px;
    }

    .biodata-table td {
        padding: 5px 10px;
    }

    .row {
        display: flex;
        justify-content: space-between;
    }

    .col {
        flex: 1;
    }

    .ttd_kiri {
        text-align: left;
    }

    .ttd_kanan {
        text-align: right;
    }

    /* tabel */
    .custom-table {
        border-collapse: collapse;
        width: 100%;
    }

    .custom-table td,
    .custom-table th {
        border: 1px solid #000000;
        text-align: left;
        padding: 8px;
    }

    .list {
        list-style-type: none;
    }

    .center {
        text-align: center !important;
    }

    .italic {
        font-style: italic;
    }

    .font-weight-bold {
        font-weight: bold;
    }

    /*style UI/UX */
    .logo {
        width: 90%;
        margin-left: 10px;
    }

    .page-break {
        page-break-after: always;
    }

    .signature-container {
        display: flex;
        justify-content: space-between;
        margin-top: 50px;
    }

    .signature-block {
        width: 45%;
        text-align: center;
    }

    .signature {
        display: block;
        margin-top: 50px;
    }

    .left-signature {
        text-align: left;
    }

    .right-signature {
        text-align: right;
    }

    /* cover */
    .container {
        position: relative;
        width: 100%;
        max-width: 800px;
        /* Atur sesuai kebutuhan */
        margin: auto;
        text-align: center;
    }

    .background-image {
        background-image: url("upload/COVER LAPORAN.jpg");
        background-size: cover;

        width: 100%;
        height: 900px;
        /* Atur sesuai kebutuhan */
        opacity: 10;
        /* Opasitas gambar latar belakang */
    }

    .text-overlay {
        position: absolute;
        top: 20%;
        left: 75%;
        transform: translate(-50%, -50%);
        color: black;
        font-family: "Times New Roman", Times, serif;
        /* Warna teks */
        font-size: 5.5em;
        /* Ukuran font teks */
        font-weight: black;
        /* Ketebalan font teks */
        z-index: 1;
        padding: 20px;
        /* Latar belakang semi-transparan untuk teks */
    }

    .text-overlay2 {
        position: absolute;
        top: 75%;
        left: 77%;
        transform: translate(-50%, -50%);
        color: black;
        font-size: 1.5em;
        font-family: "Times New Roman", Times, serif;
        font-weight: normal;
        /* Mengganti 'white' menjadi 'normal' */
        z-index: 1;
        padding: 20px;
        white-space: nowrap;
        /* Mencegah teks menjadi baris baru */
        overflow: hidden;
        /* Opsional, untuk menangani teks yang terlalu panjang */
        text-overflow: ellipsis;
        /* Opsional, menambahkan ellipsis (...) pada teks yang terpotong */
    }

    .text-overlay3 {
        position: absolute;
        top: 81%;
        left: 77%;
        transform: translate(-50%, -50%);
        color: black;
        font-family: "Times New Roman", Times, serif;
        font-size: 1.5em;
        font-weight: normal;
        /* Mengganti 'white' menjadi 'normal' */
        z-index: 1;
        padding: 20px;
        white-space: nowrap;
        /* Mencegah teks menjadi baris baru */
        overflow: hidden;
        /* Opsional, untuk menangani teks yang terlalu panjang */
        text-overflow: ellipsis;
        /* Opsional, menambahkan ellipsis (...) pada teks yang terpotong */
    }

    /* end cover */



    /* CSS untuk gaya biodata */
    .biodata {
        width: 100%;
        margin-bottom: 20px;
    }

    .biodata-item {
        display: flex;
        align-items: center;
        margin-bottom: 10px;
    }

    .biodata-label {
        flex: 1;
        font-weight: bold;
    }

    .biodata-colon {
        margin-left: 5px;
        margin-right: 5px;
    }

    .biodata-value {
        flex: 3;
    }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Surat Tugas</title>
</head>

<body>
    <!-- <a href="surat-tugas.php" class="btn">Go to Surat Tugas</a> -->
    <!-- <a href="test-print.php" class="btn">Go to Surat Tugas</a> -->
    <?php
    // Inisialisasi variabel dengan nilai default
    $wilayah_penugasan = $alamat_wilayah_penugasan = $nomor_surat = $nama = $tempat_tanggal_lahir = $pendidikan_terakhir = $noreg = $bidang_tugas = $alamat = $no_keputusan = $bimbingan_penyuluhan = $sasaran_tugas = $uraian_tugas = $tempat = $tgl_bl_thn = $upload_ttd = $nama_ttd_bersangkuta = $nip = $nama_pernyataan1 = $tempat_tanggal_lahir_pernyataan1 = $pendidikan_terakhir_pernyataan1 = $noreg_pernyataan1 = $bidang_tugas_pernyataan1 = $alamat_pernyataan1 = $memilih_spesialisasi = $penyuluh_agama = $upload_ttd_Spesialisasi1 = "";

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Proses data dari Formulir 1
        if (isset($_POST['wilayah_penugasan'])) {
            // Simpan data dari Formulir 1 dalam variabel
            $wilayah_penugasan = htmlspecialchars($_POST['wilayah_penugasan']);
            $alamat_wilayah_penugasan = htmlspecialchars($_POST['alamat_wilayah_penugasan']);
            $nomor_surat = htmlspecialchars($_POST['nomor_surat']);
            $nama = htmlspecialchars($_POST['nama']);
            $tempat_tanggal_lahir = htmlspecialchars($_POST['tempat_tanggal_lahir']);
            $pendidikan_terakhir = htmlspecialchars($_POST['pendidikan_terakhir']);
            $noreg = htmlspecialchars($_POST['noreg']);
            $bidang_tugas = htmlspecialchars($_POST['bidang_tugas']);
            $alamat = htmlspecialchars($_POST['alamat']);
            $no_keputusan = htmlspecialchars($_POST['no_keputusan']);
            $bimbingan_penyuluhan = htmlspecialchars($_POST['bimbingan_penyuluhan']);
            $sasaran_tugas = htmlspecialchars($_POST['sasaran_tugas']);
            $uraian_tugas = htmlspecialchars($_POST['uraian_tugas']);
            $tempat = htmlspecialchars($_POST['tempat']);
            $tgl_bl_thn = htmlspecialchars($_POST['tgl_bl_thn']);
            $nama_ttd_bersangkuta = htmlspecialchars($_POST['nama_ttd_bersangkuta']);
            $nip = htmlspecialchars($_POST['nip']);
            $remarks = $_POST['remarks'];
            $satunama_pengajuan_surat = $_POST['1nama_pengajuan_surat'];
            $satutahun_pengajuan_surat = $_POST['1tahun_pengajuan_surat'];
            $satuwilayah_pengajuan_surat = $_POST['1wilayah_pengajuan_surat'];

            $sql = "INSERT INTO surat_requests (user_id, status, remarks) VALUES (?, 'downloaded', ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("is", $user_id, $remarks);

            if ($stmt->execute()) {
                echo "<script>alert('Pengajuan surat berhasil.');</script>";
            } else {
                $error = $stmt->error;
                echo "<script>alert('Pengajuan surat gagal: " . $error . "');</script>";
            }


            $stmt->close();
            
            // Proses upload file
            if (isset($_FILES['upload_ttd1']) && $_FILES['upload_ttd1']['error'] == UPLOAD_ERR_OK) {
                $upload_dir = 'upload/';
                $upload_file = $upload_dir . basename($_FILES['upload_ttd1']['name']);
                if (move_uploaded_file($_FILES['upload_ttd1']['tmp_name'], $upload_file)) {
                    // File berhasil diunggah
                    $upload_ttd = $upload_file;
                } else {
                    // Gagal mengunggah file
                    echo "Gagal mengunggah file.";
                }
            }
        }

        // Proses data dari Formulir 2
        if (isset($_POST['nama_pernyataan1'])) {
            // Simpan data dari Formulir 2 dalam variabel
            $nama_pernyataan1 = htmlspecialchars($_POST['nama_pernyataan1']);
            $tempat_tanggal_lahir_pernyataan1 = htmlspecialchars($_POST['tempat_tanggal_lahir_pernyataan1']);
            $pendidikan_terakhir_pernyataan1 = htmlspecialchars($_POST['pendidikan_terakhir_pernyataan1']);
            $noreg_pernyataan1 = htmlspecialchars($_POST['noreg_pernyataan1']);
            $bidang_tugas_pernyataan1 = htmlspecialchars($_POST['bidang_tugas_pernyataan1']);
            $alamat_pernyataan1 = htmlspecialchars($_POST['alamat_pernyataan1']);
            $memilih_spesialisasi = htmlspecialchars($_POST['Memilih_Spesialisasi']);
            $penyuluh_agama = htmlspecialchars($_POST['Penyuluh_Agama']);

            // Proses upload file untuk Formulir 2
            if (isset($_FILES['upload_ttd_Spesialisasi1']) && $_FILES['upload_ttd_Spesialisasi1']['error'] == UPLOAD_ERR_OK) {
                $upload_dir = 'upload/';
                $upload_file = $upload_dir . basename($_FILES['upload_ttd_Spesialisasi1']['name']);
                if (move_uploaded_file($_FILES['upload_ttd_Spesialisasi1']['tmp_name'], $upload_file)) {
                    // File berhasil diunggah
                    $upload_ttd_Spesialisasi1 = $upload_file;
                } else {
                    // Gagal mengunggah file
                    echo "Gagal mengunggah file.";
                }
            }
        } else {
            // Jika tidak ada data formulir yang diterima
            echo "Data formulir tidak ditemukan.";
        }
    }
    $conn->close();

    // Setelah Anda menyimpan data dalam variabel, Anda bisa menampilkan data tersebut di halaman hasil seperti yang telah Anda lakukan sebelumnya.
    // Pastikan variabel-variabel yang Anda gunakan di halaman hasil sudah terisi dengan data yang benar.

    // Setelah menampilkan data yang diinginkan, Anda bisa melanjutkan dengan menampilkan konten HTML untuk halaman hasil.
    // Berikut adalah konten HTML untuk halaman hasil:

    ?>

    <div class="background-image">
        <img src="upload/COVER LAPORAN.jpg" width="100%" class="text-center" alt="">
        <h1 class="text-overlay"><?php echo $satutahun_pengajuan_surat; ?></h1>
        <h1 class="text-overlay2"><?php echo $satunama_pengajuan_surat; ?></h1>
        <h1 class="text-overlay3"><?php echo $satuwilayah_pengajuan_surat; ?></h1>
    </div>
    <div class="page-break"></div>
    <div class="container">
        <!-- surat tugas -->
        <table style="width: 100%">
            <tr>
                <td style="text-align: left; width: 10%">
                    <!-- Div untuk logo -->
                    <div>
                        <img src="upload/KEMENAG.jpg" alt="Logo Kementerian Agama" style="width: 80px; height: auto" />
                    </div>
                </td>
                <td style="text-align: center">
                    <!-- Div untuk teks -->
                    <div>
                        <p class="font-weight-bold">KEMENTERIAN AGAMA REPUBLIK INDONESIA <br> KANTOR KEMENTERIAN AGAMA
                            KABUPATEN MINAHASA</p>
                        <p><?php echo $wilayah_penugasan; ?><br> <?php echo $alamat_wilayah_penugasan; ?></p>
                    </div>
                </td>
            </tr>
        </table>
        <hr style="border: none; background-color: black; height: 1px; border-top: 2px solid black; margin: 2px 0;" />
        <hr style="border: none; background-color: black; height: 1px; border-top: 2px solid black; margin: 2px 0;" />
        <p style="text-align: center;" class="mt-3 font-weight-bold">SURAT TUGAS <br> Nomor :
            <?php echo $nomor_surat; ?></p>


        <p>Kepala Kantor Urusan Agama Kecamatan Remboken menugaskan <br> Penyuluh Agama Islam Non PNS</p>

        <p style="text-align: justify;">
        <div class="biodata">
            <table class="biodata-table">
                <tr>
                    <td class="biodata-label">Nama</td>
                    <td class="biodata-colon">:</td>
                    <td class="biodata-value"><?php echo $nama; ?></td>
                </tr>
                <tr>
                    <td class="biodata-label">Tempat tanggal lahir</td>
                    <td class="biodata-colon">:</td>
                    <td class="biodata-value"><?php echo $tempat_tanggal_lahir; ?></td>
                </tr>
                <tr>
                    <td class="biodata-label">Pendidikan Terakhir</td>
                    <td class="biodata-colon">:</td>
                    <td class="biodata-value"><?php echo $pendidikan_terakhir; ?></td>
                </tr>
                <tr>
                    <td class="biodata-label">No. Reg</td>
                    <td class="biodata-colon">:</td>
                    <td class="biodata-value"><?php echo $noreg; ?></td>
                </tr>
                <tr>
                    <td class="biodata-label">Bidang tugas / spesialisasi</td>
                    <td class="biodata-colon">:</td>
                    <td class="biodata-value"><?php echo $bidang_tugas; ?></td>
                </tr>
                <tr>
                    <td class="biodata-label">Alamat</td>
                    <td class="biodata-colon">:</td>
                    <td class="biodata-value"><?php echo $alamat; ?></td>
                </tr>
            </table>
        </div>


        </p>
        <div class="isi_surat">
            <p>Sesuai surat keputusan Kepala Kantor Kementerian Agama Kabupaten Minahasa Nomor
                <?php echo $no_keputusan; ?> dengan ini menugaskan yang bersangkutan untuk melaksanakan bimbingan dan
                penyuluhan Agama <?php echo $bimbingan_penyuluhan; ?> kepada kelompok sasaran / binaan di
                <?php echo $sasaran_tugas; ?> dengan uraian tugas <br>Sbb :</p>
            <P>1. <?php echo $uraian_tugas; ?></P>
            <P>2. Dst.</P>
            <p>Demikian Surat Tugas ini kami buat untuk dilaksanakan sebagaimana mestinya.</p>
        </div>
        <br>
        <div class="signature-container">
            <div class="signature-block left-signature">
                <p class="tanggal"> <?php echo $tempat; ?>, <?php echo $tgl_bl_thn; ?> </p>
                <?php if (!empty($upload_ttd)) : ?>
                <img class="ttd_foto" src="<?php echo $upload_ttd; ?>" alt="Foto Tanda Tangan">
                <?php endif; ?>
                <p class="text-with-underline ttd_nama" style="margin-bottom: -7px;">
                    <?php echo $nama_ttd_bersangkuta; ?>
                </p>
                <p class="ttd_nama"><?php echo  $nip; ?></p>
            </div>
            <div class="signature-block right-signature">
                <p class="tanggal"> <?php echo $tempat; ?>, <?php echo $tgl_bl_thn; ?> </p>
                <?php if (!empty($upload_ttd)) : ?>
                <img class="ttd_foto" src="<?php echo $upload_ttd; ?>" alt="Foto Tanda Tangan">
                <?php endif; ?>
                <p class="text-with-underline ttd_nama" style="margin-bottom: -7px;">
                    <?php echo $nama_ttd_bersangkuta; ?>
                </p>
                <p class="ttd_nama"><?php echo  $nip; ?></p>
            </div>
        </div>

        <div class="isi_surat">
            <p>Tembusan :
                <br>Yth Kepala Kemenag Kabupaten Minahasa
            </p>
        </div>

        <div class="signature-block right -signature">

        </div>
        <div class="page-break"></div>
        <!-- SURAT PERNYATAAN PEMILIHAN SPESIALISASI -->
        <table style="width: 100%">
            <tr>
                <td style="text-align: left; width: 10%">
                    <!-- Div untuk logo -->
                    <div>
                        <img src="upload/KEMENAG.jpg" alt="Logo Kementerian Agama" style="width: 80px; height: auto" />
                    </div>
                </td>
                <td style="text-align: center">
                    <!-- Div untuk teks -->
                    <div>
                        <p><b>KEMENTERIAN AGAMA REPUBLIK INDONESIA <br> KANTOR KEMENTERIAN AGAMA KABUPATEN MINAHASA</b>
                        </p>
                        <p><?php echo $wilayah_penugasan; ?><br> <?php echo $alamat_wilayah_penugasan; ?></p>
                    </div>
                </td>
            </tr>
        </table>
        <hr style="border: none; background-color: black; height: 1px; border-top: 2px solid black; margin: 2px 0;" />
        <hr style="border: none; background-color: black; height: 1px; border-top: 2px solid black; margin: 2px 0;" />
        <p style="text-align: center;" class="mt-3"><b>SURAT PERNYATAAN <br> PEMILIHAN SPESIALISASI</b></p>

        <p style="text-align: justify;">
        <div class="biodata">
            <table class="biodata-table">
                <tr>
                    <td class="biodata-label">Nama</td>
                    <td class="biodata-colon">:</td>
                    <td class="biodata-value"><?php echo $nama_pernyataan1; ?></td>
                </tr>
                <tr>
                    <td class="biodata-label">Tempat tanggal lahir</td>
                    <td class="biodata-colon">:</td>
                    <td class="biodata-value"><?php echo $tempat_tanggal_lahir_pernyataan1; ?></td>
                </tr>
                <tr>
                    <td class="biodata-label">Pendidikan Terakhir</td>
                    <td class="biodata-colon">:</td>
                    <td class="biodata-value"><?php echo $pendidikan_terakhir_pernyataan1; ?></td>
                </tr>
                <tr>
                    <td class="biodata-label">No. Reg</td>
                    <td class="biodata-colon">:</td>
                    <td class="biodata-value"><?php echo $noreg_pernyataan1; ?></td>
                </tr>
                <tr>
                    <td class="biodata-label">Bidang tugas / spesialisasi</td>
                    <td class="biodata-colon">:</td>
                    <td class="biodata-value"><?php echo $bidang_tugas_pernyataan1; ?></td>
                </tr>
                <tr>
                    <td class="biodata-label">Alamat</td>
                    <td class="biodata-colon">:</td>
                    <td class="biodata-value"><?php echo $alamat_pernyataan1; ?></td>
                </tr>
            </table>
        </div>

        </p>
        <div class="isi_surat">
            <p>Dengan ini menyatakan, memilih spesialisasi :</p>
            <P>1. <?php echo $memilih_spesialisasi; ?></P>
            <P>2. Dst.</P>
            <p>Demikian surat ini saya buat dengan sebenar-benarnya tanpa ada paksaan dari pihak manapun.</p>
        </div>
        <div class="ttd"> Penyuluh Agama <?php echo $penyuluh_agama; ?> Non PNS <br> Yang membuat pernyataan</p>
            <img class="ttd_foto" src="<?php echo $upload_ttd_Spesialisasi1; ?>" alt="">
            <p class="text-with-underline ttd_nama" style="margin-bottom: -7px;"><?php echo $nama_pernyataan1; ?></p>

        </div>
        <!-- AKHIR SURAT PERNYATAAN PEMILIHAN SPESIALISASI -->

        <!-- SURAT PERNYATAAN KUNJUNGAN KEPADA TOKOH MASYARAKAT & PEJABAT PEMERINTAH -->
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Memproses data dari form3
            $nama_pernyataan2 = htmlspecialchars($_POST['nama_pernyataan2']);
            $bidang_tugas_pernyataan2 = htmlspecialchars($_POST['bidang_tugas_pernyataan2']);
            $alamat_pernyataan2 = htmlspecialchars($_POST['alamat_pernyataan2']);
            $Penyuluh_Agama = htmlspecialchars($_POST['Penyuluh_Agama']);
            $agama_pernyataan2 = ''; // Tambahkan ini untuk menangani agama
            $tokoh_masyarakat_pernyataan2 = htmlspecialchars($_POST['tokoh_masyarakat_pernyataan2']);
            $jabatan_tokoh_pernyataan2 = htmlspecialchars($_POST['jabatan_tokoh_pernyataan2']);
            $hari_pernyataan2 = htmlspecialchars($_POST['hari_pernyataan2']);
            $materi_pernyataan2 = htmlspecialchars($_POST['materi_pernyataan2']);
            $mengetahui_pernyataan2 = htmlspecialchars($_POST['mengetahui_pernyataan2']);
            $upload_ttd_pernyataan2 = ''; // Variabel untuk menyimpan path file tanda tangan
            $nama_mengetahui_pernyataan2 = htmlspecialchars($_POST['nama_mengetahui_pernyataan2']);
            $nip_mengetahui_pernyataan2 = htmlspecialchars($_POST['nip_mengetahui_pernyataan2']);
            $tempat_pernyataan2 = htmlspecialchars($_POST['tempat_pernyataan2']);
            $tanggal_pernyataan2 = htmlspecialchars($_POST['tanggal_pernyataan2']);
            $upload_ttd_pernyataan_kanan = ''; // Variabel untuk menyimpan path file tanda tangan kanan
            $nama_ttd_kanan = htmlspecialchars($_POST['nama_ttd_kanan']);

            // Tambahkan penanganan untuk agama
            switch ($Penyuluh_Agama) {
                case "Islam":
                    $agama_pernyataan2 = "Islam";
                    break;
                case "Kristen":
                    $agama_pernyataan2 = "Kristen";
                    break;
                case "Katolik":
                    $agama_pernyataan2 = "Katolik";
                    break;
                case "Hindu":
                    $agama_pernyataan2 = "Hindu";
                    break;
                default:
                    $agama_pernyataan2 = "Undefined";
            }

            // Proses upload file tanda tangan
            if (isset($_FILES['upload_ttd_pernyataan2']) && $_FILES['upload_ttd_pernyataan2']['error'] == UPLOAD_ERR_OK) {
                $upload_dir = 'upload/';
                $upload_file = $upload_dir . basename($_FILES['upload_ttd_pernyataan2']['name']);
                if (move_uploaded_file($_FILES['upload_ttd_pernyataan2']['tmp_name'], $upload_file)) {
                    // File berhasil diunggah
                    $upload_ttd_pernyataan2 = $upload_file;
                } else {
                    // Gagal mengunggah file
                    echo "Gagal mengunggah file tanda tangan.";
                }
            }

            // Proses upload file tanda tangan kanan
            if (isset($_FILES['upload_ttd_pernyataan_kanan']) && $_FILES['upload_ttd_pernyataan_kanan']['error'] == UPLOAD_ERR_OK) {
                $upload_dir = 'upload/';
                $upload_file = $upload_dir . basename($_FILES['upload_ttd_pernyataan_kanan']['name']);
                if (move_uploaded_file($_FILES['upload_ttd_pernyataan_kanan']['tmp_name'], $upload_file)) {
                    // File berhasil diunggah
                    $upload_ttd_pernyataan_kanan = $upload_file;
                } else {
                    // Gagal mengunggah file
                    echo "Gagal mengunggah file tanda tangan kanan.";
                }
            }
        }

        // Setelah Anda memproses data dan upload file, Anda dapat menampilkan pesan atau melakukan operasi lainnya

        ?>
        <div class="page-break"></div>
        <table style="width: 100%">
            <tr>
                <td style="text-align: left; width: 10%">
                    <!-- Div untuk logo -->
                    <div>
                        <img src="upload/KEMENAG.jpg" alt="Logo Kementerian Agama" style="width: 80px; height: auto" />
                    </div>
                </td>
                <td style="text-align: center">
                    <!-- Div untuk teks -->
                    <div>
                        <p><b>KEMENTERIAN AGAMA REPUBLIK INDONESIA <br> KANTOR KEMENTERIAN AGAMA KABUPATEN MINAHASA</b>
                        </p>
                        <p><?php echo $wilayah_penugasan; ?><br> <?php echo $alamat_wilayah_penugasan; ?></p>
                    </div>
                </td>
            </tr>
        </table>
        <hr style="border: none; background-color: black; height: 1px; border-top: 2px solid black; margin: 2px 0;" />
        <hr style="border: none; background-color: black; height: 1px; border-top: 2px solid black; margin: 2px 0;" />
        <p style="text-align: center;" class="mt-3"><b> SURAT PERNYATAAN <br>KUNJUNGAN KEPADA TOKOH MASYARAKAT & PEJABAT
                PEMERINTAH</b></p>

        <p class="biodata">Yang bertanda tangan dibawah ini :</p>
        <p style="text-align: justify;">
        <div class="biodata">
            <table class="biodata-table">
                <tr>
                    <td class="biodata-label">Nama</td>
                    <td class="biodata-colon">:</td>
                    <td class="biodata-value"><?php echo $nama_pernyataan2; ?></td>
                </tr>
                <tr>
                    <td class="biodata-label">Jabatan</td>
                    <td class="biodata-colon">:</td>
                    <td class="biodata-value">Penyuluh Agama <?php echo $agama_pernyataan2; ?> Non PNS</td>
                </tr>
                <tr>
                    <td class="biodata-label">Bidang tugas / spesialisasi</td>
                    <td class="biodata-colon">:</td>
                    <td class="biodata-value"><?php echo $bidang_tugas_pernyataan2; ?></td>
                </tr>
                <tr>
                    <td class="biodata-label">Alamat</td>
                    <td class="biodata-colon">:</td>
                    <td class="biodata-value"><?php echo $alamat_pernyataan2; ?></td>
                </tr>
            </table>
        </div>

        <div class="isi_surat">
            <p>Menyatakan telah melaksanakan kunjungan dalam rangka koordinasi Penyuluh
                Agama <?php echo $agama_pernyataan2; ?> kepada Tokoh Masyarakat dan Pejabat Pemerintah, sebagai berikut
                :</p>
            <ol>
                <li>
                    <ul>
                        <span>Nama : <?php echo $tokoh_masyarakat_pernyataan2; ?></span>
                        <li class="list">Jabatan : <?php echo $jabatan_tokoh_pernyataan2; ?></li>
                        <li class="list">Hari/Tanggal : <?php echo $hari_pernyataan2; ?></li>
                        <li class="list"> Materi Kunjungan : <?php echo $materi_pernyataan2; ?> </li>
                    </ul>

                </li>
                <li>
                    <ul>
                        Dll
                    </ul>
                </li>
            </ol>
            <p>Demikian Surat Tugas ini kami buat untuk dilaksanakan sebagaimana mestinya.</p>
        </div>
        <br>
        <br>
        <div class="ttd">
            <p class="tanggal"> <?php echo $tempat_pernyataan2; ?> , <?php echo $tanggal_pernyataan2; ?></p>
        </div>
        <div class="signature-container">
            <div class="signature-block left-signature">
                <div class="ttd_kiri">
                    <p class="tanggal">Mengetahui <br> <?php echo $mengetahui_pernyataan2; ?></p>
                    <img class="ttd_foto" src="<?php echo $upload_ttd_pernyataan2; ?>" alt="">
                    <p class="text-with-underline ttd_nama" style="margin-bottom: -7px;">
                        <?php echo $nama_mengetahui_pernyataan2; ?></p>
                    <p class="ttd_nama"><?php echo $nip_mengetahui_pernyataan2; ?></p>
                </div>
            </div>
            <div class="signature-block right-signature">
                <div class="ttd_kanan"> Penyuluh Agama <?php echo $agama_pernyataan2; ?> Non PNS <br> Yang membuat
                    pernyataan</p>
                    <img class="ttd_foto" src="<?php echo $upload_ttd_pernyataan_kanan; ?>" alt="">
                    <p class=" ttd_nama" style="margin-bottom: -7px;"><?php echo $nama_ttd_kanan; ?></p>
                </div>
            </div>
        </div>
        <!-- Akhir SURAT PERNYATAAN KUNJUNGAN KEPADA TOKOH MASYARAKAT & PEJABAT PEMERINTAH -->

        <!-- SURAT PERNYATAAN PEMBENTUKKAN KELOMPOK BINAAN -->
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Ambil data dari form
            $nama_pernyataan3 = htmlspecialchars($_POST['nama_pernyataan3']);
            $jabatan_pernyataan3 = htmlspecialchars($_POST['jabatan_pernyataan3']);
            $bidang_tugas_pernyataan3 = htmlspecialchars($_POST['bidang_tugas_pernyataan3']);
            $alamat_pernyataan3 = htmlspecialchars($_POST['alamat_pernyataan3']);
            $nama_kelompok_bina = htmlspecialchars($_POST['nama_kelompok_bina']);
            $alamat_kelompoka_bina = htmlspecialchars($_POST['alamat_kelompoka_bina']);
            $jumlah_anggota_bina = htmlspecialchars($_POST['jumlah_anggota_bina']);
            $mengetahui_kelompok_bina = htmlspecialchars($_POST['mengetahui_kelompok_bina']);
            $nama_yang_mengetahui = htmlspecialchars($_POST['nama_yang_mengetahui']);
            $nip_yang_mengetahui = htmlspecialchars($_POST['nip_yang_mengetahui']);
            $tempat_kelompok_bina = htmlspecialchars($_POST['tempat_kelompok_bina']);
            $tanggal_kelompok_bina = htmlspecialchars($_POST['tanggal_kelompok_bina']);
            $upload_ttd_kelompok_bina = ''; // Variabel untuk menyimpan path file tanda tangan
            $upload_ttd_bina_kanan = ''; // Variabel untuk menyimpan path file tanda tangan kanan

            // Tambahkan penanganan untuk agama
            switch ($jabatan_pernyataan3) {
                case "Islam":
                    $jabatan_pernyataan3 = "Islam";
                    break;
                case "Kristen":
                    $jabatan_pernyataan3 = "Kristen";
                    break;
                case "Katolik":
                    $jabatan_pernyataan3 = "Katolik";
                    break;
                case "Hindu":
                    $jabatan_pernyataan3 = "Hindu";
                    break;
                default:
                    $jabatan_pernyataan3 = "Undefined";
            }
            // Proses upload tanda tangan
            if (isset($_FILES['upload_ttd_kelompok_bina']) && $_FILES['upload_ttd_kelompok_bina']['error'] == UPLOAD_ERR_OK) {
                $upload_dir = 'upload/';
                if (!is_dir($upload_dir)) {
                    mkdir($upload_dir, 0777, true);
                }
                $upload_file = $upload_dir . basename($_FILES['upload_ttd_kelompok_bina']['name']);
                if (move_uploaded_file($_FILES['upload_ttd_kelompok_bina']['tmp_name'], $upload_file)) {
                    $upload_ttd_kelompok_bina = $upload_file;
                } else {
                    echo "Gagal mengunggah file tanda tangan.";
                }
            }

            // Proses upload tanda tangan kanan
            if (isset($_FILES['upload_ttd_bina_kanan']) && $_FILES['upload_ttd_bina_kanan']['error'] == UPLOAD_ERR_OK) {
                $upload_dir = 'upload/';
                $upload_file = $upload_dir . basename($_FILES['upload_ttd_bina_kanan']['name']);
                if (move_uploaded_file($_FILES['upload_ttd_bina_kanan']['tmp_name'], $upload_file)) {
                    $upload_ttd_bina_kanan = $upload_file;
                } else {
                    echo "Gagal mengunggah file tanda tangan kanan.";
                }
            }
        }
        ?>
        <div class="page-break"></div>
        <table style="width: 100%">
            <tr>
                <td style="text-align: left; width: 10%">
                    <!-- Div untuk logo -->
                    <div>
                        <img src="upload/KEMENAG.jpg" alt="Logo Kementerian Agama" style="width: 80px; height: auto" />
                    </div>
                </td>
                <td style="text-align: center">
                    <!-- Div untuk teks -->
                    <div>
                        <p><b>KEMENTERIAN AGAMA REPUBLIK INDONESIA <br> KANTOR KEMENTERIAN AGAMA KABUPATEN MINAHASA</b>
                        </p>
                        <p><?php echo $wilayah_penugasan; ?><br> <?php echo $alamat_wilayah_penugasan; ?></p>
                    </div>
                </td>
            </tr>
        </table>
        <hr style="border: none; background-color: black; height: 1px; border-top: 2px solid black; margin: 2px 0;" />
        <hr style="border: none; background-color: black; height: 1px; border-top: 2px solid black; margin: 2px 0;" />
        <p style="text-align: center;" class="mt-3"><b>SURAT PERNYATAAN <br>
                PEMBENTUKKAN KELOMPOK BINAAN</b></p>

        <p class="biodata">Yang bertanda tangan dibawah ini :</p>
        <p style="text-align: justify;">
        <div class="biodata">
            <table class="biodata-table">
                <tr>
                    <td class="biodata-label">Nama</td>
                    <td class="biodata-colon">:</td>
                    <td class="biodata-value"><?php echo $nama_pernyataan3; ?></td>
                </tr>
                <tr>
                    <td class="biodata-label">Jabatan</td>
                    <td class="biodata-colon">:</td>
                    <td class="biodata-value">Penyuluh Agama <?php echo $jabatan_pernyataan3; ?> Non PNS</td>
                </tr>
                <tr>
                    <td class="biodata-label">Bidang tugas / spesialisasi</td>
                    <td class="biodata-colon">:</td>
                    <td class="biodata-value"><?php echo $bidang_tugas_pernyataan3; ?></td>
                </tr>
                <tr>
                    <td class="biodata-label">Alamat</td>
                    <td class="biodata-colon">:</td>
                    <td class="biodata-value"><?php echo $alamat_pernyataan3; ?></td>
                </tr>
            </table>
        </div>

        </p>
        <div class="isi_surat">
            <p>Dengan ini menyatakan telah membentuk kelompok binaan sebagai berikut :</p>
            <ol>
                <li>
                    <ul>
                        <span>Nama Kelompok : <?php echo $nama_kelompok_bina; ?> </span>
                        <li class="list">Alamat : <?php echo $alamat_kelompoka_bina; ?></li>
                        <li class="list">Jumlah Anggota :<?php echo $jumlah_anggota_bina; ?></li>

                    </ul>

                </li>
                <li>
                    <ul>
                        <span>Dst. </span>
                    </ul>
                </li>
            </ol>
            <p style="margin-top: 2rem;">Demikian surat pernyataan ini dibuat dengan sebenarnya</p>
        </div>

        <div class="ttd mt-4">
            <p class="tanggal"> <?php echo $tempat_kelompok_bina; ?> , <?php echo $tanggal_kelompok_bina; ?></p>
        </div>
        <div class="signature-container">
            <div class="signature-block left-signature">
                <div class="ttd_kiri">
                    <p class="tanggal">Mengetahui <br> <?php echo $mengetahui_kelompok_bina; ?></p>
                    <img class="ttd_foto" src="<?php echo $upload_ttd_kelompok_bina; ?>" alt="">
                    <p class="text-with-underline ttd_nama" style="margin-bottom: -7px;">
                        <?php echo $nama_yang_mengetahui; ?></p>
                    <p class="ttd_nama"><?php echo $nip_yang_mengetahui; ?></p>
                </div>
            </div>
            <div class="signature-block right-signature">
                <div class="ttd_kanan"> Penyuluh Agama <?php echo $jabatan_pernyataan3; ?> Non PNS <br> Yang membuat
                    pernyataan</p>
                    <img class="ttd_foto" src=" <?php echo $upload_ttd_bina_kanan; ?>" alt="">
                    <p class=" ttd_nama" style="margin-bottom: -7px;"><?php echo $nama_pernyataan3; ?></p>
                </div>
            </div>
        </div>
        <!-- akhir SURAT PERNYATAAN PEMBENTUKKAN KELOMPOK BINAAN -->


        <!-- RENCANA KERJA BULANAN -->

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Ambil data dari form
            $nama_pai = htmlspecialchars($_POST['nama_pai']);
            $jabatan_pai = htmlspecialchars($_POST['jabatan_pai']);
            $bidang_tugas_pai = htmlspecialchars($_POST['bidang_tugas_pai']);
            $kecamatan_pai = htmlspecialchars($_POST['kecamatan_pai']);
            $kabupaten_pai = htmlspecialchars($_POST['kabupaten_pai']);
            $provinsi_pai = htmlspecialchars($_POST['provinsi_pai']);
            $nama_kelompok_sasaran = htmlspecialchars($_POST['nama_kelompok_sasaran']);
            $bentuk_kegiatan = htmlspecialchars($_POST['bentuk_kegiatan']);
            $topik_bahasan = htmlspecialchars($_POST['topik_bahasan']);
            $tujuan_kegiatan = htmlspecialchars($_POST['tujuan_kegiatan']);
            $waktu_pelaksanaan = htmlspecialchars($_POST['waktu_pelaksanaan']);
            $penyuluh_agama_pai = htmlspecialchars($_POST['penyuluh_agama_pai']);
            $mengetahui_pimpinan = htmlspecialchars($_POST['mengetahui_pimpinan']);
            $nama_pimpinan = htmlspecialchars($_POST['nama_pimpinan']);
            $nip_pimpinan = htmlspecialchars($_POST['nip_pimpinan']);
            $tempat_pai = htmlspecialchars($_POST['tempat_pai']);
            $tanggal_pai = htmlspecialchars($_POST['tanggal_pai']);

            // Proses upload file tanda tangan pimpinan
            $upload_ttd_pimpinan = '';
            if (isset($_FILES['upload_ttd_pimpinan']) && $_FILES['upload_ttd_pimpinan']['error'] == UPLOAD_ERR_OK) {
                $upload_dir = 'upload/';
                $upload_file = $upload_dir . basename($_FILES['upload_ttd_pimpinan']['name']);
                if (move_uploaded_file($_FILES['upload_ttd_pimpinan']['tmp_name'], $upload_file)) {
                    $upload_ttd_pimpinan = $upload_file;
                } else {
                    echo "Gagal mengunggah file tanda tangan pimpinan.";
                }
            }

            // Proses upload file tanda tangan PAI
            $upload_ttd_pai = '';
            if (isset($_FILES['upload_ttd_pai']) && $_FILES['upload_ttd_pai']['error'] == UPLOAD_ERR_OK) {
                $upload_dir = 'upload/';
                $upload_file = $upload_dir . basename($_FILES['upload_ttd_pai']['name']);
                if (move_uploaded_file($_FILES['upload_ttd_pai']['tmp_name'], $upload_file)) {
                    $upload_ttd_pai = $upload_file;
                } else {
                    echo "Gagal mengunggah file tanda tangan PAI.";
                }
            }
        }
        ?>
        <div class="page-break"></div>
        <table style="width: 100%">
            <tr>
                <td style="text-align: left; width: 10%">
                    <!-- Div untuk logo -->
                    <div>
                        <img src="upload/KEMENAG.jpg" alt="Logo Kementerian Agama" style="width: 80px; height: auto" />
                    </div>
                </td>
                <td style="text-align: center">
                    <!-- Div untuk teks -->
                    <div>
                        <p><b>KEMENTERIAN AGAMA REPUBLIK INDONESIA <br> KANTOR KEMENTERIAN AGAMA KABUPATEN MINAHASA</b>
                        </p>
                        <p><?php echo $wilayah_penugasan; ?><br> <?php echo $alamat_wilayah_penugasan; ?></p>
                    </div>
                </td>
            </tr>
        </table>
        <hr style="border: none; background-color: black; height: 1px; border-top: 2px solid black; margin: 2px 0;" />
        <hr style="border: none; background-color: black; height: 1px; border-top: 2px solid black; margin: 2px 0;" />
        <p style="text-align: center;" class="mt-3"><b>RENCANA KERJA BULANAN</b></p>

        <p style="text-align: justify;">
        <div class="biodata">
            <table class="biodata-table">
                <tr>
                    <td class="biodata-label">Nama PAI Non PNS</td>
                    <td class="biodata-colon">:</td>
                    <td class="biodata-value"><?php echo $nama_pai; ?></td>
                </tr>
                <tr>
                    <td class="biodata-label">Jabatan</td>
                    <td class="biodata-colon">:</td>
                    <td class="biodata-value"><?php echo $jabatan_pai; ?></td>
                </tr>
                <tr>
                    <td class="biodata-label">Bidang tugas / spesialisasi</td>
                    <td class="biodata-colon">:</td>
                    <td class="biodata-value"><?php echo $bidang_tugas_pai; ?></td>
                </tr>
                <tr>
                    <td class="biodata-label">Kecamatan</td>
                    <td class="biodata-colon">:</td>
                    <td class="biodata-value"><?php echo $kecamatan_pai; ?></td>
                </tr>
                <tr>
                    <td class="biodata-label">Kabupaten / Kota</td>
                    <td class="biodata-colon">:</td>
                    <td class="biodata-value"><?php echo $kabupaten_pai; ?></td>
                </tr>
                <tr>
                    <td class="biodata-label">Provinsi</td>
                    <td class="biodata-colon">:</td>
                    <td class="biodata-value"><?php echo $provinsi_pai; ?></td>
                </tr>
            </table>
        </div>

        </p>
        <table class="custom-table">
            <tr>
                <td class="center">No</td>
                <td class="center">Nama Kelompok Sasaran</td>
                <td class="center">Bentuk Kegiatan</td>
                <td class="center">Topik Bahasan</td>
                <td class="center">Tujuan / Target </td>
                <td class="center">Waktu Pelaksanaan</td>
            </tr>
            <tr>
                <td class="italic">A</td>
                <td class="italic">B</td>
                <td class="italic">C</td>
                <td class="italic">d</td>
                <td class="italic">e</td>
                <td class="italic">f</td>
            </tr>
            <tr>
                <td>1.</td>
                <td> <?php echo $nama_kelompok_sasaran; ?> </td>
                <td> <?php echo $bentuk_kegiatan; ?> </td>
                <td> <?php echo $topik_bahasan; ?> </td>
                <td><?php echo $tujuan_kegiatan; ?> </td>
                <td> <?php echo $waktu_pelaksanaan; ?> </td>

            </tr>
            <tr>
                <td>Dst</td>
                <td></td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
            </tr>
        </table>

        <div class="ttd mt-4">
            <p class="tanggal"> <?php echo $tempat_pai; ?> , <?php echo $tanggal_pai; ?> </p>
        </div>
        <div class="signature-container">
            <div class="signature-block left-signature">
                <div class="ttd_kiri">
                    <p class="tanggal">Mengetahui <br> <?php echo $mengetahui_pimpinan; ?> </p>
                    <img class="ttd_foto" src="<?php echo $upload_ttd_pimpinan; ?> " alt="">
                    <p class="text-with-underline ttd_nama" style="margin-bottom: -7px;"><?php echo $nama_pimpinan; ?>
                    </p>
                    <p class="ttd_nama"><?php echo $nip_pimpinan; ?> </p>
                </div>
            </div>
            <div class="signature-block right-signature">
                <div class="ttd_kanan"> Penyuluh Agama <?php echo $penyuluh_agama_pai; ?> Non PNS <br> Yang membuat
                    pernyataan</p>
                    <img class="ttd_foto" src="<?php echo $upload_ttd_pai; ?> " alt="">
                    <p class=" ttd_nama" style="margin-bottom: -7px;"> <?php echo $nama_pai; ?> </p>
                </div>
            </div>
        </div>
        <!-- akhir RENCANA KERJA BULANAN -->

        <!-- DAFTAR HADIR PENYULUHAN -->
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Menangani file upload
            $upload_dir = 'upload/';
            $ttd_peserta_path = $upload_dir . basename($_FILES['upload_ttd']['name']);
            $ttd_penyuluh_path = $upload_dir . basename($_FILES['upload_ttd_penyuluh']['name']);
            $ttd_ketua_path = $upload_dir . basename($_FILES['upload_ttd__ketua_kelompok']['name']);

            move_uploaded_file($_FILES['upload_ttd']['tmp_name'], $ttd_peserta_path);
            move_uploaded_file($_FILES['upload_ttd_penyuluh']['tmp_name'], $ttd_penyuluh_path);
            move_uploaded_file($_FILES['upload_ttd__ketua_kelompok']['tmp_name'], $ttd_ketua_path);

            // Mendapatkan data dari form
            $nama_penyuluh = htmlspecialchars($_POST['nama_penyuluh']);
            $alamat_penyuluh = htmlspecialchars($_POST['alamat_penyuluh']);
            $kegiatan_penyuluh = htmlspecialchars($_POST['kegiatan_penyuluh']);
            $topik_penyuluh = htmlspecialchars($_POST['topik_penyuluh']);
            $hari_penyuluh = htmlspecialchars($_POST['hari_penyuluh']);
            $peserta_penyuluh = htmlspecialchars($_POST['peserta_penyuluh']);
            $alamat_peserta_penyuluh = htmlspecialchars($_POST['alamat_peserta_penyuluh']);
            $mengetahui_penyuluh_agama = htmlspecialchars($_POST['mengetahui_penyuluh_agama']);
            $tempat_dilaksanakan_penyuluhan = htmlspecialchars($_POST['tempat_dilaksanakan_penyuluhan']);
            $tanggal_penyuluhan = htmlspecialchars($_POST['tanggal_penyuluhan']);
            $nama_ketua_kelompok = htmlspecialchars($_POST['nama_ketua_kelompok']);
        ?>
        <div class="page-break"></div>
        <p style="text-align: center;"><b>DAFTAR HADIR PENYULUHAN</b></p>

        <p style="text-align: justify;">
        <div class="biodata">
            <table class="biodata-table">
                <tr>
                    <td class="biodata-label">Nama Kelompok</td>
                    <td class="biodata-colon">:</td>
                    <td class="biodata-value"><?php echo $nama_penyuluh; ?></td>
                </tr>
                <tr>
                    <td class="biodata-label">Alamat</td>
                    <td class="biodata-colon">:</td>
                    <td class="biodata-value"><?php echo $alamat_penyuluh; ?></td>
                </tr>
                <tr>
                    <td class="biodata-label">Bentuk Kegiatan</td>
                    <td class="biodata-colon">:</td>
                    <td class="biodata-value"><?php echo $kegiatan_penyuluh; ?></td>
                </tr>
                <tr>
                    <td class="biodata-label">Judul / Topik</td>
                    <td class="biodata-colon">:</td>
                    <td class="biodata-value"><?php echo $topik_penyuluh; ?></td>
                </tr>
                <tr>
                    <td class="biodata-label">Hari / Tanggal</td>
                    <td class="biodata-colon">:</td>
                    <td class="biodata-value"><?php echo $hari_penyuluh; ?></td>
                </tr>
            </table>
        </div>

        </p>
        <table class="custom-table">
            <tr>
                <td class="center">No</td>
                <td class="center">Nama Peserta Penyuluhan</td>
                <td class="center">Alamat</td>
                <td class="center">Tanda Tangan</td>

            </tr>
            <tr>
                <td class="italic">A</td>
                <td class="italic">B</td>
                <td class="italic">C</td>
                <td class="italic">d</td>

            </tr>
            <tr>
                <td>1.</td>
                <td><?php echo $peserta_penyuluh; ?></td>
                <td><?php echo $alamat_peserta_penyuluh; ?> </td>
                <td> <img class="ttd_foto" src="<?php echo $ttd_peserta_path; ?>" alt=""></td>

            </tr>
            <tr>
                <td>2.</td>
                <td></td>
                <td> </td>
                <td> </td>

            </tr>
        </table>
        <div class="ttd mt-4">
            <p class="tanggal"> <?php echo $tempat_dilaksanakan_penyuluhan; ?> ,<?php echo $tanggal_penyuluhan; ?></p>
        </div>
        <div class="signature-container">
            <div class="signature-block left-signature">
                <div class="ttd_kiri">
                    <p class="tanggal">Mengetahui <br> Penyuluh Agama <?php echo $mengetahui_penyuluh_agama; ?> Non PNS
                    </p>
                    <img class="ttd_foto" src="<?php echo $ttd_penyuluh_path; ?>" alt="">
                    <p class="text-with-underline ttd_nama" style="margin-bottom: -7px;"><?php echo $nama_penyuluh; ?>
                    </p>

                </div>
            </div>
            <div class="signature-block right-signature">
                <div class="ttd_kanan"> Ketua Kelompok <br> Penyelenggara</p>
                    <img class="ttd_foto" src="<?php echo $ttd_ketua_path; ?>" alt="">
                    <p class=" ttd_nama" style="margin-bottom: -7px;"><?php echo $nama_ketua_kelompok; ?></p>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <!-- akhir DAFTAR HADIR PENYULUHAN -->
        <?php
        }
        ?>

        <!-- LAPORAN MINGGUAN ke-1 PENYULUH AGAMA -->
        <?php
        // Ambil nilai dari form
        $nama_laporan_mingguan = htmlspecialchars($_POST['nama_laporan_mingguan'] ?? '');
        $jabatan_laporan_mingguan = htmlspecialchars($_POST['jabatan_laporan_mingguan'] ?? '');
        $budang_tugas_mingguan = htmlspecialchars($_POST['budang_tugas_mingguan'] ?? '');
        $kecamatan_laporan_mingguan = htmlspecialchars($_POST['kecamatan_laporan_mingguan'] ?? '');
        $kabupaten_laporan_mingguan = htmlspecialchars($_POST['kabupaten_laporan_mingguan'] ?? '');
        $provinsi_laporan_mingguan = htmlspecialchars($_POST['provinsi_laporan_mingguan'] ?? '');
        $hari_tanggal_penyuluhan = htmlspecialchars($_POST['hari_tanggal_penyuluhan'] ?? '');
        $nama_kelompok_mingguan = htmlspecialchars($_POST['nama_kelompok_mingguan'] ?? '');
        $topik_materi_penyuluhan_mingguan = htmlspecialchars($_POST['topik_materi_penyuluhan_mingguan'] ?? '');
        $maslah_yang_ditemukan = htmlspecialchars($_POST['maslah_yang_ditemukan'] ?? '');
        $alternatif_pemecahan = htmlspecialchars($_POST['alternatif_pemecahan'] ?? '');
        $mengetahui_laporan_mingguan = htmlspecialchars($_POST['mengetahui_laporan_mingguan'] ?? '');
        $nama_mengetahui_mingguan = htmlspecialchars($_POST['nama_mengetahui_mingguan'] ?? '');
        $nip_mengetahui_mingguan = htmlspecialchars($_POST['nip_mengetahui_mingguan'] ?? '');
        $tempat_lapporan_mingguan = htmlspecialchars($_POST['tempat_lapporan_mingguan'] ?? '');
        $tanggal_laporan_mingguan = htmlspecialchars($_POST['tanggal_laporan_mingguan'] ?? '');
        $upload_ttd_mingguan = 'upload/' . htmlspecialchars($_FILES['upload_ttd_mingguan']['name'] ?? '');
        $upload_ttd_laporan_mingguan = 'upload/' . htmlspecialchars($_FILES['upload_ttd_laporan_mingguan']['name'] ?? '');
        $nama_ttd_laporan_mingguan = htmlspecialchars($_POST['nama_ttd_laporan_mingguan'] ?? '');

        // Proses upload file tanda tangan
        if ($_FILES['upload_ttd_mingguan']['error'] === UPLOAD_ERR_OK) {
            move_uploaded_file($_FILES['upload_ttd_mingguan']['tmp_name'], $upload_ttd_mingguan);
        }
        if ($_FILES['upload_ttd_laporan_mingguan']['error'] === UPLOAD_ERR_OK) {
            move_uploaded_file($_FILES['upload_ttd_laporan_mingguan']['tmp_name'], $upload_ttd_laporan_mingguan);
        }
        ?>
        <div class="page-break"></div>
        <table style="width: 100%">
            <tr>
                <td style="text-align: left; width: 10%">
                    <!-- Div untuk logo -->
                    <div>
                        <img src="upload/KEMENAG.jpg" alt="Logo Kementerian Agama" style="width: 80px; height: auto" />
                    </div>
                </td>
                <td style="text-align: center">
                    <!-- Div untuk teks -->
                    <div>
                        <p><b>KEMENTERIAN AGAMA REPUBLIK INDONESIA <br> KANTOR KEMENTERIAN AGAMA KABUPATEN MINAHASA</b>
                        </p>
                        <p><?php echo $wilayah_penugasan; ?><br> <?php echo $alamat_wilayah_penugasan; ?></p>
                    </div>
                </td>
            </tr>
        </table>
        <hr style="border: none; background-color: black; height: 1px; border-top: 2px solid black; margin: 2px 0;" />
        <hr style="border: none; background-color: black; height: 1px; border-top: 2px solid black; margin: 2px 0;" />
        <p style="text-align: center;" class="mt-3"><b>LAPORAN MINGGUAN KE-1 PENYULUH AGAMA</b></p>

        <p style="text-align: justify;">
        <div class="biodata">
            <div class="biodata-item">
                <span class="biodata-label">Nama PAI Non PNS</span>
                <span class="biodata-colon">:</span>
                <span class="biodata-value"><?php echo $nama_laporan_mingguan; ?></span>
            </div>
            <div class="biodata-item">
                <span class="biodata-label">Jabatan</span>
                <span class="biodata-colon">:</span>
                <span class="biodata-value"><?php echo $jabatan_laporan_mingguan; ?></span>
            </div>
            <div class="biodata-item">
                <span class="biodata-label">Bidang tugas / spesialisasi</span>
                <span class="biodata-colon">:</span>
                <span class="biodata-value"><?php echo $budang_tugas_mingguan; ?></span>
            </div>
            <div class="biodata-item">
                <span class="biodata-label">Kecamatan</span>
                <span class="biodata-colon">:</span>
                <span class="biodata-value"><?php echo $kecamatan_laporan_mingguan; ?></span>
            </div>
            <div class="biodata-item">
                <span class="biodata-label">Kabupaten / Kota</span>
                <span class="biodata-colon">:</span>
                <span class="biodata-value"><?php echo $kabupaten_laporan_mingguan; ?></span>
            </div>
            <div class="biodata-item">
                <span class="biodata-label">Provinsi</span>
                <span class="biodata-colon">:</span>
                <span class="biodata-value"><?php echo $provinsi_laporan_mingguan; ?></span>
            </div>
        </div>

        </p>

        <table class="custom-table">
            <tr>
                <td class="center">No</td>
                <td class="center">Hari & Tanggal Penyuluhan</td>
                <td class="center">Nama Kelompok Sasaran</td>
                <td class="center">Topik Materi Penyuluhan</td>
                <td class="center">Masalah yang ditemukan</td>
                <td class="center">Alternatif Pemecahan</td>
            </tr>
            <tr>
                <td class="italic center">A</td>
                <td class="italic center">B</td>
                <td class="italic center">C</td>
                <td class="italic center">d</td>
                <td class="italic center">e</td>
                <td class="italic center">f</td>
            </tr>
            <tr>
                <td>1.</td>
                <td><?php echo $hari_tanggal_penyuluhan; ?></td>
                <td> <?php echo $nama_kelompok_mingguan; ?></td>
                <td><?php echo $topik_materi_penyuluhan_mingguan; ?> </td>
                <td><?php echo $maslah_yang_ditemukan; ?> </td>
                <td> <?php echo $alternatif_pemecahan; ?></td>
            </tr>
            <tr>
                <td>2.</td>
                <td></td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
            </tr>
        </table>
        <div class="ttd mt-4">
            <p class="tanggal"> <?php echo $tempat_lapporan_mingguan; ?> , <?php echo $tanggal_laporan_mingguan; ?></p>
        </div>
        <div class="signature-container">
            <div class="signature-block left-signature">
                <div class="ttd_kiri">
                    <p class="tanggal">Mengetahui <br> <?php echo $mengetahui_laporan_mingguan; ?></p>
                    <img class="ttd_foto" src="<?php echo $upload_ttd_mingguan; ?>" alt="">
                    <p class="text-with-underline ttd_nama" style="margin-bottom: -7px;">
                        <?php echo $nama_mengetahui_mingguan; ?></p>
                    <p class="ttd_nama"><?php echo $nip_mengetahui_mingguan; ?></p>
                </div>
            </div>
            <div class="signature-block right-signature">
                <div class="ttd_kanan"> Penyuluh Agama Non PNS <br> Yang membuat pernyataan</p>
                    <img class="ttd_foto" src="<?php echo $upload_ttd_laporan_mingguan; ?>" alt="">
                    <p class=" ttd_nama" style="margin-bottom: -7px;"><?php echo $nama_ttd_laporan_mingguan; ?></p>
                </div>
            </div>
        </div>
        <!-- Akhir LAPORAN MINGGUAN PENYULUH AGAMA -->

        <!-- LAPORAN MINGGUAN ke-2 PENYULUH AGAMA -->
        <?php
        // Ambil nilai dari form
        $nama_laporan_mingguan2 = htmlspecialchars($_POST['nama_laporan_mingguan2'] ?? '');
        $jabatan_laporan_mingguan2 = htmlspecialchars($_POST['jabatan_laporan_mingguan2'] ?? '');
        $budang_tugas_mingguan2 = htmlspecialchars($_POST['budang_tugas_mingguan2'] ?? '');
        $kecamatan_laporan_mingguan2 = htmlspecialchars($_POST['kecamatan_laporan_mingguan2'] ?? '');
        $kabupaten_laporan_mingguan2 = htmlspecialchars($_POST['kabupaten_laporan_mingguan2'] ?? '');
        $provinsi_laporan_mingguan2 = htmlspecialchars($_POST['provinsi_laporan_mingguan2'] ?? '');
        $hari_tanggal_penyuluhan2 = htmlspecialchars($_POST['hari_tanggal_penyuluhan2'] ?? '');
        $nama_kelompok_mingguan2 = htmlspecialchars($_POST['nama_kelompok_mingguan2'] ?? '');
        $topik_materi_penyuluhan_mingguan2 = htmlspecialchars($_POST['topik_materi_penyuluhan_mingguan2'] ?? '');
        $maslah_yang_ditemukan2 = htmlspecialchars($_POST['maslah_yang_ditemukan2'] ?? '');
        $alternatif_pemecahan2 = htmlspecialchars($_POST['alternatif_pemecahan2'] ?? '');
        $mengetahui_laporan_mingguan2 = htmlspecialchars($_POST['mengetahui_laporan_mingguan2'] ?? '');
        $nama_mengetahui_mingguan2 = htmlspecialchars($_POST['nama_mengetahui_mingguan2'] ?? '');
        $nip_mengetahui_mingguan2 = htmlspecialchars($_POST['nip_mengetahui_mingguan2'] ?? '');
        $tempat_lapporan_mingguan2 = htmlspecialchars($_POST['tempat_lapporan_mingguan2'] ?? '');
        $tanggal_laporan_mingguan2 = htmlspecialchars($_POST['tanggal_laporan_mingguan2'] ?? '');
        $upload_ttd_mingguan2 = 'upload/' . htmlspecialchars($_FILES['upload_ttd_mingguan2']['name'] ?? '');
        $upload_ttd_laporan_mingguan2 = 'upload/' . htmlspecialchars($_FILES['upload_ttd_laporan_mingguan2']['name'] ?? '');
        $nama_ttd_laporan_mingguan2 = htmlspecialchars($_POST['nama_ttd_laporan_mingguan2'] ?? '');

        // Proses upload file tanda tangan
        if ($_FILES['upload_ttd_mingguan2']['error'] === UPLOAD_ERR_OK) {
            move_uploaded_file($_FILES['upload_ttd_mingguan2']['tmp_name'], $upload_ttd_mingguan2);
        }
        if ($_FILES['upload_ttd_laporan_mingguan2']['error'] === UPLOAD_ERR_OK) {
            move_uploaded_file($_FILES['upload_ttd_laporan_mingguan2']['tmp_name'], $upload_ttd_laporan_mingguan2);
        }
        ?>
        <div class="page-break"></div>
        <table style="width: 100%">
            <tr>
                <td style="text-align: left; width: 10%">
                    <!-- Div untuk logo -->
                    <div>
                        <img src="upload/KEMENAG.jpg" alt="Logo Kementerian Agama" style="width: 80px; height: auto" />
                    </div>
                </td>
                <td style="text-align: center">
                    <!-- Div untuk teks -->
                    <div>
                        <p><b>KEMENTERIAN AGAMA REPUBLIK INDONESIA <br> KANTOR KEMENTERIAN AGAMA KABUPATEN MINAHASA</b>
                        </p>
                        <p><?php echo $wilayah_penugasan; ?><br> <?php echo $alamat_wilayah_penugasan; ?></p>
                    </div>
                </td>
            </tr>
        </table>
        <hr style="border: none; background-color: black; height: 1px; border-top: 2px solid black; margin: 2px 0;" />
        <hr style="border: none; background-color: black; height: 1px; border-top: 2px solid black; margin: 2px 0;" />
        <p style="text-align: center;" class="mt-3"><b>LAPORAN MINGGUAN KE-2 PENYULUH AGAMA</b></p>

        <p style="text-align: justify;">
        <div class="biodata">
            <div class="biodata-item">
                <span class="biodata-label">Nama PAI Non PNS</span>
                <span class="biodata-colon">:</span>
                <span class="biodata-value"><?php echo $nama_laporan_mingguan2; ?></span>
            </div>
            <div class="biodata-item">
                <span class="biodata-label">Jabatan</span>
                <span class="biodata-colon">:</span>
                <span class="biodata-value"><?php echo $jabatan_laporan_mingguan2; ?></span>
            </div>
            <div class="biodata-item">
                <span class="biodata-label">Bidang tugas / spesialisasi</span>
                <span class="biodata-colon">:</span>
                <span class="biodata-value"><?php echo $budang_tugas_mingguan2; ?></span>
            </div>
            <div class="biodata-item">
                <span class="biodata-label">Kecamatan</span>
                <span class="biodata-colon">:</span>
                <span class="biodata-value"><?php echo $kecamatan_laporan_mingguan2; ?></span>
            </div>
            <div class="biodata-item">
                <span class="biodata-label">Kabupaten / Kota</span>
                <span class="biodata-colon">:</span>
                <span class="biodata-value"><?php echo $kabupaten_laporan_mingguan2; ?></span>
            </div>
            <div class="biodata-item">
                <span class="biodata-label">Provinsi</span>
                <span class="biodata-colon">:</span>
                <span class="biodata-value"><?php echo $provinsi_laporan_mingguan2; ?></span>
            </div>
        </div>

        </p>

        <table class="custom-table">
            <tr>
                <td class="center">No</td>
                <td class="center">Hari & Tanggal Penyuluhan</td>
                <td class="center">Nama Kelompok Sasaran</td>
                <td class="center">Topik Materi Penyuluhan</td>
                <td class="center">Masalah yang ditemukan</td>
                <td class="center">Alternatif Pemecahan</td>
            </tr>
            <tr>
                <td class="italic center">A</td>
                <td class="italic center">B</td>
                <td class="italic center">C</td>
                <td class="italic center">d</td>
                <td class="italic center">e</td>
                <td class="italic center">f</td>
            </tr>
            <tr>
                <td>1.</td>
                <td><?php echo $hari_tanggal_penyuluhan2; ?></td>
                <td> <?php echo $nama_kelompok_mingguan2; ?></td>
                <td><?php echo $topik_materi_penyuluhan_mingguan2; ?> </td>
                <td><?php echo $maslah_yang_ditemukan2; ?> </td>
                <td> <?php echo $alternatif_pemecahan2; ?></td>
            </tr>
            <tr>
                <td>2.</td>
                <td></td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
            </tr>
        </table>
        <div class="ttd mt-4">
            <p class="tanggal"> <?php echo $tempat_lapporan_mingguan2; ?> , <?php echo $tanggal_laporan_mingguan2; ?>
            </p>
        </div>
        <div class="signature-container">
            <div class="signature-block left-signature">
                <div class="ttd_kiri">
                    <p class="tanggal">Mengetahui <br> <?php echo $mengetahui_laporan_mingguan2; ?></p>
                    <img class="ttd_foto" src="<?php echo $upload_ttd_mingguan2; ?>" alt="">
                    <p class="text-with-underline ttd_nama" style="margin-bottom: -7px;">
                        <?php echo $nama_mengetahui_mingguan2; ?></p>
                    <p class="ttd_nama"><?php echo $nip_mengetahui_mingguan2; ?></p>
                </div>
            </div>
            <div class="signature-block right-signature">
                <div class="ttd_kanan"> Penyuluh Agama Non PNS <br> Yang membuat pernyataan</p>
                    <img class="ttd_foto" src="<?php echo $upload_ttd_laporan_mingguan2; ?>" alt="">
                    <p class=" ttd_nama" style="margin-bottom: -7px;"><?php echo $nama_ttd_laporan_mingguan2; ?></p>
                </div>
            </div>
        </div>
        <!-- Akhir LAPORAN MINGGUAN PENYULUH AGAMA -->

        <!-- LAPORAN MINGGUAN ke-3 PENYULUH AGAMA -->
        <?php
        // Ambil nilai dari form
        $nama_laporan_mingguan3 = htmlspecialchars($_POST['nama_laporan_mingguan3'] ?? '');
        $jabatan_laporan_mingguan3 = htmlspecialchars($_POST['jabatan_laporan_mingguan3'] ?? '');
        $budang_tugas_mingguan3 = htmlspecialchars($_POST['budang_tugas_mingguan3'] ?? '');
        $kecamatan_laporan_mingguan3 = htmlspecialchars($_POST['kecamatan_laporan_mingguan3'] ?? '');
        $kabupaten_laporan_mingguan3 = htmlspecialchars($_POST['kabupaten_laporan_mingguan3'] ?? '');
        $provinsi_laporan_mingguan3 = htmlspecialchars($_POST['provinsi_laporan_mingguan3'] ?? '');
        $hari_tanggal_penyuluhan3 = htmlspecialchars($_POST['hari_tanggal_penyuluhan3'] ?? '');
        $nama_kelompok_mingguan3 = htmlspecialchars($_POST['nama_kelompok_mingguan3'] ?? '');
        $topik_materi_penyuluhan_mingguan3 = htmlspecialchars($_POST['topik_materi_penyuluhan_mingguan3'] ?? '');
        $maslah_yang_ditemukan3 = htmlspecialchars($_POST['maslah_yang_ditemukan3'] ?? '');
        $alternatif_pemecahan3 = htmlspecialchars($_POST['alternatif_pemecahan3'] ?? '');
        $mengetahui_laporan_mingguan3 = htmlspecialchars($_POST['mengetahui_laporan_mingguan3'] ?? '');
        $nama_mengetahui_mingguan3 = htmlspecialchars($_POST['nama_mengetahui_mingguan3'] ?? '');
        $nip_mengetahui_mingguan3 = htmlspecialchars($_POST['nip_mengetahui_mingguan3'] ?? '');
        $tempat_lapporan_mingguan3 = htmlspecialchars($_POST['tempat_lapporan_mingguan3'] ?? '');
        $tanggal_laporan_mingguan3 = htmlspecialchars($_POST['tanggal_laporan_mingguan3'] ?? '');
        $upload_ttd_mingguan3 = 'upload/' . htmlspecialchars($_FILES['upload_ttd_mingguan3']['name'] ?? '');
        $upload_ttd_laporan_mingguan3 = 'upload/' . htmlspecialchars($_FILES['upload_ttd_laporan_mingguan3']['name'] ?? '');
        $nama_ttd_laporan_mingguan3 = htmlspecialchars($_POST['nama_ttd_laporan_mingguan3'] ?? '');

        // Proses upload file tanda tangan
        if ($_FILES['upload_ttd_mingguan3']['error'] === UPLOAD_ERR_OK) {
            move_uploaded_file($_FILES['upload_ttd_mingguan3']['tmp_name'], $upload_ttd_mingguan3);
        }
        if ($_FILES['upload_ttd_laporan_mingguan3']['error'] === UPLOAD_ERR_OK) {
            move_uploaded_file($_FILES['upload_ttd_laporan_mingguan3']['tmp_name'], $upload_ttd_laporan_mingguan3);
        }
        ?>
        <div class="page-break"></div>
        <table style="width: 100%">
            <tr>
                <td style="text-align: left; width: 10%">
                    <!-- Div untuk logo -->
                    <div>
                        <img src="upload/KEMENAG.jpg" alt="Logo Kementerian Agama" style="width: 80px; height: auto" />
                    </div>
                </td>
                <td style="text-align: center">
                    <!-- Div untuk teks -->
                    <div>
                        <p><b>KEMENTERIAN AGAMA REPUBLIK INDONESIA <br> KANTOR KEMENTERIAN AGAMA KABUPATEN MINAHASA</b>
                        </p>
                        <p><?php echo $wilayah_penugasan; ?><br> <?php echo $alamat_wilayah_penugasan; ?></p>
                    </div>
                </td>
            </tr>
        </table>
        <hr style="border: none; background-color: black; height: 1px; border-top: 2px solid black; margin: 2px 0;" />
        <hr style="border: none; background-color: black; height: 1px; border-top: 2px solid black; margin: 2px 0;" />
        <p style="text-align: center;" class="mt-3"><b>LAPORAN MINGGUAN KE-3 PENYULUH AGAMA</b></p>

        <p style="text-align: justify;">
        <div class="biodata">
            <div class="biodata-item">
                <span class="biodata-label">Nama PAI Non PNS</span>
                <span class="biodata-colon">:</span>
                <span class="biodata-value"><?php echo $nama_laporan_mingguan3; ?></span>
            </div>
            <div class="biodata-item">
                <span class="biodata-label">Jabatan</span>
                <span class="biodata-colon">:</span>
                <span class="biodata-value"><?php echo $jabatan_laporan_mingguan3; ?></span>
            </div>
            <div class="biodata-item">
                <span class="biodata-label">Bidang tugas / spesialisasi</span>
                <span class="biodata-colon">:</span>
                <span class="biodata-value"><?php echo $budang_tugas_mingguan3; ?></span>
            </div>
            <div class="biodata-item">
                <span class="biodata-label">Kecamatan</span>
                <span class="biodata-colon">:</span>
                <span class="biodata-value"><?php echo $kecamatan_laporan_mingguan3; ?></span>
            </div>
            <div class="biodata-item">
                <span class="biodata-label">Kabupaten / Kota</span>
                <span class="biodata-colon">:</span>
                <span class="biodata-value"><?php echo $kabupaten_laporan_mingguan3; ?></span>
            </div>
            <div class="biodata-item">
                <span class="biodata-label">Provinsi</span>
                <span class="biodata-colon">:</span>
                <span class="biodata-value"><?php echo $provinsi_laporan_mingguan3; ?></span>
            </div>
        </div>

        </p>

        <table class="custom-table">
            <tr>
                <td class="center">No</td>
                <td class="center">Hari & Tanggal Penyuluhan</td>
                <td class="center">Nama Kelompok Sasaran</td>
                <td class="center">Topik Materi Penyuluhan</td>
                <td class="center">Masalah yang ditemukan</td>
                <td class="center">Alternatif Pemecahan</td>
            </tr>
            <tr>
                <td class="italic center">A</td>
                <td class="italic center">B</td>
                <td class="italic center">C</td>
                <td class="italic center">d</td>
                <td class="italic center">e</td>
                <td class="italic center">f</td>
            </tr>
            <tr>
                <td>1.</td>
                <td><?php echo $hari_tanggal_penyuluhan3; ?></td>
                <td> <?php echo $nama_kelompok_mingguan3; ?></td>
                <td><?php echo $topik_materi_penyuluhan_mingguan3; ?> </td>
                <td><?php echo $maslah_yang_ditemukan3; ?> </td>
                <td> <?php echo $alternatif_pemecahan3; ?></td>
            </tr>
            <tr>
                <td>2.</td>
                <td></td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
            </tr>
        </table>
        <div class="ttd mt-4">
            <p class="tanggal"> <?php echo $tempat_lapporan_mingguan3; ?> , <?php echo $tanggal_laporan_mingguan3; ?>
            </p>
        </div>
        <div class="signature-container">
            <div class="signature-block left-signature">
                <div class="ttd_kiri">
                    <p class="tanggal">Mengetahui <br> <?php echo $mengetahui_laporan_mingguan3; ?></p>
                    <img class="ttd_foto" src="<?php echo $upload_ttd_mingguan3; ?>" alt="">
                    <p class="text-with-underline ttd_nama" style="margin-bottom: -7px;">
                        <?php echo $nama_mengetahui_mingguan3; ?></p>
                    <p class="ttd_nama"><?php echo $nip_mengetahui_mingguan3; ?></p>
                </div>
            </div>
            <div class="signature-block right-signature">
                <div class="ttd_kanan"> Penyuluh Agama Non PNS <br> Yang membuat pernyataan</p>
                    <img class="ttd_foto" src="<?php echo $upload_ttd_laporan_mingguan3; ?>" alt="">
                    <p class=" ttd_nama" style="margin-bottom: -7px;"><?php echo $nama_ttd_laporan_mingguan3; ?></p>
                </div>
            </div>
        </div>

        <!-- Akhir LAPORAN MINGGUAN PENYULUH AGAMA -->

        <!-- LAPORAN MINGGUAN ke-4 PENYULUH AGAMA -->
        <?php
        // Ambil nilai dari form
        $nama_laporan_mingguan4 = htmlspecialchars($_POST['nama_laporan_mingguan4'] ?? '');
        $jabatan_laporan_mingguan4 = htmlspecialchars($_POST['jabatan_laporan_mingguan4'] ?? '');
        $budang_tugas_mingguan4 = htmlspecialchars($_POST['budang_tugas_mingguan4'] ?? '');
        $kecamatan_laporan_mingguan4 = htmlspecialchars($_POST['kecamatan_laporan_mingguan4'] ?? '');
        $kabupaten_laporan_mingguan4 = htmlspecialchars($_POST['kabupaten_laporan_mingguan4'] ?? '');
        $provinsi_laporan_mingguan4 = htmlspecialchars($_POST['provinsi_laporan_mingguan4'] ?? '');
        $hari_tanggal_penyuluhan4 = htmlspecialchars($_POST['hari_tanggal_penyuluhan4'] ?? '');
        $nama_kelompok_mingguan4 = htmlspecialchars($_POST['nama_kelompok_mingguan4'] ?? '');
        $topik_materi_penyuluhan_mingguan4 = htmlspecialchars($_POST['topik_materi_penyuluhan_mingguan4'] ?? '');
        $maslah_yang_ditemukan4 = htmlspecialchars($_POST['maslah_yang_ditemukan4'] ?? '');
        $alternatif_pemecahan4 = htmlspecialchars($_POST['alternatif_pemecahan4'] ?? '');
        $mengetahui_laporan_mingguan4 = htmlspecialchars($_POST['mengetahui_laporan_mingguan4'] ?? '');
        $nama_mengetahui_mingguan4 = htmlspecialchars($_POST['nama_mengetahui_mingguan4'] ?? '');
        $nip_mengetahui_mingguan4 = htmlspecialchars($_POST['nip_mengetahui_mingguan4'] ?? '');
        $tempat_lapporan_mingguan4 = htmlspecialchars($_POST['tempat_lapporan_mingguan4'] ?? '');
        $tanggal_laporan_mingguan4 = htmlspecialchars($_POST['tanggal_laporan_mingguan4'] ?? '');
        $upload_ttd_mingguan4 = 'upload/' . htmlspecialchars($_FILES['upload_ttd_mingguan4']['name'] ?? '');
        $upload_ttd_laporan_mingguan4 = 'upload/' . htmlspecialchars($_FILES['upload_ttd_laporan_mingguan4']['name'] ?? '');
        $nama_ttd_laporan_mingguan4 = htmlspecialchars($_POST['nama_ttd_laporan_mingguan4'] ?? '');

        // Proses upload file tanda tangan
        if ($_FILES['upload_ttd_mingguan4']['error'] === UPLOAD_ERR_OK) {
            move_uploaded_file($_FILES['upload_ttd_mingguan4']['tmp_name'], $upload_ttd_mingguan4);
        }
        if ($_FILES['upload_ttd_laporan_mingguan4']['error'] === UPLOAD_ERR_OK) {
            move_uploaded_file($_FILES['upload_ttd_laporan_mingguan4']['tmp_name'], $upload_ttd_laporan_mingguan4);
        }
        ?>
        <div class="page-break"></div>
        <table style="width: 100%">
            <tr>
                <td style="text-align: left; width: 10%">
                    <!-- Div untuk logo -->
                    <div>
                        <img src="upload/KEMENAG.jpg" alt="Logo Kementerian Agama" style="width: 80px; height: auto" />
                    </div>
                </td>
                <td style="text-align: center">
                    <!-- Div untuk teks -->
                    <div>
                        <p><b>KEMENTERIAN AGAMA REPUBLIK INDONESIA <br> KANTOR KEMENTERIAN AGAMA KABUPATEN MINAHASA</b>
                        </p>
                        <p><?php echo $wilayah_penugasan; ?><br> <?php echo $alamat_wilayah_penugasan; ?></p>
                    </div>
                </td>
            </tr>
        </table>
        <hr style="border: none; background-color: black; height: 1px; border-top: 2px solid black; margin: 2px 0;" />
        <hr style="border: none; background-color: black; height: 1px; border-top: 2px solid black; margin: 2px 0;" />
        <p style="text-align: center;" class="mt-4"><b>LAPORAN MINGGUAN KE-4 PENYULUH AGAMA</b></p>

        <p style="text-align: justify;">
        <div class="biodata">
            <div class="biodata-item">
                <span class="biodata-label">Nama PAI Non PNS</span>
                <span class="biodata-colon">:</span>
                <span class="biodata-value"><?php echo $nama_laporan_mingguan4; ?></span>
            </div>
            <div class="biodata-item">
                <span class="biodata-label">Jabatan</span>
                <span class="biodata-colon">:</span>
                <span class="biodata-value"><?php echo $jabatan_laporan_mingguan4; ?></span>
            </div>
            <div class="biodata-item">
                <span class="biodata-label">Bidang tugas / spesialisasi</span>
                <span class="biodata-colon">:</span>
                <span class="biodata-value"><?php echo $budang_tugas_mingguan4; ?></span>
            </div>
            <div class="biodata-item">
                <span class="biodata-label">Kecamatan</span>
                <span class="biodata-colon">:</span>
                <span class="biodata-value"><?php echo $kecamatan_laporan_mingguan4; ?></span>
            </div>
            <div class="biodata-item">
                <span class="biodata-label">Kabupaten / Kota</span>
                <span class="biodata-colon">:</span>
                <span class="biodata-value"><?php echo $kabupaten_laporan_mingguan4; ?></span>
            </div>
            <div class="biodata-item">
                <span class="biodata-label">Provinsi</span>
                <span class="biodata-colon">:</span>
                <span class="biodata-value"><?php echo $provinsi_laporan_mingguan4; ?></span>
            </div>
        </div>

        </p>

        <table class="custom-table">
            <tr>
                <td class="center">No</td>
                <td class="center">Hari & Tanggal Penyuluhan</td>
                <td class="center">Nama Kelompok Sasaran</td>
                <td class="center">Topik Materi Penyuluhan</td>
                <td class="center">Masalah yang ditemukan</td>
                <td class="center">Alternatif Pemecahan</td>
            </tr>
            <tr>
                <td class="italic center">A</td>
                <td class="italic center">B</td>
                <td class="italic center">C</td>
                <td class="italic center">d</td>
                <td class="italic center">e</td>
                <td class="italic center">f</td>
            </tr>
            <tr>
                <td>1.</td>
                <td><?php echo $hari_tanggal_penyuluhan4; ?></td>
                <td> <?php echo $nama_kelompok_mingguan4; ?></td>
                <td><?php echo $topik_materi_penyuluhan_mingguan4; ?> </td>
                <td><?php echo $maslah_yang_ditemukan4; ?> </td>
                <td> <?php echo $alternatif_pemecahan4; ?></td>
            </tr>
            <tr>
                <td>2.</td>
                <td></td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
            </tr>
        </table>
        <div class="ttd mt-4">
            <p class="tanggal"> <?php echo $tempat_lapporan_mingguan4; ?> , <?php echo $tanggal_laporan_mingguan4; ?>
            </p>
        </div>
        <div class="signature-container">
            <div class="signature-block left-signature">
                <div class="ttd_kiri">
                    <p class="tanggal">Mengetahui <br> <?php echo $mengetahui_laporan_mingguan4; ?></p>
                    <img class="ttd_foto" src="<?php echo $upload_ttd_mingguan4; ?>" alt="">
                    <p class="text-with-underline ttd_nama" style="margin-bottom: -7px;">
                        <?php echo $nama_mengetahui_mingguan4; ?></p>
                    <p class="ttd_nama"><?php echo $nip_mengetahui_mingguan4; ?></p>
                </div>
            </div>
            <div class="signature-block right-signature">
                <div class="ttd_kanan"> Penyuluh Agama Non PNS <br> Yang membuat pernyataan</p>
                    <img class="ttd_foto" src="<?php echo $upload_ttd_laporan_mingguan4; ?>" alt="">
                    <p class=" ttd_nama" style="margin-bottom: -7px;"><?php echo $nama_ttd_laporan_mingguan4; ?></p>
                </div>
            </div>
        </div>
        <!-- Akhir LAPORAN MINGGUAN PENYULUH AGAMA -->

        <!--  SURAT PERNYATAAN MELAKUKAN KEGIATAN PENYULUHAN AGAMA ISLAM-->
        <?php
        // Ambil nilai dari form
        $nama_penyuluh_agama_islam = htmlspecialchars($_POST['nama_penyuluh_agama_islam'] ?? '');
        $nip_penyuluh_agama_islam = htmlspecialchars($_POST['nip_penyuluh_agama_islam'] ?? '');
        $pangkat_penyuluh_agama_islam = htmlspecialchars($_POST['pangkat__penyuluh_agama_islam'] ?? '');
        $jabatan_penyuluh_agama_islam = htmlspecialchars($_POST['jabatan_penyuluh_agama_islam'] ?? '');
        $tempat_penyuluh_agama_islam = htmlspecialchars($_POST['tempat_penyuluh_agama_islam'] ?? '');
        $tanggal_penyuluh_agama_islam = htmlspecialchars($_POST['tanggal_penyuluh_agama_islam'] ?? '');
        $upload_ttd_penyuluh_agama_islam = 'upload/' . htmlspecialchars($_FILES['upload_ttd_penyuluh_agama_islam']['name'] ?? '');
        $nama_menerangkan = htmlspecialchars($_POST['nama_menerangkan'] ?? '');
        $jabatan_menerangkan = htmlspecialchars($_POST['jabatan_menerangkan'] ?? '');
        $bidang_menerangkan = htmlspecialchars($_POST['bidang_menerangkan'] ?? '');
        $wilayah_menerangkan = htmlspecialchars($_POST['wilayah_menerangkan'] ?? '');
        $bidang_agama_menerangkan = htmlspecialchars($_POST['bidang_agama_menerangkan'] ?? '');
        $jumlah_menerangkan = htmlspecialchars($_POST['jumah_menerangkan'] ?? '');
        $bulan_menerangkan = htmlspecialchars($_POST['bulan_menerangkan'] ?? '');
        $tahun_menerangkan = htmlspecialchars($_POST['tahun_menerangkan'] ?? '');

        // Proses upload file tanda tangan
        if ($_FILES['upload_ttd_penyuluh_agama_islam']['error'] === UPLOAD_ERR_OK) {
            move_uploaded_file($_FILES['upload_ttd_penyuluh_agama_islam']['tmp_name'], $upload_ttd_penyuluh_agama_islam);
        }
        ?>
        <div class="page-break"></div>
        <table style="width: 100%">
            <tr>
                <td style="text-align: left; width: 10%">
                    <!-- Div untuk logo -->
                    <div>
                        <img src="upload/KEMENAG.jpg" alt="Logo Kementerian Agama" style="width: 80px; height: auto" />
                    </div>
                </td>
                <td style="text-align: center">
                    <!-- Div untuk teks -->
                    <div>
                        <p><b>KEMENTERIAN AGAMA REPUBLIK INDONESIA <br> KANTOR KEMENTERIAN AGAMA KABUPATEN MINAHASA</b>
                        </p>
                        <p><?php echo $wilayah_penugasan; ?><br> <?php echo $alamat_wilayah_penugasan; ?></p>
                    </div>
                </td>
            </tr>
        </table>
        <hr style="border: none; background-color: black; height: 1px; border-top: 2px solid black; margin: 2px 0;" />
        <hr style="border: none; background-color: black; height: 1px; border-top: 2px solid black; margin: 2px 0;" />
        <p style="text-align: center;" class="mt-3"><b>SURAT PERNYATAAN <br> MELAKUKAN KEGIATAN PENYULUHAN AGAMA</b></p>

        <p class="biodata">Yang bertanda tangan dibawah ini :</p>
        <p style="text-align: justify;">
        <div class="biodata">
            <div class="biodata-item">
                <span class="biodata-label">Nama</span>
                <span class="biodata-colon">:</span>
                <span class="biodata-value"><?php echo $nama_penyuluh_agama_islam; ?></span>
            </div>
            <div class="biodata-item">
                <span class="biodata-label">NIP</span>
                <span class="biodata-colon">:</span>
                <span class="biodata-value">Penyuluh Agama <?php echo $nip_penyuluh_agama_islam; ?> Non PNS</span>
            </div>
            <div class="biodata-item">
                <span class="biodata-label">Pangkat/Golongan</span>
                <span class="biodata-colon">:</span>
                <span class="biodata-value"><?php echo $pangkat_penyuluh_agama_islam; ?></span>
            </div>
            <div class="biodata-item">
                <span class="biodata-label">Jabatan</span>
                <span class="biodata-colon">:</span>
                <span class="biodata-value"><?php echo $jabatan_penyuluh_agama_islam; ?></span>
            </div>
        </div>

        </p>

        <p class="biodata mt-5">Menerangkan </p>
        <p style="text-align: justify;">
        <div class="biodata">
            <div class="biodata-item">
                <span class="biodata-label">Nama</span>
                <span class="biodata-colon">:</span>
                <span class="biodata-value"><?php echo $nama_menerangkan; ?></span>
            </div>
            <div class="biodata-item">
                <span class="biodata-label">Jabatan</span>
                <span class="biodata-colon">:</span>
                <span class="biodata-value"><?php echo $jabatan_menerangkan; ?></span>
            </div>
            <div class="biodata-item">
                <span class="biodata-label">Bidang Tugas Spesialisasi</span>
                <span class="biodata-colon">:</span>
                <span class="biodata-value">Penyuluh Agama <?php echo $bidang_menerangkan; ?> Non PNS</span>
            </div>
            <div class="biodata-item">
                <span class="biodata-label">Wilayah Penugasan</span>
                <span class="biodata-colon">:</span>
                <span class="biodata-value"><?php echo $wilayah_menerangkan; ?></span>
            </div>
        </div>

        </p>

        <div class="isi_surat">
            <p>Telah melakukan kegiatan bimbingan dan penyuluhan agama <?php echo $bidang_agama_menerangkan; ?> sesuai
                bidang dan
                tugasnya sebanyak <?php echo $jumlah_menerangkan; ?> pada bulan <?php echo $bulan_menerangkan; ?> tahun
                <?php echo $tahun_menerangkan; ?>.</p>

            <p>Demikian surat pernyataan ini dibuat untuk dipergunakan sebagaimana mestinya</p>
        </div>
        <div class="ttd">
            <p class="tanggal"> <?php echo $tempat_penyuluh_agama_islam; ?> ,
                <?php echo $tanggal_penyuluh_agama_islam; ?></p>
            <img class="ttd_foto" src="<?php echo $upload_ttd_penyuluh_agama_islam; ?>" alt="">
            <p class="text-with-underline ttd_nama" style="margin-bottom: -7px;">
                <?php echo $nama_penyuluh_agama_islam; ?></p>
            <p class="ttd_nama"><?php echo $nip_penyuluh_agama_islam; ?></p>
        </div>
        <!--  Akhir SURAT PERNYATAAN MELAKUKAN KEGIATAN PENYULUHAN AGAMA ISLAM-->

        <!-- DOKUMENTASI KEGIATAN -->
        <?php
            // Folder tujuan upload
            $uploadDir = 'uploads/';

            // Membuat folder jika belum ada
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }

            $files = ['kegiatan1', 'kegiatan2', 'kegiatan3', 'kegiatan4', 'kegiatan5', 'kegiatan6', 'kegiatan7', 'kegiatan8'];
            $uploadedFiles = [];

            foreach ($files as $file) {
                if (isset($_FILES[$file]) && $_FILES[$file]['error'] == UPLOAD_ERR_OK) {
                    $fileTmpPath = $_FILES[$file]['tmp_name'];
                    $fileName = $_FILES[$file]['name'];
                    $fileSize = $_FILES[$file]['size'];
                    $fileType = $_FILES[$file]['type'];
                    $fileNameCmps = explode(".", $fileName);
                    $fileExtension = strtolower(end($fileNameCmps));

                    // Tentukan nama file yang unik
                    $newFileName = md5(time() . $fileName) . '.' . $fileExtension;

                    $dest_path = $uploadDir . $newFileName;

                    if(move_uploaded_file($fileTmpPath, $dest_path)) {
                        $uploadedFiles[$file] = $dest_path;
                    } else {
                        echo "There was an error moving the uploaded file.";
                    }
                }
            }
            ?>
        <div class="page-break"></div>
        <p style="text-align: center;" class="mt-3"><b>DOKUMENTASI KEGIATAN</b></p>
        <div class="image-container mx-auto max-w-4xl">
            <?php foreach ($uploadedFiles as $file): ?>
            <img src="<?php echo $file; ?>" alt="<?php echo basename($file); ?>">
            <?php endforeach; ?>
        </div>



</body>

<style>
.image-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 16px;
}

.image-container img {
    width: calc(50% - 8px);
    /* 50% of the container width minus the gap/2 */
    height: auto;
}
</style>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const container = document.querySelector('.image-container');
    const images = container.querySelectorAll('img');

    images.forEach(image => {
        image.style.width = 'calc(50% - 8px)';
        image.style.height = 'auto';
    });
});
</script>

</html>