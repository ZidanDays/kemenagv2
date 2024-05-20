<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <!-- link css -->
    <link rel="stylesheet" href="assets/css/pdf1.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Surat Tugas</title>
</head>

<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Inisialisasi variabel dengan nilai default
        $data_form_1 = [];
        $data_form_2 = [];
        $upload_dir = 'upload/';

        // Proses data dari Formulir 1
        if (isset($_POST['wilayah_penugasan'])) {
            // Simpan data dari Formulir 1 dalam variabel
            $wilayah_penugasan = htmlspecialchars($_POST['wilayah_penugasan']);
            $alamat_wilayah_penugasan = htmlspecialchars($_POST['alamat_wilayah_penugasan']);
            // Simpan data lainnya dari Formulir 1 sesuai kebutuhan

            // Proses upload file
            if (isset($_FILES['upload_ttd']) && $_FILES['upload_ttd']['error'] == UPLOAD_ERR_OK) {
                $upload_file = $upload_dir . basename($_FILES['upload_ttd']['name']);
                if (move_uploaded_file($_FILES['upload_ttd']['tmp_name'], $upload_file)) {
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
            // Simpan data lainnya dari Formulir 2 sesuai kebutuhan

            // Proses upload file untuk Formulir 2
            if (isset($_FILES['upload_ttd_Spesialisasi1']) && $_FILES['upload_ttd_Spesialisasi1']['error'] == UPLOAD_ERR_OK) {
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
    ?>
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
                        <p class="font-weight-bold">KEMENTERIAN AGAMA REPUBLIK INDONESIA <br> KANTOR KEMENTERIAN AGAMA KABUPATEN MINAHASA</p>
                        <p><?php echo $wilayah_penugasan; ?><br> <?php echo $alamat_wilayah_penugasan; ?></p>
                    </div>
                </td>
            </tr>
        </table>
        <hr style="border: none; border-top: 20px solid black; margin: 2px auto" />
        <hr style="border: none; border-top: 20px solid black; margin: 2px auto" />
        <p style="text-align: center;" class="mt-3 font-weight-bold">SURAT TUGAS <br> Nomor : <?php echo $nomor_surat; ?></p>


        <p>Kepala Kantor Urusan Agama Kecamatan Remboken menugaskan <br> Penyuluh Agama Islam Non PNS</p>

        <p style="text-align: justify;">
        <div class="biodata">
            <div class="biodata-item">
                <span class="biodata-label">Nama </span>
                <span style="margin-left: 11rem;"> :</span>
                <span class="biodata-value"><?php echo $nama; ?></span>
            </div>
            <div class="biodata-item">
                <span class="biodata-label">Tempat tanggal lahir </span>
                <span style="margin-left: 4rem;"> :</span>
                <span class="biodata-value"> <?php echo $tempat_tanggal_lahir; ?></span>
            </div>
            <div class="biodata-item">
                <span class="biodata-label">Pendidikan Terakhir </span>
                <span style="margin-left: 4.3rem;"> :</span>
                <span class="biodata-value"><?php echo $pendidikan_terakhir; ?></span>
            </div>
            <div class="biodata-item">
                <span class="biodata-label">No. Reg </span>
                <span style="margin-left: 10rem;"> :</span>
                <span class="biodata-value"><?php echo $noreg; ?></span>
            </div>
            <div class="biodata-item">
                <span class="biodata-label">Bidang tugas / spesialisasi </span>
                <span style="margin-left: 1.5rem;"> :</span>
                <span class="biodata-value"><?php echo $bidang_tugas; ?></span>
            </div>
            <div class="biodata-item">
                <span class="biodata-label">Alamat </span>
                <span style="margin-left: 10.5rem;"> :</span>
                <span class="biodata-value">'<?php echo $alamat; ?></span>
            </div>
        </div>
        </p>
        <div class="isi_surat">
            <p>Sesuai surat keputusan Kepala Kantor Kementerian Agama Kabupaten Minahasa Nomor
                <?php echo $no_keputusan; ?> dengan ini menugaskan yang bersangkutan untuk melaksanakan bimbingan dan
                penyuluhan Agama <?php echo $bimbingan_penyuluhan; ?> kepada kelompok sasaran / binaan di <?php echo $sasaran_tugas; ?> dengan uraian tugas <br>Sbb :</p>
            <P>1. <?php echo $uraian_tugas; ?></P>
            <P>2. Dst.</P>
            <p>Demikian Surat Tugas ini kami buat untuk dilaksanakan sebagaimana mestinya.</p>
        </div>
        <div class="ttd">
            <p class="tanggal"> <?php echo $tempat; ?>, <?php echo $tgl_bl_thn; ?> </p>
            <?php if (!empty($upload_ttd)) : ?>
                <img class="ttd_foto" src="<?php echo $upload_ttd; ?>" alt="Foto Tanda Tangan">
            <?php endif; ?>
            <p class="text-with-underline ttd_nama" style="margin-bottom: -7px;"><?php echo $nama_ttd_bersangkuta; ?> </p>
            <p class="ttd_nama"><?php echo  $nip; ?></p>
        </div>
        <div class="isi_surat">
            <p>Tembusan :
                <br>Yth Kepala Kemenag Kabupaten Minahasa
            </p>
        </div>


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
                        <p><b>KEMENTERIAN AGAMA REPUBLIK INDONESIA <br> KANTOR KEMENTERIAN AGAMA KABUPATEN MINAHASA</b></p>
                        <p><?php echo $wilayah_penugasan; ?><br> <?php echo $alamat_wilayah_penugasan; ?></p>
                    </div>
                </td>
            </tr>
        </table>
        <hr style="border: none; border-top: 20px solid black; margin: 2px auto" />
        <hr style="border: none; border-top: 20px solid black; margin: 2px auto" />
        <p style="text-align: center;" class="mt-3"><b>SURAT PERNYATAAN <br> PEMILIHAN SPESIALISASI</b></p>

        <p style="text-align: justify;">
        <div class="biodata">
            <div class="biodata-item">
                <span class="biodata-label">Nama </span>
                <span style="margin-left: 11rem;"> :</span>
                <span class="biodata-value"> <?php echo $nama_pernyataan1; ?></span>
            </div>
            <div class="biodata-item">
                <span class="biodata-label">Tempat tanggal lahir </span>
                <span style="margin-left: 4rem;"> :</span>
                <span class="biodata-value"><?php echo $tempat_tanggal_lahir_pernyataan1; ?></span>
            </div>
            <div class="biodata-item">
                <span class="biodata-label">Pendidikan Terakhir </span>
                <span style="margin-left: 4.3rem;"> :</span>
                <span class="biodata-value"><?php echo  $pendidikan_terakhir_pernyataan1; ?></span>
            </div>
            <div class="biodata-item">
                <span class="biodata-label">No. Reg </span>
                <span style="margin-left: 10rem;"> :</span>
                <span class="biodata-value"><?php echo $noreg_pernyataan1; ?></span>
            </div>
            <div class="biodata-item">
                <span class="biodata-label">Bidang tugas / spesialisasi </span>
                <span style="margin-left: 1.5rem;"> :</span>
                <span class="biodata-value"><?php echo $bidang_tugas_pernyataan1; ?></span>
            </div>
            <div class="biodata-item">
                <span class="biodata-label">Alamat </span>
                <span style="margin-left: 10.5rem;"> :</span>
                <span class="biodata-value"><?php echo $alamat_pernyataan1; ?></span>
            </div>
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

</body>

</html>