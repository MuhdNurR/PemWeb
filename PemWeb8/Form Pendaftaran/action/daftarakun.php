<?php
include '../koneksi.php';
$email = $_POST['email'];
$nama = $_POST['nama'];
$password = $_POST['password'];

$query = "INSERT INTO akun (email, pass, nama) VALUES ('$email', '$password', '$nama')";
mysqli_query($koneksi, $query);
header("location:../login.php");
exit;
