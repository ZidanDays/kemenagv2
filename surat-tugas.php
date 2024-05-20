<?php
require_once __DIR__ . '/vendor/autoload.php';

// Initialize MPDF
$mpdf = new \Mpdf\Mpdf();

// Data dari formulir POST
$wilayah_penugasan = $_POST['wilayah_penugasan'];
$alamat_wilayah_penugasan = $_POST['alamat_wilayah_penugasan'];
$nomor_surat = $_POST['nomor_surat'];
$nama = $_POST['nama'];
$tempat_tanggal_lahir = $_POST['tempat_tanggal_lahir'];
$pendidikan_terakhir = $_POST['pendidikan_terakhir'];
$noreg = $_POST['noreg'];
$bidang_tugas = $_POST['bidang_tugas'];
$alamat = $_POST['alamat'];
$no_keputusan = $_POST['no_keputusan'];
$jenis_kegiatan = $_POST['jenis_kegiatan'];
$kelompok_sasaran = $_POST['kelompok_sasaran'];
$uraian_tugas = $_POST['uraian_tugas'];
$tempat = $_POST['tempat'];
$tgl_bl_thn = $_POST['tgl_bl_thn'];
$nip_tugas = $_POST['nip'];

$upload_dir = 'upload/';

// Mendapatkan nama file yang diunggah
$upload_file = $upload_dir . basename($_FILES['upload_ttd']['name']);

// Memindahkan file ke folder upload
if (move_uploaded_file($_FILES['upload_ttd']['tmp_name'], $upload_file)) {
    echo "File berhasil diunggah.";
    // Path file yang telah dipindahkan
    $upload_ttd = $upload_file;
} else {
    echo "Gagal mengunggah file.";
    // Jika gagal mengunggah, atur variabel $upload_ttd menjadi kosong
    $upload_ttd = '';
}

