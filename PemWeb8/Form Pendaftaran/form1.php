<?php

session_start();

$_SESSION['temp_data'] = array(
    'jenis_pendaftaran' => '',
    'tanggal_masuk' => '',
    'nis' => '',
    'nomor_peserta_ujian' => '',
    'paud' => '',
    'tk' => '',
    'no_seri_skhun' => '',
    'no_ijazah' => '',
    'hobi' => '',
    'cita_cita' => '',
    'nama_lengkap' => '',
    'jenis_kelamin' => '',
    'nisn' => '',
    'nik' => '',
    'tanggal_lahir' => '',
    'tempat_lahir' => '',
    'agama' => '',
    'berkebutuhan_khusus' => '',
    'alamat_jalan' => '',
    'rt' => '',
    'rw' => '',
    'nama_dusun' => '',
    'nama_kelurahan_desa' => '',
    'kecamatan' => '',
    'kode_pos' => '',
    'tempat_tinggal' => '',
    'moda_transportasi' => '',
    'nomor_hp' => '',
    'nomor_telepon' => '',
    'email_pribadi' => '',
    'penerima_kps_pkh_kip' => '',
    'no_kps_pkh_kip' => '',
    'kewarganegaraan' => '',
    'nama_ayah' => '',
    'tahun_lahir_ayah' => '',
    'pendidikan_ayah' => '',
    'pekerjaan_ayah' => '',
    'penghasilan_ayah' => '',
    'berkebutuhan_khusus_ayah' => '',
    'nama_ibu' => '',
    'tahun_lahir_ibu' => '',
    'pendidikan_ibu' => '',
    'pekerjaan_ibu' => '',
    'penghasilan_ibu' => '',
    'berkebutuhan_khusus_ibu' => ''
);

