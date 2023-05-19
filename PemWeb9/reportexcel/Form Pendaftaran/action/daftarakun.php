<?php
include '../koneksi.php';
$email = $_POST['email'];
$nama = $_POST['nama'];
$password = $_POST['password'];

$query = "INSERT INTO akun (email, pass, nama, level, daftar) VALUES ('$email', '$password', '$nama', 'siswa', '0')";
mysqli_query($koneksi, $query);
header("location:../login.php");
exit;
