<?php 
    // Mengaktifkan session php
    session_start();
    
    // Menghubungkan dengan koneksi
    include 'koneksi.php';
    
    // Menangkap data yang dikirim dari form
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Menyeleksi data admin dengan username dan password yang sesuai
    $data = mysqli_query($koneksi, "SELECT * FROM akun WHERE username='$username' AND password='$password'");
    
    // Menghitung jumlah data yang ditemukan
    $cek = mysqli_num_rows($data);
    
    if($cek > 0){
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
        header("location:FPD.php");
    }else{
        header("location:login.php?pesan=gagal");
    }
