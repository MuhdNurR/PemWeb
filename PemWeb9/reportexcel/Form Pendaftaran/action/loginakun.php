<?php

session_start();

include '../koneksi.php';

$email = $_POST['email'];
$password = $_POST['password'];

$sql = mysqli_query($koneksi, "SELECT * FROM akun WHERE email='$email' AND pass ='$password'");

$cek = mysqli_num_rows($sql);

if ($cek > 0) {

    $data = mysqli_fetch_assoc($sql);

    if ($data['level'] == "admin") {
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "admin";
        $_SESSION['login'] = true;
        header("location: ../dashboardadmin.php");
        exit;
    } else if ($data['level'] == "siswa") {
        if ($data['daftar'] == "0") {
            $_SESSION['username'] = $username;
            $_SESSION['level'] = "siswa";
            $_SESSION['login'] = true;
            $_SESSION['daftar'] = true;
            header("location: ../dashboard.php");
            exit;
        } else if ($data['daftar'] == "1") {
            $_SESSION['username'] = $username;
            $_SESSION['level'] = "siswa";
            $_SESSION['login'] = true;
            header("location: ../dashboard.php");
            exit;
        }
    } else {
        header("header:login.php?pesan=gagal");
    }
    exit;
} else {
    header("location: ../login.php?error=" . urlencode("Email atau password salah. Silakan coba lagi."));
}
