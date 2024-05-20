<!DOCTYPE html>
<html lang="en">

<head>
    <title>Kementrian Agama Republik Indonesia</title>
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
    	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    	<![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />
    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/kemenag.png" type="image/x-icon">


    <!-- vendor css -->
    <link rel="stylesheet" href="assets/css/pdf1.css">
    <link rel="stylesheet" href="assets/css/style1.css">


</head>

<body class="">
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>

    <!-- [ Pre-loader ] End -->
    <!-- [ navigation menu ] start -->
    <?php include 'navbar.php'; ?>
    <!-- [ navigation menu ] end -->

    <!-- [ Header ] start -->
    <?php include 'header.php'; ?>
    <!-- [ Header ] end -->



    <!-- [ Main Content ] start -->
    <section class="pcoded-main-container">
        <div class="pcoded-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h5 class="m-b-10">Form Elements</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#!">Form Components</a></li>
                                <li class="breadcrumb-item"><a href="#!">Form Elements</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->


            <!-- awalan from surat Tugas-->
            <!-- <form id="form-surat-tugas" method="POST" action="process_form.php" enctype="multipart/form-data"> -->
            <div class="row">
                <div class="col-sm-12">
                    <div id="form1">
                        <form id="form-surat-tugas" method="POST" action="process_form.php" enctype="multipart/form-data">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Form Surat Tugas</h5>
                                </div>
                                <div class="card-body">

                                    <!-- surat tugas -->
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="wilayah_penugasan">Wilayah penugasan:</label>
                                                <input type="text" class="form-control" id="wilayah_penugasan" name="wilayah_penugasan" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="alamat_wilayah_penugasan">Alamat wilayah penugasan:</label>
                                                <textarea class="form-control" id="alamat_wilayah_penugasan" name="alamat_wilayah_penugasan" rows="3" required></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="nomor_surat">Nomor surat:</label>
                                                <input type="text" class="form-control" id="nomor_surat" name="nomor_surat" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="nama">Nama:</label>
                                                <input type="text" class="form-control" id="nama" name="nama" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="tempat_tanggal_lahir">Tempat tanggal lahir:</label>
                                                <input type="text" id="tempat_tanggal_lahir" name="tempat_tanggal_lahir" class="form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="pendidikan_terakhir">Pendidikan Terakhir:</label>
                                                <input type="text" class="form-control" id="pendidikan_terakhir" name="pendidikan_terakhir" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="noreg">Noreg:</label>
                                                <input type="text" class="form-control" id="noreg" name="noreg" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="bidang_tugas">Bidang tugas / spesialisasi:</label>
                                                <input type="text" class="form-control" id="bidang_tugas" name="bidang_tugas" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="alamat">Alamat:</label>
                                                <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="no_keputusan">No Keputusan:</label>
                                                <input type="text" class="form-control" id="no_keputusan" name="no_keputusan" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="bimbingan_penyuluhan">Bimbingan dan penyuluhan Agama:</label>
                                                <input type="text" class="form-control" id="bimbingan_penyuluhan" name="bimbingan_penyuluhan" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="sasaran_tugas">sasaran tugas :</label>
                                                <input class="form-control" id="sasaran_tugas" name="sasaran_tugas" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="uraian_tugas">Uraian tugas:</label>
                                                <textarea class="form-control" id="uraian_tugas" name="uraian_tugas" rows="5" required></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="tempat">Tempat:</label>
                                                <input type="text" class="form-control" id="tempat" name="tempat" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="tgl_bl_thn">Tanggal (tgl/bln/thn):</label>
                                                <input type="text" class="form-control" id="tgl_bl_thn" name="tgl_bl_thn" required>

                                            </div>
                                            <div class="form-group">
                                                <label for="upload_ttd">Unggah tanda tangan:</label>
                                                <input type="file" class="form-control-file" id="upload_ttd" name="upload_ttd" accept="image/*" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="nama_ttd_bersangkuta">Nama yang menandatangani surat:</label>
                                                <input type="text" class="form-control" id="nama_ttd_bersangkuta" name="nama_ttd_bersangkuta" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="nip">NIP:</label>
                                                <input type="text" class="form-control" id="nip" name="nip" required>
                                            </div>
                                        </div>
                                    </div>
                                    <hr style="border: none; border-bottom: 1px solid black; margin: 20px 0;">
                                    <button type="button submit" class="btn btn-primary" onclick="nextForm()">Lanjut</button>

                                </div>
                        </form>
                    </div>
                </div>

                <!-- akhir surat tugas -->

                <!-- SURAT PERNYATAAN PEMILIHAN SPESIALISASI -->
                <div id="form2" style="display:none;">
                    <form id="form-pernyataan" method="POST" action="process_form.php" enctype="multipart/form-data">
                        <div class="card">
                            <div class="card-header">
                                <h5>SURAT PERNYATAAN PEMILIHAN SPESIALISASI</h5>
                            </div>
                            <div class="card-body">
                                <!-- <form> -->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="nama_pernyataan1">Nama :</label>
                                            <input type="text" class="form-control" id="nama_pernyataan1" name="nama_pernyataan1" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="tempat_tanggal_lahir_pernyataan1">Tempat tanggal lahir :</label>
                                            <input class="form-control" id="tempat_tanggal_lahir_pernyataan1" name="tempat_tanggal_lahir_pernyataan1" required></input>
                                        </div>
                                        <div class="form-group">
                                            <label for="pendidikan_terakhir_pernyataan1">Pendidikan Terakhir :</label>
                                            <input type="text" class="form-control" id="pendidikan_terakhir_pernyataan1" name="pendidikan_terakhir_pernyataan1" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="noreg_pernyataan1">No Reg :</label>
                                            <input type="text" class="form-control" id="noreg_pernyataan1" name="noreg_pernyataan1" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="bidang_tugas_pernyataan1">Bidang Tugas/Spesialisasi :</label>
                                            <input type="text" class="form-control" id="bidang_tugas_pernyataan1" name="bidang_tugas_pernyataan1" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat_pernyataan1">Alamat :</label>
                                            <input type="text" class="form-control" id="alamat_pernyataan1" name="alamat_pernyataan1" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="Memilih_Spesialisasi1">Memilih Spesialisasi :</label>
                                            <input type="text" class="form-control" id="Memilih_Spesialisasi" name="Memilih_Spesialisasi" rows="3" required></input>
                                        </div>
                                        <div class="form-group">
                                            <label for="Penyuluh_Agama">Penyuluh Agama </label>
                                            <select class="form-control" id="Penyuluh_Agama" name="Penyuluh_Agama" required>
                                                <option value="Islam">Islam</option>
                                                <option value="Kristen">Kristen</option>
                                                <option value="Katolik">Katolik</option>
                                                <option value="Katolik">Hindu</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="upload_ttd_Spesialisasi1">Upload tanda tangan:</label>
                                            <input type="file" class="form-control-file" id="upload_ttd_Spesialisasi1" name="upload_ttd_Spesialisasi1" required>
                                        </div>

                                    </div>
                                </div>
                                <hr style="border: none; border-bottom: 1px solid black; margin: 20px 0;">
                                <button type="button" class="btn btn-primary" onclick="goToForm()">Kembali</button>
                                <button type="button" class="btn btn-primary" onclick="nextForm()">Lanjut</button>
                                <button type="submit" class="btn btn-primary">Submit</button>


                            </div>
                        </div>
                    </form>
                </div>
                <!-- akhir SURAT PERNYATAAN PEMILIHAN SPESIALISASI-->

                <!-- SURAT PERNYATAAN KUNJUNGAN KEPADA TOKOH MASYARAKAT & PEJABAT PEMERINTAH -->
                <div id="form3" style="display:none;">
                    <form id="form_PERNYATAAN_KUNJUNGAN">
                        <div class="card">
                            <div class="card-header">
                                <h5>SURAT PERNYATAAN KUNJUNGAN KEPADA TOKOH MASYARAKAT & PEJABAT PEMERINTAH</h5>
                            </div>
                            <div class="card-body">
                                <!-- <form> -->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h5>Yang bertanda tangan di bawah ini :</h5>
                                        <div class="form-group">
                                            <label for="nama_pernyataan1">Nama :</label>
                                            <input type="text" class="form-control" id="nama_pernyataan1" name="nama_pernyataan1" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="tempat_tanggal_lahir_pernyataan1">Jabatan :</label>
                                            <input class="form-control" id="tempat_tanggal_lahir_pernyataan1" name="tempat_tanggal_lahir_pernyataan1" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="pendidikan_terakhir_pernyataan1">Bidang Tugas/Spesialisasi:</label>
                                            <input type="text" class="form-control" id="pendidikan_terakhir_pernyataan1" name="pendidikan_terakhir_pernyataan1" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="noreg_pernyataan1">Alamat :</label>
                                            <input type="text" class="form-control" id="noreg_pernyataan1" name="noreg_pernyataan1" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="noreg_pernyataan1">Koordinasi Penyuluh Agama:</label>
                                            <select class="form-control" id="Penyuluh_Agama" name="Penyuluh_Agama" required>
                                                <option value="Islam">Islam</option>
                                                <option value="Kristen">Kristen</option>
                                                <option value="Katolik">Katolik</option>
                                                <option value="Katolik">Hindu</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="alamat_pernyataan1">Nama Tokoh Masyarakat :</label>
                                            <input type="text" class="form-control" id="alamat_pernyataan1" name="alamat_pernyataan1" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat_pernyataan1">Jabatan Tokoh Masyarakat :</label>
                                            <input type="text" class="form-control" id="alamat_pernyataan1" name="alamat_pernyataan1" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="Memilih_Spesialisasi">Hari/Tanggal :</label>
                                            <input type="text" class="form-control" id="Memilih_Spesialisasi" name="Memilih_Spesialisasi" required></input>
                                        </div>
                                        <div class="form-group">
                                            <label for="Memilih_Spesialisasi">Materi Kunjungan :</label>
                                            <textarea type="text" class="form-control" id="Memilih_Spesialisasi" name="Memilih_Spesialisasi" rows="3" required></textarea>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="Memilih_Spesialisasi">Mengetahui :</label>
                                                    <input type="text" class="form-control" id="Memilih_Spesialisasi" name="Memilih_Spesialisasi" required></input>
                                                </div>
                                                <div class="form-group">
                                                    <label for="upload_ttd">Upload tanda tangan:</label>
                                                    <input type="file" class="form-control-file" id="upload_ttd" name="upload_ttd" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="Memilih_Spesialisasi">Nama :</label>
                                                    <input type="text" class="form-control" id="Memilih_Spesialisasi" name="Memilih_Spesialisasi" required></input>
                                                </div>
                                                <div class="form-group">
                                                    <label for="Memilih_Spesialisasi">Nip :</label>
                                                    <input type="text" class="form-control" id="Memilih_Spesialisasi" name="Memilih_Spesialisasi" required></input>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="Memilih_Spesialisasi">Tempat :</label>
                                                    <input type="text" class="form-control" id="Memilih_Spesialisasi" name="Memilih_Spesialisasi" required></input>
                                                </div>
                                                <div class="form-group">
                                                    <label for="tanggal">tanggal, Bulan, tahun:</label>
                                                    <input type="text" id="tanggal" name="tanggal" class="form-control" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="upload_ttd">Upload tanda tangan:</label>
                                                    <input type="file" class="form-control-file" id="upload_ttd" name="upload_ttd" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="Memilih_Spesialisasi">Nama :</label>
                                                    <input type="text" class="form-control" id="Memilih_Spesialisasi" name="Memilih_Spesialisasi" required></input>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr style="border: none; border-bottom: 1px solid black; margin: 20px 0;">
                                <button type="button" class="btn btn-primary" onclick="goToForm()">Kembali</button>
                                <button type="button" class="btn btn-primary" onclick="nextForm()">Lanjut</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- akhir SURAT PERNYATAAN KUNJUNGAN KEPADA TOKOH MASYARAKAT & PEJABAT PEMERINTAH -->


                <!-- SURAT PERNYATAAN PEMBENTUKKAN KELOMPOK BINAAN -->
                <div id="form4" style="display:none;">
                    <form id="form-pernyataan">
                        <div class="card">
                            <div class="card-header">
                                <h5>SURAT PERNYATAAN PEMBENTUKKAN KELOMPOK BINAAN</h5>
                            </div>
                            <div class="card-body">
                                <!-- <form> -->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h5>Yang bertanda tangan di bawah ini :</h5>
                                        <div class="form-group">
                                            <label for="nama_pernyataan1">Nama :</label>
                                            <input type="text" class="form-control" id="nama_pernyataan1" name="nama_pernyataan1" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="tempat_tanggal_lahir_pernyataan1">Jabatan :</label>
                                            <input class="form-control" id="tempat_tanggal_lahir_pernyataan1" name="tempat_tanggal_lahir_pernyataan1" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="pendidikan_terakhir_pernyataan1">Bidang Tugas/Spesialisasi:</label>
                                            <input type="text" class="form-control" id="pendidikan_terakhir_pernyataan1" name="pendidikan_terakhir_pernyataan1" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="noreg_pernyataan1">Alamat :</label>
                                            <input type="text" class="form-control" id="noreg_pernyataan1" name="noreg_pernyataan1" required>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <h5>membentuk kelompok binaan sebagai berikut : </h5>
                                        <div class="form-group">
                                            <label for="bidang_tugas_pernyataan1">Nama Kelompok :</label>
                                            <input type="text" class="form-control" id="bidang_tugas_pernyataan1" name="bidang_tugas_pernyataan1" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat_pernyataan1">Alamat :</label>
                                            <input type="text" class="form-control" id="alamat_pernyataan1" name="alamat_pernyataan1" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="Memilih_Spesialisasi">Jumlah Anggota :</label>
                                            <input type="text" class="form-control" id="Memilih_Spesialisasi" name="Memilih_Spesialisasi" rows="3" required></input>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="Memilih_Spesialisasi">Mengetahui :</label>
                                                    <input type="text" class="form-control" id="Memilih_Spesialisasi" name="Memilih_Spesialisasi" required></input>
                                                </div>
                                                <div class="form-group">
                                                    <label for="upload_ttd">Upload tanda tangan:</label>
                                                    <input type="file" class="form-control-file" id="upload_ttd" name="upload_ttd" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="Memilih_Spesialisasi">Nama :</label>
                                                    <input type="text" class="form-control" id="Memilih_Spesialisasi" name="Memilih_Spesialisasi" required></input>
                                                </div>
                                                <div class="form-group">
                                                    <label for="Memilih_Spesialisasi">Nip :</label>
                                                    <input type="text" class="form-control" id="Memilih_Spesialisasi" name="Memilih_Spesialisasi" required></input>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="Memilih_Spesialisasi">Tempat :</label>
                                                    <input type="text" class="form-control" id="Memilih_Spesialisasi" name="Memilih_Spesialisasi" required></input>
                                                </div>
                                                <div class="form-group">
                                                    <label for="tanggal">Tanggal, Bulan, Tahun:</label>
                                                    <input type="text" id="tanggal" name="tanggal" class="form-control" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="upload_ttd">Upload tanda tangan:</label>
                                                    <input type="file" class="form-control-file" id="upload_ttd" name="upload_ttd" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="Memilih_Spesialisasi">Nama :</label>
                                                    <input type="text" class="form-control" id="Memilih_Spesialisasi" name="Memilih_Spesialisasi" required></input>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <hr style="border: none; border-bottom: 1px solid black; margin: 20px 0;">
                                <button type="button" class="btn btn-primary" onclick="goToForm1()">Kembali</button>
                                <button type="button" class="btn btn-primary" onclick="nextForm()">Lanjut</button>

                            </div>
                        </div>
                    </form>
                </div>
                <!-- akhir SURAT PERNYATAAN PEMBENTUKKAN KELOMPOK BINAAN -->

                <!-- SURAT RENCANA KERJA BULANAN -->
                <div id="form5" style="display:none;">
                    <form id="form-pernyataan">
                        <div class="card">
                            <div class="card-header">
                                <h5>RENCANA KERJA BULANAN</h5>
                            </div>
                            <div class="card-body">
                                <!-- <form> -->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="nama_pernyataan1">Nama PAI Non PNS :</label>
                                            <input type="text" class="form-control" id="nama_pernyataan1" name="nama_pernyataan1" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="tempat_tanggal_lahir_pernyataan1">Jabatan :</label>
                                            <input class="form-control" id="tempat_tanggal_lahir_pernyataan1" name="tempat_tanggal_lahir_pernyataan1" required></input>
                                        </div>
                                        <div class="form-group">
                                            <label for="pendidikan_terakhir_pernyataan1"> Bidang Tugas / Spesialisasi:</label>
                                            <input type="text" class="form-control" id="pendidikan_terakhir_pernyataan1" name="pendidikan_terakhir_pernyataan1" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="noreg_pernyataan1">Kecamatan :</label>
                                            <input type="text" class="form-control" id="noreg_pernyataan1" name="noreg_pernyataan1" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="noreg_pernyataan1">Kabupaten / Kota :</label>
                                            <input type="text" class="form-control" id="noreg_pernyataan1" name="noreg_pernyataan1" required>
                                        </div>
                                        <div>
                                            <label for="noreg_pernyataan1">Provinsi :</label>
                                            <input type="text" class="form-control" id="noreg_pernyataan1" name="noreg_pernyataan1" required>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="bidang_tugas_pernyataan1">Nama Kelompok Sasaran:</label>
                                            <input type="text" class="form-control" id="bidang_tugas_pernyataan1" name="bidang_tugas_pernyataan1" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat_pernyataan1">Bentuk Kegiatan :</label>
                                            <input type="text" class="form-control" id="alamat_pernyataan1" name="alamat_pernyataan1" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="bidang_tugas_pernyataan1"> Topik Bahasan :</label>
                                            <input type="text" class="form-control" id="bidang_tugas_pernyataan1" name="bidang_tugas_pernyataan1" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat_pernyataan1">Tujuan / Target:</label>
                                            <input type="text" class="form-control" id="alamat_pernyataan1" name="alamat_pernyataan1" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat_pernyataan1">Waktu Pelaksanaan :</label>
                                            <input type="text" class="form-control" id="alamat_pernyataan1" name="alamat_pernyataan1" required>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="Memilih_Spesialisasi">Mengetahui :</label>
                                                    <input type="text" class="form-control" id="Memilih_Spesialisasi" name="Memilih_Spesialisasi" required></input>
                                                </div>
                                                <div class="form-group">
                                                    <label for="upload_ttd">Upload tanda tangan:</label>
                                                    <input type="file" class="form-control-file" id="upload_ttd" name="upload_ttd" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="Memilih_Spesialisasi">Nama :</label>
                                                    <input type="text" class="form-control" id="Memilih_Spesialisasi" name="Memilih_Spesialisasi" required></input>
                                                </div>
                                                <div class="form-group">
                                                    <label for="Memilih_Spesialisasi">Nip :</label>
                                                    <input type="text" class="form-control" id="Memilih_Spesialisasi" name="Memilih_Spesialisasi" required></input>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="Memilih_Spesialisasi">Tempat :</label>
                                                    <input type="text" class="form-control" id="Memilih_Spesialisasi" name="Memilih_Spesialisasi" required></input>
                                                </div>
                                                <div class="form-group">
                                                    <label for="tanggal">tanggal, Bulan, tahun:</label>
                                                    <input type="text" id="tanggal" name="tanggal" class="form-control" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="upload_ttd">Upload tanda tangan:</label>
                                                    <input type="file" class="form-control-file" id="upload_ttd" name="upload_ttd" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="Memilih_Spesialisasi">Nama :</label>
                                                    <input type="text" class="form-control" id="Memilih_Spesialisasi" name="Memilih_Spesialisasi" required></input>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <hr style="border: none; border-bottom: 1px solid black; margin: 20px 0;">
                                <button type="button" class="btn btn-primary" onclick="goToForm1()">Kembali</button>
                                <button type="button" class="btn btn-primary" onclick="nextForm()">Lanjut</button>

                            </div>
                        </div>
                    </form>
                </div>
                <!-- akhir RENCANA KERJA BULANAN  -->


                <!-- SURAT DAFTAR HADIR PENYULUHAN-->
                <div id="form6" style="display:none;">
                    <form id="form-pernyataan">
                        <div class="card">
                            <div class="card-header">
                                <h5>DAFTAR HADIR PENYULUHAN</h5>
                            </div>
                            <div class="card-body">
                                <!-- <form> -->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="nama_pernyataan1">Nama Kelompok:</label>
                                            <input type="text" class="form-control" id="nama_pernyataan1" name="nama_pernyataan1" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="tempat_tanggal_lahir_pernyataan1">Alamat :</label>
                                            <textarea class="form-control" id="tempat_tanggal_lahir_pernyataan1" name="tempat_tanggal_lahir_pernyataan1" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="pendidikan_terakhir_pernyataan1">Bentuk Kegiatan :</label>
                                            <input type="text" class="form-control" id="pendidikan_terakhir_pernyataan1" name="pendidikan_terakhir_pernyataan1" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="noreg_pernyataan1">Judul / Topik:</label>
                                            <input type="text" class="form-control" id="noreg_pernyataan1" name="noreg_pernyataan1" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="noreg_pernyataan1">Hari / Tanggal:</label>
                                            <input type="text" class="form-control" id="noreg_pernyataan1" name="noreg_pernyataan1" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="p-2" style="border-width: 3px; border-style: solid;">
                                            <div class="form-group">
                                                <label for="bidang_tugas_pernyataan1">Nama Peserta Penyuluhan :</label>
                                                <input type="text" class="form-control" id="bidang_tugas_pernyataan1" name="bidang_tugas_pernyataan1" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="alamat_pernyataan1">Alamat :</label>
                                                <input type="text" class="form-control" id="alamat_pernyataan1" name="alamat_pernyataan1" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="Memilih_Spesialisasi">Tanda Tangan :</label>
                                                <input type="file" class="form-control-file" id="upload_ttd" name="upload_ttd" required>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="Memilih_Spesialisasi">Mengetahui Penyuluh Agama:</label>
                                                    <select class="form-control" id="Penyuluh_Agama" name="Penyuluh_Agama" required>
                                                        <option value="Islam">Islam</option>
                                                        <option value="Kristen">Kristen</option>
                                                        <option value="Katolik">Katolik</option>
                                                        <option value="Katolik">Hindu</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="upload_ttd">Upload tanda tangan:</label>
                                                    <input type="file" class="form-control-file" id="upload_ttd" name="upload_ttd" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="Memilih_Spesialisasi">Nama :</label>
                                                    <input type="text" class="form-control" id="Memilih_Spesialisasi" name="Memilih_Spesialisasi" required></input>
                                                </div>

                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="Memilih_Spesialisasi">Tempat :</label>
                                                    <input type="text" class="form-control" id="Memilih_Spesialisasi" name="Memilih_Spesialisasi" required></input>
                                                </div>
                                                <div class="form-group">
                                                    <label for="tanggal">tanggal, Bulan, tahun:</label>
                                                    <input type="text" id="tanggal" name="tanggal" class="form-control" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="upload_ttd">Upload tanda tangan:</label>
                                                    <input type="file" class="form-control-file" id="upload_ttd" name="upload_ttd" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="Memilih_Spesialisasi">Nama Ketua Kelompok Penyelenggara :</label>
                                                    <input type="text" class="form-control" id="Memilih_Spesialisasi" name="Memilih_Spesialisasi" required></input>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <hr style="border: none; border-bottom: 1px solid black; margin: 20px 0;">
                                <button type="button" class="btn btn-primary" onclick="goToForm1()">Kembali</button>
                                <button type="button" class="btn btn-primary" onclick="nextForm()">Lanjut</button>

                            </div>
                        </div>
                    </form>
                </div>
                <!-- akhir DAFTAR HADIR PENYULUHAN -->


                <!-- LAPORAN MINGGUAN PENYULUH AGAMA-->
                <div id="form7" style="display:none;">
                    <form id="form-pernyataan">
                        <div class="card">
                            <div class="card-header">
                                <h5>LAPORAN MINGGUAN PENYULUH AGAMA </h5>
                            </div>
                            <div class="card-body">
                                <!-- <form> -->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="nama_pernyataan1">Nama PAI Non PNS :</label>
                                            <input type="text" class="form-control" id="nama_pernyataan1" name="nama_pernyataan1" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="tempat_tanggal_lahir_pernyataan1">Jabatan :</label>
                                            <input class="form-control" id="tempat_tanggal_lahir_pernyataan1" name="tempat_tanggal_lahir_pernyataan1" required></input>
                                        </div>
                                        <div class="form-group">
                                            <label for="pendidikan_terakhir_pernyataan1"> Bidang Tugas / Spesialisasi:</label>
                                            <input type="text" class="form-control" id="pendidikan_terakhir_pernyataan1" name="pendidikan_terakhir_pernyataan1" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="noreg_pernyataan1">Kecamatan :</label>
                                            <input type="text" class="form-control" id="noreg_pernyataan1" name="noreg_pernyataan1" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="noreg_pernyataan1">Kabupaten / Kota :</label>
                                            <input type="text" class="form-control" id="noreg_pernyataan1" name="noreg_pernyataan1" required>
                                        </div>
                                        <div>
                                            <label for="noreg_pernyataan1">Provinsi :</label>
                                            <input type="text" class="form-control" id="noreg_pernyataan1" name="noreg_pernyataan1" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="p-2" style="border-width: 3px; border-style: solid;">
                                            <h5>Yang Perlu Dilaporkan :</h5>
                                            <div class="form-group">
                                                <label for="bidang_tugas_pernyataan1">Hari & Tanggal Penyuluhan :</label>
                                                <input type="text" class="form-control" id="bidang_tugas_pernyataan1" name="bidang_tugas_pernyataan1" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="alamat_pernyataan1">Nama Kelompok Sasaran :</label>
                                                <input type="text" class="form-control" id="alamat_pernyataan1" name="alamat_pernyataan1" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="Memilih_Spesialisasi">Topik Materi Penyuluhan :</label>
                                                <textarea type="text" class="form-control" id="Memilih_Spesialisasi" name="Memilih_Spesialisasi" rows="3" required></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="Memilih_Spesialisasi">Masalah yang ditemukan :</label>
                                                <textarea type="text" class="form-control" id="Memilih_Spesialisasi" name="Memilih_Spesialisasi" rows="3" required></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="Memilih_Spesialisasi">Alternatif Pemecahan:</label>
                                                <textarea type="text" class="form-control" id="Memilih_Spesialisasi" name="Memilih_Spesialisasi" rows="3" required></textarea>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="Memilih_Spesialisasi">Mengetahui :</label>
                                                    <input type="text" class="form-control" id="Memilih_Spesialisasi" name="Memilih_Spesialisasi" required></input>
                                                </div>
                                                <div class="form-group">
                                                    <label for="upload_ttd">Upload tanda tangan:</label>
                                                    <input type="file" class="form-control-file" id="upload_ttd" name="upload_ttd" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="Memilih_Spesialisasi">Nama :</label>
                                                    <input type="text" class="form-control" id="Memilih_Spesialisasi" name="Memilih_Spesialisasi" required></input>
                                                </div>
                                                <div class="form-group">
                                                    <label for="Memilih_Spesialisasi">Nip :</label>
                                                    <input type="text" class="form-control" id="Memilih_Spesialisasi" name="Memilih_Spesialisasi" required></input>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="Memilih_Spesialisasi">Tempat :</label>
                                                    <input type="text" class="form-control" id="Memilih_Spesialisasi" name="Memilih_Spesialisasi" required></input>
                                                </div>
                                                <div class="form-group">
                                                    <label for="tanggal">tanggal, Bulan, tahun:</label>
                                                    <input type="text" id="tanggal" name="tanggal" class="form-control" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="upload_ttd">Upload tanda tangan:</label>
                                                    <input type="file" class="form-control-file" id="upload_ttd" name="upload_ttd" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="Memilih_Spesialisasi">Nama :</label>
                                                    <input type="text" class="form-control" id="Memilih_Spesialisasi" name="Memilih_Spesialisasi" required></input>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <hr style="border: none; border-bottom: 1px solid black; margin: 20px 0;">
                                <button type="button" class="btn btn-primary" onclick="goToForm1()">Kembali</button>
                                <button type="button" class="btn btn-primary" onclick="nextForm()">Lanjut</button>

                            </div>
                        </div>
                    </form>
                </div>
                <!-- akhir LAPORAN MINGGUAN PENYULUH AGAMA-->


                <!-- LAPORAN MINGGUAN PENYULUH AGAMA-->
                <div id="form8" style="display:none;">
                    <form id="form-pernyataan">
                        <div class="card">
                            <div class="card-header">
                                <h5>LAPORAN MINGGUAN PENYULUH AGAMA </h5>
                            </div>
                            <div class="card-body">
                                <!-- <form> -->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="nama_pernyataan1">Nama PAI Non PNS :</label>
                                            <input type="text" class="form-control" id="nama_pernyataan1" name="nama_pernyataan1" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="tempat_tanggal_lahir_pernyataan1">Jabatan :</label>
                                            <input class="form-control" id="tempat_tanggal_lahir_pernyataan1" name="tempat_tanggal_lahir_pernyataan1" required></input>
                                        </div>
                                        <div class="form-group">
                                            <label for="pendidikan_terakhir_pernyataan1"> Bidang Tugas / Spesialisasi:</label>
                                            <input type="text" class="form-control" id="pendidikan_terakhir_pernyataan1" name="pendidikan_terakhir_pernyataan1" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="noreg_pernyataan1">Kecamatan :</label>
                                            <input type="text" class="form-control" id="noreg_pernyataan1" name="noreg_pernyataan1" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="noreg_pernyataan1">Kabupaten / Kota :</label>
                                            <input type="text" class="form-control" id="noreg_pernyataan1" name="noreg_pernyataan1" required>
                                        </div>
                                        <div>
                                            <label for="noreg_pernyataan1">Provinsi :</label>
                                            <input type="text" class="form-control" id="noreg_pernyataan1" name="noreg_pernyataan1" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="p-2" style="border-width: 3px; border-style: solid;">
                                            <h5>Yang Perlu Dilaporkan :</h5>
                                            <div class="form-group">
                                                <label for="bidang_tugas_pernyataan1">Hari & Tanggal Penyuluhan :</label>
                                                <input type="text" class="form-control" id="bidang_tugas_pernyataan1" name="bidang_tugas_pernyataan1" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="alamat_pernyataan1">Nama Kelompok Sasaran :</label>
                                                <input type="text" class="form-control" id="alamat_pernyataan1" name="alamat_pernyataan1" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="Memilih_Spesialisasi">Topik Materi Penyuluhan :</label>
                                                <textarea type="text" class="form-control" id="Memilih_Spesialisasi" name="Memilih_Spesialisasi" rows="3" required></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="Memilih_Spesialisasi">Masalah yang ditemukan :</label>
                                                <textarea type="text" class="form-control" id="Memilih_Spesialisasi" name="Memilih_Spesialisasi" rows="3" required></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="Memilih_Spesialisasi">Alternatif Pemecahan:</label>
                                                <textarea type="text" class="form-control" id="Memilih_Spesialisasi" name="Memilih_Spesialisasi" rows="3" required></textarea>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="Memilih_Spesialisasi">Mengetahui :</label>
                                                    <input type="text" class="form-control" id="Memilih_Spesialisasi" name="Memilih_Spesialisasi" required></input>
                                                </div>
                                                <div class="form-group">
                                                    <label for="upload_ttd">Upload tanda tangan:</label>
                                                    <input type="file" class="form-control-file" id="upload_ttd" name="upload_ttd" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="Memilih_Spesialisasi">Nama :</label>
                                                    <input type="text" class="form-control" id="Memilih_Spesialisasi" name="Memilih_Spesialisasi" required></input>
                                                </div>
                                                <div class="form-group">
                                                    <label for="Memilih_Spesialisasi">Nip :</label>
                                                    <input type="text" class="form-control" id="Memilih_Spesialisasi" name="Memilih_Spesialisasi" required></input>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="Memilih_Spesialisasi">Tempat :</label>
                                                    <input type="text" class="form-control" id="Memilih_Spesialisasi" name="Memilih_Spesialisasi" required></input>
                                                </div>
                                                <div class="form-group">
                                                    <label for="tanggal">tanggal, Bulan, tahun:</label>
                                                    <input type="text" id="tanggal" name="tanggal" class="form-control" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="upload_ttd">Upload tanda tangan:</label>
                                                    <input type="file" class="form-control-file" id="upload_ttd" name="upload_ttd" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="Memilih_Spesialisasi">Nama :</label>
                                                    <input type="text" class="form-control" id="Memilih_Spesialisasi" name="Memilih_Spesialisasi" required></input>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <hr style="border: none; border-bottom: 1px solid black; margin: 20px 0;">
                                <button type="button" class="btn btn-primary" onclick="goToForm1()">Kembali</button>
                                <button type="button" class="btn btn-primary" onclick="nextForm()">Lanjut</button>

                            </div>
                        </div>
                    </form>
                </div>
                <!-- akhir LAPORAN MINGGUAN PENYULUH AGAMA-->


                <!-- LAPORAN MINGGUAN PENYULUH AGAMA-->
                <div id="form9" style="display:none;">
                    <form id="form-pernyataan">
                        <div class="card">
                            <div class="card-header">
                                <h5>LAPORAN MINGGUAN PENYULUH AGAMA </h5>
                            </div>
                            <div class="card-body">
                                <!-- <form> -->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="nama_pernyataan1">Nama PAI Non PNS :</label>
                                            <input type="text" class="form-control" id="nama_pernyataan1" name="nama_pernyataan1" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="tempat_tanggal_lahir_pernyataan1">Jabatan :</label>
                                            <input class="form-control" id="tempat_tanggal_lahir_pernyataan1" name="tempat_tanggal_lahir_pernyataan1" required></input>
                                        </div>
                                        <div class="form-group">
                                            <label for="pendidikan_terakhir_pernyataan1"> Bidang Tugas / Spesialisasi:</label>
                                            <input type="text" class="form-control" id="pendidikan_terakhir_pernyataan1" name="pendidikan_terakhir_pernyataan1" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="noreg_pernyataan1">Kecamatan :</label>
                                            <input type="text" class="form-control" id="noreg_pernyataan1" name="noreg_pernyataan1" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="noreg_pernyataan1">Kabupaten / Kota :</label>
                                            <input type="text" class="form-control" id="noreg_pernyataan1" name="noreg_pernyataan1" required>
                                        </div>
                                        <div>
                                            <label for="noreg_pernyataan1">Provinsi :</label>
                                            <input type="text" class="form-control" id="noreg_pernyataan1" name="noreg_pernyataan1" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="p-2" style="border-width: 3px; border-style: solid;">
                                            <h5>Yang Perlu Dilaporkan :</h5>
                                            <div class="form-group">
                                                <label for="bidang_tugas_pernyataan1">Hari & Tanggal Penyuluhan :</label>
                                                <input type="text" class="form-control" id="bidang_tugas_pernyataan1" name="bidang_tugas_pernyataan1" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="alamat_pernyataan1">Nama Kelompok Sasaran :</label>
                                                <input type="text" class="form-control" id="alamat_pernyataan1" name="alamat_pernyataan1" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="Memilih_Spesialisasi">Topik Materi Penyuluhan :</label>
                                                <textarea type="text" class="form-control" id="Memilih_Spesialisasi" name="Memilih_Spesialisasi" rows="3" required></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="Memilih_Spesialisasi">Masalah yang ditemukan :</label>
                                                <textarea type="text" class="form-control" id="Memilih_Spesialisasi" name="Memilih_Spesialisasi" rows="3" required></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="Memilih_Spesialisasi">Alternatif Pemecahan:</label>
                                                <textarea type="text" class="form-control" id="Memilih_Spesialisasi" name="Memilih_Spesialisasi" rows="3" required></textarea>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="Memilih_Spesialisasi">Mengetahui :</label>
                                                    <input type="text" class="form-control" id="Memilih_Spesialisasi" name="Memilih_Spesialisasi" required></input>
                                                </div>
                                                <div class="form-group">
                                                    <label for="upload_ttd">Upload tanda tangan:</label>
                                                    <input type="file" class="form-control-file" id="upload_ttd" name="upload_ttd" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="Memilih_Spesialisasi">Nama :</label>
                                                    <input type="text" class="form-control" id="Memilih_Spesialisasi" name="Memilih_Spesialisasi" required></input>
                                                </div>
                                                <div class="form-group">
                                                    <label for="Memilih_Spesialisasi">Nip :</label>
                                                    <input type="text" class="form-control" id="Memilih_Spesialisasi" name="Memilih_Spesialisasi" required></input>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="Memilih_Spesialisasi">Tempat :</label>
                                                    <input type="text" class="form-control" id="Memilih_Spesialisasi" name="Memilih_Spesialisasi" required></input>
                                                </div>
                                                <div class="form-group">
                                                    <label for="tanggal">tanggal, Bulan, tahun:</label>
                                                    <input type="text" id="tanggal" name="tanggal" class="form-control" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="upload_ttd">Upload tanda tangan:</label>
                                                    <input type="file" class="form-control-file" id="upload_ttd" name="upload_ttd" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="Memilih_Spesialisasi">Nama :</label>
                                                    <input type="text" class="form-control" id="Memilih_Spesialisasi" name="Memilih_Spesialisasi" required></input>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <hr style="border: none; border-bottom: 1px solid black; margin: 20px 0;">
                                <button type="button" class="btn btn-primary" onclick="goToForm1()">Kembali</button>
                                <button type="button" class="btn btn-primary" onclick="nextForm()">Lanjut</button>

                            </div>
                        </div>
                    </form>
                </div>
                <!-- akhir LAPORAN MINGGUAN PENYULUH AGAMA-->

                <!-- LAPORAN MINGGUAN PENYULUH AGAMA-->
                <div id="form10" style="display:none;">
                    <form id="form-pernyataan">
                        <div class="card">
                            <div class="card-header">
                                <h5>LAPORAN MINGGUAN PENYULUH AGAMA </h5>
                            </div>
                            <div class="card-body">
                                <!-- <form> -->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="nama_pernyataan1">Nama PAI Non PNS :</label>
                                            <input type="text" class="form-control" id="nama_pernyataan1" name="nama_pernyataan1" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="tempat_tanggal_lahir_pernyataan1">Jabatan :</label>
                                            <input class="form-control" id="tempat_tanggal_lahir_pernyataan1" name="tempat_tanggal_lahir_pernyataan1" required></input>
                                        </div>
                                        <div class="form-group">
                                            <label for="pendidikan_terakhir_pernyataan1"> Bidang Tugas / Spesialisasi:</label>
                                            <input type="text" class="form-control" id="pendidikan_terakhir_pernyataan1" name="pendidikan_terakhir_pernyataan1" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="noreg_pernyataan1">Kecamatan :</label>
                                            <input type="text" class="form-control" id="noreg_pernyataan1" name="noreg_pernyataan1" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="noreg_pernyataan1">Kabupaten / Kota :</label>
                                            <input type="text" class="form-control" id="noreg_pernyataan1" name="noreg_pernyataan1" required>
                                        </div>
                                        <div>
                                            <label for="noreg_pernyataan1">Provinsi :</label>
                                            <input type="text" class="form-control" id="noreg_pernyataan1" name="noreg_pernyataan1" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="p-2" style="border-width: 3px; border-style: solid;">
                                            <h5>Yang Perlu Dilaporkan :</h5>
                                            <div class="form-group">
                                                <label for="bidang_tugas_pernyataan1">Hari & Tanggal Penyuluhan :</label>
                                                <input type="text" class="form-control" id="bidang_tugas_pernyataan1" name="bidang_tugas_pernyataan1" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="alamat_pernyataan1">Nama Kelompok Sasaran :</label>
                                                <input type="text" class="form-control" id="alamat_pernyataan1" name="alamat_pernyataan1" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="Memilih_Spesialisasi">Topik Materi Penyuluhan :</label>
                                                <textarea type="text" class="form-control" id="Memilih_Spesialisasi" name="Memilih_Spesialisasi" rows="3" required></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="Memilih_Spesialisasi">Masalah yang ditemukan :</label>
                                                <textarea type="text" class="form-control" id="Memilih_Spesialisasi" name="Memilih_Spesialisasi" rows="3" required></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="Memilih_Spesialisasi">Alternatif Pemecahan:</label>
                                                <textarea type="text" class="form-control" id="Memilih_Spesialisasi" name="Memilih_Spesialisasi" rows="3" required></textarea>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="Memilih_Spesialisasi">Mengetahui :</label>
                                                    <input type="text" class="form-control" id="Memilih_Spesialisasi" name="Memilih_Spesialisasi" required></input>
                                                </div>
                                                <div class="form-group">
                                                    <label for="upload_ttd">Upload tanda tangan:</label>
                                                    <input type="file" class="form-control-file" id="upload_ttd" name="upload_ttd" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="Memilih_Spesialisasi">Nama :</label>
                                                    <input type="text" class="form-control" id="Memilih_Spesialisasi" name="Memilih_Spesialisasi" required></input>
                                                </div>
                                                <div class="form-group">
                                                    <label for="Memilih_Spesialisasi">Nip :</label>
                                                    <input type="text" class="form-control" id="Memilih_Spesialisasi" name="Memilih_Spesialisasi" required></input>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="Memilih_Spesialisasi">Tempat :</label>
                                                    <input type="text" class="form-control" id="Memilih_Spesialisasi" name="Memilih_Spesialisasi" required></input>
                                                </div>
                                                <div class="form-group">
                                                    <label for="tanggal">tanggal, Bulan, tahun:</label>
                                                    <input type="text" id="tanggal" name="tanggal" class="form-control" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="upload_ttd">Upload tanda tangan:</label>
                                                    <input type="file" class="form-control-file" id="upload_ttd" name="upload_ttd" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="Memilih_Spesialisasi">Nama :</label>
                                                    <input type="text" class="form-control" id="Memilih_Spesialisasi" name="Memilih_Spesialisasi" required></input>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <hr style="border: none; border-bottom: 1px solid black; margin: 20px 0;">
                                <button type="button" class="btn btn-primary" onclick="goToForm1()">Kembali</button>
                                <button type="button" class="btn btn-primary" onclick="nextForm()">Lanjut</button>

                            </div>
                        </div>
                    </form>
                </div>
                <!-- akhir LAPORAN MINGGUAN PENYULUH AGAMA-->


                <!-- LAPORAN SURAT PERNYATAAN MELAKUKAN KEGIATAN PENYULUHAN AGAMA ISLAM-->
                <div id="form11" style="display:none;">
                    <form id="form-pernyataan">
                        <div class="card">
                            <div class="card-header">
                                <h5>SURAT PERNYATAAN MELAKUKAN KEGIATAN PENYULUHAN AGAMA ISLAM</h5>
                            </div>
                            <div class="card-body">
                                <!-- <form> -->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="p-2" style="border-width: 3px; border-style: solid;">
                                            <h5>Yang bertanda tangan di bawah ini : </h5>
                                            <div class="form-group">
                                                <label for="nama_pernyataan1">Nama :</label>
                                                <input type="text" class="form-control" id="nama_pernyataan1" name="nama_pernyataan1" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="tempat_tanggal_lahir_pernyataan1">NIP :</label>
                                                <input class="form-control" id="tempat_tanggal_lahir_pernyataan1" name="tempat_tanggal_lahir_pernyataan1" required></input>
                                            </div>
                                            <div class="form-group">
                                                <label for="pendidikan_terakhir_pernyataan1">Pangkat/Golongan :</label>
                                                <input type="text" class="form-control" id="pendidikan_terakhir_pernyataan1" name="pendidikan_terakhir_pernyataan1" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="noreg_pernyataan1">Jabatan :</label>
                                                <input type="text" class="form-control" id="noreg_pernyataan1" name="noreg_pernyataan1" required>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="Memilih_Spesialisasi">Tempat :</label>
                                                    <input type="text" class="form-control" id="Memilih_Spesialisasi" name="Memilih_Spesialisasi" required></input>
                                                </div>
                                                <div class="form-group">
                                                    <label for="tanggal">tanggal, Bulan, tahun:</label>
                                                    <input type="text" id="tanggal" name="tanggal" class="form-control" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="upload_ttd">Upload tanda tangan:</label>
                                                    <input type="file" class="form-control-file" id="upload_ttd" name="upload_ttd" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="Memilih_Spesialisasi">Nama :</label>
                                                    <input type="text" class="form-control" id="Memilih_Spesialisasi" name="Memilih_Spesialisasi" required></input>
                                                </div>
                                                <div class="form-group">
                                                    <label for="Memilih_Spesialisasi">NIP :</label>
                                                    <input type="text" class="form-control" id="Memilih_Spesialisasi" name="Memilih_Spesialisasi" required></input>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="p-2" style="border-width: 3px; border-style: solid;">
                                            <h5>Menerangkan :</h5>
                                            <div class="form-group">
                                                <label for="bidang_tugas_pernyataan1">Nama:</label>
                                                <input type="text" class="form-control" id="bidang_tugas_pernyataan1" name="bidang_tugas_pernyataan1" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="alamat_pernyataan1">Jabatan :</label>
                                                <input type="text" class="form-control" id="alamat_pernyataan1" name="alamat_pernyataan1" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="Memilih_Spesialisasi">Bidang Tugas Spesialisasi :</label>
                                                <input type="text" class="form-control" id="alamat_pernyataan1" name="alamat_pernyataan1" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="Memilih_Spesialisasi">Wilayah Penugasan :</label>
                                                <input type="text" class="form-control" id="alamat_pernyataan1" name="alamat_pernyataan1" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="Penyuluh_Agama">Melakukan Kegiatan Bimbingan Agama </label>
                                                <select class="form-control" id="Penyuluh_Agama" name="Penyuluh_Agama" required>
                                                    <option value="Islam">Islam</option>
                                                    <option value="Kristen">Kristen</option>
                                                    <option value="Katolik">Katolik</option>
                                                    <option value="Katolik">Hindu</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="Memilih_Spesialisasi">Jumlah Kegiatan Penyuluhan :</label>
                                                <input type="text" class="form-control" id="alamat_pernyataan1" name="alamat_pernyataan1" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="Memilih_Spesialisasi">Bulan :</label>
                                                <input type="text" class="form-control" id="alamat_pernyataan1" name="alamat_pernyataan1" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="Memilih_Spesialisasi">Tahun :</label>
                                                <input type="text" class="form-control" id="alamat_pernyataan1" name="alamat_pernyataan1" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr style="border: none; border-bottom: 1px solid black; margin: 20px 0;">
                                <button type="button" class="btn btn-primary" onclick="goToForm1()">Kembali</button>
                                <button type="button" class="btn btn-primary" onclick="nextForm()">Lanjut</button>

                            </div>
                        </div>
                    </form>
                </div>
                <!-- akhir SURAT PERNYATAAN MELAKUKAN KEGIATAN PENYULUHAN AGAMA ISLAM-->



                <!-- DOKUMENTASI KEGIATAN-->
                <div id="form12" style="display:none;">
                    <form id="form-pernyataan">
                        <div class="card">
                            <div class="card-header">
                                <h5>DOKUMENTASI KEGIATAN</h5>
                            </div>
                            <div class="card-body">
                                <!-- <form> -->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="upload_ttd">Upload Foto Kegiatan:</label>
                                            <input type="file" class="form-control-file" id="upload_ttd" name="upload_ttd" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="upload_ttd">Upload Foto Kegiatan:</label>
                                            <input type="file" class="form-control-file" id="upload_ttd" name="upload_ttd" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="upload_ttd">Upload Foto Kegiatan:</label>
                                            <input type="file" class="form-control-file" id="upload_ttd" name="upload_ttd" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="upload_ttd">Upload Foto Kegiatan:</label>
                                            <input type="file" class="form-control-file" id="upload_ttd" name="upload_ttd" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="upload_ttd">Upload Foto Kegiatan:</label>
                                            <input type="file" class="form-control-file" id="upload_ttd" name="upload_ttd" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="upload_ttd">Upload Foto Kegiatan:</label>
                                            <input type="file" class="form-control-file" id="upload_ttd" name="upload_ttd" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="upload_ttd">Upload Foto Kegiatan:</label>
                                            <input type="file" class="form-control-file" id="upload_ttd" name="upload_ttd" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="upload_ttd">Upload Foto Kegiatan:</label>
                                            <input type="file" class="form-control-file" id="upload_ttd" name="upload_ttd" required>
                                        </div>

                                    </div>
                                </div>
                                <hr style="border: none; border-bottom: 1px solid black; margin: 20px 0;">
                                <button type="button" class="btn btn-primary" onclick="goToForm1()">Kembali</button>
                                <!-- <button type="button" class="btn btn-primary" onclick="nextForm()">Lanjut</button> -->
                                <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>
            </div>
            </form>
        </div>
        <!-- akhir DOKUMENTASI KEGIATAN-->

        </div>
        </div>

        <!-- [ Main Content ] end -->
        </div>
    </section>


    <!-- Required Js -->
    <script src="assets/js/vendor-all.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script src="assets/js/pcoded.min.js"></script>





    <script>
        // Objek untuk menyimpan informasi formulir
        var forms = [{
                id: 'form1',
                order: 1,
                active: true
            },
            {
                id: 'form2',
                order: 2,
                active: false
            },
            {
                id: 'form3',
                order: 3,
                active: false
            },
            {
                id: 'form4',
                order: 4,
                active: false
            },
            {
                id: 'form5',
                order: 5,
                active: false
            },
            {
                id: 'form6',
                order: 6,
                active: false
            },
            {
                id: 'form7',
                order: 7,
                active: false
            },
            {
                id: 'form8',
                order: 8,
                active: false
            },
            {
                id: 'form9',
                order: 9,
                active: false
            },
            {
                id: 'form10',
                order: 10,
                active: false
            },
            {
                id: 'form11',
                order: 11,
                active: false
            },
            {
                id: 'form12',
                order: 12,
                active: false
            },
            // Tambahkan objek formulir lainnya di sini
        ];

        // Fungsi untuk menampilkan formulir berikutnya
        function nextForm() {
            // Cari formulir yang sedang aktif
            var activeForm = forms.find(form => form.active);

            // Tentukan indeks formulir berikutnya
            var nextIndex = (activeForm.order % forms.length) + 1;

            // Sembunyikan formulir yang sedang aktif
            document.getElementById(activeForm.id).style.display = "none";
            activeForm.active = false;

            // Tampilkan formulir berikutnya
            var nextForm = forms.find(form => form.order === nextIndex);
            document.getElementById(nextForm.id).style.display = "block";
            nextForm.active = true;
        }

        // Fungsi untuk kembali ke formulir sebelumnya
        function goToForm() {
            // Cari formulir yang sedang aktif
            var activeForm = forms.find(form => form.active);

            // Tentukan indeks formulir sebelumnya
            var prevIndex = (activeForm.order + forms.length - 2) % forms.length + 1;

            // Sembunyikan formulir yang sedang aktif
            document.getElementById(activeForm.id).style.display = "none";
            activeForm.active = false;

            // Tampilkan formulir sebelumnya
            var prevForm = forms.find(form => form.order === prevIndex);
            document.getElementById(prevForm.id).style.display = "block";
            prevForm.active = true;
        }
    </script>




</body>

</html>