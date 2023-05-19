<?php

// memulai sesi
session_start();

// mengecek apakah pengguna telah mengisi form pertama
if (!isset($_SESSION['temp_data'])) {
    header('Location: form1.php');
    exit;
}

// mengecek apakah form telah di-submit
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    // mengambil data dari form
    $nama_lengkap = $_POST['nama_lengkap'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $nisn = $_POST['nisn'];
    $nik = $_POST['nik'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $agama = $_POST['agama'];
    $berkebutuhan_khusus = $_POST['berkebutuhan_khusus'];
    $alamat_jalan = $_POST['alamat_jalan'];
    $rt = $_POST['rt'];
    $rw = $_POST['rw'];
    $nama_dusun = $_POST['nama_dusun'];
    $nama_kelurahan_desa = $_POST['nama_kelurahan_desa'];
    $kecamatan = $_POST['kecamatan'];
    $kode_pos = $_POST['kode_pos'];
    $tempat_tinggal = $_POST['tempat_tinggal'];
    $moda_transportasi = $_POST['moda_transportasi'];
    $nomor_hp = $_POST['nomor_hp'];
    $nomor_telpon = $_POST['nomor_telpon'];
    $email_pribadi = $_POST['email_pribadi'];
    $penerima_kps_pkh_kip = $_POST['penerima_kps_pkh_kip'];
    $no_kps_pkh_kip = $_POST['no_kps_pkh_kip'];
    $kewarganegaraan = $_POST['kewarganegaraan'];


    // validasi data kosong
    if (empty($nama_lengkap) || empty($jenis_kelamin) || empty($nisn) || empty($nik) || empty($tanggal_lahir) || empty($tempat_lahir) || empty($agama) || empty($berkebutuhan_khusus) || empty($alamat_jalan) || empty($rt) || empty($rw) || empty($nama_dusun) || empty($nama_kelurahan_desa) || empty($kecamatan) || empty($kode_pos) || empty($tempat_tinggal) || empty($moda_transportasi) || empty($nomor_hp) || empty($nomor_telpon) || empty($email_pribadi) || empty($penerima_kps_pkh_kip) || empty($no_kps_pkh_kip) || empty($kewarganegaraan)) {
        // menampilkan pesan error dan mengembalikan ke halaman sebelumnya
        echo "Mohon lengkapi semua data sebelum melanjutkan.";
        header('Location: form2.php');
        exit;
    } else {
        // menyimpan data pada sesi
        $_SESSION['temp_data']['nama_lengkap'] = $nama_lengkap;
        $_SESSION['temp_data']['jenis_kelamin'] = $jenis_kelamin;
        $_SESSION['temp_data']['nisn'] = $nisn;
        $_SESSION['temp_data']['nik'] = $nik;
        $_SESSION['temp_data']['tanggal_lahir'] = $tanggal_lahir;
        $_SESSION['temp_data']['tempat_lahir'] = $tempat_lahir;
        $_SESSION['temp_data']['agama'] = $agama;
        $_SESSION['temp_data']['berkebutuhan_khusus'] = $berkebutuhan_khusus;
        $_SESSION['temp_data']['alamat_jalan'] = $alamat_jalan;
        $_SESSION['temp_data']['rt'] = $rt;
        $_SESSION['temp_data']['rw'] = $rw;
        $_SESSION['temp_data']['nama_dusun'] = $nama_dusun;
        $_SESSION['temp_data']['nama_kelurahan_desa'] = $nama_kelurahan_desa;
        $_SESSION['temp_data']['kecamatan'] = $kecamatan;
        $_SESSION['temp_data']['kode_pos'] = $kode_pos;
        $_SESSION['temp_data']['tempat_tinggal'] = $tempat_tinggal;
        $_SESSION['temp_data']['moda_transportasi'] = $moda_transportasi;
        $_SESSION['temp_data']['nomor_hp'] = $nomor_hp;
        $_SESSION['temp_data']['nomor_telpon'] = $nomor_telpon;
        $_SESSION['temp_data']['email_pribadi'] = $email_pribadi;
        $_SESSION['temp_data']['penerima_kps_pkh_kip'] = $penerima_kps_pkh_kip;
        $_SESSION['temp_data']['no_kps_kph_kip'] = $no_kps_pkh_kip;
        $_SESSION['temp_data']['kewarganegaraan'] = $kewarganegaraan;

        // mengarahkan pengguna ke form berikutnya
        header('Location: form3.php');
        exit;
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/pper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <title>Pengisian Formulir</title>
</head>

<style>
    #border {
        box-shadow: rgba(0, 0, 0, 0.09) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;
    }

    body {
        background-image: url(img/bg.jpg);
        background-size: cover;
    }
</style>

<body>
    <!-- Cek apakah sudah login -->
    <?php
    if (!$_SESSION['login']) {
        header("location:login.php?pesan=belum_login");
    }
    ?>
    <h1 align="center" class="fw-bold">FORMULIR PESERTA DIDIK</h1>

    <div class="container border border-3 mb-5 border-dark" style="background-color:white; border-radius:25px;">
        <form action="" method="post">
            <div class=" mt-2">
                <p> DATA PRIBADI </p>
            </div>

            <div class="row mb-3">
                <div class="col-md-4 align-self-center">
                    11. Nama Lengkap
                </div>
                <div class="col-md-8">
                    <input type="text" class="form-control" id="nama_lengkap" placeholder="Nama Lengkap" name="nama_lengkap" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
            </div>

            <div class="row mb-3 mt-3">
                <div class="col-md-4 align-self-center">
                    12. Jenis Kelamin :
                </div>
                <div class="col-md-8">
                    <div class="form-check form-check-inline ">
                        <input type="radio" class="form-check-input" id="validationFormCheck2" name="jenis_kelamin" value="Laki-Laki" required>
                        <label class="form-check-label radio-inline" for="validationFormCheck2">Laki-Laki</label>
                    </div>
                    <div class="form-check form-check-inline radio-inline">
                        <input type="radio" class="form-check-input" id="validationFormCheck3" name="jenis_kelamin" value="Perempuan" required>
                        <label class="form-check-label " for="validationFormCheck3">Perempuan</label>
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4 align-self-center">
                    13. NISN
                </div>
                <div class="col-md-8">
                    <input type="text" class="form-control" id="nisn" placeholder="NISN" name="nisn" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4 align-self-center">
                    14. NIK
                </div>
                <div class="col-md-8">
                    <input type="text" class="form-control" id="nik" placeholder="NIK" name="nik" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4 align-self-center">
                    15. Tanggal Lahir
                </div>
                <div class="col-md-8">
                    <input class="form-control" id="tanggal_lahir" type="date" name="tanggal_lahir" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4 align-self-center">
                    16. Tempat Lahir
                </div>
                <div class="col-md-8">
                    <input type="text" class="form-control" id="tempat_lahir" placeholder="Tempat Lahir" name="tempat_lahir" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
            </div>


            <div class="row mb-3">
                <div class="col-md-4 align-self-center">
                    17. Agama
                </div>
                <div class="col-md-8">
                    <select class="form-select" name="agama" required>
                        <option selected disabled value="">Pilih...</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen/Protestan">Kristen/Protestan</option>
                        <option value="Katholik">Katholik</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Budha">Budha</option>
                        <option value="Khong Hu Chu">Khong Hu Chu</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4 align-self-center">
                    18. Berkebutuhan Khusus
                </div>
                <div class="col-md-8">
                    <select class="form-select" name="berkebutuhan_khusus" required>
                        <option selected disabled value="">Pilih...</option>
                        <option value="Tidak">Tidak</option>
                        <option value="Netra">Netra</option>
                        <option value="Rungu">Rungu</option>
                        <option value="Grahita Ringan">Grahita Ringan</option>
                        <option value="Grahita Sedang">Grahita Sedang</option>
                        <option value="Daksa Ringan">Daksa Ringan</option>
                        <option value="Daksa Sedang">Daksa Sedang</option>
                        <option value="Laras">Laras</option>
                        <option value="Wicara">Wicara</option>
                        <option value="Tuna Ganda">Tuna Ganda</option>
                        <option value="Hiper Aktif">Hiper Aktif</option>
                        <option value="Cerdas Istimewa">Cerdas Istimewa</option>
                        <option value="Bakat Istimewa">Bakat Istimewa</option>
                        <option value="Kesulitan Belajar">Kesulitan Belajar</option>
                        <option value="Narkoba">Narkoba</option>
                        <option value="Indigo">Indigo</option>
                        <option value="Down Syndrome">Down Syndrome</option>
                        <option value="Autis">Autis</option>
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4 align-self-center">
                    19. Alamat Jalan
                </div>
                <div class="col-md-8">
                    <input type="text" class="form-control" id="alamat_jalan" placeholder="Alamat Jalan" name="alamat_jalan" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4 align-self-center">
                    20. RT
                </div>
                <div class="col-md-8">
                    <input type="text" class="form-control" id="rt" placeholder="RT" name="rt" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4 align-self-center">
                    21. RW
                </div>
                <div class="col-md-8">
                    <input type="text" class="form-control" id="rw" placeholder="RW" name="rw" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4 align-self-center">
                    22. Nama Dusun
                </div>
                <div class="col-md-8">
                    <input type="text" class="form-control" id="nama_dusun" placeholder="Nama Dusun" name="nama_dusun" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4 align-self-center">
                    23. Nama Kelurahan / Desa
                </div>
                <div class="col-md-8">
                    <input type="text" class="form-control" id="nama_kelurahan_desa" placeholder=" Nama Kelurahan / Desa" name="nama_kelurahan_desa" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4 align-self-center">
                    24. Kecamatan
                </div>
                <div class="col-md-8">
                    <input type="text" class="form-control" id="kecamatan" placeholder="Kecamatan" name="kecamatan" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4 align-self-center">
                    25. Kode Pos
                </div>
                <div class="col-md-8">
                    <input type="text" class="form-control" id="kode_pos" placeholder="Kode Pos" name="kode_pos" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4 align-self-center">
                    26. Tempat Tinggal
                </div>
                <div class="col-md-8">
                    <select class="form-select" name="tempat_tinggal" required>
                        <option selected disabled value="">Pilih...</option>
                        <option value="Bersama Orang Tua">Bersama Orang Tua</option>
                        <option value="Wali">Wali</option>
                        <option value="Kos">Kos</option>
                        <option value="Asrama">Asrama</option>
                        <option value="Panti Asuhan">Panti Asuhan</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </div>
            </div>


            <div class="row mb-3">
                <div class="col-md-4 align-self-center">
                    27. Moda Transportasi
                </div>
                <div class="col-md-8">
                    <select class="form-select" name="moda_transportasi" required>
                        <option selected disabled value="">Pilih...</option>
                        <option value="Jalan Kaki">Jalan Kaki</option>
                        <option value="Kendaraan Pribadi">Kendaraan Pribadi</option>
                        <option value="Kendaraan Umum">Kendaraan Umum</option>
                        <option value="Jempuran Sekolah">Jempuran Sekolah</option>
                        <option value="Kereta Api">Kereta Api</option>
                        <option value="Ojek">Ojek</option>
                        <option value="Ando/Bendi/Dokar/Becak">Ando/Bendi/Dokar/Becak</option>
                        <option value="Perahu Penyebrangan/Rakit/Gelek">Perahu Penyebrangan/Rakit/Gelek</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4 align-self-center">
                    28. Nomor HP
                </div>
                <div class="col-md-8">
                    <input type="text" class="form-control" id="nomor_hp" placeholder="Nomor Hp" name="nomor_hp" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4 align-self-center">
                    29. Nomor Telepon
                </div>
                <div class="col-md-8">
                    <input type="text" class="form-control" id="nomor_telpon" placeholder="Nomor Telpon" name="nomor_telpon" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4 align-self-center">
                    30. Email Pribadi
                </div>
                <div class="col-md-8">
                    <input type="text" class="form-control" id="email_pribadi" placeholder="Email Pribadi" name="email_pribadi" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
            </div>

            <div class="row mb-3 mt-3">
                <div class="col-md-4 align-self-center">
                    31. Penerima KPS/PKH/KIP
                </div>
                <div class="col-md-8">
                    <div class="form-check form-check-inline ">
                        <input type="radio" class="form-check-input" id="penerima_kps_pkh_kip" name="penerima_kps_pkh_kip" value="Ya">
                        <label class="form-check-label" for="penerima_kps_pkh_kip">Ya</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="penerima_kps_pkh_kip" name="penerima_kps_pkh_kip" value="Tidak">
                        <label class="form-check-label" for="penerima_kps_pkh_kip">Tidak</label>
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4 align-self-center">
                    32. No. KPS/PKH/KIP
                </div>
                <div class="col-md-8">
                    <input type="text" class="form-control" id="no_kps_pkh_kip" placeholder="KPS/PKH/KIP" name="no_kps_pkh_kip">
                    <label style="font-style:italic; font-size:small">*) Apabila Menerima </label>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
            </div>

            <div class="row mb-3 mt-3">
                <div class="col-md-4">
                    33. Kewarganegaraan
                </div>
                <div class="col-md-8">
                    <div class="form-check form-check-inline ">
                        <input type="radio" class="form-check-input" id="kewarganegaraan" name="kewarganegaraan" value="Indonesia" required>
                        <label class="form-check-label" for="kewarganegaraan">Indonesia</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="kewarganegaraan" name="kewarganegaraan" value="WNA" required>
                        <label class="form-check-label" for="kewarganegaraan">WNA</label>
                    </div>
                </div>
            </div>

            <div class="text-end pb-4">
                <a href="dashboard.php"><button class="btn btn-warning mt-2 mb-2" type="" value="" onclick="window.history.back();">Kembali</button></a>
                <button class=" btn btn-danger mt-2 mb-2" type="reset" value="reset">Reset</button>
                <button class="btn btn-primary  mt-2 mb-2" type="submit" value="next" name="submit">Simpan & Lanjut</button>
            </div>
        </form>
    </div>
    <br>
</body>

</html>