// surat tugas
$html = '
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
                        <p>' . $wilayah_penugasan . ' <br> ' . $alamat_wilayah_penugasan . '</p>
                    </div>
                </td>
            </tr>
        </table>
        <hr style="border: none; border-top: 20px solid black; margin: 2px auto" />
        <hr style="border: none; border-top: 20px solid black; margin: 2px auto" />
        <p style="text-align: center;" class="mt-3 font-weight-bold">SURAT TUGAS <br> Nomor : ' . $nomor_surat . '</p>


        <p>Kepala Kantor Urusan Agama Kecamatan Remboken menugaskan <br> Penyuluh Agama Islam Non PNS</p>

        <p style="text-align: justify;">
        <div class="biodata">
            <div class="biodata-item">
                <span class="biodata-label">Nama </span>
                <span style="margin-left: 10rem;"> :</span>
                <span class="biodata-value">' . $nama . '</span>
            </div>
            <div class="biodata-item">
                <span class="biodata-label">Tempat tanggal lahir </span>
                <span style="margin-left: 3.6rem;"> :</span>
                <span class="biodata-value">' . $tempat_tanggal_lahir . '</span>
            </div>
            <div class="biodata-item">
                <span class="biodata-label">Pendidikan Terakhir </span>
                <span style="margin-left: 3.6rem;"> :</span>
                <span class="biodata-value">' . $pendidikan_terakhir . '</span>
            </div>
            <div class="biodata-item">
                <span class="biodata-label">No. Reg </span>
                <span style="margin-left: 9.9rem;"> :</span>
                <span class="biodata-value">' . $noreg . '</span>
            </div>
            <div class="biodata-item">
                <span class="biodata-label">Bidang tugas / spesialisasi </span>
                <span style="margin-left: 1.4rem;"> :</span>
                <span class="biodata-value">' . $bidang_tugas . '</span>
            </div>
            <div class="biodata-item">
                <span class="biodata-label">Alamat </span>
                <span style="margin-left: 9.2rem;"> :</span>
                <span class="biodata-value">' . $alamat . '</span>
            </div>
        </div>
        </p>
        <div class="isi_surat">
            <p>Sesuai surat keputusan Kepala Kantor Kementerian Agama Kabupaten Minahasa Nomor
                ' . $no_keputusan . ' dengan ini menugaskan yang bersangkutan untuk melaksanakan bimbingan dan
                penyuluhan Agama ' . $jenis_kegiatan . ' kepada kelompok sasaran / binaan di ' . $kelompok_sasaran . ' dengan uraian tugas <br>Sbb :</p>
            <P>1. ' . $uraian_tugas . '</P>
            <P>2. Dst.</P>
            <p>Demikian Surat Tugas ini kami buat untuk dilaksanakan sebagaimana mestinya.</p>
        </div>
        <div class="ttd">
            <p class="tanggal"> ' . $tempat . ' , ' . $tgl_bl_thn . '</p>
            <img class="ttd_foto" src="' . $upload_ttd . '" alt="">
            <p class="text-with-underline ttd_nama" style="margin-bottom: -7px;">' . $nama . '</p>
            <p class="ttd_nama">' . $nip_tugas . '</p>
        </div>
        <div class="isi_surat">
            <p>Tembusan :
                <br>Yth Kepala Kemenag Kabupaten Minahasa
            </p>
        </div>

        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

        <!-- akhir surat tugas -->

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
                        <p class="font-weight-bold"><b>KEMENTERIAN AGAMA REPUBLIK INDONESIA <br> KANTOR KEMENTERIAN AGAMA KABUPATEN MINAHASA</b></p>
                        <p>' . $wilayah_penugasan . ' <br> ' . $alamat_wilayah_penugasan . '</p>
                    </div>
                </td>
            </tr>
        </table>
        <hr style="border: none; border-top: 20px solid black; margin: 2px auto" />
        <hr style="border: none; border-top: 20px solid black; margin: 2px auto" />
        <p style="text-align: center;" class="mt-3 font-weight-bold"><b>SURAT PERNYATAAN <br> PEMILIHAN SPESIALISASI</b></p>

        <p style="text-align: justify;">
        <div class="biodata">
            <div class="biodata-item">
                <span class="biodata-label">Nama </span>
                <span style="margin-left: 10rem;"> :</span>
                <span class="biodata-value">' . $nama . '</span>
            </div>
            <div class="biodata-item">
                <span class="biodata-label">Tempat tanggal lahir </span>
                <span style="margin-left: 3.6rem;"> :</span>
                <span class="biodata-value">' . $tempat_tanggal_lahir . '</span>
            </div>
            <div class="biodata-item">
                <span class="biodata-label">Pendidikan Terakhir </span>
                <span style="margin-left: 3.6rem;"> :</span>
                <span class="biodata-value">' . $pendidikan_terakhir . '</span>
            </div>
            <div class="biodata-item">
                <span class="biodata-label">No. Reg </span>
                <span style="margin-left: 9.9rem;"> :</span>
                <span class="biodata-value">' . $noreg . '</span>
            </div>
            <div class="biodata-item">
                <span class="biodata-label">Bidang tugas / spesialisasi </span>
                <span style="margin-left: 1.4rem;"> :</span>
                <span class="biodata-value">' . $bidang_tugas . '</span>
            </div>
            <div class="biodata-item">
                <span class="biodata-label">Alamat </span>
                <span style="margin-left: 9.2rem;"> :</span>
                <span class="biodata-value">' . $alamat . '</span>
            </div>
        </div>
        </p>
        <div class="isi_surat">
            <p>Dengan ini menyatakan, memilih spesialisasi :</p>
            <P>1. ' . $uraian_tugas . '</P>
            <P>2. Dst.</P>
            <p>Demikian surat ini saya buat dengan sebenar-benarnya tanpa ada paksaan dari pihak manapun.</p>
        </div>
        <div class="ttd"> Penyuluh Agama (Isian) Non PNS <br> Yang membuat pernyataan</p>
            <img class="ttd_foto" src="' . $upload_ttd . '" alt="">
            <p class="text-with-underline ttd_nama" style="margin-bottom: -7px;">' . $nama . '</p>

        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>


        <!-- AKHIR SURAT PERNYATAAN PEMILIHAN SPESIALISASI -->

        <!-- SURAT PERNYATAAN KUNJUNGAN KEPADA TOKOH MASYARAKAT & PEJABAT PEMERINTAH -->
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
                        <p>' . $wilayah_penugasan . ' <br> ' . $alamat_wilayah_penugasan . '</p>
                    </div>
                </td>
            </tr>
        </table>
        <hr style="border: none; border-top: 20px solid black; margin: 2px auto" />
        <hr style="border: none; border-top: 20px solid black; margin: 2px auto" />
        <p style="text-align: center;" class="mt-3 font-weight-bold"><b> SURAT PERNYATAAN <br>KUNJUNGAN KEPADA TOKOH MASYARAKAT & PEJABAT PEMERINTAH</b></p>

        <p class="biodata">Yang bertanda tangan dibawah ini :</p>
        <p style="text-align: justify;">
        <div class="biodata">
            <div class="biodata-item">
                <span class="biodata-label">Nama </span>
                <span style="margin-left: 10rem;"> :</span>
                <span class="biodata-value">' . $nama . '</span>
            </div>
            <div class="biodata-item">
                <span class="biodata-label">Jabatan</span>
                <span style="margin-left: 9.2rem;"> :</span>
                <span class="biodata-value">Penyuluh Agama .... Non PNS</span>
            </div>

            <div class="biodata-item">
                <span class="biodata-label">Bidang tugas / spesialisasi </span>
                <span style="margin-left: 1.4rem;"> :</span>
                <span class="biodata-value">' . $bidang_tugas . '</span>
            </div>
            <div class="biodata-item">
                <span class="biodata-label">Alamat </span>
                <span style="margin-left: 9.2rem;"> :</span>
                <span class="biodata-value">' . $alamat . '</span>
            </div>
        </div>
        <div class="isi_surat">
            <p>Menyatakan telah melaksanakan kunjungan dalam rangka koordinasi Penyuluh
                Agama ..... kepada Tokoh Masyarakat dan Pejabat Pemerintah, sebagai berikut :</p>
            <ol>
                <li>
                    <ul>
                        <span>Nama : </span>
                        <li class="list">Jabatan : </li>
                        <li class="list">Hari/Tanggal : </li>
                        <li class="list"> Materi Kunjungan : </li>
                    </ul>

                </li>
                <li>
                    <ul>
                        <span>Nama : </span>
                        <li class="list">Jabatan : </li>
                        <li class="list">Hari/Tanggal : </li>
                        <li class="list"> Materi Kunjungan : </li>
                    </ul>
                </li>
            </ol>
            <p>Demikian Surat Tugas ini kami buat untuk dilaksanakan sebagaimana mestinya.</p>
        </div>
        <div class="ttd">
            <p class="tanggal"> ' . $tempat . ' , ' . $tgl_bl_thn . '</p>
        </div>
        <div class="row text-center">
            <div class="col-md-3">
                <div class="ttd_kiri">
                    <p class="tanggal">Mengetahui <br> isian</p>
                    <img class="ttd_foto" src="' . $upload_ttd . '" alt="">
                    <p class="text-with-underline ttd_nama" style="margin-bottom: -7px;">' . $nama . '</p>
                    <p class="ttd_nama">' . $nip_tugas . '</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="ttd_kanan"> Penyuluh Agama (Isian) Non PNS <br> Yang membuat pernyataan</p>
                    <img class="ttd_foto" src="' . $upload_ttd . '" alt="">
                    <p class=" ttd_nama" style="margin-bottom: -7px;">' . $nama . '</p>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

        <!-- Akhir SURAT PERNYATAAN KUNJUNGAN KEPADA TOKOH MASYARAKAT & PEJABAT PEMERINTAH -->

        <!-- SURAT PERNYATAAN PEMBENTUKKAN KELOMPOK BINAAN -->
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
                        <p class="font-weight-bold"><b>KEMENTERIAN AGAMA REPUBLIK INDONESIA <br> KANTOR KEMENTERIAN AGAMA KABUPATEN MINAHASA</b></p>
                        <p>' . $wilayah_penugasan . ' <br> ' . $alamat_wilayah_penugasan . '</p>
                    </div>
                </td>
            </tr>
        </table>
        <hr style="border: none; border-top: 20px solid black; margin: 2px auto" />
        <hr style="border: none; border-top: 20px solid black; margin: 2px auto" />
        <p style="text-align: center;" class="mt-3 font-weight-bold"><b>SURAT PERNYATAAN <br>
                PEMBENTUKKAN KELOMPOK BINAAN</b></p>

        <p class="biodata">Yang bertanda tangan dibawah ini :</p>
        <p style="text-align: justify;">
        <div class="biodata">
            <div class="biodata-item">
                <span class="biodata-label">Nama </span>
                <span style="margin-left: 10rem;"> :</span>
                <span class="biodata-value">' . $nama . '</span>
            </div>
            <div class="biodata-item">
                <span class="biodata-label">Jabatan</span>
                <span style="margin-left: 9.2rem;"> :</span>
                <span class="biodata-value">Penyuluh Agama .... Non PNS</span>
            </div>

            <div class="biodata-item">
                <span class="biodata-label">Bidang tugas / spesialisasi </span>
                <span style="margin-left: 1.4rem;"> :</span>
                <span class="biodata-value">' . $bidang_tugas . '</span>
            </div>
            <div class="biodata-item">
                <span class="biodata-label">Alamat </span>
                <span style="margin-left: 9.2rem;"> :</span>
                <span class="biodata-value">' . $alamat . '</span>
            </div>
        </div>
        </p>
        <div class="isi_surat">
            <p>Dengan ini menyatakan telah membentuk kelompok binaan sebagai berikut :</p>
            <ol>
                <li>
                    <ul>
                        <span>Nama Kelompok : </span>
                        <li class="list">Alamat : </li>
                        <li class="list">Jumlah Anggota : </li>

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
            <p class="tanggal"> ' . $tempat . ' , ' . $tgl_bl_thn . '</p>
        </div>
        <div class="row text-center">
            <div class="col-md-6">
                <div class="ttd_kiri">
                    <p class="tanggal">Mengetahui <br> isian</p>
                    <img class="ttd_foto" src="' . $upload_ttd . '" alt="">
                    <p class="text-with-underline ttd_nama" style="margin-bottom: -7px;">' . $nama . '</p>
                    <p class="ttd_nama">' . $nip_tugas . '</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="ttd_kanan"> Penyuluh Agama (Isian) Non PNS <br> Yang membuat pernyataan</p>
                    <img class="ttd_foto" src="' . $upload_ttd . '" alt="">
                    <p class=" ttd_nama" style="margin-bottom: -7px;">' . $nama . '</p>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <!-- akhir SURAT PERNYATAAN PEMBENTUKKAN KELOMPOK BINAAN -->

        <!-- RENCANA KERJA BULANAN -->
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
                        <p class="font-weight-bold"><b>KEMENTERIAN AGAMA REPUBLIK INDONESIA <br> KANTOR KEMENTERIAN AGAMA KABUPATEN MINAHASA</b></p>
                        <p>' . $wilayah_penugasan . ' <br> ' . $alamat_wilayah_penugasan . '</p>
                    </div>
                </td>
            </tr>
        </table>
        <hr style="border: none; border-top: 20px solid black; margin: 2px auto" />
        <hr style="border: none; border-top: 20px solid black; margin: 2px auto" />
        <p style="text-align: center;" class="mt-3 font-weight-bold"><b>RENCANA KERJA BULANAN</b></p>

        <p style="text-align: justify;">
        <div class="biodata">
            <div class="biodata-item">
                <span class="biodata-label">Nama PAI Non PNS </span>
                <span style="margin-left: 10rem;"> :</span>
                <span class="biodata-value">' . $nama . '</span>
            </div>
            <div class="biodata-item">
                <span class="biodata-label">Jabatan </span>
                <span style="margin-left: 3.6rem;"> :</span>
                <span class="biodata-value">' . $tempat_tanggal_lahir . '</span>
            </div>
            <div class="biodata-item">
                <span class="biodata-label">Bidang tugas / spesialisasi </span>
                <span style="margin-left: 1.4rem;"> :</span>
                <span class="biodata-value">' . $bidang_tugas . '</span>
            </div>
            <div class="biodata-item">
                <span class="biodata-label">Kecamatan </span>
                <span style="margin-left: 3.6rem;"> :</span>
                <span class="biodata-value">' . $pendidikan_terakhir . '</span>
            </div>
            <div class="biodata-item">
                <span class="biodata-label">Kabupaten / Kota </span>
                <span style="margin-left: 9.9rem;"> :</span>
                <span class="biodata-value">' . $noreg . '</span>
            </div>
            <div class="biodata-item">
                <span class="biodata-label">Provinsi </span>
                <span style="margin-left: 9.2rem;"> :</span>
                <span class="biodata-value">' . $alamat . '</span>
            </div>
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
                <td></td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
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
            <p class="tanggal"> ' . $tempat . ' , ' . $tgl_bl_thn . '</p>
        </div>
        <div class="row text-center">
            <div class="col-md-6">
                <div class="ttd_kiri">
                    <p class="tanggal">Mengetahui <br> isian</p>
                    <img class="ttd_foto" src="' . $upload_ttd . '" alt="">
                    <p class="text-with-underline ttd_nama" style="margin-bottom: -7px;">' . $nama . '</p>
                    <p class="ttd_nama">' . $nip_tugas . '</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="ttd_kanan"> Penyuluh Agama (Isian) Non PNS <br> Yang membuat pernyataan</p>
                    <img class="ttd_foto" src="' . $upload_ttd . '" alt="">
                    <p class=" ttd_nama" style="margin-bottom: -7px;">' . $nama . '</p>
                </div>
            </div>
        </div>
        <!-- akhir RENCANA KERJA BULANAN -->

        <!-- DAFTAR HADIR PENYULUHAN -->
        <p style="text-align: center;" class="font-weight-bold"><b>DAFTAR HADIR PENYULUHAN</b></p>

        <p style="text-align: justify;">
        <div class="biodata">
            <div class="biodata-item">
                <span class="biodata-label">Nama Kelompok </span>
                <span> :</span>
                <span class="biodata-value">' . $nama . '</span>
            </div>
            <div class="biodata-item">
                <span class="biodata-label">Alamat </span>
                <span> :</span>
                <span class="biodata-value">' . $tempat_tanggal_lahir . '</span>
            </div>
            <div class="biodata-item">
                <span class="biodata-label">Bentuk Kegiatan </span>
                <span> :</span>
                <span class="biodata-value">' . $bidang_tugas . '</span>
            </div>
            <div class="biodata-item">
                <span class="biodata-label">Judul / Topik </span>
                <span> :</span>
                <span class="biodata-value">' . $pendidikan_terakhir . '</span>
            </div>
            <div class="biodata-item">
                <span class="biodata-label">Hari / Tanggal </span>
                <span> :</span>
                <span class="biodata-value">' . $noreg . '</span>
            </div>
            <div class="biodata-item">
                <span class="biodata-label">Provinsi </span>
                <span> :</span>
                <span class="biodata-value">' . $alamat . '</span>
            </div>
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
                <td></td>
                <td> </td>
                <td> </td>

            </tr>
            <tr>
                <td>2.</td>
                <td></td>
                <td> </td>
                <td> </td>

            </tr>
        </table>
        <div class="ttd mt-4">
            <p class="tanggal"> ' . $tempat . ' , ' . $tgl_bl_thn . '</p>
        </div>
        <div class="row text-center">
            <div class="col-md-6">
                <div class="ttd_kiri">
                    <p class="tanggal">Mengetahui <br> Penyuluh Agama ..... Non PNS</p>
                    <img class="ttd_foto" src="' . $upload_ttd . '" alt="">
                    <p class="text-with-underline ttd_nama" style="margin-bottom: -7px;">' . $nama . '</p>

                </div>
            </div>
            <div class="col-md-6">
                <div class="ttd_kanan"> Ketua Kelompok <br> Penyelenggara</p>
                    <img class="ttd_foto" src="' . $upload_ttd . '" alt="">
                    <p class=" ttd_nama" style="margin-bottom: -7px;">' . $nama . '</p>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <!-- akhir DAFTAR HADIR PENYULUHAN -->

        <!-- LAPORAN MINGGUAN PENYULUH AGAMA -->
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
                        <p class="font-weight-bold"><b>KEMENTERIAN AGAMA REPUBLIK INDONESIA <br> KANTOR KEMENTERIAN AGAMA KABUPATEN MINAHASA</b></p>
                        <p>' . $wilayah_penugasan . ' <br> ' . $alamat_wilayah_penugasan . '</p>
                    </div>
                </td>
            </tr>
        </table>
        <hr style="border: none; border-top: 20px solid black; margin: 2px auto" />
        <hr style="border: none; border-top: 20px solid black; margin: 2px auto" />
        <p style="text-align: center;" class="mt-3 font-weight-bold"><b>LAPORAN MINGGUAN PENYULUH AGAMA</b></p>

        <p style="text-align: justify;">
        <div class="biodata">
            <div class="biodata-item">
                <span class="biodata-label">Nama PAI Non PNS </span>
                <span style="margin-left: 10rem;"> :</span>
                <span class="biodata-value">' . $nama . '</span>
            </div>
            <div class="biodata-item">
                <span class="biodata-label">Jabatan </span>
                <span style="margin-left: 3.6rem;"> :</span>
                <span class="biodata-value">' . $tempat_tanggal_lahir . '</span>
            </div>
            <div class="biodata-item">
                <span class="biodata-label">Bidang tugas / spesialisasi </span>
                <span style="margin-left: 1.4rem;"> :</span>
                <span class="biodata-value">' . $bidang_tugas . '</span>
            </div>
            <div class="biodata-item">
                <span class="biodata-label">Kecamatan </span>
                <span style="margin-left: 3.6rem;"> :</span>
                <span class="biodata-value">' . $pendidikan_terakhir . '</span>
            </div>
            <div class="biodata-item">
                <span class="biodata-label">Kabupaten / Kota </span>
                <span style="margin-left: 9.9rem;"> :</span>
                <span class="biodata-value">' . $noreg . '</span>
            </div>
            <div class="biodata-item">
                <span class="biodata-label">Provinsi </span>
                <span style="margin-left: 9.2rem;"> :</span>
                <span class="biodata-value">' . $alamat . '</span>
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
                <td></td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
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
            <p class="tanggal"> ' . $tempat . ' , ' . $tgl_bl_thn . '</p>
        </div>
        <div class="row text-center">
            <div class="col-md-6">
                <div class="ttd_kiri">
                    <p class="tanggal">Mengetahui <br> isian</p>
                    <img class="ttd_foto" src="' . $upload_ttd . '" alt="">
                    <p class="text-with-underline ttd_nama" style="margin-bottom: -7px;">' . $nama . '</p>
                    <p class="ttd_nama">' . $nip_tugas . '</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="ttd_kanan"> Penyuluh Agama (Isian) Non PNS <br> Yang membuat pernyataan</p>
                    <img class="ttd_foto" src="' . $upload_ttd . '" alt="">
                    <p class=" ttd_nama" style="margin-bottom: -7px;">' . $nama . '</p>
                </div>
            </div>
        </div>
        <!-- Akhir LAPORAN MINGGUAN PENYULUH AGAMA -->


        <!--  SURAT PERNYATAAN MELAKUKAN KEGIATAN PENYULUHAN AGAMA ISLAM-->
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
                        <p class="font-weight-bold"><b>KEMENTERIAN AGAMA REPUBLIK INDONESIA <br> KANTOR KEMENTERIAN AGAMA KABUPATEN MINAHASA</b></p>
                        <p>' . $wilayah_penugasan . ' <br> ' . $alamat_wilayah_penugasan . '</p>
                    </div>
                </td>
            </tr>
        </table>
        <hr style="border: none; border-top: 20px solid black; margin: 2px auto" />
        <hr style="border: none; border-top: 20px solid black; margin: 2px auto" />
        <p style="text-align: center;" class="mt-3 font-weight-bold"><b>SURAT PERNYATAAN <br> MELAKUKAN KEGIATAN PENYULUHAN AGAMA ISLAM</b></p>

        <p class="biodata">Yang bertanda tangan dibawah ini :</p>
        <p style="text-align: justify;">
        <div class="biodata">
            <div class="biodata-item">
                <span class="biodata-label">Nama </span>
                <span style="margin-left: 10rem;"> :</span>
                <span class="biodata-value">' . $nama . '</span>
            </div>
            <div class="biodata-item">
                <span class="biodata-label">NIP</span>
                <span style="margin-left: 9.2rem;"> :</span>
                <span class="biodata-value">Penyuluh Agama .... Non PNS</span>
            </div>

            <div class="biodata-item">
                <span class="biodata-label">Pangkat/Golongan</span>
                <span style="margin-left: 1.4rem;"> :</span>
                <span class="biodata-value">' . $bidang_tugas . '</span>
            </div>
            <div class="biodata-item">
                <span class="biodata-label">Jabatan </span>
                <span style="margin-left: 9.2rem;"> :</span>
                <span class="biodata-value">' . $alamat . '</span>
            </div>
        </div>
        </p>

        <p class="biodata mt-5">Menerangkan </p>
        <p style="text-align: justify;">
        <div class="biodata">
            <div class="biodata-item">
                <span class="biodata-label">Nama </span>
                <span style="margin-left: 10rem;"> :</span>
                <span class="biodata-value">' . $nama . '</span>
            </div>
            <div class="biodata-item">
                <span class="biodata-label">Jabatan </span>
                <span style="margin-left: 9.2rem;"> :</span>
                <span class="biodata-value">' . $alamat . '</span>
            </div>
            <div class="biodata-item">
                <span class="biodata-label">Bidang Tugas Spesialisasi</span>
                <span style="margin-left: 9.2rem;"> :</span>
                <span class="biodata-value">Penyuluh Agama .... Non PNS</span>
            </div>

            <div class="biodata-item">
                <span class="biodata-label">Wilayah Penugasan </span>
                <span style="margin-left: 1.4rem;"> :</span>
                <span class="biodata-value">' . $bidang_tugas . '</span>
            </div>
        </div>
        </p>

        <div class="isi_surat">
            <p>Telah melakukan kegiatan bimbingan dan penyuluhan agama ..... sesuai bidang dan
                tugasnya sebanyak ..... pada bulan ..... tahun ......</p>

            <p>Demikian surat pernyataan ini dibuat untuk dipergunakan sebagaimana mestinya</p>
        </div>
        <div class="ttd">
            <p class="tanggal"> ' . $tempat . ' , ' . $tgl_bl_thn . '</p>
            <img class="ttd_foto" src="' . $upload_ttd . '" alt="">
            <p class="text-with-underline ttd_nama" style="margin-bottom: -7px;">' . $nama . '</p>
            <p class="ttd_nama">' . $nip_tugas . '</p>
        </div>
        <!--  Akhir SURAT PERNYATAAN MELAKUKAN KEGIATAN PENYULUHAN AGAMA ISLAM-->

        <!-- DOKUMENTASI KEGIATAN -->
        <p style="text-align: center;" class="mt-3 font-weight-bold"><b>DOKUMENTASI KEGIATAN</b></p>
        <!-- Akhir DOKUMENTASI KEGIATAN -->
    </div>
</body>

</html>

';

// Write HTML content to PDF
$mpdf->WriteHTML($html);

// Output PDF
$mpdf->Output('Surat_Tugas.pdf', 'D');
