<?php
session_start();

if ($_SESSION['level'] == "") {
    header("location: login.php?pesan=gagal");
}

if (!isset($_SESSION['temp_data'])) {
    /* header('Location: form1.php'); */
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    // ambil data dari form
    $nama_ayah = $_POST['nama_ayah'];
    $tahun_lahir_ayah = $_POST['tahun_lahir_ayah'];
    $pendidikan_ayah = $_POST['pendidikan_ayah'];
    $pekerjaan_ayah = $_POST['pekerjaan_ayah'];
    $penghasilan_ayah = $_POST['penghasilan_ayah'];
    $berkebutuhan_khusus_ayah = isset($_POST['berkebutuhan_khusus_ayah']) ? $_POST['berkebutuhan_khusus_ayah'] : '';

    $nama_ibu = $_POST['nama_ibu'];
    $tahun_lahir_ibu = $_POST['tahun_lahir_ibu'];
    $pendidikan_ibu = $_POST['pendidikan_ibu'];
    $pekerjaan_ibu = $_POST['pekerjaan_ibu'];
    $penghasilan_ibu = $_POST['penghasilan_ibu'];
    $berkebutuhan_khusus_ibu = isset($_POST['berkebutuhan_khusus_ibu']) ? $_POST['berkebutuhan_khusus_ibu'] : '';

    // simpan data pada session
    $_SESSION['temp_data']['nama_ayah'] = $nama_ayah;
    $_SESSION['temp_data']['tahun_lahir_ayah'] = $tahun_lahir_ayah;
    $_SESSION['temp_data']['pendidikan_ayah'] = $pendidikan_ayah;
    $_SESSION['temp_data']['pekerjaan_ayah'] = $pekerjaan_ayah;
    $_SESSION['temp_data']['penghasilan_ayah'] = $penghasilan_ayah;
    $_SESSION['temp_data']['berkebutuhan_khusus_ayah'] = $berkebutuhan_khusus_ayah;

    $_SESSION['temp_data']['nama_ibu'] = $nama_ibu;
    $_SESSION['temp_data']['tahun_lahir_ibu'] = $tahun_lahir_ibu;
    $_SESSION['temp_data']['pendidikan_ibu'] = $pendidikan_ibu;
    $_SESSION['temp_data']['pekerjaan_ibu'] = $pekerjaan_ibu;
    $_SESSION['temp_data']['penghasilan_ibu'] = $penghasilan_ibu;
    $_SESSION['temp_data']['berkebutuhan_khusus_ibu'] = $berkebutuhan_khusus_ibu;

    // mengarahkan pengguna ke form berikutnya
    header('Location: action/proses.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

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

    <h1 align="center" class="fw-bold">FORMULIR PESERTA DIDIK</h1>

    <div class="container border border-3 mb-5 border-dark" style="background-color:white; border-radius:25px;">
        <form action="" method="post">

            <div class="row mb-3 mt-4">
                <div class="col-md-4 align-self-center">
                    34. Nama Ayah Kandung
                </div>
                <div class="col-md-8">
                    <input type="text" class="form-control" id="nama_ayah" placeholder="Nama Lengkap" name="nama_ayah" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4 align-self-center">
                    35. Tanggal Lahir Ayah
                </div>
                <div class="col-md-8">
                    <input class="form-control" id="tahun_lahir_ayah" type="date" name="tahun_lahir_ayah" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4 align-self-center">
                    36. Pendidikan Ayah
                </div>
                <div class="col-md-8">
                    <select class="form-select" name="pendidikan_ayah" required>
                        <option selected disabled value="">Pilih...</option>
                        <option value="Tidak Sekolah">Tidak Sekolah</option>
                        <option value="Putus SD">Putus SD</option>
                        <option value="SD Sederajat">SD Sederajat</option>
                        <option value="SMP Sederajat">SMP Sederajat</option>
                        <option value="SMA Sederajat">SMA Sederajat</option>
                        <option value="D1">D1</option>
                        <option value="D2">D2</option>
                        <option value="D3">D3</option>
                        <option value="S1">S1</option>
                        <option value="S2">S2</option>
                        <option value="S3">S3</option>
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4 align-self-center">
                    37. Pekerjaan Ayah
                </div>
                <div class="col-md-8">
                    <select class="form-select" name="pekerjaan_ayah" required>
                        <option selected disabled value="">Pilih...</option>
                        <option value="Tidak Bekerja">Tidak Bekerja</option>
                        <option value="Nelayan">Nelayan</option>
                        <option value="Petani">Petani</option>
                        <option value="Peternak">Peternak</option>
                        <option value="PNS/TNI/POLRI">PNS/TNI/POLRI</option>
                        <option value="Karyawan Swasta">Karyawan Swasta</option>
                        <option value="Pedagang Kecil">Pedagang Kecil</option>
                        <option value="Pedagang Besar">Pedagang Besar</option>
                        <option value="Wiraswasta">Wiraswasta</option>
                        <option value="Wirausaha">Wirausaha</option>
                        <option value="Buruh">Buruh</option>
                        <option value="Pensiunan">Pensiunan</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </div>
            </div>

            <div class="row mb-3 mt-3">
                <div class="col-md-4 align-self-center">
                    38. Penghasilan Ayah
                </div>
                <div class="col-md-8">
                    <select class="form-select" name="penghasilan_ayah" required>
                        <option selected disabled value="">Pilih...</option>
                        <option value="< 500.000">
                            < 500.000</option>
                        <option value="500.000 - 999.999">500.000 - 999.999</option>
                        <option value="1 Juta - 1.999.999">1 Juta - 1.999.999</option>
                        <option value=" 2 Juta - 4.999.999"> 2 Juta - 4.999.999</option>
                        <option value="5 Juta - 20 Juta">5 Juta - 20 Juta</option>
                        <option value="Lebih dari 20 Juta">Lebih dari 20 Juta</option>
                    </select>
                </div>
            </div>

            <div class="row mb-3 mt-3">
                <div class="col-md-4 align-self-center">
                    39. Berkebutuhan Khusus Ayah
                </div>
                <div class="col-md-8">
                    <select class="form-select" name="berkebutuhan_khusus_ayah" required>
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

            <hr>


            <div class="row mb-3">
                <div class="col-md-4 align-self-center">
                    40. Nama Ibu Kandung
                </div>
                <div class="col-md-8">
                    <input type="text" class="form-control" id="nama_ibu" placeholder="Nama Lengkap" name="nama_ibu" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4 align-self-center">
                    41. Tanggal Lahir Ibu
                </div>
                <div class="col-md-8">
                    <input class="form-control" id="tahun_lahir_ibu" type="date" name="tahun_lahir_ibu" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4 align-self-center">
                    42. Pendidikan Ibu
                </div>
                <div class="col-md-8">
                    <select class="form-select" name="pendidikan_ibu" required>
                        <option selected disabled value="">Pilih...</option>
                        <option value="Tidak Sekolah">Tidak Sekolah</option>
                        <option value="Putus SD">Putus SD</option>
                        <option value="SD Sederajat">SD Sederajat</option>
                        <option value="SMP Sederajat">SMP Sederajat</option>
                        <option value="SMA Sederajat">SMA Sederajat</option>
                        <option value="D1">D1</option>
                        <option value="D2">D2</option>
                        <option value="D3">D3</option>
                        <option value="S1">S1</option>
                        <option value="S2">S2</option>
                        <option value="S3">S3</option>
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4 align-self-center">
                    43. Pekerjaan Ibu
                </div>
                <div class="col-md-8">
                    <select class="form-select" name="pekerjaan_ibu" required>
                        <option selected disabled value="">Pilih...</option>
                        <option value="Tidak Bekerja">Tidak Bekerja</option>
                        <option value="Nelayan">Nelayan</option>
                        <option value="Petani">Petani</option>
                        <option value="Peternak">Peternak</option>
                        <option value="PNS/TNI/POLRI">PNS/TNI/POLRI</option>
                        <option value="Karyawan Swasta">Karyawan Swasta</option>
                        <option value="Pedagang Kecil">Pedagang Kecil</option>
                        <option value="Pedagang Besar">Pedagang Besar</option>
                        <option value="Wiraswasta">Wiraswasta</option>
                        <option value="Wirausaha">Wirausaha</option>
                        <option value="Buruh">Buruh</option>
                        <option value="Pensiunan">Pensiunan</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </div>
            </div>

            <div class="row mb-3 mt-3">
                <div class="col-md-4 align-self-center">
                    44. Penghasilan Ibu
                </div>
                <div class="col-md-8">
                    <select class="form-select" name="penghasilan_ibu" required>
                        <option selected disabled value="">Pilih...</option>
                        <option value="< 500.000">
                            < 500.000</option>
                        <option value="500.000 - 999.999">500.000 - 999.999</option>
                        <option value="1 Juta - 1.999.999 Juta">1 Juta - 1.999.999 Juta</option>
                        <option value="2 Juta - 4.999.999 Juta"> 2 Juta - 4.999.999 Juta</option>
                        <option value="5 Juta - 20 Juta">5 Juta - 20 Juta</option>
                        <option value="Lebih dari 20 Juta">Lebih dari 20 Juta</option>
                    </select>
                </div>
            </div>

            <div class="row mb-3 mt-3">
                <div class="col-md-4 align-self-center">
                    45. Berkebutuhan Khusus Ibu
                </div>
                <div class="col-md-8">
                    <select class="form-select" name="berkebutuhan_khusus_ibu" required>
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