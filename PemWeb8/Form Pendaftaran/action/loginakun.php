<?php

session_start();

include '../koneksi.php';

$email = $_POST['email'];
$password = $_POST['password'];

$sql = mysqli_query($koneksi, "SELECT * FROM akun WHERE email='$email' AND pass ='$password'");

$cek = mysqli_num_rows($sql);

if ($cek > 0) {
    $_SESSION['email'] = $email;
    $_SESSION['login'] = true;
    header("location: ../dashboard.php");
    exit;
} else {
    header("location: ../login.php?error=" . urlencode("Email atau password salah. Silakan coba lagi."));
}
