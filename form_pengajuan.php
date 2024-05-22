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
                                <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a>
                                </li>
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
            <form id="form-surat-tugas" method="POST" action="process_form.php" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-sm-12">
                        <div id="form0">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Form Pengajuan Surat</h5>
                                </div>
                                <div class="card-body">


                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="remarks">Perihal Pengajuan Surat:</label>
                                                <input class="form-control" id="remarks" name="remarks">
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>

                            <div id="form1">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Form Surat Tugas</h5>
                                    </div>
                                    <div class="card-body">


                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="wilayah_penugasan">Wilayah penugasan:</label>
                                                    <input type="text" class="form-control" id="wilayah_penugasan"
                                                        name="wilayah_penugasan" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="alamat_wilayah_penugasan">Alamat wilayah
                                                        penugasan:</label>
                                                    <textarea class="form-control" id="alamat_wilayah_penugasan"
                                                        name="alamat_wilayah_penugasan" rows="3" required></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="nomor_surat">Nomor surat:</label>
                                                    <input type="text" class="form-control" id="nomor_surat"
                                                        name="nomor_surat" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="nama">Nama:</label>
                                                    <input type="text" class="form-control" id="nama" name="nama"
                                                        required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="tempat_tanggal_lahir">Tempat tanggal lahir:</label>
                                                    <input type="text" id="tempat_tanggal_lahir"
                                                        name="tempat_tanggal_lahir" class="form-control" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="pendidikan_terakhir">Pendidikan Terakhir:</label>
                                                    <input type="text" class="form-control" id="pendidikan_terakhir"
                                                        name="pendidikan_terakhir" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="noreg">Noreg:</label>
                                                    <input type="text" class="form-control" id="noreg" name="noreg"
                                                        required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="bidang_tugas">Bidang tugas / spesialisasi:</label>
                                                    <input type="text" class="form-control" id="bidang_tugas"
                                                        name="bidang_tugas" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="alamat">Alamat:</label>
                                                    <textarea class="form-control" id="alamat" name="alamat" rows="3"
                                                        required></textarea>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="no_keputusan">No Keputusan:</label>
                                                    <input type="text" class="form-control" id="no_keputusan"
                                                        name="no_keputusan" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="bimbingan_penyuluhan">Bimbingan dan penyuluhan
                                                        Agama:</label>
                                                    <input type="text" class="form-control" id="bimbingan_penyuluhan"
                                                        name="bimbingan_penyuluhan" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="sasaran_tugas">sasaran tugas :</label>
                                                    <input class="form-control" id="sasaran_tugas" name="sasaran_tugas"
                                                        required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="uraian_tugas">Uraian tugas:</label>
                                                    <textarea class="form-control" id="uraian_tugas" name="uraian_tugas"
                                                        rows="5" required></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="tempat">Tempat:</label>
                                                    <input type="text" class="form-control" id="tempat" name="tempat"
                                                        required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="tgl_bl_thn">Tanggal (tgl/bln/thn):</label>
                                                    <input type="text" class="form-control" id="tgl_bl_thn"
                                                        name="tgl_bl_thn" required>

                                                </div>
                                                <div class="form-group">
                                                    <label for="upload_ttd1">Unggah tanda tangan:</label>
                                                    <input type="file" class="form-control-file" id="upload_ttd1"
                                                        name="upload_ttd1" accept="image/*" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="nama_ttd_bersangkuta">Nama yang menandatangani
                                                        surat:</label>
                                                    <input type="text" class="form-control" id="nama_ttd_bersangkuta"
                                                        name="nama_ttd_bersangkuta" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="nip">NIP:</label>
                                                    <input type="text" class="form-control" id="nip" name="nip"
                                                        required>
                                                </div>
                                            </div>
                                        </div>
                                        <hr style="border: none; border-bottom: 1px solid black; margin: 20px 0;">


                                    </div>

                                </div>
                            </div>

                            <!-- akhir surat tugas -->

                            <!-- SURAT PERNYATAAN PEMILIHAN SPESIALISASI -->
                            <div id="form2">

                                <div class="card">
                                    <div class="card-header">
                                        <h5>SURAT PERNYATAAN PEMILIHAN SPESIALISASI</h5>
                                    </div>
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="nama_pernyataan1">Nama :</label>
                                                    <input type="text" class="form-control" id="nama_pernyataan1"
                                                        name="nama_pernyataan1" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="tempat_tanggal_lahir_pernyataan1">Tempat tanggal lahir
                                                        :</label>
                                                    <input class="form-control" id="tempat_tanggal_lahir_pernyataan1"
                                                        name="tempat_tanggal_lahir_pernyataan1" required></input>
                                                </div>
                                                <div class="form-group">
                                                    <label for="pendidikan_terakhir_pernyataan1">Pendidikan Terakhir
                                                        :</label>
                                                    <input type="text" class="form-control"
                                                        id="pendidikan_terakhir_pernyataan1"
                                                        name="pendidikan_terakhir_pernyataan1" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="noreg_pernyataan1">No Reg :</label>
                                                    <input type="text" class="form-control" id="noreg_pernyataan1"
                                                        name="noreg_pernyataan1" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="bidang_tugas_pernyataan1">Bidang Tugas/Spesialisasi
                                                        :</label>
                                                    <input type="text" class="form-control"
                                                        id="bidang_tugas_pernyataan1" name="bidang_tugas_pernyataan1"
                                                        required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="alamat_pernyataan1">Alamat :</label>
                                                    <input type="text" class="form-control" id="alamat_pernyataan1"
                                                        name="alamat_pernyataan1" required>
                                                </div>

                                                <div class="form-group">
                                                    <label for="Memilih_Spesialisasi1">Memilih Spesialisasi :</label>
                                                    <input type="text" class="form-control" id="Memilih_Spesialisasi"
                                                        name="Memilih_Spesialisasi" rows="3" required></input>
                                                </div>
                                                <div class="form-group">
                                                    <label for="Penyuluh_Agama">Penyuluh Agama </label>
                                                    <select class="form-control" id="Penyuluh_Agama"
                                                        name="Penyuluh_Agama" required>
                                                        <option value="Islam">Islam</option>
                                                        <option value="Kristen">Kristen</option>
                                                        <option value="Katolik">Katolik</option>
                                                        <option value="Katolik">Hindu</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="upload_ttd_Spesialisasi1">Upload tanda tangan:</label>
                                                    <input type="file" class="form-control-file"
                                                        id="upload_ttd_Spesialisasi1" name="upload_ttd_Spesialisasi1"
                                                        required>
                                                </div>

                                            </div>
                                        </div>
                                        <hr style="border: none; border-bottom: 1px solid black; margin: 20px 0;">



                                    </div>
                                </div>

                            </div>
                            <!-- akhir SURAT PERNYATAAN PEMILIHAN SPESIALISASI-->

                            <!-- SURAT PERNYATAAN KUNJUNGAN KEPADA TOKOH MASYARAKAT & PEJABAT PEMERINTAH -->
                            <div id="form3">
                                <div class=" card">
                                    <div class="card-header">
                                        <h5>SURAT PERNYATAAN KUNJUNGAN KEPADA TOKOH MASYARAKAT & PEJABAT PEMERINTAH</h5>
                                    </div>
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <h5>Yang bertanda tangan di bawah ini :</h5>
                                                <div class="form-group">
                                                    <label for="nama_pernyataan2">Nama :</label>
                                                    <input type="text" class="form-control" id="nama_pernyataan2"
                                                        name="nama_pernyataan2" required>
                                                </div>

                                                <div class="form-group">
                                                    <label for="bidang_tugas_pernyataan2">Bidang
                                                        Tugas/Spesialisasi:</label>
                                                    <input type="text" class="form-control"
                                                        id="bidang_tugas_pernyataan2" name="bidang_tugas_pernyataan2"
                                                        required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="alamat_pernyataan2">Alamat :</label>
                                                    <input type="text" class="form-control" id="alamat_pernyataan2"
                                                        name="alamat_pernyataan2" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="jabatan_pernyataan2">Koordinasi Penyuluh Agama:</label>
                                                    <select class="form-control" id="Penyuluh_Agama"
                                                        name="Penyuluh_Agama" required>
                                                        <option value="Islam">Islam</option>
                                                        <option value="Kristen">Kristen</option>
                                                        <option value="Katolik">Katolik</option>
                                                        <option value="Katolik">Hindu</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="tokoh_masyarakat_pernyataan2">Nama Tokoh Masyarakat
                                                        :</label>
                                                    <input type="text" class="form-control"
                                                        id="tokoh_masyarakat_pernyataan2"
                                                        name="tokoh_masyarakat_pernyataan2" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="jabatan_tokoh_pernyataan2">Jabatan Tokoh Masyarakat
                                                        :</label>
                                                    <input type="text" class="form-control"
                                                        id="jabatan_tokoh_pernyataan2" name="jabatan_tokoh_pernyataan2"
                                                        required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="hari_pernyataan2">Hari/Tanggal :</label>
                                                    <input type="text" class="form-control" id="hari_pernyataan2"
                                                        name="hari_pernyataan2" required></input>
                                                </div>
                                                <div class="form-group">
                                                    <label for="materi_pernyataan2">Materi Kunjungan :</label>
                                                    <textarea type="text" class="form-control" id="materi_pernyataan2"
                                                        name="materi_pernyataan2" rows="3" required></textarea>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="mengetahui_pernyataan2">Mengetahui :</label>
                                                            <input type="text" class="form-control"
                                                                id="mengetahui_pernyataan2"
                                                                name="mengetahui_pernyataan2" required></input>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="upload_ttd_pernyataan2">Upload tanda
                                                                tangan:</label>
                                                            <input type="file" class="form-control-file"
                                                                id="upload_ttd_pernyataan2"
                                                                name="upload_ttd_pernyataan2" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="nama_mengetahui_pernyataan2">Nama :</label>
                                                            <input type="text" class="form-control"
                                                                id="nama_mengetahui_pernyataan2"
                                                                name="nama_mengetahui_pernyataan2" required></input>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="nip_mengetahui_pernyataan2">Nip :</label>
                                                            <input type="text" class="form-control"
                                                                id="nip_mengetahui_pernyataan2"
                                                                name="nip_mengetahui_pernyataan2" required></input>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="tempat_pernyataan2">Tempat :</label>
                                                            <input type="text" class="form-control"
                                                                id="tempat_pernyataan2" name="tempat_pernyataan2"
                                                                required></input>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="tanggal_pernyataan2">tanggal, Bulan,
                                                                tahun:</label>
                                                            <input type="text" id="tanggal_pernyataan2"
                                                                name="tanggal_pernyataan2" class="form-control"
                                                                required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="upload_ttd_pernyataan_kanan">Upload tanda
                                                                tangan:</label>
                                                            <input type="file" class="form-control-file"
                                                                id="upload_ttd_pernyataan_kanan"
                                                                name="upload_ttd_pernyataan_kanan" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="nama_ttd_kanan">Nama :</label>
                                                            <input type="text" class="form-control" id="nama_ttd_kanan"
                                                                name="nama_ttd_kanan" required></input>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr style="border: none; border-bottom: 1px solid black; margin: 20px 0;">

                                    </div>
                                </div>

                            </div>
                            <!-- akhir SURAT PERNYATAAN KUNJUNGAN KEPADA TOKOH MASYARAKAT & PEJABAT PEMERINTAH -->


                            <!-- SURAT PERNYATAAN PEMBENTUKKAN KELOMPOK BINAAN -->
                            <div id="form4">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>SURAT PERNYATAAN PEMBENTUKKAN KELOMPOK BINAAN</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <h5>Yang bertanda tangan di bawah ini :</h5>
                                                <div class="form-group">
                                                    <label for="nama_pernyataan3">Nama :</label>
                                                    <input type="text" class="form-control" id="nama_pernyataan3"
                                                        name="nama_pernyataan3" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="jabatan_pernyataan3">Jabatan Penyuluh Agama:</label>
                                                    <select class="form-control" id="jabatan_pernyataan3"
                                                        name="jabatan_pernyataan3" required>
                                                        <option value="Islam">Islam</option>
                                                        <option value="Kristen">Kristen</option>
                                                        <option value="Katolik">Katolik</option>
                                                        <option value="Katolik">Hindu</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label for="bidang_tugas_pernyataan3">Bidang
                                                        Tugas/Spesialisasi:</label>
                                                    <input type="text" class="form-control"
                                                        id="bidang_tugas_pernyataan3" name="bidang_tugas_pernyataan3"
                                                        required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="alamat_pernyataan3">Alamat :</label>
                                                    <input type="text" class="form-control" id="alamat_pernyataan3"
                                                        name="alamat_pernyataan3" required>
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <h5>membentuk kelompok binaan sebagai berikut : </h5>
                                                <div class="form-group">
                                                    <label for="nama_kelompok_bina">Nama Kelompok :</label>
                                                    <input type="text" class="form-control" id="nama_kelompok_bina"
                                                        name="nama_kelompok_bina" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="alamat_kelompoka_bina">Alamat :</label>
                                                    <input type="text" class="form-control" id="alamat_kelompoka_bina"
                                                        name="alamat_kelompoka_bina" required>
                                                </div>

                                                <div class="form-group">
                                                    <label for="jumlah_anggota_bina">Jumlah Anggota :</label>
                                                    <input type="text" class="form-control" id="jumlah_anggota_bina"
                                                        name="jumlah_anggota_bina" required></input>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="mengetahui_kelompok_bina">Mengetahui :</label>
                                                            <input type="text" class="form-control"
                                                                id="mengetahui_kelompok_bina"
                                                                name="mengetahui_kelompok_bina" required></input>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="upload_ttd_kelompok_bina">Upload tanda
                                                                tangan:</label>
                                                            <input type="file" class="form-control-file"
                                                                id="upload_ttd_kelompok_bina"
                                                                name="upload_ttd_kelompok_bina" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="nama_yang_mengetahui">Nama :</label>
                                                            <input type="text" class="form-control"
                                                                id="nama_yang_mengetahui" name="nama_yang_mengetahui"
                                                                required></input>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="nip_yang_mengetahui">Nip :</label>
                                                            <input type="text" class="form-control"
                                                                id="nip_yang_mengetahui" name="nip_yang_mengetahui"
                                                                required></input>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="tempat_kelompok_bina">Tempat :</label>
                                                            <input type="text" class="form-control"
                                                                id="tempat_kelompok_bina" name="tempat_kelompok_bina"
                                                                required></input>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="tanggal_kelompok_bina">Tanggal, Bulan,
                                                                Tahun:</label>
                                                            <input type="text" id="tanggal_kelompok_bina"
                                                                name="tanggal_kelompok_bina" class="form-control"
                                                                required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="upload_ttd_bina_kanan">Upload tanda
                                                                tangan:</label>
                                                            <input type="file" class="form-control-file"
                                                                id="upload_ttd_bina_kanan" name="upload_ttd_bina_kanan"
                                                                required>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <hr style="border: none; border-bottom: 1px solid black; margin: 20px 0;">

                                    </div>
                                </div>

                            </div>
                            <!-- akhir SURAT PERNYATAAN PEMBENTUKKAN KELOMPOK BINAAN -->

                            <!-- SURAT RENCANA KERJA BULANAN -->
                            <div id="form5">

                                <div class="card">
                                    <div class="card-header">
                                        <h5>RENCANA KERJA BULANAN</h5>
                                    </div>
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="nama_pai">Nama PAI Non PNS :</label>
                                                    <input type="text" class="form-control" id="nama_pai"
                                                        name="nama_pai" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="jabatan_pai">Jabatan :</label>
                                                    <input class="form-control" id="jabatan_pai" name="jabatan_pai"
                                                        required></input>
                                                </div>
                                                <div class="form-group">
                                                    <label for="bidang_tugas_pai"> Bidang Tugas / Spesialisasi:</label>
                                                    <input type="text" class="form-control" id="bidang_tugas_pai"
                                                        name="bidang_tugas_pai" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="kecamatan_pai">Kecamatan :</label>
                                                    <input type="text" class="form-control" id="kecamatan_pai"
                                                        name="kecamatan_pai" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="kabupaten_pai">Kabupaten / Kota :</label>
                                                    <input type="text" class="form-control" id="kabupaten_pai"
                                                        name="kabupaten_pai" required>
                                                </div>
                                                <div>
                                                    <label for="provinsi_pai">Provinsi :</label>
                                                    <input type="text" class="form-control" id="provinsi_pai"
                                                        name="provinsi_pai" required>
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="nama_kelompok_sasaran">Nama Kelompok Sasaran:</label>
                                                    <input type="text" class="form-control" id="nama_kelompok_sasaran"
                                                        name="nama_kelompok_sasaran" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="bentuk_kegiatan">Bentuk Kegiatan :</label>
                                                    <input type="text" class="form-control" id="bentuk_kegiatan"
                                                        name="bentuk_kegiatan" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="topik_bahasan"> Topik Bahasan :</label>
                                                    <input type="text" class="form-control" id="topik_bahasan"
                                                        name="topik_bahasan" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="tujuan_kegiatan">Tujuan / Target:</label>
                                                    <input type="text" class="form-control" id="tujuan_kegiatan"
                                                        name="tujuan_kegiatan" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="waktu_pelaksanaan">Waktu Pelaksanaan :</label>
                                                    <input type="text" class="form-control" id="waktu_pelaksanaan"
                                                        name="waktu_pelaksanaan" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="penyuluh_agama_pai">Penyuluh Agama:</label>
                                                    <select class="form-control" id="penyuluh_agama_pai"
                                                        name="penyuluh_agama_pai" required>
                                                        <option value="Islam">Islam</option>
                                                        <option value="Kristen">Kristen</option>
                                                        <option value="Katolik">Katolik</option>
                                                        <option value="Katolik">Hindu</option>
                                                    </select>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="mengetahui_pimpinan">Mengetahui :</label>
                                                            <input type="text" class="form-control"
                                                                id="mengetahui_pimpinan" name="mengetahui_pimpinan"
                                                                required></input>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="upload_ttd_pimpinan">Upload tanda
                                                                tangan:</label>
                                                            <input type="file" class="form-control-file"
                                                                id="upload_ttd_pimpinan" name="upload_ttd_pimpinan"
                                                                required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="nama_pimpinan">Nama :</label>
                                                            <input type="text" class="form-control" id="nama_pimpinan"
                                                                name="nama_pimpinan" required></input>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="nip_pimpinan">Nip :</label>
                                                            <input type="text" class="form-control" id="nip_pimpinan"
                                                                name="nip_pimpinan" required></input>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="tempat_pai">Tempat :</label>
                                                            <input type="text" class="form-control" id="tempat_pai"
                                                                name="tempat_pai" required></input>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="tanggal_pai">tanggal, Bulan, tahun:</label>
                                                            <input type="text" id="tanggal_pai" name="tanggal_pai"
                                                                class="form-control" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="upload_ttd_pai">Upload tanda tangan:</label>
                                                            <input type="file" class="form-control-file"
                                                                id="upload_ttd_pai" name="upload_ttd_pai" required>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <hr style="border: none; border-bottom: 1px solid black; margin: 20px 0;">


                                    </div>
                                </div>

                            </div>
                            <!-- akhir RENCANA KERJA BULANAN  -->


                            <!-- SURAT DAFTAR HADIR PENYULUHAN-->
                            <div id="form6">

                                <div class="card">
                                    <div class="card-header">
                                        <h5>DAFTAR HADIR PENYULUHAN</h5>
                                    </div>
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="nama_penyuluh">Nama Kelompok:</label>
                                                    <input type="text" class="form-control" id="nama_penyuluh"
                                                        name="nama_penyuluh" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="alamat_penyuluh">Alamat :</label>
                                                    <textarea class="form-control" id="alamat_penyuluh"
                                                        name="alamat_penyuluh" required></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="kegiatan_penyuluh">Bentuk Kegiatan :</label>
                                                    <input type="text" class="form-control" id="kegiatan_penyuluh"
                                                        name="kegiatan_penyuluh" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="topik_penyuluh">Judul / Topik:</label>
                                                    <input type="text" class="form-control" id="topik_penyuluh"
                                                        name="topik_penyuluh" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="hari_penyuluh">Hari / Tanggal:</label>
                                                    <input type="text" class="form-control" id="hari_penyuluh"
                                                        name="hari_penyuluh" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="p-2" style="border-width: 3px; border-style: solid;">
                                                    <div class="form-group">
                                                        <label for="peserta_penyuluh">Nama Peserta Penyuluhan :</label>
                                                        <input type="text" class="form-control" id="peserta_penyuluh"
                                                            name="peserta_penyuluh" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="alamat_peserta_penyuluh">Alamat :</label>
                                                        <input type="text" class="form-control"
                                                            id="alamat_peserta_penyuluh" name="alamat_peserta_penyuluh"
                                                            required>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="ttd_peserta_penyuluh">Tanda Tangan :</label>
                                                        <input type="file" class="form-control-file" id="upload_ttd"
                                                            name="upload_ttd" required>
                                                    </div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="mengetahui_penyuluh_agama">Mengetahui Penyuluh
                                                                Agama:</label>
                                                            <select class="form-control" id="mengetahui_penyuluh_agama"
                                                                name="mengetahui_penyuluh_agama" required>
                                                                <option value="Islam">Islam</option>
                                                                <option value="Kristen">Kristen</option>
                                                                <option value="Katolik">Katolik</option>
                                                                <option value="Katolik">Hindu</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="upload_ttd_penyuluh">Upload tanda
                                                                tangan:</label>
                                                            <input type="file" class="form-control-file"
                                                                id="upload_ttd_penyuluh" name="upload_ttd_penyuluh"
                                                                required>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="tempat_dilaksanakan_penyuluhan">Tempat :</label>
                                                            <input type="text" class="form-control"
                                                                id="tempat_dilaksanakan_penyuluhan"
                                                                name="tempat_dilaksanakan_penyuluhan" required></input>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="tanggal_penyuluhan">tanggal, Bulan,
                                                                tahun:</label>
                                                            <input type="text" id="tanggal_penyuluhan"
                                                                name="tanggal_penyuluhan" class="form-control" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="upload_ttd__ketua_kelompok">Upload tanda
                                                                tangan:</label>
                                                            <input type="file" class="form-control-file"
                                                                id="upload_ttd__ketua_kelompok"
                                                                name="upload_ttd__ketua_kelompok" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="nama_ketua_kelompok">Nama Ketua Kelompok
                                                                Penyelenggara :</label>
                                                            <input type="text" class="form-control"
                                                                id="nama_ketua_kelompok" name="nama_ketua_kelompok"
                                                                required></input>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <hr style="border: none; border-bottom: 1px solid black; margin: 20px 0;">


                                    </div>
                                </div>

                            </div>
                            <!-- akhir DAFTAR HADIR PENYULUHAN -->


                            <!-- LAPORAN MINGGUAN ke-1 PENYULUH AGAMA-->
                            <div id="form7">

                                <div class="card">
                                    <div class="card-header">
                                        <h5>LAPORAN MINGGUAN KE-1 PENYULUH AGAMA </h5>
                                    </div>
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="nama_laporan_mingguan">Nama PAI Non PNS :</label>
                                                    <input type="text" class="form-control" id="nama_laporan_mingguan"
                                                        name="nama_laporan_mingguan" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="jabatan_laporan_mingguan">Jabatan :</label>
                                                    <input class="form-control" id="jabatan_laporan_mingguan"
                                                        name="jabatan_laporan_mingguan" required></input>
                                                </div>
                                                <div class="form-group">
                                                    <label for="budang_tugas_mingguan"> Bidang Tugas /
                                                        Spesialisasi:</label>
                                                    <input type="text" class="form-control" id="budang_tugas_mingguan"
                                                        name="budang_tugas_mingguan" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="kecamatan_laporan_mingguan">Kecamatan :</label>
                                                    <input type="text" class="form-control"
                                                        id="kecamatan_laporan_mingguan"
                                                        name="kecamatan_laporan_mingguan" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="kabupaten_laporan_mingguan">Kabupaten / Kota :</label>
                                                    <input type="text" class="form-control"
                                                        id="kabupaten_laporan_mingguan"
                                                        name="kabupaten_laporan_mingguan" required>
                                                </div>
                                                <div>
                                                    <label for="provinsi_laporan_mingguan">Provinsi :</label>
                                                    <input type="text" class="form-control"
                                                        id="provinsi_laporan_mingguan" name="provinsi_laporan_mingguan"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="p-2" style="border-width: 3px; border-style: solid;">
                                                    <h5>Yang Perlu Dilaporkan :</h5>
                                                    <div class="form-group">
                                                        <label for="hari_tanggal_penyuluhan">Hari & Tanggal Penyuluhan
                                                            :</label>
                                                        <input type="text" class="form-control"
                                                            id="hari_tanggal_penyuluhan" name="hari_tanggal_penyuluhan"
                                                            required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="nama_kelompok_mingguan">Nama Kelompok Sasaran
                                                            :</label>
                                                        <input type="text" class="form-control"
                                                            id="nama_kelompok_mingguan" name="nama_kelompok_mingguan"
                                                            required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="topik_materi_penyuluhan_mingguan">Topik Materi
                                                            Penyuluhan :</label>
                                                        <textarea type="text" class="form-control"
                                                            id="topik_materi_penyuluhan_mingguan"
                                                            name="topik_materi_penyuluhan_mingguan" rows="3"
                                                            required></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="maslah_yang_ditemukan">Masalah yang ditemukan
                                                            :</label>
                                                        <textarea type="text" class="form-control"
                                                            id="maslah_yang_ditemukan" name="maslah_yang_ditemukan"
                                                            rows="3" required></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="alternatif_pemecahan">Alternatif Pemecahan:</label>
                                                        <textarea type="text" class="form-control"
                                                            id="alternatif_pemecahan" name="alternatif_pemecahan"
                                                            rows="3" required></textarea>
                                                    </div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="mengetahui_laporan_mingguan">Mengetahui
                                                                :</label>
                                                            <input type="text" class="form-control"
                                                                id="mengetahui_laporan_mingguan"
                                                                name="mengetahui_laporan_mingguan" required></input>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="upload_ttd_mingguan">Upload tanda
                                                                tangan:</label>
                                                            <input type="file" class="form-control-file"
                                                                id="upload_ttd_mingguan" name="upload_ttd_mingguan"
                                                                required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="nama_mengetahui_mingguan">Nama :</label>
                                                            <input type="text" class="form-control"
                                                                id="nama_mengetahui_mingguan"
                                                                name="nama_mengetahui_mingguan" required></input>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="nip_mengetahui_mingguan">Nip :</label>
                                                            <input type="text" class="form-control"
                                                                id="nip_mengetahui_mingguan"
                                                                name="nip_mengetahui_mingguan" required></input>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="tempat_lapporan_mingguan">Tempat :</label>
                                                            <input type="text" class="form-control"
                                                                id="tempat_lapporan_mingguan"
                                                                name="tempat_lapporan_mingguan" required></input>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="tanggal_laporan_mingguan">tanggal, Bulan,
                                                                tahun:</label>
                                                            <input type="text" id="tanggal_laporan_mingguan"
                                                                name="tanggal_laporan_mingguan" class="form-control"
                                                                required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="upload_ttd_laporan_mingguan">Upload tanda
                                                                tangan:</label>
                                                            <input type="file" class="form-control-file"
                                                                id="upload_ttd_laporan_mingguan"
                                                                name="upload_ttd_laporan_mingguan" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="nama_ttd_laporan_mingguan">Nama :</label>
                                                            <input type="text" class="form-control"
                                                                id="nama_ttd_laporan_mingguan"
                                                                name="nama_ttd_laporan_mingguan" required></input>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <hr style="border: none; border-bottom: 1px solid black; margin: 20px 0;">

                                    </div>
                                </div>

                            </div>
                            <!-- akhir LAPORAN MINGGUAN PENYULUH AGAMA-->

                            <!-- LAPORAN MINGGUAN ke-2 PENYULUH AGAMA-->
                            <div id="form8">

                                <div class="card">
                                    <div class="card-header">
                                        <h5>LAPORAN MINGGUAN KE-2 PENYULUH AGAMA </h5>
                                    </div>
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="nama_laporan_mingguan2">Nama PAI Non PNS :</label>
                                                    <input type="text" class="form-control" id="nama_laporan_mingguan2"
                                                        name="nama_laporan_mingguan2" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="jabatan_laporan_mingguan2">Jabatan :</label>
                                                    <input class="form-control" id="jabatan_laporan_mingguan2"
                                                        name="jabatan_laporan_mingguan2" required></input>
                                                </div>
                                                <div class="form-group">
                                                    <label for="budang_tugas_mingguan2"> Bidang Tugas /
                                                        Spesialisasi:</label>
                                                    <input type="text" class="form-control" id="budang_tugas_mingguan2"
                                                        name="budang_tugas_mingguan2" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="kecamatan_laporan_mingguan2">Kecamatan :</label>
                                                    <input type="text" class="form-control"
                                                        id="kecamatan_laporan_mingguan2"
                                                        name="kecamatan_laporan_mingguan2" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="kabupaten_laporan_mingguan2">Kabupaten / Kota :</label>
                                                    <input type="text" class="form-control"
                                                        id="kabupaten_laporan_mingguan2"
                                                        name="kabupaten_laporan_mingguan2" required>
                                                </div>
                                                <div>
                                                    <label for="provinsi_laporan_mingguan2">Provinsi :</label>
                                                    <input type="text" class="form-control"
                                                        id="provinsi_laporan_mingguan2"
                                                        name="provinsi_laporan_mingguan2" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="p-2" style="border-width: 3px; border-style: solid;">
                                                    <h5>Yang Perlu Dilaporkan :</h5>
                                                    <div class="form-group">
                                                        <label for="hari_tanggal_penyuluhan2">Hari & Tanggal Penyuluhan
                                                            :</label>
                                                        <input type="text" class="form-control"
                                                            id="hari_tanggal_penyuluhan2"
                                                            name="hari_tanggal_penyuluhan2" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="nama_kelompok_mingguan2">Nama Kelompok Sasaran
                                                            :</label>
                                                        <input type="text" class="form-control"
                                                            id="nama_kelompok_mingguan2" name="nama_kelompok_mingguan2"
                                                            required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="topik_materi_penyuluhan_mingguan2">Topik Materi
                                                            Penyuluhan :</label>
                                                        <textarea type="text" class="form-control"
                                                            id="topik_materi_penyuluhan_mingguan2"
                                                            name="topik_materi_penyuluhan_mingguan2" rows="3"
                                                            required></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="maslah_yang_ditemukan2">Masalah yang ditemukan
                                                            :</label>
                                                        <textarea type="text" class="form-control"
                                                            id="maslah_yang_ditemukan2" name="maslah_yang_ditemukan2"
                                                            rows="3" required></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="alternatif_pemecahan2">Alternatif Pemecahan:</label>
                                                        <textarea type="text" class="form-control"
                                                            id="alternatif_pemecahan2" name="alternatif_pemecahan2"
                                                            rows="3" required></textarea>
                                                    </div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="mengetahui_laporan_mingguan2">Mengetahui
                                                                :</label>
                                                            <input type="text" class="form-control"
                                                                id="mengetahui_laporan_mingguan2"
                                                                name="mengetahui_laporan_mingguan2" required></input>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="upload_ttd_mingguan2">Upload tanda
                                                                tangan:</label>
                                                            <input type="file" class="form-control-file"
                                                                id="upload_ttd_mingguan2" name="upload_ttd_mingguan2"
                                                                required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="nama_mengetahui_mingguan2">Nama :</label>
                                                            <input type="text" class="form-control"
                                                                id="nama_mengetahui_mingguan2"
                                                                name="nama_mengetahui_mingguan2" required></input>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="nip_mengetahui_mingguan2">Nip :</label>
                                                            <input type="text" class="form-control"
                                                                id="nip_mengetahui_mingguan2"
                                                                name="nip_mengetahui_mingguan2" required></input>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="tempat_lapporan_mingguan2">Tempat :</label>
                                                            <input type="text" class="form-control"
                                                                id="tempat_lapporan_mingguan2"
                                                                name="tempat_lapporan_mingguan2" required></input>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="tanggal_laporan_mingguan2">tanggal, Bulan,
                                                                tahun:</label>
                                                            <input type="text" id="tanggal_laporan_mingguan2"
                                                                name="tanggal_laporan_mingguan2" class="form-control"
                                                                required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="upload_ttd_laporan_mingguan2">Upload tanda
                                                                tangan:</label>
                                                            <input type="file" class="form-control-file"
                                                                id="upload_ttd_laporan_mingguan2"
                                                                name="upload_ttd_laporan_mingguan2" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="nama_ttd_laporan_mingguan2">Nama :</label>
                                                            <input type="text" class="form-control"
                                                                id="nama_ttd_laporan_mingguan2"
                                                                name="nama_ttd_laporan_mingguan2" required></input>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <hr style="border: none; border-bottom: 1px solid black; margin: 20px 0;">

                                    </div>
                                </div>

                            </div>
                            <!-- akhir LAPORAN MINGGUAN  PENYULUH AGAMA-->


                            <!-- LAPORAN MINGGUAN ke-3 PENYULUH AGAMA-->
                            <div id="form9">

                                <div class="card">
                                    <div class="card-header">
                                        <h5>LAPORAN MINGGUAN KE-3 PENYULUH AGAMA </h5>
                                    </div>
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="nama_laporan_mingguan3">Nama PAI Non PNS :</label>
                                                    <input type="text" class="form-control" id="nama_laporan_mingguan3"
                                                        name="nama_laporan_mingguan3" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="jabatan_laporan_mingguan3">Jabatan :</label>
                                                    <input class="form-control" id="jabatan_laporan_mingguan3"
                                                        name="jabatan_laporan_mingguan3" required></input>
                                                </div>
                                                <div class="form-group">
                                                    <label for="budang_tugas_mingguan3"> Bidang Tugas /
                                                        Spesialisasi:</label>
                                                    <input type="text" class="form-control" id="budang_tugas_mingguan3"
                                                        name="budang_tugas_mingguan3" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="kecamatan_laporan_mingguan3">Kecamatan :</label>
                                                    <input type="text" class="form-control"
                                                        id="kecamatan_laporan_mingguan3"
                                                        name="kecamatan_laporan_mingguan3" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="kabupaten_laporan_mingguan3">Kabupaten / Kota :</label>
                                                    <input type="text" class="form-control"
                                                        id="kabupaten_laporan_mingguan3"
                                                        name="kabupaten_laporan_mingguan3" required>
                                                </div>
                                                <div>
                                                    <label for="provinsi_laporan_mingguan3">Provinsi :</label>
                                                    <input type="text" class="form-control"
                                                        id="provinsi_laporan_mingguan3"
                                                        name="provinsi_laporan_mingguan3" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="p-3" style="border-width: 3px; border-style: solid;">
                                                    <h5>Yang Perlu Dilaporkan :</h5>
                                                    <div class="form-group">
                                                        <label for="hari_tanggal_penyuluhan3">Hari & Tanggal Penyuluhan
                                                            :</label>
                                                        <input type="text" class="form-control"
                                                            id="hari_tanggal_penyuluhan3"
                                                            name="hari_tanggal_penyuluhan3" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="nama_kelompok_mingguan3">Nama Kelompok Sasaran
                                                            :</label>
                                                        <input type="text" class="form-control"
                                                            id="nama_kelompok_mingguan3" name="nama_kelompok_mingguan3"
                                                            required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="topik_materi_penyuluhan_mingguan3">Topik Materi
                                                            Penyuluhan :</label>
                                                        <textarea type="text" class="form-control"
                                                            id="topik_materi_penyuluhan_mingguan3"
                                                            name="topik_materi_penyuluhan_mingguan3" rows="3"
                                                            required></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="maslah_yang_ditemukan3">Masalah yang ditemukan
                                                            :</label>
                                                        <textarea type="text" class="form-control"
                                                            id="maslah_yang_ditemukan3" name="maslah_yang_ditemukan3"
                                                            rows="3" required></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="alternatif_pemecahan3">Alternatif Pemecahan:</label>
                                                        <textarea type="text" class="form-control"
                                                            id="alternatif_pemecahan3" name="alternatif_pemecahan3"
                                                            rows="3" required></textarea>
                                                    </div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="mengetahui_laporan_mingguan3">Mengetahui
                                                                :</label>
                                                            <input type="text" class="form-control"
                                                                id="mengetahui_laporan_mingguan3"
                                                                name="mengetahui_laporan_mingguan3" required></input>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="upload_ttd_mingguan3">Upload tanda
                                                                tangan:</label>
                                                            <input type="file" class="form-control-file"
                                                                id="upload_ttd_mingguan3" name="upload_ttd_mingguan3"
                                                                required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="nama_mengetahui_mingguan3">Nama :</label>
                                                            <input type="text" class="form-control"
                                                                id="nama_mengetahui_mingguan3"
                                                                name="nama_mengetahui_mingguan3" required></input>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="nip_mengetahui_mingguan3">Nip :</label>
                                                            <input type="text" class="form-control"
                                                                id="nip_mengetahui_mingguan3"
                                                                name="nip_mengetahui_mingguan3" required></input>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="tempat_lapporan_mingguan3">Tempat :</label>
                                                            <input type="text" class="form-control"
                                                                id="tempat_lapporan_mingguan3"
                                                                name="tempat_lapporan_mingguan3" required></input>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="tanggal_laporan_mingguan3">tanggal, Bulan,
                                                                tahun:</label>
                                                            <input type="text" id="tanggal_laporan_mingguan3"
                                                                name="tanggal_laporan_mingguan3" class="form-control"
                                                                required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="upload_ttd_laporan_mingguan3">Upload tanda
                                                                tangan:</label>
                                                            <input type="file" class="form-control-file"
                                                                id="upload_ttd_laporan_mingguan3"
                                                                name="upload_ttd_laporan_mingguan3" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="nama_ttd_laporan_mingguan3">Nama :</label>
                                                            <input type="text" class="form-control"
                                                                id="nama_ttd_laporan_mingguan3"
                                                                name="nama_ttd_laporan_mingguan3" required></input>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <hr style="border: none; border-bottom: 1px solid black; margin: 20px 0;">

                                    </div>
                                </div>

                            </div>
                            <!-- akhir LAPORAN MINGGUAN  PENYULUH AGAMA-->

                            <!-- LAPORAN MINGGUAN ke-4 PENYULUH AGAMA-->
                            <div id="form10">

                                <div class="card">
                                    <div class="card-header">
                                        <h5>LAPORAN MINGGUAN KE- 4 PENYULUH AGAMA </h5>
                                    </div>
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="nama_laporan_mingguan4">Nama PAI Non PNS :</label>
                                                    <input type="text" class="form-control" id="nama_laporan_mingguan4"
                                                        name="nama_laporan_mingguan4" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="jabatan_laporan_mingguan4">Jabatan :</label>
                                                    <input class="form-control" id="jabatan_laporan_mingguan4"
                                                        name="jabatan_laporan_mingguan4" required></input>
                                                </div>
                                                <div class="form-group">
                                                    <label for="budang_tugas_mingguan4"> Bidang Tugas /
                                                        Spesialisasi:</label>
                                                    <input type="text" class="form-control" id="budang_tugas_mingguan4"
                                                        name="budang_tugas_mingguan4" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="kecamatan_laporan_mingguan4">Kecamatan :</label>
                                                    <input type="text" class="form-control"
                                                        id="kecamatan_laporan_mingguan4"
                                                        name="kecamatan_laporan_mingguan4" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="kabupaten_laporan_mingguan4">Kabupaten / Kota :</label>
                                                    <input type="text" class="form-control"
                                                        id="kabupaten_laporan_mingguan4"
                                                        name="kabupaten_laporan_mingguan4" required>
                                                </div>
                                                <div>
                                                    <label for="provinsi_laporan_mingguan4">Provinsi :</label>
                                                    <input type="text" class="form-control"
                                                        id="provinsi_laporan_mingguan4"
                                                        name="provinsi_laporan_mingguan4" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="p-3" style="border-width: 4px; border-style: solid;">
                                                    <h5>Yang Perlu Dilaporkan :</h5>
                                                    <div class="form-group">
                                                        <label for="hari_tanggal_penyuluhan4">Hari & Tanggal Penyuluhan
                                                            :</label>
                                                        <input type="text" class="form-control"
                                                            id="hari_tanggal_penyuluhan4"
                                                            name="hari_tanggal_penyuluhan4" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="nama_kelompok_mingguan4">Nama Kelompok Sasaran
                                                            :</label>
                                                        <input type="text" class="form-control"
                                                            id="nama_kelompok_mingguan4" name="nama_kelompok_mingguan4"
                                                            required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="topik_materi_penyuluhan_mingguan4">Topik Materi
                                                            Penyuluhan :</label>
                                                        <textarea type="text" class="form-control"
                                                            id="topik_materi_penyuluhan_mingguan4"
                                                            name="topik_materi_penyuluhan_mingguan4" rows="3"
                                                            required></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="maslah_yang_ditemukan4">Masalah yang ditemukan
                                                            :</label>
                                                        <textarea type="text" class="form-control"
                                                            id="maslah_yang_ditemukan4" name="maslah_yang_ditemukan4"
                                                            rows="3" required></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="alternatif_pemecahan4">Alternatif Pemecahan:</label>
                                                        <textarea type="text" class="form-control"
                                                            id="alternatif_pemecahan4" name="alternatif_pemecahan4"
                                                            rows="3" required></textarea>
                                                    </div>
                                                </div>
                                                <div class="row mt-4">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="mengetahui_laporan_mingguan4">Mengetahui
                                                                :</label>
                                                            <input type="text" class="form-control"
                                                                id="mengetahui_laporan_mingguan4"
                                                                name="mengetahui_laporan_mingguan4" required></input>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="upload_ttd_mingguan4">Upload tanda
                                                                tangan:</label>
                                                            <input type="file" class="form-control-file"
                                                                id="upload_ttd_mingguan4" name="upload_ttd_mingguan4"
                                                                required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="nama_mengetahui_mingguan4">Nama :</label>
                                                            <input type="text" class="form-control"
                                                                id="nama_mengetahui_mingguan4"
                                                                name="nama_mengetahui_mingguan4" required></input>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="nip_mengetahui_mingguan4">Nip :</label>
                                                            <input type="text" class="form-control"
                                                                id="nip_mengetahui_mingguan4"
                                                                name="nip_mengetahui_mingguan4" required></input>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="tempat_lapporan_mingguan4">Tempat :</label>
                                                            <input type="text" class="form-control"
                                                                id="tempat_lapporan_mingguan4"
                                                                name="tempat_lapporan_mingguan4" required></input>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="tanggal_laporan_mingguan4">tanggal, Bulan,
                                                                tahun:</label>
                                                            <input type="text" id="tanggal_laporan_mingguan4"
                                                                name="tanggal_laporan_mingguan4" class="form-control"
                                                                required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="upload_ttd_laporan_mingguan4">Upload tanda
                                                                tangan:</label>
                                                            <input type="file" class="form-control-file"
                                                                id="upload_ttd_laporan_mingguan4"
                                                                name="upload_ttd_laporan_mingguan4" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="nama_ttd_laporan_mingguan4">Nama :</label>
                                                            <input type="text" class="form-control"
                                                                id="nama_ttd_laporan_mingguan4"
                                                                name="nama_ttd_laporan_mingguan4" required></input>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <hr style="border: none; border-bottom: 1px solid black; margin: 20px 0;">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>

                            </div>
                            <!-- akhir LAPORAN MINGGUAN  PENYULUH AGAMA-->

                            <!-- LAPORAN SURAT PERNYATAAN MELAKUKAN KEGIATAN PENYULUHAN AGAMA ISLAM-->
                            <div id="form11">

                                <div class="card">
                                    <div class="card-header">
                                        <h5>SURAT PERNYATAAN MELAKUKAN KEGIATAN PENYULUHAN AGAMA ISLAM</h5>
                                    </div>
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="p-2" style="border-width: 3px; border-style: solid;">
                                                    <h5>Yang bertanda tangan di bawah ini : </h5>
                                                    <div class="form-group">
                                                        <label for="nama_penyuluh_agama_islam">Nama :</label>
                                                        <input type="text" class="form-control"
                                                            id="nama_penyuluh_agama_islam"
                                                            name="nama_penyuluh_agama_islam" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="nip_penyuluh_agama_islam">NIP :</label>
                                                        <input class="form-control" id="nip_penyuluh_agama_islam"
                                                            name="nip_penyuluh_agama_islam" required></input>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="pangkat_penyuluh_agama_islam">Pangkat/Golongan
                                                            :</label>
                                                        <input type="text" class="form-control"
                                                            id="pangkat__penyuluh_agama_islam"
                                                            name="pangkat__penyuluh_agama_islam" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="jabatan_penyuluh_agama_islam">Jabatan :</label>
                                                        <input type="text" class="form-control"
                                                            id="jabatan_penyuluh_agama_islam"
                                                            name="jabatan_penyuluh_agama_islam" required>
                                                    </div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="tempat_penyuluh_agama_islam">Tempat :</label>
                                                            <input type="text" class="form-control"
                                                                id="tempat_penyuluh_agama_islam"
                                                                name="tempat_penyuluh_agama_islam" required></input>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="tanggal_penyuluh_agama_islam">tanggal, Bulan,
                                                                tahun:</label>
                                                            <input type="text" id="tanggal_penyuluh_agama_islam"
                                                                name="tanggal_penyuluh_agama_islam" class="form-control"
                                                                required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="upload_ttd_penyuluh_agama_islam">Upload tanda
                                                                tangan:</label>
                                                            <input type="file" class="form-control-file"
                                                                id="upload_ttd_penyuluh_agama_islam"
                                                                name="upload_ttd_penyuluh_agama_islam" required>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="p-2" style="border-width: 3px; border-style: solid;">
                                                    <h5>Menerangkan :</h5>
                                                    <div class="form-group">
                                                        <label for="nama_menerangkan">Nama:</label>
                                                        <input type="text" class="form-control" id="nama_menerangkan"
                                                            name="nama_menerangkan" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="jabatan_menerangkan">Jabatan :</label>
                                                        <input type="text" class="form-control" id="jabatan_menerangkan"
                                                            name="jabatan_menerangkan" required>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="bidang_menerangkan">Bidang Tugas Spesialisasi
                                                            :</label>
                                                        <input type="text" class="form-control" id="bidang_menerangkan"
                                                            name="bidang_menerangkan" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="wilayah_menerangkan">Wilayah Penugasan :</label>
                                                        <input type="text" class="form-control" id="wilayah_menerangkan"
                                                            name="wilayah_menerangkan" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="bidang_agama_menerangkan">Melakukan Kegiatan
                                                            Bimbingan
                                                            Agama </label>
                                                        <select class="form-control" id="bidang_agama_menerangkan"
                                                            name="bidang_agama_menerangkan" required>
                                                            <option value="Islam">Islam</option>
                                                            <option value="Kristen">Kristen</option>
                                                            <option value="Katolik">Katolik</option>
                                                            <option value="Katolik">Hindu</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="jumlah_menerangkan">Jumlah Kegiatan Penyuluhan
                                                            :</label>
                                                        <input type="text" class="form-control" id="jumah_menerangkan"
                                                            name="jumah_menerangkan" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="bulan_menerangkan">Bulan :</label>
                                                        <input type="text" class="form-control" id="bulan_menerangkan"
                                                            name="bulan_menerangkan" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="tahun_menerangkan">Tahun :</label>
                                                        <input type="text" class="form-control" id="tahun_menerangkan"
                                                            name="tahun_menerangkan" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr style="border: none; border-bottom: 1px solid black; margin: 20px 0;">

                                    </div>
                                </div>

                            </div>
                            <!-- akhir SURAT PERNYATAAN MELAKUKAN KEGIATAN PENYULUHAN AGAMA ISLAM-->



                            <!-- DOKUMENTASI KEGIATAN-->
                            <div id="form12">

                                <div class="card">
                                    <div class="card-header">
                                        <h5>DOKUMENTASI KEGIATAN</h5>
                                    </div>
                                    <div class="card-body">
                                        <!-- <form> -->
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="kegiatan1">Upload Foto Kegiatan:</label>
                                                    <input type="file" class="form-control-file" id="kegiatan1"
                                                        name="kegiatan1" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="kegiatan2">Upload Foto Kegiatan:</label>
                                                    <input type="file" class="form-control-file" id="kegiatan2"
                                                        name="kegiatan2" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="kegiatan3">Upload Foto Kegiatan:</label>
                                                    <input type="file" class="form-control-file" id="kegiatan3"
                                                        name="kegiatan3" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="kegiatan4">Upload Foto Kegiatan:</label>
                                                    <input type="file" class="form-control-file" id="kegiatan4"
                                                        name="kegiatan4" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="kegiatan5">Upload Foto Kegiatan:</label>
                                                    <input type="file" class="form-control-file" id="kegiatan5"
                                                        name="kegiatan5" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="kegiatan6">Upload Foto Kegiatan:</label>
                                                    <input type="file" class="form-control-file" id="kegiatan6"
                                                        name="kegiatan6" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="kegiatan7">Upload Foto Kegiatan:</label>
                                                    <input type="file" class="form-control-file" id="kegiatan7"
                                                        name="kegiatan7" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="kegiatan8">Upload Foto Kegiatan:</label>
                                                    <input type="file" class="form-control-file" id="kegiatan8"
                                                        name="kegiatan8" required>
                                                </div>

                                            </div>
                                        </div>
                                        <hr style="border: none; border-bottom: 1px solid black; margin: 20px 0;">
                                        <button type="submit" class="btn btn-primary">Submit</button>
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