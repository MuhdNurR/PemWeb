<?php
session_start();

include '../koneksi.php';
// Retrieve the session data
$tanggal_sekarang = date("Y-m-d");
$jenis_pendaftaran = $_SESSION['temp_data']['jenis_pendaftaran'];
$tanggal_masuk = $_SESSION['temp_data']['tanggal_masuk'];
$nis = $_SESSION['temp_data']['nis'];
$nomor_peserta_ujian = $_SESSION['temp_data']['nomor_peserta_ujian'];
$paud = $_SESSION['temp_data']['paud'];
$tk = $_SESSION['temp_data']['tk'];
$no_seri_skhun = $_SESSION['temp_data']['no_seri_skhun'];
$no_ijazah = $_SESSION['temp_data']['no_ijazah'];
$hobi = $_SESSION['temp_data']['hobi'];
$cita_cita = $_SESSION['temp_data']['cita_cita'];

$sql_peserta_didik = "INSERT INTO pesertadidik (tanggal, jenis_pendaftaran, tanggal_masuk, nis, no_peserta, paud, tk, no_skhun, no_ijazah, hobi, cita_cita)
VALUES ('$tanggal_sekarang','$jenis_pendaftaran', '$tanggal_masuk', '$nis', '$nomor_peserta_ujian', '$paud', '$tk', '$no_seri_skhun', '$no_ijazah', '$hobi', '$cita_cita');";

$result_peserta_didik = mysqli_query($koneksi, $sql_peserta_didik);

// Retrieve the session data  data diri
$nama_lengkap = $_SESSION['temp_data']['nama_lengkap'];
$jenis_kelamin = $_SESSION['temp_data']['jenis_kelamin'];
$nisn = $_SESSION['temp_data']['nisn'];
$nik = $_SESSION['temp_data']['nik'];
$tempat_lahir = $_SESSION['temp_data']['tempat_lahir'];
$tanggal_lahir = $_SESSION['temp_data']['tanggal_lahir'];
$agama = $_SESSION['temp_data']['agama'];
$berkebutuhan_khusus = $_SESSION['temp_data']['berkebutuhan_khusus'];
$alamat_jalan = $_SESSION['temp_data']['alamat_jalan'];
$rt = $_SESSION['temp_data']['rt'];
$rw = $_SESSION['temp_data']['rw'];
$nama_dusun = $_SESSION['temp_data']['nama_dusun'];
$nama_kelurahan_desa = $_SESSION['temp_data']['nama_kelurahan_desa'];
$kecamatan = $_SESSION['temp_data']['kecamatan'];
$kode_pos = $_SESSION['temp_data']['kode_pos'];
$tempat_tinggal = $_SESSION['temp_data']['tempat_tinggal'];
$moda_transportasi = $_SESSION['temp_data']['moda_transportasi'];
$nomor_hp = $_SESSION['temp_data']['nomor_hp'];
$nomor_telpon = $_SESSION['temp_data']['nomor_telpon'];
$email_pribadi = $_SESSION['temp_data']['email_pribadi'];
$penerima_kps_pkh_kip = $_SESSION['temp_data']['penerima_kps_pkh_kip'];
$no_kps_pkh_kip = $_SESSION['temp_data']['no_kps_pkh_kip'];
$kewarganegaraan = $_SESSION['temp_data']['kewarganegaraan'];

$data_diri = "INSERT INTO datadiri (nama_lengkap, jenis_kelamin, nisn, nik, tempat_lahir, tanggal_lahir, agama, berkebutuhan_khusus, alamat_jalan, rt, rw, nama_dusun, nama_kelurahan_desa, kecamatan, kode_pos, tempat_tinggal, moda_transportasi, nomor_hp, nomor_telp, email_pribadi, penerima_kps_pkh_kip, no_kps_pkh_kip, kewarganegaraan) 
VALUES ('$nama_lengkap', '$jenis_kelamin', '$nisn', '$nik', '$tempat_lahir', '$tanggal_lahir', '$agama', '$berkebutuhan_khusus', '$alamat_jalan', '$rt', '$rw', '$nama_dusun', '$nama_kelurahan_desa', '$kecamatan', '$kode_pos', '$tempat_tinggal', '$moda_transportasi', '$nomor_hp', '$nomor_telpon', '$email_pribadi', '$penerima_kps_pkh_kip', '$no_kps_pkh_kip', '$kewarganegaraan')";

$result_data_diri = mysqli_query($koneksi, $data_diri);

// Simpan data Ayah
$nama_ayah = $_SESSION['temp_data']['nama_ayah'];
$tahun_lahir_ayah = $_SESSION['temp_data']['tahun_lahir_ayah'];
$pendidikan_ayah = $_SESSION['temp_data']['pendidikan_ayah'];
$pekerjaan_ayah = $_SESSION['temp_data']['pekerjaan_ayah'];
$penghasilan_ayah = $_SESSION['temp_data']['penghasilan_ayah'];
$berkebutuhan_khusus_ayah = $_SESSION['temp_data']['berkebutuhan_khusus_ayah'];

$data_ayah = "INSERT INTO dataayah (nama_ayah, tahun_lahir_ayah, pendidikan_ayah, pekerjaan_ayah, penghasilan_ayah, berkebutuhan_khusus_ayah) 
VALUES ('$nama_ayah', '$tahun_lahir_ayah', '$pendidikan_ayah', '$pekerjaan_ayah', '$penghasilan_ayah', '$berkebutuhan_khusus_ayah')";

$result_data_ayah = mysqli_query($koneksi, $data_ayah);


// Simpan data Ibu
$nama_ibu = $_SESSION['temp_data']['nama_ibu'];
$tahun_lahir_ibu = $_SESSION['temp_data']['tahun_lahir_ibu'];
$pendidikan_ibu = $_SESSION['temp_data']['pendidikan_ibu'];
$pekerjaan_ibu = $_SESSION['temp_data']['pekerjaan_ibu'];
$penghasilan_ibu = $_SESSION['temp_data']['penghasilan_ibu'];
$berkebutuhan_khusus_ibu = $_SESSION['temp_data']['berkebutuhan_khusus_ibu'];


$data_ibu = "INSERT INTO dataibu (nama_ibu, tahun_lahir_ibu, pendidikan_ibu, pekerjaan_ibu, penghasilan_ibu, berkebutuhan_khusus_ibu)
            VALUES ('$nama_ibu', '$tahun_lahir_ibu', '$pendidikan_ibu', '$pekerjaan_ibu', '$penghasilan_ibu', '$berkebutuhan_khusus_ibu')";

$result_data_ibu = mysqli_query($koneksi, $data_ibu);


header("location: ../dashboard.php");
