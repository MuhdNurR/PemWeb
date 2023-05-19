<?php
include_once("koneksi.php");

session_start();
if (!isset($_SESSION['login'])) {
    header("location: login.php");
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir pendaftaran</title>

    <!-- import bootsrap css via cdn  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .warning {
            color: #FF0000;
        }
    </style>
</head>

<body>

    <?php
    // varibel isi inputan 
    {
        $tanngalisiformulir = "";
        $jenisPendaftaran = "";
        $tanggalmasuk = "";
        $nis = "";
        $nopu = "";
        $pernahpaud = "";
        $pernahtk = "";
        $skhun = "";
        $ijazah = "";
        $cita = "";
        $hobi = "";
        $nama = "";
        $jeniskelamin = "";
        $nisn = "";
        $nik = "";
        $tempatlahir = "";
        $tanggallahir = "";
        $agama = "";
        $berkebutuhankhususpribadi = "";
        $alamat = "";
        $rt = "";
        $rw = "";
        $dusun = "";
        $desa = "";
        $kecamatan = "";
        $pos = "";
        $tempattingal = "";
        $transportasi = "";
        $nohp = "";
        $notlp = "";
        $mail = "";
        $penerimapkh = "";
        $nomorpkh = "";
        $kewarganegaraan = "";
        $namanegara = "";
        $namaayah = "";
        $tahunayah = "";
        $pendidikanayah = "";
        $pekerjaanayah = "";
        $penghasilanayah = "";
        $kebutuhankhususayah = "";
        $namaibu = "";
        $tahunibu = "";
        $pendidikanibu = "";
        $pekerjaanibu = "";
        $penghasilanibu = "";
        $kebutuhankhususibu = "";
    }
    // variabel eror 
    {
        $errortanngalisiformulir = "";
        $errorjensiPendaftaran = "";
        $errortanggalmasuk = "";
        $errornis = "";
        $errornopu = "";
        $errorpernahtk = "";
        $errorpernahpaud = "";
        $errorskhun = "";
        $errorijazah = "";
        $errorcita = "";
        $errorhobi = "";
        $errornama = "";
        $errorjeniskelamin = "";
        $errornisn = "";
        $errornik = "";
        $errortempatlahir = "";
        $errortanggallahir = "";
        $erroragama = "";
        $errorberkebutuhankhususpribadi = "";
        $erroralamat = "";
        $errorrt = "";
        $errorrw = "";
        $errordusun = "";
        $errordesa = "";
        $errorkecamatan = "";
        $errorpos = "";
        $errortempattingal = "";
        $errortransportasi = "";
        $errornohp = "";
        $errornotlp = "";
        $errormail = "";
        $errorpenerimapkh = "";
        $errornomorpkh = "";
        $errorkewarganegaraan = "";
        $errornamanegara = "";
        $errornamaayah = "";
        $errortahunayah = "";
        $errorpendidikanayah = "";
        $errorpekerjaanayah = "";
        $errorpenghasilanayah = "";
        $errorkebutuhankhususayah = "";
        $errornamaibu = "";
        $errortahunibu = "";
        $errorpendidikanibu = "";
        $errorpekerjaanibu = "";
        $errorpenghasilanibu = "";
        $errorkebutuhankhususibu = "";
    }
    // validasi isi form
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // cek tanggal daftar 
        {
            if (empty($_POST["tgldftr"])) {
                $errortanngalisiformulir = "Tanggal isi formulir harus diisi";
            } else {
                $tanngalisiformulir = cek_input($_POST["tgldftr"]);
                $tanngalisiformulir = date('Y-m-d', strtotime($tanngalisiformulir));
                $errortanngalisiformulir = "";
            }
        }
        //cek jenis pendaftaran
        {
            if (empty($_POST["jenispendaftaran"])) {
                $errorjensiPendaftaran = "jenis pendaftaran harus di pilih";
            } else {
                $jenisPendaftaran = cek_input($_POST["jenispendaftaran"]);
                $errorjensiPendaftaran = "";
            }
        }
        //tanggal masuk
        {
            if (empty($_POST["tglmsk"])) {
                $errortanggalmasuk = "Tanggal masuk formulir harus diisi";
            } else {
                $tanggalmasuk = cek_input($_POST["tglmsk"]);
                $tanggalmasuk = date('Y-m-d', strtotime($tanggalmasuk));
                $errortanggalmasuk = "";
            }
        }
        //nis
        {
            if (empty($_POST["nonis"])) {
                $errornis = "NIS tidak boleh kosong";
            } else {
                $nis = cek_input($_POST["nonis"]);
                if (!is_numeric($nis)) {
                    $errornis = "NIS hanya boleh berisi angka";
                } else {
                    $errornis = "";
                }
            }
        }
        //nomor pendaftaran
        {
            if (empty($_POST["nopu"])) {
                $errornopu = "Nomor peserta ujian tidak boleh kosong";
            } else {
                $nopu = cek_input($_POST["nopu"]);
                if (!is_numeric($nopu)) {
                    $errornopu = "Nomor peserta ujian hanya boleh berisi angka";
                } else {
                    $errornopu = "";
                }
            }
        }
        //pernah paud
        {
            if (empty($_POST["pernahpaud"])) {
                $errorpernahpaud = "pilihan harus di pilih";
            } else {
                $pernahpaud = cek_input($_POST["pernahpaud"]);
                $errorpernahpaud = "";
            }
        }
        //pernahtk
        {
            if (empty($_POST["pernahtk"])) {
                $errorpernahtk = "pilihan harus di pilih";
            } else {
                $pernahtk = cek_input($_POST["pernahtk"]);
                $errorpernahtk = "";
            }
        }
        //error skhun
        {
            if (empty($_POST["noSKHUN"])) {
                $errorskhun = "Nomor SKHUN tidak boleh kosong";
            } else {
                $skhun = cek_input($_POST["noSKHUN"]);
                if (!is_numeric($skhun)) {
                    $errorskhun = "Nomor SKHUN hanya boleh berisi angka";
                } else {
                    $errorskhun = "";
                }
            }
        }
        //ijazah
        {
            if (empty($_POST["noijzh"])) {
                $errorijazah = "Nomor Ijazah tidak boleh kosong";
            } else {
                $ijazah = cek_input($_POST["noijzh"]);
                if (!is_numeric($ijazah)) {
                    $errorijazah = "Nomor Ijazah hanya boleh berisi angka";
                } else {
                    $errorijazah = "";
                }
            }
        }
        //hobi
        {
            if (!isset($_POST["hobi"])) {
                $errorhobi = "Hobi harus dipilih";
            } else {
                $hobi = cek_input($_POST["hobi"]);
                if ($hobi == "Silahkan Pilih") {
                    $errorhobi = "Hobi harus dipilih";
                } else {
                    $errorhobi = "";
                }
            }
        }
        //cita
        {
            if (!isset($_POST["cita"])) {
                $errorcita = "cita harus dipilih";
            } else {
                $cita = cek_input($_POST["cita"]);
                if ($cita == "Silahkan Pilih") {
                    $errorcita = "Cita harus dipilih";
                } else {
                    $errorcita = "";
                }
            }
        }
        //nama
        {
            if (empty($_POST["nama"])) {
                /*Variabel error nama dibuat dan disimpan sesuai format*/
                $errornama = "Nama tidak boleh kosong";
            } else {
                /*cek_input(nama) untuk menghapus kesalahan spasial maupun lainnya pada field dan disimpan dalam variabel $nama*/
                $nama = cek_input($_POST["nama"]);
                /*cek apakah format nama sudah sesuai hanya huruf dan spasi*/
                if (!preg_match("/^[a-zA-Z ]*$/", $nama)) {
                    /*variabel error nama disimpan*/
                    $errornama = "Inputan hanya boleh huruf dan spasi";
                } else {
                    $errornama = "";
                }
            }
        }
        //kelamin
        {
            if (empty($_POST["jeniskelamin"])) {
                $errorjeniskelamin = "jenis Kelamin harus di pilih";
            } else {
                $jeniskelamin = cek_input($_POST["jeniskelamin"]);
                $errorjeniskelamin = "";
            }
        }
        //nisn
        {
            if (empty($_POST["nonisn"])) {
                $errornisn = "NISN tidak boleh kosong";
            } else {
                $nisn = cek_input($_POST["nonisn"]);
                if (!is_numeric($nisn)) {
                    $errornisn = "NISN hanya boleh berisi angka";
                } else {
                    $errornisn = "";
                }
            }
        }
        //nik
        {
            if (empty($_POST["nonik"])) {
                $errornik = "NIK tidak boleh kosong";
            } else {
                $nik = cek_input($_POST["nonik"]);
                if (!is_numeric($nik)) {
                    $errornik = "NIK hanya boleh berisi angka";
                } else {
                    $errornik = "";
                }
            }
        }
        //tempatlahir
        {
            if (empty($_POST["tempatLahir"])) {
                /*Variabel error nama dibuat dan disimpan sesuai format*/
                $errortempatlahir = "Tempat lahir tidak boleh kosong";
            } else {
                /*cek_input(nama) untuk menghapus kesalahan spasial maupun lainnya pada field dan disimpan dalam variabel $nama*/
                $tempatlahir = cek_input($_POST["tempatLahir"]);

                /*cek apakah format nama sudah sesuai hanya huruf dan spasi*/
                if (!preg_match("/^[a-zA-Z ]*$/", $tempatlahir)) {
                    /*variabel error nama disimpan*/
                    $errortempatlahir = "Inputan hanya boleh huruf dan spasi";
                } else {
                    $errortempatlahir = "";
                }
            }
        }
        //tanggal lahir
        {
            if (empty($_POST["tgllhr"])) {
                $errortanggallahir = "Tanggal lahir harus diisi";
            } else {
                $tanggallahir = cek_input($_POST["tgllhr"]);
                $tanggallahir = date('Y-m-d', strtotime($tanggallahir));
                $errortanggallahir = "";
            }
        }
        //agama
        {
            if (!isset($_POST["agama"])) {
                $erroragama = "agama harus dipilih";
            } else {
                $agama = cek_input($_POST["agama"]);
                if ($agama == "Silahkan Pilih") {
                    $erroragama = "Agama harus dipilih";
                } else {
                    $erroragama = "";
                }
            }
        }
        //berkebutuhan khusus
        {
            if (!isset($_POST["kebutuhankhusus"])) {
                $errorberkebutuhankhususpribadi = "Berkebutuhan harus dipilih";
            } else {
                $berkebutuhankhususpribadi = cek_input($_POST["kebutuhankhusus"]);
                if ($berkebutuhankhususpribadi == "Silahkan Pilih") {
                    $errorberkebutuhankhususpribadi = "Berkebutuhan khusus harus dipilih";
                } else {
                    $errorberkebutuhankhususpribadi = "";
                }
            }
        }
        //alamat
        {
            if (empty($_POST["alamat"])) {
                $erroralamat = "alamat tidak boleh kosong";
            } else {
                $alamat = cek_input($_POST["alamat"]);
                if (!preg_match("/^[a-zA-Z ]*$/", $alamat)) {

                    $erroralamat = "Inputan hanya boleh huruf dan spasi";
                } else {
                    $erroralamat = "";
                }
            }
        }
        //rt
        {
            if (empty($_POST["rt"])) {
                $errorrt = "RT tidak boleh kosong";
            } else {
                $rt = cek_input($_POST["rt"]);
                if (!is_numeric($rt)) {
                    $errorrt = "RT hanya boleh berisi angka";
                } else {
                    $errorrt = "";
                }
            }
        }
        //rw
        {
            if (empty($_POST["rw"])) {
                $errorrw = "RW tidak boleh kosong";
            } else {
                $rw = cek_input($_POST["rw"]);
                if (!is_numeric($rw)) {
                    $errorrw = "RW hanya boleh berisi angka";
                } else {
                    $errorrw = "";
                }
            }
        }
        //pos
        {
            if (empty($_POST["pos"])) {
                $errorpos = "pos tidak boleh kosong";
            } else {
                $pos = cek_input($_POST["pos"]);
                if (!is_numeric($pos)) {
                    $errorpos = "pos hanya boleh berisi angka";
                } else {
                    $errorpos = "";
                }
            }
        }
        //hp
        {
            if (empty($_POST["hp"])) {
                $errornohp = "Nomor HP tidak boleh kosong";
            } else {
                $nohp = cek_input($_POST["hp"]);
                if (!is_numeric($nohp)) {
                    $errornohp = "Nomor HP hanya boleh berisi angka";
                } else {
                    $errornohp = "";
                }
            }
        }
        //telephone
        {
            if (empty($_POST["tlp"])) {
                $errornotlp = "Telephone tidak boleh kosong";
            } else {
                $notlp = cek_input($_POST["tlp"]);
                if (!is_numeric($notlp)) {
                    $errornotlp = "Nomor Telephone hanya boleh berisi angka";
                } else {
                    $errornotlp = "";
                }
            }
        }
        //kip
        {
            if (empty($_POST["nokip"])) {
                $errornomorpkh = "tidak boleh kosong";
            } else {
                $nomorpkh = cek_input($_POST["nokip"]);
                if (!is_numeric($nomorpkh)) {
                    $errornomorpkh = "hanya boleh berisi angka";
                } else {
                    $errornomorpkh = "";
                }
            }
        }
        //dusun
        {
            if (empty($_POST["dusun"])) {
                $errordusun = "Dusun tidak boleh kosong";
            } else {
                $dusun = cek_input($_POST["dusun"]);
                if (!preg_match("/^[a-zA-Z ]*$/", $dusun)) {

                    $errordusun = "Inputan hanya boleh huruf dan spasi";
                } else {
                    $errordusun = "";
                }
            }
        }
        //desa
        {
            if (empty($_POST["desa"])) {
                $errordesa = "Desa tidak boleh kosong";
            } else {
                $desa = cek_input($_POST["desa"]);
                if (!preg_match("/^[a-zA-Z ]*$/", $desa)) {

                    $errordesa = "Inputan hanya boleh huruf dan spasi";
                } else {
                    $errordesa = "";
                }
            }
        }
        //kecamatan
        {
            if (empty($_POST["kecamatan"])) {
                $errorkecamatan = "Kecamatan tidak boleh kosong";
            } else {
                $kecamatan = cek_input($_POST["kecamatan"]);
                if (!preg_match("/^[a-zA-Z ]*$/", $kecamatan)) {

                    $errorkecamatan = "Inputan hanya boleh huruf dan spasi";
                } else {
                    $errorkecamatan = "";
                }
            }
        }
        //namanegara
        {
            if (empty($_POST["naneg"])) {
                $errornamanegara = "Nama Negara tidak boleh kosong";
            } else {
                $namanegara = cek_input($_POST["naneg"]);
                if (!preg_match("/^[a-zA-Z ]*$/", $namanegara)) {

                    $errornamanegara = "Inputan hanya boleh huruf dan spasi";
                } else {
                    $errornamanegara = "";
                }
            }
        }
        //namaayah
        {
            if (empty($_POST["namaayah"])) {
                $errornamaayah = "Nama ayah tidak boleh kosong";
            } else {
                $namaayah = cek_input($_POST["namaayah"]);
                if (!preg_match("/^[a-zA-Z ]*$/", $namaayah)) {

                    $errornamaayah = "Inputan hanya boleh huruf dan spasi";
                } else {
                    $errornamaayah = "";
                }
            }
        }
        //namaibu
        {
            if (empty($_POST["namaibu"])) {
                $errornamaibu = "Nama IBU tidak boleh kosong";
            } else {
                $namaibu = cek_input($_POST["namaibu"]);
                if (!preg_match("/^[a-zA-Z ]*$/", $namaibu)) {

                    $errornamaibu = "Inputan hanya boleh huruf dan spasi";
                } else {
                    $errornamaibu = "";
                }
            }
        }
        //tahunayah
        {
            if (empty($_POST["tahunayah"])) {
                $errortahunayah = "Tahun Lahir Ayah tidak boleh kosong";
            } else {
                $tahunayah = cek_input($_POST["tahunayah"]);
                if (!is_numeric($tahunayah)) {
                    $errortahunayah = "Tahun lahir ayah hanya boleh berisi angka";
                } else {
                    $errortahunayah = "";
                }
            }
        }
        //tahun ibu
        {
            if (empty($_POST["tahunibu"])) {
                $errortahunibu = "Tahun Lahir Ibu tidak boleh kosong";
            } else {
                $tahunibu = cek_input($_POST["tahunibu"]);
                if (!is_numeric($tahunibu)) {
                    $errortahunibu = "Tahun lahir ibu hanya boleh berisi angka";
                } else {
                    $errortahunibu = "";
                }
            }
        }
        //gmail
        {
            if (empty($_POST["mail"])) {
                $errormail = "Email tidak boleh kosong";
            } else {
                $mail = cek_input($_POST["mail"]);
                if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
                    $errormail = "Format Email Invalid";
                } else {
                    $errormail = "";
                }
            }
        }
        //warganegara
        {
            if (empty($_POST["wn"])) {
                $errorkewarganegaraan = "pilihan harus di pilih";
            } else {
                $kewarganegaraan = cek_input($_POST["wn"]);
                $errorkewarganegaraan = "";
            }
        }
        //kip
        {
            if (empty($_POST["kip"])) {
                $errorpenerimapkh = "pilihan harus di pilih";
            } else {
                $penerimapkh = cek_input($_POST["kip"]);
                $errorpenerimapkh = "";
            }
        }
        //tempat tinggal
        {
            if (!isset($_POST["tpttinggal"])) {
                $errortempattingal = "Tempat Tinggal harus dipilih";
            } else {
                $tempattingal = cek_input($_POST["tpttinggal"]);
                if ($tempattingal == "Silahkan Pilih") {
                    $errortempattingal = "Tempat Tinggal harus dipilih";
                } else {
                    $errortempattingal = "";
                }
            }
        }
        //transportasi
        {
            if (!isset($_POST["transportasi"])) {
                $errortransportasi = "Moda Transportasi harus dipilih";
            } else {
                $transportasi = cek_input($_POST["transportasi"]);
                if ($transportasi == "Silahkan Pilih") {
                    $errortransportasi = "Moda Transportasi harus dipilih";
                } else {
                    $errortransportasi = "";
                }
            }
        }
        //riwayat pendidikan ayah
        {
            if (!isset($_POST["rwytpendidkanayah"])) {
                $errorpendidikanayah = "riwayat pendidikan ayah harus dipilih";
            } else {
                $pendidikanayah = cek_input($_POST["rwytpendidkanayah"]);
                if ($pendidikanayah == "Silahkan Pilih") {
                    $errorpendidikanayah = "riwayat pendidikan ayah harus dipilih";
                } else {
                    $errorpendidikanayah = "";
                }
            }
        }
        //pekerjaan ayah
        {
            if (!isset($_POST["pekerjaanayah"])) {
                $errorpekerjaanayah = "pekerjaan ayah harus dipilih";
            } else {
                $pekerjaanayah = cek_input($_POST["pekerjaanayah"]);
                if ($pekerjaanayah == "Silahkan Pilih") {
                    $errorpekerjaanayah = "pekerjaan ayah harus dipilih";
                } else {
                    $errorpekerjaanayah = "";
                }
            }
        }
        //penghasilan ayah
        {
            if (!isset($_POST["penghasilanayah"])) {
                $errorpenghasilanayah = "penghasilan ayah harus dipilih";
            } else {
                $penghasilanayah = cek_input($_POST["penghasilanayah"]);
                if ($penghasilanayah == "Silahkan Pilih") {
                    $errorpenghasilanayah = "penghasilan ayah harus dipilih";
                } else {
                    $errorpenghasilanayah = "";
                }
            }
        }
        // kebutuhan khusus ayah 
        {
            if (!isset($_POST["kebutuhankhususayah"])) {
                $errorkebutuhankhususayah = "kebutuhan khusus ayah harus dipilih";
            } else {
                $kebutuhankhususayah = cek_input($_POST["kebutuhankhususayah"]);
                if ($kebutuhankhususayah  == "Silahkan Pilih") {
                    $errorkebutuhankhususayah = "kebutuhan khusus ayah harus dipilih";
                } else {
                    $errorkebutuhankhususayah = "";
                }
            }
        }

        //riwayat pendidikan ibu
        {
            if (!isset($_POST["rwytpendidkanibu"])) {
                $errorpendidikanibu = "riwayat pendidikan ibu harus dipilih";
            } else {
                $pendidikanibu = cek_input($_POST["rwytpendidkanibu"]);
                if ($pendidikanibu == "Silahkan Pilih") {
                    $errorpendidikanibu = "riwayat pendidikan ibu harus dipilih";
                } else {
                    $errorpendidikanibu = "";
                }
            }
        }
        //pekerjaan ibu
        {
            if (!isset($_POST["pekerjaanibu"])) {
                $errorpekerjaanibu = "pekerjaan ibu harus dipilih";
            } else {
                $pekerjaanibu = cek_input($_POST["pekerjaanibu"]);
                if ($pekerjaanibu == "Silahkan Pilih") {
                    $errorpekerjaanibu = "pekerjaan ibu harus dipilih";
                } else {
                    $errorpekerjaanibu = "";
                }
            }
        }
        //penghasilan ibu
        {
            if (!isset($_POST["penghasilanibu"])) {
                $errorpenghasilanibu = "penghasilan ibu harus dipilih";
            } else {
                $penghasilanibu = cek_input($_POST["penghasilanibu"]);
                if ($penghasilanibu == "Silahkan Pilih") {
                    $errorpenghasilanibu = "penghasilan ibu harus dipilih";
                } else {
                    $errorpenghasilanibu = "";
                }
            }
        }
        //from validasi kebutuhan khusus ibu
        {
            if (!isset($_POST["kebutuhankhususibu"])) {
                $errorkebutuhankhususibu = "kebutuhan khusus ibu harus dipilih";
            } else {
                $kebutuhankhususibu = cek_input($_POST["kebutuhankhususibu"]);
                if ($kebutuhankhususibu  == "Silahkan Pilih") {
                    $errorkebutuhankhususibu = "kebutuhan khusus ibu harus dipilih";
                } else {
                    $errorkebutuhankhususibu = "";
                }
            }
        }

        // pengecekan kondisi apakah ada error dalam pengisian form
        if (
            $errortanngalisiformulir == "" &&
            $errorjensiPendaftaran == "" &&
            $errortanggalmasuk == "" &&
            $errornis == "" &&
            $errornopu == "" &&
            $errorpernahtk == "" &&
            $errorpernahpaud == "" &&
            $errorskhun == "" &&
            $errorijazah == "" &&
            $errorcita == "" &&
            $errorhobi == "" &&
            $errornama == "" &&
            $errorjeniskelamin == "" &&
            $errornisn == "" &&
            $errornik == "" &&
            $errortempatlahir == "" &&
            $errortanggallahir == "" &&
            $erroragama == "" &&
            $errorberkebutuhankhususpribadi == "" &&
            $erroralamat == "" &&
            $errorrt == "" &&
            $errorrw == "" &&
            $errordusun == "" &&
            $errordesa == "" &&
            $errorkecamatan == "" &&
            $errorpos == "" &&
            $errortempattingal == "" &&
            $errortransportasi == "" &&
            $errornohp == "" &&
            $errornotlp == "" &&
            $errormail == "" &&
            $errorpenerimapkh == "" &&
            $errornomorpkh == "" &&
            $errorkewarganegaraan == "" &&
            $errornamanegara == "" &&
            $errornamaayah == "" &&
            $errortahunayah == "" &&
            $errorpendidikanayah == "" &&
            $errorpekerjaanayah == "" &&
            $errorpenghasilanayah == "" &&
            $errorkebutuhankhususayah == "" &&
            $errornamaibu == "" &&
            $errortahunibu == "" &&
            $errorpendidikanibu == "" &&
            $errorpekerjaanibu == "" &&
            $errorpenghasilanibu == "" &&
            $errorkebutuhankhususibu == ""
        ) {
            //proses memasukan data ke database
            include 'koneksi.php';
            $sql = " INSERT INTO biodata (`nik`, `tanggalisiformulir`, `jenispendaftaran`, `tanggalmasuk`, `nis`, `nomorpendaftaran`, `paud`, `tk`, `skhun`, `ijazah`, `cita`, `hobi`, `nama`, `kelamin`, `nisn`, `tempatlahir`, `tanggallahir`, `agama`, `kebutuhankhusus`, `alamat`, `rt`, `rw`, `dusun`, `desa`, `kecamatan`, `pos`, `tempattinggal`, `transportasi`, `nohp`, `notlp`, `mail`, `penerimapkh`, `nomorpkh`, `kewarganegaraan`, `negara`, `ayah`, `tahunayah`, `pendidikanayah`, `pekerjaanayah`, `penghasilanayah`, `kebutuhankhususayah`, `ibu`, `tahunibu`, `pendidikanibu`, `pekerjaanibu`, `penghasilanibu`, `kebutuhankhususibu`) VALUES ('$nik', 
        '$tanngalisiformulir',     
        '$jenisPendaftaran',
        '$tanggalmasuk',
        '$nis',
        '$nopu',
        '$pernahpaud',
        '$pernahtk',
        '$skhun',
        '$ijazah',
        '$cita',
        '$hobi',
        '$nama',
        '$jeniskelamin',
        '$nisn',
        '$tempatlahir',
        '$tanggallahir',
        '$agama',
        '$berkebutuhankhususpribadi',
        '$alamat',
        '$rt',
        '$rw',
        '$dusun',
        '$desa',
        '$kecamatan',
        '$pos',
        '$tempattingal',
        '$transportasi',
        '$nohp',
        '$notlp',
        '$mail',
        '$penerimapkh',
        '$nomorpkh',
        '$kewarganegaraan',
        '$namanegara',
        '$namaayah',
        '$tahunayah',
        '$pendidikanayah',
        '$pekerjaanayah',
        '$penghasilanayah',
        '$kebutuhankhususayah',
        '$namaibu',
        '$tahunibu',
        '$pendidikanibu',
        '$pekerjaanibu',
        '$penghasilanibu',
        '$kebutuhankhususibu'
    );";
            mysqli_query($koneksi, $sql);
            // menampilkan pesan jika data berhasdiinputkan
            echo "<script type='text/javascript'> alert('Pendaftaran siswa Berhasil')</script>";
            header("location:formpendaftaran.php");
        } else {
            //menampilkan pesan jika gagal di inputkan
            echo "<script type='text/javascript'> alert('Pendaftaran siswa gagal')</script>";
        }
    }

    //fungsction cek inputan
    function cek_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }


    ?>
    <div class="container">
        <div class="row">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <!-- header pendaftaran  -->
                <h2 class="alert alert-primary text-center mt-3">Formulir pendaftaran Mahasiswa Baru</h2>
                <!-- input tanggal pendaftaran  -->
                <div class="form-group row">
                    <div class="col-md-3">
                        <label for="tanggalpengisian" class="col-form-label"> Tanggal Pengisian</label>
                    </div>
                    <div class="col-md-9">
                        <input type="date" name="tgldftr" id="tgldftr" class="form-control <?php echo ($errortanngalisiformulir != "" ? "is_invalid" : ""); ?>" value="<?php echo $tanngalisiformulir; ?>">
                        <span class="warning"><?php echo $errortanngalisiformulir; ?></span>
                    </div>

                </div>
                <!-- header sub registrasi data peserta  -->
                <h4 class="alert alert-primary  mt-3">Registrasi Peserta didik</h4>
                <div class="datapeserta">
                    <!-- jenis pendaftaran radio  -->
                    <div class="form-group row">
                        <div class="col-md-3">
                            <label for="jenispendaftaran" class="col-form-label"> Jenis Pendaftaran</label>
                        </div>
                        <div class="col-md-9">
                            <div class="form-check-inline">
                                <input type="radio" name="jenispendaftaran" id="jp" class="form-check-input" value="Siswa Baru" <?php if (isset($jenisPendaftaran) && $jenisPendaftaran == "Siswa Baru") echo "checked"; ?>>
                                <label for="Siswa Baru">Siswa Baru</label>
                            </div>
                            <div class="form-check-inline">
                                <input type="radio" name="jenispendaftaran" id="jp" class="form-check-input" value="Pindahan" <?php if (isset($jenisPendaftaran) && $jenisPendaftaran == "Pindahan") echo "checked"; ?>>
                                <label for="Siswa Baru">Pindahan</label>
                            </div>
                            <span class="warning"><?php echo $errorjensiPendaftaran; ?></span>
                        </div>
                    </div>
                    <!-- tanggal masuk sekolah date -->
                    <div class="form-group row">
                        <div class="col-md-3">
                            <label for="tanggalmasuk" class="col-form-label"> Tanggal Masuk Sekolah</label>
                        </div>
                        <div class="col-md-9">
                            <input type="date" name="tglmsk" id="tglmsk" class="form-control <?php echo ($errortanggalmasuk != "" ? "is_invalid" : ""); ?>" value="<?php echo $tanggalmasuk; ?>">
                            <span class="warning"><?php echo $errortanggalmasuk; ?></span>
                        </div>
                    </div><br>
                    <!-- NIS text -->
                    <div class="form-group row">
                        <div class="col-md-3">
                            <label for="nis" class="col-form-label"> NIS</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" name="nonis" id="nonis" class="form-control <?php echo ($nis != "" ? "is_invalid" : ""); ?>" maxlength="10" value="<?php echo $nis; ?>" placeholder="Masukan NIS Anda">
                            <span class="warning"><?php echo $errornis ?></span>
                        </div>
                    </div><br>
                    <!-- nomor peserta ujian text-texthelp -->
                    <div class="form-group row">
                        <div class="col-md-3">
                            <label for="nopu" class="col-form-label"> Nomor Peserta Ujian</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" name="nopu" id="nopu" class="form-control <?php echo ($nopu != "" ? "is_invalid" : ""); ?>" maxlength="20" value="<?php echo $nopu; ?>" placeholder="Masukan Nomor Peserta Ujian Anda">
                            <!-- text help  -->
                            <div id="nopuhelp" class="form-text">**Nomor peserta ujian adalah 20 digit yang tertera dalam sertifikat
                                <span class="text-danger">SKHUN SD</span>,
                                diisi bagi peserta jenjang SMP
                            </div>
                            <span class="warning"><?php echo $errornopu; ?></span>
                        </div>
                    </div><br>
                    <!-- pernah paud radio  -->
                    <div class="form-group row">
                        <div class="col-md-3">
                            <label for="pernahpaud" class="col-form-label"> Apakah Pernah Paud</label>
                        </div>
                        <div class="col-md-9">
                            <div class="form-check-inline">
                                <input type="radio" name="pernahpaud" id="paud" class="form-check-input" value="Ya" <?php if (isset($pernahpaud) && $pernahpaud == "Ya") echo "checked"; ?>>
                                <label for="pernahpaud">Ya</label>
                            </div>
                            <div class="form-check-inline">
                                <input type="radio" name="pernahpaud" id="paud" class="form-check-input" value="Tidak" <?php if (isset($pernahpaud) && $pernahpaud == "Tidak") echo "checked"; ?>>
                                <label for="pernahpaud">Tidak</label>
                            </div>
                            <span class="warning"><?php echo $errorpernahpaud; ?></span>
                        </div>
                    </div><br>
                    <!-- pernah tk radio  -->
                    <div class="form-group row">
                        <div class="col-md-3">
                            <label for="pernahtk" class="col-form-label"> Apakah Pernah TK</label>
                        </div>
                        <div class="col-md-9">
                            <div class="form-check-inline">
                                <input type="radio" name="pernahtk" id="tk" class="form-check-input" value="Ya" <?php if (isset($pernahtk) && $pernahtk == "Ya") echo "checked"; ?>>
                                <label for="pernahtk">Ya</label>
                            </div>
                            <div class="form-check-inline">
                                <input type="radio" name="pernahtk" id="tk" class="form-check-input" value="Tidak" <?php if (isset($pernahtk) && $pernahtk == "Tidak") echo "checked"; ?>>
                                <label for="pernahtk">Tidak</label>
                            </div>
                            <span class="warning"><?php echo $errorpernahtk; ?></span>
                        </div>
                    </div><br>
                    <!-- skhun text-help -->
                    <div class="form-group row">
                        <div class="col-md-3">
                            <label for="noskhun" class="col-form-label"> Nomor seri SKHUN sebelumnya</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" name="noSKHUN" id="noSKHUN" class="form-control <?php echo ($skhun != "" ? "is_invalid" : ""); ?>" maxlength="20" value="<?php echo $skhun; ?>" placeholder="Masukan Nomor SKHUN">
                            <!-- text help  -->
                            <div id="noskhunhelp" class="form-text">diisi 16 digit yang tertera di
                                <span class="text-danger">SKHUN SD</span>,
                                diisi bagi peserta jenjang SMP
                            </div>
                            <span class="warning"><?php echo $errorskhun; ?></span>
                        </div>
                    </div><br>
                    <!-- noijasah text-help  -->
                    <div class="form-group row">
                        <div class="col-md-3">
                            <label for="noijzh" class="col-form-label"> Nomor seri IJAZAH sebelumnya</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" name="noijzh" id="noijzh" class="form-control  <?php echo ($ijazah != "" ? "is_invalid" : ""); ?>" maxlength="20" value="<?php echo $ijazah; ?>" placeholder="Masukan Nomor Ijazah">

                            <!-- text help  -->
                            <div id="noijzhhelp" class="form-text">diisi 16 digit yang tertera di
                                <span class="text-danger">IJAZAH SD</span>,
                                diisi bagi peserta jenjang SMP
                            </div>

                            <span class="warning"><?php echo $errorijazah; ?></span>


                        </div>
                    </div><br>
                    <!-- hobi select  -->
                    <div class="form-group row">
                        <div class="col-md-3">
                            <label for="selecthobi" class="col-form-label"> HOBI</label>
                        </div>
                        <div class="col-md-9">
                            <select class="form-select" name="hobi">
                                <option>Silahkan Pilih</option>
                                <option value="Olahraga" <?php if (isset($hobi) && $hobi == "Olahraga") echo "selected"; ?>>Olahraga</option>
                                <option value="Kesenian" <?php if (isset($hobi) && $hobi == "Kesenian") echo "selected"; ?>>Kesenian</option>
                                <option value="Membaca" <?php if (isset($hobi) && $hobi == "Membaca") echo "selected"; ?>>Membaca</option>
                                <option value="Menulis" <?php if (isset($hobi) && $hobi == "Menulis") echo "selected"; ?>>Menulis</option>
                                <option value="Travelling" <?php if (isset($hobi) && $hobi == "Travelling") echo "selected"; ?>>Travelling</option>
                                <option value="Lainya" <?php if (isset($hobi) && $hobi == "Lainya") echo "selected"; ?>>Lainya</option>
                            </select>
                            <span class="warning"><?php echo $errorhobi; ?></span>

                        </div>

                    </div><br>
                    <!-- cita cita select  -->
                    <div class="form-group row">
                        <div class="col-md-3">
                            <label for="selectcita" class="col-form-label"> CITA</label>
                        </div>
                        <div class="col-md-9">
                            <select class="form-select" name="cita">
                                <option>Silahkan Pilih</option>
                                <option value="PNS" <?php if (isset($cita) && $cita == "PNS") echo "selected"; ?>>PNS</option>
                                <option value="TNI/Porli" <?php if (isset($cita) && $cita == "TNI?Porli") echo "selected"; ?>>TNI/Porli</option>
                                <option value="Guru/Dosen" <?php if (isset($cita) && $cita == "Guru/Dosen") echo "selected"; ?>>Guru/Dosen</option>
                                <option value="Dokter" <?php if (isset($cita) && $cita == "Dokter") echo "selected"; ?>>Dokter</option>
                                <option value="Politikus" <?php if (isset($cita) && $cita == "Politikus") echo "selected"; ?>>Politikus</option>
                                <option value="Wiraswasta" <?php if (isset($cita) && $cita == "Wiraswasta") echo "selected"; ?>>Wiraswasta</option>
                                <option value="Seni/lukis/artis/sejenisnya" <?php if (isset($cita) && $cita == "Seni/lukis/artis/sejenisnya") echo "selected"; ?>>Seni/lukis/artis/sejenisnya</option>
                                <option value="Lainya" <?php if (isset($cita) && $cita == "Lainya") echo "selected"; ?>>Lainya</option>
                            </select>
                            <span class="warning"><?php echo $errorcita; ?></span>
                        </div>
                    </div><br>
                </div>
                <!-- header Data Pribadi  -->
                <h4 class="alert alert-primary  mt-3">Data Pribadi</h4>
                <div class="datapribadi">
                    <!-- nama lengkap text 40 -->
                    <div class="form-group row">
                        <div class="col-md-3">
                            <label for="nama" class="col-form-label "> Nama</label>
                        </div>
                        <div class="col-md-9">

                            <input type="text" name="nama" id="nama" class="form-control <?php echo ($errornama != "" ? "is-invalid" : ""); ?> " maxlength="40" value="<?php echo $nama; ?>" placeholder="Masukan nama Anda">
                            <span class="warning"><?php echo $errornama; ?></span>
                        </div>
                    </div><br>
                    <!-- jenis kelamin radio  -->
                    <div class="form-group row">
                        <div class="col-md-3">
                            <label for="jeniskelamin" class="col-form-label"> Jenis Kelamin</label>
                        </div>
                        <div class="col-md-9">
                            <div class="form-check-inline">
                                <input type="radio" name="jeniskelamin" id="jk" class="form-check-input" value="Laki-Laki" <?php if (isset($jeniskelamin) && $jeniskelamin == "Laki-Laki") echo "checked"; ?>>
                                <label for="JenisKelamin">Laki-Laki</label>
                            </div>
                            <div class="form-check-inline">
                                <input type="radio" name="jenisKelamin" id="jk" class="form-check-input" value="Perempuan" <?php if (isset($jeniskelamin) && $jeniskelamin == "Perempuan") echo "checked"; ?>>
                                >
                                <label for="JenisKelamin">Perempuan</label>
                            </div>
                            <span class="warning"><?php echo $errorjeniskelamin; ?></span>
                        </div>
                    </div><br>
                    <!-- nisn text 10  -->
                    <div class="form-group row">
                        <div class="col-md-3">
                            <label for="nisn" class="col-form-label"> NISN</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" name="nonisn" id="nonisn" class="form-control <?php echo ($nisn != "" ? "is_invalid" : ""); ?>" maxlength="10" value="<?php echo $nisn; ?>" placeholder="Masukan NISN Anda">
                            <span class="warning"><?php echo $errornisn; ?></span>
                        </div>
                    </div><br>
                    <!-- nik text 18  -->
                    <div class="form-group row">
                        <div class="col-md-3">
                            <label for="nik" class="col-form-label  "> NIK</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" name="nonik" id="nonik" class="form-control <?php echo ($nik != "" ? "is_invalid" : ""); ?>" maxlength="18" value="<?php echo $nik; ?>" placeholder="Masukan NIK Anda">
                            <span class="warning"><?php echo $errornik; ?></span>
                        </div>
                    </div><br>
                    <!-- tempat lahir text 30  -->
                    <div class="form-group row">
                        <div class="col-md-3">
                            <label for="tempatLahir" class="col-form-label"> Tempat Lahir</label>
                        </div>
                        <div class="col-md-9">

                            <input type="text" name="tempatLahir" id="tempatLahir" class="form-control  <?php echo ($errortempatlahir != "" ? "is-invalid" : ""); ?>" maxlength="30" value="<?php echo $tempatlahir; ?>" placeholder="Masukan Tempat Lahir Anda">
                            <span class="warning"><?php echo $errortempatlahir; ?></span>
                        </div>
                    </div><br>
                    <!-- tanggal lahir date  -->
                    <div class="form-group row">
                        <div class="col-md-3">
                            <label for="tanggallahir" class="col-form-label"> Tanggal Lahir</label>
                        </div>
                        <div class="col-md-9">
                            <input type="date" name="tgllhr" id="tgllhr" class="form-control <?php echo ($errortanggallahir != "" ? "is_invalid" : ""); ?>" value="<?php echo $tanggallahir; ?>">
                            <span class="warning"><?php echo $errortanggallahir; ?></span>
                        </div>
                    </div>
                </div><br>
                <!-- agama select  -->
                <div class="form-group row">
                    <div class="col-md-3">
                        <label for="selectagama" class="col-form-label"> Agama </label>
                    </div>
                    <div class="col-md-9">
                        <select class="form-select" name="agama">
                            <option>Silahkan Pilih</option>
                            <option value="Islam" <?php if (isset($agama) && $agama == "Islam") echo "selected"; ?>>Islam</option>
                            <option value="Kristen" <?php if (isset($agama) && $agama == "Kristen") echo "selected"; ?>>Kristen</option>
                            <option value="Katholik" <?php if (isset($agama) && $agama == "Katholik") echo "selected"; ?>>Katholik</option>
                            <option value="Hindu" <?php if (isset($agama) && $agama == "Hindu") echo "selected"; ?>>Hindu</option>
                            <option value="Budha" <?php if (isset($agama) && $agama == "Budha") echo "selected"; ?>>Budha</option>
                            <option value="Konghucu" <?php if (isset($agama) && $agama == "Konghucu") echo "selected"; ?>>Konghucu</option>
                            <option value="Lainya" <?php if (isset($agama) && $agama == "Lainya") echo "selected"; ?>>Lainya</option>
                        </select>
                        <span class="warning"><?php echo $erroragama; ?></span>

                    </div>
                </div><br>
                <!-- berkebutuhan khusus select  -->
                <div class="form-group row">
                    <div class="col-md-3">
                        <label for="selectkebutuhan" class="col-form-label"> Berkebutuhan Khusus </label>
                    </div>
                    <div class="col-md-9">
                        <select class="form-select" name="kebutuhankhusus">
                            <option>Silahkan Pilih</option>
                            <option value="Tidak" <?php if (isset($berkebutuhankhususpribadi) && $berkebutuhankhususpribadi == "Tidak") echo "selected"; ?>>Tidak</option>
                            <option value="Netra" <?php if (isset($berkebutuhankhususpribadi) && $berkebutuhankhususpribadi == "Netra") echo "selected"; ?>>Netra</option>
                            <option value="Rungu" <?php if (isset($berkebutuhankhususpribadi) && $berkebutuhankhususpribadi == "Rungu") echo "selected"; ?>>Rungu</option>
                            <option value="Grahita ringan" <?php if (isset($berkebutuhankhususpribadi) && $berkebutuhankhususpribadi == "Grahita ringan") echo "selected"; ?>>Grahita ringan</option>
                            <option value="Grahita sedang" <?php if (isset($berkebutuhankhususpribadi) && $berkebutuhankhususpribadi == "Grahita sedang") echo "selected"; ?>>Grahita sedang</option>
                            <option value="Daksa ringan" <?php if (isset($berkebutuhankhususpribadi) && $berkebutuhankhususpribadi == "Daksa ringan") echo "selected"; ?>>Daksa ringan</option>
                            <option value="Daksa sedang" <?php if (isset($berkebutuhankhususpribadi) && $berkebutuhankhususpribadi == "Daksa sedang") echo "selected"; ?>>Daksa sedang</option>
                            <option value="Laras" <?php if (isset($berkebutuhankhususpribadi) && $berkebutuhankhususpribadi == "Laras") echo "selected"; ?>>Laras</option>
                            <option value="Wicara" <?php if (isset($berkebutuhankhususpribadi) && $berkebutuhankhususpribadi == "Wicara") echo "selected"; ?>>Wicara</option>
                            <option value="Tuna ganda" <?php if (isset($berkebutuhankhususpribadi) && $berkebutuhankhususpribadi == "Tuna ganda") echo "selected"; ?>>Tuna ganda</option>
                            <option value="Hiperaktif" <?php if (isset($berkebutuhankhususpribadi) && $berkebutuhankhususpribadi == "Hiperaktif") echo "selected"; ?>>Hiperaktif</option>
                            <option value="Cerdas Istimewa" <?php if (isset($berkebutuhankhususpribadi) && $berkebutuhankhususpribadi == "Cerdas Istimewa") echo "selected"; ?>>Cerdas Istimewa</option>
                            <option value="Bakat Istimewa" <?php if (isset($berkebutuhankhususpribadi) && $berkebutuhankhususpribadi == "Bakat Istimewa") echo "selected"; ?>>Bakat Istimewa</option>
                            <option value="Kesulitan Belajar" <?php if (isset($berkebutuhankhususpribadi) && $berkebutuhankhususpribadi == "Kesulitan Belajar") echo "selected"; ?>>Kesulitan Belajar</option>
                            <option value="Narkoba" <?php if (isset($berkebutuhankhususpribadi) && $berkebutuhankhususpribadi == "Narkoba") echo "selected"; ?>>Narkoba</option>
                            <option value="Indigo" <?php if (isset($berkebutuhankhususpribadi) && $berkebutuhankhususpribadi == "Indigo") echo "selected"; ?>>Indigo</option>
                            <option value="Down Sindrome" <?php if (isset($berkebutuhankhususpribadi) && $berkebutuhankhususpribadi == "Down Sindrome") echo "selected"; ?>>Down Sindrome</option>
                            <option value="Autis" <?php if (isset($berkebutuhankhususpribadi) && $berkebutuhankhususpribadi == "Autis") echo "selected"; ?>>Autis</option>
                        </select>
                        <span class="warning"><?php echo $errorberkebutuhankhususpribadi; ?></span>

                    </div>
                </div><br>
                <!-- alamat text 40 -->
                <div class="form-group row">
                    <div class="col-md-3">
                        <label for="alamat" class="col-form-label"> Alamat</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="alamat" id="alamat" class="form-control <?php echo ($erroralamat != "" ? "is-invalid" : ""); ?>" maxlength="30" value="<?php echo $alamat; ?>" placeholder="Masukan Alamat Anda">
                        <span class="warning"><?php echo $erroralamat; ?></span>
                    </div>
                </div><br>
                <!-- rt text 3 -->
                <div class="form-group row">
                    <div class="col-md-3">
                        <label for="rt" class="col-form-label"> RT</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="rt" id="rt" class="form-control <?php echo ($errorrt != "" ? "is-invalid" : ""); ?>" maxlength="3" value="<?php echo $rt; ?>" placeholder="Masukan RT Anda example : 007">
                        <span class="warning"><?php echo $errorrt; ?></span>
                    </div>
                </div><br>
                <!-- rw text 3  -->
                <div class="form-group row">
                    <div class="col-md-3">
                        <label for="rw" class="col-form-label >"> RW </label>
                    </div>
                    <div class="col-md-9">

                        <input type="text" name="rw" id="rw" class="form-control <?php echo ($errorrw != "" ? "is-invalid" : ""); ?>" maxlength="3" value="<?php echo $rw; ?>" placeholder="Masukan RW Anda example : 007">

                        <span class="warning"><?php echo $errorrw; ?></span>
                    </div>
                </div><br>
                <!-- dusun text 30  -->
                <div class="form-group row">
                    <div class="col-md-3">
                        <label for="dusun" class="col-form-label"> Dusun</label>
                    </div>
                    <div class="col-md-9">

                        <input type="text" name="dusun" id="dusun" class="form-control <?php echo ($errordusun != "" ? "is-invalid" : ""); ?>" maxlength="30" value="<?php echo $dusun; ?>" placeholder="Masukan Dusun Anda">

                        <span class="warning"><?php echo $errordusun; ?></span>
                    </div>
                </div><br>
                <!-- desa text 30  -->
                <div class="form-group row">
                    <div class="col-md-3">
                        <label for="desa" class="col-form-label"> Desa</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="desa" id="desa" class="form-control <?php echo ($errordesa != "" ? "is-invalid" : ""); ?>" maxlength="30" value="<?php echo $desa; ?>" placeholder="Masukan Desa Anda">

                        <span class="warning"><?php echo $errordesa; ?></span>
                    </div>
                </div><br>
                <!-- kecamatan text 30  -->
                <div class="form-group row">
                    <div class="col-md-3">
                        <label for="kecamatan" class="col-form-label"> Kecamatan</label>
                    </div>
                    <div class="col-md-9">

                        <input type="text" name="kecamatan" id="kecamatan" class="form-control <?php echo ($errorkecamatan != "" ? "is-invalid" : ""); ?>" maxlength="30" value="<?php echo $kecamatan; ?>" placeholder="Masukan kecamatan Anda">
                        <span class="warning"><?php echo $errorkecamatan; ?></span>
                    </div>
                </div><br>
                <!-- pos text 5  -->
                <div class="form-group row">
                    <div class="col-md-3">
                        <label for="pos" class="col-form-label"> POS</label>
                    </div>
                    <div class="col-md-9">

                        <input type="text" name="pos" id="pos" class="form-control <?php echo ($errorpos != "" ? "is-invalid" : ""); ?>" maxlength="5" value="<?php echo $pos; ?>" placeholder="Masukan Alamat POS Anda">

                        <span class="warning"><?php echo $errorpos; ?></span>
                    </div>
                </div><br>
                <!-- tempat tinggal select  -->
                <div class="form-group row">
                    <div class="col-md-3">
                        <label for="tempattinggal" class="col-form-label"> Tempat Tinggal </label>
                    </div>
                    <div class="col-md-9">
                        <select class="form-select" name="tpttinggal">
                            <option>Silahkan Pilih</option>
                            <option value="Bersama Orang Tua" <?php if (isset($tempattingal) && $tempattingal == "Bersama Orang Tua") echo "selected"; ?>>Bersama Orang Tua</option>
                            <option value="Wali" <?php if (isset($tempattingal) && $tempattingal == "Wali") echo "selected"; ?>>Wali</option>
                            <option value="Kos" <?php if (isset($tempattingal) && $tempattingal == "Kos") echo "selected"; ?>>Kos</option>
                            <option value="Asrama" <?php if (isset($tempattingal) && $tempattingal == "Asrama") echo "selected"; ?>>Asrama</option>
                            <option value="Panti Asuhan" <?php if (isset($tempattingal) && $tempattingal == "Panti Asuhan") echo "selected"; ?>>Panti Asuhan</option>
                            <option value="Lainnya" <?php if (isset($tempattingal) && $tempattingal == "Lainya") echo "selected"; ?>>Lainnya</option>
                        </select>
                        <span class="warning"><?php echo $errortempattingal; ?></span>
                    </div>
                </div><br>
                <!-- moda transportasi select  -->
                <div class="form-group row">
                    <div class="col-md-3">
                        <label for="transportasi" class="col-form-label"> Moda Transportasi </label>
                    </div>
                    <div class="col-md-9">
                        <select class="form-select" name="transportasi">
                            <option>Silahkan Pilih</option>
                            <option value="Jalan Kaki" <?php if (isset($transportasi) && $transportasi == "Jalan Kaki") echo "selected"; ?>>Jalan Kaki</option>
                            <option value="Kendaraan Pribadi" <?php if (isset($transportasi) && $transportasi == "Kendaraan Pribadi") echo "selected"; ?>>Kendaraan Pribadi</option>
                            <option value="Kendaraan Umum" <?php if (isset($transportasi) && $transportasi == "Kendaraan Umum") echo "selected"; ?>>Kendaraan Umum</option>
                            <option value="Jemputan Sekolah" <?php if (isset($transportasi) && $transportasi == "Jemputan Sekolah") echo "selected"; ?>>Jemputan Sekolah</option>
                            <option value="Kereta Api" <?php if (isset($transportasi) && $transportasi == "Kereta Api") echo "selected"; ?>>Kereta Api</option>
                            <option value="Ojek" <?php if (isset($transportasi) && $transportasi == "Ojek") echo "selected"; ?>>Ojek</option>
                            <option value="Andong/Bendi/Sado/Dokar" <?php if (isset($transportasi) && $transportasi == "Andong/Bendi/Sado/Dokar") echo "selected"; ?>>Andong/Bendi/Sado/Dokar</option>
                            <option value="Perahu Penyebrangan" <?php if (isset($transportasi) && $transportasi == "Perahu Penyebrangan") echo "selected"; ?>>Perahu Penyebrangan</option>
                            <option value="Lainnya" <?php if (isset($transportasi) && $transportasi == "Lainnya") echo "selected"; ?>>Lainnya</option>
                        </select>
                        <span class="warning"><?php echo $errortransportasi; ?></span>
                    </div>
                </div><br>
                <!-- nomor hp text-13 -->
                <div class="form-group row">
                    <div class="col-md-3">
                        <label for="hp" class="col-form-label"> Nomor Handphone </label>
                    </div>
                    <div class="col-md-9">

                        <input type="text" name="hp" id="hp" class="form-control <?php echo ($errornohp != "" ? "is-invalid" : ""); ?>" maxlength="13" value="<?php echo $nohp;  ?>" placeholder="08123456789">

                        <span class="warning"><?php echo $errornohp; ?></span>
                    </div>
                </div><br>
                <!-- nomor telephone  -->
                <div class="form-group row">
                    <div class="col-md-3">
                        <label for="tlp" class="col-form-label"> Nomor telephone </label>
                    </div>
                    <div class="col-md-9">

                        <input type="text" name="tlp" id="tlp" class="form-control <?php echo ($errornotlp != "" ? "is-invalid" : ""); ?>" maxlength="13" value="<?php echo $notlp;  ?>" placeholder="08123456789">

                        <span class="warning"><?php echo $errornotlp; ?></span>
                    </div>
                </div><br>
                <!-- email text30  -->
                <div class="form-group row">
                    <div class="col-md-3">
                        <label for="mail" class="col-form-label"> Email Pribadi </label>
                    </div>
                    <div class="col-md-9">

                        <input type="text" name="mail" id="mail" class="form-control <?php echo ($errormail != "" ? "is-invalid" : ""); ?>" maxlength="30" value="<?php echo $mail;  ?>" placeholder="maruf@gmail.com">

                        <span class="warning"><?php echo $errormail;  ?></span>
                    </div>
                </div><br>
                <!-- kip radio -->
                <div class="form-group row">
                    <div class="col-md-3">
                        <label for="kip" class="col-form-label"> Penerima PKH/KIS/KIP</label>
                    </div>
                    <div class="col-md-9">
                        <div class="form-check-inline">
                            <input type="radio" name="kip" id="kip" class="form-check-input" value="Ya" <?php if (isset($penerimapkh) && $penerimapkh == "Ya") echo "checked"; ?>>
                            <label for="kip">Ya</label>
                        </div>
                        <div class="form-check-inline">
                            <input type="radio" name="kip" id="kip" class="form-check-input" value="Tidak" <?php if (isset($penerimapkh) && $penerimapkh == "Tidak") echo "checked"; ?>>
                            <label for="kip">Tidak</label>
                        </div>
                        <span class="warning"><?php echo $errorpenerimapkh; ?></span>
                    </div>
                </div><br>
                <!-- nomor kip text 20  -->
                <div class="form-group row">
                    <div class="col-md-3">
                        <label for="nokip" class="col-form-label"> Nomor PKH/KIS/KIP </label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="nokip" id="nokip" class="form-control  <?php echo ($errornomorpkh != "" ? "is-invalid" : ""); ?>" maxlength="20" value="<?php echo $nomorpkh;  ?>" placeholder="masukan nomor kip">
                        <div id="nokiphelp" class="form-text">jika tidak mepunyai diisi 000000
                        </div>
                        <span class="warning"><?php echo $errornomorpkh; ?></span>
                    </div>
                </div><br>
                <!-- kewargeanegaraan radio  -->
                <div class="form-group row">
                    <div class="col-md-3">
                        <label for="wn" class="col-form-label"> Kewarganegaraan </label>
                    </div>
                    <div class="col-md-9">
                        <div class="form-check-inline">
                            <input type="radio" name="wn" id="wn" class="form-check-input" value="WNI" <?php if (isset($kewarganegaraan) && $kewarganegaraan == "WNI") echo "checked"; ?>>
                            <label for="wn">Warga Negara Indonesia (WNI)</label>
                        </div>
                        <div class="form-check-inline">
                            <input type="radio" name="wn" id="wn" class="form-check-input" value="WNA" <?php if (isset($kewarganegaraan) && $kewarganegaraan == "WNA") echo "checked"; ?>>
                            <label for="wn">Warga Negara Asing (WNA)</label>
                        </div>
                        <span class="warning"><?php echo $errorkewarganegaraan; ?></span>

                    </div>
                </div><br>
                <!-- nama negara text-30  -->
                <div class="form-group row">
                    <div class="col-md-3">
                        <label for="naneg" class="col-form-label"> Nama Negara </label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="naneg" id="naneg" class="form-control <?php echo ($errornamanegara != "" ? "is-invalid" : ""); ?>" maxlength="30" value="<?php echo $namanegara; ?>" placeholder="nama Negara anda">
                        <span class="warning"><?php echo $errornamanegara; ?></span>
                    </div>
                </div><br>
        </div>
        <!-- ayah kandung -->
        <h4 class="alert alert-primary  mt-3">Data Ayah Kandung</h4>
        <div class="ayah">
            <!-- nama ayah kandung  -->
            <div class="form-group row">
                <div class="col-md-3">
                    <label for="namaayah" class="col-form-label"> Nama Ayah Kandung </label>
                </div>
                <div class="col-md-9">
                    <input type="text" name="namaayah" id="namaayah" class="form-control <?php echo ($errornamaayah != "" ? "is-invalid" : ""); ?>" maxlength="40" value="<?php echo $namaayah; ?>" placeholder="Masukan Nama Ayah Anda">
                    <span class="warning"><?php echo $errornamaayah; ?></span>
                </div>
            </div><br>
            <!-- tahun lahir ayah  -->
            <div class="form-group row">
                <div class="col-md-3">
                    <label for="tahunayah" class="col-form-label"> Tahun Lahir </label>
                </div>
                <div class="col-md-9">
                    <input type="text" name="tahunayah" id="tahunayah" class="form-control <?php echo ($errortahunayah != "" ? "is-invalid" : ""); ?>" maxlength="4" value="<?php echo $tahunayah; ?>" placeholder="Masukan Tahun Lahir Ayah Anda">
                    <span class="warning"><?php echo $errortahunayah; ?></span>
                </div>
            </div><br>
            <!-- riwyat pendidikan -->
            <div class="form-group row">
                <div class="col-md-3">
                    <label for="rwytpendidikanayah" class="col-form-label"> Riwayat Pendikan </label>
                </div>
                <div class="col-md-9">
                    <select class="form-select" name="rwytpendidkanayah">
                        <option>Silahkan Pilih</option>
                        <option value="Tidak Sekolah" <?php if (isset($pendidikanayah) && $pendidikanayah == "Tidak Sekolah") echo "selected"; ?>>Tidak Sekolah</option>
                        <option value="Putus Sekolah" <?php if (isset($pendidikanayah) && $pendidikanayah == "Putus Sekolah") echo "selected"; ?>>Putus Sekolah</option>
                        <option value="SD Sederajat" <?php if (isset($pendidikanayah) && $pendidikanayah == "SD Sederajat") echo "selected"; ?>>SD Sederajat</option>
                        <option value="SMP Sederajat" <?php if (isset($pendidikanayah) && $pendidikanayah == "SMP Sederajat") echo "selected"; ?>>SMP Sederajat</option>
                        <option value="SMA Sederajat" <?php if (isset($pendidikanayah) && $pendidikanayah == "SMA Sederajat") echo "selected"; ?>>SMA Sederajat</option>
                        <option value="D1" <?php if (isset($pendidikanayah) && $pendidikanayah == "D1") echo "selected"; ?>>D1</option>
                        <option value="D2" <?php if (isset($pendidikanayah) && $pendidikanayah == "D2") echo "selected"; ?>>D2</option>
                        <option value="D3" <?php if (isset($pendidikanayah) && $pendidikanayah == "D3") echo "selected"; ?>>D3</option>
                        <option value="D4/S1" <?php if (isset($pendidikanayah) && $pendidikanayah == "D4/S1") echo "selected"; ?>>D4/S1</option>
                        <option value="S2" <?php if (isset($pendidikanayah) && $pendidikanayah == "S2") echo "selected"; ?>>S2</option>
                        <option value="S3" <?php if (isset($pendidikanayah) && $pendidikanayah == "S3") echo "selected"; ?>>S3</option>
                    </select>
                    <span class="warning"><?php echo $errorpendidikanayah; ?></span>
                </div>
            </div><br>
            <!-- pekerjaan ayah  -->
            <div class="form-group row">
                <div class="col-md-3">
                    <label for="pekerjaaanayah" class="col-form-label"> Pekerjaan ayah </label>
                </div>
                <div class="col-md-9">
                    <select class="form-select" name="pekerjaanayah">
                        <option>Silahkan Pilih</option>
                        <option value="Tidak Bekerja" <?php if (isset($pekerjaanayah) && $pekerjaanayah == "Tidak Bekerja") echo "selected"; ?>>Tidak Bekerja</option>
                        <option value="Nelayan" <?php if (isset($pekerjaanayah) && $pekerjaanayah == "Nelayan") echo "selected"; ?>>Nelayan</option>
                        <option value="Petani" <?php if (isset($pekerjaanayah) && $pekerjaanayah == "Petani") echo "selected"; ?>>Petani</option>
                        <option value="Peternak" <?php if (isset($pekerjaanayah) && $pekerjaanayah == "Peternak") echo "selected"; ?>>Peternak</option>
                        <option value="PNS/TNI/Porli" <?php if (isset($pekerjaanayah) && $pekerjaanayah == "PNS/TNI/Porli") echo "selected"; ?>>PNS/TNI/Porli</option>
                        <option value="Karyawan Swasta" <?php if (isset($pekerjaanayah) && $pekerjaanayah == "Karyawan Swasta") echo "selected"; ?>>Karyawan Swasta</option>
                        <option value="Pedagang Kecil" <?php if (isset($pekerjaanayah) && $pekerjaanayah == "Pedagang Kecil") echo "selected"; ?>>Pedagang Kecil</option>
                        <option value="Pedagang Besar" <?php if (isset($pekerjaanayah) && $pekerjaanayah == "Pedagang Besar") echo "selected"; ?>>Pedagang Besar</option>
                        <option value="Wiraswasta" <?php if (isset($pekerjaanayah) && $pekerjaanayah == "Wiraswasta") echo "selected"; ?>>Wiraswasta</option>
                        <option value="Wirausaha" <?php if (isset($pekerjaanayah) && $pekerjaanayah == "Wirausaha") echo "selected"; ?>>Wirausaha</option>
                        <option value="Pensiunan" <?php if (isset($pekerjaanayah) && $pekerjaanayah == "Pensiunan") echo "selected"; ?>>Pensiunan</option>
                        <option value="Lainnya" <?php if (isset($pekerjaanayah) && $pekerjaanayah == "Lainnya") echo "selected"; ?>>Lainnya</option>
                    </select>
                    <span class="warning"><?php echo $errorpekerjaanayah; ?></span>
                </div>
            </div><br>
            <!-- penghasilan bulanan  -->
            <div class="form-group row">
                <div class="col-md-3">
                    <label for="penghasilanayah" class="col-form-label"> Penghasilan ayah </label>
                </div>
                <div class="col-md-9">
                    <select class="form-select" name="penghasilanayah">
                        <option>Silahkan Pilih</option>
                        <option value="kurang dari 500.000" <?php if (isset($penghasilanayah) && $penghasilanayah == "kurang dari 500.000") echo "selected"; ?>>kurang dari 500.000</option>
                        <option value="500.000 - 999.999" <?php if (isset($penghasilanayah) && $penghasilanayah == "500.000 - 999.999") echo "selected"; ?>>500.000 - 999.999</option>
                        <option value="1 juta - 1.999.999" <?php if (isset($penghasilanayah) && $penghasilanayah == "1 juta - 1.999.999") echo "selected"; ?>>1 juta - 1.999.999</option>
                        <option value="2 juta - 4.999.999" <?php if (isset($penghasilanayah) && $penghasilanayah == "2 juta - 4.999.999") echo "selected"; ?>>2 juta - 4.999.999</option>
                        <option value="5 juta - 20 juta" <?php if (isset($penghasilanayah) && $penghasilanayah == "5 juta - 20 juta") echo "selected"; ?>>5 juta - 20 juta</option>
                        <option value="Lebih dari 20 juta" <?php if (isset($penghasilanayah) && $penghasilanayah == "Lebih dari 20 juta") echo "selected"; ?>>Lebih dari 20 juta</option>
                    </select>
                    <span class="warning"><?php echo $errorpenghasilanayah; ?></span>

                </div>
            </div><br>
            <!-- kebutuhan khusus  -->
            <div class="form-group row">
                <div class="col-md-3">
                    <label for="kebutuhankhususayah" class="col-form-label"> Berkebutuhan Khusus </label>
                </div>
                <div class="col-md-9">
                    <select class="form-select" name="kebutuhankhususayah">
                        <option>Silahkan Pilih</option>
                        <option value="Tidak" <?php if (isset($kebutuhankhususayah) && $kebutuhankhususayah == "Tidak") echo "selected"; ?>>Tidak</option>
                        <option value="Netra" <?php if (isset($kebutuhankhususayah) && $kebutuhankhususayah == "Netra") echo "selected"; ?>>Netra</option>
                        <option value="Rungu" <?php if (isset($kebutuhankhususayah) && $kebutuhankhususayah == "Rungu") echo "selected"; ?>>Rungu</option>
                        <option value="Grahita ringan" <?php if (isset($kebutuhankhususayah) && $kebutuhankhususayah == "Grahita ringan") echo "selected"; ?>>Grahita ringan</option>
                        <option value="Grahita sedang" <?php if (isset($kebutuhankhususayah) && $kebutuhankhususayah == "Grahita sedang") echo "selected"; ?>>Grahita sedang</option>
                        <option value="Daksa ringan" <?php if (isset($kebutuhankhususayah) && $kebutuhankhususayah == "Daksa ringan") echo "selected"; ?>>Daksa ringan</option>
                        <option value="Daksa sedang" <?php if (isset($kebutuhankhususayah) && $kebutuhankhususayah == "Daksa sedang") echo "selected"; ?>>Daksa sedang</option>
                        <option value="Laras" <?php if (isset($kebutuhankhususayah) && $kebutuhankhususayah == "Laras") echo "selected"; ?>>Laras</option>
                        <option value="Wicara" <?php if (isset($kebutuhankhususayah) && $kebutuhankhususayah == "Wicara") echo "selected"; ?>>Wicara</option>
                        <option value="Tuna ganda" <?php if (isset($kebutuhankhususayah) && $kebutuhankhususayah == "Tuna ganda") echo "selected"; ?>>Tuna ganda</option>
                        <option value="Hiperaktif" <?php if (isset($kebutuhankhususayah) && $kebutuhankhususayah == "Hiperaktif") echo "selected"; ?>>Hiperaktif</option>
                        <option value="Cerdas Istimewa" <?php if (isset($kebutuhankhususayah) && $kebutuhankhususayah == "Cerdas Istimewa") echo "selected"; ?>>Cerdas Istimewa</option>
                        <option value="Bakat Istimewa" <?php if (isset($kebutuhankhususayah) && $kebutuhankhususayah == "Bakat Istimewa") echo "selected"; ?>>Bakat Istimewa</option>
                        <option value="Kesulitan Belajar" <?php if (isset($kebutuhankhususayah) && $kebutuhankhususayah == "Kesulitan Belajar") echo "selected"; ?>>Kesulitan Belajar</option>
                        <option value="Narkoba" <?php if (isset($kebutuhankhususayah) && $kebutuhankhususayah == "Narkoba") echo "selected"; ?>>Narkoba</option>
                        <option value="Indigo" <?php if (isset($kebutuhankhususayah) && $kebutuhankhususayah == "Indigo") echo "selected"; ?>>Indigo</option>
                        <option value="Down Sindrome" <?php if (isset($kebutuhankhususayah) && $kebutuhankhususayah == "Down Sindrome") echo "selected"; ?>>Down Sindrome</option>
                        <option value="Autis" <?php if (isset($kebutuhankhususayah) && $kebutuhankhususayah == "Autis") echo "selected"; ?>>Autis</option>
                    </select>
                    <span class="warning"><?php echo $errorkebutuhankhususayah; ?></span>
                </div>

            </div><br>
        </div>
        <!-- ibu kandung  -->
        <h4 class="alert alert-primary  mt-3">Data Ibu Kandung</h4>
        <div id="ibu">
            <!-- nama ibu kandung  -->
            <div class="form-group row">
                <div class="col-md-3">
                    <label for="namaibu" class="col-form-label"> Nama Ibu Kandung </label>
                </div>
                <div class="col-md-9">
                    <input type="text" name="namaibu" id="namaibu" class="form-control <?php echo ($errornamaayah != "" ? "is-invalid" : ""); ?>" maxlength="40" value="<?php echo $namaibu; ?>" placeholder="Masukan Nama Ibu Anda">
                    <span class="warning"><?php echo $errornamaibu; ?></span>
                </div>
            </div><br>
            <!-- tahun lahir ibu  -->
            <div class="form-group row">
                <div class="col-md-3">
                    <label for="tahunibu" class="col-form-label"> Tahun Lahir </label>
                </div>
                <div class="col-md-9">
                    <input type="text" name="tahunibu" id="tahunibu" class="form-control <?php echo ($errortahunibu != "" ? "is-invalid" : ""); ?>" maxlength="4" value="<?php echo $tahunibu; ?>" placeholder="Masukan Tahun Lahir Ibu Anda">
                    <span class="warning"><?php echo $errortahunibu; ?></span>
                </div>
            </div><br>
            <!-- Riwayat pendidkan ibu  -->
            <div class="form-group row">
                <div class="col-md-3">
                    <label for="rwytpendidikanibu" class="col-form-label"> Riwayat Pendikan </label>
                </div>
                <div class="col-md-9">
                    <select class="form-select" name="rwytpendidkanibu">
                        <option>Silahkan Pilih</option>
                        <option value="Tidak Sekolah" <?php if (isset($pendidikanibu) && $pendidikanibu == "Tidak Sekolah") echo "selected"; ?>>Tidak Sekolah</option>
                        <option value="Putus Sekolah" <?php if (isset($pendidikanibu) && $pendidikanibu == "Putus Sekolah") echo "selected"; ?>>Putus Sekolah</option>
                        <option value="SD Sederajat" <?php if (isset($pendidikanibu) && $pendidikanibu == "SD Sederajat") echo "selected"; ?>>SD Sederajat</option>
                        <option value="SMP Sederajat" <?php if (isset($pendidikanibu) && $pendidikanibu == "SMP Sederajat") echo "selected"; ?>>SMP Sederajat</option>
                        <option value="SMA Sederajat" <?php if (isset($pendidikanibu) && $pendidikanibu == "SMA Sederajat") echo "selected"; ?>>SMA Sederajat</option>
                        <option value="D1" <?php if (isset($pendidikanibu) && $pendidikanibu == "D1") echo "selected"; ?>>D1</option>
                        <option value="D2" <?php if (isset($pendidikanibu) && $pendidikanibu == "D2") echo "selected"; ?>>D2</option>
                        <option value="D3" <?php if (isset($pendidikanibu) && $pendidikanibu == "D3") echo "selected"; ?>>D3</option>
                        <option value="D4/S1" <?php if (isset($pendidikanibu) && $pendidikanibu == "D4/S1") echo "selected"; ?>>D4/S1</option>
                        <option value="S2" <?php if (isset($pendidikanibu) && $pendidikanibu == "S2") echo "selected"; ?>>S2</option>
                        <option value="S3" <?php if (isset($pendidikanibu) && $pendidikanibu == "S3") echo "selected"; ?>>S3</option>
                    </select>
                    <span class="warning"><?php echo $errorpendidikanibu; ?></span>
                </div>
            </div><br>
            <!-- pekerjaan ibu  -->
            <div class="form-group row">
                <div class="col-md-3">
                    <label for="penghasilanibu" class="col-form-label"> Pekerjaan ibu </label>
                </div>
                <div class="col-md-9">
                    <select class="form-select" name="pekerjaanibu">
                        <option>Silahkan Pilih</option>
                        <option value="Tidak Bekerja" <?php if (isset($pekerjaanibu) && $pekerjaanibu == "Tidak Bekerja") echo "selected"; ?>>Tidak Bekerja</option>
                        <option value="Nelayan" <?php if (isset($pekerjaanibu) && $pekerjaanibu == "Nelayan") echo "selected"; ?>>Nelayan</option>
                        <option value="Petani" <?php if (isset($pekerjaanibu) && $pekerjaanibu == "Petani") echo "selected"; ?>>Petani</option>
                        <option value="Peternak" <?php if (isset($pekerjaanibu) && $pekerjaanibu == "Peternak") echo "selected"; ?>>Peternak</option>
                        <option value="PNS/TNI/Porli" <?php if (isset($pekerjaanibu) && $pekerjaanibu == "PNS/TNI/Porli") echo "selected"; ?>>PNS/TNI/Porli</option>
                        <option value="Karyawan Swasta" <?php if (isset($pekerjaanibu) && $pekerjaanibu == "Karyawan Swasta") echo "selected"; ?>>Karyawan Swasta</option>
                        <option value="Pedagang Kecil" <?php if (isset($pekerjaanibu) && $pekerjaanibu == "Pedagang Kecil") echo "selected"; ?>>Pedagang Kecil</option>
                        <option value="Pedagang Besar" <?php if (isset($pekerjaanibu) && $pekerjaanibu == "Pedagang Besar") echo "selected"; ?>>Pedagang Besar</option>
                        <option value="Wiraswasta" <?php if (isset($pekerjaanibu) && $pekerjaanibu == "Wiraswasta") echo "selected"; ?>>Wiraswasta</option>
                        <option value="Wirausaha" <?php if (isset($pekerjaanibu) && $pekerjaanibu == "Wirausaha") echo "selected"; ?>>Wirausaha</option>
                        <option value="Pensiunan" <?php if (isset($pekerjaanibu) && $pekerjaanibu == "Pensiunan") echo "selected"; ?>>Pensiunan</option>
                        <option value="Lainnya" <?php if (isset($pekerjaanibu) && $pekerjaanibu == "Lainnya") echo "selected"; ?>>Lainnya</option>
                    </select>
                    <span class="warning"><?php echo $errorpekerjaanibu; ?></span>
                </div>
            </div><br>
            <!-- penghasilan ibu  -->
            <div class="form-group row">
                <div class="col-md-3">
                    <label for="penghasilibu" class="col-form-label"> Penghasilan ibu </label>
                </div>
                <div class="col-md-9">
                    <select class="form-select" name="penghasilanibu">
                        <option>Silahkan Pilih</option>
                        <option value="kurang dari 500.000" <?php if (isset($penghasilanibu) && $penghasilanibu == "kurang dari 500.000") echo "selected"; ?>>kurang dari 500.000</option>
                        <option value="500.000 - 999.999" <?php if (isset($penghasilanibu) && $penghasilanibu == "500.000 - 999.999") echo "selected"; ?>>500.000 - 999.999</option>
                        <option value="1 juta - 1.999.999" <?php if (isset($penghasilanibu) && $penghasilanibu == "1 juta - 1.999.999") echo "selected"; ?>>1 juta - 1.999.999</option>
                        <option value="2 juta - 4.999.999" <?php if (isset($penghasilanibu) && $penghasilanibu == "2 juta - 4.999.999") echo "selected"; ?>>2 juta - 4.999.999</option>
                        <option value="5 juta - 20 juta" <?php if (isset($penghasilanibu) && $penghasilanibu == "5 juta - 20 juta") echo "selected"; ?>>5 juta - 20 juta</option>
                        <option value="Lebih dari 20 juta" <?php if (isset($penghasilanibu) && $penghasilanibu == "Lebih dari 20 juta") echo "selected"; ?>>Lebih dari 20 juta</option>
                    </select>
                    <span class="warning"><?php echo $errorpenghasilanibu; ?></span>
                </div>
            </div><br>

            <!-- kebutuhan khusus  -->
            <div class="form-group row">
                <div class="col-md-3">
                    <label for="kebutuhankhususibu" class="col-form-label"> Berkebutuhan Khusus </label>
                </div>
                <div class="col-md-9">
                    <select class="form-select" name="kebutuhankhususibu">
                        <option>Silahkan Pilih</option>
                        <option value="Tidak" <?php if (isset($kebutuhankhususibu) && $kebutuhankhususibu == "Tidak") echo "selected"; ?>>Tidak</option>
                        <option value="Netra" <?php if (isset($kebutuhankhususibu) && $kebutuhankhususibu == "Netra") echo "selected"; ?>>Netra</option>
                        <option value="Rungu" <?php if (isset($kebutuhankhususibu) && $kebutuhankhususibu == "Rungu") echo "selected"; ?>>Rungu</option>
                        <option value="Grahita ringan" <?php if (isset($kebutuhankhususibu) && $kebutuhankhususibu == "Grahita ringan") echo "selected"; ?>>Grahita ringan</option>
                        <option value="Grahita sedang" <?php if (isset($kebutuhankhususibu) && $kebutuhankhususibu == "Grahita sedang") echo "selected"; ?>>Grahita sedang</option>
                        <option value="Daksa ringan" <?php if (isset($kebutuhankhususibu) && $kebutuhankhususibu == "Daksa ringan") echo "selected"; ?>>Daksa ringan</option>
                        <option value="Daksa sedang" <?php if (isset($kebutuhankhususibu) && $kebutuhankhususibu == "Daksa sedang") echo "selected"; ?>>Daksa sedang</option>
                        <option value="Laras" <?php if (isset($kebutuhankhususibu) && $kebutuhankhususibu == "Laras") echo "selected"; ?>>Laras</option>
                        <option value="Wicara" <?php if (isset($kebutuhankhususibu) && $kebutuhankhususibu == "Wicara") echo "selected"; ?>>Wicara</option>
                        <option value="Tuna ganda" <?php if (isset($kebutuhankhususibu) && $kebutuhankhususibu == "Tuna ganda") echo "selected"; ?>>Tuna ganda</option>
                        <option value="Hiperaktif" <?php if (isset($kebutuhankhususibu) && $kebutuhankhususibu == "Hiperaktif") echo "selected"; ?>>Hiperaktif</option>
                        <option value="Cerdas Istimewa" <?php if (isset($kebutuhankhususibu) && $kebutuhankhususibu == "Cerdas Istimewa") echo "selected"; ?>>Cerdas Istimewa</option>
                        <option value="Bakat Istimewa" <?php if (isset($kebutuhankhususibu) && $kebutuhankhususibu == "Bakat Istimewa") echo "selected"; ?>>Bakat Istimewa</option>
                        <option value="Kesulitan Belajar" <?php if (isset($kebutuhankhususibu) && $kebutuhankhususibu == "Kesulitan Belajar") echo "selected"; ?>>Kesulitan Belajar</option>
                        <option value="Narkoba" <?php if (isset($kebutuhankhususibu) && $kebutuhankhususibu == "Narkoba") echo "selected"; ?>>Narkoba</option>
                        <option value="Indigo" <?php if (isset($kebutuhankhususibu) && $kebutuhankhususibu == "Indigo") echo "selected"; ?>>Indigo</option>
                        <option value="Down Sindrome" <?php if (isset($kebutuhankhususibu) && $kebutuhankhususibu == "Down Sindrome") echo "selected"; ?>>Down Sindrome</option>
                        <option value="Autis" <?php if (isset($kebutuhankhususibu) && $kebutuhankhususibu == "Autis") echo "selected"; ?>>Autis</option>
                    </select>
                    <span class="warning"><?php echo $errorkebutuhankhususibu; ?></span>
                </div>

            </div><br>
        </div>

        <!-- button submit  -->
        <div class="form-group row ">
            <button class="btn btn-primary" type="submit">Submit form</button>
        </div>
        </form>
    </div>
    </div>
    <!-- import js bootsrap via cdn  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>