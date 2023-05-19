<?php
    // Konfigurasi Database
    $host = "localhost";
    $username = "root";
    $password = "";
    $db = "praktek8pemweb";

    // Perintah PHP untuk akses ke DB
    $koneksi = mysqli_connect($host, $username, $password, $db);

    // Check connection
    if (mysqli_connect_errno()){
        echo "Koneksi database gagal : " . mysqli_connect_error();
    }
?>