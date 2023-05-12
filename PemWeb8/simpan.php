<?php
include 'koneksi.php';
$nim = $_POST['nim'];
$nama = $_POST['alamat'];
$jurusan = $_POST['jurusan'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];

// Query SQL untuk inser data
$query = "INSERT INTO mahasiswa SET nim = '$nim', nama = '$nama', jurusan = '$jurusan', jenis_kelamin='$jenis_kelamin', alamat='$alamat'";
mysqli_query($koneksi, $query);
//mengalihkan ke halaman index.php
header("location:form-input.php");
