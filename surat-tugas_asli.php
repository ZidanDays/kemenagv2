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


//  surat tugas
$html = '
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Surat Tugas</title>
</head>
<body>

<table style="width: 100%;">
    <tr>
        <td style="text-align: left; width: 10%;">
            <!-- Div untuk logo -->
            <div>
                <img src="upload/KEMENAG.jpg" alt="Logo Kementerian Agama" style="width: 80px; height: auto;">
            </div>
        </td>
        <td style="text-align: center">
            <!-- Div untuk teks -->
            <div>
                <p><b>KEMENTERIAN AGAMA REPUBLIK INDONESIA</b></p>
                <p><b>KANTOR KEMENTERIAN AGAMA KABUPATEN MINAHASA</b></p>
                <p>' . $wilayah_penugasan . '</p>
                <p>' . $alamat_wilayah_penugasan . '</p>
            </div>
        </td>
    
    </tr>
</table>

<hr style="border: none; border-top: 20px solid black; margin: 2px auto;">
<hr style="border: none; border-top: 20px solid black; margin: 2px auto;">

<p style="text-align: center;"><b>SURAT TUGAS</b></p>
<p style="text-align: center;"><b>Nomor: ' . $nomor_surat . '</b></p>

<p>Kepala Kantor Urusan Agama Kecamatan Remboken menugaskan</p>
<p>Penyuluh Agama Islam Non PNS</p>
<p><b>Nama: ' . $nama . '</b></p>
<p><b>Tempat tanggal lahir: ' . $tempat_tanggal_lahir . '</b></p>
<p><b>Pendidikan Terakhir: ' . $pendidikan_terakhir . '</b></p>
<p><b>Noreg: ' . $noreg . '</b></p>
<p><b>Bidang tugas / spesialisasi: ' . $bidang_tugas . '</b></p>
<p><b>Alamat: ' . $alamat . '</b></p>

<p>Sesuai surat keputusan Kepala Kantor Kementerian Agama Kabupaten Minahasa Nomor ' . $no_keputusan . ' dengan ini menugaskan yang bersangkutan untuk melaksanakan bimbingan dan penyuluhan Agama ' . $jenis_kegiatan . ' kepada kelompok sasaran / binaan di ' . $kelompok_sasaran . ' dengan uraian tugas sebagai berikut:</p>
<p>1. ' . $uraian_tugas . '</p>
<p>2. Dst.</p>

<p>Demikian Surat Tugas ini kami buat untuk dilaksanakan sebagaimana mestinya.</p>
<p style="text-align: right;">' . $tempat . ', ' . $tgl_bl_thn . '</p>

<div style="text-align: right;">
    <img src="' . $upload_ttd . '" alt="" style="width: 80px;">
</div>

<div style="text-align: right;">
    <p style="margin-bottom: 1px; text-decoration: underline;">' . $nama . '</p>
    <p style="margin-top: 0;">' . $nip_tugas . '</p>
</div>



<p>Tembusan :</p>
<p>Yth Kepala Kemenag Kabupaten Minahasa</p>

<br>
<br>
<br>

<!-- Akhir surat tugas -->



<!-- SURAT PERNYATAAN PEMILIHAN SPESIALISASI -->
<!-- kop -->
<table style="width: 100%;">
    <tr>
        <td style="text-align: left; width: 10%;">
            <!-- Div untuk logo -->
            <div>
                <img src="upload/KEMENAG.jpg" alt="Logo Kementerian Agama" style="width: 80px; height: auto;">
            </div>
        </td>
        <td style="text-align: center">
            <!-- Div untuk teks -->
            <div>
                <p><b>KEMENTERIAN AGAMA REPUBLIK INDONESIA</b></p>
                <p><b>KANTOR KEMENTERIAN AGAMA KABUPATEN MINAHASA</b></p>
                <p>' . $wilayah_penugasan . '</p>
                <p>' . $alamat_wilayah_penugasan . '</p>
            </div>
        </td>
    
    </tr>
