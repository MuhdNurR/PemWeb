<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_pegawai";

// Create Connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check Connection
if (!$conn) {
    die("Connection failed : " . mysqli_connect_error());
}

// Create Database
$sql = "CREATE TABLE pegawai (
    id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(50) NOT NULL,
    jabatan VARCHAR(50) NOT NULL,
    gaji INT(11) NOT NULL,
    alamat VARCHAR(100) NOT NULL,
    id_departemen INT(10) UNSIGNED,
    FOREIGN KEY (id_departemen) REFERENCES departemen(id)
);";

if (mysqli_query($conn, $sql)) {
    echo "Table Pegawai created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