// mengecek apakah form telah di-submit
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    // mengambil data dari form    
    $jenis_pendaftaran = $_POST['jenis_pendaftaran'];
    $tanggal_masuk = $_POST['tanggal_masuk'];
    $nis = $_POST['nis'];
    $nomor_peserta_ujian = $_POST['nomor_peserta_ujian'];
    $paud = isset($_POST['paud']) ? $_POST['paud'] : '';
    $tk = isset($_POST['tk']) ? $_POST['tk'] : '';
    $no_seri_skhun = $_POST['no_seri_skhun'];
    $no_ijazah = $_POST['no_ijazah'];
    $hobi = $_POST['hobi'];
    $cita_cita = $_POST['cita_cita'];

    // memeriksa apakah ada data yang kosong
    if (empty($jenis_pendaftaran) || empty($tanggal_masuk) || empty($nis) || empty($nomor_peserta_ujian) || empty($no_seri_skhun) || empty($no_ijazah) || empty($hobi) || empty($cita_cita)) {
        // menampilkan pesan kesalahan jika ada data yang kosong
        echo "Mohon lengkapi semua data sebelum melanjutkan.";
    } else {
        // menyimpan data pada sesi    
        $_SESSION['temp_data']['jenis_pendaftaran'] = $jenis_pendaftaran;
        $_SESSION['temp_data']['tanggal_masuk'] = $tanggal_masuk;
        $_SESSION['temp_data']['nis'] = $nis;
        $_SESSION['temp_data']['nomor_peserta_ujian'] = $nomor_peserta_ujian;
        $_SESSION['temp_data']['paud'] = $paud;
        $_SESSION['temp_data']['tk'] = $tk;
        $_SESSION['temp_data']['no_seri_skhun'] = $no_seri_skhun;
        $_SESSION['temp_data']['no_ijazah'] = $no_ijazah;
        $_SESSION['temp_data']['hobi'] = $hobi;
        $_SESSION['temp_data']['cita_cita'] = $cita_cita;

        // mengarahkan pengguna ke form berikutnya
        header('Location: form2.php');
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
    <link rel="stylesheet" href="css/style.css" type="text/css">
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

    <h1 align="center" class="fw-bold mt-5">FORMULIR PESERTA DIDIK</h1>

    <div class="container border border-3 mb-5 border-dark" style="background-color:white; border-radius:25px;">
        <form class="need-validation" action="" method="post">

            <div class="row mb-3 mt-3">
                <div class="col-md-4">
                    1. Jenis Pendaftaran :
                </div>
                <div class="col-md-8">
                    <div class="form-check form-check-inline ">
                        <input type="radio" class="form-check-input" id="jenis_pendaftaran" name="jenis_pendaftaran" value="Siswa Baru" required>
                        <label class="form-check-label radio-inline" for="jenis_pendaftaran">Siswa Baru</label>
                    </div>
                    <div class="form-check form-check-inline radio-inline">
                        <input type="radio" class="form-check-input" id="jenis_pendaftaran" name="jenis_pendaftaran" value="Pindahan" required>
                        <label class="form-check-label " for="jenis_pendaftaran">Pindahan</label>
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4 ">
                    2. Tanggal Masuk Sekolah
                </div>
                <div class="col-md-8">
                    <input class="form-control" type="date" name="tanggal_masuk" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4 align-self-center">
                    3. NIS
                </div>
                <div class="col-md-8">
                    <input type="text" class="form-control" id="nis" placeholder="Masukkan NIS" name="nis" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4 align-self-center">
                    4. Nomor Peserta Ujian
                </div>
                <div class="col-md-8">
                    <input type="text" class="form-control mt-3" id="npu" placeholder="Masukkan Nomor Peserta Ujian" name="nomor_peserta_ujian" required>
                    <label style="font-style:italic; font-size:small">* Nomor peserta Ujian adalah 20 Digit yang tertera dalam sertifikat <span style="color: red; font-weight: bold; font-style:italic;">SKHUN SD</span>, diisi bagi peserta didik jenjang SMP </label>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
            </div>

            <div class="row mb-3 mt-3">
                <div class="col-md-4">
                    5. Apakah Pernah PAUD ?
                </div>
                <div class="col-md-8">
                    <div class="form-check form-check-inline ">
                        <input type="radio" class="form-check-input" id="paud" name="paud" value="Ya" required>
                        <label class="form-check-label" for="paud">Ya</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="paud" name="paud" value="Tidak" required>
                        <label class="form-check-label" for="paud">Tidak</label>
                    </div>
                </div>
            </div>

            <div class="row mb-3 mt-3">
                <div class="col-md-4">
                    6. Apakah Pernah TK ?
                </div>
                <div class="col-md-8">
                    <div class="form-check form-check-inline ">
                        <input type="radio" class="form-check-input" id="tk" name="tk" value="Ya" required>
                        <label class="form-check-label" for="tk">Ya</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="tk" name="tk" value="Tidak" required>
                        <label class="form-check-label" for="tk">Tidak</label>
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4 align-self-center">
                    7. No. Seri SKHUN Sebelumnya
                </div>
                <div class="col-md-8">
                    <input type="text" class="form-control mt-3" id="skhun" placeholder="No. Seri SKHUN Sebelumnya" name="no_seri_skhun" required>
                    <label style="font-style:italic; font-size:small">Diisi 16 Digit yang tertera di <span style="color: red; font-weight: bold; font-style:italic;"> SKHUN SD </span> - diisi Bagi PD Jenjang SMP</span> </label>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4 align-self-center">
                    8. No. Seri Ijazah Sebelumnya
                </div>
                <div class="col-md-8">
                    <input type="text" class="form-control mt-3" id="ijazah" placeholder="No. Seri Ijazah Sebelumnya" name="no_ijazah" required>
                    <label style="font-style:italic; font-size:small">Diisi 16 Digit yang tertera di <span style="color: red; font-weight: bold; font-style:italic;"> Ijazah SD </span> - diisi Bagi PD Jenjang SMP</span></label>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4 align-self-center">
                    9. Hobi
                </div>
                <div class="col-md-8">
                    <select class="form-select" name="hobi" required>
                        <option selected disabled value="">Pilih...</option>
                        <option value="Olah Raga">Olah Raga</option>
                        <option value="Kesenian">Kesenian</option>
                        <option value="Membaca">Membaca</option>
                        <option value="Menulis">Menulis</option>
                        <option value="Travelin">Travelin</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4 align-self-center">
                    10. Cita-Cita
                </div>
                <div class="col-md-8">
                    <select class="form-select" name="cita_cita" required>
                        <option selected disabled value="">Pilih...</option>
                        <option value="PNS">PNS</option>
                        <option value="TNI/POLRI">TNI/POLRI</option>
                        <option value="Guru/Dosen">Guru/Dosen</option>
                        <option value="Dokter">Dokter</option>
                        <option value="Politikus">Politikus</option>
                        <option value="Seni/Lukis/Artis/Sejenis">Seni/Lukis/Artis/Sejenis</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </div>
            </div>
            <div class="text-end pb-4">
                <a href="dashboard.php"><button class="btn btn-warning mt-2 mb-2" type="" value="" onclick="window.history.back();">Kembali</button></a>
                <button class=" btn btn-danger mt-2 mb-2" type="reset" value="reset">Reset</button>
                <button class="btn btn-primary  mt-2 mb-2" type="submit" value="next" name="submit">Simpan & Lanjut</button>
            </div>
        </form>
    </div>
</body>

</html>