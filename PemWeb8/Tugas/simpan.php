<?php
include 'koneksi.php';
$id = $_POST['id'];
$nama = $_POST['alamat'];
$jkel = $_POST['jkel'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$kota = $_POST['kota'];
$pesan = $_POST['pesan'];

// Query SQL untuk insert data
$query = "INSERT INTO kontak SET id = '$id', nama = '$nama',jkel='$jkel', email = '$email', alamat='$alamat', kota = '$kota' , pesan = '$pesan'";
mysqli_query($koneksi, $query);
//mengalihkan ke halaman index.php
header("location:form-input.php");