</table>
<hr style="border: none; border-top: 20px solid black; margin: 2px auto;">
<hr style="border: none; border-top: 20px solid black; margin: 2px auto;">
<!-- akhir kop-->



<p style="text-align: center;"><b>SURAT PERNYATAAN PEMILIHAN SPESIALISASI</b></p>

<div>
    <p>Nama : (Isian nama)</p>
    <p>Tempat Tanggal Lahir : (Isian tempat tanggal lahir)</p>
    <p>Pendidikan Terakhir : (Isian pendidikan terakhir)</p>
    <p>No. Reg : (Isian noreg)</p>
    <p>Bidang Tugas/Spesialisasi : (Isian bidang tugas)</p>
    <p>Alamat : (Isian alamat)</p>
</div>

<div>
    <p>Dengan ini menyatakan, memilih spesialisasi :</p>
    <ol>
        <li>(Isian spesialisasi 1)</li>
        <li>(Isian spesialisasi 2)</li>
        <!-- Tambahkan baris berikut sesuai kebutuhan -->
    </ol>
</div>

<p>Demikian surat ini saya buat dengan sebenar-benarnya tanpa ada paksaan dari pihak manapun.</p>

<p style="text-align: right; margin-top: 20px; margin-bottom: -20px;">Penyuluh Agama (Isian) Non PNS Yang membuat pernyataan</p>
<p style="text-align: right" >Yang membuat pernyataan</p>
<p style="text-align: right;">' . $nama . '</p>

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

<!-- end of SURAT PERNYATAAN PEMILIHAN SPESIALISASI -->



<!-- SURAT PERNYATAAN KUNJUNGAN KEPADA TOKOH MASYARAKAT & PEJABAT PEMERINTAH -->

<!-- kop -->
<table style="width: 100%;">
    <tr>
        <td style="text-align: left; width: 10%;">
            <!-- Div untuk logo -->
            <div>
                <img src="upload/KEMENAG.jpg" alt="Logo Kementerian Agama" style="width: 80px; height: auto;">
            </div>
        </td>
        <td style="text-align: center">
            <!-- Div untuk teks -->
            <div>
                <p><b>KEMENTERIAN AGAMA REPUBLIK INDONESIA</b></p>
                <p><b>KANTOR KEMENTERIAN AGAMA KABUPATEN MINAHASA</b></p>
                <p>' . $wilayah_penugasan . '</p>
                <p>' . $alamat_wilayah_penugasan . '</p>
            </div>
        </td>
    
    </tr>
</table>
<hr style="border: none; border-top: 20px solid black; margin: 2px auto;">
<hr style="border: none; border-top: 20px solid black; margin: 2px auto;">
<!-- akhir kop-->

<!-- isi surat-->
<p style="text-align: center;"><b>SURAT PERNYATAAN</b></p>
<p style="text-align: center;"><b>KUNJUNGAN KEPADA TOKOH MASYARAKAT & PEJABAT PEMERINTAH</b></p>

<p class="mt-3">Yang bertanda tangan dibawah ini :</p>
<div class="format-text">
    <p>Nama : (Isian nama)</p>
    <p>Tempat Tanggal Lahir : (Isian tempat tanggal lahir)</p>
    <p>Pendidikan Terakhir : (Isian pendidikan terakhir)</p>
    <p>No. Reg : (Isian noreg)</p>
    <p>Bidang Tugas/Spesialisasi : (Isian bidang tugas)</p>
    <p>Alamat : (Isian alamat)</p>
</div>



<!-- END OF SURAT PERNYATAAN KUNJUNGAN KEPADA TOKOH MASYARAKAT & PEJABAT PEMERINTAH -->



</body>
</html>
';

// Write HTML content to PDF
$mpdf->WriteHTML($html);

// Output PDF
$mpdf->Output('Surat_Tugas.pdf', 'D');
